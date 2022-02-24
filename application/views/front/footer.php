<!--Team Start-->
<?php if ($this->session->userdata('user_type') != 'Astrologer') { ?>
    <div class="ast_team_wrapper ast_toppadder70 ast_bottompadder50 home_exprt">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">

                    <div class="ast_heading">

                        <h2>our <span>experts</span></h2>

                        <p>With the guidance of our verified experts, listen to the language of the stars and planets and determine whether they will shed light on you or cause darkness in your future years!</p>

                    </div>

                </div>

                <div class="col-md-12 col-xs-12">

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

                                        <div class="col-md-12 col-xs-12">

                                            <a href="<?php echo base_url('astrologer/' . $row->astro_slug . '/') ?>"><img src="<?php echo base_url('admin-assets/assets/images/users/' . $row->image) ?>" alt="team"></a>

                                        </div>

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
                                    <a class="a available" href="<?php echo base_url('astrologer/' . $row->astro_slug . '/') ?>">Online</a>


                                    <a class="a" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Experience : <strong><?php echo $row->experience ?></strong> </a>

                                    <a class="a" href="#"><i class="fa fa-language" aria-hidden="true"></i> Language : <br /><strong><?php echo $row->langknown ?></strong> </a>


                                </div>

                            </div>

                        <?php } ?>



                    </div>

                </div>

            </div>
            <div class="text-center">
                <a href="<?= base_url() ?>talk-to-astrologers/" class="ast_btn ">View All</a>
            </div>
        </div>

    </div>
<?php } ?>
<!--Team end-->



<div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70 home_blog">

    <div class="container">

        <div class="">

            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">

                <div class="ast_heading">

                    <h2>Reading <span>Articles</span></h2>

                    <p>The Vast topics are covered and explained to educate you a little more !</p>

                </div>

            </div>

            <div class="ast_whywe_info">

                <div class="row">

                    <?php
                    $this->db->select('*');

                    $this->db->from('blog');

                    $this->db->limit(4);

                    $this->db->order_by("id", "desc");

                    $query1 = $this->db->get();

                    $blog = $query1->result();

                    foreach ($blog as $row) {
                    ?>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="ast_blog_box">

                                <div class="ast_blog_img">

                                    <!-- <span class="ast_date_tag">1 May, 2019</span> -->
                                    <a href="<?php echo base_url('blog/' . $row->slug_url); ?>"><img src="<?php echo base_url('admin-assets/assets/blog-images/' . $row->blog_image); ?>" alt="Blog" title="Blog"></a>

                                </div>

                                <div class="ast_blog_info">

                                    <h3 class="ast_blog_info_heading"><a href="<?php echo base_url('blog/' . $row->slug_url); ?>"><?php echo $row->heading; ?></a></h3>

                                    <p class="ast_blog_info_details"><?php echo substr($row->short_discription, 0, 100); ?>...</p>

                                    <a class="ast_btn" href="<?php echo base_url('blog/' . $row->slug_url); ?>">read more</a>

                                </div>

                            </div>

                        </div>

                    <?php } ?>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- Testimonials Start-->

<div class="ast_testimonial_wrapper ast_toppadder70 ast_bottompadder70">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">

                <div class="ast_heading">

                    <h2>what client<span> says</span></h2>

                    <p>Client’s contentment is of paramount importance for us. Take a look at what our clients have to say about us.</p>

                </div>

            </div>

            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">

                <div class="ast_testimonials_slider">

                    <div id="owl-carousel" class="owl-carousel owl-theme">

                        <?php
                        $testimonials = $this->front->get('Testimonial');

                        foreach ($testimonials as $key => $row) {
                        ?>

                            <div class="item">

                                <div class="ast_testimonials_slider_box">

                                    <img src="<?php echo base_url('admin-assets/assets/images/testimonials/' . $row->image) ?>" alt="Testimonial">

                                    <div class="ast_testimonials_slider_box_text">

                                        <p><?php echo $row->description ?></p>

                                        <h4><?php echo $row->name ?>, <span><?php echo $row->designation ?></span></h4>

                                    </div>

                                </div>

                            </div>

                        <?php } ?>







                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Testimonials End-->

