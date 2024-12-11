<?php

namespace app\core;

class Application {
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $reponse;
    public static Application $app;
    public function __construct($rootPath)
    {   
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->reponse = new Response();
        $this->router = new Router($this->request, $this->reponse);
    }
    public function run(){
       echo $this->router->resolve();
    }
}