<style>
    :root {
  --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  --msger-bg: #fff;
  --border: 2px solid #ddd;
  --left-msg-bg: #ececec;
  --right-msg-bg: #579ffb;
}
.modal-header p{
    font-size: 12px;
    margin-bottom: 0px;
}
.chat-text1{padding: 30px;
    text-align: center;}
.inner-clock{position:relative;}
.inner-clock img{width:77px;}
.inner-clock time{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);}
.timer-clock {
    position: absolute;
    top: 40px;
    width: 143px;
}
#pe-widget-bell{
    display: none;
}
.example {
    position: absolute;
    top: 54%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}
.modal-header {
    padding: 9px;
    border-bottom: 1px solid #e5e5e5;
    background: #f77403;
    color: #fff;
}
.modal-header h4{
    color: #fff;
    font-size:25px;
}
.modal-body {
    position: relative;
    padding: 0px;
    border-radius: 0px;
}
.msger {
  display: flex;
  flex-flow: column wrap;
  justify-content: space-between;
  width: 100%;
  height: 450px;
  border: none;
  border-radius: 0px;
  background: var(--msger-bg);
  box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
  overflow:hidden;
  overflow-y:auto !important;
  position: relative;
}

.msger-header {
  display: flex;
  justify-content: space-between;
  padding: 10px;
  border-bottom: var(--border);
  background: #fa8819;
  color: #fff;
}

.msger-chat {
  flex: 1;
  overflow-y: auto !important;height:492px;
}
.msger-chat::-webkit-scrollbar {
  width: 6px;
}
.msger-chat::-webkit-scrollbar-track {
  background: #ddd;
}
.msger-chat::-webkit-scrollbar-thumb {
  background: #bdbdbd;
}
.msg {
    display: flex;
    align-items: flex-end;
    margin-bottom: 10px;
    margin-top: 10px;
    margin-left: 10px;
    margin-right: 10px;
}

.msg-img {
  width: 50px;
  height: 50px;
  margin-right: 10px;
  background: #ddd;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  border-radius: 50%;
}
button#chatend {
    background: #f77403;
    color: #fff;
    border: 1px solid #f77403;
}
#chatConfirmModal .close{position: absolute;
    right: 17px;
    top: 5px;
    font-size: 39px;
    color: #fff;
    opacity: 1;}
.msg-bubble {
  max-width: 450px;
  padding: 15px;
  border-radius: 15px;
  background: var(--left-msg-bg);
}
.msg-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 5px;
}
.msg-info-name {
  margin-right: 10px;
  font-weight: bold;
}
.msg-info-time {
  font-size: 0.85em;
}

.left-msg .msg-bubble {
  border-bottom-left-radius: 0;
}

.right-msg {
  flex-direction: row-reverse;
}
.right-msg .msg-bubble {
  background: #fa8819;
  color: #fff;
  border-bottom-right-radius: 0;
}
.right-msg .msg-img {
  margin: 0 0 0 10px;
}

.msger-inputarea {
  display: flex;
  padding: 10px;
  border-top: var(--border);
  background: #eee;
}
.msger-inputarea * {
  padding: 10px;
  border: none;
  border-radius: 3px;
  font-size: 1em;
}
.msger-input {
  flex: 1;
  background: #ddd;
}
button.chatend {
    margin-bottom: 5px;
}
.msger-send-btn {
  margin-left: 10px;
  background:rgb(250, 136, 25);
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.23s;
     padding: 12px 21px;
    margin: 0px 6px;
    border: none;

}
.msger-send-btn:hover {
  background:#333;
}

.msger-chat {
  background-color: #fcfcfe;
    
}
main.msger-chat {
    overflow: hidden;
}
.chat-design{display:inline-block;width:100%;}
.overlay-chat {
    position: absolute;
    background: #00000094;
    width: 100%;
    min-height: 450px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index:1;
}

