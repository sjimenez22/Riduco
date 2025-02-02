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
   $data = [
      'video' => 'https://riduco.com/wp-content/uploads/2022/07/direccionamiento_estrategico.jpg'
   ];
   get_template_part('components/banner/banner', 'video', $data);
   ?>

   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-md-9">
            <div class="row ctn-blogs">
               <div class="col-12 col-md-4 position-relative">
                  <div class="blogs">
                     <p class="py-5 text-primary fw-bold text-category">Categoría</p>

                     <h2 class="fw-bold text-primary fs-3 mb-4">Titulo de una nueva entrada</h2>

                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto sit ratione autem dolorum at vel aliquid veritatis iste illo expedita odio, molestias inventore alias non quae, quod suscipit impedit magni.</p>

                     <img src="https://placehold.co/1000" alt="Imagen blog" class="img-fluid">

                     <div class="text-end mt-4">
                        <a href="#" class="text-third">Seguir leyendo</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-4 position-relative">
                  <div class="blogs">
                     <p class="py-5 text-primary fw-bold text-category">Categoría</p>

                     <h2 class="fw-bold text-primary fs-3 mb-4">Titulo de una nueva entrada</h2>

                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto sit ratione autem dolorum at vel aliquid veritatis iste illo expedita odio, molestias inventore alias non quae, quod suscipit impedit magni.</p>

                     <img src="https://placehold.co/1000" alt="Imagen blog" class="img-fluid">

                     <div class="text-end mt-4">
                        <a href="#" class="text-third">Seguir leyendo</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-4 position-relative">
                  <div class="blogs">
                     <p class="py-5 text-primary fw-bold text-category">Categoría</p>

                     <h2 class="fw-bold text-primary fs-3 mb-4">Titulo de una nueva entrada</h2>

                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto sit ratione autem dolorum at</p>

                     <img src="https://placehold.co/1000" alt="Imagen blog" class="img-fluid">

                     <div class="text-end mt-4">
                        <a href="#" class="text-third">Seguir leyendo</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-12 text-center mt-4">
            <a href="#" class="btn btn-third">Conocé más blogs</a>
         </div>
      </div>

      <div class="row">
         <div class="col-12 text-primary text-center mt-4 mt-md-5">
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
         <div class="row py-4 position-relative">
            <div class="col-12 col-md-4">
               <h2 class="fw-bold fs-4 text-third">Misión</h2>

               <p class="text-white">
                  Riduco S.A es una empresa manufacturera con conocimiento técnico, experiencia y tecnología de punta; dedicada a la fabricación y comercialización de productos plásticos inyectados y extruídos, que garantiza a sus clientes calidad, confidencialidad, entrega oportuna, apoyo técnico, un equipo humano competente, compromiso con el desarrollo sostenible y a sus accionistas el retorno de la inversión con crecimiento permanente, mejora continua, eficiencia y productividad.
               </p>
            </div>
            <div class="col-12 col-md-4 offset-md-4">
               <h2 class="fw-bold fs-4 text-third">Visión</h2>
               <p class="text-white">
                  Para el 2030, RIDUCO se mantendrá como una empresa de clase mundial, comprometida con el desarrollo sostenible, incrementando la rentabilidad y la participación en el mercado, como aliado estratégico de sus clientes, a través de la excelencia operacional y un equipo humano competente.
               </p>
            </div>

            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/02/mision-vision-home-e1738514187952.png" alt="Misión y visión" class="img-mision">
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
         <img src="https://placehold.co/400x300" alt="Prueba" class="img-fluid">
         <p class="fw-bold text-white title fs-2">Inyección</p>
      </div>
      <div class="image">
         <img src="https://placehold.co/400x300" alt="Prueba" class="img-fluid">
         <p class="fw-bold text-white title fs-2">Extrusión <br> y peletizado</p>
      </div>
      <div class="image">
         <img src="https://placehold.co/400x300" alt="Prueba" class="img-fluid">
         <p class="fw-bold text-white title fs-2">Productos <br> propios</p>
      </div>
      <div class="image">
         <img src="https://placehold.co/400x300" alt="Prueba" class="img-fluid">
         <p class="fw-bold text-white title fs-2">Moldes</p>
      </div>
   </div>

   <div class="bg-primary mt-4">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 align-self-center">
               <img src="https://placehold.co/1000" alt="Imagen" class="img-fluid">
            </div>

            <div class="col-12 col-md-6 align-self-center py-4">
               <h2 class="text-third fw-bold">Dónde estamos hoy</h2>

               <p class="text-white">
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
                  <a href="#" class="btn btn-third fs-5 px-4">Continua leyendo</a>
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

         <div class="col-12 col-md-9 ctn-cerficates">
            <div class="certificates">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/certificado-iso-9001.png" alt="ISO 9001" class="img-fluid">
               <p class="text-secondary fw-bold fs-5">IATF 16949</p>
            </div>
            <div class="certificates">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/certificado-iatf-16949.png" alt="ISO 9001" class="img-fluid">
               <p class="text-secondary fw-bold fs-5">IATF 16949</p>
            </div>
            <div class="certificates">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/certificado-oea.png" alt="ISO 9001" class="img-fluid">
               <p class="text-secondary fw-bold fs-5">CALIFICACIÓN OEA</p>
            </div>
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
