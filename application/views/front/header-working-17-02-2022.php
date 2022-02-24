<!-- Welcome guest -->
<div class="modal fade custom header-custmization lightpink" data-keyboard="false" data-backdrop="static" id="welcomegeust">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3>Welcome Guest</h3>
         </div>
         <!-- Modal body -->
         <div class="modal-body text-center">
            <div class="gift giftbox">
            <img src="<?php echo base_url(); ?>front-assets/images/gift-icon.png" alt="" />
            </div>
            <p class="font-wight">Recharge with <span id="colorred"><i class="fa fa-inr" aria-hidden="true"></i> 49</span> & Get <span id="colorred"><i class="fa fa-inr" aria-hidden="true"></i> 100</span> Wallet balance.</p>
            <p class="astrikpara font-wight"><i class="fa fa-asterisk" aria-hidden="true"></i> Limited period Offer</p>
            <div class="btn-wrap">
                <a class="themebtn btn-shadowed login-btn btn btn-default btn-rounded popup-with-zoom-anim" id="claim" href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Claim Now</a>
                <!-- <button class="btn themebtn btn-shadowed">Claim Now</button> -->
            </div>
         </div>
      </div>
   </div>
</div>

<!-- oops -->
<div class="modal fade custom header-custmization lightpink" data-keyboard="false" data-backdrop="static" id="oops">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
         </div>
         <!-- Modal body -->
         <div class="modal-body text-center">
            <div class="gift">
            <img src="<?php echo base_url(); ?>front-assets/images/ooops.png" alt="" />
            </div>
            <p class="font-wight">ooops! You have already recharge with onegodmed explore other recharge option.</p>
            
            <div class="btn-wrap">
               
               <!-- <button class="btn themebtn btn-shadowed">Explore More</button> -->
               <a class="btn themebtn btn-shadowed" href="<?= base_url() ?>wallet/">Explore More</a>
               
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Verified successfuly -->
<div class="modal fade custom header-custmization lightpink" data-keyboard="false" data-backdrop="static" id="verified">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
         </div>
         <!-- Modal body -->
         <div class="modal-body text-center">
            <div class="gift">
            <img src="<?php echo base_url(); ?>front-assets/images/thumsup.png" alt="" />
            </div>
            <p class="font-wight">Verified Successfully</p>
            
            <div class="btn-wrap">
               
               <a class="btn themebtn btn-shadowed" href="<?= base_url() ?>wallet/">Claim Now</a>
               <!-- <a class="themebtn btn-shadowed login-btn btn btn-default btn-rounded popup-with-zoom-anim" id="claim" href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Claim Now</a> -->
            </div>
         </div>
      </div>
   </div>
</div>
   
   <!-- Offer end --> 

