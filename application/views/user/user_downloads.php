



        <div class="page-wrapper">

            <div class="page-breadcrumb">



                <div class="row">



                    <div class="col-12 d-flex no-block align-items-center">



                        <h4 class="page-title">Downloads</h4>



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





                <div class="row">



                    <div class="col-12">



                        <div class="card">



                            <div class="card-body">



                                <div class="table-responsive">



                                    <table id="zero_config" class="table table-striped table-bordered">



                                        <thead>



                                            <tr>



                                        <th>S no.</th>

                                        

                                        <th>title</th>



                                        <th>Date</th>



                                        <th>Downloads</th>



                                    </tr>



                                        </thead>



                                        <tbody>



                                            <?php $i=1;



                                        foreach($materials as $row) 



                                            {?>



                                        <tr>



                                            <td><?php echo $i?></td>

                                            

                                            <td><?php echo $row->title;?></td>



                                            <td><?php echo $row->date;?></td>



                                            <td><a href="<?php echo base_url("admin-assets/assets/kundali/".$row->file_name)?>" download><button class="btn btn-primary">Download</button></a></td>





                                        </tr>



                                        <?php $i++;



                                    }?>



                                          



                                        </tbody>



                                        <tfoot>



                                           <tr>



                                        <th>S no.</th>

                                        

                                        <th>title</th>



                                        <th>Date</th>



                                        <th>Downloads</th>



                                    </tr>





                                        </tfoot>



                                    </table>



                                </div>







                            </div>



                        </div>



                    </div>



                </div>



            </div>





 