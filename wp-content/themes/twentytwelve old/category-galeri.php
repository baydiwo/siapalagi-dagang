<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<article>
<div id="container">
<div class="wrapper">
	<h2><?php the_category(' '); ?> </h2>
    <div class="clear"></div>
    <div class="row-fluid gallery">
        <ul class="unstyled">
            <?php if ( have_posts() ) : ?>
                
                <?php
                /* Start the Loop */
                while ( have_posts() ) : the_post(); ?>
                    
                    <li>
                    <a href="<?php the_permalink(); ?>" class="thumb"><?php the_post_thumbnail( array(150,100) ); ?></a>
                    <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                    </li>
                <?php endwhile; ?>
    
    
            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>
        </ul>
	</div><!-- row fluid -->
</div><!-- wrapper -->
</div><!--container -->
</article>
<div class="lines"></div>
<!-- footer -->
<?php get_footer(); ?>
<!-- eof footer -->
