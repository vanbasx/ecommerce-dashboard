<?php
$page_title = "Home";
include_once ROOT . '/views/includes/headers/store-header.php';
?>

<div class="pb-12">
   <?php
   include_once ROOT . '/views/includes/banner.php';
   ?>
</div>


<section class="mb-32">
   <h2 class="text-[32px] font-semibold texl-left pb-8 max-[380px]:text-[28px]">Featured Products</h2>
   <div class="grid items-stretch grid-cols-4 gap-5 max-[1160px]:grid-cols-3 max-[995px]:grid-cols-2 max-[700px]:grid-cols-1">
      <!-- CARD -->
      <?php
      include ROOT . '/views/includes/item.php';
      ?>
      <?php
      include ROOT . '/views/includes/item.php';
      ?>
      <?php
      include ROOT . '/views/includes/item.php';
      ?>
      <?php
      include ROOT . '/views/includes/item.php';
      ?>
      <?php
      include ROOT . '/views/includes/item.php';
      ?>
      <?php
      include ROOT . '/views/includes/item.php';
      ?>
      <?php
      include ROOT . '/views/includes/item.php';
      ?>
      <?php
      include ROOT . '/views/includes/item.php';
      ?>
      <!-- /CARD -->
   </div>
</section>


<?php
include_once ROOT . '/views/includes/footer.php';
?>