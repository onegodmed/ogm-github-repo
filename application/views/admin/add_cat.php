<div class="wrapper">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card m-b-20">

                    <div class="card-body">

                        <h4 class="mt-0 header-title">Add Category</h4>

                        <p></p>



                        <form class="row" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/add_category_code') ?>" >

                            <div class="form-group col-lg-6">

                                <label>Super Category Name</label>
                                <select class="form-control" name="super_category_id">
                                    <?php foreach ($super_category as $row): ?>
                                        <option value="<?php echo $row->id?>"><?php echo $row->super_category?></option>
                                    <?php endforeach ?>
                                    
                                </select>

                            </div>

                            <div class="form-group col-lg-6">

                                <label>Category Name</label>

                                <input type="text" class="form-control" name="category" required="" placeholder="Enter Category Name">

                            </div>
                            <div class="form-group col-lg-6">

                                <label>Category Image</label>

                                <input type="file" class="form-control" name="image" required="">

                            </div>

                            <div class="form-group col-lg-6">

                                <label>Category Description</label>
                                <textarea name="description" rows="5" class="form-control" required="" parsley-type="email"></textarea>  
                                

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

<?php include('footer.php'); ?>

