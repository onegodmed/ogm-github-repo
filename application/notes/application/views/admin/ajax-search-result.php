<?php //print_r($developers);?>

<script src="https://cdn.datatables.net/v/dt/dt-1.10.16/r-2.2.1/datatables.min.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/admin_custom_style.css">
<?php  



		    // GET ALL DEVELOPERS COUNT
			$AllCount =$this->Search->devloperCountByStage('all');
			//print_r($AllCount);
			// array_count_values(array_map(function($AllCount){return $AllCount['stages'];}, $AllCount));

			$counts = array_count_values(array_column($AllCount, 'stages'));

		
			/*
            $signed_upCount = $this->User->devloperCountByStage('signup');
		
			
            $incompleteCount = $this->User->devloperCountByStage('incomplete');
		
			
            $unverifiedCount = $this->User->devloperCountByStage('unverified');
		
            $verifiedCount =  $this->User->devloperCountByStage('verified');
			$interview_scheduledCount =  $this->User->devloperCountByStage('interview_scheduled');
			$interview_doneCount =  $this->User->devloperCountByStage('interview_done');
			$wait_for_correctionCount =  $this->User->devloperCountByStage('wait_for_correction');
			$bg_checkCount =  $this->User->devloperCountByStage('bg_check');
			$completeCount =  $this->User->devloperCountByStage('complete');*/
		
			
       
  ?>


 <p><strong><?= 'Total Developers: '.count($AllCount);?></strong></p>
 <div class="btn-group admin_table_section devs-dashboard-nav">
		<ul class="nav nav-tabs devs-db-nav-tabs">
		 	<li  <?php if($this->input->get('step')=='all' || $this->input->get('step')==null){ echo 'class="active"';} ?> ><a data-toggle="tab" href="#all" class="developer-stege" data-step="all">All <span class="small-a">(<?= @count($AllCount);?>)</span></a></li>
		 
		    <li  <?php if($this->input->get('step')=='signed_up'){ echo 'class="active"';} ?> ><a data-toggle="tab" href="#signed_up" class="developer-stege" data-step="signed_up">Signed up <span class="small-a">(<?= (@$counts['signup'])?$counts['signup']:'0';?>)</span></a></li>

		    <li <?php if($this->input->get('step')=='incomplete'){ echo 'class="active"';} ?>><a data-toggle="tab" href="#incomplete" class="developer-stege" data-step="incomplete">Incomplete <span class="small-a">(<?= (@$counts['incomplete'])?@$counts['incomplete']:'0';?>)</span></a></li>

		    <li <?php if($this->input->get('step')=='unverified'){ echo 'class="active"';} ?>><a data-toggle="tab" href="#unverified"  class="developer-stege" data-step="unverified">Submit For Review <span class="small-a">(<?= (@$counts['unverified'])?@$counts['unverified']:'0';?>)</span></a></li>

			<li <?php if($this->input->get('step')=='wait_for_correction'){ echo 'class="active"';} ?>><a data-toggle="tab" href="#wait_for_correction"  class="developer-stege" data-step="wait_for_correction">Waiting For Correction <span class="small-a">(<?= (@$counts['wait_for_correction'])?@$counts['wait_for_correction']:'0';?>)</span></a></li>
		   
		    <li <?php if($this->input->get('step')=='verified'){ echo 'class="active"';} ?>><a data-toggle="tab" href="#verified" class="developer-stege" data-step="verified">Verified <span class="small-a">(<?= (@$counts['verified'])?@$counts['verified']:'0'; ?>)</span></a></li>
			
			<li <?php if($this->input->get('step')=='scheduled'){ echo 'class="active"';} ?>><a data-toggle="tab" href="#scheduled" class="developer-stege" data-step="scheduled">Interview Scheduled <span class="small-a">(<?=( @$counts['interview_scheduled'])? $counts['interview_scheduled']:'0';?>)</span></a></li>
			
			<li <?php if($this->input->get('step')=='interview_done'){ echo 'class="active"';} ?>><a data-toggle="tab" href="#interview_done" class="developer-stege" data-step="interview_done">Interview Done <span class="small-a">(<?= (@$counts['interview_done'])? @$counts['interview_done']:'0';?>)</span></a></li>
			
			<li <?php if($this->input->get('step')=='bg_check'){ echo 'class="active"';} ?>><a data-toggle="tab" href="#Check" class="developer-stege" data-step="bg_check">BG Check(<?= (@$counts['bg_check'])? @$counts['bg_check']:'0';?>)</a></li>
			
			<li <?php if($this->input->get('step')=='complete'){ echo 'class="active"';} ?>><a data-toggle="tab" href="#complete" class="developer-stege" data-step="complete">Complete (<?= (@$counts['complete'])? @$counts['complete']:'0';?>)</a></li>

			<li <?php if($this->input->get('step')=='agency'){ echo 'class="active"';} ?>><a data-toggle="tab" href="#agency" class="developer-stege" data-step="agency">Agencies (<?= (@$counts['agency'])? @$counts['agency']:'0';?>)</a></li>

			<li <?php if($this->input->get('step')=='not_interested'){ echo 'class="active"';} ?>><a data-toggle="tab" href="#not_interested" class="developer-stege" data-step="not_interested">Not Iinterested (<?= (@$counts['not_interested'])? @$counts['not_interested']:'0';?>)</a></li>

			
		</ul>
  
 <br><br>
