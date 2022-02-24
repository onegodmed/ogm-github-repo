<style>
    
#changeNo .modal-header {
    text-align: center;
    justify-content: center;
}

#changeNo .modal-header button.close {
    padding: 0;
    position: absolute;
    right: 25px;
    top: 20px;
}
#changeNo .modal-body input.mobNo {
    width: 50%;
    margin: 0 auto;
    min-height: 40px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding-left: 10px;
}

#changeNo .modal-footer .btn {
    min-width: 80px;
    border-radius: 8px;
}
</style>

<?php 
$country = $this->admin->get('countries');
?>
    <script type="text/javascript" src="<?php echo base_url('assets/js/city_state.js')?>"></script>

    <div id="widget">

        <form style="opacity: 0; height: 0;">

            Region&raquo;
            <select onchange="set_country(this,country,city_state)" size="1" name="region">

                <option value="" selected="selected">SELECT REGION</option>

                <option value=""></option>

                <script type="text/javascript">
                    setRegions(this);
                </script>

            </select>

            Country&raquo;
            <select name="country" size="1" disabled="disabled" onchange="set_city_state(this,city_state)"></select>

            City/State&raquo;
            <select name="city_state" size="1" disabled="disabled" onchange="print_city_state(country,this)"></select>

        </form>

        <div id="txtregion"></div>

        <div id="txtplacename"></div>

    </div>

    <div class="page-wrapper">

        <div class="page-breadcrumb">

            <div class="row">

                <div class="col-12 d-flex no-block align-items-center">

                    <h4 class="page-title">Edit My Account</h4>

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

            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo base_url('user/update_account')?>">

                <div class="row">

                    <div class="card">

                        <div class="card-body">

                            <div class="col-md-12">

                             <!--   <div class="form-group row">

                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label"> First Name</label>

                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" name="name" required="" placeholder="First Name" value="<?php echo $profile[0]->name?>" required>

                                    </div>

                                </div>-->

                                 <div class="form-group row">

                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label">Name</label>

                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" name="name" required="" placeholder="First Name" value="<?php echo $profile[0]->name?>" required>

                                    </div>

                                </div>


                                <div class="form-group row">

                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Email</label>

                                    <div class="col-sm-10">

                                        <input type="email" class="form-control" name="email" required="" placeholder="Email" value="<?php echo $profile[0]->email?>" required>

                                    </div>

                                </div>

                                <div class="form-group row">

                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Mobile</label>

                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" name="mobile" required="" placeholder="Mobile" value="<?php echo $profile[0]->mobile?>" readonly required>

                                        <button type="button" onclick="editNumber(<?php echo $profile[0]->mobile?>, '<?php echo $profile[0]->country_code?>')">edit</button>

                                    </div>

                                </div>

                                <!-- <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Wallet Belence</label>

                                        <div class="col-sm-10">

                                            <input type="text" class="form-control" name="wallet_balence" required="" placeholder="Mobile" value="<?php echo $profile[0]->wallet_balence?>" required>

                                        </div>

                                    </div> -->

                                <div class="form-group row">

                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Address</label>

                                    <div class="col-sm-10">

                                        <input type="text" class="form-control" name="address" required="" placeholder="Address" value="<?php echo $profile[0]->address?>">

                                    </div>

                                    </div>

                                    <div class="form-group row">

                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Country</label>

                                    <div class="col-sm-4">

                                        <select name="country" class="form-control" onchange="myfunction_member(this.value)">
                                            <option value="<?php echo $profile[0]->country?>" hidden>
                                                <?php echo $profile[0]->user_country?>
                                            </option>
                                            <?php foreach ($country as $row) {
                                               ?>
                                                <option value="<?php echo $row->id;?>">
                                                    <?php echo $row->name?>
                                                </option>
                                                <?php }?>
                                        </select>

                                    </div>
                                

                                

                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label"> State</label>

                                    <div class="col-sm-4">

                                        <select name="state" id="state1" class="form-control" onchange="myfunction2_member(this.value)">
                                            <option value="<?php echo $profile[0]->state?>" hidden>
                                                <?php echo $profile[0]->user_state?>
                                            </option>

                                        </select>

                                    </div>

                                    </div>

                                    <div class="form-group row">

                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label"> City</label>

                                    <div class="col-sm-4">

                                        <select name="city" id="city1" class="form-control">
                                            <option value="<?php echo $profile[0]->city?>" hidden>
                                                <?php echo $profile[0]->user_city?>
                                            </option>
                                        </select>

                                    </div>
                                

                                

                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label"> Pincode</label>

                                    <div class="col-sm-4">

                                        <input type="text" class="form-control" name="pincode" required="" placeholder="Pincode" value="<?php echo $profile[0]->pincode?>">

                                    </div>

                                </div>

                                <?php if($this->session->userdata('user_type') == "Astrologer"){?>

                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">About Us</label>

                                        <div class="col-sm-10">

                                            <input type="text" class="form-control" name="about_us" required="" placeholder="About Us" value="<?php echo $profile[0]->description?>">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Experience</label>

                                        <div class="col-sm-10">

                                            <input type="text" class="form-control" name="experience" required="" placeholder="Experience" value="<?php echo $profile[0]->experience?>">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Expertise</label>

                                        <div class="col-sm-10">

                                            <input type="text" class="form-control" name="expertise" required="" placeholder="Expertise" value="<?php echo $profile[0]->expertise?>">

                                        </div>

                                    </div>

                                    <!--<div class="form-group row">-->

                                    <!--    <label for="fname" class="col-sm-2 text-right control-label col-form-label">Status</label>-->

                                    <!--    <div class="col-sm-10">-->

                                    <!--        <select class="form-control" name="status">-->

                                    <!--            <option value="Online" <?php if($profile[0]->status == "Online"){echo "selected";}?>>Online</option>-->

                                    <!--            <option value="Offline" <?php if($profile[0]->status == "Offline"){echo "selected";}?>>Offline</option>-->

                                    <!--            <option value="Busy" <?php if($profile[0]->status == "Busy"){echo "selected";}?>>Busy</option>-->

                                    <!--        </select>-->

                                    <!--    </div>-->

                                    <!--</div>-->

                                    <?php }?>

                                        <div class="form-group row">

                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Profile Image</label>

                                            <div class="col-md-9">

                                                <div class="custom-file">

                                                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">

                                                    <input type="text" class="custom-file-input" name="current_image" value="<?php echo $profile[0]->image?>">

                                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

                                                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                                                </div>

                                            </div>

                                        </div>
                                        
                                         <div class="form-group row">

                                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Language</label>

                                        <div class="col-sm-10">

                                            <select class="form-control" name="status">
                                                <option value="hindi" <?php if($profile[0]->status == "hindi"){echo "selected";}?>>Hindi</option>

                                                <option value="english" <?php if($profile[0]->status == "english"){echo "selected";}?>>English</option>

                                            </select>

                                        </div>

                                    </div>

                                        <div class="border-top">

                                            <div class="card-body">

                                                <button type="submit" class="btn btn-primary">Update</button>

                                            </div>

                                        </div>

                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>

        <!-- mobile no update  Modal -->
  <div class="modal fade" id="changeNo" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Mobile No.</h4>
        </div>
        <div class="modal-body">
          <input type="text" value="" class="mobNo">
          <input type="hidden" value="" class="ctry_code">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="verifyNo()">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

   <!--otpModal no update  Modal -->
   <div class="modal fade" id="otpModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Verify OTP.</h4>
        </div>
        <div class="modal-body">
          <input type="text" value="" class="OTPno">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="verifyOTP()">Verify</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

        <script type="text/javascript">
            function myfunction_member(country_id) {
                $.ajax({
                    url: "<?php echo base_url('front/ajax_get_state')?>",
                    type: 'POST',
                    dataType: "json",
                    data: {
                        'country_id': country_id
                    },
                    success: function(response) {
                        if (response.status == 1) {
                            var i = 0;
                            $("#state1").empty();
                            $("#state1").append("<option value=''>Select</option>");
                            $.each(response.state, function(key, value) {
                                $("#state1").append("<option value='" + response.state[i].id + "'>" + response.state[i].name + "</option>")
                                i++;
                            })
                        } else {
                            $("#state1").empty();
                        }
                    }
                });
            }

            function myfunction2_member(state_id) {
                $.ajax({
                    url: "<?php echo base_url('front/ajax_get_city')?>",
                    type: 'POST',
                    dataType: "json",
                    data: {
                        'state_id': state_id
                    },
                    success: function(response) {
                        if (response.status == 1) {
                            var i = 0;
                            $("#city1").empty();
                            $("#city1").append("<option value=''>Select</option>");
                            $.each(response.city, function(key, value) {
                                $("#city1").append("<option value='" + response.city[i].id + "'>" + response.city[i].name + "</option>")
                                i++;
                            })
                        } else {
                            $("#state1").empty();
                        }
                    }
                });
            }

            function editNumber(mobile, ctry_code) {
                var mobile = $('.mobNo').val(mobile);  
                var ctry_code = $('.ctry_code').val(ctry_code);  
                $('#changeNo').modal('show');

            }
            function verifyNo() {
                var mobile = $('.mobNo').val();  
                var ctry_code = $('.ctry_code').val();  
                // alert(ctry_code+mobile)
                $.ajax({
                    url: "<?php echo base_url('login/frontlogin') ?>",
                    type: 'POST',
                    dataType: "json",
                    data: {'mobile': mobile,
                        'ctry_code': ctry_code
                    },
                    success: function (response) {
                        if (response.status == 0) {
                            $.ajax({
                                url: "<?php echo base_url('front/ajaxlogin_otp') ?>",
                                type: 'POST',
                                dataType: "json",
                                data: {'mobile': mobile,
                                    'ctry_code': ctry_code
                                },
                                success: function (response) {
                                    if (response.status == 1) {
                                        // $('#errmsg').css("display", "none");
                                        // $('#genmobile').css("display", "none");
                                        // $('#otpmobile').css("display", "block");
                                        // $('#validationcheck').val('');
                                        // $('#currentMobile').text(mobile);
                                        // sessionStorage.setItem('otp', response.otp);
                                        $('#changeNo').modal('hide');
                                        
                                        $('#otpModal').modal('show');
                                    }
                                }
                            });
                        

                    }
                }
            });
        }

        function verifyOTP() {
                var otp = $('.OTPno').val();  
                
                var mobile = $('.mobNo').val();  
                var ctry_code = $('.ctry_code').val();  
                $.ajax({
                    url: "<?php echo base_url('login/updateNo') ?>",
                    type: 'POST',
                    dataType: "json",
                    data: {
                        'mobile': mobile,
                        'otp': otp,
                        'ctry_code': ctry_code,
                    },
                    success: function (response) {
                        if (response.status == 1) {
                            $('.errmsg1').css("display", "none");
                            $('#login-dialog').hide();
							$('#login-dialog1').hide();
                            window.location.href = "";
                        } else {
                            $('.errmsg1').css("display", "block");
                            $('.errmsg1').css("color", "red");
                            $('.errmsg1').text("Incorrect OTP. Please fill correct OTP");
                        }

                    }
                });
        }
            
        </script>