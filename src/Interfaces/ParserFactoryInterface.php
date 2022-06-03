<?php

namespace Src\Interfaces;

interface ParserFactoryInterface
{
    public static function create(string $url): ParserInterface;
}