.overlay-chat p{
    color: #fff;
    font-size: 20px;
    font-weight: 600;text-align:center;
}
.overlay-chat p span {
    color: #fa8819;
    font-weight: bolder;
}
main.msger-chat {
    position: relative;
}
 @media (max-width: 600px){
     .modal-title{font-size:16px!important;margin-bottom:6px;}
     .modal-header p{
    font-size: 9px;
    margin-bottom: 0px;
}
     #startchatModal .modal-dialog{margin:0px;}
    .chat-design{padding:10px;}
    .msg-bubble {
    max-width: 250px;
    padding: 15px;
    border-radius: 15px;
    background: var(--left-msg-bg);
}
.overlay-chat {
    position: absolute;
    background: #00000094;
    width: 100%;
    min-height: 68vh;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
}
.overlay-chat p {
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    text-align: center;
}
.timer-clock {
    position: absolute;
    top: 0px;
    width: 85px;
    font-size: 11px;
    font-weight: 600;
}
.overlay-chat p{
   padding:0px;
}
.inner-clock img {
    width: 50px;
}
.chat-text1 {
    padding: 22px;
    text-align: center;
}
.msger {
    display: flex;
    flex-flow: column wrap;
    justify-content: space-between;
    width: 100%;
    height:68vh;
    border: none;
    border-radius: 5px;
    background: var(--msger-bg);
    box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    overflow-y: auto !important;
}
.msg-bubble {
    background: #909090;
    color: #fff;
    border-bottom-right-radius: 0;
    font-size: 10px;
}
div#tawkchat-minified-wrapper{display:none!important;}
#chatConfirmModal .close {
    position: absolute;
    right: 17px;
    top: 5px;
    font-size: 30px;
    color: #fff;
    opacity: 1;
}
#tMe1sN1-1589367986438{
    display:none!important;
}
#pe-widget-bell{
    display:none!important;
}
}
#tMe1sN1-1589367986438{
    display:none!important;
}
#pe-widget-bell{
    display:none!important;
}
</style>
<script>
window.addEventListener("beforeunload", function (e) {
    upd();
    var confirmationMessage = 'It looks like you have been editing something. '
                            + 'If you leave before saving, your changes will be lost.';

    (e || window.event).returnValue = confirmationMessage; //Gecko + IE
    return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
});

	function upd(){
	 console.log("beforeUnload event!");
	 var order_id = "<?php echo $chat[0]->order_id;?>";
	 //console.log(order_id);
	 localStorage.setItem("chatlivestatus", 'Complete');
	$.ajax({
	     url: '<?= base_url() ?>user/chatending/', //php          
  data: {order_id: order_id},
  method: "POST",
  success: function (callDetails) {
         console.log(order_id);
      }
	   });
	}
</script>
<div class="modal" id="chatConfirmModal"  style="background:#000000a1;z-index: 99999999999;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label class="text-center" style="display: block;
    padding: 14px;
    font-size: 17px;">Do you really want to close this session.</label>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Resume</button>
                 <button type="button" id="chatend" class="btn btn-default" >Complete</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="startchatModal" style="display:block !important;background:#000000a1;z-index: 99999999;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Live chat with Astrologer <?php echo $astro[0]->name;?></h4>
                <p>Note: Please do not refresh or back until your chat completed. </p>
<p>Please Press END button to Complete and close your Chat.</p> 
            </div>

            <!-- Modal body -->
            <div class="modal-body">
<div class="chat-design">

<div>
<section class="msger">
<div class="overlay-chat"><div class="chat-text1"><p id="txtmsgchat">Please wait, <span> <?php echo $astro[0]->name;?> </span> will accept your Chat request in<label class="inner-clock"><img src="<?= base_url() ?>front-assets/images/clock1.png"><time id="acceptTimeLeft" val="">04:00</time></label> minutes. If does not accept , Please choose another astrologer to chat.<button type="button" id="cancelchat" class="msger-send-btn">Cancel Chat</button></p></div>
</div>
  <main class="msger-chat">
       <?php if(count($chat) > 0){ $i = 0;foreach($chat as $val){
      if($val->to == $astro[0]->id){
      ?>
    <div class="msg left-msg <?php echo "new".$i;$i++;?>">
      <div class="msg-img"
       style="background-image: url(<?= base_url()?>admin-assets/assets/images/users/<?php echo $astro[0]->image;?>)"
      ></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name"><?php echo $astro[0]->name;?></div>
          <div class="msg-info-time"><?php echo $val->time;?></div>
        </div>

        <div class="msg-text">
          <?php echo $val->message;?>
        </div>
      </div>
    </div>
    <?php }else  if($val->to == $this->session->userdata('id')){?>
    <div class="msg right-msg">
      <div class="msg-img"
       style="background-image: url(<?= base_url()?>admin-assets/assets/images/users/<?php echo $this->session->userdata('image');?>)"
      ></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name"><?php echo $this->session->userdata('name');?></div>
          <div class="msg-info-time"><?php echo $val->time;?></div>
        </div>

        <div class="msg-text">
          <?php echo $val->message;?>
        </div>
      </div>
    </div>
    <?php }}}?>
  </main>
