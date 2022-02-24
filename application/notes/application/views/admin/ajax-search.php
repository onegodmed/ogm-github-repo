<?php
    if (!empty($developers))
        foreach ($developers AS $key => $developer) {
$getmain_skill = $this->User->get_main_skills($developer->user_id);

            $main_skill =explode(',', $getmain_skill['skills']);
//print_r($main_skill);
$more_skills = 0;
            ?>
  <!-- Single Verticle job -->
	<div class="dev-search-bock">
    <button class="clickable-btn" data-href="<?= $developer->user_id; ?>" onclick="window.location = '<?php echo base_url('developer/profile/' . $developer->user_id); ?>';">  
      <div class="row">
        <div class="olc-md-2 col-sm-3">
          <div class="dev-list-img">
            <img src="<?= @$developer->image ?>" class="devs-img">
          </div>
          <div class="dev-img-hover">
            <div class="img-htext">View Full Profile</div>
          </div>
          <div class="video-add-sec">
            <div><a href="#"><i class="fa fa-play-circle"></i> Intro Video</a></div>
            <div><a href="#"><i class="fa fa-play-circle"></i> Interview Videos</a></div>
          </div>
        </div>
        <div class="col-md-10 col-sm-9">
          <div class="row">
            <div class="col-md-12">
              <div class="devs-details1">
                <span class="devs-name"><?= $developer->first_name.' '.$developer->last_name[0].'.'; ?></span>
                <?php 
                		$is_technical_skills_tested = $this->db->get_where('developer_skills',  array('user_id'=>$developer->user_id,'is_verified'=>'1'))->num_rows();
                		if($is_technical_skills_tested > 0){
                			echo '<span class="span-green">Technical Skills Tested</span>';
                		}
                		?>
					       <!--<span class="span-green">Recommended</span>-->
                <p><strong><?= $developer->title; ?></strong></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="devs-cont1">
                <span class="exp-sec exp-sec-desk">Overall Experience: &nbsp;<strong><?= $developer->overall_experince; ?></strong> 
              <?php if($developer->review_rating > 0) {?>
              <span class="vr-line">|</span> 
                            <span class="rating-stars">
                              <ul>
                <li><?php echo rating($developer->review_rating); ?></li>
                                
                              </ul>
                            </span>
              <?php }?>
              <?php if($developer->review_count > 0){ ?>
              <strong><?=$developer->review_count;?> Reviews</strong>
              <?php } ?>
                          </span>
              
               <span class="exp-sec exp-sec-mobile">
                <div class="rat-rev-sec"> 
              <?php if($developer->review_rating > 0) {?>
             
                            <span class="rating-stars">
                              <ul>
                <li><?php echo rating($developer->review_rating); ?></li>
                                
                              </ul>
                               <!-- <span class="vr-line">|</span>  -->
                            </span>
              <?php }?>
              <?php if($developer->review_count > 0){ ?>
              <strong><?=$developer->review_count;?> Reviews</strong>
              <?php } ?>
            </div>
                Overall Experience: &nbsp;<strong><?= $developer->overall_experince; ?></strong> 
                
                          </span>

              
						  <?php						   
						   $timezones =array();
						   if(!empty($developer->timezons)){
							   
							   $timezone_array = explode(",", trim(@$developer->timezons, ','));								 
								   foreach ($timezone_array as $key => $value) {
									   $words = explode(" ", $value);
										$acronym = "";
										foreach ($words as $w) {			
										  $acronym .= ucwords(substr($w,0,1));
										}
									$timezones[] = $acronym ;   
							   }
						   }						   ?>
                          <p class="timezone-sec"><i class="fa fa-clock-o"></i> Time Zones: &nbsp;<strong><?= implode(', ',@$timezones);?></strong></p>
                          <p class="dev-avial-sec">Availability: &nbsp;<strong><?php if($developer->full_time_amount > 0){ echo 'Full Time ';}
						  if($developer->part_time_amount > 0){ echo '| Part Time ';}
						  if($developer->contract_amount > 0){ echo '| Contract';}
						  ?> </strong></p>
                          <p class="about-cont"> <?=  substr($developer->profile_description, 0, 170).'<span class="clickable-bullet">...<span>'; ?></p>
              </div>
                        <div class="devs-skills-sec">
                          <ul>
						  <?php foreach($main_skill as $key=>$value){ 
							   if($key > 3){								
									$more_skills = count($main_skill) - $key; 
									 break;
								 }?>
						  <li><?= $value; ?></li>						  
						 <?php  }  ?>
						 <?php if($more_skills > 0) { ?>
                         <li><?= '+'.$more_skills.' More'; ?></li>
						 <?php } ?>
                          </ul>
                        </div>
            </div>
                      <div class="col-md-4">
                        <div class="list-btns-sec">
                          <div class="hire-btn-sec">
                            <a href="#" class="btn hire-btn">Hire <?= $developer->first_name; ?></a>
                          <p>Risk-Free Trial, pay only if satisfied</p>
                          </div>
                          <div class="scinter-btn-sec">
                            <a href="#" class="btn btn-outline">Schedule Interview</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </button>
            </div>
			
                         
                           <!--- <div class="job-verticle-list">
							<a class="clickable" href="<?php echo base_url('developer/profile/' . $developer->user_id); ?>">
                              <div class="row">
                                <div class="col-md-2 col-xs-12">
                                  <div class="vrt-job-cmp-logo">
                                    <a href="<?php echo base_url('developer/profile/' . $developer->user_id); ?>"><img src="<?= @$developer->image ?>" class="img-responsive" alt="" /></a>
                                  </div>
                                </div>
                                <div class="col-md-9 col-xs-10">
                                  <div class="vertical-job-header">
                                    <h4><a href="<?php echo base_url('developer/profile/' . $developer->user_id); ?>"><?= $developer->position_name . " (".trim($main_skill['skills']). ')' ?></a>
										<?php 
										$is_technical_skills_tested = $this->db->get_where('developer_skills',  array('user_id'=>$developer->user_id,'is_verified'=>'1'))->num_rows();
										if($is_technical_skills_tested > 0){
											echo '<span class="verified-span">Technical Skills Tested</span>';
										}
										?>
										</h4>
                                        
                                    <div class="cmp-job-rating">
                                      <ul>
                                       
										<?php if($developer->review_rating > 0) {?>
                                        <li><?php echo rating($developer->review_rating); ?></li>
										<?php } ?>
										<?php if($developer->review_count > 0){ ?>
                                        <li><a href="<?php echo base_url('developer/profile/' . $developer->user_id); ?>" title=""><?php  echo '('.$developer->review_count.' Review)'; ?> </a></li>
										<?php }  ?>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="vertical-job-body">
                                    <strong>Overall  Experience: </strong><span><?= $developer->overall_experince ?></span><span> (<?php 
                                     $dev_skills = $this->frontend->getSkillsByDeveloper($developer->user_id);
                                     $count = 0;
                                     if(!empty($dev_skills))
                                     {
                                        foreach ($dev_skills as $dev_skill) {
                                            $count++;
                                            if($count < 4)
                                            {
                                              if($dev_skill->is_verified)
                                                {
                                                  echo trim($dev_skill->skill_name).' - '.trim($dev_skill->experience);
                                                }
                                                else
                                                {
                                                    echo trim($dev_skill->skill_name).' - '.trim($dev_skill->experience);
                                                }
                                            }
                                            if($count < 3 && $count < count($dev_skills))
                                            {
                                                echo ', ';
                                            }
                                        }
                                     }
                                    ?>)</span>
                               
                                        <article class=" slide article article-slidecontent">
                                        <?=  substr($developer->profile_description, 0, 100).'<span class="clickable-bullet">...<span>';
										 ?>
                                        </article>
                                        
                                  </div>
                                </div>
                                <div class="col-md-1 col-xs-2">
                                  <div class="view-page-btn">
                                    <a href="<?php echo base_url('developer/profile/' . $developer->user_id); ?>"><i class="fa fa-angle-right"></i></a>
                                  </div>
                                </div>
                              </div>
							  </a>
                            </div>-->
                           
                        
                        <?php
                    } else
                    echo "Oops ... end search results.  We are showing only the most relevant developers for your search";
                ?>