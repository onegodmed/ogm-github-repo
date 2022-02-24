<!--Breadcrumb start-->


<?php if($categories[0]->banner_image){?>
<div class="ast_pagetitle" style="background: url(<?php echo base_url('assets/categories_image/'.$categories[0]->banner_image);?>);">
<?php }else{?>
    <div class="ast_pagetitle" style="background: url(<?php echo base_url('front-assets/images/content/breadcrumb_bg.jpg');?>);">
    <?php  }?>



    <div class="ast_img_overlay"></div>



    <div class="container">



        <div class="row">



            <div class="col-lg-12 col-md-12 col-sm-12">



                <div class="page_title">



                    <h2><?php echo $categories[0]->category?></h2>



                </div>



            </div>



            <div class="col-lg-12 col-md-12 col-sm-12">



                <ul class="breadcrumb">



                    <li><a href="#">home</a></li>



                    <li>//</li>



                    <li><a href="#"><?php echo $categories[0]->category?></a></li>



                </ul>



            </div>



        </div>



    </div>



</div>



<!--Breadcrumb end-->



<!-- product Description section Start -->



<div class="ast_proSingle_wrapper ast_toppadder70 ast_bottompadder40">



    <div class="container">



        <div class="row">



            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



                <div class="product_detail_wrap">



                    <!-- product details Start -->



                    <div class="product_detail_cover">



                        <div class="row">



                            <div class="col-sm-4 col-xs-12">



                                <div class="product_slider">



                                    <!-- slides -->



                                    <div class="pro_slides_carousel">



                                        <div class="slick_item">



                                            <img src="<?php echo base_url();?>assets/categories_image/<?php echo $categories[0]->image?>" class="img-responsive" />



                                        </div>



                                    </div>



                                </div>
                                
                                
                                	<div class="product_slider">



									<!-- slides -->



									<div class="pro_slides_carousel">



										<div class="slick_item">

										    

										   <br><br>

										    <div class="actualyoutube">
                                           <?php 
                                           if($categories[0]->youtube_url){
                                              $url = $categories[0]->youtube_url;
                                               preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
                                                            $id = "https://www.youtube.com/embed/".$matches[1];
                                                    
                                          }else{
                                          	   $id = "https://www.youtube.com/embed/8KjWbjhb89o";
                                          }
                                                  
                                                     // exit();
                                           ?>

										   <iframe width="100%" height="260" src="<?php echo $id?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay="true"></iframe>

