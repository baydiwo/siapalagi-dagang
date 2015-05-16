<?php
/**
 * The Template for displaying all single posts.
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
    <div class="row-fluid">
    <?php while ( have_posts() ) : the_post(); ?>
     	
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
    	<div class="span4">
       
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <img src="<?php echo $image[0]; ?>" class="imageshadow">
        
        </div>
        <?php endif; ?>

        <div class="span8">
			<?php if ( is_single() ) : ?>
			<p class="author"><?php twentytwelve_entry_meta(); ?></p>
			<?php endif; // is_single() ?>
            <?php the_content() ?>
        
        	
        </div>
        
        <?php endwhile; // end of the loop. ?>
    </div><!-- row fluid -->
</div><!-- wrapper -->
</div><!--container -->
</article>
<div class="lines"></div>
<!-- footer -->
<?php get_footer(); ?>
<!-- eof footer -->
