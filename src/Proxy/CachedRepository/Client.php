<?php

namespace Src\Proxy\CachedRepository;

class Client
{
    public function __construct(private ProductRepositoryInterface $productRepository)
    {

    }
}
