<div class="wrapper">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card m-b-20">

                    <div class="card-body">

                        <h4 class="mt-0 header-title">Add Super-category</h4>

                        <p></p>



                        <form class="row" method="POST" action="<?php echo base_url('admin/update_super_category') ?>" >

                            <div class="form-group col-lg-6">

                                <label>Category Name</label>

                                <input type="text" class="form-control" name="super_category" required="" placeholder="Enter Category Name" value="<?php echo $super_category[0]->super_category?>">
                                <input type="hidden" name="id" value="<?php echo $super_category[0]->id?>">

                            </div>

                            <div class="form-group col-lg-6">

                                <label>Category Description</label>
                                <textarea name="description" rows="5" class="form-control" required="" parsley-type="email" placeholder="Enter a valid e-mail"><?php echo $super_category[0]->description; ?>
                                </textarea>  
                                

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

