<?php

namespace Core\Providers;

use Core\Route;
use Error;

class RouteProvider
{
    public function __construct()
    {
        [$controller, $method] = $this->analyseRoute();

        // dd(
        //     class_exists($controller) ? 'yes' : 'no'
        // );

        /**
         * 1 class này có tồn tại -> true
         * 2 tên đúng chưa -> true
         */

        if (! class_exists($controller)) {
            throw new Error('Controller not found: ' . $controller);
        }

        if (! method_exists($controller, $method)) {
            throw new Error("Method '$method' not found in controller '$controller'.");
        }

        $controllerInstance = new $controller;

        return $controllerInstance->{$method}();
    }

    public function analyseRoute()
    {
        $routes = Route::$routes;

        $reqURI = $_SERVER['REQUEST_URI'];
        // echo "Request URI: " . $reqURI . "<br>";

        $parsedReqURI = $this->parseReqURI($reqURI);
        // echo "Parsed URI: " . $parsedReqURI . "<br>";

        if (!isset($routes[$parsedReqURI])) {
            throw new Error("No route matched for URI: " . $parsedReqURI);
        }

        $resource = $routes[$parsedReqURI];

        return [$resource[0], $resource[1]];
    }


    public function parseReqURI($reqURI)
    {
        $isExisted = strpos($reqURI, Route::$rootPath) !== false;

        if ($isExisted) {
            return $reqURI;
        }

        return Route::$rootPath . $reqURI;
    }
}

new RouteProvider;
