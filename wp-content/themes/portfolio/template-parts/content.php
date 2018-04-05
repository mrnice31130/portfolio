<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<div class='col-sm-12 col-md-12 col-lg-12' style="margin-top: 10px;">
	<article class="card">
		<header>
			
		</header>
		<section class="card-body">
		<div class="vr-title-post">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif; ?>
			</div>
		<?php the_content(); ?>
		<?php $url = get_field('ajouter_un_pdf'); ?>
		<?= do_shortcode('[pdfjs-viewer url= '. $url .' viewer_width=100% viewer_height=1000px fullscreen=false download=true print=true]'); ?>
		</section>

		<footer class="card-body">
			
		</footer>
	</article>
</div>

