<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
	<div class="contenido_logo_festival">
		<?php 
		$image = get_field('logo');
		if( !empty( $image ) ): ?>
		<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
	</div>
		<?php the_title( '<h5 class="entry-title">', '</h5>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->
	<!-- Festivales -->
	<div class="contenido_descripcion_festival">
		<?php the_field('descripcion_del_festival'); ?>
	</div>
	<div class="contenido_fondo_festival">
		<?php 
		$image = get_field('fondo');
		if( !empty( $image ) ): ?>
		<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
	</div>
	<div class="informacion_entrada">
	<h5>Informacion del evento:</h5>
	</div>
	<div class="info_evento">
	<div class="titulo">
	<h4>Nombre del evento</h4>
	<?php the_field('nombre_de_evento'); ?>
	</div>
	<div class="titulo">
	<h4>Descripcion</h4>
	<?php the_field('descripcion_de_evento'); ?>
	</div>
	<div class="Fechas">
	<h4>Día de evento:</h4>
	<?php the_field('fecha_de_evento'); ?>
	</div>
	<div class="titulo">
	<h4>Inicio:</h4>
	<?php the_field('fecha_de_inicio'); ?>
	</div>
	<h4>Finalización:</h4>
	<?php the_field('fecha_de_finalizacion'); ?>
	</div>
	</div>
	<div class="contenido_ubicacion_festival">
	<h5>Ubicación:</h5>
		<?php the_field('ubicacion'); ?>
	</div>
	<div class="contenido_fechas_festival">
		<h5>Fecha de inicio:</h5>
		<?php the_field('fecha_de_inicio'); ?>
		<h5>Fecha de finalización:</h5>
		<?php the_field('fecha_de_finalizacion'); ?>
	</div>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
