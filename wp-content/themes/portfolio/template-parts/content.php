<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<article class="vr-post-content">
	<header>
		<img class="vr-photo-post" src="<?= get_the_post_thumbnail_url('');?>">
	<div class="vr-title-post">
		<div>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
</div>
</div>
		<div>
			<?php //portfolio_posted_on(); ?>
		</div>
		<?php
		endif; ?>
	</header>

    <?php the_content(); ?>

	<footer>
		<?php if( get_field('ajouter_un_pdf') ): ?>
			<div>
	<a href="<?php the_field('ajouter_un_pdf'); ?>">
		<img class="vr-pdf"src="<?= get_template_directory_uri()?>/assets/images/pdf.svg">
		<span>Télécharger</span>
	</a>
	</div>

<?php endif; ?>

		<?php //portfolio_entry_footer(); ?>
	</footer>
</article>
