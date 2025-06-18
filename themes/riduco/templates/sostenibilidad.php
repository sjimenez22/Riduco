<?php

/**
 * The template for displaying Sostenibilidad
 * Template Name: Sostenibilidad
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main sostenibilidad">
   <?php
   $data = [
      'image' => 'https://riduco.com/wp-content/uploads/2022/07/direccionamiento_estrategico.jpg'
   ];
   get_template_part('components/banner/banner', 'image', $data);
   ?>

   <div class="container mt-4 mt-md-5">
      <div class="row">
         <div class="col-12 mb-3 text-center">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/01/icono-sostenibilidad.png" alt="Icono sostenibilidad" width="120">
         </div>

         <div class="col-12">
            <h2 class="text-primary fw-bold text-center fs-1">Nuestro compromiso con la Sostenibilidad</h2>
         </div>

         <div class="col-12 col-md-8 mt-4 offset-md-2">
            <p>
               En Riduco S.A orientamos nuestra gestión hacia el cumplimiento de los Objetivos de Desarrollo Sostenible.
            </p>
            <p>
               Para ello, nuestras actividades estratégicas están alineadas con los Estándares del Global Reporting Initiative (GRI), agrupadas en tres ejes fundamentales: <br>
               SOCIAL - ECONÓMICO - AMBIENTAL
            </p>
            <p>
               En cada uno de estos EJES trabajamos para satisfacer las expectativas y necesidades de nuestros GRUPOS DE INTERÉS.
            </p>
         </div>
      </div>
   </div>

   <div class="sct-ods position-relative">
      <div class="container mt-4 mt-md-5">
         <div class="row">
            <div class="col-12">
               <h2 class="text-primary fw-bold text-center fs-1">Nuestros ODS</h2>
            </div>

            <div class="col-12 my-4 my-md-5">
               <section class="splide splide-ods" aria-label="Carrusel de nuestro ods">
                  <div class="splide__track">
                     <ul class="splide__list">
                        <li class="splide__slide text-center">
                           <div class="container">
                              <div class="row">
                                 <div class="col-12 px-0">
                                    <h3 class="text-white text-uppercase fw-bold fs-2 title py-3">SOCIAL</h3>
                                 </div>
                              </div>

                              <div class="row py-3 box-ods">
                                 <div class="col-12 col-md-7 content">
                                    <div class="row">
                                       <div class="col-6 col-md-4 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-3.webp" alt="3. Salud y Bienestar" width="150">
                                       </div>
                                       <div class="col-6 col-md-4 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-4.webp" alt="4. Educación de calidad" width="150">
                                       </div>
                                       <div class="col-6 col-md-4 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-8.webp" alt="8. Trabajo decentes y crecimiento económico" width="150">
                                       </div>
                                       <div class="col-6 col-md-4 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-10.webp" alt="Reducción de las desigualdades" width="150">
                                       </div>
                                       <div class="col-6 col-md-4 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-16.webp" alt="16. Paz, justicia e instituciones sólidas" width="150">
                                       </div>
                                       <div class="col-6 col-md-4 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-17.webp" alt="17. Alianzas para lograr los objetivos" width="150">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-5">
                                    <div class="row justify-content-center">
                                       <div class="col-6 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-gobierno-corporativo.webp" alt="Icono Gobierno Corporativo" width="115">
                                          <p class="text-primary fw-bold mb-0 mt-3">Gobierno Corporativo</p>
                                       </div>
                                       <div class="col-6 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-colaboradores.webp" alt="Icono Colaboradores" width="115">
                                          <p class="text-primary fw-bold mb-0 mt-3">Colaboradores</p>
                                       </div>
                                       <div class="col-6 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-comunidad.webp" alt="Icono Comunidad" width="115">
                                          <p class="text-primary fw-bold mb-0 mt-3">Comunidad</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="splide__slide text-center">
                           <div class="container">
                              <div class="row">
                                 <div class="col-12 px-0">
                                    <h3 class="text-white text-uppercase fw-bold fs-2 title py-3">Económico</h3>
                                 </div>
                              </div>

                              <div class="row py-3 box-ods">
                                 <div class="col-12 col-md-7 content">
                                    <div class="row">
                                       <div class="col-6 col-md-4 mb-2 offset-md-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-3.webp" alt="3. Salud y Bienestar" width="150">
                                       </div>
                                       <div class="col-6 col-md-4 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-8.webp" alt="8. Trabajo decentes y crecimiento económico" width="150">
                                       </div>
                                       <div class="col-6 col-md-4 mb-2 offset-md-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-9.webp" alt="9. Industria, innovación e infraestructura" width="150">
                                       </div>
                                       <div class="col-6 col-md-4 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-17.webp" alt="17. Alianzas para lograr los objetivos" width="150">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-5 align-self-center">
                                    <div class="row justify-content-center">
                                       <div class="col-6 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-clientes.webp" alt="Icono Clientes" width="115">
                                          <p class="text-primary fw-bold mb-0 mt-3">Clientes</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="splide__slide text-center">
                           <div class="container">
                              <div class="row">
                                 <div class="col-12 px-0">
                                    <h3 class="text-white text-uppercase fw-bold fs-2 title py-3">Ambiental</h3>
                                 </div>
                              </div>

                              <div class="row py-3 box-ods">
                                 <div class="col-12 col-md-7 content">
                                    <div class="row">
                                       <div class="col-6 col-md-4 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-7.webp" alt="7. Energía asequible y no contaminante" width="150">
                                       </div>
                                       <div class="col-6 col-md-4 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-12.webp" alt="12. Producción y consumo responsables" width="150">
                                       </div>
                                       <div class="col-6 col-md-4 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/ods-13.webp" alt="13. Acción por el clima" width="150">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-5 align-self-center">
                                    <div class="row justify-content-center">
                                       <div class="col-6 mb-2">
                                          <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-comunidad.webp" alt="Icono Comunidad" width="115">
                                          <p class="text-primary fw-bold mb-0 mt-3">Comunidad</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </section>
            </div>
         </div>

         <picture>
            <source media="(max-width: 767px)" srcset="<?php echo site_url(); ?>/wp-content/uploads/2025/06/bg-pasto-mobile.webp">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/pasto-desktop.webp" alt="Pasto" class="bg-pasto">
         </picture>
      </div>
   </div>

   <div class="bg-secondary">
      <div class="container">
         <div class="row">
            <div class="col-12 py-4 py-md-5">
               <h2 class="text-white fw-bold text-center fs-1">Gobierno Corporativo</h2>

               <p class="text-white px-auto px-md-5">
                  Los elementos que se encuentran en la parte inferior no solo definen nuestro Propósito, Dirección Estratégica y Prácticas Empresariales, sino que también se reflejan en las acciones y el cumplimiento que llevamos a cabo.
               </p>

               <div class="col-12">
                  <div class="row sct-gobierno">
                     <div class="col-6 col-md-3 text-center mb-3 mb-md-auto">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/logo-mision.webp" alt="Logo mision">
                        <p class="text-white mt-2 mb-0">
                           Misión
                        </p>
                     </div>
                     <div class="col-6 col-md-3 text-center mb-3 mb-md-auto">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/logo-vision.webp" alt="Logo visión">
                        <p class="text-white mt-2 mb-0">
                           Visión
                        </p>
                     </div>
                     <div class="col-6 col-md-3 text-center mb-3 mb-md-auto">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/logo-valores.webp" alt="Logo valores">
                        <p class="text-white mt-2 mb-0">
                           Valores
                        </p>
                     </div>
                     <div class="col-6 col-md-3 text-center mb-3 mb-md-auto">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/logo-estructura.webp" alt="Logo estructura">
                        <p class="text-white mt-2 mb-0">
                           Estructura organizacional
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-primary position-relative">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-5 py-3 py-lg-5 mision order-2 order-lg-1">
               <h3 class="text-third fw-bold text-center">Acciones y cumplimiento</h3>
               <ul class="text-white ps-0 ms-4">
                  <li>
                     Planeación financiera sostenible.
                  </li>

                  <li>
                     Gestión de riesgos.
                  </li>

                  <li>
                     Prevención del Soborno Transnacional.
                  </li>

                  <li>
                     Prevención del Lavado de Activos Protección de datos personales.
                  </li>

                  <li>
                     Responsabilidad Social Empresarial (RSE).
                  </li>
               </ul>
            </div>

            <div class="col-12 col-lg-2 img-acciones d-none d-lg-block order-lg-2" style="background-image: url(<?php echo site_url() ?>/wp-content/uploads/2025/06/imagen-acciones-sostenibilidad-desktop.webp);">
            </div>

            <div class="col-12 col-lg-2 img-acciones d-block d-lg-none order-1 order-lg-2" style="background-image: url(<?php echo site_url() ?>/wp-content/uploads/2025/01/mision-vision-mobile.png); height: 180px;">
            </div>

            <div class="col-12 col-lg-5 py-3 py-lg-5 order-3">
               <h3 class="text-third fw-bold text-center">Resultados</h3>
               <ul class="text-white ps-0 ms-4">
                  <li>
                     Impactos en grupos de interés.
                  </li>

                  <li>
                     Contribuciones a la economía de la región.
                  </li>

                  <li>
                     Sostenibilidad financiera, ambiental y social.
                  </li>

                  <li>
                     Cumplimiento normativo.
                  </li>

                  <li>
                     Cultura organizacional.
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="sct-ods position-relative">
      <div class="container py-4 py-md-5">
         <div class="row">
            <div class="col-12 text-primary">
               <h2 class="text-center fw-bold fs-1">Gobierno Corporativo</h2>

               <p class="text-center fs-5">
                  Responsabilidad Social Empresarial (RSE)
               </p>

               <p class="mt-4 mt-md-5 px-auto px-md-5 text-start text-md-center">
                  Riduco es auditado en responsabilidad social por un organismo externo acreditado bajo el estándar SMETA 4P.
               </p>

               <div class="text-center">
                  <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/gobierno-rse.webp" alt="Gobierno RSE">
               </div>
            </div>
         </div>

         <picture>
            <source media="(max-width: 767px)" srcset="<?php echo site_url(); ?>/wp-content/uploads/2025/06/bg-pasto-mobile.webp">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/pasto-desktop.webp" alt="Pasto" class="bg-pasto">
         </picture>
      </div>
   </div>

   <div class="bg-secondary">
      <div class="container py-4 py-md-5">
         <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0 align-self-md-center align-self-lg-start">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/nuestros-colaboradores.webp" alt="Nuestros colaboradores">
            </div>

            <div class="col-12 col-md-6 align-self-center ps-auto ps-md-4 py-md-4 py-lg-0">
               <h2 class="fw-bold text-third">Nuestros colaboradores</h2>

               <p class="text-white">
                  En nuestra Organización consideramos a nuestros colaboradores como pilar fundamental para cumplir los ODS
                  (Objetivos de Desarrollo Sostenible).
               </p>

               <p class="text-white">
                  Su compromiso, talento y dedicación impulsan las iniciativas sostenibles y permiten que nuestros proyectos tengan un impacto real y positivo en la sociedad y el medio ambiente.
               </p>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-primary">
      <div class="container py-4 py-md-5">
         <div class="row">
            <div class="col-12 col-md-6 align-self-center ps-auto ps-md-4 py-md-4 py-lg-0 order-1 order-md-0">
               <h2 class="fw-bold text-third">NUESTRAS INICIATIVAS</h2>

               <ul class="text-white ps-0 ms-4">
                  <li>
                     Certificación de competencias laborales.
                  </li>

                  <li>
                     Desarrollo de habilidades y destrezas del área productiva.
                  </li>

                  <li>
                     Bonos de Productividad.
                  </li>

                  <li>
                     Programa Profesional Integral.
                  </li>

                  <li>
                     Alianzas con Entidades Educativas.
                  </li>

                  <li>
                     Apoyo al bilingüismo.
                  </li>

                  <li>
                     Jornada Laboral Flexible.
                  </li>

                  <li>
                     Jornadas de salud integral para el autocuidado.
                  </li>

                  <li>
                     Desarrollo de habilidades blandas a través del couching.
                  </li>

                  <li>
                     Proyectos de bienestar laboral
                  </li>
               </ul>
            </div>

            <div class="col-12 col-md-6 mb-3 mb-md-0 align-self-md-center align-self-lg-start order-0 order-md-1">
               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/nuestras-iniciativas.webp" alt="Nuestras iniciativas">
            </div>
         </div>
      </div>
   </div>

   <div class="sct-iniciativas position-relative">
      <div class="container py-4 py-md-5">
         <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-auto">
               <div class="box-iniciativa p-3">
                  <div class="text-center">
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-comunidad.webp" alt="Icono Comunidad" width="150">
                     <h2 class="fw-bold text-primary">Comunidad</h2>
                  </div>

                  <p class="text-primary">
                     Creemos que al trabajar de la mano con la comunidad podemos identificar sus necesidades y prioridades para generar cambios significativos que impulsen el desarrollo
                     a largo plazo
                  </p>
               </div>

               <div class="bg-primary p-3 box-information">
                  <h3 class="fw-bold text-white text-center">Nuestras iniciativas</h3>
                  <ul class="text-white ps-0 ms-4">
                     <li>
                        Apoyo a Madres Gestantes en condición de vulnerabilidad.
                     </li>

                     <li>
                        Viveros comunitarios con el fin de reforesta zonas aledañas.
                     </li>

                     <li>
                        Disposición de residuos plásticos para apoyo a niños con cáncer.
                     </li>

                     <li>
                        Alianza con Gremios para Proyectos Ecológicos.
                     </li>

                     <li>
                        Donaciones para fines de educativos de población infantil vulnerada.
                     </li>
                  </ul>
               </div>
            </div>

            <div class="col-12 col-md-6">
               <div class="box-iniciativa p-3">
                  <div class="text-center">
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-clientes.webp" alt="Icono clientes" width="150">
                     <h2 class="fw-bold text-primary">Clientes</h2>
                  </div>

                  <p class="text-primary">
                     Reconocemos el papel de nuestros clientes en nuestra Organización.
                  </p>

                  <p class="text-primary">
                     Gracias a su apoyo podemos adoptar un enfoque de negocio que refleje nuestro compromiso con la aplicación de prácticas responsables que beneficien a toda nuestra cadena de valor.
                  </p>
               </div>

               <div class="bg-primary p-3 box-information">
                  <h3 class="fw-bold text-white text-center">Nuestras iniciativas</h3>
                  <ul class="text-white ps-0 ms-4">
                     <li>
                        Tecnología de Punta y Renovación Tecnológica.
                     </li>

                     <li>
                        Automatización de Procesos Productivos.
                     </li>

                     <li>
                        Excelencia Operacional.
                     </li>

                     <li>
                        Oportunidad en Tiempos de Respuesta.
                     </li>

                     <li>
                        Cumplimiento de los requisitos y expectativas de los clientes.
                     </li>
                  </ul>
               </div>
            </div>
         </div>

         <picture>
            <source media="(max-width: 767px)" srcset="<?php echo site_url(); ?>/wp-content/uploads/2025/06/bg-pasto-mobile.webp">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/pasto-desktop.webp" alt="Pasto" class="bg-pasto">
         </picture>
      </div>
   </div>

   <div class="bg-secondary">
      <div class="container py-4 py-md-5">
         <div class="row">
            <div class="col-12">
               <h2 class="fw-bold text-white mb-4 display-5 text-center">Ambiental</h2>

               <p class="text-white px-auto px-md-5 mb-4 mb-md-5">
                  Para nuestra Organización, el Medio Ambiente es esencial y está directamente vinculado con nuestra visión de Sostenibilidad. Su cuidado es clave para nuestras operaciones, impulsándonos a adoptar acciones encaminadas al crecimiento permanente.
               </p>

            </div>

            <div class="col-12">
               <h2 class="fw-bold text-white mb-4 display-5 text-center">Nuestras iniciativas</h2>

               <div class="row mb-3 content-iniciativas py-3 py-md-4">
                  <div class="col-12 col-md-4 text-center text-white align-self-center">
                     <h3 class="fw-bold">Economía circular</h3>
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-economia-circular.webp" alt="Icono Economía circular" width="150">
                  </div>
                  <div class="col-12 col-md-8 align-self-center">
                     <ul class="text-white ps-0 ms-4">
                        <li>
                           Reincorporación del 14% de resinas recuperadas en el proceso de productivo durante el año 2024.
                        </li>

                        <li>
                           Reincorporación del 24% de bolsas plásticas recuperadas en el proceso productivo durante el año 2024.
                        </li>

                        <li>
                           Venta de 78.31 ton de excedentes industriales (empaques de materia prima y residuos de mantenimiento de planta), para uso en procesos externos.
                        </li>

                        <li>
                           Compra de materiales post-industriales para la fabricación de nuevos productos.
                        </li>

                        <li>
                           Utilización de empaques de materia prima para el almacenamiento de materiales reciclados.
                        </li>
                     </ul>
                  </div>
               </div>

               <div class="row mb-3 content-iniciativas py-3 py-md-4">
                  <div class="col-12 col-md-4 text-center text-white align-self-center">
                     <h3 class="fw-bold">Utilización de Recursos Naturales</h3>
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-recursos-naturales.webp" alt="Icono Utilización de Recursos Naturales" width="150">
                  </div>
                  <div class="col-12 col-md-8 align-self-center">
                     <ul class="text-white ps-0 ms-4">
                        <li>
                           Uso de aditivos biodegradables en sistemas de refrigeración.
                        </li>

                        <li>
                           Sistema de refrigeración de circuito cerrado para el ahorro de agua.
                        </li>

                        <li>
                           Uso de agua de lluvia para la limpieza.
                        </li>

                        <li>
                           Uso de tecnologías para reducción de papel.
                        </li>
                     </ul>
                  </div>
               </div>

               <div class="row content-iniciativas py-3 py-md-4">
                  <div class="col-12 col-md-4 text-center text-white align-self-center">
                     <h3 class="fw-bold">Huella de carbono</h3>
                     <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/icono-huella-de-carbono.webp" alt="Icono Huella de carbono" width="150">
                  </div>
                  <div class="col-12 col-md-8 align-self-center">
                     <ul class="text-white ps-0 ms-4">
                        <li>
                           Renovación Tecnológica: Ahorro energético del 71% al año 2024.
                        </li>

                        <li>
                           Energía Renovable: Consumo de energía renovable 100%, generando cero emisiones (Certificado I-REC).
                        </li>

                        <li>
                           Investigación y desarrollo de materiales biodegradables en productos de clientes.
                        </li>
                     </ul>
                  </div>
               </div>

               <div class="d-flex justify-content-center">
                  <div class="triangle"></div>
               </div>

               <div class="row mb-3 px-md-0 mx-1 mx-md-auto">
                  <div class="col-12 col-md-7 align-self-center py-3 py-md-4 px-md-3 content-target-list">
                     <ul class="text-white ps-0 ms-4">
                        <li>
                           En 2021 se generaron 1.223 toneladas de CO2eq.
                        </li>

                        <li>
                           La reducción se debe principalmente a la compra de energía renovable desde 2022.
                        </li>

                        <li>
                           En el 2024 de generaron 232 toneladas de CO2eq.
                        </li>
                     </ul>
                  </div>

                  <div class="col-12 col-md-5 bg-third content-target">
                     <p class="fs-1 fw-bold text-center text-primary">TARGET:</p>

                     <p class="text-primary">
                        Reducción del 83% de emisiones al 2030 (Con respecto a la línea base 2021)
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="container mt-4 mt-md-5">
      <div class="row">
         <div class="col-12 text-center">
            <a href="<?php echo site_url(); ?>/wp-content/uploads/2025/06/sostenibilidad-2024.pdf" class="btn btn-primary text-decoration-none fs-4">
               Lee nuestro informe de sostenibilidad
            </a>
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
