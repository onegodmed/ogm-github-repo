

    
		<!-- //header-ends -->
		
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Admission Form :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="<?php echo base_url("admin/addmision_form")?>" method="POST" name="admission" id="admission" enctype="multipart/form-data">
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input type="text" placeholder="Name" name="name" class="form-control1" required="">
										<span class="error"><?php echo form_error('name'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Father's/Husband's Name:</label>
									<div class="col-sm-8">
										<input  name="parents_name" placeholder="Father's/Husband's Name" type="text" class="form-control1" required="">
										<span class="error"><?php echo form_error('parents_name'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Contect No:</label>
									<div class="col-sm-8">
										<input  type="number" placeholder="Contect No" name="mobile" class="form-control1" required="">
										<span class="error"><?php echo form_error('mobile'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Email Address:</label>
									<div class="col-sm-8">
										<input type="email" placeholder="Email Address" name="email" class="form-control1" required="">
										<span class="error"><?php echo form_error('email'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Residential Address:</label>
									<div class="col-sm-8">
										<textarea class="form-control1" placeholder="Residential Adress" rows="3" name="address" required=""></textarea>
										<span class="error"><?php echo form_error('address'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Parents's Contect No:</label>
									<div class="col-sm-8">
										<input  type="number" placeholder="Parents's Contect No" name="parents_mobile" class="form-control1" required="">
										<span class="error"><?php echo form_error('parents_mobile'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Pin Code:</label>
									<div class="col-sm-8">
										<input  type="text" placeholder="Pin Code" name="postal_code" maxlength="6" class="form-control1" required="">
										<span class="error"><?php echo form_error('postal_code'); ?></span>
									</div>
								</div>
                                <div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Category</label>
									<div class="col-sm-8">
										<div class="radio block"><label><input type="radio" name="category" checked="" value="GEN">GEN</label></div>
										<div class="radio block"><label><input type="radio" name="category" value="OBC"> OBC</label></div>
										<div class="radio block"><label><input type="radio" name="category" value="ST">ST</label></div>
										<div class="radio block"><label><input type="radio" name="category" value="SC">SC</label></div>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">DOB:</label>
									<div class="col-sm-8">
										<input  type="date" placeholder="DOB" name="DOB"  class="form-control1" required="">
										<span class="error"><?php echo form_error('DOB'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Gender</label>
									<div class="col-sm-8">
										<div class="radio block"><label><input type="radio" name="gender" checked="" value="male">Male</label></div>
										<div class="radio block"><label><input type="radio" name="gender" value="female">Female</label></div>
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Course Interested</label>
									<div class="col-sm-8"><select name="course" id="selector1" onchange="get_fee(this.value)" class="form-control1" required="">

										<option value="" hidden>Select</option>
										<?php foreach ($course as $row) {
											
										 ?>
										<option value="<?php echo $row->id?>"><?php echo $row->course?></option>
									<?php }?>
										      
									</select>
									<span class="error"><?php echo form_error('course'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Optional Subject:</label>
									<div class="col-sm-8">
										<input  type="text" placeholder="Optional Subject" name="optional_subject" class="form-control1" required="">
										<span class="error"><?php echo form_error('optional_subject'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Medium</label>
									<div class="col-sm-8">
										<div class="radio block"><label><input type="radio" name="medium" value="hindi" checked="">Hindi</label></div>
										<div class="radio block"><label><input type="radio" name="medium" value="english">English</label></div>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Class 10th:</label>
									<div class="col-sm-8">
										<input  type="number" placeholder="in %" name="10th" maxlength="6" class="form-control1" >
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Class 12th:</label>
									<div class="col-sm-8">
										<input  type="number" placeholder="in %" name="12th" maxlength="6" class="form-control1" >
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Graduation:</label>
									<div class="col-sm-8">
										<input  type="number" placeholder="in %" name="graduation" maxlength="6" class="form-control1" >
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Course Fee:</label>
									<div class="col-sm-8">
										<input  type="number" onchange="course_f()" id="course_fee" placeholder="in Rs" name="course_fee" maxlength="10" class="form-control1" required="">
									</div>
								</div>
								
								<div class="form-group">
									<label  class="col-sm-2 control-label">Fee Discount:</label>
									<div class="col-sm-8">
										<input  type="number" onchange="submit_fee()" placeholder="in Rs" name="fee_dicount" id="fee_dicount" maxlength="10" class="form-control1">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Final Fee:</label>
									<div class="col-sm-8">
										<input  type="number" placeholder="in Rs" name="final_fee" id="final_fee" maxlength="10" class="form-control1" readonly="">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Advance Fee:</label>
									<div class="col-sm-8">
										<input  type="number" id="advance_fee" onchange="fee()" placeholder="in Rs" name="advance_fee" maxlength="10" class="form-control1" required="">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Due Fee:</label>
									<div class="col-sm-8">
										<input  type="number" id="due_fee" placeholder="in Rs" name="due_fee" maxlength="10" class="form-control1" readonly="">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Refrance:</label>
									<div class="col-sm-8">
										<input  type="text" placeholder="Refrance" name="refrance" maxlength="6" class="form-control1" >
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Discount Region:</label>
									<div class="col-sm-8">
										<textarea class="form-control1" placeholder="Region" rows="3" name="discount_region" ></textarea>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">instalment:</label>
									<div class="col-sm-8">
										<input  type="number" onchange="instal()" placeholder="Instalment Date" id="instalment" name="instalment" maxlength="6" class="form-control1">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">First instalment:</label>
									<div class="col-sm-8">
										<input  type="number" placeholder="Instalment Date" id="first_instalment" name="first_instalment" maxlength="6" class="form-control1">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Instalment Date:</label>
									<div class="col-sm-8">
										<input  type="date" placeholder="Instalment Date" name="instalment_date" maxlength="6" class="form-control1" required="">
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Photo:</label>
									<div class="col-sm-8">
										<input  type="file" name="profile_pic"  class="form-control1">
									</div>
								</div>
                                <div class="form-group">
									<label  class="col-sm-2 control-label"></label>
									<div class="col-sm-4">
										<input  type="submit" name="submit"  class="btn btn-primary" placeholder="Submit">
									</div>
								</div>								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript">
  function fee() {
  	var course_fee  = $('#course_fee').val()-1;
  	var advance_fee = $('#advance_fee').val()-1;
  	
  	var due_fee   = $('#final_fee').val() - $('#advance_fee').val();
  	         $('#due_fee').val(due_fee);
  	          instal();
  	   if(course_fee < advance_fee){
              alert('you submit extra');

  	   }
  }

   function submit_fee() {
  	var course_fee  = $('#course_fee').val();
  	var fee_dicount = $('#fee_dicount').val();
  	var final_fee   = course_fee - fee_dicount;
  	  $('#final_fee').val(final_fee);
  	  fee();
  	  instal(); 
  }

  function instal() {
  	
  	var due_fee  = $('#due_fee').val();
  	var instalment = $('#instalment').val();
  	var first_instalment   = due_fee/instalment;
  	  $('#first_instalment').val(first_instalment);
  }

  function course_f() {
  	   submit_fee();
  	   instal();
  }

   function get_fee() {
  }
</script>

		
		<!--footer-->
		
	<!-- side nav js -->
	
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
  
</html>