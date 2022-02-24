<script type="text/javascript">
 
 $(window).bind("beforeunload", function() { 
    var message = 'Important: Please click on \'Save\' button to leave this page.';
    if (typeof event == 'undefined') {
        event = window.event;
    }
   
    if (event) {
        event.returnValue = message;
    }
    return message;
});
//WIndow Close & Reload Function-------------------END

 

</script>
<style>
button.btn.joinchecK {
    background-color: #fa8819;
}
button#chatend {
    background: #f77403;
    color: #fff;
    border: 1px solid #f77403;
}
button.chatend {
    margin-bottom: 5px;
}
</style>
<div class="modal" id="chatConfirmModal"  style="background:#000000a1;z-index: 99999999999;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you sure?</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label class="text-center" style="display: block;
    padding: 14px;
    font-size: 17px;">You really want to end this chat?</label>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Resume</button>
                 <button type="button" id="chatend" class="btn btn-default" >Complete</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="leaveQConfirmModal"  style="background:#000000a1;z-index: 99999999999;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you sure?</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label class="text-center" style="display: block;
    padding: 14px;
    font-size: 17px;">You really want to leave this queue?</label>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Resume</button>
                 <button type="button" id="chatend" class="btn btn-default" >Leave Queue</button>
            </div>
        </div>
    </div>
</div>
<!-- chat modal start -->
<div class="modal chating" id="chat" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
         </div>
         <!-- Modal body -->
         <div class="modal-body">
               <div class="overlay-chat">
                  <div class="chat-text1">
                     <p id="txtmsgchat">Please wait, <span> <?php echo $astro[0]->name;?> </span> will accept your Chat request in <label class="inner-clock">
                        <time id="acceptTimeLeft" val="">01:00</time>
                     </label> minutes. If does not accept , Please choose another astrologer to chat.
                     <button class="btn joinchecK"  data-toggle="modal" data-target="#leaveQConfirmModal" style="display:none;">Leave Queue</button>
                     <!-- <button class="btn"  data-toggle="modal" data-target="#chatConfirmModal">Cancel Chat</button> -->
                  </p>
                  </div>
               </div>
            <div class="container-fluid h-100">
               <div class="row justify-content-center h-100">
                  <div class="col-md-12 p-0 col-xl-10 chat"img_cont_msg>
                     <div class="card">
                        <div class="card-header msg_head">
                           <div class="d-flex bd-highlight">
                              <div class="d-flex justify-content-start align-items-center">
                                 <div class="img_cont_msg">
                                    <img src="<?php echo base_url(); ?>front-assets/images/chatclock.png" class="rounded-circle user_img_msg">
                                 </div>
                                 <div class="timing" id="timeLeft" val="">
                                 <?php if(@$order_chat[0]->is_Active != "Complete"){ echo @$order_chat[0]->call_duration + 1; } else{ echo @$order_chat[0]->call_duration; }?></div> <?php if(@$order_chat[0]->is_Active != "Complete"){ ?>Min<?php }?>
                                 </div>
                              </div>
                              <div class="username-wrap">
                                 <div class="img_cont">
                                    <img src="<?php echo base_url(); ?>front-assets/images/chat-icon.png" class="rounded-circle user_img">
                                    <!-- <span class="online_icon"></span> -->
                                 </div>
                                 <div class="user_info">
                                    <span class="date"><?php echo date("d/m/y")?></span>
                                    <!-- <p class="time"></p> -->
                                 </div>
                                 <div class="chat-person d-flex">
                                    <p><span><?php echo $astro[0]->name;?></span><span><?php echo $order_chat[0]->booking_no;?></span></p>
                                    <span><a href=""><i class="fa fa-refresh"></i></a></span> 
									<button class="btn"  data-toggle="modal" data-target="#chatConfirmModal" >End Chat</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body msg_card_body" id="chtcntr">
                           <!-- <div class="d-flex justify-content-end mb-4 lastchat">
                              <div class="follow btn-style1"><button class="btn shadow">Refer Last chat</button></div>
                              </div> -->
                           <div class="d-flex justify-content-end mb-4">
                              <div class="msg_cotainer_send" >
                                 Hi Khalid i am good tnx how about you?
                                 <span class="msg_time_send">8:55 AM, Today</span>
                                 <div class="tail">
                                    <img src="<?php echo base_url(); ?>front-assets/images/tail.jpg">
                                 </div>
                              </div>
                              <div class="img_cont_msg">
                                 <img src="<?php echo base_url(); ?>front-assets/images/right.jpg" class="rounded-circle user_img_msg">
                              </div>
                           </div>
                           <div class="d-flex justify-content-start mb-4">
                              <div class="img_cont_msg">
                                 <img src="<?php echo base_url(); ?>front-assets/images/left.jpg" class="rounded-circle user_img_msg">
                              </div>
                              <div class="msg_cotainer">
                                 I am good too, thank you for your chat template
                                 <span class="msg_time">9:00 AM, Today</span>
                              </div>
                           </div>
                           <div class="d-flex justify-content-end mb-4">
                              <div class="msg_cotainer_send">
                                 You are welcome
                                 <span class="msg_time_send">9:05 AM, Today</span>
                              </div>
                              <div class="img_cont_msg">
                                 <img src="<?php echo base_url(); ?>front-assets/images/right.jpg" class="rounded-circle user_img_msg">
                              </div>
                           </div>
                           <div class="d-flex justify-content-start mb-4">
                              <div class="img_cont_msg">
                                 <img src="<?php echo base_url(); ?>front-assets/images/left.jpg" class="rounded-circle user_img_msg">
                              </div>
                              <div class="msg_cotainer">
                                 I am looking for your next templates
                                 <span class="msg_time">9:07 AM, Today</span>
                              </div>
                           </div>
                           <div class="d-flex justify-content-end mb-4">
                              <div class="msg_cotainer_send">
                                 Ok, thank you have a good day
                                 <span class="msg_time_send">9:10 AM, Today</span>
                              </div>
                              <div class="img_cont_msg">
                                 <img src="<?php echo base_url(); ?>front-assets/images/right.jpg" class="rounded-circle user_img_msg">
                              </div>
                           </div>
                           <div class="d-flex justify-content-start mb-4">
                              <div class="img_cont_msg">
                                 <img src="<?php echo base_url(); ?>front-assets/images/left.jpg" class="rounded-circle user_img_msg">
                              </div>
                              <div class="msg_cotainer">
                                 Bye, see you
                                 <span class="msg_time">9:12 AM, Today</span>
                              </div>
                           </div>
                        </div>
                       
                           <div class="input-group">
                           <p id="chaterrmsg" style="display:none;margin-left: 20px;"></p>
                              <textarea name="" class="form-control type_msg" id="msg" placeholder="Type your message..."></textarea>
                              <div class="input-group-append" onclick="sendMessage()"  >
                                 <span class="input-group-text send_btn">
                                 <img src="<?php echo base_url(); ?>front-assets/images/send.png">
                                 </span>
                              </div>
                           </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>

