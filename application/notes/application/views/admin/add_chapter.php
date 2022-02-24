
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Add Chapter</strong>
        </div>
        <?php if(!empty($chapter)) {
            ?>
            <form autocomplete="off" action="<?php echo base_url('admin/edit_chapter/'.$chapter->id);?>"  method="POST" class="form-horizontal" novalidate >
            <?php
        }else {
            ?>
            <form autocomplete="off"  method="POST" class="form-horizontal" novalidate >
            <?php
        }?>
                   
            
            <div class="row form-group">
                <div class="col col-md-3"><label  class=" form-control-label">Board</label></div>
                <div class="col-12 col-md-9">
                    <select name="board_id" class="form-control">
                        <option value="">Select Board</option>
                        <?php foreach ($board as $key => $value) { ?>
                            <option value="<?php echo $value->id; ?>" <?php if ($value->id==@$chapter->board_id) { echo "selected"; } ?>><?php echo $value->board_name; ?></option>

                            <?php
                        } ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label  class=" form-control-label">Course</label></div>
                <div class="col-12 col-md-9">
                    <select name="course_id" class="form-control">
                        <option value="">Select Course</option>
                        <?php foreach ($course as $key => $value) { ?>
                            <option value="<?php echo $value->id; ?>" <?php if ($value->id==@$chapter->course_id) { echo "selected"; } ?>><?php echo $value->name; ?></option>

                            <?php
                        } ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label  class=" form-control-label">Class</label></div>
                <div class="col-12 col-md-9">
                    <select name="class_id" class="form-control">
                        <option value="">Select Class</option>
                        <?php foreach ($class as $key => $value) { ?>
                            <option value="<?php echo $value->id; ?>" <?php if ($value->id==@$chapter->class_id) { echo "selected"; } ?>><?php echo $value->class_name; ?></option>

                            <?php
                        } ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label  class=" form-control-label">Subject</label></div>
                <div class="col-12 col-md-9">
                    <select name="subject_id" class="form-control">
                        <option value="">Select Subject</option>
                        <?php foreach ($subject as $key => $value) { ?>
                            <option value="<?php echo $value->id; ?>" <?php if ($value->id==@$chapter->subject_id) { echo "selected"; } ?>><?php echo $value->subject_name; ?></option>

                            <?php
                        } ?>
                    </select>
                </div>
            </div>
                      

            <div class="row form-group">
                <div class="col col-md-3"><label  class=" form-control-label">Chapter Name</label></div>
                <div class="col-12 col-md-9"><input type="text"  name="chapter_name" required placeholder="Enter Chapter Name" value="<?php echo @$chapter->chapter_name?>" class="form-control"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label  class=" form-control-label">It's Paid</label></div>
                <div class="col-12 col-md-9">
                    <input type="radio" name="isPaid" value="1">Yes
                    <input type="radio" name="isPaid" value="0">No
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
   
