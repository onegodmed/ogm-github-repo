<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
<a class="btn btn-primary" href="<?php echo base_url('user/add_rashi')?>">Add Rashi</a><br><br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Rashi Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Rashi Name</th>
                                                <th>Rashi Type</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;
                                        foreach($rashi as $row)  {?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $row->rashi_name;?></td>
                                            <td><?php echo $row->rashi_type;?></td>
                                            <td><?php echo date('d-m-Y', strtotime($row->createdOn));?></td>
                                            <td> <a class="btn btn-primary" href="<?php echo base_url('user/edit_rashi/'.$row->id)?>">Edit</a></td>
                                              <?php if($row->id != 81 AND $row->id != 83){ ?>
                                            <td> <a class="btn btn-danger" href="<?php echo base_url('user/delete_rashi/'.$row->id)?>">Delete</a></td>
                                        <?php }else{?>
                                            <td> N/A</td>
                                        <?php }?>
                                        </tr>
                                        <?php $i++;}?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Rashi Name</th>
                                                <th>Rashi Type</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>