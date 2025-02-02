<?php

// Register Products Post Type
function registerProductsPostType()
{
   $labels = array(
      'name' => _x('Productos', 'Post Type General Name', 'text_domain'),
      'singular_name' => _x('Producto', 'Post Type Singular Name', 'text_domain'),
      'menu_name' => __('Productos', 'text_domain'),
      'name_admin_bar' => __('Productos', 'text_domain'),
      'archives' => __('Archivo de productos', 'text_domain'),
      'attributes' => __('Atributos del producto', 'text_domain'),
      'parent_item_colon' => __('producto principal:', 'text_domain'),
      'all_items' => __('Todos los productos', 'text_domain'),
      'add_new_item' => __('Añadir nuevo producto', 'text_domain'),
      'add_new' => __('Añadir nuevo', 'text_domain'),
      'new_item' => __('Nuevo producto', 'text_domain'),
      'edit_item' => __('Editar producto', 'text_domain'),
      'update_item' => __('Actualizar producto', 'text_domain'),
      'view_item' => __('Ver producto', 'text_domain'),
      'view_items' => __('Ver productos', 'text_domain'),
      'search_items' => __('Buscar producto', 'text_domain'),
      'not_found' => __('No se ha encontrado', 'text_domain'),
      'not_found_in_trash' => __('No se encuentra en la papelera', 'text_domain'),
      'featured_image' => __('Imagen destacada', 'text_domain'),
      'set_featured_image' => __('Establecer imagen destacada', 'text_domain'),
      'remove_featured_image' => __('Eliminar la imagen destacada', 'text_domain'),
      'use_featured_image' => __('Utilizar como imagen destacada', 'text_domain'),
      'insert_into_item' => __('Insertar en el producto', 'text_domain'),
      'uploaded_to_this_item' => __('Subido a este producto', 'text_domain'),
      'items_list' => __('Lista de productos', 'text_domain'),
      'items_list_navigation' => __('Navegación por la lista de productos', 'text_domain'),
      'filter_items_list' => __('Lista de productos filtrados', 'text_domain'),
   );

   $rewrite = array(
      'slug' => 'productos',
      'with_front' => true,
      'pages' => true,
      'feeds' => true,
   );

   $args = array(
      'label' => __('Productos', 'text_domain'),
      'description' => __('Productos', 'text_domain'),
      'labels' => $labels,
      'supports' => array('title', 'editor', 'revisions', 'post-formats', 'thumbnail'),
      'hierarchical' => true,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 9,
      'menu_icon' => 'dashicons-products',
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => false,
      'can_export' => true,
      'has_archive' => false,
      'exclude_from_search' => false,
      'publicly_queryable' => false,
      'rewrite' => $rewrite,
      'capability_type' => 'page',
   );
   register_post_type('products', $args);
}
add_action('init', 'registerProductsPostType', 0);

function registerCategoryProductsTaxonomy()
{
   $labels = array(
      'name' => _x('Categorías', 'Taxonomy General Name', 'text_domain'),
      'singular_name' => _x('Categoría', 'Taxonomy Singular Name', 'text_domain'),
      'menu_name' => __('Categorías', 'text_domain'),
      'all_items' => __('Todos las categorías', 'text_domain'),
      'parent_item' => __('Categoría Padre', 'text_domain'),
      'parent_item_colon' => __('Categoría Padre:', 'text_domain'),
      'new_item_name' => __('Nueva categoría', 'text_domain'),
      'add_new_item' => __('Añadir Nueva categoría', 'text_domain'),
      'edit_item' => __('Editar categoría', 'text_domain'),
      'update_item' => __('Actualizar categoría', 'text_domain'),
      'view_item' => __('Ver categoría', 'text_domain'),
      'separate_items_with_commas' => __('Separar categorías con comas', 'text_domain'),
      'add_or_remove_items' => __('Añadir o eliminar categorías', 'text_domain'),
      'choose_from_most_used' => __('Escoger entre los más usados', 'text_domain'),
      'popular_items' => __('Categorías populares', 'text_domain'),
      'search_items' => __('Buscar categorías', 'text_domain'),
      'not_found' => __('No encontrado', 'text_domain'),
      'no_terms' => __('No hay términos', 'text_domain'),
      'items_list' => __('Lista de categorías', 'text_domain'),
      'items_list_navigation' => __('Navegación de lista de categorías', 'text_domain'),
   );

   $args = array(
      'labels' => $labels,
      'hierarchical' => true,
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => true,
      'show_tagcloud' => true,
      'publicly_queryable' => false,
      'rewrite' => false
   );
   register_taxonomy('product_category', array('products'), $args);
}
add_action('init', 'registerCategoryProductsTaxonomy', 0);

// Register Sectors Post Type
function registerSectorsPostType()
{
   $labels = array(
      'name' => _x('Sectores', 'Post Type General Name', 'text_domain'),
      'singular_name' => _x('Sector', 'Post Type Singular Name', 'text_domain'),
      'menu_name' => __('Sectores', 'text_domain'),
      'name_admin_bar' => __('Sectores', 'text_domain'),
      'archives' => __('Archivo de sectores', 'text_domain'),
      'attributes' => __('Atributos del sector', 'text_domain'),
      'parent_item_colon' => __('sector principal:', 'text_domain'),
      'all_items' => __('Todos los sectores', 'text_domain'),
      'add_new_item' => __('Añadir nuevo sector', 'text_domain'),
      'add_new' => __('Añadir nuevo', 'text_domain'),
      'new_item' => __('Nuevo sector', 'text_domain'),
      'edit_item' => __('Editar sector', 'text_domain'),
      'update_item' => __('Actualizar sector', 'text_domain'),
      'view_item' => __('Ver sector', 'text_domain'),
      'view_items' => __('Ver sectores', 'text_domain'),
      'search_items' => __('Buscar sector', 'text_domain'),
      'not_found' => __('No se ha encontrado', 'text_domain'),
      'not_found_in_trash' => __('No se encuentra en la papelera', 'text_domain'),
      'featured_image' => __('Imagen destacada', 'text_domain'),
      'set_featured_image' => __('Establecer imagen destacada', 'text_domain'),
      'remove_featured_image' => __('Eliminar la imagen destacada', 'text_domain'),
      'use_featured_image' => __('Utilizar como imagen destacada', 'text_domain'),
      'insert_into_item' => __('Insertar en el sector', 'text_domain'),
      'uploaded_to_this_item' => __('Subido a este sector', 'text_domain'),
      'items_list' => __('Lista de sectores', 'text_domain'),
      'items_list_navigation' => __('Navegación por la lista de sectores', 'text_domain'),
      'filter_items_list' => __('Lista de sectores filtrados', 'text_domain'),
   );

   $rewrite = array(
      'slug' => 'sectores',
      'with_front' => true,
      'pages' => true,
      'feeds' => true,
   );

   $args = array(
      'label' => __('Sectores', 'text_domain'),
      'description' => __('Sectores', 'text_domain'),
      'labels' => $labels,
      'supports' => array('title', 'editor', 'revisions', 'post-formats', 'thumbnail'),
      'hierarchical' => true,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 10,
      'menu_icon' => 'dashicons-archive',
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => false,
      'can_export' => true,
      'has_archive' => false,
      'exclude_from_search' => false,
      'publicly_queryable' => false,
      'rewrite' => $rewrite,
      'capability_type' => 'page',
   );
   register_post_type('sectors', $args);
}
add_action('init', 'registerSectorsPostType', 0);
