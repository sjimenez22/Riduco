<?php

/**
 * The template for displaying Direccionamiento estratégico
 * Template Name: Direccionamiento estratégico 
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main direccionamiento-estrategico">
   <?php
   $data = [
      'image' => 'https://riduco.com/wp-content/uploads/2022/07/direccionamiento_estrategico.jpg'
   ];
   get_template_part('components/banner/banner', 'image', $data);
   ?>

   <div class="bg-secondary mt-lg-4 position-relative">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-5 py-3 py-lg-5 mision text-center text-lg-start order-2 order-lg-1">
               <h2 class="text-third fw-bold">Misión</h2>
               <p class="text-white">
                  Riduco S.A es una empresa manufacturera con conocimiento técnico, experiencia y tecnología de punta; dedicada a la fabricación y comercialización de productos plásticos inyectados y extruídos, que garantiza a sus clientes calidad, confidencialidad, entrega oportuna, apoyo técnico, un equipo humano competente, compromiso con el desarrollo sostenible y a sus accionistas el retorno de la inversión con crecimiento permanente, mejora continua, eficiencia y productividad.
               </p>
            </div>

            <div class="col-12 col-lg-2 img-mision-vision d-none d-lg-block order-lg-2" style="background-image: url(<?php echo site_url() ?>/wp-content/uploads/2025/01/mision-vision.png);">
            </div>

            <div class="col-12 col-lg-2 img-mision-vision d-block d-lg-none order-1 order-lg-2" style="background-image: url(<?php echo site_url() ?>/wp-content/uploads/2025/01/mision-vision-mobile.png); height: 180px;">
            </div>

            <div class="col-12 col-lg-5 py-3 py-lg-5 text-center text-lg-start order-3">
               <h2 class="text-third fw-bold">Visión</h2>
               <p class="text-white">
                  Para el 2030, RIDUCO se mantendrá como una empresa de clase mundial, comprometida con el desarrollo sostenible, incrementando la rentabilidad y la participación en el mercado, como aliado estratégico de sus clientes, a través de la excelencia operacional y un equipo humano competente.
               </p>
            </div>
         </div>
      </div>
   </div>

   <div class="container mt-4">
      <div class="row">
         <div class="col-12 text-center text-primary">
            <img src="<?php echo site_url() ?>/wp-content/uploads/2025/01/icono-sostenibilidad.png" alt="Icono Sostenibilidad" class="img-fluid mb-2">
            <h2 class="display-5 fw-bold">Sostenibilidad</h2>
            <p class="px-md-5">
               Riduco consolida su actuación empresarial con principios éticos, estricta atención a las normas legales y con la disposición de proyectar a sus colaboradores a que sean ciudadanos con valores morales, sociales y profesionales.
            </p>

            <p class="px-md-5">
               Nos comprometemos con una gestión responsable al interactuar con los grupos de interés y con el medio ambiente; como parte de esta filosofía, la empresa tiene entre sus objetivos contribuir al progreso económico y social de la región y el país.
            </p>
         </div>
      </div>
   </div>

   <div class="container-fluid position-relative">
      <div class="bg-sostenibilidad-empresarial"></div>

      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 align-self-center text-center text-lg-start">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/sostenibilidad-empresarial.png" alt="Sostenibilidad Empresarial" class="img-fluid">
            </div>

            <div class="col-12 col-md-6 text-primary text-center text-md-start py-5 pe-md-5 align-self-center">
               <h2 class="fs-1 fw-bold">Sostenibilidad Empresarial</h2>
               <p>
                  Programa de responsabilidad social empresarial que orienta la conducta de todos nuestros colaboradores hacia una administración transparente e íntegra para un desarrollo sostenible.
               </p>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-secondary">
      <div class="container py-4">
         <div class="row py-3 py-lg-5">
            <div class="col-12 col-lg-6 text-center text-lg-start">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/gestion-social.png" alt="Gestión Social" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6">
               <h2 class="text-third fs-3 fw-bold text-center text-lg-start mt-4 mt-lg-auto">Gestión social</h2>
               <p class="text-white">
                  Nuestros principales objetivos en gestión humana, desarrollando el talento y mejorando la calidad de vida de nuestra gente, son potenciar a nuestra gente y ser un excelente lugar para trabajar. Esto lo logramos con programas como:
               </p>

               <ul class="ps-0 text-white ms-3">
                  <li class="mb-2">Kaizen - ideas de mejora - sistemas de innovación</li>
                  <li class="mb-2">Plan sucesoral y ruta de desarrollo profesional</li>
                  <li class="mb-2">Plan de entrenamiento ESTANDARIZADOS en manufactura</li>
                  <li class="mb-2">Escuela de destrezas</li>
                  <li class="mb-2">Horario flexible</li>
                  <li class="mb-2">Evaluación de desempeño y medición clima laboral</li>
                  <li class="mb-2">Comité de Convivencia laboral</li>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-ambiental">
      <div class="container py-4">
         <div class="row py-3 py-lg-5">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
               <h2 class="text-third fs-3 fw-bold text-center text-lg-start mt-4 mt-lg-auto">Ambiental</h2>
               <p class="text-white">
                  Somos una empresa responsable ambientalmente que hace uso eficiente de los recursos naturales y crea impactos positivos para la sociedad.
               </p>

               <p class="text-white">
                  Optimizamos el recurso hídrico en las plantas de Medellín y Manizales: proyecto enfocado en el ahorro de agua y energía, reemplazando las torres de enfriamiento convencionales por sistemas adiabáticos de alta tecnología. 61% de ahorro en agua.
               </p>

               <ul class="ps-0 text-white ms-3">
                  <li class="mb-2">El 47% de nuestra maquinaria es eléctrica para obtener eficiencia energética</li>
                  <li class="mb-2">Comité Energético. Nuestro objetivo es fomentar el uso racional y eficiente de la energía y para reducir los consumos y costos financieros</li>
                  <li class="mb-2">Educación ambiental y conciencia ecológica</li>
                  <li class="mb-2">Medición de la huella de carbono</li>
                  <li class="mb-2">Clasificación de residuos y reutilización de resinas y material de empaque</li>
                  <li class="mb-2">Promoción de cultura del reciclaje</li>
                  <li class="mb-2">En las plantas de Manizales usamos energía de recursos 100% renovable</li>
               </ul>
            </div>

            <div class="col-12 col-lg-6 order-1 order-lg-2 text-center text-lg-start">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/gestion-ambiental.png" alt="Gestión Ambiental" class="img-fluid">
            </div>
         </div>
      </div>
   </div>

   <div class="mt-0 mt-md-4 ctn-empresarial">
      <div class="container">
         <div class="row py-0 py-md-4">
            <div class="col-12 col-md-6 align-self-center bg-title py-4 py-md-0">
               <p class="text-primary fw-bold display-5 text-center pe-0 pe-md-3">
                  Principios de buen gobierno corporativo y ética empresarial
               </p>
            </div>

            <div class="col-12 col-md-6 align-self-center d-flex justify-content-center py-4 py-md-0 bg-description">
               <div class="ctn-description">
                  <p class="text-white text-center text-md-start">
                     Nuestro código de ética y buen gobierno corporativo permite relaciones de administración transparentes e íntegras con nuestros grupos de interés, bajo los principios del marco mundial de derechos humanos.
                  </p>

                  <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
                     <a href="<?php echo site_url(); ?>/wp-content/uploads/2025/01/Manual-de-Gobierno-Corporativo.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-third text-decoration-none text-small mb-3 mb-lg-0">Manual de Gobierno Corporativo</a>

                     <a href="<?php echo site_url(); ?>/wp-content/uploads/2025/01/Manual-Sagrilaft.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-third text-decoration-none text-small">Manual Sagrilaft</a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="triangle"></div>
   </div>

   <div class="container mt-4 mt-md-5">
      <div class="row">
         <div class="col-12">
            <h2 class="fw-bold display-5 text-center text-primary">Responsabiliza RSE</h2>
         </div>

         <div class="col-12 d-block d-md-flex justify-content-between mt-3">
            <div class="box-rse border-primary-3 text-primary me-3 py-3">
               <div class="text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/icono-no-al-trabajo-infantil.png" alt="No al trabajo infantil" class="img-fluid mb-3" width="70">

                  <p class="fw-bold">
                     No al trabajo infantil
                  </p>

                  <p class="text-description">
                     No apoyamos el trabajo infantil, por esta razón está prohibida la contratación de niños o utilización de estos para desempeñar cualquier tipo de labor
                  </p>
               </div>

               <div class="triangle"></div>
            </div>

            <div class="box-rse border-secondary-3 text-primary me-3 py-3">
               <div class="text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/icono-remuneracion-equitativa.png" alt="Remuneración equitativa" class="img-fluid mb-3" width="70">

                  <p class="fw-bold">
                     Remuneración equitativa
                  </p>

                  <p class="text-description">
                     Los salarios y sus componentes prestacionales son acordes a lo establecido en la legislación laboral colombiana.
                  </p>
               </div>

               <div class="triangle secondary"></div>
            </div>

            <div class="box-rse border-third-3 text-primary me-3 py-3">
               <div class="text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/icono-no-discriminacion.png" alt="No discriminación" class="img-fluid mb-3" width="70">

                  <p class="fw-bold">
                     No discriminación
                  </p>

                  <p class="text-description">
                     Al contratar, remunerar, o despedir al personal no se efectúa ningún tipo de discriminación basada en los atributos de: raza, origen nacional, religión, edad, filiación política, discapacidad, género u orientación sexual.
                  </p>
               </div>

               <div class="triangle third"></div>
            </div>

            <div class="box-rse border-fourth-3 text-primary me-3 py-3">
               <div class="text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/icono-libertad-de-expresion.png" alt="Libertad de expresión" class="img-fluid mb-3" width="70">

                  <p class="fw-bold">
                     Libertad de expresión
                  </p>

                  <p class="text-description">
                     Apoyamos la apertura de las ideas provenientes de cada empleado, aceptando la retroalimentación, las opiniones diferentes, entre otras, a través de comunicaciones abiertas, francas y oportunas.
                  </p>
               </div>

               <div class="triangle fourth"></div>
            </div>

            <div class="box-rse border-primary-3 text-primary me-3 py-3">
               <div class="text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/icono-seguridad-y-salud-en-el-trabajo.png" alt="Seguridad y salud en el trabajo" class="img-fluid mb-3" width="70">

                  <p class="fw-bold">
                     Seguridad y salud en el trabajo
                  </p>

                  <p class="text-description">
                     Garantizamos un entorno seguro y saludable para nuestros colaboradores evaluando los riesgos de cada actividad.
                  </p>
               </div>

               <div class="triangle"></div>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-primary mt-4 mt-md-5">
      <div class="container-fluid">
         <div class="row position-relative">
            <div class="col-12">
               <div class="container">
                  <div class="row">
                     <div class="col-12 col-md-6 py-4 py-md-5 text-center text-md-start">
                        <h2 class="fw-bold text-third">Gestión con la comunidad</h2>
                        <p class="text-white pe-4">
                           Como organización responsable velamos por el desarrollo de la comunidad y la sociedad, encaminando nuestros esfuerzos para brindar mecanismos al mejoramiento en calidad de vida, educación y reducción de los índices de pobreza.
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <div class="bg-gestion-comunidad" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2025/01/gestion-con-la-comunidad.png);"></div>
         </div>
      </div>
   </div>

   <div class="bg-gradient-secondary-fourth ctn-comunidad">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-4 text-center bg-secondary py-4 text-white position-relative">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/icono-programa-caja-de-ilusiones.png" alt="PROGRAMA CAJA DE ILUSIONES" class="img-fluid mb-3">

               <h2 class="fw-bold fs-3 mb-3">PROGRAMA CAJA DE ILUSIONES</h2>
               <p>
                  Riduco apoya a la Corporación de la Sagrada Familia, ONG dedicada a prestar atención integral a más 350 madres gestantes y población de la primera infancia de comunidades vulnerables de la ciudad de Manizales. Esto se logra realizando micro donaciones por parte de los trabajadores, acompañando diferentes espacios con charlas de varios temas, actividades lúdicas y diferentes momentos en los que la empresa comparte con las madres gestantes.
               </p>

               <div class="triangle"></div>
            </div>
            <div class="col-12 col-md-4 text-center bg-third py-4 text-primary position-relative">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/icono-voluntariado.png" alt="VOLUNTARIADO CORPORATIVO" class="img-fluid mb-3">

               <h2 class="fw-bold fs-3 mb-3">VOLUNTARIADO CORPORATIVO</h2>
               <p class="px-md-2">
                  Promovemos el voluntariado en los trabajadores para que aporten de su tiempo laboral, apoyo logístico y pedagógico en los 17 talleres de proyecto de vida para las madres gestantes que agrupa la Corporación de La Sagrada Familia.
               </p>

               <div class="triangle third"></div>
            </div>
            <div class="col-12 col-md-4 text-center bg-fourth py-4 text-white position-relative">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/icono-donaciones.png" alt="DONACIONES" class="img-fluid mb-3">

               <h2 class="fw-bold fs-3 mb-3">DONACIONES</h2>
               <p class="ps-md-2">
                  La junta directiva de RIDUCO asigna las donaciones anuales de las utilidades. Se realizan donaciones en especie y en dinero a entidades sin ánimo de lucro de población vulnerable, entidades educativas de bajos recursos y para incentivar la educación musical en la población infantil.
               </p>
            </div>
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
