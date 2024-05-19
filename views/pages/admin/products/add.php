<?php
$page_title = "Add Product";
include_once ROOT . '/views/includes/headers/dashboard-header.php';
?>

<?php
$title = "Create Product";
$sub_title = "Add a new product";
include_once ROOT . '/views/includes/titles/title-nobtn.php';
?>

<div class="">
   <form>
      <div class="flex flex-col">
         <label for="">Images</label>
         <input type="file">
      </div>
   </form>
</div>


<?php
include_once ROOT . '/views/includes/footer.php';
?>