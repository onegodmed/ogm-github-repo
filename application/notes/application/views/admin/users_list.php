

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Users</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Setting</a></li>
                            <li class="active">Users</li>                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">All Users</strong>
                        </div>
                        
                          
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
                       
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <!-- <th style="width: 84px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($user as $key => $row) {
                       ?>
                      <tr id="911" role="row" class="odd">
                        <td class="sorting_1">
                         <label class="css-input css-checkbox css-checkbox-default">
                        <input type="checkbox" name="id[]" class="checkbox" value="<?php echo $row->id; ?>"/><span></span>
                        </label>
                         </td>
                        <td><?php echo $i++ ?></td>
                        
                        <td><?php echo $row->first_name.' '.$row->last_name;?></td>
                        <td><?php echo $row->email   ;?></td>
                        <td><?php echo $row->mobile   ;?></td>
                        <!-- <td> 
                          <div class="btn-group">
                              <a title="edit"  href="<?= base_url('admin/edit_course/' . $row->id ) ?>" class="btn btn-xs btn-default"> <i class="fa fa-pencil"></i></a>
                              <a title="delete" href="<?= base_url('admin/course_delete/' . $row->id ) ?>" onclick="return confirm('Are you sure you want to delete?');"  class="btn btn-xs btn-default " ><i class="fa fa-times"></i></a>
                          </div>
                        </td> -->
                      </tr>
                     <?php }?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
