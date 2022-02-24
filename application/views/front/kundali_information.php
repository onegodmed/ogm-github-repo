<!--Breadcrumb start-->
<?php 
$country = $this->admin->get('countries');
?>
<div class="ast_pagetitle">

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

					<li><a href="<?= base_url()?>">Home</a></li>

					<li>//</li>
					<li><a href="<?= base_url('horoscope-report')?>">Premium Horoscope Report</a></li>
					<li>//</li>

					<li><a href="#"><?php echo $categories[0]->category;?></a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

<!--Breadcrumb end-->

<div class="ast_journal_wrapper ast_toppadder70 ast_bottompadder70">

	<div class="container become_partner">

		<div class="row">

			<div class="">

				<div class="ast_journal_box_wrapper">

<h3 class="top_logo"><i class="fa fa-user" aria-hidden="true"></i> <br> Please provide information for report</h3>

					<form method="post" name="myForm" id="myForm" enctype="multipart/form-data" action="<?php echo base_url('front/submit_kundali');?>">

					

						<p style="color: red;"><?php echo $this->session->flashdata('error')?></p>

						
						
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

						

							<input type="hidden" name="wallet_balence" value="<?php echo $wallet_balence[0]->wallet_balence?>">
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

							
                            <input type="hidden" name="package_duration" id="package_duration" value="<?php echo $categories[0]->package_duration?>">
							
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

				
 <input type="hidden" name="package_price" id="package_price" value="<?php echo $categories[0]->package_price?>">
							
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

							
<input type="hidden" name="sevice_name" value="<?php echo $categories[0]->category;?>">
						</div>
						

                        <input type="hidden" name="category_id" value="<?php echo $categories[0]->id; ?>">

                         <input type="hidden" name="service_type" value="kundali">
                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

							
<input type="hidden" name="gst_price" id="gst_price" value="<?php echo ($categories[0]->package_price/100) * 18?>">
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

							
<input type="hidden" name="real_price" id="real_price" value="<?php echo (($categories[0]->package_price/100) * 18)+ $categories[0]->package_price?>">
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

							
<input type="hidden" name="service_price" id="final_price" value="<?php echo (($categories[0]->package_price/100) * 18)+ $categories[0]->package_price?>">
						</div>
						
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"></div>
						<hr>
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>First Name</label>

							<input type="text" placeholder="First Name" name="fname" required="">

						</div>
                        
 
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					    <input type="hidden" name="coupon_code" id="coupon_code" value="0">

                        <input type="hidden" name="coupon_discount" id="coupon_discount" value="0">

							<label>Last Name</label>

							<input type="text" placeholder="Last Name" name="lname" required="">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Mobile Number</label>

							<input type="number" placeholder="Mobile Number" name="mobile">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Current Location</label>

							<input type="text" placeholder="Current Location" name="current_location" re>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Language</label>
                            <select name="birth_detail" required="">
                            	<option value="Hindi">Hindi</option>
                            	<option value="English">English</option>
                            </select>
							

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Birth Country</label>
                            <select name="birth_country" onchange="myfunction_member(this.value)">
                             <?php foreach ($country as $row) {
                              ?>
								<option value="<?php echo $row->id;?>"><?php echo $row->name?></option>
								<?php }?>
							</select>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Birth State</label>
                            <select name="birth_state" id="state1" onchange="myfunction2_member(this.value)">
				
							</select>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Birth City</label>
                            <select name="birth_city" id="city1">
                            </select>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>DOB</label>

							<input type="date" placeholder="DOB" name="dob" required="">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Time</label>

							<input type="time" placeholder="in AM/PM" name="birth_time" required="">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>gender</label>

							<select name="gender" required="">

								<option value="male">Male</option>

								<option value="female">Female</option>

							</select>

						</div>

						<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>time of day</label>

							<select>

								<option value="1"> Morning </option>

								<option value="2">Afternoon</option>

								<option value="3">Evening </option>

							</select>

						</div>-->

		

					<!--	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Preferred  Date</label>

							<div class="row">

								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

									<input type="text" placeholder="Date">

								</div>

								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

									<input type="text" placeholder="Month">

								</div>

								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

									<input type="text" placeholder="Year">

								</div>

							</div>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Preferred Time</label>

							<div class="row">

								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

									<input type="text" placeholder="Hrs">

								</div>

								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

									<input type="text" placeholder="Mins">

								</div>

								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

									<input type="text" placeholder="Sec">

								</div>

							</div>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>address</label>

							<textarea placeholder="Address" rows="4"></textarea>

						</div>-->

						

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

							  
							<a class="popup-with-zoom-anim ast_btn" href="#invoice-dialog"><i class="fa fa-sign-in" aria-hidden="true"></i>Proceed To Pay</a>

							



						</div>

					</form>

				</div>

			</div>

		</div>

	</div>

