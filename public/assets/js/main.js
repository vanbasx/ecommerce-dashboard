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



// function tableMenu() {
//    const items = document.querySelectorAll('.item-js');
//    items.forEach(item => {
//       const btn = item.querySelector('.table-menu-btn-js');
//       const menu = item.querySelector('.table-menu-js');

//       btn.addEventListener('click', () => {
//          btn.classList.toggle('bg-[#DFEAF2]');
//          menu.classList.toggle('scale-0');
//       });
//    })
// }

// tableMenu();

function tableMenu() {
   const items = document.querySelectorAll('.item-js');
   items.forEach(item => {
      const btn = item.querySelector('.table-menu-btn-js');
      const menu = item.querySelector('.table-menu-js');

      const toggleMenu = () => {
         btn.classList.toggle('bg-[#DFEAF2]');
         menu.classList.toggle('scale-0');
      };

      const closeMenuOnClickOutside = (event) => {
         if (!menu.contains(event.target) && event.target !== btn) {
            menu.classList.add('scale-0');
            btn.classList.remove('bg-[#DFEAF2]');
         }
      };

      btn.addEventListener('click', (event) => {
         event.stopPropagation();
         toggleMenu();
      });

      document.addEventListener('click', closeMenuOnClickOutside);
   })
}

tableMenu();