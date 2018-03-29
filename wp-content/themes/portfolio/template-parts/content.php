<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<div class='col-md-6 col-lg-4'>
	<article class="card">
		<header>
			<img class="vr-photo-post"  src="<?= get_the_post_thumbnail_url($post->id, 'card');?>">
			<div class="vr-title-post">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif; ?>
			</div>
		</header>

		<?php the_content(); ?>

		<footer>
			<?php if( get_field('ajouter_un_pdf') ): ?>
				<div>
					<a href="<?php the_field('ajouter_un_pdf'); ?>">
						<img class="vr-pdf"src="<?= get_template_directory_uri()?>/assets/images/pdf.svg">
						<span></span>
					</a>
				</div>
			<?php endif; ?>
		</footer>
	</article>
</div>
