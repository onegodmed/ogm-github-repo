

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
 <!-- <a class="btn btn-primary" href="<?php echo base_url('admin/add_vendor_service')?>">Add Service</a><br><br> -->

                <div class="row">

                    <div class="col-12">
        
                        <div class="card">

                            <div class="card-body">

                                <h5 class="card-title">Basic Datatable</h5>

                                <div class="table-responsive">

                                    <table id="zero_config" class="table table-striped table-bordered">

                                        <thead>

                                            <tr>

                                        <th>S.no</th>
                                       
                                        <th>Service Name</th>

                                        <th>Call Price</th>
                                        <th>Chat Price</th>
                                        <th>USD Call Price</th>
                                        <th>USD Chat Price</th>
                                        <th>Unit package</th>

                                    </tr>

                                        </thead>

                                        <tbody>

                                            <?php $i=1;

                                        foreach($services as $row) 

                                            {?>

                                        <tr>

                                            <td><?php echo $i++?></td>
                                            

                                            <td><?php echo $row->service_name;?></td>
                                             
                                            <td>Rs.<?php echo $row->vendor_price;?></td>
                                              <td>Rs.<?php echo $row->vendor_chat_price;?></td>
                                                <td>$<?php echo $row->dollar_price;?></td>
                                              <td>$<?php echo $row->vendor_dollar_chat_price;?></td>
                                            <td>per/<?php echo $row->price_unit;?></td>
                                             <!-- <td> <a class="btn btn-orange" href="<?php echo base_url('user/branch_info/'.$row->id)?>">List</a></td>    -->
                                        </tr>

                                        <?php $i++;

                                    }?>

                                          

                                        </tbody>

                                        <tfoot>

                                           <tr>

                                         <th>S.no</th>
                                       
                                        <th>Service Name</th>

                                        <th>Call Price</th>
                                        <th>Chat Price</th>
                                        <th>USD Call Price</th>
                                        <th>USD Chat Price</th>
                                        <th>Unit package</th>



                                    </tr>


                                        </tfoot>

                                    </table>

                                </div>



                            </div>

                        </div>

                    </div>

                </div>

            </div>


 