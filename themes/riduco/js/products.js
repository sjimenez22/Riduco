document.addEventListener('DOMContentLoaded', e => {
   e.preventDefault();

   changeFilterProducts();
});

const changeFilterProducts = () => {
   const btnProducts = document.querySelectorAll('.btn-product');
   const productList = document.querySelector('.product-list');
   const pagination = document.querySelector('.pagination');
   const subCategories = document.querySelector('.sub-categories');
   const spinnerProducts = document.querySelector('.spinner-products');

   for (const btnProduct of btnProducts) {
      btnProduct.addEventListener('click', e => {
         e.preventDefault();

         btnProducts.forEach(btn => btn.classList.remove("active"));
         btnProduct.classList.add('active');

         productList.innerHTML = '';
         pagination.innerHTML = '';
         spinnerProducts.classList.toggle('d-none');

         subCategories.innerHTML = '';
         let formDataCategory = new FormData();
         formDataCategory.append("action", "get_sub_categories_products");
         formDataCategory.append("product_category", btnProduct.dataset.slug);

         fetch(ajax_bones.ajaxurl, {
            method: "POST",
            body: formDataCategory
         }).then(response => response.text()).then(data => {
            if (data) {
               subCategories.classList.remove('d-none');
               subCategories.innerHTML = data;

               changeFilterProductsBySubCategory();
            } else {
               subCategories.classList.add('d-none');
            }
         }).catch(error => console.error("Error:", error));

         let formData = new FormData();
         formData.append("action", "filter_products");
         formData.append("product_category", btnProduct.dataset.slug);

         fetch(ajax_bones.ajaxurl, {
            method: "POST",
            body: formData
         }).then(response => response.text()).then(data => {
            productList.innerHTML = data;
            spinnerProducts.classList.toggle('d-none');
         }).catch(error => console.error("Error:", error));
      });
   }
}

const changeFilterProductsBySubCategory = () => {
   const btnProducts = document.querySelectorAll('.btn-sub-category');
   const productList = document.querySelector('.product-list');
   const pagination = document.querySelector('.pagination');
   const spinnerProducts = document.querySelector('.spinner-products');

   for (const btnProduct of btnProducts) {
      btnProduct.addEventListener('click', e => {
         e.preventDefault();

         btnProducts.forEach(btn => btn.classList.remove("active"));
         btnProduct.classList.add('active');

         productList.innerHTML = '';
         pagination.innerHTML = '';
         spinnerProducts.classList.toggle('d-none');

         let formData = new FormData();
         formData.append("action", "filter_products");
         formData.append("product_category", btnProduct.dataset.slug);

         fetch(ajax_bones.ajaxurl, {
            method: "POST",
            body: formData
         }).then(response => response.text()).then(data => {
            productList.innerHTML = data;
            spinnerProducts.classList.toggle('d-none');
         }).catch(error => console.error("Error:", error));
      });
   }
}