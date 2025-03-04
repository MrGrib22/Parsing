<?php

require_once 'Interface/Factory.php';
require_once 'Fetch/CurlContentFetch.php';

class CurlContentFactory implements Factory
{
    public function createContentFetch(): ContentFetch
    {
        return new CurlContentFetch();
    }
}
