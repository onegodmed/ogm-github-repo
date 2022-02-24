<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">

<!-- Icons
<link href="<?php echo base_url(); ?>assets/plugins/icons/css/icons.css" rel="stylesheet">
	 -->

<!-- Custom style -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/responsiveness.css" rel="stylesheet">


<!-- Custom Color -->
<link href="<?php echo base_url(); ?>assets/css/skin/default.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style3.css">
<link href="<?php echo base_url(); ?>assets/css/style2.css" rel="stylesheet">




<link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.css">
<!--<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>-->		
<script src="<?= base_url() ?>assets/js/jquery-ui.min.js"></script> 
<script src="<?= base_url() ?>assets/js/script.js"></script>        
<script src="<?= base_url() ?>assets/js/sweetalert.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-multiselect.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.min.css" type="text/css">
<script src="<?= base_url() ?>assets/js/select2.min.js"></script>

<script src="<?=base_url()?>assets/js/intlTelInput.js"></script>


<!-- Bootstrap js
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>-->


<!-- Validate min -->		
<script src="<?= base_url() ?>assets/js/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/js/additional-methods.js"></script>
<!-- Custom Js
<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>	 -->	


<style>
    p{
        font-size: 14 px;
    }
    .table > thead > tr > th {

    vertical-align: middle;    

}
.alert-group{top: 12px;right: 34%;}
</style>
<?php if($this->router->fetch_method()=='edit_profile') { ?>
<div class="modal fade" id="verifyModal" role="dialog">
    <div class="modal-dialog" >

        <!-- Modal content-->
        <div class="modal-content stylemodel" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>          
            </div>
            <div id="msg1"></div>
            <form  method="POST" enctype="multipart/form-data"  action="<?= base_url('admin/verify_skill') ?>">
                <div class="modal-body" id="modal-body1">
                    <input type="hidden" value="<?php echo $user[0]->developer_id ?>" name="user_id">
                    <div class="content mt-3">
                        <div class="animated fadeIn">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Verify Skills</strong>
                                        </div>
                                        <br>
                                        <div class="card-body">
                                            <table id="bootstrap-data-table1" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Skill Name</th>
                                                        <th>Level</th>
                                                        <th>Experience</th>                                                        
                                                        <th style="width: 7%;">Is Verified
<!--                                                            <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">-->
                                                                <input type="checkbox" name="check_all" id="check_all" value=""/>
<!--                                                                <span></span>
                                                            </label> <span>  -->
                                                                
                                                                <!--</span>-->
                                                        </th> 
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    if(isset($user['developer_skills']))
                                                    foreach ($user['developer_skills'] as $key => $skill) {
                                                        if (isset($skill_list[$skill->skill_id])) {
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $i++ ?></td>
                                                                <td><?php echo $skill_list[$skill->skill_id]; ?></td>
                                                                <td><?php echo $skill->level ?></td>
                                                                <td><?php echo $skill->experience ?></td>                                        
                                                                <td> <label class="css-input css-checkbox css-checkbox-default">
                                                                        <input type="checkbox" name="verify[]" class="checkbox verify-skill-ch" value="<?php echo $skill->id; ?>" <?php echo ($skill->is_verified) ? "checked" : '' ?>/><span></span>
                                                                    </label>
                                                                </td> 
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div><!-- .animated -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-primary btn-temp" style="width: auto !important;">Verify Selected</button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    
    function prifile_verify() {
        swal({
            title: "Are you sure?",
            text: "You want to verify this user profile!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "<?= base_url('admin/profile_verify/' . $user_id) ?>",
                            type: 'POST',
                            success: function (result) {
                                if (result === "true")
                                    swal("Developer has been successfully marked verified", {icon: "success", });
                                else
                                    swal("Sorry! unable to marked verified");
                            }});
                    }
                });
    }

  
function overall_prifile_verify() {
        swal({
            title: "Are you sure?",
            text: "You want to verify this user profile! After this verification developer will be appear for recruitment list",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "<?= base_url('admin/overall_profile_verify/' . $user_id) ?>",
                            type: 'POST',
                            success: function (result) {
                                if (result === "true")
                                    swal("Developer has bee successfully marked verified", {icon: "success", });
                                else
                                    swal("Sorry! unable to marked verified");
                            }});
                    }
                });
    }
    
    
function recommended() {
        swal({
            title: "Are you sure?",
            text: "You want torecommend developer profile",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "<?= base_url('admin/recommended_profile_verify/' . $user_id) ?>",
                            type: 'POST',
                            success: function (result) {
                                if (result === "true")
                                    swal("Developer has bee successfully marked recommended", {icon: "success", });
                                else
                                    swal("Sorry! unable to marked recommended");
                            }});
                    }
                });
    }



<?php } ?>

    


</script>
<!--https://datatables.net/examples/basic_init/filter_only.html-->
<script type="text/javascript">
    $(document).ready(function () {
//        $('#bootstrap-data-table1').DataTable({
//            "paging": false,
//            "ordering": false,
//            "info": false,
//            "searching": false
//        });
        
        $("#check_all").click(function(){            
    $('.checkbox').not(this).prop('checked', this.checked);
});
    });
	

	
	
</script>


<script src="<?= base_url() ?>assets/js/custom.js"></script>


<script src="//fast.wistia.com/assets/external/api.js" async></script>
<!-- <link rel="stylesheet" href="//fast.wistia.com/assets/external/uploader.css" /> -->
<script>
   window._wapiq = window._wapiq || [];
   _wapiq.push(function (W) {
       window.wistiaUploader = new W.Uploader({
           accessToken: "f3fb2835422717782a26c4203a5ac2b4ca5ce7569d92c4c23dc16705f2935609",
           dropIn: "wistia_uploader",
           projectId: "l8gx4t73fj",
           //    videoExtensions: 'mp4 avi wmv'
           theme: 'dark_background',
   //     onBeforeUnload: false //Set onBeforeUnload to a string, or a function that returns a string, to define a custom message. Set to false if you want to disable the warning entirely.
           onBeforeUnload: '"Are you sure you wish to leave the page? Any active uploads will be lost."',
           beforeUpload: function () {
               wistiaUploader.setFileName('<?php echo @$file_name ?>');
   
               var description = '<?= @$V_description ?>';
               if ($("#v_description").val() != '')
                   description = $("#v_description").val();
   //                alert(des cription);                
               wistiaUploader.setFileDescription(description);
           }
   
       });
   });
</script>
