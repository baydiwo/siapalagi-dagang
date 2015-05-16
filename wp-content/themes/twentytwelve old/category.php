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
    
    
		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
			<div class="row-fluid profile">
                <div class="span4">
                <?php the_post_thumbnail(); ?>
                </div>
                <div class="span8">
                    <h4><?php the_title(); ?></h4>
                    <p class="author"><?php twentytwelve_entry_meta(); ?></p>
                    <p><?php the_excerpt(); ?></p>
                    <div class="row-fluid">
                    	<div class="span2">
                    <a href="<?php the_permalink(); ?>" ><div class="more">selengkapnya</div></a>
                    	</div>
                    </div>
                </div>
			</div><!-- row fluid -->
			<?php endwhile; ?>


		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- row fluid -->
</div><!-- wrapper -->
</div><!--container -->
</article>
<div class="lines"></div>
<!-- footer -->
<?php get_footer(); ?>
<!-- eof footer -->
