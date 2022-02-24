
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Mamber List</h4>
                            
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Mamber Image</th>
                                        <th>Mamber Name</th>
                                        <th>Mobile no.</th>
                                        <th>Email Id</th>
                                        <th>mamber Type</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php $i=1;
                                        foreach($mamber as $row) 
                                            {
                                        //$where = array('id' => $row->branch_id);
                                      // $branch = $this->admin->get_details//('branch', $where);
                                                ?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><img width="50" src="<?php echo base_url();?>front-assets/mamber_image/<?php echo $row->image;?>"></td>
                                            <td><?php echo $row->name;?></td>
                                            <td><?php echo $row->mobile;?></td>
                                            <td><?php echo $row->email;?></td>
                                            <td><?php echo $row->user_type;?></td>
                                            
                                           
                                           
                            
                                            <td> <a class="btn btn-primary" href="<?php echo base_url('admin/edit_mamber/'.$row->id)?>">Edit</a></td>
                                            <td> <a class="btn btn-danger" href="<?php echo base_url('admin/delete_mamber/'.$row->id)?>">Delete</a></td>
                                             
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
   