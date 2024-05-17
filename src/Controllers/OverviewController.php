<?php

namespace App\Controllers;

class OverviewController {
   public function index() {
      include_once ROOT . '/views/pages/overview.php';
   }
}