<?php

namespace MyHouse\IdentityServiceClient\Guards\Jwt\Http\Parser\Parsers;

use Illuminate\Http\Request;
use MyHouse\IdentityServiceClient\Guards\Jwt\Contracts\Http\Parser;
use MyHouse\IdentityServiceClient\Guards\Jwt\Http\Parser\Traits\KeyTrait;

class InputSource implements Parser
{
    use KeyTrait;

    public function parse(Request $request): ?string
    {
        return $request->input($this->key);
    }
}
