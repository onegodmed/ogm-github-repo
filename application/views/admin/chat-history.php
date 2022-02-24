<style>
    :root {
  --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  --msger-bg: #fff;
  --border: 2px solid #ddd;
  --left-msg-bg: #ececec;
  --right-msg-bg: #579ffb;
}



.msger {
  display: flex;
  flex-flow: column wrap;
  justify-content: space-between;
  width: 100%;
  margin: 35px 0px;
  height: 400px;
  border: none;
  border-radius: 5px;
  background: var(--msger-bg);
  box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
  overflow:hidden;
  overflow-y:auto !important;
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
    width: 100%;
    min-height: 350px;
    display: flex;
    align-items: center;
    justify-content: center;}

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
    .chat-design{padding:10px;}
    .msg-bubble {
    max-width: 250px;
    padding: 15px;
    border-radius: 15px;
    background: var(--left-msg-bg);
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
    height: 600px;
    border: none;
    border-radius: 5px;
    background: var(--msger-bg);
    box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    overflow-y: auto !important;
}
}
</style>

<div class="page-wrapper">
<div class="container-fluid">
   <div class="col-md-12" >
<section class="msger">
  <header class="msger-header">
    <div class="msger-header-title">
      <i class="fas fa-comment-alt"></i> Chat History
    </div>
    <div class="msger-header-options">
    </div>
  </header>

  <main class="msger-chat" id="chtcntr">
      <?php foreach($chat as $val){
      if($val->to == $user[0]->id){
      ?>
    <div class="msg right-msg">
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
    <?php }else  if($val->to == $astro[0]->id){?>
    <div class="msg left-msg">
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
    <?php }}?>
  </main>
</section>		
		</div> 
</div>

		</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>

<script type="text/javascript">
    
   
   
</script>
<!-- chat modal end -->


<script>

//   const socket = io("http://65.0.208.59:3000");;
    // const socket = io("http://103.220.223.62:80");;
     
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
	
		socket.emit('sync', { fromdate:0,todate: timeOfLast,roomId:roomId,limit:10000});
		
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
    socket.emit('uniqueUser', { userId:<?php echo $user[0]->id ?>});
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
     "user":{"_id":<?php echo $user[0]->id ?>,"name":"Ankit Sharma"},
     "createdAt":new Date(),
     "_id":"af1b9b23-a7fd-41a6-a367-6bf9cf8043ed",
     "userId":<?php echo $user[0]->id ?>,
     "receiverId":<?php echo $astro[0]->id ?>,     
     "messageId":"af1b9b23-a7fd-41a6-a367-6bf9cf8043ed",     
     "receiver":{"_id":<?php echo $astro[0]->id ?>,"name":"Pooja Katiya","avatar":"https://koli-media-stag.s3-ap-southeast-1.amazonaws.com/users/file-161961303737292071430-198e-4113-81d8-c06417cd644d.jpg"},
     "messageType":"text","image":null};
      socket.emit('sendMessage', {message, "userId":<?php echo $user[0]->id ?>,"receiverId":<?php echo $astro[0]->id ?> });
	 }
	 
	 $('#msg').val('');
	
	
	
	/**********************end*********************************/
}


function generateChatHtml(item)
{
  var options = { year: 'numeric', month: 'numeric', day: 'numeric' };
   let reqmessagedata = JSON.parse( item.reqmessagedata);
	var dateString  = new Date(item.createdAt);
        let chatHtml ='';
			if(item.userId==<?php echo $user[0]->id ?>)
			 { 
			  chatHtml='<div class="msg right-msg"><div class="msg-img"></div><div class="msg-bubble"><div class="msg-info"><div class="msg-info-name"><?php echo $user[0]->name;?></div>\
          <div class="msg-info-time">'+dateString.toLocaleDateString("en-US", options)+ ' '+dateString.toLocaleTimeString() +'</div>\
        </div>\
        <div class="msg-text">'+reqmessagedata.text+'</div></div></div>';			
			 }else
			 {
			  chatHtml='<div class="msg left-msg"><div class="msg-img"></div><div class="msg-bubble"><div class="msg-info"><div class="msg-info-name"><?php echo $astro[0]->name;?></div>\
          <div class="msg-info-time">'+dateString.toLocaleDateString("en-US", options)+ ' '+dateString.toLocaleTimeString() +'</div>\
        </div>\
        <div class="msg-text">'+reqmessagedata.text+'</div></div></div>';
			 }
			 
		return chatHtml;	 
}


function generateSingleChatHtml(reqmessagedata)
{
  var options = { year: 'numeric', month: 'numeric', day: 'numeric' };
   
	var dateString  = new Date(reqmessagedata.createdAt);
        let chatHtml ='';
			if(reqmessagedata.userId==<?php echo $user[0]->id ?>)
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
 joinUser(<?php echo $user[0]->id ?>);
// setInterval(function(){ getUserMessages(1155111555); }, 5000);

    // });
    <?php if($astro[0]->id > $user[0]->id){
        $roomId =  $user[0]->id.$astro[0]->id  ; }else{
            $roomId = $astro[0]->id.$user[0]->id;
        } ?>
getUserMessages(<?php echo $roomId; ?>);
setTimeout(function(){ sendMessage1(); }, 11000);
</script>
