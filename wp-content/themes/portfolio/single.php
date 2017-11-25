<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio
 */

get_header(); ?>

    <main class="row">
        <section id="main" class="col-sm-12 col-md-12 col-lg-12">

		<?php while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

		endwhile; ?>

        </section>
    </main>

<?php
get_sidebar();
get_footer();
