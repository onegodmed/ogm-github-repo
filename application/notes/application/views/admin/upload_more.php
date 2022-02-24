  
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Add Course</strong>
        </div>
        <form autocomplete="off"  method="POST" class="form-horizontal" novalidate  enctype="multipart/form-data" >
      <input type="hidden" name="id" value="<?php echo $id; ?>">
		    			<div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Type</label></div>
                    <div class="col-12 col-md-9"><input type="radio"  name="upload_type" class="form-control" value="pdf"> PDF
                        <input type="radio"  name="upload_type" class="form-control" value="Video"> Video</div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Select File</label></div>
                    <div class="col-12 col-md-9"><input type="file"  name="upload_data" class="form-control" > </div>
                </div>
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
 

	  
