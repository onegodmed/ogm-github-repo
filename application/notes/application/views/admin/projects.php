

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Projects</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Projects</li>                            
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <!--                <div class="row"><div class="col-md-3 ">
                                    <a href="<?= base_url('admin/tools'); ?>" class="btn btn-success waves-effect waves-light m-r-10">Add Tools</a>
                                </div></div><br/>-->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">All Projects</strong>
                    </div>                       

                    <div class="card-body">
                        <table id="listTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 84px;">No</th>
                                    <th>Client</th>
                                    <th>Developer</th>
                                    <th>Type</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Hours</th>
                                    <th>Client legal name</th>
                                    <th>Projects Status</th>
                                    <th style="width: 84px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                if(!empty($projects)){
                                    foreach ($projects as $key => $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>

                                            <td><?php echo $row->client_first_name.' '.$row->client_last_name; ?></td>
                                            <td><?php echo $row->developer_first_name.' '.$row->developer_last_name; ?></td>
                                            <td><?php echo ucfirst(str_replace("_"," ",$row->job_type));?></td>
                                            <td><?php echo date('D M Y',strtotime($row->start_date));?></td>
                                            <td><?php echo date('D M Y',strtotime($row->end_date));?></td>
                                            <td><?php echo $row->hours;?></td>
                                            <td><?php echo $row->client_legal_name;?></td>
                                            <td><?php echo $row->status;?></td>
                                            <td> <div class="btn-group">
                                                   <!-- <a title="edit"  href="<?= base_url('admin/edit_tools/' . $row->id) ?>" class="btn btn-xs btn-default"> <i class="fa fa-pencil"></i></a>-->

                                                    <a  title="delete" href="<?= base_url('admin/delete_project/' . $row->id) ?>" onclick="return confirm('Are you sure you want to delete?');"  class="btn btn-xs btn-default " ><i class="fa fa-times"></i></a>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php }
                                }?>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });
</script> 

<!--
</body>
</html>-->
