<?php

namespace App\Backoffice;

use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\DiInterface;

class Module implements ModuleDefinitionInterface
{

  public function registerAutoloaders(DiInterface $dependencyInjector = null)
  {
  }

  public function registerServices(DiInterface $dependencyInjector)
  {
    $config = include __DIR__ . '/Config/config.php';
    $di['config'] = $config;
    include __DIR__ . 'Config/services.php';
  }
}
