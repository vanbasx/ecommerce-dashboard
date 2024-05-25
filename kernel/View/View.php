<?php 

namespace App\Kernel\View;

class View {
   public function page(string $name) {

      $viewPath = ROOT . "/views/pages/$name.php";

      if(!file_exists($viewPath)) {
         throw new \Exception("View $name not found.");
      }

      extract([
         'view' => $this
      ]);

      include_once ROOT . "/views/pages/$name.php";
   }
}