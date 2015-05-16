<?php
/**
 * The template for displaying Category pages
 *
 * @package WordPress
 * @subpackage EIGHTED
 * 
 */
 get_header(); ?>
</head>
<body>
<?php include "incl/header.php"; ?>
<article>
	<div class="container">
		<div class="row">
		<div class="col-md-8">
				<div class="breadcums">
					<?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs(); ?>
				</div>
				<div class="row">
					<div class="col-md-12">
					<?php include "incl/catslider.php"; ?>
					</div>
				</div><!-- row news slider -->
				<div class="clearfix"></div>
				<div class="stripes"></div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="teaser">
							<?php $sel_cat = get_category_parents( $cat ); 
								if (is_category()) {
								    global $wp_query;
								    $cat_obj = $wp_query->get_queried_object();    
								    $root_cat = get_root_category($cat_obj)->cat_ID;   

								    $current_category = single_cat_title("", false);

								    if ($root_cat == 16) {echo '<h1 class="travel">'.$current_category.'</h1>'; }
									else if ($root_cat == 15) {echo '<h1 class="event">'.$current_category.'</h1>'; }
									else if ($root_cat == 5) {echo '<h1 class="ragam">'.$current_category.'</h1>'; }
									else if ($root_cat == 2) {echo '<h1 class="siapa">'.$current_category.'</h1>'; }
									else {
										echo '<h1 class="siapa">'.$current_category.'</h1>';
									}
								}
							?>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-md-12">
					<div class="category-page">
					
					<ul class="list-unstyled">
						<?php 
						$current_category = get_cat_name( $root_cat );
						// WP_Query arguments
						$args = array (
							'post_status'            => 'published',
							'category_name'          => "$current_category",
							// 'cat'  					 => 7,
							'pagination'             => true,
							'posts_per_page'         => '20',
							'offset'				 => '8',
							'pagination'			 => true
							);
						// The Query
						$ragam = new WP_Query( $args );

						// The Loop
						if ( $ragam->have_posts() ) {
						while ( $ragam->have_posts() ) {
							$ragam->the_post(); ?>
							<li>
								<!-- <div class="row category-first">
									<div class="col-md-5">
										
										<?php //the_post_thumbnail(); 
										$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
										$params = array( 'width' => 260 , 'height' => 170 , 'crop' => true );
										$image = bfi_thumb( "$url", $params );
										echo "<img src='$image'/>";  ?>
									</div>
									<div class="col-md-7">
										<a href="<?php the_permalink(); ?>" class="link left"><h2><?php the_title(); ?></h2></a>
										<div class="clearfix"></div>
										<p class="the-date"><?php the_date('d F Y'); ?></p>
										<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,35); ?></p>
										<a href="<?php the_permalink(); ?>" class="more">selengkapnya</a>
									</div>
								</div> -->
								<div class="row category-then">
									<div class="col-md-3">
										<?php //the_post_thumbnail(); 
										$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
										$params = array( 'width' => 140 , 'height' => 100 , 'crop' => true );
										$image = bfi_thumb( "$url", $params );
										echo "<img src='$image'/>";  ?>
									</div>
									<div class="col-md-9">
										<a href="<?php the_permalink(); ?>" class="link left"><h2><?php the_title(); ?></h2></a>
										<div class="clearfix"></div>
										<p class="the-date"><?php if( the_date() == null ){ echo "Hari ini"; } else { the_date('d F Y');} ?></p>
										<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,35); ?></p>
									</div>
								</div>	
							</li>
							<?php }
						} else { ?>

					
						<?php } // Restore original Post Data
						wp_reset_postdata();
						?>
						<div class="clearfix"></div>
						<?php 
						// WP_Query arguments
						$args = array (
							'post_status'            => 'published',
							'category_name'          => "$current_category",
							'pagination'             => true,
							'posts_per_page'         => '4',
							'offset'                 => '1',
							);
						// The Query
						$ragam = new WP_Query( $args );

						// The Loop
						if ( $ragam->have_posts() ) {
						while ( $ragam->have_posts() ) {
							$ragam->the_post(); ?>
							
							<div class="row category-then">
								<div class="col-md-3">
									<?php //the_post_thumbnail(); 
									$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									$params = array( 'width' => 140 , 'height' => 100 , 'crop' => true );
									$image = bfi_thumb( "$url", $params );
									echo "<img src='$image'/>";  ?>
								</div>
								<div class="col-md-9">
									<a href="<?php the_permalink(); ?>" class="link left"><h2><?php the_title(); ?></h2></a>
									<div class="clearfix"></div>
									<p class="the-date"><?php if( the_date() == null ){ echo "Hari ini"; } else { the_date('d F Y');} ?></p>
									<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,35); ?></p>
								</div>
							</div>	
							<?php }
						} else { ?>

					
						<?php } // Restore original Post Data
						wp_reset_postdata(); 
						?>
					</ul>
					</div><!-- article-content -->
					
				</div>
				</div>
		</div><!-- md 8 -->
		<div class="col-md-4 blog-sidebar">
			<?php include "incl/sidebar.php" ?>
		</div><!-- sidebar -->
	</div><!-- row -->
	<?php include 'incl/ourpartners.php' ?>
	</div>
</article>
<?php get_footer(); ?>
</body>
</html>