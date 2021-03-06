<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<section class="vr-latest-posts">
	<header>
		<div class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h1 class="display-4">Bienvenue,Welcome</h1>
						<p class="lead">Vincent317@hotmail.fr</p>
							<p class="lead">Portables : 06.59.71.00.76</p>
							<p >76 Route de la saune 31130 Quint-Fonsegrives</p>
						<hr class="my-4">
						<p></p>
						<p class="lead">
							<a class="btn btn-primary btn-lg" href="<?= site_url(); ?>/category/epreuve-e4" role="button">Épreuve E4</a>
							<a class="btn btn-primary btn-lg" href="<?= site_url(); ?>/category/epreuve-e6" role="button">Épreuve E6</a>
							<a class="btn btn-primary btn-lg" href="#" role="button">Tableaux</a>
						</p>
					</div>
					<div class="col-lg-6">
						<?php get_template_part( 'template-parts/carousel' ); ?>
					</div>
				</div>
			</div>	
		</div>
	</header>
	<div class='container'>
<div class="row">
	
<?php // WP_Query arguments
$args = array(
	'post_type'              => array( 'post' ),
	'post_status'            => array( 'publish' ),
	'nopaging'               => false,
	'posts_per_page'         => '',
	'ignore_sticky_posts'    => true,
	'order'                  => 'DESC',
	'orderby'                => 'date',
	'tax_query' => array(
        'taxonomy' => 'category',
        'terms' => array('epreuve-e4','epreuve-e6'),
        'field' => 'slug',
    'include_children' => false,
        'operator' => 'OR'
),
);

// The Query
$query_reseau = new WP_Query( $args );

// The Loop
if ( $query_reseau->have_posts() ) {
	while ( $query_reseau->have_posts() ) {
		$query_reseau->the_post();
		 ?>
<div class="vr-file-post">
		 <div>
		 <div class="card">
  <img class="card-img-top" src="<?= the_post_thumbnail_url('medium'); ?>" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title"><?= the_title();?></h4>
    <a href="<?= the_permalink(); ?>" class="btn btn-primary">En voir plus</a>
  </div>
</div>
</div>
</div>
	<?php
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();
 ?>
 </div>
</div>

	<footer>
    </footer>
</section>
