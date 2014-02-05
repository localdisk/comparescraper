<?php

require_once './vendor/autoload.php';
require_once './profiler.php';

$client = new \Goutte\Client;
$crawler = $client->request('GET', 'http://localdisk.hatenablog.com/');
$crawler->filter('h1.entry-title')->each(function($node)
{
    echo trim($node->text()) . "\n";
});