</div>

										   



										</div>



										

									</div>



								</div>



                            </div>



                            <div class="col-sm-8 col-xs-12">



                                <div class="product_description">



                                    <h3><?php echo $categories[0]->category?></h3>

                                    <p>



                                        <?php echo $categories[0]->description; ?>



                                    </p>

                                    

                                    

                                     <!--<div class="product_rating">



                                        <span class="ref_number"><i class="fa fa-inr"></i>Price  <?php echo $categories[0]->package_price?></span>



                                        <span class="ref_number"><i class="fa fa-calendar-o"></i> <?php echo $categories[0]->package_duration?> Month</span>



                                        <span class="rating_star">

                                            Review &nbsp;&nbsp;&nbsp;&nbsp;



											<i class="fa fa-star" aria-hidden="true"></i>



											<i class="fa fa-star" aria-hidden="true"></i>



											<i class="fa fa-star" aria-hidden="true"></i>



											<i class="fa fa-star" aria-hidden="true"></i>



											<i class="fa fa-star-o" aria-hidden="true"></i>



										</span>



                                    </div>-->



                                    <div class="product_buy">



                                        <?if($this->session->userdata('id')){ ?>



                                            <?php if(!empty($menu_id) AND ($menu_id[0]->menu_id == 4 OR $menu_id[0]->menu_id == 2)) {?>

                                                <div>

                                                    <form id="myForm" name="myForm" method="POST" action="<?php echo base_url('front/submit_kundali')?>" onsubmit="return call()">

                                                        <input type="hidden" name="super_cat_id" value="<?php echo $categories[0]->super_cat_id?>">

                                                        <input type="hidden" name="category_id" value="<?php echo $categories[0]->id?>">

                                                        <input type="hidden" name="package_duration" id="package_duration" value="<?php echo $categories[0]->package_duration?>">

                                                        <input type="hidden" id="package_price" name="package_price" value="<?php echo $categories[0]->package_price?>">

                                                        <input type="hidden" name="gst_price" id="gst_price" value="<?php echo ($categories[0]->package_price/100) * 18?>">

                                                        <input type="hidden" name="real_price" id="real_price" value="<?php echo (($categories[0]->package_price/100) * 18)+ $categories[0]->package_price?>">

                                                            <input type="hidden" name="service_price" id="final_price" value="<?php echo (($categories[0]->package_price/100) * 18)+ $categories[0]->package_price?>">

                                                            <input type="hidden" name="sevice_name" value="<?php echo $categories[0]->category?>">

                                                            <input type="hidden" name="service_type" value="Online Pooja">



                                                            <input type="hidden" name="wallet_balence" value="<?php echo $wallet_balence[0]->wallet_balence?>">

                                                            <input type="hidden" name="coupon_code" id="coupon_code" value="0">

                                                            <input type="hidden" name="coupon_discount" id="coupon_discount" value="0">

                                                            <input type="hidden" name="package_duration" value="<?php echo $categories[0]->package_duration?>">

                                                    </form>

                                                </div>

                                                <a class="popup-with-zoom-anim ast_btn" onclick="payment()" href="#invoice-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i>BUY NOW</a>

                                                <?php }else{ ?>

                                                    <a class="buy_btn ast_btn" href="<?php echo base_url('horoscope-report/'.$categories[0]->slug_category)?>/buy-now/" id="add_redirect"><strong>Buy Now</strong></a>

                                                    <?php }?>



                                                        <?php }else{?>



                                                            <a class="popup-with-zoom-anim buy_btn ast_btn" href="#login-dialog" id="add_redirect"><strong>Buy Now</strong></a>

                                                            <?php }?>

                                                            

                                                             <a style="cursor: context-menu;" class="buy_btn ast_btn"><strong>Price  <?php echo $categories[0]->package_price?> </strong></a>



                                    </div>



                                </div>



                            </div>
                            
                            



                        </div>



                    </div>



                </div>



            </div>
            
            
            <!--<div class="col-md-12 comp_img">-->
            <!--                    <img src="<?php echo base_url();?>assets/categories_image/<?php echo $categories[0]->comp_image?>" class="img-responsive" />-->
            <!--                </div>-->



        </div>



        <!--                     invoice models                          -->

        <div id="invoice-dialog" class="zoom-anim-dialog mfp-hide">



            <h1>Order Details</h1>



            <div class="">



                <table class="table">



                    <p id="balance" style="color:red;"></p>



                    <tr style="display: none">



                        <td><b>Consultation Time</b></td>



                        <td id="call_duration_popup"></td>



                    </tr>



                    <tr>



                        <td><b>Service Amount</b></td>



                        <td id="without_gst_amount"></td>



                    </tr>



                    <tr>



                        <td><b>GST Applicable</b></td>



                        <td id="GST">18%</td>



                    </tr>



                    <tr>



                        <td><b>GST Amount</b></td>



                        <td id="total_price"></td>



                    </tr>



                    <tr>



                        <td><b>I Have a Coupon Code</b></td>

                        <p id="coupon_error"></p>

                        <td>

                            <input type="" onchange="promo(this.value)" name="">

                        </td>



                    </tr>

                    <tr>



                        <td><b>Total invoice amount to Pay</b></td>



                        <td id="invoice_amount"></td>



                    </tr>



                </table>



            </div>



            <button type="submit" onclick="call('wallet')" id="" class="ast_btn">Pay With Wallet</button>



            <a href="<?php echo base_url('front/wallet')?>" class="btn ast_btn" id="add_mony" style="display: none;">Add Money</a>



            <button type="submit" onclick="call('bank')" class="ast_btn">Pay With Bank</button>



        </div>

        <!-- invoice close -->

        

        </div>

        

    </div>



        <script type="text/javascript">

            function login() {



                $('#login-dialog').model({



                    backdrop: 'static',



                    keybord: false,



                })



            }

        </script>



        <script type="text/javascript">

            var package_price = $('#package_price').val();



            var gst_price = $('#gst_price').val();



            var final_price = $('#final_price').val();



            var package_duration = $('#package_duration').val() + ' Month';



            var real_price = $('#real_price').val();



            document.getElementById("without_gst_amount").innerHTML = Math.round(package_price);

            document.getElementById("total_price").innerHTML = parseInt(gst_price);

            document.getElementById("invoice_amount").innerHTML = final_price;

            document.getElementById("call_duration_popup").innerHTML = package_duration;



            function promo(coupon) {



                $.ajax({



                    url: "<?php echo base_url('front/ajax_get_coupon')?>",



                    type: 'POST',



                    dataType: "json",



                    data: {

                        'coupon': coupon

                    },



                    success: function(response) {



                        if (response.status == 1) {

                            alert(response.coupon[0].coupan_code);

                            var coupon = Math.round((($('#package_price').val() / 100) * response.coupon[0].discount_parcent).toFixed(3));

                            alert(coupon);

                            $('#coupon_error').html('Your Discount Amount Is ' + coupon);

                            total_coupon_dis = final_price - coupon;

                            $('#final_price').val(Math.round(total_coupon_dis));

                            $('#coupon_discount').val(response.coupon[0].discount_parcent);

                            $('#coupon_code').val(response.coupon[0].coupan_code);

                            $('#invoice_amount').html(Math.round(total_coupon_dis));

                        } else {

                            document.getElementById("myForm").reset();

                            document.getElementById("invoice_amount").innerHTML = Math.round(real_price);

                            $('#coupon_discount').val('0');

                            $('#coupon_code').val('0');

                            $('#coupon_error').html('Invalide Coupon');

                        }



                    }



                });

            }



            function call(pay_mode) {



                var service_price = $('#final_price').val();



                var wallet_balence = "<?php echo $wallet_balence[0]->wallet_balence?>";



                // alert(service_price);



                // alert(wallet_balence);

                   if(pay_mode == 'wallet'){

                if (wallet_balence - 1 < service_price - 1) {



                    document.getElementById('balance').innerHTML = "Insufficient Balance. Please Add Money";



                    $("#add_mony").show();



                    // window.location.href = "<?php echo base_url()?>front/wallet";



                    return false;



                } else {
                    document.getElementById("myForm").submit();
                }
            }else{
                 document.myForm.action = "<?php echo base_url('front/pay_with_bank_sub_cat')?>";
             document.getElementById("myForm").submit();   
            }



            }

        </script>



        <!-- product Description section End -->