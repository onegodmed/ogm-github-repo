

        <div class="page-wrapper">
            <div class="page-breadcrumb">

                <div class="row">

                    <div class="col-12 d-flex no-block align-items-center">

                        <h4 class="page-title">Tables</h4>

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
                      <a class="btn btn-primary" href="<?php echo base_url('admin/add_services/'.$id)?>">Add Service</a>
                        <div class="card">

                            <div class="card-body">

                                <h5 class="card-title">Basic Datatable</h5>

                                <div class="table-responsive">

                                    <table id="zero_config" class="table table-striped table-bordered">

                                        <thead>

                                            <tr>

                                        <th>S.no</th>
                                       
                                        <th>Service Name</th>

                                        <th>Main Category</th>

                                        <th>Sub Category</th>
                                       <th>Customer Audio Price in Rs</th>
                                        <th>Vendor Audio Price in Rs</th>
                                       
                                        <th>Customer Video Price in Rs</th>
                                         <th>Vendor Video Price in Rs</th>
                                         <th>Customer Audio Price in Dollar</th>
                                         <th>Vendor Audio Price in Dollar</th>
                                        <th>Customer Video Price in Dollar</th>
                                         <th>Vendor Video Price in Dollar</th>
                                         <th>Customer Chat Price in Rs</th>
                                         <th>Vendor Chat Price in Rs</th>
                                          <th>Customer Chat Price in Dollar</th>
                                         <th>Vendor Chat Price in Dollar</th>
                                         <th>Actual Call Price</th>
                                         <th>Actual Chat Price</th>
                                        <th>Price Unit</th>

                                        <th>Duration</th>
                                        
                                        <th>Edit</th>

                                        <th>Delete</th>

                                    </tr>

                                        </thead>

                                        <tbody>

                                            <?php $i=1;

                                        foreach($services as $row) 

                                            {?>

                                        <tr>

                                            <td><?php echo $i?></td>
                                            

                                            <td><?php echo $row->service_name;?></td>

                                            <td><?php echo $row->name;?></td>
                                             
                                            <td><?php echo $row->super_category;?></td>

                                            <td><?php echo $row->price;?></td>
                                             <td><?php echo $row->vendor_price;?></td>
                                            <td><?php echo $row->video_price;?></td>
                                              <td><?php echo $row->vendor_video_price;?></td> 
                                              <td><?php echo $row->dollar_price;?></td>
                                              <td><?php echo $row->vendor_dollar_price;?></td>
                                              <td><?php echo $row->video_dollar_price;?></td>
                                              <td><?php echo $row->vendor_video_dollar_price;?></td>
                                             <td><?php echo $row->chat_price;?></td>
                                              <td><?php echo $row->vendor_chat_price;?></td>
                                              <td><?php echo $row->dollar_chat_price;?></td>
                                              <td><?php echo $row->vendor_dollar_chat_price;?></td>
                                              
                                            <td><?php echo $row->actual_call_price;?></td>
                                            <td><?php echo $row->actual_chat_price;?></td>
<td><?php echo $row->price_unit;?></td>

                                            <td><?php echo $row->duration;?></td>
                                          

                                             <td> <a class="btn btn-primary" href="<?php echo base_url('admin/edit_services/'.$row->id)?>">Edit</a></td>

                                            <td> <a class="btn btn-danger" href="<?php echo base_url('admin/delete_services/'.$row->id)?>">Delete</a></td>

                                             <!-- <td> <a class="btn btn-orange" href="<?php echo base_url('user/branch_info/'.$row->id)?>">List</a></td>    -->

                                        </tr>

                                        <?php $i++;

                                    }?>

                                          

                                        </tbody>

                                        <tfoot>

                                    <tr>

                                        <th>S.no</th>
                                       
                                        <th>Service Name</th>

                                        <th>Main Category</th>

                                        <th>Sub Category</th>
                                        <th>Customer Audio Price in Rs</th>
                                        <th>Vendor Audio Price in Rs</th>
                                       
                                        <th>Customer Video Price in Rs</th>
                                         <th>Vendor Video Price in Rs</th>
                                         <th>Customer Audio Price in Dollar</th>
                                         <th>Vendor Audio Price in Dollar</th>
                                        <th>Customer Video Price in Dollar</th>
                                         <th>Vendor Video Price in Dollar</th>
                                         <th>Customer Chat Price in Rs</th>
                                         <th>Vendor Chat Price in Rs</th>
                                          <th>Customer Chat Price in Dollar</th>
                                         <th>Vendor Chat Price in Dollar</th>
                                         <th>Actual Call Price</th>
                                         <th>Actual Chat Price</th>
                                        <th>Price Unit</th>

                                        <th>Duration</th>
                                        
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


 