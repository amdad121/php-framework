<?php

namespace Amdadulhaq\PhpFramework;

class Controller
{
    public function render($view, $data = []): void
    {
        extract($data);
        include "../app/Views/{$view}.php";
    }
}