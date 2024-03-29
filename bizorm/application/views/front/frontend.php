<!DOCTYPE html>
<html lang="en">
<head>
    <base href='<?php echo base_url('homeassets/');?>'>
    <meta charset="UTF-8">
    <meta name="description" content="Bizorm - One page apps landing page">
    <meta name="keywords" content="apps, Bootstrap, Landing page, Template, Business, One page ">
    <meta name="author" content="ThemeAtelier">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>Bizorm - One page apps landing page</title>
    <!-- ========== Favicon Ico ========== -->
    <link href=" <?php echo base_url('assest/fav.ico') ?>" rel="stylesheet">
 
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
   
    <link href=" <?php echo base_url('assest/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Fonts Awesome CSS -->
    <link href=" <?php echo base_url('assest/css/font-awesome.min.css') ?>" rel="stylesheet">
     
	<!-- Material icons css -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Stroke icon CSS -->
    <link href=" <?php echo base_url('assest/css/pe-icon-7-stroke.css') ?>" rel="stylesheet">
    <!-- IcoFont CSS -->
    <link href=" <?php echo base_url('assest/css/icofont.min.css') ?>" rel="stylesheet">
    <!-- Owl-carousel CSS -->
    <link href=" <?php echo base_url('assest/css/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href=" <?php echo base_url('assest/css/owl.theme.default.min.css') ?>" rel="stylesheet">
    <!-- Modal Video CSS -->
    <link href=" <?php echo base_url('assest/css/modal-video.min.css') ?>" rel="stylesheet">
    <!-- magnific CSS -->
    <link href=" <?php echo base_url('assest/css/magnific-popup.css') ?>" rel="stylesheet">
    <!-- Animate CSS -->
     <link href=" <?php echo base_url('assest/css/animate.min.css') ?>" rel="stylesheet">
    <!-- Margins CSS -->
    <link href=" <?php echo base_url('assest/css/margins.css') ?>" rel="stylesheet">
    <!-- Paddings CSS -->
    <link href=" <?php echo base_url('assest/css/paddings.css') ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href=" <?php echo base_url('assest/css/style.css') ?>" rel="stylesheet">
    <link href=" <?php echo base_url('assest/css/responsive.css') ?>" rel="stylesheet">
    <link href=" <?php echo base_url('assest/css/colors/blue.css') ?>" rel="stylesheet">
	<!-- teamplate colors -->
	<!-- <link href="css/colors/blue.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/orange.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/purple.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/pink.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/brown.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/light-blue.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/light-green.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/green.css" rel="stylesheet"> -->
	<!-- <link href="css/colors/dark.css" rel="stylesheet"> -->
</head>
<body data-spy="scroll" data-target="#navbarCodeply" data-offset="70">
    <!-- ========== preloader Start ========== -->
    <div class="preloader">
        <div class="status">
            <div class="loader">
                <svg class="circular" viewbox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    </div>
    <!-- ========== preloader End ========== -->
    <!-- ========== Header ========== -->
    <?php
$header = $this->Home_model->header();
$i = 0;
foreach ($header as $row) {
?>
    <nav class="navbar navbar-inverse navbar-expand-lg header-nav fixed-top header">
        <div class="container">
            <!-- Add your logo text or change logo image -->
            <a class="navbar-brand logo" href="<?php echo base_url('/');?>" >
                <!-- Bizorm -->

                
                <img class="logo-dark" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image; ?>" alt="bizorm" style="width: 70%;">
                 
            </a>
            <!-- <img src="yourlogo.png" alt="Logo"> -->
            <button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#navbarCodeply">
                <i class="icofont-navigation-menu"></i>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarCodeply">
                <ul class="nav navbar-nav ml-auto">
                    <li><a class="nav-link" href="<?php echo $row->url1?>">Home</a></li>
                    <li><a class="nav-link" href="<?php echo $row->url2?>">Features</a></li>
                    <li><a class="nav-link" href="<?php echo $row->url3?>">About</a></li>
                    <li><a class="nav-link" href="<?php echo $row->url4?>">Screenshots</a></li>
                    <li><a class="nav-link" href="<?php echo $row->url5?>">Pricing</a></li>
                    <li>
                            <a class="nav-link" href="<?php echo $row->url6?>">Blog</a>
                            <span class="sub-menu-toggle" role="navigation" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="icofont-rounded-down"></i>
                            </span>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog full width</a></li>
                                <li><a href="blog-2-col.html">Blog 2 column</a></li>
                                <li><a href="blog-3-col.html">Blog 3 column</a></li>
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="single.html">Single blog</a></li>
                                <li><a href="single-left-sidebar.html">Single left sidebar</a></li>
                                <li><a href="single-right-sidebar.html">Single right sidebar</a></li>
                            </ul>
                         </li>
                    <li><a class="nav-link" href="<?php echo $row->url7?>">Contact</a></li>
                    <li><a class="nav-link" href="<?php echo $row->url8?>">Subscribe</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php } ?>
    <!-- ========== Header End ========== -->
    <!-- ========== hero section ========== -->
    <?php
