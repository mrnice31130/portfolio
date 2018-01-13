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
		<img src="<?= get_the_post_thumbnail_url('');?>">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php //portfolio_posted_on(); ?>
		</div>
		<?php
		endif; ?>
	</header>

    <?php the_content(); ?>

	<footer>
		<?php if( get_field('ajouter_un_pdf') ): ?>

	<a href="<?php the_field('ajouter_un_pdf'); ?>">
		<img class="vr-pdf"src="<?= get_template_directory_uri()?>/assets/images/pdf.svg">
		<span>Download File</span>
	</a>

<?php endif; ?>

		<?php //portfolio_entry_footer(); ?>
	</footer>
</article>
