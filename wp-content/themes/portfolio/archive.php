<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

get_header(); ?>

    <main>
        <?php if( have_posts() ) : ?>
            <header>

            </header>

            <?php while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', get_post_format() );
            endwhile; ?>

            <footer>
                <?php // pagination ?>
            </footer>
        <?php else :
            get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
    </main>

<?php
get_sidebar();
get_footer();
