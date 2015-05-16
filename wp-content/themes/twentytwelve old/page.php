<?php
/**
 * The template for displaying all pages.
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
    <div class="clear"></div>
    <div class="row-fluid">

			<?php while ( have_posts() ) : the_post(); ?>
            <div class="span12">
				<?php get_template_part( 'content', 'page' ); ?>
            </div>
			<?php endwhile; // end of the loop. ?>


    </div><!-- row fluid -->
</div><!-- wrapper -->
</div><!--container -->
</article>
<div class="lines"></div>
<?php get_footer(); ?>