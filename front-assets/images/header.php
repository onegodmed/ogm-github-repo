<?php 
$country = $this->admin->get('countries');
?>
<!DOCTYPE html>

<html lang="en"><!--<![endif]-->

<head>

<title>ONEGODMED</title>

<meta charset="utf-8">

<meta content="width=device-width, initial-scale=1.0" name="viewport">
 <meta name="description" content="<?php if(isset($meta_description)){echo $meta_description;}else{echo "Astrology";}?>">
  <meta name="keywords" content="<?php if(isset($meta_keywords)){echo $meta_keywords;}else{echo "Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac";}?>">
    <meta name="author" content="<?php if(isset($meta_tags)){echo $meta_tags;}else{echo "hsoft";}?>">



<!--Srart Style -->

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front-assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front-assets/css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front-assets/css/font-awesome.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front-assets/css/fonts.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front-assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front-assets/css/owl.theme.default.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front-assets/css/magnific-popup.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>front-assets/css/style.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">

<!-- Favicon Link -->

<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>front-assets/images/header/favicon.png">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">
 
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d7ccf3dab6f1000123c8c98&product=inline-share-buttons' async='async'></script>

  <!--  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>-->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async  
src="https://www.googletagmanager.com/gtag/js?id=UA-145167158-1"></script>
<script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'UA-145167158-1');
</script>


</head>

<body>

	<?php if($this->session->flashdata('email')){?>

	<script type="text/javascript">

		alert('Email is already register')

	</script>

	<?php }?>

 <?php



            

        $this->db->select('*');

        $this->db->from('super_categories');

        $query = $this->db->get();

        $super_cat = $query->result();



        $this->db->select('*');

        $query = $this->db->get('categories');

        $categories = $query->result();

        

                

    



?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Header Start -->

