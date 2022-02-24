<!-- Loader starts from here -->
<div class="loader" style="display:block">
    <div class="backface"></div>
        <div class="preloader1">
            <div class="loader loader-inner-1">
                <!-- <img src="front-assets/images/loader.gif"> -->
                <img src="<?= base_url() ?>front-assets/images/loader.gif">
                <div class="loader loader-inner-2">
                    <div class="loader loader-inner-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Loader ends here -->
<div id="partial">
   <div class="articlemrg chat askastro">
      <?php
         if (!empty(@$astro)) {

             foreach ($astro as $value) {
              $astroid = $value->id;
                 if ($value->expertise !== 'Vedic Healer') {
                     ?>
      <div class="li" id="19328">
         <div class="col-sm-6 col-md-4">
            <div class="hik"></div>
            <div class="astrologer_box main_box">
            <?php if($value->astro_new == "Yes"){?>
                     <div class="astronew-area">
                        <div class="discount-image">
                           <img src="<?= base_url() ?>front-assets/images/astro_new.png">
                        </div>
                     </div>
                     <?php  }?>
               <div class="astro-info">
                  <div class="as_profile_tile bor_m">
                     <a id="div1_JoinQueue" href="<?php echo base_url('astrologer/' . $value->astro_slug . '/') ?>" target="_blank"> 
                     <img src="<?php echo base_url('admin-assets/assets/images/users/' . $value->image) ?>" width="65" height="65" class="pull-left img-circle margin_Rgt10 img_profile b-error" alt="<?php echo $value->name; ?>" title="<?php echo $value->name; ?>"> 
                     </a> <a id="div1_JoinQueue" href="<?php echo base_url('astrologer/' . $value->astro_slug . '/') ?>" target="_blank" class="as_profile_font"><?php echo $value->name; ?>
                     </a>
                     <div class="rating-wrap">
                        <div class="review_mobile">
                           <?php
                              $rating1 = $this->db->query("SELECT AVG(rating) as rating FROM rating WHERE `user_id` ='" . $value->id . "'")->result();
                              $rating2 = $this->db->query("SELECT SUM(rating) as rating FROM rating WHERE `user_id` ='" . $value->id . "'")->result();
                              $rating = round($rating1[0]->rating);
                              
                              for ($i = 0; $i < 1; $i++) {
                                  if ($i < $rating) {
                                      $tmp_class = 'fa fa-star';
                                  } else {
                                      $tmp_class = 'fa fa-star-o';
                                  }
                                  ?>
                           <span class="<?php echo $tmp_class ?>" data-rating="1"></span> <span class="ratingnumber"><?php echo number_format($rating1[0]->rating, 2); ?></span>
                           <?php } ?>
                        </div>
                         <span><i class="fa fa-user-o" aria-hidden="true"></i></span><span class="ra">Ratings : <?php echo $rating2[0]->rating; ?></span>
                     </div>

                     <?php if($this->session->userdata('id')) {  ?>
<?php
  $this->load->model('Front_model'); 
$shivam = $this->db->select('*')->from('follow')->where(array('astro_id'=>$astroid,'user_id'=>$this->session->userdata('id')))->get()->row();


 ?>
                     <div class="follow btn-style1">
                      <button id="followastro<?= $astroid ?>" class="btn <?php if(!empty($shivam)) { echo "followed" ; } ?>" onclick="followup(<?= $astroid ?>)"><?php if(empty($shivam)) { echo "Follow" ; }else{ echo "Following";}?> </button>
                    </div>
                  <?php } else { ?>
                    <div class="follow btn-style1">
                    <a class="popup-with-zoom-anim" href="#login-dialog">
                                   <button class="btn">Follow</button></a>
                    </div>
                  <?php } ?>
                    <div id="unfollowastro<?= $astroid ?>" class="follow btn-style1" style="display: none;">
                      <button class="btn <?php if(empty($shivam)) { echo "followed" ; } ?>" onclick="unfollowup(<?= $astroid ?>)"><?php if(empty($shivam)) { echo "Following" ; }else{ echo "Follow";}?></button>
                    </div>

                      <input type="hidden" class="userid" value="<?php echo $this->session->userdata('id') ; ?>">

                     <div class="clearfix HideTopDesktp"></div>
                  </div>
                 
               </div>
               <div class="bor_mm"></div>
               <div class="clearfix"></div>
               <div class="as_profile_text">
                  <ul class="as_profile_text_ul">
                     <?php
                        $expertise = "";
                        foreach ($services as $serviceVal) {
                            if ($serviceVal->astrologer_id == $value->id) {
                                $chat_price = $serviceVal->chat_price;
                                $vendor_chat_price = $serviceVal->vendor_chat_price;
                                $dollar_chat_price = $serviceVal->dollar_chat_price;
                                $dollar_vendor_chat_price = $serviceVal->vendor_dollar_chat_price;
                                $expertise .= $serviceVal->service_name . ',';
                                 $actual_chat_price = $serviceVal->actual_chat_price;
                                 $astro_new = $value->astro_new;
                            }
                        }
                        ?>
                     <li class="wrapText" title="<?php echo $value->expertise . ',' . $expertise; ?>"><img width="22" height="22" class="as_profile_img b-error" title="Experience" src="/front-assets/images/header/skills.png"><?php echo $value->expertise . ',' . $expertise; ?></li>
                     <li class="wrapText astroLang" data-category="<?php echo str_replace(",", " ", $value->langknown); ?>" title="<?php echo $value->langknown ?>"> <img width="22" height="22" class="as_profile_img b-error" title="Experience" src="/front-assets/images/header/language.png"><?php echo $value->langknown ?></li>
                     <li> <img width="24" height="24" class="as_profile_img b-error" title="Experience" src="/front-assets/images/header/experience.png"><?php echo $value->experience ?></li>
                     <?php if ($this->session->userdata('countryCode') == 'IN') { ?>
                     <?php if($actual_chat_price > 0){
                        $discPrice = (round(($actual_chat_price - $chat_price)/$actual_chat_price,2)*100);?>
                     <div class="discount-area">
                        <div class="discount-image">
                           <img src="<?= base_url() ?>front-assets/images/offer.png">
                           <span><?php echo @$discPrice;?>% Off</span>
                        </div>
                     </div>
                     <?php }?>
                     <li> <img width="24" height="24" class="as_profile_img b-error" title="Chat Price" src="<?= base_url() ?>front-assets/images/header/rupee_gray_light.png"> <span class="discount_price">Chat: <?php if($actual_chat_price > 0){?><span> <strike> <?php echo $actual_chat_price; ?>/Min</strike></span><?php }?><span> <?php echo $chat_price; ?>/Min</span></span> </li>
                     <!--<li> <img width="24" height="24" class="as_profile_img b-error" title="Video Price" src="/front-assets/images/header/rupee_gray_light.png"> <span class="discount_price">Video Call:<span> Rs. <?php echo $video_price; ?>/Min</span></span> </li>-->
                     <?php } else { ?> 
                     <li> <img width="24" height="24" class="as_profile_img b-error" title="Chat Price" src="<?= base_url() ?>front-assets/images/header/dollor.png"> <span class="discount_price">Chat:<span> <?php echo $dollar_chat_price; ?>/Min</span></span> </li>
                     <!--<li> <img width="24" height="24" class="as_profile_img b-error" title="Video Price" src="/front-assets/images/header/rupee_gray_light.png"> <span class="discount_price">Video Call:<span> USD $ <?php echo $dollar_video_price; ?>/Min</span></span> </li>-->
                     <?php } ?>
                     <!-- <?php if($astro_new == "Yes"){?>
                     <div class="astronew-area">
                        <div class="discount-image">
                           <img src="<?= base_url() ?>front-assets/images/astro_new.png" style="width:40px">
                        </div>
                     </div>
                     <?php  }?> -->
                  </ul>
                  <?php
                     if ($value->chat_status == "Online") {
                         $call_duration = "";
						
                         foreach ($check_services as $row) {
                             if ($value->id == $row->astrologer_id) {
                                 $totTime = str_replace("Min", "", $row->call_duration);
                                 @$call_duration += $totTime;
								 $queue = $row->queue;
                             }
                             if($this->session->userdata('id')==$row->customer_id){
                                 $callSt = $row->is_Active;
                             }
                         }
                         if ($call_duration == "" && $this->session->userdata('id') == "") {
                             ?>
                    <div class="onlineastro"> 
                        <div class="online-inner">
                                <a  href="#login-dialog" id="add_redirect"  class="popup-with-zoom-anim buy_btn online_queue cursor-pointer" style="color: #fff!important;">Chat</a> 
                            <i class="fa fa-comments call_btn1" aria-hidden="true"></i>
                        </div>
                     
                    </div>
                  <?php } else if ($call_duration == "" && $this->session->userdata('id') != "") { ?>
                  <?php if (@$callSt == "Running" || @$callSt == "Accept") { ?>
                  <div class="onlineastro">
                      <div class="online-inner">
                      <a  data-toggle="modal" data-target="#astroCallModal"class="online_queue cursor-pointer" style="color: #fff!important;">Chat</a> 
                      <i class="fa fa-comments call_btn1" aria-hidden="true"></i>
                    </div>
                  </div>
                  <?php } else{?>
                  <?php if ($this->session->userdata('countryCode') == 'IN') { ?> 
                  <div class="astroModalPopup"> 
                     <input type="hidden" class="astroId" id="astroId_<?php echo $value->id; ?>" name="astroId_<?php echo $value->id; ?>" value="<?php echo $value->id; ?>"/>
                     <input type="hidden" class="astroName"  name="astroName" value="<?php echo $value->name; ?>"/>
                     <input type="hidden" class="walletbalance"  name="walletbalance" value="<?php echo $wallet_balence[0]->wallet_balence; ?>"/>
                     <input type="hidden" class="astroChatVendor"  name="astrochatvendor" value="<?php echo $vendor_chat_price; ?>"/>
                     <input type="hidden" class="astroChatPrice" id="astrochat_<?php echo $chat_price; ?>" name="astrochat_<?php echo $chat_price; ?>" value="<?php echo $chat_price; ?>"/>
                     <div class="onlineastro">
                         <div class="online-inner">
                         <a  class="online_queue cursor-pointer" style="color: #fff!important;">Chat</a> <i class="fa fa-comments call_btn1" aria-hidden="true"></i>
                         </div>
                     </div>
                     
                 
                    </div>
                  <?php } else { ?>
                  <div class="astroModalPopup"> 
                     <input type="hidden" class="astroId" id="astroId_<?php echo $value->id; ?>" name="astroId_<?php echo $value->id; ?>" value="<?php echo $value->id; ?>"/>
                     <input type="hidden" class="astroName"  name="astroName" value="<?php echo $value->name; ?>"/>
                     <input type="hidden" class="walletbalance"  name="walletbalance" value="<?php echo $wallet_balence[0]->wallet_balence; ?>"/>
                     <input type="hidden" class="astroChatVendor"  name="astrochatvendor" value="<?php echo $dollar_vendor_chat_price; ?>"/>
                     <input type="hidden" class="astroChatPrice" id="astrochat_<?php echo $dollar_chat_price; ?>" name="astrochat_<?php echo $dollar_chat_price; ?>" value="<?php echo $dollar_chat_price; ?>"/>
                     <div class="onlineastro">
                         <div class="online-inner">
                         <a  class="online_queue cursor-pointer" style="color: #fff!important;">Chat</a> <i class="fa fa-comments call_btn1" aria-hidden="true"></i>
                         </div>
                     </div>
                    
                  </div>
                  <?php } ?>
                  <?php }} else if ($call_duration != "" && $this->session->userdata('id') != "") { ?>
                  <?php if ($this->session->userdata('countryCode') == 'IN') { ?> 
				  
				 
                  <a data-toggle="modal" data-target="#astroModal" class="buy_btn online_queue" style="background:#f77403!important;color: #fff!important;font-size:15px;">Busy</a>
				
                  <?php } else { ?>
                  <a data-toggle="modal" data-target="#astroModal" class="buy_btn online_queue" style="background:#f77403!important;color: #fff!important;font-size:15px;">Busy</a>
                  <?php } ?>
                  <?php } else if ($call_duration != "" && $this->session->userdata('id') == "") { ?>
				  
				   <?php  if ($queue == '2') { ?>
                  <div> <a  href="#login-dialog" id="add_redirect" class="popup-with-zoom-anim buy_btn online_queue cursor-pointer" style="background:#f77403!important;color: #fff!important;font-size:15px;">Busy</a></div>
				     <?php } else { ?>
                    <div class="astroModalPopup1"> 
                        <input type="hidden" class="astroId" id="astroId_<?php echo $value->id; ?>" name="astroId_<?php echo $value->id; ?>" value="<?php echo $value->id; ?>"/>
                        
                       
                        <input type="hidden" class="waitQueue" id="waitQueue" value="<?=$queue?>">
                        <!-- <input type="hidden" class="joinQueue" id="joinQueue" value="joinQueue"> -->
                        <?php if(isset($userID)) { if(((isset($userID[0]) && $userID[0] == $this->session->userdata('id')) || (isset($userID[1]) && $userID[1] == $this->session->userdata('id')))) {?><input type="hidden" class="joinQueue" id="joinQueue" value="queueJoined"> <?php } else { ?> <input type="hidden" class="joinQueue" id="joinQueue" value="joinQueue">  <?php } }else { ?>  <input type="hidden" class="joinQueue" id="joinQueue" value="joinQueue"> <?php }?></a>
                       
                       <div class="onlineastro">
                           <div class="online-inner">
                           <a  class="buy_btn online_queue JoinCheck"   style="background:#f77403!important;color: #fff!important;font-size:15px;">
						   <?php if(isset($userID)) {
							   if(((isset($userID[0]) &&$userID[0] == $this->session->userdata('id')) || (isset($userID[1]) && $userID[1] == $this->session->userdata('id')))) {?>Queue Joined <?php } else { ?> <span > Join Queue </span>  <?php } }else { ?>  <span > Join Queue </span> <?php }?></a>
                           </div>

                       </div> 
                    </div>
                  <?php } ?>
                  <?php
                     }
                     } else {
                     ?>
                     <?php $userIds = explode(',',$value->user_id)?>
                  <div class="callbtn">
                     <div class="follow btn-style1">
                     <button class="btn <?php  if($this->session->userdata('id') != '' && in_array($this->session->userdata('id'),$userIds)){?>followed<?php } ?>" onclick="notifyMe('<?php echo $this->session->userdata('id');?>','<?php echo $value->id; ?>')" id="<?php echo $value->id; ?>"> <i class="fa fa-bell-o profile-icon" aria-hidden="true"></i><?php  if($this->session->userdata('id') != '' && in_array($this->session->userdata('id'),$userIds)){?>Notified<?php } else {?><?php  if($this->session->userdata('id') == '' ){?>
                            <a class="popup-with-zoom-anim" href="#login-dialog">
                                    <span>Notify</span> </a><?php } else {?> <span>Notify</span> <?php } }?></button>
                     </div>
                     <div class="wrppr">
                            <div class="notonline"> 
                                <a  class="online_queue cursor-pointer" style="background-color: #c5bbbb!important;border: 1px solid #c5bbbb !important;">Offline</a>
                                <i class="fa fa-comments call_btn1" aria-hidden="true"></i>
                            </div>
                            <?php if(($value->next_avail_chat)!='')  { ?>
                     <p class="msg">Available at <?= $value->next_avail_chat ?></p>
                   <?php } ?>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
      <?php
         }
         }
         } else {
         ?>
      <div class="astro21" style="text-align: center !important;"> No Astrologer found in given search!</div>
      <?php } ?>
      <div class="clearfix"></div>
   </div>
</div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>
<style>
   div#walletModal {
   z-index: 9999999;
   }
   .sicn{
   position:relative;
   top:25px;
   left:5px;
   cursor: pointer;
   } 
   .pl25{
   padding-left:25px!important;
   }
   .astrologer_box.main_box {
   height:300px;
   }
   .discount-area {
   position: absolute;
   top: 34px;
   right: 7px;
   }
   .astronew-area {
   position: absolute;
   top: -14px;
   left: -15px;
   }
   .discount-image {
   position: relative;text-align:center;
   }
   .discount-image img{width:53px;}
   .discount-image span{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);color:#fff;font-weight:bold;}
   @media (max-width:600px){
   .discount-area {
   position: absolute;
   top: -127px;
   right: -57px;
   }
   .astronew-area {
   position: absolute;
   top: -124px;
   left: -33px;
   }
   }
