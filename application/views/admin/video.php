<?php if($this->session->userdata('user_type') == 'Astrologer'){?>
<div style="display: none;" id="panel">
<iframe src="https://tokbox.com/embed/embed/ot-embed.js?embedId=59e789a6-c4db-405d-b6e1-21dedb18aadc&room=<?php echo $token[0]->service_type?>&iframe=true" width=800 height=640 scrolling="auto" allow="microphone; camera" ></iframe>
</div>
    <?php }else{?>
<div style="display: none;" id="panel">
	<iframe src="https://tokbox.com/embed/embed/ot-embed.js?embedId=59e789a6-c4db-405d-b6e1-21dedb18aadc&room=<?php echo $token[0]->service_type?>&iframe=true" width=800 height=640 scrolling="auto" allow="microphone; camera" ></iframe>
</div>
<?php }?>
<div id="mycounter" id="mycounter"></div>
<button class="btn btn-primary" onclick="onTimer()" id="start_call">Start Video Call</button>
<script type="text/javascript">
    	i = <?php echo str_replace('Min', '', $token[0]->call_duration)?>*60;
function onTimer() {
  document.getElementById("panel").style.display = "block";
   document.getElementById("start_call").style.display = "none";
  document.getElementById('mycounter').innerHTML = i;
  i--;
  if (i < 0) {
      window.location.href = "<?php echo  base_url('admin/distroy_session/'.$token[0]->id)?>";
  }
  else {
    setTimeout(onTimer, 1000);
  }
}	
   
</script>