<script type="text/javascript">
    
    $(window).on('load', function() {
        $('#chat').modal('show');
        console.log(localStorage.getItem("waitTime"))
        if(localStorage.getItem("waitTime")!='undefined'){
           $('#acceptTimeLeft').text(localStorage.getItem("waitTime"));
           $('.joinchecK').show();
        }else{
            $('#acceptTimeLeft').text('01:00');
        }
        var statusAccept = '<?php echo $order_chat[0]->is_Active?>' ;
          if(statusAccept!='Accept'){
            $('.overlay-chat').css('display','block');
          }
setScrollPos();
// setTimeout(function(){ sendMessage1(); }, 3000);
    });
    function sendMessage1()
{	
    let msgtext = localStorage.getItem('chatmsg');
	/*******************Sen socket msg**********************/
	if(msgtext!=null)
	{
	  let message ={"text":msgtext,
     "user":{"_id":<?php echo $order_chat[0]->customer_id ?>,"name":"Ankit Sharma"},
     "createdAt":new Date(),
     "_id":"af1b9b23-a7fd-41a6-a367-6bf9cf8043ed",
     "userId":<?php echo $order_chat[0]->customer_id ?>,
     "receiverId":<?php echo $order_chat[0]->astrologer_id ?>,     
     "messageId":"af1b9b23-a7fd-41a6-a367-6bf9cf8043ed",     
     "receiver":{"_id":<?php echo $order_chat[0]->astrologer_id ?>,"name":"Pooja Katiya","avatar":"https://koli-media-stag.s3-ap-southeast-1.amazonaws.com/users/file-161961303737292071430-198e-4113-81d8-c06417cd644d.jpg"},
     "messageType":"text","image":null};
      socket.emit('sendMessage', {message, "userId":<?php echo $order_chat[0]->customer_id ?>,"receiverId":<?php echo $order_chat[0]->astrologer_id ?> });
	 }
	 
	 $('#msg').val('');
     localStorage.removeItem('chatmsg');
	
	
	/**********************end*********************************/
}

