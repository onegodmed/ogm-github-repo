<div class="widget-boxed padd-bot-0">
                        <div class="widget-boxed-header">
                            <p class="serch-sidebar-heading">Skills</p>
                            <!--<p>Technologies (300)</p>-->
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
                                          
                                            foreach ($skills as $skill){
                                                $dev_count_skill = $this->User->getDevCountBySkills($skill->id,$referrer);
                                                if($dev_count_skill > 0){
												// MATCH ALL POSSIBLE UPPER & LOWER CASE SELECTED 
												if(isset($_GET['skill']) && $_GET['skill']!='' && in_array($skill->id,$_GET['skill']) ){
													$selected_sk = 'checked';
												}
												elseif(isset($_GET['search_tearm']) && strcasecmp($_GET['search_tearm'],$skill->skill_name)==0)
												{ 
												    $selected_sk = 'checked';
												}else{
													$selected_sk = '';
												}  ?>
                                                <li <?php echo ($c >5 )?'style="display:none" class="hidden_skills"':'';?>>
                                                    <span class="checkbox">
													<input type="checkbox" value="<?php echo $skill->id;?>" name="skill[]" <?PHP echo $selected_sk; ?> class="search_paramiter_checkbox" data-txt="<?= $skill->skill_name;?>" onclick="loadPagination(0);" ><label for="a"></label>
                                                 </span>
                                                 <span id="skill<?php echo $skill->id;?>"><?php echo ucfirst($skill->skill_name); ?> (<?php echo $dev_count_skill;?>)</span>
                                                </li>
                                                <?php                                            
                                                $c++;
                                            }
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
                                            $dev_count_position =  $this->User->devloperCountByPosition($position->id,$referrer);
                                            if($dev_count_position > 0){
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
										 <input type="checkbox" value="<?php echo $position->id;?>" name="position[]" <?PHP echo $selected_ps; ?> class="search_paramiter_checkbox" onclick="loadPagination(0);" data-txt="<?= $position->position_name;?>"  id="position[<?php echo $p;?>]" >
										 
                                                    <?php // form_checkbox("position[$p]", $position->id, @$this->input->get('position')[$p], ['class' => 'search_paramiter_checkbox', 'id' => "position[$p]"]); ?>
                                                    <label for="<?= "position[$p]" ?>"></label>
                                                </span>
												<span id="position<?php echo $position->id;?>"><?php echo ucfirst($position->position_name); ?> (<?= $dev_count_position ?>)</span>
                                            </li>
                                              <?php                                          
                                            $p++;
                                        }
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
										<?php $dev_count_full_time =  $this->User->devloperCountByJobType('is_full_time',$referrer); ?>										
                                            <?php
                                            echo form_checkbox('is_full_time', '1',$this->input->get('is_full_time'), ['class' => 'search_paramiter_checkbox2']);
                                            ?> 
                                            <label for="is_full_time"></label>
                                        </span>
                                        Full Time
                                        (<?= $dev_count_full_time ?>)
										
										
									<div class="input-group availability-group jobtype-sub-li" <?php if(@$this->input->get('fulltime_availability')==''){ echo 'style="display:none"';}?>>
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
										<?php $dev_count_part_time =  $this->User->devloperCountByJobType('is_part_time',$referrer); ?>
                                            <?php
                                            echo form_checkbox('is_part_time', '1', $this->input->get('is_part_time'), ['class' => 'search_paramiter_checkbox2']);
                                            ?> 

                                            <label for="is_part_time"></label>
                                        </span>
                                        Part Time
                                       (<?= $dev_count_part_time ?>)
									   
									   <div class="input-group availability-group jobtype-sub-li" <?php if(@$this->input->get('partime_availability')==''){ echo 'style="display:none"';}?>>
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
										<?php $dev_count_contract =  $this->User->devloperCountByJobType('is_contract',$referrer); ?>
                                            <?php
											echo form_checkbox('is_contract', '1',$this->input->get('is_contract'), ['class' => 'search_paramiter_checkbox2']);
                                            ?> 
                                            <label for="is_contract"></label>
                                        </span>
                                        Contract Base
                                        (<?= $dev_count_contract ?>)
										
										<div class="input-group availability-group jobtype-sub-li" <?php if(@$this->input->get('contract_availability')==''){ echo 'style="display:none"';}?>>
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
                                    $dev_count_by_rate = $this->User->devCountByHourlyRate($hourly_rate,$referrer); 
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
                                    <input id="input_location" oninput="filter(this.id)" type="text" class="form-control"  data-filter="Country" placeholder="Enter Country" name="country" value="<?= $this->input->get('country_name') ?>">
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
										$dev_count_country = $this->User->getDevCountByCountry($country_code,$referrer);
										if($dev_count_country > 0){		
                                        ?>
                                        <li <?php echo ($l >5 )?'style="display:none" class="hidden_location"':'';?>>
                                            <span class="checkbox">
											 <input class = "search_paramiter_checkbox" type="checkbox" id="country_<?php echo $country_code;?>" value="<?php echo $country_code;?>" name="country[<?= $l;?>]" <?php if(isset($_GET['country'])) if(in_array($country_code,$this->input->get('country'))){ echo "checked";}?>>
											 
                                                <?php //echo form_checkbox('country[' . $l . ']', $country_code, @$this->input->get('country')[$l] , ['data-txt'=>$country_name, 'class' => 'search_paramiter_checkbox', 'id' => 'country_' . $country_code]); ?> 
                                                <label for="<?= 'country_' . $country_code ?>"></label>
                                            </span>
											<span id="country<?php echo $country_code;?>">
                                            <?= ucfirst($country_name);?> (<?= $dev_count_country; ?>)</span>
                                        </li>
                                        <?php  $l++;
                                    }
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
					
						<input type="hidden" name="step" value="<?= @$this->input->get('step');?>" id="developer_step">
                        
                    </div>
	


<script>
	 $('.available_from').datepicker({
		  autoclose: true,             
		  format: 'yyyy-mm-dd',
		  todayHighlight: true,
	  }).on('changeDate', function (selected) {
			loadPagination(0);			 
					  });				
   /*Category*/
    $("#category_list input").click(function(){
		
        var list = $("#category_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
           var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {					
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
						origOrder[i].style.display='';
                        
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
						
                }				
                list.append(checked).append(unchecked);
            });
    });

	$(document).ready(function() {
     var list = $("#category_list"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
           
                var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
						origOrder[i].style.display='';
						origOrder[i].classList.remove("hidden_position");
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                    // nodeCount = origOrder[i].childNodes[3].innerHTML;                     
                    // var regExp = /\(([^)]+)\)/;
                    // var matches = regExp.exec(nodeCount);
                   
                }


                list.append(checked).append(unchecked);
           /* });*/
});
	

    


