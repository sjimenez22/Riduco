<?php

function filter_products()
{
   include get_template_directory() . '/components/product/product-loop.php';
   die();
}
add_action('wp_ajax_filter_products', 'filter_products');
add_action('wp_ajax_nopriv_filter_products', 'filter_products');

function get_sub_categories_products()
{
   include get_template_directory() . '/components/product/product-sub-category.php';
   die();
}
add_action('wp_ajax_get_sub_categories_products', 'get_sub_categories_products');
add_action('wp_ajax_nopriv_get_sub_categories_products', 'get_sub_categories_products');
