<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GFree
 */

get_header();
?>

	<div id="post-content">
		<div id="post-content-wrap">
			<main id="primary" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'gfree' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'gfree' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->

			<div id="secondary-wrap"><?php get_sidebar(); ?></div>
			<div style="clear: both;"></div>
		</div>
	</div>

<?php get_footer();
