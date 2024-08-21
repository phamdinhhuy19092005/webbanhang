<?php

namespace Core;

class App
{
    public function __construct()
    {
        $this->bootHelpers();
        $this->bootControllers();
        $this->bootRoutes();
        $this->bootProviders();
    }

    private function bootHelpers()
    {
        $file = APP_PATH . DIRECTORY_SEPARATOR . 'Helpers' . DIRECTORY_SEPARATOR . 'helpers.php';

        if (file_exists($file)) {
            require $file;
        }
    }

    private function bootRoutes()
    {
        $file = MAIN_PATH . DIRECTORY_SEPARATOR . 'routes' . DIRECTORY_SEPARATOR . 'web.php';

        if (file_exists($file)) {
            require $file;
        }
    }

    private function bootControllers()
    {
        $controllers = array_filter(scandir(APP_PATH . DIRECTORY_SEPARATOR . 'Controllers'), function ($controller) {
            return strpos($controller, 'Controller.php') !== false; // Kiểm tra chính xác xem file có đuôi 'Controller.php' hay không
        });

        foreach ($controllers as $controller) {
            $file = APP_PATH . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . $controller;

            if (file_exists($file)) {
                echo "Requiring: " . $file . "<br>"; // Thêm dòng này để debug
                require $file;
            } else {
                echo "File not found: " . $file . "<br>"; // Thêm dòng này để debug
            }
        }
    }

    private function bootProviders()
    {
        require provider('RouteProvider');
    }
}

new App;
