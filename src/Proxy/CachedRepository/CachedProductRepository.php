<?php

namespace Src\Proxy\CachedRepository;

use Illuminate\Cache\Repository;

class CachedProductRepository implements ProductRepositoryInterface
{

    public function __construct(
        private ProductRepositoryInterface $productRepository,
        private Repository                 $cache
    )
    {

    }

    public function all()
    {
        $result = $this->cache->get('products.all');

        if (is_null($result)) {
            $result = $this->productRepository->all();
            $this->cache->set('products.all', $result);
        }

        return $result;
    }
}
