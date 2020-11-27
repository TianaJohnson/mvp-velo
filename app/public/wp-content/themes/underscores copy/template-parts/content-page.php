<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

?>

<div>
<!-- this is an addition widget are, can be moved around -->
<button class="ham"></button>
	<nav class="navBar"></nav>

		<?php if (dynamic_sidebar('main_sidebar_widget')) : else : endif; ?>
	</nav>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header><!-- .entry-header -->

	<?php underscores_post_thumbnail(); ?>
	<!-- <?php get_template_part( 'template-parts/navigation' ); ?> -->

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'underscores'),
				'after'  => '</div>',
			)
		);
		?>



	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Edit <span class="screen-reader-text">%s</span>', 'underscores'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>

		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->