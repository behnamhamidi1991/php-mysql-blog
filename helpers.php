<?php


/**
 * 
 * Get the mein route
 * 
 * @param string $path
 * @return string
 */
function basePath($path) 
{
    return __DIR__ . '/' . $path;
}

/**
 * 
 * Load a view
 * 
 * @param string $name
 * @return void
 */
function loadView($name)
{
    $viewPath = basePath("views/{$name}.view.php");

    if ($viewPath) {
        require $viewPath;
    } else {
        echo "Path {$name} does not exist!";
    }
}

/**
 * 
 * Load a partial
 * 
 * @param string $name
 * @return void
 */
function loadPartial($name)
{
    $partialPath = basePath("views/partials/{$name}.php");

    if ($partialPath) {
        require $partialPath;
    } else {
        echo "Partial {$name} does not exist!";
    }
}