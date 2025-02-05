<?php

/**
 * The template for displaying Unidad de negocio - Inyección
 * Template Name: Unidad de negocio - Inyección
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main">
   <?php
   $data = [
      'image' => 'https://riduco.com/wp-content/uploads/2022/07/direccionamiento_estrategico.jpg'
   ];
   get_template_part('components/banner/banner', 'image', $data);
   ?>

   <div class="bg-secondary">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0 align-self-md-center align-self-lg-start">
               <section class="splide splide-maquinas" aria-label="Carrusel de máquinas">
                  <div class="splide__track">
                     <ul class="splide__list">
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                     </ul>
                  </div>
               </section>
            </div>
            <div class="col-12 col-md-6 align-self-center py-md-4 py-lg-0">
               <h2 class="fw-bold text-third">Máquinas</h2>

               <ul class="text-white ps-0 ms-4">
                  <li>
                     67 máquinas inyectoras con capacidad de 7 hasta 4.000 toneladas de presión de cierre, Y de 1 gramo hasta 18 kilogramos.
                  </li>

                  <li>
                     40% de nuestras de máquinas son 100% eléctricas. Aportando a la productividad, y nuevas tecnologías limpias.
                  </li>

                  <li>
                     Máquina para inyección a 2 colores y/o materiales.
                  </li>

                  <li>
                     Inyección de piezas en materiales de ingeniería.
                  </li>

                  <li>
                     Área limpia de máquinas 100% eléctricas para productos de higiene y alimentos.
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="container my-4 my-md-5">
      <div class="row">
         <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="table-responsive">
               <table class="table table-striped">
                  <thead class="text-center">
                     <tr>
                        <th scope="col" class="text-third fs-4 fw-bold py-2 bg-secondary">Capacidad</th>
                        <th scope="col" class="text-third fs-4 fw-bold py-2 bg-secondary">N° de maquinas</th>
                     </tr>
                  </thead>
                  <tbody class="text-center">
                     <tr>
                        <td class="fw-bold text-primary">A (7 - 100 TON)</td>
                        <td class="fw-bold text-primary">6</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">B (110 - 250 TON)</td>
                        <td class="fw-bold text-primary">5</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">C (280 - 390 TON)</td>
                        <td class="fw-bold text-primary">15</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">D (400 - 600 TON)</td>
                        <td class="fw-bold text-primary">7</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">E (650 - 1200 TON)</td>
                        <td class="fw-bold text-primary">13</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">F (1500 - 2100 TON)</td>
                        <td class="fw-bold text-primary">2</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">G (4000 TON)</td>
                        <td class="fw-bold text-primary">1</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">J (MAQ INY ASEPSIA)</td>
                        <td class="fw-bold text-primary">16</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">H (MAQ INY MEDELLÍN 1100A - 1600A - 1600B - 3000)</td>
                        <td class="fw-bold text-primary">4</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">Total</td>
                        <td class="fw-bold text-primary">69</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>

         <div class="col-12 col-md-6">
            <div class="table-responsive">
               <table class="table table-striped">
                  <thead class="text-center">
                     <tr>
                        <th colspan="2" scope="col" class="text-third fs-4 fw-bold py-2 bg-secondary">Materiales</th>
                     </tr>
                  </thead>
                  <tbody class="text-center">
                     <tr>
                        <td class="fw-bold text-primary">ABS</td>
                        <td class="fw-bold text-primary">PSC</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">PSHI</td>
                        <td class="fw-bold text-primary">SAN</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">PC</td>
                        <td class="fw-bold text-primary">PC High Temperature</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">PMMA</td>
                        <td class="fw-bold text-primary">NYLON</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">NYLON + FIBER GLASS</td>
                        <td class="fw-bold text-primary">POM</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">PP</td>
                        <td class="fw-bold text-primary">PP + FIBER GLASS</td>
                     </tr>
                     <tr>
                        <td class="fw-bold text-primary">PELD</td>
                        <td class="fw-bold text-primary">PEHD</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-primary">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 align-self-center order-2 order-md-1 py-md-4 py-lg-0">
               <h2 class="fw-bold text-third">Robots</h2>

               <p class="text-white">
                  Actualmente, contamos con más de 60 automatismos donde se ve involucrada la automatización convencional haciendo uso de mecanismos integrados a PLC's para ejecutar actividades. Adicional a esto, se realizan integraciones con robots industriales de tipo cartesianos y de extracción lateral para nuestros procesos de inyección. Contamos con robots de 6 grados de libertad para nuestros procesos de ensamble, adicionando a esto un componente de gran importancia como lo es la visión artificial. Todo lo anterior, por un enfoque claro, en donde la implementación de este tipo de tecnologías nos acerque cada vez más a la industria 4.0, logrando de esta manera ser una compañía de clase mundial.
               </p>

               <h3 class="fw-bold text-white mb-1 fs-6">Nuestros robots</h3>
               <ul class="text-white ps-0 ms-0">
                  <li>
                     Cartesianos: Sepro, Wittmann, Reis, Krauss Maffei, Engel, Yushin, entre otros.
                  </li>

                  <li>
                     4 y 6 Grados De Libertad: Nachi, Motoman, Fanuc, Reis, Kuka, Scara- Epson.
                  </li>
               </ul>
            </div>

            <div class="col-12 col-md-6 order-1 order-md-2 mb-3 mb-md-0 align-self-md-center align-self-lg-start">
               <section class="splide splide-robots" aria-label="Carrusel de Robots">
                  <div class="splide__track">
                     <ul class="splide__list">
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                     </ul>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-fourth mt-0 mt-md-4">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0 align-self-md-center align-self-lg-start">
               <section class="splide splide-perifericos" aria-label="Carrusel de Periféricos">
                  <div class="splide__track">
                     <ul class="splide__list">
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                     </ul>
                  </div>
               </section>
            </div>

            <div class="col-12 col-md-6 align-self-center py-md-4 py-lg-0">
               <h2 class="fw-bold text-primary">Periféricos</h2>

               <ul class="text-primary ps-0 ms-4">
                  <li>
                     Sistemas adicionales para Inyección especializada: Secuencial, asistida por gas y aire de alta presión.
                  </li>

                  <li>
                     Apoyamos el control de proceso a través de termorreguladores, controles de temperatura, mezcladores.
                  </li>

                  <li>
                     Para el manejo de materia prima contamos con sistemas de abastecimiento de material por vacío, central de materiales con deshumidificadores y calentadores. También tenemos dosificadores de master y pigmento líquido, gravimétricos, y volumétricos que garantizan la precisión y la estabilidad de color.
                  </li>

                  <li>
                     Sistemas de puente grúa para montaje de moldes hasta 50 toneladas.
                  </li>

                  <li>
                     Sistemas de enfriamiento por Chiller y sistemas de enfriamiento de circuito cerrado, con las toneladas de refrigeración para todas las máquinas, moldes y equipos que lo requieran para obtener procesos estables, continuos, repetitivos y altamente confiables.
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-primary mt-0 mt-md-4">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 align-self-center order-2 order-md-1 py-md-4 py-lg-0">
               <h2 class="fw-bold text-third">Complementarios</h2>

               <ul class="text-white ps-0 ms-4">
                  <li>
                     Impresión para las piezas inyectadas con tampografía (4 colores) y Hot stamping.
                  </li>

                  <li>
                     Sellado por ultrasonido, vibración y alta frecuencia.
                  </li>

                  <li>
                     Sistemas automatizados para procesos label in Mold.
                  </li>
               </ul>
            </div>

            <div class="col-12 col-md-6 order-1 order-md-2 mb-3 mb-md-0 align-self-md-center align-self-lg-start">
               <section class="splide splide-complementarios" aria-label="Carrusel de Complementarios">
                  <div class="splide__track">
                     <ul class="splide__list">
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                        <li class="splide__slide">
                           <img src="https://placehold.co/1000" alt="Imagen prueba" class="img-fluid">
                        </li>
                     </ul>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
