<?php

/**
 * Template blogs
 *
 * @package Riduco
 */

get_header();

$blog_page_id = get_option('page_for_posts');
$blog_page_title = get_the_title($blog_page_id);
$image = get_field('banner', $blog_page_id);
?>
<main class="blog">
   <?php
   $data = [
      'image' => $image,
      'title' => $blog_page_title
   ];
   get_template_part('components/banner/banner', 'image', $data);
   ?>
   <?php
   if (have_posts()) :
   ?>
      <div class="container mt-4 mt-md-5">
         <div class="row justify-content-center">
            <div class="col-12 mb-4">
               <h2 class="fs-1 text-primary fw-bold text-center">Últimas entradas</h2>
            </div>
            <?php
            while (have_posts()) :
               the_post();

               $group_image = get_field('banners');
               $image = isset($group_image['banner_mobile']) ? $group_image['banner_mobile'] : '';
            ?>
               <div class="col-12 col-md-4 mb-4 mb-md-5">
                  <article id="post-<?php the_ID(); ?>" <?php post_class('blogs'); ?>>
                     <header class="entry-header mb-3">
                        <?php the_title(sprintf('<h2 class="entry-title fw-bold fs-3 mb-4 pt-3"><a href="%s" rel="bookmark" class="text-decoration-none text-primary">', esc_url(get_permalink())), '</a></h2>'); ?>

                        <div class="text-excerpt mb-3">
                           <?php the_excerpt(); ?>
                        </div>
                     </header>

                     <div class="entry-image mb-3">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                     </div>

                     <div class="text-end">
                        <a href="<?php echo esc_url(get_permalink()) ?>" class="text-third fw-bold text-decoration-none">
                           <span>Seguir leyendo</span>
                        </a>
                     </div>
                  </article>
               </div>
            <?php
            endwhile;

            the_posts_pagination(array(
               'mid_size'  => 2,
               'prev_text' => __('<i class="bi bi-arrow-left-short fs-5"></i>', 'riduco'),
               'next_text' => __('<i class="bi bi-arrow-right-short fs-5"></i>', 'riduco')
            ));
         else :
            ?>
            <p><?php esc_html_e('Parece que no podemos encontrar lo que estás buscando.', 'riduco'); ?></p>
         </div>
      </div>
   <?php
         endif;
   ?>
</main>
<?php
get_footer();
