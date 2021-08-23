<?php

namespace Framework\Core;

class Controller
{
    protected function redirect(string $url): void
    {
        ob_start();
        header("Location:$url");
        ob_end_flush();
    }
}
