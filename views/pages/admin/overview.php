<?php
$page_title = "Overview";
include_once ROOT . '/views/includes/headers/dashboard-header.php';
?>

<?php
$title = "Dashboard";
$sub_title = "Overview of your store";
include_once ROOT . '/views/includes/titles/title-nobtn.php';
?>

<div class="my-6">
   <?php
   include_once ROOT . '/views/includes/statistics.php';
   ?>
</div>

<?php
include_once ROOT . '/views/includes/footer.php';
?>