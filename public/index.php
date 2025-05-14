<?php

const BASE_PATH = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR;

require BASE_PATH.'vendor/autoload.php';
include BASE_PATH.'Core/function.php';

include base_path('bootstrap.php');

/** @var Core\Router $router */
require $router->start();