<!-- Download wrapper start-->

<!--<div class="ast_download_wrapper ast_toppadder70 ast_bottompadder70" style="opacity: 0;">-->

<!--    <div class="container">-->

<!--        <div class="row">-->

<!--            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">-->

<!--                <div class="ast_heading">-->



<!--                </div>-->

<!--            </div>-->

<!--            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">-->

<!--                <div class="ast_download_box">-->



<!--                </div>-->

<!--            </div>-->

<!--        </div>-->

<!--    </div>-->

<!--</div>-->

<!-- Download wrapper End-->

<!-- Footer wrapper start-->

<div class="ast_footer_wrapper ast_toppadder70 ast_bottompadder20">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-4 col-xs-12">

                <div class="ast_footer_info">

                    <h4 class="widget-title">our newsletter</h4>

                    <div class="ast_newsletter">


                        <form action="<?php echo base_url('front/newsletter') ?>" method="post">
                            <div class="ast_newsletter_box">

                                <input required type="text" placeholder="Enter Your Email Id" name="email">

                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>

                            </div>
                        </form>

                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-8 col-xs-12">



                <div class="ast_download_box">

                    <ul>

                        <li><a href="#"><img src="<?php echo base_url(); ?>/front-assets/images/header/app_icon1.png" alt="Download" title="Download"></a></li>

                        <li><a href="#"><img src="<?php echo base_url(); ?>/front-assets/images/header/app_icon2.png" alt="Download" title="Download"></a></li>
                        <li><a href="<?php echo base_url(); ?>become-a-partner"><img src="<?php echo base_url(); ?>/front-assets/images/header/partner_icon.png" alt="Become a Partner"></a></li>

                    </ul>

                </div>

            </div>
        </div>

        <div class="row">



            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                <div class="widget text-widget ast_footer_info">

                    <p>By giving you the wealth of expertise in the realm of astrology, we will endow you with horoscope mirror which will let you find out your obstacles troubling your path and get you closer to the divine world!</p>

                    <ul>

                        <li><a target="_blank" href="https://www.facebook.com/1godmed"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                        <li><a target="_blank" href="https://www.instagram.com/onegodmed/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                        <li><a href="https://www.youtube.com/channel/UC_0rLhyj1PQ_78EjpHH_beQ" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>

                        <li><a target="_blank" href="https://twitter.com/OnegodmedC"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

                        <li><a href="https://www.linkedin.com/company/onegodmed/" target="blank"><i class="fa fa-linkedin"></i></a></li>

                    </ul>

                    <!--<div class="audio_1">-->
                    <!--    <audio controls loop>-->

                    <!--        <source type="audio/mpeg" src="<?php echo base_url('front-assets/images/Final_onegodmed.mp3') ?>"> -->

                    <!--    </audio>-->
                    <!--</div> 			-->

                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">

                <div class="widget text-widget">

                    <h4 class="widget-title foo_mobile">Online Consulting</h4>

                    <div class="ast_servicelink">

                        <ul>

                            <li><a href="<?php echo base_url(); ?>vedic-astrology/business-astrology/">Business Astrology</a></li>

                            <li><a href="<?php echo base_url(); ?>vedic-astrology/career-&-education/">Career & Education</a></li>

                            <li><a href="<?php echo base_url(); ?>vedic-astrology/marriage-&-children/">Marriage & Children</a></li>

                            <li><a href="<?php echo base_url(); ?>vedic-astrology/relationship-&-compatibility/">Relationship & Compatibility</a></li>

                            <li><a href="<?php echo base_url(); ?>vedic-astrology/wealth-&-property/">Wealth & Property</a></li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">

                <div class="widget text-widget">

                    <h4 class="widget-title foo_mobile">Categories</h4>

                    <div class="ast_sociallink">

                        <ul>

                            <li><a href="<?php echo base_url(); ?>vedic-astrology/">Vedic Astrology</a></li>


                            <li><a href="<?php echo base_url(); ?>horoscope-report/">Premium Reports</a></li>

                            <li><a href="<?php echo base_url(); ?>blog/">Vedic Library</a></li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

                <div class="widget text-widget">

                    <h4 class="widget-title foo_mobile">Contact Us</h4>

                    <div class="ast_gettouch">

                        <ul>

                            <li><i class="fa fa-home" aria-hidden="true"></i>
                                <p>57/1701 ETT Tower 2, Sector 132 Noida, Uttar Pradesh (India)</p>
                            </li>

                            <li><i class="fa fa-at" aria-hidden="true"></i> <a href="mailto:info@onegodmed.com">info@onegodmed.com</a><a href="mailto:support@onegodmed.com">support@onegodmed.com</a></li>

                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                <p>+91 9169-305-305</p>
                            </li>



                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                <div class="ast_copyright_wrapper">

                    <p><a href="<?php echo base_url(); ?>terms-and-condition/">Terms & Conditions</a> | <a href="<?php echo base_url(); ?>privacy-policy/">Privacy Policy</a> | <a href="<?php echo base_url(); ?>faq/">FAQ</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &copy; <?php echo date('Y'); ?> <a href="<?= base_url() ?>">Onegodmed</a>. All rights reserved.</p>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Footer wrapper End-->