</script>
<!-- chat modal end -->


<script>

//   const socket = io("http://65.0.208.59:3000");; // 103.220.223.62
//    // const socket = io("http://localhost:3000");
//    // const socket = io("http://103.220.223.62:3000");;

    const socket = io("https://onegodmed.com:3000");;

  function connectSocket()
  {
    
    socket.connect();
	console.warn('check 1==', socket.connected);
	
	socket.on('connect', function() {
	  console.warn('check 2==', socket.connected);
	});
	
	
  }
  
  function joinUser(userId){  
     socket.emit('join',{ userId:userId, fcmToken: 'token'});
	 
    socket.emit('online',{ userId:userId});
	 socket.on('sendMessage', message=>{
	     console.log(message.message);
		let chathtml= generateSingleChatHtml(message.message);
		 $('#chtcntr').append(chathtml);	 
	   //  getUserMessages(1155111555);
	    
	 });
	socket.on('online', function(message) {
	  console.warn('online 2==', message);
// 	  sendMessage1()
	});
	  
	
 }
 function disconnect(userId){
    socket.emit('disconnect',{ userId:userId})
  };
  
 function getUserMessages(roomId)
 {
	var options = { year: 'numeric', month: 'numeric', day: 'numeric' };

	 const timeOfLast = new Date().getTime();
	
		socket.emit('sync', { fromdate:0,todate: timeOfLast,roomId:roomId,limit:50});
		
		socket.on('sync', message => {
		var chatHtml='';
		if(message.length)
		{
		  for(let i =(message.length-1); i>=0; i--)
		  {				  
				chatHtml+= generateChatHtml(message[i]);		
			 
		  }
		}
		
		 $('#chtcntr').html(chatHtml);		 
		 
		})
 }	 

