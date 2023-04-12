<?php

namespace Src\AbstractFactory\ProductPresenter;

interface PresenterFactory
{
    public function createProduct(): Product;
}
