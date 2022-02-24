

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Position</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Setting</a></li>
                            <li class="active"><a href="#">Position</a></li>                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-3 ">
                            <a href="<?= base_url('admin/position');?>" class="btn btn-success waves-effect waves-light m-r-10">Add Position</a>
                        </div>
                </div>
                <br/>
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">All Position</strong>
                        </div>                       
                        
                        
                          
                        <div class="card-body">
                            
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 84px;">No</th>
                        <th>Position</th>
						
                        <th style="width: 84px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="row_position">
                      <?php
                      $i = 1;
                      foreach ($position as $key => $row) { ?>
                      <tr id="<?= $row->id; ?>">
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row->position_name;?></td>
						
                             <td> <div class="btn-group">
                                         <a title="edit"  href="<?= base_url('admin/edit_position/' . $row->id ) ?>" class="btn btn-xs btn-default"> <i class="fa fa-pencil"></i></a>
                                     
                                     <a  title="delete" href="<?= base_url('admin/delete_position/' . $row->id ) ?>" onclick="return confirm('Are you sure you want to delete?');"  class="btn btn-xs btn-default " ><i class="fa fa-times"></i></a>
                                      
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
<script></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script type="text/javascript">
    $( ".row_position" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('.row_position>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    });


    function updateOrder(data) {
        $.ajax({
            url:"<?= base_url('admin/update_positionSeQuence');?>",
            type:'post',
            data:{position:data},
            success:function(){
               
            }
        })
    }
</script>
<!--
</body>
</html>-->
