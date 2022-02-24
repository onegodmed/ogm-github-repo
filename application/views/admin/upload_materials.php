
<div class="wrapper" style="float: right;">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card m-b-20">

                    <div class="card-body">

                        <h4 class="mt-0 header-title">Upload Kundali</h4>

                        <p></p>


                        
                        <form class="row" method="POST" action="<?php echo base_url('admin/upload_materials_code') ?>" enctype="multipart/form-data">

                            
                             <p><?php echo $this->session->flashdata('error')?></p>
                              <p><?php echo $this->session->flashdata('succss')?></p>
                            <div class="form-group col-lg-6">

                                <label>User Name:</label>

                               <span><?php echo $author[0]->name;?></span>

                            </div>

                            <div class="form-group col-lg-6">

                                <label>Title</label>

                                <input type="text" class="form-control" name="title" required="">
                            </div>
                           
                             <div class="form-group col-lg-6">

                                <label>Upload Kundali</label>

                                <input type="file" class="form-control" name="upload_kundali" required="">
                                <input type="hidden" name="id" value="<?php echo $author[0]->id?>">
                            </div>

                            <div class="form-group col-lg-12">

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            <!-- end col -->

           

        </div>

        <!-- end row -->

    </div>

    <!-- end container -->

</div>



