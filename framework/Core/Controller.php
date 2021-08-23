<?php

namespace Framework\Core;

class Controller
{
    public static function redirect(string $url): void
    {
        ob_start();
        header("Location:$url");
        ob_end_flush();
    }
}
