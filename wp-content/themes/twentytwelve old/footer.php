<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<footer>
<div id="container">
  <div class="row-fluid">
      <div class="span4">
            <?php
			// The Query
			$the_query = new WP_Query( 'page_id=94' );
			
			// The Loop
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<h4>'.get_the_title() .'</h4>';
						
				echo '<p>'.the_content().'</p>';
			}
			
			/* Restore original Post Data 
			 * NB: Because we are using new WP_Query we aren't stomping on the 
			 * original $wp_query and it does not need to be reset.
			*/
			wp_reset_postdata(); ?>
        </div>
        <div class="span4 footer-latestpost">
          <h4>latest post</h4>
              <ul>
              <?php
            $myposts = get_posts('numberposts=3&cat=5');
            if ($myposts) :
                foreach ($myposts as $post) :
            setup_postdata($post);
                    unset($categories);
            foreach (get_the_category() as $category)
                $categories[] = $category->cat_name; ?>
                    <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                    <?php endforeach;?>
                    <?php else : ?>
                    <li>Tidak ada berita terbaru</li>
                    <?php endif;?>
            </ul>
        </div>
        <div class="span4">
          <h4>get in touch</h4>
            <ul class="unstyled getintouch">
              <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/footer-socials-01.png" />&nbsp;connect to facebook</a></li>
                <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/footer-socials-02.png" />&nbsp;follow on twitter</a></li>
                <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/footer-socials-03.png" />&nbsp;share to g+</a></li>
                <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/footer-socials-04.png" />&nbsp;watch on youtube</a></li>
                <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/footer-socials-05.png" />&nbsp;connect to linkedin</a></li>
                <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/footer-socials-06.png" />&nbsp;subscribe to rss</a></li>
            </ul>
        </div>
    </div>
</div><!-- container -->
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cslider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script type="text/javascript">
var j = jQuery.noConflict();
  j(document).ready(function($) {  
  
    j('#da-slider').cslider();
    j("#slider1").responsiveSlides({
        speed: 800
      });
	//j(".gallery-icon a").attr({rel:"lightbox"});  
	
    j('#servicewidget1').hover(function() {
      j('.iHoverable1').addClass('hover1');
	  j('.icon1').addClass('hover1');
    }, function() {
      j('.iHoverable1').removeClass('hover1');
	  j('.icon1').removeClass('hover1');
    });
	//widget2
	j('#servicewidget2').hover(function() {
      j('.iHoverable2').addClass('hover2');
	  j('.icon2').addClass('hover2');
    }, function() {
      j('.iHoverable2').removeClass('hover2');
	  j('.icon2').removeClass('hover2');
    });
	//widget3
	j('#servicewidget3').hover(function() {
      j('.iHoverable3').addClass('hover3');
	  j('.icon3').addClass('hover3');
    }, function() {
      j('.iHoverable3').removeClass('hover3');
	  j('.icon3').removeClass('hover3');
    });
	//widget4
	j('#servicewidget4').hover(function() {
      j('.iHoverable4').addClass('hover4');
	  j('.icon4').addClass('hover4');
    }, function() {
      j('.iHoverable4').removeClass('hover4');
	  j('.icon4').removeClass('hover4');
    });
	//widget5
	j('#servicewidget5').hover(function() {
      j('.iHoverable5').addClass('hover5');
	  j('.icon5').addClass('hover5');
    }, function() {
      j('.iHoverable5').removeClass('hover5');
	  j('.icon5').removeClass('hover5');
    });
	//widget6
	j('#servicewidget6').hover(function() {
      j('.iHoverable6').addClass('hover6');
	  j('.icon6').addClass('hover6');
    }, function() {
      j('.iHoverable6').removeClass('hover6');
	  j('.icon6').removeClass('hover6');
    });
	
	
  });
       
</script>

</body>
</html>