function menuOpen() {
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

menuOpen();


function profileOpen() {
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

profileOpen();