<style>
    input[type="radio"] {
    height: 30px !important;
    width: 30px!important;
    margin: 0 10px;
    position: absolute;
    top: 14px;
    left: 20px;
   
}
label {
    background: #f5f5f5;
    padding: 10px 60px;
}
.ft-chk{float:right;}
.ast_btn1111{
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
#myModalopn .close{display:none;}


  @media(max-width:768px){
      #myModalopn .close i{font-size: 20px;
    text-align: center;
    line-height: 31px;
    display: block;
    vertical-align: middle;
    margin-left: 9px;
    margin-top: -3px;}
      .ft-chk{float:none;text-align:center;}

      .pl0{padding-left:0px;}
      .modal-design {
    background: #fff;
     margin: 10px;
    padding: 5px;
}
.modal-design form{display:inline-block;width:100%;}
.modal{

    z-index: 9999999999;
}


    
#myModalopn .close{
    display:block;
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

<div class="ast_journal_wrapper ast_toppadder70 ast_bottompadder70" >
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<img class="wallet_class" src="<?php echo base_url('front-assets/images/wallet icon.png');?>" style="width:30%">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="ast_journal_box_wrapper">
					
                           
					<form>
						  <h3>Your Wallet Balance <span>₹ <?php echo $wallet_balence[0]->wallet_balence?></span></h3> 
						  <!--<span>Please select your calling pack</span>-->
					</form>
                        
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="background: #f4f4f4;">
			    <h3 style="text-align:center;padding-bottom:30px">Select Packages to <span style="color:#fa8819">Recharge your wallet</span></h3>
				<?php foreach ($package as  $row) {
				
				 ?>     
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >

					<div class="ast_packages_box" id="packname<?php echo $row->package_price?>">
 <input type="hidden" class="pack_amt" name="payble_amount" value="<?php echo $row->package_price?>">
							<input type="hidden" class="pack_name" name="package_name_<?php echo $row->package_name?>" value="<?php echo $row->package_name?>">
						<h3><?php echo $row->package_name?></h3>

						<div class="ast_price">

							<h2>₹ <?php echo $row->package_price?></h2>

							<p></p>

						</div>

						<div class="clearfix"></div>

						<button type="button" class="ast_btn buy_pack" id="buy_pack" >Buy Now</button>

					</div>

				</div>
	<?php }?>
			</div>
			
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >
			    <div id="myModalopn">
			        <div id="sidebar">
			        <div class="modal-design">
			            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
			     <input class="form-control" id="pack_amount" name="pack_amount" value="1000" type="hidden"/>
			     <input class="form-control" id="pack_gst" name="pack_gst" value="180" type="hidden"/>
			     <input class="form-control" id="pack_after_disc" name="pack_after_disc" value="1000" type="hidden"/>
			     <input class="form-control" id="pack_disc" name="pack_disc" value="0" type="hidden"/>
			     <input class="form-control" id="pack_coupon" name="pack_coupon" value="" type="hidden"/>
			     <input class="form-control" id="pack_coupon_disc" name="pack_coupon_disc" value="0" type="hidden"/>
		                 <input class="form-control" id="package_name" name="package_name" value="MARS" type="hidden"/>
		               <form name="razorpay-form" action="<?= base_url()?>status/" id="payuForm" method="POST">
  <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
  <input type="hidden" name="merchant_order_id" id="merchant_order_id" value=""/>
  <input type="hidden" name="merchant_trans_id" id="txnid" value=""/>
  <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="MARS"/>
  <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?= base_url()?>status/"/>
  <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?= base_url()?>status/"/>
  <input type="hidden" name="card_holder_name_id" id="cust_name" value="<?php echo $this->session->userdata('name')?>"/>
  <input type="hidden" name="merchant_total" id="merchant_total" value="118000"/>
  <input type="hidden" name="merchant_amount" id="amount" value="118000"/>
 
 
		               
		                
		                <div class="form-group">
		                     <table width="100%" cellspacing="0" cellpadding="0" style="line-height: 40px; font-size: 14px; text-indent: 7px; border: 1px solid #aaa;">
<tbody>
<tr>
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Amount</td>
<td style="border-bottom:1px solid #aaa;">Rs. <span id="tot_amount">1000</span>.00</td>
</tr>
<tr style="background-color: #ededed">
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Discount </td>
<td style="border-bottom:1px solid #aaa;">Rs. <span id="disc_price">0</span>.00</td>
</tr>
<tr>
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">GST @ 18.00 % </td>
<td style="border-bottom:1px solid #aaa;">Rs. <span id="gst_price">180.00</span></td>
</tr>
<tr style="background-color: #ededed">
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Talktime Value</td>
<td style="border-bottom:1px solid #aaa;">Rs. <span id="tot_talktime">1000</span>.00</td>
</tr>
<tr style=" background-color: #ff871f; color: #fff; font-weight: bold;">
<td style="border-right:1px solid #aaa;">Net Amount Payable (Rs.)</td>
<td style="">Rs. <span id="net_price">1180</span>.00</td>
</tr>
</tbody>
</table>
<br>
<p id="promo" style="text-decoration: underline;cursor:pointer;">Do you have coupon code ?</p>
<div class="row">
<div class="col-xs-9"><input class="form-control" placeholder="Enter your coupon code" type="text" id="promocode" style="display:none"/></div>
<div class="col-xs-3 pl0"><a id="apply_promo" style="display:none" class="ast_btn1111">Apply</a></div> 
</div>
<p style="display:none" id="coupon_error"></p>
		                </div>
		                <div class="form-group ft-chk">
		                	<button type="button" id="pay_now"  value="Pay Now" class="ast_btn" >Pay Now</button>
		                </div>
		                </form>
		                </div>
		                </div>
		                
		                
			</div>
			</div>
		</div>
	</div>
</div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    $(document).ready(function () {
            $(".ast_packages_box").click(function(){
               
                var pack_amt = $(this).children('input.pack_amt').val();
                var pack_name = $(this).children('input.pack_name').val();
                var gst = (pack_amt * 18)/100;
                var total_amt = parseInt(pack_amt) + parseInt(gst);
               
                    $('#net_price').html(total_amt);
                     $('#pack_amount').val(pack_amt);
                     $('#pack_gst').val(gst);
                     $('#pack_after_disc').val(pack_amt);
                     $('#amount').val((total_amt)*100);
                     $('#merchant_total').val((total_amt)*100);
                     $('#productinfo').val(pack_name);
                     $('#package_name').val(pack_name);
                     $('#gst_price').html(gst);
                     $('#tot_amount').html(pack_amt);
                     $('#tot_talktime').html(pack_amt);
                     $('#promocode').val('');
                     $('#disc_price').html('0');
              
}); 

       $("#promo").click(function(){
      $('#promocode').css('display','block');
    $('#apply_promo').css('display','block');     
}); 
 $("#promocode").on('keyup paste', function () {
     var real_price =  $('#pack_amount').val();
     var gst =  (real_price * 18)/100;
     if($('#promocode').val()  == ""){
         $('#amount').val((parseInt(real_price) + parseInt(gst))*100);
         $('#merchant_total').val((parseInt(real_price) + parseInt(gst))*100);
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
 $("#apply_promo").click(function(){
    var coupon_code = $('#promocode').val();
    var real_price =  $('#pack_amount').val();
    if(coupon_code !=''){
     $.ajax({
            url: "<?php echo base_url('front/ajax_get_coupon')?>",
            type: 'POST',
              dataType: "json",
            data: {'coupon':coupon_code},
            success: function(response) {
              if(response.status == 1){
              	   var coupon = ((real_price * response.coupon[0].discount_parcent)/100);
              	   //console.log(coupon);
              	   var newamt = real_price - coupon;
              	   //console.log(newamt);
              	     var gstcoupon = (newamt * 18)/100;
              	 //    $('#coupon_error').html('Your Discount Amount Is Rs. '+ coupon);
              	       total_coupon_dis = Math.round(newamt + gstcoupon);
              	       //console.log(total_coupon_dis);
                $('#amount').val((total_coupon_dis)*100);
                $('#merchant_total').val((total_coupon_dis)*100);
                $('#net_price').html(total_coupon_dis);
                $('#gst_price').html(gstcoupon);
                $('#disc_price').html(coupon);
                $('#coupon_error').html(' ');
                $('#pack_coupon').val(response.coupon[0].coupan_code);
                $('#pack_coupon_disc').val(response.coupon[0].discount_parcent);
                $('#pack_gst').val(gstcoupon);
                $('#pack_disc').val(coupon);
                $('#pack_after_disc').val(newamt);
              }else{
          var gst =  (real_price * 18)/100;
                   $('#amount').val((parseInt(real_price) + parseInt(gst))*100);
                   $('#merchant_total').val((parseInt(real_price) + parseInt(gst))*100);
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
        } else{
         $('#coupon_error').html(' ');
        }
 });
 $("#pay_now").click(function(){
        var cust_email = '<?php echo $this->session->userdata('username')?>';
        var cust_name = '<?php echo $this->session->userdata('name')?>';
        var cust_mobile = <?php echo $this->session->userdata('mobile')?>;
        var cust_id = <?php echo $this->session->userdata('id')?>; 
        var pack_amt = $('#amount').val();
        var pack_amt_dsc = $('#pack_amount').val();
        var pack_name = $('#package_name').val();
        var pack_disc = $('#pack_disc').val();
        var pack_gst = $('#pack_gst').val();
        var pack_after_disc = $('#pack_after_disc').val();
        var pack_coupon = $('#pack_coupon').val();
        var pack_coupon_disc = $('#pack_coupon_disc').val();
        $.ajax({
            url: "<?php echo base_url('front/pay')?>",
            type: 'POST',
            dataType: "json",
            data: {
                'pack_amt':pack_amt,
                'pack_amt_dsc':pack_amt_dsc,
                'pack_name':pack_name,
                'pack_disc':pack_disc,
                'pack_gst':pack_gst,
                'pack_after_disc':pack_after_disc,
                'pack_coupon':pack_coupon,
                'pack_coupon_disc':pack_coupon_disc,
                'cust_email':cust_email,
                'cust_name':cust_name,
                'cust_mobile':cust_mobile,
                'cust_id':cust_id
            },
            success: function(response) {
                if (response.status == 1) {
                     $('#merchant_order_id').val(response.message['ORDER_ID']);
                       $('#txnid').val(response.message['ORDER_ID']);
                       setTimeout(function(){razorpaySubmit(); }, 1000);
                      var razorpay_options = {
    key: "rzp_live_pCyVuk4BLZGBkJ",
    amount: pack_amt,
    name: "Wallet Recharge",
    description: "Order # "+ response.message['ORDER_ID'],
    netbanking: true,
    currency: "INR",
    prefill: {
      name:cust_name,
      email: cust_email,
      contact: cust_mobile
    },
    notes: {
      soolegal_order_id: response.message['ORDER_ID'],
    },
    handler: function (transaction) {
        document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
        document.getElementById('payuForm').submit();
    },
    "modal": {
        "ondismiss": function(){
            location.reload()
        }
    }
  };
  var razorpay_submit_btn, razorpay_instance;

  function razorpaySubmit(el){
    if(typeof Razorpay == 'undefined'){
      setTimeout(razorpaySubmit, 200);
      if(!razorpay_submit_btn && el){
        razorpay_submit_btn = el;
        el.disabled = true;
        el.value = 'Please wait...';  
      }
    } else {
      if(!razorpay_instance){
        razorpay_instance = new Razorpay(razorpay_options);
        if(razorpay_submit_btn){
          razorpay_submit_btn.disabled = false;
          razorpay_submit_btn.value = "Pay Now";
        }
      }
      razorpay_instance.open();
    }
  }
                     
                }
            }            

        });
}); 

if ($(window).width() < 768) {
         $('.ast_btn').attr({'data-toggle':'modal','data-target':'#myModalopn'});
         $('#myModalopn').addClass("modal fade");
         $('#myModalopn').attr('role','modal');
    } else {
        $("#myModal1").remove();
         $('.ast_btn').removeAttr({'data-toggle':'modal','data-target':'#myModalopn'});
         $('#myModalopn').removeClass("modal fade");
         $('#myModalopn').removeAttr('role','modal');
    }
    
if ($(window).width() > 769) {
    $(window).scroll(function () {   
      
    if($(window).scrollTop() > 500) {
       $('#sidebar').css('position','fixed');
       $('#sidebar').css('top','136px'); 
         $('#sidebar').css('width','457px'); 
    }
   
    else if ($(window).scrollTop() <= 500) {
       $('#sidebar').css('position','');
       $('#sidebar').css('top','');
       $('#sidebar').css('width','100%'); 
    }  
       if ($('#sidebar').offset().top + $("#sidebar").height() > $(".ast_team_wrapper").offset().top) {
           $('#sidebar').css('top',-($("#sidebar").offset().top + $("#sidebar").height() - $(".ast_team_wrapper").offset().top));
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
           <input class="form-control" id="pack_amount" name="pack_amount" value="1000" type="hidden"/>
			     <input class="form-control" id="pack_gst" name="pack_gst" value="180" type="hidden"/>
			     <input class="form-control" id="pack_after_disc" name="pack_after_disc" value="1000" type="hidden"/>
			     <input class="form-control" id="pack_disc" name="pack_disc" value="0" type="hidden"/>
			     <input class="form-control" id="pack_coupon" name="pack_coupon" value="" type="hidden"/>
			     <input class="form-control" id="pack_coupon_disc" name="pack_coupon_disc" value="0" type="hidden"/>
		                 <input class="form-control" id="package_name" name="package_name" value="MARS" type="hidden"/>
		               <form name="razorpay-form" action="<?= base_url()?>status/" id="payuForm" method="POST">
  <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
  <input type="hidden" name="merchant_order_id" id="merchant_order_id" value=""/>
  <input type="hidden" name="merchant_trans_id" id="txnid" value=""/>
  <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="MARS"/>
  <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?= base_url()?>status/"/>
  <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?= base_url()?>status/"/>
  <input type="hidden" name="card_holder_name_id" id="cust_name" value="<?php echo $this->session->userdata('name')?>"/>
  <input type="hidden" name="merchant_total" id="merchant_total" value="118000"/>
  <input type="hidden" name="merchant_amount" id="amount" value="118000"/>
		                
		                <div class="form-group">
		                     <table width="100%" cellspacing="0" cellpadding="0" style="line-height: 40px; font-size: 14px; text-indent: 7px; border: 1px solid #aaa;">
<tbody>
<tr>
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Amount</td>
<td style="border-bottom:1px solid #aaa;">Rs. <span id="tot_amount">1000</span>.00</td>
</tr>
<tr style="background-color: #ededed">
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Discount </td>
<td style="border-bottom:1px solid #aaa;">Rs. <span id="disc_price">0</span>.00</td>
</tr>
<tr>
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">GST @ 18.00 % </td>
<td style="border-bottom:1px solid #aaa;">Rs. <span id="gst_price">180.00</span></td>
</tr>
<tr style="background-color: #ededed">
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Talktime Value</td>
<td style="border-bottom:1px solid #aaa;">Rs. <span id="tot_talktime">1000</span>.00</td>
</tr>
<tr style=" background-color: #ff871f; color: #fff; font-weight: bold;">
<td style="border-right:1px solid #aaa;">Net Amount Payable (Rs.)</td>
<td style="">Rs. <span id="net_price">1180</span>.00</td>
</tr>
</tbody>
</table>
<br>
<p id="promo" style="text-decoration: underline;cursor:pointer;width: 56%;">Do you have coupon code ?</p>
<div class="col-md-6"><input class="form-control" placeholder="Enter your coupon code" type="text" id="promocode" style="display:none"/></div>
<div class="col-md-6"><a id="apply_promo" style="display:none;width:30px;height: 35px; margin-left: -40px;line-height: 33px;" class="ast_btn">Apply</a></div> 
<p style="display:none" id="coupon_error"></p>
		                </div>
		                
		                <div class="form-group float-right" style="float:right">
		                	<button type="button" id="pay_now"  value="Pay Now" class="ast_btn" >Pay Now</button>
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