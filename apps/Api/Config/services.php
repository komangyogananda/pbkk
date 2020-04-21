<?php

use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\View;

$di['dispatcher'] = function () use ($di){
  $eventsManager = $di->getShared('eventsManager');
  $dispatcher = new Dispatcher();
  $dispatcher->setEventsManager($eventsManager);
  $dispatcher->setDefaultNamespace("App\Api\Controllers");
  return $dispatcher;
};

$di['url']->setBaseUri(''.$config->application->baseUri.'');

$di['view'] = function () {
  $view = new View();
  $view->setViewsDir(__DIR__.'/../Views/Default/');
  $view->registerEngines(array(
    ".volt" => 'voltService'
  ));
  return $view;
};
