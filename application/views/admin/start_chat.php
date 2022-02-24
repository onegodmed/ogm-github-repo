<style>
    :root {
  --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  --msger-bg: #fff;
  --border: 2px solid #ddd;
  --left-msg-bg: #ececec;
  --right-msg-bg: #579ffb;
}
.overlay-section1 {
    background: #000000b3;
    position: absolute;
    display: flex;
    width: 100%;
    height: 100vh;
    z-index: 9999;
}
.overlay-section2 {
    background: #000000b3;
    position: absolute;
    display: flex;
    width: 100%;
    height: 64px;
    z-index: 9999;
}
.msger-header-title .close{
    position: absolute;
    right: 17px;
    color: #fff;
    opacity: 1;
    font-size: 30px;
    top: 4px;
}
.footer {
    padding: 0px;
}
.msger {
  display: flex;
  flex-flow: column wrap;
  justify-content: space-between;
  width: 100%;
  margin: 35px 0px;
  height:550px;
  border: none;
  border-radius: 5px;
  background: var(--msger-bg);
  box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
  overflow:hidden;
  overflow-y:auto !important;
  position:relative;
  z-index: 999999;
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
  margin-bottom: 10px;
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
.msger-send-btn {
  margin-left: 10px;
  background:rgb(250, 136, 25);
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.23s;
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
.chat-design{padding:120px 0px 60px 0px;display:inline-block;width:100%;}
.overlay-chat {
    position: absolute;
    background: #00000094;
    width: 98%;
    min-height: 550px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index:999;
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
.page-wrapper:before{background:#000;position:absolute;}
 @media (max-width: 600px){
    .chat-design{padding:10px;}
    .msg-bubble {
    max-width: 250px;
    padding: 15px;
    border-radius: 15px;
    background: var(--left-msg-bg);
}
.overlay-chat {

    min-height: 80vh;
   
}
.overlay-chat p{
   padding:10px;
}
.msger {
    display: flex;
    flex-flow: column wrap;
    justify-content: space-between;
    width: 100%;
    margin: 40px 0px;
    height: 80vh;
    border: none;
    border-radius: 5px;
    background: var(--msger-bg);
    box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    overflow-y: auto !important;
}
}
.button-exce {
    background: #fe871e;
    margin: 10px;
    padding: 10px 20px;
    color: #fff;
    font-size: 22px;
    border-radius: 50px;
}
.new0{
    display:none;
}
</style>
    <div class="overlay-section1"></div>

<div class="page-wrapper">
<div class="container-fluid">
   <div class="col-md-12" >
<section class="msger">
  <header class="msger-header">
    <div class="msger-header-title">
      <i class="fas fa-comment-alt"></i> Live chat with <?php echo $user[0]->name;?>
         <button type="button" class="close" id="closechat" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="msger-header-options">
    </div>
  </header>
<div class="overlay-chat" style="display:none"><p id="finaltext">This Chat already completed. Thanks for chat with <?php echo $user[0]->name;?> </p><br><a href="<?= base_url()?>partner/" class="button-exce">Go to Dashboard</a></div>
  <main class="msger-chat">
    <?php if(count($chat) > 0){ $i = 0;foreach($chat as $val){
      if($val->to == $user[0]->id){
      ?>
    <div class="msg left-msg <?php echo "new".$i;$i++;?>">
      <div class="msg-img"
       style="background-image: url(<?= base_url()?>admin-assets/assets/images/users/<?php echo $user[0]->image;?>)"
      ></div>

      <div class="msg-bubble">
        <div class="msg-info">
          <div class="msg-info-name"><?php echo $user[0]->name;?></div>
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
<p id="chattype" style="display:none"><?php echo $user[0]->name;?> is typing...</p>
  <form class="msger-inputarea">
    <input type="text" class="msger-input msgtyping" placeholder="Enter your message...">
    <button type="submit" class="msger-send-btn">Send</button>
  </form>
  <p id="chaterrmsg" style="display:none;margin-left: 20px;"></p>
  	<audio id="chatAudio">
                    	    <source src="<?= base_url()?>front-assets/chat_audio/notify.ogg" type="audio/ogg">
                    	    <source src="<?= base_url()?>front-assets/chat_audio/notify.mp3" type="audio/mpeg">
                    	    <source src="<?= base_url()?>front-assets/chat_audio/notify.wav" type="audio/wav">
                    	    </audio>
</section>		
		</div> 
</div>

		</div>
		<div class="txtmsgaccept" style="display:none"><p></p></div>
		<script src="<?= base_url()?>admin-assets/assets/libs/jquery/dist/jquery.min.js"></script>
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
        } else if (citysearch.length < 1 ){
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
    var astro_id = "<?php echo $user[0]->id;?>";
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
$("#closechat").click(function () {
    window.location.href = "<?= base_url() ?>partner/chat_booking/";
});
});
function chatupdate(){
var order_id = "<?php echo $order_chat[0]->id;?>";
     $.ajax({
  url: '<?= base_url() ?>user/checkchatstus/', //php          
  data: {order_id: order_id,},
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.message == "Complete"){
             var chat_typing = 0;
             var cust_id = "<?php echo $this->session->userdata('id');?>";
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
             $('.overlay-chat').css('display','flex');
           // window.location.href = "<?= base_url() ?>partner/my_booking/";
         } else if(callDetails.message == "Cancel"){
            $('.overlay-chat').css('display','flex');
            $('.overlay-chat').html('<p id="finaltext">This Chat to cancelled.</p><br><a href="<?= base_url()?>partner/" class="button-exce">Go to Dashboard</a>');
         }
      }
    });
		}

    setInterval(chatupdate, 5000);
</script>
		<script>
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

// Icons made by Freepik from www.flaticon.com
const BOT_IMG = "<?= base_url()?>admin-assets/assets/images/users/<?php echo $user[0]->image;?>";
const PERSON_IMG = "<?= base_url()?>admin-assets/assets/images/users/<?php echo $this->session->userdata('image');?>";
const BOT_NAME = "<?php echo $user[0]->name;?>";
const PERSON_NAME = "<?php echo $this->session->userdata('name');?>";

msgerForm.addEventListener("submit", event => {
  event.preventDefault();

  const msgText = msgerInput.value;
  var cust_id = "<?php echo $this->session->userdata('id');?>";
  var astro_id = "<?php echo $user[0]->id;?>";
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
setTimeout(function () {botResponse();}, 4000);
function botResponse() {
    var order_id = "<?php echo $chat[0]->order_id;?>";
    var user_id = "<?php echo $user[0]->id;?>";
     $.ajax({
  url: '<?= base_url() ?>admin/chatdisplay/', //php          
  data: {order_id: order_id,user_id: user_id},
  dataType: 'json', //data format
  method: "POST",
  success: function (callDetails) {
         if(callDetails.status == 1){
             msgText = callDetails.message;
             $('#chatAudio')[0].play();
           appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
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
