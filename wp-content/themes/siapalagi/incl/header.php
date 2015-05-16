<?php //include "analyticstracking.php"; ?>
<header>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="SIAPALAGI.COM"></a>
			</div>
		</div>
		<div class="col-md-4 col-md-offset-4">
			<ul class="list-inline list-header">
				<li><?php echo date("l, d F Y") ?></li>
				<!-- <li><a href="">login</a></li>
				<li><a href="">register</a></li> -->
			</ul>

			  <?php get_search_form(); ?>

		</div>
	</div><!-- row container -->
</div><!-- container -->
<!-- <nav class="navbar navbar-default" role="navigation"> -->
<?php include "nav.php" ?>
<div class="stripes"></div>

</header>