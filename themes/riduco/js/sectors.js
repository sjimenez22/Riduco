document.addEventListener('DOMContentLoaded', () => {

   const elms = document.getElementsByClassName('splide');
   for (let i = 0; i < elms.length; i++) {
      new Splide(elms[i], {
         type: 'loop',
         pagination: false
      }).mount();
   }
});