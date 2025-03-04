<?php

class FileContentFetch implements ContentFetch
{
    public function fetch(string $url): string
    {
        return file_get_contents($url);
    }
}
