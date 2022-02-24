<div id="sample">

 <script src="<?php echo base_url('admin-assets/assets/js/nicEdit-latest.js')?>" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

</div>

        <div class="page-wrapper">

           

            <div class="page-breadcrumb">

                <div class="row">

                    <div class="col-12 d-flex no-block align-items-center">

                        <h4 class="page-title">Edit category</h4>

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

                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('user/update_super_category') ?>">

                                

                                <div class="card-body">

                                    <div class="form-group row">

                                    <label class="col-sm-2 text-right control-label col-form-label">Category Name</label>

                                    <div class="col-sm-4">

                                            <input type="text" class="form-control" name="super_category" required="" placeholder="Enter Category Name" value="<?php echo $super_category[0]->super_category?>">

                                            <input type="hidden" name="id" value="<?php echo $super_category[0]->id?>">

                                        </div>

                                </div>
                                
                                <div class="form-group row">

                                    <label class="col-sm-2 text-right control-label col-form-label">Category Slug Name</label>

                                    <div class="col-sm-4">

                                            <input type="text" class="form-control" name="slug_super_category" required="" placeholder="Enter Category Slug" value="<?php echo $super_category[0]->slug_super_category?>">

                                        

                                        </div>

                                </div>





            <div class="form-group row">

            <label class="col-sm-2 text-right control-label col-form-label">Banner Image</label>

            <div class="col-sm-4">

                <div class="custom-file">

                    <input type="file" class="custom-file-input" id="validatedCustomFile"  name="banner_image">

                    <input type="hidden" name="crrent_banner_image" value="<?php echo $super_category[0]->banner_image;?>">

                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                </div>

            </div>

        </div>



         <div class="form-group row">

                <label for="fname" class="col-sm-2 text-right control-label col-form-label">Youtube Url</label>

                <div class="col-sm-4">

                    <input type="url" class="form-control" name="youtube_url"  placeholder="Youtube Url" value="<?php echo $super_category[0]->youtube_url;?>">

                </div>



            </div>

                                

                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Category Description</label>

                                        <div class="col-sm-4">

                                            <input type="text" name="short_description" class="form-control" value=" <?php echo $super_category[0]->short_description; ?>">

                                       

                                    </div>

                                     </div>

                                     

                                     <div class="form-group row">

                                    <label class="col-sm-2 text-right control-label col-form-label">Category Image</label>

                                    <div class="col-sm-4">

                                        <div class="custom-file">

                                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" >

                                            <input type="hidden" name="current_image" value="<?php echo $super_category[0]->image; ?>">

                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

                                            <div class="invalid-feedback">Example invalid custom file feedback</div>

                                        </div>

                                    </div>

                                </div>

                                    

                                   

                               <div class="form-group row">

                                        <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Description</label>

                                        <div class="col-sm-10">

                                            <textarea  style="height: 300px;" name="description" class="form-control"><?php echo $super_category[0]->description; ?></textarea>

                                        </div>

                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Title </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="title"  placeholder="Enter Page Title" value="<?php echo $super_category[0]->title; ?>">
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta tags </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_tags"  placeholder="Enter Meta tags" value="<?php echo $super_category[0]->meta_tags; ?>">
                                            <span>* separate tags using commas(,)</span>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta Keywords</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_keywords" placeholder="Enter Meta Keywords" value="<?php echo $super_category[0]->meta_keywords; ?>" >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Meta Description</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="meta_description" placeholder="Enter Meta Description" value="<?php echo $super_category[0]->meta_description; ?>">
                                        </div>
                                    </div>

                                

                                </div>

                                <div class="border-top">

                                    <div class="card-body">

                                        <button type="submit" class="btn btn-primary">Update</button>

                                    </div>

                                </div>

                            </form>

                        </div>

                       </div>

                       

                       </div>

            

          