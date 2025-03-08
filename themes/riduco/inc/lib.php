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

function insert_contact()
{
   global $wpdb;

   $required = array(
      "firstName",
      "lastName",
      "company",
      "email",
      "country",
      "phone",
      "description",
      "policies"
   );

   foreach ($required as $index) {
      if (empty($_POST[$index])) wp_send_json_error("Por favor completa todos los datos.");
   }

   $insert = $wpdb->insert(
      $wpdb->prefix . 'contacts',
      array(
         'contact_first_name' => sanitize_text_field($_POST['firstName']),
         'contact_last_name' => sanitize_text_field($_POST['lastName']),
         'contact_company' => sanitize_text_field($_POST['company']),
         'contact_email' => sanitize_email($_POST['email']),
         'contact_country' => sanitize_text_field($_POST['country']),
         'contact_phone' => sanitize_text_field($_POST['phone']),
         'contact_description' => sanitize_textarea_field($_POST['description']),
         'contact_policies' => 1,
         'contact_url' => $_POST['url']
      )
   );

   if ($insert) {
      wp_send_json_success('Contacto registrado');
   } else {
      wp_send_json_error('Contacto no registrado');
   }
}
add_action('wp_ajax_insert_contact', 'insert_contact');
add_action('wp_ajax_nopriv_insert_contact', 'insert_contact');
