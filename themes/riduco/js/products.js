document.addEventListener('DOMContentLoaded', e => {
   e.preventDefault();

   changeFilterProducts();
   changeFilterProductsBySubCategory();
});

const changeFilterProducts = () => {
   const btnProducts = document.querySelectorAll('.btn-product');
   for (const btnProduct of btnProducts) {
      btnProduct.addEventListener('click', e => {
         e.preventDefault();

         if (btnProduct.dataset.slug === 'all') {
            window.location.href = `${ajax_bones.site_url}/productos`;
            return;
         }

         window.location.href = `${ajax_bones.site_url}/productos?categoria=${btnProduct.dataset.slug}`;
      });
   }
}

const changeFilterProductsBySubCategory = () => {
   const btnProducts = document.querySelectorAll('.btn-sub-category');

   for (const btnProduct of btnProducts) {
      btnProduct.addEventListener('click', e => {
         e.preventDefault();

         const urlParams = new URLSearchParams(window.location.search);
         const category = urlParams.get('categoria');

         if (btnProduct.dataset.parent === '1') {
            window.location.href = `${ajax_bones.site_url}/productos?categoria=${category}`;
            return;
         }

         window.location.href = `${ajax_bones.site_url}/productos?categoria=${category}&subCategoria=${btnProduct.dataset.slug}`;
      });
   }
}