<?php

use Phalcon\Mvc\Router;

$router = new Router();
$router->clear();

$router->add('/', array(
  'module' => 'frontend',
  'controller' => 'index',
  'action' => 'index'
));

return $router;