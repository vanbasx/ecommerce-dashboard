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
            <tr class="align-middle">
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
            <tr class="border-t-[1px] border-[#DFEAF2] align-middle">
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Black Suit</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">$219.00</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Suits</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Medium</td>
               <td class="text-[15px] font-medium whitespace-nowrap px-6 py-6 relative after:absolute after:left-[94px] after:w-[21px] after:h-[21px] after:rounded-full after:bg-[#000000]">#000000</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">June 26th, 2023</td>
               <td>
                  <button class="px-6 py-6" type="button"><svg width="13" height="10" viewBox="0 0 13 3" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="1.5" cy="1.5" r="1.5" fill="black"/><circle cx="6.5" cy="1.5" r="1.5" fill="black"/><circle cx="11.5" cy="1.5" r="1.5" fill="black"/></svg></button>
               </td>
            </tr>
            <tr class="border-t-[1px] border-[#DFEAF2] align-middle">
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Black Suit</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">$219.00</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Suits</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Medium</td>
               <td class="text-[15px] font-medium whitespace-nowrap px-6 py-6 relative after:absolute after:left-[94px] after:w-[21px] after:h-[21px] after:rounded-full after:bg-[#000000]">#000000</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">June 26th, 2023</td>
               <td>
                  <button class="px-6 py-6" type="button"><svg width="13" height="10" viewBox="0 0 13 3" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="1.5" cy="1.5" r="1.5" fill="black"/><circle cx="6.5" cy="1.5" r="1.5" fill="black"/><circle cx="11.5" cy="1.5" r="1.5" fill="black"/></svg></button>
               </td>
            </tr>
            <tr class="border-t-[1px] border-[#DFEAF2] align-middle">
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Black Suit</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">$219.00</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Suits</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Medium</td>
               <td class="text-[15px] font-medium whitespace-nowrap px-6 py-6 relative after:absolute after:left-[94px] after:w-[21px] after:h-[21px] after:rounded-full after:bg-[#000000]">#000000</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">June 26th, 2023</td>
               <td>
                  <button class="px-6 py-6" type="button"><svg width="13" height="10" viewBox="0 0 13 3" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="1.5" cy="1.5" r="1.5" fill="black"/><circle cx="6.5" cy="1.5" r="1.5" fill="black"/><circle cx="11.5" cy="1.5" r="1.5" fill="black"/></svg></button>
               </td>
            </tr>
            <tr class="border-t-[1px] border-[#DFEAF2] align-middle">
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Black Suit</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">$219.00</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Suits</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Medium</td>
               <td class="text-[15px] font-medium whitespace-nowrap px-6 py-6 relative after:absolute after:left-[94px] after:w-[21px] after:h-[21px] after:rounded-full after:bg-[#000000]">#000000</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">June 26th, 2023</td>
               <td>
                  <button class="px-6 py-6" type="button"><svg width="13" height="10" viewBox="0 0 13 3" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="1.5" cy="1.5" r="1.5" fill="black"/><circle cx="6.5" cy="1.5" r="1.5" fill="black"/><circle cx="11.5" cy="1.5" r="1.5" fill="black"/></svg></button>
               </td>
            </tr>
            <tr class="border-t-[1px] border-[#DFEAF2] align-middle">
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Black Suit</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">True</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">$219.00</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Suits</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">Medium</td>
               <td class="text-[15px] font-medium whitespace-nowrap px-6 py-6 relative after:absolute after:left-[94px] after:w-[21px] after:h-[21px] after:rounded-full after:bg-[#000000]">#000000</td>
               <td class="text-[15px] px-6 py-6 font-medium whitespace-nowrap">June 26th, 2023</td>
               <td>
                  <button class="px-6 py-6" type="button"><svg width="13" height="10" viewBox="0 0 13 3" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="1.5" cy="1.5" r="1.5" fill="black"/><circle cx="6.5" cy="1.5" r="1.5" fill="black"/><circle cx="11.5" cy="1.5" r="1.5" fill="black"/></svg></button>
               </td>
            </tr>    
         </tbody>
      </table>
   </div>
</div>

<?php
include_once ROOT . '/views/includes/footer.php';
?>