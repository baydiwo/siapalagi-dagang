<?php include "incl/head.php"; ?>

<link type="text/css" href="css/bottom.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/jquery.pikachoose.min.js"></script>
<script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
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
			<div class="shop-detail left">
				<div class="breadcums">
					<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Berniaga</a></li>
					  <li class="active">Mobil</li>
					</ol>
				</div>
				<div class="stripes"></div>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<h1>Ford Excape 2013</h1>
					<ul class="list-unstyled time-location">
						<li><span class="glyphicon glyphicon-map-marker"></span>Jakarta Timur, Jakarta D.K.I</li>
						<li><span class="glyphicon glyphicon-calendar"></span>4 Jam yang lalu</li>
						<li>&#8226; Bekas</li>
						<li>Dilihat: 4171</li>
					</ul>
					<div class="clearfix"></div>
					<div class="gallery">
						<div class="pikachoose">
							<ul id="pikame" class="jcarousel-skin-pika">
								<li><a href="http://www.pikachoose.com"><img src="img/content/sale1.jpg"/></a><span>This is an example of the basic theme.</span></li>
								<li><a href="http://www.pikachoose.com"><img src="img/content/sale2.jpg"/></a><span>jCarousel is supported and can be integrated with PikaChoose!</span></li>
								<li><a href="http://www.pikachoose.com"><img src="img/content/sale1.jpg"/></a><span>Be sure to check out <a href="http://www.pikachoose.com">PikaChoose.com</a> for updates.</span></li>
								<li><a href="http://www.pikachoose.com"><img src="img/content/sale2.jpg"/></a><span>You can use any type of html you want with PikaChoose</span></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="specification left">
						<div class="loc-price">
							<hr>
							<h1>Lokasi : <b>DKI Jakarta - Jakarta Selatan</b></h1>
							<h1>Harga : <b>265.000.000</b></h1>
							<hr>
						</div>
						<ul class="list-unstyled left">
							<!-- <li>Harga: 265.000.000</li> -->
							<li>Merek: Ford</li>
							<li>Model: Everest</li>
							<li>Warna: Hitam, Metalik</li>
							<li>Kondisi: Bekas</li>
							<li>Kilometer: 50 000 - 54 999</li>
							<li>Kapasitas Mesin: 2500 cc</li>
							<li>Tahun pembuatan: 2011</li>
							<li>Tipe: SUV Premium</li>
							<li>Transmisi: Otomatis</li>
							<li class="accessory">Aksesoris: Kaca Film, CD Player, Kursi kulit, Airbag pengemudi, Airbag penumpang, TV Mobil, Rem ABS, Velg Racing, Alarm, Central Lock, Tilt Steering</li>
						</ul>
					</div>
					<br>
					<hr>
					<br>
					<div class="description left">
						<p>FORD EVEREST XLT Automatic 2WD 2011 TDCi Good Condition.<br><br>Detail mobil: <br>Tangan pertama perorangan.<br>Pajak Stnk bulan 3.<br>Eksterior-Interior Orisinil.<br>Low KM service record bengkel Ford.<br><br>Anton:<br>XL: 0817124804<br>SIMPATI: 082220378422<br>ESIA: 93888240<br>Pin bb: 282685df </p>
					</div>
					<div class="clearfix"></div>
					<hr>
					<div class="callme left">
						<p><b>Hubungi Pengiklan (Anton Stefanus)</b></p>
						<p>	<span class="glyphicon glyphicon-envelope">&nbsp;ford@gmail.com</span>
							<span class="glyphicon glyphicon-phone">&nbsp;08123456789</span>
							<span class="glyphicon"><img src="img/icon-bb.png" alt="" width="15">&nbsp;abcd1234</span>
						</p>
					</div>
					<hr>
				</div><!-- md 12 -->
			</div><!-- shop detail -->
		</div><!-- md 8 -->
		<div class="col-md-4 blog-sidebar">
			<?php include "incl/sidebar.php" ?>
		</div><!-- sidebar -->
	</div><!-- row -->
	<!-- <div class="row">
		<div class="col-md-12">
			<div class="partners">
				<h1>our partners</h1>
				<img src="img/partners.jpg" alt="">
			</div>
		</div>
	</div> -->
	</div>
</article>
<?php include "incl/footer.php"; ?>
</body>
</html>