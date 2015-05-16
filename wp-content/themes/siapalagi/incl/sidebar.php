<div class="clearfix"></div>
<div class="ads sidebar">
	<img src="<?php echo get_template_directory_uri(); ?>/img/ads-kantorpro.jpg" alt="kantor pro" >
</div>
<div id="tabs" class="sidebar" >
	<ul class="tab-head">
		<li><a href="#tabs-1">Berita Terbaru</a></li>
		<li><a href="#tabs-2">Terpopuler</a></li>
	</ul>
	<!-- Auto Draft -->
	<div id="tabs-1" class="tab-content">
		<dl>
			<?php
			// WP_Query arguments
			$args = array (
				'post_status'            => 'Published',
				'pagination'             => false,
				'posts_per_page'         => '8',
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
			$args = array( 'numberposts' => 8, 'post_status'=> 'Published' );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :  setup_postdata($post); ?>
			<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><p><?php setPostViews(get_the_ID()); echo getPostViews(get_the_ID());; ?></p></dt>
			<?php endforeach; ?>
		</dl>
	</div>
</div><!-- tabs -->
<div class="ads sidebar">
	<img src="<?php echo get_template_directory_uri(); ?>/img/ads-dvirna.jpg" alt="kantor pro">
</div>