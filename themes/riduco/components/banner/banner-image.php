<?php
$image = $args['image'] ?? get_field('banner');
$title = $args['title'] ?? get_the_title();
?>

<div class="bg-img-banner" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
   <div class="bg-overlay">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <h1 class="title fw-bold text-white"><?php echo $title; ?></h1>
            </div>
         </div>
      </div>
   </div>
</div>