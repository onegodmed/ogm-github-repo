

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Reported Problems</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Extras</a></li>
                            <li class="active">Reported Problems</li>                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
<!--                <div class="row"><div class="col-md-3 ">
                            <a href="<?= base_url('admin/Reported Problems');?>" class="btn btn-success waves-effect waves-light m-r-10">Add Skill</a>
                        </div></div><br/>-->
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">All Reported Problems</strong>
                        </div>
                        
                          
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr role="row" id="911" role="row" class="odd">
                        <th class="text-center w-5 sortingNone sorting_asc" rowspan="1" colspan="1" aria-label="" style="width: 23px;">
                        <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
                      <input type="checkbox" name="check_all" id="check_all" value=""/><span></span>
                     </label>
                         </th>
                        <th>No</th>
                        <th>Developer</th>
                        <th>Client</th>
                        <th>Content</th>                        
                        <!-- <th style="width: 84px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th> -->
                      </tr>
                    </thead> 
                    <tbody> 
                      <?php
//                      echo "<pre>";                      print_r($reported_problems);exit;
                      $i = 1;
                      foreach ($reported_problems as $key => $row) { ?>
                      <tr id="911" role="row" class="odd">
                        <td class="sorting_1">
                         <label class="css-input css-checkbox css-checkbox-default">
                        <input type="checkbox" name="id[]" class="checkbox" value="<?php echo $row->id; ?>"/><span></span>
                        </label>
                         </td>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row->devFirstName.' '.$row->devLastName; ?></td>
                        <td><?php                         
                          $client = $this->db->get_where('client', array('client.id'=>$row->client_id))->row();
                          if($client)
                             echo  $client->first_name.' '.$client->last_name;
                          ?></td>
                        <td><?php echo substr($row->violation_details,0,25);?></td>
                             <!-- <td> <div class="btn-group">
                                     <a title="view"  href="<?= base_url('admin/reported_problem_view/' . $row->id ) ?>" class="btn btn-xs btn-default"> <i class="fa fa-eye"></i></a>
                                      
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

  
