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
      // dd($this->session());

      $validation = $this->request()->validate([
         'name' => ['required', 'min:3', 'max:50'],
      ]);

      if (! $validation) {
         $this->redirect('/ecommerce-dashboard/public/admin/products/add');
      }

      dd('Validation passed');
   }
}