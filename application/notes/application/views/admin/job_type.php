<form action="<?= base_url('admin/job_type') ?>" method="POST" class="form-horizontal">
    <div class="container form-one">
        <div class="card">
            <div class="card-header">
                <strong>Job Type</strong>
            </div>

            <div class="card-body card-block">                        
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Contract</label></div>
                    <div class="col-12 col-md-9">
                        <textarea name="contract" placeholder="Enter description..." class="form-control"><?=@$job_type[0]->contract?></textarea>
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Full Time</label></div>
                    <div class="col-12 col-md-9">
                        <textarea name="full_time" placeholder="Enter description..." class="form-control"><?=@$job_type[0]->full_time?></textarea>
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Part Time</label></div>
                    <div class="col-12 col-md-9">
                        <textarea name="part_time" placeholder="Enter description..." class="form-control"><?=@$job_type[0]->part_time?></textarea>
                        
                    </div>
                </div>
            </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">
                             <button type="reset" class="btn btn-danger btn-sm">
                              <i class="fa fa-ban"></i> Reset
                            </button> 
                        </div>


        </div>
    </div> 
    
</form>