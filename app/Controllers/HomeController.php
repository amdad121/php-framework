<?php

namespace App\Controllers;

use Amdadulhaq\PhpFramework\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('home', ['title' => 'Home']);
    }
}