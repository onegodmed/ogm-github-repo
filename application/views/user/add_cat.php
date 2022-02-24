    <div id="sample">

  <script src="<?php echo base_url('admin-assets/assets/js/nicEdit-latest.js')?>" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

</div>

        <div class="page-wrapper">

           

            <div class="page-breadcrumb">

                <div class="row">

                    <div class="col-12 d-flex no-block align-items-center">

                        <h4 class="page-title">Add category</h4>

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

                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('user/add_category_code') ?>">

                                

                                <div class="card-body">

                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Category Name</label>

                                        <div class="col-sm-4">

                                            <input type="text" class="form-control" name="category" required="" placeholder="Enter Category Name">

                                            <input type="hidden" name="super_category_id" value="<?php echo $this->uri->segment('3')?>">

                                        </div>



                                    </div>

                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Package Price</label>

                                        <div class="col-sm-4">

                                            <input type="number" class="form-control" name="package_price" required="" placeholder="Price In Rupee">

                                            

                                        </div>



                                    </div>



                                     <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Package Duration</label>

                                        <div class="col-sm-4">

                                            <input type="number" name="package_duration" class="form-control" required="" placeholder="In Month">

                                            

                                        </div>



                                    </div>

                                    

                                     <div class="form-group row">

                                    <label class="col-sm-2 text-right control-label col-form-label">Category Image</label>

                                    <div class="col-sm-4">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" required="">

                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

                                            <div class="invalid-feedback">Example invalid custom file feedback</div>

                                        </div>

                                    </div>

                                </div>
                                
                                <div class="form-group row">
            <label class="col-sm-2 text-right control-label col-form-label">Banner Image</label>
            <div class="col-sm-4">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile"  name="banner_image">
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
            </div>
        </div>

         <div class="form-group row">
                <label for="fname" class="col-sm-2 text-right control-label col-form-label">Youtube Url</label>
                <div class="col-sm-4">
                    <input type="url" class="form-control" name="youtube_url"  placeholder="Youtube Url">
                    <input type="hidden" name="menu_id" value="<?php echo $this->uri->segment('3')?>">
                </div>

            </div>
            
            <div class="form-group row">
            <label class="col-sm-2 text-right control-label col-form-label">Comparison Image</label>
            <div class="col-sm-4">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile"  name="comp_image">
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
            </div>
        </div>

                                    

                                   <!--  <div class="form-group row">

                                        <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Short Description</label>

                                        <div class="col-sm-4">

                                            <textarea name="short_description" class="form-control"></textarea>

                                        </div>

                                    </div> -->

                                    

                                    <!-- editor -->
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 text-right control-label col-form-label">Category Description</label>
                                        
                                        <div class="col-sm-10">
                                            <textarea  style="height: 300px;" name="description" class="form-control"></textarea>
                                            </div>
                                        
                                        </div>

                <!--<div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">Category Description</h4>

                                <textarea  style="height: 300px;" name="description" class="form-control"></textarea> 

                            </div>

                        </div>

                    </div>

                </div>-->
                
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="title" placeholder="Enter Page Title" />
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta tags </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_tags" placeholder="Enter Meta tags">
                                            <span>* separate tags using commas(,)</span>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta Keywords</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_keywords"  placeholder="Enter Meta Keywords">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_description" placeholder="Enter Meta Description">
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

                       

                       </div>

            

          