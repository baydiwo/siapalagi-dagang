<div class="clearfix"></div>
<div class="ads sidebar">
	<img src="<?php echo get_template_directory_uri(); ?>/img/ads-kantorpro.jpg" alt="kantor pro" >
</div>
<div id="tabs" class="sidebar" >
	<ul class="tab-head">
		<?php if (in_category(18)) { ?>
			<!-- <li><a href="#tabs-3">Barang Terbaru</a></li> -->
			<li><a href="#tabs-1">Berita Terbaru</a></li>
			<li><a href="#tabs-2">Terpopuler</a></li>
		<?php } else { ?>
		<li><a href="#tabs-1">Berita Terbaru</a></li>
		<li><a href="#tabs-2">Terpopuler</a></li>
		<?php } ?>
	</ul>
	<!-- Auto Draft -->
	<div id="tabs-1" class="tab-content" <?php if (in_category(18)) { echo "style='display:none;'"; } ?>>
		<dl>
			<?php
			// WP_Query arguments
			$args = array (
				'post_status' => array(                 //(string / array) - use post status. Retrieves posts by Post Status, default value i'publish'.
		        'publish',                      // - a published post or page.
		        'future',                       // - a post to publish in the future.
		        ),
				'pagination'             => false,
				'posts_per_page'         => '8',
				'category__not_in'		 => 18,
				// 'name'                   => 'Auto Draft',
				// 'pagename'               => 'Auto Draft',
				// Auto Draft
				);
			// The Query
			$ragam = new WP_Query( $args );

			// The Loop
			if ( $ragam->have_posts() ) {
			while ( $ragam->have_posts() ) {
				$ragam->the_post(); ?>
			<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
				<?php }
			} else { ?>


			<?php } // Restore original Post Data
			wp_reset_postdata();
			?>
		</dl>
	</div>
	<div id="tabs-2" class="tab-content">
		<dl>
			<?php
			global $post;
			$args = array( 'numberposts' => 8, 'post_status' => array('publish','future'), 'category__not_in'		 => 18, );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :  setup_postdata($post); ?>
			<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><p><?php setPostViews(get_the_ID()); echo getPostViews(get_the_ID());; ?></p></dt>
			<?php endforeach; ?>
		</dl>
	</div>
	<?php /*<div id="tabs-3" class="tab-content">
		<dl>
			<?php $args_sb = array ('numberposts' => '8', 'cat' => '18', 'post_status' => array('publish','future'), );
			$query_bside = new WP_Query( $args_sb );
			if ( $query_bside->have_posts() ) { while ( $query_bside->have_posts() ) { $query_bside->the_post(); ?>

					<?php
					$fields_side = get_field_objects();
					// $fields = get_field_objects();
					// var_dump( $fields );
					if( $fields_side )
					{
						foreach( $fields_side as $field_name => $field_side ) : ?>

							<dt><a href="<?php the_permalink() ?>">
							<img src="<?php echo $field_side['value'] ?>">
							<?php the_title() ?>
							</a></dt>
						<?php endforeach;
					}
					 ?>

			<?php } } else {
				// no posts found
			} wp_reset_postdata(); ?>
		</dl>
	</div> */ ?>
</div><!-- tabs -->
<div class="ads sidebar">
	<img src="<?php echo get_template_directory_uri(); ?>/img/ads-dvirna.jpg" alt="kantor pro">
</div>