<?php  
$code=@array_column($developers, 'mobile_country_code');
$number=@array_column($developers, 'mobile');
$mrg=@array_merge($code,$number);
$n=@count($number);

?> 

<div class="table-responsive custom_table_res">
	<form  target="_blank" id="mail_form" action="<?=base_url('admin/bulk_email/');?>" method="post">
	
	<input type="hidden" name="bulk_email" value="<?php echo @implode(',',array_column($developers, 'email')); ?>">

	<input type="hidden" name="bulk_sms" value="<?php for ($i=0; $i<$n; $i++) { if(!empty($number[$i])){
	echo $code[$i].$number[$i].','; }}?>">


	<button type="submit" class="btn btn-info btn-lg bulk_em" id="mail_id" ><i class="fa fa-paper-plane"></i> Send Bulk Email</button>	
	<button type="button" class="btn btn-info btn-lg bulk_em" id="sms_id" ><i class="fa fa-envelope"></i> Send Bulk SMS</button>	
	</form>

	<?php  	include('excel_file.php'); ?>

 <table class="table table-bordered admin_table " id="stepTable">
    <thead>
      <tr>
	   	<th></th>
     	<th>Action</th>
      	<th>Profile Link</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
		<th>Full Time Amount</th>
		<th>Part Time Amount</th>
		<th>Contract Amount</th>
		<?php if($this->input->get('step')=='incomplete'){ echo '<th>intro Video uploaded</th>';} ?>
		<?php if($this->input->get('step')=='scheduled'){ echo '<th> Interview Timings</th>';} ?>
		<th>Last Login </th>
		<th>Last Update </th>		
		<th>Download Resume</th>	
        <th>User Source</th>
        <th>Country</th>	
       		
		
      </tr>
    </thead>
    <tbody>
		<?php  
		if(!empty($developers))
		{
			foreach($developers as $developer)
			{
			
				
				if($developer->full_time_amount)
				{
					$fulltime_client = $developer->full_time_amount/0.6;
					$fulltime = $developer->full_time_amount.' , '.number_format($fulltime_client, 2, '.', '');
				}
				else{
					$fulltime = 'NA';
				}
				
				if($developer->part_time_amount){
					$parttime_client = $developer->part_time_amount/0.6;
					$parttime = $developer->part_time_amount.' , '.number_format($parttime_client, 2, '.', '');
				}
				else{
					$parttime = 'NA';
				}
				
				if($developer->contract_amount){
					$contract_client = $developer->contract_amount/0.6;
					$contract = $developer->contract_amount.' , '.number_format($contract_client, 2, '.', '');
				}
				else{
					$contract = 'NA';
				}?>
		    <tr>
			  	<td></td>
			    <td>
				             
				  <div class="dropdown">
				    <button class="btn btn-info dropdown-toggle btn-sm" type="button" data-toggle="dropdown">Action
				    <span class="caret"></span></button>
				    <ul class="dropdown-menu">
					<?php if($this->input->get('step')=='verified'){ ?>
					<li><a href="<?php echo base_url('admin/interview_schedule/' . $developer->user_id) ?>" target="_blank">Schedule Interview</a></li>
					<?php } ?>
					
					  <li><a href="<?=base_url('admin/add_comment/'.base64_encode($developer->user_id).'/'.base64_encode('admin').'/'.base64_encode($developer->first_name));?>" target="_blank" >Comment</a></li>

					   <?php if($developer->stages=='wait_for_correction'){ ?>
					   <li><a href="<?=base_url('admin/add_comment/'.base64_encode($developer->user_id).'/'.base64_encode('correction').'/'.base64_encode($developer->first_name));?>" target="_blank" >Comment For Correction</a></li>
					   <?php }?>
					   <?php if($developer->stages=='incomplete'){ ?>
					   <li><a href="<?=base_url('admin/developer_status?developer_id='.$developer->user_id.'&status=not_interested&referral=1');?>" >Not Interested</a></li>
					   <li><a href="<?=base_url('admin/developer_status?developer_id='.$developer->user_id.'&status=agency&referral=1');?>" >Agency</a></li>
					   <?php }?>	  
					  <li><a href="#">Time Line History</a></li>
					  
				      <li><a href="<?= base_url('admin/edit_profile/' . $developer->user_id); ?>">Edit </a></li>     
				      <!-- <li><a href="<?= // base_url('admin/delete_user/' . $developer->user_id.'/developer') ?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></li> -->
					  
				    </ul>
				  </div>


				
			    </td>
	     		<td><?php echo base_url('developer/profile/'.$developer->user_id);?></td>

	        	<td><a href="<?= base_url('admin/update_user/'.base64_encode($developer->user_id).'/'.base64_encode('developer'));?>" target="_blank" ><?= $developer->first_name.' '.$developer->last_name?></a> </td>
	        	<td>
					<form  target="_blank" action="<?=base_url('admin/bulk_email/');?>" method="post">		
					<input type="hidden" name="bulk_email" value="<?php echo $developer->email; ?>">
					<button type="submit"  name="submit" class="btn-link"><?= $developer->email; ?></button>
					</form>
				</td>
			
	        	<td>
		        	<form target="_blank" action="<?=base_url('admin/bulk_sms/');?>" method="post">
		        	<input type="hidden" name="country_code" value="<?php echo $developer->mobile_country_code; ?>" >
		        	<input type="hidden" name="bulk_sms" value="<?php echo $developer->mobile_country_code.$developer->mobile; ?>">
		        	<button type="submit"  name="submit" class="btn-link"><?php if(!empty($developer->mobile_country_code && $developer->mobile)) { echo "+".$developer->mobile_country_code."-"; } ?><?= $developer->mobile; ?>    </button>
		        	</form>
	        	</td>
			
				<td><?= $fulltime; ?> </td>
				<td><?= $parttime;?> </td>
				<td><?= $contract; ?> </td>
				<?php 
				if($this->input->get('step')=='incomplete')
				{			
		            if($developer->profile_description!='' && ($developer->full_time_amount>0 || $developer->part_time_amount>0 || $developer->contract_amount>0) && $developer->mobile!='' && $developer->first_name!='' && $developer->last_name!='' && $developer->mobile!=''  && $developer->title!='' && $developer->overall_experince!='' )
		                {
			            	if (!empty($developer->hashed_id)) {
			            		echo '<td> yes </td>';
			            	}else
			            	{
			            		echo '<td> No </td>';
			            	}
						
						
					}
					else{
						echo '<td> Incomplete </td>';
					}			
			  
				}
				if($this->input->get('step')=='scheduled')
				{
					if($developer->status=='scheduled' && $developer->scheduled_by == 'admin' && $developer->event_start_time !=''){

						$exp_date = @explode('T',@$developer->event_start_time);
						$exp_time = @explode('+',@$exp_date[1]);
						
						if(@$exp_date[0].' '.@$exp_time[0] > date('Y-m-d H:i:s') )
						{
							 echo '<th><span class="th-green"> '.@$developer->event_start_time.'</span></th>';
						}
					}
					else{
							 echo '<th><span class="th-red"> '.@$developer->event_start_time.'</span></th>';
						}
				    
					
			
					
				}?>
				
			

				<td><?= $developer->last_login; ?></td>
				<td><?= $developer->updated_at; ?></td>
				
				<td><?php if($developer->dev_resume!=''){ ?><a href="<?= $developer->dev_resume; ?>" target="_blank" download ><i class="fa fa-file-pdf-o"></i> Download Resume</a> <?php }else{ echo 'NA';}?></td>
				<td><?= ($developer->user_source)?$developer->user_source:'Unknown'; ?></td>
				<td><?= strtoupper($developer->country_name); ?></td>
				
			 
	      	</tr>

			<?php 
			}
		}?>
	      
	    </tbody>
   
  </table>
  </div>
  
  <!-- Trigger the modal for add comment -->
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
     
              
              <h5 class="modal-title">Previous Comments</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

            <div class="display_comment" style=" height: 150px; margin-left: 15px; margin-right: 15px; overflow: auto;">
          <!--   <input type="text" name="user_is" id="user_is"> -->

                    <div > 
                         <table class="table" id="table">                                 
                                  <tbody>
                                    <tr>                                    
                                     <!--  <th>Previous Comments</th> -->
                                    </tr>                                    
                                  </tbody>
                                         <tbody id="showdata"  style="background-color:#3c959c; color: white; padding: 4px 10px 4px 10px; border-radius:15px 0px 15px 0px; margin-bottom: 10px; ">
                                  </tbody>

                                 </table>
                    
                     </div>                    

            </div>

        <div class="modal-body">
            <h5 class="modal-title">Add New Comment</h5>

            <div class="form-group">
            <form method="post" action="<?php echo base_url() ?>admin/add_comment_developer">
      <!-- <input type="text" name="comments" placeholder="Comment here" class="form-control"> -->
       <textarea name="comments" class="form-control" required></textarea>
      <input type="hidden" name="user_i" id="user_i">
      <input type="hidden" name="user_sid" id="user_sid">

      
     
    </div>
       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-default" id="btn_save">Save</button>
        </div>

        </form>
      </div>
      
    </div>
  </div>

  <!-- email Modal -->

  <!--<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
     <!-- <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send Email</h4>



        </div>
        <div class="modal-header dev_type">

        	
          <?php
          $t=$this->input->get('step');
          if($t=='all')          
          echo 'You have selected'.' '.$this->input->get('step').' '.'Developers';
      	  else
      	  echo 'You have selected all '.$this->input->get('step').' '.'Developers';	
          ?>
       
        	
        </div>
         
        <div class="modal-body">
        	<form action="<?php echo base_url()?>admin/send_bulk_email"  name="bulk_email" id="bulk_email" method="post" enctype="multipart/form-data">
			<div class="form-group">

