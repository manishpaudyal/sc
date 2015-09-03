<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/bootstrap/bootstrap.css'); ?>" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/login.css'); ?>" media="screen">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
<link href="assets/favicon.ico" rel="shortcut icon">
<link href="assets/apple-touch-icon.png" rel="apple-touch-icon"> -->
<title><?php echo config_item('site_name');?></title>
</head>
<body>
               

<div class="all-wrapper no-menu-wrapper">
  <div class="login-logo-w">
    <a href="#" class="logo">
      <i class="fa fa-university"></i>
      <span><?php echo config_item('site_name');?></span>
    </a>
  </div>
  <div class="row">
     <?php $this->load->view($subview); ?>
  </div>
</div>



<script src="<?php echo site_url('assets/js/libs/jquery/1.10.2/jquery.min.js');?>"></script>
<script src="<?php echo site_url('assets/js/jqueryui/1.10.3/jquery-ui.min.js');?>"></script>
<!-- <script src='865b8229b0ce41d6b0c8e0fc7416f9f2.js'></script> -->

</body>



</html>