<div class="ast_top_header">

	<div class="container-fluid">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div class="ast_contact_details">

					<ul>

						<li>CONSULT NOW <i class="fa fa-phone" aria-hidden="true"></i> +91 9169-305-305</li>

						<!--<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> support@website.com</a></li>-->

					</ul>

				</div>

				<div class="ast_autho_wrapper">

					<ul>

						

						<li><a href="#" id="application"><i class="fa fa-mobile" aria-hidden="true"></i> Download App</a><span id="app_open">Under Development!</span></li>



						<li><a href="<?php echo base_url();?>become-a-partner"><i class="fa fa-user" aria-hidden="true"></i> Become a Partner</a></li>

						

						<li><a href="<?php echo base_url();?>front/faq"><i class="fa fa-question" aria-hidden="true"></i> FAQ</a></li>

						<?php if($this->session->userdata('id')){?>

						<!--<li><a class="" href="<?php echo base_url('front/logout')?>"><i class="fa fa-sign-in" aria-hidden="true"></i> logout</a></li>-->

						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php if($this->session->userdata('user_type') == 'User'){ echo base_url('user/booking');}elseif($this->session->userdata('user_type') == 'Astrologer'){echo base_url('admin/my_booking');}else{echo base_url('user');}?>"><i class="fa fa-sign-in" aria-hidden="true"></i><?php echo ucfirst(strtolower(ucfirst($this->session->userdata('name'))))?></a>
						<ul class="dropdown-menu">
    <li><a href="<?php if($this->session->userdata('user_type') == 'User'){ echo base_url('user/booking');}elseif($this->session->userdata('user_type') == 'Astrologer'){echo base_url('admin/my_booking');}else{echo base_url('user');}?>">My Account</a></li>
    <li><a class="" href="<?php echo base_url('front/logout')?>"> logout</a></li>
  </ul>
						</li>
						
					

						<li><a class="" href="<?php echo  base_url('front/wallet')?>"><i class="fa fa-google-wallet" aria-hidden="true"></i> Godmed Wallet</a></li>

						<?php }else{?>

						<li><a class="popup-with-zoom-anim"  href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In/Signup</a></li>
						<li><a class="popup-with-zoom-anim"  href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Godmed Wallet</a></li>
						
						

						<!--<li><a class="popup-with-zoom-anim" href="#signup-dialog"><i class="fa fa-user-plus" aria-hidden="true"></i> Create Account</a></li>-->

						<?php }?>

						

						<li class="ast_search">

							<a href="javascript:;"><i class="fa fa-search"></i></a>

							<div class="ast_search_field">

								<form method="post" action="<?php echo base_url('front/search_result')?>"> 

									<input type="text" placeholder="Search Here" name="search">

									<button type="submit"><i class="fa fa-search"></i></button>

								</form>

							</div>

						</li>

						<!-- <li class="ast_cart">

							<a href="javascript:;"><i class="fa fa-shopping-cart"></i></a>

							<div class="ast_cart_box">

								<div class="ast_cart_list">

									<ul>

										<li>

											<div class="ast_cart_img">

												<img src="<?php echo base_url();?>front-assets/images/content/Products/thumb1.jpg" class="img-responsive">

											</div>

											<div class="ast_cart_info">

												<a href="#">Yellow Sapphire</a>

												<p>1 X $20.00</p>

												<a href="javascript:;" class="ast_cart_remove"><i class="fa fa-trash"></i></a>

											</div>

										</li>

										<li>

											<div class="ast_cart_img">

												<img src="<?php echo base_url();?>front-assets/images/content/Products/thumb1.jpg" class="img-responsive">

											</div>

											<div class="ast_cart_info">

												<a href="#">yantra</a>

												<p>1 X $10.00</p>

												<a href="javascript:;" class="ast_cart_remove"><i class="fa fa-trash"></i></a>

											</div>

										</li>

									</ul>

								</div>

								<div class="ast_cart_total">

									<p>total<span>$30.00</span></p>

								</div>

								<div class="ast_cart_btn">

									<button type="button">view cart</button>

									<button type="button">checkout</button>

								</div>

							</div>

						</li> -->

					</ul><!---->

					<div id="login-dialog" class="zoom-anim-dialog mfp-hide">

						<p class="top_logo"><i class="fa fa-user" aria-hidden="true"></i></p>
						

						<form method="POST" action="<?php echo base_url('login/front_login_code')?>">
							<h1>Login</h1>
							<p class="email"><i class="fa fa-phone" aria-hidden="true"></i><input type="text" placeholder="Mobile Number" id="mobile" name="mobile" required="" onChange="login_otp(this.value)"></p>
							
                            <p id="loginotp_msg" style="color:red"></p>
                            <p style="display: none" id="loginresend_otp" onClick="otp($('#mobile').val())"></p>
                           
							<input type="text" placeholder="Enter OTP" id="otp1" name="con_password" required="">

						

							<button type="submit" class="ast_btn">Login</button>

							

						</form>
						<p style="margin-top:130px;">New to Onegodmed?  <a class="popup-with-zoom-anim" href="#signup-dialog">SignUp</a></p>

					</div>

					<div id="otp" class="zoom-anim-dialog mfp-hide">
						<p class="top_logo"><img src="https://tchol.org/images/home-icon-white-png-5.png" width="80"></p>					

						<form method="post" action="<?php echo base_url('front/reset_password')?>">
							<h1>Forgot password</h1>

							<p class="email"><i class="fa fa-phone" aria-hidden="true"></i><input type="text" placeholder="Enter you Mobile No." name="mobile"></p>					

							<button type="submit" class="ast_btn">Submit</button>						

						</form>

					</div>

					<div id="signup-dialog" class="zoom-anim-dialog mfp-hide">
						<p class="top_logo"><i class="fa fa-user" aria-hidden="true"></i></p>
						
						<form method="POST" onSubmit="return check_otp()" action="<?php echo base_url('front/singup')?>">
							<h1>signup</h1>
							<!--<p class="email"><i class="fa fa-user" aria-hidden="true"></i><input type="text" placeholder="Full Name" name="name" required=""></p>-->
							
							<!-- <p class="email"><i class="fa fa-user" aria-hidden="true"></i><input type="text" placeholder="Surname" name="surname" required=""></p> -->
							
							<!--<p class="email"><i class="fa fa-envelope-o" aria-hidden="true"></i><input type="text" placeholder="Email" name="email" required=""></p>-->
							
							<!--<p class="email"><i class="fa fa-lock" aria-hidden="true"></i><input type="password" placeholder="Password" name="password" id="password" required=""></p>-->
							
							<!-- <p id='cpass_msg' style="color:red";></p>-->
							<!--<p class="email"><i class="fa fa-lock" aria-hidden="true"></i><input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" required=""></p>-->

							<!--<select name="country" onchange="myfunction(this.value)">
                             <?php /*foreach ($country as $row) {
                              ?>
								<option value="<?php echo $row->id;?>"><?php echo $row->name?></option>
								<?php }*/?>
							</select>
							<select name="state" id="state" onChange="myfunction2(this.value)" required="">
				                  <option>Select State</option>
							</select>
							<select name="city" id="city">
							       <option>Select City</option>
							</select>-->
							<!-- <input type="password" placeholder="Confirm Password" name="con_password" required=""> -->
							<p class="email"><i class="fa fa-phone" aria-hidden="true"></i><input type="text" placeholder="Mobile Number" id="mobile" name="mobile" required="" onChange="otp(this.value)"></p>
							
                            <p id="otp_msg" style="color:red"></p>
                            <p style="display: none" id="resend_otp" onClick="otp($('#mobile').val())"></p>
                           
							<input type="text" placeholder="Enter OTP" id="otp1" name="con_password" required="">
							<!-- <input type="text" placeholder="Language"  > -->
							<!--<select name="gender">-->
							<!--	<option value="male">Male</option>-->
							<!--	<option value="female">Female</option>-->
							<!--</select>-->
							<input type="hidden" name="user_type" value="User">
							<button type="submit" class="ast_btn">submit</button>
							
						</form>
						<p>Have An Account ? <a class="popup-with-zoom-anim" href="#login-dialog">Login</a></p>
					</div>

					

