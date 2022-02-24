



        <div class="page-wrapper">

            <div class="page-breadcrumb">



                <div class="row">



                    <div class="col-12 d-flex no-block align-items-center">



                        <h4 class="page-title">Categories</h4>



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

<a class="btn btn-primary" href="<?php echo base_url('user/add_cat/'.$this->uri->segment('3'))?>">Add Category</a><br><br>



                <div class="row">



                    <div class="col-12">



                        <div class="card">



                            <div class="card-body">



                                <h5 class="card-title">Categories</h5>



                                <div class="table-responsive">



                                    <table id="zero_config" class="table table-striped table-bordered">



                                        <thead>



                                            <tr>



                                        <th>#</th>

                                        

                                        <!-- <th>Category Image</th> -->



                                        <th>Category Name</th>



                                        <th>Package Price</th>



                                        <th>Package Duration</th>



                                        <th>Date</th>



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

                                            

                                           <!--  <td><img class="img-responsive" src="<?php echo base_url();?>/assets/categories_image/<?php echo $row->image;?>"></td> -->



                                            <td><?php echo $row->category;?></td>



                                            <td><?php echo $row->package_price;?></td>



                                            <td><?php echo $row->package_duration;?> Month</td>



                                           <!--  <td><?php echo substr($row->description,0,30);?>....</td> -->



                                            <td><?php echo date('d-m-Y', strtotime($row->date));?></td>



                                           

                                            <td> <a class="btn btn-primary" href="<?php echo base_url('user/edit_cat/'.$row->id)?>">Edit</a></td>



                                            <td> <a class="btn btn-danger" href="<?php echo base_url('user/delete_category/'.$row->id)?>">Delete</a></td>



                                             <!-- <td> <a class="btn btn-orange" href="<?php echo base_url('user/branch_info/'.$row->id)?>">List</a></td>    -->



                                        </tr>



                                        <?php $i++;



                                    }?>



                                          



                                        </tbody>



                                        <tfoot>



                                           <tr>



                                        <th>#</th>

                                        

                                        <th>Category Image</th>



                                        <th>Category Name</th>



                                        <th>Description</th>



                                        <th>Date</th>



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





 