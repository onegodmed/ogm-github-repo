 

 <input type="submit" value="submit" name="submit">
    <br>
 <div class="widget-boxed padd-bot-0">
                        <div class="widget-boxed-header">
                            
                            <p class="serch-sidebar-heading">Stages</p>
                        </div>
                        <div class="widget-boxed-body">
                            
                            <div class="side-list no-border">
                                <?php $AllCount =$this->Search->devloperCountByStage('all');
                                $counts = array_count_values(array_column($AllCount, 'stages'));
                                // ALL COUNTS NOT INCLUDED AGENCY/NOT INTERESTED
                                $AllCountAfter = (count($AllCount) - @$counts['agency'] - @$counts['not_interested']);

                              

                                //print_r( $AllCount); ?>
                                <ul id="stages_list">
                                    <li>
                                         <span class="checkbox">
                                         <input type="radio" value="all" name="step" <?php if(isset($_GET['step']) && $_GET['step']=='all'){ echo('checked'); }elseif(empty($_GET['step'])){ echo('checked'); }  ?> ></span>
                                                <span><?php echo 'All' ?>
                                                (<?= $AllCountAfter;?>) </span>
                                            </li>

                                    <?php
                                    $stagesArr = developerStagesArr();
                                                                         
                                    if (!empty($stagesArr)){
                                           


                                        foreach ($stagesArr as $key=>$value){ 
                                           
                                            // MATCH ALL POSSIBLE UPPER & LOWER CASE SELECTED 
                                                if(isset($_GET['step']) && $_GET['step']==$key){
                                                    $selected_st = 'checked';
                                                }else{
                                                    $selected_st = '';
                                                }
                                             ?>
                                        <li>
                                         <span class="checkbox">
                                         <input type="radio" value="<?php echo $key;?>" name="step" <?PHP echo $selected_st; ?> ></span>
                                                <span><?php echo ucfirst($value); ?>
                                                (<?= (@$counts[$key])?$counts[$key]:'0';?>) </span>
                                            </li>
                                              <?php                                          
                                            
                                       
                                        }
                                   }
                               ?>
                                </ul>
                            </div>
                          
                        </div>
                 
                    </div>
                   
                     <div class="widget-boxed padd-bot-0">
                        <div class="widget-boxed-header">
                            <p class="serch-sidebar-heading">Skills</p>
                            
                        </div>
                        <div class="widget-boxed-body">
                            <div class="search_widget_job">
                                <div class="field_w_search">
                                    <div class="input-group">
                                        <input type="text" id="input_category" oninput="filter(this.id)" class="form-control" placeholder="Enter Skill" data-filter="Skills" name="skill_name" value="<?= @$this->input->post('skill_name') ?>" autocomplete="off">
                                        <div class="input-group-btn">
                                            <button class="btn_searchboxside" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <span class="error"></span>
                                </div>
                                <div class="side-list no-border">
                                    <ul id="category_list">
                                        <?php 
                                       
                                        if (!empty($skills)){
                                            $c = 0;
                                            $skill_experience='';
                                            $skills_level ='';
                                            foreach ($skills as $skill){
                                                $level = config_item('level');
                                                $experience = getExperience();
                                               
                                                $skill_experience = (!empty($this->input->get('skill_experience')[$c]))? $this->input->get('skill_experience')[$c]:'';

                                                 $skills_level = (!empty($this->input->get('skills_level')[$c]))?$this->input->get('skills_level')[$c]:'';
                                               /* if(isset($_GET['skill_experience']) && $_GET['skill_experience']!='' && in_array($_GET['skill_experience'],$experience) ){
                                                    $skill_experience = $_GET['skill_experience'];
                                                }else
                                                {
                                                    $skill_experience = '';
                                                }*/
                                                /*if(isset($_GET['skills_level']) && $_GET['skills_level']!='' && in_array($_GET['skills_level'],$skills_level) ){
                                                    $skills_level = $_GET['skills_level'];
                                                }else{
                                                     $skills_level ='';
                                                }*/
                                               

                                                $experience = array('' => 'Select Experience') + $experience;
                                               $level = array('' => 'Select Expertise') + $level;

                                                $dev_count_skill = $this->User->getDevCountBySkills($skill->id);
                                              //  if($dev_count_skill > 0){
                                                // MATCH ALL POSSIBLE UPPER & LOWER CASE SELECTED 
                                                if(isset($_GET['skill']) && $_GET['skill']!='' && in_array($skill->id,$_GET['skill']) ){
                                                    $selected_sk = 'checked';
                                                }
                                                elseif(isset($_GET['search_tearm']) && strcasecmp($_GET['search_tearm'],$skill->skill_name)==0)
                                                { 
                                                    $selected_sk = 'checked';
                                                }else{
                                                    $selected_sk = '';
                                                }
                                                  ?>
                                                <li <?php echo ($c >5 )?'style="display:none" class="hidden_skills"':'';?>>
                                                    <span class="checkbox">
                                                    <input type="checkbox" value="<?php echo $skill->id;?>" name="skill[<?php echo $c;?>]" <?PHP echo $selected_sk; ?> class="search_paramiter_checkbox" data-txt="<?= $skill->skill_name;?>" ><label for="a"></label>
                                                 </span>
                                                 <span id="skill<?php echo $skill->id;?>"><?php echo ucfirst($skill->skill_name); ?> (<?php echo $dev_count_skill;?>)</span>
                                                <br>
                                                <div class="skill-drop-options select" <?php echo ($selected_sk)? 'style="display: block;"':'style="display: none;"'; ?> >
                                                    <label class="small-label">Exprience</label>                                                   
                                                    <?php 
                                                    if($selected_sk)
                                                        echo form_dropdown("skill_experience[$c]", $experience, array($skill_experience));
                                                    else
                                                        echo form_dropdown("skill_experience[$c]", $experience, array($skill_experience),['disabled'=>'disabled']);

                                                    if($selected_sk)
                                                        echo form_dropdown("skills_level[$c]", $level,array($skills_level));
                                                    else
                                                        echo form_dropdown("skills_level[$c]", $level,array($skills_level),['disabled'=>'disabled']);
                                                    ?>                                                  
                                                  </div>
                                                   </li>
                                                <?php                                            
                                                $c++;
                                          //  }
                                               }
                                            } 
                                        ?>
                                        
                                    </ul>                                    
                                </div>
                            
                            <p id="category-more" onclick="$('.hidden_skills').toggle(); $(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More'); ">Show More</p>
                            </div>
                        </div>
                    </div> 


                    <div class="widget-boxed padd-bot-0">
                        <div class="widget-boxed-header">
                            
                            <p class="serch-sidebar-heading">Position</p>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="field_w_search">
                                <div class="input-group">
                                    <input id="input_position" oninput="filter(this.id)" type="text" class="form-control"  data-filter="Positions" placeholder="Enter Position" name="positions" value="<?= $this->input->get('position_name') ?>" autocomplete="off">
                                    <div class="input-group-btn">
                                        <button class="btn_searchboxside" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <span class="error"></span>
                            </div>
                            <div class="side-list no-border">
                                <ul id="position_list">
                                    <?php
                                                                         
                                    if (!empty($positions)){
                                        $p = 0;
                                        foreach ($positions as $position){ 
                                            $dev_count_position =  $this->User->devloperCountByPosition($position->id);
                                           // if($dev_count_position > 0){
                                            // MATCH ALL POSSIBLE UPPER & LOWER CASE SELECTED 
                                                if(isset($_GET['position']) && $_GET['position']!='' && in_array($position->id, $_GET['position']) ){
                                                    $selected_ps = 'checked';
                                                }
                                                elseif(isset($_GET['search_tearm']) && strcasecmp($_GET['search_tearm'],$position->position_name)==0)
                                                { 
                                                    $selected_ps = 'checked';
                                                }else{
                                                    $selected_ps = '';
                                                }
                                             ?>
                                        <li <?php echo ($p >5 )?'style="display:none" class="hidden_position"':'';?> >
                                         <span class="checkbox">
                                         <input type="checkbox" value="<?php echo $position->id;?>" name="position[]" <?PHP echo $selected_ps; ?> class="search_paramiter_checkbox" data-txt="<?= $position->position_name;?>"  id="position[<?php echo $p;?>]" >
                                         
                                                    <?php // form_checkbox("position[$p]", $position->id, @$this->input->get('position')[$p], ['class' => 'search_paramiter_checkbox', 'id' => "position[$p]"]); ?>
                                                    <label for="<?= "position[$p]" ?>"></label>
                                                </span>
                                                <span id="position<?php echo $position->id;?>"><?php echo ucfirst($position->position_name); ?> (<?= $dev_count_position ?>)</span>
                                            </li>
                                              <?php                                          
                                            $p++;
                                       //// }
                                        }
                                   }
                               ?>
                                </ul>
                            </div>
                            <p id="position-more" onclick="$('.hidden_position').toggle('slow'); $(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More'); ">Show More</p>
                        </div>
                       <!--  <?php if (count($pos2) > 0) { ?>
                            <div class=" collapse" id="position">
                                <div class="side-list no-border">
                                    <ul>
                                        <?php foreach ($pos2 as $position => $value) { ?>
                                            <li>
                                                <span class="checkbox">
                                                    <?= form_checkbox("position[$position]", $position, $this->input->get('position')[$position], ['class' => 'search_paramiter_checkbox', 'id' => "position[$position]"]); ?>
                                                    <label for="<?= "position[$position]" ?>"></label>
                                                </span>
                                                <?php echo ucfirst($value); ?>
                                                (<?= (!empty($pos_count[$position])) ? $pos_count[$position] : '0' ?>)
                                            </li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                            <p><a href="#position" data-toggle="collapse">See More</a></p>
                        <?php } ?> -->
                    </div>
                    <div class="widget-boxed padd-bot-0">
                        <div class="widget-boxed-header">
                           
                            <p class="serch-sidebar-heading">Job Type</p>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list no-border">
                                <ul id="job_type_list">
                                    <li class="jobtype-li">
                                        <span class="checkbox"> 
                                        <?php $dev_count_full_time =  $this->User->devloperCountByJobType('is_full_time'); ?>                                     
                                            <?php
                                            echo form_checkbox('is_full_time', '1',$this->input->get('is_full_time'), ['class' => 'search_paramiter_checkbox2']);
                                            ?> 
                                            <label for="is_full_time"></label>
                                        </span>
                                        Full Time
                                        (<?= $dev_count_full_time ?>)
                                        
                                        
                                    <div class="input-group availability-group jobtype-sub-li" <?php if(empty($this->input->get('is_full_time'))){ echo 'style="display:none"';}?>>
                                             <label class="radio-inline">
                                             <?php
                                              $f_check = ($this->input->get('fulltime_availability')=='immediately')? true : FALSE;
                                             
                                                echo form_radio('fulltime_availability', 'immediately',set_radio("fulltime_availability", "immediately", $f_check), ['class' => 'availability-rd']);
                                                ?>Immediately
                                            </label>
                                            <label class="radio-inline">
                                              <?php
                                              $f_check = ($this->input->get('fulltime_availability')=='from')? true : FALSE;
                                              
                                                echo form_radio('fulltime_availability', 'from',set_radio("fulltime_availability", "from",$f_check ), ['class' => 'availability-rd']);
                                                ?>From Date
                                            </label>
                                          </div>
                                      <div class="input-group available-from-group jobtype-sub-input"  <?php if(@$this->input->get('fulltime_availability')!='from'){ echo 'style="display:none"';}?>>
                                      <input type="text" readonly  class="form-control  available_from" name="fulltime_availability_date" value="<?= @$this->input->get('fulltime_availability_date');?>">
                                      </div>
                                          
                                        
                                    </li>
                                    
                                          
                                    
                                    
                                    <li class="jobtype-li">
                                        <span class="checkbox">
                                        <?php $dev_count_part_time =  $this->User->devloperCountByJobType('is_part_time'); ?>
                                            <?php
                                            echo form_checkbox('is_part_time', '1', $this->input->get('is_part_time'), ['class' => 'search_paramiter_checkbox2']);
                                            ?> 

                                            <label for="is_part_time"></label>
                                        </span>
                                        Part Time
                                       (<?= $dev_count_part_time ?>)
                                       
                                       <div class="input-group availability-group jobtype-sub-li" <?php if(empty($this->input->get('is_part_time'))){ echo 'style="display:none"';}?>>
                                             <label class="radio-inline">
                                             <?php
                                            $p_check = ($this->input->get('partime_availability')=='immediately')? true : FALSE;
                                            
                                                echo form_radio('partime_availability', 'immediately', set_radio('partime_availability', 'immediately', $p_check) , ['class' => 'availability-rd']);
                                                ?>Immediately
                                            </label>
                                            <label class="radio-inline">
                                              <?php
                                              $p_check = ($this->input->get('partime_availability')=='from')? true : FALSE;
                                              
                                                echo form_radio('partime_availability', 'from', set_radio('partime_availability', 'from', $p_check), ['class' => 'availability-rd']);
                                                ?>From Date
                                            </label>
                                          </div>
                                      <div class="input-group available-from-group jobtype-sub-input"  <?php if(@$this->input->get('partime_availability')!='from'){ echo 'style="display:none"';}?>>
                                      <input type="text" readonly class="form-control  available_from" name="partime_availability_date" value="<?= @$this->input->get('partime_availability_date');?>">
                                      </div>
                                    </li>                                   
                                    <li class="jobtype-li">
                                        <span class="checkbox">
                                        <?php $dev_count_contract =  $this->User->devloperCountByJobType('is_contract'); ?>
                                            <?php
                                            echo form_checkbox('is_contract', '1',$this->input->get('is_contract'), ['class' => 'search_paramiter_checkbox2']);
                                            ?> 
                                            <label for="is_contract"></label>
                                        </span>
                                        Contract Base
                                        (<?= $dev_count_contract ?>)
                                        
                                        <div class="input-group availability-group jobtype-sub-li" <?php if(empty($this->input->get('is_contract'))){ echo 'style="display:none"';}?>>
                                             <label class="radio-inline">
                                             <?php
                                             $c_check = ($this->input->get('contract_availability')=='immediately')? true : FALSE;
                                             
                                                echo form_radio('contract_availability', 'immediately',set_radio("contract_availability", "immediately",$c_check), ['class' => 'availability-rd']);
                                                ?>Immediately
                                            </label>
                                            <label class="radio-inline">
                                            <?php
                                             $c_check = ($this->input->get('contract_availability')=='from')? true : FALSE;
                                             
                                                echo form_radio('contract_availability', 'from',set_radio("contract_availability", "from",$c_check), ['class' => 'availability-rd']);
                                                ?>From Date
                                            </label>
                                          </div>
                                      <div class="input-group available-from-group jobtype-sub-input" <?php if(@$this->input->get('contract_availability')!='from'){ echo 'style="display:none"';}?> >
                                      <input type="text" readonly class="form-control  available_from" name="contract_availability_date" value="<?= @$this->input->get('contract_availability_date');?>">
                                      </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="widget-boxed padd-bot-0">
                        <div class="widget-boxed-header">
                           
                            <p class="serch-sidebar-heading">Hourly Rate</p>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list no-border">
                                <ul id="hourly_rate_list">
                                    <?php for($hourly_rate=1; $hourly_rate < 60; $hourly_rate = $hourly_rate+10) {
                                    $dev_count_by_rate = $this->User->devCountByHourlyRate($hourly_rate); 
                                    ?>
                                    <li>
                                        <span class="checkbox">
                                            <input class = "search_paramiter_checkbox" type="checkbox" id="hourly_rate_<?php echo $hourly_rate;?>" value="<?php echo $hourly_rate;?>" name="hourly_rate[]" <?php if(isset($_GET['hourly_rate'])) if(in_array($hourly_rate,$this->input->get('hourly_rate'))){ echo "checked";}?>>
                                            <label for="1"></label>
                                        </span>
                                        <?php if($hourly_rate+10 > 51){
                                            echo 'Above $'.$hourly_rate;
                                        }
                                        else
                                            {   
                                                $hourly_rate_to = $hourly_rate+9;
                                                echo '$'.$hourly_rate.'- $'.$hourly_rate_to;
                                            }
                                        ?>
                                         (<?php echo $dev_count_by_rate;?>)
                                    </li>
                                <?php
                            }
                         ?>
                          </ul>
                      </div>
                </div>
            </div>

                    
                    <div class="widget-boxed padd-bot-0">
                        <div class="widget-boxed-header">
                          
                            <p class="serch-sidebar-heading">Timezones Available </p>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list no-border">
                                <ul id="timezone_list">
                                    <?php
                                    $i = 0;
                                   // $time_zon_list = config_item('time_zon_list');
                                    foreach ($timezonList as $key => $value) {
                                        ?>                                         
                                        <li  <?php echo ($i >4 )?'style="display:none" class="hidden_zone"':'';?>>
                                            <span class="checkbox"> 
                                                <?php echo form_checkbox('timezons[' . $i . ']', $value->id, @$this->input->get('timezons')[$i] , ['class' => 'search_paramiter_checkbox', 'id' => 'timezons' . $i]); ?> 
                                                <label for="<?= 'timezons' . $i ?>"></label>
                                            </span>
                                            <?=  $value->timezone; ?>
                                            <span class="pull-right"></span>
                                        </li>
                                        <?php
                                        $i++;
                                    }
                                    ?> 
                                </ul>
                            </div>
                            <p id="timezone-more" onclick="$('.hidden_zone').toggle('slow'); $(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More'); ">Show More</p>
                        </div>
                    </div>

                    <div class="widget-boxed padd-bot-0">
                        <div class="widget-boxed-header">
                            
                            <p class="serch-sidebar-heading"> Location Of Developer</p>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="field_w_search">
                                <div class="input-group">
                                    <input id="input_location" oninput="filter(this.id)" type="text" class="form-control"  data-filter="Country" placeholder="Enter Country" name="country_name" value="<?= $this->input->get('country_name') ?>">
                                    <div class="input-group-btn">
                                        <button class="btn_searchboxside" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <span class="error"></span>
                            </div>
                            <div class="side-list no-border">
                                <ul id="location_list">
                                    <?php
                                    $l = 0;
                                    $country_search = config_item('country_search');
                                    foreach ($country_search as $country_code => $country_name) {
                                        $dev_count_country = $this->User->getDevCountByCountry($country_code);
                                       // if($dev_count_country > 0){     
                                        ?>
                                        <li <?php echo ($l >5 )?'style="display:none" class="hidden_location"':'';?>>
                                            <span class="checkbox">
                                             <input autocomplete="FALSE" data-txt="<?php echo ucfirst($country_name);?>" class = "search_paramiter_checkbox" type="checkbox" id="country_<?php echo $country_code;?>" value="<?php echo $country_code;?>" name="country[<?= $l;?>]" <?php if(isset($_GET['country']) && !empty($_GET['country'])) if(in_array($country_code,$this->input->get('country'))){ echo "checked";}?>><label for="<?= 'country_' . $country_code ?>"></label>
                                            </span> <span id="country<?php echo $country_code;?>">
                                            <?= ucfirst($country_name);?> (<?= $dev_count_country; ?>)</span>
                                        </li>
                                        <?php  $l++;
                                 //   }
                                    } ?>                                    
                                </ul>
                            </div>
                            <p id="location-more" onclick="$('.hidden_location').toggle('slow'); $(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More'); ">Show More</p>
                        </div>
                    </div>

                    <div class="widget-boxed padd-bot-0">
                        <div class="widget-boxed-header">
                           
                            <p class="serch-sidebar-heading">Willing To Travel </p>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="side-list no-border">
                                <ul id="willing_to_traval">
                                    <li>
                                        <span class="checkbox">
                                                                            
                                            <input type="checkbox" class="search_paramiter_checkbox" id="williing1" value="yes" name="willing_to_traval[]" <?php if(isset($_GET['willing_to_traval']) && in_array('yes',$_GET['willing_to_traval'])) { echo 'checked';}?> >
                                            <label for="williing1"></label>
                                        </span>Yes
                                    </li>
                                    <li> 
                                        <span class="checkbox">
                                            <input type="checkbox" class="search_paramiter_checkbox" id="williing2" value="no" name="willing_to_traval[]" <?php if(isset($_GET['willing_to_traval']) && in_array('no',$_GET['willing_to_traval'])) { echo 'checked';}?> >
                                            <label for="williing2"></label>
                                        </span>No
                                    </li>
                                    <li> 
                                        <span class="checkbox">
                                            <input type="checkbox" class="search_paramiter_checkbox" id="williing3" value="may be" name="willing_to_traval[]" <?php if(isset($_GET['willing_to_traval']) && in_array('may be',$_GET['willing_to_traval'])) { echo 'checked';}?> >
                                            <label for="williing3"></label>
                                        </span>May be
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget-boxed padd-bot-0">
                        <div class="widget-boxed-header">
                           
                            <p class="serch-sidebar-heading">Tools Knowledge</p>
                        </div>
                        <div class="widget-boxed-body">
                        <div class="field_w_search">
                                <div class="input-group">
                                    <input id="input_tools" oninput="filter(this.id)" type="text" class="form-control" placeholder="Enter Tools" name="tools" data-filter="Tools" value="<?= $this->input->get('tools') ?>">
                                    <div class="input-group-btn">
                                        <button class="btn_searchboxside" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <span class="error"></span>
                            </div>
                            <div class="side-list no-border">
                                <ul id="tools_list">
                                    <?php
                                    $i = 0;
                                            $too=array();
                                    if (!empty($tools)) : 
                                        //$tool1 = array_chunk($tools, 5, true);                                    
                                        foreach ($tools as $tool => $value) :
                                            ?>
                                            <li <?php echo ($i >5 )?'style="display:none" class="hidden_tools"':'';?> >
                                                <span class="checkbox">
                                                    <?php echo form_checkbox('tool[' . $i . ']', $tool, @$this->input->get('tool')[$i] , ['data-txt'=>$value,'class' => 'search_paramiter_checkbox', 'id' => "tool$i"]); ?> 
                                                    <label for="<?= "tool$i" ?>"></label>
                                                </span>
                                                <span id="tool<?php echo $tool;?>"><?php echo $value; ?></span>
                                            </li>
                                            <?php
                                            $i++;
                                        endforeach;
                                           // $too = array_diff($tools, $tool1[0]);                                        
                                    endif;
                                    ?>

                                </ul>
                            </div>
                            <p id="tool-more" onclick="$('.hidden_tools').toggle('slow'); $(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More'); ">Show More</p>
                        </div>
                    
                        <!-- <input type="hidden" name="step" value="<?= @$this->input->get('step');?>" id="developer_step"> -->
                        
                    </div>

                         <div class="widget-boxed padd-bot-0">
                             <div class="widget-boxed-header">

                                 <p class="serch-sidebar-heading">Language</p>
                             </div>
                             <div class="widget-boxed-body">
                                 <div class="field_w_search">
                                     <div class="input-group">
                                         <input id="input_tools" oninput="filter(this.id)" type="text" class="form-control" placeholder="Enter Language" name="language" data-filter="Language" value="">
                                         <div class="input-group-btn">
                                             <button class="btn_searchboxside" type="submit">
                                                 <i class="fa fa-search"></i>
                                             </button>
                                         </div>
                                     </div>
                                     <span class="error"></span>
                                 </div>
                                 <div class="side-list no-border">
                                     <ul id="tools_list">
                                         <?php
                                         $i = 0;
                                         $too=array();

                                         if (!empty($languages)) :

                                             //$tool1 = array_chunk($tools, 5, true);
                                             foreach ($languages as $language => $value) :
                                                 $disabled_level = (empty($this->input->get('language')[$i])) ? 'disabled' : '';
                                                 $dev_count_language = $this->User->getDevCountByLanguage($language);

                                                 if($value=='English'){   ?>
                                                     <li <?php echo ($i >5 )?'style="display:none" class="hidden_tools"':'';?> >
                                                                        <span class="checkbox">
                                                                            <?php echo form_checkbox('language[' . $i . ']', $language, @$this->input->get('language')[$i] , ['data-id' => $i,'data-txt'=>$value,'class' => 'search_paramiter_checkbox language_checkbox', 'id' => "language$i"]); ?>
                                                                            <label for="<?= "language$i" ?>"></label>
                                                                        </span>
                                                         <span id="tool<?php echo $value;?>"><?php echo $value; ?> (<?php echo $dev_count_language; ?>)</span>
                                                     </li>
                                                 <?php } ?>
                                                 <div class="input-group availability-group jobtype-sub-li language_level_<?php echo $i;?>"<?php if (empty($this->input->get('language')[$i])) {
                                                     echo 'style="display:none"';
                                                 } ?>>
                                                     <label class="radio-inline">
                                                         <?php
                                                         $f_check = (isset($this->input->get('level')[$i]) && $this->input->get('level')[$i] == 'Basic') ? true : FALSE;

                                                         echo form_radio('level['.$i.']', 'Basic', set_radio("level", "Basic", $f_check), ['class' => 'availability-rd', $disabled_level => $disabled_level]);
                                                         ?>Basic
                                                     </label>
                                                     <label class="radio-inline">
                                                         <?php
                                                         $f_check = (isset($this->input->get('level')[$i]) && $this->input->get('level')[$i] == 'Fluent') ? true : FALSE;

                                                         echo form_radio('level['.$i.']', 'Fluent', set_radio("level", "Fluent", $f_check), ['class' => 'availability-rd', $disabled_level => $disabled_level]);
                                                         ?>Fluent
                                                     </label>
                                                     <label class="radio-inline">
                                                         <?php
                                                         $f_check = (isset($this->input->get('level')[$i]) && $this->input->get('level')[$i] == 'Conversational') ? true : FALSE;

                                                         echo form_radio('level['.$i.']', 'Conversational', set_radio("level", "Conversational", $f_check), ['class' => 'availability-rd', $disabled_level => $disabled_level]);
                                                         ?>Conversational
                                                     </label>
                                                     <label class="radio-inline">
                                                         <?php
                                                         $f_check = (isset($this->input->get('level')[$i]) && $this->input->get('level')[$i] == 'Native') ? true : FALSE;

                                                         echo form_radio('level['.$i.']', 'Native', set_radio("level", "Native", $f_check), ['class' => 'availability-rd', $disabled_level => $disabled_level]);
                                                         ?>Native
                                                     </label>
                                                 </div>
                                                 <?php
                                                 $i++;
                                             endforeach;
                                             // $too = array_diff($tools, $tool1[0]);
                                         endif;
                                         ?>

                                     </ul>
                                 </div>
                                 <p id="tool-more" onclick="$('.hidden_tools').toggle('slow'); $(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More'); ">Show More</p>
                             </div>

                             <!-- <input type="hidden" name="step" value="<?= @$this->input->get('step');?>" id="developer_step"> -->

                         </div>


    

