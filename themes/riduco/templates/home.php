<?php

/**
 * The template for displaying home
 * Template Name: Home 
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main home">
   <?php
   get_template_part('components/banner/banner', 'video', $data);
   ?>

   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-md-9">
            <?php
            $args = array(
               'post_type'      => 'post',
               'post_status'    => 'publish',
               'orderby'        => 'date',
               'order'          => 'DESC',
               'posts_per_page' => 3,
            );

            $query_posts_publish = new WP_Query($args);

            if ($query_posts_publish->have_posts()) :
            ?>
               <div class="row ctn-blogs">
                  <?php
                  while ($query_posts_publish->have_posts()) : $query_posts_publish->the_post();

                     $group_image = get_field('banners');
                     $image = isset($group_image['banner_mobile']) ? $group_image['banner_mobile'] : '';
                  ?>
                     <div class="col-12 col-md-4 mb-4 mb-md-5">
                        <article id="post-<?php the_ID(); ?>" <?php post_class('blogs'); ?>>
                           <header class="entry-header mb-3">
                              <?php the_title(sprintf('<h2 class="entry-title fw-bold fs-3 mb-4 pt-3"><a href="%s" rel="bookmark" class="text-decoration-none text-primary">', esc_url(get_permalink())), '</a></h2>'); ?>

                              <div class="text-excerpt mb-3">
                                 <?php the_excerpt(); ?>
                              </div>
                           </header>

                           <div class="entry-image mb-3">
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                           </div>

                           <div class="text-end">
                              <a href="<?php echo esc_url(get_permalink()) ?>" class="text-third fw-bold text-decoration-none">
                                 <span>Seguir leyendo</span>
                              </a>
                           </div>
                        </article>
                     </div>
                  <?php endwhile;
                  wp_reset_postdata();
                  ?>
               </div>
            <?php endif; ?>
         </div>

         <div class="col-12 text-center mt-4">
            <a href="<?php echo site_url(); ?>/blog" class="btn btn-third">Conocé más blogs</a>
         </div>
      </div>

      <div class="row">
         <div class="col-12 text-primary text-center mt-4 mt-md-5 px-2 px-md-auto">
            <p>
               Somos líderes en inyección de plástico. Con más de 55 años de experiencia, Riduco se ha posicionado como un referente en la industria del plástico, destacándose por su búsqueda constante de la excelencia, que se manifiesta en la calidad, la innovación y la sostenibilidad de nuestros productos y procesos.Nuestra trayectoria, nos ha permitido desarrollar una amplia gama de productos plásticos inyectados, diseñados para satisfacer las necesidades de diversos sectores industriales.
            </p>

            <p>
               Impulsados por una cultura organizacional basada en valores sólidos y en la búsqueda constante de la excelencia, hemos logrado consolidarnos como un socio confiable para nuestros clientes. Nuestra experiencia, combinada con la implementación de tecnologías más avanzadas y procesos de fabricación eficientes, nos permite ofrecer soluciones personalizadas y duraderas. Además, nuestra preocupación por el medio ambiente nos lleva a desarrollar productos y procesos que minimicen nuestro impacto ambiental.
            </p>
         </div>
      </div>
   </div>

   <div class="bg-secondary mision">
      <div class="container">
         <div class="row pt-4 py-lg-4 position-relative">
            <div class="col-12 col-lg-4 text-center text-lg-start mb-4 mb-lg-auto">
               <h2 class="fw-bold fs-4 text-third">Misión</h2>

               <p class="text-white">
                  Riduco S.A es una empresa manufacturera con conocimiento técnico, experiencia y tecnología de punta; dedicada a la fabricación y comercialización de productos plásticos inyectados y extruídos, que garantiza a sus clientes calidad, confidencialidad, entrega oportuna, apoyo técnico, un equipo humano competente, compromiso con el desarrollo sostenible y a sus accionistas el retorno de la inversión con crecimiento permanente, mejora continua, eficiencia y productividad.
               </p>
            </div>

            <div class="col-12 col-lg-4 offset-lg-4 text-center text-lg-start">
               <h2 class="fw-bold fs-4 text-third">Visión</h2>
               <p class="text-white">
                  Para el 2030, Riduco se mantendrá como una empresa de clase mundial, comprometida con el desarrollo sostenible, incrementando la rentabilidad y la participación en el mercado, como aliado estratégico de sus clientes, a través de la excelencia operacional y un equipo humano competente.
               </p>
            </div>

            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/manos-home.webp" alt="Misión y visión" class="img-mision mt-md-4 mt-lg-none">
         </div>
      </div>
   </div>

   <div class="container mt-4 mt-md-5">
      <div class="row">
         <div class="col-12 text-center text-primary">
            <h2 class="fw-bold display-5">Unidades de negocio</h2>

            <p class="px-md-5 mt-3">
               Riduco brinda a sus clientes acompañamiento y pilotaje en el desarrollo de sus proyectos, aplicando metodologías mundialmente reconocidas como PPAP, ANPQP las cuales permiten asegurar el cumplimiento de todos sus requerimientos en cada una de las fases definidas desde el diseño del producto hasta su fabricación y validación.
            </p>
         </div>
      </div>
   </div>

   <div class="container-fluid mt-4 unidades-negocio px-0">
      <div class="image">
         <a href="<?php echo site_url(); ?>/inyeccion" class="text-decoration-none image">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/unidad-inyeccion-home.webp" alt="Inyección" class="img-fluid">
            <p class="fw-bold text-white title fs-2">Inyección</p>
         </a>
      </div>
      <div class="image">
         <a href="<?php echo site_url(); ?>/extrusion-paletizado" class="text-decoration-none image">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/unidad-extrusion-home.webp" alt="Extrusión y peletizado" class="img-fluid">
            <p class="fw-bold text-white title fs-2">Extrusión <br> y peletizado</p>
         </a>
      </div>
      <div class="image">
         <a href="<?php echo site_url(); ?>/productos" class="text-decoration-none image">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/unidad-productos-home.webp" alt="Productos propios" class="img-fluid">
            <p class="fw-bold text-white title fs-2">Productos <br> propios</p>
         </a>
      </div>
      <div class="image">
         <a href="<?php echo site_url(); ?>/moldes" class="text-decoration-none image">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/unidad-moldes-home.webp" alt="Moldes" class="img-fluid">
            <p class="fw-bold text-white title fs-2">Moldes</p>
         </a>
      </div>
   </div>

   <div class="bg-primary mt-4">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 align-self-center">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/donde-estamos-home.webp" alt="Donde estamos" class="img-fluid">
            </div>

            <div class="col-12 col-md-6 align-self-center py-4">
               <h2 class="text-third fw-bold text-center text-md-start">Dónde estamos hoy</h2>

               <p class="text-white text-center text-md-start">
                  A lo largo de más de 50 años de existencia, RIDUCO se ha caracterizado por estar presente en sectores claves de la economía nacional, acompañando siempre las necesidades de los clientes y las tendencias del mercado.
               </p>

               <div class="row my-4">
                  <div class="col-6 col-md-4 text-center">
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/02/icono-industria.png" alt="Industria del movimiento" class="img-fluid" width="80">
                     <p class="text-white small mt-3">Industria del movimiento</p>
                  </div>
                  <div class="col-6 col-md-4 text-center">
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/02/icono-cuidado-personal.png" alt="Cuidado personal" class="img-fluid" width="80">
                     <p class="text-white small mt-3">Cuidado personal</p>
                  </div>
                  <div class="col-6 col-md-4 text-center">
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/02/icono-agroindustrial.png" alt="Agroindustrial" class="img-fluid" width="80">
                     <p class="text-white small mt-3">Agroindustrial</p>
                  </div>
                  <div class="col-6 col-md-4 text-center">
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/02/icono-electrodomesticos.png" alt="Electrodomésticos" class="img-fluid" width="80">
                     <p class="text-white small mt-3">Electrodomésticos</p>
                  </div>
                  <div class="col-6 col-md-4 text-center">
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/02/icono-alimentos.png" alt="Alimentos" class="img-fluid" width="80">
                     <p class="text-white small mt-3">Alimentos</p>
                  </div>
                  <div class="col-6 col-md-4 text-center">
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/02/icono-otras-industrias.png" alt="Otras industrias" class="img-fluid" width="80">
                     <p class="text-white small mt-3">Otras industrias</p>
                  </div>
               </div>

               <div class="text-center">
                  <a href="<?php echo site_url(); ?>/sectores" class="btn btn-third fs-5 px-4">Continua leyendo</a>
               </div>
            </div>
         </div>
      </div>
   </div>

   <?php
   $data = [
      'color' => 'text-secondary'
   ];
   get_template_part('components/sliders/slider', 'clients', $data);
   ?>

   <div class="container mt-4 mt-md-5">
      <div class="row justify-content-center">
         <div class="col-12">
            <h2 class="display-5 fw-bold text-center mb-4 text-secondary">
               Nuestros certificados
            </h2>
         </div>

         <div class="col-12 col-md-9 ctn-cerficates d-block d-md-flex align-items-center justify-content-between">
            <div class="certificates">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/certificado-icontec.webp" alt="Certificado Icontec ISO 9001" class="img-fluid">
               <p class="text-secondary fw-bold fs-5">IATF 16949</p>
            </div>
            <div class="certificates">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/certificado-iatf-16949.png" alt="ISO 9001" class="img-fluid">
               <p class="text-secondary fw-bold fs-5">IATF 16949</p>
            </div>
            <div class="certificates">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/sello-energia-verde-epm.webp" alt="Energía Verde epm" class="img-fluid">
            </div>
         </div>

         <div class="col-12 col-md-9 ctn-cerficates d-block d-md-flex align-items-center justify-content-between">
            <div class="certificates">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/sello-objetivos-desarrollo-sostenible.webp" alt="Objetivos de desarrollo sostenible" class="img-fluid">
            </div>

            <div class="certificates">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/sello-andi.webp" alt="ANDI" class="img-fluid">
            </div>

            <div class="certificates">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/certificado-oea.png" alt="Certificado OEA" class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
