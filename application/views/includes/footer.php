<footer>

	<div id="footer" class="footer">

	    <div class="container">

		    <ul class=" pull-left navbar-link footer-nav">

			    <li>
				    <a href="<?php echo site_url('home/index'); ?>"> Home </a> 
				    <a href="#"> About us </a>
				    <a href="#"> Terms and Conditions </a>
				    <a href="#"> Privacy Policy </a>
				    <a href="#"> Contact us </a> 
				    <a href="<?php echo site_url('home/faq'); ?>"> FAQ </a>
			    </li>

		    </ul>

		    <ul class=" pull-right navbar-link social-links circle">

			      <li class="facebook"><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>

			      <li class="twitter"><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>

			      <li class="googleplus"><a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a></li>

			      <li class="skype"><a href="http://www.skype.com" target="_blank"><i class="fa fa-skype"></i></a></li>

			      <li class="linkedin"><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>

		    </ul>
	    
	    </div>

    </div>

</footer>


<?php include( dirname(__DIR__).'/includes/js_section.php');  ?>

<?php

    if( isset($page_js) ) :
		include( $page_js .'.php'); 
	endif;

	include( 'common_function_js.php'); 
?>

</body>

</html>