<?php if($this->session->flashdata('success')){?>

<script type="text/javascript">

    $(document).ready(function () {

    $("#consolPopup").fancybox({

        'overlayShow': true

    }).trigger('click');

});

</script>

<div id="consolPopup">

    	<h1>Success</h1>
        <p><?php echo $this->session->flashdata('success')?></p>

</div>


<?php }?>					
<?php if($this->session->flashdata('error')){?>

<script type="text/javascript">

    $(document).ready(function () {

    $("#consolPopup").fancybox({

        'overlayShow': true

    }).trigger('click');

});

</script>

<div id="consolPopup">

    	<h1>Oops</h1>
    	<p><?php echo $this->session->flashdata('error')?></p>

</div>


<?php }?>					




				</div>

			</div>

		</div>

	</div>

</div>

<div class="ast_header_bottom">

	<div class="container-fluid">

		<div class="row">

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

				<div class="ast_logo">

					<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>front-assets/images/header/logo.png" alt="Logo" title="Logo"></a>

					<button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>

				</div>

			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

				<div class="ast_main_menu_wrapper">

					<div class="ast_menu con">

				<button type="type" value="save" class="consult_now">Consult Now</button>
</div>
				</div>

			</div>

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

				<div class="ast_main_menu_wrapper">

					<div class="ast_menu">

						<ul>

							<li><a href="<?php echo base_url(); ?>">home</a></li>

							<li><a href="<?php echo base_url();?>front/solutions">Vedic Astrology</a>

								<ul class="submenu">

									<?php foreach ($super_cat as $row) {

										   if($row->menu_id== '3'){
										   	$cat_name =  str_replace(' ', '-', $row->super_category);

									 ?>
                                       
									<li><a href="<?php echo base_url('front/service/'.$cat_name

									);?>"><?php echo $row->super_category?></a>

                                         <ul class="submenu">

											<?php foreach ($categories as $row1){

                                               if($row1->super_cat_id == $row->id) {  

											?>

											

											<li><a href="#"><?php echo $row1->category?></a></li>

											<?php }} ?>

										</ul>

									</li>

									<?php }}?>


								</ul>
	

							</li>
                            
                            <!--<li><a href="<?php echo base_url();?>front/coming_soon">Vedic OPD</a></li>-->
							

							<!--<li><a href="<?php echo base_url();?>front/life_issues">Vedic OPD</a>-->

							<!--	<ul class="submenu">-->

									<?php /* foreach ($super_cat as $row) {

										   if($row->menu_id== '1'){
                                           	$cat_name =  str_replace(' ', '-', $row->super_category);
									 ?>

									<li><a href="<?php echo base_url('front/service/'.$cat_name

									);?>"><?php echo $row->super_category?></a>



                                     <ul class="submenu">

											<?php foreach ($categories as $row1){

                                               if($row1->super_cat_id == $row->id) {  

											?>

											

											<li><a href="<?php echo base_url() ?>"><?php echo $row1->category?></a></li>

											<?php }} ?>

										</ul>

									</li>

									<?}} */?>
									

							<!--	</ul>-->

							<!--</li>-->
							
							<!--<li><a href="<?php echo base_url();?>front/coming_soon">Vedic Sutra Courses</a></li>-->

							<!--<li><a href="<?php echo base_url();?>front/courses">Vedic Sutra Courses</a>-->

							<!--	<ul class="submenu">-->

									<?php /*foreach ($super_cat as $row) {

										   if($row->menu_id== '2'){
                                             $cat_name =  str_replace(' ', '-', $row->super_category);
									 ?>

									<li><a href="<?php echo base_url('front/service/'.$cat_name

									);?>"><?php echo $row->super_category?></a>

                                      <ul class="submenu">

											<?php foreach ($categories as $row1){

                                               if($row1->super_cat_id == $row->id) {  
                                                   $sub_cat =  str_replace(' ', '-', $row1->category);
											?>

											

											<li><a href="<?php echo base_url('front/get_kundali/'.$sub_cat)?>"><?php echo $row1->category?></a></li>

											<?php }} ?>

										</ul>



									</li>

									<?php }} */?>

									

							<!--	</ul>-->

							<!--</li>-->

							<!--<li><a href="<?php echo base_url();?>front/coming_soon"> Live Predictions</a></li>-->

							<!--<li><a href="<?php echo base_url();?>front/pooja"> Live Predictions</a>-->

							<!--	<ul class="submenu">-->

									<?php /* foreach ($super_cat as $row) {

										   if($row->menu_id== '4' AND $row->id == 81){
                                               
									 ?>

									<li><a href="#"><?php echo $row->super_category?></a>

										<ul class="submenu">

											<?php foreach ($categories as $row1){

                                               if($row1->super_cat_id == $row->id) {  
                                               $sub_cat =  str_replace(' ', '-', $row1->category);
											?>

											

											<li><a href="<?php echo base_url('front/get_kundali/'.$sub_cat)?>"><?php echo $row1->category?></a></li>

											<?php }} ?>

										</ul>

									</li>

									<?php }}?>
                                    <li><a href="#">Pooja At Home</a>

										<ul class="submenu">

											<?php foreach ($super_cat as $row) {

										   if($row->menu_id== '4' AND $row->id != 81){
                                          $cat_name =  str_replace(' ', '-', $row->super_category);
									 ?>

											

											<li><a href="<?php echo base_url('front/service/'.$cat_name

									);?>"><?php echo $row->super_category?></a></li>

											<?php }} */?>

							<!--			</ul>-->

							<!--		</li>-->
									

							<!--	</ul>-->

							<!--</li>-->
							
							<!--<li><a href="<?php echo base_url();?>front/coming_soon">Vedic Journal</a></li>-->

							<li><a href="<?php echo base_url();?>front/kundali">Personalized Horoscope</a>

								<ul class="submenu">

									<?php foreach ($super_cat as $row) {

										   if($row->menu_id== '5' AND $row->id == 83 ){

									 ?>

									
											<?php foreach ($categories as $row1){

                                               if($row1->super_cat_id == $row->id AND $row->id == 83) {  
                                                   $sub_cat =  str_replace(' ', '-', $row1->category);
											?>

											

											<li><a href="<?php echo base_url('front/get_kundali/'.$sub_cat)?>"><?php echo $row1->category?></a></li>
                                            </li>
											<?php }} ?>
                                         <?php }}?>
										</ul>

									

									

																

							<li><a href="<?php echo base_url();?>front/articles">Vedic Library</a>

								

							</li>

						</ul>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>



 <?php if($this->session->flashdata('success')){?>

<script type="text/javascript">

    $(document).ready(function () {

    $("#consolPopup").fancybox({

        'overlayShow': true

    }).trigger('click');

});

</script>

<?php }?>                   

