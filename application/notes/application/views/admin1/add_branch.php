

    
		<!-- //header-ends -->
		
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Add Branch :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="<?php echo base_url("admin/add_branch")?>" method="POST" name="course" id="course" enctype="multipart/form-data">
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Branch Name:</label>
									<div class="col-sm-8">
										<input type="text" placeholder="branch Name" name="branch" class="form-control1" required="">
										<span class="error"><?php echo form_error('branch'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">City:</label>
									<div class="col-sm-8">
										<input  name="city" placeholder="Branch Address" type="text" class="form-control1" required="">
										<span class="error"><?php echo form_error('branch_address'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Branch Address:</label>
									<div class="col-sm-8">
										<input  name="branch_address" placeholder="Branch Address" type="text" class="form-control1" required="">
										<span class="error"><?php echo form_error('branch_address'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Branch Email:</label>
									<div class="col-sm-8">
										<input  name="branch_email" placeholder="Branch Email" type="text" class="form-control1" required="">
										<span class="error"><?php echo form_error('branch_email'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Branch Mobile:</label>
									<div class="col-sm-8">
										<input  type="number" placeholder="Branch Mobile" name="branch_mobile" class="form-control1" required="">
										<span class="error"><?php echo form_error('branch_mobile'); ?></span>
									</div>
								</div>
                                <div class="form-group">
									<label  class="col-sm-2 control-label">Branch Head Name:</label>
									<div class="col-sm-8">
										<input  type="text" placeholder="Branch Head Name" name="incharge_name" class="form-control1" required="">
										<span class="error"><?php echo form_error('incharge_name'); ?></span>
									</div>
								</div><div class="form-group">
									<label  class="col-sm-2 control-label">Branch Head Name No.:</label>
									<div class="col-sm-8">
										<input  type="number" placeholder="Branch Head Name No" name="incharge_mobile" class="form-control1" required="">
										<span class="error"><?php echo form_error('branch_mobile'); ?></span>
									</div>
								</div>								
								
								<!-- <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Branch</label>
									<div class="col-sm-8"><select name="branch" id="selector1" class="form-control1" required="">

										<option value="" hidden>Select</option>
										<?php foreach ($branch as $row) {
											
										 ?>
										<option value="<?php echo $row->id?>"><?php echo $row->course?></option>
									<?php }?>
										      
									</select>
									<span class="error"><?php echo form_error('course'); ?></span>
									</div>
								</div> -->
								<!-- <div class="form-group">
									<label  class="col-sm-2 control-label">Photo:</label>
									<div class="col-sm-8">
										<input  type="file" name="profile_pic"  class="form-control1">
									</div>
								</div> -->
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

		
		<!--footer-->
		
	<!-- side nav js -->
	
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
  
</html>