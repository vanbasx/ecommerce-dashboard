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
      <!-- IMAGE UPLOAD -->
      <div class="">
         <label for="image" class="text-[14px] font-medium">Image</label>
         <div class="relative w-[175px] mt-2 mb-7">
            <div class="w-[200px] h-[200px] mb-4">
               <img src="" alt="" class="w-full h-full object-cover object-center rounded-[16px] border-[1px] border-[#DFEAF2]">
            </div>
            <input class="absolute top-0 left-0 w-full h-full opacity-0 text-[0px] cursor-pointer" accept=".jpg, .png, .webp, .jpeg" type="file" name="image" id="image">
            <button type="button" class="flex items-center gap-2 py-3 px-4 bg-white rounded-[8px] border-[1px] border-[#DFEAF2]">
               <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.0862 4.45543C16.0204 4.38904 15.942 4.33634 15.8557 4.30038C15.7694 4.26442 15.6768 4.2459 15.5833 4.2459C15.4898 4.2459 15.3972 4.26442 15.3109 4.30038C15.2246 4.33634 15.1462 4.38904 15.0804 4.45543L14.1666 5.37626V1.41668C14.1666 1.22882 14.092 1.04865 13.9592 0.915809C13.8263 0.782971 13.6462 0.708344 13.4583 0.708344C13.2704 0.708344 13.0903 0.782971 12.9574 0.915809C12.8246 1.04865 12.75 1.22882 12.75 1.41668V5.37626L11.8362 4.45543C11.7028 4.32204 11.5219 4.24711 11.3333 4.24711C11.1447 4.24711 10.9638 4.32204 10.8304 4.45543C10.697 4.58881 10.6221 4.76971 10.6221 4.95834C10.6221 5.14697 10.697 5.32788 10.8304 5.46126L12.9554 7.58626C13.0227 7.65075 13.1022 7.7013 13.1891 7.73501C13.2739 7.77248 13.3656 7.79184 13.4583 7.79184C13.551 7.79184 13.6427 7.77248 13.7275 7.73501C13.8144 7.7013 13.8938 7.65075 13.9612 7.58626L16.0862 5.46126C16.1526 5.39541 16.2053 5.31707 16.2413 5.23075C16.2772 5.14443 16.2957 5.05185 16.2957 4.95834C16.2957 4.86483 16.2772 4.77225 16.2413 4.68593C16.2053 4.59962 16.1526 4.52128 16.0862 4.45543ZM13.4583 9.20834C13.2704 9.20834 13.0903 9.28297 12.9574 9.41581C12.8246 9.54865 12.75 9.72882 12.75 9.91668V10.1858L11.7016 9.13751C11.3315 8.77027 10.8312 8.5642 10.3098 8.5642C9.78833 8.5642 9.28803 8.77027 8.91788 9.13751L8.42204 9.63334L6.66538 7.87668C6.29004 7.5194 5.79169 7.32013 5.2735 7.32013C4.75531 7.32013 4.25696 7.5194 3.88163 7.87668L2.83329 8.92501V4.95834C2.83329 4.77048 2.90792 4.59031 3.04076 4.45748C3.1736 4.32464 3.35376 4.25001 3.54163 4.25001H9.20829C9.39615 4.25001 9.57632 4.17538 9.70916 4.04254C9.842 3.90971 9.91663 3.72954 9.91663 3.54168C9.91663 3.35382 9.842 3.17365 9.70916 3.04081C9.57632 2.90797 9.39615 2.83334 9.20829 2.83334H3.54163C2.97804 2.83334 2.43754 3.05723 2.03902 3.45574C1.64051 3.85426 1.41663 4.39476 1.41663 4.95834V13.4583C1.41663 14.0219 1.64051 14.5624 2.03902 14.9609C2.43754 15.3595 2.97804 15.5833 3.54163 15.5833H12.0416C12.6052 15.5833 13.1457 15.3595 13.5442 14.9609C13.9427 14.5624 14.1666 14.0219 14.1666 13.4583V9.91668C14.1666 9.72882 14.092 9.54865 13.9592 9.41581C13.8263 9.28297 13.6462 9.20834 13.4583 9.20834ZM3.54163 14.1667C3.35376 14.1667 3.1736 14.092 3.04076 13.9592C2.90792 13.8264 2.83329 13.6462 2.83329 13.4583V10.9296L4.88746 8.87543C4.99152 8.77626 5.12975 8.72094 5.2735 8.72094C5.41725 8.72094 5.55548 8.77626 5.65954 8.87543L7.90496 11.1208L10.9508 14.1667H3.54163ZM12.75 13.4583C12.7489 13.5939 12.7042 13.7256 12.6225 13.8338L9.42788 10.625L9.92371 10.1292C9.97449 10.0773 10.0351 10.0362 10.102 10.0081C10.1689 9.97995 10.2407 9.96547 10.3133 9.96547C10.3859 9.96547 10.4577 9.97995 10.5246 10.0081C10.5915 10.0362 10.6521 10.0773 10.7029 10.1292L12.75 12.1904V13.4583Z" fill="black"/></svg>
               <span class="text-[14px] font-medium">Upload an Image</span>
            </button>
         </div>
      </div>
      <!-- /IMAGE UPLOAD -->

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
                  <option selected disabled></option>
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
                  <option selected disabled></option>
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
                  <option selected disabled></option>
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

