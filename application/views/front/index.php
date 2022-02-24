<link rel="stylesheet" type="text/css" href="<?= base_url() ?>front-assets/css/homecss.css">
<script>
   $(document).ready(function() {
       $(".horoscope-section .owl-carousel").owlCarousel({
           margin: 10,
           nav: true,
           slideBy: 1,
           navText: ["<img src='front-assets/images/header/icon-left.png'>", "<img src='front-assets/images/header/icon-right.png'>"],
           responsive: {
               0: {
                   items: 3,
               },
               600: {
                   items: 3,
               },
               1000: {
                   items: 6,
               },
           },
       });
   });
</script>
<div class="hero-section">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
         <div class="item active">
            <img id="carousel-banner-1" src="front-assets/images/banner-1.jpg" alt="onegod" style="width:100%;">
            <div class="carousel-caption d-none d-md-block">
               <h4 class="animate__animated animate__backInUp">India's Best <br> Live Astrology Consulting Platform</h4>
               <h3 class="animate__animated animate__backInUp">Get upto 100% Cashback <sup>*</sup> & 1 minute Free</h3>
               <p class="animate__animated animate__backInUp">For first recharge only.</p>
            </div>
         </div>
         <div class="item">
            <img id="carousel-banner-2" src="front-assets/images/banner-2.jpg" alt="onegod" style="width:100%;">
            <div class="carousel-caption d-none d-md-block">
               <h1 class="animate__animated animate__backInUp text-white">Get ready for new transition in 2022</h1>
               <p class="animate__animated animate__backInUp">Get Guidance from the best Astrologers</p>
            </div>
         </div>
         <div class="item">
            <img id="carousel-banner-3" src="front-assets/images/banner-3.jpg" alt="onegod" style="width:100%;">
            <div class="carousel-caption d-none d-md-block">
               <h1 class="animate__animated animate__backInUp">Talk to India's Best Astrologers</h1>
               <p class="animate__animated animate__backInUp">Starting just Rs 5/min.</p>
            </div>
         </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a>
   </div>
</div>
<div class="call-to-action">
   <div class="container">
      <?php if ($this->session->userdata('id')) { ?>
      <div class="box">
         <span class="title">Your Astrologer is just 60 sec away <strong class="color-primary">Login</strong> for <strong class="color-primary">Free</strong> & talk to Astrologer</span>
         <a href="<?= base_url() ?>talk-to-astrologers/" class="btn btn-default btn-rounded btn-shadowed text-uppercase">Talk Now</a>
      </div>
      <?php } else { ?>
      <div class="box">
         <span class="title">Your Astrologer is just 60 sec away <strong class="color-primary">Login</strong> for <strong class="color-primary">Free</strong> & talk to Astrologer</span>
         <a href="#login-dialog" class="btn btn-default btn-rounded btn-shadowed text-uppercase">Login for free</a>
      </div>
      <?php } ?>
   </div>
