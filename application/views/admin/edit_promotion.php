<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">

                <div class="card m-b-20">

                    <div class="card-body">

                        <h4 class="mt-0 header-title">Edit Promotion</h4>

                        

                        <form class="" method="post" onsubmit="return yes()" enctype="multipart/form-data" action="<?php echo base_url('admin/edit_promotion_code') ?>">


                             <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Promotion Amount </label>
                                <div class="col-sm-6">
                               <input type="hidden" name="id" value="<?php echo $promotion[0]->id; ?>">
                              <input type="tel" id="discount" placeholder="Promotion Amount" value="<?php echo $promotion[0]->promo_amt;?>" name="promo_amt" class="form-control" required="">
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

            <!-- end col -->

        </div>

        <!-- end row -->
