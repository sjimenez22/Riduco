document.addEventListener('DOMContentLoaded', e => {
   e.preventDefault();

   const elms = document.getElementsByClassName('splide');
   for (var i = 0; i < elms.length; i++) {
      new Splide(elms[i], {
         type: 'loop'
      }).mount();
   }
});