</div>
<div class="horoscope-section">
   <div class="container">
      <h2 class="title">Free Daily <span>Horoscope</span></h2>
      <div id="horoscope-carousel" class="owl-carousel owl-theme">
         <div class="item">
            <div class="horoscope-card">
               <a href="<?= base_url() ?>horoscopes/sunsign/daily/aries/">
                  <div class="card">
                     <img src="<?php base_url() ?>assets/categories_image/icon/icon-Aries.png" alt="Aries">
                     <span class="name">Aries</span>
                     <span class="date">21/3 - 19/4</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="item">
            <div class="horoscope-card">
               <a href="<?= base_url() ?>horoscopes/sunsign/daily/gemini/">
                  <div class="card">
                     <img src="<?php base_url() ?>assets/categories_image/icon/icon-Gemini.png" alt="Gemini">
                     <span class="name">Gemini</span>
                     <span class="date">21/5 - 20/6</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="item">
            <div class="horoscope-card">
               <a href="<?= base_url() ?>horoscopes/sunsign/daily/cancer/">
                  <div class="card">
                     <img src="<?php base_url() ?>assets/categories_image/icon/icon-Cancer.png" alt="Cancer">
                     <span class="name">Cancer</span>
                     <span class="date">21/6 - 22/7</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="item">
            <div class="horoscope-card">
               <a href="<?= base_url() ?>horoscopes/sunsign/daily/leo/">
                  <div class="card">
                     <img src="<?php base_url() ?>assets/categories_image/icon/icon-Leo.png" alt="Leo">
                     <span class="name">Leo</span>
                     <span class="date">23/7 - 22/8</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="item">
            <div class="horoscope-card">
               <a href="<?= base_url() ?>horoscopes/sunsign/daily/virgo/">
                  <div class="card">
                     <img src="<?php base_url() ?>assets/categories_image/icon/icon-Virgo.png" alt="Virgo">
                     <span class="name">Virgo</span>
                     <span class="date">23/7 - 22/8</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="item">
            <div class="horoscope-card">
               <a href="<?= base_url() ?>horoscopes/sunsign/daily/libra/">
                  <div class="card">
                     <img src="<?php base_url() ?>assets/categories_image/icon/icon-Libra.png" alt="Libra">
                     <span class="name">Libra</span>
                     <span class="date">23/9 - 22/10</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="item">
            <div class="horoscope-card">
               <a href="<?= base_url() ?>horoscopes/sunsign/daily/scorpio/">
                  <div class="card">
                     <img src="<?php base_url() ?>assets/categories_image/icon/icon-Libra.png" alt="Scorpio">
                     <span class="name">Scorpio</span>
                     <span class="date">23/10 - 21/11</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="item">
            <div class="horoscope-card">
               <a href="<?= base_url() ?>horoscopes/sunsign/daily/sagittarius/">
                  <div class="card">
                     <img src="<?php base_url() ?>assets/categories_image/icon/icon-Sagittarius.png" alt="Sagittarius">
                     <span class="name">Sagittarius</span>
                     <span class="date">22/11 - 21/12</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="item">
            <div class="horoscope-card">
               <a href="<?= base_url() ?>horoscopes/sunsign/daily/capricorn/">
                  <div class="card">
                     <img src="<?php base_url() ?>assets/categories_image/icon/icon-Capricorn.png" alt="Capricorn">
                     <span class="name">Capricorn</span>
                     <span class="date">23/9 - 22/10</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="item">
            <div class="horoscope-card">
               <a href="<?= base_url() ?>horoscopes/sunsign/daily/aquarius/">
                  <div class="card">
                     <img src="<?php base_url() ?>assets/categories_image/icon/icon-Aquarius.png" alt="Aquarius">
                     <span class="name">Aquarius</span>
                     <span class="date">20/01 - 18/02</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="item">
            <div class="horoscope-card">
               <a href="<?= base_url() ?>horoscopes/sunsign/daily/pisces/">
                  <div class="card">
                     <img src="<?php base_url() ?>assets/categories_image/icon/icon-Pisces.png" alt="Pisces">
                     <span class="name">Pisces</span>
                     <span class="date">19/02 - 20/03</span>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>
