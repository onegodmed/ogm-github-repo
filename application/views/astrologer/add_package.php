   
        <div class="page-wrapper">
           
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Add Package</h4>
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
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" action="<?php echo base_url("admin/add_package_code")?>" method="POST" name="course" id="course" enctype="multipart/form-data">
                                
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Package name</label>
                                        <div class="col-sm-4">
                                            <input type="text" placeholder="Package Name" name="package_name" class="form-control1 form-control " required="">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Package Price</label>
                                        <div class="col-sm-4">
                                            <input  name="package_price" placeholder="Price" type="text" class="form-control1 form-control" required="">
                                        
                                            
                                        </div>

                                    </div>
                                    
                           </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <input  type="submit" name="submit"  class="btn btn-primary" placeholder="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                       </div>
                       
                       </div>
            
          