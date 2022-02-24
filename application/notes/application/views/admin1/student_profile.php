<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Add Branch :</h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal" onsubmit="return check_due()" action="<?php echo base_url("admin/submit_student_fee")?>" method="POST" name="course" id="course" enctype="multipart/form-data">
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Student Name:</label>
									<div class="col-sm-8">
										<span><?php echo $student_profile[0]->student_name; ?></span>
									</div>
								</div>
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Contact No::</label>
									<div class="col-sm-8">
										<span><?php echo $student_profile[0]->student_mobile; ?></span>
									</div>
								</div>
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Course Fee:</label>
									<div class="col-sm-8">
										<span><?php echo $student_profile[0]->course_fee; ?></span>
									</div>
								</div>
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Discount Amount:</label>
									<div class="col-sm-8">
										<span><?php echo $student_profile[0]->fee_discount; ?></span>
									</div>
								</div>
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Final Fee:</label>
									<div class="col-sm-8">
										<span><?php echo $student_profile[0]->final_fee; ?></span>
									</div>
								</div>
								<div class="form-group">
									
									<label for="focusedinput" class="col-sm-2 control-label">Due Fee:</label>
									<div class="col-sm-8">
										<input  type="number" placeholder="Amount In Rupee" name="due_fee" id="due_fee" class="form-control1" readonly="" value="<?php echo $student_profile[0]->due_fee; ?>">
									</div>
								</div>
								<?php if($student_profile[0]->due_fee != 0 OR $student_profile[0]->due_fee < 0){?>
                                <div class="form-group">
									<label  class="col-sm-2 control-label">Submit Fee:</label>
									<div class="col-sm-8">
										<input  type="number" onchange="fee()" placeholder="Amount In Rupee" name="student_fee" id="student_fee" class="form-control1" required="">
										<input  type="hidden" placeholder="" name="student_id" class="form-control1" required="" value="<?php echo $student_profile[0]->id; ?>">
									</div>
								</div>
								<div class="form-group" id="nxt_instalment_date1">
									<label  class="col-sm-2 control-label">Next Instalment Date:</label>
									<div class="col-sm-8">
										<input  type="date" placeholder="" name="nxt_instalment_date" id="nxt_instalment_date" class="form-control1" required="">
									</div>
								</div>

                                <div class="form-group">
									<label  class="col-sm-2 control-label"></label>
									<div class="col-sm-4">
										<input  type="submit" name="submit"  class="btn btn-primary" placeholder="Submit">
									</div>
								</div>	
								<?php }?>							
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					
					
					<div class="table-responsive">
						<h4>Responsive Table:</h4>
						<table class="display" id="example"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>instalment</th> 
									<th>date</th> 
									 
								</tr> 
							</thead> 
							<tbody>
							<?php $i = 1;
							foreach ($fee_status as $row) {
								?> 
								<tr> 
									<th scope="row"><?php echo $i++;?></th> 
									<td><?php echo $row->instalment?></td> 
									<td><?php echo $row->date?></td> 
									 
								</tr> 
							<?php }?>
							</tbody> 
							<tfoot>
								<th>#</th> 
									<th>instalment</th> 
									<th>date</th>  
							</tfoot>
						</table> 
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );

function check_due(){
	var due_fee = $('#due_fee').val();
	var student_fee = $('#student_fee').val();
	if(student_fee > due_fee){
           alert('you submited extra fee');
           return false;
	}else{
         return true;
	} 
	
}			

function fee(){
	var due_fee = $('#due_fee').val();
	var student_fee = $('#student_fee').val();
	if(student_fee >= due_fee){
            document.getElementById("nxt_instalment_date1").style.display = "none";
            document.getElementById("nxt_instalment_date").required = false;
           return false;
	}else{
		 document.getElementById("nxt_instalment_date1").style.display = "block";
		  document.getElementById("nxt_instalment_date").required = true;
	}	
	
}			
		</script>
		<!--footer-->
		