<?php if ($this->session->userdata('user_type') != 'Astrologer') { ?>
<section class="ast_team_wrapper1 ast_toppadder70 ast_bottompadder50 home_exprt" style="background:#fff;">
   <div class="container">
      <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
         <div class="ast_heading">
            <h1>Our <span>Online Astrologers</span></h1>
            <p>With the guidance of our verified experts, listen to the language of the stars and planets and determine whether they will shed light on you or cause darkness in your future years!</p>
         </div>
      </div>
      <div class="clearfix"></div>
      <div id="owl-demo" class="owl-carousel owl-theme">
         <?php
            $this->db->select('*');
            
            $this->db->from('author');
            
            $this->db->where('user_type', 'Astrologer');
            
            $this->db->where('status', 'Online');
            $this->db->order_by('rand()');
            $this->db->limit(10);
            
            $query = $this->db->get();
            
            $astro = $query->result();
            
            foreach ($astro as $row) {
            ?>
         <div class="item">
            <div class="ast_team_box">
               <div class="row teat_info">
                  <div class="col-md-12 col-xs-12"> <a href="<?php echo base_url('astrologer/' . $row->astro_slug . '/') ?>"><img src="<?php echo base_url('admin-assets/assets/images/users/' . $row->image) ?>" alt="team"></a> </div>
                  <div class="col-md-12 col-xs-12" style="text-align: center;">
                     <h4><a href="<?php echo base_url('astrologer/' . $row->astro_slug . '/') ?>"><?php echo $row->name; ?></a></h4>
                     <div class="row">
                        <div class="">
                           <div class="star-rating">
                              <?php
                                 $rating1 = $this->db->query("SELECT AVG(rating) as rating FROM rating WHERE `user_id` ='" . $row->id . "'")->result();
                                 $rating = round($rating1[0]->rating);
                                 
                                 for ($i = 0; $i < 5; $i++) {
                                     if ($i < $rating) {
                                         $tmp_class = 'fa fa-star';
                                     } else {
                                         $tmp_class = 'fa fa-star-o';
                                     }
                                 ?>
                              <span class="<?php echo $tmp_class ?>" data-rating="1"></span>
                              <?php } ?>
                              <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <p class="expertise"><?php echo $row->expertise; ?></p>
               <a class="a available" href="<?php echo base_url('astrologer/' . $row->astro_slug . '/') ?>">Online</a> <a class="a"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Experience : <strong><?php echo $row->experience ?></strong> </a> <a class="a"><i class="fa fa-language" aria-hidden="true"></i> Language : <br />
               <strong><?php echo $row->langknown ?></strong> </a> <br>
            </div>
         </div>
         <?php } ?>
      </div>
      <div class="text-center"> <a href="<?= base_url() ?>talk-to-astrologers/" class="ast_btn ">View All</a> </div>
   </div>
</section>
<?php } ?>
<section class="services ast_toppadder70 ast_bottompadder70 main_servece home_blog">
   <div class="container table-responsive">
      <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
         <div class="ast_heading">
            <h2>Free <span>Kundali & Match Making</span></h2>
            <p>With the guidance of our verified experts, listen to the language of the stars and planets and determine whether they will shed light on you or cause darkness in your future years!</p>
         </div>
      </div>
      <div class="row">
         <div class="services1 new-design">
            <div class="col-md-3 col-xs-6">
               <div class="ast_blog_box">
                  <div class="ast_blog_img">
                        <div class="service-img">
                            <img src="<?php echo base_url(); ?>front-assets/images/kundali.png" alt="Free Kundali" title="Free Kundali">
                            <div class="s-description">
                                <h3>Free Kundali</h3>
                                <a href="<?= base_url() ?>free-kundali/">Get Your Free Kundali</a>
                            </div>
                        </div>
                        <p>Get your free kundali by Date of birth & Time</p>
                  </div>
               </div>
            </div>

            <div class="col-md-3 col-xs-6">
               <div class="ast_blog_box">
                  <div class="ast_blog_img">
                        <div class="service-img">
                            <img src="<?php echo base_url(); ?>front-assets/images/match-making.png" alt="Match Making" title="Match Making">
                            <div class="s-description">
                                <h3>Match Making</h3>
                                <a href="<?= base_url() ?>kundali-match-making/">Check Your Compatibilty</a>
                            </div>
                        </div>
                        <p>Match your astrological blue print with partner for Date,Love & Marriage</p>
                  </div>
                 
               </div>
            </div>


            <div class="col-md-3 col-xs-6">
               <div class="ast_blog_box">
                  <div class="ast_blog_img">
                        <div class="service-img">
                            <img src="<?php echo base_url(); ?>front-assets/images/calculator.png" alt="Numerology Calculator" title="Numerology Calculator">
                            <div class="s-description">
                                <h3>Numerology Calculator</h3>
                                <a href="<?= base_url() ?>numerology/">Numerology Calculator</a>
                            </div>
                        </div>
                        <p>Check your free Numerology Predictions</p>
                  </div>
                  
               </div>
            </div>


            <div class="col-md-3 col-xs-6">
               <div class="ast_blog_box">
                  <div class="ast_blog_img">
                    <div class="service-img">
                    <img src="<?php echo base_url(); ?>front-assets/images/punchang.png" alt="Panchang" title="BPanchanglog">
                            <div class="s-description">
                                <h3>Panchang</h3>
                                <a href="<?= base_url() ?>panchang/">Check Daily free Panchang</a>
                            </div>
                        </div>
                        <p>Get today's Panchang,Hora & Auspicious Time</p>
                  </div>
                 
               </div>
            </div>
            
         </div>
      </div>
   </div>
