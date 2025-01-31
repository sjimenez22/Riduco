document.addEventListener('DOMContentLoaded', e => {
   e.preventDefault();

   new Splide('.splide-maquinas', {
      type: 'loop'
   }).mount();

   new Splide('.splide-robots', {
      type: 'loop'
   }).mount();

   new Splide('.splide-perifericos', {
      type: 'loop'
   }).mount();

   new Splide('.splide-complementarios', {
      type: 'loop'
   }).mount();
});