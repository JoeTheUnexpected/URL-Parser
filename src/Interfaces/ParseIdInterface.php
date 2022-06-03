<?php

namespace Src\Interfaces;

interface ParseIdInterface extends ParserInterface
{
    public function getId(): string;
}