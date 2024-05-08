<?php
   $page_title = 'Sign Up';
   include_once 'includes/head.php';
?>

<body class="bg-[#F9F9F9]" style="font-family: 'Inter', sans-serif;">
   <main class="mx-auto px-4 flex justify-center items-center h-[100vh]">
      <div class="">
         <h1 class="text-center text-2xl font-semibold pb-10 tracking-tight">Create account</h1>
         <div class="p-12 mb-8 w-[480px] mx-auto bg-white rounded-xl border-[#DFEAF2] border-[1px] text-sm">
            <form action="" class="pb-12">
               <div class="flex flex-col gap-2 text-[#111827] pb-8">
                  <div class="flex justify-between items-center">
                     <label for="" class="">Username</label>
                     <span class="text-xs text-[#EE0000] hidden">Error</span>
                  </div>
                  <input type="text" placeholder="Enter your username" class="border-[1px] border-[#CBD5E1] px-3 py-1.5 rounded-md placeholder:text-[#9E9E9E] outline-[#157EFD] shadow-sm">
               </div>
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
               <div class="flex flex-col gap-2 text-[#111827] pb-8">
                  <div class="flex justify-between items-center">
                     <label for="" class="">Confirm password</label>
                     <span class="text-xs text-[#EE0000] hidden">Error</span>
                  </div>
                  <input type="text" placeholder="Confirm your password" class="border-[1px] border-[#CBD5E1] px-3 py-1.5 rounded-md placeholder:text-[#9E9E9E] outline-[#157EFD] shadow-sm">
               </div>
               <div class="flex items-center gap-2 pb-8">
                  <input type="checkbox" class="h-4 w-4">
                  <label class="text-[#111827]">Remember me</label>
               </div>
               <button class="bg-black text-white font-bold w-full p-3 rounded-md tracking-wide hover:shadow transition-shadow duration-300">Sign Up</button>
            </form>
            <p class="text-center text-[#111827] relative mb-6 before:absolute before:left-0 before:top-1/2 before:h-[1px] before:w-[30%] before:bg-[#CBD5E1] after:absolute after:right-0 after:top-1/2 after:h-[1px] after:w-[30%] after:bg-[#CBD5E1]">Or continue with</p>
            <a href="" class="text-[#111827] font-medium border-[1px] border-[#CBD5E1] w-full flex p-3 rounded-md hover:shadow transition-shadow duration-300">
               <div class="mx-auto">
                  <div class="flex items-center gap-[10px]">
                     <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_24_68)"><path d="M8.50022 3.36458C9.75397 3.36458 10.8767 3.79668 11.7621 4.63957L14.1881 2.21354C12.7147 0.842917 10.7917 0 8.50022 0C5.17812 0 2.30582 1.90542 0.90686 4.68207L3.73312 6.87436C4.40247 4.85918 6.28312 3.36458 8.50022 3.36458Z" fill="#EA4335"/><path d="M16.6388 8.69495C16.6388 8.13891 16.5856 7.60058 16.5042 7.0835H8.5V10.2781H13.0829C12.8775 11.3264 12.2825 12.2189 11.39 12.821L14.1277 14.946C15.725 13.4656 16.6388 11.2768 16.6388 8.69495Z" fill="#4285F4"/><path d="M3.72936 10.1257C3.55936 9.61216 3.46022 9.06674 3.46022 8.50007C3.46022 7.93341 3.55582 7.38799 3.72936 6.87445L0.903125 4.68213C0.325833 5.82963 0 7.12591 0 8.50007C0 9.87424 0.325833 11.1705 0.906667 12.318L3.72936 10.1257Z" fill="#FBBC05"/><path d="M8.50028 17.0001C10.7953 17.0001 12.7255 16.2456 14.128 14.9423L11.3903 12.8173C10.6288 13.3308 9.64778 13.6319 8.50028 13.6319C6.2832 13.6319 4.40255 12.1373 3.72965 10.1221L0.903397 12.3144C2.3059 15.0946 5.17819 17.0001 8.50028 17.0001Z" fill="#34A853"/></g><defs><clipPath id="clip0_24_68"><rect width="17" height="17" fill="white"/></clipPath></defs></svg>
                     <span>Google</span>
                  </div>
               </div>
            </a>
         </div>
         <p class="text-center flex items-center gap-1 justify-center text-sm text-[#767676]">Have account?<a href="login.php" class="text-[#111827]">Sign In!</a></p>
      </div>
   </main>
</body>
</html>