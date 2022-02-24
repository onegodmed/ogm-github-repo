
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Upload</strong>
        </div>
        <form autocomplete="off"  method="POST" class="form-horizontal" novalidate enctype="multipart/form-data">
                   
            
            
            <div class="row form-group">
                <div class="col col-md-3"><label  class=" form-control-label">Type</label></div>
                <div class="col-12 col-md-9"><input type="radio"  name="type" required value="pdf" class="form-control">PDF
                    <input type="radio"  name="type" required value="video" class="form-control">Video</div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label  class=" form-control-label">Upload</label></div>
                <div class="col-12 col-md-9"><input type="file"  name="upload_data" required  class="form-control"></div>
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
   
