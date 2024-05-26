<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Validator\Validator;

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
      ]);

      if (! $validation) {
         dd('Validation failed', $this->request()->errors());
      }

      dd('Validation passed');
   }
}