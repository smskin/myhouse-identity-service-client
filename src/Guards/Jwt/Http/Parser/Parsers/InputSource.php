<?php

namespace SMSkin\IdentityServiceClient\Guards\Jwt\Http\Parser\Parsers;

use Illuminate\Http\Request;
use SMSkin\IdentityServiceClient\Guards\Jwt\Contracts\Http\Parser;
use SMSkin\IdentityServiceClient\Guards\Jwt\Http\Parser\Traits\KeyTrait;

class InputSource implements Parser
{
    use KeyTrait;

    public function parse(Request $request): string|null
    {
        return $request->input($this->key);
    }
}
