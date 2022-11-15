<?php

namespace SMSkin\IdentityServiceClient\Guards\Jwt;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use SMSkin\IdentityServiceClient\Guards\Jwt\Http\Parser\Parser;
use SMSkin\IdentityServiceClient\Guards\Jwt\Http\Parser\Parsers\AuthHeaders;
use SMSkin\IdentityServiceClient\Guards\Jwt\Http\Parser\Parsers\Cookies;
use SMSkin\IdentityServiceClient\Guards\Jwt\Http\Parser\Parsers\InputSource;
use SMSkin\IdentityServiceClient\Guards\Jwt\Http\Parser\Parsers\QueryString;
use SMSkin\IdentityServiceClient\Guards\Jwt\Http\Parser\Parsers\RouteParams;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerParsers();

        $this->app->singleton(JWT::class, static fn($app) => (new JWT(
            $app[Parser::class]
        )));

        $this->registerGuard();
    }


    private function registerParsers()
    {
        $this->app->singleton(Parser::class, static function ($app) {
            $parser = new Parser(
                $app['request'],
                [
                    new AuthHeaders(),
                    new QueryString(),
                    new InputSource(),
                    new RouteParams(),
                    new Cookies(config('identity-service-client.parser.cookies.decrypt'))
                ]
            );

            $app->refresh('request', $parser, 'setRequest');

            return $parser;
        });
    }

    private function registerGuard()
    {
        $this->app['auth']->extend(config('identity-service-client.guards.jwt.driver.name'), static function ($app, $name, array $config) {
            $guard = new Guard(
                app(JWT::class),
                $app['auth']->createUserProvider($config['provider']),
                $app['request'],
                $app['events'],
                config('identity-service-client.guards.jwt.name')
            );

            $app->refresh('request', $guard, 'setRequest');

            return $guard;
        });

        config(['auth.guards.identity-service-client-jwt' => [
            'driver' => config('identity-service-client.guards.jwt.driver.name'),
            'provider' => 'users',
        ]]);
    }
}