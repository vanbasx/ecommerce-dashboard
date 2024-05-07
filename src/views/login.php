<?php
   $page_title = 'Sign In';
   include_once 'includes/head.php';
?>

<body class="bg-[#F9F9F9]" style="font-family: 'Inter', sans-serif;">
   <main class="mx-auto px-4">
      <h1 class="text-center text-2xl font-semibold pb-10 tracking-tight">Sign in to your account</h1>
      <div class="p-12 max-w-[480px] mx-auto bg-white rounded-xl border-[#DFEAF2] border-[1px] text-sm">
         <form action="">
            <div class="flex flex-col gap-2 text-[#111827] pb-8">
               <div class="flex justify-between items-center">
                  <label for="" class="">Email address</label>
                  <span class="text-xs text-[#EE0000] hidden">Error</span>
               </div>
               <input type="text" placeholder="Enter your email" class="border-[1px] border-[#CBD5E1] px-3 py-1.5 rounded-md placeholder:text-[#9E9E9E] outline-[#157EFD] shadow-sm">
            </div>
            <div class="flex flex-col gap-2 text-[#111827] pb-8">
               <div class="flex justify-between items-center">
                  <label for="" class="">Password</label>
                  <span class="text-xs text-[#EE0000] hidden">Error</span>
               </div>
               <input type="text" placeholder="Enter your password" class="border-[1px] border-[#CBD5E1] px-3 py-1.5 rounded-md placeholder:text-[#9E9E9E] outline-[#157EFD] shadow-sm">
            </div>
            <div class="flex justify-between items-center pb-8">
               <div class="flex items-center flex-row-reverse gap-2">
                  <label class="">Remember me</label>
                  <input type="checkbox" class="h-4 w-4">
               </div>
            </div>
         </form>
      </div>
   </main>
</body>
</html>