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
<a class="btn btn-primary" href="<?php echo base_url('user/add_horoscope')?>">Add Horoscope</a><br><br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><span id="headingdata">Daily</span> Horoscope Datatable</h5>
                                <label>Select Horoscope Type</label>
                                    <select name="horotype" id="filterhorotype">
                                        <option value="daily">Daily</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="yearly">Yearly</option>
                                    </select>
                                <div class="table-responsive dailydata" style="display:block;">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Rashi Name</th>
                                                <th>Rashi Type</th>
                                                <th>Horoscope Type</th>
                                                <th>Horoscope</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;
                                        foreach($dailyhoroscope as $row)  {?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $row->rashi_name;?></td>
                                            <td><?php echo $row->rashi_type;?></td>
                                            <td><?php echo $row->horoscope_type;?></td>
                                            <td><?php echo $row->date;?></td>
                                            <td> <a class="btn btn-primary" href="<?php echo base_url('user/edit_horoscope/'.$row->horoscope_type.'/'.$row->id)?>">Edit</a></td>
                                              <?php if($row->id != "" AND $row->id != ""){ ?>
                                            <td> <a class="btn btn-danger" href="<?php echo base_url('user/delete_horoscope/'.$row->id)?>">Delete</a></td>
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
                                                <th>Horoscope Type</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                    <div class="table-responsive weeklydata" style="display:none;">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Rashi Name</th>
                                                <th>Rashi Type</th>
                                                <th>Horoscope Type</th>
                                                <th>Horoscope</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;
                                        foreach($weeklyhoroscope as $row)  {?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $row->rashi_name;?></td>
                                            <td><?php echo $row->rashi_type;?></td>
                                            <td><?php echo $row->horoscope_type;?></td>
                                            <td><?php echo $row->weekNo;?></td>
                                            <td> <a class="btn btn-primary" href="<?php echo base_url('user/edit_horoscope/'.$row->horoscope_type.'/'.$row->id)?>">Edit</a></td>
                                              <?php if($row->id != "" AND $row->id != ""){ ?>
                                            <td> <a class="btn btn-danger" href="<?php echo base_url('user/delete_horoscope/'.$row->id)?>">Delete</a></td>
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
                                                <th>Horoscope Type</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                    <div class="table-responsive monthlydata" style="display:none;">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Rashi Name</th>
                                                <th>Rashi Type</th>
                                                <th>Horoscope Type</th>
                                                <th>Horoscope</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;
                                        foreach($monthlyhoroscope as $row)  {?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $row->rashi_name;?></td>
                                            <td><?php echo $row->rashi_type;?></td>
                                            <td><?php echo $row->horoscope_type;?></td>
                                            <td><?php echo $row->monthNo;?></td>
                                            <td> <a class="btn btn-primary" href="<?php echo base_url('user/edit_horoscope/'.$row->horoscope_type.'/'.$row->id)?>">Edit</a></td>
                                              <?php if($row->id != "" AND $row->id != ""){ ?>
                                            <td> <a class="btn btn-danger" href="<?php echo base_url('user/delete_horoscope/'.$row->id)?>">Delete</a></td>
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
                                                <th>Horoscope Type</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                    <div class="table-responsive yearlydata" style="display:none;">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Rashi Name</th>
                                                <th>Rashi Type</th>
                                                <th>Horoscope Type</th>
                                                <th>Horoscope</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;
                                        foreach($yearlyhoroscope as $row)  {?>
                                        <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $row->rashi_name;?></td>
                                            <td><?php echo $row->rashi_type;?></td>
                                            <td><?php echo $row->horoscope_type;?></td>
                                            <td><?php echo $row->year;?></td>
                                            <td> <a class="btn btn-primary" href="<?php echo base_url('user/edit_horoscope/'.$row->horoscope_type.'/'.$row->id)?>">Edit</a></td>
                                              <?php if($row->id != "" AND $row->id != ""){ ?>
                                            <td> <a class="btn btn-danger" href="<?php echo base_url('user/delete_horoscope/'.$row->id)?>">Delete</a></td>
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
                                                <th>Horoscope Type</th>
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