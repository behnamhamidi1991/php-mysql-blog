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
function loadView($name, $data = [])
{
    extract($data);
    $viewPath = basePath("App/views/{$name}.view.php");

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
    $partialPath = basePath("App/views/partials/{$name}.php");

    if ($partialPath) {
        require $partialPath;
    } else {
        echo "Partial {$name} does not exist!";
    }
}

/**
 * Inspect (a) value(s)
 * 
 * @param string $value
 * @return void
 */
function inspect($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

/**
 * Inspect (a) value(s) and die
 * 
 * @param string $value
 * @return void
 */
function inspectAndDie($value) 
{
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";
}