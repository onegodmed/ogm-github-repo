
<div class="page-wrapper">
    
     <div class="page-breadcrumb">

                <div class="row">

                    <div class="col-12 d-flex no-block align-items-center">

                        <h4 class="page-title">Upload Kundali</h4>

                        <div class="ml-auto text-right">

                            <nav aria-label="breadcrumb">

                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="#">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Upload Kundali</li>

                                </ol>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card">

                    

                        <form class="form-horizontal" method="POST" action="<?php echo base_url('admin/upload_kundali_code/'.$kundali[0]->id) ?>" enctype="multipart/form-data">
                                <div class="card-body">
                            
                             <p><?php echo $this->session->flashdata('error')?></p>
                              <p><?php echo $this->session->flashdata('succss')?></p>
                            <div class="form-group row">

                                <label class="col-lg-2">User Name:</label>

                               <span class="col-lg-6"><?php echo $kundali[0]->fname." ".$kundali[0]->lname?></span>

                            </div>
                           
                             <div class="form-group row">

                                <label class="col-lg-2">Upload Kundali</label>

                                <div class="col-lg-6">
                                    <input type="file" class="form-control" name="upload_kundali" required="">
                               <!--  <input type="text" name="kundali_id" value="<?php echo $kundali[0]->id?>"> -->
                                </div>
                            </div>

                            
                            </div>
                            
                            <div class="border-top">

                                    <div class="card-body">

                                       <button type="submit" class="btn btn-primary">Submit</button>

                                    </div>

                                </div>

                        </form>

                    

                </div>

            </div>

            <!-- end col -->

           

        </div>

        <!-- end row -->

    </div>

    <!-- end container -->

</div>