</div>


        <!--                     invoice models                          -->

        <div id="invoice-dialog" class="zoom-anim-dialog mfp-hide">



            <h1>Order Details</h1>



            <div class="">



                <table class="table">



                    <p id="balance" style="color:red;"></p>



                    <tr style="display: none">



                        <td><b>Service Amount </b></td>



                        <td id="call_duration_popup"></td>



                    </tr>



                    <tr>



                        <td><b>Service Amount </b></td>



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



                        <td><b>I Have a Coupon Code </b></td>

                        <p id="coupon_error"></p>

                        <td>

                            <input type="" onchange="promo(this.value)" name="">

                        </td>



                    </tr>

                    <tr>



                        <td><b>Total Invoice Amount to Pay</b></td>



                        <td id="invoice_amount"></td>



                    </tr>



                </table>



            </div>



            <button type="submit" onclick="call('wallet')" id="" class="ast_btn">Pay With Wallet</button>



            <a href="<?php echo base_url('front/wallet')?>" class="btn ast_btn" id="add_mony" style="display: none;">Add Money</a>



            <button type="submit" onclick="call('bank')" class="ast_btn">Pay With Bank</button>



        </div>

        <!-- invoice close -->


  <script type="text/javascript">

            var package_price = $('#package_price').val();



            var gst_price = $('#gst_price').val();



            var final_price = $('#final_price').val();



            var package_duration = $('#package_duration').val() + ' Month';



            var real_price = $('#real_price').val();



            document.getElementById("without_gst_amount").innerHTML = Math.round(package_price);

            document.getElementById("total_price").innerHTML = parseInt(gst_price);

            document.getElementById("invoice_amount").innerHTML = Math.round(final_price);

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

                            // alert(response.coupon[0].coupan_code);

                            var coupon = Math.round((($('#package_price').val() / 100) * response.coupon[0].discount_parcent).toFixed(3));

                            // alert(coupon);

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

<script type="text/javascript">
    function myfunction_member(country_id){
         $.ajax({
            url: "<?php echo base_url('front/ajax_get_state')?>",
            type: 'POST',
              dataType: "json",
            data: {'country_id':country_id},
            success: function(response) {
              if(response.status == 1){
                var i =0;
                $("#state1").empty();
                    $("#state1").append("<option value=''>Select</option>");
                 $.each(response.state, function(key, value) {
                $("#state1").append("<option value='"+response.state[i].id+"'>"+response.state[i].name+"</option>")
             i++;
      })
              }else{
                     $("#state1").empty();
              }
            }            
        });
   }

   function myfunction2_member(state_id){
         $.ajax({
            url: "<?php echo base_url('front/ajax_get_city')?>",
            type: 'POST',
              dataType: "json",
            data: {'state_id':state_id},
            success: function(response) {
              if(response.status == 1){
                var i =0;
                $("#city1").empty();
                    $("#city1").append("<option value=''>Select</option>");
                 $.each(response.city, function(key, value) {
                $("#city1").append("<option value='"+response.city[i].id+"'>"+response.city[i].name+"</option>")
             i++;
      })
              }else{
                     $("#state1").empty();
              }
            }            
        });
   }
</script>