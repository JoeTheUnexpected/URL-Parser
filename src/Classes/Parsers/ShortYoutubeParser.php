<?php

namespace Src\Classes\Parsers;

use Src\Interfaces\ParseHostingInterface;
use Src\Interfaces\ParseHtmlCodeInterface;
use Src\Interfaces\ParseIdInterface;

class ShortYoutubeParser implements ParseHostingInterface, ParseIdInterface, ParseHtmlCodeInterface
{
    public function __construct(
        private string $url
    ) {}

    public function getHostingName(): string
    {
        return 'Youtube';
    }

    public function getHtmlCode(): string
    {
        return "<iframe src=\"{$this->url}\" height=\"200\" width=\"300\"></iframe>";
    }

    public function getId(): string
    {
        $parts = parse_url($this->url);

        return substr($parts['path'], 1);
    }
}