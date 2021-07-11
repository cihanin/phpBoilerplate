<?php


namespace Core;

use Buki\Router\Router;

class Bootstrap
{
    public $router;

    public function __construct()
    {
        $this->router = new Router([
            'paths'=> [
                'controllers' => 'app/controllers'
            ],
            'namespaces' => [
                'controllers' => 'App\Controllers'
            ]
        ]);
    }

    public function __destruct(){
        $this->router->run();
    }

}