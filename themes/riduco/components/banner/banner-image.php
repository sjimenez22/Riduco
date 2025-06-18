<?php
$image = $args['image'] ?? 'https://riduco.com/wp-content/uploads/2022/07/direccionamiento_estrategico.jpg';
$title = $args['title'] ?? get_the_title();
?>

<div class="bg-img-banner" style="background-image: url('<?php echo esc_url($image); ?>');">
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