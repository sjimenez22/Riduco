document.addEventListener('DOMContentLoaded', e => {
   e.preventDefault();

   new Splide('.splide-manufacturing', {
      type: 'loop'
   }).mount();

   new Splide('.splide-piloting', {
      type: 'loop'
   }).mount();

   new Splide('.splide-perifericos', {
      type: 'loop'
   }).mount();
});