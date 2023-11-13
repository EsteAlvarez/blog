<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<div class="row mt-5">
		<div style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>'); background-position:center; background-size:cover; background-blend-mode: multiply; background-color: rgba(0, 0, 0, 0.8)" class="col-md-12 mb-5 fondo-encabezado rounded p-5">
            <h2><?php echo the_field('encabezado_de_bienvenida');?></h2>
			<p class="mt-3"><?php echo the_field('');?><?php the_field('mensaje_de_bienvenida');?></p>
		</div> 
    </div>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blog' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blog' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php blog_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
