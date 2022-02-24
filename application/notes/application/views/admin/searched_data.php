

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Searched Data</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Setting</a></li>
                            <li class="active">Skill</li>                            
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
                            <strong class="card-title">All Skill</strong>
                        </div>
                        
                          
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr role="row" id="911" role="row" class="odd">
                        
                        <th>No</th>
                        <th>SearchEd Url</th>
                        <th>Count</th>
                        <th>Date time</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($searched_data as $key => $row) { ?>
                      <tr id="911" role="row" class="odd">
                       
                        <td><?php echo $i++ ?></td>                      
                        <td ><a href="<?php echo $row->search_url ?>" target="_blank"><?php echo $row->search_url ?></a></td>
                        <td><?php echo $row->search_count;?></td>
						<td><?php echo $row->datetime;?></td>
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


    <script src="<?= base_url('admin_assets/js/vendor/jquery-2.1.4.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/plugins.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/main.js') ?>"></script>


<!--    <script src="<?= base_url('admin_assets/js/lib/data-table/datatables.min.js') ?>"></script>
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


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

<!--
</body>
</html>-->
