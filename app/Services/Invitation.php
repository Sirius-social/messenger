<?php


namespace App\Services;


class Invitation
{
    protected string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @throws \SodiumException
     */
    public function parse()
    {
        $bytes = sodium_base642bin($this->url, SODIUM_BASE64_VARIANT_URLSAFE);
        return json_decode($bytes, true);
    }
}
