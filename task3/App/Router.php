<?php

namespace App;


class Router
{
    private $route;

    public function dispatch($url)
    {
        if (array_key_exists($url, $this->route)) {
            call_user_func(array((new $this->route[$url][0]), $this->route[$url][1]));
        } else {
            throw new \BadMethodCallException('Undefined method');
        }
    }

    public function get($url, array $array)
    {
        $this->route[$url] = $array;
    }

    public function post($url, array $array)
    {
        $this->route[$url] = $array;
    }

}
