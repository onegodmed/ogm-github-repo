
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Add Topic</strong>
        </div>
        <?php if(!empty($topic)) {
            ?>
            <form autocomplete="off" action="<?php echo base_url('admin/topics_edit/'.$topic->id);?>"  method="POST" class="form-horizontal" novalidate >
            <?php
        }else {
            ?>
            <form autocomplete="off"  method="POST" class="form-horizontal" novalidate >
            <?php
        }?>           

            <div class="row form-group">
                <input type="hidden" name="chapter_id" value="<?php echo $chapter_id; ?>">
                <div class="col col-md-3"><label  class=" form-control-label">Topic Name</label></div>
                <div class="col-12 col-md-9"><input type="text"  name="topic_name" required placeholder="Enter Topic Name" value="<?php echo @$topic->topic_name?>" class="form-control"></div>
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
   
