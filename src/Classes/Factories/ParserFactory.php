<?php

namespace Src\Classes\Factories;

use Src\Classes\Parsers\ShortYoutubeParser;
use Src\Classes\Parsers\VimeoParser;
use Src\Classes\Parsers\YoutubeParser;
use Src\Interfaces\ParserFactoryInterface;
use Src\Interfaces\ParserInterface;

class ParserFactory implements ParserFactoryInterface
{
    public static function create(string $url): ParserInterface
    {
        $parts = parse_url($url);

        return match ($parts['host']) {
            'www.youtube.com' => new YoutubeParser($url),
            'youtu.be' => new ShortYoutubeParser($url),
            'vimeo.com' => new VimeoParser($url),
            default => throw new \Exception("undefined host: {$parts['host']}"),
        };
    }
}