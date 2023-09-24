<?php
/**
 * Template Name: blog
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog
 */

get_header();
?>

	<main id="primary" class="site-main container-fluid">
		<section class="row p-3">
			<div class="col-md-6">
				<h2><?php echo the_field('encabezado_de_bienvenida');?></h2>
				<p class="mt-3"><?php echo the_field('mensaje_de_bienvenida');?></p>
			</div>
			<div class="col-md-6 d-flex justify-content-md-around justify-content-between flex-wrap mt-md-0 mt-4">
				<a class="me-md-0 me-2 mb-md-0 mb-3 link-entrada" href="http://estealvarez.laboratoriodiseno.cl/blog/2023/08/17/16-08-2023/">16/08/2023</a>
				<a class="me-md-0 me-2 mb-md-0 mb-3 link-entrada" href="http://estealvarez.laboratoriodiseno.cl/blog/2023/08/26/23-08-23/">23/08/2023</a>
				<a class="me-md-0 me-2 mb-md-0 mb-3 link-entrada" href="http://estealvarez.laboratoriodiseno.cl/blog/2023/09/24/30-08-2023/">30/08/2023</a>
				<a class="me-md-0 me-2 mb-md-0 mb-3 link-entrada" href="http://estealvarez.laboratoriodiseno.cl/blog/2023/09/24/06-09-2023/">06/09/2023</a>
				<a class="me-md-0 me-2 mb-md-0 mb-3 link-entrada" href="http://estealvarez.laboratoriodiseno.cl/blog/2023/09/24/13-09-2023/">13/09/2023</a>
			</div>
		</section>


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home-page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
