<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$category = null;
if ($_GET && $_GET['categoria']) {
   $term = get_term_by('slug', $_GET['categoria'], 'product_category');
   if ($term && $term->parent == 0) $category = $_GET['categoria'];
} else {
   $category = get_terms(['taxonomy' => 'product_category', 'fields' => 'slugs']);
}

if ($category === 'all') $category = get_terms(['taxonomy' => 'product_category', 'fields' => 'slugs']);

if (isset($_GET['subCategoria']) && $_GET['subCategoria']) {
   $category = $_GET['subCategoria'];
   // if (!$current_category) $current_category = 'all';
}

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
   <div class="product-list row mt-4">
      <?php
      while ($products->have_posts()) : $products->the_post();
         $information_table = get_field('information_table');
         $thumbnail_id = get_post_thumbnail_id();
         $attachment_image = wp_get_attachment_url($thumbnail_id);
         $image_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
      ?>
         <div class="col-12 mb-3 px-4 px-md-0">
            <div class="row box-products">
               <div class="col-12 col-md-2 align-self-center text-center mb-3 mb-md-0">
                  <img src="<?php echo esc_url($attachment_image); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="img-fluid" width="200">
               </div>

               <div class="col-12 col-md-2 align-self-center text-center mb-3 mb-md-0">
                  <h3 class="fw-bold text-third fs-4"><?php echo the_title(); ?></h3>
               </div>

               <div class="col-12 col-md-8 align-self-center">
                  <?php if ($information_table):
                     if ($information_table['titles']) :
                  ?>
                        <div class="table-responsive">
                           <table class="table table-sm table-borderless">
                              <thead>
                                 <tr>
                                    <?php foreach ($information_table['titles'] as $titles) :
                                       $title = $titles['title'];
                                    ?>
                                       <th scope="col" class="fw-bold text-primary text-center"><?php echo esc_html($title); ?></th>
                                    <?php endforeach; ?>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($information_table['information'] as $information) :
                                    $descriptions = $information['descriptions'];

                                    if ($descriptions && count($descriptions) > 1) :
                                 ?>
                                       <tr>
                                          <?php foreach ($descriptions as $key => $description): ?>
                                             <td class="text-small text-center" style="width: 30%;">
                                                <?php echo esc_html($description['description']); ?>
                                             </td>
                                          <?php endforeach; ?>
                                       </tr>

                                    <?php else : ?>
                                       <?php foreach ($descriptions as $key => $description): ?>
                                          <td class="text-small text-center" style="width: 30%;">
                                             <?php echo esc_html($description['description']); ?>
                                          </td>
                                       <?php endforeach; ?>
                                 <?php
                                    endif;
                                 endforeach; ?>
                              </tbody>
                           </table>
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