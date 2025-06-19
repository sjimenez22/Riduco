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
            ?>
               <div class="col-12 col-md-7 mb-4 mb-md-5">
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                     <header class="entry-header mb-3">
                        <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        $url_image = get_the_post_thumbnail_url();
                        $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                        ?>

                        <div class="entry-image mb-3">
                           <img src="<?php echo esc_url($url_image); ?>" alt="<?php echo esc_attr($alt_text); ?>">
                        </div>

                        <?php the_title(sprintf('<h2 class="entry-title fw-bold text-uppercase fs-4 mb-3"><a href="%s" rel="bookmark" class="text-decoration-none text-dark">', esc_url(get_permalink())), '</a></h2>'); ?>
                     </header>

                     <div class="entry-metadata mb-3">
                        por <?php echo get_the_author(); ?> -
                        <?php echo get_the_date(); ?>
                     </div>

                     <div class="entry-summary">
                        <?php the_excerpt(); ?>
                     </div>

                     <a href="<?php echo esc_url(get_permalink()) ?>" class="text-dark text-decoration-none fw-normal">
                        <span>Leer Más</span>
                        <i class="bi bi-arrow-right"></i>
                     </a>
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
