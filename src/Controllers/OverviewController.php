<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class OverviewController extends Controller {
   public function index() {
      $this->view('overview');
   }
}