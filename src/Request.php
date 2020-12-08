<?php

namespace Uccu\Dmcat2Http;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

class Request extends Message implements RequestInterface
{

    public function getRequestTarget()
    {
    }

    public function withRequestTarget($requestTarget)
    {
    }

    public function getMethod()
    {
    }

    public function withMethod($method)
    {
    }

    public function getUri()
    {
    }

    public function withUri(UriInterface $uri, $preserveHost = false)
    {
    }
}
