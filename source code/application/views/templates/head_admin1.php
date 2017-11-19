<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smart Home E-electronic</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()."assets/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url()."assets/"; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()."assets/"; ?>css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand">Cooking Ware ar home </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
           <?php if ($this->session->userdata("username")!=null) {
            # code..
          
         ?>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()."index.php/member/index"; ?>">member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()."index.php/barang"; ?>">barang</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()."index.php/beli_list"; ?>">pembelian</a>
            </li>
            </li>
          </ul>

         
         <ul class="nav navbar-top-link navbar-right">
           <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href=""><?php echo $this->session->userdata("username"); ?>
               <i class="fa fa-user fa-fw"></i>
             </a>
             <ul class="dropdown-menu dropdown-user">
               <li><a href="<?php echo site_url('index.php/login_admin/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> log out</a>
               </li>
             </ul>
           </li>
         </ul>
         <?php } ?>
        </div>
       
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url()."assets/"; ?>img/home-bg3.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Cooking ware at home</h1>
              <span class="subheading">Pemesanan electronic alat masak pada rumah</span>
            </div>
          </div>
        </div>
      </div>
    </header>