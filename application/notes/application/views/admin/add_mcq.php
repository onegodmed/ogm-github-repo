
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Add MCQ</strong>
        </div>
        <?php if(!empty($package)) {
            ?>
            <form autocomplete="off" action="<?php echo base_url('admin/edit_package/'.$package->id);?>"  method="POST" class="form-horizontal" novalidate >
            <?php
        }else {
            ?>
            <form autocomplete="off"  method="POST" class="form-horizontal" novalidate >
            <?php
        } ?>
                                        
            
                <div class="row form-group">
                    <!-- <div class="col col-md-3"><label  class=" form-control-label">package Name</label></div> -->
                    <div class="col-12"><textarea placeholder="Enter Question" name="question" class="form-control" rows="4"><?php echo @$mcqById['question']?></textarea> </div>
                </div>
                <div class="row form-group">
                    <div class="col-8">Options</div>
                    <div class="col-4">Correct Answer</div>
                    
                    <div class="col-8"><input type="text"  name="option[0]" required placeholder="Enter option" value="<?php echo @$mcqById['option'][0]->option; ?>" class="form-control"></div>
                    <div class="col col-md-4">
                        <select name="correct_answer[]" class="form-control">
                            <option value="0" <?php if (@$mcqById['option'][0]->is_correct=='0') { echo 'selected'; }?>>No</option>
                            <option value="1" <?php if (@$mcqById['option'][0]->is_correct=='1') { echo 'selected'; }?>>Yes</option>
                        </select>
                        <input type="hidden" name="id[0]" value="<?php echo @$mcqById['option'][0]->id;?>">
                    </div>
                </div>
                <div class="row form-group">
                    
                    <div class="col-8"><input type="text"  name="option[1]" required placeholder="Enter option" value="<?php echo @$mcqById['option'][1]->option; ?>" class="form-control"></div>
                    <div class="col col-md-4">
                        <select name="correct_answer[]" class="form-control">
                            <option value="0" <?php if (@$mcqById['option'][1]->is_correct=='0') { echo 'selected'; }?>>No</option>
                            <option value="1" <?php if (@$mcqById['option'][1]->is_correct=='1') { echo 'selected'; }?>>Yes</option>
                        </select>
                        <input type="hidden" name="id[1]" value="<?php echo @$mcqById['option'][1]->id;?>">
                    </div>
                </div>
                <div class="row form-group">
                    
                    <div class="col-8"><input type="text"  name="option[2]" required placeholder="Enter option" value="<?php echo @$mcqById['option'][2]->option; ?>" class="form-control"></div>
                    <div class="col col-md-4">
                        <select name="correct_answer[]" class="form-control">
                            <option value="0" <?php if (@$mcqById['option'][2]->is_correct=='0') { echo 'selected'; }?>>No</option>
                            <option value="1" <?php if (@$mcqById['option'][2]->is_correct=='1') { echo 'selected'; }?>>Yes</option>
                        </select>
                        <input type="hidden" name="id[2]" value="<?php echo @$mcqById['option'][2]->id;?>">
                    </div>
                </div>
                <div class="row form-group">
                    
                    <div class="col-8"><input type="text"  name="option[3]" required placeholder="Enter option" value="<?php echo @$mcqById['option'][3]->option;?>" class="form-control"></div>
                    <div class="col col-md-4">
                        <select name="correct_answer[]" class="form-control">
                            <option value="0" <?php if (@$mcqById['option'][3]->is_correct=='0') { echo 'selected'; }?>>No</option>
                            <option value="1" <?php if (@$mcqById['option'][3]->is_correct=='1') { echo 'selected'; }?>>Yes</option>
                        </select>
                        <input type="hidden" name="id[3]" value="<?php echo @$mcqById['option'][3]->id;?>">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">It's Paid</label></div>
                    <div class="col-12 col-md-9"><input type="radio"  name="isPaid" value="0" required value="<?php echo @$mcqById['isPaid']?>" <?php  if (@$mcqById['isPaid']=='0') { echo 'checked'; } ?> class="form-control">No
                        <input type="radio"  name="isPaid" value="1" required value="<?php echo @$mcqById['isPaid']?>" class="form-control"  <?php  if (@$mcqById['isPaid']=='1') { echo 'checked'; } ?>>Yes</div>
                </div>
                
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">
                <!-- <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
                </button> -->
            </div>
        </form>
        <div class="card-body">
          <table id="listTable" class="table table-striped table-bordered">
            <thead>
              <tr role="row" id="911" role="row" class="odd">
                <th class="text-center w-5 sortingNone sorting_asc" rowspan="1" colspan="1" aria-label="" style="width: 23px;">
                <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
              <input type="checkbox" name="check_all" id="check_all" value=""/><span></span>
             </label>
                 </th>
                <th>No</th>
               
                <th>Course Name</th>
                <th>Question</th>
                <th style="width: 84px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($mcq as $key => $row) {
               ?>
              <tr id="911" role="row" class="odd">
                <td class="sorting_1">
                 <label class="css-input css-checkbox css-checkbox-default">
                <input type="checkbox" name="id[]" class="checkbox" value="<?php echo $row->id; ?>"/><span></span>
                </label>
                 </td>
                <td><?php echo $i++ ?></td>
                
                <td><?php echo $row->name;?></td>
                <td><?php echo $row->question   ;?></td>
                <td> 
                  <div class="btn-group">
                      <a title="edit"  href="<?= base_url('admin/edit_MCQ/' . $row->course_id.'/'.$row->id ) ?>" class="btn btn-xs btn-default"> <i class="fa fa-pencil"></i></a>
                      <a title="delete" href="<?= base_url('admin/delete_MCQ/' . $row->id ) ?>" onclick="return confirm('Are you sure you want to delete?');"  class="btn btn-xs btn-default " ><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
             <?php }?>
            </tbody>
          </table>
        </div>
    
    </div>
</div> 
   
