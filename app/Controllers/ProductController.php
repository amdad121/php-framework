<?php

namespace App\Controllers;

use Amdadulhaq\PhpFramework\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    private Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index(): void
    {
        $products = $this->product->getAll();

        $this->render('products', ['title' => 'Products', 'product' => $products]);
    }
}