<?php
   $country = $this->admin->get('countries');
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title><?php
         if (isset($title)) {
             echo $title;
         } else {
             echo "Astrology";
         }
         ?></title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="description" content="<?php
         if (isset($meta_description)) {
             echo $meta_description;
         } else {
             echo "Astrology";
         }
         ?>" />
      <meta name="keywords" content="<?php
         if (isset($meta_keywords)) {
             echo $meta_keywords;
         } else {
             echo "Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac";
         }
         ?>" />
      <meta property="og:title" content="<?php
         if (isset($meta_ogtitle)) {
             echo $meta_ogtitle;
         } else {
             echo "Astrology";
         }
         ?>" />
      <meta property="og:description" content="<?php
         if (isset($meta_ogdescription)) {
             echo $meta_ogdescription;
         } else {
             echo "Astrology";
         }
         ?>" />
      <meta property="og:keywords" content="<?php
         if (isset($meta_ogkeywords)) {
             echo $meta_ogkeywords;
         } else {
             echo "Astrology";
         }
         ?>" />
      <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>front-assets/css/animate.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>front-assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>front-assets/css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>front-assets/css/fonts.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>front-assets/css/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>front-assets/css/owl.theme.default.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.magnific-popup/1.0.0/magnific-popup.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>front-assets/css/ui.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>front-assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
      <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>front-assets/images/header/favicon.png">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <meta name="msvalidate.01" content="30CC7D39DB99C5FBFDC725C9F06F7177" />
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145167158-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag() {
             dataLayer.push(arguments);
         }
         gtag('js', new Date());
         
         gtag('config', 'UA-145167158-1');
      </script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=AW-712496260"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag() {
             dataLayer.push(arguments);
         }
         gtag('js', new Date());
         
         gtag('config', 'AW-712496260');
      </script>
      <!-- Google Tag Manager -->
      <script>
         (function(w, d, s, l, i) {
             w[l] = w[l] || [];
             w[l].push({
                 'gtm.start': new Date().getTime(),
                 event: 'gtm.js'
             });
             var f = d.getElementsByTagName(s)[0],
                 j = d.createElement(s),
                 dl = l != 'dataLayer' ? '&l=' + l : '';
             j.async = true;
             j.src =
                 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
             f.parentNode.insertBefore(j, f);
         })(window, document, 'script', 'dataLayer', 'GTM-MP6FTDN');
      </script>
      <!-- End Google Tag Manager -->
      <!--Start of Tawk.to Script-->
      <script>
         setTimeout(function() {
             var Tawk_API = Tawk_API || {},
                 Tawk_LoadStart = new Date();
         
             (function() {
         
                 var s1 = document.createElement("script"),
                     s0 = document.getElementsByTagName("script")[0];
         
                 s1.async = true;
         
                 s1.src = 'https://embed.tawk.to/5d2c2eadbfcb827ab0cbc625/default';
         
                 s1.charset = 'UTF-8';
         
                 s1.setAttribute('crossorigin', '*');
         
                 s0.parentNode.insertBefore(s1, s0);
         
             })();
         
         }, 5000);
      </script>
      <!-- Taboola Pixel Code -->
      <script type='text/javascript'>
         window._tfa = window._tfa || [];
         window._tfa.push({
             notify: 'event',
             name: 'page_view',
             id: 1305552
         });
         ! function(t, f, a, x) {
             if (!document.getElementById(x)) {
                 t.async = 1;
                 t.src = a;
                 t.id = x;
                 f.parentNode.insertBefore(t, f);
             }
         }(document.createElement('script'),
             document.getElementsByTagName('script')[0],
             '//cdn.taboola.com/libtrc/unip/1305552/tfa.js',
             'tb_tfa_script');
      </script>
      <noscript>
         <img src='https://trc.taboola.com/1305552/log/3/unip?en=page_view' width='0' height='0' style='display:none' />
      </noscript>
      <!-- End of Taboola Pixel Code -->
      <!-- Facebook Pixel Code -->
      <!-- <script>
         ! function(f, b, e, v, n, t, s) {
             if (f.fbq) return;
             n = f.fbq = function() {
                 n.callMethod ?
                     n.callMethod.apply(n, arguments) : n.queue.push(arguments)
             };
             if (!f._fbq) f._fbq = n;
             n.push = n;
             n.loaded = !0;
             n.version = '2.0';
             n.queue = [];
             t = b.createElement(e);
             t.async = !0;
             t.src = v;
             s = b.getElementsByTagName(e)[0];
             s.parentNode.insertBefore(t, s)
         }(window, document, 'script',
             'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '994723014320061');
         fbq('track', 'PageView');
         </script>
         <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=994723014320061&ev=PageView&noscript=1" /></noscript> -->
      <!-- End Facebook Pixel Code -->
      <!-- Facebook Pixel Code -->
      <script>
         ! function(f, b, e, v, n, t, s) {
             if (f.fbq) return;
             n = f.fbq = function() {
                 n.callMethod ?
                     n.callMethod.apply(n, arguments) : n.queue.push(arguments)
             };
             if (!f._fbq) f._fbq = n;
             n.push = n;
             n.loaded = !0;
             n.version = '2.0';
             n.queue = [];
             t = b.createElement(e);
             t.async = !0;
             t.src = v;
             s = b.getElementsByTagName(e)[0];
             s.parentNode.insertBefore(t, s)
         }(window, document, 'script',
             'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '665804757340314');
         fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=665804757340314&ev=PageView&noscript=1" /></noscript>
      <!-- End Facebook Pixel Code -->
      <!-- Facebook Pixel Code -->
      <!-- <script>
         ! function(f, b, e, v, n, t, s) {
             if (f.fbq) return;
             n = f.fbq = function() {
                 n.callMethod ?
                     n.callMethod.apply(n, arguments) : n.queue.push(arguments)
             };
             if (!f._fbq) f._fbq = n;
             n.push = n;
             n.loaded = !0;
             n.version = '2.0';
             n.queue = [];
             t = b.createElement(e);
             t.async = !0;
             t.src = v;
             s = b.getElementsByTagName(e)[0];
             s.parentNode.insertBefore(t, s)
         }(window, document, 'script',
             'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '1203669783152613');
         fbq('track', 'PageView');
         </script>
         <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1203669783152613&ev=PageView&noscript=1" /></noscript> -->
      <!-- End Facebook Pixel Code -->
      <script type="text/javascript">
         adroll_adv_id = "3TVSCXTKS5FRVLCII63XLV";
         adroll_pix_id = "KHQYLC2V4ZFZNMOFNINPXD";
         
         (function() {
             var _оnload = function() {
                 if (document.readyState && !/loaded|complete/.test(document.readyState)) {
                     setTimeout(_оnload, 10);
                     return
                 }
                 if (!window.__adroll_loaded) {
                     __adroll_loaded = true;
                     setTimeout(_оnload, 50);
                     return
                 }
                 var scr = document.createElement("script");
                 var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
                 scr.setAttribute('async', 'true');
                 scr.type = "text/javascript";
                 scr.src = host + "/j/roundtrip.js";
                 ((document.getElementsByTagName('head') || [null])[0] ||
                     document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
             };
             if (window.addEventListener) {
                 window.addEventListener('load', _оnload, false);
             } else {
                 window.attachEvent('оnload', _оnload)
             }
         }());
      </script>
      <script> var BASE_URL = "<?php echo base_url(); ?>"; </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>front-assets/css/custom.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>front-assets/css/main.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>front-assets/css/headercss.css">
      <!-- <script src="<?php echo base_url(); ?>front-assets/js/main.js"></script> -->
   </head>
   <!-- End TO DO -->
   <body class="overflow">
      <div class="clearfix">
         <div class="spinner-border float-right" role="status">
            <span class="sr-only">Loading...</span>
         </div>
      </div>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MP6FTDN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <?php if ($this->session->flashdata('email')) { ?>
      <script type="text/javascript">
         alert('Email is already register')
      </script>
      <?php } ?>
      <?php
         $this->db->select('*');
         $this->db->from('super_categories');
         $query = $this->db->get();
         $super_cat = $query->result();
         $this->db->select('*');
         $query = $this->db->get('categories');
         $categories = $query->result();
         ?>
      <script src="<?= base_url() ?>front-assets/js/jquery3-4-0.min.js"></script>
      <script>
         window._peq = window._peq || [];
         window._peq.push(["init"]);
      </script>
      <!--<script src="https://clientcdn.pushengage.com/core/9230e352759bfbd5ab324f00e3eabd09.js" async></script>-->
      <script type="text/javascript">
         $(document).ready(function() {
         
             // Offer start TEST TO DO  
         
             <?php if ($this->session->userdata('id')) { ?>       
                // NO DISPLAY OFFER SCREEN/ MODAL
             <?php }else{?>
         
                if ((window.location.href == "<?php echo base_url(); ?>wallet")||(window.location.href == "<?php echo base_url(); ?>wallet/")){
                // LOCAL URL -> http://localhost/staging/wallet
                }else{
         
                setTimeout(function(){
                    // if(localStorage.getItem('showModal') == null){
                        $('#welcomegeust').modal('show');
                        // localStorage.setItem('showModal',false);
                    // }
                }, 3000);
             }
         
             $('#claim').click(function() {      
                $('#welcomegeust').modal('hide');
                $('#login-dialog').modal('show');
                
             });
         
             <?php } ?>
             // offer end
             
         
             $('body').bind('cut copy paste', function(e) {
                 e.preventDefault();
             });
         
         
             $("body").on("contextmenu", function(e) {
                 return false;
             });
             document.onkeydown = function(e) {
                 if (e.ctrlKey &&
                     (e.keyCode === 67 ||
                         e.keyCode === 86 ||
                         e.keyCode === 85 ||
                         e.keyCode === 117)) {
                     return false;
                 } else {
                     return true;
                 }
             };
             $(document).keydown(function(event) {
                 if (event.keyCode == 123) { // Prevent F12
                     return false;
                 } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
                     return false;
                 } else if (event.ctrlKey || event.altKey) {
                     return false;
                 }
             });
         });
      </script>
      <!-- otp Verification -->
      <div class="modal fade custom phoneverification header-custmization lightpink" data-keyboard="false" data-backdrop="static" id="otpverification">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div>
                        <img src="<?php echo base_url(); ?>front-assets/images/modal-logo.png" alt="" />
                            <h3>Welcome to onegodmed</h3>
                    </div>
               </div>
               <!-- Modal body -->
               <div class="modal-body text-center">
                  <div class="user-icon">
                     <div id="otpsignup">
                         <div class="gift">
                        <img src="<?php echo base_url(); ?>front-assets/images/gift-icon.png" alt="" />
                        </div>
                        <p>OTP has been sent to you on your mobile number <span id="currentMobile1"></span> <span id="editnumber1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></p>
                        <br>
                        <div class="form-group">
                           <div class="form-wrapr">
                              <i class="fa fa-asterisk" aria-hidden="true"></i>
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <input type="text" class="form-control username" id="Name" Placeholder="Enter Your Name">
                           </div>
                           <span id="i_namee" class="text-danger err12"></span>
                        </div>
                        <div class="form-group">
                           <div class="form-wrapr msg">
                              <i class="fa fa-asterisk" aria-hidden="true"></i>
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              <input type="email" class="form-control useremail" id="email" Placeholder="Enter Your EmaIl Address">
                           </div>
                           <span id="i_email" class="text-danger err12"></span>
                        </div>
                        <p class="txt">Enter OTP</p>
                        <input id="digit1" type="number" class="val1 inputs" maxlength="1" onkeyup="onKeyUpEventReg(1, event)" onfocus="onFocusEventReg(1)">
                        <input id="digit2" type="number" class="val2 inputs" maxlength="1" onkeyup="onKeyUpEventReg(2, event)" onfocus="onFocusEventReg(2)">
                        <input id="digit3" type="number" class="val3 inputs" maxlength="1" onkeyup="onKeyUpEventReg(3, event)" onfocus="onFocusEventReg(3)">
                        <input id="digit4" type="number" class="val4 inputs" maxlength="1" onkeyup="onKeyUpEventReg(4, event)" onfocus="onFocusEventReg(4)">
                        <input type="hidden" value="" id="validationcheck">
                        <p class="errmsg1" style="display:none"></p>
                        <p>Didn't Get OTP ? <button class="btn-style loginresend_otp" id="loginresend_otp">Resend OTP</button></p>
                        <div class="checkbox">
                           <label>While login you agree with our terms and conditions</label>
                        </div>
                        <p><button type="button" id="" onsubmit="return validation()" class="ast_btn loginsubmit">Submit to Login</button></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- otp Verification -->
      <div id="login-dialog" class="zoom-anim-dialog mfp-hide header-custmization lightpink border-around">
         <p class="top_logo">
         <img src="<?php echo base_url(); ?>front-assets/images/modal-logo.png" alt="" />
            <h3>Welcome to onegodmed</h3>
         </p>
         <div class="gift">
             <img src="<?php echo base_url(); ?>front-assets/images/gift-icon.png" alt="" />
            </div>
         <div id="genmobile" style="display:block">
             <p class="font-wight">Please Login to claim the offer.</p>
             <br>
            <p class="email">
               <input type="tel" placeholder="Mobile Number" autocomplete="off" id="loginmobile" class="logindsdssds" name="mobile" required="" style="padding-left:110px!important;">
            </p>
            <p id="mobileno" style="display:none"></p>
            <select name="ctry_code" id="ctry_code">
               <?php foreach ($countrydata as $cntrycode) { ?>
               <option value="<?php echo $cntrycode->international_dialing; ?>" <?php if ($cntrycode->country_code == $this->session->userdata('countryCode')) {
                  echo "selected";
                  } else {
                  echo "";
                  } ?>><?php echo $cntrycode->international_dialing; ?></option>
               <?php } ?>
            </select>
            <button type="button" class="ast_btn" id="genotp">Send OTP</button>
            <p class="astrikpara font-wight"><i class="fa fa-asterisk" aria-hidden="true"></i> By Proceeding I agree to Terms & Condition & Privacy Policy</p>
         </div>
         <div id="otpmobile" style="display:none">
         <p class="font-wight">Verify Your Number</p>
            <p>OTP has been sent to you on your mobile number <span id="currentMobile"></span> <span id="editnumber"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></p>
            <form method="get" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
               <input id="digit-1" type="number" maxlength="1" class="val1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)">
               <input id="digit-2" type="number" maxlength="1" class="val2" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)">
               <input id="digit-3" type="number" maxlength="1" class="val5" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)">
               <input id="digit-4" type="number" maxlength="1" class="val6" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)">
               <!-- <input id="digit-5" type="number" maxlength="1" class="val5" onkeyup="onKeyUpEvent(5, event)" onfocus="onFocusEvent(5)">
                  <input id="digit-6" type="number" maxlength="1" class="val6" onkeyup="onKeyUpEvent(6, event)" onfocus="onFocusEvent(6)"> -->
            </form>
            <p class="errmsg1" style="display:none"></p>
            <p>Didn't receive the SMS? <span class="btn-style loginresend_otp" id="loginresend_otp">Resend</span></p>
            <br>
            <button type="button" class="ast_btn disabledHref loginsubmit inlogin" id="loginsubmit">Verify and Get the offer</button>
         </div>
         <!-- <p style="margin-top:28px;" class="new"><a class="popup-with-zoom-anim" id="headerSign" href="#signup-dialog">SignUp</a></p> -->
      </div>
      <div id="signup-dialog" class="zoom-anim-dialog mfp-hide">
         <p class="top_logo"><i class="fa fa-user" aria-hidden="true"></i></p>
         <div id="gensignup" style="display:block">
            <h2>SignUp</h2>
            <p id="promotext" style="display:none;color:green;font-weight:600">SignUp and Get Rs. <span id="prm_amt">100</span> in Your Wallet</p>
            <input type="hidden" id="promodisc" value="0" />
            <p class="email"><i class="fa fa-user" aria-hidden="true"></i><input type="text" placeholder="Enter Your Name" autocomplete="off" id="name" name="name" required=""></p>
            <p class="email"><i class="fa fa-envelope" aria-hidden="true"></i><input type="email" placeholder="Enter Your Email" autocomplete="off" id="email" name="email" required=""></p>
            <div style="position:relative">
               <p class="email"><i class="fa fa-phone" aria-hidden="true"></i>
                  <input type="tel" placeholder="Enter Your Mobile Number" autocomplete="off" id="mobile" name="mobile" required="" style="padding-left:120px!important">
               </p>
               <p id="signuperrmsg" style="display:none"></p>
               <select name="ctry_code" id="ctry_code" style="position:absolute;top:53px;left:44px;padding:0px;width:67px">
                  <?php foreach ($countrydata as $cntrycode) { ?>
                  <option value="<?php echo $cntrycode->international_dialing; ?>" <?php if ($cntrycode->country_code == $this->session->userdata('countryCode')) {
                     echo "selected";
                     } else {
                     echo "";
                     } ?>><?php echo $cntrycode->international_dialing; ?></option>
                  <?php } ?>
               </select>
            </div>
            <button type="button" id="gensignupotp" class="ast_btn disabledHref">Generate OTP</button>
         </div>
         <div id="otpsignup" style="display:none">
            <p>OTP has been sent to you on your mobile number <span id="signupMobile"></span> <span id="signupeditnumber"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></p>
            <br>
            <input type="tel" id="signdigit-1" name="con_password1" data-next="con_password-1" maxlength="1" class="inputs" />
            <input type="tel" id="signdigit-2" name="con_password2" data-next="con_password-2" class="inputs" maxlength="1" data-previous="signdigit-1" />
            <!-- <input type="tel" id="signdigit-3" name="con_password3" data-next="con_password-3" class="inputs" maxlength="1" data-previous="signdigit-2" />
               <input type="tel" id="signdigit-4" name="con_password4" data-next="con_password-4" class="inputs" maxlength="1" data-previous="signdigit-3" /> -->
            <input type="tel" id="signdigit-5" name="con_password5" data-next="con_password-5" class="inputs" maxlength="1" data-previous="signdigit-4" />
            <input type="tel" id="signdigit-6" name="con_password6" data-previous="con_password-6" maxlength="1" class="inputs" />
            <p id="signuperrmsg1" style="display:none"></p>
            <p>Didn't receive the SMS? <span class="btn-style" id="signupsubmit_resend">Resend</span></p>
            <br>
            <button type="button" class="ast_btn disabledHref" id="signupsubmit">Verify OTP</button>
         </div>
         <p style="margin-top:28px;">Have An Account ? <a class="popup-with-zoom-anim" href="#login-dialog">Login</a></p>
      </div>
      <!-- Floating buttons Start -->
      <?php 
         $url = current_url(); 
         
         if ((strpos($url, '/astrologer') == false) ){ ?>
      <div class="floating-btns">
         <div class="row">
            <div class="col-xs-6">
               <a href="<?php echo base_url();?>talk-to-astrologers" class="btn btn-default btn-block">Talk to Astrologers</a>
            </div>
            <div class="col-xs-6">
               <a href="<?php echo base_url();?>chat-with-astrologer" class="btn btn-default btn-block">Chat with Astrologer</a>
            </div>
         </div>
      </div>
      <?php } ?>
      <div class="full-hearder-wrp">
         <div class="logo-box1">
            <a href="">
            <img src="<?php echo base_url(); ?>front-assets/images/header/logo-dark.png" alt="" />
            </a>
         </div>
         <div class="header-new">
            <div class="wrapper">
               <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>front-assets/images/header/menu.png" alt="menu icon" class="menu-btn" /></a>
               <div class="logo-box">
                  <img src="<?php echo base_url(); ?>front-assets/images/header/logo-dark.png" alt="" />
               </div>
               <div class="first-header-right">
                  <div class="menu">
                     <div class="top">
                        <ul>
                           <li>
                           <li class="menu-item">
                              <a href="<?php echo base_url(); ?>free-kundali">Free Kundali</a>
                           </li>
                           <li class="menu-item">
                              <a href="<?php echo base_url(); ?>kundali-match-making">Match Making</a>
                           </li>
                           <li class="menu-item">
                              <a href="<?php echo base_url(); ?>numerology">Numerology</a>
                           </li>
                           <li class="menu-item">
                              <a href="<?php echo base_url(); ?>panchang">Panchang</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="last-box">
                     <div class="col-item">
                        <div class="phone-number-box">
                           <i class="fa fa-phone" aria-hidden="true"></i> +91 9169-305-305
                        </div>
                     </div>
                     <?php if ($this->session->userdata('id')) { ?>
                     <div class="col-item">
                        <div class="dropdown">
                           <a class="btn btn-default btn-rounded dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href=" <?php if ($this->session->userdata('user_type') == 'User') {
                              echo base_url('user/booking');
                              } elseif ($this->session->userdata('user_type') == 'Astrologer') {
                              echo base_url('admin/my_booking');
                              } else {
                              echo base_url('user');
                              } ?>">
                           <i class="fa fa-user" aria-hidden="true"></i>
                           <?php
                              $name = $this->session->userdata('name') ? $this->session->userdata('name') : 'User';
                              $astrname = explode(" ", $name);
                              echo $astrname[0];
                              ?>
                           <span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="userDropdownMenu">
                              <li>
                                 <a href="<?php
                                    if ($this->session->userdata('user_type') == 'User') {
                                        echo base_url('user/booking');
                                    } elseif ($this->session->userdata('user_type') == 'Astrologer') {
                                        echo base_url('admin/my_booking');
                                    } else {
                                        echo base_url('user');
                                    }
                                    ?>">
                                 My Account
                                 </a>
                              </li>
                              <?php if ($this->session->userdata('name')) { ?>
                              <li><a href="<?php echo base_url('my-astrologers') ?>">My Astrologers</a></li>
                              <?php } ?>
                              <li><a href="<?php echo base_url('wallet') ?>">Wallet Recharge</a></li>
                              <li><a href="<?php echo base_url('front/logout') ?>">logout</a></li>
                           </ul>
                        </div>
                     </div>
                     <?php if ($this->session->userdata('user_type') != "Astrologer") {
                        foreach ($resultSet as $wallet_bal); { ?>
                     <div class="col-item">
                        <a href="<?php echo base_url('wallet/') ?>" class="btn btn-default btn-rounded " type="button">
                        <?php if ($this->session->userdata('countryCode') == 'IN') { ?>
                        <i class="fa fa-google-wallet" aria-hidden="true"></i> INR ₹ <?php echo $wallet_bal->wallet_balence; ?> Recharge Wallet
                        <?php } else { ?>
                        <i class="fa fa-google-wallet" aria-hidden="true"></i> USD $ <?php echo $wallet_bal->wallet_balence; ?> Recharge Wallet
                        </a>
                     </div>
                     <?php } } } ?>
                     <?php } else { ?>
                     <div class="col-item">
                        <div class="login-box">
                           <a class="login-btn btn btn-default btn-rounded popup-with-zoom-anim" href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="header fixed" id="header-fixed">
            <div class="container-fluid">
               <div class="wrapper d-flex justify-content-between align-items-center">
                  <div class="logo-box">
                     <a href="javascript:void(0)"> <img src="<?php echo base_url(); ?>front-assets/images/header/menu.png" alt="menu icon" class="menu-btn"></a>
                     <a href="<?php echo base_url(); ?>">
                     <img src="<?php echo base_url(); ?>front-assets/images/header/logo-dark.png" alt="onegodmed logo">
                     </a>
                  </div>
                  <div class="menu-box">
                     <ul class="menu-items">
                        <li class="menu-item">
                           <a href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="menu-item">
                           <a class="btn btn-default btn-rounded btn-shadowed" href="<?= base_url() ?>talk-to-astrologers/">Talk to astrologer</a>
                        </li>
                        <li class="menu-item">
                           <a class="btn btn-default btn-rounded btn-shadowed" href="<?= base_url() ?>chat-with-astrologer">Chat with astrologer</a>
                        </li>
                        <li class="menu-item">
                           <a href="<?= base_url() ?>horoscopes/">Horoscope</a>
                        </li>
                        <li class="menu-item">
                           <div class="dropdown">
                              <a id="astrologyDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Astrology <span class="caret"></span></a>
                              <ul class="dropdown-menu" aria-labelledby="astrologyDropdown">
                                 <?php foreach ($super_cat as $row) { ?>
                                 <?php if ($row->menu_id == '3') { ?>
                                 <li><a href="<?php echo base_url('vedic-astrology/' . $row->slug_super_category . '/'); ?>"><?php echo $row->super_category ?></a></li>
                                 <?php }
                                    } ?>
                              </ul>
                           </div>
                        </li>
                        <li class="menu-item">
                           <div class="dropdown">
                              <a id="reportDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Premium Report <span class="caret"></span></a>
                              <ul class="dropdown-menu" aria-labelledby="reportDropdown">
                                 <?php foreach ($super_cat as $row) { ?>
                                 <?php if ($row->menu_id == '5' and $row->id == 83) { ?>
                                 <?php foreach ($categories as $row1) { ?>
                                 <?php if ($row1->super_cat_id == $row->id and $row->id == 83) { ?>
                                 <li><a href="<?php echo base_url('horoscope-report/' . $row1->slug_category . '/'); ?>"><?php echo $row1->category ?></a></li>
                                 <?php }
                                    }
                                    }
                                    } ?>
                              </ul>
                           </div>
                        </li>
                        <li class="menu-item">
                           <a href="<?php echo base_url(); ?>blog/">Vedic Library</a>
                        </li>
                     </ul>
                  </div>
                  <div class="action-btns"></div>
                  <?php if ($this->session->userdata('id')) { ?>
                  <div class="col-item">
                     <div class="dropdown">
                        <a class="btn btn-default btn-rounded dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href=" <?php if ($this->session->userdata('user_type') == 'User') {
                           echo base_url('user/booking');
                           } elseif ($this->session->userdata('user_type') == 'Astrologer') {
                           echo base_url('admin/my_booking');
                           } else {
                           echo base_url('user');
                           } ?>">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php
                           $name = $this->session->userdata('name') ? $this->session->userdata('name') : 'User';
                           $astrname = explode(" ", $name);
                           echo $astrname[0];
                           ?>
                        <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdownMenu">
                           <li>
                              <a href="<?php
                                 if ($this->session->userdata('user_type') == 'User') {
                                     echo base_url('user/booking');
                                 } elseif ($this->session->userdata('user_type') == 'Astrologer') {
                                     echo base_url('admin/my_booking');
                                 } else {
                                     echo base_url('user');
                                 }
                                 ?>">
                              My Account
                              </a>
                           </li>
                           <?php if ($this->session->userdata('name')) { ?>
                           <li><a href="<?php echo base_url('my-astrologers') ?>">My Astrologers</a></li>
                           <?php } ?>
                           <li><a href="<?php echo base_url('wallet') ?>">Wallet Recharge</a></li>
                           <li><a href="<?php echo base_url('front/logout') ?>">logout</a></li>
                        </ul>
                     </div>
                  </div>
                  <?php } else { ?>
                  <div class="col-item">
                     <div class="login-box">
                        <a class="login-btn btn btn-default btn-rounded popup-with-zoom-anim" href="#login-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
      <div class="header">
         <div class="container-fluid">
            <div class="wrapper d-flex justify-content-between align-items-center">
               <div class="logo-box"></div>
               <div class="menu-box">
                  <ul class="menu-items">
                     <li class="menu-item">
                        <a href="<?php echo base_url(); ?>">Home</a>
                        </li class="menu-item">
                     <li class="menu-item">
                        <a class="btn btn-default btn-rounded btn-shadowed" href="<?= base_url() ?>talk-to-astrologers/">Talk to astrologer</a>
                     </li>
                     <li class="menu-item">
                        <a class="btn btn-default btn-rounded btn-shadowed" href="<?= base_url() ?>chat-with-astrologer/">Chat with astrologer</a>
                     </li>
                     <li class="menu-item">
                        <a href="<?= base_url() ?>horoscopes/">Horoscope</a>
                     </li>
                     <li class="menu-item">
                        <div class="dropdown">
                           <a id="astrologyDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Astrology <span class="caret"></span></a>
                           <ul class="dropdown-menu" aria-labelledby="astrologyDropdown">
                              <?php foreach ($super_cat as $row) { ?>
                              <?php if ($row->menu_id == '3') { ?>
                              <li><a href="<?php echo base_url('vedic-astrology/' . $row->slug_super_category . '/'); ?>"><?php echo $row->super_category ?></a></li>
                              <?php }
                                 } ?>
                           </ul>
                        </div>
                     </li>
                     <li class="menu-item">
                        <div class="dropdown">
                           <a id="reportDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">Premium Report <span class="caret"></span></a>
                           <ul class="dropdown-menu" aria-labelledby="reportDropdown">
                              <?php foreach ($super_cat as $row) { ?>
                              <?php if ($row->menu_id == '5' and $row->id == 83) { ?>
                              <?php foreach ($categories as $row1) { ?>
                              <?php if ($row1->super_cat_id == $row->id and $row->id == 83) { ?>
                              <li><a href="<?php echo base_url('horoscope-report/' . $row1->slug_category . '/'); ?>"><?php echo $row1->category ?></a></li>
                              <?php }
                                 }
                                 }
                                 } ?>
                           </ul>
                        </div>
                     </li>
                     <li class="menu-item">
                        <a href="<?php echo base_url(); ?>blog/">Vedic Library</a>
                     </li>
                  </ul>
               </div>
               <div class="action-btns"></div>
            </div>
         </div>
      </div>
      <?php if ($this->session->flashdata('success')) { ?>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#consolPopup").fancybox({
                 'overlayShow': true
             }).trigger('click');
         });
      </script>
      <?php } ?>
      <div id="consolPopup">
         <h3>Success</h3>
         <p><?php echo $this->session->flashdata('success') ?></p>
      </div>
      <!-- Header End -->
      <script>
         function myfunction(country_id) {
             $.ajax({
                 url: "<?php echo base_url('front/ajax_get_state') ?>",
                 type: 'POST',
                 dataType: "json",
                 data: {
                     'country_id': country_id
                 },
                 success: function(response) {
                     if (response.status == 1) {
                         var i = 0;
                         $("#state").empty();
                         $("#state").append("<option value=''>Select</option>");
                         $.each(response.state, function(key, value) {
                             $("#state").append("<option value='" + response.state[i].id + "'>" + response.state[i].name + "</option>")
                             i++;
                         })
                     } else {
                         $("#state").empty();
                     }
                 }
             });
         }
         
         function myfunction2(state_id) {
             $.ajax({
                 url: "<?php echo base_url('front/ajax_get_city') ?>",
                 type: 'POST',
                 dataType: "json",
                 data: {
                     'state_id': state_id
                 },
                 success: function(response) {
                     if (response.status == 1) {
                         var i = 0;
                         $("#city").empty();
                         $("#city").append("<option value=''>Select</option>");
                         $.each(response.city, function(key, value) {
                             $("#city").append("<option value='" + response.city[i].id + "'>" + response.city[i].name + "</option>")
                             i++;
                         })
                     } else {
                         $("#state").empty();
                     }
                 }
             });
         }
         
         $('.loginresend_otp').click(function() {
         
             var mobile = $("#loginmobile").val();
             var ctry_code = $("#ctry_code").val();
             $.ajax({
                 url: "<?php echo base_url('front/ajax_resend_otp') ?>",
                 type: 'POST',
                 dataType: "json",
                 data: {
                     'mobile': mobile,
                     'ctry_code': ctry_code
                 },
                 success: function(response) {
                     if (response.status == 1) {
                         $('.errmsg1').css("display", "block");
                         $('.errmsg1').css("color", "green");
                         $('.errmsg1').text("You will recevive an OTP shortly.");
                     } else {
                         $('#errmsg').css("display", "block");
                         $('#errmsg').css("color", "red");
                         $('#errmsg').text("This phone number is not registered with us.");
                     }
         
                 }
             });
         
         });
         
         $('#signupsubmit_resend').click(function() {
             var mobile = $("#mobile").val();
             var ctry_code = $("#ctry_code").val();
             $.ajax({
                 url: "<?php echo base_url('front/ajax_resend_otp') ?>",
                 type: 'POST',
                 dataType: "json",
                 data: {
                     'mobile': mobile,
                     'ctry_code': ctry_code
                 },
                 success: function(response) {
                     if (response.status == 1) {
                         $('.errmsg1').css("display", "block");
                         $('.errmsg1').css("color", "green");
                         $('.errmsg1').text("You will recevive an OTP shortly.");
                     } else {
                         $('#errmsg').css("display", "block");
                         $('#errmsg').css("color", "red");
                         $('#errmsg').text("This phone number is not registered with us.");
                     }
         
                 }
             });
         
         });
         
         $("#mobile").on('keyup paste', function() {
             var mobile = $("#mobile").val();
             var email = $("#email").val();
             var name = $("#name").val();
             var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
             var regName = /^[a-zA-Z ]*$/;
             if (!filter.test(email)) {
                 $("#signuperrmsg").css('display', 'block');
                 $("#signuperrmsg").css('color', 'red');
                 $("#signuperrmsg").text(email + " is not a valid email");
                 $("#gensignupotp").addClass('disabledHref');
                 email.focus;
                 return false;
             } else if (!regName.test(name)) {
                 $("#signuperrmsg").css('display', 'block');
                 $("#signuperrmsg").css('color', 'red');
                 $("#signuperrmsg").text(name + " is not a valid name (Only Alphabates with white space Allowed)");
                 name.focus;
                 return false;
             } else {
                 $("#signuperrmsg").css('display', 'none');
                 $("#signuperrmsg").text("");
                 if (mobile.length == 10 && name != "" && email != "") {
                     $("#gensignupotp").removeClass('disabledHref');
                 } else {
                     $("#gensignupotp").addClass('disabledHref');
                 }
             }
         });
         
         $("#Name").on('keyup paste', function() {
             var mobile = $("#mobile").val();
             var email = $("#email").val();
             var name = $("#Name").val();
             var regName = /^[a-zA-Z ]*$/;
             var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
             if (!regName.test(name)) {
                 $("#signuperrmsg").css('display', 'block');
                 $("#signuperrmsg").css('color', 'red');
                 document.getElementById('i_namee').innerHTML = name + " is not a valid name (Only Alphabates with white space Allowed)";
                 name.focus;
                 return false;
             } else if (!filter.test(email)) {
         
                 document.getElementById('i_namee').innerHTML = "";
                 $("#signuperrmsg").css('display', 'block');
                 $("#signuperrmsg").css('color', 'red');
                 $("#signuperrmsg").text(email + " is not a valid email");
                 $("#gensignupotp").addClass('disabledHref');
                 email.focus;
                 return false;
             } else {
                 document.getElementById('i_namee').innerHTML = "";
                 $("#signuperrmsg").css('display', 'none');
                 $("#signuperrmsg").text("");
                 if (mobile.length == 10 && name != "" && email != "") {
                     $("#gensignupotp").removeClass('disabledHref');
                 } else {
                     $("#gensignupotp").addClass('disabledHref');
                 }
             }
         });
         
         $("#email").on('keyup paste', function() {
             var mobile = $("#mobile").val();
             var email = $("#email").val();
             var name = $("#Name").val();
             var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
             if (!filter.test(email)) {
                 //alert('Please provide a valid email address');
                 $("#signuperrmsg").css('display', 'block');
                 $("#signuperrmsg").css('color', 'red');
                 document.getElementById('i_email').innerHTML = email + " is not a valid email";
                 $("#gensignupotp").addClass('disabledHref');
                 email.focus;
                 return false;
             } else {
                 document.getElementById('i_email').innerHTML = "";
                 $("#signuperrmsg").css('display', 'none');
                 $("#signuperrmsg").text("");
                 if (mobile.length == 10 && name != "" && email != "") {
                     $("#gensignupotp").removeClass('disabledHref');
                 } else {
                     $("#gensignupotp").addClass('disabledHref');
                 }
             }
         
         });
         (function($) {
             $.fn.inputFilter = function(inputFilter) {
                 return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
                     if (inputFilter(this.value)) {
                         this.oldValue = this.value;
                         this.oldSelectionStart = this.selectionStart;
                         this.oldSelectionEnd = this.selectionEnd;
                     } else if (this.hasOwnProperty("oldValue")) {
                         this.value = this.oldValue;
                         this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                     } else {
                         this.value = "";
                     }
                 });
             };
         }(jQuery));
         $("#loginmobile").inputFilter(function(value) {
             return /^-?\d*$/.test(value);
         });
         $("#mobile").inputFilter(function(value) {
             return /^-?\d*$/.test(value);
         });
         
         $("#loginmobile").on('keyup paste', function() {
             var mobile = $("#loginmobile").val();
             console.log(mobile);
         
             if (mobile.length == 10) {
                 $("#genotp").removeClass('disabledHref');
             } else {
                 $("#genotp").addClass('disabledHref');
             }
         });
         
         $(".val6").on('keyup paste', function() {
             var digit = $(".val6").val();
             var digit2 = $("#digit6").val();
             if (digit == '') {
                 digit = digit2;
             }
             if (digit.length == 1) {
                 $(".loginsubmit").removeClass('disabledHref');
             } else {
                 $(".loginsubmit").addClass('disabledHref');
             }
         });
         
         $("#signdigit-6").on('keyup paste', function() {
             var digit = $("#signdigit-6").val();
         
             if (digit.length == 1) {
                 $("#signupsubmit").removeClass('disabledHref');
             } else {
                 $("#signupsubmit").addClass('disabledHref');
             }
         });
         $('#headerSign').click(function() {
             $('#promotext').css('display', 'none');
             $('#promodisc').val(0);
         });
         $('#mobile').keypress(function(e) {
             var key = e.which;
             if (key == 13) // the enter key code
             {
                 $('#gensignupotp').click();
                 return false;
             }
         });
         $('#mobile').click(function() {
             $('#signuperrmsg').css("display", "none");
         
         });
         $('#signdigit-6').keypress(function(e) {
             var key = e.which;
             if (key == 13) // the enter key code
             {
                 $('#signupsubmit').click();
                 return false;
             }
         });
         $('#signdigit-1').click(function() {
             $('#signuperrmsg1').css("display", "none");
         
         });
         $('#gensignupotp').click(function() {
             var mobile = $("#mobile").val();
             var ctry_code = $("#ctry_code").val();
             <?php if ($this->session->userdata('countryCode') != 'IN') { ?>
                 // if(ctry_code == "+91"){
                 //     $('#errmsg').css("display", "block");
                 //     $('#errmsg').css("color", "red");
                 //     $('#errmsg').text("Please choose correct country code.");
                 //     return false;
                 // }
             <?php } ?>
             $.ajax({
                 url: "<?php echo base_url('front/signup') ?>",
                 type: 'POST',
                 dataType: "json",
                 data: {
                     'mobile': mobile,
                     'ctry_code': ctry_code
                 },
                 success: function(response) {
                     if (response.status == 1) {
                         $.ajax({
                             url: "<?php echo base_url('front/ajax_otp') ?>",
                             type: 'POST',
                             dataType: "json",
                             data: {
                                 'mobile': mobile,
                                 'ctry_code': ctry_code
                             },
                             success: function(response) {
                                 if (response.status == 1) {
                                     $('#signuperrmsg').css("display", "none");
                                     $('#gensignup').css("display", "none");
                                     $('#otpsignup').css("display", "block");
                                     $('#signupMobile').text(mobile);
                                     sessionStorage.setItem('otp', response.otp);
                                 }
                             }
                         });
                     } else {
                         $('#signuperrmsg').css("display", "block");
                         $('#signuperrmsg').css("color", "red");
                         $('#signuperrmsg').text("This phone number is already registered with us.");
                     }
                 }
             });
         });
         
         $('#signupsubmit').click(function() {
             var mobile = $("#mobile").val();
             var email = $("#email").val();
             var name = $("#Name").val();
             var promodisc = $("#promodisc").val();
             var ctry_code = $("#ctry_code").val();
             var otp1 = $("#signdigit-1").val();
             var otp2 = $("#signdigit-2").val();
             // var otp3 = $("#signdigit-3").val();
             // var otp4 = $("#signdigit-4").val();
             var otp5 = $("#signdigit-5").val();
             var otp6 = $("#signdigit-6").val();
             var otp = otp1 + otp2 + otp5 + otp6;
             $.ajax({
                 url: "<?php echo base_url('front/singup') ?>",
                 type: 'POST',
                 dataType: "json",
                 data: {
                     'name': name,
                     'email': email,
                     'mobile': mobile,
                     'otp': otp,
                     'ctry_code': ctry_code,
                     'promodisc': promodisc
                 },
                 success: function(response) {
                     if (response.status == 1) {
                         $('#signuperrmsg1').css("display", "none");
                         $('#signup-dialog').hide();
                         fbq('track', 'CompleteRegistration');
                         gtag_report_conversion('https://www.onegodmed.com/');
                        //  window.location.href = "<?= base_url() ?>talk-to-astrologers/";
                        
                        $('#otpverification').modal('hide');
                        $('#verified').modal('show');
                        
                        
                        setTimeout(function(){
                            window.location.href = "<?= base_url() ?>wallet/";
                         }, 3000);

                    } else {
                         $('#signuperrmsg1').css("display", "block");
                         $('#signuperrmsg1').css("color", "red");
                         $('#signuperrmsg1').text(response.message);
                     }
         
                 }
             });
         
         });
         
         function gtag_report_conversion(url) {
             var callback = function() {
                 if (typeof(url) != 'undefined') {
                     window.location = url;
                 }
             };
             gtag('event', 'conversion', {
                 send_to: 'AW-712496260/SoXsCNHKybkBEISp39MC',
                 event_callback: 'callback'
             });
             return false;
         }
         
         $('#signupeditnumber').click(function() {
             $('#gensignup').css("display", "block");
             $('#otpsignup').css("display", "none");
         });
         
         $('#loginmobile').keypress(function(e) {
             var key = e.which;
             if (key == 13) // the enter key code
             {
                 $('#genotp').click();
                 return false;
             }
         });
         $('#val6').keypress(function(e) {
             var key = e.which;
             if (key == 13) // the enter key code
             {
                 $('.loginsubmit').click();
                 return false;
             }
         });
         
         $('#loginmobile').click(function() {
             $('#errmsg').css("display", "none");
         
         });
         $('.val1').click(function() {
             $('.errmsg1').css("display", "none");
         
         });
         $('#genotp').click(function() {

             
             var mobile = $("#loginmobile").val();

             if(mobile == ''){
                     document.getElementById('mobileno').innerHTML = "Please Enter Your Mobile number";
                     return false;
             }

             
             if(mobile.length < 10){
                     document.getElementById('').innerHTML = "Please Enter Your 10 digit Mobile number";
                     return false;
             }

             var ctry_code = $("#ctry_code").val();
             <?php if ($this->session->userdata('countryCode') != 'IN') { ?>
                 // if(ctry_code == "+91"){
                 //     $('#errmsg').css("display", "block");
                 //     $('#errmsg').css("color", "red");
                 //     $('#errmsg').text("Please choose correct country code.");
                 //     return false;
                 // }
             <?php } ?>
             $.ajax({
                 url: "<?php echo base_url('login/frontlogin') ?>",
                 type: 'POST',
                 dataType: "json",
                 data: {
                     'mobile': mobile,
                     'ctry_code': ctry_code
                 },
                 success: function(response) {
                     if (response.status == 1) {
                         $.ajax({
                             url: "<?php echo base_url('front/ajaxlogin_otp') ?>",
                             type: 'POST',
                             dataType: "json",
                             data: {
                                 'mobile': mobile,
                                 'ctry_code': ctry_code
                             },
                             success: function(response) {
                                 if (response.status == 1) {
                                     $('#errmsg').css("display", "none");
                                     $('#genmobile').css("display", "none");
                                     $('#otpmobile').css("display", "block");
                                     $('#validationcheck').val('');
                                     $('#currentMobile').text(mobile);
                                     sessionStorage.setItem('otp', response.otp);
                                 }
                             }
                         });
                     } else {
                         $.ajax({
                             url: "<?php echo base_url('front/ajaxlogin_otp') ?>",
                             type: 'POST',
                             dataType: "json",
                             data: {
                                 'mobile': mobile,
                                 'ctry_code': ctry_code
                             },
                             success: function(response) {
                                 if (response.status == 1) {
                                     // $('#errmsg').css("display", "none");
                                     // $('#genmobile').css("display", "none");
                                     // $('#otpmobile').css("display", "block");
                                     // sessionStorage.setItem('otp', response.otp);
                                 }
                             }
                         });
                         $('#login-dialog').css("display", "none");
                         $('#login-dialog1').css("display", "none");
                         $(".mfp-close-btn-in").addClass("hideonmobile");
                         $('#validationcheck').val('validationcheck');
                         $('#otpverification').modal('show');
         
                         $('#currentMobile1').text(mobile);
         
                         // $('#errmsg').css("display", "block");
                         // $('#errmsg').css("color", "red");
                         // $('#errmsg').text("This phone number is not registered with us.");
                     }
         
                 }
             });
         
         });
         
         $('.loginsubmit').click(function() {
         
             var mobile = $("#loginmobile").val();
             
             var ctry_code = $("#ctry_code").val();
             var username = $(".username").val();
             var useremail = $(".useremail").val();
             var validationcheck = $("#validationcheck").val();

            
             if (validationcheck != '') {
                 var status = 1;
                 var i_name = $('#Name').val();
                 var email = $('#email').val();
         
         
                 if (i_name == "") {
                     document.getElementById('i_namee').innerHTML = "Please Enter Your Name";
                     status = 0;
                 }
         
                 if (email == "") {
                     document.getElementById('i_email').innerHTML = "Please Enter Your Email";
                     status = 0;
                 }
         
                 if (status == 1) {
                     true;
                 } else {
                     return false;
                 }
             }
         
             var otp1 = $(".val1").val();
             var otp2 = $(".val2").val();
             // var otp3 = $(".val3").val();
             // var otp4 = $(".val4").val();
             var otp5 = $(".val5").val();
             var otp6 = $(".val6").val();
             var otp = otp1 + otp2 + otp5 + otp6;
         
             var otp1 = $("#digit1").val();
             var otp2 = $("#digit2").val();
             // var otp3 = $("#digit3").val();
             // var otp4 = $("#digit4").val();
             var otp5 = $("#digit3").val();
             var otp6 = $("#digit4").val();
             var otp2 = otp1 + otp2 + otp5 + otp6;
             if (otp == '') {
                 otp = otp2;
             }
             console.log(otp);
             $.ajax({
                 url: "<?php echo base_url('login/front_login_code') ?>",
                 type: 'POST',
                 dataType: "json",
                 data: {
                     'mobile': mobile,
                     'otp': otp,
                     'ctry_code': ctry_code,
                     'username': username,
                     'useremail': useremail,
                 },
                 success: function(response) {
                     if (response.status == 1) {
                         $('.errmsg1').css("display", "none");
                         $('#login-dialog').hide();
                         $('#login-dialog1').hide();
                         //  window.location.href = "";
                         
                         if(response.username == ''){
                            $('#otpverification').modal('hide');
                            $('#oops').modal('show');
                         }
                         
                         if(response.username != '') {
                            $('#otpverification').modal('hide');
                            $('#verified').modal('show');
                         }
                         
                        setTimeout(function(){
                            window.location.href = "<?= base_url() ?>wallet/";
                         }, 3000);
                         
                     } else {
                         $('.errmsg1').css("display", "block");
                         $('.errmsg1').css("color", "red");
                         $('.errmsg1').text("Incorrect OTP. Please fill correct OTP");
                     }
         
                 }
             });
         
         });
         
         $('#editnumber').click(function() {
             $('#genmobile').css("display", "block");
             $('#otpmobile').css("display", "none");
         });
         $('#editnumber1').click(function() {
             $('#otpverification').modal('hide');
             $('#genmobile').css("display", "block");
             $('#login-dialog').css("display", "block");
             $('#login-dialog1').css("display", "block");
             $('#login-dialog').show();
             $('#login-dialog1').show();
             $('.mfp-ready').removeClass('hideonmobile');
         });
         
         function check_otp() {
             if ($('#password').val() == $('#cpassword').val()) {
                 if ($('#otp1').val() == sessionStorage.getItem('otp')) {
                     return true;
                 } else {
                     document.getElementById("otp_msg").innerHTML = "Incorrect OTP";
                     return false;
                 }
             } else {
                 document.getElementById("cpass_msg").innerHTML = "Password And Confirm Password Does Not Match";
                 return false;
             }
         }
      </script>
      <script>
         var $logo = $('#scroll_top');
         $(document).scroll(function() {
             if ($(this).scrollTop() > 100) { //alert("scop");
                 //  $logo.css({display: $(this).scrollTop() > 100? "block":"none"});
                 $('#scroll_top').css("display", "block");
             } else {
                 $('#scroll_top').css("display", "none");
             }
         
         });
      </script>
      <!--mobile navigation-->
      <script src="https://rawgit.com/FragCoder/bootstrap-left-slide-menu/master/bootstrap-left-slide-menu.js"></script>
      <script>
         $(document).on("scroll", function() {
             if ($(document).scrollTop() > 86) {
                 $("#banner").addClass("shrink");
             } else {
                 $("#banner").removeClass("shrink");
             }
         });
      </script>
      <!-- validation -->
      <script type="text/javascript">
         function validation1() {
             var status = 1;
             var i_name = $('#Name').val();
             var email = $('#email').val();
         
         
             if (i_name == "") {
                 document.getElementById('i_namee').innerHTML = "Please Enter Your Name";
                 status = 0;
             }
         
             if (email == "") {
                 document.getElementById('i_email').innerHTML = "Please Enter Your Email";
                 status = 0;
             }
         
             if (status == 1) {
                 return true;
             } else {
                 return false;
             }
         }
         
         $(".phoneverification .close").click(function() {
         
             $(".mfp-ready").addClass("hidden");
             $("html").addClass("removeoverflow");
             $(".mfp-close-btn-in").removeClass("hideonmobile");
         });
         
         $(".topbar .login-btn").click(function() {
         
             $(".mfp-ready").removeClass("hidden");
             $("html").removeClass("removeoverflow");
             $("#login-dialog").css({
                 "display": "block"
             });
             $("#login-dialog1").css({
                 "display": "block"
             });
         
         });
         
         $(".phoneverification .close").click(function() {
             if ($(window).width() < 768) {
         
                 $("html").removeClass("removeoverflow");
             }
         });
         
         $("#genotp").click(function() {
             if ($(window).width() < 768) {
                 //   $(".mfp-close-btn-in").addClass("hideonmobile");
             }
         });
         $("#navLogin").click(function() {
             $("#sidebar-wrapper").addClass("sidenav")
             $(".hamburger ").removeClass("is-open");
             $(".hamburger ").addClass("is-closed");
             $("#wrapper").removeClass("toggled")
             $(".overlay").css({
                 "display": "none"
             })
         });
         
         $("#navRecwallet").click(function() {
             $("#sidebar-wrapper").addClass("sidenav")
             $(".hamburger ").removeClass("is-open");
             $(".hamburger ").addClass("is-closed");
             $("#wrapper").removeClass("toggled")
             $(".overlay").css({
                 "display": "none"
             })
         });
         
         //  $(window).scroll(function(event) {
         //      var height = $(this).scrollTop();
         //      var fixedHeader = $("#header-fixed");
         //      var wrpr=$('.full-hearder-wrp');
         
         //      if (height > 180) {
         //          fixedHeader.addClass("show");
         //          wrpr.addClass("hfixed")
         //      } else {
         //          fixedHeader.removeClass("show");
         //          wrpr.removeClass("hfixed")
         //      }
         //  });
         
         //  $("#header-fixed")
         
         // $(".mfp-close").click(function(){
         //     alert("hello")
         //     $("#sidebar-wrapper").removeClass("sidenav")
         // })
         $(".mfp-close").click(function() {
             alert("hello");
         })
         
         $(document).on("click", ".mfp-close", function() {
             $("#sidebar-wrapper").removeClass("sidenav")
         });
         
         $('#userDropdownMenu').click(function(){
             $('.header').toggleClass('z-index')
         });
         
         
         $(document).mouseup(function(e) 
                {
                    var container = $("#userDropdownMenu");
         
                    // if the target of the click isn't the container nor a descendant of the container
                    if (!container.is(e.target) && container.has(e.target).length === 0) 
                    {
                        $('.header').removeClass('z-index')
                    }
                });
      </script>
      <!-- end if validation -->