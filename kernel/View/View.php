<?php 

namespace App\Kernel\View;

class View {
   public function page(string $name) {
      include_once ROOT . "/views/pages/$name.php";
   }
}