<?php
$image = '';
if ($args['image']) $image = $args['image'];
?>

<div class="bg-img-banner" style="background-image: url('<?php echo esc_url($image); ?>');">
   <div class="bg-overlay">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <h1 class="title fw-bold text-white"><?php echo esc_html(the_title()); ?></h1>
            </div>
         </div>
      </div>
   </div>
</div>