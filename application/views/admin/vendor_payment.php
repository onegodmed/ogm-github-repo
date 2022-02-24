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

                        <h4 class="mt-0 header-title">Payment release to <?php echo $astro[0]->name;?></h4>
                        <h4>Total Wallet Balance</h4>
                        <p>Rs. <?php echo $astro[0]->wallet_balence;?></p>
                        <p>USD $ <?php echo $astro[0]->astro_dollar_bal;?></p>
                        <p></p>

                        <form class="" method="post" onsubmit="return yes()" enctype="multipart/form-data" action="<?php echo base_url('admin/update_vendor_payment') ?>">

                            <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Currency Type</label>
                                <div class="col-sm-6">
                                <input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>">
                                <select class="form-control" name="currency_name" required>
                                    <option value="INR">Rs.</option>
                                    <option value="USD">USD $</option>
                                </select>
</div>
                            </div>

                            

                             <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Amount</label>
                                <div class="col-sm-6">
                               <p id="error" style="color: red;"></p>
                              <input type="tel" id="amount" placeholder="Enter total amount" name="amount" class="form-control" required="" >
</div>
</div>
 <div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Date</label>
   <div class="col-sm-6">
                              <input type="date" id="realdate" name="realdate" class="form-control" required="" >
</div>
                            </div>
<div class="form-group row">

                                <label class="col-sm-2 text-right control-label col-form-label">Month Name</label>
   <div class="col-sm-6">
       <?php 
       $months = array('January', 'February', 'March','April', 'May', 'June', 'July', 'August', 'Sepetember', 'October', 'November', 'December');
$years = range(date('Y'), 1899);

       ?>
                             <select  id="monthN" name="monthN" class="form-control" required="">
                                 <?php foreach ($months as $key => $month) {   $key = $key + 1;?>
                                   <option value="<?php echo($month) ?>"><?php echo($month) ?></option>
                                     <?php }  ?>
                             </select>
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