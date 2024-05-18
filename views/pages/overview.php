<?php
$page_title = "Overview";
include_once ROOT . '/views/includes/headers/dashboard-header.php';
?>

<div class="border-b-[1px] border-[#DFEAF2] pb-6">
   <h1 class="text-[32px] font-semibold">Dashboard</h1>
   <p class="text-[14px] text-[#828282] font-medium">Overview of your store</p>
</div>

<div class="my-6">
   <?php
   include_once ROOT . '/views/includes/statistics.php';
   ?>
</div>

<?php
include_once ROOT . '/views/includes/footer.php';
?>