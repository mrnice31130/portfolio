<div id="post-carousel" class="mm-post-slide">

<?php
$args = array(
	'post_type'              => array( 'post' ),
	'post_status'            => array( 'publish' ),
	'nopaging'               => false,
	'ignore_sticky_posts'    => true,
	'order'                  => 'ASC',
	'orderby'                => 'date',
);
$i = 0;
// The Query
$carousel_query = new WP_Query( $args );

// The Loop
if ( $carousel_query->have_posts() ) {
	while ( $carousel_query->have_posts() ) {
		$carousel_query->the_post();
    $i++;

    ?>

    <div>
      <img class="img-responsive" src="<?= the_post_thumbnail_url('post-carousel'); ?>" alt="First slide">
    </div>

    <?php
	}
} else {
	
}

wp_reset_postdata();
?>
</div>
