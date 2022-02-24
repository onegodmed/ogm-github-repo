<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
		<title>Online Notes</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.fancybox.min.css')?>">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css')?>">
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.min.css')?>">
        <!-- Magnific Popup -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">
		
		<!-- Learedu Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
		
		<!-- Learedu Color -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/color1.css')?>">
		
    </head>
    <body>
	
		<!-- Book Preloader -->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--/ End Book Preloader -->
	
		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Contact -->
							<ul class="content">
								<li><i class="fa fa-phone"></i>123-456-789</li>
								<li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope-o"></i>contact@yourdomain.com</a></li>
								<li><i class="fa fa-clock-o"></i>Opening: 10:00am - 5:00pm</li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-4 col-12">
							<!-- Social -->
							<ul class="social">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus "></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<?php if(!empty($this->session->userdata('user_id'))) { ?> 
									<li><a href="#" data-toggle="modal" data-target="#myModal"><?php echo $this->session->userdata('first_name'); ?></a></li>
									<li><a href="<?php echo base_url('signup/logout');?>" >Logout</a></li>
								
								<?php }else{ ?>
									<li><a id="login_model" href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
								 <?php } ?>
								
							</ul>
							<!-- End Social -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<div class="logo">
								<a href="index.html"><!-- <img src="images/logo.png" alt="#"> -->ONLINE NOTES</a>
							</div>
							<div class="mobile-menu"></div>
						</div>
						<div class="col-lg-9 col-md-9 col-12">
							<!-- Header Widget -->
							<div class="header-widget">
								<div class="single-widget">
									<i class="fa fa-phone"></i>
									<h4>Call Now<span>+91 0000000000</span></h4>
								</div>
								<div class="single-widget">
									<i class="fa fa-envelope-o"></i>
									<h4>Send Message<a href="mailto:mailus@mail.com"><span>info@onlinenotes.com</span></a></h4>
								</div>
								<div class="single-widget">
									<i class="fa fa-map-marker"></i>
									<h4>Our Location<span>Indore, MP</span></h4>
								</div>
							</div>
							<!--/ End Header Widget -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
			<!-- Header Menu -->
			<div class="header-menu">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav class="navbar navbar-default">
								<div class="navbar-collapse">
									<!-- Main Menu -->
									<ul id="nav" class="nav menu navbar-nav">
										<li class="active"><a href="#">Home</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">Courses</a> </li>
										<li><a href="#">Contact</a></li>
									</ul>
									<!-- End Main Menu -->
									<!-- button -->
									<?php if(empty($this->session->userdata('user_id'))) { ?>
									<div class="button">
										<a href="<?php echo base_url('signup');?>" class="btn"><i class="fa fa-pencil"></i>Apply Now</a>
									</div>
								<?php } ?>
									<!--/ End Button -->
								</div> 
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Menu -->
		</header>
		<!-- End Header -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<?php  if ($this->session->flashdata('success')) { ?>
		<script type="text/javascript">
		    Swal.fire({
		  title: "<i>Success</i>", 
		  html: "<?php echo($this->session->flashdata('success'));?>",  
		  confirmButtonText: "Ok", 
		});
		</script>
	<?php }

	if ($this->session->flashdata('error')) { ?>
		<script type="text/javascript">
		    Swal.fire({
		  title: "<i>Error</i>", 
		  html: "<?php echo($this->session->flashdata('error'));?>",  
		  confirmButtonText: "Ok", 
		});
		</script>
	<?php } 
	
	?>


	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
     <form method="post" action="<?php echo base_url('signup/login');?>">
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
       
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd" name="password">
		  </div>
		  
		
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    </form>

  </div>
</div>
		