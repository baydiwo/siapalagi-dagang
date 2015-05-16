<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage EIGHTED
 * 
 */

get_header(); ?>

<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
        <?php 
        /* The loop: the_post retrieves the content
         * of the new Page you created to list the posts,
         * e.g., an intro describing the posts shown listed on this Page..
         */
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();

              // Display content of page
              get_template_part( 'content', get_post_format() ); 
              wp_reset_postdata();
  
            endwhile;
        endif;

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            // Change these category SLUGS to suit your use.
            'category_name' => 'music, videos', 
            'paged' => $paged
        );

        $list_of_posts = new WP_Query( $args );
        ?>
        <?php if ( $list_of_posts->have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( $list_of_posts->have_posts() ) : $list_of_posts->the_post(); ?>
				<?php // Display content of posts ?>
			<?php endwhile; ?>

			

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

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
			<div class="col-md-6">
				<div class="teaser left">
					<h1 class="travel">travel</h1>
					<ul class="list-unstyled">
						<li>
							<img src="img/content/travel1.jpg" alt="">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut </p>
						</li>
						<li>
							<img src="img/content/thumb1.jpg" alt="">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut</p>
						</li>
						<li>
							<img src="img/content/thumb2.jpg" alt="">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut</p>
						</li>
					</ul>
				</div>
			</div><!-- md 6 -->
			<div class="col-md-6">
				<div class="teaser left">
					<h1 class="ragam">ragam</h1>
					<ul class="list-unstyled">
						<li>
							<img src="img/content/travel1.jpg" alt="">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut </p>
						</li>
						<li>
							<img src="img/content/thumb1.jpg" alt="">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut</p>
						</li>
						<li>
							<img src="img/content/thumb2.jpg" alt="">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut</p>
						</li>
					</ul>
				</div>
			</div><!-- md 6 -->
			<div class="clearfix"></div>
			</div><!-- row -->
			<div class="stripes"></div>
			<div class="row">
			<div class="col-md-6">
				<div class="teaser left">
					<h1 class="event">event</h1>
					<ul class="list-unstyled">
						<li>
							<img src="img/content/travel1.jpg" alt="" style="width:100%;">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut </p>
						</li>
						<div class="ads-event">
							<img src="img/ads-telkom.jpg" alt="">
						</div>
					</ul>
				</div>
			</div><!-- md 6 -->
			<div class="col-md-6">
				<div class="teaser left">
					<h1 class="siapa">siapa</h1>
					<ul class="list-unstyled">
						<li>
							<img src="img/content/travel1.jpg" alt="">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut </p>
						</li>
						<li>
							<img src="img/content/thumb1.jpg" alt="">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut</p>
						</li>
						<li>
							<img src="img/content/thumb2.jpg" alt="">
							<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut</p>
						</li>
					</ul>
				</div>
			</div><!-- md 6 -->
			</div><!-- row -->
		</div><!-- md 11 -->
		<div class="col-md-4 blog-sidebar">
			<?php include "incl/sidebar.php" ?>
		</div><!-- sidebar -->
	</div><!-- row -->
	<div class="row">
		<div class="col-md-12">
			<div class="partners">
				<h1>our partners</h1>
				<img src="img/partners.jpg" alt="">
			</div>
		</div>
	</div>
	</div>
</article>
<?php get_footer(); ?>
</body>
</html>