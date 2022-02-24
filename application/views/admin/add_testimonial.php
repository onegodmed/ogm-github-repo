<div id="sample">
  <script src="<?php echo base_url('admin-assets/assets/js/nicEdit-latest.js')?>" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</div>
<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card m-b-20">

                    <div class="card-body">

                        <h4 class="mt-0 header-title">Add Testimonial</h4>

                        <p></p>

                        <form class="" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/add_testimonial_code') ?>" novalidate>

                            <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Title</label>
                                <div class="col-sm-6">
                                <input type="text" placeholder="Enter Title" name="title" class="form-control" required="">
                                </div>

                            </div>

                             <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Name</label>
                                <div class="col-sm-6">
                                <input type="text" placeholder="Enter Title" name="name" class="form-control" required="">
                                    </div>
                            </div>

                             <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Designation</label>
                                <div class="col-sm-6">
                                <input type="text" placeholder="Enter Title" name="designation" class="form-control" required="">
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">User Image</label>
                                <div class="col-sm-6">
                                <input type="file" placeholder="Enter Title" name="image" class="form-control">
                            </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Discription</label>
                                <div class="col-sm-10">
                               <textarea class="form-control" name="description" required=""></textarea>
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

    