<?php
/**
 * The template for displaying Search Results pages
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
				<div class="clearfix"></div>
				<div class="col-md-12">
					<div class="search-page">
						<?php if ( have_posts() ) : ?>
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s'), get_search_query() ); ?></h1>
						
						<?php /* The loop */ ?>
						<ul class="list-unstyled">
						<?php while ( have_posts() ) : the_post(); ?>
						
							<li>
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<div class="clearfix"></div>
								<?php //the_post_thumbnail(); 
								$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								$params = array( 'width' => 120 , 'height' => 90 , 'crop' => true );
								$image = bfi_thumb( "$url", $params );
								echo "<img src='$image'/>";  ?>
						        <p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,55); ?>
						        <a href="<?php the_permalink(); ?>"><b>Selengkapnya</b></a>
						    	</p>
							</li>
							
						<?php endwhile; ?>

						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>
						</ul>
					</div><!-- article-content -->
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