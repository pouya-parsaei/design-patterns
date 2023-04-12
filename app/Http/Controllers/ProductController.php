<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Src\AbstractFactory\ProductPresenter\PresenterFactory;

class ProductController extends Controller
{
    public function __construct(private PresenterFactory $productPresenter)
    {

    }

    public function presentProduct(Request $request)
    {
        return $this->productPresenter->createProduct()->title();
    }
}
