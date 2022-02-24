<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

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
									<th>Course</th> 
									<th>Duration</th> 
									<th>Fees</th> 
									<th>Medium</th>
									<!-- <th>Edit</th>  -->
									<th>Delete</th> 
								</tr> 
							</thead> 
							<tbody>
							<?php $i =1;
							foreach ($course as $row) {
								?> 
								<tr> 
									<th scope="row"><?php echo $i++;?></th> 
									<td><?php echo $row->course?></td> 
									<td><?php echo $row->duration." Month"?></td> 
									<td><?php echo $row->fees?></td> 
									<td><?php echo $row->medium?></td> 
									<!-- <td><a class="btn btn-primary" href="<?php echo base_url('admin/edit_course/'.$row->id)?>" >Edit</a></td> -->
									<td><a class="btn btn-danger" href="<?php echo base_url('admin/delete_course/'.$row->id)?>" >Delete</a></td> 
								</tr> 
							<?php }?>
							</tbody> 
							<tfoot>
								<th>#</th> 
									<th>Student Name</th> 
									<th>Email</th> 
									<th>Mobile</th> 
									<th>Course</th> 
									<th style="display: none;">View Profile</th> 
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
		</script>
		<!--footer-->
		

