<?php

namespace Src\Builder\RequestBuilder;

class Request
{
    private string $uri;

    private string $method;

    private array $headers;

    private string $agent;

    private array $data;

    public function __construct(RequestBuilder $builder)
    {
        $this->uri = $builder->getUri();

        $this->method = $builder->getMethod();

        $this->headers = $builder->getHeaders();

        $this->agent = $builder->getAgent();

        $this->data = $builder->getData();
    }

    public function run()
    {
        $request = curl_init($this->uri);

        //...

        return null;
    }
}