<div id="consolPopup">

        <h1>Success</h1>



        <p><?php echo $this->session->flashdata('success')?></p>

</div>



<!-- Header End --> 

<script type="text/javascript">
    function myfunction(country_id){
         $.ajax({
            url: "<?php echo base_url('front/ajax_get_state')?>",
            type: 'POST',
              dataType: "json",
            data: {'country_id':country_id},
            success: function(response) {
              if(response.status == 1){
                var i =0;
                $("#state").empty();
                    $("#state").append("<option value=''>Select</option>");
                 $.each(response.state, function(key, value) {
                $("#state").append("<option value='"+response.state[i].id+"'>"+response.state[i].name+"</option>")
             i++;
      })
              }else{
                     $("#state").empty();
              }
            }            
        });
   }

   function myfunction2(state_id){
         $.ajax({
            url: "<?php echo base_url('front/ajax_get_city')?>",
            type: 'POST',
              dataType: "json",
            data: {'state_id':state_id},
            success: function(response) {
              if(response.status == 1){
                var i =0;
                $("#city").empty();
                    $("#city").append("<option value=''>Select</option>");
                 $.each(response.city, function(key, value) {
                $("#city").append("<option value='"+response.city[i].id+"'>"+response.city[i].name+"</option>")
             i++;
      })
              }else{
                     $("#state").empty();
              }
            }            
        });
   }

   function otp(mobile){
   	document.getElementById("otp_msg").innerHTML = "We have sent an OTP to your Mobile no.";
   	document.getElementById("resend_otp").style.display = "table";
   	
   		document.getElementById("resend_otp").innerHTML = "Resend Otp ";
         $.ajax({
            url: "<?php echo base_url('front/ajax_otp')?>",
            type: 'POST',
              dataType: "json",
            data: {'mobile':mobile},
            success: function(response) {
              if(response.status == 1){
                  sessionStorage.setItem('otp',response.otp);
              }
            }            
        });
    }
    
    function login_otp(mobile){
   	document.getElementById("loginotp_msg").innerHTML = "We have sent an OTP to your Mobile no.";
   	document.getElementById("loginresend_otp").style.display = "table";
   	
   		document.getElementById("loginresend_otp").innerHTML = "Resend Otp ";
         $.ajax({
            url: "<?php echo base_url('front/ajaxlogin_otp')?>",
            type: 'POST',
              dataType: "json",
            data: {'mobile':mobile},
            success: function(response) {
              if(response.status == 1){
                  sessionStorage.setItem('otp',response.otp);
              }
            }            
        });
    }

    function check_otp(){
            if($('#password').val() == $('#cpassword').val()){
   	      if($('#otp1').val() == sessionStorage.getItem('otp')){
   	      	       return true;
   	      }else{
   	      	document.getElementById("otp_msg").innerHTML = "Incorrect OTP";
   	      	return false;
   	      }
   	  }else{
   	  	document.getElementById("cpass_msg").innerHTML = "Password And Confirm Password Does Not Match";
   	  	return false;
   	  }
    }
