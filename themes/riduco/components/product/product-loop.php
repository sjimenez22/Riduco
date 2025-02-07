<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$category = ($_POST && $_POST['product_category']) ? $_POST['product_category'] : get_terms(['taxonomy' => 'product_category', 'fields' => 'slugs']);

if ($category === 'all') $category = get_terms(['taxonomy' => 'product_category', 'fields' => 'slugs']);

$argsProducts = [
   'post_type'      => 'products',
   'post_status'    => 'publish',
   'posts_per_page' => 6,
   'paged'          => $paged,
   'order'          => 'ASC',
   'orderby'        => 'term_order',
   'tax_query'      => [
      [
         'taxonomy' => 'product_category',
         'field'    => 'slug',
         'terms'    => $category,
      ],
   ],
];

$products = new WP_Query($argsProducts);
?>

<?php if ($products->have_posts()): ?>
   <div class="text-center mt-4 mt-md-5 spinner-products d-none">
      <div class="spinner-border text-primary" role="status">
         <span class="visually-hidden">Loading...</span>
      </div>
   </div>

   <div class="product-list row mt-4">
      <?php
      while ($products->have_posts()) : $products->the_post();
         $information_table = get_field('information_table');
      ?>
         <div class="col-12 mb-3 px-4 px-md-0">
            <div class="row box-products">
               <div class="col-12 col-md-3 align-self-center text-center mb-3 mb-md-0">
                  <img src="https://placehold.co/500" alt="Producto" class="img-fluid" width="200">
               </div>

               <div class="col-12 col-md-9 align-self-center">
                  <h3 class="fw-bold text-third"><?php echo the_title(); ?></h3>

                  <?php if ($information_table):
                     if ($information_table['information']):
                  ?>
                        <div class="row">
                           <?php foreach ($information_table['information'] as $information) :

                              $attribute = $information['attribute'];
                              $description = $information['description'];
                           ?>
                              <div class="col-12 col-md-6 mb-2 text-primary">
                                 <span class="fw-bold"><?php echo esc_html($attribute); ?>: </span>
                                 <span><?php echo esc_html($description); ?></span>
                              </div>
                           <?php endforeach; ?>
                        </div>
                  <?php
                     endif;
                  endif; ?>
               </div>
            </div>
         </div>
      <?php endwhile; ?>
   </div>

   <?php custom_pagination($products->max_num_pages); ?>
<?php
   wp_reset_postdata();
endif;
?>