</section>
<!--About Us Start-->

<!--About Us End-->
<div class="ast_overview_wrapper ast_toppadder100 ast_bottompadder100">
   <div class="ast_img_overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
            <div class="ast_heading" style="margin-top: 16px">
               <h2><span style="color:#fff">How We<span> <span>Work</span></h2>
            </div>
         </div>
         <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
               <div class=" col-md-3 col-xs-12">
                  <div class="ingGray"></div>
                  <div class="GrayColor_light_a  font14 line17 ">
                     <a class="popup-with-zoom-anim Decoration_none" href="#login-dialog">
                        <div class="glowing_icon pty">
                           <span class="sprite-consult sprite-consult_sign_white" title="Please Signup/Login...">
                           <img alt="review-icon" src="<?= base_url() ?>front-assets/images/login-icon.png">
                           </span>
                        </div>
                        <div class="clearfix"></div>
                        <span class="GrayColor_light_a font12Mobile">Login with <br> onegodmed</span>
                     </a>
                  </div>
               </div>
               <div class=" col-md-3 col-xs-12">
                  <div class="ingGray"></div>
                  <div class=" line17  text-center">
                     <a class="Decoration_none pty">
                        <span class="sprite-consult sprite-consult_wallet_white" title="You should have sufficient balance in your wallet to connect with astrologer..">
                        <img src="<?= base_url() ?>front-assets/images/wallet-icon.png" alt="wallet-icon">
                        </span>
                        <div class="clearfix"></div>
                        <span class="GrayColor_light_a font12Mobile">Recharge <br> your wallet</span>
                     </a>
                  </div>
               </div>
               <div class=" col-md-3 col-xs-12">
                  <div class="ingGray"></div>
                  <div class=" font14 line17  text-center ">
                     <a class="Decoration_none pty">
                        <span class="sprite-consult sprite-consult_call_white">
                        <img alt="review-icon" src="<?= base_url() ?>front-assets/images/receive-call-icon.png">
                        </span>
                        <div class="clearfix"></div>
                        <span class="GrayColor_light_a font12Mobile">Click on Start Call & <br> Receive an instant call</span>
                     </a>
                     <div class="clearfix"></div>
                  </div>
               </div>
               <div class=" col-md-3 col-xs-12">
                  <div class=" font14 line17  text-center">
                     <a class="Decoration_none pty">
                        <span class="sprite-consult sprite-consult_call_white">
                        <img alt="review-icon" src="<?= base_url() ?>front-assets/images/rate-icon.png">
                        </span>
                        <div class="clearfix"></div>
                        <span class="GrayColor_light_a font12Mobile">Rate & <br> Review</span>
                     </a>
                     <div class="clearfix"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--WhyWe Us Start-->
