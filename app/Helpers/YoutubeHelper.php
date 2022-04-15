<?php


namespace App\Helpers;


trait YoutubeHelper
{
    public function getYoutubeIdFromUrl(string $url): string
    {
        if (str_starts_with($url, 'https://youtu.be')) {
            return explode('https://youtu.be/', $url)[1];
        }

        parse_str(parse_url($url, PHP_URL_QUERY), $array);
        return $array['v'];
    }
}
