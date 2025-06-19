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
      "businessType",
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
         'contact_business_type' => sanitize_text_field($_POST['businessType']),
         'contact_description' => sanitize_textarea_field($_POST['description']),
         'contact_policies' => 1,
         'contact_url' => $_POST['url']
      )
   );

   if ($insert) {
      $data = [
         'name' => $_POST['firstName'],
         'lastName' => $_POST['lastName'],
         'company' => $_POST['company'],
         'email' => $_POST['email'],
         'country' => $_POST['country'],
         'phone' => $_POST['phone'],
         'businessType' => $_POST['businessType'],
         'description' => $_POST['description'],
         'policies' => 'Si',
         'url' => $_POST['url'],
         'date_created' => $_POST['date']
      ];

      ob_start();
      include get_template_directory() . '/template-emails/contact-template.php';
      $message = ob_get_clean();

      $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);
      $subject = sprintf('[%s] Cotización de proyecto', $blogname);

      add_filter('wp_mail_content_type', function () {
         return 'text/html';
      });

      if ($_POST['businessType'] === 'Comprar nuestro producto') {
         $sent = wp_mail('sebastianjimenez0397@gmail.com', $subject, $message);
      } else if ($_POST['businessType'] === 'Desarrollar un proyecto') {
         $sent = wp_mail('hollmangil24@gmail.com', $subject, $message);
      }

      remove_filter('wp_mail_content_type', function () {
         return 'text/html';
      });

      wp_send_json_success(['message' => 'Contacto registrado exitosamente', 'data' => $data]);
      wp_die();
   } else {
      wp_send_json_error('Contacto no registrado');
   }
}
add_action('wp_ajax_insert_contact', 'insert_contact');
add_action('wp_ajax_nopriv_insert_contact', 'insert_contact');
