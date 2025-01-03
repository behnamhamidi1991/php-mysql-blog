<?php

namespace Framework;

use App\Controllers\ErrorController;

class Router {
    protected $routes = [];

    /**
     * 
     * Register Route
     * 
     * @param string $method
     * @param string $uri
     * @param string $controller
     * @return void
     */
    function registerRoute($method, $uri, $action) {
            list($controller, $controllerMethod) = explode('@', $action);
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod
        ]; 
    }

    /**
     * Get Route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function get($uri, $controller) 
    {
        $this->registerRoute('GET', $uri, $controller);
    }

    /**
     * Get Route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function post($uri, $controller) 
    {
        $this->registerRoute('POST', $uri, $controller);
    }

    /**
     * Get Route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function put($uri, $controller) 
    {
        $this->registerRoute('PUT', $uri, $controller);
    }

    /**
     * Get Route
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function delete($uri, $controller) 
    {
        $this->registerRoute('DELETE', $uri, $controller);
    }

    /**
     * 
     * Route the request
     *
     * @param string $uri
     * @param string $method
     * @return void
     */
    public function route($uri, $method) 
    {
        foreach($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                // Extract controller and controller method
                $controller = 'App\\Controllers\\' . $route['controller'];
                $controllerMethod = $route['controllerMethod'];

                // Instantiate the controller and call the method
                $controllerInstance = new $controller();
                $controllerInstance->$controllerMethod();
                return;
            }
        }
        ErrorController::notFound();
    }
}