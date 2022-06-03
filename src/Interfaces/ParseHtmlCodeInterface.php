<?php

namespace Src\Interfaces;

interface ParseHtmlCodeInterface extends ParserInterface
{
    public function getHtmlCode(): string;
}