<div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
            <div class="ast_heading">
               <h2>Why <span>Choose Us</span></h2>
               <p>By unraveling foreshow of fate, our adroit team of experts will ascertain the hidden factors affecting your life and mold it with accurate remedial solutions!</p>
            </div>
         </div>
         <div class="ast_whywe_info">
            <!--mobile start-->
            <div class="mobile-ga">
               <div id="owl-example" class="owl-carousel ">
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="ast_whywe_info_box">
                        <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_1.png" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                           <p>Live Video & Audio consultation </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="ast_whywe_info_box">
                        <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_2.png" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                           <p>90+ Verified Experts</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="ast_whywe_info_box">
                        <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_3.png" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                           <p>Instant access worldwide</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="ast_whywe_info_box">
                        <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_4.png" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                           <p>Accurate remedial solutions</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="ast_whywe_info_box">
                        <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_5.png" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                           <p> Privacy Guaranteed & 100 % Secure payment</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="ast_whywe_info_box">
                        <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_6.png" alt=""></span>
                        <div class="ast_whywe_info_box_info">
                           <p>Trusted by thousands Clients</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--mobile end-->
            <div class="deskt21">
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="ast_whywe_info_box">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_1.png" alt=""></span>
                     <div class="ast_whywe_info_box_info">
                        <p>Live Video & Audio consultation </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="ast_whywe_info_box">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_2.png" alt=""></span>
                     <div class="ast_whywe_info_box_info">
                        <p>90+ Verified Experts</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="ast_whywe_info_box">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_3.png" alt=""></span>
                     <div class="ast_whywe_info_box_info">
                        <p>Instant access worldwide</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="ast_whywe_info_box">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_4.png" alt=""></span>
                     <div class="ast_whywe_info_box_info">
                        <p>Accurate remedial solutions</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="ast_whywe_info_box">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_5.png" alt=""></span>
                     <div class="ast_whywe_info_box_info">
                        <p> Privacy Guaranteed & 100 % Secure payment</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="ast_whywe_info_box">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_6.png" alt=""></span>
                     <div class="ast_whywe_info_box_info">
                        <p>Trusted by thousands Clients</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="ast_timer_wrapper ast_toppadder70 ast_bottompadder40" style="background: url(front-assets/images/content/timer_bg.jpg);">
   <div class="ast_img_overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
            <div class="ast_heading">
               <h2 style="color: #fff;">Now <span>We Have</span></h2>
               <p>To get the true meaning of celestial body existing in the Sublunary world; we, with our 20 glorious years of expericance, house 90+ experts and have covered 12 countries.</p>
            </div>
         </div>
      </div>
      <div class="mobile-ga">
         <div class="row ">
            <div id="owl-example1" class="owl-carousel">
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="ast_counter">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_1.png" alt="timer"></span>
                     <h2 class="timer" data-from="0" data-to="80000" data-speed="5000"></h2>
                     <h4>Smile Delivered</h4>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="ast_counter">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_2.png" alt="timer"></span>
                     <h2 class="timer" data-from="0" data-to="90" data-speed="5000">+</h2>
                     <h4>Skilled Experts</h4>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="ast_counter">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_3.png" alt="timer"></span>
                     <h2 class="timer" data-from="0" data-to="12" data-speed="5000"></h2>
                     <h4>Countries Covered</h4>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="ast_counter">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_4.png" alt="timer"></span>
                     <h2 class="timer" data-from="0" data-to="20" data-speed="5000">+</h2>
                     <h4>Years of Experiences</h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="deskt21">
         <div class="row">
            <div class="ast_counter_wrapper">
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="ast_counter">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_1.png" alt="timer"></span>
                     <h2 class="timer" data-from="0" data-to="80000" data-speed="5000"></h2>
                     <h4>Smile Delivered</h4>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="ast_counter">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_2.png" alt="timer"></span>
                     <h2 class="timer" data-from="0" data-to="90" data-speed="5000">+</h2>
                     <h4>Skilled Experts</h4>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="ast_counter">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_3.png" alt="timer"></span>
                     <h2 class="timer" data-from="0" data-to="12" data-speed="5000"></h2>
                     <h4>Countries Covered</h4>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="ast_counter">
                     <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_4.png" alt="timer"></span>
                     <h2 class="timer" data-from="0" data-to="20" data-speed="5000">+</h2>
                     <h4>Years of Experiences</h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<style type="text/css">
   .ast_overview_info h2 {
   float: left;
   width: 350px;
   color: #fff;
   margin: 50px 0;
   }
   .ast_overview_info h2 span {
   color: #ff8820;
   }
   .ast_bannertext_wrapper h2 {
   margin-top: 20px;
   font-weight: bold;
   font-size: 40px;
   text-transform: uppercase;
   float: left;
   width: 100%;
   color: #fff;
   }
