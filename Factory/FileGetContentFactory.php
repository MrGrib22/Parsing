<?php 

require_once 'Interface/Factory.php';
require_once 'Interface/ContentFetch.php';
require_once 'Fetch/FileContentFetch.php';

class FileGetContentFactory implements Factory{
    public function createContentFetch(): ContentFetch
    {
        return new FileContentFetch();
    }
}