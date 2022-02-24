<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>History</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Users</a></li>
                    <li class="active"><a href="#"></li>
                    
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"><?= ucfirst(@$history[0]->first_name.' '.@$history[0]->last_name)?></strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
									<th>Full Time Amount</th>
									<th>Part Time Amount</th>
									<th>Contract Amount</th>
									<th>Comment</th>
									<th>Updated By</th>
									<th>Login Time</th>
									                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($history as $key => $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $row->first_name . ' ' . $row->last_name ?></td>
                                        <td><?php echo $row->email ?></td>
                                        <td><?php echo $row->mobile ?></td>
										<td><?php echo $row->full_time_amount ?></td>
										<td><?php echo $row->part_time_amount ?></td>
										<td><?php echo $row->contract_amount ?></td>
										<td><?php echo $row->comment ?></td>
										<td><?php echo $row->admin_fname.' '.$row->admin_lname; ?><small> (<?php echo $row->admin_email ?>)<small></td>
										<td><?php echo $row->last_login ?></td>
										
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


</div><!-- /#right-panel -->

<!--

</body>
</html>-->
