window.addEventListener('scroll', function () {
   const menu = document.getElementById('masthead');
   const scrollTop = window.scrollY || document.documentElement.scrollTop;

   if (scrollTop > 1) {
      menu.classList.add('scrolled');
   } else {
      menu.classList.remove('scrolled');
   }

   const splideClients = document.querySelector('.splide-clients');
   if (splideClients) {
      new Splide('.splide-clients', {
         type: 'loop',
         perPage: 5,
         pagination: false
      }).mount();
   }
});
