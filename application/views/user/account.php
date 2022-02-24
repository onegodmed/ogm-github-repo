<style>
    form p {
border: 1px solid #ddd;
    background: #f9f9f9;
    padding: 10px 30px;
    margin: 5px;
    border-radius: 3px;
}
.border-top {
    border-top: 1px solid #e9ecef!important;
    text-align: center;
    margin-top: 10px;
}
.btn-outline-info {
    color: #ff871f;
    background-color: transparent;
    background-image: none;
    border-color: #ff871f;
}
.btn-outline-info:hover {
    color: #fff;
    background-color: #ff871f;
    border-color: #ff871f;
}
.card-body img{
    margin: auto;
    display: table;
}
.card-body a {
    color: #ff871f !important;
}
 ul.navbar-nav.float-right {
    position: relative;
    top: 0px;
}
 
</style>

        <div class="page-wrapper">

           

            <div class="page-breadcrumb">

                <div class="row">

                    <div class="col-12 d-flex no-block align-items-center">

                        <h4 class="page-title">My Account</h4>

                        <div class="ml-auto text-right">

                            <nav aria-label="breadcrumb">

                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="#">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">My Account</li>

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

                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="#">

                                

                                <div class="card-body">

                                    <div class="row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">  Name</label>

                                        <div class="col-sm-10">

                                            <p><?php echo $profile[0]->name?></p>

                                        </div>

                                    </div>

                                   

                                    <div class="row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Email</label>

                                        <div class="col-sm-10">

                                           <p><?php echo $profile[0]->email?></p>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Mobile</label>

                                        <div class="col-sm-10">

                                            <p><?php echo $profile[0]->mobile?></p>

                                        </div>

                                    </div>

                                     <!-- <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Wallet Belence</label>

                                        <div class="col-sm-10">

                                           <p><?php echo $profile[0]->wallet_balence?></p>

                                        </div>

                                    </div> -->

                                     <div class="row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Address</label>

                                        <div class="col-sm-10">

                                           <p><?php echo $profile[0]->address?></p>

                                        </div>

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Country</label>

                                        <div class="col-sm-4">

                                           <p><?php if($profile[0]->user_country){echo $profile[0]->user_country;}else{echo $profile[0]->country;}?></p>

                                        </div>

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> State</label>

                                        <div class="col-sm-4">

                                           <p><?php if($profile[0]->user_state){echo $profile[0]->user_state;}else{echo $profile[0]->state;}?></p>

                                        </div>

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> City</label>

                                        <div class="col-sm-4">

                                           <p><?php if($profile[0]->user_city){echo $profile[0]->user_city;}else{echo $profile[0]->city ;}?></p>
                                              
                                        </div>

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Pincode</label>

                                        <div class="col-sm-4">

                                           <p><?php echo $profile[0]->pincode?></p>

                                        </div>

                                    </div>

                                    <?php  if($this->session->userdata('user_type') == "Astrologer"){?>

                                     <div class="row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">About Us</label>

                                        <div class="col-sm-10">

                                           <p><?php echo $profile[0]->description ?></p>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Experience</label>

                                        <div class="col-sm-10">

                                           <p><?php echo $profile[0]->experience?></p>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Expertise</label>

                                        <div class="col-sm-10">

                                           <p><?php echo $profile[0]->expertise?></p>

                                        </div>

                                    </div>

                                   

                                    <div class="row">

                                        <!--<label for="fname" class="col-sm-2 text-right control-label col-form-label">Status</label>-->

                                        <!--<div class="col-sm-4">-->

                                        <!--   <p><?php echo $profile[0]->status?></p>-->

                                        <!--</div>-->
                                        
                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Language</label>

                                        <div class="col-sm-4">

                                           <p><?php echo $profile[0]->langknown?></p>

                                        </div>

                                    </div>

                                    <?php }?>

                                   

                                    

                           </div>

                                

                            </form>

                        </div>

                       </div>

                        <div class="col-md-4">

                            <div class="card">

                           

                                <div class="card-body">

                                          <?php if($profile[0]->image != ""){?>

                                          <img width="200" src="<?php echo base_url('admin-assets/assets/images/users/'.$profile[0]->image); ?>" class="img-responsive">

                                      <?php }else{?>

                                          <img width="200" src="<??>http://rcsieducation.com/horoscope/admin-assets/assets/images/users/1.jpg" class="img-responsive">

                                      <?php } ?>

                                          

                                        

                                   <div class="border-top">

                                    <div class="card-body">
                                        <?php if($this->session->userdata('user_type') != 'Astrologer'){?>
                                        <a href="<?php echo base_url('user/edit_account'); ?>"><button type="submit" class="btn btn-lg btn-block btn-outline-info">Edit Profile</button></a>
                                        <?php }?>
                                    </div>
                                      <a href="<?php echo base_url('user/reset_password')?>"><button type="button" class="btn btn-lg btn-block btn-outline-info">Reset Password</button></a>
                                      
                                      <a class="dropdown-item" href="<?php echo base_url();?>Admin/deleteuser/<?= $this->session->userdata('id') ?>"><button type="button" class="btn btn-lg btn-block btn-outline-info">Delete Account</button></a>

                                    </div>     

                        </div>

                       </div>

            </div>

            </div>

          