document.addEventListener('DOMContentLoaded', () => {
   const splide = new Splide('.splide-ods', {
      type: 'loop',
      perPage: 1,
      pagination: false,
      heightRatio: 0,
   });

   function setSliderHeight() {
      setTimeout(() => {
         const currentSlide = splide.root.querySelector('.splide__slide.is-active.is-visible');
         if (currentSlide) {
            const height = currentSlide.querySelector('.container').offsetHeight;
            splide.root.querySelector('.splide__track').style.height = height + 'px';
            splide.root.querySelector('.splide__list').style.height = height + 'px';
         }
      }, 500);
   }

   splide.on('mounted', setSliderHeight);
   splide.on('moved', setSliderHeight);
   splide.on('resized', setSliderHeight);

   splide.mount();
});