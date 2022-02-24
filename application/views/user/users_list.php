



        <div class="page-wrapper">

            <div class="page-breadcrumb">



                <div class="row">



                    <div class="col-12 d-flex no-block align-items-center">



                        <h4 class="page-title">Download</h4>



                        <div class="ml-auto text-right">



                            <nav aria-label="breadcrumb">



                                <ol class="breadcrumb">



                                    <li class="breadcrumb-item"><a href="#">Home</a></li>



                                    <li class="breadcrumb-item active" aria-current="page">Library</li>



                                </ol>



                            </nav>



                        </div>



                    </div>



                </div>



            </div>



           

            <div class="container-fluid">

<!-- <a class="btn btn-primary" href="<?php echo base_url('user/add_super_cat/'.$this->uri->segment('3'))?>">Add Super Category</a><br><br> -->



                <div class="row">



                    <div class="col-12">



                        <div class="card">



                            <div class="card-body">



                                <!-- <h5 class="card-title">Basic Datatable</h5> -->



                                <div class="table-responsive">



                                    <table  class="table table-striped table-bordered">



                                        <thead>



                                            <tr>



                                        <th>#</th>

                                        

                                        <th>Image</th>



                                        <th>Name</th>



                                        <th>Email</th>



                                        <th>Mobile</th>



                                        <th>Edit</th>



                                        <th>Delete</th>



                                    </tr>



                                        </thead>



                                        <tbody>



                                            <?php $i=1;



                                        foreach($users as $row) 



                                            {?>



                                        <tr>



                                            <td><?php echo $i?></td>

                                            

                                            <td><img class="img-responsive" src="<?php echo base_url();?>/assets/<?php echo $row->image;?>"></td>



                                            <td><?php echo $row->name;?></td>



                                            <td><?php echo $row->email;?></td>



                                            <td><?php echo $row->mobile;?></td>



                                            <td> <a class="btn btn-primary" href="<?php echo base_url('user/edit_super_cat/'.$row->id)?>">Edit</a></td>



                                            <td> <a class="btn btn-danger" href="<?php echo base_url('user/delete_super_category/'.$row->id)?>">Delete</a></td>



                                             <!-- <td> <a class="btn btn-orange" href="<?php echo base_url('user/branch_info/'.$row->id)?>">List</a></td>    -->



                                        </tr>



                                        <?php $i++;



                                    }?>



                                          



                                        </tbody>



                                        <tfoot>



                                           <tr>



                                        <th>#</th>

                                        

                                        <th>Image</th>



                                        <th>Name</th>



                                        <th>Email</th>



                                        <th>Mobile</th>



                                        <th>Edit</th>



                                        <th>Delete</th>





                                    </tr>





                                        </tfoot>



                                    </table>



                                </div>







                            </div>



                        </div>



                    </div>



                </div>



            </div>





 