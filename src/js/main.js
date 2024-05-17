function menuOpen() {
   const btn = document.querySelector('#menu-button');
   const menu = document.querySelector('#menu');
   const body = document.querySelector('body');

   btn.addEventListener('click', ()=> {
      btn.classList.toggle('menu-active');
      menu.classList.toggle('max-[796px]:left-[-100%]');
      menu.classList.toggle('max-[796px]:left-0');
   })
}

menuOpen()