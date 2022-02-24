<div class="ast_pagetitle">
  <div class="ast_img_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="page_title">
          <h2>Checkout</h2>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <ul class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>">home</a></li>
          <li>//</li>
          <li><a href="#">Checkout</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
    <div class="container" style="background-color:#cccccc3b;">
	<div class="row">
	     <div class="col-md-12" >
        <div class="">
    
          <div class="ast_heading">

					<h3><?php echo $productinfo; ?> CALLING PACK</h3>
				</div>
        </div>
    </div>
     </div>
    <div class"row">
        <div class="col-md-2"></div>  
        <div class="col-md-8">
        	<div class="card">
        		<div class="card-body">
        			<form action="<?php echo $action; ?>/_payment" method="post" id="payuForm" name="payuForm">
		                <input type="hidden" name="key" value="<?php echo $mkey; ?>" />
		                <input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
		                <input type="hidden" name="txnid" value="<?php echo $tid; ?>" />
		                <div class="form-group">
		                     <table width="100%" cellspacing="0" cellpadding="0" style="line-height: 40px; font-size: 14px; text-indent: 7px; border: 1px solid #aaa;">
<tbody>
<tr>
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Amount</td>
<td style="border-bottom:1px solid #aaa;">Rs. <?php echo $wogamount; ?>.00</td>
</tr>
<tr style="background-color: #ededed">
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Discount </td>
<td style="border-bottom:1px solid #aaa;">Rs. <span id="disc_price">0.00</span></td>
</tr>
<tr>
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">GST @ 18.00 % </td>
<td style="border-bottom:1px solid #aaa;">Rs. <span id="gst_price"><?php echo $gst; ?>.00</span></td>
</tr>
<tr style="background-color: #ededed">
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Talktime Value</td>
<td style="border-bottom:1px solid #aaa;">Rs. <?php echo $wogamount; ?>.00</td>
</tr>
<tr style=" background-color: #ff871f; color: #fff; font-weight: bold;">
<td style="border-right:1px solid #aaa;">Net Amount Payable (Rs.)</td>
<td style="">Rs. <span id="net_price"><?php echo $amount; ?>.00</span></td>
</tr>
</tbody>
</table>
<br>
<p id="promo" style="display:none;text-decoration: underline;cursor:pointer;width: 27%;">Do you have coupon code ?</p>
<div class="col-md-6"><input class="form-control" name="promocode" placeholder="Enter your coupon code" type="text" id="promocode" style="display:none"/></div>
<div class="col-md-6"><a id="apply_promo" style="display:none;width:30px;height: 35px; margin-left: -129px;line-height: 33px;" class="ast_btn">Apply</a></div> 
<p style="display:none" id="coupon_error"></p>
                    
		                   <input class="form-control" id="amount" name="amount" value="<?php echo $amount; ?>" readonly type="hidden"/>
		                </div>
		                <div class="form-group">
		                   
		                    <input type="hidden" class="form-control" name="firstname" id="firstname" value="<?php echo $name; ?>" readonly/>
		                </div>
		                <div class="form-group">
		                   
		                    <input type="hidden" class="form-control" name="email" id="email" value="<?php echo $mailid; ?>" readonly/>
		                </div>
		                <div class="form-group">
		                  
		                    <input type="hidden" class="form-control" name="phone" value="<?php echo $phoneno; ?>" readonly />
		                </div>
		               <!--  <div class="form-group">
		                  
		                    <textarea type="hidden" class="form-control" name="productinfo" readonly><?php echo $productinfo; ?></textarea>
		                </div> -->
		                <div class="form-group">
		                    
		                    <input type="hidden" class="form-control" name="address1" value="<?php echo $address; ?>" readonly/>     
		                </div>
		                <div class="form-group">
		                    <input name="surl" value="<?php echo $sucess; ?>" size="64" type="hidden" />
		                    <input name="furl" value="<?php echo $failure; ?>" size="64" type="hidden" />  
		                    <!--for test environment comment  service provider   -->
		                    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
		                    <input name="curl" value="<?php echo $cancel; ?> " type="hidden" />
		                </div>
		                <div class="form-group float-right" style="float:right">
		                	<input type="submit" value="Pay Now" class="ast_btn" />
		                </div>
		            </form> 
        		</div>
        	</div>
        	                                   
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>
    </div>
	<!-- Footer -->
	<script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="https://www.onegodmed.com/front-assets/images/header/logo.png"></script>
<script>
    $(document).ready(function () {
       $("#promo").click(function(){
      $('#promocode').css('display','block');
    $('#apply_promo').css('display','block');     
}); 
 $("#promocode").on('keyup paste', function () {
     if($('#promocode').val()  == ""){
         $('#amount').val(<?php echo $amount; ?>);
         $('#net_price').html(<?php echo $amount; ?>);
         $('#gst_price').html(<?php echo $gst; ?>);
         $('#disc_price').html('0.00');
         $('#coupon_error').html(' ');
     }
 });
 $("#apply_promo").click(function(){
    var coupon_code = $('#promocode').val();
    var real_price =  <?php echo $wogamount; ?>;
     $.ajax({

            url: "<?php echo base_url('front/ajax_get_coupon')?>",

            type: 'POST',

              dataType: "json",

            data: {'coupon':coupon_code},

            success: function(response) {

              if(response.status == 1){
      
              	   var coupon = ((real_price * response.coupon[0].discount_parcent)/100).toFixed(2);
              	   //console.log(coupon);
              	   var newamt = real_price - coupon;
              	   //console.log(newamt);
              	     var gstcoupon = (newamt * 18)/100;
              	 //    $('#coupon_error').html('Your Discount Amount Is Rs. '+ coupon);
              	       total_coupon_dis = Math.round(newamt + gstcoupon).toFixed(2);
              	      // console.log(total_coupon_dis);
                $('#amount').val(total_coupon_dis);
                $('#net_price').html(total_coupon_dis);
                $('#gst_price').html(gstcoupon);
                $('#disc_price').html(coupon);
                $('#coupon_error').html(' ');
                $('#coupon_code').val(response.coupon[0].coupan_code);
                $('#coupon_discount').val(coupon);
              }else{
          var gst =  (real_price * 18)/100;
                    $('#coupon_code').val('0');
                    $('#disc_price').html('0.00');
                    $('#gst_price').html(gst);
                    $('#amount').val(parseInt((real_price) + parseInt(gst)).toFixed(2));
                    $('#net_price').html(parseInt(real_price) + parseInt(gst));
                    $('#coupon_error').css('display', 'block');
                     $('#coupon_error').css('color', 'red');
                    $('#coupon_error').html('Invalide Coupon');
              }

            }            

        });
 });
    });
</script>