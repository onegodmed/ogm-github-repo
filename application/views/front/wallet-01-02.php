<script>
    $(document).ready(function() {
        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
        };
        var promotional = getUrlParameter('coupan');
        console.log(promotional);
        if (promotional == 'today20') {
            console.log(promotional);
            setTimeout(function() {
                $('#banner-popup').modal('hide');
            }, 6500);
        }
    });
</script>
<style>
    input[type="radio"] {
        height: 30px !important;
        width: 30px !important;
        margin: 0 10px;
        position: absolute;
        top: 14px;
        left: 20px;

    }

    label {
        background: #f5f5f5;
        padding: 10px 60px;
    }

    .ft-chk {
        float: right;
    }

    .ast_btn1111 {
        display: inline-block;
        padding: 5px 8px;
        background-color: #ffffff;
        color: #ff8c28;
        text-transform: capitalize;
        border: 1px solid #ff8820;
        border-radius: 5px;
        text-align: center;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -ms-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }

    #myModalopn .close {
        display: none;
    }


    @media(max-width:768px) {
        #myModalopn .close i {
            font-size: 20px;
            text-align: center;
            line-height: 31px;
            display: block;
            vertical-align: middle;
            margin-left: 9px;
            margin-top: -3px;
        }

        .ft-chk {
            float: none;
            text-align: center;
        }

        .pl0 {
            padding-left: 0px;
        }

        .modal-design {
            background: #fff;
            margin: 10px;
            padding: 5px;
        }

        .modal-design form {
            display: inline-block;
            width: 100%;
        }

        .modal {

            z-index: 9999999999;
        }



        #myModalopn .close {
            display: block;
            font-size: 35px;
            background: #ff8c28;
            color: #fff;
            position: absolute;
            right: 3px;
            top: 6px;
            height: 35px;
            width: 35px;
            border-radius: 50%;
            text-align: center;
            vertical-align: middle;
            opacity: 1;
            margin-top: 0px;
            padding: 0px;
        }
    }

    .discount-area {
        position: absolute;
        top: -20px;
        right: -1px;
    }

    .discount-area1 {
        position: absolute;
        top: -31px;
        left: -11px;
    }

    .discount-image {
        position: relative;
        text-align: center;
    }

    .discount-image img {
        width: 53px;
    }

    .discount-image span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        font-weight: bold;
    }

    .discount-image1 img {
        width: 71px;
    }

    .discount-image1 span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        font-weight: bold;
    }

    #packname1000 {
        background-color: #ff88206e;
    }

    .serc_flds {
        width: 50%;
        margin: 0 auto;
        padding: 30px 0 40px;
        display: table;
        position: relative;
    }

    .serc_flds input {
        width: 100%;
        border-radius: 4px;
        border: #ccc solid 1px;
        padding: 10px 10px;
        font-size: 13px;
    }

    .serc_flds button {
        position: absolute;
        right: 3px;
        background: #ff871f;
        border: none;
        border-radius: 4px;
        color: #fff;
        font-size: 14px;
        padding: 7px 10px;
        margin-top: 3px;
    }

    .socal_md ul li:last-child {
        margin-right: 0;
    }

    .socal_md ul li img {
        width: 50px;
    }

    .socal_md ul li {
        float: left;
        margin-right: 20px;
    }

    .socal_md ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .socal_md {
        display: table;
        margin: 0 auto;
        margin-top: 10px;
    }

    .socal_md ul li:nth-child(2) img {
        width: 33px;
        position: relative;
        top: 8px;
    }


    @media (max-width:767px) {
        .serc_flds {
            width: 90%;
            padding: 20px 0 20px;
        }

        .socal_md ul li img {
            width: 38px;
        }

        .socal_md {
            margin-bottom: 30px;
        }

        .socal_md {
            margin-bottom: 30px;
            background: #fff;
            width: 100%;
            display: inline-block;
            padding: 10px 10px 20px;
            margin-top: 0;
        }
    }
</style>
<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>Wallet</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="#">home</a></li>
                    <li>//</li>
                    <li><a href="#">Wallet</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->

