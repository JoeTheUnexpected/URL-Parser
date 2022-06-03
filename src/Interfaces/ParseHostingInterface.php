<?php

namespace Src\Interfaces;

interface ParseHostingInterface extends ParserInterface
{
    public function getHostingName(): string;
}