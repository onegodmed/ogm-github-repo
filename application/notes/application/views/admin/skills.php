   
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong> Technologies </strong> 
        </div>
        <form action="<?= base_url('admin/add_skills') ?>" method="POST"  id="skillForm" class="form-horizontal skillForm">
        <div class="card-body card-block">

                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class="form-control-label" >Category </label></div>
                    <div class="col-12 col-md-9">
                        <select name="category" class="form-control" style="height:35px;">
                            <option value="0">  -- select categories -- </option>
                            <?php foreach($categories as $category) { ?>
                                <option value="<?php echo $category->id ?>">  <?php echo $category->name ?> </option>
                            <?php } ?>

                        </select>
                    </div>
                </div>

                <div class="row form-group business_img">
                    <div class="col col-md-3"><label for="hf-email" class="form-control-label">Technology</label></div>
                    <div class="col-md-8" >
                        <input type="text"  name="skills" id="skills" placeholder="Enter Technology Name..." class="form-control">
                    </div>
                    <!--
                    <div class="col-md-1">
                        <button type="button" style="margin-left: -16px;" class="btn btn-default addMore_business_img" onclick="addmore('business_img')"><i class="fa fa-plus"></i></button>
                    </div>
                    -->
                    <!-- <div class="col-md-1"><button type="button" class="btn btn-default addMore_business_img" onclick="addmore('business_img')"><i class="fa fa-plus"></i></button></div> -->
                </div>
                <!--
                <div class="row form-group business_imgCopy" style="display:none;">
                    <div class="col col-md-3"><label for="hf-email" class="form-control-label">Technology</label></div>
                    <div class="col-md-8" >
                        <input type="text" id="hf-email" name="skills" placeholder="Enter Technology Name..." class="form-control">
                    </div>
                    <div class="col-md-1">
                        <button type="button" style="margin-left: -16px;" class="btn btn-danger remove pluse" onclick="removefield(this, 'business_img')"><i class="fa fa-minus"></i></button>
                    </div>

                </div>
                -->
            </div>

            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary btn-sm" id="submitButton" value="submit"> submit </button>
                <!-- <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
                </button> -->
            </div>

            </form>

        <div class="row" style="margin-top:30px;">

            <div class="col-md-11" style="margin:10px;">
                <h3> Available Skills</h3>
                <br />
                <div id="suggested-skills"><table class="table table-bordered"></table></div>
            </div>
        </div>
    </div>



</div> 

<!--                    <script src="<?= base_url('admin_assets/js/vendor/jquery-2.1.4.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/plugins.js') ?>"></script>
    <script src="<?= base_url('admin_assets/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>-->
<script>
//group add limit
    var maxGroup = 10;

//add more fields group
    function addmore(fieldGroup) {
        if (jQuery('body').find('.' + fieldGroup).length < maxGroup) {
            var fieldHTML = '<div class="row form-group ' + fieldGroup + '">' + $("." + fieldGroup + "Copy").html() + '</div>';
            jQuery('body').find('.' + fieldGroup + ':last').after(fieldHTML);
        } else {
            alert('Maximum ' + maxGroup + ' groups are allowed.');
        }
    }

//remove fields group
    function removefield(ths, fieldGroup) {
        jQuery(ths).parents("." + fieldGroup).remove();
    }

//Prevent users from submitting a form by hitting Enter
    jQuery(document).ready(function () {
        jQuery(window).keydown(function (event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });

 jQuery('#skills').keyup(function(){
     if(jQuery(this).val().length >  2){
         jQuery.post('/admin/suggested_skills', {skill: jQuery(this).val()}, function(data){
             var tableRows = "<tr><th>Skill</th><th>Category</th></tr>";
             data = JSON.parse(data);
             data.forEach(function(skill)  {
                 console.log(skill)
                 tableRows += "<tr> <td>"+skill.skill_name+"</td><td>"+skill.name+" </td></tr>"
             });
             jQuery("#suggested-skills table").html(tableRows);
         })
     }

    });


    (function($){
        $("#submitButton").click(function(e){
            //e.preventDefault();
            if(confirm("Are you sure to add the "+$("#skills").val()+" technology.")){
                return true;
            }
        })
    })(jQuery)

</script>
<!--
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRH7zFeEtgATSlGDQGTjAhMjKzy5jTuxw&libraries=places&callback=initAutocomplete" async defer></script>
-->