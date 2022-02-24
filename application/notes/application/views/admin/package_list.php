

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Packages</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Setting</a></li>
                            <li class="active">Packages</li>                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row"><div class="col-md-3 ">
                            <a href="<?= base_url('admin/add_package');?>" class="btn btn-success waves-effect waves-light m-r-10">Add Package</a>
                        </div></div><br/>
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Packages List</strong>
                        </div>
                        
                          
                        <div class="card-body">
                  <table id="listTable" class="table table-striped table-bordered">
                    <thead>
                      <tr role="row" id="911" role="row" class="odd">
                        
                        <th>No</th>
                       
                        <th>Package Name</th>
                        <th>Amount</th>
                        <th>Valid Days</th>
                        <th style="width: 84px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($package as $key => $row) {
                       ?>
                      <tr id="911" role="row" class="odd">
                        
                        <td><?php echo $i++ ?></td>
                        
                        <td><?php echo $row->package_name;?></td>
                        <td><?php echo $row->amount;?></td>
                        <td><?php echo $row->valid_days;?></td>
                        <td> 
                          <div class="btn-group">
                              <a title="edit"  href="<?= base_url('admin/edit_package/' . $row->id ) ?>" class="btn btn-xs btn-default"> <i class="fa fa-pencil"></i></a>
                              <a title="delete" href="<?= base_url('admin/delete_package/' . $row->id ) ?>" onclick="return confirm('Are you sure you want to delete?');"  class="btn btn-xs btn-default " ><i class="fa fa-times"></i></a>
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
