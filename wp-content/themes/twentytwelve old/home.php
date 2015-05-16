<?php
/**
 * The template for displaying the home page.
 *
 * Includes mutiple loops and static page content
 *
 */
 
get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article>
<div id="container">
<!-- slider -->
<div class="relative">
<div id="da-slider" class="da-slider">

	<?php $query = new WP_Query( array(
        'post_type' => 'post',
        'cat' => '8',
        'posts_per_page' => 5
    ) );
    while ($query->have_posts()) : $query->the_post(); ?>
    
    <div class="da-slide">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
        <a href="<?php the_permalink(); ?>" class="da-link">selengkapnya</a>
        <div class="da-img"><?php the_post_thumbnail(); ?></div>
    </div>
    
    <?php endwhile; ?>

    <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>
</div>
<div class="shadow"></div>
</div>
<!-- eof slider -->
  <div class="row-fluid">
      <div class="span12">
          <div class="latestpost left">
              
              <ul class="rslides" id="slider1" >
				<?php $query = new WP_Query( array(
                    'post_type' => 'post',
                    'cat' => '5',
                    'posts_per_page' => 5
                ) );
                while ($query->have_posts()) : $query->the_post(); ?>
                
                <li> 
                    <div class="span10">
                      <h4><?php the_title(); ?></h4>
                      <p><?php $content = get_the_content(); 
					  $trimmed_content = wp_trim_words( $content, 30);
					  echo $trimmed_content;
					  ?></p>
                    </div>
                    <div class="span2">                 
                      <a href="<?php the_permalink(); ?>" ><div class="more">selengkapnya</div></a>
                    </div>
                </li>
                
                <?php endwhile; ?>
                
              </ul>

            </div><!-- latest post -->
            <div class="clear"></div>
            <div class="lines"></div>
        </div>
    </div><!-- row fluid -->
    <div class="row-fluid"><div class="span4 offset4"><h1 class="ourserviceh1">LAYANAN KAMI</h1></div></div>
    <div class="row-fluid">
    
      <div class="span4 os-widget" id="servicewidget1">
          <div class="icon1">
                <div class="iHoverable1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/service_device.png" class="" />
                </div>
            </div>
            <?php $query = new WP_Query( array('page_id' => '80','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="<?php echo site_url(); ?>/layanan-kami/"><h3><?php the_title(); ?></h3></a>
			<p><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 35);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
        
        <div class="span4 os-widget" id="servicewidget2">
          <div class="icon2">
                <div class="iHoverable2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/service_star.png" />
        </div>
      </div>
            <?php $query = new WP_Query( array('page_id' => '82','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="<?php echo site_url(); ?>/layanan-kami/"><h3><?php the_title(); ?></h3></a>
			<p><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 35);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
        
        <div class="span4 os-widget" id="servicewidget3">
          <div class="icon3">
                <div class="iHoverable3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service_oncall.png" />
                </div>
            </div>
            <?php $query = new WP_Query( array('page_id' => '84','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="<?php echo site_url(); ?>/layanan-kami/"><h3><?php the_title(); ?></h3></a>
			<p><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 35);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
    </div><!-- row fluid for our service column 1-->
    <div class="row-fluid" >
    
      <div class="span4 os-widget" id="servicewidget4">
          <div class="icon4">
                <div class="iHoverable4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service_seminar.png" />
                </div>
            </div>
            <?php $query = new WP_Query( array('page_id' => '88','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="<?php echo site_url(); ?>/layanan-kami/"><h3><?php the_title(); ?></h3></a>
			<p><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 35);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
        
      <div class="span4 os-widget" id="servicewidget5">
          <div class="icon5">
                <div class="iHoverable5">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service_hand.png" />
                </div>
            </div>
            <?php $query = new WP_Query( array('page_id' => '90','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="<?php echo site_url(); ?>/layanan-kami/"><h3><?php the_title(); ?></h3></a>
			<p><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 35);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
        
      <div class="span4 os-widget" id="servicewidget6">
          <div class="icon6">
                <div class="iHoverable6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service_massal.png" />
                </div>
            </div>
            <?php $query = new WP_Query( array('page_id' => '86','posts_per_page' => 1) );
			while ($query->have_posts()) : $query->the_post(); ?>
			<a href="<?php echo site_url(); ?>/layanan-kami/"><h3><?php the_title(); ?></h3></a>
			<p><?php $content = get_the_content(); 
				  $trimmed_content = wp_trim_words( $content, 35);
				  echo $trimmed_content; ?></p>    
			<?php endwhile; ?>
        </div>
    </div><!-- row fluid for our service column 2-->
</div><!--container -->
</article>
<div class="lines"></div>
<?php endwhile; ?>
<!-- footer -->
<?php get_footer(); ?>
<!-- eof footer -->
