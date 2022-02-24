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

                        <h4 class="mt-0 header-title">Add Coupon</h4>

                        

                        <form class="" method="post" onsubmit="return yes()" enctype="multipart/form-data" action="<?php echo base_url('admin/add_coupan_code') ?>">

                            <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Coupon Name</label>
                                
                                <div class="col-sm-6">

                                <input type="text" placeholder="Enter Heading" name="name" class="form-control" required="">
                                </div>

                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Coupon Code</label>
                                <div class="col-sm-6">
                              <input type="text" placeholder="" name="coupon_code" class="form-control" required="">
                                </div>
                            </div>

                             <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Discount Price </label>
                                <div class="col-sm-6">
                               <p id="error" style="color: red;"></p>
                              <input type="number" id="discount" placeholder="In Parsentage %" name="discount_parcent" class="form-control" required="">
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

    
<script type="text/javascript">
    function yes() {
        var dicount =  $('#discount').val();
      if($('#discount').val() > 100){
          $('#error').html('Value Is In Parsentage Please Enter less Then 100')
        return false;
      }else{
        return true;
      }
    }
   

</script>