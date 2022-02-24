<!--<script src="<?= base_url() ?>assets/js/custom.js"></script>-->
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.min.css" type="text/css">
        <script src="<?= base_url() ?>assets/js/select2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.min.css">
    <script src="<?= base_url() ?>assets/js/bootstrap-datepicker.min.js"></script>      
<?php if ($section_number == 0) { ?>
<section style="background: #f5f5f5;" data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container" >
<div class="row">
    <!-- ===================== Blog Sidebar ==================== -->
    <div class="col-md-3 col-sm-3 hidden-xs">
        <div class="sidebar success-form" id="myHeader">
            <div class="widget-boxed"><!-- Start: Listing Category -->
                <div class="widget-boxed-header">
                    <h4><i class="ti-briefcase padd-r-10"></i> Categories</h4>
                </div>

                <div class="widget-boxed-body padd-top-10 padd-bot-0">
                    <div class="side-list sidenav">
                        <aside>
                            <ul class="category-list">
                                <li><a href="#1"><i class="fa fa-info-circle"></i> General Information </a></li>
                                <li><a href="#2"><i class="fa fa-car"></i> Willing To Travel </a></li>
                                <li><a href="#3"><i class="fa  fa-language"></i> Languages</a></li>
                                <li><a href="#4"><i class="fa fa-black-tie"></i> Possition </a></li>
                                <li><a href="#5"><i class="fa fa-database"></i> Technologies </a></li>
                                <li><a href="#6"><i class="glyphicon glyphicon-time"></i> TimeZone </a></li>
                                <li><a href="#7"><i class="fa fa-cubes"></i> Tool </a></li>
                                <li><a href="#8"><i class="fa fa-graduation-cap"></i> Education </a></li>
                                <li><a href="#9"><i class="fa fa-suitcase"></i> Employment</a></li>
                                <li><a href="#10"><i class="fa fa-money"></i> Rate </a></li>
                                <li><a href="#11"><i class="fa fa-reorder "></i> Project List </a></li>
                                <li><a href="#12"><i class="fa fa-play-circle"></i> Interview Videos </a></li>
                                <!-- <li><a href="#12"><i class="fa fa-tasks"></i>Interview Videos </a></li> -->
                            </ul>
                        </aside>
                    </div>
                </div>
            </div><!-- End: Listing Category -->
        </div>
    </div>

    <!-- =============== Blog Detail ================= -->
    <div class="col-md-9 col-sm-9">
        <!--<form class="c-form sections">-->
        <form name="edit_profile" action="<?= base_url('developer/edit_profile/' . $user[0]->user_id . '/' . $section_number); ?>" id="profile_form" method="POST" enctype="multipart/form-data">
     
<?php } ?>                    
        <input type="hidden" name="user_id" value="<?php echo $user[0]->user_id?>">
        <?php if ($section_number == 1 || $section_number == 0 || $section_number == 2) { ?>
            <div class="box" id="1"><!-- General Information -->
                <div class="box-header">
                    <h4>Tell us more about you</h4>
                </div>
                <div class="box-body">
                    <div class="row">
<?php }
if ($section_number == 1 || $section_number == 0) {
?> 
                        <div class="col-sm-12">
                            <div class="col-sm-2 col-xs-12">
                                <a href="#" id="get_file">
                                    <?php if (@$user[0]->image != '') { ?>
                                        <img id="blah" src="<?php echo @$user[0]->image ?>" alt="<?= @$user[0]->first_name ?>" class="imgplace">     
                                    <?php } else { ?>
                                        <img id="blah" src="<?php echo base_url(); ?>assets/img/img22.png" alt="your image" class="imgplace">                                                                                                                        
                                    <?php } ?>

                                </a>
                            </div>
                            <div class="col-sm-10 col-xs-12">
                                <label>Please upload a professional portrait that clearly shows your face</label>
                                <p class="text-des">Freelancers with a friendly, professional-looking portrait arehired 5 times more often than those without a photo.</p>
                                <input id="my_file" type="file" name="profile_image" accept="image/gif, image/jpeg, image/png">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name" value="<?= set_value('first_name', @$user[0]->first_name) ?>" required>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="<?= set_value('last_name', @$user[0]->last_name) ?>" required>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?= set_value('email', @$user[0]->email) ?>" readonly>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <label>Mobile</label>
                            <input type="text" class="form-control" name="mobile" value="<?= set_value('mobile', @$user[0]->mobile) ?>" readonly>
                        </div>

                    <?php } ?>
                    <?php
                    if ($section_number == 2 || $section_number == 0) {
                        $pro_des = @$user[0]->profile_description;
                        if ($this->input->post('profile_description') != '')
                            $pro_des = $this->input->post('profile_description');
                        ?>
                        <div class="col-sm-12 col-xs-12">
                            <label>Write a professional overview</label>
                            <p class="text-des">Highlight your top skills, experience, and interests. This is one of the first things clients will see on your profile.</p>
                            <textarea class="form-control height-120" name="profile_description" required><?= set_value('profile_description', $pro_des) ?></textarea>
                            <hr>
                        </div>
                    <?php } ?>
                    <?php if ($section_number == 1 || $section_number == 2 || $section_number == 0) { ?>    
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($section_number == 1 || $section_number == 0) { ?>    

            <div class="box" id="2"><!-- General Information -->
                <div class="box-header">
                    <h4>Willing to Travel</h4>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12" style="margin-top: 20px;">
                            <span class="custom-checkbox">
                                <input type="checkbox"  name="willing_to_traval" value="1" <?= (@$user[0]->willing_to_traval) ? 'checked' : ''; ?>>
                                <label for="44"></label>Are you willing to Travel
                            </span>
                        </div>
                        <div class="col-sm-8 col-xs-12">
                            <label></label>
                            <p class="text-des">"Are you willing to travel?â€? is a common question, one you may encounter on your job  will be shared with clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($section_number == 0 || $section_number == 3) { ?>
            <div class="box" id="3"><!-- General Information -->
                <div class="box-header">
                    <h4>Language</h4>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 language_btn">
                            <?php
                            @$Language = config_item('language_options');
                            $set_default = "";
                            if (@$user[0]->language)
                                $set_default = $user[0]->language;
                            if ($this->input->post('language')[0] != '')
                                $set_default = implode(',', $this->input->post('language'));
//                                        $set_default = explode(",", trim($set_default,','));                                            
//                                        echo form_dropdown('language[]', $Language, array(trim($set_default,',')), ['id' => 'demo', 'multiple' => 'multiple', 'required']);
                            ?>       
                            <select multiple id ='demo' multiple ='multiple' required name="language[]" class="lgugebtn">
                                <option >Select Language</option>
                                <?php foreach (@$Language as $key => $value) { ?>
                                    <option value="<?= $key ?>" <?= (strpos(@$set_default, @$key) !== false) ? 'selected' : "" ?> ><?= $value ?></option>
                                <?php } ?>
                            </select>                                         
                        </div>                                
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($section_number == 1 || $section_number == 0) { ?>
            <div class="box" id="4"><!-- General Information -->
                <div class="box-header">
                    <h4>Position</h4>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <label> Position</label>
                            <p class="text-des">"How much experience do you have?  </p>
                            <?php
                            $set_default = "";
                            if (@$user[0]->position_id)
                                $set_default = $user[0]->position_id;
                            if ($this->input->post('position_id') != '')
                                $set_default = $this->input->post('position_id');

                            @$categories = array('' => 'Select Option') + $positions;

                            echo form_dropdown('position_id', $categories, array($set_default), ['class' => 'wide form-control', 'required']);
                            ?>     
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        if ($section_number == 0 || $section_number == 1 || $section_number == 6) {
            $experience = config_item('experience');
            ?>                        
            <div class="box" id="5"><!-- General Information -->
                <div class="box-header">
                    <h4>Technologies</h4>
                </div>
                <div class="box-body">
                    <?php if ($section_number == 0 || $section_number == 1) { ?>                             
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <label>Over All Experience</label>
                                <p class="text-des">Are you willing to travel?â€? is a common question, one you may encounter on your job  will be shared with clients.</p>
                                <?php
                                $set_default = "";
                                if (@$user[0]->overall_experince)
                                    $set_default = $user[0]->overall_experince;
                                if ($this->input->post('overall_experince') != '')
                                    $set_default = $this->input->post('overall_experince');



                                echo form_dropdown('overall_experince', $experience, set_value('overall_experince', $set_default), ['class' => 'wide form-control', 'name' => 'overall_experince']);
                                ?>
                            </div>
                        </div>
                    <?php } if ($section_number == 0 || $section_number == 6) { ?>                    
                        <div class="extra-field-box">
                            <input type="hidden" name="delete_skills" value="" id="delete_skills">
                            <div class="multi-box" id="add_skill">	
                                <?php
                                $count = -1;
                                $level = config_item('level');
                                $skills_show[0]['developer_skills_id'] = '';
                                $skills_show[0]['skill_id'] = '';
                                $skills_show[0]['skill_experience'] = '';
                                $skills_show[0]['skills_level'] = '';

                                if ($this->input->post('skill_id') != '')
                                    foreach ($this->input->post('skill_id') as $key => $skill_id) {
                                        $count++;
                                        $skills_show[$count]['developer_skills_id'] = @$this->input->post('developer_skills_id')[$key];
                                        $skills_show[$count]['skill_id'] = $this->input->post('skill_id')[$key];
                                        $skills_show[$count]['skill_experience'] = $this->input->post('skill_experience')[$key];
                                        $skills_show[$count]['skills_level'] = $this->input->post('skills_level')[$key];
                                    } else
                                    foreach ($user['developer_skills'] as $key => $skill_detail) {
                                        $count++;
                                        $skills_show[$count]['developer_skills_id'] = $skill_detail->id;
                                        $skills_show[$count]['skill_id'] = $skill_detail->skill_id;
                                        $skills_show[$count]['skill_experience'] = $skill_detail->experience;
                                        $skills_show[$count]['skills_level'] = $skill_detail->level;
                                    }
//                                        echo "<pre>";
//                                        print_r($skills_show);
//                                        print_r($user['developer_skills']);
//                                         echo "</pre>";
                                foreach ($skills_show as $count => $value) {
                                    ?>
                                    <div class="dublicat-box mrg-bot-40">
                                        <button type="button" class="btn remove-field light-gray-btn del-item delete-skill" data-item-id="<?= $value['developer_skills_id'] ?>"><i class="fa fa-close"></i></button>
                                        <div class="row">
                                            <div class="techs-table">                                                
                                                <table class="table">
                                                    <tr>
                                                        <td>
                                                            <label>Technology Name</label>
                                                            <p class="text-des">"What skills do you offer clients?  </p>
                                                        </td>
                                                        <td>
                                                            <label> Experience</label>
                                                            <p class="text-des">"How much experience do you have?  </p>
                                                        </td>
                                                        <td>
                                                            <label> Level Of Expertise</label>
                                                            <p class="text-des">"What is your experience level? </p>
                                                        </td>
                                                        <td>
                                                            <p>&nbsp;</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>   
                                                            <input type="hidden" name="developer_skills_id[<?= $count ?>]" value="<?= $value['developer_skills_id'] ?>">
                                                            <?php echo form_dropdown("skill_id[$count]", $skills, array($value['skill_id']), ['id' => "select-skill_$count", 'multiple' => "false", 'class' => 'limitedNumbSelect2', 'required']); ?>            
                                                        </td>
                                                        <td>
                                                            <?php echo form_dropdown("skill_experience[$count]", $experience, array($value['skill_experience']), ['class' => 'wide form-control', 'required']); ?> 
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo form_dropdown("skills_level[$count]", $level, array($value['skills_level']), ['class' => 'wide form-control', 'required']);
                                                            ?> 
                                                        </td>
                                                        <td> 
                                                            <!--<button type="button" class="btn remove-field light-gray-btn">Remove</button>-->

                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <hr>
                                    </div>

                                    <script>

                                        $("#select-skill_<?= $count ?>").select2({
                                            maximumSelectionLength: 1,
                                            placeholder: "Skill"
                                        });

                                        count_add_skill =<?= $count ?>;

                                    </script>

                                <?php } ?>
<!--<div class="text-center"><button type="button" class="btn theme-btn form-control" onclick="add_more_skill()"><i class="fa fa-plus"></i></button></div>-->
                            </div>

                            <!--<div class="text-center"><button type="button" class="btn theme-btn form-control" onclick="add_more_skill()">Add More</button></div>-->
                            <div class="text-center"><button type="button" class="btn add-field theme-btn" onclick="add_more_skill()">Add More</button></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php }
        if ($section_number == 0 || $section_number == 10) {
            ?>
            <div class="box" id="6"><!-- General Information -->
                <div class="box-header">
                    <h4>Time Zone</h4>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <label><b>Please let me know what time is good for you.</b></label>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <?php
                                $time_zon_list = config_item('time_zon_list');
                                foreach ($time_zon_list as $key => $value) {
                                    $che = "";
                                    if (strpos(@$user[0]->timezons, $key) !== false)
                                        $che = "checked";
                                    if ($this->input->post('timezons') != '')
                                        if (in_array($value, $this->input->post('timezons')))
                                            $che = "checked";
                                    ?>
                                    <div class="col-sm-6">
                                        <span class="custom-checkbox">
                                            <input type="checkbox"  name="timezons[]" value="<?= $key ?>" <?= $che ?>>
                                            <label for="44"></label><?= $value ?>
                                        </span>
                                    </div>
<?php } ?>                                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php
        if ($section_number == 0 || $section_number == 7) {
            $set_default = array();
            if ($this->input->post('tools')[0])
                foreach (@$this->input->post('tools') as $k => $v)
                    $set_default[] = $v;
            foreach (@$user['developer_tools'] as $k => $v) {
                $set_default[] = $v->tool_id;
            }
            ?>
            <input type="hidden" name="is_tool_change" id="is_tool_change" value="0">
            <div class="box" id="7"><!-- General Information -->
                <div class="box-header">
                    <h4>Tools</h4>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Are you familiar with project management software?</label>
                        </div>
                        <div class="col-sm-4">
<?php echo form_dropdown('tools[]', $tools, $set_default, ['id' => "select-tools", 'multiple' => "true", 'class' => 'limitedNumbSelect2']); ?>                                                                                                                         
                        </div>
                    </div>
                </div>
            </div>
        <?php }
        if ($section_number == 0 || $section_number == 8) {
            ?>
            <div class="box" id="8"><!-- General Information -->
                <div class="box-header">
                    <h4>Tell us about your education history.</h4>
                </div>
                <div class="box-body">
                    <div class="extra-field-box">
                        <div class="multi-box">
                            <input type="hidden" name='delete_education' id="delete_education" value=""> 
                            <?php
                            $count = 0;
                            $show_edu[$count]['university_name'] = '';
                            $show_edu[$count]['degree'] = "";
                            $show_edu[$count]['location'] = "";
                            $show_edu[$count]['degree_from'] = "";
                            $show_edu[$count]['degree_to'] = "";
                            if ($this->input->post('university_name') != '')
                                foreach ($this->input->post('university_name') as $key => $value) {
                                    @$show_edu[$count]['educations_id'] = $this->input->post('educations_id')[$key];
                                    @$show_edu[$count]['university_name'] = $this->input->post('university_name')[$key];
                                    @$show_edu[$count]['degree'] = $this->input->post('degree')[$key];
                                    @$show_edu[$count]['location'] = $this->input->post('educations_location')[$key];
                                    @$show_edu[$count]['degree_from'] = $this->input->post('degree_from')[$key];
                                    @$show_edu[$count]['degree_to'] = $this->input->post('degree_to')[$key];
                                    $count++;
                                } else if (@$user['educations'][0])
                                foreach ($user['educations'] as $key => $value) {
                                    $show_edu[$count]['educations_id'] = $value->id;
                                    $show_edu[$count]['university_name'] = $value->university_name;
                                    $show_edu[$count]['degree'] = $value->degree;
                                    $show_edu[$count]['location'] = $value->location;
                                    $show_edu[$count]['degree_from'] = $value->from_date;
                                    $show_edu[$count]['degree_to'] = $value->to_date;
                                    $count++;
                                }

                            foreach ($show_edu as $count => $value) {
                                ?>
                                <div class="dublicat-box mrg-bot-40">
                                    <div class="row">
                                        <div class="col-md-12 education-table">
                                            <div class="col-md-6">
                                                <label>University</label>
                                                <input type="hidden" name="educations_id[<?= $count ?>]" value="<?= @$show_edu[$count]['educations_id'] ?>" data-count-id="<?= $count ?>">
                                                <input type="text" class="form-control" name="university_name[<?= $count ?>]" value="<?= $show_edu[$count]['university_name'] ?>" data-count-id="<?= $count ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Degree</label>
                                                <input type="text" class="form-control" name="degree[<?= $count ?>]"  value="<?= $show_edu[$count]['degree'] ?>" data-count-id="<?= $count ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Location</label>
                                                <input type="text" class="form-control" name="educations_location[<?= $count ?>]" value="<?= $show_edu[$count]['location'] ?>" data-count-id="<?= $count ?>">
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <label>Date From</label>
<?php echo form_dropdown('degree_from[' . $count . ']', $years, array($show_edu[$count]['degree_from']), ['class' => 'wide form-control', 'data-count-id' => "$count"]); ?>
                                                <!--<input type="date" name="bday" class="form-control date_text" name="degree_from[]">-->
                                            </div>
                                            <div class="col-md-4">
                                                <label>Date To</label>
<?php echo form_dropdown('degree_to[' . $count . ']', $years, array($show_edu[$count]['degree_to']), ['class' => 'wide form-control', 'data-count-id' => "$count"]); ?>
                                                <!--<input type="date" name="bday" class="form-control date_text" name="degree_to[]">-->
                                            </div>

<!--                                                        <div class="col-md-2">
                                                <label>&nbsp;</label>
                                                <div class="text-center"><button type="button" class="btn add-field theme-btn form-control">Add More</button></div>
                                            </div>-->
                                        </div>
                                    </div>
                                    <button type="button" class="btn remove-field light-gray-btn delete-education" data-item-id="<?= @$show_edu[$count]['educations_id'] ?>">Remove</button>
                                </div>
<?php } ?>
                        </div>
                         <div class="text-center"><button type="button" class="btn add-field theme-btn">Add More</button></div> 
                    </div>
                </div>
            </div>
<?php }
if ($section_number == 0 || $section_number == 9) {
?>
            <div class="box" id="9"><!-- General Information -->
                <div class="box-header">
                    <h4>Employment</h4>
                </div>
                <div class="box-body">
                    <div class="extra-field-box">
                        <div class="multi-box">
                            <input type="hidden" name="delete_emp" id="delete_emp">
                            <?php
                            $count = 0;
                            $show_emp[$count]['employments_id'] = '';
                            $show_emp[$count]['designation'] = '';
                            $show_emp[$count]['employer_name'] = '';
                            $show_emp[$count]['employments_location'] = '';
                            $show_emp[$count]['my_role'] = '';
                            $show_emp[$count]['employments_from_date'] = '';
                            $show_emp[$count]['employments_to_date'] = '';

                            if ($this->input->post('designation') != "")
                                foreach ($this->input->post('designation') as $key => $value) {
                                    @$show_emp[$count]['employments_id'] = $this->input->post('employments_id')[$key];
                                    @$show_emp[$count]['designation'] = $this->input->post('designation')[$key];
                                    @$show_emp[$count]['employer_name'] = $this->input->post('employer_name')[$key];
                                    @$show_emp[$count]['employments_location'] = $this->input->post('employments_location')[$key];
                                    @$show_emp[$count]['my_role'] = $this->input->post('my_role')[$key];
                                    @$show_emp[$count]['employments_from_date'] = $this->input->post('employments_from_date')[$key];
                                    @$show_emp[$count]['employments_to_date'] = $this->input->post('employments_to_date')[$key];
                                    $count++;
                                } else {
                                foreach ($user['employments'] as $key => $value) {
                                    @$show_emp[$count]['employments_id'] = $value->id;
                                    @$show_emp[$count]['designation'] = $value->designation;
                                    @$show_emp[$count]['employer_name'] = $value->employer_name;
                                    @$show_emp[$count]['employments_location'] = $value->location;
                                    @$show_emp[$count]['my_role'] = $value->my_role;
                                    @$show_emp[$count]['employments_from_date'] = $value->from_date;
                                    @$show_emp[$count]['employments_to_date'] = $value->to_date;
                                    $count++;
                                }
                            }
                            foreach ($show_emp as $count => $value) {
                                ?>
                                <div class="dublicat-box mrg-bot-40">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Designation</label>
                                            <input type="hidden" value="<?= $value['employments_id'] ?>" name="employments_id[<?= $count ?>]"  data-count-id="<?= $count ?>">
                                            <input type="text" class="form-control" name="designation[<?= $count ?>]" value="<?= $value['designation'] ?>"  data-count-id="<?= $count ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Employer Name</label>
                                            <input type="text" class="form-control" name="employer_name[<?= $count ?>]"  value="<?= $value['employer_name'] ?>"  data-count-id="<?= $count ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Location</label>
                                            <input type="text" class="form-control"  name="employments_location[<?= $count ?>]"  value="<?= $value['employments_location'] ?>"  data-count-id="<?= $count ?>">
                                        </div>
                                        <div style="clear: both;"></div>
                                        <div class="col-sm-4">
                                            <label>Role</label>
                                            <input type="text" class="form-control" name="my_role[<?= $count ?>]"  value="<?= $value['my_role'] ?>"  data-count-id="<?= $count ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Date From</label>
                                            <input type="text"  id="from<?=$count?>"  class="form-control date_text input-sm from" name="employments_from_date[<?= $count ?>]"  value="<?= $value['employments_from_date'] ?>"  data-count-id="<?= $count ?>">
                                            
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Date To</label>
                                            <input type="text" id="to<?=$count?>" class="form-control date_text input-sm to" name="employments_to_date[<?= $count ?>]"  value="<?= $value['employments_to_date'] ?>"  data-count-id="<?= $count ?>">                                                
                                        </div>
<!--                                                    <div class="col-md-2">
                                            <label>&nbsp;</label>
                                            <div class="text-center"><button type="button" class="btn add-field theme-btn form-control">Add More</button></div>
                                        </div>-->
                                    </div>
                                    <button type="button" class="btn remove-field light-gray-btn delete_emp" data-item-id="<?= $value['employments_id'] ?>">Remove</button>
                                </div>
                          

<?php } ?>
                        </div>
                         <div class="text-center"><button type="button" class="btn add-field theme-btn">Add More</button></div> 
                    </div>
                </div>
            </div>
            
            

<script type="text/javascript">
//var startDate = new Date();
//var fechaFin = new Date();
//var FromEndDate = new Date();
//var ToEndDate = new Date();

//$('#from123').datepicker();


$('.from').datepicker({
autoclose: true,
minViewMode: 1,
format: 'mm/yyyy'
}).on('changeDate', function (selected) {
startDate = new Date(selected.date.valueOf());
startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));    
var id=$(this).attr('data-count-id');
$('#to'+id).datepicker('setStartDate', startDate);
});

$('.to').datepicker({
autoclose: true,
minViewMode: 1,
format: 'mm/yyyy'
}).on('changeDate', function (selected) {
FromEndDate = new Date(selected.date.valueOf());
FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));    
var id=$(this).attr('data-count-id');
$('#from'+id).datepicker('setEndDate', FromEndDate);
});








</script>
            
            
      <script type="text/javascript">
          <?php
//          $i=$count;
//          for($i=0;$count>=$count;$i++){?>
//$('#from<?=$i?>').datepicker({
//autoclose: true,
//minViewMode: 1,
//format: 'mm/yyyy'
//}).on('changeDate', function (selected) {
//startDate = new Date(selected.date.valueOf());
//startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));    
//
//$('#to<?=$i?>').datepicker('setStartDate', startDate);
//}); 
//
//$('#to<?=$i?>').datepicker({
//autoclose: true,
//minViewMode: 1,
//format: 'mm/yyyy'
//}).on('changeDate', function (selected) {
//FromEndDate = new Date(selected.date.valueOf());
//FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));    
//
//$('#from<?=$i?>').datepicker('setEndDate', FromEndDate);
//});
          <?php// } ?>
</script>        
<?php } ?>
<?php if ($section_number == 0 || $section_number == 4) { ?>
            <div class="box" id="10"><!-- General Information -->
                <div class="box-header">
                    <h4>Set your Hourly Rate</h4>
                </div>
                <div class="box-body">
                    <div class="extra-field-box">
                        <div class="multi-box">	
                            <div class="dublicat-box mrg-bot-40">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <label>Full Time</label>
                                        <p class="text-des">Total amount per hr the client will see</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="input-group price-input">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-usd dolerinp"></i></span>
                                            <input type="number" class="form-control" name="full_time" value="<?= set_value('full_time', $user[0]->full_time_amount) ?>"><text class="hr-txt"> /hr</text>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>

                                    <div class="col-sm-7">
                                        <label>Part Time</label>
                                        <p class="text-des">Total amount per hr the client will see</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="input-group price-input">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-usd dolerinp"></i></span>
                                            <input type="number" class="form-control" name="part_time" value="<?= set_value('part_time', $user[0]->part_time_amount) ?>"><text class="hr-txt"> /hr</text>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>

                                    <div class="col-sm-7">
                                        <label>Contract</label>
                                        <p class="text-des">Total amount per hr the client will see</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="input-group price-input">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-usd dolerinp"></i></span>
                                            <input type="number" class="form-control" name="contract"  value="<?= set_value('contract', $user[0]->contract_amount) ?>"><text class="hr-txt"> /hr</text>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>
<?php if ($section_number == 0 || $section_number == 5) { ?>
            <div class="box" id="11"><!-- General Information -->
                <div class="box-header">
                    <h4>Portfolio Project List</h4>
                </div>
                <div class="box-body">
                    <div class="extra-field-box">
                        <div class="multi-box">	
                            <input type="hidden" value="" name="delete_portfolios" id="delete_portfolios">
                            <?php
                            $count = 0;
                            $show_port[$count]['developer_portfolios_id'] = '';
                            $show_port[$count]['portfolios_project_name'] = "";
                            $show_port[$count]['portfolios_website_link'] = "";
                            $show_port[$count]['portfolios_github_link'] = "";
                            $show_port[$count]['portfolios_description'] = "";

                            if ($this->input->post('portfolios_project_name') != '')
                                foreach ($this->input->post('portfolios_project_name') as $key => $value) {
                                    $show_port[$count]['developer_portfolios_id'] = $this->input->post('developer_portfolios_id')[$key];
                                    @$show_port[$count]['portfolios_project_name'] = $this->input->post('portfolios_project_name')[$key];
                                    @$show_port[$count]['portfolios_website_link'] = $this->input->post('portfolios_website_link')[$key];
                                    @$show_port[$count]['portfolios_github_link'] = $this->input->post('portfolios_github_link')[$key];
                                    @$show_port[$count]['portfolios_description'] = $this->input->post('portfolios_description')[$key];
                                    @$show_port[$count]['portfolios_image'] = $this->input->post('portfolios_image')[$key];
                                    $count++;
                                } else
                                foreach ($user['developer_portfolios'] as $key => $value) {
                                    $show_port[$count]['developer_portfolios_id'] = $value->id;
                                    $show_port[$count]['portfolios_project_name'] = $value->project_name;
                                    $show_port[$count]['portfolios_website_link'] = $value->website_link;
                                    $show_port[$count]['portfolios_github_link'] = $value->github_link;
                                    $show_port[$count]['portfolios_description'] = $value->description;
                                    $show_port[$count]['portfolios_image'] = $value->image;
                                    $count++;
                                }

                            foreach ($show_port as $key => $value) {
                                ?>
                                <div class="dublicat-box mrg-bot-40">
                                    <div class="row">

                                        <div class="col-sm-4">
                                            <label>Project Name</label>

                                            <input type="hidden" value="<?= @$value['developer_portfolios_id'] ?>" name="developer_portfolios_id[<?= $key ?>]" data-count-id="<?= $key ?>">
                                            <input type="text" class="form-control" name="portfolios_project_name[<?= $key ?>]" value="<?= $value['portfolios_project_name'] ?>" data-count-id="<?= $key ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Website Link</label>
                                            <input type="url" class="form-control"  name="portfolios_website_link[<?= $key ?>]" value="<?= $value['portfolios_website_link'] ?>" data-count-id="<?= $key ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Githublink</label>
                                            <input type="url" class="form-control"   name="portfolios_github_link[<?= $key ?>]" value="<?= $value['portfolios_github_link'] ?>" data-count-id="<?= $key ?>">
                                        </div>
                                        <input type="hidden" name="portfoliosimage[<?= $key ?>]" value="<?= @$value['portfolios_image'] ?>" data-count-id="<?= $key ?>"> 
                                        <?php if(@$value['portfolios_image']!=''){?>
                                        <div style="clear: both;"></div>
                                        <div class="col-sm-12" id="dont_clone">
                                            <img src="<?= @$value['portfolios_image'] ?>" height="100">
                                        </div>
                                        <?php } ?>
                                        <div class="col-sm-12">
                                            <label>Image Upload</label>
                                            <input type="file" class="form-control" name="portfolios_image[<?= $key ?>]" value="" data-count-id="<?= $key ?>">
                                        </div>
                                        <div class="col-sm-12">
                                            <label>Contribution</label>
                                            <textarea class="form-control height-120" name="portfolios_description[<?= $key ?>]" data-count-id="<?= $key ?>"><?= $value['portfolios_description'] ?></textarea>
                                        </div>
                                    </div>
                                    <button type="button" class="btn remove-field light-gray-btn delete-portfolios" data-item-id="<?= @$value['developer_portfolios_id'] ?>">Remove</button>
                                </div>


<?php } ?>
                        </div>
                        <div class="text-center"><button type="button" class="btn add-field theme-btn">Add More</button></div>
                    </div>
                </div>
            </div>
<?php } ?>
<?php if ($section_number == 0 || $section_number == 11) { ?>
            <div class="box" id="12">
                <div class="box-header">
                    <h4>2 Mint Interview Video</h4>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <label>Please upload a professional portrait that clearly shows your face</label>
                            <p class="text-des">Freelancers with a friendly, professional-looking portrait arehired 5 times more often than those without a photo.</p>
                        </div>
                    </div>
                    <div class="extra-field-box">
                        <div class="multi-box">
                            <input type="hidden" name="delete_video" value="" id="delete_video">
                            <?php
                            $count = 0;
                            $show_video[0]['video'] = '';
                            $show_video[0]['title'] = '';
                            $show_video[0]['id'] = '';
                            $show_video[0]['created'] = '';
                            $show_video[0]['verified'] = '';
                            foreach ($user['developer_profile_videos'] as $key => $video) {
                                $show_video[$count]['video'] = $video->video;
                                $show_video[$count]['title'] = $video->title;
                                $show_video[$count]['id'] = $video->id;
                                $show_video[$count]['created'] = $video->created;
                                $show_video[$count]['verified'] = $video->verified;
                                $count++;
                            }
                            $count = 0;
                            foreach ($show_video as $key => $vedio) {
                                ?>
                                <div class="dublicat-box mrg-bot-40">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-2">
                                                <input type="hidden" value="<?= $show_video[$key]['id'] ?>" name="developer_profile_videos_id[<?= $key ?>]" data-count-id="<?= $count ?>">
                                                <input type="hidden" value="<?= $show_video[$key]['created'] ?>" name="developer_profile_videos_created[<?= $key ?>]" data-count-id="<?= $count ?>">
                                                <input type="hidden" value="<?= $show_video[$key]['verified'] ?>" name="developer_profile_videos_verified[<?= $key ?>]" data-count-id="<?= $count ?>">
                                                <input type="hidden" value="<?= $show_video[$key]['video'] ?>" name="video[<?= $key ?>]" data-count-id="<?= $count ?>">
                                                <a href="#" id="get_video">                                                            
                                                    <img onclick="my_video('my_video<?= $count ?>')" src="<?= base_url() ?>assets/img/img23.png" alt="your image" class="videoplace" data-count="1" data-count-id="<?= $count ?>"/>
                                                <!-- <input type="button" id="get_file" value="Add Img"> -->
                                                    <input type="file" id="my_video<?= $count ?>"  name="profile_video[<?= $key ?>]" accept="video/*" class="my_video video_file" data-count-id="<?= $count ?>" >
                                                </a>
                                                <label id="name<?= $count ?>" class="file_name"></label> 
                                            </div> 
                                            <div class="col-sm-8">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="profile_video_title[<?= $key ?>]" value="<?= $show_video[$key]['title'] ?>" data-count-id="<?= $count ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <label>&nbsp;</label>
                                                <div class="text-center"><button type="button" class="btn add-field theme-btn form-control">Add More</button></div>
                                            </div>
                                        </div>	
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="button" id="edit_sub" class="btn remove-field light-gray-btn remove-video" data-item-id="<?= $show_video[$key]['id'] ?>">Remove</button>
                                </div>
<?php $count++;
} ?>
                        </div>
                        <!-- <div class="text-center"><button type="button" class="btn add-field theme-btn">Add More</button></div> -->
                    </div>
                </div>
            </div>
            <script type="text/javascript">


function my_video(obj) {    
$('#'+obj).click();
}
</script>
<?php } ?>  				


<?php if ($section_number == 0) { ?>
            <div class="text-center">
                <button type="submit" class="btn btn-m theme-btn">Submit & Exit</button>
            </div>

        </form>
    </div>
    <!-- /.col-md-8 -->



</div>

</div>
</section>

<?php } ?>

        
        
        
        
        
<script>
<?php if ($section_number == 3) { ?>
$('#demo').multiselect();
<?php }if ($section_number == 7) { ?>
$("#select-tools").change(function () {
$("#is_tool_change").val('1');
});
<?php } if ($section_number == 11) { ?>
$('.video_file').change(function () {
video_change(this)
});
<?php } ?>

$(document).ready(function () {
$('#demo').multiselect();


//$(".videoplace").on('click', function () {
//$(this).next('input').click();
////            alert($(this).next('input').attr('name'));
//});

$("#select-tools").change(function () {
//  alert( "Handler for .change() called." );
$("#is_tool_change").val('1');
});
});


$("#select-tools").select2({
maximumSelectionLength: 50,
placeholder: "Tools"
});




</script>
<script>
    
    // Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
// On-page links
if (
location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
&& 
location.hostname == this.hostname
) {
// Figure out element to scroll to
var target = $(this.hash);
target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
// Does a scroll target exist?
if (target.length) {
// Only prevent default if animation is actually gonna happen
event.preventDefault();
$('html, body').animate({
  scrollTop: target.offset().top
}, 1000, function() {
  // Callback after animation
  // Must change focus!
  var $target = $(target);
  $target.focus();
  if ($target.is("")) { // Checking if the target was focused
    return false;
  } else {
    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
    /*$target.focus();*/ // Set focus again
  };
});
}
}
});
</script>
<script>



$(".remove-video").on('click', function () {

var id = $(this).attr('data-item-id');
if (id != '') {
var temp = $("#delete_video").val();
temp = temp + "," + id;
$("#delete_video").val(temp);
}
});
$(".delete-portfolios").on('click', function () {

var id = $(this).attr('data-item-id');

if (id != '') {
var temp = $("#delete_portfolios").val();
temp = temp + "," + id;
$("#delete_portfolios").val(temp);

}
});

$(".delete-skill").on('click',function(){    
var id = $(this).attr('data-item-id');
if (id != '') {
var temp = $("#delete_skills").val();
temp = temp + "," + id;
$("#delete_skills").val(temp);
}
});


$(".delete-education").on('click',function(){    
var id = $(this).attr('data-item-id');
if (id != '') {
var temp = $("#delete_education").val();
temp = temp + "," + id;
$("#delete_education").val(temp);
}
});


$(".delete_emp").on('click',function(){    
var id = $(this).attr('data-item-id');
if (id != '') {
var temp = $("#delete_emp").val();
temp = temp + "," + id;
$("#delete_emp").val(temp);
}
});


document.getElementById('get_file').onclick = function () {
document.getElementById('my_file').click();

}

</script>