  
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Add Course</strong>
        </div>
        <?php if(!empty($product)) { ?> 
            <form autocomplete="off" action="<?php echo base_url('admin/edit_product/'.$product->id);?>"  method="POST" class="form-horizontal" novalidate  enctype="multipart/form-data" >
        
        <?php }else{ ?>
        <form autocomplete="off"  method="POST" class="form-horizontal" novalidate  enctype="multipart/form-data" >
         
        <?php } ?>
      
		    					
                
		
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Course </label></div>
                    <div class="col-12 col-md-9">
                        <select class="form-control" name="course_id">
                            <?php  foreach ($course as $key => $value) { ?> 
                                <option value="<?php echo($value->id);?>" <?php if ($value->id==@$product->course_id) { echo 'selected';} ?>><?php echo($value->name);?></option>
                            <?php } ?>
                            
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Subject</label></div>
                    <div class="col-12 col-md-9">
                        <select class="form-control" name="subject_id">
                            <?php  foreach ($CourseParts as $key => $value) { ?> 
                                <option value="<?php echo($value->id);?>" <?php if ($value->id==@$product->subject_id) { echo 'selected';} ?> ><?php echo($value->name);?></option>
                            <?php } ?>
                            
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Board </label></div>
                    <div class="col-12 col-md-9">
                        <select class="form-control" name="board_id">
                            <?php  foreach ($board as $key => $value) { ?> 
                                <option value="<?php echo($value->id);?>"  <?php if ($value->id==@$product->board_id) { echo 'selected';} ?>><?php echo($value->name);?></option>
                            <?php } ?>
                            
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Package </label></div>
                    <div class="col-12 col-md-9">
                        <select class="form-control" name="package_id">
                            <?php  foreach ($package as $key => $value) { ?> 
                                <option value="<?php echo($value->id);?>"  <?php if ($value->id==@$product->package_id) { echo 'selected';} ?>><?php echo($value->name);?></option>
                            <?php } ?>
                            
                        </select>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Chapter</label></div>
                    <div class="col-12 col-md-9"><input type="text"  name="chapter_name" required placeholder="Enter Course Name" value="<?php echo @$product->chapter_name?>" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Topics</label></div>
                    <div class="col-12 col-md-9"><input type="text"  name="topics" required placeholder="Enter Course Name" value="<?php echo @$product->topic?>" class="form-control"></div>
                </div>
                <?php if (empty($product)) { ?>
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Type</label></div>
                    <div class="col-12 col-md-9"><input type="radio"  name="upload_type" class="form-control" value="pdf"> PDF
                        <input type="radio"  name="upload_type" class="form-control" value="Video"> Video</div>
                </div>
				
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Select File</label></div>
                    <div class="col-12 col-md-9"><input type="file"  name="upload_data" class="form-control" > </div>
                </div>
                <?php } ?>
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
 

	  
