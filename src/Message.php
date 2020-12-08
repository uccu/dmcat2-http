<?php

namespace Uccu\Dmcat2Http;

use Exception;
use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\StreamInterface;

class Message implements MessageInterface
{

    public function getProtocolVersion(): string
    {
        return substr($_SERVER['SERVER_PROTOCOL'], -3);
    }

    public function withProtocolVersion($version): self
    {
        throw new Exception('not support the function: withProtocolVersion');
        return  $this;
    }

    public function getHeaders(): array
    {
        return getallheaders();
    }

    public  function hasHeader($name)
    {
        $headers = $this->getHeaders();
        return isset($headers[$name]) ? true : false;
    }

    public function getHeader($name)
    {
        return $this->getHeaders()[$name] ?? null;
    }

    public function getHeaderLine($name)
    {
    }

    public function withHeader($name, $value)
    {
    }

    public function withAddedHeader($name, $value)
    {
    }

    public function withoutHeader($name)
    {
    }

    public function getBody()
    {
    }

    public function withBody(StreamInterface $body)
    {
    }
}
