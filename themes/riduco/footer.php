<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Riduco
 */

?>

<footer id="colophon" class="site-footer py-4 mt-4">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-3 align-self-center text-center order-4 order-md-1 mt-4 mt-md-none">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/logo-riduco-verde.webp" alt="Riduco S.A." class="img-fluid">
				<p class="mt-1 text-secondary">Copyright Riduco</p>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center text-lg-start order-1 order-md-2">
				<p class="fw-bold fs-5">Contacto general</p>

				<ul>
					<li>
						(57)(606) 8741010 Ext 1119
					</li>
					<li>
						<a href="mailto:comercial@riduco.com">comercial@riduco.com</a>
					</li>
					<li>
						Cra. 32 No. 107 - 17 La Enea
					</li>
				</ul>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center text-lg-start order-2 order-md-3">
				<p class="fw-bold fs-5">Contacto ventas linea industrial</p>

				<ul>
					<li>
						(57)(606) 8741010 Ext 1118
					</li>
					<li>
						<a href="mailto:lineaindustrial@riduco.com">lineaindustrial@riduco.com</a>
					</li>
				</ul>
			</div>
			<div class="col-12 col-md-6 col-lg-3 text-center text-lg-start order-3 order-md-4">
				<p class="fw-bold fs-5">Síguenos</p>

				<ul>
					<li>
						<a href="https://www.linkedin.com/company/riduco-s-a/" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center justify-content-center justify-content-lg-start">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2025/06/logo-linkedin.png" alt="Facebook" class="img-fluid">
							<p class="ms-2 mb-0 notranslate">Riduco S.A</p>
						</a>
					</li>

					<li>
						<a href="<?php echo site_url(); ?>/wp-content/uploads/2025/06/tratamiento-de-datos.pdf" class="small">Tratamiento de datos personales</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="row pt-3 second-footer">
			<div class="col-12 text-center">
				<p class="mb-1">Manizales - Caldas - Colombia - Sur América</p>
				<p class="mb-0">Todos los derechos reservados 2025 - Powered by RIDUCO S.A</p>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>