<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card m-b-20">

                    <div class="card-body">

                        <h4 class="mt-0 header-title">Add Promotion</h4>

                        

                        <form class="" method="post" onsubmit="return yes()" enctype="multipart/form-data" action="<?php echo base_url('admin/add_promotion_code') ?>">


                             <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Promotion Amount </label>
                                <div class="col-sm-6">
                               <p id="error" style="color: red;"></p>
                              <input type="tel" id="discount" placeholder="Promotion Amount" name="promo_amt" class="form-control" required="">
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
