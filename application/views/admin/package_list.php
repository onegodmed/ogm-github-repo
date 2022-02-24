

        <div class="page-wrapper">
            <div class="page-breadcrumb">

                <div class="row">

                    <div class="col-12 d-flex no-block align-items-center">

                        <h4 class="page-title">Package List</h4>

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
<a class="btn btn-primary" href="<?php echo base_url('admin/add_package')?>">Add Package</a><br><br>
                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <!-- <h5 class="card-title">Basic Datatable</h5> -->

                                <div class="table-responsive">

                                    <table id="zero_config" class="table table-striped table-bordered">

                                        <thead>

                                            <tr>

                                        <th>#</th>
                                        
                                        <th>Service Name</th>

                                        <th>Service Price</th>
                                         
                                         <th>Service Price in dollar</th>
                                         
                                        <th>Edit</th>

                                        <th>Delete</th>

                                    </tr>

                                        </thead>

                                        <tbody>

                                            <?php $i=1;

                                        foreach($package as $row) 

                                            {?>

                                        <tr>

                                            <td><?php echo $i?></td>

                                            <td><?php echo $row->package_name;?></td>

                                            <td><?php echo $row->package_price;?></td>
                                            
                                             <td><?php echo $row->package_price_dollar;?></td>

                                            <td> <a class="btn btn-primary" href="<?php echo base_url('admin/edit_package/'.$row->id)?>">Edit</a></td>

                                            <td> <a class="btn btn-danger" href="<?php echo base_url('admin/delete_package/'.$row->id)?>">Delete</a></td>

                                             <!-- <td> <a class="btn btn-orange" href="<?php echo base_url('user/branch_info/'.$row->id)?>">List</a></td>    -->

                                        </tr>

                                        <?php $i++;

                                    }?>

                                          

                                        </tbody>

                                        <tfoot>

                                           <tr>

                                        <th>#</th>
                                        
                                        <th>Service Name</th>

                                        <th>Service Price</th>
                                        
                                        <th>Service Price in dollar</th>

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


 