<?php

namespace App\Services;

class Invitation
{
    protected string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function parse()
    {
        try {
            $bytes = sodium_base642bin(
                $this->url,
                SODIUM_BASE64_VARIANT_URLSAFE
            );
        } catch (\SodiumException $e) {
            return false;
        }

        return json_decode($bytes, true);
    }
}
