<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class ProfileController extends Controller {
   public function index() {
      $this->view('admin/profile');
   }

   public function add() {
      $this->view('admin/profile/add');
   }
}