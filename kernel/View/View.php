<?php 

namespace App\Kernel\View;

use App\Kernel\Session\Session;

class View {

   public function __construct(
      private Session $session
   ) {}

   public function page(string $name) {

      $viewPath = ROOT . "/views/pages/$name.php";

      if(!file_exists($viewPath)) {
         throw new \Exception("View $name not found.");
      }

      extract($this->defaultData());

      include_once ROOT . "/views/pages/$name.php";
   }

   private function defaultData() {
      return [
         'view' => $this,
         'session' => $this->session
      ];
   }
}