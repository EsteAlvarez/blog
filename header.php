<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('m-0'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blog' ); ?></a>

	<header id="masthead" class="site-header container-fluid p-2">
		<div class="container text-center">
			<!-- <div class="site-branding">
			<?php the_custom_logo(); ?>
			</div> -->
			<nav id="site-navigation">
			<?php
				$home_url = home_url();
				echo '<h1><a class="blog-nav" href="' . esc_url($home_url) . '">Conciencia de Experiencia</a></h1>';
			?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->


	