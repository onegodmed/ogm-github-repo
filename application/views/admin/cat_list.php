    <div class="wrapper">



        <div class="container-fluid">



            <div class="row">



                <a class="btn btn-primary" href="<?php echo base_url('admin/add_cat')?>">Add Category</a>



                <div class="col-12">



                    <div class="card m-b-20">



                        <div class="card-body">



                            <h4 class="mt-0 header-title">Category List</h4>



                            



                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">



                                <thead>



                                    <tr>



                                        <th>#</th>



                                        <th>Category Name</th>



                                        <th>Description</th>



                                        <th>Date</th>



                                        <th>Status</th>



                                        <th>Edit</th>



                                        <th>Delete</th>



                                    </tr>



                                </thead>



                               <tbody>



                                        <?php $i=1;



                                        foreach($category as $row) 



                                            {?>



                                        <tr>



                                            <td><?php echo $i?></td>



                                            <td><?php echo $row->category;?></td>



                                            <td><?php echo $row->description;?></td>



                                            <td><?php echo date('d-m-Y', strtotime($row->date));?></td>





                                            <td><a href="" class="btn btn-orange">Active</a></td>



                                            <td> <a class="btn btn-primary" href="<?php echo base_url('admin/edit_cat/'.$row->id)?>">Edit</a></td>



                                            <td> <a class="btn btn-danger" href="<?php echo base_url('admin/delete_category/'.$row->id)?>">Delete</a></td>



                                             <!-- <td> <a class="btn btn-orange" href="<?php echo base_url('admin/branch_info/'.$row->id)?>">List</a></td>    -->



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



  