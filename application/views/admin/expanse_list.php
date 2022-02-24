<?php include('header.php'); ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Question List</h4>
                            
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Member Name</th>
                                        <th>Branch</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                         <th>Amount</th>
                                        <!-- <th>Due Fee</th>
                                        <th>No. of instalment</th>
                                        <th>Per Instalment Fee</th> -->

                                    </tr>
                                </thead>
                                <tfoot>
                                        <tr>
                                            <?php 
                                                  $total_amount = 0;
                                        foreach($expanse as $row) {
                                            $total_amount += $row->amount;
                                            }
                                            ?>
                                                
                                                
                                            
                                            
                                            <th></th>
                                            <th></th>
                                           <th></th>
                                            <th></th>
                                            <th>Total =</th>
                                            <th><?php echo $total_amount?></th>
                                            
                                        </tr>
                                    </tfoot>
                                 <tbody>
                                        <?php $i=1;
                                        foreach($expanse as $row) 
                                            {?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $row->name;?></td>
                                            <td><?php echo $row->branch;?></td>
                                            <td><?php echo $row->description;?></td>
                                            <td><?php echo $row->date?></td>
                                            <td><?php echo $row->amount;?></td>
                                
                                                
                                        </tr>
                                        <?php $i++;
                                    }?>
                                   </tbody>
                                        
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->
    <?php include('footer_list.php'); ?>