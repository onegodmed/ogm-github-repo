<script type="text/javascript"> 
   localStorage.removeItem("runningchatVal");
         window.history.forward(); 
         function noBack() { 
            window.history.forward(); 
         } 
         $(document).ready(function () {
   $(window).on("resize", function (e) {
   checkScreenSize();
   });
   checkScreenSize();
   
   function checkScreenSize(){
   var newWindowWidth = $(window).width();
   if (newWindowWidth < 600) {
   $('.dobchatcust').attr('id','chat_cust_dob');
   }
   else
   {
   $('.dobchatcust').remove('id','chat_cust_dob');
   }
   }
   });
      
</script>
<!-- Loader starts from here -->
<div class="loader center" style="display:block">
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
<!--Breadcrumb start-->
<div class="ast_pagetitle profile-page">
   <style>
      #myform input, #myform select {
      padding-left: 50px;
      margin-top: -5px;
      margin-bottom:-15px;
      }
      #myform i.fa.fa-phone {
      position: relative;
      left: 15px;
      top: -20px !important;
      font-size: 25px;
      color: #777;
      }
      #myform i.fa.fa-inr {
      position: relative;
      top: 34px;
      left: 18px;
      font-size: 23px;
      color: #777;
      }
      #myform i.fa.fa-calendar{
      position: relative;
      top: 36px;
      left: -80px;
      font-size: 23px;
      color: #777;
      }
      #myform i.fa.fa-clock-o {
      position: relative;
      left: -65px;
      top: 37px !important;
      font-size: 25px;
      color: #777;
      }
      i.fa.fa-map-marker {
      font-size: 25px;
      color: #777;
      left: -85px;
      position: relative;
      top: 35px;
      }
      i.cll.fa.fa-list {
      font-size: 25px;
      color: #777;
      position: relative;
      top: 33px !important;
      left: -22px;
      }
      .ast_blog_comment_wrapper ul li {
      list-style: none;
      float: left;
      width: 100%;
      border-bottom: 1px solid #e1e1e1;
      margin-bottom: 15px;
      padding-bottom: 15px;
      background-color: #fafafa;
      padding: 20px;
      }
      .ast_blog_comment_wrapper {
      float: left;
      width: 100%;
      padding-bottom: 0px;
      padding-top: 30px;
      border-top: 1px solid #e1e1e1;
      border-bottom: 1px solid #e1e1e1;
      }
      .profile_pic {
      background-color: #ff8820;
      border: none;
      color: white;
      padding: 16px 22px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 18px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 100%;
      }
      .bar h4 {
      margin-top: 0;
      padding-left: 21px;
      }
      .bar-container {
      border-radius: 10px;
      }
      .bar-container div {
      border-radius: 10px;
      height: 15px;
      }
      /*span.fa.fa-star {
      font-size: 15px;
      color: #d4cdcd;
      }*/
      span.fa.fa-star {
      font-size: 25px;
      }
      .star-rating{
      line-height:0px;
      }
      .heading {
      font-size: 25px;
      margin-right: 25px;
      margin-top:50px;
      }
      .fa {
      /* font-size: 15px;*/
      }
      .checked {
      color:orange !important;
      }
      /* Three column layout */
      .side {
      float: left;
      width: 6%;
      margin-top:10px;
      }
      .middle {
      margin-top:10px;
      float: left;
      width: 70%;
      }
      .ast_team_box .row{
      padding:0px;
      margin:0px;
      }
      /* Place text to the right */
      .right {
      text-align: right;
      }
      /* Clear floats after the columns */
      .row:after {
      content: "";
      display: table;
      clear: both;
      }
      /* The bar container */
      .bar-container {
      width: 100%;
      background-color: #f1f1f1;
      text-align: center;
      color: white;
      }
      /* Individual bars */
      .bar-5 {height: 18px; background-color: #4CAF50;}
      .bar-4 {height: 18px; background-color: #2196F3;}
      .bar-3 {height: 18px; background-color: #00bcd4;}
      .bar-2 {height: 18px; background-color: #ff9800;}
      .bar-1 {height: 18px; background-color: #f44336;}
      .detail_discription .star-rating {
      line-height: 21px;
      font-size: 26px;
      padding:0;
      }
      .star-rating .rating {
      line-height: 0px;
      font-size: inherit;
      position: relative;
      top: -19px;
      left: 90px;
      }
      span.fa.fa-star-o {
      font-size: 25px;
      }
      /* Responsive layout - make the columns stack on top of each other instead of next to each other */
      @media (max-width: 400px) {
      .side, .middle {
      width: 100%;
      }
      .right {
      display: none;
      }
      }
      @media (max-width: 640px) {
      .astronew-area {
      position: absolute;
      /* top: 207px!important;
      left: 6px!important; */
      }
      .ast_comment_image p {
      text-align: center;
      width:290px;
      }
      .ast_comment_text {
      width: 100%;
      margin-top: 15px;
      text-align: center;
      }
      .ast_contact_details ul {
      float: none !important;
      width: auto !important;
      display: inline-block !important;
      top: 37px !important;
      }
      }
      .online_queue {
      color: #fff;
      background-position: right;
      font-size: 18px;
      display: block;
      margin-top: 0;
      text-align: center;
      padding: 6px 0 6px 0;
      background: #00e676!important;
      }
      .discount-area {
      position: absolute;
      top: 145px;
      right: -10px;
      }
      .astronew-area {
      position: absolute;
      top: 145px;
      left: -15px;
      }
      .discount-image {
      position: relative;
      }
      .discount-image img {
      width: 80px;
      height: 80px;
      border: none;
      }
      .discount-image span {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      }
      @media (max-width:600px){
      .detail_discription .a{
      font-size:17px;
      }
      .discount-image img {
      width: 50px;
      height: 50px;
      border: none;
      }
      .discount-area {
      position: absolute;
      top: 205px;
      right: 8px;
      }
      .discount-image span {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      }
      }
   </style>
   <div class="ast_img_overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="page_title">
               <h2><?php echo $mamber[0]->name ?></h2>
            </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="breadcrumb">
               <li><a href="<?php echo base_url() ?>">home</a></li>
               <li>//</li>
               <li><a href="#">astrologer</a></li>
               <li>//</li>
               <li><a href="#"><?php echo $mamber[0]->name ?></a></li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!--Breadcrumb end-->
<!--Blog section start-->
<div class="ast_blog_wrapper ast_toppadder80 ast_bottompadder80 profile">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="sidebar_wrapper">
               <div class="ast_team_box detail_discription">
                  <!-- <i class="fa fa-heart liked profile-icon" aria-hidden="true"></i> -->
                  <div class="avtar-icon-dscpsn">
                     <img src="<?php echo base_url('admin-assets/assets/images/users/'); ?><?php echo $mamber[0]->image ?>" alt="team">
                     <div class="avtar-icon-dscpsn-detail">
                        <h4><a href="#"><?php echo $mamber[0]->name ?></a></h4>
                        <p>
                           <?php echo $mamber[0]->expertise ?>
                        </p>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="star-rating">
                                 <?php
                                    if ($rating > 0) {
                                        for ($i = 0; $i < 1; $i++) {
                                            if ($i < $rating) {
                                                $tmp_class = 'fa fa-star';
                                            } else {
                                                $tmp_class = 'fa fa-star-o';
                                            }
                                            ?>
                                            <div class="rating-wrap">
                              <div>           
                                 <span class="<?php echo $tmp_class ?>" data-rating="1"></span> <span class="ratingnumber"><?php echo number_format($rating1[0]->rating, 2); ?></span>
                                 <?php }
                                    } else {
                                        ?>
                                 <span class="fa fa-star-o" data-rating="1"></span>
                                 <span class="fa fa-star-o" data-rating="2"></span>
                                 <span class="fa fa-star-o" data-rating="3"></span>
                                 <span class="fa fa-star-o" data-rating="4"></span>
                                 <span class="fa fa-star-o" data-rating="5"></span>
                                 <?php } ?>
                                 <input type="hidden" name="whatever1" class="rating-value" id="rating" value="<?php echo $rating ?>" >
                              </div>   
                                 <p style=" font-weight:bold;"> <span><i class="fa fa-user-o" aria-hidden="true"></i></span> ratings : <?php echo $totalrating; ?> </p>
                                    </div>
<!--Count follower  -->
<?php
$astroid = $mamber[0]->id;

  $this->load->model('Front_model'); 
$shivam = $this->db->select('*')->from('follow')->where(array('astro_id'=>$astroid,'user_id'=>$this->session->userdata('id')))->get()->row();
$count = $this->db->select('*')->from('follow')->where('astro_id',$astroid)->get()->result();

$countfollower = 320+count($count);
 ?>                                 
                                 <p style=" font-weight:bold;"><i class="fa fa-user profile-icon" aria-hidden="true"></i><?= $countfollower ?> Followers</p>
                              </div>
                           </div>
                        </div>
                        <div class="row followup">
                            <div class="col-md-6 col-xs-6">

 <?php
 $astroid = $mamber[0]->id;
$count = $this->db->select('*')->from('follow')->where('astro_id',$astroid)->get()->result();

  if($this->session->userdata('id')) {  ?>

  
                     
                              <div id="followastro<?= $astroid ?>" class="follow btn-style1">
                                 <button id="followastro<?= $astroid ?>" class="btn <?php if(!empty($shivam)) { echo "followed" ; } ?>" onclick="followup(<?= $astroid ?>)"><?php if(empty($shivam)) { echo "Follow" ; }else{ echo "Following";}?> </button>
                              </div>
                           
<?php } else { ?>
   
                              <div class="follow btn-style1">
                              <a href="#login-dialog"><button class="btn">Follow </button></a></div>
                           
 <?php } ?>    
<?php $astroid = $mamber[0]->id; ?>
                    
                              <div id="unfollowastro<?= $astroid ?>" class="follow btn-style1" style="display: none;"><button class="btn <?php if(empty($shivam)) { echo "followed" ; } ?>" onclick="unfollowup(<?= $astroid ?>)"><?php if(empty($shivam)) { echo "Following" ; }else{ echo "Follow";}?></button></div>
                           </div>

                           <input type="hidden" class="userid" value="<?php echo $this->session->userdata('id') ; ?>">

<?php if($mamber[0]->status != "Online" && $mamber[0]->chat_status != "Online") { ?>
                           <div class="col-md-6 col-xs-6 notifyme">
                              <div class="follow btn-style1">
                                 
                     <?php $userIds = explode(',',$userId) ?>
                              <div class="notificationtext">Notify me on availability.</div>
                                 <button class="btn <?php  if($this->session->userdata('id') != '' && in_array($this->session->userdata('id'),$userIds)){?>followed<?php } ?>" onclick="notifyMe('<?php echo $this->session->userdata('id');?>','<?php echo $astroid; ?>')" id="<?php echo $astroid; ?>">
                                     <i class="fa fa-bell-o profile-icon" aria-hidden="true"></i><?php  if($this->session->userdata('id') != '' && in_array($this->session->userdata('id'),$userIds)){?>Notified<?php } else {?><?php  if($this->session->userdata('id') == '' ){?>
                            <a class="popup-with-zoom-anim" href="#login-dialog">
                                    <span>Notify</span> </a><?php } else {?> <span>Notify</span> <?php } }?>
                                 </button>
                              </div>
                           </div>
                        <?php } ?>
                        </div>
                     </div>
                  </div>
                  <div class="descriptionofAstro">
                     <a class="a" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i><strong><?php echo $mamber[0]->experience ?></strong> </a>
                     <a class="a" href="#"><i class="fa fa-language" aria-hidden="true"></i><strong><?php echo $mamber[0]->langknown ?></strong> </a>
                     <?php if (count($services)) {
                        if (isset($services)) {
                            ?>
                     <?php if ($services[0]->menu_id != 2 AND $services[0]->menu_id != 1 AND $services[0]->menu_id != 4) { ?>
                     <?php if($mamber[0]->astro_new == "Yes"){?>
                     <div class="astronew-area">
                        <div class="discount-image">
                           <img src="<?= base_url() ?>front-assets/images/astro_new.png">
                        </div>
                     </div>
                     <?php  }?>
                     <?php if ($this->session->userdata('countryCode') == 'IN') { ?>
                     <?php if($services[0]->actual_call_price > 0 || $services[0]->actual_chat_price > 0){
                        if($services[0]->actual_call_price > 0){
                            $discPrice = (round(($services[0]->actual_call_price - $services[0]->price)/$services[0]->actual_call_price,2)*100);
                        }else if($services[0]->actual_chat_price > 0){
                            $discPrice = (round(($services[0]->actual_chat_price - $services[0]->chat_price)/$services[0]->actual_chat_price,2)*100);
                        }
                        ?>
                     <div class="discount-area">
                        <div class="discount-image">
                           <img src="<?= base_url() ?>front-assets/images/offer.png">
                           <span><?php echo @$discPrice;?>% Off</span>
                        </div>
                     </div>
                     <?php }?>
                     <a class="a" href="#"><i class="fa fa-inr" aria-hidden="true"></i>Call : <?php if($services[0]->actual_call_price > 0){?><span> <strike> <?php echo $services[0]->actual_call_price; ?>/Min</strike></span><?php }?> <strong><?php echo $services[0]->price . "/" . $services[0]->price_unit ?></strong> </a>
                     <?php if($services[0]->chat_price > 0){?> 
                     <a class="a" href="#"><i class="fa fa-inr" aria-hidden="true"></i>Chat : <?php if($services[0]->actual_chat_price > 0){?><span> <strike> <?php echo $services[0]->actual_chat_price; ?>/Min</strike></span><?php }?> <strong><?php echo $services[0]->chat_price . "/" . $services[0]->price_unit ?></strong> </a>
                     <?php }} else { ?>  
                     <a class="a" href="#"><i class="fa fa-usd" aria-hidden="true"></i>Call : <strong><?php echo $services[0]->dollar_price . "/" . $services[0]->price_unit ?></strong> </a>
                     <?php if($services[0]->chat_price > 0){?>
                     <a class="a" href="#"><i class="fa fa-usd" aria-hidden="true"></i>Chat  : <strong><?php echo $services[0]->dollar_chat_price . "/" . $services[0]->price_unit ?></strong> </a>
                     <?php }} ?>
                     <!--<a class="a" href="#"><i class="fa fa-inr" aria-hidden="true"></i>Video Charges : <strong><?php echo $services[0]->video_price . "/" . $services[0]->price_unit ?></strong> </a>-->
                     <?php } else { ?>
                     <a class="a" href="#"><i class="fa fa-inr" aria-hidden="true"></i>Service Price : <strong><?php echo $services[0]->price . "/" . $services[0]->price_unit ?></strong> </a>
                     <?php } ?>
                  </div>
                  <?php }
                     }
                     ?>
                     
                  <div class="communication">
                  <?php
                     if ($services[0]->astrologer_id == $mamber[0]->id) {
                         $final_price = $services[0]->price;
                         $video_price = $services[0]->video_price;
                         $vendor_price = $services[0]->vendor_price;
                         $vendor_video_price = $services[0]->vendor_video_price;
                         $dollar_price = $services[0]->dollar_price;
                         $dollar_vendor_price = $services[0]->vendor_dollar_price;
                         $dollar_video_price = $services[0]->video_dollar_price;
                         $dollar_vendor_video_price = $services[0]->vendor_video_dollar_price;
                         $chat_price = $services[0]->chat_price;
                         $vendor_chat_price = $services[0]->vendor_chat_price;
                         $dollar_chat_price = $services[0]->dollar_chat_price;
                         $dollar_vendor_chat_price = $services[0]->vendor_dollar_chat_price;
                     }
                     if ($mamber[0]->status == "Online") {
                         $call_duration = "";
                         $callSt="";
                         foreach ($check_services as $row) {
                             if ($mamber[0]->id == $row->astrologer_id) {
                                 $totTime = str_replace("Min", "", $row->call_duration);
                                 @$call_duration += $totTime;
                             }
                             if($this->session->userdata('id')==$row->customer_id){
                                         $callSt = $row->is_Active;
                                     }
                         }
                         if ($call_duration == "" && $this->session->userdata('id') == "") {
                             ?>
                  <div class="follow btn-style1 text-center profile-follow"><button class="btn shadow">Follow</button></div>
                  <div class="profile-tele">
                     <a class="popup-with-zoom-anim buy_btn online_queue" href="#login-dialog" id="add_redirect"><i class="fa fa-phone" aria-hidden="true"></i> Call Now
                     <span class="pricepermin"> Call Now <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $services[0]->price; ?>/min</span>
                  </a>
                     <!-- <span><i class="fa fa-comments call_btn1" aria-hidden="true"></i> <a href="#signup-dialog" id="add_redirect" class="popup-with-zoom-anim buy_btn online_queue" style="color: #fff!important;">Chat</a> </span> -->
                  </div>
                  <?php } else if ($call_duration == "" && $this->session->userdata('id') != "") { ?>
                  <?php if (@$callSt == "Running" || @$callSt == "Accept") { ?>
                  <div> <a class="online_queue cursor-pointer" data-toggle="modal" data-target="#astroCallModal"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a>
                  </div>
                  <?php } else{?>
                  <?php if ($this->session->userdata('countryCode') == 'IN') { ?> 
                  <div class="astroModalPopupData profile-tele"> 
                     <input type="hidden" class="astroId" id="astroId_<?php echo $mamber[0]->id; ?>" name="astroId_<?php echo $mamber[0]->id; ?>" value="<?php echo $mamber[0]->id; ?>"/>
                     <input type="hidden" class="astroAudioPrice" id="astroaudio_<?php echo $final_price; ?>" name="astroaudio_<?php echo $final_price; ?>" value="<?php echo $final_price; ?>"/>
                     <input type="hidden" class="astroName"  name="astroName" value="<?php echo $mamber[0]->name; ?>"/>
                     <input type="hidden" class="astroVendorPrice"  name="astrovendor" value="<?php echo $vendor_price; ?>"/>
                     <input type="hidden" class="astrocall_password"  name="astrocall_password" value="<?php echo $mamber[0]->call_password; ?>"/>
                     <input type="hidden" class="astrocall_userId"  name="astrocall_userId" value="<?php echo $mamber[0]->call_userId; ?>"/>
                     <input type="hidden" class="astroVideoVendor"  name="astrovideovendor" value="<?php echo $vendor_video_price; ?>"/>
                     <input type="hidden" class="walletbalance"  name="walletbalance" value="<?php echo $wallet_balence[0]->wallet_balence; ?>"/>
                     <input type="hidden" class="astroVideoPrice" id="astrovideo_<?php echo $video_price; ?>" name="astrovideo_<?php echo $video_price; ?>" value="<?php echo $video_price; ?>"/>
                     <div>
                     <a class="online_queue" data-toggle="modal" data-target="#myModal"><i class="fa fa-phone" aria-hidden="true"></i> Call Now
                     <span class="pricepermin"> Call Now <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $services[0]->price; ?>/min</span>
                  </a>
                     </div>
                     
                  
                  </div>
                  <?php } else { ?>
                  <div class="astroModalPopupData profile-tele"> 
                     <input type="hidden" class="astroId" id="astroId_<?php echo $mamber[0]->id; ?>" name="astroId_<?php echo $mamber[0]->id; ?>" value="<?php echo $mamber[0]->id; ?>"/>
                     <input type="hidden" class="astroAudioPrice" id="astroaudio_<?php echo $dollar_price; ?>" name="astroaudio_<?php echo $dollar_price; ?>" value="<?php echo $dollar_price; ?>"/>
                     <input type="hidden" class="astroName"  name="astroName" value="<?php echo $mamber[0]->name; ?>"/>
                     <input type="hidden" class="astroVendorPrice"  name="astrovendor" value="<?php echo $dollar_vendor_price; ?>"/>
                     <input type="hidden" class="astrocall_password"  name="astrocall_password" value="<?php echo $mamber[0]->call_password; ?>"/>
                     <input type="hidden" class="astrocall_userId"  name="astrocall_userId" value="<?php echo $mamber[0]->call_userId; ?>"/>
                     <input type="hidden" class="astroVideoVendor"  name="astrovideovendor" value="<?php echo $dollar_vendor_video_price; ?>"/>
                     <input type="hidden" class="walletbalance"  name="walletbalance" value="<?php echo $wallet_balence[0]->wallet_balence; ?>"/>
                     <input type="hidden" class="astroVideoPrice" id="astrovideo_<?php echo $dollar_video_price; ?>" name="astrovideo_<?php echo $dollar_video_price; ?>" value="<?php echo $dollar_video_price; ?>"/>
                     <div>
                     <a class="online_queue" data-toggle="modal" data-target="#myModal"><i class="fa fa-phone" aria-hidden="true"></i> Call Now
                     <span class="pricepermin"> Call Now <i class="fa fa-usd" aria-hidden="true"></i><?php echo $services[0]->dollar_price; ?>/min</span>
                     </a>
                     </div>
                    
                 
                  </div>
                  <?php }?>
                  <?php } }else if ($call_duration != "" && $this->session->userdata('id') != "") { ?>
                  <!--<a data-toggle="modal" data-target="#astroModal" class="buy_btn online_queue" style="background:#f77403!important;color: #fff!important;font-size:15px;">Busy</a>-->
                  <?php } else if ($call_duration != "" && $this->session->userdata('id') == "") { ?>
                  <!--<a  href="#signup-dialog" id="add_redirect" class="popup-with-zoom-anim buy_btn online_queue cursor-pointer" style="background:#f77403!important;color: #fff!important;font-size:15px;">Busy</a>-->
                  <?php } } else { ?>   
                  <!-- <a  class="online_queue cursor-pointer" style="background-color: #c5bbbb!important;color: #e0e0e0!important;border: 1px solid #c5bbbb !important;">Offline for Call</a> -->
                  
                  <div class="profile-tele">
                     <a  class="online_queue cursor-pointer" style="background-color: #c5bbbb!important;border: 1px solid #c5bbbb !important;">Offline 
                     <i class="fa fa-phone" aria-hidden="true"></i>
                     <span class="pricepermin"> Offline <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $services[0]->price; ?>/min</span>
                  </a>
                  <?php if($mamber[0]->next_avail_call!='')  { ?>
                  <p>Available at <?php echo $mamber[0]->next_avail_call ; ?></p>
                  <?php } ?>
                  </div>
                  <?php }  ?>
                  <!-- <br> -->
                  <?php if ($mamber[0]->chat_status == "Online") {
                     $call_duration = "";
                     $call_duration = "";
                     foreach ($check_services as $row) {
                         if ($mamber[0]->id == $row->astrologer_id) {
                             $totTime = str_replace("Min", "", $row->call_duration);
                             @$call_duration += $totTime;
                         }
                         if($this->session->userdata('id')==$row->customer_id){
                                     $callSt = $row->is_Active;
                                 }
                     }
                     if ($call_duration == "" && $this->session->userdata('id') == "") {
                         ?>
                  
                  <div class="profile-tele">
                     <a class="popup-with-zoom-anim buy_btn online_queue" href="#login-dialog" id="add_redirect"><i class="fa fa-comments" aria-hidden="true"></i> Chat Now<span class="pricepermin"> Chat Now <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $services[0]->chat_price; ?>/min</span></a></div>
                  <?php } else if ($call_duration == "" && $this->session->userdata('id') != "") { ?>
                  <?php if (@$callSt == "Running" || @$callSt == "Accept") { ?>
                  <!--     <div> <a class="online_queue cursor-pointer" data-toggle="modal" data-target="#astroCallModal"><i class="fa fa-comments" aria-hidden="true"></i> Chat Now</a>-->
                  <!--</div>-->
                  <?php } else{?>
                  <?php if ($this->session->userdata('countryCode') == 'IN') { ?> 
                  <div class="astroChatModalPopupData profile-tele">
                     <input type="hidden" class="astroId" id="astroId_<?php echo $mamber[0]->id; ?>" name="astroId_<?php echo $mamber[0]->id; ?>" value="<?php echo $mamber[0]->id; ?>"/>
                     <input type="hidden" class="astroName"  name="astroName" value="<?php echo $mamber[0]->name; ?>"/>
                     <input type="hidden" class="walletbalance"  name="walletbalance" value="<?php echo $wallet_balence[0]->wallet_balence; ?>"/>
                     <input type="hidden" class="astroChatVendor"  name="astrochatvendor" value="<?php echo $vendor_chat_price; ?>"/>
                     <input type="hidden" class="astroChatPrice" id="astrochat_<?php echo $chat_price; ?>" name="astrochat_<?php echo $chat_price; ?>" value="<?php echo $chat_price; ?>"/>
                     <a class="online_queue cursor-pointer" data-toggle="modal" data-target="#mychatModal"><i class="fa fa-comments" aria-hidden="true"></i> Chat Now
                     <span class="pricepermin"> Chat Now <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $services[0]->chat_price; ?>/min</span>
                     </a>
                  </div>
                  <?php } else { ?>
                  <div class="astroChatModalPopupData profile-tele">
                     <input type="hidden" class="astroId" id="astroId_<?php echo $mamber[0]->id; ?>" name="astroId_<?php echo $mamber[0]->id; ?>" value="<?php echo $mamber[0]->id; ?>"/>
                     <input type="hidden" class="astroName"  name="astroName" value="<?php echo $mamber[0]->name; ?>"/>
                     <input type="hidden" class="walletbalance"  name="walletbalance" value="<?php echo $wallet_balence[0]->wallet_balence; ?>"/>
                     <input type="hidden" class="astroChatVendor"  name="astrochatvendor" value="<?php echo $dollar_vendor_chat_price; ?>"/>
                     <input type="hidden" class="astroChatPrice" id="astrochat_<?php echo $dollar_chat_price; ?>" name="astrochat_<?php echo $dollar_chat_price; ?>" value="<?php echo $dollar_chat_price; ?>"/>
                     <a class="online_queue cursor-pointer" data-toggle="modal" data-target="#mychatModal"><i class="fa fa-comments" aria-hidden="true"></i> Chat Now
                     <span class="pricepermin"> Chat Now <i class="fa fa-usd" aria-hidden="true"></i> <?php echo $services[0]->dollar_chat_price; ?>/min</span>
                  </a>
                  </div>
                  <?php } ?>
                  <?php } }else if ($call_duration != "" && $this->session->userdata('id') != "") { ?>
                  <a data-toggle="modal" data-target="#astroModal" class="buy_btn online_queue" style="background:#f77403!important;color: #fff!important;font-size:15px;">Busy</a>
                  <?php } else if ($call_duration != "" && $this->session->userdata('id') == "") { ?>
                  <a  href="#login-dialog" id="add_redirect" class="popup-with-zoom-anim buy_btn online_queue cursor-pointer" style="background:#f77403!important;color: #fff!important;font-size:15px;">Busy</a>
                  <?php } } else if($mamber[0]->chat_status == "Inactive"){ } else { if($mamber[0]->next_avail_chat!=''){ ?>
                     <!-- class communication -->
                 <div class="profile-tele"> 
                 <div class="">   
                  <a  class="online_queue cursor-pointer" style="background-color: #c5bbbb!important;border: 1px solid #c5bbbb !important;">Offline 
                  <i class="fa fa-comments" aria-hidden="true"></i>
                  <span class="pricepermin"> Offline <i class="fa fa-inr" aria-hidden="true"></i><?php echo $services[0]->chat_price; ?>/min</span>
               </a>
                  <?php if($mamber[0]->next_avail_chat!='')  { ?>
                  <p>Available at <?php echo $mamber[0]->next_avail_chat ; ?></p>
                  <?php } ?>
               </div>
               <div class="">   
                  <!-- <a  class="online_queue cursor-pointer" style="background-color: #c5bbbb!important;color: #e0e0e0!important;border: 1px solid #c5bbbb !important;">Offline for Call</a>
                  <p>Available in <?php echo $mamber[0]->next_avail_call ; ?></p> -->
               </div>   
                  </div>
                  <?php } } ?>
                  <!-- <br> -->
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="modal" id="astroModal">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Busy</h4>
                     </div>
                     <!-- Modal body -->
                     <div class="modal-body">
                        <label>Please choose another astrologer because astrologer busy on another call.</label>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal" id="astroCallModal">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Busy</h4>
                     </div>
                     <!-- Modal body -->
                     <div class="modal-body">
                        <label>Your previous booking not completed yet. Please finish your previous booking then generate a new booking</label>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal" id="walletModal">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <?php if ($this->session->userdata('countryCode') == 'IN') { ?>
                        <h4 class="modal-title">Insufficient Balance: Rs. <?php echo $wallet_balence[0]->wallet_balence; ?></h4>
                        <?php } else { ?>
                        <h4 class="modal-title">Insufficient Balance: USD $ <?php echo $wallet_balence[0]->wallet_balence; ?></h4>
                        <?php } ?>
                     </div>
                     <!-- Modal body -->
                     <div class="modal-body">
                        <label>Your wallet balance is low, talk to <span id="astro_name"></span>. Please recharge your wallet.</label><br><br>
                        <center> <a href="<?= base_url() ?>wallet/" class="ast_btn">Recharge Now</a></center>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="ast_blog_box about_vender">
               <div class="ast_blog_info">
                  <h3 class="ast_blog_info_heading">About Me</h3>
                  <p class="ast_blog_info_details">
                     <?php echo $mamber[0]->description; ?>
                  </p>
               </div>
            </div>
            <!-- ============= -->
            <div class="clearfix"></div>
            <!-- <?php if ($this->session->userdata('id')) { ?>
               <div class="ast_blog_message_wrapper">
                  <h4 class="ast_blog_heading">Leave a Review</h4>
                  <div class="ast_blog_messages">
                     <form action="<?php echo base_url('front/submit_reviews') ?>" method="post">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="r_rat">
                                 <label>Give Rating</label>
                                 <div class="star-rating">
                                    <fieldset class="rating">
                                       <input type="radio" class="ratingcount" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                       <input type="radio" class="ratingcount" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                       <input type="radio" class="ratingcount" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                       <input type="radio" class="ratingcount" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                       <input type="radio" class="ratingcount" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                       <input type="radio" class="ratingcount" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                       <input type="radio" class="ratingcount" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                       <input type="radio" class="ratingcount" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                       <input type="radio" class="ratingcount" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                       <input type="radio" class="ratingcount" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                    </fieldset>
                                    <input type="hidden" name="whatever1" class="rating-value" id="rating" value="<?php echo $rating ?>" >
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <textarea rows="5" placeholder="Your Message" name="reviews" ></textarea>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <input type="text" placeholder="Name*" name="name" required="">
                              <input type="hidden" placeholder="Name*" name="astrologer_id" value="<?php echo $mamber[0]->id; ?>">
                              <input type="hidden" placeholder="Name*" name="service_id" value="<?php
                  if (isset($services[0])) {
                     echo $services[0]->category_id;
                  } else {
                     echo 'None';
                  }
                  ?>">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <input type="email" placeholder="Email*" name="email" required="">
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <input type="submit" name="submit" id="ed_submit" class="ast_btn" value="Submit Review">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <?php } ?> 
            <!--  test  -->
            <style>
               /****** Style Star Rating Widget *****/
               .modal-header {
               padding: 15px;
               border-bottom: 1px solid #e5e5e5;
               background: #f77403;
               }
               button.close {
               padding: 0;
               cursor: pointer;
               background: transparent;
               border: 0;
               -webkit-appearance: none;
               }
               button.close {
               font-size: 34px;
               line-height: 17px;
               color: #fff;
               opacity: 1;
               }
               .modal-title {
               margin: 0;
               line-height: 1.42857143;
               color: #fff;
               }
               .rating { 
               border: none;
               float: left;
               }
               .rating > input { display: none; } 
               .rating > label:before { 
               margin: 5px;
               font-size: 1.25em;
               font-family: FontAwesome;
               display: inline-block;
               content: "\f005";
               }
               .rating > .half:before { 
               content: "\f089";
               position: absolute;
               display:none;
               }
               .rating > label { 
               color: #ddd; 
               float: right; 
               }
               /***** CSS Magic to Highlight Stars on Hover *****/
               .rating > input:checked ~ label, /* show gold star when clicked */
               .rating:not(:checked) > label:hover, /* hover current star */
               .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */
               .rating > input:checked + label:hover, /* hover current star when changing rating */
               .rating > input:checked ~ label:hover,
               .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
               .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
            </style>
         </div>
      </div>
      <div class="row image-here hide-on-desktop">
        
         <div class="col-lg-12">
            <div class="owl-carousel owl-theme ss_carousel" id="menagesd">
               <div class="item">
                  <div class="astro-image">
                  <img src="<?php echo base_url('admin-assets/assets/images/users/'); ?><?php echo $mamber[0]->image ?>" alt="team">
                  </div>
               </div>
               <div class="item">
                  <div class="astro-image ">
                     <img src="<?php echo base_url('admin-assets/assets/images/users/'); ?><?php echo $mamber[0]->image ?>" alt="team">
                  </div>
               </div>
               <div class="item">
               <div class="astro-image">
               <img src="<?php echo base_url('admin-assets/assets/images/users/'); ?><?php echo $mamber[0]->image ?>" alt="team">
            </div>
               </div>
               <div class="item">
               <div class="astro-image">
               <img src="<?php echo base_url('admin-assets/assets/images/users/'); ?><?php echo $mamber[0]->image ?>" alt="team">
            </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row image-here so-on-desktop">
         <div class="col-md-3 col-xs-6 col-sm-3">
            <div class="astro-image">
               <img src="<?php echo base_url('admin-assets/assets/images/users/'); ?><?php echo $mamber[0]->image ?>" alt="team">
            </div>
         </div>
         <div class="col-md-3 col-xs-6 col-sm-3">
            <div class="astro-image ">
               <img src="<?php echo base_url('admin-assets/assets/images/users/'); ?><?php echo $mamber[0]->image ?>" alt="team">
            </div>
         </div>
         <div class="col-md-3 col-xs-6 col-sm-3">
            <div class="astro-image">
               <img src="<?php echo base_url('admin-assets/assets/images/users/'); ?><?php echo $mamber[0]->image ?>" alt="team">
            </div>
         </div>
         <div class="col-md-3 col-xs-6 col-sm-3">
            <div class="astro-image">
               <img src="<?php echo base_url('admin-assets/assets/images/users/'); ?><?php echo $mamber[0]->image ?>" alt="team">
            </div>
         </div>
      </div>
      <div class="row">
         <!--Astrologer Reviews start-->
         <div class="ratinghere">
            <div class="col-lg-12 d-flex align-items-center">
               <div class="starhere">
                  <!-- <span class="heading">User Rating</span> -->
                  <p><?php echo $avgrating; ?> </p>
                  <div class="star-rating starwithbar">
                     <?php
                        if ($rating > 0) {
                           for ($i = 0; $i < 5; $i++) {
                              if ($i < $rating) {
                                    $tmp_class = 'fa fa-star';
                              } else {
                                    $tmp_class = 'fa fa-star-o';
                              }
                              ?>
                     <span class="<?php echo $tmp_class ?>" data-rating="<?php echo $i; ?>"></span>
                     <?php }
                        } else {
                           ?>
                     <span class="fa fa-star-o" data-rating="1"></span>
                     <span class="fa fa-star-o" data-rating="2"></span>
                     <span class="fa fa-star-o" data-rating="3"></span>
                     <span class="fa fa-star-o" data-rating="4"></span>
                     <span class="fa fa-star-o" data-rating="5"></span>
                     <?php } ?>
                  </div>
                  <i class="fa fa-user" aria-hidden="true"></i><span><?php echo $totalstarrating; ?> Total</span>
               </div>
               <div class="bar">
                  <!-- <div class="side">
                     <div>5 star</div>
                     </div> -->
                  <h4>Rating</h4>
                  <div class="side">
                     <div>5</div>
                  </div>
                  <div class="middle">
                     <div class="bar-container">
                        <div class="bar-5" style="width: <?php echo @$arrtotalrating["5_rat"]; ?>%;"></div>
                     </div>
                  </div>
                  <!-- <div class="side">
                     <div>4 star</div>
                     </div> -->
                  <div class="side">
                     <div>4</div>
                  </div>
                  <div class="middle">
                     <div class="bar-container">
                        <div class="bar-4" style="width: <?php echo @$arrtotalrating["4_rat"]; ?>%;"></div>
                     </div>
                  </div>
                  <!-- <div class="side">
                     <div>3 star</div>
                     </div> -->
                  <div class="side">
                     <div>3</div>
                  </div>
                  <div class="middle">
                     <div class="bar-container">
                        <div class="bar-3" style="width: <?php echo @$arrtotalrating["3_rat"]; ?>%;"></div>
                     </div>
                  </div>
                  <!-- <div class="side">
                     <div>2 star</div>
                     </div> -->
                  <div class="side">
                     <div>2</div>
                  </div>
                  <div class="middle">
                     <div class="bar-container">
                        <div class="bar-2" style="width: <?php echo @$arrtotalrating["2_rat"]; ?>%;"></div>
                     </div>
                  </div>
                  <!-- <div class="side">
                     <div>1 star</div>
                     </div> -->
                  <div class="side ">
                     <div>1</div>
                  </div>
                  <div class="middle">
                     <div class="bar-container">
                        <div class="bar-1" style="width: <?php echo @$arrtotalrating["1_rat"]; ?>%;"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Astrologer Reviews end-->
      </div>
      <div class=" row commenthere">
         <div class="col-md-8">
            <div class="ast_blog_comment_wrapper">
               <div class="sortingtab">
                  <p>Sort</p>
                  <div class="sortby">
                     <div>
                        <form>
                           <label class="checkcontainer">Most Helpful
                           <input type="radio" checked="checked" name="radio">
                           <span class="radiobtn"></span>
                           </label>
                           <label class="checkcontainer">Most Recent
                           <input type="radio" name="radio">
                           <span class="radiobtn"></span>
                           </label>
                        </form>
                     </div>
                     <!-- <div class="form-check">
                        <label class="form-check-label" for="helpful">
                             Most helpful
                          </label>
                          <input class="form-check-input" type="radio" name="helpful" id="helpful">
                         
                        </div> -->
                     <!-- <div class="form-check">
                        <label class="form-check-label" for="Recent">
                             Most Recent
                          </label>
                          <input class="form-check-input" type="radio" name="Recent" id="Recent">
                         
                        </div> -->
                  </div>
               </div>
               <ul id="myList" class="mylisting">
                  <?php foreach ($review as $key => $row) {
                     ?>
                  <li>
                     <div class="ast_blog_comment">
                        <div class="ast_comment_image">
                           <p><button class="button profile_pic"><?php echo strtoupper(substr($row->name, 0, 1)); ?></button></p>
                        </div>
                        <div class="ast_comment_text">
                           <h5 class="ast_bloger_name"><?php echo mb_substr($row->name,0,1,"UTF-8") ?>xxxx</h5>
                           <div class="star-rating">
                              <?php
                                 if ($row->rating > 0) {
                                    for ($i = 0; $i < 5; $i++) {
                                       if ($i < $row->rating) {
                                             $tmp_class = 'fa fa-star';
                                       } else {
                                             $tmp_class = 'fa fa-star-o';
                                       }
                                       ?>
                              <span class="<?php echo $tmp_class ?>" data-rating="<?php echo $i; ?>"></span>
                              <?php }
                                 } else {
                                    ?>
                              <span class="fa fa-star-o" data-rating="1"></span>
                              <span class="fa fa-star-o" data-rating="2"></span>
                              <span class="fa fa-star-o" data-rating="3"></span>
                              <span class="fa fa-star-o" data-rating="4"></span>
                              <span class="fa fa-star-o" data-rating="5"></span>
                              <?php } ?>
                           </div>
                           <span class="ast_blog_date"><?php echo date('M d, Y', strtotime($row->date)); ?></span>
                           
                           <p class="ast_blog_post"><?php echo $row->reviews ?></p>
                           <?php $reply  = $this->db->select('*')->from('review_reply')->where('review_id',$row->reviewId)->get()->result();?>
                              <?php foreach($reply as $rep ){?>
                           <div class="reply">
                              <h6>Astrologer Reply</h6>
                              <p><?php echo $rep->reply; ?><p>
                           </div>
                           <?php }?>
                        </div>
                     </div>
                  </li>

                  <?php } ?>
                  
               </ul>
               <?php
              $maxkey=0;
              if(count($review) != 0){
                $maxkey=max(array_keys($review));
              }

               $astroid = $mamber[0]->id;

               ?>
                   <?php if(count($review) != 0){ ?> <p class="last_id" name="lastid" lastid="<?php echo $review[$maxkey]->id ?>">
                  <input type="hidden" class="astro__id" value="<?= $astroid ?>"></p> <?php } else { ?> <p class="norating">No ratings</p> <?php }?>

            <div class="loadmorebtn">
               <button class="btn" onclick="loadmore()">Load More...</button>
            </div>
               <div class="message-type">
                  <?php
                     $customer_id = $this->session->userdata('id');
                     $this->load->model('front_model', 'front');
                     $astroid = $mamber[0]->id;
                      $sql = $this->front->getids($customer_id,$astroid);
                     
                      if ($this->session->userdata('id') && !empty($sql) ) { ?>
                  <div class="ast_blog_message_wrapper">
                     <div class="ast_blog_messages">
                        <?php echo  $this->session->flashdata('message');?>
                        <form action="<?php echo base_url('front/submit_reviews') ?>" method="post">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="r_rat">
                                    <label>Give Rating</label>
                                    <div class="star-rating">
                                       <fieldset class="rating">
                                          <input type="radio" class="ratingcount" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                          <input type="radio" class="ratingcount" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                          <input type="radio" class="ratingcount" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                          <input type="radio" class="ratingcount" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                          <input type="radio" class="ratingcount" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                          <input type="radio" class="ratingcount" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                          <input type="radio" class="ratingcount" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                          <input type="radio" class="ratingcount" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                          <input type="radio" class="ratingcount" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                          <input type="radio" class="ratingcount" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                       </fieldset>
                                       <input type="hidden" name="whatever1" class="rating-value" id="rating" value="<?php echo $rating ?>" >
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                 <input type="hidden" placeholder="Name*" name="astrologer_id" value="<?php echo $mamber[0]->id; ?>">
                                 <div class="col-lg-10 col-md-8 col-sm-10 col-xs-8">
                                    <textarea rows="1" placeholder="Your Message" name="reviews" ></textarea>
                                 </div>
                                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 follow btn-style1">
                                    <input type="submit" name="submit" id="ed_submit" class="ast_btn shadow" value="Send">
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="availability">
               <h4 class="showavailavilitychart"> Check Availability</h4>
               <div class="daysTbale" style="display:none">

                   <?php foreach($timetable as $value1) {  ?> 
                   <div class="day-wrap">                   
                     <div class="day"><?= $value1->day ?></div>
                     <ul>
                        <?php $time =explode(",", $value1->time);
                                        if(isset($check[0])){
                                            $select_time = explode(",", $check[0][$value1->day]);
                                        }else{
                                            $select_time = [];
                                        }
                     foreach ($time as  $value) { 
                        if(in_array($value, $select_time)) { ?>

                        <li><?php echo  $value ;  ?></li>

                     <?php } }  ?>
                    
                     </ul> 
                      
                  </div>
                 <?php }  ?>
                  
               </div>
            </div>
         </div>
      </div>
      <div class="row chatandcallbtn">
         <div class="col-md-6 col-xs-6">
            <div class="notificationtext">Notify me on availability.</div>
            <a href="#login-dialog" id="add_redirect" class="popup-with-zoom-anim buy_btn online_queue cursor-pointer" style="color: #fff!important; position:relative;">Call:1.5/Min <i class="fa fa-phone phone-icon" aria-hidden="true" style="position:absolute; top:15px; font-size:18px; right:0px"></i></a> 
         </div>
         <div class="col-md-6 col-xs-6">
            <div class="subscribenewbtn">
               <button><i class="fa fa-bell" aria-hidden="true"></i>Subscribe</button>
            </div>
            <a class="online_queue cursor-pointer" style="background-color: #c5bbbb!important;color: #e0e0e0!important;border: 1px solid #c5bbbb !important; position:relative;">Chat:1.5/Min <i class="fa fa-comments call_btn1 phone-icon" aria-hidden="true" style="position:absolute; top:15px; font-size:18px; right:0px"></i></a>
         </div>
      </div>
   </div>
</div>
<div class="modal" id="myModal" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"> Call Details</h4>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <?php if ($this->session->userdata('countryCode') == 'IN') { ?>
            <h4>Your Wallet balance is Rs. <?php echo $wallet_balence[0]->wallet_balence; ?>.</h4>
            <?php } else { ?>
            <h4>Your Wallet balance is USD $ <?php echo $wallet_balence[0]->wallet_balence; ?>.</h4>
            <?php } ?>
            <hr>
            <label>Call Type</label><br><br>
            <input type="radio" id="Audio" name="call_type" class="au_call" value="Audio" checked>
            <label for="Audio"><i class="fa fa-volume-up"></i> Audio</label>
            <!--<input type="radio" id="Video" name="call_type" value="Video">-->
            <!--<label for="Video">Video</label><br><br>-->
            <hr>
            <div class="errorcalltype" style="display:none"></div>
            <div class="msgcalltype" style="display:none"></div>
            <div class="msgcalltype1" style="display:none"></div>
            <input type="hidden" id="popupaudioprice" name="popupaudioprice" value=""/>
            <input type="hidden" id="popuastroid" name="popuastroid" value=""/>
            <input type="hidden" id="popuastroname" name="popuastroname" value=""/>
            <input type="hidden" id="popvendorprice" name="popvendorprice" value=""/>
            <input type="hidden" id="popwalletbalance" name="popwalletbalance" value=""/>
            <input type="hidden" id="popupvideoprice" name="popupvideoprice" value=""/>
            <input type="hidden" id="popvendorvideoprice" name="popvendorvideoprice" value=""/>
            <input type="hidden" id="popupcall_userId" name="popupcall_userId" value=""/>
            <input type="hidden" id="popupcall_password" name="popupcall_password" value=""/>
            <input type="hidden" id="popupcall_count" name="popupcall_count" value="0"/>
            <input type="hidden" placeholder="Call Price" name="call_price1" id="call_price1" value="" readonly="" class="form-control">
            <br>
            <?php if ($this->session->userdata('countryCode') == "IN" ) { ?>
            <p id="pickmsg">If Astrologer not pick call , you can please choose Another Astologer.</p>
            <?php }?>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <input type="hidden" name="callType" id="callType" value="">
            <input type="hidden" name="call_duration" id="calltime" value="">
            <input type="hidden" placeholder="" name="vendor_price" id="vendor_price" value="">
            <input type="hidden" placeholder="Call Price" name="call_price" id="call_price" >
            <input type="hidden" placeholder="Actual Price" name="actualprice" id="actualprice" >
            <button type="button" id="proceedtopay" class="btn ast_btn btn_radius callBtn" >Start Call</button>
         </div>
      </div>
   </div>
</div>

<div class="modal" id="mychatModal" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"> Chat Details</h4>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <?php if ($this->session->userdata('countryCode') == 'IN') { ?>
            <h4>Your Wallet balance is Rs. <?php echo $wallet_balence[0]->wallet_balence; ?>.</h4>
            <?php } else { ?>
            <h4>Your Wallet balance is USD $ <?php echo $wallet_balence[0]->wallet_balence; ?>.</h4>
            <?php } ?>
            <hr>
            <label>Service Type</label><br><br>
            <input type="radio" id="Chat" name="call_type" class="au_chat" value="Chat" checked>
            <label for="Chat"><i class="fa fa-comments"></i> Chat</label>
            <hr>
            <div class="errorcalltype" style="display:none"></div>
            <div class="msgcalltype" style="display:none"></div>
            <div class="msgcalltype1" style="display:none"></div>
            <input type="hidden" id="popuastroid" name="popuastroid" value=""/>
            <input type="hidden" id="popuastroname" name="popuastroname" value=""/>
            <input type="hidden" id="popwalletbalance" name="popwalletbalance" value=""/>
            <input type="hidden" id="popupcall_count" name="popupcall_count" value="0"/>
            <input type="hidden" id="popupchatprice" name="popupchatprice" value=""/>
            <input type="hidden" id="popvendorchatprice" name="popvendorchatprice" value=""/>
            <input type="hidden" placeholder="Call Price" name="call_price1" id="call_price1" value="" readonly="" class="form-control">
            <br>
            <?php if ($this->session->userdata('countryCode') == "IN" ) { ?>
            <p id="pickmsg">If Astrologer not pick call , you can please choose Another Astologer.</p>
            <?php }?>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <input type="hidden" name="callType" id="callType" value="">
            <input type="hidden" name="call_duration" id="calltime" value="">
            <input type="hidden" placeholder="" name="vendor_price" id="vendor_price" value="">
            <input type="hidden" placeholder="Call Price" name="call_price" id="call_price" >
            <input type="hidden" placeholder="Actual Price" name="actualprice" id="actualprice" >
            <button type="button" id="proceedtonext" class="btn ast_btn btn_radius chatBtn">Proceed Now</button>
         </div>
      </div>
   </div>
</div>
<?php if ($this->session->userdata('countryCode') == 'IN') { ?>
<div class="modal" id="myModal2" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog modal-style">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Order Details</h4>
            <!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>-->
         </div>
         <div class="modal-body bg-gray">
            <p id="connect_astro"></p>
            <div class="example">
               <div class="bg-gray">Time left for call</div>
               <div id="timeLeft" val="">00:00</div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php } else { ?>
<div class="modal" id="myModal2" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog modal-style">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Order Details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body bg-gray">
            <p> Please Dial number "+91-120-5136019" from your phone. </p>
            <p>Enter your personalized PIN Code <span id="callPin">1234</span> for this call. After Entering PIN, please wait for sometime. You will Connected to <span id="connect_astro1"></span> in few seconds. </p>
            <p>Maximum Wait time to connect your call is 1 Minute. If Incase You are not connected in this duration Kindly please choose Another Astrologer. </p>
         </div>
      </div>
   </div>
</div>
<?php } ?>
<div class="modal" id="myModalInter" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog modal-style">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Order Details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body bg-gray">
            <p id="connect_astro"></p>
         </div>
         <div class="example">
            <div class="bg-gray">Time left for call</div>
            <div id="timeLeft" val="">00:00</div>
         </div>
      </div>
   </div>
</div>
<div class="modal" id="chatModal" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog modal-style">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body bg-gray">
            <div class="cust_chat_details">
               <form>
                  <label>
                  Your Name:</label>
                  <input type="text" name="chat_cust_name" class="form-control" id="chat_cust_name" required />
                  <p id="errorbirth"></p>
                  <label>
                  Gender:<span style="color:red;">*</span></label>
                  <select name="chat_cust_gender" class="form-control" id="chat_cust_gender" required>
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                  </select>
                  <p id="errorgender"></p>
                  <!-- <label>Your DOB</label>
                  <div class="input-group input-append date visible-xs" style="width:100%!important">
                     <input type="date" class="form-control dateofbirth" name="date" placeholder="DD/MM/YYYY"  tabindex="2"  onkeydown="return false" style="width:100%!important">
                  </div> -->
                  <label>Your DOB:<span style="color:red;">*</span></label>
                  <div class="input-group input-append date visible-xs" style="width:100%!important">
                     <input type="date" class="form-control dateofbirth dobchatcust" name="date" placeholder="DD/MM/YYYY" tabindex="2" onkeydown="return false" style="width:100%!important">
                  </div>

                  <div class="input-group input-append date date-picker hidden-xs">
                     <input type="tel" class="form-control dateofbirth" name="date" placeholder="DD/MM/YYYY"  tabindex="2" id="chat_cust_dob" onkeydown="return false" readonly>
                     <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                  </div>
                  <p id="errordob"></p>
                  <label> Your Birth Time (24 Hours format):</label>
                  <?php $hours = range(1, 23);
                     $minutes = range(1, 59);
                     $seconds =range(1, 59); ?>
                  <div class="chat_time">
                     <div  class="select-hour">
                        <label>Hours</label>
                        <select name="hour"  class="hour" id="hour" required>
                           <option value="00">00</option>
                           <?php
                              foreach ($hours as $hour) {
                                  ?>
                           <option value="<?php echo($hour) ?>"><?php echo($hour) ?></option>
                           <?php
                              }
                              ?>
                        </select>
                     </div>
                     <div  class="select-hour">
                        <label>Minutes</label>
                        <select name="minute" class= "minute" id="minute" required>
                           <option value="00">00</option>
                           <?php
                              foreach ($minutes as $minute) {
                                  ?>
                           <option value="<?php echo($minute) ?>"><?php echo($minute) ?></option>
                           <?php
                              }
                              ?>
                        </select>
                     </div>
                     <div class="select-hour">
                        <label>Seconds</label>
                        <select name="second" class= "second" id="second" required >
                           <option value="00">00</option>
                           <?php
                              foreach ($seconds as $second) {
                                  ?>
                           <option value="<?php echo($second) ?>"><?php echo($second) ?></option>
                           <?php
                              }
                              ?>
                        </select>
                     </div>
                  </div>
                  <p id="errortime"></p>
                  <label>Your Birth Place:</label>
                  <input type="text" name="chat_cust_place" class="form-control citysearchval2" id="chat_cust_place" required />
                  <input type="hidden" value="" class="selectcount" id="selectcount"/>
                  <div class="suggest2" style="display:none">
                     <div class="response2">
                        <ul class="suggest-results2"></ul>
                     </div>
                  </div>
                  <p id="errorplace"></p>
                  <br>
                  <div class="text-center">
                     <button type="button" id="chatproceed" class="btn ast_btn btn_radius">Start Chat</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   $(document).ready(function () {
       var interval = null;
       $(".astroModalPopupData").on('click', function (event) {
           var astroId = $(this).children('input.astroId').val();
           var astroName = $(this).children('input.astroName').val();
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
           $("#myModal").show();
           //alert('vivek');
           $("#popuastroid").val(astroId);
           $("#popuastroname").val(astroName);
           $("#popupaudioprice").val(audioprice);
           $("#popvendorprice").val(vendorprice);
           $("#popupvideoprice").val(videoprice);
           $("#popvendorvideoprice").val(vendorvideoprice);
           $("#popwalletbalance").val(walletbalance);
           $("#popupcall_userId").val(astrocall_userId);
           $("#popupcall_password").val(astrocall_password);
           $(".au_call").prop('checked',true);
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
       });
       $(".astroChatModalPopupData").on('click', function (event) {
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
           $("#mychatModal").show();
           $("#popuastroid").val(astroId);
           $("#popuastroname").val(astroName);
           $("#popupchatprice").val(chatprice);
           $("#popvendorchatprice").val(vendorchatprice);
           $("#popwalletbalance").val(walletbalance);
           $(".au_chat").prop('checked',true);
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
           $('#pickmsg').text('If ' + astroName + ' do not start the chat in Next 3-4 Minutes , You May Please choose another Astrologer.');
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
           } else if (call_type == "Video"){
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
              $('#pickmsg').text('If Astrologer not pick call , you can please choose Another Astologer.');
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
               $('#pickmsg').text('If Astrologer not pick call , you can please choose Another Astologer.');
           }
   
       });
   
       $("#proceedtopay").click(function () {
           $("#myModal").modal('hide');
           $("#myModal2").modal('show');
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
                                                           location.reload();
                                                       }
                                                   });
                                               }
                                           } else if(callDetails.eventtype == "CustomerUp"){
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
       
       $("#proceedtonext").click(function () {
           $("#mychatModal").modal('hide');
           $("#chatModal").modal('show');
        });
        
        $("#chatproceed").click(function () {
            var chat_cust_name = $("#chat_cust_name").val();
           var chat_cust_gender = $("#chat_cust_gender").val();
           var chat_cust_dob = $("#chat_cust_dob").val();
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
              if(chat_cust_name=="" && chat_cust_dob=="" && chat_cust_time=="" && chat_cust_place=="" && chat_cust_gender==""){
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
           if(chat_cust_gender==""){
               $('#errorgender').css('display', 'block');
               $('#errorgender').css('color', 'red');
               $('#errorgender').text('Please select the gender');
               return false;
           }
           if(chat_cust_dob==""){
               $('#errordob').css('display', 'block');
               $('#errordob').css('color', 'red');
               $('#errordob').text('Please enter your birth date');
               return false;
           }
           if(chat_cust_time==""){
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
   function rating() {
           var rating = $('.ratingcount').val();
           var user_id = '<?php echo $this->uri->segment(2); ?>';
           var service_id = '';
           $.ajax({
               url: "<?php echo base_url('front/ajax_submit_rating') ?>",
               type: 'POST',
               dataType: "json",
               data: {'rating': rating, 'service_id': service_id, 'user_id': user_id},
               success: function (response) {
                   if (response.status == 1) {
   
                   }
   
               }
           });
       }
   $("#chat_cust_name").keyup(function(e){
          $('#errorbirth').css('display', 'none');
   });
   $("#chat_cust_dob").bind("keypress", function (e) {
         var keyCode = e.which ? e.which : e.keyCode
              
         if (!(keyCode >= 48 && keyCode <= 57)) {
           $(".error").css("display", "inline");
           return false;
         }else{
           $(".error").css("display", "none");
         }
     });
     $("#chat_cust_time").bind("keypress", function (e) {
         var keyCode = e.which ? e.which : e.keyCode
              
         if (!(keyCode >= 48 && keyCode <= 57)) {
           $(".error").css("display", "inline");
           return false;
         }else{
           $(".error").css("display", "none");
         }
     });
     
     $("#chat_cust_name").keydown(function(event){
       var inputValue = event.which;
       // allow letters and whitespaces only.
       if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0) && (inputValue != 8) && (inputValue != 9)) { 
           event.preventDefault(); 
       }
   });
   $("#chat_cust_place").keydown(function(event){
       var inputValue = event.which;
       // allow letters and whitespaces only.
       if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0) && (inputValue != 8) && (inputValue != 9)) { 
           event.preventDefault(); 
       }
   });
   $("#chat_cust_dob").keyup(function(e){
    $('#errordob').css('display', 'none');
               if (e.keyCode != 8){  
           if ($(this).val().length == 2){
               $(this).val($(this).val() + "/");
           } else if ($(this).val().length == 5){
               $(this).val($(this).val() + "/");
           }
       } else {
           var temp = $(this).val();
          
           if ($(this).val().length == 5){               
               $(this).val(temp.substring(0,4));   
           } else if ($(this).val().length == 2){       
               $(this).val(temp.substring(0,1));   
           }
       }
           });
   $("#chat_cust_time").keyup(function(e){
    $('#errortime').css('display', 'none');
              if (e.keyCode != 8){  
           if ($(this).val().length == 2){
               $(this).val($(this).val() + ":");
           } else if ($(this).val().length == 5){
               $(this).val($(this).val() + ":");
           } 
       } else {
           var temp = $(this).val();
          
           if ($(this).val().length == 5){               
               $(this).val(temp.substring(0,4));   
           } else if ($(this).val().length == 2){       
               $(this).val(temp.substring(0,1));   
           }
       }
           });
   $("#chat_cust_place").on('keyup paste', function () {
   $('#errorplace').css('display', 'none');
       //console.log("test");
       var form = $(this).closest('form');
       var citysearch = $(this).val();
       var autocomplete_loader = form.find('.autocomplete-loader');
       var suggest2 = form.find('.suggest2');
       var suggest_results2 = form.find('.suggest-results2');
       form.find('input.selectcount').val('0');
       if (citysearch.length >= 3) {
           autocomplete_loader.show();
           $.ajax
                   ({
                       url: "<?= base_url()?>front/citydata",
                       data: {
                           "cityname": citysearch
                       },
                       type: 'post',
                       dataType: "html",
                       success: function (result, textStatus, request)
                       {
                           //console.log(result);
                           //console.log(textStatus);
                           //console.log(request);
                           var content = '';
                           if (result.length >= 3) {
                               suggest_results2.empty();
                               result = JSON.parse(result);
   
                               $.each(result, function (i, row) {
                                   content += "<li><a href=\"javascript:\" data-resource-id=\"" + row.id + "\" data-airport=\"" + row.name + "\">" + row.name +"</a></li>";
                               });
                               suggest_results2.append(content);
                               suggest2.show();
                           } else {
                               suggest_results2.empty();
                               content += "<li style=\"padding: 0 1em;\">No results found</li>";
                               suggest_results2.append(content);
                               suggest2.show();
                           }
                           autocomplete_loader.hide();
                       }
                   });
       } else {
           autocomplete_loader.hide();
           suggest2.hide();
           //form.findByName('hotel').val('');
           //form.findByName('Destination').val('');
       }
   });
   
   $(document).on('click', 'ul.suggest-results2 a', function () {
       var $this = $(this);
       var form = $this.closest('form');
       console.log($(this).text())
       form.find('input.citysearchval2').val($(this).text());
       form.find('input.selectcount').val('1');
       form.find('.suggest2').hide();
   });
</script>
<style>
   span.input-group-append.input-group-addon {
   background: #f77403;
   color: #fff;
   border: 0;
   font-size: 20px;
   }
   span.clockpicker-span-hours.text-primary {
   color: #f77403;
   }
   .cust_chat_details {
   padding: 0px 18px 0px 18px!important;
   }
   .form-control {
   display: block;
   width: 100%;
   height: 45px;
   padding: 6px 12px;
   font-size: 14px;
   line-height: 1.42857143;
   color: #888;
   background-color: #fff;
   background-image: none;
   border: 1px solid #ccc;
   border-radius: 0px;
   -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
   box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
   -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
   -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
   transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
   }
   ul#myList {
   height:400px;
   overflow-y: scroll;
   overflow-x: hidden;
   }
   .online_queue {
   color: #fff;
   background-position: right;
   font-size: 18px;
   display: block;
   margin-top: 0;
   text-align: center;
   padding: 6px 0 6px 0;
   background: #66B21B !important;
   }
   button.btn.btn-primary {
   background: #ff8820;
   border: #ff8820;
   }
   .table-condensed td, .table-condensed tr, .table-condensed th{padding:0px!important;border:0px;}
   @media (min-width: 768px){
   .modal-dialog {
   width: 500px;
   margin: 30px auto;
   }
   }
</style>
<link rel="stylesheet" href="<?= base_url()?>admin-assets/assets/css/datepicker.css">
<script src="<?= base_url()?>admin-assets/assets/js/bootstrap-datepicker.js"></script>
<script>
   if (jQuery().datepicker) {
   $('.date-picker')
       .datepicker({
           format: 'dd/mm/yyyy',
           autoclose: true,
       startDate: '01/01/1900',
       });
   }
   $(document).ready(function(){
   $("#getNumero").click(function () {
   
   var name = $('.birthname').val();
   var dateofbirth = $('.dateofbirth').val();
   
   if(name==""){
       $('#errnamemsg').css('display', 'block');
       $('#errnamemsg').text('Please enter your full name');
       return false;
   }
   if((name.length <=2) || (name.length >=26))  { 
           
       
       $('#errnamemsg').css('display', 'block');
       $('#errnamemsg').text('Please enter your valid name');
       return false;
   }
   
   
   if(dateofbirth==""){
       $('#errdobmsg').css('display', 'block');
       $('#errdobmsg').text('Please enter your DOB');
       return false;
   }
   $('#errnamemsg').css('display', 'none');
    $('#errdobmsg').css('display', 'none');
   $.ajax({
   
           url: "<?= base_url('numerology/details')?>",
   
           type: 'POST',
   
             dataType: "json",
   
           data: {'name':name,
               'dateofbirth': dateofbirth
           },
   
           success: function(response) {
               if(response.status == 'success'){
                   window.location.href="<?= base_url(); ?>numerology/numerodetails";
               }
           
       }
   
   });
   });
   $(".birthname").click(function(){
   $('#errnamemsg').css('display', 'none');
   });
   $(".dateofbirth").click(function(){
   $('#errdobmsg').css('display', 'none');
   });
   });
   
   
   
   
   
   $(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 500;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Read more ";
    var lesstext = "Read less";
    
   
    $('.ast_blog_info_details').each(function() {
      
        var content = $(this).html();
   
        if(content.length > showChar) {
   
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
   
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">' + moretext + '</a></span>';
   
            $(this).html(html);
        }
   
    });
   
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
   });
</script>
<script>
$(document).ready(function(){
  $(".showavailavilitychart").click(function(){
    $(".daysTbale").toggle();
  });
});
</script>

<!--Load more script -->
<script type="text/javascript">
function loadmore(){
    var lid = $('.last_id').attr('lastid');
    var asid = $('.astro__id').val();
    $.ajax({
        url:"<?php echo base_url('Front/loadmore')?>",
        method:"post",
        data:{lastid:lid,astroid:asid},        
        success :function(res){
         var result = JSON.parse(res);
        var datahtml =  $('.mylisting').append(result.html);

        $('.last_id').attr('lastid',result.last_id);
         
        }
    });
}
</script>
<!-- end Load more ecript -->

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


<script type="text/javascript">
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

<!-- End Followup -->
<!-- autohide falsh msg -->
<script type="text/javascript">
   $('#flashmsg').hide(10000); 
</script>
<!--end od msg -->

