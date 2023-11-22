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
			<div class="row text-center p-3 m-0">
				<p></p><?php echo 'Autor del tema: '; the_author();?>
				<hr class="linea-footer w-50 p-0">
				<span class="d-flex justify-content-center">Foto de <a class="ms-1 me-1 link-atribucion text-decoration-none" href="https://unsplash.com/es/@ilyapavlov?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Ilya Pavlov</a> en <a class="ms-1 me-1 link-atribucion text-decoration-none" href="https://unsplash.com/es/fotos/monitor-que-muestra-programacion-java-OqtafYT5kTw?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a></span>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
