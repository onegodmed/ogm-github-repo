<script src="<?= base_url() ?>assets/js/readmore.min.js"></script>
<?php
$this->load->model('User_model', 'User');
?>
<!-- ====================== Start Job Detail 2 ================ -->
  <section style="background: #fff;padding: 10px 0 3em;">
   <div class="container">
      <div class="row">
        <!-- row -->
		    <div class="list-filter-sec">
          <div class="col-md-2 col-sm-3 col-xs-12">
            <div class="filter-option-sec">
              <p class="filter-desk"><i class="fa fa-filter"></i> Refined By</p> 
              <p class="filter-mob"><a href="#" type="button" data-toggle="modal" class="filter-modal-btn" data-direction='left' data-target="#filter-sidbar-mob"><i class="fa fa-filter"></i> Filter</a></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-5 col-xs-5 table-col-rightpadd">
            <div class="filter-result-opt">
              <p><strong class="offset_result"></strong></p>
            </div>
          </div>
          <div class="col-md-6 col-sm-4 col-xs-7">
            <div class="sortby-sec">
              <div class="fl-right">
                <div class="search-wide">
                  <p><strong>Sort By</strong></p>
                </div>
                <div class="search-wide full form-group">
                  <select class="wide1 form-control" id="sort_select" name="sort_by">
                    <option value="recent" <?= ($this->input->get('sort_by')=='recent') ? "selected" : ''?>>Most Recent</option>
                    <option value="popular" <?= ($this->input->get('sort_by')=='popular') ? "selected" : ''?>>Most Popular</option>                                    
                  </select> 
                </div>
              </div>
            </div>
          </div>
        </div><!-- Start Sidebar -->
       </div>
        <!-- form opne in inner header.php -->
    		<div class="col-md-2 col-sm-3 col-xs-4 padd-less-col custom-col-size"  id="filter-sidbar-mob" role="dialog">

    			<form action="<?php echo base_url('admin/search'); ?>" method="get" id="search_sidebar_form" class="desktop-filter-sidebar">
			      <div class="filter-sidebar" id="sidebar_panel">
              <div class="widget-boxed padd-bot-0">
                <div class="widget-boxed-header">
                  <p class="serch-sidebar-heading">Skills</p>
                </div>
                <div class="widget-boxed-body">
                  <div class="search_widget_job">
                    <div class="field_w_search">
                      <div class="input-group">
                        <input type="text" id="input_category" oninput="filter(this.id)" class="form-control" placeholder="Enter Skill" name="skill_name" value="<?= @$this->input->post('skill_name') ?>" autocomplete="off">
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
                            $dev_count_skill = $this->User->getDevCountBySkills($skill->id);
												// MATCH ALL POSSIBLE UPPER & LOWER CASE SELECTED 
												if(isset($_GET['skill']) && $_GET['skill']!='' && in_array($skill->id,$_GET['skill']) ){
													$selected_sk = 'checked';
												}elseif(isset($_GET['search_tearm']) && strcasecmp($_GET['search_tearm'],$skill->skill_name)==0)
												{ 
												    $selected_sk = 'checked';
												}else{
													$selected_sk = '';
												}
												?>
                        <li <?php echo ($c >5 )?'style="display:none" class="hidden_skills"':'';?>>
                          <span class="checkbox">
													 <input type="checkbox" value="<?php echo $skill->id;?>" name="skill[]" <?PHP echo $selected_sk; ?> class="search_paramiter_checkbox" data-txt="<?= $skill->skill_name;?>" onclick="loadPagination(0);" ><label for="a"></label>
                          </span>
                          <?php echo ucfirst($skill->skill_name); ?>
													(<?php echo $dev_count_skill;?>)
                        </li>
                        <?php
                        $c++;
                        }
                        } 
                        ?>
										  </ul>                                    
                    </div>
                    <p id="category-more" onclick="$('.hidden_skills').toggle('slow'); $(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More'); ">Show More</p>
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
                      <input id="input_position" oninput="filter(this.id)" type="text" class="form-control" placeholder="Enter Position" name="positions" value="<?= $this->input->get('position_name') ?>" autocomplete="off">
                      <div class="input-group-btn">
                        <button class="btn_searchboxside" type="submit"><i class="fa fa-search"></i></button>
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
                        <?php echo ucfirst($position->position_name); ?>
                        (<?= $dev_count_position ?>)
                      </li>
                      <?php
                      $p++;
                      }
                      }
                      ?>
                    </ul>
                  </div>
							    <p id="position-more" onclick="$('.hidden_position').toggle('slow'); $(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More'); ">Show More</p>
                </div>
              </div>
					    <div class="widget-boxed padd-bot-0">
                <div class="widget-boxed-header">
                  <p class="serch-sidebar-heading">Job Type</p>
                </div>
                <div class="widget-boxed-body">
                  <div class="side-list no-border">
                    <ul id="job_type_list">
                      <li>
                        <span class="checkbox">												
                          <?php
                          echo form_checkbox('is_full_time', '1',$this->input->get('is_full_time'), ['class' => 'search_paramiter_checkbox', 'id' => 'is_full_time']);
                          ?> 
                          <label for="is_full_time"></label>
                        </span>
                        Full Time
                        (<?= $full_time_count ?>)
                      </li>
                      <li>
                        <span class="checkbox">
                          <?php
                          echo form_checkbox('is_part_time', '1', $this->input->get('is_part_time'), ['class' => 'search_paramiter_checkbox', 'id' => 'is_part_time']);
                          ?> 
                          <label for="is_part_time"></label>
                        </span>
                        Part Time
                       (<?= $part_time_count ?>)
                      </li>									
                      <li>
                        <span class="checkbox">
                          <?php
                          echo form_checkbox('is_contract', '1',$this->input->get('is_contract'), ['class' => 'search_paramiter_checkbox', 'id' => "is_contract"]);
                          ?> 
                          <label for="is_contract"></label>
                        </span>
                        Contract Base
                        (<?= $contract_count ?>)
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
                      <?php for($hourly_rate=0; $hourly_rate < 60; $hourly_rate = $hourly_rate+10) {
                      $dev_count_by_rate = $this->User->devCountByHourlyRate($hourly_rate); 
                      ?>
                      <li>
                        <span class="checkbox">
                          <input class = "search_paramiter_checkbox" type="checkbox" id="hourly_rate_<?php echo $hourly_rate;?>" value="<?php echo $hourly_rate;?>" name="hourly_rate[]" <?php if(isset($_GET['hourly_rate'])) if(in_array($hourly_rate,$this->input->get('hourly_rate'))){ echo "checked";}?>>
                          <label for="1"></label>
                        </span>
                          <?php if($hourly_rate+10 > 50){
                              echo 'Above $'.$hourly_rate;
                          }
                          else
                              {   
                                  $hourly_rate_to = $hourly_rate+10;
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
                  <p class="serch-sidebar-heading">Time Zone available </p>
                </div>
                <div class="widget-boxed-body">
                  <div class="side-list no-border">
                    <ul id="timezone_list">
                      <?php
                      $i = 0;
                      $time_zon_list = config_item('time_zon_list');
                      foreach ($time_zon_list as $key => $value) {
                      ?>                                         
                      <li>
                        <span class="checkbox">	
                          <?php echo form_checkbox('timezons[' . $i . ']', $key, @$this->input->get('timezons')[$i] , ['class' => 'search_paramiter_checkbox', 'id' => 'timezons' . $i]); ?> 
                          <label for="<?= 'timezons' . $i ?>"></label>
                        </span>
                        <?= $value ?>
                        <span class="pull-right"></span>
                      </li>
                      <?php
                      $i++;
                      }
                      ?> 
                    </ul>
                  </div>
                </div>
              </div>
              <div class="widget-boxed padd-bot-0">
                <div class="widget-boxed-header">
                  <p class="serch-sidebar-heading"> Location of developer</p>
                </div>
                <div class="widget-boxed-body">
                  <div class="field_w_search">
                    <div class="input-group">
                      <input id="input_location" oninput="filter(this.id)" type="text" class="form-control" placeholder="Enter Country" name="country" value="<?= $this->input->get('country_name') ?>">
                      <div class="input-group-btn">
                        <button class="btn_searchboxside" type="submit"><i class="fa fa-search"></i></button>
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
                      ?>
                      <li <?php echo ($l >5 )?'style="display:none" class="hidden_location"':'';?>>
                        <span class="checkbox"> 
                          <?php echo form_checkbox('country[' . $l . ']', $country_code, @$this->input->get('country')[$l] , ['data-txt'=>$country_name,
	                        'class' => 'search_paramiter_checkbox', 'id' => 'country_' . $country_code]); ?> 
                          <label for="<?= 'country_' . $country_code ?>"></label>
                        </span>
                        <?= ucfirst($country_name) ?>
                        (<?= (!empty($location_count[$country_code])) ? $location_count[$country_code] : '0' ?>)
                      </li>
                      <?php $l++;
                      } ?>                                    
                    </ul>
                  </div>
							    <p id="location-more" onclick="$('.hidden_location').toggle('slow'); $(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More'); ">Show More</p>
                </div>
              </div>
              <div class="widget-boxed padd-bot-0">
                <div class="widget-boxed-header">
                  <p class="serch-sidebar-heading">Willing to travel </p>
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
                    </ul>
                  </div>
                </div>
              </div>
              <div class="widget-boxed padd-bot-0">
                <div class="widget-boxed-header">
                  <p class="serch-sidebar-heading">Tools knowledge</p>
                </div>
                <div class="widget-boxed-body">
    					    <div class="field_w_search">
                    <div class="input-group">
                      <input id="input_tools" oninput="filter(this.id)" type="text" class="form-control" placeholder="Enter Tools" name="tools" value="<?= $this->input->get('tools') ?>">
                      <div class="input-group-btn">
                        <button class="btn_searchboxside" type="submit"><i class="fa fa-search"></i></button>
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
                                  </span><?php echo $value; ?>
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
              </div>
            </div>
          </form>
		    </div>
    		<!-- end Sidebar -->
    		<!-- Start Job List -->
    	<div class="col-md-10 col-sm-9 col-xs-8  custom-col-size">
    		  
<div class="container">

    <table class="dash_table" border="1">
       <tr>
            <th>First Name<a href=""><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a></th>
            <th>Last Name<a href=""><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a></th>
            <th>Mobile<a href=""><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a></th>
            <th>Email<a href=""><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a></th>
            <th>Comment<a href=""><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a></th>
        </tr>

         <?php  
         foreach ($res as $row)  
         {    ?>

        <tr>
           <!--  <td style="visibility:hidden">$row->id;</td> -->
            <td><?php echo $row->first_name;?></td>  
            <td><?php echo $row->last_name;?></td>
             <td><?php echo $row->mobile;?></td>
              <td><?php echo $row->email;?></td>
              <td><!-- <a href="#" onclick="mycmt('<?php echo $row->id; ?>')">Comment</a> --> <button type="button" class="btn btn-danger btn1 cmt1" value="<?php echo $row->id; ?>" >Comment</button> </td>
        </tr>

        <?php  
         }   ?>
    </table>
</div>
        	   
    		</div> 
		    <!-- End Job List -->
        <div style="clear: both;"></div>	
        <div class="col-md-12">
          <div style='margin-top: 10px;' id='pagination'></div>
        </div>     
	 </div>
   
  </section>

<script>

    // Remove empty fields from GET forms
	/*jQuery(document).ready(function($){
	  
		$("form").submit(function() {
			$(this).find(":input[type='text']").filter(function(){ return !this.value; }).attr("disabled", "disabled");
			return true; // ensure form still submits
		});
		
		
		$( "#search_header_form" ).find( ":input" ).prop( "disabled", false );
	
    });*/


    /*$(document).ready(function () {
        $("#sort_select").on('change', function () {            
            $("#search_header_form").submit()
        });
    });*/
	                                        // ***
$('#box').keyup(function() {
  var keyword = this.value.toLowerCase();
  var keywordlength = this.value.length;

  $('.objType').each(function() {
    var text = $(this).data("original"),      // ***
      textL = text.toLowerCase(),
      index = textL.indexOf(keyword);         // ***

    if (index !== -1) {
      var htmlR = text.substr(0, index) + '<b>' + text.substr(index, keywordlength) + '</b>' + text.substr(index + keywordlength); // ***
      $(this).html(htmlR).show()
    } else {
      $(this).hide();
    }
  });
});

</script>

<script type="text/javascript">
// filter list
function filter(suggetion_for) {
    var keyword = $("#"+suggetion_for).val().toLowerCase();
     var keywordlength = $("#"+suggetion_for).val().length;	
    var listId = $("#"+suggetion_for).parent().parent().next('div').find('ul').attr('id');
	var formID = $("#"+suggetion_for).closest('form').attr('id');
	//console.log(formID);
	var readmoreId = $("#"+suggetion_for).parent().parent().parent().find('p').attr('id');	
	origOrder = $('#'+listId).children();	
    for (var i = 0; i < origOrder.length; i++) {	

        var input  = origOrder[i].getElementsByTagName("input")[0];		
		var txt = input.getAttribute('data-txt');
		//console.log(origOrder[i].childNodes[2].className );
        if (txt.substring(0, keyword.length).toLowerCase() !== keyword && keyword.trim() !== ""  ) {
          $(origOrder[i]).hide();
        }
        
		else  {
			$(origOrder[i]). show();
            // script for highlight matching text
			textL = txt.toLowerCase(),
			index = textL.indexOf(keyword);
            <!-- get skill,position etc	 -->		
			nodeID= origOrder[i].childNodes[3].id; 
			nodeCount = origOrder[i].childNodes[3].innerHTML.split(" ");
			<!--Last element of array -->
			LastSplitElement = nodeCount[nodeCount.length-1];
            if(listId=='tools_list'){
				var htmlR = txt.substr(0, index) +'<b>' + txt.substr(index, keywordlength) + '</b>' + txt.substr(index + keywordlength);
			}else{
				var htmlR = txt.substr(0, index) +'<b>' + txt.substr(index, keywordlength) + '</b>' + txt.substr(index + keywordlength)+' '+LastSplitElement;
			}			
     		
			$('#'+nodeID).html(htmlR) ;
            
        }
		
		
		//$('#'+readmoreId).hide();
		
    }
	
	if($('#'+listId+" li:visible").length === 0){		
		$("#"+suggetion_for).parent().next('.error').html('No matching "<b>'+$("#"+suggetion_for).attr('data-filter') +'</b>" Found');
		$("#"+suggetion_for).addClass('err_inp');
        $('#'+readmoreId).hide();
		$('#'+formID+' .btn_searchboxside').attr('disabled',true);		
	    return false;
	}else{
		if(origOrder.length === $('#'+listId+" li:visible").length){
			 $('#'+readmoreId).show().text('Show Less');
		}else{
			$('#'+readmoreId).hide();
		}
		$("#"+suggetion_for).parent().next('span').text('');
		$("#"+suggetion_for).removeClass('err_inp');
       
		$('#'+formID+' .btn_searchboxside').attr('disabled',false);
		return true;
	}
	
}


	
    // Detect pagination click
    $('#pagination').on('click','a',function(e){
       e.preventDefault(); 
       var pageno = $(this).attr('data-ci-pagination-page');
       loadPagination(pageno);
     });
	
	// form submit 
	$('#search_sidebar_form').on('submit',function(e){
		// FOR - ONFORM SUBMIT CHECKBOX  SHOULD BE Checked
		e.preventDefault();
		var elements = $('#'+$(this).attr('id')+ ' input[type="text"]');
		
		for (var k = 0; k < elements.length; k++) {
			if(elements[k].value!==''){
				var inputID = elements[k].getAttribute('id');
				var listId = $("#"+inputID).parent().parent().next('div').find('ul').attr('id');
						origOrder = $('#'+listId).children();	
						for (var i = 0; i < origOrder.length; i++) {	

							var input  = origOrder[i].getElementsByTagName("input")[0];		
							var txt = input.getAttribute('data-txt');
						
						    if (txt.substring(0, elements[k].value.length).toLowerCase() === elements[k].value.toLowerCase() && elements[k].value.trim() !== "" ) {
							    input.checked = true;
								
							    loadPagination(0, $(this).attr('id'));
							    $('#'+$(this).attr('id')+ ' input[type="text"]').val('');
								break;
							} 
							
						}
				
			}
			
		
			
		}
		
	});
		 

    loadPagination(0);

     // Load pagination
   /*  function loadPagination(pagno,formID = null){
	
		$(".loader").fadeIn();
		if(formID){
			 _formID = formID;
		 }else{
			 _formID = 'search_sidebar_form';
		 }
       $.ajax({
         url: '<?=base_url()?>/client/search_result/pagination/'+pagno+'?<?php //echo $this->input->server('QUERY_STRING'); ?>',
         type: 'get',		 
		 data: $("#"+ _formID +" :input[type='checkbox']").filter(function () {return $.trim(this.value);}).serialize(),
         dataType: 'json',
         success: function(response){
                    // rewrite url in address bar 			 
					 var obj = { Page: window.location.href, Url: '<?=base_url()?>/client/search_result/?'+this.url.split("?")[1] };
                     history.pushState(obj, obj.Page, obj.Url);
			
			$("html, body").animate({ scrollTop: 0 }, "slow");
			$('.developer-listing').html(response.result);
			$('#sidebar_panel').html(response.skill_filter);			
			$('.offset_result').html(response.offset_result);
            $('#pagination').html(response.pagination);
			$(".loader").fadeOut();
			
			
         }
       });
     }
*/
	   

    // onclick checkbox 
	$('.search_paramiter_checkbox').change(function() {
		loadPagination(0);
	});
	


$('.filter-modal-btn').click(function() {
	
    $('#filter-sidbar-mob').prop('class', 'modal fade filter-modal').addClass('left' );
    //$('.filter-modal').modal('show');
});
</script>

