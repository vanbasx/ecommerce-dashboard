<?php
/**
 * @var \App\Kernel\Session\Session $session
 */
?>

<?php
$page_title = "Add Product";
include_once ROOT . '/views/includes/headers/dashboard-header.php';
?>

<?php
$title = "Create Product";
$sub_title = "Add a new product";
include_once ROOT . '/views/includes/titles/title-nobtn.php';
?>

<div class="mb-6">
   <form action="/ecommerce-dashboard/public/admin/products/add" method="post">
      <div class="grid gap-x-5 gap-y-4 grid-cols-3 items-center max-w-[925px] mb-6 max-[900px]:grid-cols-2 max-[500px]:grid-cols-1">

         <!-- INPUT -->
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <div class="flex items-center justify-between">
               <label for="name" class="text-[14px] font-medium">Name</label>
               <?php if ($session->has('name')) { ?>
               <span class="text-[#EE0000] text-[13px] font-medium"><?= $session->getFlash('name')[0] ?></span>
               <?php } ?>
            </div>
            <input type="text" name="name" id="name" class="px-4 py-3 border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] font-medium placeholder:text-[#828282] outline-blue-500" placeholder="Enter product name">
         </div>
         <!-- /INPUT -->
         
         <!-- INPUT -->
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <div class="flex items-center justify-between">
               <label for="price" class="text-[14px] font-medium">Price</label>
               <?php if ($session->has('price')) { ?>
               <span class="text-[#EE0000] text-[13px] font-medium"><?= $session->getFlash('price')[0] ?></span>
               <?php } ?>
            </div>
            <input type="text" name="price" id="price" class="px-4 py-3 border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] font-medium placeholder:text-[#828282] outline-blue-500" placeholder="Enter product price">
         </div>
         <!-- /INPUT -->

         <!-- DROPDOWN -->
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <label for="category" class="text-[14px] font-medium">Category</label>
            <div class="relative">
               <svg class="absolute right-4 top-[21px]" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 6L11 1" stroke="#828282" stroke-width="1.5" stroke-linecap="round"/></svg>
               <select name="category" id="category" class="appearance-none px-4 py-3 border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] font-medium outline-blue-500 w-full">
                  <option selected disabled>Choose a category</option>
                  <option value="">Suits</option>
                  <option value="">Glasses</option>
                  <option value="">Watches</option>
               </select>
            </div>
         </div>
         <!-- /DROPDOWN -->

         <!-- DROPDOWN -->
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <label for="size" class="text-[14px] font-medium">Size</label>
            <div class="relative">
               <svg class="absolute right-4 top-[21px]" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 6L11 1" stroke="#828282" stroke-width="1.5" stroke-linecap="round"/></svg>
               <select name="size" id="size" class="appearance-none px-4 py-3 border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] font-medium outline-blue-500 w-full">
                  <option selected disabled>Choose a size</option>
                  <option value="">Small</option>
                  <option value="">Medium</option>
                  <option value="">Large</option>
               </select>
            </div>
         </div>
         <!-- /DROPDOWN -->

         <!-- DROPDOWN -->
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <label for="color" class="text-[14px] font-medium">Color</label>
            <div class="relative">
               <svg class="absolute right-4 top-[21px]" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 6L11 1" stroke="#828282" stroke-width="1.5" stroke-linecap="round"/></svg>
               <select name="color" id="color" class="appearance-none px-4 py-3 border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] font-medium outline-blue-500 w-full">
                  <option selected disabled>Choose a color</option>
                  <option value="">White</option>
                  <option value="">Black</option>
                  <option value="">Gray</option>
               </select>
            </div>
         </div>
         <!-- /DROPDOWN -->

         <!-- CHECKBOX -->
         <div class="p-4 bg-white border-[1px] border-[#DFEAF2] rounded-[8px] max-[900px]:max-w-full">
            <div class="pb-1 flex items-center gap-2">
               <input type="checkbox" name="featured" id="featured" class="w-[15px] h-[15px]">
               <label for="featured" class="text-[14px] font-medium select-none">Featured</label>
            </div>
            <p class="text-[14px] text-[#828282] font- px-[24px]">This product will appear on the home page.</p>
         </div>
         <!-- /CHECKBOX -->

         <!-- CHECKBOX -->
         <div class="p-4 bg-white border-[1px] border-[#DFEAF2] rounded-[8px] max-[900px]:max-w-full">
            <div class="pb-1 flex items-center gap-2">
               <input type="checkbox" name="archived" id="archived" class="w-[15px] h-[15px]">
               <label for="archived" class="text-[14px] font-medium select-none">Archived</label>
            </div>
            <p class="text-[14px] text-[#828282] font- px-[24px]">This product will not appear anywhere in the store.</p>
         </div>
         <!-- /CHECKBOX -->

      </div>
      <button type="clear" class="py-[10px] px-8 rounded-[8px] bg-black text-white text-[15px] font-medium max-[500px]:w-full hover:bg-[#1D1D1D] transition-colors duration-200">Create</button>
   </form>
</div>

<?php
include_once ROOT . '/views/includes/footer.php';
?>

