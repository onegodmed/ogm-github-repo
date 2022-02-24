

    
		<!-- //header-ends -->
		
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Admission Form :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" action="<?php echo base_url("admin/add_course ")?>" method="POST" name="course" id="course" enctype="multipart/form-data">
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Course Name:</label>
									<div class="col-sm-8">
										<input type="text" placeholder="Course Name" name="course" class="form-control1" required="">
										<span class="error"><?php echo form_error('course'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Medium:</label>
									<div class="col-sm-8">
										<input  name="medium" placeholder="Medium" type="text" class="form-control1" required="">
										<span class="error"><?php echo form_error('medium'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Duration:</label>
									<div class="col-sm-8">
										<input  name="duration" placeholder="In Month" type="number" class="form-control1" required="">
										<span class="error"><?php echo form_error('duration'); ?></span>
									</div>
								</div>
								<div class="form-group">
									<label  class="col-sm-2 control-label">Fees:</label>
									<div class="col-sm-8">
										<input  type="number" placeholder="Fees" name="fees" class="form-control1" required="">
										<span class="error"><?php echo form_error('fees'); ?></span>
									</div>
								</div>
								
								
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Branch</label>
									<div class="col-sm-8"><select name="branch_id" id="selector1" class="form-control1" required="">

										<option value="" hidden>Select</option>
										<?php foreach ($branch as $row) {
											
										 ?>
										<option value="<?php echo $row->id?>"><?php echo $row->branch?></option>
									<?php }?>
										      
									</select>
									<span class="error"><?php echo form_error('branch'); ?></span>
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

		
		<!--footer-->
		
	<!-- side nav js -->
	
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
  
</html>