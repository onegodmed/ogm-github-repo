
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Add Course</strong>
        </div>
        <?php if(!empty($course)) {
            ?>
            <form autocomplete="off" action="<?php echo base_url('admin/edit_course/'.$course->id);?>"  method="POST" class="form-horizontal" novalidate >
            <?php
        }else {
            ?>
            <form autocomplete="off"  method="POST" class="form-horizontal" novalidate >
            <?php
        }?>
		    							
			
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Name</label></div>
                    <div class="col-12 col-md-9"><input type="text"  name="course_name" required placeholder="Enter Course Name" value="<?php echo @$course->name?>" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Duration</label></div>
                    <div class="col-12 col-md-9">
                        <select class="form-control" name="duration">
                            <option value="">Select Duration</option>
                            <option value="6 Months">6 Months</option>
                            <?php for ($i=1; $i < 5; $i++) { 
                                ?>
                                <option value="6 Months"><?php echo ($i==1)?$i.' Year':$i.' Years'; ?></option>
                                <?php
                            } ?>
                            
                        </select></div>
                </div>
                <!-- <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Price</label></div>
                    <div class="col-12 col-md-9"><input type="number"  name="price" required placeholder="Enter Price" value="<?php echo @$course->price?>" class="form-control"></div>
                </div> -->
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Package</label></div>
                    <div class="col-12 col-md-9">
                        <select class="form-control" name="package_id">
                            <option value="">Select Package</option>
                            <?php foreach ($package as $key => $value) { ?>
                                <option value="<?php echo $value->id;?>" <?php if ($value->id==@$course->package_id) { echo 'selected'; }?>><?php echo $value->package_name;?></option>
                            <?php } ?>
                            
                        </select></div>
                </div>
				<div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Course Description</label></div>
                    <div class="col-12 col-md-9"><textarea name="description" class="form-control"><?php echo @$course->description ?></textarea></div>
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
   