<div style="overflow: scroll;">
<?php 
foreach ($developers as $develope) {
		
		$new[]=$develope->email;
		
}
 $email=implode(",", $new);      
 echo($email); 	

?> 
</div>
<?php 
echo count($developers);
?>


			 <div class="form-group">
              <label for="usr">To: (Testing Purpose) </label>
              <input type="text" name="to" class="form-control">
        	</div>	


              <label for="usr">Subject</label>
              <input type="text" name="subject" class="form-control">
        	</div>

        	 <div class="form-group text_class">

                <label for="comment">Message:</label>
                <textarea name="message" class="form-control " rows="5"  id="myArea2"></textarea>
                
        </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" id="send_mail">Send</button>
        </div>
      </div>
       </form>
    </div>
  </div>-->


 <script src="<?php echo base_url() ?>assets/js/text1_editor.js"></script>
        		 <script type="text/javascript">

        //$( window ).on( "load", function() {
          $(document).ready(function(){
        var area2 = new nicEditor({fullPanel : true}).panelInstance('myArea2');
        area2.setPanel('myNicPanel');
          area2.addInstance('myInstance1');
    });
          $(document).ready(function(){
          	$('.nicEdit-main').parent('div').css({"width": "568px"});            
          });
 </script>   

  <script>
  $( ".developer-stege" ).click(function() {
	  $('#developer_step').val($(this).attr('data-step'));
	  loadPagination(0);

  });

  $( ".cmt-btn" ).click(function() {
	  alert($(this).closest("form").attr('class'));	 
  });
  
   /* $(document).ready(function () {
		$('#stepTable').DataTable({
		"scrollX": true,
		"scrollY": 500,
		"stateSave": true
		});
		$('.dataTables_length').addClass('bs-select');
	});
*/
 
  $(document).ready(function(){
  	$('.container').addClass('container-fluid').removeClass('container');
  	$('.dataTables_paginate').addClass('dataTables_customs');
  });