</script>

<!--mobile navigation-->

<script src="https://rawgit.com/FragCoder/bootstrap-left-slide-menu/master/bootstrap-left-slide-menu.js"></script>

<div id="wrapper" class="">
    <div class="overlay" style="display: none;"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li>
                <a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i> Home</a>
            </li>
            <li>
                <a href="<?php echo base_url();?>front/solutions"><i class="glyphicon glyphicon-credit-card"></i> Vedic Astrology</a>
            </li>
            <!--<li>-->
            <!--    <a href="<?php echo base_url();?>front/life_issues"><i class="glyphicon glyphicon-ok-circle"></i> Vedic OPD</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--    <a href="<?php echo base_url();?>front/courses"><i class="glyphicon glyphicon-cloud"></i> Vedic Sutra Courses</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--    <a href="<?php echo base_url();?>front/pooja"><i class="glyphicon glyphicon-th"></i>  Live Predictions</a>-->
            <!--</li>-->
            <li>
                <a href="<?php echo base_url();?>front/kundali"><i class="glyphicon glyphicon-dashboard"></i> Vedic Journal</a>
            </li>
            <li>
                <a href="<?php echo base_url();?>front/articles"><i class="glyphicon glyphicon-hourglass"></i> Vedic Library</a>
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-phone"></i> Download App </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>front/member"><i class="glyphicon glyphicon-user"></i>  Become a Partner</a>
            </li>
            <li>
                <a href="<?php echo base_url();?>front/faq"><i class="glyphicon glyphicon-question-sign"></i>  FAQ</a>
            </li>
            <?php if($this->session->userdata('id')){?>

						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php if($this->session->userdata('user_type') == 'User'){ echo base_url('user/booking');}elseif($this->session->userdata('user_type') == 'Astrologer'){echo base_url('admin/my_booking');}else{echo base_url('user');}?>"><i class="fa fa-sign-in" aria-hidden="true"></i><?php echo ucfirst(strtolower(ucfirst($this->session->userdata('name'))))?></a>
						<ul class="dropdown-menu">
    <li><a href="<?php if($this->session->userdata('user_type') == 'User'){ echo base_url('user/booking');}elseif($this->session->userdata('user_type') == 'Astrologer'){echo base_url('admin/my_booking');}else{echo base_url('user');}?>">My Account</a></li>
    <li><a class="" href="<?php echo base_url('front/logout')?>"> logout</a></li>
  </ul>
						</li>
						
						<li><a class="" href="<?php echo  base_url('front/wallet')?>"><i class="fa fa-google-wallet" aria-hidden="true"></i> Godmed Wallet</a></li>

						<?php }else{?>

						<li><a class="popup-with-zoom-anim"  href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In/Singup</a></li>
						<li><a class="popup-with-zoom-anim"  href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Godmed Wallet</a></li>
					

						<?php }?>

        </ul>
    </nav>
    <div id="page-content-wrapper">
        <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
    </div>
</div>

<style>
button.consult_now {
    background-color: #f77403;
    color: #fff;
    border: 0px solid;
    margin: 4px 0px;
    padding: 12px 20px;
    border-radius: 50px;
}
button.consult_now:hover {
    background-color: transparent;
    border: 2px solid #f77403;
    padding: 10px 18px;
}

.ast_menu.con {
    text-align: center;
}
p.email i {
    position: absolute;
    left: 50px;
    top: 120px;
    font-size: 20px;
    color: orange;
}
</style>