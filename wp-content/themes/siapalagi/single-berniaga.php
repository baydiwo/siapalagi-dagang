<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage EIGHTED
 *
 */
 get_header(); ?>

<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bottom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.pikachoose.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.touchwipe.min.js"></script>
<script language="javascript">
	$(document).ready(
		function (){
			$("#pikame").PikaChoose({
				carousel:false,
				autoPlay: false,
				showCaption: false,
				text: {previous: "", next: ""},
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
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="shop-detail left">
				<div class="breadcums">
					<?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs(); ?>
				</div>
				<div class="stripes"></div>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
					<ul class="list-unstyled time-location">
						<li><span class="glyphicon glyphicon-map-marker"></span><?php the_field("provinsi") ?></li>
						<li><span class="glyphicon glyphicon-calendar"></span><?php the_time('F j, Y'); ?></li>
						<li>&#8226; <?php if (get_field("kondisi") == 1) {echo "Baru";} else {echo "bekas";} ?></li>
						<!-- <li>Dilihat: 4171</li> -->
					</ul>
					<div class="clearfix"></div>
					<div class="gallery">
						<div class="pikachoose">
							<ul id="pikame" class="jcarousel-skin-pika">
								<?php
								if(get_field('image-1'))
								{
									echo '
									<li><a href="http://www.pikachoose.com"><img src="'.get_field("image-1").'"/></a></li>
									';
								}
								if(get_field('image-2'))
								{
									echo '
									<li><a href="http://www.pikachoose.com"><img src="'.get_field("image-2").'"/></a></li>
									';
								}
								if(get_field('image-3'))
								{
									echo '
									<li><a href="http://www.pikachoose.com"><img src="'.get_field("image-3").'"/></a></li>
									';
								}
								if(get_field('image-4'))
								{
									echo '
									<li><a href="http://www.pikachoose.com"><img src="'.get_field("image-4").'"/></a></li>
									';
								}
								if(get_field('image-5'))
								{
									echo '
									<li><a href="http://www.pikachoose.com"><img src="'.get_field("image-5").'"/></a></li>
									';
								}
								?>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="specification left">
						<div class="loc-price">
							<hr>
							<h1>Lokasi : <b><?php the_field("provinsi"); ?></b></h1>
							<h1>Harga : <b>Rp <?php the_field("harga"); ?></b></h1>
							<hr>
						</div>
						<ul class="list-unstyled left">
							<!-- <li>Harga: 265.000.000</li> -->
							<li>Merek: <?php the_field("merek"); ?></li>
							<li>Model: <?php the_field("model") ?></li>
							<li>Warna: <?php the_field("warna") ?></li>
							<li>Kondisi: <?php if (get_field("kondisi") == 1) {echo "Baru";} else {echo "bekas";} ?></li>
							<!-- <li>Kilometer: 50 000 - 54 999</li>
							<li>Kapasitas Mesin: 2500 cc</li>
							<li>Tahun pembuatan: 2011</li>
							<li>Tipe: SUV Premium</li>
							<li>Transmisi: Otomatis</li>
							<li class="accessory">Aksesoris: Kaca Film, CD Player, Kursi kulit, Airbag pengemudi, Airbag penumpang, TV Mobil, Rem ABS, Velg Racing, Alarm, Central Lock, Tilt Steering</li> -->
						</ul>
					</div>
					<br>
					<hr>
					<br>
					<div class="description left">
						<p><?php the_field("deskripsi_lainnya") ?></p>
					</div>
					<div class="clearfix"></div>
					<hr>
					<div class="callme left">
						<p><b>Hubungi Pengiklan (<?php the_field("nama") ?>)</b></p>
						<p>	<span class="glyphicon glyphicon-envelope">&nbsp;<?php the_field("email") ?></span>
							<span class="glyphicon glyphicon-phone">&nbsp;<?php the_field("no_hp") ?></span>
							<span class="glyphicon"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-bb.png" alt="" width="15">&nbsp;<?php the_field("pin_bb") ?></span>
						</p>
					</div>
					<hr>
				</div><!-- md 12 -->
			</div><!-- shop detail -->
			<?php endwhile; // end of the loop. ?>
		</div><!-- md 8 -->
		<div class="col-md-4 blog-sidebar">
			<?php include "incl/sidebar.php" ?>
		</div><!-- sidebar -->
	</div><!-- row -->
	</div>
</article>
<?php include "incl/footer.php"; ?>
</body>
</html>