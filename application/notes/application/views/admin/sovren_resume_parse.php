  <link href="<?=base_url('assets/css/style2.css');?>" rel="stylesheet">

<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong>Sovren Resume Parse</strong>
        </div>
        <form method="POST" class="form-horizontal" id="sovrenForm" enctype="multipart/form-data">
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">User Source</label></div>
                    <div class="col-12 col-md-9">
                    <?php
                    $sourceArr = userSource();
                    echo form_dropdown('user_source', [''=>'-- Select Source --'] + $sourceArr, set_value('user_source'),['class'=>'form-control','required'=>'required']); ?>
                
                   </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">First Name </label></div>
                    <div class="col-12 col-md-9">
                        <?php echo form_input('first_name', set_value('first_name'),['class'=>'form-control','placeholder'=>'First Name','required'=>'required']); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Last Name </label></div>
                    <div class="col-12 col-md-9">
                        <?php echo form_input('last_name', set_value('last_name'),['class'=>'form-control','placeholder'=>'Last Name','required'=>'required']); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Email </label></div>
                    <div class="col-12 col-md-9">
                         <?php echo form_input('email', set_value('email'),['class'=>'form-control','placeholder'=>'Email','required'=>'required']); ?>                         
                        <span class="error" id="error-email"></span>                 
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-mobile" class=" form-control-label">Mobile</label></div>
                    <div class="col-12 col-md-9">
                        <?php echo form_input('mobile', set_value('mobile'),['class'=>'form-control','placeholder'=>'Mobile','id'=> 'phone','maxlength'=>'15','required'=>'required']); ?>
                        <span class="error" id="error-mobile"></span>

                    
                    </div>
                    <input type="hidden" name="country_code" id="country_code" value="<?php echo @$user->country_code?>"  data-validation="required" >
                                        <input type="hidden" name="country_name" id="country_name" value="<?php echo @$user->country_name?>"  data-validation="required">
                                        <input type="hidden" name="mobile_country_code" id="mobile_country_code"value="<?php echo @$user->mobile_country_code?>"  data-validation="required">
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Upload Resume</label></div>
                    <div class="col-12 col-md-9"><input type="file" required="" name="resume"class="form-control"></div>
					<input type="hidden" name="referral" value="<?php echo base_url('admin/edit_profile');?>">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">
                <!-- <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
                </button> -->
            </div>
        </form>

    </div>
</div> 
<script src="<?= base_url('assets/js/intlTelInput.js');?>"></script>

<script>

    var telInput = $("#phone"),
        errorMsg = $("#error-msg"),
        errorEmail = $("#error-email"),
        validMsg = $("#valid-msg");
        validSubmit = $("input[type='submit']");

    var default_country_code = 'in';
    var default_country_mobile_code = '91';
    var default_country_name = 'India';

// initialise plugin
    telInput.intlTelInput({

        allowExtensions: true,
        formatOnDisplay: true,
        autoFormat: true,
        autoHideDialCode: true,
        autoPlaceholder: true,
        defaultCountry: "auto",
        ipinfoToken: "yolo",

        nationalMode: false,
        numberType: "MOBILE",
        //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
//  preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
        preferredCountries: ['in', "us"],
        preventInvalidNumbers: true,
        separateDialCode: true,
        initialCountry: "auto",
     
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
    });

    /*var reset = function () {
        telInput.removeClass("error");
        errorMsg.addClass("hide");
        validMsg.addClass("hide");
    };*/

// on blur: validate
    telInput.on('input',function () {

       // reset();
       

        if ($.trim(telInput.val())) {
           
            if (telInput.intlTelInput("isValidNumber")) {
                $.ajax({
                    url: "<?= base_url('login/check_email')?>",
                    type: "post",
                    dataType:'json',
                    data: {mobile:telInput.val(),user_type:'developer'},
                    success: function(result) {                 
                        if(result.valid){                        
                            $('#error-mobile').text("");
                            validSubmit.attr('disabled',false);
                        }else{
                            $('#error-mobile').text(result.message).css('color','red');
                            validSubmit.attr('disabled',true);
                        }
                    }
                });
                
            } else {               
                $('#error-mobile').text('Please enter valid number').css('color','red');
                validSubmit.attr('disabled',true);


               /* telInput.addClass("error");
                errorMsg.removeClass("hide");*/
            }
        }
    });

  /*   $(document).on('blur input', 'input[name="email"]', function(){ 

        $.ajax({
                url: "<?= base_url('login/check_email')?>",
                type: "post",
                dataType:'json',
                data: {email:$(this).val(),user_type:'developer'},
                success: function(result) {                 
                    if(result.valid){                        
                        errorEmail.text('');
                        validSubmit.attr('disabled',false);
                    }else{
                        errorEmail.text(result.message).css('color','red');
                        validSubmit.attr('disabled',true);
                    }
                }
            });

    });*/


/*    function check_email(){
        $.ajax({
                url: "<?= base_url('login/check_email')?>",
                type: "post",
                dataType:'json',
                data: {email:$('input[name="email"]').val(),user_type:'developer'},
                success: function(result) {                 
                    if(result.valid){
                        alert('czxc');
                        return true;
                    }else{
                        return false;
                    }
                }
            });
    }

    $('#sovrenForm').on('submit', function(e) {
        alert(check_email());
        e.preventDefault();
        if(telInput.intlTelInput("isValidNumber")){

        }


    });



*/

    
   

    
</script>