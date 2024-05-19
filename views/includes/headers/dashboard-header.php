<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard - <?= $page_title ?></title>
   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;" class="tracking-tighter h-full bg-[#F9F9F9]">
   <div class="min-h-full flex flex-col">
      <header class="py-4 border-b-[1px] border-[#DFEAF2] bg-white">
         <div class="mx-auto max-w-[1270px] px-4 flex items-center justify-between">
            <div class="flex items-center gap-8">
               <a href="/ecommerce-dashboard/public/home" class="text-[24px] font-semibold">DASHBOARD</a>
               <nav>
                  <ul id="menu" class="z-40 flex items-center gap-6 text-[15px] font-medium max-[880px]:fixed max-[880px]:top-0 max-[880px]:flex-col max-[880px]:bg-white max-[880px]:w-full max-[880px]:h-[100vh] max-[880px]:justify-center max-[880px]:text-[21px] max-[880px]:left-[-100%] max-[880px]:transition-[left] max-[880px]:duration-500">
                     <li><a href="/ecommerce-dashboard/public/admin/overview" class="text-[#828282] hover:text-black transition-colors duration-200 py-2">Overview</a></li>
                     <li><a href="billboard" class="text-[#828282] hover:text-black transition-colors duration-200 py-2">Billboard</a></li>
                     <li><a href="categories" class="text-[#828282] hover:text-black transition-colors duration-200 py-2">Categories</a></li>
                     <li><a href="sizes" class="text-[#828282] hover:text-black transition-colors duration-200 py-2">Sizes</a></li>
                     <li><a href="colors" class="text-[#828282] hover:text-black transition-colors duration-200 py-2">Colors</a></li>
                     <li><a href="/ecommerce-dashboard/public/admin/products" class="text-[#828282] hover:text-black transition-colors duration-200 py-2">Products</a></li>
                     <li><a href="orders" class="text-[#828282] hover:text-black transition-colors duration-200 py-2">Orders</a></li>
                     <li><a href="settings" class="text-[#828282] hover:text-black transition-colors duration-200 py-2">Settings</a></li>
                  </ul>
               </nav>
            </div>
            <div class="flex gap-4 items-center">
               <button type="button" class="">
                  <img src="/ecommerce-dashboard/public/assets/img/user.jpg" alt="" class="h-10 w-10 object-cover rounded-full border-[1px] border-[#DFEAF2]">
               </button>
               <button id="menu-button" class="z-50 group relative w-[28px] h-[16px] hidden max-[880px]:block ">
                  <span class="absolute h-[2px] w-full rounded-full left-0 top-0 bg-black group-[.menu-active]:rotate-[-45deg] group-[.menu-active]:translate-y-[6px] transition-all duration-300"></span>
                  <span class="absolute h-[2px] w-full rounded-full left-0 top-[7px] bg-black group-[.menu-active]:w-0 transition-all duration-300"></span>
                  <span class="absolute h-[2px] w-full rounded-full left-0 bottom-0 bg-black group-[.menu-active]:rotate-[45deg] group-[.menu-active]:translate-y-[-8px] transition-all duration-300"></span>
               </button>
            </div>
         </div>
      </header>
      <main style="flex: 1 1 auto;" class="mt-10">
         <div class="mx-auto max-w-[1270px] px-4">