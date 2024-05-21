function burgerMenu() {
   const btn = document.querySelector('#menu-button');
   const menu = document.querySelector('#menu');
   const body = document.querySelector('body');

   btn.addEventListener('click', ()=> {
      btn.classList.toggle('menu-active');
      menu.classList.toggle('max-[880px]:left-[-100%]');
      menu.classList.toggle('max-[880px]:left-0');
      body.classList.toggle('overflow-hidden');
   })
}

burgerMenu();


function profileMenu() {
   const btn = document.querySelector('#profile-btn');
   const menu = document.querySelector('#profile-menu');

   const toggleMenu = () => {
      menu.classList.toggle('scale-0');
   };

   const closeMenuOnClickOutside = (event) => {
      if (!menu.contains(event.target) && event.target !== btn) {
         menu.classList.add('scale-0');
      }
   };

   btn.addEventListener('click', (event) => {
      event.stopPropagation();
      toggleMenu();
   });

   document.addEventListener('click', closeMenuOnClickOutside);
}

profileMenu();



function dropdownMenu() {
   const dropdowns = document.querySelectorAll('.dropdown-js');

   function closeAllDropdowns() {
      dropdowns.forEach(dropdown => {
         const menu = dropdown.querySelector('.select-menu-js');
         menu.classList.add('scale-0');
      });
   }

   dropdowns.forEach(dropdown => {
      const select = dropdown.querySelector('.select-js');
      const menu = dropdown.querySelector('.select-menu-js');
      const options = dropdown.querySelectorAll('.select-menu-js li');
      const selected = dropdown.querySelector('.selected-js');

      select.addEventListener('click', () => {
         closeAllDropdowns();
         menu.classList.toggle('scale-0');
      });

      options.forEach(option => {
         option.addEventListener('click', () => {
            selected.innerText = option.innerText;
            menu.classList.add('scale-0');

            options.forEach(option => {
               option.classList.remove('bg-[#DFEAF2]');
            });

            option.classList.add('bg-[#DFEAF2]');
         });
      });
   });

   document.addEventListener('click', (e) => {
      if (!e.target.closest('.dropdown-js')) {
         closeAllDropdowns();
      }
   });
}

dropdownMenu();