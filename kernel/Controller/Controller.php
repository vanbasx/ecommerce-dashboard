<?php

namespace App\Kernel\Controller;

use App\Kernel\Http\Redirect;
use App\Kernel\Http\Request;
use App\Kernel\Session\Session;
use App\Kernel\View\View;

abstract class Controller {

   private View $view;
   private Request $request;
   private Redirect $redirect;
   private Session $session;

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
      $this->request = $request;
   }

   public function setRedirect($redirect) {
      $this->redirect = $redirect;
   }

   public function redirect(string $url) {
      return $this->redirect->to($url);
   }

   public function session() {
      return $this->session;
   }

   public function setSession(Session $session) {
      $this->session = $session;
   }
}