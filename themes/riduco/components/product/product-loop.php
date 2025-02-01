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
      ?>
         <div class="col-12 mb-3">
            <div class="row">
               <div class="col-4 align-self-center">
                  <img src="https://placehold.co/500" alt="Producto" class="img-fluid" width="250">
               </div>

               <div class="col-8 align-self-center">
                  <h3 class="fw-bold text-third"><?php echo the_title(); ?></h3>
               </div>
            </div>
         </div>
      <?php endwhile; ?>
   </div>

   <nav>
      <ul class="pagination justify-content-center">
         <?php
         $big = 999999999; // Número grande para reemplazar en paginate_links()
         $pages = paginate_links([
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?paged=%#%',
            'current'   => max(1, get_query_var('paged')),
            'total'     => $products->max_num_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
            'type'      => 'array'
         ]);

         if ($pages) :
            foreach ($pages as $page) {
               echo '<li class="page-item">' . str_replace('page-numbers', 'page-link', $page) . '</li>';
            }
         endif;
         ?>
      </ul>
   </nav>
<?php
   wp_reset_postdata();
endif;
?>