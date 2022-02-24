   
<div class="container form-one">
    <div class="card">
        <div class="card-header">
            <strong> Email Validator </strong> 
        </div>
        <form action="" method="POST" class="form-horizontal">
        <div class="card-body card-block">
            
                <div class="row form-group business_img">
                    <div class="col col-md-3"><label for="hf-email" class="form-control-label">Email</label></div>
                    <div class="col-md-8" >
                        <input type="Email" name="email[]" placeholder="Enter Email" class="form-control">
                    </div>

                    <div class="col-md-1">
                        <button type="button" style="margin-left: -16px;" class="btn btn-default addMore_business_img" onclick="addmore('business_img')"><i class="fa fa-plus"></i></button>
                    </div>
                    <!-- <div class="col-md-1"><button type="button" class="btn btn-default addMore_business_img" onclick="addmore('business_img')"><i class="fa fa-plus"></i></button></div> -->
                </div>
                <div class="row form-group business_imgCopy" style="display:none;">
                    <div class="col col-md-3"><label for="hf-email" class="form-control-label">Email</label></div>
                    <div class="col-md-8" >
                        <input type="Email" id="hf_email" name="email[]" placeholder="Enter Email" class="form-control">
                    </div>
                    <div class="col-md-1">
                        <button type="button" style="margin-left: -16px;" class="btn btn-danger remove pluse" onclick="removefield(this, 'business_img')"><i class="fa fa-minus"></i></button>
                    </div>
                    <!-- <div class="col-md-1"><button type="button" class="btn btn-default addMore_business_img" onclick="addmore('business_img')"><i class="fa fa-plus"></i></button></div> -->
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
	<div class="card">
                    <div class="card-header">
                        <strong class="card-title">Email List</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>                      
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
								
                                foreach ($emails as $key => $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        
                                        <td><?php echo $row->email ?></td>
                                         
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
</div> 

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


</script>
