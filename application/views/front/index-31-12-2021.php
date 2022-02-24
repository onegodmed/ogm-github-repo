<link rel="stylesheet" type="text/css" href="<?= base_url() ?>front-assets/css/homecss.css"> 

<div class="ast_slider_wrapper homechanges">
    <div class="ast_banner_text">
       
        <div class="container">
            <!--new -->
            <div class="row">
                <div class="col-md-12">
                    <div class="hors-btn">
                        <ul>
                            <li><a href="<?= base_url() ?>talk-to-astrologers/" >Talk To Astrologers</a></li>
                            <!-- <li><a href="<?php echo base_url(); ?>chat-with-astrologer/"> Chat with Astrologers</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!--new -->
            <!-- carousel start -->
            <div class="row">
                <div class="col-lg-12 mt-3 mb-3 line-25">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner carou-3">
                            <div class="item active"> <img src="front-assets/images/header/astro-banner.png" alt="onegod" style="width:100%;"> </div>
                            <div class="item"> <img src="front-assets/images/header/astro-banner1.png" alt="onegod" style="width:100%;"> </div>
                            <div class="item"> <img src="front-assets/images/header/astro-banner2.png" alt="onegod" style="width:100%;"> </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a> </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if (!$this->session->userdata('id')) { ?>
                                <div class="tabclr12 br-radius-7">
                                    <div class=" col-md-9">
                                        <div class="pgd28"> <span >Your Astrologer is Just 60 Sec Away</span> <strong class="GrayColor pgd29">Login</strong> for <strong class="GrayColor pgd29">Free</strong> &amp; talk to Astrologer </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text-center topbtm15"> <a class="popup-with-zoom-anim cursor-pointer sign_up_warning" href="#login-dialog">Login</a> </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            <?php } else { ?>
                                <div class="tabclr12 br-radius-7">
                                    <div class=" col-md-9">
                                        <div class="pgd28"> <span >Your Astrologer is Just 60 Sec Away</span> <strong class="GrayColor pgd29">Talk to an </strong> Astrologer <strong class="GrayColor pgd29">just</strong> using 3 simple steps </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text-center topbtm15"> <a class="ast_btn" href="<?= base_url() ?>talk-to-astrologers/" >Talk to Astrologer</a> </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="ast_bannertext_wrapper">
                <div class="ast_testimonials_slider">
                    <div  id="owl-demo1" class="owl-carousel2 owl-theme">
                        <div class="item">
                            <div class="ast_testimonials_slider_box">
                                <h2>Free daily horoscope</h2>
                                <div class="btbm"></div>
                                <div class="ast_whywe_info">
                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                        <div class="tabbable-panel">
                                            <div class="tabbable-line">
                                                <div class="tab-content1" style="position:relative; top:30px;">
                                                    <div class="tab-pane active" id="tab_default_1">
                                                        <div class="row clrs1">
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/aries/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-Aries.png" class="img-responsive" alt="Aries"><span class="rajshree">ARIES</span><br>
                                                                    21/3 - 19/4</a></div>
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/taurus/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-Taurus.png" class="img-responsive" alt="Taurus"><span class="rajshree">TAURUS</span><br>
                                                                    20/4 - 20/5</a></div>
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/gemini/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-Gemini.png" class="img-responsive" alt="Gemini"><span class="rajshree">GEMINI</span><br>
                                                                    21/5 - 20/6</a></div>
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/cancer/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-cancer.png" class="img-responsive" alt="Cancer"><span class="rajshree">CANCER</span><br>
                                                                    21/6 - 22/7</a></div>
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/leo/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-Leo.png" class="img-responsive" alt="Leo"><span class="rajshree">LEO</span><br>
                                                                    23/7 - 22/8</a></div>
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/virgo/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-Virgo.png" class="img-responsive" alt="Virgo"><span class="rajshree">VIRGO</span><br>
                                                                    23/8 - 22/9</a></div>
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/libra/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-Libra.png" class="img-responsive" alt="Libra"><span class="rajshree">LIBRA</span><br>
                                                                    23/9 - 22/10</a></div>
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/scorpio/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-Scorpio.png" class="img-responsive" alt="Scorpio"><span class="rajshree">SCORPIO</span><br>
                                                                    23/10 -21/11</a></div>
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/sagittarius/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-Sagittarius.png" class="img-responsive" alt="Sagittarius"><span class="rajshree">SAGITTARIUS</span><br>
                                                                    22/11 - 21/12</a></div>
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/capricorn/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-Capricorn.png" class="img-responsive" alt="Capricorn"><span class="rajshree">CAPRICORN</span><br>
                                                                    22/12 - 19/1</a></div>
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/aquarius/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-Aquarius.png" class="img-responsive" alt="Aquarius"><span class="rajshree">AQUARIUS</span><br>
                                                                    20/1 - 18/2</a></div>
                                                            <div class="col-xs-4 col-sm-3 col-md-1"><a href="<?= base_url() ?>horoscopes/sunsign/daily/pisces/"><img src="<?= base_url() ?>assets/categories_image/icon/icon-Pisces.png" class="img-responsive" alt="Pisces"><span class="rajshree">PISCES</span><br>
                                                                    19/2 - 20/3</a></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                 <!--<ul class=" ast_bottompadder50">
                                   		<li>horoscopes</li>
                  
                                                          <li>gemstones</li>
                  
                                                          <li>numerology</li>
                                </ul> -->
                            <!-- </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!--Slider End-->
<div class="clearfix"></div>
<?php if ($this->session->userdata('user_type') != 'Astrologer') { ?>
    <section  class="ast_team_wrapper1 ast_toppadder70 ast_bottompadder50 home_exprt"  style="background:#fff;">
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
<!-- <section class="services ast_toppadder70 ast_bottompadder70 main_servece home_blog">
    <div class="container table-responsive">
        <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
            <div class="ast_heading">
                <h2>Free <span>Kundali & Match Making</span></h2>
                <p>With the guidance of our verified experts, listen to the language of the stars and planets and determine whether they will shed light on you or cause darkness in your future years!</p>
            </div>
        </div>



        <div class="row">
            <div class="services1">
                <div class="col-md-3">
                    <div class="ast_blog_box">

                        <div class="ast_blog_img">

                            <a href="<?= base_url() ?>free-kundali/"><img src="<?php echo base_url(); ?>front-assets/images/servicek.jpg" alt="Free Kundali" title="Free Kundali"></a>

                        </div>

                        <div class="ast_blog_info">

                            <h3 class="ast_blog_info_heading"><a href="<?= base_url() ?>free-kundali/">Free Kundali</a></h3>

                            <p class="ast_blog_info_details">Get your free kundali by Date of birth and Birth time</p>

                            <a class="ast_btn" href="<?= base_url() ?>free-kundali/">Get your Free kunadli</a>

                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ast_blog_box">

                        <div class="ast_blog_img">

                            <a href="<?= base_url() ?>kundali-match-making/"><img src="<?php echo base_url(); ?>front-assets/images/servicem.jpg" alt="Match Making" title="Match Making"></a>

                        </div>

                        <div class="ast_blog_info">

                            <h3 class="ast_blog_info_heading"><a href="<?= base_url() ?>kundali-match-making/">Match Making</a></h3>

                            <p class="ast_blog_info_details">Match Your Astrological blue print with your partner. Check Your Compatibility for Date, Love & Marriage</p>

                            <a class="ast_btn" href="<?= base_url() ?>kundali-match-making/">Check Your Compatibility</a>

                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="ast_blog_box">

                        <div class="ast_blog_img">

                            <a href="<?= base_url() ?>numerology/"><img src="<?php echo base_url(); ?>front-assets/images/servicen.jpg" alt="Numerology Calculator" title="Numerology Calculator"></a>

                        </div>

                        <div class="ast_blog_info">

                            <h3 class="ast_blog_info_heading"><a href="<?= base_url() ?>numerology/">Numerology Calculator</a></h3>

                            <p class="ast_blog_info_details">Check your Free Numerology Predictions</p>

                            <a class="ast_btn" href="<?= base_url() ?>numerology/">Numerology Calculator</a>

                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="ast_blog_box">

                        <div class="ast_blog_img">

                            <a href="<?= base_url() ?>panchang/"><img src="<?php echo base_url(); ?>front-assets/images/servicep.jpg" alt="Panchang" title="BPanchanglog"></a>

                        </div>

                        <div class="ast_blog_info">

                            <h3 class="ast_blog_info_heading"><a href="<?= base_url() ?>panchang/">Panchang</a></h3>

                            <p class="ast_blog_info_details">Get Today's Panchang, Hora & Auspicious Time</p>

                            <a class="ast_btn" href="<?= base_url() ?>panchang/">Check Free Daily Panchang</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section> -->
<!--About Us Start-->
<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                <div class="ast_heading">
                    <h1>About <span>Us</span></h1>
                    <p>onegodmed.com is the one-stop solution for all your future worries regarding every primary aspects of your life.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 desk">
                <div class="ast_about_info">
                    <h4>know About Us</h4>
                    <p>Having a holistic approach to life is the key to happiness, satisfaction, and overall wellbeing. That very approach can be attained by tapping the spirituality present in the surroundings. There are tons of ways by which one can attain spirituality, by knowing what’s best for themselves, by identifying and embracing the soul within. </p>
                    <p>At onegodmed.com, we assist those looking forward to giving meaning to their lives through the spiritual means; by connecting with the divine, by exploring the positive energy. We help individuals gain insights about various aspects of life that play an important role, such as health, business, family, love, and commitment<span id="dots">...</span><span id="more"><br>
                            <br>
                            The name signifies that there is one God who has created the universe; and that ONE God has ONE medicine which cures lives, and it is called spiritual wellbeing. <br>
                            <br>
                        </span></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 desk">
                <div class="ast_about_info_img">
                    <h4>Our vision</h4>
                    <p>Being one of a kind, onegodmed.com is the first global spiritual platform that provides answers to all your questions regarding the various facets of life, and thus attaining better insights about spiritual contentment.</p>

                    <h4>Our mission </h4>
                    <p>At onegodmed.com, we continuously strive to make the world a better place by helping people across the globe achieve spiritual wellbeing as they discover what life has in store for them.</p> 

                    <p>onegodmed.com strongly believes in the Power of God and helps imbibe that very belief into individuals who are unable to find the correct path. Our team houses the best spiritual experts, holding experience and expertise in their respective fields, ready to guide you at every step of your life.</p> </div>
            </div>


            <div class="col-lg-12 col-md-12 mobile_about">



                <div class="col-lg-12 col-md-12">

                    <div class="ast_about_info">

                        <h4>know About Us</h4>

                        <p>Having a holistic approach to life is the key to happiness, satisfaction, and overall wellbeing. That very approach can be attained by tapping the spirituality present in the surroundings. There are tons of ways by which one can attain spirituality, by knowing what’s best for themselves, by identifying and embracing the soul within. </p>

                        <p>At onegodmed.com, we assist those looking forward to giving meaning to their lives through the spiritual means; by connecting with the divine, by exploring the positive energy. We help individuals gain insights about various aspects of life that play an important role, such as health, business, family, love, and commitment<br><br>

                            The name signifies that there is one God who has created the universe; and that ONE God has ONE medicine which cures lives, and it is called spiritual wellbeing.</p> <br><br>

                        <div id="target"><strong>Our vision</strong> <br>

                            Being one of a kind, onegodmed.com is the first global spiritual platform that provides answers to all your questions regarding the various facets of life, and thus attaining better insights about spiritual contentment. <br><br>

                            <strong>Our mission </strong><br>

                            At onegodmed.com, we continuously strive to make the world a better place by helping people across the globe achieve spiritual wellbeing as they discover what life has in store for them. 

                            onegodmed.com strongly believes in the Power of God and helps imbibe that very belief into individuals who are unable to find the correct path. Our team houses the best spiritual experts, holding experience and expertise in their respective fields, ready to guide you at every step of your life. </div>

                        <a class="ast_btn Show">Read more</a>

                        <a class="ast_btn Hide">Read less</a>

                    </div>

                </div>

            </div>







        </div>
    </div>
</div>
<!--About Us End-->

<div class="ast_overview_wrapper ast_toppadder100 ast_bottompadder100">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                <div class="ast_heading">
                    <h2><span style="color:#fff">How We<span> <span>Work</span></h2>
                </div>
            </div>
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class=" col-md-3 col-xs-12">
                        <div class="ingGray"></div>
                        <div class="GrayColor_light_a  font14 line17 "> <a class="popup-with-zoom-anim Decoration_none" href="#login-dialog">
                                <div class="glowing_icon pty"> <span class="sprite-consult sprite-consult_sign_white" title="Please Signup/Login...">
                                <img alt="review-icon" src="<?= base_url() ?>front-assets/images/header/chat-images-home.png">
                                </span> </div>
                                <div class="clearfix"></div>
                                <span class="GrayColor_light_a font12Mobile">Login with onegodmed</span> </a> </div>
                    </div>
                    <div class=" col-md-3 col-xs-12">
                        <div class="ingGray"></div>
                        <div class=" line17  text-center"> <a class="Decoration_none pty"> <span class="sprite-consult sprite-consult_wallet_white" title="You should have sufficient balance in your wallet to connect with astrologer.."></span>
                                <div class="clearfix"></div>
                                <div class=""><span class="GrayColor_light_a ">Recharge your wallet</span> </div>
                            </a> </div>
                    </div>
                    <div class=" col-md-3 col-xs-12">
                        <div class="ingGray"></div>
                        <div class=" font14 line17  text-center "> <a class="Decoration_none pty"> <span class="sprite-consult sprite-consult_call_white">
                        <img alt="review-icon" src="<?= base_url() ?>front-assets/images/header/call-and-chat-icon.png">
                        </span>
                        
                                <div class="clearfix"></div>
                                <span class="GrayColor_light_a font12Mobile">Click on Start Call & Receive an instant call</span></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class=" col-md-3 col-xs-12">
                        <div class=" font14 line17  text-center"> <a class="Decoration_none pty"> <span class="sprite-consult1 sprite-consult_call_white"></span> <img alt="review-icon" src="<?= base_url() ?>front-assets/images/header/review-icon.png">
                                <div class="clearfix"></div>
                                <span class="GrayColor_light_a font12Mobile">Rate &amp; Review</span></a>
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
                            <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_1.png" alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p>Live Video & Audio consultation </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_2.png" alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p>90+ Verified Experts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_3.png" alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p>Instant access worldwide</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_4.png" alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p>Accurate remedial solutions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_5.png" alt=""></span>
                                <div class="ast_whywe_info_box_info">
                                    <p> Privacy Guaranteed & 100 % Secure payment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_6.png" alt=""></span>
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
                        <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_1.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <p>Live Video & Audio consultation </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_2.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <p>90+ Verified Experts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_3.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <p>Instant access worldwide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_4.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <p>Accurate remedial solutions</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_5.png" alt=""></span>
                            <div class="ast_whywe_info_box_info">
                                <p> Privacy Guaranteed & 100 % Secure payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="ast_whywe_info_box"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/ww_6.png" alt=""></span>
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
                        <div class="ast_counter"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_1.png" alt="timer"></span>
                            <h2 class="timer" data-from="0" data-to="80000" data-speed="5000"></h2>
                            <h4>Smile Delivered</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_2.png" alt="timer"></span>
                            <h2 class="timer" data-from="0" data-to="90" data-speed="5000">+</h2>
                            <h4>Skilled Experts</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_3.png" alt="timer"></span>
                            <h2 class="timer" data-from="0" data-to="12" data-speed="5000"></h2>
                            <h4>Countries Covered</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_4.png" alt="timer"></span>
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
                        <div class="ast_counter"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_1.png" alt="timer"></span>
                            <h2 class="timer" data-from="0" data-to="80000" data-speed="5000"></h2>
                            <h4>Smile Delivered</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_2.png" alt="timer"></span>
                            <h2 class="timer" data-from="0" data-to="90" data-speed="5000">+</h2>
                            <h4>Skilled Experts</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_3.png" alt="timer"></span>
                            <h2 class="timer" data-from="0" data-to="12" data-speed="5000"></h2>
                            <h4>Countries Covered</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="ast_counter"> <span><img src="<?php echo base_url(); ?>front-assets/images/content/timer_4.png" alt="timer"></span>
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
    $('.Show').click(function () {
        $('#target').show(500);
        $('.Show').hide(0);
        $('.Hide').show(0);
    });
    $('.Hide').click(function () {
        $('#target').hide(500);
        $('.Show').show(0);
        $('.Hide').hide(0);
    });
    $('.toggle').click(function () {
        $('#target').toggle('slow');
    });

</script>
<script>$(document).ready(function () {

        for (var i = 1; i <= $('.slider__slide').length; i++) {

            $('.slider__indicators').append('<div class="slider__indicator" data-slide="' + i + '"></div>')

        }

        setTimeout(function () {

            $('.slider__wrap').addClass('slider__wrap--hacked');

        }, 1000);

    })



    function goToSlide(number) {

        $('.slider__slide').removeClass('slider__slide--active');

        $('.slider__slide[data-slide=' + number + ']').addClass('slider__slide--active');

    }



    $('.slider__next, .go-to-next').on('click', function () {

        var currentSlide = Number($('.slider__slide--active').data('slide'));

        var totalSlides = $('.slider__slide').length;

        currentSlide++

        if (currentSlide > totalSlides) {

            currentSlide = 1;

        }

        goToSlide(currentSlide);

    })





    setInterval(function () {
        $('#next_slide').trigger('click');
    }, 9000);



</script>

<script>



    $(document).ready(function () {

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
    $(document).ready(function () {
        $(".btn-pref .btn").click(function () {
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