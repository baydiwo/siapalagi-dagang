<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<article>
<div id="container">
<div class="wrapper">
<?php if ( have_posts() ) : ?>
	<h2><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
    <div class="clear"></div>
    <?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
    <div class="row-fluid searchpage">
        <div class="span12">
        <h4><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
        </div>
        
        <div class="row-fluid">
            <div class="span4">
            <?php the_post_thumbnail(); ?>
            </div>
            <div class="span8">
            <?php the_excerpt(); ?>
            </div>
        </div>

    </div><!-- row fluid -->
    <?php endwhile; ?>
	
    
    		<?php else : ?>
    <div class="row-fluid">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
	</div>
		<?php endif; ?>

</div><!-- wrapper -->
</div><!-- container -->
</article>
<?php get_footer(); ?>