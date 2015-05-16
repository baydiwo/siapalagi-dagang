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
            
    <div class="row-fluid">
    
      <div class="span6 os-widget" id="servicewidget1">
          <div class="icon1">
                <div class="iHoverable1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service_device.png" class="" />
                </div>
            </div>
            <?php $query = new WP_Query( array('page_id' => '80','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="#"><h3><?php the_title(); ?></h3></a>
			<p class="textleft"><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 200);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
        
        <div class="span6 os-widget" id="servicewidget2">
          <div class="icon2">
                <div class="iHoverable2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/service_star.png" />
        </div>
      </div>
            <?php $query = new WP_Query( array('page_id' => '82','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="#"><h3><?php the_title(); ?></h3></a>
			<p class="textleft"><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 200);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
	</div><!-- row fluid for our service column 1-->
	<div class="row-fluid" >
        <div class="span6 os-widget" id="servicewidget3">
          <div class="icon3">
                <div class="iHoverable3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service_oncall.png" />
                </div>
            </div>
            <?php $query = new WP_Query( array('page_id' => '84','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="#"><h3><?php the_title(); ?></h3></a>
			<p class="textleft"><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 200);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
    
      <div class="span6 os-widget" id="servicewidget4">
          <div class="icon4">
                <div class="iHoverable4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service_seminar.png" />
                </div>
            </div>
            <?php $query = new WP_Query( array('page_id' => '88','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="#"><h3><?php the_title(); ?></h3></a>
			<p class="textleft"><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 200);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
	</div><!-- row fluid for our service column 2-->
	<div class="row-fluid" >
      <div class="span6 os-widget" id="servicewidget5">
          <div class="icon5">
                <div class="iHoverable5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service_hand.png" />
                </div>
            </div>
            <?php $query = new WP_Query( array('page_id' => '90','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="#"><h3><?php the_title(); ?></h3></a>
			<p class="textleft"><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 200);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
        
      <div class="span6 os-widget" id="servicewidget6">
          <div class="icon6">
                <div class="iHoverable6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service_massal.png" />
                </div>
            </div>
            <?php $query = new WP_Query( array('page_id' => '86','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="#"><h3><?php the_title(); ?></h3></a>
			<p class="textleft"><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 200);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
	</div><!-- row fluid for our service column 3-->


    </div><!-- row fluid -->
</div><!-- wrapper -->
</div><!--container -->
</article>
<div class="lines"></div>
<?php get_footer(); ?>