
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
                    <div class="col-12 col-md-9"><input type="text"  name="duration" required placeholder="Enter Course Name" value="<?php echo @$course->duration?>" class="form-control"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Price</label></div>
                    <div class="col-12 col-md-9"><input type="text"  name="price" required placeholder="Enter Price" value="<?php echo @$course->price?>" class="form-control"></div>
                </div>
				<div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Course Description</label></div>
                    <div class="col-12 col-md-9"><input type="text" required  name="description" placeholder="Enter description" class="form-control" value="<?php echo @$course->description?>" ></div>
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
   