<div class="ast_journal_wrapper ast_toppadder70 ast_bottompadder70 walletpage">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 indiancurrency">
                <img class="wallet_class" src="<?php echo base_url('front-assets/images/wallet icon.png'); ?>" style="width:30%">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-9 col-xs-9 price">
                <div class="ast_journal_box_wrapper">


                    <form>
                        <h3>Your Wallet Balance <span>₹ <?php echo $wallet_balence[0]->wallet_balence ?></span></h3>
                        <!--<span>Please select your calling pack</span>-->
                    </form>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="serc_flds">
                <input type="text" value="" name="" class="pack_amt" placeholder="Enter Amount in INR" onkeypress="return isNumber(event)" />
                <input type="hidden" name="" class="pack_name" value="custom" />
                <button type="submit" class="ast_packages_box1">Proceed</button>

            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 astro-recharge" style="background: #f4f4f4;">
                <h3 style="text-align:center;padding-bottom:30px">Select Packages to <span style="color:#fa8819">Recharge your wallet</span></h3>
                <?php foreach ($package as  $row) {

                ?>  
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <!-- package card -->
                        <div class="package-card">
                            <div class="offer"><div class="text">100% cashback</div></div>
                            <h3 class="title">Earth</h3>
                            <div class="box top">
                            <div class="wrapper">
                                <div class="you-pay-box">
                                <span class="text">YOU<br />PAY</span>
                                <span class="value">₹500</span>
                                </div>
                                <div class="you-get-box">
                                <span class="text">YOU<br />GET</span>
                                <span class="value strikethrough">₹500</span>
                                </div>
                                <div class="actuall-you-get-box">
                                <span class="value">₹700</span>
                                </div>
                            </div>
                            </div>
                            <div class="box bottom">
                            <div class="wrapper">
                                <sup>*</sup>for 1<sup>st</sup> recharge only
                            </div>
                            </div>
                            <a href="#" class="btn btn-default btn-block">Buy Now</a>
                        </div>
                    </div>
                    <!-- Old package code starts -->
                    <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <?php if ($row->package_price == '1000') { ?>
                            <div class="discount-area">
                                <div class="discount-image">
                                    <img src="<?= base_url() ?>front-assets/images/offer.png">
                                    <span>15% Off</span>
                                </div>
                            </div>
                            <div class="discount-area1">
                                <div class="discount-image1">
                                    <img src="<?= base_url() ?>front-assets/images/selling.png" style="width:93px">
                                </div>
                            </div>
                        <?php } else if ($row->package_price >= '1500') { ?>
                            <div class="discount-area">
                                <div class="discount-image">
                                    <img src="<?= base_url() ?>front-assets/images/offer.png">
                                    <span>20% Off</span>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="ast_packages_box ast_packages_box1" id="packname<?php echo $row->package_price ?>">
                            <input type="hidden" class="pack_amt" name="payble_amount" value="<?php echo $row->package_price ?>">
                            <input type="hidden" class="pack_name" name="package_name_<?php echo $row->package_name ?>" value="<?php echo $row->package_name ?>">
                            <h3><?php echo $row->package_name ?></h3>

                            <div class="ast_price">

                                <h2>₹ <?php echo $row->package_price ?></h2>

                                <p></p>

                            </div>

                            <div class="clearfix"></div>

                            <button type="button" class="ast_btn buy_pack" id="buy_pack">Buy Now</button>

                        </div>

                    </div> -->
                    <!-- Old package code end -->
                <?php } ?>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div id="myModalopn">
                    <div id="sidebar">
                        <div class="modal-design">
                            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                            <input class="form-control" id="pack_amount" name="pack_amount" value="1000" type="hidden" />
                            <input class="form-control" id="pack_gst" name="pack_gst" value="153" type="hidden" />
                            <input class="form-control" id="pack_after_disc" name="pack_after_disc" value="850" type="hidden" />
                            <input class="form-control" id="pack_disc" name="pack_disc" value="150" type="hidden" />
                            <input class="form-control" id="pack_coupon" name="pack_coupon" value="default15" type="hidden" />
                            <input class="form-control" id="pack_coupon_disc" name="pack_coupon_disc" value="15" type="hidden" />
                            <input class="form-control" id="package_name" name="package_name" value="MARS" type="hidden" />
                            <form action="https://secure.payu.in/_payment" method="post" id="payuForm" name="payuForm">
                                <input type="hidden" id="mkey" name="key" value="" />
                                <input type="hidden" id="hash" name="hash" value="" />
                                <input type="hidden" id="txnid" name="txnid" value="" />




                                <div class="form-group">
                                    <table width="100%" cellspacing="0" cellpadding="0" style="line-height: 40px; font-size: 14px; text-indent: 7px; border: 1px solid #aaa;">
                                        <tbody>
                                            <tr>
                                                <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Amount</td>
                                                <td style="border-bottom:1px solid #aaa;">Rs. <span id="tot_amount">1000</span>.00</td>
                                            </tr>
                                            <tr style="background-color: #ededed">
                                                <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Discount </td>
                                                <td style="border-bottom:1px solid #aaa;">Rs. <span id="disc_price">150</span>.00</td>
                                            </tr>
                                            <tr>
                                                <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">GST @ 18.00 % </td>
                                                <td style="border-bottom:1px solid #aaa;">Rs. <span id="gst_price">153.00</span></td>
                                            </tr>
                                            <tr style="background-color: #ededed">
                                                <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Talktime Value</td>
                                                <td style="border-bottom:1px solid #aaa;">Rs. <span id="tot_talktime">1000</span>.00</td>
                                            </tr>
                                            <tr style=" background-color: #ff871f; color: #fff; font-weight: bold;">
                                                <td style="border-right:1px solid #aaa;">Net Amount Payable (Rs.)</td>
                                                <td style="">Rs. <span id="net_price">1003</span>.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <p id="promo" style="text-decoration: underline;cursor:pointer;">Do you have coupon code ?</p>
                                    <div class="row">
                                        <div class="col-xs-9"><input class="form-control" placeholder="Enter your coupon code" type="text" id="promocode" style="display:none" /></div>
                                        <div class="col-xs-3 pl0"><a id="apply_promo" style="display:none" class="ast_btn1111">Apply</a></div>
                                    </div>
                                    <p style="display:none" id="coupon_error"></p>
                                    <input class="form-control" id="amount" name="amount" value="1003" type="hidden" />
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control" name="firstname" id="firstname" value="<?php echo $this->session->userdata('name') ?>" readonly />
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="productinfo" name="productinfo" readonly value="MARS" />
                                    <input type="hidden" class="form-control" name="email" id="email" value="<?php echo $this->session->userdata('username') ?>" readonly />
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control" name="phone" value="<?php echo $this->session->userdata('mobile') ?>" readonly />
                                    <input type="hidden" class="form-control" name="address1" value="" readonly />
                                </div>
                                <div class="form-group">
                                    <input name="surl" value="<?php echo base_url() ?>status/" size="64" type="hidden" />
                                    <input name="furl" value="<?php echo base_url() ?>status/" size="64" type="hidden" />
                                    <!--for test environment comment  service provider   -->
                                    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                                    <input name="curl" value="<?php echo base_url() ?>status/" type="hidden" />
                                </div>
                                <div class="form-group ft-chk">
                                    <button type="button" id="pay_now" value="Pay Now" class="ast_btn"><i class="fa fa-lock" aria-hidden="true"></i> Continue to Secure Pay <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                    <div class="socal_md">
                        <div>
                            <h4> We Accept</h4>
                        </div>
                        <ul>
                            <li><a href="#"><img src="<?= base_url() ?>front-assets/images/american-express.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>front-assets/images/maestro.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>front-assets/images/mastercard.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>front-assets/images/paypal.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>front-assets/images/rupay.png"></a></li>
                            <li><a href="#"><img src="<?= base_url() ?>front-assets/images/visa.png"></a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".ast_packages_box1").click(function() {

            var pack_amt = $(this).children('input.pack_amt').val();
            var pack_name = $(this).children('input.pack_name').val();
            if (pack_amt == undefined && pack_name == undefined) {
                pack_amt = $('input.pack_amt').val();
                pack_name = $('input.pack_name').val();
            }
            if (pack_amt > 999 && pack_amt < 1499) {
                var disc_price = (pack_amt * 15) / 100;
                var new_price = pack_amt - disc_price;
                var gst = (new_price * 18) / 100;
                var total_amt = parseInt(new_price) + parseInt(gst);
                var pack_coupon = "default15";
                var pack_coupon_disc = "15";
            } else if (pack_amt > 1499 && pack_amt < 20001) {
                var disc_price = (pack_amt * 20) / 100;
                var new_price = pack_amt - disc_price;
                var gst = (new_price * 18) / 100;
                var total_amt = parseInt(new_price) + parseInt(gst);
                var pack_coupon = "default20";
                var pack_coupon_disc = "20";
            } else {
                var disc_price = 0;
                var new_price = pack_amt;
                var gst = (pack_amt * 18) / 100;
                var total_amt = parseInt(pack_amt) + parseInt(gst);
                var pack_coupon = "";
                var pack_coupon_disc = 0;
            }
            $('#net_price').html(total_amt);
            $('#pack_amount').val(pack_amt);
            $('#pack_gst').val(gst);
            $('#pack_after_disc').val(new_price);
            $('#amount').val((total_amt));
            $('#merchant_total').val((total_amt));
            $('#productinfo').val(pack_name);
            $('#package_name').val(pack_name);
            $('#gst_price').html(gst);
            $('#pack_disc').val(disc_price);
            $('#tot_amount').html(pack_amt);
            $('#tot_talktime').html(pack_amt);
            $('#promocode').val('');
            $('#disc_price').html(disc_price);
            $('#pack_coupon').val(pack_coupon);
            $('#pack_coupon_disc').val(pack_coupon_disc);

        });

        $("#promo").click(function() {
            $('#promocode').css('display', 'block');
            $('#apply_promo').css('display', 'block');
        });
        $("#promocode").on('keyup paste', function() {
            var real_price = $('#pack_amount').val();
            var gst = (real_price * 18) / 100;
            if ($('#promocode').val() == "") {
                $('#amount').val((parseInt(real_price) + parseInt(gst)));
                $('#merchant_total').val((parseInt(real_price) + parseInt(gst)));
                $('#net_price').html(parseInt(real_price) + parseInt(gst));
                $('#gst_price').html(gst);
                $('#disc_price').html('0.00');
                $('#coupon_error').html('');
                $('#pack_coupon').val('');
                $('#pack_coupon_disc').val('0');
                $('#pack_gst').val(gst);
                $('#pack_disc').val('0');
                $('#pack_after_disc').val(real_price);
            }
        });
        $("#apply_promo").click(function() {
            var coupon_code = $('#promocode').val();
            var real_price = $('#pack_amount').val();
            if (real_price > 100) {
                if (coupon_code != '') {
                    $.ajax({
                        url: "<?php echo base_url('front/ajax_get_coupon') ?>",
                        type: 'POST',
                        dataType: "json",
                        data: {
                            'coupon': coupon_code
                        },
                        success: function(response) {
                            if (response.status == 1) {
                                var coupon = ((real_price * response.coupon[0].discount_parcent) / 100);
                                //console.log(coupon);
                                var newamt = real_price - coupon;
                                //console.log(newamt);
                                var gstcoupon = (newamt * 18) / 100;
                                //    $('#coupon_error').html('Your Discount Amount Is Rs. '+ coupon);
                                total_coupon_dis = Math.round(newamt + gstcoupon);
                                //console.log(total_coupon_dis);
                                $('#amount').val((total_coupon_dis));
                                $('#merchant_total').val((total_coupon_dis));
                                $('#net_price').html(total_coupon_dis);
                                $('#gst_price').html(gstcoupon);
                                $('#disc_price').html(coupon);
                                $('#coupon_error').html(' ');
                                $('#pack_coupon').val(response.coupon[0].coupan_code);
                                $('#pack_coupon_disc').val(response.coupon[0].discount_parcent);
                                $('#pack_gst').val(gstcoupon);
                                $('#pack_disc').val(coupon);
                                $('#pack_after_disc').val(newamt);
                            } else {
                                var gst = (real_price * 18) / 100;
                                $('#amount').val((parseInt(real_price) + parseInt(gst)));
                                $('#merchant_total').val((parseInt(real_price) + parseInt(gst)));
                                $('#disc_price').html('0.00');
                                $('#gst_price').html(gst);
                                $('#net_price').html(parseInt(real_price) + parseInt(gst));
                                $('#coupon_error').css('display', 'block');
                                $('#coupon_error').css('color', 'red');
                                $('#coupon_error').html('Invalid Coupon');
                                $('#pack_coupon').val('');
                                $('#pack_coupon_disc').val('0');
                                $('#pack_gst').val(gst);
                                $('#pack_disc').val('0');
                                $('#pack_after_disc').val(real_price);
                            }

                        }

                    });
                } else {
                    $('#coupon_error').html(' ');
                }
            } else {
                $('#coupon_error').css('display', 'block');
                $('#coupon_error').css('color', 'red');
                $('#coupon_error').html('Coupon Code applied minimum rs. 200 recharge');
            }

        });
        $("#pay_now").click(function() {
            var cust_email = '<?php echo $this->session->userdata('username') ?>';
            var cust_name = '<?php echo $this->session->userdata('name') ?>';
            var cust_mobile = <?php echo $this->session->userdata('mobile') ?>;
            var cust_id = <?php echo $this->session->userdata('id') ?>;
            var pack_amt = $('#amount').val();
            var pack_amt_dsc = $('#pack_amount').val();
            var pack_name = $('#package_name').val();
            var pack_disc = $('#pack_disc').val();
            var pack_gst = $('#pack_gst').val();
            var pack_after_disc = $('#pack_after_disc').val();
            var pack_coupon = $('#pack_coupon').val();
            var pack_coupon_disc = $('#pack_coupon_disc').val();
            $.ajax({
                url: "<?php echo base_url('front/pay') ?>",
                type: 'POST',
                dataType: "json",
                data: {
                    'pack_amt': pack_amt,
                    'pack_amt_dsc': pack_amt_dsc,
                    'pack_name': pack_name,
                    'pack_disc': pack_disc,
                    'pack_gst': pack_gst,
                    'pack_after_disc': pack_after_disc,
                    'pack_coupon': pack_coupon,
                    'pack_coupon_disc': pack_coupon_disc,
                    'cust_email': cust_email,
                    'cust_name': cust_name,
                    'cust_mobile': cust_mobile,
                    'cust_id': cust_id
                },
                success: function(response) {
                    if (response.status == 1) {
                        $('#mkey').val(response.message['mkey']);
                        $('#hash').val(response.message['hash']);
                        $('#txnid').val(response.message['tid']);
                        setTimeout(function() {
                            document.getElementById("payuForm").submit();
                        }, 500);
                    }
                }

            });
        });

        if ($(window).width() < 768) {
            $('.ast_packages_box1').attr({
                'data-toggle': 'modal',
                'data-target': '#myModalopn'
            });
            $('#myModalopn').addClass("modal fade");
            $('#myModalopn').attr('role', 'modal');
        } else {
            $("#myModal1").remove();
            $('.ast_packages_box1').removeAttr({
                'data-toggle': 'modal',
                'data-target': '#myModalopn'
            });
            $('#myModalopn').removeClass("modal fade");
            $('#myModalopn').removeAttr('role', 'modal');
        }

        if ($(window).width() > 769) {
            $(window).scroll(function() {

                if ($(window).scrollTop() > 500) {
                    $('#sidebar').css('position', 'fixed');
                    $('#sidebar').css('top', '136px');
                    $('#sidebar').css('width', '457px');
                } else if ($(window).scrollTop() <= 500) {
                    $('#sidebar').css('position', '');
                    $('#sidebar').css('top', '');
                    $('#sidebar').css('width', '100%');
                }
                if ($('#sidebar').offset().top + $("#sidebar").height() > $(".ast_team_wrapper").offset().top) {
                    $('#sidebar').css('top', -($("#sidebar").offset().top + $("#sidebar").height() - $(".ast_team_wrapper").offset().top));
                }
            });
        }

    });
