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
					<h2 class="title1">Branch List</h2>
				    <a href="<?base_url('admin/add_vendor')?>" class="btn btn-primary"></a>
					<div class="table-responsive">
						<h4>Beanch List:</h4>
						<table class="display" id="example"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Branch Name</th> 
									<th>Branch Head Name</th>
									<th>Branch Head No.</th> 
									<th>Branch Mobile</th> 
									<th>City</th> 
									<th>Branch Address</th> 
									<th>Branch Email</th>
						           <!--  <th>Edit</th>
						            <th>Action</th> -->
						            <th>Delete</th>
									
									 
									
								</tr> 
							</thead> 
							<tbody>
							<?php $i = 1;
							foreach ($branch as $row) {
								?> 
								<tr> 
									<th scope="row"><?php echo $i++;?></th> 
									<td><?php echo $row->branch?></td>
									<td><?php echo $row->incharge_name?></td> 
									<td><?php echo $row->incharge_mobile?></td> <td><?php echo $row->branch_mobile?></td> 
									<td><?php echo $row->city?></td> 
									<td><?php echo $row->branch_address?></td> 
									<td><?php echo $row->branch_email?></td> 
									<!-- <td><a class="btn btn-primary" href="<?php echo base_url('admin/edit_branch/'.$row->id)?>" >Edit</a></td> 
									<td><a class="btn btn-primary" href="<?php echo base_url('admin/branch_action/'.$row->id)?>" >Edit</a></td>   -->
									<td><a class="btn btn-danger" href="<?php echo base_url('admin/delete_branch/'.$row->id)?>" >Delete</a></td> 
								</tr> 
							<?php }?>
							</tbody> 
							<tfoot>
									<th>#</th> 
									<th>Branch Name</th> 
									<th>Branch Head Name</th>
									<th>Branch Head No.</th> 
									<th>Branch Mobile</th> 
									<th>City</th> 
									<th>Branch Address</th> 
									<th>Branch Email</th>
						           <!--  <th>Edit</th>
						            <th>Action</th> -->
						            <th style="display: none">Delete</th> 
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
		

