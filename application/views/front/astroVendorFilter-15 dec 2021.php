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
   <div class="articlemrg askastro">
      <?php
         if (!empty(@$astro)) {
             foreach ($astro as $value) {
              $astroid = $value->id;
                 if ($value->expertise !== 'Vedic Healer') {
                     ?>
      <div class="li astrolist" id="19328">
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
                     </a> <a id="div1_JoinQueue" href="<?php echo base_url('astrologer/' . $value->astro_slug . '/') ?>" class="as_profile_font" target="_blank"><?php echo $value->name; ?>
                     </a>
                     <div class="rating-wrap">
                        <div class="review_mobile">
                           <?php
                              $rating1 = $this->db->query("SELECT AVG(rating) as rating FROM rating WHERE `user_id` ='" . $value->id . "'")->result();
                              $rating2 = $this->db->query("SELECT Count(rating) as rating FROM rating WHERE `user_id` ='" . $value->id . "'")->result();
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
                  <ul class="as_profile_text_ul ">
                     <?php
                        $expertise = "";
                        foreach ($services as $serviceVal) 
                        {
                            if ($serviceVal->astrologer_id == $value->id) {
                                $dollar_price = $serviceVal->dollar_price;
                                $dollar_video_price = $serviceVal->video_dollar_price;
                                $final_price = $serviceVal->price;
                                $video_price = $serviceVal->video_price;
                                $vendor_price = $serviceVal->vendor_price;
                                $vendor_video_price = $serviceVal->vendor_video_price;
                                $dollar_vendor_price = $serviceVal->vendor_dollar_price;
                                $dollar_vendor_video_price = $serviceVal->vendor_video_dollar_price;
                                $expertise .= $serviceVal->service_name . ',';
                                $actual_call_price = $serviceVal->actual_call_price;
                                $astro_new = $value->astro_new;
                                $Available_time = $value->next_avail_chat;
                                
                            }

                        }
                        ?>
                      <li class="wrapText" title="<?php echo $value->expertise . ',' . $expertise; ?>"><img width="22" height="22" class="as_profile_img b-error" title="Experience" src="<?= base_url() ?>front-assets/images/header/skills.png"><?php echo $value->expertise . ',' . $expertise; ?></li>

                     <li class="wrapText astroLang" data-category="<?php echo str_replace(",", " ", $value->langknown); ?>" title="<?php echo $value->langknown ?>"> <img width="22" height="22" class="as_profile_img b-error" title="Experience" src="/front-assets/images/header/language.png"><?php echo $value->langknown ?></li>
                     <li> <img width="24" height="24" class="as_profile_img b-error" title="Experience" src="<?= base_url() ?>front-assets/images/header/experience.png"><?php echo $value->experience ?></li>
                     <?php if ($this->session->userdata('countryCode') == 'IN') { ?>
                     <?php if($actual_call_price > 0){
                        $discPrice = (round(($actual_call_price - $final_price)/$actual_call_price,2)*100);?>
                     <div class="discount-area">
                        <div class="discount-image">
                           <img src="<?= base_url() ?>front-assets/images/offer.png">
                           <span><?php echo @$discPrice;?>% Off</span>
                        </div>
                     </div>
                     <?php }?>
                     <li> <img width="24" height="24" class="as_profile_img b-error" title="Audio Price" src="<?= base_url() ?>front-assets/images/header/rupee_gray_light.png"> <span class="discount_price">Call: <?php if($actual_call_price > 0){?><span> <strike> <?php echo $actual_call_price; ?><span>/Min</span></strike></span><?php }?><span> <?php echo $final_price; ?><span class="smalltxt">/Min</span></span></span> </li>
                     <!--<li> <img width="24" height="24" class="as_profile_img b-error" title="Video Price" src="/front-assets/images/header/rupee_gray_light.png"> <span class="discount_price">Video Call:<span> Rs. <?php echo $video_price; ?>/Min</span></span> </li>-->
                     <?php } else { ?>       
                     <li> <img width="24" height="24" class="as_profile_img b-error" title="Audio Price" src="<?= base_url() ?>front-assets/images/header/dollor.png"> <span class="discount_price">Call:<span> USD $ <?php echo $dollar_price; ?><span>/Min</span></span></span> </li>
                     <!--<li> <img width="24" height="24" class="as_profile_img b-error" title="Video Price" src="/front-assets/images/header/rupee_gray_light.png"> <span class="discount_price">Video Call:<span> USD $ <?php echo $dollar_video_price; ?>/Min</span></span> </li>-->
                     <?php } ?>
                        
                  </ul>
                  <?php
                     if ($value->status == "Online") {
                         $call_duration = "";
                         foreach ($check_services as $row) {
                             if ($value->id == $row->astrologer_id) {
                                 $totTime = str_replace("Min", "", $row->call_duration);
                                 @$call_duration += $totTime;
                                 $queue = $row->queue;
                                 $userID = explode(',',$row->user_id);
                                //  print_r($userID);die;
                             }
                             if($this->session->userdata('id')==$row->customer_id){
                                 $callSt = $row->is_Active;
                             }
                         }
                         if ($call_duration == "" && $this->session->userdata('id') == "") {
                             ?>
                  <div class="onlineastro"><div class="online-inner"><a  href="#login-dialog" id="add_redirect"  class="popup-with-zoom-anim buy_btn online_queue cursor-pointer" style="color: #fff!important;">Call</a> <i class="fa fa-phone phone-icon" aria-hidden="true"></i></div> </div>
                  <?php } else if ($call_duration == "" && $this->session->userdata('id') != "") { ?>
                  <?php if (@$callSt == "Running" || @$callSt == "Accept") { ?>
                  <div class="onlineastro">
                      <div class="online-inner">
                            <a  data-toggle="modal" data-target="#astroCallModal" class="online_queue cursor-pointer" style="color: #fff!important;">Call</a>
                                <i class="fa fa-phone phone-icon" aria-hidden="true"></i>
                    </div>
                    </div>
                  <?php } else{?>
                  <?php if ($this->session->userdata('countryCode') == 'IN') { ?> 
                  <div class="astroModalPopup"> 
                     <input type="hidden" class="astroId" id="astroId_<?php echo $value->id; ?>" name="astroId_<?php echo $value->id; ?>" value="<?php echo $value->id; ?>"/>
                     <input type="hidden" class="astroAudioPrice" id="astroaudio_<?php echo $final_price; ?>" name="astroaudio_<?php echo $final_price; ?>" value="<?php echo $final_price; ?>"/>
                     <input type="hidden" class="astroName"  name="astroName" value="<?php echo $value->name; ?>"/>
                     <input type="hidden" class="astroVendorPrice"  name="astrovendor" value="<?php echo $vendor_price; ?>"/>
                     <input type="hidden" class="astrocall_password"  name="astrocall_password" value="<?php echo $value->call_password; ?>"/>
                     <input type="hidden" class="astrocall_userId"  name="astrocall_userId" value="<?php echo $value->call_userId; ?>"/>
                     <input type="hidden" class="astroVideoVendor"  name="astrovideovendor" value="<?php echo $vendor_video_price; ?>"/>
                     <input type="hidden" class="walletbalance"  name="walletbalance" value="<?php echo $wallet_balence[0]->wallet_balence; ?>"/>
                     <input type="hidden" class="astroVideoPrice" id="astrovideo_<?php echo $video_price; ?>" name="astrovideo_<?php echo $video_price; ?>" value="<?php echo $video_price; ?>"/>
                     <div class="onlineastro">
                           <div class="online-inner">
                           <a  class="online_queue cursor-pointer" style="color: #fff!important;">Call</a> <i class="fa fa-phone phone-icon" aria-hidden="true"></i>
                           </div>

                       </div>
                     
                  </div>
                  <?php } else { ?>
                  <div class="astroModalPopup"> 
                     <input type="hidden" class="astroId" id="astroId_<?php echo $value->id; ?>" name="astroId_<?php echo $value->id; ?>" value="<?php echo $value->id; ?>"/>
                     <input type="hidden" class="astroAudioPrice" id="astroaudio_<?php echo $dollar_price; ?>" name="astroaudio_<?php echo $dollar_price; ?>" value="<?php echo $dollar_price; ?>"/>
                     <input type="hidden" class="astroName"  name="astroName" value="<?php echo $value->name; ?>"/>
                     <input type="hidden" class="astrocall_password"  name="astrocall_password" value="<?php echo $value->call_password; ?>"/>
                     <input type="hidden" class="astrocall_userId"  name="astrocall_userId" value="<?php echo $value->call_userId; ?>"/>
                     <input type="hidden" class="astroVendorPrice"  name="astrovendor" value="<?php echo $dollar_vendor_price; ?>"/>
                     <input type="hidden" class="astroVideoVendor"  name="astrovideovendor" value="<?php echo $dollar_vendor_video_price; ?>"/>
                     <input type="hidden" class="walletbalance"  name="walletbalance" value="<?php echo $wallet_balence[0]->wallet_balence; ?>"/>
                     <input type="hidden" class="astroVideoPrice" id="astrovideo_<?php echo $dollar_video_price; ?>" name="astrovideo_<?php echo $dollar_video_price; ?>" value="<?php echo $dollar_video_price; ?>"/>
                     
                        <div class="onlineastro">
                            <div class="online-inner">
                            <a  class="online_queue cursor-pointer" style="color: #fff!important;">Call</a> 
                                <i class="fa fa-phone phone-icon" aria-hidden="true"></i>
                            </div>
                              
                        </div>
                  </div>
                  <?php } ?>
                  <?php } }else if ($call_duration != "" && $this->session->userdata('id') != "") { ?>
                  <?php if ($this->session->userdata('countryCode') == 'IN') { ?> 
                  <?php if ($queue == '2') { ?>
                  <a data-toggle="modal" data-target="#astroModal" class="buy_btn online_queue" style="background:#f77403!important;color: #fff!important;font-size:15px;">Busy</a>
                  <?php } else { ?>
                    <div class="astroModalPopup"> 
                        <input type="hidden" class="astroId" id="astroId_<?php echo $value->id; ?>" name="astroId_<?php echo $value->id; ?>" value="<?php echo $value->id; ?>"/>
                        <input type="hidden" class="astroAudioPrice" id="astroaudio_<?php echo $final_price; ?>" name="astroaudio_<?php echo $final_price; ?>" value="<?php echo $final_price; ?>"/>
                        <input type="hidden" class="astroName"  name="astroName" value="<?php echo $value->name; ?>"/>
                        <input type="hidden" class="astroVendorPrice"  name="astrovendor" value="<?php echo $vendor_price; ?>"/>
                        <input type="hidden" class="astrocall_password"  name="astrocall_password" value="<?php echo $value->call_password; ?>"/>
                        <input type="hidden" class="astrocall_userId"  name="astrocall_userId" value="<?php echo $value->call_userId; ?>"/>
                        <input type="hidden" class="astroVideoVendor"  name="astrovideovendor" value="<?php echo $vendor_video_price; ?>"/>
                        <input type="hidden" class="walletbalance"  name="walletbalance" value="<?php echo $wallet_balence[0]->wallet_balence; ?>"/>
                        <input type="hidden" class="astroVideoPrice" id="astrovideo_<?php echo $video_price; ?>" name="astrovideo_<?php echo $video_price; ?>" value="<?php echo $video_price; ?>"/>
                        <input type="hidden" class="waitTime" id="waitTime" value="<?=$call_duration?>">
                        <input type="hidden" class="waitQueue" id="waitQueue" value="<?=$queue?>">
                        <!-- <input type="hidden" class="joinQueue" id="joinQueue" value="joinQueue"> -->
                        <?php if(isset($userID)) { if(((isset($userID[0]) && $userID[0] == $this->session->userdata('id')) || (isset($userID[1]) && $userID[1] == $this->session->userdata('id')))) {?><input type="hidden" class="joinQueue" id="joinQueue" value="queueJoined"> <?php } else { ?> <input type="hidden" class="joinQueue" id="joinQueue" value="joinQueue">  <?php } }else { ?>  <input type="hidden" class="joinQueue" id="joinQueue" value="joinQueue"> <?php }?></a>
                       
                       <div class="onlineastro">
                           <div class="online-inner">
                           <a  class="buy_btn online_queue JoinCheck"   style="background:#f77403!important;color: #fff!important;font-size:15px;"><?php if(isset($userID)) { if(((isset($userID[0]) &&$userID[0] == $this->session->userdata('id')) || (isset($userID[1]) && $userID[1] == $this->session->userdata('id')))) {?>Queue Joined <?php } else { ?> <span > Join Queue </span>  <?php } }else { ?>  <span > Join Queue </span> <?php }?></a>
                           </div>

                       </div> 
                    </div>
                  <?php } ?>
                  <?php } else { ?>
                  <?php if ($queue == '2') { ?>
                  <a data-toggle="modal" data-target="#astroModal" class="buy_btn online_queue" style="background:#f77403!important;color: #fff!important;font-size:15px;">Busy</a>
                  <?php } else { ?>
                  <a  class="buy_btn online_queue JoinCheck"  style="background:#f77403!important;color: #fff!important;font-size:15px;"><?php if(isset($userID)) { if(($userID[0] == $this->session->userdata('id') || $userID[1] == $this->session->userdata('id'))) {?>Queue Joined <?php } else { ?> <span > Join Queue </span>  <?php } }else { ?>  <span > Join Queue </span> <?php }?></a>
                  <?php } ?>
                  <?php } ?>
                  <?php } else if ($call_duration != "" && $this->session->userdata('id') == "") { ?>
                  <div> <?php if ($queue == '2') { ?>
                     <a data-toggle="modal" data-target="#astroModal" class="buy_btn online_queue" style="background:#f77403!important;color: #fff!important;font-size:15px;">Busy</a>
                     <?php } else { ?>
                     <a  class="buy_btn online_queue JoinCheck" style="background:#f77403!important;color: #fff!important;font-size:15px;">Join Queue</a>
                     <?php } ?>
                  </div>
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
                        <i class="fa fa-phone phone-icon" aria-hidden="true"></i>
                     </div>
                    <?php if(($value->next_avail_call)!='')  { ?>
                     <p class="msg">Available at <?= $value->next_avail_call ?></p>
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
   .talk-section{display:block!important;}
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
           var joinQueue = $(this).children('input.joinQueue').val();
           var astroId = $(this).children('input.astroId').val();
           var astroName = $(this).children('input.astroName').val();
           var waitTime = $(this).children('input.waitTime').val();
           var waitQueue = $(this).children('input.waitQueue').val();
           var audioprice = $(this).children('input.astroAudioPrice').val();
           var vendorprice = $(this).children('input.astroVendorPrice').val();
           var videoprice = $(this).children('input.astroVideoPrice').val();
           var vendorvideoprice = $(this).children('input.astroVideoVendor').val();
           var walletbalance = $(this).children('input.walletbalance').val();
           var astrocall_userId = $(this).children('input.astrocall_userId').val();
           var astrocall_password = $(this).children('input.astrocall_password').val();
           if (walletbalance < audioprice * 5) {
               $('#astro_name').text(astroName);
               $("#walletModal").modal('show');
               return false;
           }
           if(joinQueue == 'joinQueue'){
                $("#joinQueueModal").modal('show');
                $("#popuastroid").val(astroId);
                $(".totalTimedelay").text(waitTime);
                $(".waitQueue").text(parseInt(waitQueue) + 1);
                $("#popuastroname").val(astroName);
                $("#popupaudioprice").val(audioprice);
                $("#popvendorprice").val(vendorprice);
                $("#popupvideoprice").val(videoprice);
                $("#popvendorvideoprice").val(vendorvideoprice);
                $("#popwalletbalance").val(walletbalance);
                $("#popupcall_userId").val(astrocall_userId);
                $("#popupcall_password").val(astrocall_password);
                $('.msgcalltype1').css('display', 'block');
                var call_duration = Math.trunc((walletbalance / audioprice)) + 1;
                var country_code = '<?php echo $this->session->userdata('countryCode') ?>';
                if (country_code == "IN" ) {
                $('.msgcalltype1').text('Your talktime is ' + call_duration + ' minutes.');
                } else{
                    $('.msgcalltype1').text('You can talk to ' + astroName + ' for ' + call_duration + ' minutes. Please Click on "Start Call" to proceed further.'); 
                }
                var audiocallprice = ((call_duration - 1) * audioprice);
                $('#call_price').val(audiocallprice);
                $('#vendor_price').val(vendorprice);
                $('#callType').val('Audio');
                $('#calltime').val(call_duration);
                $('#actualprice').val(audioprice);
                $('#timeLeft').val(call_duration);
            }else if(joinQueue != 'queueJoined'){
                $("#myModal").modal('show');
                $("#popuastroid").val(astroId);
                $("#popuastroname").val(astroName);
                $("#popupaudioprice").val(audioprice);
                $("#popvendorprice").val(vendorprice);
                $("#popupvideoprice").val(videoprice);
                $("#popvendorvideoprice").val(vendorvideoprice);
                $("#popwalletbalance").val(walletbalance);
                $("#popupcall_userId").val(astrocall_userId);
                $("#popupcall_password").val(astrocall_password);
                $('.msgcalltype1').css('display', 'block');
                var call_duration = Math.trunc((walletbalance / audioprice)) + 1;
                var country_code = '<?php echo $this->session->userdata('countryCode') ?>';
                if (country_code == "IN" ) {
                $('.msgcalltype1').text('You can talk to ' + astroName + ' for ' + call_duration + ' minutes. Please Click on "Start Call" you will receive an instant call from 0120-4874436 on your registered mobile no in Next 1 Minute.');
                } else{
                    $('.msgcalltype1').text('You can talk to ' + astroName + ' for ' + call_duration + ' minutes. Please Click on "Start Call" to proceed further.'); 
                }
                var audiocallprice = ((call_duration - 1) * audioprice);
                $('#call_price').val(audiocallprice);
                $('#vendor_price').val(vendorprice);
                $('#callType').val('Audio');
                $('#calltime').val(call_duration);
                $('#actualprice').val(audioprice);
                $('#timeLeft').val(call_duration);
            }
       });
       $("input[name=call_type]").change(function () {
           var call_type = $(this).val();
           $('.errorcallduration').css('display', 'none');
           $('.errorcallduration').text('');
           var astroid = $("#popuastroid").val();
           var astroName = $("#popuastroname").val();
           var audioprice = $("#popupaudioprice").val();
           var vendorprice = $("#popvendorprice").val();
           var walletbalance = $("#popwalletbalance").val();
           var videoprice = $("#popupvideoprice").val();
           var videovendorprice = $("#popvendorvideoprice").val();
           if (call_type == "Audio") {
               call_duration = Math.trunc((walletbalance / audioprice)) + 1;
           } else {
               call_duration = Math.trunc((walletbalance / videoprice));
           }
           $('#timeLeft').val(call_duration);
           var audiocallprice = ((call_duration - 1) * audioprice);
           var videocallprice = (call_duration * videoprice);
   
           if (call_type == "Audio") {
               $('#calltime').val(call_duration);
               $('.msgcalltype').css('display', 'none');
               $('.msgcalltype1').css('display', 'block');
               var country_code = '<?php echo $this->session->userdata('countryCode') ?>';
          if (country_code == "IN" ) {
           $('.msgcalltype1').text('You can talk to ' + astroName + ' for ' + call_duration + ' minutes. Please Click on "Start Call" you will receive an instant call from 0120-4874436 on your registered mobile no in Next 1 Minute.');
          } else{
             $('.msgcalltype1').text('You can talk to ' + astroName + ' for ' + call_duration + ' minutes. Please Click on "Start Call" to proceed further.'); 
          }
               $('#call_price').val(audiocallprice);
               $('#vendor_price').val(vendorprice);
               $('#callType').val('Audio');
               $('#actualprice').val(audioprice);
               $('#btnnext').removeClass('disabledhref');
           } else if (call_type == "Video") {
               $('#calltime').val(call_duration);
               $('.msgcalltype1').css('display', 'block');
               $('.msgcalltype1').text('You can talk to ' + astroName + ' for ' + call_duration + ' minutes. Please Click on "Start Call" you will receive an instant call on your registered mobile no in Next 1 Minute.');
               $('.msgcalltype').css('display', 'block');
               $('.msgcalltype').css('color', 'red');
               $('.msgcalltype').text('You must have a good wifi connection for uninterrupted Video call');
               $('#call_price').val(videocallprice);
               $('#vendor_price').val(videovendorprice);
               $('#callType').val('Video');
               $('#actualprice').val(videoprice);
               $('#btnnext').removeClass('disabledhref');
           }
   
       });
   
       $(".proceedtopay").click(function () {
           $("#joinQueueModal").modal('hide');
           $("#myModal").modal('hide');
           var call_type = $('#callType').val();
           var call_duration = $('#calltime').val();
           var timeleft = $('.totalTimedelay').text();
           var waitQueue = $('#waitQueue').text();
           $('#footerTime').text(timeleft);
           $('#footerQueue').text(parseInt(waitQueue));
           $('#timeLeft').text(timeleft);
           var astroid = $("#popuastroid").val();
           var joinQueue = $("#joinQueue").val();
           var call_count = $("#popupcall_count").val();
            var astroName = $("#popuastroname").val();
           $('#footerAstroname').text(astroName);
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
           if(joinQueue == 'joinQueue'){
                   var url =  "<?= base_url() ?>book-call-in-queue";
                   
           $("#myModal2").modal('show');
           $(".timefooter").css('display','block');
                }else{
                    $("#myModal2").modal('show');
                    var url = "<?= base_url() ?>book-call";
                }
                console.log('url',url);
            if (country_code == "IN" && call_count == 0) {
                var callNation = "Domestic";
               ajaxRequestMade = true;
               sessionStatusRequest = $.ajax({
                   url: url,
                   method: "POST",
                   data: {custNum: custNum, call_time: call_time, username: username, password: password,call_duration: call_duration, actualprice: actualprice, astrologer_id: astroid, call_price: callprice, vendor_price: vendorprice, call_type: call_type, callNation: callNation},
                   beforeSend: function () {
                       console.log('bbb : ' + sessionStatusRequest);
                       if (sessionStatusRequest != null)
                           sessionStatusRequest.abort();
                   },
                   success: function (data) {
                       $("#popupcall_count").val(1);
                       ajaxRequestMade = false;
                       var callerId = JSON.parse(data)
                       console.log(callerId);
                       Timer();
                       
                        $("#orderIDfooter").val(callerId.order_id);
                       var request_id = callerId.callId;
                               localStorage.setItem("call_request_id", request_id);
                               localStorage.setItem("call_status", "init");
                               localStorage.setItem("astrologer_id", astroid);
                               setTimeout(function () {
                                   update();
                               }, 20000);
                               function update() {
                                   $.ajax({
                                       url: '<?= base_url() ?>callevent.php', //php          
                                       data: {request_id: request_id},
                                       dataType: 'json', //data format
                                       method: "POST",
                                       success: function (callDetails) {
                                           //var callDetails = JSON.parse(result);
                                           if (callDetails.eventtype == "missed" || callDetails.eventtype == "answered") {
                                               $("#timeLeft").attr("val",'');
                                               clearInterval(interval);
                                               console.log(callDetails);
                                               console.log("1 = "+localStorage.getItem("call_request_id"));
                                               if(localStorage.getItem("call_request_id") != null) {
                                                   localStorage.removeItem("call_request_id");
                                                   localStorage.removeItem("call_status");
                                                   localStorage.removeItem("astrologer_id");
                                                   console.log("2 = "+localStorage.getItem("call_request_id"));
                                                   $.ajax({
                                                       url: '<?= base_url() ?>front/updatecallstatus', //php          
                                                       data: {request_id: request_id},
                                                       dataType: 'json', //data format
                                                       method: "POST",
                                                       success: function (result) {
                                                        //    location.reload();
                                                       }
                                                   });
                                               }
                                           } else if(callDetails.eventtype == "Talk"){
                                               $('#connect_astro').text('You Are connected with ' + astroName);
                                               if($('#timeLeft').attr("val") == "") {
                                                   var fiveMinutes = 60 * $('#calltime').val(),
                                                   display = document.querySelector('#timeLeft');
                                                   startTimer(fiveMinutes, display);
                                                   $("#timeLeft").attr("val",$('#calltime').val());
                                               }
                                           }
                                       }
                                   });
                               }
                               interval = setInterval(update, 10000);
                   }
               });
           } else{
                var callNation = "International";
                var agent_otp = "<?php echo $agent_otp = rand(1000, 9999); ?>"
                $("#callPin").text(agent_otp);
                $('#connect_astro1').text(astroName);
                ajaxRequestMade = true;
               sessionStatusRequest = $.ajax({
                   url: "<?= base_url() ?>book-call",
                   method: "POST",
                   data: {custNum: username, call_time: call_time, agent_otp:agent_otp, call_duration: call_duration, actualprice: actualprice, astrologer_id: astroid, call_price: callprice, vendor_price: vendorprice, call_type: call_type, callNation: callNation},
                   beforeSend: function () {
                       console.log('bbb : ' + sessionStatusRequest);
                       if (sessionStatusRequest != null)
                           sessionStatusRequest.abort();
                   },
                   success: function (data) {
                       $("#popupcall_count").val(1);
                       ajaxRequestMade = false;
                       var request_id = agent_otp;
                               localStorage.setItem("call_request_id", request_id);
                               localStorage.setItem("call_status", "init");
                               localStorage.setItem("astrologer_id", astroid);
                               setTimeout(function () {
                                   update();
                               }, 20000);
                               function update() {
                                   $.ajax({
                                       url: '<?= base_url() ?>callevent.php', //php          
                                       data: {request_id: request_id},
                                       dataType: 'json', //data format
                                       method: "POST",
                                       success: function (callDetails) {
                                           //var callDetails = JSON.parse(result);
                                           if (callDetails.eventtype == "missed" || callDetails.eventtype == "answered") {
                                               $("#timeLeft").attr("val",'');
                                               clearInterval(interval);
                                               console.log(callDetails);
                                               console.log("1 = "+localStorage.getItem("call_request_id"));
                                               if(localStorage.getItem("call_request_id") != null) {
                                                   localStorage.removeItem("call_request_id");
                                                   localStorage.removeItem("call_status");
                                                   localStorage.removeItem("astrologer_id");
                                                   console.log("2 = "+localStorage.getItem("call_request_id"));
                                                   $.ajax({
                                                       url: '<?= base_url() ?>front/updatecallstatus', //php          
                                                       data: {request_id: request_id},
                                                       dataType: 'json', //data format
                                                       method: "POST",
                                                       success: function (result) {
                                                           location.reload();
                                                       }
                                                   });
                                               }
                                           } else if(callDetails.eventtype == "CustomerUp"){
                                               $("#myModal2").hide();
                                                $("#myModalInter").show();
                                                $('#connect_astro').text('You Are connected with ' + astroName);
                                               if($('#timeLeft').attr("val") == "") {
                                                   var fiveMinutes = 60 * $('#calltime').val(),
                                                   display = document.querySelector('#timeLeft');
                                                   startTimer(fiveMinutes, display);
                                                   $("#timeLeft").attr("val",$('#calltime').val());
                                               }
                                           }
                                       }
                                   });
                               }
                               interval = setInterval(update, 10000);
                          
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
   
   function addQueue(astroId){
   $.ajax({
       url: '<?= base_url() ?>front/addQueue', //php          
       data: {astroId: astroId},
       dataType: 'json', //data format
       method: "POST",
       success: function (result) {
          
           if(result == 1){
               $('.JoinCheck').text("Queue Joined")
           }else{
               alert('Queue Already Full!')
           }
           // location.reload();
       }
   });
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
         //window.location.reload();
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

</script>
<!-- end Follow up -->
<!-- End Followup -->