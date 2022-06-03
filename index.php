<?php

require_once 'autoload.php';

$urls = [
    'https://www.youtube.com/watch?v=G1IbRujko-A',
    'https://youtu.be/homqyBxHwis',
    'https://vimeo.com/225408543',
];

echo '<pre>';
foreach ($urls as $url) {
    try {
        $parser = \Src\Classes\Factories\ParserFactory::create($url);
        echo "data for $url" . PHP_EOL;
        echo 'Hosting name: ' . $parser->getHostingName() . PHP_EOL;
        echo 'Video id: ' . $parser->getId() . PHP_EOL;
        echo 'HTML code for iframe: ' . $parser->getHtmlCode() . PHP_EOL . PHP_EOL;
    } catch (\Exception $e) {
        echo $e->getMessage() . PHP_EOL . PHP_EOL;
    }
}
echo '</pre>';
