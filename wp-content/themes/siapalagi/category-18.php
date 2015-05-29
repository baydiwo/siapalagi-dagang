<?php
/**
 * The template for displaying Category pages
 *
 * @package WordPress
 * @subpackage EIGHTED
 *
 */
 get_header(); ?>
 <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet" />
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins/jquery.easing.1.3.js"></script>

<script>
	$(document).ready(function(){
	  $('.bxslider').bxSlider({
	  	mode: 'fade',
	  	slideWidth: '640',
	  });
	});
</script>
</head>
<body>
<?php include "incl/header.php"; ?>
<article>
	<div class="container">
		<div class="row">
		<div class="col-md-8">
			<!-- berniaga slider -->
			<div class="berniaga-slider">
				<ul class="bxslider list-unstyled">
				<?php

				$args = array ('page_id'                    => '329');

				$bslider = new WP_Query( $args );

				if ( $bslider->have_posts() ) {
					while ( $bslider->have_posts() ) {
						$bslider->the_post(); ?>
					<?php
				/*
				*  get all custom fields, loop through them and load the field object to create a label => value markup
				*/

				$fields = get_fields();

				if( $fields )
				{
					foreach( $fields as $field_name => $value )
					{
				// get_field_object( $field_name, $post_id, $options )
				// - $value has already been loaded for us, no point to load it again in the get_field_object function
						$field = get_field_object($field_name, false, array('load_value' => false));

						// $imageget = get_field("image-1");
						$paramsber = array( 'width' => 640 , 'height' => 250 , 'crop' => true );
						$image = bfi_thumb( "$value", $paramsber );

						if ($image == null ) {
							echo " ";
						}
						else{
							echo '<li><img src="'.$image.'" /></li>';
						}
					}
				}
				?>

					<?php }
				} else {
					// no posts found
				}

				// Restore original Post Data
				wp_reset_postdata();
				 ?>

				</ul>
			</div>
			<!-- berniaga slider -->
			<!-- berniaga search -->
			<?php
			$term = null;
			$btn = __('Search');
			if ( is_category() ) { $term = get_queried_object(); }
			?>
			<form class="form-product-search" role="form" method="get" id="search_form" action="<?php echo home_url(); ?>">
			<span>Cari barang dengan kata kunci</span><br>
			<div class="row">
				<div class="col-sm-10">
					<div class="form-group">
					    <input type="text" class="form-control" id="productSearch" placeholder="" value="" name="s" id="s">
					    <!-- <select class="form-control product-location">
					      <option>Semua Lokasi</option>
						  <option>Jabodetabek</option>
						  <option>Tanggerang</option>
						  <option>Bogor</option>
						  <option>Jakarta</option>
						  <option>Bekasi</option>
						</select> -->
						<?php
						if ($term) {
							$btn = sprintf( __('Search in %s'), $term->name);
							?>
							<input type="hidden" value="<?php echo $term->term_id; ?>" name="cat" />
							<input type="hidden" value="<?php echo $term->name; ?>" name="catname" />
						<?php } ?>
					</div>
				</div>
				<div class="col-sm-2">
					<button id="search_submit" type="submit" class="btn btn-default btn-red"><img src="<?php echo get_template_directory_uri(); ?>/img/magnify-red.jpg" alt=""></button>
				</div>
			</div>
			</form>
			<!-- end of berniaga search -->

			<div class="stripes"></div>
			<div class="clearfix"></div>
				<div class="breadcums">
					<?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs(); ?>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<ul class="list-unstyled">
						<?php
						if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
						<li>
							<div class="shop-list left">
								<div class="col-md-4 shop-thumb"><img src="<?php the_field("image-1") ?>" alt=""></div>
								<div class="col-md-4 shop-title">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p><?php the_field("provinsi") ?> - <?php the_time('F j, Y'); ?></p>
									<div class="category">
										<ul class="list-inline">
											<li><a href=""><?php the_field("merek") ?></a></li>
											<li><a href=""><?php if (get_field("kondisi") == 1) {echo "Baru";} else {echo "bekas";} ?></a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-4 shop-price">
									<p class="price">Harga <br> <span>Rp <strong><?php  $formatted_harga = number_format_i18n( get_field("harga") ); echo $formatted_harga; ?></strong></span> </p>
								</div>
							</div><!-- row barang dagangan -->
						</li>
						<?php } // end while
						} // end if
						?>
					</ul>
				</div>
		</div><!-- md 8 -->
		<div class="col-md-4 blog-sidebar">
			<?php include "incl/sidebar.php" ?>
		</div><!-- sidebar -->
	</div><!-- row -->
	<?php include 'incl/ourpartners.php' ?>
	</div>
</article>
<?php get_footer(); ?>
</body>
</html>