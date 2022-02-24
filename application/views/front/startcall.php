<script type="text/javascript">
                function start_call(call_duration, callId) {
                    var totcall = call_duration;
var appid = 2222243;

var secret = "fea62939-0120-48db-a8f2-42105cdaf369";

var from = 914471316049;


var to = <?php echo $member[0]->mobile?>;

var cust_num = <?php echo $this->session->userdata('mobile')?>;
var call_Id = callId;
console.log(call_Id);
var duration = totcall*60;
console.log(duration);
var answer_url = "https://www.onegodmed.com/answerurl.php";
$('#audio').addClass('avoid-clicks');


var productDet = {
"duration": duration,
"cust_num": cust_num
};

var productDetails = {
"appid": appid,
"secret": secret,
"from": from,
"answer_url": answer_url,
"to": to
};

$.ajax({

type: 'POST',

contentType: "application/json",

url: "https://www.onegodmed.com/call.php",

data: JSON.stringify(productDet),

dataType: 'JSON',
success: function (response) {
                    $.ajax({

type: 'POST',

contentType: "application/json",

url: "https://piopiy.telecmi.com/v1/make_call",

data: JSON.stringify(productDetails),

dataType: 'JSON',
success: function (response) {
    setTimeout(function(){ update(); }, 50000);
    var request_id = response.data['request_id'];
    function update() {
    $.ajax({
        url: 'https://www.onegodmed.com/vivek.php', //php          
        data: "", //the data "caller=name1&&callee=name2"
        dataType: 'json', //data format   
        success: function (data) {
           if(data.message['to'] == to && data.message['status'] == "missed" && data.message['request_id'] == request_id){
               start_call(totcall, call_Id);
           } else if(data.message['to'] == to && data.message['status'] == "hangup"){
               start_call(totcall, call_Id);
           }
           if(data.message['duration'] < duration && data.message['request_id'] == request_id){
           var newduration = (duration - data.message['duration'])/60;
               start_call(newduration, call_Id);
           } else if(data.message['duration'] > duration && data.message['request_id'] == request_id){
               var status = "Complete";
               var astroName = '<?php echo $member[0]->name;?>';
                   $.ajax({
                        url: 'https://www.onegodmed.com/front/update_status', //php          
                        data: {
                            callId: call_Id,
                            status: status,
                            astroName: astroName
                        }, 
                        type: 'POST',
                        dataType: 'json', //data format   
                        success: function (data) {
                        if(data.status == 1){
                            window.location.href = 'https://www.onegodmed.com/talk-to-astrologers/';
                        }
                        }
                    });
           }
        }
    });
}

setInterval(update, 20000);
}

});
    }

});
 
}

</script>
<style>
    .avoid-clicks{
    pointer-events: none;
  cursor: default !important;
  background-color: #6c757df2 !important;
  border: 2px solid #6c757df2 !important;
}
</style>
<div class="ast_pagetitle">
  <div class="ast_img_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="page_title">
          <h2>Start Call</h2>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <ul class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>">home</a></li>
          <li>//</li>
          <li><a href="#">Start Call</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="ast_faq_wrapper ast_toppadder70 ast_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1">
			    <div class="highLight-text"> 
				<p>Your Booking has been done. Please click on Start Call , you will receive an instant call from <span class="bg-tm">  044-71316049 </span> on your registered mobile no.</p>
				
				<?php  if($check_services){

if($member[0]->status == "Online" AND  $check_services[0]->is_Active  == "Accept"){

?>
<?php if($check_services[0]->call_type == 'Audio'){ ?>
<p class="h-txt">Your total call time is  <?php echo str_replace('Min', '', $check_services[0]->call_duration)+1?> Minutes and your first minute absolute free.</p>
<button class="btn btn-primary" onclick="start_call(<?php echo str_replace('Min', '', $check_services[0]->call_duration)+1?>, <?php echo $check_services[0]->id;?>);" id="audio" style="background:green">Start Audio call</button>
<?php }elseif ($check_services[0]->call_type == 'Video') {  
?>
<p class="h-txt">Your total call time is  <?php echo str_replace('Min', '', $check_services[0]->call_duration)?> Minutes.</p>
<a class="btn btn-primary" href="<?php echo base_url('admin/video_Call/'.$check_services[0]->id)?>" target="_blank" style="background:green">Start Video Call</a>
<?php }}}?>
</div>
			</div>
		</div>
	</div>
</div>
<style>
@media only screen and (max-width: 768px) {

.highLight-text p {
    font-size: 16px;
    margin-bottom: 30px;
    line-height: 50px;
}


}
</style>