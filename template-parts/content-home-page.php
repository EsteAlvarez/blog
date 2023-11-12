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
    <div class="row mt-4">
		<div class="col-md-12 mb-5">
			<h2><?php echo the_field('encabezado_de_bienvenida');?></h2>
			<p class="mt-3"><?php echo the_field('');?></p>
		</div>
    </div>
	<div class="row">
        <h2 class="mb-3">Clases de JavaScript Avanzado</h2>
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
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"><?php echo get_the_title();?></h3>
                                <p class="card-text"><?php echo get_the_excerpt();?></p>
                                <a href="<?php the_permalink();?>" class="card-link">Ver Más</a>
                            </div>
                        </div>
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
        <h2 class="mb-3">Reflexiones</h2>
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
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"><?php echo get_the_title();?></h3>
                                <p class="card-text"><?php echo get_the_excerpt();?></p>
                                <a href="<?php the_permalink();?>" class="card-link">Ver Más</a>
                            </div>
                        </div>
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