$banner = $this->Home_model->banners();
$i = 0;
foreach ($banner as $row) {
?>
    <section id="home" class="text-left hero-section bg-gredient">
        <div class="container">
            <div class="row align-items-center">
                <div class="hero-content col-lg-6 p-175px-tb lg-p-175px-t lg-p-100px-b md-p-100px-t md-p-50px-b">
                    <h2 class="wow fadeInLeft" data-wow-delay=".1s"><?php echo $row->title ?><br><span id="typed" style="white-space: pre;"></span></h2>
                    <p class="wow fadeInLeft" data-wow-delay=".2s">
                        <?php echo $row->description ?>
                    </p>
                    <a href="<?php echo $row->url; ?>" class="primary-btn wow fadeInLeft" data-wow-delay=".3s">Login</a>
                </div>
                <div class="promo-image d-none d-lg-block">
                    <img class="img-fluid" data-wow-delay=".3s" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image; ?>" alt="" />
                </div>
            </div>
        </div>
    </section>
<?php
}
?>

    <!-- ========== hero section  End ========== -->
    <!-- ========== features section  ========== -->

    <?php
$feature = $this->Home_model->features();
$i = 0;
foreach ($feature as $row) {
?>
    <section id="features" class="pt100 pb100">
        <div class="container">
			<!-- Section title start -->
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-3 offset-md-2 offset-sm-1">
                    <div class="section-title text-center mb60">
                        <h2 class="wow fadeIn" data-wow-delay=".2s"><?php echo  $row->title?></h2>
                        <hr class="lines wow zoomIn" data-wow-delay=".3s">
                        <p class="wow fadeIn" data-wow-delay=".1s"><?php echo  $row->description?>
                        </p>
                    </div>
                </div>
            </div>
			<!-- Section title end -->
            <div class="row align-items-center">
                <div class="col-lg-4 text-center text-lg-right">
                    <div class="media flex-column wow fadeInLeft" data-wow-delay=".1s">
                        <div class="media-icon ml-auto">
                        <i class="<?php echo $row->icon1 ?> "></i>
                             
                        </div>
                        <div class="media-body m-20px-t">
                            <h5><?php echo  $row->sub_title1?></h5>
                            <p><?php echo  $row->sub_description1?></p>
                        </div>
                    </div>
					<!-- Single left feature end -->
                    <div class="media flex-column wow fadeInLeft" data-wow-delay=".2s">
                        <div class="media-icon ml-auto">
                            <i class="<?php echo $row->icon2 ?> "></i>
                        </div>
                        <div class="media-body m-20px-t">
                            <h5><?php echo  $row->sub_title2?></h5>
                            <p><?php echo  $row->sub_description2?></p>
                        </div>
                    </div>
					<!-- Single left feature end -->
                    <div class="media flex-column wow fadeInLeft" data-wow-delay=".3s">
                    <div class="media-icon ml-auto">
                            <i class="<?php echo $row->icon3 ?> "></i>
                        </div>
                        <div class="media-body m-20px-t">
                            <h5><?php echo  $row->sub_title3?></h5>
                            <p><?php echo  $row->sub_description3?></p>
                        </div>
                    </div>
					<!-- Single left feature end -->
                </div>
                <div class="col-lg-4 text-center">
                    <img class="img-fluid wow zoomIn" data-wow-delay=".3s" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image; ?>" alt="" />
                </div>
                <div class="col-lg-4 text-center text-lg-left">
                    <div class="media flex-column wow fadeInRight" data-wow-delay=".1s">
                        <div class="media-icon mr-auto">
                        <i class="<?php echo $row->icon4 ?> "></i>
                        </div>
                        <div class="media-body m-20px-t">
                        <h5><?php echo  $row->sub_title4?></h5>
                        <p><?php echo  $row->sub_description4?></p>
                        </div>
                    </div>
					<!-- Single right feature end -->
                    <div class="media flex-column wow fadeInRight" data-wow-delay=".2s">
                    <div class="media-icon mr-auto">
                        <i class="<?php echo $row->icon5 ?> "></i>
                        </div>
                        <div class="media-body m-20px-t">
                        <h5><?php echo  $row->sub_title5?></h5>
                        <p><?php echo  $row->sub_description5?></p>
                        </div>
                    </div>
					<!-- Single right feature end -->
                    <div class="media flex-column wow fadeInRight" data-wow-delay=".3s">
                    <div class="media-icon mr-auto">
                        <i class="<?php echo $row->icon6 ?> "></i>
                        </div>
                        <div class="media-body m-20px-t">
                        <h5><?php echo  $row->sub_title6?></h5>
                        <p><?php echo  $row->sub_description6?></p>
                        </div>
                    </div>
					<!-- Single right feature end -->
                </div>
            </div>
        </div>
    </section>

    <?php
}
?>
    <!-- ========== features section End ========== -->

    <!-- ========== about section  ========== -->


    <?php
