<!--Breadcrumb start-->
<script type="text/javascript" src="<?= base_url()?>assets/multiselect/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="<?= base_url()?>assets/multiselect/bootstrap-multiselect.css" type="text/css"/>
<?php 
$country = $this->admin->get('countries');
?>
<div class="ast_pagetitle">

<div class="ast_img_overlay"></div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="page_title">

					<h2>Become a Partner</h2>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">

				<ul class="breadcrumb">

					<li><a href="<?= base_url()?>">Home</a></li>

					<li>//</li>

					<li><a href="#">Become a Partner</a></li>

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

					<h3 class="top_logo"><i class="fa fa-user" aria-hidden="true"></i> <br> Become a Partner</h3>


					<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>front/add_member_code">
						

						

						<p style="color: red;"><?php echo $this->session->flashdata('error')?></p>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Name</label>

							<input type="text" placeholder="Full Name" name="name" class="test">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Email</label>

							<input type="text" placeholder="Email" name="email" class="test">

						</div>

						<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->

						<!--	<label>Password</label>-->

						<!--	<input type="password" placeholder="Password" name="password" class="test">-->

						<!--</div>-->

						<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->

							<!-- <label>Confirm Password</label>

						<!--	<input type="password" placeholder="Confirm Password" name="password"> -->

						<!--</div>-->

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Mobile Number</label>

							<input type="text" placeholder="Mobile Number" name="mobile" class="test">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>gender</label>

							<select name="gender" class="test">

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

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Become a Partner</label>

							<select name="expertise" id="dbType" class="test">


								<option value="Astrologer">Vedic Astrologer </option>


							</select>

							<div id="otherType" style="display:none;">

<input type="text" name="specify" placeholder="Enter Here" class="test" class="test"/>

</div>

						</div>

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

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Experience</label>

							<input type="number" placeholder="In Year" name="experience" class="test">

						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Language Known</label>

				
<!-- Note the missing multiple attribute! -->
<span class="multiselect-native-select">
<select id="example-multiple-selected" multiple="multiple" name="langknown[]">
      <option value="Hindi" selected>Hindi</option>
      <option value="English" selected>English</option>
      <option value="Punjabi" class="test">Punjabi</option>
      <option value="Marathi">Marathi</option>
      <option value="Bengali">Bengali</option>
      <option value="Gujarati">Gujarati</option>
      <option value="Odia">Odia</option>
      <option value="Sanskrit">Sanskrit</option>
      <option value="Kannada">Kannada</option>
      <option value="Tamil">Tamil</option>
</select>
</span>
						</div>


						<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">

							<label>address</label>

							<textarea placeholder="Address" rows="4" name="address" class="test"></textarea>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Country</label>

							<select name="country" onchange="myfunction_member(this.value)" class="test">
                             <?php foreach ($country as $row) {
                              ?>
								<option value="<?php echo $row->id;?>"><?php echo $row->name?></option>
								<?php }?>
							</select>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>State</label>

							<select name="state" id="state1" onchange="myfunction2_member(this.value)" class="test">
				
							</select>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>City</label>

							<select name="city" id="city1" class="test">
							
							</select>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Pincode</label>

							<input type="text" placeholder="Pincode" name="pincode" class="test">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Upload your Photo</label>

							<input type="file" placeholder="" name="image" class="test">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Upload your Document 1</label>

							<input type="file" placeholder="" name="image1" class="test">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Upload your Document 2</label>

							<input type="file" placeholder="" name="image2" class="test">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Upload your Document 3 </label>

							<input type="file" placeholder="" name="image3" class="test">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Upload your Document 4</label>

							<input type="file" placeholder="" name="image4" class="test">

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>About you</label>

							<textarea placeholder="Message" rows="4" name="about_us" class="test"></textarea>

						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

							<button type="submit" class="ast_btn pull-right">Submit</button>

						</div>

					</form>

				</div>

			</div>

		</div>

	</div>

</div>

<script type="text/javascript">
    $('#example-multiple-selected').multiselect();
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

<style>


.ast_journal_box_wrapper form input, .ast_journal_box_wrapper form select, .ast_journal_box_wrapper form textarea {
    float:none;
    width: auto;
    color: #333333;
    height:auto;
    border: 1px solid #e1e1e1;
    margin-bottom: 25px;
    border-radius: 3px;
    padding: 0px 10px;
}

input.test {
    width: 100% !important;
    height: 45px !important;
}

textarea.test {
    width: 100% !important;
}
select.test {
    width: 100% !important;
    height: 45px !important;
}
input[type=file] {
    background-color: #f5f5f5;
    margin: 20px 0px !important;
    float: left;
    padding: 10px 10px !important;
}

.btn-default {
    color: #333;
    background-color: #f5f5f5;
    height: 45px;
    border: 0px !important;
    width: 100% !important;
	text-align: left;
}
ul.dropdown-menu {
    border-radius: 0 !important;
    padding: 0;
    margin:10px 0px;
    background: #f5f5f5 !important;
}
.ast_journal_box_wrapper form label {
    float: left;
    width: 100%;
    text-transform: capitalize;
    font-weight: 600;
    color: #333333;
    margin-bottom: 15px;
}

.dropdown-menu:before, .submenu:before {

content: "."!important;

    font-family: FontAwesome;

    font-style: normal;

    font-weight: normal;

    text-decoration: inherit;

    color: #0000007a;

    font-size: 30px;

    padding-right: 0.5em;

    position: absolute;

    top: -27px;

    left: 80px;

}

.btn-group, .btn-group-vertical {
    position: relative;
    display: inline-block;
    width: 100%;
    vertical-align: middle; margin: 0px 0px 15px;}
	
.multiselect-container>li>a>label {
    margin: 0;
    height: 100%;
    cursor: pointer;
    font-weight: 400;
    padding: 10px 20px 10px 40px;
    width: 100%;
	border: 1px solid whitesmoke !important;
}


</style>