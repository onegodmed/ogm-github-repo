
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Add Mamber</h4>
            
                        <?php if($this->session->flashdata('error')!=""){?>
                                    <p style="color: red;"><?php echo $this->session->flashdata('error')?></p>
                                    <?php }?>
                        <form class="row" method="post" action="<?php echo base_url('admin/register_mamber') ?>" >
                            
                            <div class="form-group col-lg-6">
                                <label>Mamber Name</label>
                                <input type="text" class="form-control" name="name" required="" placeholder="Enter your name">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Mamber Email</label>
                                <input type="email" class="form-control" required="" name="email" parsley-type="email" placeholder="Enter a valid e-mail">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Mobile Number</label>
                                <input type="text" class="form-control" name="mobile" required="" placeholder="Mobile no.">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                    <input type="password" id="pass2" class="form-control" required="" placeholder="Password" name="password">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Select User type</label>
                                <select class="form-control" required="" name="user_type">
                                    <?php if($this->session->userdata('user_type')!='sub_admin'){?>
                                        <option value="sub_admin">Sub Admin</option>
                                        <?php }?>
                                        <option value="counsellor">Counsellor</option>
                                        <option value="reception">Recaption</option>
                                        <option value="addmission_cell">Admission Cell</option>
                                </select>
                            </div>
                             <?php if($this->session->userdata('user_type')=='admin'){?>
                            <!-- <div class="form-group col-lg-6">
                                <label>Select Branch</label>
                                <select class="form-control" required="" name="branch_id">
                                      <?php foreach ($branch as  $row) {
                                        ?>
                                        <option value="<?php echo $row->id ?>"><?php echo $row->branch."-".$row->city ?></option>
                                       <?php }?>
                                </select>
                            </div> -->
                            <?php }else{?>
                                   <input type="hidden" name="branch_id" value="<?php echo $this->session->userdata('branch_id');?>">
                                <?php }?>
                            <div class="form-group">
                                <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
           
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

