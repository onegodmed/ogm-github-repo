

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Chapters</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Setting</a></li>
                            <li class="active">Chapters</li>                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row"><div class="col-md-3 ">
                            <a href="<?= base_url('admin/add_chapter');?>" class="btn btn-success waves-effect waves-light m-r-10">Add Chapter</a>
                        </div></div><br/>
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Chapters List</strong>
                        </div>
                        
                          
                        <div class="card-body">
                  <table id="listTable" class="table table-striped table-bordered">
                    <thead>
                      <tr role="row" id="911" role="row" class="odd">
                        
                        <th>No</th>
                        <th>Class</th>
                        <th>Subject</th>
                        
                        <th>Chapter Name</th>
                        <th>It's Paid</th>
                         <th>Add Topic</th>
                        <th style="width: 84px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($chapter as $key => $row) {
                       ?>
                      <tr id="911" role="row" class="odd">
                        
                        <td><?php echo $i++ ?></td>
                        
                        <td><?php echo $row->class_name;?></td>
                        <td><?php echo $row->subject_name;?></td>
                        <td><?php echo $row->chapter_name;?></td>
                        <td><?php echo ($row->isPaid > 0)?'Yes':'No';?></td>
                        <td><a href="<?php echo base_url('admin/topics_list/'.$row->id); ?>">Add Topic</a></td>

                        <td> 
                          <div class="btn-group">
                              <a title="edit"  href="<?= base_url('admin/edit_chapter/' . $row->id ) ?>" class="btn btn-xs btn-default"> <i class="fa fa-pencil"></i></a>
                              <a title="delete" href="<?= base_url('admin/chapter_delete/' . $row->id ) ?>" onclick="return confirm('Are you sure you want to delete?');"  class="btn btn-xs btn-default " ><i class="fa fa-times"></i></a>
                          </div>
                        </td>
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
