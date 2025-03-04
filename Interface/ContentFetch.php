<?php

interface ContentFetch
{
    public function fetch(string $url): string;
}
