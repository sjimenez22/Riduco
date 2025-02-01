<?php

$cats = [];

if ($_POST && $_POST['product_category']) {
   $parent = get_term_by('slug', $_POST['product_category'], 'product_category');

   if ($parent) {
      $args = array(
         'taxonomy' => 'product_category',
         'orderby' => 'name',
         'order'   => 'ASC',
         'parent'  => $parent->term_id,
      );
      $cats = get_categories($args);
   }
}
?>

<?php if ($cats):  ?>
   <?php foreach ($cats as $category) : ?>
      <button class="btn btn-sub-category mx-3" data-slug="<?php echo esc_html($category->slug); ?>"><?php echo esc_html($category->name); ?></button>
   <?php endforeach; ?>
   </div>
<?php endif; ?>