<?php
$title = 'Nuestros clientes';
$colorText = 'text-primary';
if ($args['title']) $title = $args['title'];
if ($args['color']) $colorText = $args['color'];
?>

<div class="container my-5">
   <div class="row">
      <div class="col-12">
         <h2 class="display-5 fw-bold text-center mb-4 <?php echo esc_html($colorText); ?>">
            <?php echo esc_html($title); ?>
         </h2>

         <section class="splide splide-clients" aria-label="Carrusel de clientes">
            <div class="splide__track">
               <ul class="splide__list">
                  <li class="splide__slide text-center">
                     <img src="https://placehold.co/150" alt="Imagen prueba" class="img-fluid">
                  </li>
                  <li class="splide__slide text-center">
                     <img src="https://placehold.co/150" alt="Imagen prueba" class="img-fluid">
                  </li>
                  <li class="splide__slide text-center">
                     <img src="https://placehold.co/150" alt="Imagen prueba" class="img-fluid">
                  </li>
                  <li class="splide__slide text-center">
                     <img src="https://placehold.co/150" alt="Imagen prueba" class="img-fluid">
                  </li>
                  <li class="splide__slide text-center">
                     <img src="https://placehold.co/150" alt="Imagen prueba" class="img-fluid">
                  </li>
                  <li class="splide__slide text-center">
                     <img src="https://placehold.co/150" alt="Imagen prueba" class="img-fluid">
                  </li>
                  <li class="splide__slide text-center">
                     <img src="https://placehold.co/150" alt="Imagen prueba" class="img-fluid">
                  </li>
               </ul>
            </div>
         </section>
      </div>
   </div>
</div>