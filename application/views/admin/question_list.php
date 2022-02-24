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
                                        <th>Question</th>
                                        <th>Answer 1</th>
                                        <th>Answer 2</th>
                                        <th>Answer 3</th>
                                        <th>Answer 4</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                        <?php $i=1;
                                        foreach($question as $row) 
                                            {?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $row->question;?></td>
                                            <td><?php echo $row->ans1;?></td>
                                            <td><?php echo $row->ans2;?></td>
                                            <td><?php echo $row->ans3;?></td>
                                            <td><?php echo $row->ans4;?></td>
                                            
                                            
                            
                                            <td> <a class="btn btn-primary" href="<?php echo base_url('admin/edit_question/'.$row->id)?>">Edit</a></td>
                                            <td> <a class="btn btn-danger" href="<?php echo base_url('admin/delete_question/'.$row->id)?>">Delete</a></td>
                                                
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