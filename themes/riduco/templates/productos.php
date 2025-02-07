<?php

/**
 * The template for displaying Productos
 * Template Name: Productos
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

$args = array(
   'taxonomy' => 'product_category',
   'orderby' => 'name',
   'order'   => 'ASC',
   'parent'  => 0
);
$cats = get_categories($args);

get_header();
?>

<main id="primary" class="site-main products">
   <?php
   $data = [
      'image' => 'https://riduco.com/wp-content/uploads/2022/07/direccionamiento_estrategico.jpg'
   ];
   get_template_part('components/banner/banner', 'image', $data);
   ?>

   <div class="container my-4 my-5">
      <div class="row mb-4">
         <div class="col-12">
            <h2 class="text-primary fw-bold text-center display-5">
               Conoce nuestros productos
            </h2>
         </div>

         <div class="col-12 text-center mt-4 mt-md-5 box-btns">
            <button class="btn btn-product active" data-slug="all">Todos</button>

            <?php foreach ($cats as $category) : ?>
               <button class="btn btn-product" data-slug="<?php echo esc_html($category->slug); ?>"><?php echo esc_html($category->name); ?></button>
            <?php endforeach; ?>

         </div>

         <div class="col-12 text-center mt-4 sub-categories d-none box-btns">
            <?php get_template_part('components/product/product', 'sub-category'); ?>
         </div>
      </div>

      <?php get_template_part('components/product/product', 'loop'); ?>
   </div>
</main><!-- #main -->

<?php
get_footer();
