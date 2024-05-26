<?php

namespace App\Kernel\Container;

use App\Kernel\Router\Router;
use App\Kernel\Http\Request;
use App\Kernel\View\View;

class Container {
   public readonly Request $request;
   public readonly Router $router;

   public readonly View $view;

   public function __construct() {
      $this->registerServeces();
   }

   private function registerServeces() {

      $this->request = Request::createFormGlobals();
      $this->view = new View();
      $this->router = new Router($this->view, $this->request);

   }
}