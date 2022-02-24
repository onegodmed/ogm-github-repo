n
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Add Board</strong>
        </div>
        <?php if(!empty($board)) {
            ?>
            <form autocomplete="off" action="<?php echo base_url('admin/edit_board/'.$board->id);?>"  method="POST" class="form-horizontal" novalidate >
            <?php
        }else {
            ?>
            <form autocomplete="off"  method="POST" class="form-horizontal" novalidate >
            <?php
        }?>
                                        
            
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Name</label></div>
                    <div class="col-12 col-md-9"><input type="text"  name="board_name" required placeholder="Enter Board Name" value="<?php echo @$board->board_name?>" class="form-control"></div>
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
   
