<?php

namespace Amdadulhaq\PhpFramework;

class Application
{
    public function run(): void
    {
        include __DIR__.'/../config/config.php';
        include __DIR__.'/../app/routes.php';
    }
}