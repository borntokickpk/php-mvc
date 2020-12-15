<?php 

namespace app\core;

class Application
{
    public Router $router;
    public Request $request;
    public static string $ROOT_PATH;
    public static Application $app;
    public function __construct($rootPath)
    {
        self::$ROOT_PATH = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}