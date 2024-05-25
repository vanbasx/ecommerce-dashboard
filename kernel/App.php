<?php

namespace App\Kernel;

use App\Kernel\Container\Container;
use App\Kernel\Router\Router;
use App\Kernel\Http\Request;

class App {

   private Container $container;

   public function __construct() {
      $this->container = new Container();
   }

   public function run() {
      $this->container
         ->router
         ->dispatch(
            $this->container->request->uri(),
            $this->container->request->method()
         );
   }
}