<?php

namespace App\Kernel\Controller;

use App\Kernel\Http\Redirect;
use App\Kernel\Http\Request;
use App\Kernel\View\View;

abstract class Controller {

   private View $view;
   private Request $request;
   private Redirect $redirect;

   public function view(string $name) {
      $this->view->page($name);
   }

   public function setView(View $view) {
      $this->view = $view;
   }

   public function request() {
      return $this->request;
   }

   public function setRequest($request) {
      return $this->request = $request;
   }

   public function setRedirect($redirect) {
      return $this->redirect = $redirect;
   }

   public function redirect(string $url) {
      return $this->redirect->to($url);
   }
}