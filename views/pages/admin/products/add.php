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
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <label for="category" class="text-[14px] font-medium">Category</label>
            <select name="" id="" class="relative appearance-none px-4 py-3 bg-white border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] font-medium outline-blue-500">
               
            </select>
         </div>
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <label for="category" class="text-[14px] font-medium">Size</label>
            <select name="" id="" class="relative appearance-none px-4 py-3 bg-white border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] font-medium outline-blue-500">
               
            </select>
         </div>
         <div class="flex flex-col max-w-[295px] gap-2 max-[900px]:max-w-full">
            <label for="category" class="text-[14px] font-medium">Color</label>
            <select name="" id="" class="relative appearance-none px-4 py-3 bg-white border-[1px] border-[#DFEAF2] rounded-[8px] text-[15px] font-medium outline-blue-500">
               
            </select>
         </div>
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