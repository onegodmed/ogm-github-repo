   
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Edit Category</strong>
        </div>
        <form action="<?= base_url('admin/update_category') ?>" method="POST" class="form-horizontal">
            <div class="card-body card-block">

                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Edit Category</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="hf-email" name="category" placeholder="Enter Category..." class="form-control" value="<?php echo $category[0]->category_name ?>"></div>
                    <input type="hidden" name="id" value="<?php echo $category[0]->id ?>">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">
                <a class="btn btn-primary btn-sm " href="javascript:history.back()" role="button">Back</a>
                <!-- <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
                </button> -->
            </div>
        </form>

    </div>
</div> 

<!--                    <script src="<?= base_url('admin_assets/js/vendor/jquery-2.1.4.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/plugins.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/main.js') ?>"></script>-->