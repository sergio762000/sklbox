<?php

namespace App;


class Application
{
    private $router;
    private $request;

    public function __construct(Router $router)
    {
        $this->request = $_SERVER['REQUEST_URI'];
        $this->router = $router;

    }

    public function run()
    {
        session_start();
        setcookie('sessionId', session_id());
        if (empty($_SESSION['item'])) {
            $_SESSION['item'][1] = [];
        }
        $this->router->dispatch($this->request);
    }

}
