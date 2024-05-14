<?php

namespace App\Router;

class Router {
   public function dispatch(string $uri){
      $routes = $this->getRoutes();

      $routes[$uri]();
   }

   private function getRoutes() {
      return require_once ROOT . '/config/routes.php';
   }
}