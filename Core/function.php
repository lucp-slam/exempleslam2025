<?php

use Core\Database;
use Core\Router;

function navLink(string $label, string $routeName, ?string $active_class = null, ?string $non_active_class = null): string
{
    $url = Router::getInstance()->generate($routeName);
    $class = uriIs($url) ? $active_class : $non_active_class;

    return <<<EOL
    <a href="$url" class="$class">$label</a>
    EOL;
}

function uriIs($uri)
{
    return $_SERVER['REQUEST_URI'] == $uri;
}

function abort($code = 404, $msg = 'Page not found')
{
    http_response_code($code);
    include base_path('/view/error.view.php');
    exit();
}

function db(): Database
{
    // $config = include base_path('config/app.php');
    // $db = new Database($config['database']);

    return Database::getInstance();

    return $db;
}

function base_path($path)
{
    return BASE_PATH.$path;
}

function view($path, $attributes = [])
{
    $attributes['router'] = Router::getInstance();
    extract($attributes);
    include base_path('view/'.$path);
}
