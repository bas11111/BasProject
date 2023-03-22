<?php

class Console
{
    public static function error(string $text)
    {
        echo "\e[0;31m$text\e[0m\n";
    }

    public static function succes(string $text)
    {
        echo "\e[0;32m$text\e[0m\n";
    }

    public static function info(string $text)
    {
        echo "\e[0;34m$text\e[0m\n";
    }
}