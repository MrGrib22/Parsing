<?php

require_once 'Interface/ContentFetch.php';

class CurlContentFetch implements ContentFetch
{
    public function fetch(string $url): string
    {
        $init = curl_init();
        curl_setopt($init, CURLOPT_URL, $url);
        curl_setopt($init, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($init);
        curl_close($init);

        return $output;
    }
}
