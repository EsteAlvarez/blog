<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container p-1">
			<div class="row text-center p-3">
				<hr class="linea-footer">
				<p><?php the_field('nombre_de_autor');?></p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
