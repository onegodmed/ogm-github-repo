<div class="container form-one">
  <div class="developer-name-sec">
    <h4><?=ucfirst($user->first_name).' '.$user->last_name;?></h4>
  </div>
    <div class="card">
        <div class="card-header">
            <strong>Interview video</strong> 
        </div>
        <form action="<?= base_url('admin/add_interview_video/'.$developer_id) ?>" method="POST" class="form-horizontal" id="interview_videoForm">
            <div class="card-body card-block" style="background-color: #bcbcbd;">
                  <div id="wistia_uploader" style="height:360px;"></div>                
            </div>
            <input type="hidden" class="form-control" name="file_name" value="<?php echo $file_name ?>" readonly required>
			<input type="hidden" class="form-control" name="is_video_uploaded" value="" readonly required>
            <!--<div class="card-body card-block">            
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">File Name</label></div>
                    <div class="col-12 col-md-9"><input type="text" class="form-control" name="file_name" value="<?php echo $file_name ?>" readonly></div>
                </div>
            </div>
			
			
            <div class="card-body card-block">            
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Developer Name</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" value="<?= $description ?>" name="developer_id"></div>
                </div>
            </div>-->
			<div class="card-body card-block">            
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Name of interviewer</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" value="Lakshmi Kodali" name="interviewer_name" required></div>
                </div>
            </div>
			<div class="card-body card-block">            
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Position</label></div>
                    <div class="col-12 col-md-9">
                        <input type="text" class="form-control" value="CEO at MyRemoteDevelopers" name="position" required></div>
                </div>
            </div>
			
			<div class="card-body card-block">            
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Skills</label></div>
                    <div class="col-12 col-md-9">
					<select name="skill[]"  required class="techno-data-ajax required ">
						
					</select>
					
						</div>
                </div>
            </div>
            
            <div class="card-footer">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit">
                <!--<input type="submit" name="submit" class="btn btn-primary btn-sm" value="Submit & Uploed More">
                <a class="btn btn-primary btn-sm " href="<?php echo base_url('admin/edit_profile/'.$developer_id)?>" role="button">Back</a>
                 <button type="reset" class="btn btn-danger btn-sm">
                  <i class="fa fa-ban"></i> Reset
                </button> -->
            </div>
        </form>

    </div>
</div> 



<div class="container form-one">
  <div class="row">
    
 
    <?php  $i=0;
foreach ($interview as $key => $value) { 
$exp_sk = count(explode(',', $value->skill, 2)); ?>
    
    <div class="col-md-4 full-cols-md">
      <div class="interview-vdo-block">
        
  			<span class="wistia_embed wistia_async_<?php echo $value->hashed_id;?> popover=true popoverAnimateThumbnail=true" style="display:inline-block;height:120px;width:100%">&nbsp;</span>
        <p>Interviewer: <?php echo $value->interviewer_name;?></p>
        <p class="status-p">(<?php echo $value->position;?>)</p>
    <span title="Skills" data-toggle="popover" data-content="<?=@end((explode(',', $value->skill, 2)));?>" data-placement="top"><?=($exp_sk > 1)?strtok($value->skill, ',').'...':strtok($value->skill, ',');?></span>
  		</div>		    
    </div>
    <?php   $i++ ;
                        if($i=='3'){ echo '<div style="clear: both;"></div>';  $i=0;};
                      } ?>
  </div>	
</div>
 

<script src="<?= base_url() ?>assets/js/select2.min.js"></script>

<script>
// TECHNOLOGIES Used without skill id
	$(".techno-data-ajax").select2({
		placeholder: "Skill",
        multiple: true,		
		ajax: {
		url: '<?= base_url('developer/ajax_AllTechUsed/') ?>',
		dataType: 'json',
		data: function (params) {
		  var query = {
			tech: params.term
		  }	
		  return query;
		}, 
		processResults: function (data) { 
			return {
			results: data
			};
		},
		    cache: true
		}
	});
	
	$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});


$( "#interview_videoForm" ).submit(function( event ) {
	if($('input[name="is_video_uploaded"]').val().length > 1){
		$( "#interview_videoForm" ).submit();  
	}else{
		alert( "Please upload video" );
        event.preventDefault();
	}
});

</script>
<script src="//fast.wistia.com/assets/external/api.js" async></script>
<link rel="stylesheet" href="//fast.wistia.com/assets/external/uploader.css" />
<!--<div class="text-center">
    
</div>-->

<script>
    window._wapiq = window._wapiq || [];
    _wapiq.push(function (W) {
        window.wistiaUploader = new W.Uploader({
            accessToken: "f3fb2835422717782a26c4203a5ac2b4ca5ce7569d92c4c23dc16705f2935609",
            dropIn: "wistia_uploader",
            projectId: "l8gx4t73fj",
            //    videoExtensions: 'mp4 avi wmv'
            theme: 'dark_background',
//     onBeforeUnload: false //Set onBeforeUnload to a string, or a function that returns a string, to define a custom message. Set to false if you want to disable the warning entirely.
            onBeforeUnload: '"Are you sure you wish to leave the page? Any active uploads will be lost."',
            beforeUpload: function () {
                wistiaUploader.setFileName('<?php echo $file_name ?>');

            }

        });
		 
		 wistiaUploader.bind('uploadsuccess', function(file, media) {
			 $('input[name="is_video_uploaded"]').val('uploaded');		  
		});

    });
	
	
</script>

<!--button for upload-->
<!--
<script src="//fast.wistia.com/assets/external/api.js" async></script>
<link rel="stylesheet" href="//fast.wistia.com/assets/external/uploader.css" />

<div id="wistia_upload_button_button_only" alt="Upload Video"></div>

<script>
window._wapiq = window._wapiq || [];
_wapiq.push(function(W) {
  window.wistiaUploaderButtonOnly = new W.Uploader({
    accessToken: "f3fb2835422717782a26c4203a5ac2b4ca5ce7569d92c4c23dc16705f2935609",
    button: "wistia_upload_button_button_only",
    projectId: "l8gx4t73fj",
    //    videoExtensions: 'mp4 avi wmv'
            theme: 'dark_background',
//             onBeforeUnload: false,//Set onBeforeUnload to a string, or a function that returns a string, to define a custom message. Set to false if you want to disable the warning entirely.
             onBeforeUnload: '"Are you sure you wish to leave the page? Any active uploads will be lost."'
  });
});
</script>-->



<!--<div id="wistia_l8gx4t73fj" class="wistia_embed" style="width:640px;height:480px;" data-video-width="640" data-video-height="480">&nbsp;</div>
<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/playlist-v1.js"></script>
<script>
wistiaPlaylist = Wistia.playlist("l8gx4t73fj", {
  version: "v1",
  theme: "tab",
  videoOptions: {
    volumeControl: true,
    playerColor: "54bbff",
    autoPlay: true,
    videoWidth: "640",
    videoHeight: "480",
    inlineOptionsOnly: true,
    version: "v1"
  },
  videoFoam: "true",
  media_0_0: {
    autoPlay: false,
    controlsVisibleOnLoad: false
  },
  plugin: {
    "requireEmail-v1": {
      topText: "you can view this video after login"
    }
  }
});
</script>-->