$about = $this->Home_model->abouts();
$i = 0;
foreach ($about as $row) {
?>
    <section id="about" class="pt100 pb100 bg-gray">
        <div class="container">
			<!-- Section title start -->
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-3 offset-md-2 offset-sm-1">
                    <div class="section-title text-center mb60">
                        <h2 class="wow fadeIn" data-wow-delay=".2s"><?php echo $row->title?></h2>
                        <hr class="lines wow zoomIn" data-wow-delay=".3s">
                        <p class="wow fadeIn" data-wow-delay=".1s"><?php echo $row->description?></p>
                    </div>
                </div>
            </div>
			<!-- Section title end -->
            <div class="row about-boxes">
                <div class="col-lg-4 col-md-6">
                    <div class="media flex-column wow fadeIn" data-wow-delay=".1s">
                        <div class="media-icon m-auto">
                            <i class="<?php echo $row->icon1?>"></i>
                        </div>
                        <div class="media-body m-20px-t">
                            <h5><?php echo $row->sub_title1?></h5>
                            <p><?php echo $row->sub_description1?></p>
                        </div>
                    </div>
                </div>
				<!-- Single about box end -->
                <div class="col-lg-4 col-md-6">
                    <div class="media flex-column wow fadeIn" data-wow-delay=".3s">
                    <div class="media-icon m-auto">
                            <i class="<?php echo $row->icon2?>"></i>
                        </div>
                        <div class="media-body m-20px-t">
                            <h5><?php echo $row->sub_title2?></h5>
                            <p><?php echo $row->sub_description2?></p>
                        </div>
                    </div>
                </div>
				<!-- Single about box end -->
                <div class="col-lg-4 col-md-6">
                    <div class="media flex-column wow fadeIn" data-wow-delay=".3s">
                    <div class="media-icon m-auto">
                            <i class="<?php echo $row->icon3?>"></i>
                        </div>
                        <div class="media-body m-20px-t">
                            <h5><?php echo $row->sub_title3?></h5>
                            <p><?php echo $row->sub_description3?></p>
                        </div>
                    </div>
                </div>
				<!-- Single about box end -->
                <div class="col-lg-4 col-md-6">
                    <div class="media flex-column wow fadeIn" data-wow-delay=".4s">
                    <div class="media-icon m-auto">
                            <i class="<?php echo $row->icon4?>"></i>
                        </div>
                        <div class="media-body m-20px-t">
                            <h5><?php echo $row->sub_title4?></h5>
                            <p><?php echo $row->sub_description4?></p>
                        </div>
                    </div>
                </div>
				<!-- Single about box end -->
                <div class="col-lg-4 col-md-6">
                    <div class="media flex-column wow fadeIn" data-wow-delay=".5s">
                    <div class="media-icon m-auto">
                            <i class="<?php echo $row->icon5?>"></i>
                        </div>
                        <div class="media-body m-20px-t">
                            <h5><?php echo $row->sub_title5?></h5>
                            <p><?php echo $row->sub_description5?></p>
                        </div>
                    </div>
                </div>
				<!-- Single about box end -->
                <div class="col-lg-4 col-md-6">
                    <div class="media flex-column wow fadeIn" data-wow-delay=".6s">
                    <div class="media-icon m-auto">
                            <i class="<?php echo $row->icon6?>"></i>
                        </div>
                        <div class="media-body m-20px-t">
                            <h5><?php echo $row->sub_title6?></h5>
                            <p><?php echo $row->sub_description6?></p>
                        </div>
                    </div>
                </div>
				<!-- Single about box end -->
            </div>
        </div>
    </section>

    <!-- ========== about section End ========== -->
	
    <!-- ========== about intro section  ========== -->

    <section id="about-intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pt50">
                <img class="img-fluid" data-wow-delay=".3s" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image1; ?>" alt="" />
                </div>
                <div class="col-lg-6 pt50 pb50">
                    <h2 class="wow fadeInLeft mb30" data-wow-delay=".1s"><?php echo $row->title1?></h2>
                    <p class="wow fadeInLeft mb30" data-wow-delay=".2s">
                    <?php echo $row->description1?>
                    </p>

                    <a href="<?php echo $row->url2?>" class="primary-btn wow zoomIn" data-wow-delay=".3s">Read more</a>
                </div>
                <!-- Special feature contenet end -->
            </div> 
        </div>
    </section>
    <!-- ========== about section End ========== -->
	
    <!-- ========== How works section Start ========== -->
	<section id="how_works" class="pt100 pb100 bg-gray">
		<div class="container">
			<!-- Section title start -->
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-3 offset-md-2 offset-sm-1">
                    <div class="section-title text-center mb60">
                        <h2 class="wow fadeIn" data-wow-delay=".2s"><?php echo $row->sub_title7?></h2>
                        <hr class="lines wow zoomIn" data-wow-delay=".3s">
                        <p class="wow fadeIn" data-wow-delay=".1s"><?php echo $row->sub_description7?></p>
                    </div>
                </div>
            </div>
			<!-- Section title end -->
			
			<div class="row">
                <div class="how-works-item text-center col-md-3 wow fadeIn" data-wow-delay=".2s">
                    <div class="icon-outer">
                        <i class="<?php echo $row->icon7?>"></i> <!-- icon -->
                    </div>
                    <h4 class="title m-t-30"><?php echo $row->sub_title7?></h4> <!-- text -->
                </div>
                <!-- End single how it item-->
                <div class="how-works-item text-center col-md-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="icon-outer">
                        <i class="<?php echo $row->icon8?>"></i> <!-- icon -->
                    </div>
                    <h4 class="title m-t-30"><?php echo $row->sub_title8?></h4> <!-- text -->
                </div>
                <!-- End single how it item-->
                <div class="how-works-item text-center col-md-3 wow fadeIn" data-wow-delay=".4s">
                    <div class="icon-outer">
                        <i class="<?php echo $row->icon9?>"></i> <!-- icon -->
                    </div>
                    <h4 class="title m-t-30"><?php echo $row->sub_title9?></h4> <!-- text -->
                </div>
                <!-- End single how it item-->
                <div class="how-works-item text-center col-md-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="icon-outer">
                        <i class="<?php echo $row->icon10?>"></i> <!-- icon -->
                    </div>
                    <h4 class="title m-t-30"><?php echo $row->sub_title10?></h4> <!-- text -->
                </div>
                <!-- End single how it item-->
            </div>
		</div>
	</section>
 
	<!-- ========== How works section End ========== -->
	
    <!-- ========== special features ========== -->
    <section id="special-features" class="pt100 pb100 bg-parallax" style="<?php echo base_url() . '/./Uploads/banners/' . $row->image3; ?>">
        <div class="gredient-overlay opacity-8"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 hero-content color-white text-center">
                    <h1 class="wow fadeInLeft" data-wow-delay=".1s"><?php echo $row->sub_title12?></h1>
                    <p class="wow fadeInLeft" data-wow-delay=".2s">
                    <?php echo $row->sub_description8?>
                    </p>
                    <a href="<?php echo $row->url2?>" class="primary-btn wow zoomIn" data-wow-delay=".3s">Learn more</a>
                    
					<img class="img-fluid mt30 wow zoomIn" data-wow-delay=".3s" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image3; ?>" alt="" />
                </div>
				<!-- Special feature contenet end -->
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- ========== special features End ========== -->
    <!-- ========== screenshots section  ========== -->


    <?php
$screenshort = $this->Home_model->screenshorts();
$i = 0;
foreach ($screenshort as $row) {
?>
    <section id="screenshots" class="pt100 pb100">
        <div class="container">
			<!-- Section title start -->
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-3 offset-md-2 offset-sm-1">
                    <div class="section-title text-center mb60">
                        <h2 class="wow fadeIn" data-wow-delay=".2s"><?php echo $row->title?></h2>
                        <hr class="lines wow zoomIn" data-wow-delay=".3s">
                        <p class="wow fadeIn" data-wow-delay=".1s"><?php echo $row->description?></h2></p>
                    </div>
                </div>
            </div>
			<!-- Section title end -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="screenshots owl-carousel owl-theme zoom-gallery">
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-1.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image1; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-2.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image2; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-3.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image3; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-4.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image4; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-5.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image5; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-6.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image6; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-7.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image7; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-8.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image8; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- ========== screenshots section End ========== -->
    <!-- ========== special features ========== -->
    <section id="video-promo" class="pt100 pb100 bg-parallax" style="background-image:url(img/hero-bg.jpg)">
        <div class="gredient-overlay opacity-8"></div>
        <div class="container">
            <div class="row">
                <div class="video-promo-content color-white col-sm-12 text-center">
                    <h2 class="wow zoomIn" data-wow-delay=".2s"><?php echo $row->title1?></h2>
                    <button class="js-modal-btn video-popup" data-video-id="8Pf8heedkVQ"><i class="fa fa-play"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== special features End ========== -->
    <!-- ========== screenshots section v2 ========== -->
    <section id="screenshots" class="pt100 pb100 bg-gray">
        <div class="container">
			<!-- Section title start -->
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-3 offset-md-2 offset-sm-1">
                    <div class="section-title text-center mb60">
                        <h2 class="wow fadeIn" data-wow-delay=".2s"><?php echo $row->title?></h2>
                        <hr class="lines wow zoomIn" data-wow-delay=".3s">
                        <p class="wow fadeIn" data-wow-delay=".1s"><?php echo $row->description?></p>
                    </div>
                </div>
            </div>
			<!-- Section title end -->
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="screenshots-mobile owl-carousel owl-theme zoom-gallery">
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-1.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image9; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-2.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image10; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-3.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image11; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-4.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image12; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-5.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image13; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-6.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image14; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-7.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image15; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                        <div class="shot-item">
                            <a class="overlay" href="img/screenshots/screenshot-8.jpg" title="Front page">
                                <img class="img-fluid" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image16; ?>" alt="Screenshot">
                                <i class="pe-7s-camera item-icon"></i>
                            </a>
                        </div>
                        <!-- End single shot -->
                    </div>
                </div>
				<!-- Start FAQ -->
				<div class="col-lg-8 col-md-6">
                    <h3 class="mb30"><?php echo $row->title3?></h3>
                    <div id="accordion">
                        <div class="card">
                          <div class="card-header primary-bg" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?php echo $row->sub_title?>
                              </button>
                            </h5>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              <?php echo $row->sub_description?>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header primary-bg" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <?php echo $row->sub_title1?>
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                            <?php echo $row->sub_description1?>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header primary-bg" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <?php echo $row->sub_title2?>
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                            <?php echo $row->sub_description2?>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                            <div class="card-header primary-bg" id="headingFour">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <?php echo $row->sub_title2?>
                                </button>
                              </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                              <div class="card-body">
                              <?php echo $row->sub_description3?>
                              </div>
                            </div>
                          </div>
                      </div>
				   <!-- end of #accordion -->
				</div>
				<!-- end of FAQ -->
            </div>
        </div>
    </section>
    <!-- ========== screenshots section v2 End ========== -->
    <!-- ========== pricing section  ========== -->


        <?php
$pricing = $this->Home_model->pricing();
$i = 0;
foreach ($pricing as $row) {
?>
    <section id="pricing" class="pt100 pb100">
        <div class="container">
			<!-- Section title start -->
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-3 offset-md-2 offset-sm-1">
                    <div class="section-title text-center mb60">
                        <h2 class="wow fadeIn" data-wow-delay=".2s"><?php echo $row->title?></h2>
                        <hr class="lines wow zoomIn" data-wow-delay=".3s">
                        <p class="wow fadeIn" data-wow-delay=".1s"><?php echo $row->description?></p>
                    </div>
                </div>
            </div>
			<!-- Section title end -->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-package text-center wow fadeInLeft" data-wow-delay=".1s">
                    <img class="img-fluid text-center wow zoomIn" data-wow-delay=".2s" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image6; ?>" alt="" />
                    </div>
                    <div class="download-btn text-center">
                            <a href="<?php echo $row->url1?>" class="primary-btn">Download</a>
                        </div>
                    <div class="clearfix"></div>
                </div>
				<!-- End single pricing -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-package featured-package text-center wow zoomIn" data-wow-delay=".2s">
                    <img class="img-fluid text-center wow zoomIn" data-wow-delay=".2s" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image7; ?>" alt="" />
                    </div>
                    <div class="download-btn text-center">
                        <a href="<?php echo $row->url2?>" class="primary-btn">Download</a>
                        </div>
                </div>
				<!-- End single pricing -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-package text-center wow fadeInRight" data-wow-delay=".1s">
                    <img class="img-fluid text-center wow zoomIn" data-wow-delay=".2s" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image8; ?>" alt="" />
                    </div>
                    <div class="download-btn text-center">
                        <a href="<?php echo $row->url3?>" class="primary-btn">Download</a>
                        </div>
                </div>
				<!-- End single pricing -->
            </div>
        </div>
    </section>

    <!-- ========== pricing section End ========== -->
    <!-- ========== download apps section  ========== -->
    <section id="download-apps" class="pt100 pb100 bg-gray">
        <div class="container">
            <div class="row">
				<div class="text-center download-apps-content">
					<img class="img-fluid text-center wow zoomIn" data-wow-delay=".2s" src="<?php echo base_url() . '/./Uploads/banners/' . $row->image1; ?>" alt="" />
				    <div class="col-sm-8 offset-sm-2">
                        <div class="section-title text-center mb60 mt60">
                            <h2 class="wow fadeIn" data-wow-delay=".2s"><?php echo $row->title4?></h2>
                            <hr class="lines wow zoomIn" data-wow-delay=".3s">
                            <p class="wow fadeIn" data-wow-delay=".1s"><?php echo $row->description4?></p>
                        </div>
                        <a href="#" class="primary-btn wow zoomIn" data-wow-duration="3s" style="visibility: visible; animation-duration: 3s; animation-name: zoomIn;"><i class="<?php echo $row->icon1?>" aria-hidden="true"></i> <?php echo $row->get_now1?><br><span><?php echo $row->app_store?></span></a>
                        <a href="#" class="primary-btn wow zoomIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: zoomIn;"><i class="<?php echo $row->icon2?>" aria-hidden="true"></i> <?php echo $row->get_now2?><br><span><?php echo $row->play_store?></span></a>
                        <a href="#" class="primary-btn wow zoomIn" data-wow-duration="5s" style="visibility: visible; animation-duration: 5s; animation-name: zoomIn;"><i class="<?php echo $row->icon3?>" aria-hidden="true"></i> <?php echo $row->get_now3?> <br> <span><?php echo $row->microsoft_store1?></span></a>
					</div>
				</div>
            </div>
        </div>
    </section>
    <!-- ========== download apps section End ========== -->
    <!-- ========== Facts features ========== -->
    <section id="facts-section" class="pt100 pb100 bg-parallax" style="background-image:url(img/counter-bg.jpg)">
		<div class="gredient-overlay opacity-8"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <!--counter box-->
                    <div class="single-counter text-center fadeInDown  wow animated" data-wow-delay=".1s">
                        <i class="<?php echo $row->icon4?>"></i>
                        <div class="counter-number"><span class="counter"><?php echo $row->percent1?></div>
                        <h4><?php echo $row->product1?></h4>
                    </div>
                    <!--counter box end-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!--counter box-->
                    <div class="single-counter text-center fadeInDown  wow animated" data-wow-delay=".2s">
                    <i class="<?php echo $row->icon5?>"></i>
                        <div class="counter-number"><span class="counter"><?php echo $row->percent2?></div>
                        <h4><?php echo $row->product2?></h4>
                    </div>
                    <!--counter box end-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!--counter box-->
                    <div class="single-counter text-center fadeInDown  wow animated" data-wow-delay=".4s">
                    <i class="<?php echo $row->icon6?>"></i>
                        <div class="counter-number"><span class="counter"><?php echo $row->percent3?>
						</div>
            <h4><?php echo $row->product3?></h4>
                    </div>
                    <!--counter box end-->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!--counter box-->
                    <div class="single-counter text-center fadeInDown  wow animated" data-wow-delay=".6s">
                    <i class="<?php echo $row->icon7?>"></i>
                        <div class="counter-number"><span class="counter"><?php echo $row->percent4?>
						</div>
            <h4><?php echo $row->product4?></h4>
                    </div>
                    <!--counter box end-->
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Facts End ========== -->
    <!-- ========== Testimonial section  ========== -->
    <section id="testimonial" class="pt100 pb100 bg-gray">
        <div class="container">
			<!-- Section title start -->
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-3 offset-md-2 offset-sm-1">
                    <div class="section-title text-center mb60">
                        <h2 class="wow fadeIn" data-wow-delay=".2s"><?php echo $row->title5?></h2>
                        <hr class="lines wow zoomIn" data-wow-delay=".3s">
                        <p class="wow fadeIn" data-wow-delay=".1s"><?php echo $row->description5?></p>
                    </div>
                </div>
            </div>
			<!-- Section title end -->
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <div class="testimonials owl-carousel owl-theme">
                        <div class="testimonial-item">
                            <blockquote><?php echo $row->testimonialdescription1?>
                            </blockquote>
                            <div class="client-avater">
                                <img src="<?php echo base_url('assest/img/testimonial/avater-1.jpg')?>" alt="" />
                            </div>
                            <h6><?php echo $row->name1?></h6>
                            <p class="company-info"><?php echo $row->profession1?>, <a href="#"><?php echo $row->company1?></a>
                            </p>
                        </div>
                        <!-- End single testimonial -->
                        <div class="testimonial-item">
                            <blockquote><?php echo $row->testimonialdescription2?>
                            </blockquote>
                            <div class="client-avater">
                                <img src="<?php echo base_url('assest/img/testimonial/avater-2.jpg') ?>" alt="" />
                            </div>
                            <h6><?php echo $row->name2?></h6>
                            <p class="company-info"><?php echo $row->profession1?>, <a href="#"><?php echo $row->company2?></a>
                            </p>
                        </div>
                        <!-- End single testimonial -->
                        <div class="testimonial-item">
                            <blockquote> <?php echo $row->testimonialdescription3?>
                            </blockquote>
                            <div class="client-avater">
                                <img src="<?php echo base_url('assest/img/testimonial/avater-3.jpg') ?>" alt="" />
                            </div>
                            <h6><?php echo $row->name3?></h6>
                            <p class="company-info"><?php echo $row->profession1?>, <a href="#"><?php echo $row->company3?></a>
                            </p>
                        </div>
                        <!-- End single testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- ========== Testimonial section End ========== -->
    <!-- ========== blog section  ========== -->
<!--

    
    <section id="blog" class="pt100 pb100">
        <div class="container">
	 Section title start 
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-3 offset-md-2 offset-sm-1">
                    <div class="section-title text-center mb60">
                        <h2 class="wow fadeIn" data-wow-delay=".2s">Latest <span>Blogs</span></h2>
                        <hr class="lines wow zoomIn" data-wow-delay=".3s">
                        <p class="wow fadeIn" data-wow-delay=".1s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                    </div>
                </div>
            </div>
		 Section title end  
            <div class="row">
                <div class="col-sm-12">
                    <div class="latest-blog owl-carousel owl-theme">
                        <div class="blog-post">
                            <aside class="blog-thumb" style="background-image:url(img/blog/blog-thumb-1.jpg);">
                                <div class="thumb-overlay">
                                    <div class="blog-meta">
                                        Posted: 010-13-2022
                                        <br> Posted In: <a href="#">Creative</a>, <a href="#">Design</a>, <a href="#">Apps</a>
                                        <br> Posted By: <a href="#">Bizorm Blogger</a>
                                        <br>
                                        <a href="#">10 Comments</a>
                                    </div>
                                </div>
                            </aside>
                            <div class="post-content">
                                <h2 class="post-title"><a href="single.html">Modern Apps With Amazing Features</a></h2>
                                <p>Lorem Ipsum is simply dummy tex of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                <a class="read-more" href="single.html">Read more...</a>
                            </div>
                        </div>
						  End single blog  
                        <div class="blog-post">
                            <aside class="blog-thumb" style="background-image:url(img/blog/blog-thumb-2.jpg);">
                                <div class="thumb-overlay">
                                    <div class="blog-meta">
                                        Posted: 010-13-2022
                                        <br> Posted In: <a href="#">Creative</a>, <a href="#">Design</a>, <a href="#">Apps</a>
                                        <br> Posted By: <a href="#">Bizorm Blogger</a>
                                        <br>
                                        <a href="#">10 Comments</a>
                                    </div>
                                </div>
                            </aside>
                            <div class="post-content">
                                <h2 class="post-title"><a href="single.html">Modern Apps With Amazing Features</a></h2>
                                <p>Lorem Ipsum is simply dummy tex of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                <a class="read-more" href="single.html">Read more...</a>
                            </div>
                        </div>
						  End single blog  
                        <div class="blog-post">
                            <aside class="blog-thumb" style="background-image:url(img/blog/blog-thumb-3.jpg);">
                                <div class="thumb-overlay">
                                    <div class="blog-meta">
                                        Posted: 010-13-2022
                                        <br> Posted In: <a href="#">Creative</a>, <a href="#">Design</a>, <a href="#">Apps</a>
                                        <br> Posted By: <a href="#">Bizorm Blogger</a>
                                        <br>
                                        <a href="#">10 Comments</a>
                                    </div>
                                </div>
                            </aside>
                            <div class="post-content">
                                <h2 class="post-title"><a href="single.html">Modern Apps With Amazing Features</a></h2>
                                <p>Lorem Ipsum is simply dummy tex of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                <a class="read-more" href="single.html">Read more...</a>
                            </div>
                        </div>
						 End single blog  
                        <div class="blog-post">
                            <aside class="blog-thumb" style="background-image:url(img/blog/blog-4-thumb.jpg);">
                                <div class="thumb-overlay">
                                    <div class="blog-meta">
                                        Posted: 010-13-2022
                                        <br> Posted In: <a href="#">Creative</a>, <a href="#">Design</a>, <a href="#">Apps</a>
                                        <br> Posted By: <a href="#">Bizorm Blogger</a>
                                        <br>
                                        <a href="#">10 Comments</a>
                                    </div>
                                </div>
                            </aside>
                            <div class="post-content">
                                <h2 class="post-title"><a href="single.html">Modern Apps With Amazing Features</a></h2>
                                <p>Lorem Ipsum is simply dummy tex of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                <a class="read-more" href="single.html">Read more...</a>
                            </div>
                        </div>
					  End single blog 
                        <div class="blog-post">
                            <aside class="blog-thumb" style="background-image:url(img/blog/blog-5-thumb.jpg);">
                                <div class="thumb-overlay">
                                    <div class="blog-meta">
                                        Posted: 010-13-2022
                                        <br> Posted In: <a href="#">Creative</a>, <a href="#">Design</a>, <a href="#">Apps</a>
                                        <br> Posted By: <a href="#">Bizorm Blogger</a>
                                        <br>
                                        <a href="#">10 Comments</a>
                                    </div>
                                </div>
                            </aside>
                            <div class="post-content">
                                <h2 class="post-title"><a href="single.html">Modern Apps With Amazing Features</a></h2>
                                <p>Lorem Ipsum is simply dummy tex of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                <a class="read-more" href="single.html">Read more...</a>
                            </div>
                        </div>
						  End single blog  
                        <div class="blog-post">
                            <aside class="blog-thumb" style="background-image:url(img/blog/blog-6-thumb.jpg);">
                                <div class="thumb-overlay">
                                    <div class="blog-meta">
                                        Posted: 010-13-2022
                                        <br> Posted In: <a href="#">Creative</a>, <a href="#">Design</a>, <a href="#">Apps</a>
                                        <br> Posted By: <a href="#">Bizorm Blogger</a>
                                        <br>
                                        <a href="#">10 Comments</a>
                                    </div>
                                </div>
                            </aside>
                            <div class="post-content">
                                <h2 class="post-title"><a href="single.html">Modern Apps With Amazing Features</a></h2>
                                <p>Lorem Ipsum is simply dummy tex of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                <a class="read-more" href="single.html">Read more...</a>
                            </div>
                        </div>
						  End single blog  
                        <div class="blog-post">
                            <aside class="blog-thumb" style="background-image:url(img/blog/blog-thumb-7.jpg);">
                                <div class="thumb-overlay">
                                    <div class="blog-meta">
                                        Posted: 010-13-2022
                                        <br> Posted In: <a href="#">Creative</a>, <a href="#">Design</a>, <a href="#">Apps</a>
                                        <br> Posted By: <a href="#">Bizorm Blogger</a>
                                        <br>
                                        <a href="#">10 Comments</a>
                                    </div>
                                </div>
                            </aside>
                            <div class="post-content">
                                <h2 class="post-title"><a href="single.html">Modern Apps With Amazing Features</a></h2>
                                <p>Lorem Ipsum is simply dummy tex of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                <a class="read-more" href="single.html">Read more...</a>
                            </div>
                        </div>
				  End single blog  
                    </div>
					<div class="text-center mt30">
						<a href="blog.html" class="primary-btn wow zoomIn" data-wow-delay=".3s">All posts</a>
					</div>
                </div>
            </div>
        </div>
    </section>
     ========== blog section End ==========  
      ========== contact features ========== -->
    <section id="contact" class="pt100 pb100 bg-parallax" style="background-image:url(img/contact-bg.jpg)">
        <div class="gredient-overlay opacity-8"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="contact-block text-center">
						<!-- Contact form title start -->
                        <div class="col-sm-12">
                            <h3 class="wow fadeIn" data-wow-delay=".1s">Need to talk anything about?</h3>
                            <p class="subtitle wow fadeIn" data-wow-delay=".2s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                        </div>
						<!-- Contact form title end -->
                        <!-- Contact form start -->
						<form action="<?php echo base_url();?>admin_controller/insert_inquery" method="post">
							<div class="message col-lg-12">
								<p class="email-loading"><img src="<?php echo base_url('assest/img/loading.gif') ?>" alt="">&nbsp;&nbsp;&nbsp;Sending...</p>
								<p class="email-success"><i class="icon fa fa-check"></i> Your quote has successfully been sent.</p>
								<p class="email-failed"><i class="icon fa fa-times"></i> Something went wrong!</p>
							</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="name" class="contact-name form-control input-box" id="contact-name" type="text" placeholder="Your Name" required="" />
                                </div>
                                <div class="col-md-6">
                                    <input name="email" class="contact-email form-control input-box" id="contact-email" type="email" placeholder="Your Email" required="" />
                                </div>
                                <div class="col-sm-12">
                                    <input name="subject" class="contact-subject form-control input-box" id="contact-subject" type="text" placeholder="Subject" required="" />
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="message" class="contact-message form-control textarea-box" id="contact-message" placeholder="Your Message" required=""></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button class="primary-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Now</button>
                                </div>
                            </div>          
						</form>
                        <!-- Contact form end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== contact features End ========== -->
    <!-- ========== subscribe features ========== -->
    <section id="subscription" class="pt100 pb100">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center subscribe-area">
                    <h3 class="wow fadeIn" data-wow-duration="1s">Subscribe now!</h3>
                    <p class="wow fadeIn" data-wow-duration="2s">
                        Subscribe to get all latest news from us.
                    </p>
					<!-- Local subscription form -->
					<form action="subscribe/subscribe.php" class="subscription-form form-inline wow fadeInRight d-flex justify-content-center" data-wow-duration="1.5s" id="subscribe">

						<input type="email" name="email"  placeholder="Your Email" class="form-control input-box" id="subscriber-email">
						<button type="submit" class="primary-btn" id="subscribe-button">Subscribe</button>
						
						<div class="result">
							<p class="success-msg"><i class="icon fa fa-check"></i> You email has been stored!</p>
							<p class="error-msg"><i class="icon fa fa-times"></i> Sorry! Something went wrong!</p>
						</div>
					</form>
					<!-- Mailchimp subscription form
					<form action="#" id="subscribe-mailchimp" class="subscription-form form-inline wow fadeInRight" data-wow-duration="1.5s">
							<input type="email" name="email"  placeholder="Your Email" class="form-control input-box">
							<button type="submit" class="primary-btn">Subscribe</button>
							<div class="result">
								<p class="success-msg"><i class="icon fa fa-check"></i> You email has been stored!</p>
								<p class="error-msg"><i class="icon fa fa-times"></i> Sorry! Something went wrong!</p>
							</div>
					</form>
					-->
                </div>
            </div>
			<!-- Download section start -->
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center download-area">
                    <h3 class="wow fadeIn" data-wow-duration="1s">Where to download?</h3>
                    <p class="wow fadeIn" data-wow-duration="2s">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's typesetting industry standard dummy text ever since the typesetting.
                    </p>
                    <a href="#" class="primary-btn wow zoomIn" data-wow-duration="3s"><i class="fa fa-apple" aria-hidden="true"></i> Get now</a>
                    <a href="#" class="primary-btn wow zoomIn" data-wow-duration="4s"><i class="fa fa-android" aria-hidden="true"></i> Get now</a>
                    <a href="#" class="primary-btn wow zoomIn" data-wow-duration="5s"><i class="fa fa-windows" aria-hidden="true"></i> Get now</a>
                </div>
            </div>
			<!-- Download section end -->
        </div>
    </section>
    <?php
$footer = $this->Home_model->footer();
$i = 0;
foreach ($footer as $row) {
?>
    <!-- ========== subscribe features End ========== -->
    <footer id="footer-section" class="pt50 pb50 bg-black">
        <div class="container">
            <div class="row text-center">
				<!-- Social icons start -->
                <div class="col social-icons">
                    <ul>
                        <li class="facebook wow zoomIn" data-wow-duration="1s"><a href="<?php echo base_url('/');?>"><i class="<?php echo $row->icon1?>"></i></a>
                        </li>
                        <li class="twitter wow zoomIn" data-wow-duration="1.5s"><a href="<?php echo base_url('/');?>"><i class="<?php echo $row->icon2?>"></i></a>
                        </li>
                        <!--<li class="google-plus wow zoomIn" data-wow-duration="2s"><a href="#"><i class="fa fa-google-plus"></i></a>-->
                        <!--</li>-->
                        <!--<li class="youtube wow zoomIn" data-wow-duration="2.5s"><a href="#"><i class="fa fa-youtube"></i></a>-->
                        <!--</li>-->
                        <li class="linked-in wow zoomIn" data-wow-duration="3s"><a href="<?php echo base_url('/');?>"><i class="<?php echo $row->icon3?>"></i></a>
                        </li>
                        <!--<li class="instagram wow zoomIn" data-wow-duration="3.5s"><a href="#"><i class="fa fa-instagram"></i></a>-->
                        <!--</li>-->
                        <!--<li class="pinterest wow zoomIn" data-wow-duration="4s"><a href="#"><i class="fa fa-pinterest"></i></a>-->
                        <!--</li>-->
                        <!--<li class="dribbble wow zoomIn" data-wow-duration="4.5s"><a href="#"><i class="fa fa-dribbble"></i></a>-->
                        <!--</li>-->
                        <!--<li class="behance wow zoomIn" data-wow-duration="5s"><a href="#"><i class="fa fa-behance"></i></a>-->
                        <!--</li>-->
                    </ul>
                </div>
				<!-- Social icons end -->
                <div class="col-sm-12">
                    <script>document.write(new Date().getFullYear());</script> <a href="<?php echo $row->url1?>"><?php echo $row->title?></a>. <?php echo $row->description?>
                </div>
            </div>
        </div>
    </footer>
    <?php } ?>
	<!-- Scroll to up -->
	<div class="scroll-to-up hidden-xs">
		<div class="scrollup">
			<i class="fa fa-angle-up"></i>
		</div>
	</div>
	<!-- Scroll to up end -->
    <!-- jquery -->
    <script src="<?php echo base_url('assest/js/jquery.min.js') ?>"></script>
 
    <!-- Bootstrap js -->
    <script src="<?php echo base_url('assest/js/bootstrap.min.js') ?>"></script>
    <!-- jquery.scrollTo.min.js -->
    <script src="<?php echo base_url('assest/js/jquery.scrollTo.min.js') ?>"></script>
    <!-- jquery.nav.js -->
    <script src="<?php echo base_url('assest/js/jquery.nav.js') ?>"></script>
	<!-- Stellar js -->
  <script src="<?php echo base_url('assest/js/jquery.stellar.min.js') ?>"></script>
    <!-- Typed js -->
    <script src="<?php echo base_url('assest/js/typed.js') ?>"></script>
    <!-- Owl carousel js -->
    <script src="<?php echo base_url('assest/js/owl.carousel.min.js') ?>"></script>
    <!-- Modal Video js -->
    <script src="<?php echo base_url('assest/js/modal-video.min.js') ?>"></script>
    <!-- magnific popuop js -->
    <script type="text/javascript" src="<?php echo base_url('assest/js/jquery.magnific-popup.min.js') ?>"></script>
	<!-- waypoints js -->
  <script type="text/javascript" src="<?php echo base_url('assest/js/waypoints.min.js') ?>"></script>
    <!-- Counterup js -->
    <script type="text/javascript" src="<?php echo base_url('assest/js/jquery.counterup.min.js') ?>"></script>
    <!-- jquery.ajaxchimp.min.js -->
    <script type="text/javascript" src="<?php echo base_url('assest/js/jquery.ajaxchimp.min.js') ?>"></script>
    <!-- WOW JS -->
    <script type="text/javascript" src="<?php echo base_url('assest/js/wow.min.js') ?>"></script>
	<!-- Masonry js -->
  <script type="text/javascript" src="<?php echo base_url('assest/js/masonry.pkgd.min.js') ?>"></script>
	<!-- Countdown js -->
  <script type="text/javascript" src="<?php echo base_url('assest/js/jquery.countdown.min.js') ?>"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="<?php echo base_url('assest/js/app.js') ?>"></script>
</body>
</html>