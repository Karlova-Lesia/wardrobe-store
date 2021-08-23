<?php

namespace Framework\Core;

use App\Config\Config;
use Exception;

class Controller
{
    protected function redirect(string $url): void
    {
        ob_start();
        header("Location:$url");
        ob_end_flush();
    }
}
