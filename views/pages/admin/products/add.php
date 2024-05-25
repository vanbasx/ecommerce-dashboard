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
   <form>
      <div class="grid gap-x-5 gap-y-4 grid-cols-3 items-center max-w-[925px] mb-6 max-[900px]:grid-cols-2 max-[500px]:grid-cols-1">
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <label for="name" class="text-[14px] font-medium">Name</label>
            <input type="text" id="name" class="px-4 py-3 border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] font-medium placeholder:text-[#828282] outline-blue-500" placeholder="Enter product name">
         </div>
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <label for="price" class="text-[14px] font-medium">Price</label>
            <input type="text" id="price" class="px-4 py-3 border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] font-medium placeholder:text-[#828282] outline-blue-500" placeholder="Enter product price">
         </div>
         <!-- DROPDOWN -->
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <label for="category" class="text-[14px] font-medium">Category</label>
            <div class="dropdown-js relative">
               <button type="button" class="select-js relative w-full h-[48.5px] px-4 py-3 bg-white border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] text-left font-medium outline-blue-500">
                  <span class="selected-js"></span>
                  <svg class="absolute right-4 top-[21px]" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 6L11 1" stroke="#828282" stroke-width="1.5" stroke-linecap="round"/></svg>
               </button>
               <ul class="select-menu-js absolute bg-white w-full mt-2 shadow-lg py-[10px] px-3 border-[1px] border-[#DFEAF2] rounded-[8px] flex flex-col gap-1 scale-0 transition-all duration-200 z-[1]">
                  <li class="text-left py-[6px] px-2 text-[14px] font-medium cursor-pointer rounded-[4px] hover:bg-[#DFEAF2] transition-colors duration-200">Suits</li>
                  <li class="text-left py-[6px] px-2 text-[14px] font-medium cursor-pointer rounded-[4px] hover:bg-[#DFEAF2] transition-colors duration-200">Glasses</li>
                  <li class="text-left py-[6px] px-2 text-[14px] font-medium cursor-pointer rounded-[4px] hover:bg-[#DFEAF2] transition-colors duration-200">Whatches </li>
               </ul>
            </div>
         </div>
         <!-- /DROPDOWN -->

         <!-- DROPDOWN -->
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <label for="size" class="text-[14px] font-medium">Size</label>
            <div class="dropdown-js relative">
               <button type="button" class="select-js relative w-full h-[48.5px] px-4 py-3 bg-white border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] text-left font-medium outline-blue-500">
                  <span class="selected-js"></span>
                  <svg class="absolute right-4 top-[21px]" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 6L11 1" stroke="#828282" stroke-width="1.5" stroke-linecap="round"/></svg>
               </button>
               <ul class="select-menu-js absolute bg-white w-full mt-2 shadow-lg py-[10px] px-3 border-[1px] border-[#DFEAF2] rounded-[8px] flex flex-col gap-1 scale-0 transition-all duration-200 z-[1]">
                  <li class="text-left py-[6px] px-2 text-[14px] font-medium cursor-pointer rounded-[4px] hover:bg-[#DFEAF2] transition-colors duration-200">Small</li>
                  <li class="text-left py-[6px] px-2 text-[14px] font-medium cursor-pointer rounded-[4px] hover:bg-[#DFEAF2] transition-colors duration-200">Medium</li>
                  <li class="text-left py-[6px] px-2 text-[14px] font-medium cursor-pointer rounded-[4px] hover:bg-[#DFEAF2] transition-colors duration-200">Large</li>
               </ul>
            </div>
         </div>
         <!-- /DROPDOWN -->

         <!-- DROPDOWN -->
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <label for="colors" class="text-[14px] font-medium">Colors</label>
            <div class="dropdown-js relative">
               <button type="button" class="select-js relative w-full h-[48.5px] px-4 py-3 bg-white border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] text-left font-medium outline-blue-500">
                  <span class="selected-js"></span>
                  <svg class="absolute right-4 top-[21px]" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 6L11 1" stroke="#828282" stroke-width="1.5" stroke-linecap="round"/></svg>
               </button>
               <ul class="select-menu-js absolute bg-white w-full mt-2 shadow-lg py-[10px] px-3 border-[1px] border-[#DFEAF2] rounded-[8px] flex flex-col gap-1 scale-0 transition-all duration-200 z-[1]">
                  <li class="text-left py-[6px] px-2 text-[14px] font-medium cursor-pointer rounded-[4px] hover:bg-[#DFEAF2] transition-colors duration-200">Black</li>
                  <li class="text-left py-[6px] px-2 text-[14px] font-medium cursor-pointer rounded-[4px] hover:bg-[#DFEAF2] transition-colors duration-200">Blue</li>
                  <li class="text-left py-[6px] px-2 text-[14px] font-medium cursor-pointer rounded-[4px] hover:bg-[#DFEAF2] transition-colors duration-200">Gray</li>
               </ul>
            </div>
         </div>
         <!-- /DROPDOWN -->
         <div class="p-4 bg-white border-[1px] border-[#DFEAF2] rounded-[8px] max-[900px]:max-w-full">
            <div class="pb-1 flex items-center gap-2">
               <input type="checkbox" name="featured" id="featured" class="w-[15px] h-[15px]">
               <label for="featured" class="text-[14px] font-medium select-none">Featured</label>
            </div>
            <p class="text-[14px] text-[#828282] font- px-[24px]">This product will appear on the home page.</p>
         </div>
         <div class="p-4 bg-white border-[1px] border-[#DFEAF2] rounded-[8px] max-[900px]:max-w-full">
            <div class="pb-1 flex items-center gap-2">
               <input type="checkbox" name="archived" id="archived" class="w-[15px] h-[15px]">
               <label for="archived" class="text-[14px] font-medium select-none">Archived</label>
            </div>
            <p class="text-[14px] text-[#828282] font- px-[24px]">This product will not appear anywhere in the store.</p>
         </div>
      </div>
      <button type="submit" class="py-[10px] px-8 rounded-[8px] bg-black text-white text-[15px] font-medium max-[500px]:w-full hover:bg-[#1D1D1D] transition-colors duration-200">Create</button>
   </form>
</div>

<?php
include_once ROOT . '/views/includes/footer.php';
?>

