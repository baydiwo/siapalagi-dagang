<?php
/*
Template Name: Home Page
*/

get_header(); ?>

</head>
<body>
<?php include "incl/header.php"; ?>
<article>
	<div class="container">
		<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
				<?php include "incl/newsslider.php" ?>
				</div>
			</div><!-- row news slider -->
			<div class="stripes"></div>
			<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="teaser left">
					<h1 class="travel">Travel</h1>
					<ul class="list-unstyled">
						<?php 
						// WP_Query arguments
						$args = array (
							'post_status'            => 'published',
							'category_name'          => 'Pelesir',
							'pagination'             => false,
							'posts_per_page'         => '1',
							);
						// The Query
						$ragam = new WP_Query( $args );

						// The Loop
						if ( $ragam->have_posts() ) {
						while ( $ragam->have_posts() ) {
							$ragam->the_post(); ?>

							<li>
								<?php //the_post_thumbnail(); 
								$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								$params = array( 'width' => 308 , 'height' => 155 , 'crop' => true );
								$image = bfi_thumb( "$url", $params );
								echo "<img src='$image'/>";  ?>
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,30); ?></p>
							</li>		
							<?php }
						} else { ?>

					
						<?php } // Restore original Post Data
						wp_reset_postdata();
						?>
						<?php 
						// WP_Query arguments
						$args = array (
							'post_status'            => 'published',
							'category_name'          => 'Pelesir',
							'pagination'             => false,
							'posts_per_page'         => '2',
							'offset'                 => '1',
							);
						// The Query
						$ragam = new WP_Query( $args );

						// The Loop
						if ( $ragam->have_posts() ) {
						while ( $ragam->have_posts() ) {
							$ragam->the_post(); ?>

							<li>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								$params = array( 'width' => 100 , 'height' => 100 , 'crop' => true );
								$image = bfi_thumb( "$url", $params );
								echo "<img src='$image'/>";  ?>
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,18); ?></p>
							</li>		
							<?php }
						} else { ?>

					
						<?php } // Restore original Post Data
						wp_reset_postdata();
						?>
					</ul>
				</div>
			</div><!-- md 6 -->
			<div class="col-md-6  col-sm-6">
				<div class="teaser left">
					<h1 class="ragam">ragam</h1>
					<ul class="list-unstyled">
						<?php 
						// WP_Query arguments
						$args = array (
							'post_status'            => 'published',
							'category_name'          => 'Ragam',
							'pagination'             => false,
							'posts_per_page'         => '1',
							);
						// The Query
						$ragam = new WP_Query( $args );

						// The Loop
						if ( $ragam->have_posts() ) {
						while ( $ragam->have_posts() ) {
							$ragam->the_post(); ?>

							<li>
								<?php //the_post_thumbnail(); 
								$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								$params = array( 'width' => 308 , 'height' => 155 , 'crop' => true );
								$image = bfi_thumb( "$url", $params );
								echo "<img src='$image'/>";  ?>
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,30); ?></p>
							</li>		
							<?php }
						} else { ?>

					
						<?php } // Restore original Post Data
						wp_reset_postdata();
						?>
						<?php 
						// WP_Query arguments
						$args = array (
							'post_status'            => 'published',
							'category_name'          => 'Ragam',
							'pagination'             => false,
							'posts_per_page'         => '2',
							'offset'                 => '1',
							);
						// The Query
						$ragam = new WP_Query( $args );

						// The Loop
						if ( $ragam->have_posts() ) {
						while ( $ragam->have_posts() ) {
							$ragam->the_post(); ?>

							<li>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								$params = array( 'width' => 100 , 'height' => 100 , 'crop' => true );
								$image = bfi_thumb( "$url", $params );
								echo "<img src='$image'/>";  ?>
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,18); ?></p>
							</li>		
							<?php }
						} else { ?>

					
						<?php } // Restore original Post Data
						wp_reset_postdata();
						?>
					</ul>
				</div>
			</div><!-- md 6 -->
			<div class="clearfix"></div>
			</div><!-- row -->
			<div class="stripes stripes-margin"></div>
			<div class="row">
			<div class="col-md-6  col-sm-6">
				<div class="teaser left">
					<h1 class="event">event</h1>
					<ul class="list-unstyled">
						<?php 
						// WP_Query arguments
						$args = array (
							'post_status'            => 'published',
							'category_name'          => 'Event',
							'pagination'             => false,
							'posts_per_page'         => '1',
							);
						// The Query
						$ragam = new WP_Query( $args );

						// The Loop
						if ( $ragam->have_posts() ) {
						while ( $ragam->have_posts() ) {
							$ragam->the_post(); ?>

							<li>
								<?php //the_post_thumbnail(); 
								$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								$params = array( 'width' => 308 , 'height' => 155 , 'crop' => true );
								$image = bfi_thumb( "$url", $params );
								echo "<img src='$image'/>";  ?>
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,30); ?></p>
							</li>		
							<?php }
						} else { ?>

					
						<?php } // Restore original Post Data
						wp_reset_postdata();
						?>
						<div class="ads-event">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ads-telkom.jpg" alt="">
						</div>
					</ul>
				</div>
			</div><!-- md 6 -->
			<div class="col-md-6  col-sm-6">
				<div class="teaser left">
					<h1 class="siapa">siapa</h1>
					<ul class="list-unstyled">
						<?php 
						// WP_Query arguments
						$args = array (
							'post_status'            => 'published',
							'category_name'          => 'Siapa',
							'pagination'             => false,
							'posts_per_page'         => '1',
							);
						// The Query
						$ragam = new WP_Query( $args );

						// The Loop
						if ( $ragam->have_posts() ) {
						while ( $ragam->have_posts() ) {
							$ragam->the_post(); ?>

							<li>
								<?php //the_post_thumbnail(); 
								$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								$params = array( 'width' => 308 , 'height' => 155 , 'crop' => true );
								$image = bfi_thumb( "$url", $params );
								echo "<img src='$image'/>";  ?>
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,18); ?></p>
							</li>		
							<?php }
						} else { ?>

					
						<?php } // Restore original Post Data
						wp_reset_postdata();
						?>
						<?php 
						// WP_Query arguments
						$args = array (
							'post_status'            => 'published',
							'category_name'          => 'Siapa',
							'pagination'             => false,
							'posts_per_page'         => '2',
							'offset'                 => '1',
							);
						// The Query
						$ragam = new WP_Query( $args );

						// The Loop
						if ( $ragam->have_posts() ) {
						while ( $ragam->have_posts() ) {
							$ragam->the_post(); ?>

							<li>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								$params = array( 'width' => 100 , 'height' => 100 , 'crop' => true );
								$image = bfi_thumb( "$url", $params );
								echo "<img src='$image'/>";  ?>
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,18); ?></p>
							</li>		
							<?php }
						} else { ?>

					
						<?php } // Restore original Post Data
						wp_reset_postdata();
						?>
					</ul>
				</div>
			</div><!-- md 6 -->
			</div><!-- row -->
		</div><!-- md 11 -->
		<div class="col-md-4 blog-sidebar">
			<?php include "incl/sidebar.php";  ?>
		</div><!-- sidebar -->
	</div><!-- row -->
	<?php include 'incl/ourpartners.php' ?>
	</div>
</article>
<?php get_footer(); ?>
</body>
</html>