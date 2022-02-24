

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Category</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Setting</a></li>
                            <li class="active"><a href="#">Category</a></li>                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row"><div class="col-md-3 ">
                            <a href="<?= base_url('admin/category');?>" class="btn btn-success waves-effect waves-light m-r-10">Add category</a>
                    </div></div><br/>
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Category</strong>
                        </div>                          
                        <div class="card-body">
                  <table id="listTable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 84px;">No</th>
                        <th>Category</th>
                        <th style="width: 84px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($category as $key => $row) { ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row->category_name;?></td>
                             <td> <div class="btn-group">
                                         <a title="edit"  href="<?= base_url('admin/edit_category/' . $row->id ) ?>" class="btn btn-xs btn-default"> <i class="fa fa-pencil"></i></a>
                                     
                                     <a  title="delete" href="<?= base_url('admin/delete_category/' . $row->id ) ?>" onclick="return confirm('Are you sure you want to delete?');"  class="btn btn-xs btn-default " ><i class="fa fa-times"></i></a>
                                      
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

    <!-- Right Panel -->

 
<!--    <script src="<?= base_url('admin_assets/js/vendor/jquery-2.1.4.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/plugins.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/main.js') ?>"></script>


    <script src="<?= base_url('admin_assets/js/lib/data-table/datatables.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/lib/data-table/dataTables.bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/lib/data-table/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/lib/data-table/buttons.bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/lib/data-table/jszip.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/lib/data-table/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/lib/data-table/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/lib/data-table/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/lib/data-table/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/lib/data-table/buttons.colVis.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/lib/data-table/datatables-init.js') ?>"></script>-->


<!--    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>-->

