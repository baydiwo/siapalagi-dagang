<div class="ticker">
    <strong>Berita Utama :</strong>
    <ul>
		<?php
	// WP_Query arguments
	$args = array (
		'post_status' 			 => array('publish','future'),
		'pagination'             => false,
		'posts_per_page'         => '4',
		'ignore_sticky_posts'    => true,
		'category__not_in'		 => 18,
	);

	// The Query
	$headline = new WP_Query( $args );

	// The Loop
	if ( $headline->have_posts() ) {
		while ( $headline->have_posts() ) {
			$headline->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> - <?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,5); ?></a></li>
		<?php }
	} else { ?>
		// no posts found
	<?php }

	// Restore original Post Data
	wp_reset_postdata();
	 ?>
    </ul>
</div>
<?php
// $cat=1;
$yourcat = get_category($cat);
if ($yourcat) {
// echo '<h2>' . $yourcat->name . '</h2>';
}
$thisCat = get_category(get_query_var('cat'),false);
$total_posts = $thisCat->count;

if($total_posts == 0){
	echo '<ul id="newsslider-none" style="display: none;" >';
}
else {
	echo '<ul id="newsslider" >';
}
?>
<!-- <ul id="newsslider" style="display: none;" > -->
	<?php
	// WP_Query arguments
	$args = array (
		'post_status' 			 => array('publish','future'),
		'pagination'             => false,
		'posts_per_page'         => '8',
		'category_name'          => $yourcat->name
		);

	// The Query
	$headline = new WP_Query( $args );

	// The Loop
	if ( $headline->have_posts() ) {
		while ( $headline->have_posts() ) {
			$headline->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php //the_post_thumbnail();
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					$params = array( 'width' => 640 , 'height' => 360 , 'crop' => true );
					$image = bfi_thumb( "$url", $params );
					echo "<img src='$image' width='140' height='80' />";  ?>
				</a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,15); ?> <br /><a href="<?php the_permalink(); ?>"> &raquo; read more</a></p>
			</li>
		<?php }
	} else { ?>

	<?php }

	// Restore original Post Data
	wp_reset_postdata();
	 ?>
</ul>