<?php

namespace App\Models;

use Amdadulhaq\PhpFramework\Model;

class Product extends Model
{
    public function getAll(): array
    {
        // Data from database
        return $this->query('SELECT * FROM products');
    }
}