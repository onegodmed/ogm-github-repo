<div class="wrapper">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card m-b-20">

                    <div class="card-body">

                        <h4 class="mt-0 header-title">Add Super-category</h4>

                        <p></p>



                        <form class="row" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/add_super_category_code') ?>" >

                            <div class="form-group col-lg-6">

                                <label>menu</label>
                                <select class="form-control" name="menu_id" required="">
                                    <option hidden value="">Select Menu</option>
                                    <option value="1">Life Issues</option>
                                    <option value="2">Courses</option>
                                    <option value="3">Solutions</option>
                                    <option value="4">Pooja</option>
                                    <option value="5">Kundali/Horoscope</option>
                                </select>

                            </div>

                            <div class="form-group col-lg-6">

                                <label>Category Name</label>

                                <input type="text" class="form-control" name="super_category" required="" placeholder="Enter Category Name">

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



