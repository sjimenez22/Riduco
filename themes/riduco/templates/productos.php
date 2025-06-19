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

$current_category = $_GET['categoria'] ?? 'all';
if (!$current_category) $current_category = 'all';

get_header();
?>

<main id="primary" class="site-main products">
   <?php get_template_part('components/banner/banner', 'image'); ?>

   <div class="container my-4 my-5">
      <div class="row mb-4">
         <div class="col-12">
            <h2 class="text-primary fw-bold text-center display-5">
               Conoce nuestros productos
            </h2>
         </div>

         <div class="col-12 text-center mt-4 mt-md-5 box-btns">
            <button class="btn btn-product <?php if ($current_category === 'all') echo 'active' ?>" data-slug="all">Todos</button>

            <?php foreach ($cats as $category) : ?>
               <button class="btn btn-product <?php if ($current_category === $category->slug) echo 'active' ?>" data-slug="<?php echo esc_html($category->slug); ?>"><?php echo esc_html($category->name); ?></button>
            <?php endforeach; ?>

         </div>

         <div class="col-12 text-center mt-4 sub-categories box-btns">
            <?php get_template_part('components/product/product', 'sub-category'); ?>
         </div>
      </div>

      <div class="row">
         <div class="col-12">
            <div class="text-center mt-4 mt-md-5 spinner-products d-none">
               <div class="spinner-border text-primary" role="status">
                  <span class="visually-hidden">Loading...</span>
               </div>
            </div>
            <div class="ctn-products-loop">
               <?php get_template_part('components/product/product', 'loop'); ?>
            </div>
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