<style>
    .talk-to-content h3 {
        color: #fa8819;
        font-size: 22px;
        margin-top: 24px;
    }

    .talk-to-content p {
        line-height: 28px;
        text-align: justify;
        font-size: 15px;
    }

    .talk-section {
        display: none;
    }

    .kundali-matching-section {
        display: none;
    }

    .free-kundali-section {
        display: none;
    }
</style>
<!--Main js file Style-->
<!--
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
-->

<script src="<?php echo base_url(); ?>front-assets/js/bootstrap.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.magnific-popup/1.0.0/jquery.magnific-popup.min.js"></script>

<script src="<?php echo base_url(); ?>front-assets/js/owl.carousel.js"></script>

<script src="<?php echo base_url(); ?>front-assets/js/jquery.countTo.js"></script>

<script src="<?php echo base_url(); ?>front-assets/js/jquery.appear.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="<?php echo base_url(); ?>front-assets/js/slick/jquery-migrate-1.2.1.min.js">

</script>

<script src="<?php echo base_url(); ?>front-assets/js/slick/slick.min.js"></script>

<script src="<?php echo base_url(); ?>front-assets/js/custom.js"></script>

<script>
    // loader Query
    $(document).ready(function() {
        $('.loader').hide();
        $('body').removeClass("overflow");
    });
</script>

<script>
</script>
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            midClick: true,
            closeOnBgClick: false,
            mainClass: 'mfp-fade',
            focus: '.logindsdssds'
        });
    });
</script>
<script>
    function d() {
        $(window).load(function() {
            $('.popup-with-zoom-anim').magnificPopup.defaults.closeOnBgClick = false;
        });
    }
</script>


<script>
    //    setInterval(function () {
    //        $('.owl-next').trigger('click');
    //    }, 6000);


    jQuery(document).ready(function($) {

        $(window).scroll(function() {

            if ($(this).scrollTop() > 50) {

                $('#backToTop').fadeIn('slow');

            } else {

                $('#backToTop').fadeOut('slow');

            }

        });

        $('#backToTop').click(function() {

            $("html, body").animate({
                scrollTop: 0
            }, 500);

            return false;

        });

    });



    /*star code*/


    // <?php if (isset($is_rating) and $is_rating == 0) { ?>
    //     var $star_rating = $('.star-rating .fa');
    // <?php } ?>

    // var SetRatingStar = function() {

    //     return $star_rating.each(function() {

    //         if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {

    //             return $(this).removeClass('fa-star-o').addClass('fa-star');

    //         } else {

    //             return $(this).removeClass('fa-star').addClass('fa-star-o');

    //         }

    //     });

    // };



    //    $star_rating.on('click', function () {

    //        $star_rating.siblings('input.rating-value').val($(this).data('rating'));

    //        return SetRatingStar();

    //    });



    // SetRatingStar();









    $('#dbType').on('change', function() {

        if ($(this).val() === "Others") {

            $("#otherType").show()

        } else {

            $("#otherType").hide()

        }

    });





    $("#application").click(function() {

        $("#app_open").toggle();

    });