</script>

<div class="modal" id="myModal1">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input class="form-control" id="pack_amount" name="pack_amount" value="1000" type="hidden" />
                <input class="form-control" id="pack_gst" name="pack_gst" value="153" type="hidden" />
                <input class="form-control" id="pack_after_disc" name="pack_after_disc" value="850" type="hidden" />
                <input class="form-control" id="pack_disc" name="pack_disc" value="150" type="hidden" />
                <input class="form-control" id="pack_coupon" name="pack_coupon" value="default15" type="hidden" />
                <input class="form-control" id="pack_coupon_disc" name="pack_coupon_disc" value="15" type="hidden" />
                <input class="form-control" id="package_name" name="package_name" value="MARS" type="hidden" />
                <form action="https://secure.payu.in/_payment" method="post" id="payuForm" name="payuForm">
                    <input type="hidden" id="mkey" name="key" value="" />
                    <input type="hidden" id="hash" name="hash" value="" />
                    <input type="hidden" id="txnid" name="txnid" value="" />

                    <div class="form-group">
                        <table width="100%" cellspacing="0" cellpadding="0" style="line-height: 40px; font-size: 14px; text-indent: 7px; border: 1px solid #aaa;">
                            <tbody>
                                <tr>
                                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Amount</td>
                                    <td style="border-bottom:1px solid #aaa;">Rs. <span id="tot_amount">1000</span>.00</td>
                                </tr>
                                <tr style="background-color: #ededed">
                                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Discount </td>
                                    <td style="border-bottom:1px solid #aaa;">Rs. <span id="disc_price">150</span>.00</td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">GST @ 18.00 % </td>
                                    <td style="border-bottom:1px solid #aaa;">Rs. <span id="gst_price">153.00</span></td>
                                </tr>
                                <tr style="background-color: #ededed">
                                    <td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Talktime Value</td>
                                    <td style="border-bottom:1px solid #aaa;">Rs. <span id="tot_talktime">1000</span>.00</td>
                                </tr>
                                <tr style=" background-color: #ff871f; color: #fff; font-weight: bold;">
                                    <td style="border-right:1px solid #aaa;">Net Amount Payable (Rs.)</td>
                                    <td style="">Rs. <span id="net_price">1003</span>.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <p id="promo" style="text-decoration: underline;cursor:pointer;width: 56%;">Do you have coupon code ?</p>
                        <div class="col-md-6"><input class="form-control" placeholder="Enter your coupon code" type="text" id="promocode" style="display:none" /></div>
                        <div class="col-md-6"><a id="apply_promo" style="display:none;width:30px;height: 35px; margin-left: -40px;line-height: 33px;" class="ast_btn">Apply</a></div>
                        <p style="display:none" id="coupon_error"></p>
                        <input class="form-control" id="amount" name="amount" value="1003" type="hidden" />
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" name="firstname" id="firstname" value="<?php echo $this->session->userdata('name') ?>" readonly />
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="productinfo" name="productinfo" readonly value="MARS" />
                        <input type="hidden" class="form-control" name="email" id="email" value="<?php echo $this->session->userdata('username') ?>" readonly />
                    </div>
                    <div class="form-group">

                        <input type="hidden" class="form-control" name="phone" value="<?php echo $this->session->userdata('mobile') ?>" readonly />
                        <input type="hidden" class="form-control" name="address1" value="" readonly />
                    </div>
                    <div class="form-group">
                        <input name="surl" value="<?php echo base_url() ?>status/" size="64" type="hidden" />
                        <input name="furl" value="<?php echo base_url() ?>status/" size="64" type="hidden" />
                        <!--for test environment comment  service provider   -->
                        <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                        <input name="curl" value="<?php echo base_url() ?>status/" type="hidden" />
                    </div>
                    <div class="form-group float-right" style="float:right">
                        <button type="button" id="pay_now" value="Pay Now" class="ast_btn"><i class="fa fa-lock" aria-hidden="true"></i> Continue to Secure Pay <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div>


                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>