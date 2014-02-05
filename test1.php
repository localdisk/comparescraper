<?php

require_once './vendor/autoload.php';
require_once './profiler.php';
$html = \SimpleHtmlDom\str_get_html(file_get_contents('http://localdisk.hatenablog.com/'));
$nodes = $html->find('h1.entry-title');
foreach ($nodes as $node) {
    echo trim($node->text()) . "\n";
}
$html->clear();
