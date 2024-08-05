<?php 

function route($controller, $method) {
    echo $controller . $method;
}

function dd(...$vars) {
    echo "<pre>";
    foreach ($vars as $var) {
        print_r($var);
    }
    echo "</pre>";
    die();
}

function provider($name)
{
    $file = MAIN_PATH . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'Providers' . DIRECTORY_SEPARATOR . $name . '.php';

    if (file_exists($file)) {
        return $file;
    }

    throw new Error('Provider Name not found:' . $file);
}