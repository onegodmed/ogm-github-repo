
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Kautilya Academy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        
        <!-- vendor css files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/js/animsition/css/animsition.min.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->

<script>
function showPassword(){
	var x = document.getElementById("psd").getAttribute("type");
	if(x == "password"){
		var p = document.getElementById('psd');
	    p.setAttribute('type','text'); 
	}else{
		var p = document.getElementById('psd');
	    p.setAttribute('type','password'); 
	}
	 
	
}
</script>

<script>
function validateForm() {
    var x = document.getElementById("role").value;
    var y = document.getElementById("user").value;
    var z = document.getElementById("psd").value;
    if (x == null || x == "") {
        alert("Select Role First.");
        return false;
    }
	if (y == null || y == "") {
        alert("Enter User Name First.");
        return false;
    }
	if (z == null || z == "") {
        alert("Enter Password First.");
        return false;
    }
}
</script>


    </head>

    <body id="minovate" class="appWrapper">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">

            <div class="page page-core page-login">

        <div class="text-center"><h3 class="text-light text-white">
		<span class="text-lightred"><img src="../../images/polytechnic-21 (1).png" style="height:40px;width:312px;margin-bottom:-36px;"></span></h3>
		</div>

                <div class="container w-420 p-15 bg-white mt-40 text-center">

       <h2 class="text-light text-greensea">Log In</h2>

    <form method="post" action="" onsubmit="return validateForm()">
    <input type="hidden" name="flag" value="Login_User"> 
    <input type="hidden" name="role" value="1"> 
	
		<div class="form-group">
			<input type="text" name="user" class="form-control underline-input" placeholder="User Name" id="user" required />
		</div>

		<div class="form-group">
			<input type="password" name="password" id="psd" placeholder="Password" class="form-control underline-input" required />
		</div>

		<div class="form-group text-left mt-20">
		 <label class="checkbox checkbox-custom-alt checkbox-custom-sm inline-block">
				<input type="checkbox" id="che" onclick="showPassword()" /><i></i> Show Password
			</label>
			<button class="btn btn-greensea pull-right b-0 br-2 mr-5">Login</button>
		</div>

    </form>

                    <div class="bg-slategray lt wrap-reset mt-40">
                        <p class="m-0">
                            <a href="https://www.pnpuniverse.com/" class="text-uppercase">2018 © P & P Infotech.</a>
                        </p>
                    </div>

                </div>

            </div>



        </div>
        <!--/ Application Content -->


        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        
 <script src="assets/ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="assets/js/vendor/d3/d3.min.js"></script>
        <script src="assets/js/vendor/d3/d3.layout.min.js"></script>

        <script src="assets/js/vendor/rickshaw/rickshaw.min.js"></script>

        <script src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="assets/js/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="assets/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>

        <script src="assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

        <script src="assets/js/vendor/raphael/raphael-min.js"></script>
        <script src="assets/js/vendor/morris/morris.min.js"></script>

        <script src="assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>
		<script src="assets/js/vendor/datatables/extensions/Pagination/input.js"></script>
		
		 <script src="assets/js/vendor/date-format/jquery-dateFormat.min.js"></script>

        <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="assets/js/vendor/summernote/summernote.min.js"></script>

        <script src="assets/js/vendor/coolclock/coolclock.js"></script>
        <script src="assets/js/vendor/coolclock/excanvas.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="assets/js/main.js"></script>
        <!--/ custom javascripts -->

        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){


            });
        </script>
        <!--/ Page Specific Scripts -->

    </body>

</html>
