<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web Penyewaan Lapangan Futsal</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="<?= base_url().'assets/user/images/favicon.ico'?>"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="<?= base_url().'assets/user/css/slick.css'?>" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="<?= base_url().'assets/user/css/magnific-popup.css'?>" rel="stylesheet">
    <!-- Skills Circle CSS  -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">
    
    <!-- Main Style -->
    <link href="<?= base_url().'assets/user/css/style.css'?>" rel="stylesheet">

    <!-- mycss -->
    <link href="<?= base_url().'assets/user/css/mycss.css'?>" rel="stylesheet">

    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
	<!-- Google Fonts Open sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
	<!-- tabel -->
	 <link href="<?= base_url().'assets/user/vendor/datatables/dataTables.bootstrap4.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/user/vendor/datatable/datatables.css' ?>">
    <script type="text/javascript" src="<?= base_url().'assets/user/vendor/datatable/jquery.datatables.js'; ?>"></script>
  <script type="text/javascript" src="<?= base_url().'assets/user/vendor/datatable/datatables.js'; ?>"></script>
 
	</head>
  <body>

   <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->
  	
  	<!-- Start Header -->
	<header id="mu-hero">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light mu-navbar">
				<!-- Text based logo -->
				<a class="navbar-brand mu-logo" href="<?= site_url().'user'?>"><span>Selafut</span></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="fa fa-bars"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto mu-navbar-nav">
			      <li class="nav-item ">
			        <a href="<?= site_url().'user'?>">Beranda</a>
			      </li>
			      <li class="nav-item"><a href="<?= site_url().'user/penyewaan'?>">Penyewaan</a></li>
			      <li class="nav-item dropdown">
				        <a class="dropdown-toggle" href="blog.html" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lapangan</a>
				       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="<?= site_url().'user/lapangan_sintetis'?>">Lapangan Sintetis</a>
				          <a class="dropdown-item" href="<?= site_url().'user/lapangan_matras'?>">Lapangan Matras</a>
				        </div>
                  </li>
			      <li class="nav-item"><a href="<?= site_url().'user/cara_penyewaan'?>">Cara Penyewaan</a></li>
			      <li class="nav-item dropdown">
                      <a class="dropdown-toggle" href="blog.html" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $usersesion['nama']; ?></a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?= site_url().'user/profile'?>">Profile</a>
				          <a class="dropdown-item" href="<?= site_url().'autentifikasi/logout'?>">Logout</a>
				        </div>
                   </li>
                   <li class="nav-item">
                   <img class="img-profile rounded-circle" src="<?= base_url('assets/admin/img/profile/') . $usersesion['image']; ?>" width="30px">
                   </li>
			    </ul>
			  </div>
			</nav>
		</div>
	</header>
	<!-- End Header -->