<p id="chattype" style="display:none"><?php echo $astro[0]->name;?> is typing...</p>
  <form class="msger-inputarea">
    <input type="text" class="msger-input msgtyping" placeholder="Enter your message...">
    <button type="submit" class="msger-send-btn">Send</button>
  </form>
  <p id="chaterrmsg" style="display:none;margin-left: 20px;"></p>
  <button type="button" data-toggle="modal" data-target="#chatConfirmModal" class="msger-send-btn chatend" style="display:none">End Chat</button>
  <div class="timer-clock">
  <img src="<?= base_url() ?>front-assets/images/clock.png">
  <div class="example">
                        <div id="timeLeft" val=""><?php if(@$order_chat[0]->is_Active != "Complete"){ echo @$order_chat[0]->call_duration + 1; } else{ echo @$order_chat[0]->call_duration; }?></div> <?php if(@$order_chat[0]->is_Active != "Complete"){ ?>Minutes <?php }?>
                    </div>
                    </div>
                    	<audio id="chatAudio">
                    	    <source src="<?= base_url()?>front-assets/chat_audio/notify.ogg" type="audio/ogg">
                    	    <source src="<?= base_url()?>front-assets/chat_audio/notify.mp3" type="audio/mpeg">
                    	    <source src="<?= base_url()?>front-assets/chat_audio/notify.wav" type="audio/wav">
                    	    </audio>
</section>		
		</div>
		</div>
	</div>
        </div>
    </div>
