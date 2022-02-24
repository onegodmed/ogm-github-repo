
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Add Package</strong>
        </div>
        <?php if(!empty($package)) {
            ?>
            <form autocomplete="off" action="<?php echo base_url('admin/edit_package/'.$package->id);?>"  method="POST" class="form-horizontal" novalidate >
            <?php
        }else {
            ?>
            <form autocomplete="off"  method="POST" class="form-horizontal" novalidate >
            <?php
        }?>
                                        
            
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">package Name</label></div>
                    <div class="col-12 col-md-9"><input type="text"  name="package_name" required placeholder="Enter package Name" value="<?php echo @$package->package_name?>" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Amount</label></div>
                    <div class="col-12 col-md-9"><input type="number"  name="amount" required placeholder="Enter Amount" value="<?php echo @$package->amount?>" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Days</label></div>
                    <div class="col-12 col-md-9"><input type="number"  name="valid_days" required placeholder="Enter Validity" value="<?php echo @$package->valid_days?>" class="form-control"></div>
                </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">
                <!-- <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
                </button> -->
            </div>
        </form>
    
    </div>
</div> 
   
