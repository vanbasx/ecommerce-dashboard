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

      $validation = $this->request()->validate([
         'name' => ['required', 'min:3', 'max:50'],
         'price' => ['required', 'min:1', 'max:5'],
         'category' => ['required'],
         'size' => ['required'],
         'color' => ['required'],
      ]);

      if (! $validation) {
         foreach ($this->request()->errors() as $field => $errors) {
            $this->session()->set($field, $errors);
         }

         $this->redirect('/ecommerce-dashboard/public/admin/products/add');
      }

      dd('Validation passed');
   }
}