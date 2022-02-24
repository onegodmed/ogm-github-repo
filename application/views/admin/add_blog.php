<div id="sample">
  <script src="<?php echo base_url('admin-assets/assets/js/nicEdit-latest.js')?>" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</div>
<div class="page-wrapper">
    
    <div class="page-breadcrumb">

        <div class="row">

            <div class="col-12 d-flex no-block align-items-center">

                <h4 class="page-title">Blog</h4>

                <div class="ml-auto text-right">

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Blog</li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card m-b-20">

                    <div class="card-body">

                        <h4 class="mt-0 header-title">Add Blog</h4>

                        

                        <form method="post" novalidate="" enctype="multipart/form-data" action="<?php echo base_url('admin/add_blog_code') ?>">

                            <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Heading</label>
                                 <div class="col-sm-6">
                                <input type="text" placeholder="Enter Heading" name="heading" class="form-control" required="">
                                </div>

                            </div>
                             <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Heading Slug</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Enter Heading Slug Url" name="slug_url" class="form-control" required="" />
                            </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Short Discription</label>
                                 <div class="col-sm-6">
                                <input type="text" placeholder="Enter Short Discription" name="short_discription" class="form-control" required="">
                                </div>

                            </div>

                           

                            <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Category Image</label>
                                <div class="col-sm-6">
                                <input type="file" class="form-control" name="blog_image" required="">
                                </div>
                            </div>

                             <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Discription</label>
                                <div class="col-sm-10">
                               <textarea class="form-control" name="discription" required="" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="title" required="" placeholder="Enter Blog Title" />
                                        </div>
                                        
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
                            
                            <div class="border-top">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

                            

                        </form>

                    </div>

                </div>

            </div>

            <!-- end col -->

        </div>

        <!-- end row -->