/*	
	
$( ".search_paramiter_checkbox" ).each(function() {
	  if($(this).is(":checked")){
		  $(this).removeClass('hidden_skills');
		 console.log($(this).parent().parent());
		  console.log($(this).closest('ul').attr('id'));
		 
		 $('#category_list').prepend($(this).parent().parent());

	  }
});
*/



/*Position List*/
$("#position_list input").click(function(){
	
        var list = $("#position_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
           
                var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
					
                }
						
                list.append(checked).append(unchecked);
            });
    });

    $(document).ready(function() {
     var list = $("#position_list"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
           
                var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
						origOrder[i].style.display='';
						origOrder[i].classList.remove("hidden_position");
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
           /* });*/
});

/*Hourly Rate List*/
$("#hourly_rate_list input").click(function(){
        var list = $("#hourly_rate_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
           
                var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
    });

    $( document ).ready(function() {
     var list = $("#hourly_rate_list"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
           
                var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
           /* });*/
});



 /*Job Type List*/
 $("#job_type_list input").click(function(){
        var list = $("#job_type_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
        });

    $( document ).ready(function() {
     var list = $("#job_type_list"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
           /* });*/
});

 /*Timezone List*/
 $("#timezone_list input").click(function(){
        var list = $("#timezone_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
        });

    $( document ).ready(function() {
     var list = $("#timezone_list"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
           /* });*/
});


/*Location List*/
 $("#location_list input").click(function(){
        var list = $("#location_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
        });
		
		$( document ).ready(function() {
		 var list = $("#location_list"),
			origOrder = list.children();
			/*list.on("click", ":checkbox", function() {*/
				var i, checked = document.createDocumentFragment(),
						unchecked = document.createDocumentFragment();
					for (i = 0; i < origOrder.length; i++) {
						if (origOrder[i].getElementsByTagName("input")[0].checked) {
							checked.appendChild(origOrder[i]);
							origOrder[i].style.display='';
							origOrder[i].classList.remove("hidden_location");
						} else {
							unchecked.appendChild(origOrder[i]);
						}
					}
					list.append(checked).append(unchecked);
			   /* });*/
		 });



/*Travel List*/
 $("#willing_to_traval input").click(function(){
        var list = $("#willing_to_traval"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
        });

    $( document ).ready(function() {
     var list = $("#willing_to_traval"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
           /* });*/
});

 /*Travel List*/
 $("#tools_list input").click(function(){
        var list = $("#tools_list"),
        origOrder = list.children();
        list.on("click", ":checkbox", function() {
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
						origOrder[i].style.display='';
						origOrder[i].classList.remove("hidden_tools");
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
            });
        });

    $( document ).ready(function() {
     var list = $("#tools_list"),
        origOrder = list.children();
        /*list.on("click", ":checkbox", function() {*/
            var i, checked = document.createDocumentFragment(),
                    unchecked = document.createDocumentFragment();
                for (i = 0; i < origOrder.length; i++) {
                    if (origOrder[i].getElementsByTagName("input")[0].checked) {
                        checked.appendChild(origOrder[i]);
						origOrder[i].style.display='';
						origOrder[i].classList.remove("hidden_tools");
                    } else {
                        unchecked.appendChild(origOrder[i]);
                    }
                }
                list.append(checked).append(unchecked);
           /* });*/
     });
	 
	 
	  // onclick checkbox 
    $("#search_sidebar_form li").not( ".jobtype-li" ).click(function() {	
		   if($('input', this).is(":checked")){
		       $('input', this).attr('checked',false);
		   }else{
			   $('input', this).attr('checked',true);
		   }
		   loadPagination(0);
	});
	
	
	$('.filter-modal-btn').click(function() {		
		$('#filter-sidbar-mob').prop('class', 'modal fade filter-modal').addClass('left' );
		$('#search_sidebar_form').show();
		//$('.filter-modal').modal('show');
	});

</script>
<script>
// job type checkbox onchange
$('.search_paramiter_checkbox2').on('change',function(){
	if ($(this).is(':checked')) {
		$(this).parentsUntil('ul').find('.availability-group').show();	
	}else{
		$(this).parentsUntil('ul').find('.availability-group').hide();
		
		 $(this).parentsUntil('ul').find('.available_from').val('').hide();		 
		 $(this).parentsUntil('ul').find('input[type="radio"]').prop('checked',false);
		 
		 loadPagination(0);
		 
	}
})


$(".availability-rd").change(function() {		
	 if($(this).val()=='from'){
		 $(this).parentsUntil('ul').find('.available-from-group').show();
         $(this).parentsUntil('ul').find('.available_from').val('');		 
	 }else{
		 loadPagination(0);
		 $(this).parentsUntil('ul').find('.available-from-group').hide();	
	 }
});

// onchange sort by
$("#sort_select").change(function() {		
	  $('#sort_by').val( this.value);
	  setTimeout(function(){ loadPagination(0); }, 500);

	  
});


 


</script>