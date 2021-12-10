<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GFree
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<?php	get_template_part( 'template-parts/acf-styles' ); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#" class="btt" aria-label="Scroll Back to Top" style="display: none;"><span></span></a>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gfree' ); ?></a>

	<?php if( get_field( 'display_social_media_bar', 'option') ) { ?>
	<div id="announcement-bar">
		<?php if( have_rows('social_profile', 'option') ): ?>
		<div class="social-profile-links">
			<ul>
			<?php while( have_rows('social_profile', 'option') ): the_row(); ?>
				<li><a href="<?php the_sub_field('social_profile_link'); ?>"><div class="social-link-icon"><?php the_sub_field('social_profile_icon'); ?></div></a></li>
			<?php endwhile; ?>
			</ul>
		</div>
		<?php endif; ?>
	</div>
	<?php } ?>

	<header id="masthead" class="site-header">
		<div class="site-branding">

			<?php if( have_rows('header_link', 'option') ): ?>
				<div class="site-branding-links">
				  <ul>
				  <?php while( have_rows('header_link', 'option') ): the_row(); ?>
						<li><a href="<?php the_sub_field('link_url'); ?>"><div class="header-link-icon"><?php the_sub_field('link_icon'); ?></div><div class="header-link-text"><?php the_sub_field('link_text'); ?></div></a></li>
				  <?php endwhile; ?>
				  </ul>
			  </div>
			<?php endif; ?>

			<div class="site-branding-wrap">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$gfree_description = get_bloginfo( 'description', 'display' );
				if ( $gfree_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $gfree_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
