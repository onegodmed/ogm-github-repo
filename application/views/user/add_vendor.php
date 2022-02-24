    

        <div class="page-wrapper">

           

            <div class="page-breadcrumb">

                <div class="row">

                    <div class="col-12 d-flex no-block align-items-center">

                        <h4 class="page-title">Add Vendor</h4>

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

                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/add_vendor_code') ?>" >



                       

                            <div class="form-group col-lg-6">

                              <p style="color: red;"><?php echo $this->session->flashdata('error')?></p>

                               <label>Name</label>



                                <input type="text" class="form-control" name="name" required="" placeholder="Enter Name">



                            </div>

                            <div class="form-group col-lg-6">



                                <label>Category Image</label>

                                <label>Email</label>

                            <input type="text" class="form-control" placeholder="Email" name="email">



                            </div>



                            <div class="form-group col-lg-6">



                                <label>Password</label>

                            <input type="password" class="form-control" placeholder="Password" name="password" required="">

                                



                            </div>

                             <div class="form-group col-lg-6">



                                <label>Mobile Number</label>

                            <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" required="">

                                



                            </div>

                             <div class="form-group col-lg-6">



                                <label>City</label>

                            <input type="text" class="form-control" placeholder="Mobile Number" name="city" required="">

                                



                            </div>



                            <div class="form-group col-lg-6">



                               <label>Experience</label>

                            <input type="text" class="form-control" placeholder="Experience" name="experience">

                                



                            </div>



                            <div class="form-group col-lg-6">



                               <label>About Us</label>about_us

                            <textarea class="form-control" name="about_us" ></textarea> 

                                



                            </div>

                             <div class="form-group col-lg-6">



                              <label>gender</label>

                            <select name="gender" class="form-control">

                                <option value="male">Male</option>

                                <option value="female">Female</option>

                            </select>

                                



                            </div>

                             <div class="form-group col-lg-6">



                               <label>Upload your Photo</label>

                            <input type="file" class="form-control" placeholder="" name="image" required="">

                                



                            </div>
                            
                            <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta tags </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_tags" required="" placeholder="Enter Meta tags">
                                            <span>* separate tags using commas(,)</span>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta Keywords</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_keywords" required="" placeholder="Enter Meta Keywords">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_description" required="" placeholder="Enter Meta Description">
                                        </div>
                                    </div>

                            

                            <div class="form-group col-lg-12">



                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>



                            </div>



                        </form>



                        </div>

                       </div>

                       

                       </div>

            

          