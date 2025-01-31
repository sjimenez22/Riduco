document.addEventListener('DOMContentLoaded', e => {
   e.preventDefault();

   new Splide('.splide-extrusion-laminas', {
      type: 'loop'
   }).mount();
});