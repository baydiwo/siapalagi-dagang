<?php
/**
 * Template Name: Gallery
 * The template for displaying gallery.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<article>
<div id="container">
<div class="wrapper">
	<h2><?php the_title(); ?></h2>
    <div class="clear"></div>
    <div class="row-fluid gallery">
    	<ul class="unstyled">
       
        <?php while ( have_posts() ) : the_post(); ?>
            
            <?php /*
			global $post;
			if ( preg_match_all('/<img (.+?)>/', $post->post_content, $matches) ) {
					foreach ($matches[1] as $match) {
							foreach ( wp_kses_hair($match, array('http')) as $attr)
								$img[$attr['name']] = $attr['value'];
								$imgpath = $img['src'];
								echo "
								<li>
								
								<a href='' class='thumb'><img src='$imgpath' class='imageshadow'></a>
								<a href='#'><h5>Lorem Ipsum Lorem Ipsum</h5></a>
								</li>
								";
					}
			}*/
			
			the_content();
			
			?>
            
			<?php endwhile; // end of the loop. ?>
        </ul>
        
        
    </div><!-- row fluid -->
</div><!-- wrapper -->
</div><!--container -->
</article>
<div class="lines"></div>
<!-- footer -->
<?php get_footer(); ?>
<!-- eof footer -->
