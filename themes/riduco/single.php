<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Riduco
 */

get_header();
?>

<main id="primary" class="site-main single-post">

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', get_post_type());

	endwhile; // End of the loop.
	?>

	<div class="container">
		<div class="row">
			<?php
			$id_post_current = get_the_ID();

			$args_latests = array(
				'post_type'           => 'post',
				'post_status'         => 'publish',
				'post__not_in'        => array($id_post_current),
				'posts_per_page'      => 2,
				'orderby'             => 'date',
				'order'               => 'DESC',
				'ignore_sticky_posts' => 1,
			);

			$query_recents = new WP_Query($args_latests);

			if ($query_recents->have_posts()) :
			?>
				<h2 class="text-primary my-4 fw-bold text-center fs-1">Te puede interesar</h2>

				<?php
				while ($query_recents->have_posts()) : $query_recents->the_post();

					$group_image = get_field('banners');
					$image = isset($group_image['banner_mobile']) ? $group_image['banner_mobile'] : '';
				?>
					<div class="col-12 col-md-6">
						<div class="box-recent-post mb-4 p-3 row mx-md-2">
							<div class="col-12 col-md-4">
								<div class="image">
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="250" height="250">
								</div>
							</div>

							<div class="col-12 col-md-8">
								<div class="content px-md-2">
									<?php the_title(sprintf('<h3 class="entry-title fw-bold mb-4 pt-3 fs-4"><a href="%s" rel="bookmark" class="text-decoration-none text-primary">', esc_url(get_permalink())), '</a></h3>'); ?>

									<div class="text-end">
										<a href="<?php echo esc_url(get_permalink()) ?>" class="text-third fw-bold text-decoration-none">
											<span>Seguir leyendo</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php
				wp_reset_postdata();
			endif; ?>
		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
