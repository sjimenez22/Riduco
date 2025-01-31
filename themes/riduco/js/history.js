document.addEventListener('DOMContentLoaded', e => {
   showHistoryYear();
});

const showHistoryYear = () => {
   const years = document.querySelectorAll('.year-circle');

   for (const year of years) {
      year.addEventListener('click', (e) => {
         e.preventDefault();

         const yearActive = document.querySelector('.year-circle.active');
         if (yearActive && yearActive.dataset.year !== year.dataset.year) {
            yearActive.classList.remove('active');
            const informationYearActive = document.querySelector(`.information[data-year="${yearActive.dataset.year}"]`);
            informationYearActive.classList.add('d-none');
         }

         const yearSelected = year.dataset.year;
         const information = document.querySelector(`.information[data-year="${yearSelected}"]`);
         information.classList.toggle('d-none');
         year.classList.toggle('active');
      });
   }
}