</style>
<script>
     // loader Query
    $(document).ready(function(){
        $('.loader').hide();
        $('body').removeClass("overflow");
    });
</script>
<script type="text/javascript">
   $(document).ready(function () {
       $('.as_profile_text').click(function () {
               $('#promotext').css('display', 'none');
   $('#promodisc').val(0);
           });
       var interval = null;
       $(".astroModalPopup").on('click', function (event) {
           var astroId = $(this).children('input.astroId').val();
           var astroName = $(this).children('input.astroName').val();
           var chatprice = $(this).children('input.astroChatPrice').val();
           var vendorchatprice = $(this).children('input.astroChatVendor').val();
           var walletbalance = $(this).children('input.walletbalance').val();
           if (walletbalance < chatprice * 5) {
               $('#astro_name').text(astroName);
               $("#walletModal").modal('show');
               return false;
           }
           $("#myModal").modal('show');
           $("#popuastroid").val(astroId);
           $("#popuastroname").val(astroName);
           $("#popupchatprice").val(chatprice);
           $("#popvendorchatprice").val(vendorchatprice);
           $("#popwalletbalance").val(walletbalance);
           $(".au_call").prop('checked',true);
           $('.msgcalltype1').css('display', 'block');
           var call_duration = Math.trunc((walletbalance / chatprice)) + 1;
           var country_code = '<?php echo $this->session->userdata('countryCode') ?>';
           $('.msgcalltype1').html('You can chat with <strong>' + astroName + '</strong> for <strong>' + call_duration + '</strong> minutes. Please Click on <strong>"Proceed Now"</strong> to proceed further.'); 
           var chatcallprice = ((call_duration - 1) * chatprice);
           $('#call_price').val(chatcallprice);
           $('#vendor_price').val(vendorchatprice);
           $('#callType').val('Chat');
           $('#calltime').val(call_duration);
           $('#actualprice').val(chatprice);
           $('#pickmsg').text('If ' + astroName + ' does not start the chat in Next 3-4 Minutes , You May Please choose another Astrologer.');
       });
       
        $("#proceedtonext").click(function () {
           $("#myModal").modal('hide');
           $("#chatModal").modal('show');
        });
        $("#chatproceed").click(function () {
           var chat_cust_name = $("#chat_cust_name").val();
           var chat_cust_gender = $("#chat_cust_gender").val();
        //    var chat_cust_dob = $("#chat_cust_dob").val();
            var day = $("#day").val();
           var month = $("#month").val();
           var year = $("#year").val();
           var chat_cust_dob = day + '/' + month + '/' + year;
           var d=new Date(chat_cust_dob.split("/").reverse().join("-"));
   var dd=d.getDate();
   var mm=d.getMonth()+1;
   var yy=d.getFullYear();
   var chat_cust_dob = dd+"-"+mm+"-"+yy;
           var chat_cust_place = $("#chat_cust_place").val();
           var hour = $("#hour").val();
           var minute = $("#minute").val();
           var second = $("#second").val();
           var chat_cust_time = hour + ':'+minute+':'+second;
           
            $('#errordob').css('display', 'none');
            $('#errorbirth').css('display', 'none');
            $('#errortime').css('display', 'none');
             $('#errorplace').css('display', 'none');
             $('#errorgender').css('display', 'none');
              if(chat_cust_name=="" && chat_cust_dob=="NaN-NaN-NaN" && chat_cust_time=="00:00:00" && chat_cust_place=="" && chat_cust_gender==null){
               $('#errorbirth').css('display', 'block');
               $('#errorbirth').css('color', 'red');
               $('#errorbirth').text('Please enter your birth name');
               $('#errorgender').css('display', 'block');
               $('#errorgender').css('color', 'red');
               $('#errorgender').text('Please select the gender');
                $('#errordob').css('display', 'block');
               $('#errordob').css('color', 'red');
               $('#errordob').text('Please enter your birth date');
                $('#errortime').css('display', 'block');
               $('#errortime').css('color', 'red');
               $('#errortime').text('Please enter your birth time');
               $('#errorplace').css('display', 'block');
               $('#errorplace').css('color', 'red');
               $('#errorplace').text('Please enter your birth place');
               return false;
           }
           if(chat_cust_name==""){
               $('#errorbirth').css('display', 'block');
               $('#errorbirth').css('color', 'red');
               $('#errorbirth').text('Please enter your birth name');
               return false;
           }
           if(chat_cust_gender==null){
               $('#errorgender').css('display', 'block');
               $('#errorgender').css('color', 'red');
               $('#errorgender').text('Please select the gender');
               return false;
           }
           if(chat_cust_dob=="NaN-NaN-NaN"){
               $('#errordob').css('display', 'block');
               $('#errordob').css('color', 'red');
               $('#errordob').text('Please enter your birth date');
               return false;
           }
           if(chat_cust_time=="00:00:00"){
               $('#errortime').css('display', 'block');
               $('#errortime').css('color', 'red');
               $('#errortime').text('Please enter your birth time');
               return false;
           }
           if(chat_cust_place==""){
               $('#errorplace').css('display', 'block');
               $('#errorplace').css('color', 'red');
               $('#errorplace').text('Please enter your birth place');
               return false;
           }
           var selectcount = $('.selectcount').val();
           if(selectcount < 1){
                $('.citysearchval2').val('');
           $('.suggest2').hide();
           $('#errorplace').css('display', 'block');
               $('#errorplace').css('color', 'red');
               $('#errorplace').text('Please choose correct birth place');
               return false;
           }
           $("#chatModal").modal('hide');
           var call_type = $('#callType').val();
           var call_duration = $('#calltime').val();
           $('#timeLeft').text(call_duration);
           var astroid = $("#popuastroid").val();
           var call_count = $("#popupcall_count").val();
            var astroName = $("#popuastroname").val();
           var callprice = $('#call_price').val();
           var actualprice = $('#actualprice').val();
           var vendorprice = $("#vendor_price").val();
           var walletbalance = $("#popwalletbalance").val();
           var popupcall_userId = $("#popupcall_userId").val();
           var popupcall_password = $("#popupcall_password").val();
           var custNum = '<?php echo $this->session->userdata('mobile') ?>';
           var extraSec = '30';
           var call_time = (call_duration * 60);
           var username = popupcall_userId;
           var password = popupcall_password;
           var country_code = '<?php echo $this->session->userdata('countryCode') ?>';
            if (country_code == "IN" && call_count == 0) {
                var callNation = "Domestic";
               ajaxRequestMade = true;
               sessionStatusRequest = $.ajax({
                   url: "<?= base_url() ?>book-call",
                   method: "POST",
                   data: {chat_cust_name: chat_cust_name, chat_cust_gender: chat_cust_gender, chat_cust_dob: chat_cust_dob, chat_cust_place: chat_cust_place, chat_cust_time: chat_cust_time, custNum: custNum, call_time: call_time, username: username, password: password,call_duration: call_duration, actualprice: actualprice, astrologer_id: astroid, call_price: callprice, vendor_price: vendorprice, call_type: call_type, callNation: callNation},
                   beforeSend: function () {
                       console.log('bbb : ' + sessionStatusRequest);
                       if (sessionStatusRequest != null)
                           sessionStatusRequest.abort();
                   },
                   success: function (data) {
                       var callerId = JSON.parse(data)
                       var status = callerId.status;
                       var callId = callerId.callId;
                       if(status == "1"){
                           localStorage.removeItem("runningchatVal");
                           localStorage.removeItem("chatlivestatus");
                           localStorage.setItem("chatmsg", callerId.chatmsg);
   localStorage.removeItem("chatTimerVal");
                            window.location.href = "<?= base_url() ?>user/chat?chatid="+callId;
                       }
                   }
               });
           } else{
                var callNation = "International";
                ajaxRequestMade = true;
               sessionStatusRequest = $.ajax({
                   url: "<?= base_url() ?>book-call",
                   method: "POST",
                   data: {chat_cust_name: chat_cust_name, chat_cust_dob: chat_cust_dob, chat_cust_place: chat_cust_place, chat_cust_time: chat_cust_time, custNum: custNum, call_time: call_time, username: username, password: password,call_duration: call_duration, actualprice: actualprice, astrologer_id: astroid, call_price: callprice, vendor_price: vendorprice, call_type: call_type, callNation: callNation},
                   beforeSend: function () {
                       console.log('bbb : ' + sessionStatusRequest);
                       if (sessionStatusRequest != null)
                           sessionStatusRequest.abort();
                   },
                   success: function (data) {
                       var callerId = JSON.parse(data)
                       var status = callerId.status;
                       var callId = callerId.callId;
                       if(status == "1"){
                        window.localStorage.setItem("chatmsg", callerId.chatmsg);
                        console.log(window.localStorage.getItem("chatmsg"));

                           localStorage.removeItem("runningchatVal");
                           
                           localStorage.removeItem("chatlivestatus");
   localStorage.removeItem("chatTimerVal");
                            window.location.href = "<?= base_url() ?>user/chat?chatid="+callId;
                       }
                   }
               });
           } 
        });
   
   });
   
   function startTimer(duration, display) {
   var timer = duration, minutes, seconds;
   setInterval(function () {
       minutes = parseInt(timer / 60, 10);
       seconds = parseInt(timer % 60, 10);
   
       minutes = minutes < 10 ? "0" + minutes : minutes;
       seconds = seconds < 10 ? "0" + seconds : seconds;
   
       display.textContent = minutes + ":" + seconds;
   
       if (--timer < 0) {
           timer = duration;
       }
   }, 1000);
   }
