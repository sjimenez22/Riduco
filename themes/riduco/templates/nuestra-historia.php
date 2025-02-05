<?php

/**
 * The template for displaying Nuestra historia
 * Template Name: Nuestra historia
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main nuestra-historia">
   <?php
   $data = [
      'image' => 'https://riduco.com/wp-content/uploads/2022/07/direccionamiento_estrategico.jpg'
   ];
   get_template_part('components/banner/banner', 'image', $data);
   ?>

   <div class="container mt-4 mt-md-5">
      <div class="row justify-content-center">
         <div class="col-12 col-md-8">
            <p class="text-primary text-center">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae libero esse expedita quibusdam possimus veritatis quidem illum adipisci nesciunt. Provident quisquam quia dolorem deleniti minima delectus repellendus hic! Ipsa, natus.

               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis distinctio impedit reprehenderit quos provident rem eum fugit, necessitatibus sapiente, recusandae nemo nihil dolore deleniti commodi mollitia, sed ipsa sint excepturi!
            </p>

            <p class="text-primary text-center">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae libero esse expedita quibusdam possimus veritatis quidem illum adipisci nesciunt. Provident quisquam quia dolorem deleniti minima delectus repellendus hic! Ipsa, natus.

               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis distinctio impedit reprehenderit quos provident rem eum fugit, necessitatibus sapiente, recusandae nemo nihil dolore deleniti commodi mollitia, sed ipsa sint excepturi!
            </p>
         </div>
      </div>
   </div>

   <div class="container mt-4">
      <div class="row history position-relative">
         <div class="line"></div>

         <div class="col-6 offset-6 position-relative box-history">
            <div data-year="1957" class="year-circle right">
               <span class="text-white display-5 text-decoration-underline fw-bold">1957</span>
            </div>

            <div data-year="1957" class="information right text-primary ps-md-5 ms-md-5 d-none">
               <p class="display-2 fw-bold">1957</p>

               <p>
                  Reconocido joyero Julio Rivas Gutiérrez instala un taller de reparación, adaptación y construcción de piezas metalmecánicas.
               </p>

               <img src="https://placehold.co/400x300" alt="1957" class="img-fluid">
            </div>
         </div>

         <div class="col-6 px-0 justify-content-end d-flex position-relative box-history">
            <div data-year="1964" class="year-circle left">
               <span class="text-white display-5 text-decoration-underline fw-bold">1964</span>
            </div>

            <div data-year="1964" class="information left text-primary pe-md-5 me-md-5 d-none">
               <p class="display-2 fw-bold">1964</p>

               <p>
                  El señor Rivas Gutiérrez prefiere continuar con su negocio de joyería y decide poner en venta su pequeño taller. Ante este hecho, su hijo manifiesta el interés por mantener el taller y decide trabajar en éste visualizando un potencial de crecimiento industrial.
               </p>

               <img src="https://placehold.co/400x300" alt="1957" class="img-fluid">
            </div>
         </div>

         <div class="col-6 offset-6 position-relative box-history">
            <div data-year="1969" class="year-circle right">
               <span class="text-white display-5 text-decoration-underline fw-bold">1969</span>
            </div>

            <div data-year="1969" class="information right text-primary ps-md-5 ms-md-5 d-none">
               <p class="display-2 fw-bold">1969</p>

               <p>
                  Se adquiere maquinaria para trabajar con tubería, alambre, lámina y troqueles.
               </p>

               <img src="https://placehold.co/400x300" alt="1969" class="img-fluid">
            </div>
         </div>

         <div class="col-6 px-0 justify-content-end d-flex position-relative box-history">
            <div data-year="1973" class="year-circle left">
               <span class="text-white display-5 text-decoration-underline fw-bold">1973</span>
            </div>

            <div data-year="1973" class="information left text-primary pe-md-5 me-md-5 d-none">
               <p class="display-2 fw-bold">1973</p>

               <p>
                  Implementa procesos industriales de Galvanoplastia, equipos centrifuga, tanques rectificadores de corriente para baños galvano - electroliticos, de alta calidad y desarrolla productos de herrajes de argolla.
               </p>

               <img src="https://placehold.co/400x300" alt="1973" class="img-fluid">
            </div>
         </div>

         <div class="col-6 offset-6 position-relative box-history">
            <div data-year="1974" class="year-circle right">
               <span class="text-white display-5 text-decoration-underline fw-bold">1974</span>
            </div>

            <div data-year="1974" class="information right text-primary ps-md-5 ms-md-5 d-none">
               <p class="display-2 fw-bold">1974</p>

               <p>
                  Como complemento a los herrajes de argolla, se inician las primeras producciones en serie de fólderes plásticos para CARVAJAL y CIA. LTDA y Danaranjo naciendo el área de manufacturas Plasticas.
               </p>

               <img src="https://placehold.co/400x300" alt="1974" class="img-fluid">
            </div>
         </div>

         <div class="col-6 px-0 justify-content-end d-flex position-relative box-history">
            <div data-year="1978" class="year-circle left">
               <span class="text-white display-5 text-decoration-underline fw-bold">1978</span>
            </div>

            <div data-year="1978" class="information left text-primary pe-md-5 me-md-5 d-none">
               <p class="display-2 fw-bold">1978</p>

               <p>
                  Conscientes de la necesidad de diversificar la producción, se visualiza como un negocio próspero la producción de piezas plásticas inyectadas. Para esto se adquieren las primeras máquinas de inyección, ampliando el portafolio de productos con clientes como Manisol, Hilos Cadena y Varta.
               </p>

               <img src="https://placehold.co/400x300" alt="1978" class="img-fluid">
            </div>
         </div>

         <div class="col-6 offset-6 position-relative box-history">
            <div data-year="1979" class="year-circle right">
               <span class="text-white display-5 text-decoration-underline fw-bold">1979</span>
            </div>

            <div data-year="1979" class="information right text-primary ps-md-5 ms-md-5 d-none">
               <p class="display-2 fw-bold">1979</p>

               <p>
                  El fundador hace un viaje a Japón que cambia la proyección y forma de hacer negocios, visualizando el gran potencial del plástico en procesos productivos a gran escala y la robotización. Descubre la importancia del PP y sus aplicaciones y observa que los productos de oficina son producidos 100% plástico.
               </p>

               <img src="https://placehold.co/400x300" alt="1979" class="img-fluid">
            </div>
         </div>

         <div class="col-6 px-0 justify-content-end d-flex position-relative box-history">
            <div data-year="1980" class="year-circle left">
               <span class="text-white display-5 text-decoration-underline fw-bold">1980</span>
            </div>

            <div data-year="1980" class="information left text-primary pe-md-5 me-md-5 d-none">
               <p class="display-2 fw-bold">1980</p>

               <p>
                  Desarrollo de producto para alojar formas continuas para el cliente Carvajal generando su fidelización.
               </p>

               <img src="https://placehold.co/400x300" alt="1980" class="img-fluid">
            </div>
         </div>

         <div class="col-6 offset-6 position-relative box-history">
            <div data-year="1983" class="year-circle right">
               <span class="text-white display-5 text-decoration-underline fw-bold">1983</span>
            </div>

            <div data-year="1983" class="information right text-primary ps-md-5 ms-md-5 d-none">
               <p class="display-2 fw-bold">1983</p>

               <p>
                  Inicia la producción al sector industrial de línea blanca con productos inyectados; refrigeradores para el Cliente Inarca, actualmente Mabe.
               </p>

               <img src="https://placehold.co/400x300" alt="1983" class="img-fluid">
            </div>
         </div>

         <div class="col-6 px-0 justify-content-end d-flex position-relative box-history">
            <div data-year="1984" class="year-circle left">
               <span class="text-white display-5 text-decoration-underline fw-bold">1984</span>
            </div>

            <div data-year="1984" class="information left text-primary pe-md-5 me-md-5 d-none">
               <p class="display-2 fw-bold">1984</p>

               <p>
                  Dada la creciente demanda de productos escolares y de oficina en láminas plásticas rígidas, se hace indispensable la adquisición de más máquinas extrusoras para la producción de dichas láminas.
               </p>

               <img src="https://placehold.co/400x300" alt="1984" class="img-fluid">
            </div>
         </div>

         <div class="col-6 offset-6 position-relative box-history">
            <div data-year="1988" class="year-circle right">
               <span class="text-white display-5 text-decoration-underline fw-bold">1988</span>
            </div>

            <div data-year="1988" class="information right text-primary ps-md-5 ms-md-5 d-none">
               <p class="display-2 fw-bold">1988</p>

               <p>
                  Línea escolar y de oficina sigue creciendo con nuevos clientes. Legis con sus lineas Keeperline y Keepermate permiten la llegada a nuevos mercados.
               </p>

               <img src="https://placehold.co/400x300" alt="1988" class="img-fluid">
            </div>
         </div>

         <div class="col-6 px-0 justify-content-end d-flex position-relative box-history">
            <div data-year="1994" class="year-circle left">
               <span class="text-white display-5 text-decoration-underline fw-bold">1994</span>
            </div>

            <div data-year="1994" class="information left text-primary pe-md-5 me-md-5 d-none">
               <p class="display-2 fw-bold">1994</p>

               <p>
                  Para satisfacer las necesidades de los clientes, se implementan nuevos procesos productivos como impresión por calor,
                  alta frecuencia, screen y tampografía. Durante el mismo año, como proceso complementario al área de extrusión, nace el
                  área de termoformado y ruteado.
               </p>

               <img src="https://placehold.co/400x300" alt="1994" class="img-fluid">
            </div>
         </div>

         <div class="col-6 offset-6 position-relative box-history">
            <div data-year="1996" class="year-circle right">
               <span class="text-white display-5 text-decoration-underline fw-bold">1996</span>
            </div>

            <div data-year="1996" class="information right text-primary ps-md-5 ms-md-5 d-none">
               <p class="display-2 fw-bold">1996</p>

               <p>
                  La relación socio - proveedor con Mabe y la creciente demanda de la línea No-Frost, promueven la ampliación de la planta física e industrial, hecho importante para la generación de empleo y desarrollo empresarial de la ciudad.
               </p>

               <img src="https://placehold.co/400x300" alt="1996" class="img-fluid">
            </div>
         </div>

         <div class="col-6 px-0 justify-content-end d-flex position-relative box-history">
            <div data-year="2003" class="year-circle left">
               <span class="text-white display-5 text-decoration-underline fw-bold">2003</span>
            </div>

            <div data-year="2003" class="information left text-primary pe-md-5 me-md-5 d-none">
               <p class="display-2 fw-bold">2003</p>

               <p>
                  Se obtiene la Certificación de Calidad ISO 9001: Diseño, fabricación y comercialización de productos plásticos (Inyectados, Extruidos, Manufacturados); prestación del servicio de inyección, termoformado, extrusión y manufactura. Diseño, fabricación y comercialización de moldes para la industria del plástico.
               </p>

               <img src="https://placehold.co/400x300" alt="2003" class="img-fluid">
            </div>
         </div>

         <div class="col-6 offset-6 position-relative box-history">
            <div data-year="2005" class="year-circle right">
               <span class="text-white display-5 text-decoration-underline fw-bold">2005</span>
            </div>

            <div data-year="2005" class="information right text-primary ps-md-5 ms-md-5 d-none">
               <p class="display-2 fw-bold">2005</p>

               <p>
                  Se proyecta la empresa hacia otros mercados, se inicia el proceso de expansión y se compran terrenos en la zona industrial La Enea, dando paso a una nueva etapa de Riduco.
               </p>

               <img src="https://placehold.co/400x300" alt="2005" class="img-fluid">
            </div>
         </div>

         <div class="col-6 px-0 justify-content-end d-flex position-relative box-history">
            <div data-year="2006" class="year-circle left">
               <span class="text-white display-5 text-decoration-underline fw-bold">2006</span>
            </div>

            <div data-year="2006" class="information left text-primary pe-md-5 me-md-5 d-none">
               <p class="display-2 fw-bold">2006</p>

               <p>
                  Se realiza la ampliación de planta 2 y se compran 9 máquinas inyectoras, de entre 700 a 1600 toneladas, para la fabricación de 11 millones de cajas plásticas para el lanzamiento de la nueva botella del cliente Bavaria - Sab Miller.
               </p>

               <img src="https://placehold.co/400x300" alt="2006" class="img-fluid">
            </div>
         </div>

         <div class="col-6 offset-6 position-relative box-history">
            <div data-year="2007" class="year-circle right">
               <span class="text-white display-5 text-decoration-underline fw-bold">2007</span>
            </div>

            <div data-year="2007" class="information right text-primary ps-md-5 ms-md-5 d-none">
               <p class="display-2 fw-bold">2007</p>

               <p>
                  Se incursiona en el sector automotriz, siendo Riduco seleccionada entre diferentes empresas de la Región Andina para
                  ser proveedor de Sofasa (Renault) en piezas plásticas de gran tamaño.
               </p>

               <img src="https://placehold.co/400x300" alt="2007" class="img-fluid">
            </div>
         </div>

         <div class="col-6 px-0 justify-content-end d-flex position-relative box-history">
            <div data-year="2008" class="year-circle left">
               <span class="text-white display-5 text-decoration-underline fw-bold">2008</span>
            </div>

            <div data-year="2008" class="information left text-primary pe-md-5 me-md-5 d-none">
               <p class="display-2 fw-bold">2008</p>

               <p>
                  Certificación ISO 16949 norma para el sector autopartista: Manufactura de piezas plásticas para interiores y exteriores
               </p>

               <img src="https://placehold.co/400x300" alt="2008" class="img-fluid">
            </div>
         </div>

         <div class="col-6 offset-6 position-relative box-history">
            <div data-year="2013" class="year-circle right">
               <span class="text-white display-5 text-decoration-underline fw-bold">2013</span>
            </div>

            <div data-year="2013" class="information right text-primary ps-md-5 ms-md-5 d-none">
               <p class="display-2 fw-bold">2013</p>

               <p>
                  Alianza estratégica con la Corporación Española Rinder para la producción de luminarias.
               </p>

               <img src="https://placehold.co/400x300" alt="2013" class="img-fluid">
            </div>
         </div>

         <div class="col-6 px-0 justify-content-end d-flex position-relative box-history">
            <div data-year="2014" class="year-circle left">
               <span class="text-white display-5 text-decoration-underline fw-bold">2014</span>
            </div>

            <div data-year="2014" class="information left text-primary pe-md-5 me-md-5 d-none">
               <p class="display-2 fw-bold">2014</p>

               <p>
                  Riduco inaugura la planta IN-House en la ensambladora Renault en Medellín.
               </p>

               <img src="https://placehold.co/400x300" alt="2014" class="img-fluid">
            </div>
         </div>

         <div class="col-6 offset-6 position-relative box-history">
            <div data-year="2019" class="year-circle right">
               <span class="text-white display-5 text-decoration-underline fw-bold">2019</span>
            </div>

            <div data-year="2019" class="information right text-primary ps-md-5 ms-md-5 d-none">
               <p class="display-2 fw-bold">2019</p>

               <p>
                  Nuevo producto para el mercado en el sector agro.
               </p>

               <img src="https://placehold.co/400x300" alt="2019" class="img-fluid">
            </div>
         </div>

         <div class="col-6 px-0 justify-content-end d-flex position-relative box-history">
            <div data-year="2022" class="year-circle left">
               <span class="text-white display-5 text-decoration-underline fw-bold">2022</span>
            </div>

            <div data-year="2022" class="information left text-primary pe-md-5 me-md-5 d-none">
               <p class="display-2 fw-bold">2022</p>

               <p>
                  CALIFICACION DE OPERADOR ECONOMICO AUTORIZADO para importar y exportar en la categoría de seguridad y facilitación.
               </p>

               <img src="https://placehold.co/400x300" alt="2022" class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
