    <div class="wrapper">



        <div class="container-fluid">



            <div class="row">



                <a class="btn btn-primary" href="<?php echo base_url('admin/add_super_cat')?>">Add Super Category</a>



                <div class="col-12">



                    <div class="card m-b-20">



                        <div class="card-body">



                            <h4 class="mt-0 header-title">Super Category List</h4>



                            



                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">



                                <thead>



                                    <tr>



                                        <th>#</th>

                                        

                                        <th>Super Category Image</th>



                                        <th>Super Category Name</th>



                                       <!--  <th>Description</th> -->



                                        <th>Date</th>



                                       



                                        <th>Edit</th>



                                        <th>Delete</th>



                                    </tr>



                                </thead>



                               <tbody>



                                        <?php $i=1;



                                        foreach($super_category as $row) 



                                            {?>



                                        <tr>



                                            <td><?php echo $i?></td>

                                            

                                            <td><img class="img-responsive" src="<?php echo base_url();?>/assets/categories_image/<?php echo $row->image;?>"></td>



                                            <td><?php echo $row->super_category;?></td>



                                           <!--  <td><?php echo substr($row->description,0,30);?>....</td> -->



                                            <td><?php echo date('d-m-Y', strtotime($row->date));?></td>





                                           

                                            <td> <a class="btn btn-primary" href="<?php echo base_url('admin/edit_super_cat/'.$row->id)?>">Edit</a></td>



                                            <td> <a class="btn btn-danger" href="<?php echo base_url('admin/delete_super_category/'.$row->id)?>">Delete</a></td>



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



   