</style>
<!-- Overview wrapper end -->
<script>
   $('.Show').click(function() {
       $('#target').show(500);
       $('.Show').hide(0);
       $('.Hide').show(0);
   });
   $('.Hide').click(function() {
       $('#target').hide(500);
       $('.Show').show(0);
       $('.Hide').hide(0);
   });
   $('.toggle').click(function() {
       $('#target').toggle('slow');
   });
</script>
<script>
   $(document).ready(function() {
   
       for (var i = 1; i <= $('.slider__slide').length; i++) {
   
           $('.slider__indicators').append('<div class="slider__indicator" data-slide="' + i + '"></div>')
   
       }
   
       setTimeout(function() {
   
           $('.slider__wrap').addClass('slider__wrap--hacked');
   
       }, 1000);
   
   })
   
   
   
   function goToSlide(number) {
   
       $('.slider__slide').removeClass('slider__slide--active');
   
       $('.slider__slide[data-slide=' + number + ']').addClass('slider__slide--active');
   
   }
   
   
   
   $('.slider__next, .go-to-next').on('click', function() {
   
       var currentSlide = Number($('.slider__slide--active').data('slide'));
   
       var totalSlides = $('.slider__slide').length;
   
       currentSlide++
   
       if (currentSlide > totalSlides) {
   
           currentSlide = 1;
   
       }
   
       goToSlide(currentSlide);
   
   })
   
   
   
   
   
   setInterval(function() {
       $('#next_slide').trigger('click');
   }, 9000);
</script>
<script>
   $(document).ready(function() {
   
       $('#owl-carousel').owlCarousel({
           loop: true,
           margin: 10,
           nav: false,
           responsive: {
               0: {
                   items: 1
               },
               600: {
                   items: 1
               },
               1000: {
                   items: 1
               }
           }
       });
   
       $(".owl-carousel").owlCarousel({
           nav: true,
           navText: ["<img src='front-assets/images/header/icon-left.png'>", "<img src='front-assets/images/header/icon-right.png'>"],
           responsive: {
               0: {
                   items: 1
               },
               600: {
                   items: 1
               },
               1000: {
                   items: 4
               }
           }
       });
       $('.owl-carousel').owlCarousel({
           loop: true,
           margin: 10,
           nav: true,
   
           responsive: {
               0: {
                   items: 1
               },
               600: {
                   items: 1
               },
               1000: {
                   items: 4
               }
           }
       });
       $('.owl-example').owlCarousel({
           loop: true,
           margin: 10,
           nav: true,
           responsive: {
               0: {
                   items: 1
               },
               600: {
                   items: 1
               },
               1000: {
                   items: 1
               }
           }
       });
   });
   $(document).ready(function() {
       $(".btn-pref .btn").click(function() {
           $(".btn-pref .btn").removeClass("btn-warning").addClass("btn-default");
           // $(".tab").addClass("active"); // instead of this do the below 
           $(this).removeClass("btn-default").addClass("btn-warning");
       });
       $('.popup-with-zoom-anim').magnificPopup({
           type: 'inline',
           midClick: true,
           mainClass: 'mfp-fade',
           focus: 'input#loginmobile'
       });
   });
</script>