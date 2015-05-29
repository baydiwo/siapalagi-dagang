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
				<div class="row">
				<div class="col-md-12">
					<div class="search-page">
						<?php if ( have_posts() ) : ?>
						<h1 class="page-title"><?php printf( __( 'Hasil pencarian untuk: %s'), get_search_query() ); ?></h1>

						<?php /* The loop */ ?>
						<ul class="list-unstyled">
						<?php while ( have_posts() ) : the_post(); ?>


							<?php if (is_category( '18' ) ): ?>
								<li>
									<div class="shop-list left">
										<div class="col-md-4 shop-thumb"><img src="<?php the_field("image-1") ?>" alt=""></div>
										<div class="col-md-4 shop-title">
											<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<p><?php the_field("provinsi") ?> - <?php the_time('F j, Y'); ?></p>
											<div class="category">
												<ul class="list-inline">
													<li><a href=""><?php the_field("merek") ?></a></li>
													<li><a href=""><?php if (get_field("kondisi") == 1) {echo "Baru";} else {echo "bekas";} ?></a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-4 shop-price">
											<p class="price">Harga <br> <span>Rp <?php the_field("harga") ?></span> </p>
										</div>
									</div><!-- row barang dagangan -->
								</li>
							<?php else : ?>
								<li class="result-article">
									<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
									<div class="clearfix"></div>
									<?php //the_post_thumbnail();
									$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									$params = array( 'width' => 120 , 'height' => 90 , 'crop' => true );
									$image = bfi_thumb( "$url", $params );

									// $getimagefield = get_field("image-1");
									// $params2 = array( 'width' => 120 , 'height' => 90 , 'crop' => true );
									// $theimage = bfi_thumb( "$getimagefield", $params2 );
									echo "<img src='$image'/>";
									// if ($image != null) {
									// 	echo "<img src='$image'/>";
									// }
									// else {
									// 	echo "<img src='$theimage'/>";
									// } ?>
							        <p>
							        	<?php
							        	$excerpt = get_the_excerpt();

							        	echo string_limit_words($excerpt,55);
							        	?>
							        <a href="<?php the_permalink(); ?>"><b>Selengkapnya</b></a>
							    	</p>
								</li>

							<?php endif ?>

						<?php endwhile; ?>

						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>
						</ul>
					</div><!-- article-content -->
				</div>
				</div> <!-- row -->
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