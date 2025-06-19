<?php

/**
 * The template for displaying contacto
 * Template Name: Contacto
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main contact">
   <div class="container pt-5">
      <div class="row">
         <div class="col-12 col-md-6 mb-3 mb-md-0">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/img-contacto.webp" alt="Trabajador Riduco" class="img-fluid" style="border-radius: 25px;">
         </div>
         <div class="col-12 col-md-6">
            <h1 class="fw-bold text-primary fs-2">
               ¿Quieres cotizar algún proyecto y/o necesitas una asesoría?
            </h1>

            <p class="text-primary">
               Te invitamos a comunicarte a través de este medio, el cual le enviará inmediatamente tus comentarios o requerimientos al equipo de servicio al cliente.
            </p>

            <div class="box-form">
               <h2 class="fw-bold text-third">Contáctanos</h2>
               <form id="formContact" method="post" novalidate class="needs-validation row">
                  <div class="col-12 col-md-6 mb-3">
                     <label for="firstName" class="form-label">Nombre</label>
                     <input type="text" class="form-control" id="firstName" name="firstName" required>
                     <div class="invalid-feedback">
                        Este campo es obligatorio.
                     </div>
                  </div>
                  <div class="col-12 col-md-6 mb-3">
                     <label for="lastName" class="form-label">Apellido</label>
                     <input type="text" class="form-control" id="lastName" name="lastName" required>
                     <div class="invalid-feedback">
                        Este campo es obligatorio.
                     </div>
                  </div>
                  <div class="col-12 col-md-6 mb-3">
                     <label for="company" class="form-label">Empresa</label>
                     <input type="text" class="form-control" id="company" name="company" required>
                     <div class="invalid-feedback">
                        Este campo es obligatorio.
                     </div>
                  </div>
                  <div class="col-12 col-md-6 mb-3">
                     <label for="email" class="form-label">Correo</label>
                     <input type="email" class="form-control" id="email" name="email" required>
                     <div class="invalid-feedback">
                        Correo no válido.
                     </div>
                  </div>
                  <div class="col-12 col-md-6 mb-3">
                     <label for="country" class="form-label">País</label>
                     <input type="text" class="form-control" id="country" name="country" required>
                     <div class="invalid-feedback">
                        Este campo es obligatorio.
                     </div>
                  </div>
                  <div class="col-12 col-md-6 mb-3">
                     <label for="phone" class="form-label">Teléfono</label>
                     <input type="tel" class="form-control" id="phone" name="phone" required pattern="^[0-9]*$" title="Solo debe contener números" maxlength="10"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                     <div class="invalid-feedback">
                        Este campo es obligatorio.
                     </div>
                  </div>

                  <div class="col-12 mb-3">
                     <label for="description" class="form-label">¿Qué necesitas?</label>
                     <div class="d-md-flex mb-2 align-items-center">
                        <div class="form-check me-3">
                           <input class="form-check-input" type="radio" name="businessType" id="businessType1" value="Comprar nuestro producto" required>
                           <label class="form-check-label" for="businessType1">
                              Comprar nuestro producto
                           </label>
                        </div>

                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="businessType" id="businessType2" value="Desarrollar un proyecto">
                           <label class="form-check-label" for="businessType2">
                              Desarrollar un proyecto
                           </label>
                        </div>
                     </div>

                     <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                     <div class="invalid-feedback">
                        Este campo es obligatorio.
                     </div>
                  </div>

                  <div class="col-12 mb-3">
                     <input class="form-check-input" type="checkbox" id="policies" name="policies" required>
                     <label class="form-check-label" for="policies">
                        Acepto
                        <a href="<?php echo site_url(); ?>/wp-content/uploads/2025/06/tratamiento-de-datos.pdf" target="_blank" rel="noopener noreferrer" class="text-third">
                           Política de Tratamiento de Datos
                        </a>
                     </label>
                     <div class="invalid-feedback">
                        Este campo es obligatorio.
                     </div>
                  </div>

                  <div class="col-12 mb-3 d-flex justify-content-center">
                     <button id="btnContactSubmit" type="submit" class="btn btn-third fs-5 px-5 fw-medium d-flex justify-content-center align-items-center">
                        <span>Enviar</span>
                        <span id="spinnerForm" class="spinner-border spinner-border-sm ms-2 d-none" role="status"
                           aria-hidden="true"></span>
                     </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <div class="mt-4 mt-md-5">
      <h2 class="fw-bold text-primary mb-4 text-center">Encuéntranos aquí</h2>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.4503152704383!2d-75.45881022618163!3d5.030478738712898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4765c7c2a05697%3A0xe0f59a378e8af716!2sRiduco%20S.A.!5e0!3m2!1ses!2sco!4v1738936719711!5m2!1ses!2sco" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body text-center text-primary">
               <div class="text-end">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>

               <img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/logo-riduco-verde.webp" alt="Riduco S.A." class="img-fluid">

               <p class="fs-4 fw-bold mt-3">
                  Gracias por contactarnos.
               </p>

               <p>
                  En breve unos de nuestros asesores se pondrá en contacto contigo.
               </p>
            </div>
         </div>
      </div>
   </div>
</main><!-- #main -->

<?php
get_footer();
