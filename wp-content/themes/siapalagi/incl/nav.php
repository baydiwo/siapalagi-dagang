<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href=" <?php echo home_url(); ?> "><span class="glyphicon glyphicon-home"></span>&nbsp;Beranda</a></li>
        <li><a href="<?php echo site_url(); ?>/category/siapa/">Siapa</a></li>
        <li class="dropdown">
          <a href="<?php echo site_url(); ?>/category/pelesir/" class="dropdown-toggle" data-toggle="dropdown">Pelesir <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url(); ?>/category/pelesir/kuliner/">Kuliner</a></li>
            <li><a href="<?php echo site_url(); ?>/category/pelesir/wisata/">Wisata</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="<?php echo site_url(); ?>/category/pelesir/" class="dropdown-toggle" data-toggle="dropdown">Ragam <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url(); ?>/category/ragam/buku/">Buku</a></li>
            <li><a href="<?php echo site_url(); ?>/category/ragam/film/">Film</a></li>
            <li><a href="<?php echo site_url(); ?>/category/ragam/hobi/">Hobi</a></li>
            <li><a href="<?php echo site_url(); ?>/category/ragam/iptek/">Iptek</a></li>
            <li><a href="<?php echo site_url(); ?>/category/ragam/kesehatan/">Kesehatan</a></li>
            <li><a href="<?php echo site_url(); ?>/category/ragam/musik/">Musik</a></li>
            <li><a href="<?php echo site_url(); ?>/category/ragam/sport/">Sport</a></li>
            <li><a href="<?php echo site_url(); ?>/category/ragam/umum/">Umum</a></li>
          </ul>
        </li>
        <li><a href="<?php echo site_url(); ?>/category/sosial/">Sosial</a></li>
        <li><a href="<?php echo site_url(); ?>/category/event/">Event</a></li>
        <li><a href="<?php echo site_url(); ?>/category/berniaga/">Berniaga</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>