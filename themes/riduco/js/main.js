document.addEventListener('DOMContentLoaded', function () {
   const splideClients = document.querySelector('.splide-clients');
   if (splideClients) {
      new Splide('.splide-clients', {
         type: 'loop',
         perPage: 5,
         pagination: false,
         breakpoints: {
            992: {
               perPage: 3
            },
            767: {
               perPage: 1
            }
         }
      }).mount();
   }
});