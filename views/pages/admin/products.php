<?php
$page_title = "Products";
include_once ROOT . '/views/includes/headers/dashboard-header.php';
?>

<?php
$title = "Products (5)";
$sub_title = "Manage products for your store";
$link = "/ecommerce-dashboard/public/admin/products/add";
include_once ROOT . '/views/includes/titles/title-add.php';
?>

<div class="mb-6">
   <?php
   include_once ROOT . '/views/includes/search-bar.php';
   ?>
   <div class="overflow-x-auto rounded-[8px] border-[1px] border-[#DFEAF2]">
      <table class="text-left w-full bg-white">
         <thead class="text-[#828282]">
            <tr class="">
               <th class="text-[15px] px-6 py-4 font-medium whitespace-nowrap">Name</th>
               <th class="text-[15px] px-6 py-4 font-medium whitespace-nowrap">Archived</th>
               <th class="text-[15px] px-6 py-4 font-medium whitespace-nowrap">Featured</th>
               <th class="text-[15px] px-6 py-4 font-medium whitespace-nowrap">Price</th>
               <th class="text-[15px] px-6 py-4 font-medium whitespace-nowrap">Category</th>
               <th class="text-[15px] px-6 py-4 font-medium whitespace-nowrap">Size</th>
               <th class="text-[15px] px-6 py-4 font-medium whitespace-nowrap">Color</th>
               <th class="text-[15px] px-6 py-4 font-medium whitespace-nowrap">Date</th>
               <th class="text-[15px] px-6 py-4 font-medium whitespace-nowrap"></th>
            </tr>
         </thead>
         <tbody>
            <tr class="item-js border-t-[1px] border-[#DFEAF2] align-middle">
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Black Suit</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">$219.00</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Suits</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Medium</td>
               <td class="text-[15px] font-medium whitespace-nowrap px-6 py-6 relative after:absolute after:left-[94px] after:w-[21px] after:h-[21px] after:rounded-full after:bg-[#000000]">#000000</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">June 26th, 2023</td>
               <td class="">
                  <div class="relative w-[37px]">
                     <button class="table-menu-btn-js px-3 py-3 rounded-[4px] hover:bg-[#DFEAF2] transition-colors duration-200" type="button"><svg width="13" height="10" viewBox="0 0 13 3" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="1.5" cy="1.5" r="1.5" fill="black"/><circle cx="6.5" cy="1.5" r="1.5" fill="black"/><circle cx="11.5" cy="1.5" r="1.5" fill="black"/></svg></button>
                     <div class="table-menu-js flex flex-col gap-4 absolute right-10 bottom-0 bg-white rounded-[8px] border-[1px] border-[#DFEAF2] p-4 z-[1] shadow-lg transition-all duration-200 scale-0">
                        <a href="" class="flex items-center gap-3 text-[15px] font-medium">
                           <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_139_48)"><path d="M8.70833 3.16663H3.16666C2.74674 3.16663 2.34401 3.33344 2.04708 3.63037C1.75014 3.92731 1.58333 4.33003 1.58333 4.74996V15.8333C1.58333 16.2532 1.75014 16.6559 2.04708 16.9529C2.34401 17.2498 2.74674 17.4166 3.16666 17.4166H14.25C14.6699 17.4166 15.0726 17.2498 15.3696 16.9529C15.6665 16.6559 15.8333 16.2532 15.8333 15.8333V10.2916" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14.6458 1.97918C14.9608 1.66424 15.3879 1.4873 15.8333 1.4873C16.2787 1.4873 16.7059 1.66424 17.0208 1.97918C17.3358 2.29413 17.5127 2.72128 17.5127 3.16668C17.5127 3.61208 17.3358 4.03924 17.0208 4.35418L9.49999 11.875L6.33333 12.6667L7.12499 9.50002L14.6458 1.97918Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_139_48"><rect width="19" height="19" fill="white"/></clipPath></defs></svg>
                           Edit
                        </a>
                        <form action="">
                           <button class="flex items-center gap-3 text-[15px] font-medium">
                              <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.375 4.75H3.95833H16.625" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.33333 4.75004V3.16671C6.33333 2.74678 6.50014 2.34405 6.79708 2.04712C7.09401 1.75019 7.49674 1.58337 7.91666 1.58337H11.0833C11.5033 1.58337 11.906 1.75019 12.2029 2.04712C12.4998 2.34405 12.6667 2.74678 12.6667 3.16671V4.75004M15.0417 4.75004V15.8334C15.0417 16.2533 14.8748 16.656 14.5779 16.953C14.281 17.2499 13.8783 17.4167 13.4583 17.4167H5.54166C5.12174 17.4167 4.71901 17.2499 4.42208 16.953C4.12514 16.656 3.95833 16.2533 3.95833 15.8334V4.75004H15.0417Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.0833 8.70837V13.4584" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.91667 8.70837V13.4584" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                              Delete
                           </button>
                        </form>
                     </div>
                  </div>
               </td>
            </tr>
            <tr class="item-js border-t-[1px] border-[#DFEAF2] align-middle">
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Black Suit</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">$219.00</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Suits</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Medium</td>
               <td class="text-[15px] font-medium whitespace-nowrap px-6 py-6 relative after:absolute after:left-[94px] after:w-[21px] after:h-[21px] after:rounded-full after:bg-[#000000]">#000000</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">June 26th, 2023</td>
               <td class="">
                  <div class="relative w-[37px]">
                     <button class="table-menu-btn-js px-3 py-3 rounded-[4px] hover:bg-[#DFEAF2] transition-colors duration-200" type="button"><svg width="13" height="10" viewBox="0 0 13 3" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="1.5" cy="1.5" r="1.5" fill="black"/><circle cx="6.5" cy="1.5" r="1.5" fill="black"/><circle cx="11.5" cy="1.5" r="1.5" fill="black"/></svg></button>
                     <div class="table-menu-js flex flex-col gap-4 absolute right-10 bottom-0 bg-white rounded-[8px] border-[1px] border-[#DFEAF2] p-4 z-[1] shadow-lg transition-all duration-200 scale-0">
                        <a href="" class="flex items-center gap-3 text-[15px] font-medium">
                           <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_139_48)"><path d="M8.70833 3.16663H3.16666C2.74674 3.16663 2.34401 3.33344 2.04708 3.63037C1.75014 3.92731 1.58333 4.33003 1.58333 4.74996V15.8333C1.58333 16.2532 1.75014 16.6559 2.04708 16.9529C2.34401 17.2498 2.74674 17.4166 3.16666 17.4166H14.25C14.6699 17.4166 15.0726 17.2498 15.3696 16.9529C15.6665 16.6559 15.8333 16.2532 15.8333 15.8333V10.2916" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14.6458 1.97918C14.9608 1.66424 15.3879 1.4873 15.8333 1.4873C16.2787 1.4873 16.7059 1.66424 17.0208 1.97918C17.3358 2.29413 17.5127 2.72128 17.5127 3.16668C17.5127 3.61208 17.3358 4.03924 17.0208 4.35418L9.49999 11.875L6.33333 12.6667L7.12499 9.50002L14.6458 1.97918Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_139_48"><rect width="19" height="19" fill="white"/></clipPath></defs></svg>
                           Edit
                        </a>
                        <form action="">
                           <button class="flex items-center gap-3 text-[15px] font-medium">
                              <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.375 4.75H3.95833H16.625" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.33333 4.75004V3.16671C6.33333 2.74678 6.50014 2.34405 6.79708 2.04712C7.09401 1.75019 7.49674 1.58337 7.91666 1.58337H11.0833C11.5033 1.58337 11.906 1.75019 12.2029 2.04712C12.4998 2.34405 12.6667 2.74678 12.6667 3.16671V4.75004M15.0417 4.75004V15.8334C15.0417 16.2533 14.8748 16.656 14.5779 16.953C14.281 17.2499 13.8783 17.4167 13.4583 17.4167H5.54166C5.12174 17.4167 4.71901 17.2499 4.42208 16.953C4.12514 16.656 3.95833 16.2533 3.95833 15.8334V4.75004H15.0417Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.0833 8.70837V13.4584" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7.91667 8.70837V13.4584" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                              Delete
                           </button>
                        </form>
                     </div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</div>

<?php
include_once ROOT . '/views/includes/footer.php';
?>