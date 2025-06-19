<?php

$cats = [];
$current_sub_category = 'all';

if ($_GET && $_GET['categoria']) {
   $parent = get_term_by('slug', $_GET['categoria'], 'product_category');

   if ($parent) {
      $args = array(
         'taxonomy' => 'product_category',
         'orderby' => 'name',
         'order'   => 'ASC',
         'parent'  => $parent->term_id,
      );
      $cats = get_categories($args);
   }

   if (isset($_GET['subCategoria'])) {
      $current_sub_category = $_GET['subCategoria'];
      if (!$current_sub_category) $current_sub_category = 'all';
   }
}
?>

<?php if ($cats):  ?>
   <button class="btn btn-sub-category mx-3 <?php if ($current_sub_category === 'all') echo 'active' ?>" data-slug="<?php echo esc_html($parent->slug); ?>" data-parent="1">Todos</button>

   <?php foreach ($cats as $category) : ?>
      <button class="btn btn-sub-category mx-3 <?php if ($current_sub_category === $category->slug) echo 'active' ?>" data-slug="<?php echo esc_html($category->slug); ?>"><?php echo esc_html($category->name); ?></button>
   <?php endforeach; ?>
<?php endif; ?>