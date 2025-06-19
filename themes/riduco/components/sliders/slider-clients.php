<?php
$title = 'Nuestros clientes';
$colorText = 'text-primary';

if (isset($args['title'])) $title = $args['title'];
if (isset($args['color'])) $colorText = $args['color'];

$gallery_logos = get_field('logos', 'option');
?>

<div class="container my-5">
   <div class="row">
      <div class="col-12">
         <h2 class="display-5 fw-bold text-center mb-4 <?php echo esc_html($colorText); ?>">
            <?php echo esc_html($title); ?>
         </h2>

         <?php if (count($gallery_logos) > 0) : ?>
            <section class="splide splide-clients" aria-label="Carrusel de clientes">
               <div class="splide__track">
                  <ul class="splide__list">
                     <?php foreach ($gallery_logos as $logo) : ?>
                        <li class="splide__slide text-center">
                           <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" width="150">
                        </li>
                     <?php endforeach; ?>
                  </ul>
               </div>
            </section>
         <?php endif; ?>
      </div>
   </div>
</div>