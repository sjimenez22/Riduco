document.addEventListener('DOMContentLoaded', e => {
   e.preventDefault();

   changeFilterProducts();
});

const changeFilterProducts = () => {
   const btnProducts = document.querySelectorAll('.btn-product');
   const productList = document.querySelector('.product-list');
   const spinnerProducts = document.querySelector('.spinner-products');

   for (const btnProduct of btnProducts) {
      btnProduct.addEventListener('click', e => {
         e.preventDefault();

         btnProducts.forEach(btn => btn.classList.remove("active"));
         btnProduct.classList.add('active');

         productList.innerHTML = '';
         spinnerProducts.classList.toggle('d-none');
         let formData = new FormData();
         formData.append("action", "filter_products");
         formData.append("product_category", btnProduct.dataset.slug);

         fetch(ajax_bones.ajaxurl, {
            method: "POST",
            body: formData
         })
            .then(response => response.text())
            .then(data => {
               productList.innerHTML = data;
               spinnerProducts.classList.toggle('d-none');
            }).catch(error => console.error("Error:", error));
      });
   }
}