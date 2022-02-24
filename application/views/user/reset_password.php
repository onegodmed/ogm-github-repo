<div id="widget">

    <div id="txtregion"></div>

    <div id="txtplacename"></div>

</div>

<div class="page-wrapper">

    <div class="page-breadcrumb">

        <div class="row">

            <div class="col-12 d-flex no-block align-items-center">

                <h4 class="page-title">Reset Password</h4>

                <div class="ml-auto text-right">

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Reset Password</li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-8">

                <div class="card">

                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('user/reset_password_code')?>">

                        <div class="card-body">
                            <div class="form-group row">

                                <label for="fname" class=" col-sm-3 text-right control-label col-form-label">Current Password</label>

                                <div class="col-sm-9 ">
                                    <span style="color: red">
                                        <?php echo $this->session->flashdata('error');?>
                                    </span>
                                    <input type="text" class="form-control" name="current_pas" required="" placeholder="Current Password" value="" required>

                                </div>

                            </div>

                            <div class="form-group row">

                                <label for="fname" class=" col-sm-3 text-right control-label col-form-label">New Password</label>

                                <div class="col-sm-9 ">

                                    <input type="text" class="form-control" name="new_pas" required="" placeholder="New Password" value="" required>

                                </div>

                            </div>

                            <div class="form-group row">

                                <label for="fname" class=" col-sm-3 text-right control-label col-form-label">Confirm Password</label>

                                <div class="col-sm-9 ">

                                    <input type="text" class="form-control" name="confirm_pas" required="" placeholder="Confirm Password" value="" required>

                                </div>

                            </div>

                            <div class="border-top">

                                <div class="card-body">

                                    <button type="submit" class="btn btn-primary">Update</button>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>