<?php
$di['router'] = function () use (
  $default_module,
  $modules,
  $di,
  $config
) {
  $router = new \Phalcon\Mvc\Router(false);
  $router->clear();

  $router->add('/', array(
    'module' => $default_module,
    'controller' => 'index',
    'action' => 'index'
  ));

  $router->add('/:controller/:params', array(
    'module' => $default_module,
    'controller' => 1, // Artinya parameter pertama (/:controller)
    'action' => 'index', // Default action diarahkan ke index
    'params' => 2, // artinya parameter kedua (/:params)
  ));

  $router->add('/:controller/:action/:params', array(
    'module' => $default_module,
    'controller' => 1,
    'action' => 2,
    'params' => 3
  ));

  foreach ($modules as $moduleName => $module){
    if ($default_module == $moduleName){
      continue;
    }else{
      $router->add('/'. $moduleName .'/:params', array(
        'module' => $moduleName,
        'controller' => 'index', // Default controller diarahkan ke IndexController
        'action' => 'index',  // Default action diarahkan ke index di dalam IndexController
        'params' => 1
      ));

      $router->add('/'. $moduleName .'/:controller/:params', array(
        'module' => $moduleName,
        'controller' => 1, // Artinya parameter pertama (/:controller)
        'action' => 'index', // Default action diarahkan ke index
        'params' => 2, // artinya parameter kedua (/:params)
      ));


      $router->add('/'. $moduleName .'/:controller/:action/:params', array(
        'module' => $moduleName,
        'controller' => 1,
        'action' => 2,
        'params' => 3
      ));

    }
  }

//  var_dump($router);

  return $router;
};
