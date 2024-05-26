<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class ProductsController extends Controller {
   public function index() {
      $this->view('admin/products');
   }

   public function add() {
      $this->view('admin/products/add');
   }

   public function store() {
      dd($_POST);

      dd('store');
   }
}