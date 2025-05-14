<?php

/**
 * @var Core\Router $router
 */
$router->get('/', 'index.php', 'index');
$router->get('/about', 'about.php', 'about');
$router->get('/contact', 'contact.php', 'contact');
$router->get('/localisation', 'localisation.php', 'localisation');

$router->get('/notre-equipe', 'screw/index.php', 'screw_index');
$router->get('/notre-equipe/[s:fname]', 'screw/show.php', 'screw_show');
