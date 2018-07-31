<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;  ?></title>
    <link rel="icon" href="<?php echo base_url(); ?>ksb.png" type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/costum.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/responsiveslides.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/fancybox/jquery.fancybox.css'); ?>">

	<!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrapValidator.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/responsiveslides.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/highcharts/highcharts.js'); ?>"></script>
	<script src="<?php echo base_url('assets/fancybox/jquery.fancybox.pack.js'); ?>"></script>


  </head>
  <body style="margin: 0">
  <div class="header">
  </div>
<nav class="navbar navbar-default">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav menu">
    <li class="<?php echo $subtitle=='Beranda'?'active':''; ?>"><a href="<?php echo site_url('beranda') ?>">Beranda <span class="sr-only">(current)</span></a></li>

    <li class="<?php echo $subtitle=='Perjanjian Kerja'?'active':''; ?>"><a href="<?php echo site_url('beranda/pk') ?>">Perjanjian Kerja<span class="sr-only">(current)</span></a></li>

    <li class="<?php echo $subtitle=='SK'?'active':''; ?>"><a href="<?php echo site_url('beranda/sk') ?>">SK<span class="sr-only">(current)</span></a></li>

    <li class="<?php echo $subtitle=='TOR'?'active':''; ?>"><a href="<?php echo site_url('br_tor') ?>">TOR<span class="sr-only">(current)</span></a></li>

    <li class="<?php echo $subtitle=='DPA'?'active':''; ?>"><a href="<?php echo site_url('br_dpa') ?>">DPA<span class="sr-only">(current)</span></a></li>

    <li class="<?php echo $subtitle=='SOP'?'active':''; ?>"><a href="<?php echo site_url('br_sop') ?>">SOP<span class="sr-only">(current)</span></a></li>

    <li class="<?php echo $subtitle=='KAS'?'active':''; ?>"><a href="<?php echo site_url('br_kas') ?>">KAS<span class="sr-only">(current)</span></a></li>
 
    <li class="<?php echo $subtitle=='Profil Dearah'?'active':''; ?>"><a href="<?php echo site_url('beranda/profil_daerah') ?>">Profil Daerah<span class="sr-only">(current)</span></a></li>

    </ul>
  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container main">
  <div class="col-md-8">

<?php

  echo $content;

?>
<script>
$(function () {



});

</script>
</div>
<div class="col-md-4">
  <div class="panel panel-default" style="height: 490px;">
    <div class="panel-heading">
    <h3 class="panel-title">Menu</h3>
    </div>
	<div class="container-fluid" style="margin-top: 12px">
	
      <div class="panel panel-default">
    <ul class="list-group">
      <a href="<?php echo site_url('beranda/pk'); ?>" class="list-group-item">Perjanjian Kerja</a>
      <a href="<?php echo site_url('br_sk'); ?>" class="list-group-item">SK</a>   
      <a href="<?php echo site_url('br_tor'); ?>" class="list-group-item">TOR</a>
      <a href="<?php echo site_url('br_dpa'); ?>" class="list-group-item">DPA</a>   
      <a href="<?php echo site_url('br_sop'); ?>" class="list-group-item">SOP</a>   
      <a href="<?php echo site_url('br_kas'); ?>" class="list-group-item">KAS</a>
      <a href="<?php echo site_url('beranda/profil_daerah'); ?>" class="list-group-item">Profil Daerah</a>
      <a href="<?php echo site_url('login'); ?>" class="list-group-item">Login</a>         
    </ul>       
  </div>
	</div>
  <div id="container"></div>
  </div>
  
</div>
  </div>
  
  <div class="container-fluid footer">
    &copy; BAPEDA Kab. Sumbawa Besar
  </div>
  
  <script>
  // You can also use "$(window).load(function() {"
  $(function () {
      $("#slider1").responsiveSlides({
        maxwidth: 800,
        speed: 3000
      });
  });
  </script>
  </body>
</html>
