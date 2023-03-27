<?php

namespace App\Services\Spatie;

use Psr\Http\Message\UriInterface;

class CustomUri implements UriInterface
{

    protected string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getScheme()
    {
        // TODO: Implement getScheme() method.
    }

    public function getAuthority()
    {
        // TODO: Implement getAuthority() method.
    }

    public function getUserInfo()
    {
        // TODO: Implement getUserInfo() method.
    }

    public function getHost()
    {
        // TODO: Implement getHost() method.
    }

    public function getPort()
    {
        // TODO: Implement getPort() method.
    }

    public function getPath()
    {
        // TODO: Implement getPath() method.
    }

    public function getQuery()
    {
        // TODO: Implement getQuery() method.
    }

    public function getFragment()
    {
        // TODO: Implement getFragment() method.
    }

    public function withScheme($scheme)
    {
        // TODO: Implement withScheme() method.
    }

    public function withUserInfo($user, $password = null)
    {
        // TODO: Implement withUserInfo() method.
    }

    public function withHost($host)
    {
        // TODO: Implement withHost() method.
    }

    public function withPort($port)
    {
        // TODO: Implement withPort() method.
    }

    public function withPath($path) : mixed
    {
        return $this->url . $path;
    }

    public function withQuery($query)
    {
        // TODO: Implement withQuery() method.
    }

    public function withFragment($fragment)
    {
        // TODO: Implement withFragment() method.
    }

    public function __toString()
    {
        return $this->url;
    }
}