</script>

<script>
    function myFunction() {

        var dots = document.getElementById("dots");

        var moreText = document.getElementById("more");

        var btnText = document.getElementById("myBtn");



        if (dots.style.display === "none") {

            dots.style.display = "inline";

            btnText.innerHTML = "Read more";

            moreText.style.display = "none";

        } else {

            dots.style.display = "none";

            btnText.innerHTML = "Read less";

            moreText.style.display = "inline";

        }

    }



    $(document).ready(function() {


        $('#owl-demo').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoPlay: 2000, //Set AutoPlay to 3 seconds
            responsive: {
                0: {
                    items: 1,

                },

                600: {
                    items: 1,

                },
                768: {
                    items: 2,

                },
                1000: {
                    items: 4,

                }
            }
        })
    });
</script>
<!--Main js file End-->

<a href="#" id="backToTop"><i class="fa fa-angle-up"></i></a>
<!-- <nav class="foo_social">
    <ul>
        <li><a href="tel:+919169305305" target="blank">Consult Now  +91 9169-305-305 <i class="fa fa-phone"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UC_0rLhyj1PQ_78EjpHH_beQ" target="blank">Onegodmed Videos <i class="fa fa-youtube"></i></a></li>
        <li><a href="https://twitter.com/OnegodmedC" target="blank">Onegodmed Tweets <i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.facebook.com/1godmed" target="blank">Onegodmed Posts <i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/onegodmed" target="blank">Onegodmed Posts <i class="fa fa-instagram"></i></a></li>
        <li><a href="https://www.linkedin.com/company/onegodmed/" target="blank">Onegodmed Posts <i class="fa fa-linkedin"></i></a></li>
    </ul>
</nav> -->

<script>
    // $(".dropdown").hover(
    //         function () {
    //             $('.dropdown-menu').collapse('show');
    //         }, function () {
    //     $('.dropdown-menu').collapse('hide');
    // }
    // );
    $(".user_icon").hover(

        function() {
            $('.user_icon .dropdown-menu').collapse('show');
        },
        function() {
            $('.user_icon .dropdown-menu').collapse('hide');
        }
    );
</script>
<script>
    function getCodeBoxElement(index) {
        return document.getElementById('digit-' + index);
    }

    function onKeyUpEvent(index, event) {
        const eventCode = event.which || event.keyCode;
        if (getCodeBoxElement(index).value.length === 1) {
            if (index !== 4) {
                getCodeBoxElement(index + 1).focus();
            } else {
                getCodeBoxElement(index).blur();
                // Submit code
                console.log('submit code ');
            }
        }
        if (eventCode === 8 && index !== 1) {
            getCodeBoxElement(index - 1).focus();
        }
    }

    function onFocusEvent(index) {
        for (item = 1; item < index; item++) {
            const currentElement = getCodeBoxElement(item);
            if (!currentElement.value) {
                currentElement.focus();
                break;
            }
        }
    }
</script>
<script>
    function getCodeBoxElementRegistration(index) {
        return document.getElementById('digit' + index);
    }

    function onKeyUpEventReg(index, event) {
        const eventCode = event.which || event.keyCode;
        if (getCodeBoxElementRegistration(index).value.length === 1) {
            if (index !== 4) {
                getCodeBoxElementRegistration(index + 1).focus();
            } else {
                getCodeBoxElementRegistration(index).blur();
                // Submit code
                console.log('submit code ');
            }
        }
        if (eventCode === 8 && index !== 1) {
            getCodeBoxElementRegistration(index - 1).focus();
        }
    }

    function onFocusEventReg(index) {
        for (item = 1; item < index; item++) {
            const currentElement = getCodeBoxElementRegistration(item);
            if (!currentElement.value) {
                currentElement.focus();
                break;
            }
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
</body>

</html>