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
        // Read the content of the template file
        $content = file_get_contents($this->parsePath($this->path));

        // Process the content to replace {{ }} with PHP echo statements
        $content = $this->processTemplate($content);

        // Evaluate the processed content
        eval('?>' . $content);
    }

    public function parsePath($path)
    {
        $parsedPath = str_replace('.', DIRECTORY_SEPARATOR, $path);

        $fullPath = RESOURCE_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $parsedPath . '.html';

        if (file_exists($fullPath)) {
            return $fullPath;
        }

        throw new \Exception('View Not Found with path: ' . $parsedPath);
    }

    private function processTemplate($content)
    {
        // Replace {{ expression }} with <?php echo expression;
        return preg_replace('/\{\{\s*(.+?)\s*\}\}/', '<?php echo $1; ?>', $content);
    }
}