function comments(ths)
     {              
          var text = $(ths).attr('data-id');          
          var s_id = $(ths).attr('data-sid');          

          $('#user_i').val(text);         
          $('#user_sid').val(s_id);         
           


        $.ajax({
                type: 'post',
                url: '<?php echo base_url() ?>admin/show_comment',
                async: false,
                data:{text:text},
                dataType: 'json',
                success: function(data){

                   
                    var html = " ";
                    var i;          
                    for(i=0; i<data.length; i++){
                        html +='<tr>'+

                                    '<td >'+data[i].comment+'</td>'+     
                                    '<td style="width:130px;">'+data[i].datetime+'</td>'+ 
                                    
                                '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error: function(){
                    alert('Could not get Data from Database');
                }
            });
     }

// $(document).ready(function(){





      // });

//loader script
   $(window).on('load', function(){ 
    $(".loader").fadeOut();
    }); 

  // $('#send_mail').click(function(){
    //alert("h");

  /*  $('#bulk_email').submit(function(e){       
     e.preventDefault();

     $.ajax({
             url: $(this).attr('action'),
             type: "POST",
             data: new FormData(this),
             contentType: false,
             cache: false,
             processData: false,
             success: function(data)
             {
         alert("Email Sent");   
          $("#bulk_email")[0].reset();        
         $('#myModal1').modal('hide');
     },

     error: function(){}

     });

    });


*/

  // });



  </script>


<script>
	
$(document).ready(function (){
	


    var table = $('#stepTable').DataTable({
		dom: 'lBfrtip',			        
        buttons: [{extend: 'excelHtml5',
                  text: 'Export',
                 }],
     
		"stateSave": true
    });
 
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#sms_id').click(function(){		
			$('#mail_form').attr('action','<?=base_url('admin/bulk_sms/');?>');			
			$('#sms_id').attr('type','submit');
		})
		$('#mail_id').click(function(){
			$('#mail_form').attr('action','<?=base_url('admin/bulk_email/');?>');	
		});
	});
</script>