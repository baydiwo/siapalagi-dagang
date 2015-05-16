<?php
/**
 * The Template for displaying all single posts.
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
				<div class="clearfix"></div>
				<div class="col-md-12">
					<div class="article-content">
						<h1><?php the_title(); ?></h1>
						<div class="row">
							<div class="col-md-6"><span class="publish-date left">By <?php the_author(); ?> , <a href="<?php site_url(); ?>">Siapalagi.com</a>, <br><?php if(the_date('F d Y', '', '') == null) {echo "Hari ini"; } else { the_date('F d Y', '', ''); } ?></span></div>
							<div class="col-md-6">
								<div class="right share">
								<span class="publish-date left">Berbagi artikel ini&nbsp;</span>
								<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
								</div>
							</div>
						</div>

						<?php while ( have_posts() ) : the_post(); ?>
				     	
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
				       
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				        <img src="<?php echo $image[0]; ?>" class="img-responsive left" style="margin-right:10px; margin-bottom:10px;">
				        
				        <?php endif; ?>

							<?php if ( is_single() ) : ?>
							<div class="post">
							<?php the_content() ?>
							</div>
							<?php endif; // is_single() ?>
				            <?php //the_content() ?>
				        
				        <?php endwhile; // end of the loop. ?>
						
						<!-- <div class="article-more left">
							<span>Berita Lainnya</span>
							<ul class="list-inline">
								<li><a href="">
									<img src="img/content/more1.jpg" alt="">
											<h5>And the world's busiest airport is ...</h5>
									</a>
								</li>
								<li><a href="">
									<img src="img/content/more2.jpg" alt="">
											<h5>How deep is deep? Imagining the MH370 search underwater</h5>
									</a>
								</li>
								<li><a href="">
									<img src="img/content/more3.jpg" alt="">
											<h5>Richard Gere reportedly dating Padma Lakshmi from 'Top Chef'</h5>
									</a>
								</li>
								<li><a href="">
									<img src="img/content/more4.jpg" alt="">
											<h5>Timeline: South Korea ferry disaster</h5>
									</a>
								</li>
							</ul>
						</div> -->
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