</div>
// <script>
//      localStorage.removeItem("runningchatVal");
// </script>
		<?php if($order_chat[0]->is_Active == "Running"){?>
<script>
var preInterval = '';
function chatupdate(){
var order_id = "<?php echo $chat[0]->order_id;?>";
     $.ajax({
  url: '<?= base_url() ?>user/checkchatstus/', //php          
  data: {order_id: order_id,},
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
      localStorage.setItem("chatlivestatus", callDetails.message);
         if(callDetails.status == 1 && callDetails.message == "Accept"){
             console.log(preInterval);
         clearInterval(preInterval);
            $('.overlay-chat').css('display', 'none');
            $('.chatend').css('display', 'block');
         } else if(callDetails.message == "Complete"){
             window.location.href = "<?= base_url() ?>chat-with-astrologer/";
             $('.overlay-chat').css('display', 'flex');
             $('#txtmsgchat').html('Your chat completed please generate new booking <a href="<?= base_url() ?>chat-with-astrologer/">Click Here</a>');
         } else{
             if($('#acceptTimeLeft').attr("val") == "") {
                console.log(localStorage.getItem("runningchatVal"));
                if(localStorage.getItem("runningchatVal") != null){
                    var fiveMinutes = localStorage.getItem("runningchatVal"),
                    display = document.querySelector('#acceptTimeLeft');
                     localStorage.removeItem("runningchatVal");
                }else{
                    var fiveMinutes = (60 * 4),
                    display = document.querySelector('#acceptTimeLeft');
                }
            acceptstartTimer(fiveMinutes, display);
            $("#acceptTimeLeft").attr("val",'4');
            localStorage.removeItem("runningchatVal");
            }
            localStorage.removeItem("runningchatVal");
         }
      }
    });
		}
    setInterval(chatupdate, 4000);
    function acceptstartTimer(duration, display) {
    var timer = duration, minutes, seconds;
    preInterval = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = minutes + ":" + seconds;
        
        localStorage.setItem("runningchatVal", timer);
        if (--timer < 0) {
            timer = duration;
                var order_id = "<?php echo $chat[0]->order_id;?>";
    $.ajax({
  url: '<?= base_url() ?>user/chatcancel/', //php          
  data: {order_id: order_id,},
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.status){
             localStorage.removeItem("runningchatVal");
            window.location.href = "<?= base_url() ?>chat-with-astrologer/";
         }
      }
    });
        }
    }, 1000);
}
</script>
<?php }else if($order_chat[0]->is_Active == "Complete"){?>
<script>
    $('.overlay-chat').css('display', 'flex');
    $('#txtmsgchat').html('Your chat completed please generate new booking <a href="<?= base_url() ?>chat-with-astrologer/">Click Here</a>');
</script>
<?php }else if($order_chat[0]->is_Active == "Cancel"){?>
<script>
    $('.overlay-chat').css('display', 'flex');
    $('#txtmsgchat').html('Your chat Cancelled please generate new booking <a href="<?= base_url() ?>chat-with-astrologer/">Click Here</a>');
</script>
<?php }else{?>
<script>
   $('.overlay-chat').css('display', 'none');
           // console.log("vivek");
            $('.chatend').css('display', 'block');
          // console.log("vivek1");
            if($('#timeLeft').attr("val") == "") {
                console.log(localStorage.getItem("chatTimerVal"));
                if(localStorage.getItem("chatTimerVal") != null){
                    var fiveMinutes = localStorage.getItem("chatTimerVal"),
                    display = document.querySelector('#timeLeft');
                     localStorage.removeItem("chatTimerVal");
                }else{
                    var fiveMinutes = (60 * <?php echo $order_chat[0]->call_duration+1; ?>)-10,
                    display = document.querySelector('#timeLeft');
                }
            startTimer(fiveMinutes, display);
            $("#timeLeft").attr("val",<?php echo $order_chat[0]->call_duration+1; ?>);
            }
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
localStorage.setItem("chatTimerVal", timer);
        display.textContent = minutes + ":" + seconds;
        if (--timer < 0) {
            timer = duration;
                var order_id = "<?php echo $chat[0]->order_id;?>";
                localStorage.setItem("chatlivestatus", 'Complete');
    $.ajax({
  url: '<?= base_url() ?>user/chatending/', //php          
  data: {order_id: order_id,},
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.status){
            window.location.href = "<?= base_url() ?>chat-with-astrologer/";
         }
      }
    });
        }
    }, 1000);
}
</script>
<?php }?>
<?php if($order_chat[0]->is_Active != "Cancel"){?>
<script>
$(document).ready(function () {
    $(".msgtyping").on('keyup paste', function () {
        var cust_id = "<?php echo $this->session->userdata('id');?>";
        var citysearch = $(this).val();
        if (citysearch.length == 1) {
            var chat_typing = 1;
             $.ajax({
  url: '<?= base_url() ?>user/updatetypingstatus/', //php          
  data: {cust_id: cust_id, chat_typing: chat_typing},
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.status){
         }
      }
    });
        } else  if (citysearch.length < 1) {
           // alert('vivek');
            var chat_typing = 0;
            $.ajax({
  url: '<?= base_url() ?>user/updatetypingstatus/', //php          
  data: {cust_id: cust_id, chat_typing: chat_typing},
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.status){
         }
      }
    });
    }
});
function checktyping() {
    var astro_id = "<?php echo $astro[0]->id;?>";
     $.ajax({
  url: '<?= base_url() ?>user/checktyping/', //php          
  data: {
      astro_id: astro_id
  },
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.message == 1){
             $('#chattype').css('display','block');
         } else{
            $('#chattype').css('display','none'); 
         }
      }
    });
}
setInterval(checktyping, 2000);
$("#chatend").click(function () {
    localStorage.setItem("chatlivestatus", 'Complete');
    var order_id = "<?php echo $chat[0]->order_id;?>";
    $.ajax({
  url: '<?= base_url() ?>user/chatending/', //php          
  data: {order_id: order_id,},
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.status){
             $("#chatConfirmModal").modal('hide');
            window.location.href = "<?= base_url() ?>chat-with-astrologer/";
         }
      }
    });
});
$("#cancelchat").click(function () {
    var order_id = "<?php echo $chat[0]->order_id;?>";
    $.ajax({
  url: '<?= base_url() ?>user/chatcancel/', //php          
  data: {order_id: order_id,},
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.status){
             localStorage.removeItem("runningchatVal");
            window.location.href = "<?= base_url() ?>chat-with-astrologer/";
         }
      }
    });
});
});
		    const msgerForm = get(".msger-inputarea");
const msgerInput = get(".msger-input");
const msgerChat = get(".msger-chat");

const BOT_MSGS = [
  "Hi, how are you?",
  "Ohh... I can't understand what you trying to say. Sorry!",
  "I like to play games... But I don't know how to play!",
  "Sorry if my answers are not relevant. :))",
  "I feel sleepy! :("
];

