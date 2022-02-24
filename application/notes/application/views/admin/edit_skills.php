   
        <div class="container form-one">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit skills</strong>
                      </div>
                        <form action="<?= base_url('admin/update_skills')?>" method="POST" class="form-horizontal">
                            <div class="card-body card-block">

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="hf-email" class="form-control-label" >Category </label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="category" class="form-control" style="height:35px;">
                                            <option value="0">  -- select categories -- </option>
                                            <?php foreach($categories as $category) { ?>
                                                <option <?php echo ($skills[0]->category_id == $category->id ) ? 'selected' : ''     ?> value="<?php echo $category->id ?>">  <?php echo $category->name ?> </option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Skills</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="skills" name="skills" placeholder="Enter Skills..." class="form-control" value="<?php echo $skills[0]->skill_name ?>"></div>
                                </div>

                                <input type="hidden" name="id" value="<?php echo $skills[0]->id?>">
                             </div>
                        <div class="card-footer">
                        <input type="submit" name="submit" class="btn btn-primary btn-sm" value="submit">
                        <a class="btn btn-primary btn-sm " href="javascript:history.back()" role="button">Back</a>
                        <!-- <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button> -->
                      </div>

                    </form>


                    </div>

                    <div class="row" style="margin-top:30px;">

                        <div class="col-md-12">
                            <h3> Available Skills</h3>
                            <div id="suggested-skills"><table class="table table-bordered"></table></div>
                        </div>
                    </div>
                   </div> 

<!--                    <script src="<?= base_url('admin_assets/js/vendor/jquery-2.1.4.min.js')?>"></script>
    <script src="<?= base_url('admin_assets/js/popper.min.js')?>"></script>
    <script src="<?= base_url('admin_assets/js/plugins.js')?>"></script>
    <script src="<?= base_url('admin_assets/js/main.js')?>"></script>-->

<script>
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
</script>