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


.serc_flds {width:50%; margin:0 auto; padding:30px 0 40px; display:table; position:relative;}
.serc_flds input {width:100%; border-radius:4px; border:#ccc solid 1px; padding:10px 10px; font-size:13px;}
.serc_flds button {position:absolute; right:3px; background:#ff871f; border:none; border-radius:4px; color:#fff; font-size:14px; padding:7px 10px;
    margin-top:3px;
}

.socal_md ul li:last-child {margin-right: 0;}
.socal_md ul li img {width: 50px;}
.socal_md ul li {float: left; margin-right: 20px;}
.socal_md ul {list-style: none;  margin: 0; padding: 0;}
.socal_md {display: table; margin: 0 auto; margin-top:10px;}
.socal_md ul li:nth-child(2) img {width: 33px; position: relative; top: 8px;}


@media (max-width:767px){
.serc_flds {width: 90%; padding: 20px 0 20px;}	
	
 .socal_md ul li img {width:38px;}
 .socal_md{margin-bottom:30px;}
  .socal_md {margin-bottom:30px; background:#fff; width:100%; display:inline-block; padding:10px 10px 20px; margin-top:0;}
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

<div class="ast_journal_wrapper ast_toppadder70 ast_bottompadder70 walletpage" >
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
				<img class="wallet_class" src="<?php echo base_url('front-assets/images/wallet icon.png');?>" style="width:30%">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-9 col-xs-9 price">
				<div class="ast_journal_box_wrapper">
					
                           
					<form>
						  <h3>Your Wallet Balance <span>USD $ <?php echo $wallet_balence[0]->wallet_balence?></span></h3> 
						  <!--<span>Please select your calling pack</span>-->
					</form>
                        
				</div>
			<div class="clearfix"></div>
			</div>
			<div class="serc_flds">
			  <form>
			   <input type="text" value="" name="" placeholder="Enter Amount in INR" required="required" />
			   <button type="submit" value="">Proceed</button>
			  </form>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 astro-recharge" style="background: #f4f4f4;">
			    <h3 style="text-align:center;padding-bottom:30px">Select Packages to <span style="color:#fa8819">Recharge your wallet</span></h3>
				<?php foreach ($package as  $row) {
				
				 ?>     
				<div class="col-lg-4 col-md-4 col-sm-3 col-xs-6" >

					<div class="ast_packages_box" id="packname<?php echo $row->package_price_dollar?>">
          <input type="hidden" class="pack_amt" name="payble_amount" value="<?php echo $row->package_price_dollar?>">
							<input type="hidden" class="pack_name" name="package_name_<?php echo $row->package_name?>" value="<?php echo $row->package_name?>">
						<h3><?php echo $row->package_name?></h3>

						<div class="ast_price">

							<h2>USD $ <?php echo $row->package_price_dollar?></h2>

							<p></p>

						</div>

						<div class="clearfix"></div>

						<button type="button" class="ast_btn buy_pack" id="buy_pack" >Buy Now</button>

					</div>

				</div>
	<?php }?>
			</div>
			
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >
			    <div id="myModalopn" class="paytable">
			        <div id="sidebar">
			        <div class="modal-design">
			            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
			      <input class="form-control" id="pack_amount" name="pack_amount" value="25" type="hidden"/>
			     <input class="form-control" id="pack_gst" name="pack_gst" value="" type="hidden"/>
			     <input class="form-control" id="pack_after_disc" name="pack_after_disc" value="25" type="hidden"/>
			     <input class="form-control" id="pack_disc" name="pack_disc" value="0" type="hidden"/>
			     <input class="form-control" id="pack_coupon" name="pack_coupon" value="" type="hidden"/>
			     <input class="form-control" id="pack_coupon_disc" name="pack_coupon_disc" value="0" type="hidden"/>
		                 <input class="form-control" id="package_name" name="package_name" value="VENUS" type="hidden"/>
		               <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="payuForm" name="payuForm">
		                <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="business" value="svinay@onegodmed.com">
		                
		                <div class="form-group">
		                     <table width="100%" cellspacing="0" cellpadding="0" style="line-height: 40px; font-size: 14px; text-indent: 7px; border: 1px solid #aaa;">
<tbody>
<tr>
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Amount</td>
<td style="border-bottom:1px solid #aaa;">USD $ <span id="tot_amount">25</span>.00</td>
</tr>
<tr style="background-color: #ededed">
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Discount </td>
<td style="border-bottom:1px solid #aaa;">USD $ <span id="disc_price">0</span>.00</td>
</tr>
<tr style="background-color: #ededed">
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Talktime Value</td>
<td style="border-bottom:1px solid #aaa;">USD $ <span id="tot_talktime">25</span>.00</td>
</tr>
<tr style=" background-color: #ff871f; color: #fff; font-weight: bold;">
<td style="border-right:1px solid #aaa;">Net Amount Payable (USD $)</td>
<td style="">USD $ <span id="net_price">25</span>.00</td>
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
		                   <input class="form-control" id="amount" name="amount" value="25" type="hidden"/>
		                </div>
		                <div class="form-group">
		                     <input type="hidden" id="productinfo" name="item_name" value="VENUS">
                    <input type="hidden" id="item_number" name="item_number" value="">
                    <input type="hidden" name="currency_code" value="USD">
					
                    <!-- Specify URLs -->
                    <input type="hidden" name="return" value="<?= base_url()?>status/">
                    <input type="hidden" name="cancel_return" value="<?= base_url()?>wallet/">
		                </div>
		               
		                <div class="form-group ft-chk">
		                	<button type="button" id="pay_now"  value="Pay Now" class="ast_btn" >Pay Now</button>
		                </div>
		                </form>
		                </div>
		                </div>
		                
		               <div class="clearfix"></div>
                  <div class="socal_md">
                  <div> <h4> We Accept</h4></div>
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
    $(document).ready(function () {
            $(".ast_packages_box").click(function(){
               
                var pack_amt = $(this).children('input.pack_amt').val();
                var pack_name = $(this).children('input.pack_name').val();
               
                    $('#net_price').html(pack_amt);
                     $('#pack_amount').val(pack_amt);
                     $('#pack_gst').val('0');
                     $('#pack_after_disc').val(pack_amt);
                     $('#amount').val(pack_amt);
                     $('#productinfo').val(pack_name);
                     $('#package_name').val(pack_name);
                     $('#gst_price').html('0');
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
     if($('#promocode').val()  == ""){
         $('#amount').val(real_price);
         $('#net_price').html(real_price);
         $('#gst_price').html('0');
         $('#disc_price').html('0.00');
         $('#coupon_error').html('');
         $('#pack_coupon').val('');
                $('#pack_coupon_disc').val('0');
                $('#pack_gst').val('0');
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
              	 //    $('#coupon_error').html('Your Discount Amount Is Rs. '+ coupon);
              	       total_coupon_dis = Math.round(newamt);
              	       //console.log(total_coupon_dis);
                $('#amount').val(total_coupon_dis);
                $('#net_price').html(total_coupon_dis);
                $('#gst_price').html('0');
                $('#disc_price').html(coupon);
                $('#coupon_error').html(' ');
                $('#pack_coupon').val(response.coupon[0].coupan_code);
                $('#pack_coupon_disc').val(response.coupon[0].discount_parcent);
                $('#pack_gst').val('0');
                $('#pack_disc').val(coupon);
                $('#pack_after_disc').val(newamt);
              }else{
                   $('#amount').val(real_price);
                    $('#disc_price').html('0.00');
                    $('#gst_price').html('0');
                    $('#net_price').html(real_price);
                    $('#coupon_error').css('display', 'block');
                     $('#coupon_error').css('color', 'red');
                    $('#coupon_error').html('Invalid Coupon');
                    $('#pack_coupon').val('');
                $('#pack_coupon_disc').val('0');
                $('#pack_gst').val('0');
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
            url: "<?php echo base_url('front/paypal')?>",
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
                       $('#item_number').val(response.message['tid']);
                       setTimeout(function(){ document.getElementById("payuForm").submit(); }, 1000);
                }
            }            

        });
}); 
if ($(window).width() < 768) {
         $('.ast_packages_box').attr({'data-toggle':'modal','data-target':'#myModalopn'});
         $('#myModalopn').addClass("modal fade");
         $('#myModalopn').attr('role','modal');
    } else {
        $("#myModal1").remove();
         $('.ast_packages_box').removeAttr({'data-toggle':'modal','data-target':'#myModalopn'});
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
          <input class="form-control" id="pack_amount" name="pack_amount" value="25" type="hidden"/>
			     <input class="form-control" id="pack_gst" name="pack_gst" value="" type="hidden"/>
			     <input class="form-control" id="pack_after_disc" name="pack_after_disc" value="25" type="hidden"/>
			     <input class="form-control" id="pack_disc" name="pack_disc" value="0" type="hidden"/>
			     <input class="form-control" id="pack_coupon" name="pack_coupon" value="" type="hidden"/>
			     <input class="form-control" id="pack_coupon_disc" name="pack_coupon_disc" value="0" type="hidden"/>
		                 <input class="form-control" id="package_name" name="package_name" value="VENUS" type="hidden"/>
		               <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="payuForm" name="payuForm">
		                
		                <div class="form-group">
		                     <table width="100%" cellspacing="0" cellpadding="0" style="line-height: 40px; font-size: 14px; text-indent: 7px; border: 1px solid #aaa;">
<tbody>
<tr>
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Amount</td>
<td style="border-bottom:1px solid #aaa;">USD $ <span id="tot_amount">25</span>.00</td>
</tr>
<tr style="background-color: #ededed">
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Discount </td>
<td style="border-bottom:1px solid #aaa;">USD $ <span id="disc_price">0</span>.00</td>
</tr>
<tr style="background-color: #ededed">
<td style="border-bottom:1px solid #aaa; border-right:1px solid #aaa;">Talktime Value</td>
<td style="border-bottom:1px solid #aaa;">USD $ <span id="tot_talktime">25</span>.00</td>
</tr>
<tr style=" background-color: #ff871f; color: #fff; font-weight: bold;">
<td style="border-right:1px solid #aaa;">Net Amount Payable (USD $)</td>
<td style="">USD $ <span id="net_price">25</span>.00</td>
</tr>
</tbody>
</table>
<br>
<p id="promo" style="text-decoration: underline;cursor:pointer;width: 56%;">Do you have coupon code ?</p>
<div class="col-md-6"><input class="form-control" placeholder="Enter your coupon code" type="text" id="promocode" style="display:none"/></div>
<div class="col-md-6"><a id="apply_promo" style="display:none;width:30px;height: 35px; margin-left: -40px;line-height: 33px;" class="ast_btn">Apply</a></div> 
<p style="display:none" id="coupon_error"></p>
		                   <input class="form-control" id="amount" name="amount" value="25" type="hidden"/>
		                </div>
		                <div class="form-group">
		                  <input type="hidden" id="productinfo" name="item_name" value="EARTH">
                    <input type="hidden" id="item_number" name="item_number" value="">
                    <input type="hidden" name="currency_code" value="INR">
					
                    <!-- Specify URLs -->
                    <input type="hidden" name="return" value="<?= base_url()?>status/">
                    <input type="hidden" name="cancel_return" value="<?= base_url()?>wallet/">
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