const BOT_IMG = "<?= base_url()?>admin-assets/assets/images/users/<?php echo $astro[0]->image;?>";
const PERSON_IMG = "<?= base_url()?>admin-assets/assets/images/users/<?php echo $this->session->userdata('image');?>";
const BOT_NAME = "<?php echo $astro[0]->name;?>";
const PERSON_NAME = "<?php echo $this->session->userdata('name');?>";

msgerForm.addEventListener("submit", event => {
  event.preventDefault();

  const msgText = msgerInput.value;
  var cust_id = "<?php echo $this->session->userdata('id');?>";
  var astro_id = "<?php echo $astro[0]->id;?>";
  var order_id = "<?php echo $chat[0]->order_id;?>";
  if (!msgText) return;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     if (filter.test(msgText)) {
       //alert('Please provide a valid email address');
       $("#chaterrmsg").css('display', 'block');
       $("#chaterrmsg").css('color', 'red');
       $("#chaterrmsg").text("You can't send this type of message.");
       return false;
    }else{
        $("#chaterrmsg").css('display', 'none');
    }
    var regPh = /^\d*$/;
    if (regPh.test(msgText)) {
          $("#chaterrmsg").css('display', 'block');
          $("#chaterrmsg").css('color', 'red');
          $("#chaterrmsg").text("You can't send this type of message.");
            return false;
        }
  $.ajax({
  url: '<?= base_url() ?>user/chatsend/', //php          
  data: {msgText: msgText, cust_id: cust_id, astro_id: astro_id, order_id: order_id,},
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.status){
            appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
            msgerInput.value = "";
            botResponse();
         }
      }
    });
  

  
});

function appendMessage(name, img, side, text) {
  //   Simple solution for small apps
  const msgHTML = `
    <div class="msg ${side}-msg">
      <div class="msg-img" style="background-image: url(${img})"></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name">${name}</div>
          <div class="msg-info-time">${formatDate(new Date())}</div>
        </div>

        <div class="msg-text">${text}</div>
      </div>
    </div>
  `;

  msgerChat.insertAdjacentHTML("beforeend", msgHTML);
  msgerChat.scrollTop += 500;
}
function botResponse() {
    var order_id = "<?php echo $chat[0]->order_id;?>";
    var astro_id = "<?php echo $astro[0]->id;?>";
     $.ajax({
  url: '<?= base_url() ?>user/chatdisplay/', //php          
  data: {
      order_id: order_id,
      astro_id: astro_id
  },
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.status == 1){
             msgText = callDetails.message;
             $('#chatAudio')[0].play();
           appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
            if($('#timeLeft').attr("val") == "") {
                console.log(localStorage.getItem("chatTimerVal"));
                if(localStorage.getItem("chatTimerVal") != null){
                    var fiveMinutes = localStorage.getItem("chatTimerVal"),
                    display = document.querySelector('#timeLeft');
                     localStorage.removeItem("chatTimerVal");
                }else{
                    var fiveMinutes = (60 * <?php echo $order_chat[0]->call_duration+1; ?>)-10,
                    display = document.querySelector('#timeLeft');
                }
            startTimer(fiveMinutes, display);
            $("#timeLeft").attr("val",<?php echo $order_chat[0]->call_duration+1; ?>);
            localStorage.removeItem("chatTimerVal");
            }
            localStorage.removeItem("chatTimerVal");
           var msgId = callDetails.msgId;
                $.ajax({
  url: '<?= base_url() ?>user/updatemsgstatus/', //php          
  data: {
      msgId: msgId,
  },
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
      }
    });
         }
      }
    });
}
setInterval(botResponse, 5000);
 function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
        localStorage.setItem("chatTimerVal", timer);
        if (--timer < 0) {
            timer = duration;
            var order_id = "<?php echo $chat[0]->order_id;?>";
            localStorage.setItem("chatlivestatus", 'Complete');
    $.ajax({
  url: '<?= base_url() ?>user/chatending/', //php          
  data: {order_id: order_id,},
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.status){
            window.location.href = "<?= base_url() ?>chat-with-astrologer/";
         }
      }
    });
        }
    }, 1000);
}
// Utils
function get(selector, root = document) {
  return root.querySelector(selector);
}

function formatDate(date) {
  const h = "0" + date.getHours();
  const m = "0" + date.getMinutes();

  return `${h.slice(-2)}:${m.slice(-2)}`;
}

function random(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}

		</script>
<?php }?>
