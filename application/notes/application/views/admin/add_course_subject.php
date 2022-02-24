
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Add Course</strong>
        </div>
        <form autocomplete="off"  method="POST" class="form-horizontal" novalidate >
		    							
			
                <div class="row form-group">
                    <div class="col col-md-3"><label  class=" form-control-label">Course</label></div>
                    <div class="col-12 col-md-9">
                    	<select name="class_id" class="form-control">
                        <option value="">Select Course</option>
                        <?php foreach ($class as $key => $value) { ?>
                            <option value="<?php echo $value->id; ?>" ><?php echo $value->class_name; ?></option>

                            <?php
                        } ?>
                    </select></div>
                </div>             
				
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">
                <!-- <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
                </button> -->
            </div>
        </form>

        <table id="listTable" class="table table-striped table-bordered">
                    <thead>
                      <tr role="row" id="911" role="row" class="odd">
                        <th class="text-center w-5 sortingNone sorting_asc" rowspan="1" colspan="1" aria-label="" style="width: 23px;">
                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                      <input type="checkbox" name="check_all" id="check_all" value=""/><span></span>
                     </label>
                         </th>
                        <th>No</th>
                       
                        <th>Class Name</th>
                        <!-- <th style="width: 84px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($class_list as $key => $row) {
                       ?>
                      <tr id="911" role="row" class="odd">
                        <td class="sorting_1">
                         <label class="css-input css-checkbox css-checkbox-default">
                        <input type="checkbox" name="id[]" class="checkbox" value="<?php echo $row->id; ?>"/><span></span>
                        </label>
                         </td>
                        <td><?php echo $i++ ?></td>
                        
                        <td><?php echo $row->class_name;?></td>
                        <!-- <td> 
                          <div class="btn-group">
                              
                              <a title="delete" href="<?= base_url('admin/delete_courseClass/' . $row->id ) ?>" onclick="return confirm('Are you sure you want to delete?');"  class="btn btn-xs btn-default " ><i class="fa fa-times"></i></a>
                          </div>
                        </td> -->
                      </tr>
                     <?php }?>
                    </tbody>
                  </table>
	
    </div>
</div> 
   
