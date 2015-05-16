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
			<div class="berniaga-slider">
				<ul class="bxslider list-unstyled">
				  <li><img src="<?php echo get_template_directory_uri(); ?>/img/content/slider-sale-1.jpg" /></li>
				  <li><img src="<?php echo get_template_directory_uri(); ?>/img/content/slider-sale-2.jpg" /></li>
				</ul>
			</div>

			<!-- berniaga search -->
			<form class="form-inline form-product-search" role="form">
			<span>Cari barang dengan kata kunci</span><br>
			  <div class="form-group">
			    <input type="text" class="form-control product-search" id="productSearch" placeholder="Cth: Mobil , Bekas , Vespa">
			    <select class="form-control product-location">
			      <option>Semua Lokasi</option>
				  <option>Jabodetabek</option>
				  <option>Tanggerang</option>
				  <option>Bogor</option>
				  <option>Jakarta</option>
				  <option>Bekasi</option>
				</select>
			  </div>
			  <button type="submit" class="btn btn-default btn-red"><img src="<?php echo get_template_directory_uri(); ?>/img/magnify-red.jpg" alt=""></button>
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
									<p class="price">Harga <br> <span>Rp <?php the_field("harga") ?></span> </p>
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