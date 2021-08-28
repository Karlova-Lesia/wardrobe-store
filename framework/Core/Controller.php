<?php

namespace Framework\Core;

class Controller
{
    public function redirect(string $url): void
    {
        ob_start();
        header("Location:$url");
        ob_end_flush();
    }

    public function getPost(): bool
    {
        return ($_SERVER['REQUEST_METHOD'] == 'POST');
    }
}
