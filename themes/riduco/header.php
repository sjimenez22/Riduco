<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Riduco
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="site-header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">

						<nav class="navbar navbar-expand-lg">
							<div class="container-fluid">
								<?php the_custom_logo(); ?>

								<button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryMenu" aria-controls="primaryMenu" aria-expanded="false" aria-label="Toggle navigation">
									<img src="<?php echo get_template_directory_uri() . '/img/menu-open-mobile.png'; ?>"
										alt="menu" width="30" class="img-fluid cursor-pointer" data-bs-dismiss="offcanvas">
								</button>

								<div class="offcanvas offcanvas-end" id="primaryMenu">
									<div class="offcanvas-body">
										<div class="d-flex aling-items-center justify-content-between d-lg-none mb-4 pt-4">
											<img src="<?php echo site_url(); ?>/wp-content/uploads/2025/02/logo-verde-riduco-e1738529807917.png" alt="Riduco" class="img-fluid" width="150">

											<img src="<?php echo get_template_directory_uri() . '/img/menu-close-mobile.png'; ?>"
												alt="menu" width="30" class="img-fluid cursor-pointer" data-bs-dismiss="offcanvas">
										</div>

										<ul class="navbar-nav">
											<?php
											$menu_name = 'menu-1';
											$menu = wp_get_nav_menu_object(get_nav_menu_locations()[$menu_name]);
											$menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

											$mainMenu = array();

											foreach ($menuitems as $item) {
												if ($item->menu_item_parent === "0") {
													$mainMenu[$item->ID] = array();
													$mainMenu[$item->ID]['ID'] = $item->ID;
													$mainMenu[$item->ID]['title'] = $item->title;
													$mainMenu[$item->ID]['url'] = $item->url;
													$mainMenu[$item->ID]['children'] = array();
												} else {
													$mainMenu[$item->menu_item_parent]['children'][] = array(
														'ID' => $item->ID,
														'title' => $item->title,
														'url' => $item->url
													);
												}
											}

											foreach ($mainMenu as $item) :
												if (empty($item['children'])) :
											?>
													<li class="nav-item">
														<a class="nav-link" href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['title']); ?></a>
													</li>
												<?php else:  ?>
													<li class="nav-item dropdown">
														<a class="nav-link dropdown-toggle" href="<?php echo esc_url($item['url']); ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
															<?php echo esc_html($item['title']); ?>
														</a>
														<ul class="dropdown-menu">
															<?php foreach ($item['children'] as $subItem) : ?>
																<li><a class="dropdown-item" href="<?php echo esc_url($subItem['url']); ?>"><?php echo esc_html($subItem['title']); ?></a></li>
															<?php endforeach; ?>
														</ul>
													</li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->