<?php

use Phalcon\Mvc\Router;

$router = new Router();
$router->clear();

$router->add('/', array(
  'module' => 'backoffice',
  'controller' => 'index',
  'action' => 'index'
));

return $router;