function getUserList()
{
   /***************get user list with last message******************/
    socket.emit('uniqueUser', { userId:<?php echo $order_chat[0]->customer_id ?>});
    socket.on('uniqueUser', message => {
       //console.log('Response uniqueUser test:' +JSON.stringify(message))
       message.forEach(element => {
       //  console.log("11"+element)
         const obj = JSON.parse(element.mostRecentMessage[0])
         //  console.log('Response uniqueUser:',message)
           const messageObj = {message:obj}
      
        // console.log('Response uniqueUser message:' + JSON.stringify(obj))
         
     });
     })
/***********************end****************************/
} 
function sendMessage()
{	
    let msgtext = $('#msg').val();
    if (!msgtext) return;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     if (filter.test(msgtext)) {
       //alert('Please provide a valid email address');
       $("#chaterrmsg").css('display', 'block');
       $("#chaterrmsg").css('color', 'red');
       $("#chaterrmsg").text("You can't send this type of message.");
       setTimeout(function(){ $("#chaterrmsg").css('display', 'none'); }, 3000);
       return false;
    }else{
        $("#chaterrmsg").css('display', 'none');
    }
    var regPh = /([0|\+[0-9]{10,13})+$/;
    if (regPh.test(msgtext)) {
          $("#chaterrmsg").css('display', 'block');
          $("#chaterrmsg").css('color', 'red');
          $("#chaterrmsg").text("You can't send this type of message.");
          setTimeout(function(){ $("#chaterrmsg").css('display', 'none'); }, 3000);
            return false;
        }
	/*******************Sen socket msg**********************/
	if(msgtext!='')
	{
	  let message ={"text":msgtext,
     "user":{"_id":<?php echo $order_chat[0]->customer_id ?>,"name":"Ankit Sharma"},
     "createdAt":new Date(),
     "_id":"af1b9b23-a7fd-41a6-a367-6bf9cf8043ed",
     "userId":<?php echo $order_chat[0]->customer_id ?>,
     "receiverId":<?php echo $order_chat[0]->astrologer_id ?>,     
     "messageId":"af1b9b23-a7fd-41a6-a367-6bf9cf8043ed",     
     "receiver":{"_id":<?php echo $order_chat[0]->astrologer_id ?>,"name":"Pooja Katiya","avatar":"https://koli-media-stag.s3-ap-southeast-1.amazonaws.com/users/file-161961303737292071430-198e-4113-81d8-c06417cd644d.jpg"},
     "messageType":"text","image":null};
      socket.emit('sendMessage', {message, "userId":<?php echo $order_chat[0]->customer_id ?>,"receiverId":<?php echo $order_chat[0]->astrologer_id ?> });
	 }
	 
	 $('#msg').val('');
	  $('#msg').focus();
	 
	/**********************end*********************************/
}


function generateChatHtml(item)
{
  var options = { year: 'numeric', month: 'numeric', day: 'numeric' };
   let reqmessagedata = JSON.parse( item.reqmessagedata);
	var dateString  = new Date(item.createdAt);
        let chatHtml ='';
			if(item.userId==<?php echo $order_chat[0]->customer_id ?>)
			 {
			  chatHtml='<div class="d-flex justify-content-end mb-4">\
								<div class="msg_cotainer_send">'+reqmessagedata.text+'<span class="msg_time_send">'+dateString.toLocaleDateString("en-US", options)+ ' '+dateString.toLocaleTimeString() +'</span>\
								</div><div class="img_cont_msg"><img src="" class="rounded-circle user_img_msg"></div></div>';
			 }else
			 {
			  chatHtml='<div class="d-flex justify-content-start mb-4">\
								<div class="img_cont_msg">\
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">\
								</div>\
								<div class="msg_cotainer">'+reqmessagedata.text+'<span class="msg_time">'+dateString.toLocaleDateString("en-US", options)+ ' '+dateString.toLocaleTimeString() +'</span>\
								</div></div>';
			 }
			 
		return chatHtml;	 
}


function generateSingleChatHtml(reqmessagedata)
{
  var options = { year: 'numeric', month: 'numeric', day: 'numeric' };
   
	var dateString  = new Date(reqmessagedata.createdAt);
        let chatHtml ='';
			if(reqmessagedata.userId==<?php echo $order_chat[0]->customer_id ?>)
			 {
			  chatHtml='<div class="d-flex justify-content-end mb-4">\
                              <div class="msg_cotainer_send" >'
                              +reqmessagedata.text+
                                 '<span class="msg_time_send">'+dateString.toLocaleDateString("en-US", options)+ ' '+dateString.toLocaleTimeString() +'</span>\
                                 <div class="tail"><img src="<?php echo base_url(); ?>front-assets/images/tail.jpg"></div></div><div class="img_cont_msg"><img src="<?php echo base_url(); ?>front-assets/images/right.jpg" class="rounded-circle user_img_msg"></div></div>';
            // chatHtml='<div class="d-flex justify-content-end mb-4">\
				// 				<div class="msg_cotainer_send">'+reqmessagedata.text+'<span class="msg_time_send">'+dateString.toLocaleDateString("en-US", options)+'</span>\
				// 				</div><div class="img_cont_msg"><img src="" class="rounded-circle user_img_msg"></div></div>';
			 }else
			 {
			  chatHtml='<div class="d-flex justify-content-start mb-4">\
                              <div class="img_cont_msg">\
                                 <img src="<?php echo base_url(); ?>front-assets/images/left.jpg" class="rounded-circle user_img_msg">\
                              </div>\
                              <div class="msg_cotainer">'+reqmessagedata.text+'<span class="msg_time">'+dateString.toLocaleDateString("en-US", options)+' '+dateString.toLocaleTimeString() +'</span>\
                              </div></div>';
            // chatHtml='<div class="d-flex justify-content-start mb-4">\
				// 				<div class="img_cont_msg">\
				// 					<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">\
				// 				</div>\
				// 				<div class="msg_cotainer">'+reqmessagedata.text+'<span class="msg_time">'+dateString.toLocaleDateString("en-US", options)+'</span>\
				// 				</div></div>';
			 }
			 
		return chatHtml;	 
}

 connectSocket();
 joinUser(<?php echo $order_chat[0]->customer_id ?>);
// setInterval(function(){ getUserMessages(1155111555); }, 5000);

    // });
    <?php if($order_chat[0]->customer_id > $order_chat[0]->astrologer_id){
        $roomId =  $order_chat[0]->astrologer_id.$order_chat[0]->customer_id  ; }else{
            $roomId = $order_chat[0]->customer_id.$order_chat[0]->astrologer_id;
        } ?>
getUserMessages(<?php echo $roomId ?>);
setTimeout(function(){ sendMessage1(); }, 8000);
</script>

<script>
   
   $('.overlay-chat').css('display', 'none');
           // console.log("vivek");
            $('.chatend').css('display', 'block');
          // console.log("vivek1");
          var statusRunning = '<?php echo $order_chat[0]->is_Active?>' ;
          if(statusRunning=='Running'|| statusRunning=='InQueue'){
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
            if($('#timeLeft').attr("val") == "") {
                console.log(localStorage.getItem("chatTimerVal"));
                if(localStorage.getItem("chatTimerVal") != null){
                    var fiveMinutes = localStorage.getItem("chatTimerVal"),
                    display = document.querySelector('#timeLeft');
                     localStorage.removeItem("chatTimerVal");
                }else{
                    var fiveMinutes = (60 * <?php echo $order_chat[0]->call_duration+1; ?>)-0,
                    display = document.querySelector('#timeLeft');
                }
            startTimer(fiveMinutes, display);
            $("#timeLeft").attr("val",<?php echo $order_chat[0]->call_duration+1; ?>);
            }
           setScrollPos(); 
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
            if($('#acceptTimeLeft').attr("val") == "") {
                console.log(localStorage.getItem("runningchatVal"));
                if(localStorage.getItem("runningchatVal") != null){
                    var fiveMinutes = localStorage.getItem("runningchatVal"),
                    display = document.querySelector('#acceptTimeLeft');
                     localStorage.removeItem("runningchatVal");
                }else{
                  if(localStorage.getItem("waitTime")!='undefined'){
                     var tt = localStorage.getItem("waitTime")
                  }else{
                     var tt = '2';
                  }
                    var fiveMinutes = (60 * parseInt(tt)),
                    display = document.querySelector('#acceptTimeLeft');
                }
            acceptstartTimer(fiveMinutes, display);
            if(localStorage.getItem("waitTime")!='undefined'){
                     var tt = localStorage.getItem("waitTime")
                  }else{
                     var tt = 2;
                  }
            $("#acceptTimeLeft").attr("val",parseInt(tt));
            localStorage.removeItem("runningchatVal");
            }
          }else if(statusRunning == 'Accept'){
            if($('#timeLeft').attr("val") == "") {
                console.log(localStorage.getItem("chatTimerVal"));
                if(localStorage.getItem("chatTimerVal") != null){
                    var fiveMinutes = localStorage.getItem("chatTimerVal"),
                    display = document.querySelector('#timeLeft');
                     localStorage.removeItem("chatTimerVal");
                }else{
                    var fiveMinutes = (60 * <?php echo $order_chat[0]->call_duration+1; ?>)-0,
                    display = document.querySelector('#timeLeft');
                }
            startTimer(fiveMinutes, display);
            $("#timeLeft").attr("val",<?php echo $order_chat[0]->call_duration+1; ?>);
            }
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
            
             $("#chatConfirmModal").modal('hide');
            window.location.href = "<?= base_url() ?>chat-with-astrologer/";
         }
      }
    });
    
        }
    }, 1000);
}
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

$("#chatend").click(function () {
   // alert("End chat 1");
    localStorage.setItem("chatlivestatus", 'Complete');
    var order_id = "<?php echo $chat[0]->order_id;?>";
    
    $.ajax({
         url: '<?= base_url() ?>user/chatending/', //php          
         data: {order_id: order_id,},
         dataType: 'json', //data format
         method: "POST",
         success: function (callDetails) {
            // alert(callDetails.status);
            // console.log('callDetails',callDetails);
            // alert("End chat 2");
               if(callDetails.status){
               $("#chatConfirmModal").modal('hide');
               $("#chat").modal('hide');
               // alert("End chat 3");
               window.location.href = "<?= base_url() ?>chat-with-astrologer/";
               <?php 
                  // header("Location: https://www.onegodmed.com/chat-with-astrologer/"); 
                  // die();
               ?>
         }
      }
    });
});

function setScrollPos()
{
     var id='chtcntr';
   var div = document.getElementById(id);
   $('#' + id).animate({
      scrollTop: div.scrollHeight - div.clientHeight
   }, 100);
}
</script>