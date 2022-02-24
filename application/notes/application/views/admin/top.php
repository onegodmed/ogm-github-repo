<?php
$signup = $this->db->query("SELECT count(*) as count FROM `users` WHERE is_mobile_verified='0'");

$incomplete = $this->db->query("SELECT count(*) as count FROM `users` WHERE     is_profile_complete='0'");
// $msg_count = $this->db->query("SELECT count(*) as msg_count FROM `db_message` WHERE recipient_id='".$this->session->userdata('user_id')."' and read_status='0'");


$unverified = $this->db->query("SELECT count(*) as count FROM `users` WHERE is_overall_verified='0'");

$verified = $this->db->query("SELECT count(*) as count FROM `users` WHERE is_overall_verified='1'");

$schedule = $this->db->query("SELECT count(*) as count FROM users a, schedule_interviews b WHERE 'a.id' = 'b.developer_id'");

$done = $this->db->query("SELECT count(*) as count FROM schedule_interviews WHERE status= '1'");
// $user_details=get_details('db_users',array('user_id'=> $this->session->userdata('user_id')));
 ?>


    <!--     <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>            
        </div> -->

 
<!-- 
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div> -->
<?php 


?>


    <div class="row">
        <div class="col-md-10">
        <ul class="custom-breadcrumb">
            <li class="light-blue-crumb"><a href="<?=base_url('admin/dashboard_new?status=signup')?>">Signed Up <span><?php echo $signup->row()->count; ?></span></a></li>
            <li class="faded-crumb"><a href="<?=base_url('admin/dashboard_new?status=incomplete')?>">Incomplete <span><?php echo $incomplete->row()->count; ?></span></a></li>
                       
            <li class="blue-crumb current"><a href="<?=base_url('admin/dashboard_new?status=unverified')?>">Unverified <span><?php echo $unverified->row()->count; ?></span></a></li>
            <li class="light-blue-crumb"><a href="<?=base_url('admin/dashboard_new?status=verified')?>">Verified <span><?php echo $verified->row()->count; ?></span></a></li> 
          <li class="gray-crumb"><a href="<?=base_url('admin/dashboard_new?status=schedule')?>">Schedule <span><?php echo $schedule->row()->count; ?></span></a></li>          
            <li class="gray-crumb"><a href="<?=base_url('admin/dashboard_new?status=done')?>">Done <span><?php echo $done->row()->count; ?></span></a></li>
        </ul>
    </div>

</div>
          



  <!--  <script >
$(".light-blue-crumb").hover(function () {
    $(this).toggleClass("crumb");
});
   </script> -->