<?php

namespace Src\Builder\RequestBuilder;

class RequestBuilder
{

    private string $uri;

    private string $method;

    private array $headers;

    private string $agent;

    private array $data;

    public static function forge(): RequestBuilder
    {
        return new RequestBuilder;
    }

    public function withUri(string $uri): RequestBuilder
    {
        $this->uri = $uri;

        return $this;
    }

    public function withMethod(string $method): RequestBuilder
    {
        $this->method = $method;

        return $this;
    }

    public function withHeaders(array $headers): RequestBuilder
    {
        $this->headers = $headers;

        return $this;
    }

    public function withAgent(string $agent): RequestBuilder
    {
        $this->agent = $agent;

        return $this;
    }

    public function withData(array $data): RequestBuilder
    {
        $this->data = $data;

        return $this;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getAgent(): string
    {
        return $this->agent;
    }

    public function getData():array
    {
        return $this->data;
    }

    public function build(): Request
    {
        return new Request($this);
    }
}