</script>

<!-- Followup -->
<script type="text/javascript">
  function followup($astroid){
   var userid = $('.userid').val();
   var astroid = $astroid;

  $.ajax({
        url:"<?php echo base_url('Front/follow')?>",
        method:"post",
        data:{user_id:userid,astro_id:astroid},        
        success :function(){
         $('#unfollowastro'+astroid).show();
         $('#followastro'+astroid).hide();
         
        }
    });

  }

  function unfollowup($astroid){
    var userid = $('.userid').val();
   var astroid = $astroid;

   $.ajax({
        url:"<?php echo base_url('Front/follow')?>",
        method:"post",
        data:{user_id:userid,astro_id:astroid},        
        success :function(){
         $('#unfollowastro'+astroid).hide();
         $('#followastro'+astroid).show();
         //window.location.reload();
        }
    });
  }

  // Notify Me Code
  function notifyMe(userId, astroId){
       var valName = $('#'+astroId).text().trim(); 
   if(userId==''){
    $('#login-dialog').show();
    return false
   }
   $.ajax({
       url: '<?= base_url() ?>front/notifyMe', //php          
       data: {
           astroId: astroId,
           userId: userId,
           valName: valName
        },
       dataType: 'json', //data format
       method: "POST",
       success: function (result) {
        if(result == 1){
              $('#'+astroId).addClass('followed');
               $('#'+astroId).html('<i class="fa fa-bell-o profile-icon" aria-hidden="true"></i>Notified')
              
           }else if (result == 2){
              $('#'+astroId).removeClass('followed');
               $('#'+astroId).html('<i class="fa fa-bell-o profile-icon" aria-hidden="true"></i>Notify')
           }else{
               alert('Something went wrong!')
           }
           // location.reload();
       }
   });

   }

</script>