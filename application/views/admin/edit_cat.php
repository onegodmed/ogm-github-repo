<div class="wrapper">



    <div class="container-fluid">



        <div class="row">



            <div class="col-lg-12">



                <div class="card m-b-20">



                    <div class="card-body">



                        <h4 class="mt-0 header-title">Edit Category</h4>



                        <p></p>







                        <form class="row" method="POST" action="<?php echo base_url('admin/update_category') ?>" >



                           <!--  <div class="form-group col-lg-6">



                                <label>Super Category Name</label>

                                <select class="form-control" name="super_category_id">

                                    <?php foreach ($super_category as $row): ?>

                                        <option value="<?php echo $row->id?>" <?php if($row->id == $category[0]->super_cat_id){echo "selected";}?>><?php echo $row->super_category?></option>

                                    <?php endforeach ?>

                                    

                                </select>



                            </div> -->



                            <div class="form-group col-lg-6">



                                <label>Category Name</label>



                                <input type="text" class="form-control" name="category" required="" placeholder="Enter Category Name" value="<?php echo $category[0]->category?>">

                                <input type="hidden" name="id" value="<?php echo $category[0]->id?>">



                            </div>



                            <div class="form-group col-lg-6">



                                <label>Category Description</label>

                                <textarea name="description" rows="5" class="form-control" required="" parsley-type="email" ><?php echo $category[0]->description?></textarea>  

                                



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



