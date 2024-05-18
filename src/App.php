<?php

namespace App;

use App\Router\Router;
use App\Http\Request;

class App {
   public function run() {
      
      $router = new Router();
      $request = Request::createFormGlobals();

      $router->dispatch($request->uri(), $request->method());
   }
}