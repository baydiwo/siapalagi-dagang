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
				<?php //include "incl/newsslider.php" ?>
				</div>
			</div><!-- row news slider -->
				<div class="clearfix"></div>
				<div class="col-md-12">
					<ul class="list-unstyled">
					<div class="category-page">
						<?php 
						// WP_Query arguments
						$args = array (
							'post_status'            => 'published',
							'category_name'          => 'Event',
							'pagination'             => true,
							'posts_per_page'         => '1',
							);
						// The Query
						$ragam = new WP_Query( $args );

						// The Loop
						if ( $ragam->have_posts() ) {
						while ( $ragam->have_posts() ) {
							$ragam->the_post(); ?>
								<div class="row category-first">
									<div class="col-md-7">
										<div class="teaser">
											<h1 class="travel">Travel</h1>
										</div>
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="col-md-5">
										<a href="<?php the_permalink(); ?>" class="link left"><h2><?php the_title(); ?></h2></a>
										<div class="clearfix"></div>
										<p class="the-date"><?php the_date('d F Y'); ?></p>
										<p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,30); ?></p>
										<a href="<?php the_permalink(); ?>" class="more">selengkapnya</a>
									</div>
								</div>
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
							'category_name'          => 'Event',
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
									<?php the_post_thumbnail('small'); ?>
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
					</div><!-- article-content -->
				</div>
		</div><!-- md 8 -->
		<div class="col-md-4 blog-sidebar">
			<?php include "incl/sidebar.php" ?>
		</div><!-- sidebar -->
	</div><!-- row -->
	<div class="row">
		<div class="col-md-12">
			<div class="partners">
				<h1>our partners</h1>
				<img src="<?php echo get_template_directory_uri(); ?>/img/partners.jpg" alt="">
			</div>
		</div>
	</div>
	</div>
</article>
<?php get_footer(); ?>
</body>
</html>