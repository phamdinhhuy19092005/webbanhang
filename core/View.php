<?php 

namespace Core;

class View
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public static function make($path)
    {
        return new static($path);
    }

    public function render()
    {
        require_once $this->parsePath($this->path);
    }

    protected function parsePath($path)
    {
        $parsedPath = str_replace('.', DIRECTORY_SEPARATOR, $path);

        $fullPath = RESOURCE_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $parsedPath . '.html';
        
        if (file_exists($fullPath)) {
            return $fullPath;
        }

        throw new \Exception('View Not Found with path: ' . $parsedPath);
    }
}
