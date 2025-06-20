<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Riduco
 */

$group_image = get_field('banners');
$image = $group_image['banner_desktop'];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="bg-img-banner" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
			<div class="bg-overlay"></div>
		</div>

		<div class="container">
			<?php
			if (is_singular()) :
				the_title('<h1 class="entry-title text-center fw-bold mt-4 mt-md-5">', '</h1>');
			else :
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;
			?>
		</div>
	</header><!-- .entry-header -->

	<?php riduco_post_thumbnail(); ?>

	<div class="entry-content container mt-4 mt-md-5">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'riduco'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'riduco'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->