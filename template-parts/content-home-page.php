<?php
/**
 * Template part for displaying page content in page.php
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
	<div class="row">
        <div class="container text-center p-4 mb-3 fondo-banner rounded"><h2 class="fw-bold">Clases de JavaScript Avanzado</h2></div>
        <!--Consulta por entradas de clases de js-->
        <?php
        $args = array(
        'category_name' => 'clases-de-js-avanzado',
        'posts_per_page' => -1,
        'order' => 'ASC',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post(); ?>
                <!--Contenido html-->
                <div class="col-lg-4 col-md-6 mb-3">
                <a class="text-decoration-none card-enlace" href="<?php the_permalink();?>"><div class="card h-100 position-relative">
                            <div class="card-body">
                                <h3 class="card-title h4"><?php echo get_the_title();?></h3>
                                <p class="card-text mb-5"><?php echo get_the_excerpt();?></p>
                                <a href="<?php the_permalink();?>" class="card-link position-absolute bottom-0 mb-2 text-decoration-none boton-ver-mas p-1 ps-2 pe-2 rounded">Ver Más</a>
                            </div>
                        </div></a>
                </div>
                <!--Contenido html-->
            <?php }
        } else {
            echo "no hay resultado para la consulta";
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
        <!--Consulta por entradas de clases de js-->
	</div>
	<div class="row mt-5 mb-5">
    <div class="container text-center p-4 mb-3 fondo-banner rounded"><h2 class="fw-bold">Reflexiones</h2></div>
        <!--Consulta por entradas de clases de js-->
        <?php
        $args = array(
        'category_name' => 'reflexiones',
        'posts_per_page' => -1,
        'order' => 'ASC',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post(); ?>
                <!--Contenido html-->
                <div class="col-lg-4 col-md-6 mb-3">
                <a class="text-decoration-none card-enlace" href="<?php the_permalink();?>"><div class="card h-100 position-relative">
                            <div class="card-body">
                                <h3 class="card-title h4"><?php echo get_the_title();?></h3>
                                <p class="card-text mb-5"><?php echo get_the_excerpt();?></p>
                                <a href="<?php the_permalink();?>" class="card-link position-absolute bottom-0 mb-2 text-decoration-none boton-ver-mas p-1 ps-2 pe-2 rounded">Ver Más</a>
                            </div>
                        </div></a>
                </div>
                <!--Contenido html-->
            <?php }
        } else {
            echo "no hay resultado para la consulta";
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
        <!--Consulta por entradas de clases de js-->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
