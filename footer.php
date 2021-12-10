<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GFree
 */

?>

	<div id="footer-widgets">
		<?php if( have_rows('footer_widget', 'option') ): ?>
		<div id="footer-widget-wrap">
			<?php while( have_rows('footer_widget', 'option') ): the_row(); ?>
			<div class="footer-widget">
				<div class="footer-widget-icon"><?php the_sub_field('footer_widget_icon'); ?></div>
				<div class="footer-widget-heading"><h4><?php the_sub_field('footer_widget_heading'); ?></h4></div>
				<div class="footer-widget-subhead"><?php the_sub_field('footer_widget_subhead'); ?></div>
			</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> - All Rights Reserved
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
