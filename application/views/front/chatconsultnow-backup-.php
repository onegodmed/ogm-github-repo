<!--BKnowcrumb start-->
<!--BKnowcrumb start-->
<script type="text/javascript">
   window.history.forward();

   function noBack() {
      window.history.forward();
   }
   $(document).ready(function() {
      $(window).on("resize", function(e) {
         checkScreenSize();
      });

      checkScreenSize();

      function checkScreenSize() {
         var newWindowWidth = $(window).width();
         if (newWindowWidth < 600) {
            $('.dobchatcust').attr('id', 'chat_cust_dob');
         } else {
            $('.dobchatcust').remove('id', 'chat_cust_dob');
         }
      }
   });
</script>
<style>
   .panel-collapse {
      position: absolute !important;
      margin-top: 10px;
      z-index: 9999;
      color: #212529;
      text-align: left;
      list-style: none;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, .15);
      border-radius: .25rem;
      width: 100%;
   }
</style>
<!-- <div class="loader">
   <div class="backface"></div>
                   <div class="preloader1">
                       <div class="loader loader-inner-1">
                           <div class="loader loader-inner-2">
                               <div class="loader loader-inner-3">
                               </div>
                           </div>
                       </div>
                   </div>
   </div>  -->
<!-- join queue modal -->
<div class="modal" id="joinQueueModal" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">One last Step</h4>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <?php if ($this->session->userdata('countryCode') == 'IN') { ?>
               <!-- <h4>Your Wallet balance is Rs. <?php echo $wallet_balence[0]->wallet_balence; ?>.</h4> -->
               <h4>Your Que No. is <span class="waitQueue"></span> and Max wait time is <span class="totalTimedelay"></span> <span>min</span></h4>
               <button type="button" id="proceedtonext" class="btn ast_btn btn_radius proceedtopay proceedtonext">Join Queue</button>
            <?php } else { ?>
               <!-- <h4>Your Wallet balance is USD $ <?php echo $wallet_balence[0]->wallet_balence; ?>.</h4> -->
               <h4>Your Que No. is <span class="waitQueue"></span> and Max wait time is <span class="totalTimedelay"><span> min</h4>
            <?php } ?>
            <hr>
            <div class="call-wraper">
               <label>Call Type</label>
               <div>
                  <input type="radio" id="Audio" name="call_type" value="Chat" checked>
                  <label for="Audio"> Chat</label>
               </div>
            </div>
            <hr>
            <!--  <input type="radio" id="Video" name="call_type" value="Video">-->
            <!--<i class="fa fa-play-circle"></i>  <label for="Video">Video</label><br><br><hr>-->
            <div class="errorcalltype" style="display:none"></div>
            <div class="msgcalltype" style="display:none"></div>
            <h4>Your Wallet balance is Rs. <?php echo $wallet_balence[0]->wallet_balence; ?>.</h4>
            <div class="msgcalltype1" style="display:none"></div>
            <input type="hidden" id="popupaudioprice" name="popupaudioprice" value="" />
            <input type="hidden" id="popuastroid" name="popuastroid" value="" />
            <input type="hidden" id="popuastroname" name="popuastroname" value="" />
            <input type="hidden" id="popvendorprice" name="popvendorprice" value="" />
            <input type="hidden" id="popwalletbalance" name="popwalletbalance" value="" />
            <input type="hidden" id="popupvideoprice" name="popupvideoprice" value="" />
            <input type="hidden" id="popvendorvideoprice" name="popvendorvideoprice" value="" />
            <input type="hidden" id="popupcall_userId" name="popupcall_userId" value="" />
            <input type="hidden" id="popupcall_password" name="popupcall_password" value="" />
            <input type="hidden" id="popupcall_count" name="popupcall_count" value="0" />
            <input type="hidden" placeholder="Call Price" name="call_price1" id="call_price1" value="" readonly="" class="form-control">
            <?php if ($this->session->userdata('countryCode') == "IN") { ?>
               <!-- <p>If Astrologer not pick call , you can please choose Another Astologer.</p> -->
            <?php } ?>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <input type="hidden" name="callType" id="callType" value="">
            <input type="hidden" name="call_duration" id="calltime" value="">
            <input type="hidden" placeholder="" name="vendor_price" id="vendor_price" value="">
            <input type="hidden" placeholder="Call Price" name="call_price" id="call_price">
            <input type="hidden" placeholder="Actual Price" name="actualprice" id="actualprice">
            <a href="<?php echo base_url(); ?>wallet" class="btn ast_btn btn_radius">Recharge Now</a>
         </div>
      </div>
   </div>
</div>
<!-- End join Queue Modal -->
<!-- chat modal start -->
<div class="modal chating" id="chat">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <div class="overlay-chat">
               <div class="chat-text1">
                  <p id="txtmsgchat">Please wait, <span> Vivek Kansal </span> will accept your Chat request in <label class="inner-clock">
                        <time id="acceptTimeLeft" val="4"> 02:32</time>
                     </label> minutes. If does not accept , Please choose another astrologer to chat.<button type="button" id="cancelchat" class="msger-send-btn">Cancel Chat</button></p>
               </div>
            </div>
            <div class="container-fluid h-100">
               <div class="row justify-content-center h-100">

                  <div class="col-md-12 p-0 col-xl-10 chat" img_cont_msg>
                     <div class="card">
                        <div class="card-header msg_head">
                           <div class="d-flex bd-highlight">
                              <div class="d-flex justify-content-start align-items-center">
                                 <div class="img_cont_msg">
                                    <img src="<?php echo base_url(); ?>front-assets/images/chatclock.png" class="rounded-circle user_img_msg">
                                 </div>
                                 <div class="timing">
                                    16:29:00
                                 </div>
                              </div>
                              <div class="username-wrap">
                                 <div class="img_cont">
                                    <img src="<?php echo base_url(); ?>front-assets/images/chat-icon.png" class="rounded-circle user_img">
                                    <!-- <span class="online_icon"></span> -->
                                 </div>
                                 <div class="user_info">
                                    <span class="date">29/10/21</span>
                                    <p class="time">16:00::00</p>
                                 </div>
                                 <div class="chat-person d-flex">
                                    <p><span>Ram</span><span>OGM0987353638</span></p>
                                    <button class="btn">End Chat</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body msg_card_body" id="chtcntr">
                           <!-- <div class="d-flex justify-content-end mb-4 lastchat">
                              <div class="follow btn-style1"><button class="btn shadow">Refer Last chat</button></div>
                              </div> -->
                           <div class="d-flex justify-content-end mb-4">
                              <div class="msg_cotainer_send">
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
                           <textarea name="" class="form-control type_msg" id="msg" placeholder="Type your message..."></textarea>
                           <div class="input-group-append" onclick="sendMessage()">
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
<!-- chat modal end -->
<!-- FILTER MOBILE MODAL -->
<div class="modal fade custom filterscreen phoneverification " id="filter">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
               <span>&times;</span>
            </button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">

            <div class="row">
               <h4>Language</h4>
               <div class="col-md-12 filtr-wrpping">
                  <div>

                     <div class="avail-wrap">
                        <div class="daysTbale">
                           <div class="day-wrap">

                              <ul>
                                 <label>
                                    <input type="checkbox" class="language" name="" value="English">
                                    <span>English</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="language" name="" value="Hindi">
                                    <span>Hindi</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="language" name="" value="Punjabi">
                                    <span>Punjabi</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="language" name="" value="Marathi">
                                    <span>Marathi</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="language" name="" value="Bangla">
                                    <span>Bangla</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="language" name="" value="Gujarti">
                                    <span>Gujarti</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="language" name="" value="Kanada">
                                    <span>Kanada</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="language" name="" value="Tamil">
                                    <span>Tamil</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="language" name="" value="Telugu">
                                    <span>Telugu</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="language" name="" value="Malyalam">
                                    <span>Malyalam</span>
                                 </label>

                              </ul>
                           </div>
                        </div>
                        <div class="daysTbale">
                           <h4>Expertise</h4>
                           <div class="day-wrap">

                              <ul>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Love">
                                    <span>Love</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Marriage">
                                    <span>Marriage</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Career">
                                    <span>Career</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Business">
                                    <span>Business</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Wealth">
                                    <span>Wealth</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Legal">
                                    <span>Legal</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Health">
                                    <span>Health</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Vastu Shastra">
                                    <span>Vastu Shastra</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Tarot Cards">
                                    <span>Tarot Cards</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Numerology">
                                    <span>Numerology</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Palmistry">
                                    <span>Palmistry</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Reiki Healing">
                                    <span>Reiki Healing</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Vedic Astrology">
                                    <span>Vedic Astrology</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Business">
                                    <span>Business</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Career & Education">
                                    <span>Career & Education</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Relationship & Compatibility">
                                    <span>Relationship & Compatibility</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Wealth & Property">
                                    <span>Wealth & Property</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Prashna Kundali">
                                    <span>Prashna Kundali</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Family Consultation">
                                    <span>Family Consultation</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="Medical Astrology">
                                    <span>Medical Astrology</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="expertise" name="" value="KP Astrology">
                                    <span>KP Astrology</span>
                                 </label>




                              </ul>
                           </div>
                        </div>
                        <?php if ($this->session->userdata('countryCode') == 'IN') {
                           $query = $this->db->select('MIN(actual_call_price) as min ,MAX(actual_call_price) as max')->from('services')->get()->result();
                        } else {
                           $query = $this->db->select('MIN(dollar_price)  as min ,MAX(actual_call_price) as max')->from('services')->get()->result();
                        } ?>
                        <div class="daysTbale">
                           <h4>Price</h4>
                           <div class="range-wrap">
                              <div class="range-value" id="rangeV"></div>
                              <!-- <input id="range" type="range" class="price" min="<?= $query[0]->min ?>" max="<?= $query[0]->max ?>" value="0" step="1"> -->
                              <input id="range" type="range" class="price" min="0" max="500" value="0" step="1">
                           </div>


                           <!-- <div class="day-wrap">
               <div class="range-slider">
                  <span id="rs-bullet" class="rs-label">0</span>
                  <input id="rs-range-line" class="rs-range" type="range" value="0" min="0" max="100">
                  
               </div>
               
               <div class="box-minmax">
                  <span>0</span><span>100</span>
               </div>
                
               </div>--->
                        </div>

                        <div class="daysTbale">
                           <h4>Experience</h4>
                           <div class="day-wrap">

                              <ul>
                                 <label>
                                    <input type="checkbox" class="exp" name="" value="0,10">
                                    <span>0-10</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="exp" name="" value="10,20">
                                    <span>10-20</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="exp" name="" value="20,30">
                                    <span>20-30</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="exp" name="" value="30,40">
                                    <span>30-40</span>
                                 </label>



                              </ul>
                           </div>
                        </div>
                        <div class="daysTbale">
                           <h4>Rating</h4>
                           <div class="day-wrap">

                              <ul>
                                 <label>
                                    <input type="checkbox" class="rating" name="" value="5,4">
                                    <span>5-4</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="rating" name="" value="4,3">
                                    <span>4-3</span>
                                 </label>
                                 <label>
                                    <input type="checkbox" class="rating" name="" value="3,2">
                                    <span>3-2</span>
                                 </label>




                              </ul>
                           </div>
                        </div>
                        <!-- <div class="daysTbale skills">
               <h4>Skills</h4>
               <div class="day-wrap">
                 
                  <ul>     	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>Vedic Astrology</span>
                     </label>	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>KP Astrology</span>
                     </label>	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>Nadi Astrology</span>
                     </label>	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>Prashan Kundali</span>
                     </label>	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>Match Making</span>
                     </label>	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>Chanting</span>
                     </label>	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>Mantra</span>
                     </label>	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>Vedic Joytish</span>
                     </label>	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>Pooja</span>
                     </label>	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>Medical astrology</span>
                     </label>	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>TarotReading</span>
                     </label>	
                     <label>
                     <input type="checkbox" name="" value="">
                     <span>Palmistry</span>
                     </label>
                     
                     		
                     
                  </ul>
               </div>
            </div> -->
                     </div>

                  </div>
                  <div class="filterbtn">
                     <button class="close btn" data-dismiss="modal">Clear all</button>
                     <button class="btn filterMobileData">Apply</button>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</div>
</div>
<!--BKnowcrumb end-->
<!--About Us Start-->
<div class="ast_about_wrapper ast_bottompadder70 chat-to-astro"> <!-- ast_toppadder70 -->
   <!--start-->
   <div class="container">
      <div class="row">

         <div class="col-md-12 astroheading">
            <a href="<?php echo base_url(); ?>talk-to-astrologers"><button class="btn hide-on-desktop">Talk to Astrologer</button></a>
            <a href="<?php echo base_url(); ?>chat-with-astrologer"><button class="btn hide-on-desktop active">Chat With Astrologer</button></a>
            <h3>Chat with Astrologer</h3>

            <!--<button class="btn"  data-toggle="modal" data-target="#chat">chat</button>-->
         </div>
         <div class="row col-md-12 exper_1 asktoastro_body chatastrobody">
            <div class="col-md-4 flowchart">
               <div class="row">
                  <div class=" col-md-4 col-xs-4 desk_box">
                     <a>
                        <div class="ingGray"></div>
                     </a>
                     <div class="GrayColor_light_a  font14 line17 ">
                        <a>
                        </a>
                        <?php if ($this->session->userdata('id') == '') { ?>
                           <a class="popup-with-zoom-anim Decoration_none" href="#login-dialog">
                              <div class="glowing_icon pty">
                                 <span class="sprite-consult sprite-consult_sign_white" title="Please Signup/Login..."></span>
                              </div>
                              <span class="GrayColor_light_a font12Mobile">Login</span>
                           <?php } else {
                           $name = $this->session->userdata('name');
                           $astrname = explode(" ", $name);
                           ?>
                              <div class="clearfix"></div>
                              <span class="GrayColor_light_a font12Mobile sprite-consult glowing_icon"></span>
                              <span class="GrayColor_light_a font12Mobile"><span> Hi</span> <span><?php echo $astrname[0]; ?></span></span>
                           </a>
                        <?php } ?>
                     </div>
                  </div>
                  <div class=" col-md-4 col-xs-4 desk_box">
                     <div class="ingGray"></div>
                     <div class=" line17  text-center">
                        <?php if ($this->session->userdata('id') != '') { ?>
                           <a href="<?php echo base_url(); ?>wallet" class="Decoration_none pty">
                              <span class="sprite-consult sprite-consult_wallet_white" title="You should have sufficient balance in your wallet to connect with astrologer.."></span>
                              <div class="clearfix"></div>
                              <div class=""> <?php if ($this->session->userdata('id') != '' && $this->session->userdata('user_type') != "Astrologer") {
                                                foreach ($resultSet as $wallet_bal); { ?>
                                       <span class="GrayColor_light_a "><span>
                                             <?php if ($this->session->userdata('countryCode') == 'IN') { ?>
                                                ₹ &nbsp;<?php echo $wallet_bal->wallet_balence; ?>&nbsp;
                                             <?php } else { ?>
                                                USD $ &nbsp;<?php echo $wallet_bal->wallet_balence; ?>&nbsp;
                                             <?php } ?>
                                          <?php } ?>
                                       <?php } else { ?><span><i class="fa fa-inr" aria-hidden="true"></i></span>0</span><?php } ?>
                              </div>
                           </a>
                        <?php } else { ?>
                           <span class="sprite-consult sprite-consult_wallet_white"></span>
                           <span class="GrayColor_light_a font12Mobile"><i class="fa fa-inr" aria-hidden="true"></i>0</span>
                        <?php } ?>
                     </div>
                  </div>
                  <div class=" col-md-4 col-xs-4 desk_box">
                     <div class=" font14 line17  text-center">
                        <a class="Decoration_none pty">
                           <span class="sprite-consult1 sprite-consult_call_white"></span>
                           <img src="<?php echo base_url(); ?>front-assets/images/header/chat.png">
                           <div class="clearfix"></div>
                           <span class="GrayColor_light_a font12Mobile">Connect</span>
                        </a>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-8 d-flex align-items-center filtertype">
               <div class="row d-flex align-items-center justify-content-between">
                  <div class="fliter-box">
                     <div class="catefilter action">

                        <div class="button-group panel panel_heading">
                           <div class="mb_shw_flt" data-toggle="modal" data-target="#filter"> Filter </div>
                           <button type="button" class="btn btn-default btn-sm dropdown-toggle none_mb_pg" data-toggle="dropdown"> <img src="<?php echo base_url(); ?>front-assets/images/filter.png" alt="" width="18"> Filter <span style="float:right;"><i class="fa fa-angle-down" aria-hidden="true"></i>
                           </button>
                           <ul class="dropdown-menu fliterwala firstfilter">
                              <li>
                                 <a href="#" class="small plus" id="vedicastro">
                                    <input type="checkbox" value="" class="common_selector  /" id="vedic">Language
                                    <!-- <label for="vedic">Vedic Astrology</label> -->
                                 </a>
                                 <ul id="demo" class="dropdown-menu fliterwala" style="list-style: none">
                                    <li>
                                       <label class="common_selector astroexpertise" value="Business Astrology" for="business">
                                          <input type="checkbox" class="common_selector astrolanguage" value="Hindi" id="business">
                                          Hindi
                                       </label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astrolanguage" value="English">
                                          English</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astrolanguage" value="Punjabi">
                                          Punjabi</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astrolanguage" value="Gujarati">
                                          Gujarati</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astrolanguage" value="Marathi">
                                          Marathi</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astrolanguage" value="Bangla">
                                          Bangla</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astrolanguage" value="Tamil">
                                          Tamil</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astrolanguage" value="Telugu">
                                          Telugu</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astrolanguage" value="Kannada">
                                          Kannada</label>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox" value="Numerology" class="common_selector astroexpertise">
                                    Numerology</a>
                              </li>
                              <li>
                                 <a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox" value="Vastu Shastra" class="common_selector astroexpertise" />Vastu Shastra</a>
                              </li>
                              <li>
                                 <a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox" value="Tarot Card" class="common_selector astroexpertise" />Tarot Cards</a>
                              </li>
                              <li>
                                 <a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox" value="Palmistry" class="common_selector astroexpertise" />Palmistry</a>
                              </li>
                              <li>
                                 <a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox" value="Reiki Healing" class="common_selector astroexpertise" />Reiki Healing</a>
                              </li>
                              <li>
                                 <a href="#" class="small plus" id="language">
                                    <input type="checkbox" value="Vedic Astrology" class="common_selector astroexpertise /" id="vedic">Vedic Astrology
                                    <!-- <label for="vedic">Vedic Astrology</label> -->
                                 </a>
                                 <ul id="demo" class="dropdown-menu fliterwala" style="list-style: none">
                                    <li>
                                       <label class="common_selector astroexpertise" value="Business Astrology" for="business">
                                          <input type="checkbox" class="common_selector astroexpertise" value="Business Astrology" id="business">
                                          Business
                                       </label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astroexpertise" value="Career & Education">
                                          Career & Education</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astroexpertise" value="Marriage & Children">
                                          Marriage & Children</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astroexpertise" value="Relationship & Compatibility">
                                          Relationship & Compatibility</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astroexpertise" value="Wealth & Property">
                                          Wealth & Property</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astroexpertise" value="Prashna Kundali">
                                          Prashna Kundali</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astroexpertise" value="Family Consultation">
                                          Family Consultation</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astroexpertise" value="Medical Astrology">
                                          Medical Astrology</label>
                                    </li>
                                    <li><label>
                                          <input type="checkbox" class="common_selector astroexpertise" value="KP Astrology">
                                          KP Astrology</label>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="shortby action none_mb_pg">

                        <div class="button-group panel panel_heading">
                           <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url(); ?>front-assets/images/sort.png" alt="" width="18"> Sort <span style="float:right;"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                           <ul class="dropdown-menu fliterwala secondfilter">

                              <li>
                                 <a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox" class="common_selector astroPrice" value="3" />Price:High To Low</a>
                              </li>
                              <li>
                                 <a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox" class="common_selector astroPrice" value="4" />Price:Low to High</a>
                              </li>
                              <li>
                                 <a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox" class="common_selector astrorating" value="5" />Rating:Low to High</a>
                              </li>
                              <li>
                                 <a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox" class="common_selector astrorating" value="6" />Rating:High to Low</a>
                              </li>
                              <li>
                                 <a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox" class="common_selector astroexpe" value="7" />Exp:Low to High</a>
                              </li>
                              <li>
                                 <a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox" class="common_selector astroexpe" value="8" />Exp:High to Low</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="searchastro action">
                        <div class="seachbar">
                           <div class="form-group pull-left" style="position:relative">
                              <i class="fa fa-search sicn hidemobile" aria-hidden="true"></i>
                              <input type="text" class="form-control pl25" id="SearchAstrologer" placeholder="Search">
                           </div>
                        </div>
                     </div>
                     <div class="showmobile">
                        <i class="fa fa-search showmobiledevice" aria-hidden="true"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--end-->
   <div class="container p-0">

      <!-- Astrolger card code start from here -->
      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="astrologer-card">
               <div class="card-head">
                  <div class="new-box">
                     <span>New</span>
                  </div>
                  <div class="discount-box">
                     <span>30%<br>off</span>
                  </div>
                  <!-- <a href="#" class="notify-btn btn btn-default"><i class="fa fa-bell"></i></a> -->
                  <div class="wrapper">
                     <div class="avatar">
                        <img src="./astrologer.jpeg" alt="">
                     </div>
                     <div class="basic-details">
                        <h3 class="name">Vivek Kansal</h3>
                        <p class="rating">
                           <span><i class="fa fa-star"></i> 3.87</span>
                           <span class="divider"></span>
                           <span><i class="fa fa-check-circle"></i> Ratings: 58</span>
                        </p>
                        <a href="#" class="btn btn-sm btn-default">Follow</a>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="wrapper">
                     <ul class="details">
                        <li>
                           <i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="text">Vedic Astrology, Business...</span>
                        </li>
                        <li>
                           <i class="fa fa-language" aria-hidden="true"></i> <span class="text">Hindi, English</span>
                        </li>
                        <li>
                           <i class="fa fa-briefcase" aria-hidden="true"></i> <span class="text">5 Years</span>
                        </li>
                        <li>
                           <i class="fa fa-inr" aria-hidden="true"></i> <span class="text">Chat: <del>42/Min</del> <span class="strong">30/Min</span></span>
                        </li>
                     </ul>
                     <div class="action-btns">
                        <div class="grid">
                           <a href="#" class="notify-btn btn btn-sm btn-default"><i class="fa fa-bell"></i></a>
                           <a href="#" class="action-btn btn btn-sm btn-default offline"><i class="fa fa-comment"></i> Offline</a>
                        </div>
                        <span>Available at 2:00PM</span>
                     </div>

                     <!-- If astrologer is available  -->
                     <!-- 
                <div class="action-btns">
                  change in btn class -> chat,busy,queue
                  <a href="#" class="action-btn btn btn-sm btn-default chat"><i class="fa fa-comment"></i> Chat</a>
                </div> 
                -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Astrolger card code end here -->

      <!-- Previous astrologer code starts from here -->
      <!-- <div class="row tiles">
         <div class="container top30 padding_adjust" id="dummyDataForCrawler">
            <div class="row">
               <div class="col-md-12">
                  <div class="talkBox PaddingFour15">
                     <div class="rightSection" id="FilterList" style="display:none">
                        <div id="filterlistInner"></div>
                        <button id="ClearAll" type="button" class="btn btn-warning col-sm-2 filter Ad top5 floatNone" onclick="CloseFilterSpan('', 'all')" style="width: 100px; margin-top: 0px;">Clear All </button>
                     </div>
                     <div class="clearfix"></div>
                     <div id="owl-example">
                        <div class="row" id="astroVendorDetail">
                           <?php $this->load->view('front/chatastroVendorFilter'); ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div> -->
      <!-- Previous astrologer code ends here -->
      
   </div>
</div>
<style>
   div#astroModal {
      z-index: 99999;
   }
</style>
<!--About Us End-->
<div class="modal" id="astroModal">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Busy</h4>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <label>Please choose another astrologer because astrologer busy on another Chat.</label>
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
            <label>Your wallet balance is low, Chat with <span id="astro_name"></span>. Please recharge your wallet.</label><br><br>
            <center> <a href="<?= base_url() ?>wallet/" class="ast_btn">Recharge Now</a></center>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<!-- The Modal 
<div class="modal" id="myModal" data-backdrop="static" data-keyboard="false">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"> Chat Details</h4>
         </div> -->
         <!-- Modal body 
         <div class="modal-body">
            <?php if ($this->session->userdata('countryCode') == 'IN') { ?>
               <h4>Your Wallet balance is Rs. <?php echo $wallet_balence[0]->wallet_balence; ?>.</h4>
            <?php } else { ?>
               <h4>Your Wallet balance is USD $ <?php echo $wallet_balence[0]->wallet_balence; ?>.</h4>
            <?php } ?>
            <hr>
            <label>Service Type</label><br><br>
            <input type="radio" id="Chat" class="au_call" name="call_type" value="Chat" checked>
            <label for="Chat"><i class="fa fa-comments"></i> Chat</label>
            <hr>
            <div class="errorcalltype" style="display:none"></div>
            <div class="msgcalltype" style="display:none"></div>
            <div class="msgcalltype1" style="display:none"></div>
            <input type="hidden" id="popuastroid" name="popuastroid" value="" />
            <input type="hidden" id="popuastroname" name="popuastroname" value="" />
            <input type="hidden" id="popwalletbalance" name="popwalletbalance" value="" />
            <input type="hidden" id="popupcall_count" name="popupcall_count" value="0" />
            <input type="hidden" id="popupchatprice" name="popupchatprice" value="" />
            <input type="hidden" id="popvendorchatprice" name="popvendorchatprice" value="" />
            <input type="hidden" placeholder="Call Price" name="call_price1" id="call_price1" value="" readonly="" class="form-control">
            <br>
            <?php if ($this->session->userdata('countryCode') == "IN") { ?>
               <p id="pickmsg">If Astrologer not pick call , you can please choose Another Astologer.</p>
            <?php } ?>
         </div> -->
         <!-- Modal footer 
         <div class="modal-footer">
            <input type="hidden" name="callType" id="callType" value="">
            <input type="hidden" name="call_duration" id="calltime" value="">
            <input type="hidden" placeholder="" name="vendor_price" id="vendor_price" value="">
            <input type="hidden" placeholder="Call Price" name="call_price" id="call_price">
            <input type="hidden" placeholder="Actual Price" name="actualprice" id="actualprice">
            <button type="button" id="proceedtonext" class="btn ast_btn btn_radius chatBtn proceedtonext">Proceed Now</button>
         </div>
      </div>
   </div>
</div>
-->

<!-- End Modal -->
<!-- End Modal -->


<!-- New modal from astrologer / profile page -->

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
<!-- end of New Modal -->


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
                     Your Name:<span style="color:red;">*</span></label>
                  <input type="text" name="chat_cust_name" class="form-control" id="chat_cust_name" required />
                  <p id="errorbirth"></p>
                  <label>
                     Gender:<span style="color:red;">*</span></label>
                  <select name="chat_cust_gender" class="form-control" id="chat_cust_gender" required>
                     <option disabled selected>Select Gender</option>
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                  </select>
                  <p id="errorgender"></p>
                  <label>Your DOB:<span style="color:red;">*</span></label>
                  <div class="input-group input-append date visible-xs" style="width:100%!important">
                     <input type="date" class="form-control dateofbirth dobchatcust" name="date" placeholder="DD/MM/YYYY" tabindex="2" onkeydown="return false" style="width:100%!important">
                  </div>
                  <!-- <div class="input-group input-append date date-picker hidden-xs">
                     <input type="text" class="form-control dateofbirth" name="date" placeholder="DD/MM/YYYY"  tabindex="2" id="chat_cust_dob" onkeydown="return false" readonly>
                     <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                  </div> -->
                  <div class="chat_time">
                     <div class="select-hour">
                        <label>Day</label>
                        <select name="day" class="hour" id="day" required>
                           <option value="01">01</option>
                           <option value="02">02</option>
                           <option value="03">03</option>
                           <option value="04">04</option>
                           <option value="05">05</option>
                           <option value="06">06</option>
                           <option value="07">07</option>
                           <option value="08">08</option>
                           <option value="09">09</option>
                           <option value="10">10</option>
                           <option value="11">11</option>
                           <option value="12">12</option>
                           <option value="13">13</option>
                           <option value="14">14</option>
                           <option value="15">15</option>
                           <option value="16">16</option>
                           <option value="17">17</option>
                           <option value="18">18</option>
                           <option value="19">19</option>
                           <option value="20">20</option>
                           <option value="21">21</option>
                           <option value="22">22</option>
                           <option value="23">23</option>
                           <option value="24">24</option>
                           <option value="25">25</option>
                           <option value="26">26</option>
                           <option value="27">27</option>
                           <option value="28">28</option>
                           <option value="29">29</option>
                           <option value="30">30</option>
                           <option value="32">31</option>
                        </select>
                     </div>
                     <div class="select-hour">

                        <label>Month</label>
                        <select name="month" class="minute" id="month" required>
                           <option value="01">01</option>
                           <option value="02">02</option>
                           <option value="03">03</option>
                           <option value="04">04</option>
                           <option value="05">05</option>
                           <option value="06">06</option>
                           <option value="07">07</option>
                           <option value="08">08</option>
                           <option value="09">09</option>
                           <option value="10">10</option>
                           <option value="11">11</option>
                           <option value="12">12</option>
                        </select>
                     </div>
                     <div class="select-hour">

                        <label>Year</label>
                        <select name="year" class="second" id="year" required>
                           <?php
                           $now = date("Y");

                           for ($x = 1945; $x <= $now; $x++) {
                           ?>
                              <option value="<?php echo ($x) ?>"><?php echo ($x) ?></option>
                           <?php
                           }
                           ?>
                        </select>
                     </div>
                  </div>
                  <p id="errordob"></p>
                  <label> Your Birth Time (24 Hours format):<span style="color:red;">*</span></label>
                  <?php $hours = range(1, 23);
                  $minutes = range(1, 59);
                  $seconds = range(1, 59); ?>
                  <div class="chat_time">
                     <div class="select-hour">
                        <label>Hours</label>
                        <select name="hour" class="hour" id="hour" required>
                           <option value="00">00</option>
                           <?php
                           foreach ($hours as $hour) {
                           ?>
                              <option value="<?php echo ($hour) ?>"><?php echo ($hour) ?></option>
                           <?php
                           }
                           ?>
                        </select>
                     </div>
                     <div class="select-hour">
                        <label>Minutes</label>
                        <select name="minute" class="minute" id="minute" required>
                           <option value="00">00</option>
                           <?php
                           foreach ($minutes as $minute) {
                           ?>
                              <option value="<?php echo ($minute) ?>"><?php echo ($minute) ?></option>
                           <?php
                           }
                           ?>
                        </select>
                     </div>
                     <div class="select-hour">
                        <label>Seconds</label>
                        <select name="second" class="second" id="second" required>
                           <option value="00">00</option>
                           <?php
                           foreach ($seconds as $second) {
                           ?>
                              <option value="<?php echo ($second) ?>"><?php echo ($second) ?></option>
                           <?php
                           }
                           ?>
                        </select>
                     </div>
                  </div>
                  <p id="errortime"></p>
                  <label>Your Birth Place:<span style="color:red;">*</span></label>
                  <input type="text" name="chat_cust_place" class="form-control citysearchval2" id="chat_cust_place" required />
                  <input type="hidden" value="" class="selectcount" id="selectcount" />
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
<style type="text/css">
   div#myModal {
      z-index: 9999999999;
   }

   div#chatModal {
      z-index: 99999999999;
   }

   button.btn.btn-sm.btn-default.btn-block.clockpicker-button {
      background: #f77403;
      color: #fff;
      border: 0;
      font-size: 20px;
   }

   span.clockpicker-span-hours.text-primary {
      color: #f77403;
   }

   .cust_chat_details {
      padding: 0px 18px 0px 18px;
   }

   .disabledhref {
      pointer-events: none;
      cursor: default !important;
      background-color: #fb87269e !important;
   }

   .talkBox_text {
      background: #ff8820;
      color: #fff !important;
   }

   .Search_input {
      height: 41px;
      border-radius: 0px !important;
   }

   .searchleft8 {
      border-radius: 0px !important;
   }

   .online_queue {
      color: #fff;
      background-position: right;
      border: 1px solid #ff8820 !important;
      background: #00e676 !important;
   }

   .fa-star {
      color: #ff8820;
   }

   .GrayColor_light_a {
      position: relative;
      /*left:15%;*/
   }

   .call_btn1 {
      top: 50%;
      position: absolute;
      right: 0%;
      color: #fff;
      transform: translate(0%, -50%);
      font-size: 30px;
      color: #fff;
   }

   body {
      border: none !important;
   }

   .sprite-consult1 {
      background: url(https://www.onegodmed.com/front-assets/images/header/review-icon.png) no-repeat;
   }

   .ingGray {
      border-bottom: 2px solid #ff8820;
      position: relative;
      width: 70%;
      float: right;
      left: 90px;
      top: 30px;
   }

   .s-10 {
      position: relative;
      float: right;
      top: 24px;
      cursor: pointer;
   }

   ul.suggest-result-city {
      height: 250px;
      overflow-y: scroll;
   }

   .ui-datepicker table {
      background: #fff;
   }

   .ui-datepicker td a {
      text-align: center !important;
   }

   .ui-datepicker td span .ui-datepicker td a {}

   .ui-datepicker td {
      border: 0;
      padding: 8px;
   }

   ul.suggest-result-city li {
      list-style: none;
   }

   td,
   th,
   tr {
      padding: 0px !important;
      border: 3px solid #f5f5f561;
      text-align: center;
      font-size: 12px;
   }

   .Padding10 {
      display: flex;
   }

   .glowing_icon_login {
      width: 62px;
      height: 62px;
      border-radius: 100px;
      margin: 0 auto;
   }

   button.close {
      font-size: 34px;
      margin-top: -24px;
      line-height: 17px;
      color: #fff;
      opacity: 1;
   }

   .panel_heading {
      width: 240px;
   }

   .astro21 {
      font-size: 20px;
      padding-bottom: 10px;
      display: block;
   }

   .collapsed {
      color: #ff8820;
   }

   .visible-xs {
      display: none;
   }

   .hidden-xs {
      display: block;
   }

   @media(max-width:600px) {
      .visible-xs {
         display: table;
      }

      .hidden-xs {
         display: none;
      }

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: initial !important;
      }

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: inner-spin-button !important;
      }

      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
         opacity: 1 !important;
      }

      input::-webkit-inner-spin-button {
         opacity: 1 !important;
      }

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: inner-spin-button !important;
      }
   }

   .ingGray {
      display: none;
   }

   .btn.btn-default.filterAd.margin_Rgt10 {
      float: left;
   }

   .btn-warning {
      color: #fff8f8 !important;
      background-color: #ff8820 !important;
      border-color: #ff8820 !important;
   }

   .box_line {
      width: 76%;
      border: 1px solid #ff8820;
      position: relative;
      top: 152px;
      left: 159px;
   }

   .astrologerchat .box_line {
      top: 180px;
   }

   .line17 {
      border: 1px dashed #fff;
      position: relative;
      left: 60px;
      padding: 10px;
      cursor: pointer;
   }

   body .w-25 {
      width: 25%;
   }

   body .w-75 {
      width: 75%;
   }

   @media screen {
      body {
         margin: 0
      }

      figure,
      footer,
      header {
         display: block
      }

      a {
         background-color: transparent
      }

      a:active,
      a:hover {
         outline: 0
      }

      strong {}

      h1 {
         font-size: 2em;
         margin: .67em 0
      }

      img {
         border: 0
      }

      figure {
         margin: 1em 40px
      }

      button,
      input,
      select {
         color: inherit;
         font: inherit;
         margin: 0
      }

      button {
         overflow: visible
      }

      button,
      select {
         text-transform: none
      }

      button,
      input[type="submit"] {
         -webkit-appearance: button;
         cursor: pointer
      }

      button::-moz-focus-inner,
      input::-moz-focus-inner {
         border: 0;
         padding: 0
      }

      input {
         line-height: normal
      }

      input[type="checkbox"],
      input[type="radio"] {
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box;
         padding: 0
      }

      @media print {

         *,
         *:before,
         *:after {
            background: transparent !important;
            color: #000 !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            text-shadow: none !important
         }

         a,
         a:visited {
            text-decoration: underline
         }

         a[href]:after {
            content: " ("attr(href) ")"
         }

         a[href^="#"]:after {
            content: ""
         }

         img {
            page-break-inside: avoid
         }

         img {
            max-width: 100% !important
         }

         p,
         h2,
         h3 {
            orphans: 3;
            widows: 3
         }

         h2,
         h3 {
            page-break-after: avoid
         }
      }

      .glyphicon {
         position: relative;
         top: 1px;
         display: inline-block;
         font-style: normal;
         line-height: 1;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale
      }

      .glyphicon-search:before {
         content: "?"
      }

      * {
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box
      }

      *:before,
      *:after {
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box
      }

      body {
         font-size: 14px;
         line-height: 1.42857143;
         background-color: #fff
      }

      input,
      button,
      select {
         font-family: inherit;
         font-size: inherit;
         line-height: inherit
      }

      a {
         color: #333;
         text-decoration: none
      }

      a:hover,
      a:focus {
         color: #0d0d0d;
         text-decoration: underline
      }

      a:focus {
         outline: 5px auto -webkit-focus-ring-color;
         outline-offset: -2px
      }

      figure {
         margin: 0
      }

      img {
         vertical-align: middle
      }

      .thumbnail a>img {
         display: block;
         max-width: 100%;
         height: auto
      }

      .img-circle {
         border-radius: 50%
      }

      [role="button"] {
         cursor: pointer
      }

      h1,
      h2,
      h3,
      .h1,
      .h2,
      .h3,
      .h4 {
         font-family: inherit;
         ;
         line-height: 1.1;
         color: #333
      }

      h1,
      .h1,
      h2,
      .h2,
      h3,
      .h3 {
         margin-top: 20px;
         margin-bottom: 10px
      }

      .h4 {
         margin-top: 10px;
         margin-bottom: 10px
      }

      h1,
      .h1 {
         font-size: 36px
      }

      h2,
      .h2 {
         font-size: 30px
      }

      h3,
      .h3 {
         font-size: 24px
      }

      .h4 {
         font-size: 18px
      }

      p {
         margin: 0 0 10px
      }

      .text-left {
         text-align: left
      }

      .text-center {
         text-align: center
      }

      .text-justify {
         text-align: justify
      }

      .text-uppercase {
         text-transform: uppercase
      }

      .text-success {
         color: #3c763d
      }

      .text-danger {
         color: #a94442
      }

      ul {
         margin-top: 0;
         margin-bottom: 10px
      }

      .list-inline {
         padding-left: 0;
         list-style: none;
         margin-left: -5px
      }

      .list-inline>li {
         display: inline-block;
         padding-left: 5px;
         padding-right: 5px
      }

      .container {
         margin-right: auto;
         margin-left: auto;
         padding-left: 15px;
         padding-right: 15px
      }

      @media (min-width:768px) {
         .container {
            width: 750px
         }
      }

      @media (min-width:992px) {
         .container {
            width: 970px
         }
      }

      @media (min-width:1200px) {
         .container {
            width: 1170px
         }
      }

      .row {
         margin-left: -15px;
         margin-right: -15px
      }

      .col-xs-2,
      .col-sm-2,
      .col-md-2,
      .col-md-3,
      .col-xs-4,
      .col-sm-4,
      .col-md-4,
      .col-md-5,
      .col-xs-6,
      .col-sm-6,
      .col-md-6,
      .col-md-7,
      .col-xs-8,
      .col-sm-8,
      .col-md-8,
      .col-md-9,
      .col-xs-10,
      .col-xs-12,
      .col-sm-12,
      .col-md-12 {
         position: relative;
         min-height: 1px;
         padding-left: 15px;
         padding-right: 15px
      }

      .col-xs-2,
      .col-xs-4,
      .col-xs-6,
      .col-xs-8,
      .col-xs-10,
      .col-xs-12 {
         float: left
      }

      .col-xs-12 {
         width: 100%
      }

      .col-xs-10 {
         width: 83.33333333%
      }

      .col-xs-8 {
         width: 66.66666667%
      }

      .col-xs-6 {
         width: 50%
      }

      .col-xs-4 {
         width: 33.33333333%
      }

      .col-xs-2 {
         width: 16.66666667%
      }

      @media (min-width:768px) {

         .col-sm-2,
         .col-sm-4,
         .col-sm-6,
         .col-sm-8,
         .col-sm-12 {
            float: left
         }

         .col-sm-12 {
            width: 100%
         }

         .col-sm-8 {
            width: 66.66666667%
         }

         .col-sm-6 {
            width: 50%
         }

         .col-sm-4 {
            width: 33.33333333%
         }

         .col-sm-2 {
            width: 16.66666667%
         }
      }

      @media (min-width:992px) {

         .col-md-2,
         .col-md-3,
         .col-md-4,
         .col-md-5,
         .col-md-6,
         .col-md-7,
         .col-md-8,
         .col-md-9,
         .col-md-12 {
            float: left
         }

         .col-md-12 {
            width: 100%
         }

         .col-md-9 {
            width: 75%
         }

         .col-md-8 {
            width: 66.66666667%
         }

         .col-md-7 {
            width: 58.33333333%
         }

         .col-md-6 {
            width: 50%
         }

         .col-md-5 {
            width: 41.66666667%
         }

         .col-md-4 {
            width: 33.33333333%
         }

         .col-md-3 {
            width: 25%
         }

         .col-md-2 {
            width: 16.66666667%
         }

         .col-md-offset-3 {
            margin-left: 25%
         }

         .col-md-offset-2 {
            margin-left: 16.66666667%
         }
      }

      label {
         display: inline-block;
         max-width: 100%;
         margin-bottom: 5px;
      }

      input[type="radio"],
      input[type="checkbox"] {
         margin: 4px 0 0;
         margin-top: 1px \9;
         line-height: normal
      }

      input[type="radio"]:focus,
      input[type="checkbox"]:focus {
         outline: 5px auto -webkit-focus-ring-color;
         outline-offset: -2px
      }

      .form-control {
         display: block;
         width: 100%;
         height: 34px;
         padding: 6px 12px;
         font-size: 14px;
         line-height: 1.42857143;
         color: #888;
         background-color: #fff;
         background-image: none;
         border: 1px solid #ccc;
         border-radius: 0px;
         -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
         box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
         -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
         -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
         transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
      }

      .form-control:focus {
         border-color: #66afe9;
         outline: 0;
         -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
         box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
      }

      .form-control::-moz-placeholder {
         color: #999;
         opacity: 1
      }

      .form-control:-ms-input-placeholder {
         color: #999
      }

      .form-control::-webkit-input-placeholder {
         color: #999
      }

      .form-control::-ms-expand {
         border: 0;
         background-color: transparent
      }

      .form-group {
         margin-bottom: 15px
      }

      .radio,
      .checkbox {
         position: relative;
         display: block;
         margin-top: 10px;
         margin-bottom: 10px
      }

      .radio label,
      .checkbox label {
         min-height: 20px;
         padding-left: 20px;
         margin-bottom: 0;
         cursor: pointer
      }

      .radio input[type="radio"],
      .checkbox input[type="checkbox"] {
         position: absolute;
         margin-left: -20px;
         margin-top: 4px \9
      }

      .checkbox+.checkbox {
         margin-top: -5px
      }

      .btn {
         display: inline-block;
         margin-bottom: 0;
         text-align: center;
         vertical-align: middle;
         -ms-touch-action: manipulation;
         touch-action: manipulation;
         cursor: pointer;
         background-image: none;
         border: 1px solid transparent;
         white-space: nowrap;
         padding: 6px 12px;
         font-size: 14px;
         line-height: 1.42857143;
         border-radius: 4px;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none
      }

      .btn:focus,
      .btn:active:focus {
         outline: 5px auto -webkit-focus-ring-color;
         outline-offset: -2px
      }

      .btn:hover,
      .btn:focus {
         color: #333;
         text-decoration: none
      }

      .btn:active {
         outline: 0;
         background-image: none;
         -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
         box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
      }

      .btn-warning {
         color: #333;
         background-color: #fc0;
         border-color: #e6b800
      }

      .btn-warning:focus {
         color: #333;
         background-color: #cca300;
         border-color: #665200
      }

      .btn-warning:hover {
         color: #333;
         background-color: #cca300;
         border-color: #a88700
      }

      .btn-warning:active {
         color: #333;
         background-color: #cca300;
         border-color: #a88700
      }

      .btn-warning:active:hover,
      .btn-warning:active:focus {
         color: #333;
         background-color: #a88700;
         border-color: #665200
      }

      .btn-warning:active {
         background-image: none
      }

      .btn-lg {
         padding: 10px 16px;
         font-size: 18px;
         line-height: 1.3333333;
         border-radius: 6px
      }

      .btn-block {
         display: block;
         width: 100%
      }

      .fade {
         opacity: 0;
         -webkit-transition: opacity .15s linear;
         -o-transition: opacity .15s linear;
         transition: opacity .15s linear
      }

      .fade.in {
         opacity: 1
      }

      .collapse {
         display: none
      }

      .collapse.in {
         display: block
      }

      .input-group {
         position: relative;
         display: table;
         border-collapse: separate
      }

      .thumbnail {
         display: block;
         padding: 4px;
         margin-bottom: 20px;
         line-height: 1.42857143;
         background-color: #fff;
         border: 1px solid #ddd;
         border-radius: 4px;
         -webkit-transition: border .2s ease-in-out;
         -o-transition: border .2s ease-in-out;
         transition: border .2s ease-in-out
      }

      .thumbnail a>img {
         margin-left: auto;
         margin-right: auto
      }

      .thumbnail .caption {
         padding: 9px;
         color: #666
      }

      .alert {
         padding: 15px;
         margin-bottom: 20px;
         border: 1px solid transparent;
         border-radius: 4px
      }

      .alert-dismissible {
         padding-right: 35px
      }

      .alert-danger {
         background-color: #f2dede;
         border-color: #ebccd1;
         color: #a94442
      }

      .panel {
         margin-bottom: 20px;
         background-color: #fff;
         border: 1px solid transparent;
         border-radius: 4px;
         -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
         box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
      }

      .panel-title {
         margin-top: 0;
         margin-bottom: 0;
         font-size: 16px;
         color: inherit
      }

      .panel-footer {
         padding: 10px 15px;
         background-color: #f5f5f5;
         border-top: 1px solid #ddd;
         border-bottom-right-radius: 3px;
         border-bottom-left-radius: 3px
      }

      .close {
         float: right;
         font-size: 21px;
         ;
         line-height: 1;
         color: #000;
         text-shadow: 0 1px 0 #fff;
         opacity: .2;
         filter: alpha(opacity=20)
      }

      .close:hover,
      .close:focus {
         color: #000;
         text-decoration: none;
         cursor: pointer;
         opacity: .5;
         filter: alpha(opacity=50)
      }

      .modal {
         display: none;
         overflow: hidden;
         position: fixed;
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;
         z-index: 1050;
         -webkit-overflow-scrolling: touch;
         outline: 0
      }

      .modal.fade .modal-dialog {
         -webkit-transform: translate(0, -25%);
         -ms-transform: translate(0, -25%);
         -o-transform: translate(0, -25%);
         transform: translate(0, -25%);
         -webkit-transition: -webkit-transform .3s ease-out;
         -o-transition: -o-transform .3s ease-out;
         transition: transform .3s ease-out
      }

      .modal-dialog {
         position: relative;
         width: auto;
         margin: 10px
      }

      .modal-content {
         position: relative;
         background-color: #fff;
         border: 1px solid #999;
         border: 1px solid rgba(0, 0, 0, .2);
         border-radius: 6px;
         -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
         box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
         -webkit-background-clip: padding-box;
         background-clip: padding-box;
         outline: 0
      }

      .modal-header {
         padding: 15px;
         border-bottom: 1px solid #e5e5e5
      }

      .modal-header .close {
         margin-top: 0px
      }

      .modal-title {
         margin: 0;
         line-height: 1.42857143
      }

      .modal-body {
         position: relative;
         padding: 15px
      }

      .modal-footer {
         padding: 0px 15px 20px 15px;
         border-top: 0px solid #000;
         text-align: right;
      }

      .modal-footer .btn+.btn {
         margin-left: 5px;
         margin-bottom: 0
      }

      @media (min-width:768px) {
         .modal-dialog {
            width: 600px;
            margin: 30px auto
         }

         .modal-content {
            -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
         }
      }

      @media (min-width:992px) {
         .modal-lg {
            width: 900px
         }
      }

      .clearfix:before,
      .clearfix:after,
      .container:before,
      .container:after,
      .row:before,
      .row:after,
      .modal-header:before,
      .modal-header:after,
      .modal-footer:before,
      .modal-footer:after {
         content: " ";
         display: table
      }

      .clearfix:after,
      .container:after,
      .row:after,
      .modal-header:after,
      .modal-footer:after {
         clear: both
      }

      .pull-right {
         float: right !important
      }

      .pull-left {
         float: left !important
      }

      body {
         border-top: 3px solid #fc0
      }

      .inline_block_all {
         display: inline-block
      }

      .HideBoxPhone {
         display: -webkit-inline-box !important
      }

      .HideTopDesktp {
         display: none
      }

      .HideTopPhone {
         display: block
      }

      .P0 {
         padding: 0 !important
      }

      .M0 {
         margin: 0 !important
      }

      .PaddingTop {
         padding: 30px 0
      }

      .top27 {
         margin-bottom: 23px !important
      }

      .margin0 {
         margin-bottom: 0 !important
      }

      .margin_Rgt10 {
         margin-right: 10px !important
      }

      .marginRgt15 {
         margin-right: 15px
      }

      .top0 {
         margin-top: 0 !important
      }

      .top5 {
         margin-top: 5px
      }

      .topBtm5 {
         margin-bottom: 5px
      }

      .top7 {
         margin-top: 7px
      }

      #myModal label {
         color: #ff8820
      }

      .modal-header p {
         color: #fff
      }

      .top10 {
         margin-top: 10px
      }

      .top17 {
         margin-top: 17px
      }

      .top30 {
         margin-top: 30px
      }

      .top74 {
         margin-top: 74px
      }

      .whiteBG {
         background: #fff
      }

      @media only screen and (max-width:500px) {
         .modal-dialog {
            width: 95% !important
         }
      }

      @media only screen and (max-width:768px) {
         .textcenter {
            text-align: center !important;
            margin-top: 10px;
            font-size: 15px !important;
            padding: 0 10px
         }

         .language_box {
            font-size: 12px !important;
            height: 68px
         }

         .talktostep {
            font-size: 18px !important;
            margin: 10px 0 10px 0 !important
         }

         .font12Mobile {
            font-size: 12px
         }

         .P0Mobile {
            padding: 0 !important
         }

         .paddingtb20 {
            padding: 5px 0 !important
         }

         .border_t2a {
            left: 50px
         }

         .HideBoxPhone {
            display: none !important
         }

         h1,
         h2,
         h3 {
            font-size: 25px !important
         }

         .height150 {
            height: auto !important
         }

         .TopHeadingGray h3 {
            font-size: 24px !important;
            margin: 0 0 15px 0 !important
         }

         .RightMenu select {
            border: 1px solid #999 !important;
            color: #999;
            border-radius: 50px;
            outline: none;
            position: relative;
            text-transform: uppercase;
            ;
            margin-top: 10px;
            padding: 5px 0 3px 6px;
            font-size: 13px
         }

         .RightMenu li {
            margin-bottom: 0 !important
         }

         .PaddingTop20desktop {
            padding: 0 0 !important
         }

         .logoCenter {
            text-align: center;
            border-bottom: none !important;
            padding-bottom: 10px !important
         }

         .logoCenter {
            text-align: center
         }

         .logoCenter img {
            width: 30%
         }

         .HideTopPhone {
            display: none
         }

         .HideTopDesktp {
            display: block
         }

         .RightMenu li {
            float: left;
            list-style: none;
            background: none;
            padding-left: 5px;
            margin-bottom: 10px;
            line-height: 46px
         }
      }

      @media only screen and (max-width:992px) {
         .logoCenter {
            text-align: center;
            border-bottom: 1px solid #f3f0f0;
            padding-bottom: 30px
         }

         .collapse.in {
            display: block !important
         }
      }

      p {
         line-height: 23px
      }

      .profile {
         background: #fff;
         padding: 5px
      }

      .profile img {
         width: 70px;
         height: 70px !important
      }

      .HoroscopeSign {
         font-size: 16px;
         text-align: center
      }

      .GrayColor {
         color: #333 !important
      }

      .GrayColor_light {
         color: #888 !important
      }

      .GrayColor_light_a {
         color: #737373
      }

      .LightGrayColor {
         color: #999
      }

      .DarkGrayBG {
         background: #efefef;
         border-top: 1px solid #dcdcdc;
         border-bottom: 1px solid #dcdcdc
      }

      .TopHeadingGray {
         border-bottom: 1px solid #dcdcdc;
         position: relative;
         margin-bottom: 40px;
         padding-bottom: 10px;
         text-align: center
      }

      .TopHeadingGray h3 {
         text-transform: uppercase;
         margin: 40px 0 20px;
         padding-bottom: 3px;
         font-size: 44px;
         color: #999
      }

      .TopHeadingGray h3 span {
         color: #fc0
      }

      .RightMenu {
         font-size: 15px;
         color: #8c8c8c;
         position: relative;
         top: -5px;
         display: table-footer-group
      }

      .borderNone {
         border: none !important;
         background: none !important
      }

      .RightMenu li {
         float: left;
         list-style: none;
         margin-left: 0;
         padding-left: 10px;
         line-height: 46px
      }

      .RightMenu li select {
         border: none;
         padding: 5px;
         border-radius: 2px;
         color: #999;
         outline: none;
         position: relative;
         top: 1px;
         text-transform: uppercase;
         ;
         cursor: pointer;
         height: 30px
      }

      .height150 {
         height: 150px
      }

      .height30 {
         height: 30px
      }

      .PaddingTop20desktop {
         padding: 20px 0
      }

      .center {
         text-align: center !important
      }

      .font17 {
         font-size: 17px
      }

      .font14 {
         font-size: 14px
      }

      .cursor-pointer {
         cursor: pointer !important
      }

      .line27 {
         line-height: 27px !important
      }

      .block {
         display: block
      }

      .astrologer_panel a:before {
         display: none;
         content: "?";
         float: right;
         transition: all .5s;
         font-size: 12px;
         color: #cecece
      }

      .panel_heading {
         background: #fff;
         color: #999;
         border-bottom: 1px solid #f0f0f0;
         padding: 5px 5px;
         border-radius: 0 !important;
         margin: 0 !important;
         box-shadow: 0 0 0
      }

      .panel_heading:last-child {
         border: none !important
      }

      .panel_heading .checkbox {
         margin-top: 0;
         margin-bottom: 0;
         padding: 1px;
         line-height: 25px
      }

      .panel_heading a {
         font-size: 17px;
         color: #999;
         line-height: 50px;
         text-decoration: none !important
      }

      .panel_heading a:hover {
         color: #ff8820;
      }

      .talkBox {
         margin-bottom: 20px;
         line-height: 1.42857143;
         background-color: #f1f0f0;
         border: 1px solid #dfdfdf
      }

      .talkBox_text {
         font-size: 22px;
         color: #333;
         padding: 10px;
         border-bottom: 1px solid #f0f0f0
      }

      .talkBox_Secure {
         border-bottom: 1px solid #f0f0f0;
         padding: 15px 0;
         font-size: 14px;
         color: #999
      }

      .talkBox_Secure:last-child {
         border-bottom: none !important
      }

      .secureImg {
         text-align: left;
         float: left;
         margin-right: 10px
      }

      .Padding10 {
         padding: 0 10px
      }

      .PaddingFour15 {
         padding: 15px
      }

      .Search_input {
         height: 41px;
         border-radius: 30px 0 0 30px
      }

      .searchleft8 {
         margin-left: -8px;
         color: #999;
         border-radius: 0 30px 30px 0;
         font-size: 16px;
         height: 41px;
         padding-top: 10px
      }

      .rightSection {
         border-bottom: 1px solid #f0f0f0;
         padding: 10px 0;
         margin-bottom: 10px
      }

      .profile_icon {
         width: 20px !important;
         height: 20px !important;
         margin-right: 5px !important;
         margin-top: -5px
      }

      .call_action_icon {
         width: 29px !important;
         height: 29px !important;
         margin-bottom: 5px;
         margin-top: 10px
      }

      .astroBg {
         background: #fffefa
      }

      .call_action {
         border-top: 1px solid #f0f0f0;
         margin-top: 10px
      }

      .busyaction {
         color: #e05d52 !important;
         font-size: 12px;
         text-transform: uppercase;
         text-decoration: none !important;
         cursor: auto
      }

      .busyaction:hover {
         color: #e05d52 !important
      }

      .floatNone {
         float: none
      }

      .Review {
         border: 1px solid #fc0
      }

      .thumbnailNew {
         border-radius: 0 !important;
         border: 1px solid #dfdfdf !important
      }

      .profile_link {
         margin-bottom: 3px;
         display: -webkit-box;
         max-height: 35px;
         text-decoration: none !important
      }

      .filterAd {
         border-radius: 48px;
         position: relative;
         top: -8px;
         padding: 7px 10px 3px 10px;
         text-transform: none;
         font-size: 14px;
         margin-top: 10px
      }

      .btn_radius {
         border-radius: 50px;
         padding-right: 20px;
         padding-left: 20px
      }

      .checkBoxup {
         position: relative;
         top: -2px
      }

      .btn_radius {
         border-radius: 50px;
         padding-right: 20px;
         padding-left: 20px
      }

      .b-lazy {
         opacity: 0;
         transition: all 500ms
      }

      .b-loaded {
         opacity: 1
      }

      .sprite-inner-language {
         width: 25px;
         height: 20px;
         background-position: -70px -76px !important;
         margin-top: 12px
      }

      .paddingtb20 {
         padding: 15px 0
      }

      .border_t2a {
         border: 1px solid silver;
         position: relative;
         top: 31px;
         left: -30px
      }

      .Decoration_none {
         text-decoration: none !important
      }

      .talktostep {
         margin: 0 0 15px 0;
         padding: 0;
         font-size: 24px
      }

      .glowing_icon {
         width: 62px;
         height: 62px;
         border-radius: 100px;
         margin: 0 auto;
         animation: shadow-pulse 2s infinite
      }

      .star_rating_a {
         background: #fff;
         border: 1px solid #b3afaf;
         color: #333;
         padding: 2px 8px 2px 8px;
         border-radius: 50px;
         display: inline-block;
         margin: 0;
         font-size: 12px;
         font-weight: 400
      }

      .glyphicon_gray_star {
         position: relative;
         top: 1px;
         margin-left: 1px;
         color: #e8bb06
      }

      .language_light {
         background: #f4f4f4;
         border: none
      }

      .language_bg {
         background: #333;
         border-radius: 6px 6px 0 0;
         height: 55px
      }

      .language_bg_btn {
         background: #fff;
         display: block;
         cursor: auto;
         color: #333 !important;
         padding: 10px 0;
         font-size: 19px;
         text-decoration: none !important;
         border: 3px solid #c7c7c7;
         margin-bottom: 10px
      }

      .language_bg_btn_active {
         background: #fff;
         color: #333 !important;
         display: block;
         padding: 10px 0;
         font-size: 19px;
         text-decoration: none !important;
         border: 3px solid #ffe36e;
         margin-bottom: 10px;
         animation: shadow-pulse-btn 2s infinite
      }

      .language_bg_btn_yellow_active {
         background: #fff;
         color: #333 !important;
         display: block;
         padding: 10px 0;
         font-size: 19px;
         text-decoration: none !important;
         border: 3px solid #c7c7c7;
         margin-bottom: 10px
      }

      .language_box {
         background: #fff;
         background: #fff;
         padding: 15px 0;
         font-size: 16px;
         padding: 7px 0;
         border: 1px solid #e5e5e5;
         cursor: pointer;
         border-radius: 3px;
         margin-bottom: 15px
      }

      .language_box:hover {
         background: #fc0;
         border: none;
         ;
         -webkit-transition: all .5s ease;
         transition: all .5s ease;
         -webkit-transform: translateY(-2px);
         transform: translateY(-2px);
         -webkit-box-shadow: 0 10px 15px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
         box-shadow: 0 7px 10px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08)
      }

      .language_box span {
         display: block;
         width: 30px;
         height: 30px;
         margin: 0 auto;
         color: #fff;
         border-radius: 50px;
         margin-bottom: 5px;
         line-height: 34px;
         font-weight: NORMAL;
         font-size: 14px
      }

      .english_lg {
         background: #4e79a4
      }

      .hindi_lg {
         background: #f18f3b
      }

      .urdu_lg {
         background: #e0585b
      }

      .gujarati_lg {
         background: #77b7b2
      }

      .kannada_lg {
         background: #5aa155
      }

      .malayalam_lg {
         background: #edc958
      }

      .odia_lg {
         background: #af7aa0
      }

      .assamese_lg {
         background: #fe9ea8
      }

      .nepali_lg {
         background: #9c7561
      }

      .punjabi_lg {
         background: #8e8a88
      }

      .sindhi_lg {
         background: #61afef
      }

      .bangla_lg {
         background: #658a97
      }

      .telugu_lg {
         background: #e06c60
      }

      .marathi_lg {
         background: #9da5b4
      }

      .tamil_lg {
         background: #d19a66
      }

      .sprite-consult {
         display: -webkit-inline-box;
         background: no-repeat
      }

      .sprite-consult_sign_white {
         width: 62px;
         height: 62px;
         background-position: 0 -0 !important
      }

      .sprite-consult_wallet_white {
         width: 62px;
         height: 62px;
         background-position: 0 -96px !important
      }

      .sprite-consult_call_white {
         width: 62px;
         height: 62px;
         background-position: -2 -185px !important
      }

      .sprite-consult_calling {
         width: 20px;
         height: 20px;
         background-position: -71px -155px !important;
         position: relative;
         top: 3px;
         cursor: pointer
      }
   }

   .sprite-footer-page {
      display: block;
      background: no-repeat
   }

   @media screen {
      body {
         margin: 0
      }

      figure,
      footer,
      header {
         display: block
      }

      [hidden] {
         display: none
      }

      a {
         background-color: transparent
      }

      a:active,
      a:hover {
         outline: 0
      }

      b,
      strong {}

      h1 {
         font-size: 2em;
         margin: .67em 0
      }

      img {
         border: 0
      }

      figure {
         margin: 1em 40px
      }

      hr {
         -webkit-box-sizing: content-box;
         -moz-box-sizing: content-box;
         box-sizing: content-box;
         height: 0
      }

      button,
      input,
      select {
         color: inherit;
         font: inherit;
         margin: 0
      }

      button {
         overflow: visible
      }

      button,
      select {
         text-transform: none
      }

      button,
      input[type="submit"] {
         -webkit-appearance: button;
         cursor: pointer
      }

      button[disabled] {
         cursor: default
      }

      button::-moz-focus-inner,
      input::-moz-focus-inner {
         border: 0;
         padding: 0
      }

      input {
         line-height: normal
      }

      input[type="checkbox"],
      input[type="radio"] {
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box;
         padding: 0
      }

      @media print {

         *,
         *:before,
         *:after {
            background: transparent !important;
            color: #000 !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            text-shadow: none !important
         }

         a,
         a:visited {
            text-decoration: underline
         }

         a[href]:after {
            content: " ("attr(href) ")"
         }

         a[href^="#"]:after {
            content: ""
         }

         img {
            page-break-inside: avoid
         }

         img {
            max-width: 100% !important
         }

         p,
         h2,
         h3 {
            orphans: 3;
            widows: 3
         }

         h2,
         h3 {
            page-break-after: avoid
         }
      }

      .glyphicon {
         position: relative;
         top: 1px;
         display: inline-block;
         font-style: normal;
         line-height: 1;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale
      }

      .glyphicon-pencil:before {
         content: "?"
      }

      .glyphicon-search:before {
         content: "?"
      }

      * {
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box
      }

      *:before,
      *:after {
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box
      }

      body {
         font-size: 14px;
         line-height: 1.42857143;
         background-color: #fff
      }

      input,
      button,
      select {
         font-family: inherit;
         font-size: inherit;
         line-height: inherit
      }

      a {
         color: #333;
         text-decoration: none
      }

      a:hover,
      a:focus {
         color: #0d0d0d;
         text-decoration: underline
      }

      a:focus {
         outline: 5px auto -webkit-focus-ring-color;
         outline-offset: -2px
      }

      figure {
         margin: 0
      }

      img {
         vertical-align: middle
      }

      .thumbnail a>img {
         display: block;
         max-width: 100%;
         height: auto
      }

      .img-circle {
         border-radius: 50%
      }

      hr {
         margin-top: 20px;
         margin-bottom: 20px;
         border: 0;
         border-top: 1px solid #fff
      }

      [role="button"] {
         cursor: pointer
      }

      h1,
      h2,
      h3,
      .h1,
      .h2,
      .h3,
      .h4,
      .h6 {
         font-family: inherit;
         ;
         line-height: 1.1;
         color: #333
      }

      h1,
      .h1,
      h2,
      .h2,
      h3,
      .h3 {
         margin-top: 20px;
         margin-bottom: 10px
      }

      .h4,
      .h6 {
         margin-top: 10px;
         margin-bottom: 10px
      }

      h1,
      .h1 {
         font-size: 36px
      }

      h2,
      .h2 {
         font-size: 30px
      }

      h3,
      .h3 {
         font-size: 24px
      }

      .h4 {
         font-size: 18px
      }

      .h6 {
         font-size: 12px
      }

      p {
         margin: 0 0 10px
      }

      .lead {
         margin-bottom: 20px;
         font-size: 16px;
         font-weight: 300;
         line-height: 1.4
      }

      @media (min-width:768px) {
         .lead {
            font-size: 21px
         }
      }

      .text-left {
         text-align: left
      }

      .text-right {
         text-align: right
      }

      .text-center {
         text-align: center
      }

      .text-justify {
         text-align: justify
      }

      .text-uppercase {
         text-transform: uppercase
      }

      .text-success {
         color: #3c763d
      }

      .text-danger {
         color: #a94442
      }

      ul {
         margin-top: 0;
         margin-bottom: 10px
      }

      .list-inline {
         padding-left: 0;
         list-style: none;
         margin-left: -5px
      }

      .list-inline>li {
         display: inline-block;
         padding-left: 5px;
         padding-right: 5px
      }

      .container {
         margin-right: auto;
         margin-left: auto;
         padding-left: 15px;
         padding-right: 15px
      }

      @media (min-width:768px) {
         .container {
            width: 750px
         }
      }

      @media (min-width:992px) {
         .container {
            width: 970px
         }
      }

      @media (min-width:1200px) {
         .container {
            width: 1170px
         }
      }

      .row {
         margin-left: -15px;
         margin-right: -15px
      }

      .col-xs-2,
      .col-sm-2,
      .col-md-2,
      .col-md-3,
      .col-xs-4,
      .col-sm-4,
      .col-md-4,
      .col-md-5,
      .col-xs-6,
      .col-sm-6,
      .col-md-6,
      .col-md-7,
      .col-xs-8,
      .col-sm-8,
      .col-md-8,
      .col-md-9,
      .col-xs-10,
      .col-xs-12,
      .col-sm-12,
      .col-md-12 {
         position: relative;
         min-height: 1px;
         padding-left: 15px;
         padding-right: 15px
      }

      .col-xs-2,
      .col-xs-4,
      .col-xs-6,
      .col-xs-8,
      .col-xs-10,
      .col-xs-12 {
         float: left
      }

      .col-xs-12 {
         width: 100%
      }

      .col-xs-10 {
         width: 83.33333333%
      }

      .col-xs-8 {
         width: 66.66666667%
      }

      .col-xs-6 {
         width: 50%
      }

      .col-xs-4 {
         width: 33.33333333%
      }

      .col-xs-2 {
         width: 16.66666667%
      }

      @media (min-width:768px) {

         .col-sm-2,
         .col-sm-4,
         .col-sm-6,
         .col-sm-8,
         .col-sm-12 {
            float: left
         }

         .col-sm-12 {
            width: 100%
         }

         .col-sm-8 {
            width: 66.66666667%
         }

         .col-sm-6 {
            width: 50%
         }

         .col-sm-4 {
            width: 33.33333333%
         }

         .col-sm-2 {
            width: 16.66666667%
         }
      }

      @media (min-width:992px) {

         .col-md-2,
         .col-md-3,
         .col-md-4,
         .col-md-5,
         .col-md-6,
         .col-md-7,
         .col-md-8,
         .col-md-9,
         .col-md-12 {
            float: left
         }

         .col-md-12 {
            width: 100%
         }

         .col-md-9 {
            width: 75%
         }

         .col-md-8 {
            width: 66.66666667%
         }

         .col-md-7 {
            width: 58.33333333%
         }

         .col-md-6 {
            width: 50%
         }

         .col-md-5 {
            width: 41.66666667%
         }

         .col-md-4 {
            width: 33.33333333%
         }

         .col-md-3 {
            width: 25%
         }

         .col-md-2 {
            width: 16.66666667%
         }

         .col-md-offset-3 {
            margin-left: 25%
         }

         .col-md-offset-2 {
            margin-left: 16.66666667%
         }
      }

      label {
         display: inline-block;
         max-width: 100%;
         margin-bottom: 5px;
      }

      input[type="radio"],
      input[type="checkbox"] {
         margin: 4px 0 0;
         margin-top: 1px \9;
         line-height: normal
      }

      input[type="radio"]:focus,
      input[type="checkbox"]:focus {
         outline: 5px auto -webkit-focus-ring-color;
         outline-offset: -2px
      }

      .form-control {
         display: block;
         width: 100%;
         height: 34px;
         padding: 6px 12px;
         font-size: 14px;
         line-height: 1.42857143;
         color: #888;
         background-color: #fff;
         background-image: none;
         border: 1px solid #ccc;
         border-radius: 0px;
         -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
         box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
         -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
         -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
         transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
      }

      .form-control:focus {
         border-color: #66afe9;
         outline: 0;
         -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
         box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
      }

      .form-control::-moz-placeholder {
         color: #999;
         opacity: 1
      }

      .form-control:-ms-input-placeholder {
         color: #999
      }

      .form-control::-webkit-input-placeholder {
         color: #999
      }

      .form-control::-ms-expand {
         border: 0;
         background-color: transparent
      }

      .form-group {
         margin-bottom: 15px
      }

      .radio,
      .checkbox {
         position: relative;
         display: block;
         margin-top: 10px;
         margin-bottom: 10px
      }

      .radio label,
      .checkbox label {
         min-height: 20px;
         padding-left: 20px;
         margin-bottom: 0;
         cursor: pointer
      }

      .radio input[type="radio"],
      .checkbox input[type="checkbox"] {
         position: absolute;
         margin-left: -20px;
         margin-top: 4px \9
      }

      .checkbox+.checkbox {
         margin-top: -5px
      }

      .btn {
         display: inline-block;
         margin-bottom: 0;
         text-align: center;
         vertical-align: middle;
         -ms-touch-action: manipulation;
         touch-action: manipulation;
         cursor: pointer;
         background-image: none;
         border: 1px solid transparent;
         white-space: nowrap;
         padding: 6px 12px;
         font-size: 14px;
         line-height: 1.42857143;
         border-radius: 4px;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none
      }

      .btn:focus,
      .btn:active:focus {
         outline: 5px auto -webkit-focus-ring-color;
         outline-offset: -2px
      }

      .btn:hover,
      .btn:focus {
         color: #333;
         text-decoration: none
      }

      .btn:active {
         outline: 0;
         background-image: none;
         -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
         box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
      }

      .btn-warning {
         color: #333;
         background-color: #fc0;
         border-color: #e6b800
      }

      .btn-warning:focus {
         color: #333;
         background-color: #cca300;
         border-color: #665200
      }

      .btn-warning:hover {
         color: #333;
         background-color: #cca300;
         border-color: #a88700
      }

      .btn-warning:active {
         color: #333;
         background-color: #cca300;
         border-color: #a88700
      }

      .btn-warning:active:hover,
      .btn-warning:active:focus {
         color: #333;
         background-color: #a88700;
         border-color: #665200
      }

      .btn-warning:active {
         background-image: none
      }

      .btn-lg {
         padding: 10px 16px;
         font-size: 18px;
         line-height: 1.3333333;
         border-radius: 6px
      }

      .btn-block {
         display: block;
         width: 100%
      }

      .fade {
         opacity: 0;
         -webkit-transition: opacity .15s linear;
         -o-transition: opacity .15s linear;
         transition: opacity .15s linear
      }

      .fade.in {
         opacity: 1
      }

      .collapse {
         display: none
      }

      .collapse.in {
         display: block
      }

      .dropdown {
         position: relative
      }

      .input-group {
         position: relative;
         display: table;
         border-collapse: separate
      }

      .thumbnail {
         display: block;
         padding: 4px;
         margin-bottom: 20px;
         line-height: 1.42857143;
         background-color: #fff;
         border: 1px solid #ddd;
         border-radius: 4px;
         -webkit-transition: border .2s ease-in-out;
         -o-transition: border .2s ease-in-out;
         transition: border .2s ease-in-out
      }

      .thumbnail a>img {
         margin-left: auto;
         margin-right: auto
      }

      .thumbnail .caption {
         padding: 9px;
         color: #666
      }

      .alert {
         padding: 15px;
         margin-bottom: 20px;
         border: 1px solid transparent;
         border-radius: 4px
      }

      .alert-dismissible {
         padding-right: 35px
      }

      .alert-danger {
         background-color: #f2dede;
         border-color: #ebccd1;
         color: #a94442
      }

      .panel {
         margin-bottom: 20px;
         background-color: #fff;
         border: 1px solid transparent;
         border-radius: 4px;
         -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
         box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
      }

      .panel-title {
         margin-top: 0;
         margin-bottom: 0;
         font-size: 16px;
         color: inherit
      }

      .panel-footer {
         padding: 10px 15px;
         background-color: #f5f5f5;
         border-top: 1px solid #ddd;
         border-bottom-right-radius: 3px;
         border-bottom-left-radius: 3px
      }

      .close {
         float: right;
         font-size: 21px;
         ;
         line-height: 1;
         color: #000;
         text-shadow: 0 1px 0 #fff;
         opacity: .2;
         filter: alpha(opacity=20)
      }

      .close:hover,
      .close:focus {
         color: #000;
         text-decoration: none;
         cursor: pointer;
         opacity: .5;
         filter: alpha(opacity=50)
      }

      button.close {
         padding: 0;
         cursor: pointer;
         background: transparent;
         border: 0;
      }

      .modal {
         display: none;
         overflow: hidden;
         position: fixed;
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;
         z-index: 1050;
         -webkit-overflow-scrolling: touch;
         outline: 0
      }

      .modal.fade .modal-dialog {
         -webkit-transform: translate(0, -25%);
         -ms-transform: translate(0, -25%);
         -o-transform: translate(0, -25%);
         transform: translate(0, -25%);
         -webkit-transition: -webkit-transform .3s ease-out;
         -o-transition: -o-transform .3s ease-out;
         transition: transform .3s ease-out
      }

      .modal-dialog {
         position: relative;
         width: auto;
         margin: 10px
      }

      .modal-content {
         position: relative;
         background-color: #fff;
         border: 1px solid #999;
         border: 1px solid rgba(0, 0, 0, .2);
         border-radius: 6px;
         -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
         box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
         -webkit-background-clip: padding-box;
         background-clip: padding-box;
         outline: 0
      }

      .modal-header {
         padding: 15px;
         border-bottom: 1px solid #e5e5e5;
         background: #f77403;
      }

      .modal-header .close {
         margin-top: 0px
      }

      .modal-title {
         margin: 0;
         line-height: 1.42857143;
         color: #fff;
      }

      .modal-body {
         position: relative;
         padding: 15px
      }

      .modal-footer {
         padding: 0px 15px 20px 15px;
         border-top: 0px solid #000;
         text-align: right;
      }

      .modal-footer .btn+.btn {
         margin-left: 5px;
         margin-bottom: 0
      }

      @media (min-width:768px) {
         .modal-dialog {
            width: 500px;
            margin: 30px auto
         }

         .modal-content {
            -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
         }
      }

      @media (min-width:992px) {
         .modal-lg {
            width: 900px
         }
      }

      .clearfix:before,
      .clearfix:after,
      .container:before,
      .container:after,
      .row:before,
      .row:after,
      .modal-header:before,
      .modal-header:after,
      .modal-footer:before,
      .modal-footer:after {
         content: " ";
         display: table
      }

      .clearfix:after,
      .container:after,
      .row:after,
      .modal-header:after,
      .modal-footer:after {
         clear: both
      }

      .pull-right {
         float: right !important
      }

      .pull-left {
         float: left !important
      }

      body {
         border-top: 3px solid #fc0
      }

      .inline_block_all {
         display: inline-block
      }

      .HideBoxPhone {
         display: -webkit-inline-box !important
      }

      .HideTopDesktp {
         display: none
      }

      .HideTopPhone {
         display: block
      }

      .P0 {
         padding: 0 !important
      }

      .M0 {
         margin: 0 !important
      }

      .PaddingTop {
         padding: 30px 0
      }

      .top27 {
         margin-bottom: 23px !important
      }

      .margin0 {
         margin-bottom: 0 !important
      }

      .margin_Rgt10 {
         margin-right: 10px !important
      }

      .marginRgt15 {
         margin-right: 15px
      }

      .top0 {
         margin-top: 0 !important
      }

      .top5 {
         margin-top: 5px
      }

      .topBtm5 {
         margin-bottom: 5px
      }

      .top7 {
         margin-top: 7px
      }

      .top10 {
         margin-top: 10px
      }

      .top17 {
         margin-top: 17px
      }

      .top30 {
         margin-top: 30px
      }

      .top74 {
         margin-top: 74px
      }

      .whiteBG {
         background: #fff
      }

      @media only screen and (max-width:500px) {
         .modal-dialog {
            width: 95% !important
         }
      }

      @media only screen and (max-width:768px) {
         .phone14 {
            font-size: 14px !important
         }

         .dropdownIcon {
            margin-right: 3px !important
         }

         .dropbtn {
            padding: 0 0 !important
         }

         .sign-modal-dialog {
            width: 90% !important;
            margin: 30px auto
         }

         .sign_up_close {
            top: -17px !important
         }

         .sign_up_form input {
            height: 45px !important
         }

         .sign_up_form::placeholder {
            color: #bbb
         }

         .sign_up_form:-ms-input-placeholder {
            color: #bbb
         }

         .sign_up_form::-ms-input-placeholder {
            color: #bbb
         }

         .padding_rgt_lft_20 {
            padding: 0 20px
         }

         .textcenter {
            text-align: center !important;
            margin-top: 10px;
            font-size: 15px !important;
            padding: 0 10px
         }

         .language_box {
            font-size: 12px !important;
            height: 68px
         }

         .talktostep {
            font-size: 18px !important;
            margin: 10px 0 10px 0 !important
         }

         .font12Mobile {
            font-size: 12px
         }

         .P0Mobile {
            padding: 0 !important
         }

         .paddingtb20 {
            padding: 5px 0 !important
         }

         .border_t2a {
            left: 50px
         }

         .HideBoxPhone {
            display: none !important
         }

         h1,
         h2,
         h3 {
            font-size: 25px !important
         }

         .height150 {
            height: auto !important
         }

         .TopHeadingGray h3 {
            font-size: 24px !important;
            margin: 0 0 15px 0 !important
         }

         .RightMenu li a {
            font-size: 12px !important
         }

         .RightMenu select {
            border: 1px solid #999 !important;
            color: #999;
            border-radius: 50px;
            outline: none;
            position: relative;
            text-transform: uppercase;
            ;
            margin-top: 10px;
            padding: 5px 0 3px 6px;
            font-size: 13px
         }

         .RightMenu li {
            margin-bottom: 0 !important
         }

         .PaddingTop20desktop {
            padding: 0 0 !important
         }

         .logoCenter {
            text-align: center;
            border-bottom: none !important;
            padding-bottom: 10px !important
         }

         .logoCenter {
            text-align: center
         }

         .logoCenter img {
            width: 30%
         }

         .HideTopPhone {
            display: none
         }

         .HideTopDesktp {
            display: block
         }

         .RightMenu li {
            float: left;
            list-style: none;
            background: none;
            padding-left: 17px;
            margin-left: 0;
            line-height: 46px
         }
      }

      @media only screen and (max-width:992px) {
         .logoCenter {
            text-align: center;
            border-bottom: 1px solid #f3f0f0;
            padding-bottom: 30px
         }

         .collapse.in {
            display: block !important
         }
      }

      p {
         line-height: 23px
      }

      .profile {
         background: #fff;
         padding: 5px
      }

      .profile img {
         width: 70px;
         height: 70px !important
      }

      .profile .star {
         color: #fc0
      }

      .HoroscopeSign {
         font-size: 16px;
         text-align: center
      }

      .GrayColor {
         color: #333 !important
      }

      .GrayColor_light {
         color: #888 !important
      }

      .GrayColor_light_a {
         color: #737373
      }

      .LightGrayColor {
         color: #999
      }

      .DarkGrayBG {
         background: #efefef;
         border-top: 1px solid #dcdcdc;
         border-bottom: 1px solid #dcdcdc
      }

      .TopHeadingGray {
         border-bottom: 1px solid #dcdcdc;
         position: relative;
         margin-bottom: 40px;
         padding-bottom: 10px;
         text-align: center
      }

      .TopHeadingGray h3 {
         text-transform: uppercase;
         margin: 40px 0 20px;
         padding-bottom: 3px;
         font-size: 44px;
         color: #999
      }

      .TopHeadingGray h3 span {
         color: #fc0
      }

      .RightMenu {
         font-size: 15px;
         color: #8c8c8c;
         position: relative;
         top: -5px;
         display: table-footer-group
      }

      .borderNone {
         border: none !important;
         background: none !important
      }

      .RightMenu li {
         float: left;
         list-style: none;
         margin-left: 0;
         padding-left: 10px;
         line-height: 46px
      }

      .RightMenu li select {
         border: none;
         padding: 5px;
         border-radius: 2px;
         color: #999;
         outline: none;
         position: relative;
         top: 1px;
         text-transform: uppercase;
         ;
         cursor: pointer;
         height: 30px
      }

      .RightMenu li a {
         color: #999;
         text-transform: uppercase;
         font-size: 15px;
         ;
         position: relative;
         top: 1px
      }

      .RightMenu li a:hover {
         color: #fc0;
         text-decoration: none
      }

      .height150 {
         height: 150px
      }

      .height30 {
         height: 30px
      }

      .dropbtn {
         background-color: #fff;
         color: #8c8c9a;
         padding: 0 5px;
         font-size: 15px;
         border: none;
         cursor: pointer
      }

      .dropdown_myaccount {
         position: relative;
         display: inline-block;
         border: 1px solid #e8e8e8;
         padding: 3px 7px;
         border-radius: 3px;
         line-height: 37px
      }

      .dropdownIcon {
         margin-right: 10px
      }

      .dropdown-content {
         display: none;
         position: absolute;
         background-color: #f9f9f9;
         min-width: 170px;
         box-shadow: 0 8px 16px 0 rgba(0, 0, 0, .2);
         z-index: 9999
      }

      .dropdown-content a {
         color: #000;
         padding: 0 16px;
         text-decoration: none;
         display: block
      }

      .dropdown:hover .dropdown-content {
         display: block
      }

      .PaddingTop20desktop {
         padding: 20px 0
      }

      .center {
         text-align: center !important
      }

      .font18 {
         font-size: 18px
      }

      .font20 {
         font-size: 20px
      }

      .font16 {
         font-size: 16px !important
      }

      .font17 {
         font-size: 17px
      }

      .font14 {
         font-size: 14px
      }

      .cursor-pointer {
         cursor: pointer !important
      }

      hr {
         border-top: 1px solid #f0f0f0 !important;
         margin-top: 13px
      }

      .line27 {
         line-height: 27px !important
      }

      .block {
         display: block
      }

      .consult_now {
         font-size: 19px !important;
         border: 1px solid #fc0;
         color: #737373 !important;
         text-transform: none !important;
         padding: 14px 20px 10px 20px;
         border-radius: 50px;
         text-decoration: none !important
      }

      .consult_now:hover {
         background: #ececec
      }

      .astrologer_panel a:before {
         content: "?";
         float: right;
         transition: all .5s;
         font-size: 12px;
         color: #cecece
      }

      .panel_heading {
         background: #fff;
         color: #999;
         border-bottom: 1px solid #f0f0f0;
         border-radius: 0 !important;
         margin: 0 !important;
         box-shadow: 0 0 0
      }

      .panel_heading:last-child {
         border: none !important
      }

      .panel_heading .checkbox {
         margin-top: 0;
         margin-bottom: 0;
         padding: 1px;
         line-height: 25px
      }

      .panel_heading a {
         font-size: 17px;
         color: #999;
         line-height: 50px;
         text-decoration: none !important
      }

      .panel_heading a:hover {
         color: #999
      }

      .secureImg {
         text-align: left;
         float: left;
         margin-right: 10px
      }

      .Padding10 {
         padding: 0 10px
      }

      .PaddingFour15 {
         padding: 15px
      }

      .Search_input {
         height: 41px;
         border-radius: 30px 0 0 30px
      }

      .searchleft8 {
         margin-left: -8px;
         color: #999;
         border-radius: 0 30px 30px 0;
         font-size: 17px;
         height: 41px;
         padding-top: 10px
      }

      .rightSection {
         border-bottom: 1px solid #f0f0f0;
         padding: 10px 0;
         margin-bottom: 10px
      }

      .profile_icon {
         width: 20px !important;
         height: 20px !important;
         margin-right: 5px !important;
         margin-top: -5px
      }

      .call_action_icon {
         width: 29px !important;
         height: 29px !important;
         margin-bottom: 5px;
         margin-top: 10px
      }

      .astroBg {
         background: #fffefa
      }

      .call_action {
         border-top: 1px solid #f0f0f0;
         margin-top: 10px
      }

      .busyaction {
         color: #e05d52 !important;
         font-size: 12px;
         text-transform: uppercase;
         text-decoration: none !important;
         cursor: auto
      }

      .busyaction:hover {
         color: #e05d52 !important
      }

      .onlineaction {
         color: #17a05d !important;
         font-size: 12px;
         text-transform: uppercase;
         text-decoration: none !important
      }

      .onlineaction:hover {
         color: #17a05d !important
      }

      .floatNone {
         float: none
      }

      .Review {
         border: 1px solid #fc0
      }

      .thumbnailNew {
         border-radius: 0 !important;
         border: 1px solid #dfdfdf !important
      }

      .profile_link {
         margin-bottom: 3px;
         display: -webkit-box;
         max-height: 35px;
         text-decoration: none !important
      }

      .filterAd {
         border-radius: 48px;
         position: relative;
         top: -8px;
         padding: 7px 10px 3px 10px;
         text-transform: none;
         font-size: 14px;
         margin-top: 10px
      }

      .btn_radius {
         border-radius: 50px;
         padding-right: 20px;
         padding-left: 20px
      }

      .checkBoxup {
         position: relative;
         top: -2px
      }

      .btn_radius {
         border-radius: 50px;
         padding-right: 20px;
         padding-left: 20px
      }

      .b-lazy {
         opacity: 0;
         transition: all 500ms
      }

      .b-loaded {
         opacity: 1
      }

      .sprite-inner-login {
         width: 20px;
         height: 20px;
         background-position: -70px -107px !important;
         margin-top: 12px
      }

      .sprite-inner-language {
         width: 25px;
         height: 20px;
         background-position: -70px -76px !important;
         margin-top: 12px
      }

      .paddingtb20 {
         padding: 15px 0
      }

      .border_t2a {
         border: 1px solid silver;
         position: relative;
         top: 31px;
         left: 30px
      }

      .Decoration_none {
         text-decoration: none !important
      }

      .talktostep {
         margin: 0 0 15px 0;
         padding: 0;
         font-size: 24px
      }

      .glowing_icon {
         width: 62px;
         height: 62px;
         border-radius: 100px;
         margin: 0 auto;
         animation: shadow-pulse 2s infinite
      }

      .star_rating_a {
         background: #fff;
         border: 1px solid #b3afaf;
         color: #333;
         padding: 2px 8px 2px 8px;
         border-radius: 50px;
         display: inline-block;
         margin: 0;
         font-size: 12px;
         font-weight: 400
      }

      .glyphicon_gray_star {
         position: relative;
         top: 1px;
         margin-left: 1px;
         color: #e8bb06
      }

      .language_light {
         background: #f4f4f4;
         border: none
      }

      .language_bg {
         background: #333;
         border-radius: 6px 6px 0 0;
         height: 55px
      }

      .language_bg_btn {
         background: #fff;
         display: block;
         cursor: auto;
         color: #333 !important;
         padding: 10px 0;
         font-size: 19px;
         text-decoration: none !important;
         border: 3px solid #c7c7c7;
         margin-bottom: 10px
      }

      .language_bg_btn_active {
         background: #fff;
         color: #333 !important;
         display: block;
         padding: 10px 0;
         font-size: 19px;
         text-decoration: none !important;
         border: 3px solid #ffe36e;
         margin-bottom: 10px;
         animation: shadow-pulse-btn 2s infinite
      }

      .language_bg_btn_yellow_active {
         background: #fff;
         color: #333 !important;
         display: block;
         padding: 10px 0;
         font-size: 19px;
         text-decoration: none !important;
         border: 3px solid #c7c7c7;
         margin-bottom: 10px
      }

      .language_box {
         background: #fff;
         background: #fff;
         padding: 15px 0;
         font-size: 16px;
         padding: 7px 0;
         border: 1px solid #e5e5e5;
         cursor: pointer;
         border-radius: 3px;
         margin-bottom: 15px
      }

      .language_box:hover {
         background: #fc0;
         border: none;
         ;
         -webkit-transition: all .5s ease;
         transition: all .5s ease;
         -webkit-transform: translateY(-2px);
         transform: translateY(-2px);
         -webkit-box-shadow: 0 10px 15px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
         box-shadow: 0 7px 10px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08)
      }

      .language_box span {
         display: block;
         width: 30px;
         height: 30px;
         margin: 0 auto;
         color: #fff;
         border-radius: 50px;
         margin-bottom: 5px;
         line-height: 34px;
         font-weight: NORMAL;
         font-size: 14px
      }

      .english_lg {
         background: #4e79a4
      }

      .hindi_lg {
         background: #f18f3b
      }

      .urdu_lg {
         background: #e0585b
      }

      .gujarati_lg {
         background: #77b7b2
      }

      .kannada_lg {
         background: #5aa155
      }

      .malayalam_lg {
         background: #edc958
      }

      .odia_lg {
         background: #af7aa0
      }

      .assamese_lg {
         background: #fe9ea8
      }

      .nepali_lg {
         background: #9c7561
      }

      .punjabi_lg {
         background: #8e8a88
      }

      .sindhi_lg {
         background: #61afef
      }

      .bangla_lg {
         background: #658a97
      }

      .telugu_lg {
         background: #e06c60
      }

      .marathi_lg {
         background: #9da5b4
      }

      .tamil_lg {
         background: #d19a66
      }

      .sprite-consult {
         display: -webkit-inline-box;
         background: url(https://www.onegodmed.com/front-assets/images/header/chat-images.png) no-repeat
      }

      .sprite-consult_sign_white {
         width: 62px;
         height: 62px;
         background-position: 0 -0 !important
      }

      .sprite-consult_wallet_white {
         width: 62px;
         height: 62px;
         background-position: 0 -91px !important
      }

      .sprite-consult_call_white {
         width: 62px;
         height: 62px;
         background-position: -2 -185px !important
      }

      .sprite-consult_calling {
         width: 20px;
         height: 20px;
         background-position: -71px -155px !important;
         position: relative;
         top: 3px;
         cursor: pointer
      }

      .sign_up_form_a {
         margin: 0 10px 0 0 !important;
         padding: 0;
         width: 20%;
         float: left
      }

      .sign_up_form_b {
         margin: 0;
         padding: 0;
         width: 74%;
         float: left
      }

      .sign_up_form::placeholder {
         color: #bbb
      }

      .sign_up_form:-ms-input-placeholder {
         color: #bbb
      }

      .sign_up_form::-ms-input-placeholder {
         color: #bbb
      }

      .sign_up_form input {
         margin: 0 0 7px 0;
         padding: 10px;
         height: 45px;
         width: 100%;
         outline: none;
         border: 1px solid #e7e7e7;
         font-size: 16px;
         border-radius: 3px
      }

      .sign_up_form input[type=name]:focus {
         border: 1px solid #fc0;
         color: #333
      }

      .sign_up_form input[type=mobile]:focus {
         border: 1px solid #fc0;
         color: #333
      }

      .sign_up_form input[type=password]:focus {
         border: 1px solid #fc0;
         color: #333
      }

      .sign_up_close {
         float: right;
         top: -18px;
         position: relative;
         background: none;
         outline: none;
         border: none;
         font-size: 31px;
         color: #333;
         cursor: pointer
      }

      .sign_up_close:hover {
         color: #999
      }

      .sign_up_default {
         background: #f0f0f0;
         border: 1px solid #dedede;
         font-size: 20px;
         display: block;
         width: 100%;
         line-height: 50px;
         border-radius: 100px;
         cursor: auto;
         outline: none;
         color: #b4b4b4
      }

      .sign_up_warning {
         background: #fc0;
         border: 1px solid #d2a700;
         font-size: 20px;
         display: block;
         width: 100%;
         line-height: 50px;
         border-radius: 100px;
         cursor: pointer;
         outline: none;
         color: #333
      }

      .sign_up_warning:hover {
         background: #d2a700
      }

      .Sign_up_otp input {
         margin: 10px 10px 15px 0;
         padding: 0;
         height: 45px;
         width: 10%;
         outline: none;
         border: 1px solid #d2d2d2;
         font-size: 16px;
         text-align: center;
         font-size: 20px;
         border-radius: 3px
      }

      .singupedit {
         font-weight: 200;
         font-size: 12px;
         position: relative;
         top: -1px;
         border: 1px solid #c29246;
         padding: 4px 5px;
         border-radius: 2px
      }

      .singupedit:hover {
         background: #fc0;
         color: #333
      }

      .sign-modal-dialog {
         width: 500px;
         margin: 30px auto
      }

      .signup-male-light {
         background: #fff url(//images.onegodmed.com/onegodmed2017/common/sing_up_male_female.png) no-repeat;
         background-position: 10px -79px;
         padding: 9px 17px 9px 45px;
         margin-right: 25px;
         border-radius: 3px;
         color: #999 !important;
         border: 1px solid #e7e7e7;
         font-size: 17px;
         text-decoration: none !important;
         display: inline-block
      }

      .signup-male-light:hover {
         background: #fc0 url(//images.onegodmed.com/onegodmed2017/common/sing_up_male_female.png) no-repeat;
         background-position: 10px -122px;
         padding: 9px 17px 9px 45px;
         margin-right: 25px;
         border-radius: 3px;
         color: #333 !important;
         border: 1px solid #d1a700;
         font-size: 17px;
         display: inline-block
      }

      .signup-female-light {
         background: #fff url(//images.onegodmed.com/onegodmed2017/common/sing_up_male_female.png) no-repeat;
         background-position: 10px -39px;
         padding: 9px 17px 9px 45px;
         margin-right: 25px;
         border-radius: 3px;
         color: #999 !important;
         border: 1px solid #e7e7e7;
         font-size: 17px;
         display: inline-block;
         text-decoration: none !important
      }

      .signup-female-light:hover {
         background: #fc0 url(//images.onegodmed.com/onegodmed2017/common/sing_up_male_female.png) no-repeat;
         background-position: 10px 4px;
         padding: 9px 17px 9px 45px;
         margin-right: 25px;
         border-radius: 3px;
         color: #333 !important;
         display: inline-block;
         border: 1px solid #d1a700;
         font-size: 17px
      }

      .signup-button {
         background: #fff;
         border: 1px solid #333;
         display: block;
         width: 100%;
         margin-top: 30px;
         padding: 13px 0;
         font-size: 17px;
         color: #333;
         border-radius: 100px;
         cursor: pointer;
         outline: none
      }

      .signup-button:hover {
         background: #f0f0f0
      }

      .header_top {
         padding: 10px 0;
         margin-bottom: 10px;
         border-bottom: 1px solid #d8d8d8
      }

      .padding8 {
         padding: 8px !important
      }
   }

   @keyframes shadow-pulse {
      0% {
         box-shadow: 0 0 0 0 rgba(255, 195, 0, .5)
      }

      100% {
         box-shadow: 0 0 0 30px rgba(0, 0, 0, 0)
      }
   }

   @keyframes shadow-pulse {
      0% {
         box-shadow: 0 0 0 0 rgba(255, 195, 0, .5)
      }

      100% {
         box-shadow: 0 0 0 30px rgba(0, 0, 0, 0)
      }
   }

   @keyframes shadow-pulse-btn {
      0% {
         box-shadow: 0 0 0 0 rgba(255, 204, 0, .5)
      }

      100% {
         box-shadow: 0 0 0 21px rgba(0, 0, 0, 0)
      }
   }

   @keyframes shadow-pulse-btn {
      0% {
         box-shadow: 0 0 0 0 rgba(255, 204, 0, .5)
      }

      100% {
         box-shadow: 0 0 0 21px rgba(0, 0, 0, 0)
      }
   }

   @font-face {
      src: url(https://www.onegodmed.com/fonts/glyphicons-halflings-regular.eot);
      src: url(https://www.onegodmed.com/fonts/glyphicons-halflings-regular.eot#iefix) format('embedded-opentype'), url(https://www.onegodmed.com/fonts/glyphicons-halflings-regular.woff2) format('woff2'), url(https://www.onegodmed.com/fonts/glyphicons-halflings-regular.woff) format('woff'), url(https://www.onegodmed.com/fonts/glyphicons-halflings-regular.ttf) format('truetype'), url(https://www.onegodmed.com/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')
   }

   @font-face {}

   @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 300;
      src: local('Josefin Sans Light'), local('JosefinSans-Light'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3FZQNVED7rKGKxtqIqX5Ecpl5te10h.woff2) format('woff2');
      unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
   }

   @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 100;
      src: local('Josefin Sans Thin'), local('JosefinSans-Thin'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3EZQNVED7rKGKxtqIqX5Ecbkx6XHg.woff2) format('woff2');
      unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
   }

   @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3aZQNVED7rKGKxtqIqX5EUDXx4.woff2) format('woff2');
      unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
   }

   @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 300;
      src: local('Josefin Sans Light'), local('JosefinSans-Light'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3FZQNVED7rKGKxtqIqX5Ecpl5te10h.woff2) format('woff2');
      unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
   }

   @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 100;
      src: local('Josefin Sans Thin'), local('JosefinSans-Thin'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3EZQNVED7rKGKxtqIqX5Ecbkx6XHg.woff2) format('woff2');
      unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
   }

   @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3aZQNVED7rKGKxtqIqX5EUDXx4.woff2) format('woff2');
      unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
   }

   .online_queue {
      background: #fff url(https://images.onegodmed.com/onegodmed2017/common/queue_plus.jpg) no-repeat;
      background-position: right;
      border: 1px solid #fff !important;
      display: block;
      margin-top: 0;
      text-align: center;
      padding: 6px 0 6px 0;
      border-radius: 10px !important;
      color: #437a67 !important;
      font-size: 18px;
      text-decoration: none !important;
      cursor: default;
      background: #ff8820;
   }

   .astrologer_box {
      border: 1px solid #ececec;
      border-radius: 3px;
      margin-bottom: 20px;
      position: relative;
   }

   html {
      font-family: sans-serif;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%
   }

   body {
      margin: 0
   }

   article,
   aside,
   details,
   figcaption,
   figure,
   footer,
   header,
   hgroup,
   main,
   menu,
   nav,
   section,
   summary {
      display: block
   }

   audio,
   canvas,
   progress,
   video {
      display: inline-block;
      vertical-align: baseline
   }

   audio:not([controls]) {
      display: none;
      height: 0
   }

   [hidden],
   template {
      display: none
   }

   a {
      background-color: transparent
   }

   a:active,
   a:hover {
      outline: 0
   }

   abbr[title] {
      border-bottom: 1px dotted
   }

   b,
   strong {
      font-weight: bold
   }

   dfn {
      font-style: italic
   }

   h1 {
      font-size: 2em;
      margin: .67em 0
   }

   mark {
      background: #ff0;
      color: #000
   }

   small {
      font-size: 80%
   }

   sub,
   sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
   }

   sup {
      top: -.5em
   }

   sub {
      bottom: -.25em
   }

   img {
      border: 0
   }

   svg:not(:root) {
      overflow: hidden
   }

   figure {
      margin: 1em 40px
   }

   hr {
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      box-sizing: content-box;
      height: 0
   }

   pre {
      overflow: auto
   }

   code,
   kbd,
   pre,
   samp {
      font-family: monospace, monospace;
      font-size: 1em
   }

   button,
   input,
   optgroup,
   select,
   textarea {
      color: inherit;
      font: inherit;
      margin: 0
   }

   button {
      overflow: visible
   }

   button,
   select {
      text-transform: none
   }

   button,
   html input[type="button"],
   input[type="reset"],
   input[type="submit"] {
      -webkit-appearance: button;
      cursor: pointer
   }

   button[disabled],
   html input[disabled] {
      cursor: default
   }

   button::-moz-focus-inner,
   input::-moz-focus-inner {
      border: 0;
      padding: 0
   }

   input {
      line-height: normal
   }

   input[type="checkbox"],
   input[type="radio"] {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      padding: 0
   }

   input[type="number"]::-webkit-inner-spin-button,
   input[type="number"]::-webkit-outer-spin-button {
      height: auto
   }

   input[type="search"] {
      -webkit-appearance: textfield;
      -webkit-box-sizing: content-box;
      -moz-box-sizing: content-box;
      box-sizing: content-box
   }

   input[type="search"]::-webkit-search-cancel-button,
   input[type="search"]::-webkit-search-decoration {}

   .fieldset {
      border: 1px solid #c0c0c0;
      margin: 0 2px;
      padding: .35em .625em .75em
   }

   legend {
      border: 0;
      padding: 0
   }

   textarea {
      overflow: auto
   }

   optgroup {
      font-weight: bold
   }

   table {
      border-collapse: collapse;
      border-spacing: 0
   }

   td,
   th {
      padding: 0
   }

   @media print {

      *,
      *:before,
      *:after {
         background: transparent !important;
         color: #000 !important;
         -webkit-box-shadow: none !important;
         box-shadow: none !important;
         text-shadow: none !important
      }

      a,
      a:visited {
         text-decoration: underline
      }

      a[href]:after {
         content: " ("attr(href) ")"
      }

      abbr[title]:after {
         content: " ("attr(title) ")"
      }

      a[href^="#"]:after,
      a[href^="javascript:"]:after {
         content: ""
      }

      pre,
      blockquote {
         border: 1px solid #999;
         page-break-inside: avoid
      }

      thead {
         display: table-header-group
      }

      tr,
      img {
         page-break-inside: avoid
      }

      img {
         max-width: 100% !important
      }

      p,
      h2,
      h3 {
         orphans: 3;
         widows: 3
      }

      h2,
      h3 {
         page-break-after: avoid
      }

      .navbar {
         display: none
      }

      .btn>.caret,
      .dropup>.btn>.caret {
         border-top-color: #000 !important
      }

      .label {
         border: 1px solid #000
      }

      .table {
         border-collapse: collapse !important
      }

      .table td,
      .table th {
         background-color: #fff !important
      }

      .table-bordered th,
      .table-bordered td {
         border: 1px solid #ddd !important
      }
   }

   @font-face {
      src: url(../../fonts/glyphicons-halflings-regulard41d.eot?);
      src: url('../../fonts/glyphicons-halflings-regulard41d.eot?#iefix') format('embedded-opentype'), url(../../fonts/glyphicons-halflings-regular.woff2) format('woff2'), url(../../fonts/glyphicons-halflings-regular.woff) format('woff'), url(../../fonts/glyphicons-halflings-regular.ttf) format('truetype'), url('../../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg')
   }

   .glyphicon {
      position: relative;
      top: 1px;
      display: inline-block;
      font-style: normal;
      font-weight: normal;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
   }

   .glyphicon-asterisk:before {
      content: "*"
   }

   .glyphicon-plus:before {
      content: "+"
   }

   .glyphicon-euro:before,
   .glyphicon-eur:before {
      content: "€"
   }

   .glyphicon-minus:before {
      content: "-"
   }

   .glyphicon-cloud:before {
      content: "?"
   }

   .glyphicon-envelope:before {
      content: "?"
   }

   .glyphicon-pencil:before {
      content: "?"
   }

   .glyphicon-glass:before {
      content: "?"
   }

   .glyphicon-music:before {
      content: "?"
   }

   .glyphicon-search:before {
      content: "?"
   }

   .glyphicon-heart:before {
      content: "?"
   }

   .-empty:before {
      content: "?"
   }

   .glyphicon-user:before {
      content: "?"
   }

   .glyphicon-film:before {
      content: "?"
   }

   .glyphicon-th-large:before {
      content: "?"
   }

   .glyphicon-th:before {
      content: "?"
   }

   .glyphicon-th-list:before {
      content: "?"
   }

   .glyphicon-ok:before {
      content: "?"
   }

   .glyphicon-remove:before {
      content: "?"
   }

   .glyphicon-zoom-in:before {
      content: "?"
   }

   .glyphicon-zoom-out:before {
      content: "?"
   }

   .glyphicon-off:before {
      content: "?"
   }

   .glyphicon-signal:before {
      content: "?"
   }

   .glyphicon-cog:before {
      content: "?"
   }

   .glyphicon-trash:before {
      content: "?"
   }

   .glyphicon-file:before {
      content: "?"
   }

   .glyphicon-time:before {
      content: "?"
   }

   .glyphicon-road:before {
      content: "?"
   }

   .glyphicon-download-alt:before {
      content: "?"
   }

   .glyphicon-download:before {
      content: "?"
   }

   .glyphicon-upload:before {
      content: "?"
   }

   .glyphicon-inbox:before {
      content: "?"
   }

   .glyphicon-play-circle:before {
      content: "?"
   }

   .glyphicon-repeat:before {
      content: "?"
   }

   .glyphicon-refresh:before {
      content: "?"
   }

   .glyphicon-list-alt:before {
      content: "?"
   }

   .glyphicon-lock:before {
      content: "?"
   }

   .glyphicon-flag:before {
      content: "?"
   }

   .glyphicon-headphones:before {
      content: "?"
   }

   .glyphicon-volume-off:before {
      content: "?"
   }

   .glyphicon-volume-down:before {
      content: "?"
   }

   .glyphicon-volume-up:before {
      content: "?"
   }

   .glyphicon-qrcode:before {
      content: "?"
   }

   .glyphicon-barcode:before {
      content: "?"
   }

   .glyphicon-tag:before {
      content: "?"
   }

   .glyphicon-tags:before {
      content: "?"
   }

   .glyphicon-book:before {
      content: "?"
   }

   .glyphicon-bookmark:before {
      content: "?"
   }

   .glyphicon-print:before {
      content: "?"
   }

   .glyphicon-camera:before {
      content: "?"
   }

   .glyphicon-font:before {
      content: "?"
   }

   .glyphicon-bold:before {
      content: "?"
   }

   .glyphicon-italic:before {
      content: "?"
   }

   .glyphicon-text-height:before {
      content: "?"
   }

   .glyphicon-text-width:before {
      content: "?"
   }

   .glyphicon-align-left:before {
      content: "?"
   }

   .glyphicon-align-center:before {
      content: "?"
   }

   .glyphicon-align-right:before {
      content: "?"
   }

   .glyphicon-align-justify:before {
      content: "?"
   }

   .glyphicon-list:before {
      content: "?"
   }

   .glyphicon-indent-left:before {
      content: "?"
   }

   .glyphicon-indent-right:before {
      content: "?"
   }

   .glyphicon-facetime-video:before {
      content: "?"
   }

   .glyphicon-picture:before {
      content: "?"
   }

   .glyphicon-map-marker:before {
      content: "?"
   }

   .glyphicon-adjust:before {
      content: "?"
   }

   .glyphicon-tint:before {
      content: "?"
   }

   .glyphicon-edit:before {
      content: "?"
   }

   .glyphicon-share:before {
      content: "?"
   }

   .glyphicon-check:before {
      content: "?"
   }

   .glyphicon-move:before {
      content: "?"
   }

   .glyphicon-step-backward:before {
      content: "?"
   }

   .glyphicon-fast-backward:before {
      content: "?"
   }

   .glyphicon-backward:before {
      content: "?"
   }

   .glyphicon-play:before {
      content: "?"
   }

   .glyphicon-pause:before {
      content: "?"
   }

   .glyphicon-stop:before {
      content: "?"
   }

   .glyphicon-forward:before {
      content: "?"
   }

   .glyphicon-fast-forward:before {
      content: "?"
   }

   .glyphicon-step-forward:before {
      content: "?"
   }

   .glyphicon-eject:before {
      content: "?"
   }

   .glyphicon-chevron-left:before {
      content: "?"
   }

   .glyphicon-chevron-right:before {
      content: "?"
   }

   .glyphicon-plus-sign:before {
      content: "?"
   }

   .glyphicon-minus-sign:before {
      content: "?"
   }

   .glyphicon-remove-sign:before {
      content: "?"
   }

   .glyphicon-ok-sign:before {
      content: "?"
   }

   .glyphicon-question-sign:before {
      content: "?"
   }

   .glyphicon-info-sign:before {
      content: "?"
   }

   .glyphicon-screenshot:before {
      content: "?"
   }

   .glyphicon-remove-circle:before {
      content: "?"
   }

   .glyphicon-ok-circle:before {
      content: "?"
   }

   .glyphicon-ban-circle:before {
      content: "?"
   }

   .glyphicon-arrow-left:before {
      content: "?"
   }

   .glyphicon-arrow-right:before {
      content: "?"
   }

   .glyphicon-arrow-up:before {
      content: "?"
   }

   .glyphicon-arrow-down:before {
      content: "?"
   }

   .glyphicon-share-alt:before {
      content: "?"
   }

   .glyphicon-resize-full:before {
      content: "?"
   }

   .glyphicon-resize-small:before {
      content: "?"
   }

   .glyphicon-exclamation-sign:before {
      content: "?"
   }

   .glyphicon-gift:before {
      content: "?"
   }

   .glyphicon-leaf:before {
      content: "?"
   }

   .glyphicon-fire:before {
      content: "?"
   }

   .glyphicon-eye-open:before {
      content: "?"
   }

   .glyphicon-eye-close:before {
      content: "?"
   }

   .glyphicon-warning-sign:before {
      content: "?"
   }

   .glyphicon-plane:before {
      content: "?"
   }

   .glyphicon-calendar:before {
      content: "?"
   }

   .glyphicon-random:before {
      content: "?"
   }

   .glyphicon-comment:before {
      content: "?"
   }

   .glyphicon-magnet:before {
      content: "?"
   }

   .glyphicon-chevron-up:before {
      content: "?"
   }

   .glyphicon-chevron-down:before {
      content: "?"
   }

   .glyphicon-retweet:before {
      content: "?"
   }

   .glyphicon-shopping-cart:before {
      content: "?"
   }

   .glyphicon-folder-close:before {
      content: "?"
   }

   .glyphicon-folder-open:before {
      content: "?"
   }

   .glyphicon-resize-vertical:before {
      content: "?"
   }

   .glyphicon-resize-horizontal:before {
      content: "?"
   }

   .glyphicon-hdd:before {
      content: "?"
   }

   .glyphicon-bullhorn:before {
      content: "?"
   }

   .glyphicon-bell:before {
      content: "?"
   }

   .glyphicon-certificate:before {
      content: "?"
   }

   .glyphicon-thumbs-up:before {
      content: "?"
   }

   .glyphicon-thumbs-down:before {
      content: "?"
   }

   .glyphicon-hand-right:before {
      content: "?"
   }

   .glyphicon-hand-left:before {
      content: "?"
   }

   .glyphicon-hand-up:before {
      content: "?"
   }

   .glyphicon-hand-down:before {
      content: "?"
   }

   .glyphicon-circle-arrow-right:before {
      content: "?"
   }

   .glyphicon-circle-arrow-left:before {
      content: "?"
   }

   .glyphicon-circle-arrow-up:before {
      content: "?"
   }

   .glyphicon-circle-arrow-down:before {
      content: "?"
   }

   .glyphicon-globe:before {
      content: "?"
   }

   .glyphicon-wrench:before {
      content: "?"
   }

   .glyphicon-tasks:before {
      content: "?"
   }

   .glyphicon-filter:before {
      content: "?"
   }

   .glyphicon-briefcase:before {
      content: "?"
   }

   .glyphicon-fullscreen:before {
      content: "?"
   }

   .glyphicon-dashboard:before {
      content: "?"
   }

   .glyphicon-paperclip:before {
      content: "?"
   }

   .glyphicon-heart-empty:before {
      content: "?"
   }

   .glyphicon-link:before {
      content: "?"
   }

   .glyphicon-phone:before {
      content: "?"
   }

   .glyphicon-pushpin:before {
      content: "?"
   }

   .glyphicon-usd:before {
      content: "?"
   }

   .glyphicon-gbp:before {
      content: "?"
   }

   .glyphicon-sort:before {
      content: "?"
   }

   .glyphicon-sort-by-alphabet:before {
      content: "?"
   }

   .glyphicon-sort-by-alphabet-alt:before {
      content: "?"
   }

   .glyphicon-sort-by-order:before {
      content: "?"
   }

   .glyphicon-sort-by-order-alt:before {
      content: "?"
   }

   .glyphicon-sort-by-attributes:before {
      content: "?"
   }

   .glyphicon-sort-by-attributes-alt:before {
      content: "?"
   }

   .glyphicon-unchecked:before {
      content: "?"
   }

   .glyphicon-expand:before {
      content: "?"
   }

   .glyphicon-collapse-down:before {
      content: "?"
   }

   .glyphicon-collapse-up:before {
      content: "?"
   }

   .glyphicon-log-in:before {
      content: "?"
   }

   .glyphicon-flash:before {
      content: "?"
   }

   .glyphicon-log-out:before {
      content: "?"
   }

   .glyphicon-new-window:before {
      content: "?"
   }

   .glyphicon-record:before {
      content: "?"
   }

   .glyphicon-save:before {
      content: "?"
   }

   .glyphicon-open:before {
      content: "?"
   }

   .glyphicon-saved:before {
      content: "?"
   }

   .glyphicon-import:before {
      content: "?"
   }

   .glyphicon-export:before {
      content: "?"
   }

   .glyphicon-send:before {
      content: "?"
   }

   .glyphicon-floppy-disk:before {
      content: "?"
   }

   .glyphicon-floppy-saved:before {
      content: "?"
   }

   .glyphicon-floppy-remove:before {
      content: "?"
   }

   .glyphicon-floppy-save:before {
      content: "?"
   }

   .glyphicon-floppy-open:before {
      content: "?"
   }

   .glyphicon-credit-card:before {
      content: "?"
   }

   .glyphicon-transfer:before {
      content: "?"
   }

   .glyphicon-cutlery:before {
      content: "?"
   }

   .glyphicon-header:before {
      content: "?"
   }

   .glyphicon-compressed:before {
      content: "?"
   }

   .glyphicon-earphone:before {
      content: "?"
   }

   .glyphicon-phone-alt:before {
      content: "?"
   }

   .glyphicon-tower:before {
      content: "?"
   }

   .glyphicon-stats:before {
      content: "?"
   }

   .glyphicon-sd-video:before {
      content: "?"
   }

   .glyphicon-hd-video:before {
      content: "?"
   }

   .glyphicon-subtitles:before {
      content: "?"
   }

   .glyphicon-sound-stereo:before {
      content: "?"
   }

   .glyphicon-sound-dolby:before {
      content: "?"
   }

   .glyphicon-sound-5-1:before {
      content: "?"
   }

   .glyphicon-sound-6-1:before {
      content: "?"
   }

   .glyphicon-sound-7-1:before {
      content: "?"
   }

   .glyphicon-copyright-mark:before {
      content: "?"
   }

   .glyphicon-registration-mark:before {
      content: "?"
   }

   .glyphicon-cloud-download:before {
      content: "?"
   }

   .glyphicon-cloud-upload:before {
      content: "?"
   }

   .glyphicon-tree-conifer:before {
      content: "?"
   }

   .glyphicon-tree-deciduous:before {
      content: "?"
   }

   .glyphicon-cd:before {
      content: "?"
   }

   .glyphicon-save-file:before {
      content: "?"
   }

   .glyphicon-open-file:before {
      content: "?"
   }

   .glyphicon-level-up:before {
      content: "?"
   }

   .glyphicon-copy:before {
      content: "?"
   }

   .glyphicon-paste:before {
      content: "?"
   }

   .glyphicon-alert:before {
      content: "?"
   }

   .glyphicon-equalizer:before {
      content: "?"
   }

   .glyphicon-king:before {
      content: "?"
   }

   .glyphicon-queen:before {
      content: "?"
   }

   .glyphicon-pawn:before {
      content: "?"
   }

   .glyphicon-bishop:before {
      content: "?"
   }

   .glyphicon-knight:before {
      content: "?"
   }

   .glyphicon-baby-formula:before {
      content: "?"
   }

   .glyphicon-tent:before {
      content: "?"
   }

   .glyphicon-blackboard:before {
      content: "?"
   }

   .glyphicon-bed:before {
      content: "?"
   }

   .glyphicon-apple:before {
      content: "?"
   }

   .glyphicon-erase:before {
      content: "?"
   }

   .glyphicon-hourglass:before {
      content: "?"
   }

   .glyphicon-lamp:before {
      content: "?"
   }

   .glyphicon-duplicate:before {
      content: "?"
   }

   .glyphicon-piggy-bank:before {
      content: "?"
   }

   .glyphicon-scissors:before {
      content: "?"
   }

   .glyphicon-bitcoin:before {
      content: "?"
   }

   .glyphicon-btc:before {
      content: "?"
   }

   .glyphicon-xbt:before {
      content: "?"
   }

   .glyphicon-yen:before {
      content: "¥"
   }

   .glyphicon-jpy:before {
      content: "¥"
   }

   .glyphicon-ruble:before {
      content: "?"
   }

   .glyphicon-rub:before {
      content: "?"
   }

   .glyphicon-scale:before {
      content: "?"
   }

   .glyphicon-ice-lolly:before {
      content: "?"
   }

   .glyphicon-ice-lolly-tasted:before {
      content: "?"
   }

   .glyphicon-education:before {
      content: "?"
   }

   .glyphicon-option-horizontal:before {
      content: "?"
   }

   .glyphicon-option-vertical:before {
      content: "?"
   }

   .glyphicon-menu-hamburger:before {
      content: "?"
   }

   .glyphicon-modal-window:before {
      content: "?"
   }

   .glyphicon-oil:before {
      content: "?"
   }

   .glyphicon-grain:before {
      content: "?"
   }

   .glyphicon-sunglasses:before {
      content: "?"
   }

   .glyphicon-text-size:before {
      content: "?"
   }

   .glyphicon-text-color:before {
      content: "?"
   }

   .glyphicon-text-background:before {
      content: "?"
   }

   .glyphicon-object-align-top:before {
      content: "?"
   }

   .glyphicon-object-align-bottom:before {
      content: "?"
   }

   .glyphicon-object-align-horizontal:before {
      content: "?"
   }

   .glyphicon-object-align-left:before {
      content: "?"
   }

   .glyphicon-object-align-vertical:before {
      content: "?"
   }

   .glyphicon-object-align-right:before {
      content: "?"
   }

   .glyphicon-triangle-right:before {
      content: "?"
   }

   .glyphicon-triangle-left:before {
      content: "?"
   }

   .glyphicon-triangle-bottom:before {
      content: "?"
   }

   .glyphicon-triangle-top:before {
      content: "?"
   }

   .glyphicon-console:before {
      content: "?"
   }

   .glyphicon-superscript:before {
      content: "?"
   }

   .glyphicon-subscript:before {
      content: "?"
   }

   .glyphicon-menu-left:before {
      content: "?"
   }

   .glyphicon-menu-right:before {
      content: "?"
   }

   .glyphicon-menu-down:before {
      content: "?"
   }

   .glyphicon-menu-up:before {
      content: "?"
   }

   * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
   }

   *:before,
   *:after {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
   }

   html {
      font-size: 10px;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
   }

   body {
      font-size: 14px;
      line-height: 1.42857143;
      background-color: #fff
   }

   input,
   button,
   select,
   textarea {
      font-family: inherit;
      font-size: inherit;
      line-height: inherit
   }

   a {
      color: #333;
      text-decoration: none
   }

   a:hover,
   a:focus {
      color: #0d0d0d;
      text-decoration: underline
   }

   a:focus {
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px
   }

   figure {
      margin: 0
   }

   img {
      vertical-align: middle
   }

   .img-responsive,
   .thumbnail>img,
   .thumbnail a>img,
   .carousel-inner>.item>img,
   .carousel-inner>.item>a>img {
      display: block;
      max-width: 100%;
      height: auto
   }

   .img-rounded {
      border-radius: 6px
   }

   .img-thumbnail {
      padding: 4px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      -webkit-transition: all .2s ease-in-out;
      -o-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
      display: inline-block;
      max-width: 100%;
      height: auto
   }

   .img-circle {
      border-radius: 50%
   }

   hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border: 0;
      border-top: 1px solid #fff
   }

   .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      margin: -1px;
      padding: 0;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      border: 0
   }

   .sr-only-focusable:active,
   .sr-only-focusable:focus {
      position: static;
      width: auto;
      height: auto;
      margin: 0;
      overflow: visible;
      clip: auto
   }

   [role="button"] {
      cursor: pointer
   }

   h1,
   h2,
   h3,
   h4,
   h5,
   h6,
   .h1,
   .h2,
   .h3,
   .h4,
   .h5,
   .h6 {
      font-family: inherit;
      ;
      line-height: 1.1;
      color: #333
   }

   h1 small,
   h2 small,
   h3 small,
   h4 small,
   h5 small,
   h6 small,
   .h1 small,
   .h2 small,
   .h3 small,
   .h4 small,
   .h5 small,
   .h6 small,
   h1 .small,
   h2 .small,
   h3 .small,
   h4 .small,
   h5 .small,
   h6 .small,
   .h1 .small,
   .h2 .small,
   .h3 .small,
   .h4 .small,
   .h5 .small,
   .h6 .small {
      font-weight: normal;
      line-height: 1;
      color: #aaa
   }

   h1,
   .h1,
   h2,
   .h2,
   h3,
   .h3 {
      margin-top: 20px;
      margin-bottom: 10px
   }

   h1 small,
   .h1 small,
   h2 small,
   .h2 small,
   h3 small,
   .h3 small,
   h1 .small,
   .h1 .small,
   h2 .small,
   .h2 .small,
   h3 .small,
   .h3 .small {
      font-size: 65%
   }

   h4,
   .h4,
   h5,
   .h5,
   h6,
   .h6 {
      margin-top: 10px;
      margin-bottom: 10px
   }

   h4 small,
   .h4 small,
   h5 small,
   .h5 small,
   h6 small,
   .h6 small,
   h4 .small,
   .h4 .small,
   h5 .small,
   .h5 .small,
   h6 .small,
   .h6 .small {
      font-size: 75%
   }

   h1,
   .h1 {
      font-size: 36px
   }

   h2,
   .h2 {
      font-size: 30px
   }

   h3,
   .h3 {
      font-size: 24px
   }

   h4,
   .h4 {
      font-size: 18px
   }

   h5,
   .h5 {
      font-size: 14px
   }

   h6,
   .h6 {
      font-size: 12px
   }

   p {
      margin: 0 0 10px
   }

   .lead {
      margin-bottom: 20px;
      font-size: 16px;
      font-weight: 300;
      line-height: 1.4
   }

   @media(min-width:768px) {
      .lead {
         font-size: 21px
      }
   }

   small,
   .small {
      font-size: 85%
   }

   mark,
   .mark {
      background-color: #fcf8e3;
      padding: .2em
   }

   .text-left {
      text-align: left
   }

   .text-right {
      text-align: right
   }

   .text-center {
      text-align: center
   }

   .text-justify {
      text-align: justify
   }

   .text-nowrap {
      white-space: nowrap
   }

   .text-lowercase {
      text-transform: lowercase
   }

   .text-uppercase {
      text-transform: uppercase
   }

   .text-capitalize {
      text-transform: capitalize
   }

   .text-muted {
      color: #aaa
   }

   .text-primary {
      color: #337ab7
   }

   a.text-primary:hover,
   a.text-primary:focus {
      color: #286090
   }

   .text-success {
      color: #3c763d
   }

   a.text-success:hover,
   a.text-success:focus {
      color: #2b542c
   }

   .text-info {
      color: #31708f
   }

   a.text-info:hover,
   a.text-info:focus {
      color: #245269
   }

   .text-warning {
      color: #8a6d3b
   }

   a.text-warning:hover,
   a.text-warning:focus {
      color: #66512c
   }

   .text-danger {
      color: #a94442
   }

   a.text-danger:hover,
   a.text-danger:focus {
      color: #843534
   }

   .bg-primary {
      color: #fff;
      background-color: #337ab7
   }

   a.bg-primary:hover,
   a.bg-primary:focus {
      background-color: #286090
   }

   .bg-success {
      background-color: #dff0d8
   }

   a.bg-success:hover,
   a.bg-success:focus {
      background-color: #c1e2b3
   }

   .bg-info {
      background-color: #d9edf7
   }

   a.bg-info:hover,
   a.bg-info:focus {
      background-color: #afd9ee
   }

   .bg-warning {
      background-color: #fcf8e3
   }

   a.bg-warning:hover,
   a.bg-warning:focus {
      background-color: #f7ecb5
   }

   .bg-danger {
      background-color: #f2dede
   }

   a.bg-danger:hover,
   a.bg-danger:focus {
      background-color: #e4b9b9
   }

   .page-header {
      padding-bottom: 9px;
      margin: 40px 0 20px;
      border-bottom: 1px solid #fff
   }

   ul,
   ol {
      margin-top: 0;
      margin-bottom: 10px
   }

   ul ul,
   ol ul,
   ul ol,
   ol ol {
      margin-bottom: 0
   }

   .list-unstyled {
      padding-left: 0;
      list-style: none
   }

   .list-inline {
      padding-left: 0;
      list-style: none;
      margin-left: -5px
   }

   .list-inline>li {
      display: inline-block;
      padding-left: 5px;
      padding-right: 5px
   }

   dl {
      margin-top: 0;
      margin-bottom: 20px
   }

   dt,
   dd {
      line-height: 1.42857143
   }

   dt {
      font-weight: bold
   }

   dd {
      margin-left: 0
   }

   @media(min-width:768px) {
      .dl-horizontal dt {
         float: left;
         width: 160px;
         clear: left;
         text-align: right;
         overflow: hidden;
         text-overflow: ellipsis;
         white-space: nowrap
      }

      .dl-horizontal dd {
         margin-left: 180px
      }
   }

   abbr[title],
   abbr[data-original-title] {
      cursor: help;
      border-bottom: 1px dotted #aaa
   }

   .initialism {
      font-size: 90%;
      text-transform: uppercase
   }

   blockquote {
      padding: 10px 20px;
      margin: 0 0 20px;
      font-size: 17.5px;
      border-left: 5px solid #fff
   }

   blockquote p:last-child,
   blockquote ul:last-child,
   blockquote ol:last-child {
      margin-bottom: 0
   }

   blockquote footer,
   blockquote small,
   blockquote .small {
      display: block;
      font-size: 80%;
      line-height: 1.42857143;
      color: #aaa
   }

   blockquote footer:before,
   blockquote small:before,
   blockquote .small:before {
      content: '— '
   }

   .blockquote-reverse,
   blockquote.pull-right {
      padding-right: 15px;
      padding-left: 0;
      border-right: 5px solid #fff;
      border-left: 0;
      text-align: right
   }

   .blockquote-reverse footer:before,
   blockquote.pull-right footer:before,
   .blockquote-reverse small:before,
   blockquote.pull-right small:before,
   .blockquote-reverse .small:before,
   blockquote.pull-right .small:before {
      content: ''
   }

   .blockquote-reverse footer:after,
   blockquote.pull-right footer:after,
   .blockquote-reverse small:after,
   blockquote.pull-right small:after,
   .blockquote-reverse .small:after,
   blockquote.pull-right .small:after {
      content: ' —'
   }

   address {
      margin-bottom: 20px;
      font-style: normal;
      line-height: 1.42857143
   }

   code,
   kbd,
   pre,
   samp {
      font-family: Menlo, Monaco, Consolas, "Courier New", monospace
   }

   code {
      padding: 2px 4px;
      font-size: 90%;
      color: #c7254e;
      background-color: #f9f2f4;
      border-radius: 4px
   }

   kbd {
      padding: 2px 4px;
      font-size: 90%;
      color: #fff;
      background-color: #333;
      border-radius: 3px;
      -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
      box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
   }

   kbd kbd {
      padding: 0;
      font-size: 100%;
      font-weight: bold;
      -webkit-box-shadow: none;
      box-shadow: none
   }

   pre {
      display: block;
      padding: 9.5px;
      margin: 0 0 10px;
      font-size: 13px;
      line-height: 1.42857143;
      word-break: break-all;
      word-wrap: break-word;
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      border-radius: 4px
   }

   pre code {
      padding: 0;
      font-size: inherit;
      color: inherit;
      white-space: pre-wrap;
      background-color: transparent;
      border-radius: 0
   }

   .pre-scrollable {
      max-height: 340px;
      overflow-y: scroll
   }

   .container {
      margin-right: auto;
      margin-left: auto;
      padding-left: 15px;
      padding-right: 15px
   }

   @media(min-width:768px) {
      .container {
         width: 750px
      }
   }

   @media(min-width:992px) {
      .container {
         width: 970px
      }
   }

   @media(min-width:1200px) {
      .container {
         width: 1170px
      }
   }

   .container-fluid {
      margin-right: auto;
      margin-left: auto;
      padding-left: 15px;
      padding-right: 15px
   }

   .row {
      margin-left: -15px;
      margin-right: -15px
   }

   .col-xs-1,
   .col-sm-1,
   .col-md-1,
   .col-lg-1,
   .col-xs-2,
   .col-sm-2,
   .col-md-2,
   .col-lg-2,
   .col-xs-3,
   .col-sm-3,
   .col-md-3,
   .col-lg-3,
   .col-xs-4,
   .col-sm-4,
   .col-md-4,
   .col-lg-4,
   .col-xs-5,
   .col-sm-5,
   .col-md-5,
   .col-lg-5,
   .col-xs-6,
   .col-sm-6,
   .col-md-6,
   .col-lg-6,
   .col-xs-7,
   .col-sm-7,
   .col-md-7,
   .col-lg-7,
   .col-xs-8,
   .col-sm-8,
   .col-md-8,
   .col-lg-8,
   .col-xs-9,
   .col-sm-9,
   .col-md-9,
   .col-lg-9,
   .col-xs-10,
   .col-sm-10,
   .col-md-10,
   .col-lg-10,
   .col-xs-11,
   .col-sm-11,
   .col-md-11,
   .col-lg-11,
   .col-xs-12,
   .col-sm-12,
   .col-md-12,
   .col-lg-12 {
      position: relative;
      min-height: 1px;
      padding-left: 15px;
      padding-right: 15px
   }

   .col-xs-1,
   .col-xs-2,
   .col-xs-3,
   .col-xs-4,
   .col-xs-5,
   .col-xs-6,
   .col-xs-7,
   .col-xs-8,
   .col-xs-9,
   .col-xs-10,
   .col-xs-11,
   .col-xs-12 {
      float: left
   }

   .col-xs-12 {
      width: 100%
   }

   .col-xs-11 {
      width: 91.66666667%
   }

   .col-xs-10 {
      width: 83.33333333%
   }

   .col-xs-9 {
      width: 75%
   }

   .col-xs-8 {
      width: 66.66666667%
   }

   .col-xs-7 {
      width: 58.33333333%
   }

   .col-xs-6 {
      width: 50%
   }

   .col-xs-5 {
      width: 41.66666667%
   }

   .col-xs-4 {
      width: 33.33333333%
   }

   .col-xs-3 {
      width: 25%
   }

   .col-xs-2 {
      width: 16.66666667%
   }

   .col-xs-1 {
      width: 8.33333333%
   }

   .col-xs-pull-12 {
      right: 100%
   }

   .col-xs-pull-11 {
      right: 91.66666667%
   }

   .col-xs-pull-10 {
      right: 83.33333333%
   }

   .col-xs-pull-9 {
      right: 75%
   }

   .col-xs-pull-8 {
      right: 66.66666667%
   }

   .col-xs-pull-7 {
      right: 58.33333333%
   }

   .col-xs-pull-6 {
      right: 50%
   }

   .col-xs-pull-5 {
      right: 41.66666667%
   }

   .col-xs-pull-4 {
      right: 33.33333333%
   }

   .col-xs-pull-3 {
      right: 25%
   }

   .col-xs-pull-2 {
      right: 16.66666667%
   }

   .col-xs-pull-1 {
      right: 8.33333333%
   }

   .col-xs-pull-0 {
      right: auto
   }

   .col-xs-push-12 {
      left: 100%
   }

   .col-xs-push-11 {
      left: 91.66666667%
   }

   .col-xs-push-10 {
      left: 83.33333333%
   }

   .col-xs-push-9 {
      left: 75%
   }

   .col-xs-push-8 {
      left: 66.66666667%
   }

   .col-xs-push-7 {
      left: 58.33333333%
   }

   .col-xs-push-6 {
      left: 50%
   }

   .col-xs-push-5 {
      left: 41.66666667%
   }

   .col-xs-push-4 {
      left: 33.33333333%
   }

   .col-xs-push-3 {
      left: 25%
   }

   .col-xs-push-2 {
      left: 16.66666667%
   }

   .col-xs-push-1 {
      left: 8.33333333%
   }

   .col-xs-push-0 {
      left: auto
   }

   .col-xs-offset-12 {
      margin-left: 100%
   }

   .col-xs-offset-11 {
      margin-left: 91.66666667%
   }

   .col-xs-offset-10 {
      margin-left: 83.33333333%
   }

   .col-xs-offset-9 {
      margin-left: 75%
   }

   .col-xs-offset-8 {
      margin-left: 66.66666667%
   }

   .col-xs-offset-7 {
      margin-left: 58.33333333%
   }

   .col-xs-offset-6 {
      margin-left: 50%
   }

   .col-xs-offset-5 {
      margin-left: 41.66666667%
   }

   .col-xs-offset-4 {
      margin-left: 33.33333333%
   }

   .col-xs-offset-3 {
      margin-left: 25%
   }

   .col-xs-offset-2 {
      margin-left: 16.66666667%
   }

   .col-xs-offset-1 {
      margin-left: 8.33333333%
   }

   .col-xs-offset-0 {
      margin-left: 0%
   }

   @media(min-width:768px) {

      .col-sm-1,
      .col-sm-2,
      .col-sm-3,
      .col-sm-4,
      .col-sm-5,
      .col-sm-6,
      .col-sm-7,
      .col-sm-8,
      .col-sm-9,
      .col-sm-10,
      .col-sm-11,
      .col-sm-12 {
         float: left
      }

      .col-sm-12 {
         width: 100%
      }

      .col-sm-11 {
         width: 91.66666667%
      }

      .col-sm-10 {
         width: 83.33333333%
      }

      .col-sm-9 {
         width: 75%
      }

      .col-sm-8 {
         width: 66.66666667%
      }

      .col-sm-7 {
         width: 58.33333333%
      }

      .col-sm-6 {
         width: 50%
      }

      .col-sm-5 {
         width: 41.66666667%
      }

      .col-sm-4 {
         width: 33.33333333%
      }

      .col-sm-3 {
         width: 25%
      }

      .col-sm-2 {
         width: 16.66666667%
      }

      .col-sm-1 {
         width: 8.33333333%
      }

      .col-sm-pull-12 {
         right: 100%
      }

      .col-sm-pull-11 {
         right: 91.66666667%
      }

      .col-sm-pull-10 {
         right: 83.33333333%
      }

      .col-sm-pull-9 {
         right: 75%
      }

      .col-sm-pull-8 {
         right: 66.66666667%
      }

      .col-sm-pull-7 {
         right: 58.33333333%
      }

      .col-sm-pull-6 {
         right: 50%
      }

      .col-sm-pull-5 {
         right: 41.66666667%
      }

      .col-sm-pull-4 {
         right: 33.33333333%
      }

      .col-sm-pull-3 {
         right: 25%
      }

      .col-sm-pull-2 {
         right: 16.66666667%
      }

      .col-sm-pull-1 {
         right: 8.33333333%
      }

      .col-sm-pull-0 {
         right: auto
      }

      .col-sm-push-12 {
         left: 100%
      }

      .col-sm-push-11 {
         left: 91.66666667%
      }

      .col-sm-push-10 {
         left: 83.33333333%
      }

      .col-sm-push-9 {
         left: 75%
      }

      .col-sm-push-8 {
         left: 66.66666667%
      }

      .col-sm-push-7 {
         left: 58.33333333%
      }

      .col-sm-push-6 {
         left: 50%
      }

      .col-sm-push-5 {
         left: 41.66666667%
      }

      .col-sm-push-4 {
         left: 33.33333333%
      }

      .col-sm-push-3 {
         left: 25%
      }

      .col-sm-push-2 {
         left: 16.66666667%
      }

      .col-sm-push-1 {
         left: 8.33333333%
      }

      .col-sm-push-0 {
         left: auto
      }

      .col-sm-offset-12 {
         margin-left: 100%
      }

      .col-sm-offset-11 {
         margin-left: 91.66666667%
      }

      .col-sm-offset-10 {
         margin-left: 83.33333333%
      }

      .col-sm-offset-9 {
         margin-left: 75%
      }

      .col-sm-offset-8 {
         margin-left: 66.66666667%
      }

      .col-sm-offset-7 {
         margin-left: 58.33333333%
      }

      .col-sm-offset-6 {
         margin-left: 50%
      }

      .col-sm-offset-5 {
         margin-left: 41.66666667%
      }

      .col-sm-offset-4 {
         margin-left: 33.33333333%
      }

      .col-sm-offset-3 {
         margin-left: 25%
      }

      .col-sm-offset-2 {
         margin-left: 16.66666667%
      }

      .col-sm-offset-1 {
         margin-left: 8.33333333%
      }

      .col-sm-offset-0 {
         margin-left: 0%
      }
   }

   @media(min-width:992px) {

      .col-md-1,
      .col-md-2,
      .col-md-3,
      .col-md-4,
      .col-md-5,
      .col-md-6,
      .col-md-7,
      .col-md-8,
      .col-md-9,
      .col-md-10,
      .col-md-11,
      .col-md-12 {
         float: left
      }

      .col-md-12 {
         width: 100%
      }

      .col-md-11 {
         width: 91.66666667%
      }

      .col-md-10 {
         width: 83.33333333%
      }

      .col-md-9 {
         width: 75%
      }

      .col-md-8 {
         width: 66.66666667%
      }

      .col-md-7 {
         width: 58.33333333%
      }

      .col-md-6 {
         width: 50%
      }

      .col-md-5 {
         width: 41.66666667%
      }

      .col-md-4 {
         width: 33.33333333%
      }

      .col-md-3 {
         width: 25%
      }

      .col-md-2 {
         width: 16.66666667%
      }

      .col-md-1 {
         width: 8.33333333%
      }

      .col-md-pull-12 {
         right: 100%
      }

      .col-md-pull-11 {
         right: 91.66666667%
      }

      .col-md-pull-10 {
         right: 83.33333333%
      }

      .col-md-pull-9 {
         right: 75%
      }

      .col-md-pull-8 {
         right: 66.66666667%
      }

      .col-md-pull-7 {
         right: 58.33333333%
      }

      .col-md-pull-6 {
         right: 50%
      }

      .col-md-pull-5 {
         right: 41.66666667%
      }

      .col-md-pull-4 {
         right: 33.33333333%
      }

      .col-md-pull-3 {
         right: 25%
      }

      .col-md-pull-2 {
         right: 16.66666667%
      }

      .col-md-pull-1 {
         right: 8.33333333%
      }

      .col-md-pull-0 {
         right: auto
      }

      .col-md-push-12 {
         left: 100%
      }

      .col-md-push-11 {
         left: 91.66666667%
      }

      .col-md-push-10 {
         left: 83.33333333%
      }

      .col-md-push-9 {
         left: 75%
      }

      .col-md-push-8 {
         left: 66.66666667%
      }

      .col-md-push-7 {
         left: 58.33333333%
      }

      .col-md-push-6 {
         left: 50%
      }

      .col-md-push-5 {
         left: 41.66666667%
      }

      .col-md-push-4 {
         left: 33.33333333%
      }

      .col-md-push-3 {
         left: 25%
      }

      .col-md-push-2 {
         left: 16.66666667%
      }

      .col-md-push-1 {
         left: 8.33333333%
      }

      .col-md-push-0 {
         left: auto
      }

      .col-md-offset-12 {
         margin-left: 100%
      }

      .col-md-offset-11 {
         margin-left: 91.66666667%
      }

      .col-md-offset-10 {
         margin-left: 83.33333333%
      }

      .col-md-offset-9 {
         margin-left: 75%
      }

      .col-md-offset-8 {
         margin-left: 66.66666667%
      }

      .col-md-offset-7 {
         margin-left: 58.33333333%
      }

      .col-md-offset-6 {
         margin-left: 50%
      }

      .col-md-offset-5 {
         margin-left: 41.66666667%
      }

      .col-md-offset-4 {
         margin-left: 33.33333333%
      }

      .col-md-offset-3 {
         margin-left: 25%
      }

      .col-md-offset-2 {
         margin-left: 16.66666667%
      }

      .col-md-offset-1 {
         margin-left: 8.33333333%
      }

      .col-md-offset-0 {
         margin-left: 0%
      }
   }

   @media(min-width:1200px) {

      .col-lg-1,
      .col-lg-2,
      .col-lg-3,
      .col-lg-4,
      .col-lg-5,
      .col-lg-6,
      .col-lg-7,
      .col-lg-8,
      .col-lg-9,
      .col-lg-10,
      .col-lg-11,
      .col-lg-12 {
         float: left
      }

      .col-lg-12 {
         width: 100%
      }

      .col-lg-11 {
         width: 91.66666667%
      }

      .col-lg-10 {
         width: 83.33333333%
      }

      .col-lg-9 {
         width: 75%
      }

      .col-lg-8 {
         width: 66.66666667%
      }

      .col-lg-7 {
         width: 58.33333333%
      }

      .col-lg-6 {
         width: 50%
      }

      .col-lg-5 {
         width: 41.66666667%
      }

      .col-lg-4 {
         width: 33.33333333%
      }

      .col-lg-3 {
         width: 25%
      }

      .col-lg-2 {
         width: 16.66666667%
      }

      .col-lg-1 {
         width: 8.33333333%
      }

      .col-lg-pull-12 {
         right: 100%
      }

      .col-lg-pull-11 {
         right: 91.66666667%
      }

      .col-lg-pull-10 {
         right: 83.33333333%
      }

      .col-lg-pull-9 {
         right: 75%
      }

      .col-lg-pull-8 {
         right: 66.66666667%
      }

      .col-lg-pull-7 {
         right: 58.33333333%
      }

      .col-lg-pull-6 {
         right: 50%
      }

      .col-lg-pull-5 {
         right: 41.66666667%
      }

      .col-lg-pull-4 {
         right: 33.33333333%
      }

      .col-lg-pull-3 {
         right: 25%
      }

      .col-lg-pull-2 {
         right: 16.66666667%
      }

      .col-lg-pull-1 {
         right: 8.33333333%
      }

      .col-lg-pull-0 {
         right: auto
      }

      .col-lg-push-12 {
         left: 100%
      }

      .col-lg-push-11 {
         left: 91.66666667%
      }

      .col-lg-push-10 {
         left: 83.33333333%
      }

      .col-lg-push-9 {
         left: 75%
      }

      .col-lg-push-8 {
         left: 66.66666667%
      }

      .col-lg-push-7 {
         left: 58.33333333%
      }

      .col-lg-push-6 {
         left: 50%
      }

      .col-lg-push-5 {
         left: 41.66666667%
      }

      .col-lg-push-4 {
         left: 33.33333333%
      }

      .col-lg-push-3 {
         left: 25%
      }

      .col-lg-push-2 {
         left: 16.66666667%
      }

      .col-lg-push-1 {
         left: 8.33333333%
      }

      .col-lg-push-0 {
         left: auto
      }

      .col-lg-offset-12 {
         margin-left: 100%
      }

      .col-lg-offset-11 {
         margin-left: 91.66666667%
      }

      .col-lg-offset-10 {
         margin-left: 83.33333333%
      }

      .col-lg-offset-9 {
         margin-left: 75%
      }

      .col-lg-offset-8 {
         margin-left: 66.66666667%
      }

      .col-lg-offset-7 {
         margin-left: 58.33333333%
      }

      .col-lg-offset-6 {
         margin-left: 50%
      }

      .col-lg-offset-5 {
         margin-left: 41.66666667%
      }

      .col-lg-offset-4 {
         margin-left: 33.33333333%
      }

      .col-lg-offset-3 {
         margin-left: 25%
      }

      .col-lg-offset-2 {
         margin-left: 16.66666667%
      }

      .col-lg-offset-1 {
         margin-left: 8.33333333%
      }

      .col-lg-offset-0 {
         margin-left: 0%
      }
   }

   table {
      background-color: transparent
   }

   caption {
      padding-top: 8px;
      padding-bottom: 8px;
      color: #aaa;
      text-align: left
   }

   th {
      text-align: left
   }

   .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px
   }

   .table>thead>tr>th,
   .table>tbody>tr>th,
   .table>tfoot>tr>th,
   .table>thead>tr>td,
   .table>tbody>tr>td,
   .table>tfoot>tr>td {
      padding: 8px;
      line-height: 1.42857143;
      vertical-align: top;
      border-top: 1px solid #ddd
   }

   .table>thead>tr>th {
      vertical-align: bottom;
      border-bottom: 2px solid #ddd
   }

   .table>caption+thead>tr:first-child>th,
   .table>colgroup+thead>tr:first-child>th,
   .table>thead:first-child>tr:first-child>th,
   .table>caption+thead>tr:first-child>td,
   .table>colgroup+thead>tr:first-child>td,
   .table>thead:first-child>tr:first-child>td {
      border-top: 0
   }

   .table>tbody+tbody {
      border-top: 2px solid #ddd
   }

   .table .table {
      background-color: #f5f5f5
   }

   .table-condensed>thead>tr>th,
   .table-condensed>tbody>tr>th,
   .table-condensed>tfoot>tr>th,
   .table-condensed>thead>tr>td,
   .table-condensed>tbody>tr>td,
   .table-condensed>tfoot>tr>td {
      padding: 5px
   }

   .table-bordered {
      border: 1px solid #ddd
   }

   .table-bordered>thead>tr>th,
   .table-bordered>tbody>tr>th,
   .table-bordered>tfoot>tr>th,
   .table-bordered>thead>tr>td,
   .table-bordered>tbody>tr>td,
   .table-bordered>tfoot>tr>td {
      border: 1px solid #ddd
   }

   .table-bordered>thead>tr>th,
   .table-bordered>thead>tr>td {
      border-bottom-width: 2px
   }

   .table-striped>tbody>tr:nth-of-type(odd) {
      background-color: #f9f9f9
   }

   .table-hover>tbody>tr:hover {
      background-color: #f5f5f5
   }

   table col[class*="col-"] {
      position: static;
      float: none;
      display: table-column
   }

   table td[class*="col-"],
   table th[class*="col-"] {
      position: static;
      float: none;
      display: table-cell
   }

   .table>thead>tr>td.active,
   .table>tbody>tr>td.active,
   .table>tfoot>tr>td.active,
   .table>thead>tr>th.active,
   .table>tbody>tr>th.active,
   .table>tfoot>tr>th.active,
   .table>thead>tr.active>td,
   .table>tbody>tr.active>td,
   .table>tfoot>tr.active>td,
   .table>thead>tr.active>th,
   .table>tbody>tr.active>th,
   .table>tfoot>tr.active>th {
      background-color: #f5f5f5
   }

   .table-hover>tbody>tr>td.active:hover,
   .table-hover>tbody>tr>th.active:hover,
   .table-hover>tbody>tr.active:hover>td,
   .table-hover>tbody>tr:hover>.active,
   .table-hover>tbody>tr.active:hover>th {
      background-color: #e8e8e8
   }

   .table>thead>tr>td.success,
   .table>tbody>tr>td.success,
   .table>tfoot>tr>td.success,
   .table>thead>tr>th.success,
   .table>tbody>tr>th.success,
   .table>tfoot>tr>th.success,
   .table>thead>tr.success>td,
   .table>tbody>tr.success>td,
   .table>tfoot>tr.success>td,
   .table>thead>tr.success>th,
   .table>tbody>tr.success>th,
   .table>tfoot>tr.success>th {
      background-color: #dff0d8
   }

   .table-hover>tbody>tr>td.success:hover,
   .table-hover>tbody>tr>th.success:hover,
   .table-hover>tbody>tr.success:hover>td,
   .table-hover>tbody>tr:hover>.success,
   .table-hover>tbody>tr.success:hover>th {
      background-color: #d0e9c6
   }

   .table>thead>tr>td.info,
   .table>tbody>tr>td.info,
   .table>tfoot>tr>td.info,
   .table>thead>tr>th.info,
   .table>tbody>tr>th.info,
   .table>tfoot>tr>th.info,
   .table>thead>tr.info>td,
   .table>tbody>tr.info>td,
   .table>tfoot>tr.info>td,
   .table>thead>tr.info>th,
   .table>tbody>tr.info>th,
   .table>tfoot>tr.info>th {
      background-color: #d9edf7
   }

   .table-hover>tbody>tr>td.info:hover,
   .table-hover>tbody>tr>th.info:hover,
   .table-hover>tbody>tr.info:hover>td,
   .table-hover>tbody>tr:hover>.info,
   .table-hover>tbody>tr.info:hover>th {
      background-color: #c4e3f3
   }

   .table>thead>tr>td.warning,
   .table>tbody>tr>td.warning,
   .table>tfoot>tr>td.warning,
   .table>thead>tr>th.warning,
   .table>tbody>tr>th.warning,
   .table>tfoot>tr>th.warning,
   .table>thead>tr.warning>td,
   .table>tbody>tr.warning>td,
   .table>tfoot>tr.warning>td,
   .table>thead>tr.warning>th,
   .table>tbody>tr.warning>th,
   .table>tfoot>tr.warning>th {
      background-color: #fcf8e3
   }

   .table-hover>tbody>tr>td.warning:hover,
   .table-hover>tbody>tr>th.warning:hover,
   .table-hover>tbody>tr.warning:hover>td,
   .table-hover>tbody>tr:hover>.warning,
   .table-hover>tbody>tr.warning:hover>th {
      background-color: #faf2cc
   }

   .table>thead>tr>td.danger,
   .table>tbody>tr>td.danger,
   .table>tfoot>tr>td.danger,
   .table>thead>tr>th.danger,
   .table>tbody>tr>th.danger,
   .table>tfoot>tr>th.danger,
   .table>thead>tr.danger>td,
   .table>tbody>tr.danger>td,
   .table>tfoot>tr.danger>td,
   .table>thead>tr.danger>th,
   .table>tbody>tr.danger>th,
   .table>tfoot>tr.danger>th {
      background-color: #f2dede
   }

   .table-hover>tbody>tr>td.danger:hover,
   .table-hover>tbody>tr>th.danger:hover,
   .table-hover>tbody>tr.danger:hover>td,
   .table-hover>tbody>tr:hover>.danger,
   .table-hover>tbody>tr.danger:hover>th {
      background-color: #ebcccc
   }

   .table-responsive {
      overflow-x: auto;
      min-height: .01%
   }

   @media screen and (max-width:767px) {
      .table-responsive {
         width: 100%;
         margin-bottom: 15px;
         overflow-y: hidden;
         -ms-overflow-style: -ms-autohiding-scrollbar;
         border: 1px solid #ddd
      }

      .table-responsive>.table {
         margin-bottom: 0
      }

      .table-responsive>.table>thead>tr>th,
      .table-responsive>.table>tbody>tr>th,
      .table-responsive>.table>tfoot>tr>th,
      .table-responsive>.table>thead>tr>td,
      .table-responsive>.table>tbody>tr>td,
      .table-responsive>.table>tfoot>tr>td {
         white-space: nowrap
      }

      .table-responsive>.table-bordered {
         border: 0
      }

      .table-responsive>.table-bordered>thead>tr>th:first-child,
      .table-responsive>.table-bordered>tbody>tr>th:first-child,
      .table-responsive>.table-bordered>tfoot>tr>th:first-child,
      .table-responsive>.table-bordered>thead>tr>td:first-child,
      .table-responsive>.table-bordered>tbody>tr>td:first-child,
      .table-responsive>.table-bordered>tfoot>tr>td:first-child {
         border-left: 0
      }

      .table-responsive>.table-bordered>thead>tr>th:last-child,
      .table-responsive>.table-bordered>tbody>tr>th:last-child,
      .table-responsive>.table-bordered>tfoot>tr>th:last-child,
      .table-responsive>.table-bordered>thead>tr>td:last-child,
      .table-responsive>.table-bordered>tbody>tr>td:last-child,
      .table-responsive>.table-bordered>tfoot>tr>td:last-child {
         border-right: 0
      }

      .table-responsive>.table-bordered>tbody>tr:last-child>th,
      .table-responsive>.table-bordered>tfoot>tr:last-child>th,
      .table-responsive>.table-bordered>tbody>tr:last-child>td,
      .table-responsive>.table-bordered>tfoot>tr:last-child>td {
         border-bottom: 0
      }
   }

   fieldset {
      padding: 0;
      margin: 0;
      border: 0;
      min-width: 0
   }

   legend {
      display: block;
      width: 100%;
      padding: 0;
      margin-bottom: 20px;
      font-size: 21px;
      line-height: inherit;
      border: 0;
      border-bottom: 1px solid #e5e5e5
   }

   label {
      display: inline-block;
      max-width: 100%;
      margin-bottom: 5px;
      font-weight: bold
   }

   input[type="search"] {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box
   }

   input[type="radio"],
   input[type="checkbox"] {
      margin: 4px 0 0;
      margin-top: 1px \9;
      line-height: normal
   }

   input[type="file"] {
      display: block
   }

   input[type="range"] {
      display: block;
      width: 100%
   }

   select[multiple],
   select[size] {
      height: auto
   }

   input[type="file"]:focus,
   input[type="radio"]:focus,
   input[type="checkbox"]:focus {
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px
   }

   output {
      display: block;
      padding-top: 7px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #888
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
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
      -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
   }

   .form-control:focus {
      border-color: #66afe9;
      outline: 0;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
   }

   .form-control::-moz-placeholder {
      color: #999;
      opacity: 1
   }

   .form-control:-ms-input-placeholder {
      color: #999
   }

   .form-control::-webkit-input-placeholder {
      color: #999
   }

   .form-control::-ms-expand {
      border: 0;
      background-color: transparent
   }

   .form-control[disabled],
   .form-control[readonly],
   fieldset[disabled] .form-control {
      background-color: #fff;
      opacity: 1
   }

   .form-control[disabled],
   fieldset[disabled] .form-control {
      cursor: not-allowed
   }

   textarea.form-control {
      height: auto
   }

   @media screen and (-webkit-min-device-pixel-ratio:0) {

      input[type="date"].form-control,
      input[type="time"].form-control,
      input[type="datetime-local"].form-control,
      input[type="month"].form-control {
         line-height: 45px
      }

      input[type="date"].input-sm,
      input[type="time"].input-sm,
      input[type="datetime-local"].input-sm,
      input[type="month"].input-sm,
      .input-group-sm input[type="date"],
      .input-group-sm input[type="time"],
      .input-group-sm input[type="datetime-local"],
      .input-group-sm input[type="month"] {
         line-height: 30px
      }

      input[type="date"].input-lg,
      input[type="time"].input-lg,
      input[type="datetime-local"].input-lg,
      input[type="month"].input-lg,
      .input-group-lg input[type="date"],
      .input-group-lg input[type="time"],
      .input-group-lg input[type="datetime-local"],
      .input-group-lg input[type="month"] {
         line-height: 46px
      }
   }

   .form-group {
      margin-bottom: 15px
   }

   .radio,
   .checkbox {
      position: relative;
      display: block;
      margin-top: 10px;
      margin-bottom: 10px
   }

   .radio label,
   .checkbox label {
      min-height: 20px;
      padding-left: 20px;
      margin-bottom: 0;
      font-weight: normal;
      cursor: pointer
   }

   .radio input[type="radio"],
   .radio-inline input[type="radio"],
   .checkbox input[type="checkbox"],
   .checkbox-inline input[type="checkbox"] {
      position: absolute;
      margin-left: -20px;
      margin-top: 4px \9
   }

   .radio+.radio,
   .checkbox+.checkbox {
      margin-top: -5px
   }

   .radio-inline,
   .checkbox-inline {
      position: relative;
      display: inline-block;
      padding-left: 20px;
      margin-bottom: 0;
      vertical-align: middle;
      font-weight: normal;
      cursor: pointer
   }

   .radio-inline+.radio-inline,
   .checkbox-inline+.checkbox-inline {
      margin-top: 0;
      margin-left: 10px
   }

   input[type="radio"][disabled],
   input[type="checkbox"][disabled],
   input[type="radio"].disabled,
   input[type="checkbox"].disabled,
   fieldset[disabled] input[type="radio"],
   fieldset[disabled] input[type="checkbox"] {
      cursor: not-allowed
   }

   .radio-inline.disabled,
   .checkbox-inline.disabled,
   fieldset[disabled] .radio-inline,
   fieldset[disabled] .checkbox-inline {
      cursor: not-allowed
   }

   .radio.disabled label,
   .checkbox.disabled label,
   fieldset[disabled] .radio label,
   fieldset[disabled] .checkbox label {
      cursor: not-allowed
   }

   .form-control-static {
      padding-top: 7px;
      padding-bottom: 7px;
      margin-bottom: 0;
      min-height: 34px
   }

   .form-control-static.input-lg,
   .form-control-static.input-sm {
      padding-left: 0;
      padding-right: 0
   }

   .input-sm {
      height: 30px;
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
   }

   select.input-sm {
      height: 30px;
      line-height: 30px
   }

   textarea.input-sm,
   select[multiple].input-sm {
      height: auto
   }

   .form-group-sm .form-control {
      height: 30px;
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
   }

   .form-group-sm select.form-control {
      height: 30px;
      line-height: 30px
   }

   .form-group-sm textarea.form-control,
   .form-group-sm select[multiple].form-control {
      height: auto
   }

   .form-group-sm .form-control-static {
      height: 30px;
      min-height: 32px;
      padding: 6px 10px;
      font-size: 12px;
      line-height: 1.5
   }

   .input-lg {
      height: 46px;
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
   }

   select.input-lg {
      height: 46px;
      line-height: 46px
   }

   textarea.input-lg,
   select[multiple].input-lg {
      height: auto
   }

   .form-group-lg .form-control {
      height: 46px;
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
   }

   .form-group-lg select.form-control {
      height: 46px;
      line-height: 46px
   }

   .form-group-lg textarea.form-control,
   .form-group-lg select[multiple].form-control {
      height: auto
   }

   .form-group-lg .form-control-static {
      height: 46px;
      min-height: 38px;
      padding: 11px 16px;
      font-size: 18px;
      line-height: 1.3333333
   }

   .has-feedback {
      position: relative
   }

   .has-feedback .form-control {
      padding-right: 42.5px
   }

   .form-control-feedback {
      position: absolute;
      top: 0;
      right: 0;
      z-index: 2;
      display: block;
      width: 34px;
      height: 34px;
      line-height: 34px;
      text-align: center;
      pointer-events: none
   }

   .input-lg+.form-control-feedback,
   .input-group-lg+.form-control-feedback,
   .form-group-lg .form-control+.form-control-feedback {
      width: 46px;
      height: 46px;
      line-height: 46px
   }

   .input-sm+.form-control-feedback,
   .input-group-sm+.form-control-feedback,
   .form-group-sm .form-control+.form-control-feedback {
      width: 30px;
      height: 30px;
      line-height: 30px
   }

   .has-success .help-block,
   .has-success .control-label,
   .has-success .radio,
   .has-success .checkbox,
   .has-success .radio-inline,
   .has-success .checkbox-inline,
   .has-success.radio label,
   .has-success.checkbox label,
   .has-success.radio-inline label,
   .has-success.checkbox-inline label {
      color: #3c763d
   }

   .has-success .form-control {
      border-color: #3c763d;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
   }

   .has-success .form-control:focus {
      border-color: #2b542c;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
   }

   .has-success .input-group-addon {
      color: #3c763d;
      border-color: #3c763d;
      background-color: #dff0d8
   }

   .has-success .form-control-feedback {
      color: #3c763d
   }

   .has-warning .help-block,
   .has-warning .control-label,
   .has-warning .radio,
   .has-warning .checkbox,
   .has-warning .radio-inline,
   .has-warning .checkbox-inline,
   .has-warning.radio label,
   .has-warning.checkbox label,
   .has-warning.radio-inline label,
   .has-warning.checkbox-inline label {
      color: #8a6d3b
   }

   .has-warning .form-control {
      border-color: #8a6d3b;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
   }

   .has-warning .form-control:focus {
      border-color: #66512c;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
   }

   .has-warning .input-group-addon {
      color: #8a6d3b;
      border-color: #8a6d3b;
      background-color: #fcf8e3
   }

   .has-warning .form-control-feedback {
      color: #8a6d3b
   }

   .has-error .help-block,
   .has-error .control-label,
   .has-error .radio,
   .has-error .checkbox,
   .has-error .radio-inline,
   .has-error .checkbox-inline,
   .has-error.radio label,
   .has-error.checkbox label,
   .has-error.radio-inline label,
   .has-error.checkbox-inline label {
      color: #a94442
   }

   .has-error .form-control {
      border-color: #a94442;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
   }

   .has-error .form-control:focus {
      border-color: #843534;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
   }

   .has-error .input-group-addon {
      color: #a94442;
      border-color: #a94442;
      background-color: #f2dede
   }

   .has-error .form-control-feedback {
      color: #a94442
   }

   .has-feedback label~.form-control-feedback {
      top: 25px
   }

   .has-feedback label.sr-only~.form-control-feedback {
      top: 0
   }

   .help-block {
      display: block;
      margin-top: 5px;
      margin-bottom: 10px;
      color: #a6a6a6
   }

   @media(min-width:768px) {
      .form-inline .form-group {
         display: inline-block;
         margin-bottom: 0;
         vertical-align: middle
      }

      .form-inline .form-control {
         display: inline-block;
         width: auto;
         vertical-align: middle
      }

      .form-inline .form-control-static {
         display: inline-block
      }

      .form-inline .input-group {
         display: inline-table;
         vertical-align: middle
      }

      .form-inline .input-group .input-group-addon,
      .form-inline .input-group .input-group-btn,
      .form-inline .input-group .form-control {
         width: auto
      }

      .form-inline .input-group>.form-control {
         width: 100%
      }

      .form-inline .control-label {
         margin-bottom: 0;
         vertical-align: middle
      }

      .form-inline .radio,
      .form-inline .checkbox {
         display: inline-block;
         margin-top: 0;
         margin-bottom: 0;
         vertical-align: middle
      }

      .form-inline .radio label,
      .form-inline .checkbox label {
         padding-left: 0
      }

      .form-inline .radio input[type="radio"],
      .form-inline .checkbox input[type="checkbox"] {
         position: relative;
         margin-left: 0
      }

      .form-inline .has-feedback .form-control-feedback {
         top: 0
      }
   }

   .form-horizontal .radio,
   .form-horizontal .checkbox,
   .form-horizontal .radio-inline,
   .form-horizontal .checkbox-inline {
      margin-top: 0;
      margin-bottom: 0;
      padding-top: 7px
   }

   .form-horizontal .radio,
   .form-horizontal .checkbox {
      min-height: 27px
   }

   .form-horizontal .form-group {
      margin-left: -15px;
      margin-right: -15px
   }

   @media(min-width:768px) {
      .form-horizontal .control-label {
         text-align: right;
         margin-bottom: 0;
         padding-top: 7px
      }
   }

   .form-horizontal .has-feedback .form-control-feedback {
      right: 15px
   }

   @media(min-width:768px) {
      .form-horizontal .form-group-lg .control-label {
         padding-top: 11px;
         font-size: 18px
      }
   }

   @media(min-width:768px) {
      .form-horizontal .form-group-sm .control-label {
         padding-top: 6px;
         font-size: 12px
      }
   }

   .btn {
      display: inline-block;
      margin-bottom: 0;
      font-weight: normal;
      text-align: center;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      background-image: none;
      border: 1px solid transparent;
      white-space: nowrap;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      border-radius: 4px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
   }

   .btn:focus,
   .btn:active:focus,
   .btn.active:focus,
   .btn.focus,
   .btn:active.focus,
   .btn.active.focus {
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px
   }

   .btn:hover,
   .btn:focus,
   .btn.focus {
      color: #333;
      text-decoration: none
   }

   .btn:active,
   .btn.active {
      outline: 0;
      background-image: none;
      -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
      box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
   }

   .btn.disabled,
   .btn[disabled],
   fieldset[disabled] .btn {
      cursor: not-allowed;
      opacity: .65;
      filter: alpha(opacity=65);
      -webkit-box-shadow: none;
      box-shadow: none
   }

   a.btn.disabled,
   fieldset[disabled] a.btn {
      pointer-events: none
   }

   .btn-primary {
      color: #fff;
      background-color: #337ab7;
      border-color: #2e6da4
   }

   .btn-primary:focus,
   .btn-primary.focus {
      color: #fff;
      background-color: #286090;
      border-color: #122b40
   }

   .btn-primary:hover {
      color: #fff;
      background-color: #286090;
      border-color: #204d74
   }

   .btn-primary:active,
   .btn-primary.active,
   .open>.dropdown-toggle.btn-primary {
      color: #fff;
      background-color: #286090;
      border-color: #204d74
   }

   .btn-primary:active:hover,
   .btn-primary.active:hover,
   .open>.dropdown-toggle.btn-primary:hover,
   .btn-primary:active:focus,
   .btn-primary.active:focus,
   .open>.dropdown-toggle.btn-primary:focus,
   .btn-primary:active.focus,
   .btn-primary.active.focus,
   .open>.dropdown-toggle.btn-primary.focus {
      color: #fff;
      background-color: #204d74;
      border-color: #122b40
   }

   .btn-primary:active,
   .btn-primary.active,
   .open>.dropdown-toggle.btn-primary {
      background-image: none
   }

   .btn-primary.disabled:hover,
   .btn-primary[disabled]:hover,
   fieldset[disabled] .btn-primary:hover,
   .btn-primary.disabled:focus,
   .btn-primary[disabled]:focus,
   fieldset[disabled] .btn-primary:focus,
   .btn-primary.disabled.focus,
   .btn-primary[disabled].focus,
   fieldset[disabled] .btn-primary.focus {
      background-color: #337ab7;
      border-color: #2e6da4
   }

   .btn-primary .badge {
      color: #337ab7;
      background-color: #fff
   }

   .btn-success {
      color: #fff;
      background-color: #5cb85c;
      border-color: #4cae4c
   }

   .btn-success:focus,
   .btn-success.focus {
      color: #fff;
      background-color: #449d44;
      border-color: #255625
   }

   .btn-success:hover {
      color: #fff;
      background-color: #449d44;
      border-color: #398439
   }

   .btn-success:active,
   .btn-success.active,
   .open>.dropdown-toggle.btn-success {
      color: #fff;
      background-color: #449d44;
      border-color: #398439
   }

   .btn-success:active:hover,
   .btn-success.active:hover,
   .open>.dropdown-toggle.btn-success:hover,
   .btn-success:active:focus,
   .btn-success.active:focus,
   .open>.dropdown-toggle.btn-success:focus,
   .btn-success:active.focus,
   .btn-success.active.focus,
   .open>.dropdown-toggle.btn-success.focus {
      color: #fff;
      background-color: #398439;
      border-color: #255625
   }

   .btn-success:active,
   .btn-success.active,
   .open>.dropdown-toggle.btn-success {
      background-image: none
   }

   .btn-success.disabled:hover,
   .btn-success[disabled]:hover,
   fieldset[disabled] .btn-success:hover,
   .btn-success.disabled:focus,
   .btn-success[disabled]:focus,
   fieldset[disabled] .btn-success:focus,
   .btn-success.disabled.focus,
   .btn-success[disabled].focus,
   fieldset[disabled] .btn-success.focus {
      background-color: #5cb85c;
      border-color: #4cae4c
   }

   .btn-success .badge {
      color: #5cb85c;
      background-color: #fff
   }

   .btn-info {
      color: #fff;
      background-color: #5bc0de;
      border-color: #46b8da
   }

   .btn-info:focus,
   .btn-info.focus {
      color: #fff;
      background-color: #31b0d5;
      border-color: #1b6d85
   }

   .btn-info:hover {
      color: #fff;
      background-color: #31b0d5;
      border-color: #269abc
   }

   .btn-info:active,
   .btn-info.active,
   .open>.dropdown-toggle.btn-info {
      color: #fff;
      background-color: #31b0d5;
      border-color: #269abc
   }

   .btn-info:active:hover,
   .btn-info.active:hover,
   .open>.dropdown-toggle.btn-info:hover,
   .btn-info:active:focus,
   .btn-info.active:focus,
   .open>.dropdown-toggle.btn-info:focus,
   .btn-info:active.focus,
   .btn-info.active.focus,
   .open>.dropdown-toggle.btn-info.focus {
      color: #fff;
      background-color: #269abc;
      border-color: #1b6d85
   }

   .btn-info:active,
   .btn-info.active,
   .open>.dropdown-toggle.btn-info {
      background-image: none
   }

   .btn-info.disabled:hover,
   .btn-info[disabled]:hover,
   fieldset[disabled] .btn-info:hover,
   .btn-info.disabled:focus,
   .btn-info[disabled]:focus,
   fieldset[disabled] .btn-info:focus,
   .btn-info.disabled.focus,
   .btn-info[disabled].focus,
   fieldset[disabled] .btn-info.focus {
      background-color: #5bc0de;
      border-color: #46b8da
   }

   .btn-info .badge {
      color: #5bc0de;
      background-color: #fff
   }

   .btn-warning {
      color: #333;
      background-color: #fc0;
      border-color: #e6b800
   }

   .btn-warning:focus,
   .btn-warning.focus {
      color: #333;
      background-color: #cca300;
      border-color: #665200
   }

   .btn-warning:hover {
      color: #333;
      background-color: #cca300;
      border-color: #a88700
   }

   .btn-warning:active,
   .btn-warning.active,
   .open>.dropdown-toggle.btn-warning {
      color: #333;
      background-color: #cca300;
      border-color: #a88700
   }

   .btn-warning:active:hover,
   .btn-warning.active:hover,
   .open>.dropdown-toggle.btn-warning:hover,
   .btn-warning:active:focus,
   .btn-warning.active:focus,
   .open>.dropdown-toggle.btn-warning:focus,
   .btn-warning:active.focus,
   .btn-warning.active.focus,
   .open>.dropdown-toggle.btn-warning.focus {
      color: #333;
      background-color: #a88700;
      border-color: #665200
   }

   .btn-warning:active,
   .btn-warning.active,
   .open>.dropdown-toggle.btn-warning {
      background-image: none
   }

   .btn-warning.disabled:hover,
   .btn-warning[disabled]:hover,
   fieldset[disabled] .btn-warning:hover,
   .btn-warning.disabled:focus,
   .btn-warning[disabled]:focus,
   fieldset[disabled] .btn-warning:focus,
   .btn-warning.disabled.focus,
   .btn-warning[disabled].focus,
   fieldset[disabled] .btn-warning.focus {
      background-color: #fc0;
      border-color: #e6b800
   }

   .btn-warning .badge {
      color: #fc0;
      background-color: #333
   }

   .btn-danger {
      color: #333;
      background-color: #d9534f;
      border-color: #d43f3a
   }

   .btn-danger:focus,
   .btn-danger.focus {
      color: #333;
      background-color: #c9302c;
      border-color: #761c19
   }

   .btn-danger:hover {
      color: #333;
      background-color: #c9302c;
      border-color: #ac2925
   }

   .btn-danger:active,
   .btn-danger.active,
   .open>.dropdown-toggle.btn-danger {
      color: #333;
      background-color: #c9302c;
      border-color: #ac2925
   }

   .btn-danger:active:hover,
   .btn-danger.active:hover,
   .open>.dropdown-toggle.btn-danger:hover,
   .btn-danger:active:focus,
   .btn-danger.active:focus,
   .open>.dropdown-toggle.btn-danger:focus,
   .btn-danger:active.focus,
   .btn-danger.active.focus,
   .open>.dropdown-toggle.btn-danger.focus {
      color: #333;
      background-color: #ac2925;
      border-color: #761c19
   }

   .btn-danger:active,
   .btn-danger.active,
   .open>.dropdown-toggle.btn-danger {
      background-image: none
   }

   .btn-danger.disabled:hover,
   .btn-danger[disabled]:hover,
   fieldset[disabled] .btn-danger:hover,
   .btn-danger.disabled:focus,
   .btn-danger[disabled]:focus,
   fieldset[disabled] .btn-danger:focus,
   .btn-danger.disabled.focus,
   .btn-danger[disabled].focus,
   fieldset[disabled] .btn-danger.focus {
      background-color: #d9534f;
      border-color: #d43f3a
   }

   .btn-danger .badge {
      color: #d9534f;
      background-color: #333
   }

   .btn-link {
      color: #333;
      font-weight: normal;
      border-radius: 0
   }

   .btn-link,
   .btn-link:active,
   .btn-link.active,
   .btn-link[disabled],
   fieldset[disabled] .btn-link {
      background-color: transparent;
      -webkit-box-shadow: none;
      box-shadow: none
   }

   .btn-link,
   .btn-link:hover,
   .btn-link:focus,
   .btn-link:active {
      border-color: transparent
   }

   .btn-link:hover,
   .btn-link:focus {
      color: #0d0d0d;
      text-decoration: underline;
      background-color: transparent
   }

   .btn-link[disabled]:hover,
   fieldset[disabled] .btn-link:hover,
   .btn-link[disabled]:focus,
   fieldset[disabled] .btn-link:focus {
      color: #aaa;
      text-decoration: none
   }

   .btn-lg,
   .btn-group-lg>.btn {
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
   }

   .btn-sm,
   .btn-group-sm>.btn {
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
   }

   .btn-xs,
   .btn-group-xs>.btn {
      padding: 1px 5px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
   }

   .btn-block {
      display: block;
      width: 100%
   }

   .btn-block+.btn-block {
      margin-top: 5px
   }

   input[type="submit"].btn-block,
   input[type="reset"].btn-block,
   input[type="button"].btn-block {
      width: 100%
   }

   .fade {
      opacity: 0;
      -webkit-transition: opacity .15s linear;
      -o-transition: opacity .15s linear;
      transition: opacity .15s linear
   }

   .fade.in {
      opacity: 1
   }

   .collapse {
      display: none
   }

   .collapse.in {
      display: block
   }

   tr.collapse.in {
      display: table-row
   }

   tbody.collapse.in {
      display: table-row-group
   }

   .collapsing {
      position: relative;
      height: 0;
      overflow: hidden;
      -webkit-transition-property: height, visibility;
      -o-transition-property: height, visibility;
      transition-property: height, visibility;
      -webkit-transition-duration: .35s;
      -o-transition-duration: .35s;
      transition-duration: .35s;
      -webkit-transition-timing-function: ease;
      -o-transition-timing-function: ease;
      transition-timing-function: ease
   }

   .caret {
      display: inline-block;
      width: 0;
      height: 0;
      margin-left: 2px;
      vertical-align: middle;
      border-top: 4px dashed;
      border-top: 4px solid \9;
      border-right: 4px solid transparent;
      border-left: 4px solid transparent
   }

   .dropup,
   .dropdown {
      position: relative
   }

   .dropdown-toggle:focus {
      outline: 0
   }

   .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1000;
      display: none;
      float: left;
      min-width: 160px;
      padding: 5px 0;
      margin: 2px 0 0;
      list-style: none;
      font-size: 14px;
      text-align: left;
      background-color: #fff;
      border: 1px solid #ccc;
      border: 1px solid rgba(0, 0, 0, .15);
      border-radius: 4px;
      -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
      box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
      -webkit-background-clip: padding-box;
      background-clip: padding-box
   }

   .dropdown-menu.pull-right {
      right: 0;
      left: auto
   }

   .dropdown-menu .divider {
      height: 1px;
      margin: 9px 0;
      overflow: hidden;
      background-color: #e5e5e5
   }

   .dropdown-menu>.active>a,
   .dropdown-menu>.active>a:hover,
   .dropdown-menu>.active>a:focus {
      color: #fff;
      text-decoration: none;
      outline: 0;
      background-color: #337ab7
   }

   .dropdown-menu>.disabled>a,
   .dropdown-menu>.disabled>a:hover,
   .dropdown-menu>.disabled>a:focus {
      color: #aaa
   }

   .dropdown-menu>.disabled>a:hover,
   .dropdown-menu>.disabled>a:focus {
      text-decoration: none;
      background-color: transparent;
      background-image: none;
      filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
      cursor: not-allowed
   }

   .open>.dropdown-menu {
      display: block
   }

   .open>a {
      outline: 0
   }

   .dropdown-menu-right {
      left: auto;
      right: 0
   }

   .dropdown-menu-left {
      left: 0;
      right: auto
   }

   .dropdown-header {
      display: block;
      padding: 3px 20px;
      font-size: 12px;
      line-height: 1.42857143;
      color: #aaa;
      white-space: nowrap
   }

   .dropdown-backdrop {
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
      z-index: 990
   }

   .pull-right>.dropdown-menu {
      right: 0;
      left: auto
   }

   .dropup .caret,
   .navbar-fixed-bottom .dropdown .caret {
      border-top: 0;
      border-bottom: 4px dashed;
      border-bottom: 4px solid \9;
      content: ""
   }

   .dropup .dropdown-menu,
   .navbar-fixed-bottom .dropdown .dropdown-menu {
      top: auto;
      bottom: 100%;
      margin-bottom: 2px
   }

   @media(min-width:768px) {
      .navbar-right .dropdown-menu {
         left: auto;
         right: 0
      }

      .navbar-right .dropdown-menu-left {
         left: 0;
         right: auto
      }
   }

   .btn-group,
   .btn-group-vertical {
      position: relative;
      display: inline-block;
      vertical-align: middle
   }

   .btn-group>.btn,
   .btn-group-vertical>.btn {
      position: relative;
      float: left
   }

   .btn-group>.btn:hover,
   .btn-group-vertical>.btn:hover,
   .btn-group>.btn:focus,
   .btn-group-vertical>.btn:focus,
   .btn-group>.btn:active,
   .btn-group-vertical>.btn:active,
   .btn-group>.btn.active,
   .btn-group-vertical>.btn.active {
      z-index: 2
   }

   .btn-group .btn+.btn,
   .btn-group .btn+.btn-group,
   .btn-group .btn-group+.btn,
   .btn-group .btn-group+.btn-group {
      margin-left: -1px
   }

   .btn-toolbar {
      margin-left: -5px
   }

   .btn-toolbar .btn,
   .btn-toolbar .btn-group,
   .btn-toolbar .input-group {
      float: left
   }

   .btn-toolbar>.btn,
   .btn-toolbar>.btn-group,
   .btn-toolbar>.input-group {
      margin-left: 5px
   }

   .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
      border-radius: 0
   }

   .btn-group>.btn:first-child {
      margin-left: 0
   }

   .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0
   }

   .btn-group>.btn:last-child:not(:first-child),
   .btn-group>.dropdown-toggle:not(:first-child) {
      border-bottom-left-radius: 0;
      border-top-left-radius: 0
   }

   .btn-group>.btn-group {
      float: left
   }

   .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
      border-radius: 0
   }

   .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
   .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0
   }

   .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
      border-bottom-left-radius: 0;
      border-top-left-radius: 0
   }

   .btn-group .dropdown-toggle:active,
   .btn-group.open .dropdown-toggle {
      outline: 0
   }

   .btn-group>.btn+.dropdown-toggle {
      padding-left: 8px;
      padding-right: 8px
   }

   .btn-group>.btn-lg+.dropdown-toggle {
      padding-left: 12px;
      padding-right: 12px
   }

   .btn-group.open .dropdown-toggle {
      -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
      box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
   }

   .btn-group.open .dropdown-toggle.btn-link {
      -webkit-box-shadow: none;
      box-shadow: none
   }

   .btn .caret {
      margin-left: 0
   }

   .btn-lg .caret {
      border-width: 5px 5px 0;
      border-bottom-width: 0
   }

   .dropup .btn-lg .caret {
      border-width: 0 5px 5px
   }

   .btn-group-vertical>.btn,
   .btn-group-vertical>.btn-group,
   .btn-group-vertical>.btn-group>.btn {
      display: block;
      float: none;
      width: 100%;
      max-width: 100%
   }

   .btn-group-vertical>.btn-group>.btn {
      float: none
   }

   .btn-group-vertical>.btn+.btn,
   .btn-group-vertical>.btn+.btn-group,
   .btn-group-vertical>.btn-group+.btn,
   .btn-group-vertical>.btn-group+.btn-group {
      margin-top: -1px;
      margin-left: 0
   }

   .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
      border-radius: 0
   }

   .btn-group-vertical>.btn:first-child:not(:last-child) {
      border-top-right-radius: 4px;
      border-top-left-radius: 4px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
   }

   .btn-group-vertical>.btn:last-child:not(:first-child) {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
      border-bottom-right-radius: 4px;
      border-bottom-left-radius: 4px
   }

   .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
      border-radius: 0
   }

   .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
   .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
   }

   .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0
   }

   .btn-group-justified {
      display: table;
      width: 100%;
      table-layout: fixed;
      border-collapse: separate
   }

   .btn-group-justified>.btn,
   .btn-group-justified>.btn-group {
      float: none;
      display: table-cell;
      width: 1%
   }

   .btn-group-justified>.btn-group .btn {
      width: 100%
   }

   .btn-group-justified>.btn-group .dropdown-menu {
      left: auto
   }

   [data-toggle="buttons"]>.btn input[type="radio"],
   [data-toggle="buttons"]>.btn-group>.btn input[type="radio"],
   [data-toggle="buttons"]>.btn input[type="checkbox"],
   [data-toggle="buttons"]>.btn-group>.btn input[type="checkbox"] {
      position: absolute;
      clip: rect(0, 0, 0, 0);
      pointer-events: none
   }

   .input-group {
      position: relative;
      display: table;
      border-collapse: separate
   }

   .input-group[class*="col-"] {
      float: none;
      padding-left: 0;
      padding-right: 0
   }

   .input-group .form-control {
      z-index: 99999;
      float: left;
      width: 100%;
      margin-bottom: 0
   }

   .input-group .form-control:focus {
      z-index: 999999
   }

   .input-group-lg>.form-control,
   .input-group-lg>.input-group-addon,
   .input-group-lg>.input-group-btn>.btn {
      height: 46px;
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333;
      border-radius: 6px
   }

   select.input-group-lg>.form-control,
   select.input-group-lg>.input-group-addon,
   select.input-group-lg>.input-group-btn>.btn {
      height: 46px;
      line-height: 46px
   }

   textarea.input-group-lg>.form-control,
   textarea.input-group-lg>.input-group-addon,
   textarea.input-group-lg>.input-group-btn>.btn,
   select[multiple].input-group-lg>.form-control,
   select[multiple].input-group-lg>.input-group-addon,
   select[multiple].input-group-lg>.input-group-btn>.btn {
      height: auto
   }

   .input-group-sm>.form-control,
   .input-group-sm>.input-group-addon,
   .input-group-sm>.input-group-btn>.btn {
      height: 30px;
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 3px
   }

   select.input-group-sm>.form-control,
   select.input-group-sm>.input-group-addon,
   select.input-group-sm>.input-group-btn>.btn {
      height: 30px;
      line-height: 30px
   }

   textarea.input-group-sm>.form-control,
   textarea.input-group-sm>.input-group-addon,
   textarea.input-group-sm>.input-group-btn>.btn,
   select[multiple].input-group-sm>.form-control,
   select[multiple].input-group-sm>.input-group-addon,
   select[multiple].input-group-sm>.input-group-btn>.btn {
      height: auto
   }

   .input-group-addon,
   .input-group-btn,
   .input-group .form-control {
      display: table-cell
   }

   .input-group-addon:not(:first-child):not(:last-child),
   .input-group-btn:not(:first-child):not(:last-child),
   .input-group .form-control:not(:first-child):not(:last-child) {
      border-radius: 0
   }

   .input-group-addon,
   .input-group-btn {
      width: 1%;
      white-space: nowrap;
      vertical-align: middle
   }

   .input-group-addon {
      padding: 6px 12px;
      font-size: 14px;
      font-weight: normal;
      line-height: 1;
      color: #888;
      text-align: center;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 4px
   }

   .input-group-addon.input-sm {
      padding: 5px 10px;
      font-size: 12px;
      border-radius: 3px
   }

   .input-group-addon.input-lg {
      padding: 10px 16px;
      font-size: 18px;
      border-radius: 6px
   }

   .input-group-addon input[type="radio"],
   .input-group-addon input[type="checkbox"] {
      margin-top: 0
   }

   .input-group .form-control:first-child,
   .input-group-addon:first-child,
   .input-group-btn:first-child>.btn,
   .input-group-btn:first-child>.btn-group>.btn,
   .input-group-btn:first-child>.dropdown-toggle,
   .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),
   .input-group-btn:last-child>.btn-group:not(:last-child)>.btn {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0
   }

   .input-group-addon:first-child {
      border-right: 0
   }

   .input-group .form-control:last-child,
   .input-group-addon:last-child,
   .input-group-btn:last-child>.btn,
   .input-group-btn:last-child>.btn-group>.btn,
   .input-group-btn:last-child>.dropdown-toggle,
   .input-group-btn:first-child>.btn:not(:first-child),
   .input-group-btn:first-child>.btn-group:not(:first-child)>.btn {
      border-bottom-left-radius: 0;
      border-top-left-radius: 0
   }

   .input-group-addon:last-child {
      border-left: 0
   }

   .input-group-btn {
      position: relative;
      font-size: 0;
      white-space: nowrap
   }

   .input-group-btn>.btn {
      position: relative
   }

   .input-group-btn>.btn+.btn {
      margin-left: -1px
   }

   .input-group-btn>.btn:hover,
   .input-group-btn>.btn:focus,
   .input-group-btn>.btn:active {
      z-index: 2
   }

   .input-group-btn:first-child>.btn,
   .input-group-btn:first-child>.btn-group {
      margin-right: -1px
   }

   .input-group-btn:last-child>.btn,
   .input-group-btn:last-child>.btn-group {
      z-index: 2;
      margin-left: -1px
   }

   .nav {
      margin-bottom: 0;
      padding-left: 0;
      list-style: none
   }

   .nav>li {
      position: relative;
      display: block
   }

   .nav>li>a {
      position: relative;
      display: block;
      padding: 10px 15px
   }

   .nav>li>a:hover,
   .nav>li>a:focus {
      text-decoration: none;
      background-color: #fff
   }

   .nav>li.disabled>a {
      color: #aaa
   }

   .nav>li.disabled>a:hover,
   .nav>li.disabled>a:focus {
      color: #aaa;
      text-decoration: none;
      background-color: transparent;
      cursor: not-allowed
   }

   .nav .open>a,
   .nav .open>a:hover,
   .nav .open>a:focus {
      background-color: #fff;
      border-color: #333
   }

   .nav .nav-divider {
      height: 1px;
      margin: 9px 0;
      overflow: hidden;
      background-color: #e5e5e5
   }

   .nav>li>a>img {
      max-width: none
   }

   .nav-tabs {
      border-bottom: 1px solid #ddd
   }

   .nav-tabs>li {
      float: left;
      margin-bottom: -1px
   }

   .nav-tabs>li>a {
      margin-right: 2px;
      line-height: 1.42857143;
      border: 1px solid transparent;
      border-radius: 4px 4px 0 0
   }

   .nav-tabs>li>a:hover {
      border-color: #fff #fff #ddd
   }

   .nav-tabs>li.active>a,
   .nav-tabs>li.active>a:hover,
   .nav-tabs>li.active>a:focus {
      color: #888;
      background-color: #f5f5f5;
      border: 1px solid #ddd;
      border-bottom-color: transparent;
      cursor: default
   }

   .nav-tabs.nav-justified {
      width: 100%;
      border-bottom: 0
   }

   .nav-tabs.nav-justified>li {
      float: none
   }

   .nav-tabs.nav-justified>li>a {
      text-align: center;
      margin-bottom: 5px
   }

   .nav-tabs.nav-justified>.dropdown .dropdown-menu {
      top: auto;
      left: auto
   }

   @media(min-width:768px) {
      .nav-tabs.nav-justified>li {
         display: table-cell;
         width: 1%
      }

      .nav-tabs.nav-justified>li>a {
         margin-bottom: 0
      }
   }

   .nav-tabs.nav-justified>li>a {
      margin-right: 0;
      border-radius: 4px
   }

   .nav-tabs.nav-justified>.active>a,
   .nav-tabs.nav-justified>.active>a:hover,
   .nav-tabs.nav-justified>.active>a:focus {
      border: 1px solid #ddd
   }

   @media(min-width:768px) {
      .nav-tabs.nav-justified>li>a {
         border-bottom: 1px solid #ddd;
         border-radius: 4px 4px 0 0
      }

      .nav-tabs.nav-justified>.active>a,
      .nav-tabs.nav-justified>.active>a:hover,
      .nav-tabs.nav-justified>.active>a:focus {
         border-bottom-color: #f5f5f5
      }
   }

   .nav-pills>li {
      float: left
   }

   .nav-pills>li>a {
      border-radius: 4px
   }

   .nav-pills>li+li {
      margin-left: 2px
   }

   .nav-pills>li.active>a,
   .nav-pills>li.active>a:hover,
   .nav-pills>li.active>a:focus {
      color: #fff;
      background-color: #337ab7
   }

   .nav-stacked>li {
      float: none
   }

   .nav-stacked>li+li {
      margin-top: 2px;
      margin-left: 0
   }

   .nav-justified {
      width: 100%
   }

   .nav-justified>li {
      float: none
   }

   .nav-justified>li>a {
      text-align: center;
      margin-bottom: 5px
   }

   .nav-justified>.dropdown .dropdown-menu {
      top: auto;
      left: auto
   }

   @media(min-width:768px) {
      .nav-justified>li {
         display: table-cell;
         width: 1%
      }

      .nav-justified>li>a {
         margin-bottom: 0
      }
   }

   .nav-tabs-justified {
      border-bottom: 0
   }

   .nav-tabs-justified>li>a {
      margin-right: 0;
      border-radius: 4px
   }

   .nav-tabs-justified>.active>a,
   .nav-tabs-justified>.active>a:hover,
   .nav-tabs-justified>.active>a:focus {
      border: 1px solid #ddd
   }

   @media(min-width:768px) {
      .nav-tabs-justified>li>a {
         border-bottom: 1px solid #ddd;
         border-radius: 4px 4px 0 0
      }

      .nav-tabs-justified>.active>a,
      .nav-tabs-justified>.active>a:hover,
      .nav-tabs-justified>.active>a:focus {
         border-bottom-color: #f5f5f5
      }
   }

   .tab-content>.tab-pane {
      display: none
   }

   .tab-content>.active {
      display: block
   }

   .nav-tabs .dropdown-menu {
      margin-top: -1px;
      border-top-right-radius: 0;
      border-top-left-radius: 0
   }

   .navbar {
      position: relative;
      min-height: 50px;
      margin-bottom: 20px;
      border: 1px solid transparent
   }

   @media(min-width:768px) {
      .navbar {
         border-radius: 4px
      }
   }

   @media(min-width:768px) {
      .navbar-header {
         float: left
      }
   }

   .navbar-collapse {
      overflow-x: visible;
      padding-right: 15px;
      padding-left: 15px;
      border-top: 1px solid transparent;
      -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
      -webkit-overflow-scrolling: touch
   }

   .navbar-collapse.in {
      overflow-y: auto
   }

   @media(min-width:768px) {
      .navbar-collapse {
         width: auto;
         border-top: 0;
         -webkit-box-shadow: none;
         box-shadow: none
      }

      .navbar-collapse.collapse {
         display: block !important;
         height: auto !important;
         padding-bottom: 0;
         overflow: visible !important
      }

      .navbar-collapse.in {
         overflow-y: visible
      }

      .navbar-fixed-top .navbar-collapse,
      .navbar-static-top .navbar-collapse,
      .navbar-fixed-bottom .navbar-collapse {
         padding-left: 0;
         padding-right: 0
      }
   }

   .navbar-fixed-top .navbar-collapse,
   .navbar-fixed-bottom .navbar-collapse {
      max-height: 340px
   }

   @media(max-device-width:480px) and (orientation:landscape) {

      .navbar-fixed-top .navbar-collapse,
      .navbar-fixed-bottom .navbar-collapse {
         max-height: 200px
      }
   }

   .container>.navbar-header,
   .container-fluid>.navbar-header,
   .container>.navbar-collapse,
   .container-fluid>.navbar-collapse {
      margin-right: -15px;
      margin-left: -15px
   }

   @media(min-width:768px) {

      .container>.navbar-header,
      .container-fluid>.navbar-header,
      .container>.navbar-collapse,
      .container-fluid>.navbar-collapse {
         margin-right: 0;
         margin-left: 0
      }
   }

   .navbar-static-top {
      z-index: 1000;
      border-width: 0 0 1px
   }

   @media(min-width:768px) {
      .navbar-static-top {
         border-radius: 0
      }
   }

   .navbar-fixed-top,
   .navbar-fixed-bottom {
      position: fixed;
      right: 0;
      left: 0;
      z-index: 1030
   }

   @media(min-width:768px) {

      .navbar-fixed-top,
      .navbar-fixed-bottom {
         border-radius: 0
      }
   }

   .navbar-fixed-top {
      top: 0;
      border-width: 0 0 1px
   }

   .navbar-fixed-bottom {
      bottom: 0;
      margin-bottom: 0;
      border-width: 1px 0 0
   }

   .navbar-brand {
      float: left;
      padding: 15px 15px;
      font-size: 18px;
      line-height: 20px;
      height: 50px
   }

   .navbar-brand:hover,
   .navbar-brand:focus {
      text-decoration: none
   }

   .navbar-brand>img {
      display: block
   }

   @media(min-width:768px) {

      .navbar>.container .navbar-brand,
      .navbar>.container-fluid .navbar-brand {
         margin-left: -15px
      }
   }

   .navbar-toggle {
      position: relative;
      float: right;
      margin-right: 15px;
      padding: 9px 10px;
      margin-top: 8px;
      margin-bottom: 8px;
      background-color: transparent;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px
   }

   .navbar-toggle:focus {
      outline: 0
   }

   .navbar-toggle .icon-bar {
      display: block;
      width: 22px;
      height: 2px;
      border-radius: 1px
   }

   .navbar-toggle .icon-bar+.icon-bar {
      margin-top: 4px
   }

   @media(min-width:768px) {
      .navbar-toggle {
         display: none
      }
   }

   .navbar-nav {
      margin: 7.5px -15px
   }

   .navbar-nav>li>a {
      padding-top: 10px;
      padding-bottom: 10px;
      line-height: 20px
   }

   @media(max-width:767px) {
      .navbar-nav .open .dropdown-menu {
         position: static;
         float: none;
         width: auto;
         margin-top: 0;
         background-color: transparent;
         border: 0;
         -webkit-box-shadow: none;
         box-shadow: none
      }

      .navbar-nav .open .dropdown-menu>li>a,
      .navbar-nav .open .dropdown-menu .dropdown-header {
         padding: 5px 15px 5px 25px
      }

      .navbar-nav .open .dropdown-menu>li>a {
         line-height: 20px
      }

      .navbar-nav .open .dropdown-menu>li>a:hover,
      .navbar-nav .open .dropdown-menu>li>a:focus {
         background-image: none
      }
   }

   @media(min-width:768px) {
      .navbar-nav {
         float: left;
         margin: 0
      }

      .navbar-nav>li {
         float: left
      }

      .navbar-nav>li>a {
         padding-top: 15px;
         padding-bottom: 15px
      }
   }

   .navbar-form {
      margin-left: -15px;
      margin-right: -15px;
      padding: 10px 15px;
      border-top: 1px solid transparent;
      border-bottom: 1px solid transparent;
      -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
      margin-top: 8px;
      margin-bottom: 8px
   }

   @media(min-width:768px) {
      .navbar-form .form-group {
         display: inline-block;
         margin-bottom: 0;
         vertical-align: middle
      }

      .navbar-form .form-control {
         display: inline-block;
         width: auto;
         vertical-align: middle
      }

      .navbar-form .form-control-static {
         display: inline-block
      }

      .navbar-form .input-group {
         display: inline-table;
         vertical-align: middle
      }

      .navbar-form .input-group .input-group-addon,
      .navbar-form .input-group .input-group-btn,
      .navbar-form .input-group .form-control {
         width: auto
      }

      .navbar-form .input-group>.form-control {
         width: 100%
      }

      .navbar-form .control-label {
         margin-bottom: 0;
         vertical-align: middle
      }

      .navbar-form .radio,
      .navbar-form .checkbox {
         display: inline-block;
         margin-top: 0;
         margin-bottom: 0;
         vertical-align: middle
      }

      .navbar-form .radio label,
      .navbar-form .checkbox label {
         padding-left: 0
      }

      .navbar-form .radio input[type="radio"],
      .navbar-form .checkbox input[type="checkbox"] {
         position: relative;
         margin-left: 0
      }

      .navbar-form .has-feedback .form-control-feedback {
         top: 0
      }
   }

   @media(max-width:767px) {
      .navbar-form .form-group {
         margin-bottom: 5px
      }

      .navbar-form .form-group:last-child {
         margin-bottom: 0
      }
   }

   @media(min-width:768px) {
      .navbar-form {
         width: auto;
         border: 0;
         margin-left: 0;
         margin-right: 0;
         padding-top: 0;
         padding-bottom: 0;
         -webkit-box-shadow: none;
         box-shadow: none
      }
   }

   .navbar-nav>li>.dropdown-menu {
      margin-top: 0;
      border-top-right-radius: 0;
      border-top-left-radius: 0
   }

   .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
      margin-bottom: 0;
      border-top-right-radius: 4px;
      border-top-left-radius: 4px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
   }

   .navbar-btn {
      margin-top: 8px;
      margin-bottom: 8px
   }

   .navbar-btn.btn-sm {
      margin-top: 10px;
      margin-bottom: 10px
   }

   .navbar-btn.btn-xs {
      margin-top: 14px;
      margin-bottom: 14px
   }

   .navbar-text {
      margin-top: 15px;
      margin-bottom: 15px
   }

   @media(min-width:768px) {
      .navbar-text {
         float: left;
         margin-left: 15px;
         margin-right: 15px
      }
   }

   @media(min-width:768px) {
      .navbar-left {
         float: left !important
      }

      .navbar-right {
         float: right !important;
         margin-right: -15px
      }

      .navbar-right~.navbar-right {
         margin-right: 0
      }
   }

   .navbar-default {
      background-color: #f8f8f8;
      border-color: #e7e7e7
   }

   .navbar-default .navbar-brand {
      color: #333
   }

   .navbar-default .navbar-brand:hover,
   .navbar-default .navbar-brand:focus {
      color: #1a1a1a;
      background-color: transparent
   }

   .navbar-default .navbar-text {
      color: #333
   }

   .navbar-default .navbar-nav>li>a {
      color: #333
   }

   .navbar-default .navbar-nav>li>a:hover,
   .navbar-default .navbar-nav>li>a:focus {
      color: #333;
      background-color: transparent
   }

   .navbar-default .navbar-nav>.active>a,
   .navbar-default .navbar-nav>.active>a:hover,
   .navbar-default .navbar-nav>.active>a:focus {
      color: #555;
      background-color: #e7e7e7
   }

   .navbar-default .navbar-nav>.disabled>a,
   .navbar-default .navbar-nav>.disabled>a:hover,
   .navbar-default .navbar-nav>.disabled>a:focus {
      color: #ccc;
      background-color: transparent
   }

   .navbar-default .navbar-toggle {
      border-color: #ddd
   }

   .navbar-default .navbar-toggle:hover,
   .navbar-default .navbar-toggle:focus {
      background-color: #ddd
   }

   .navbar-default .navbar-toggle .icon-bar {
      background-color: #888
   }

   .navbar-default .navbar-collapse,
   .navbar-default .navbar-form {
      border: 1px solid #e7e7e7
   }

   .navbar-default .navbar-nav>.open>a,
   .navbar-default .navbar-nav>.open>a:hover,
   .navbar-default .navbar-nav>.open>a:focus {
      background-color: #e7e7e7;
      color: #555
   }

   @media(max-width:767px) {
      .navbar-default .navbar-nav .open .dropdown-menu>li>a {
         color: #333
      }

      .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,
      .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus {
         color: #333;
         background-color: transparent
      }

      .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
      .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover,
      .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus {
         color: #555;
         background-color: #e7e7e7
      }

      .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
      .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover,
      .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus {
         color: #ccc;
         background-color: transparent
      }
   }

   .navbar-default .navbar-link {
      color: #333
   }

   .navbar-default .navbar-link:hover {
      color: #333
   }

   .navbar-default .btn-link {
      color: #333
   }

   .navbar-default .btn-link:hover,
   .navbar-default .btn-link:focus {
      color: #333
   }

   .navbar-default .btn-link[disabled]:hover,
   fieldset[disabled] .navbar-default .btn-link:hover,
   .navbar-default .btn-link[disabled]:focus,
   fieldset[disabled] .navbar-default .btn-link:focus {
      color: #ccc
   }

   .navbar-inverse {
      background-color: #222;
      border-color: #080808
   }

   .navbar-inverse .navbar-brand {
      color: #d0d0d0
   }

   .navbar-inverse .navbar-brand:hover,
   .navbar-inverse .navbar-brand:focus {
      color: #fff;
      background-color: transparent
   }

   .navbar-inverse .navbar-text {
      color: #d0d0d0
   }

   .navbar-inverse .navbar-nav>li>a {
      color: #d0d0d0
   }

   .navbar-inverse .navbar-nav>li>a:hover,
   .navbar-inverse .navbar-nav>li>a:focus {
      color: #fff;
      background-color: transparent
   }

   .navbar-inverse .navbar-nav>.active>a,
   .navbar-inverse .navbar-nav>.active>a:hover,
   .navbar-inverse .navbar-nav>.active>a:focus {
      color: #fff;
      background-color: #080808
   }

   .navbar-inverse .navbar-nav>.disabled>a,
   .navbar-inverse .navbar-nav>.disabled>a:hover,
   .navbar-inverse .navbar-nav>.disabled>a:focus {
      color: #444;
      background-color: transparent
   }

   .navbar-inverse .navbar-toggle {
      border-color: #333
   }

   .navbar-inverse .navbar-toggle:hover,
   .navbar-inverse .navbar-toggle:focus {
      background-color: #333
   }

   .navbar-inverse .navbar-toggle .icon-bar {
      background-color: #fff
   }

   .navbar-inverse .navbar-collapse,
   .navbar-inverse .navbar-form {
      border-color: #101010
   }

   .navbar-inverse .navbar-nav>.open>a,
   .navbar-inverse .navbar-nav>.open>a:hover,
   .navbar-inverse .navbar-nav>.open>a:focus {
      background-color: #080808;
      color: #fff
   }

   @media(max-width:767px) {
      .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
         border-color: #080808
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
         background-color: #080808
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
         color: #d0d0d0
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover,
      .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus {
         color: #fff;
         background-color: transparent
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus {
         color: #fff;
         background-color: #080808
      }

      .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover,
      .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus {
         color: #444;
         background-color: transparent
      }
   }

   .navbar-inverse .navbar-link {
      color: #d0d0d0
   }

   .navbar-inverse .navbar-link:hover {
      color: #fff
   }

   .navbar-inverse .btn-link {
      color: #d0d0d0
   }

   .navbar-inverse .btn-link:hover,
   .navbar-inverse .btn-link:focus {
      color: #fff
   }

   .navbar-inverse .btn-link[disabled]:hover,
   fieldset[disabled] .navbar-inverse .btn-link:hover,
   .navbar-inverse .btn-link[disabled]:focus,
   fieldset[disabled] .navbar-inverse .btn-link:focus {
      color: #444
   }

   .breadcrumb {
      padding: 8px 15px;
      margin-bottom: 20px;
      list-style: none;
      background-color: #f5f5f5;
      border-radius: 4px
   }

   .breadcrumb>li {
      display: inline-block
   }

   .breadcrumb>li+li:before {
      content: "/ ";
      padding: 0 5px;
      color: #ccc
   }

   .breadcrumb>.active {
      color: #aaa
   }

   .pagination {
      display: inline-block;
      padding-left: 0;
      margin: 20px 0;
      border-radius: 4px
   }

   .pagination>li {
      display: inline
   }

   .pagination>li>a,
   .pagination>li>span {
      position: relative;
      float: left;
      padding: 6px 12px;
      line-height: 1.42857143;
      text-decoration: none;
      color: #333;
      background-color: #fff;
      border: 1px solid #ddd;
      margin-left: -1px
   }

   .pagination>li:first-child>a,
   .pagination>li:first-child>span {
      margin-left: 0;
      border-bottom-left-radius: 4px;
      border-top-left-radius: 4px
   }

   .pagination>li:last-child>a,
   .pagination>li:last-child>span {
      border-bottom-right-radius: 4px;
      border-top-right-radius: 4px
   }

   .pagination>li>a:hover,
   .pagination>li>span:hover,
   .pagination>li>a:focus,
   .pagination>li>span:focus {
      z-index: 2;
      color: #0d0d0d;
      background-color: #fff;
      border-color: #ddd
   }

   .pagination>.active>a,
   .pagination>.active>span,
   .pagination>.active>a:hover,
   .pagination>.active>span:hover,
   .pagination>.active>a:focus,
   .pagination>.active>span:focus {
      z-index: 3;
      color: #fff;
      background-color: #337ab7;
      border-color: #337ab7;
      cursor: default
   }

   .pagination>.disabled>span,
   .pagination>.disabled>span:hover,
   .pagination>.disabled>span:focus,
   .pagination>.disabled>a,
   .pagination>.disabled>a:hover,
   .pagination>.disabled>a:focus {
      color: #aaa;
      background-color: #fff;
      border-color: #ddd;
      cursor: not-allowed
   }

   .pagination-lg>li>a,
   .pagination-lg>li>span {
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.3333333
   }

   .pagination-lg>li:first-child>a,
   .pagination-lg>li:first-child>span {
      border-bottom-left-radius: 6px;
      border-top-left-radius: 6px
   }

   .pagination-lg>li:last-child>a,
   .pagination-lg>li:last-child>span {
      border-bottom-right-radius: 6px;
      border-top-right-radius: 6px
   }

   .pagination-sm>li>a,
   .pagination-sm>li>span {
      padding: 5px 10px;
      font-size: 12px;
      line-height: 1.5
   }

   .pagination-sm>li:first-child>a,
   .pagination-sm>li:first-child>span {
      border-bottom-left-radius: 3px;
      border-top-left-radius: 3px
   }

   .pagination-sm>li:last-child>a,
   .pagination-sm>li:last-child>span {
      border-bottom-right-radius: 3px;
      border-top-right-radius: 3px
   }

   .pager {
      padding-left: 0;
      margin: 20px 0;
      list-style: none;
      text-align: center
   }

   .pager li {
      display: inline
   }

   .pager li>a,
   .pager li>span {
      display: inline-block;
      padding: 5px 14px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 15px
   }

   .pager li>a:hover,
   .pager li>a:focus {
      text-decoration: none;
      background-color: #fff
   }

   .pager .next>a,
   .pager .next>span {
      float: right
   }

   .pager .previous>a,
   .pager .previous>span {
      float: left
   }

   .pager .disabled>a,
   .pager .disabled>a:hover,
   .pager .disabled>a:focus,
   .pager .disabled>span {
      color: #aaa;
      background-color: #fff;
      cursor: not-allowed
   }

   .label {
      display: inline;
      padding: .2em .6em .3em;
      font-size: 75%;
      font-weight: bold;
      line-height: 1;
      color: #fff;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: .25em
   }

   a.label:hover,
   a.label:focus {
      color: #fff;
      text-decoration: none;
      cursor: pointer
   }

   .label:empty {
      display: none
   }

   .btn .label {
      position: relative;
      top: -1px
   }

   .label-default {
      background-color: #aaa
   }

   .label-default[href]:hover,
   .label-default[href]:focus {
      background-color: #919191
   }

   .label-primary {
      background-color: #337ab7
   }

   .label-primary[href]:hover,
   .label-primary[href]:focus {
      background-color: #286090
   }

   .label-success {
      background-color: #5cb85c
   }

   .label-success[href]:hover,
   .label-success[href]:focus {
      background-color: #449d44
   }

   .label-info {
      background-color: #5bc0de
   }

   .label-info[href]:hover,
   .label-info[href]:focus {
      background-color: #31b0d5
   }

   .label-warning {
      background-color: #333
   }

   .label-warning[href]:hover,
   .label-warning[href]:focus {
      background-color: #1a1a1a
   }

   .label-danger {
      background-color: #d9534f
   }

   .label-danger[href]:hover,
   .label-danger[href]:focus {
      background-color: #c9302c
   }

   .badge {
      display: inline-block;
      min-width: 10px;
      padding: 3px 7px;
      font-size: 12px;
      font-weight: bold;
      color: #fff;
      line-height: 1;
      vertical-align: middle;
      white-space: nowrap;
      text-align: center;
      background-color: #aaa;
      border-radius: 10px
   }

   .badge:empty {
      display: none
   }

   .btn .badge {
      position: relative;
      top: -1px
   }

   .btn-xs .badge,
   .btn-group-xs>.btn .badge {
      top: 0;
      padding: 1px 5px
   }

   a.badge:hover,
   a.badge:focus {
      color: #fff;
      text-decoration: none;
      cursor: pointer
   }

   .list-group-item.active>.badge,
   .nav-pills>.active>a>.badge {
      color: #333;
      background-color: #fff
   }

   .list-group-item>.badge {
      float: right
   }

   .list-group-item>.badge+.badge {
      margin-right: 5px
   }

   .nav-pills>li>a>.badge {
      margin-left: 3px
   }

   .jumbotron {
      padding-top: 30px;
      padding-bottom: 30px;
      margin-bottom: 30px;
      color: inherit;
      background-color: #fff
   }

   .jumbotron h1,
   .jumbotron .h1 {
      color: inherit
   }

   .jumbotron p {
      margin-bottom: 15px;
      font-size: 21px;
      font-weight: 200
   }

   .jumbotron>hr {
      border-top-color: #e6e6e6
   }

   .container .jumbotron,
   .container-fluid .jumbotron {
      border-radius: 6px;
      padding-left: 15px;
      padding-right: 15px
   }

   .jumbotron .container {
      max-width: 100%
   }

   @media screen and (min-width:768px) {
      .jumbotron {
         padding-top: 48px;
         padding-bottom: 48px
      }

      .container .jumbotron,
      .container-fluid .jumbotron {
         padding-left: 60px;
         padding-right: 60px
      }

      .jumbotron h1,
      .jumbotron .h1 {
         font-size: 63px
      }
   }

   .thumbnail {
      display: block;
      padding: 4px;
      margin-bottom: 20px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      -webkit-transition: border .2s ease-in-out;
      -o-transition: border .2s ease-in-out;
      transition: border .2s ease-in-out
   }

   .thumbnail>img,
   .thumbnail a>img {
      margin-left: auto;
      margin-right: auto
   }

   a.thumbnail:hover,
   a.thumbnail:focus,
   a.thumbnail.active {
      border-color: #333
   }

   .thumbnail .caption {
      padding: 9px;
      color: #666
   }

   .alert {
      padding: 15px;
      margin-bottom: 20px;
      border: 1px solid transparent;
      border-radius: 4px
   }

   .alert h4 {
      margin-top: 0;
      color: inherit
   }

   .alert .alert-link {
      font-weight: bold
   }

   .alert>p,
   .alert>ul {
      margin-bottom: 0
   }

   .alert>p+p {
      margin-top: 5px
   }

   .alert-dismissable,
   .alert-dismissible {
      padding-right: 35px
   }

   .alert-dismissable .close,
   .alert-dismissible .close {
      position: relative;
      top: -2px;
      right: -21px;
      color: inherit
   }

   .alert-success {
      background-color: #dff0d8;
      border-color: #d6e9c6;
      color: #3c763d
   }

   .alert-success hr {
      border-top-color: #c9e2b3
   }

   .alert-success .alert-link {
      color: #2b542c
   }

   .alert-info {
      background-color: #d9edf7;
      border-color: #bce8f1;
      color: #31708f
   }

   .alert-info hr {
      border-top-color: #a6e1ec
   }

   .alert-info .alert-link {
      color: #245269
   }

   .alert-warning {
      background-color: #fcf8e3;
      border-color: #faebcc;
      color: #8a6d3b
   }

   .alert-warning hr {
      border-top-color: #f7e1b5
   }

   .alert-warning .alert-link {
      color: #66512c
   }

   .alert-danger {
      background-color: #f2dede;
      border-color: #ebccd1;
      color: #a94442
   }

   .alert-danger hr {
      border-top-color: #e4b9c0
   }

   .alert-danger .alert-link {
      color: #843534
   }

   @-webkit-keyframes progress-bar-stripes {
      from {
         background-position: 40px 0
      }

      to {
         background-position: 0 0
      }
   }

   @-o-keyframes progress-bar-stripes {
      from {
         background-position: 40px 0;
      }

      to {
         background-position: 0 0;
      }
   }

   @keyframes progress-bar-stripes {
      from {
         background-position: 40px 0
      }

      to {
         background-position: 0 0
      }
   }

   .progress {
      overflow: hidden;
      height: 20px;
      margin-bottom: 20px;
      background-color: #f5f5f5;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
      box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
   }

   .progress-bar {
      float: left;
      width: 0%;
      height: 100%;
      font-size: 12px;
      line-height: 20px;
      color: #fff;
      text-align: center;
      background-color: #337ab7;
      -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
      box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
      -webkit-transition: width .6s ease;
      -o-transition: width .6s ease;
      transition: width .6s ease
   }

   .progress-striped .progress-bar,
   .progress-bar-striped {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      -webkit-background-size: 40px 40px;
      background-size: 40px 40px
   }

   .progress.active .progress-bar,
   .progress-bar.active {
      -webkit-animation: progress-bar-stripes 2s linear infinite;
      -o-animation: progress-bar-stripes 2s linear infinite;
      animation: progress-bar-stripes 2s linear infinite
   }

   .progress-bar-success {
      background-color: #5cb85c
   }

   .progress-striped .progress-bar-success {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
   }

   .progress-bar-info {
      background-color: #5bc0de
   }

   .progress-striped .progress-bar-info {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
   }

   .progress-bar-warning {
      background-color: #333
   }

   .progress-striped .progress-bar-warning {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
   }

   .progress-bar-danger {
      background-color: #d9534f
   }

   .progress-striped .progress-bar-danger {
      background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
      background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
   }

   .media {
      margin-top: 15px
   }

   .media:first-child {
      margin-top: 0
   }

   .media,
   .media-body {
      zoom: 1;
      overflow: hidden
   }

   .media-body {
      width: 10000px
   }

   .media-object {
      display: block
   }

   .media-object.img-thumbnail {
      max-width: none
   }

   .media-right,
   .media>.pull-right {
      padding-left: 10px
   }

   .media-left,
   .media>.pull-left {
      padding-right: 10px
   }

   .media-left,
   .media-right,
   .media-body {
      display: table-cell;
      vertical-align: top
   }

   .media-middle {
      vertical-align: middle
   }

   .media-bottom {
      vertical-align: bottom
   }

   .media-heading {
      margin-top: 0;
      margin-bottom: 5px
   }

   .media-list {
      padding-left: 0;
      list-style: none
   }

   .list-group {
      margin-bottom: 20px;
      padding-left: 0
   }

   .list-group-item {
      position: relative;
      display: block;
      padding: 10px 15px;
      margin-bottom: -1px;
      background-color: #fff;
      border: 1px solid #ddd
   }

   .list-group-item:first-child {
      border-top-right-radius: 4px;
      border-top-left-radius: 4px
   }

   .list-group-item:last-child {
      margin-bottom: 0;
      border-bottom-right-radius: 4px;
      border-bottom-left-radius: 4px
   }

   a.list-group-item,
   button.list-group-item {
      color: #555
   }

   a.list-group-item .list-group-item-heading,
   button.list-group-item .list-group-item-heading {
      color: #333
   }

   a.list-group-item:hover,
   button.list-group-item:hover,
   a.list-group-item:focus,
   button.list-group-item:focus {
      text-decoration: none;
      color: #555;
      background-color: #f5f5f5
   }

   button.list-group-item {
      width: 100%;
      text-align: left
   }

   .list-group-item.disabled,
   .list-group-item.disabled:hover,
   .list-group-item.disabled:focus {
      background-color: #fff;
      color: #aaa;
      cursor: not-allowed
   }

   .list-group-item.disabled .list-group-item-heading,
   .list-group-item.disabled:hover .list-group-item-heading,
   .list-group-item.disabled:focus .list-group-item-heading {
      color: inherit
   }

   .list-group-item.disabled .list-group-item-text,
   .list-group-item.disabled:hover .list-group-item-text,
   .list-group-item.disabled:focus .list-group-item-text {
      color: #aaa
   }

   .list-group-item.active,
   .list-group-item.active:hover,
   .list-group-item.active:focus {
      z-index: 2;
      color: #fff;
      background-color: #337ab7;
      border-color: #337ab7
   }

   .list-group-item.active .list-group-item-heading,
   .list-group-item.active:hover .list-group-item-heading,
   .list-group-item.active:focus .list-group-item-heading,
   .list-group-item.active .list-group-item-heading>small,
   .list-group-item.active:hover .list-group-item-heading>small,
   .list-group-item.active:focus .list-group-item-heading>small,
   .list-group-item.active .list-group-item-heading>.small,
   .list-group-item.active:hover .list-group-item-heading>.small,
   .list-group-item.active:focus .list-group-item-heading>.small {
      color: inherit
   }

   .list-group-item.active .list-group-item-text,
   .list-group-item.active:hover .list-group-item-text,
   .list-group-item.active:focus .list-group-item-text {
      color: #c7ddef
   }

   .list-group-item-success {
      color: #3c763d;
      background-color: #dff0d8
   }

   a.list-group-item-success,
   button.list-group-item-success {
      color: #3c763d
   }

   a.list-group-item-success .list-group-item-heading,
   button.list-group-item-success .list-group-item-heading {
      color: inherit
   }

   a.list-group-item-success:hover,
   button.list-group-item-success:hover,
   a.list-group-item-success:focus,
   button.list-group-item-success:focus {
      color: #3c763d;
      background-color: #d0e9c6
   }

   a.list-group-item-success.active,
   button.list-group-item-success.active,
   a.list-group-item-success.active:hover,
   button.list-group-item-success.active:hover,
   a.list-group-item-success.active:focus,
   button.list-group-item-success.active:focus {
      color: #fff;
      background-color: #3c763d;
      border-color: #3c763d
   }

   .list-group-item-info {
      color: #31708f;
      background-color: #d9edf7
   }

   a.list-group-item-info,
   button.list-group-item-info {
      color: #31708f
   }

   a.list-group-item-info .list-group-item-heading,
   button.list-group-item-info .list-group-item-heading {
      color: inherit
   }

   a.list-group-item-info:hover,
   button.list-group-item-info:hover,
   a.list-group-item-info:focus,
   button.list-group-item-info:focus {
      color: #31708f;
      background-color: #c4e3f3
   }

   a.list-group-item-info.active,
   button.list-group-item-info.active,
   a.list-group-item-info.active:hover,
   button.list-group-item-info.active:hover,
   a.list-group-item-info.active:focus,
   button.list-group-item-info.active:focus {
      color: #fff;
      background-color: #31708f;
      border-color: #31708f
   }

   .list-group-item-warning {
      color: #8a6d3b;
      background-color: #fcf8e3
   }

   a.list-group-item-warning,
   button.list-group-item-warning {
      color: #8a6d3b
   }

   a.list-group-item-warning .list-group-item-heading,
   button.list-group-item-warning .list-group-item-heading {
      color: inherit
   }

   a.list-group-item-warning:hover,
   button.list-group-item-warning:hover,
   a.list-group-item-warning:focus,
   button.list-group-item-warning:focus {
      color: #8a6d3b;
      background-color: #faf2cc
   }

   a.list-group-item-warning.active,
   button.list-group-item-warning.active,
   a.list-group-item-warning.active:hover,
   button.list-group-item-warning.active:hover,
   a.list-group-item-warning.active:focus,
   button.list-group-item-warning.active:focus {
      color: #fff;
      background-color: #8a6d3b;
      border-color: #8a6d3b
   }

   .list-group-item-danger {
      color: #a94442;
      background-color: #f2dede
   }

   a.list-group-item-danger,
   button.list-group-item-danger {
      color: #a94442
   }

   a.list-group-item-danger .list-group-item-heading,
   button.list-group-item-danger .list-group-item-heading {
      color: inherit
   }

   a.list-group-item-danger:hover,
   button.list-group-item-danger:hover,
   a.list-group-item-danger:focus,
   button.list-group-item-danger:focus {
      color: #a94442;
      background-color: #ebcccc
   }

   a.list-group-item-danger.active,
   button.list-group-item-danger.active,
   a.list-group-item-danger.active:hover,
   button.list-group-item-danger.active:hover,
   a.list-group-item-danger.active:focus,
   button.list-group-item-danger.active:focus {
      color: #fff;
      background-color: #a94442;
      border-color: #a94442
   }

   .list-group-item-heading {
      margin-top: 0;
      margin-bottom: 5px
   }

   .list-group-item-text {
      margin-bottom: 0;
      line-height: 1.3
   }

   .panel {
      margin-bottom: 20px;
      background-color: #fff;
      border: 1px solid transparent;
      border-radius: 4px;
      -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
      box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
   }

   .panel-body {
      padding: 15px
   }

   .panel-heading {
      padding: 10px 15px;
      border-bottom: 1px solid transparent;
      border-top-right-radius: 3px;
      border-top-left-radius: 3px
   }

   .panel-heading>.dropdown .dropdown-toggle {
      color: inherit
   }

   .panel-title {
      margin-top: 0;
      margin-bottom: 0;
      font-size: 16px;
      color: inherit
   }

   .panel-title>a,
   .panel-title>small,
   .panel-title>.small,
   .panel-title>small>a,
   .panel-title>.small>a {
      color: inherit
   }

   .panel-footer {
      padding: 10px 15px;
      background-color: #f5f5f5;
      border-top: 1px solid #ddd;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px
   }

   .panel>.list-group,
   .panel>.panel-collapse>.list-group {
      margin-bottom: 0
   }

   .panel>.list-group .list-group-item,
   .panel>.panel-collapse>.list-group .list-group-item {
      border-width: 1px 0;
      border-radius: 0
   }

   .panel>.list-group:first-child .list-group-item:first-child,
   .panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
      border-top: 0;
      border-top-right-radius: 3px;
      border-top-left-radius: 3px
   }

   .panel>.list-group:last-child .list-group-item:last-child,
   .panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
      border-bottom: 0;
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px
   }

   .panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0
   }

   .panel-heading+.list-group .list-group-item:first-child {
      border-top-width: 0
   }

   .list-group+.panel-footer {
      border-top-width: 0
   }

   .panel>.table,
   .panel>.table-responsive>.table,
   .panel>.panel-collapse>.table {
      margin-bottom: 0
   }

   .panel>.table caption,
   .panel>.table-responsive>.table caption,
   .panel>.panel-collapse>.table caption {
      padding-left: 15px;
      padding-right: 15px
   }

   .panel>.table:first-child,
   .panel>.table-responsive:first-child>.table:first-child {
      border-top-right-radius: 3px;
      border-top-left-radius: 3px
   }

   .panel>.table:first-child>thead:first-child>tr:first-child,
   .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
   .panel>.table:first-child>tbody:first-child>tr:first-child,
   .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child {
      border-top-left-radius: 3px;
      border-top-right-radius: 3px
   }

   .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
   .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
   .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
   .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
   .panel>.table:first-child>thead:first-child>tr:first-child th:first-child,
   .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
   .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
   .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child {
      border-top-left-radius: 3px
   }

   .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
   .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
   .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
   .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
   .panel>.table:first-child>thead:first-child>tr:first-child th:last-child,
   .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
   .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
   .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child {
      border-top-right-radius: 3px
   }

   .panel>.table:last-child,
   .panel>.table-responsive:last-child>.table:last-child {
      border-bottom-right-radius: 3px;
      border-bottom-left-radius: 3px
   }

   .panel>.table:last-child>tbody:last-child>tr:last-child,
   .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
   .panel>.table:last-child>tfoot:last-child>tr:last-child,
   .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child {
      border-bottom-left-radius: 3px;
      border-bottom-right-radius: 3px
   }

   .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
   .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
   .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
   .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
   .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
   .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
   .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
   .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
      border-bottom-left-radius: 3px
   }

   .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
   .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
   .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
   .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
   .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
   .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
   .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
   .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
      border-bottom-right-radius: 3px
   }

   .panel>.panel-body+.table,
   .panel>.panel-body+.table-responsive,
   .panel>.table+.panel-body,
   .panel>.table-responsive+.panel-body {
      border-top: 1px solid #ddd
   }

   .panel>.table>tbody:first-child>tr:first-child th,
   .panel>.table>tbody:first-child>tr:first-child td {
      border-top: 0
   }

   .panel>.table-bordered,
   .panel>.table-responsive>.table-bordered {
      border: 0
   }

   .panel>.table-bordered>thead>tr>th:first-child,
   .panel>.table-responsive>.table-bordered>thead>tr>th:first-child,
   .panel>.table-bordered>tbody>tr>th:first-child,
   .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
   .panel>.table-bordered>tfoot>tr>th:first-child,
   .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
   .panel>.table-bordered>thead>tr>td:first-child,
   .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
   .panel>.table-bordered>tbody>tr>td:first-child,
   .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
   .panel>.table-bordered>tfoot>tr>td:first-child,
   .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child {
      border-left: 0
   }

   .panel>.table-bordered>thead>tr>th:last-child,
   .panel>.table-responsive>.table-bordered>thead>tr>th:last-child,
   .panel>.table-bordered>tbody>tr>th:last-child,
   .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
   .panel>.table-bordered>tfoot>tr>th:last-child,
   .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
   .panel>.table-bordered>thead>tr>td:last-child,
   .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
   .panel>.table-bordered>tbody>tr>td:last-child,
   .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
   .panel>.table-bordered>tfoot>tr>td:last-child,
   .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child {
      border-right: 0
   }

   .panel>.table-bordered>thead>tr:first-child>td,
   .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
   .panel>.table-bordered>tbody>tr:first-child>td,
   .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
   .panel>.table-bordered>thead>tr:first-child>th,
   .panel>.table-responsive>.table-bordered>thead>tr:first-child>th,
   .panel>.table-bordered>tbody>tr:first-child>th,
   .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th {
      border-bottom: 0
   }

   .panel>.table-bordered>tbody>tr:last-child>td,
   .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
   .panel>.table-bordered>tfoot>tr:last-child>td,
   .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
   .panel>.table-bordered>tbody>tr:last-child>th,
   .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
   .panel>.table-bordered>tfoot>tr:last-child>th,
   .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
      border-bottom: 0
   }

   .panel>.table-responsive {
      border: 0;
      margin-bottom: 0
   }

   .panel-group {
      margin-bottom: 20px
   }

   .panel-group .panel {
      margin-bottom: 0;
      border-radius: 4px
   }

   .panel-group .panel+.panel {
      margin-top: 5px
   }

   .panel-group .panel-heading {
      border-bottom: 0
   }

   .panel-group .panel-heading+.panel-collapse>.panel-body,
   .panel-group .panel-heading+.panel-collapse>.list-group {
      border-top: 1px solid #ddd
   }

   .panel-group .panel-footer {
      border-top: 0
   }

   .panel-group .panel-footer+.panel-collapse .panel-body {
      border-bottom: 1px solid #ddd
   }

   .panel-default {
      border-color: #ddd
   }

   .panel-default>.panel-heading {
      background-color: #f5f5f5;
      border-color: #ddd
   }

   .panel-default>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #ddd
   }

   .panel-default>.panel-heading .badge {
      color: #f5f5f5;
      background-color: #666
   }

   .panel-default>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #ddd
   }

   .panel-primary {
      border-color: #337ab7
   }

   .panel-primary>.panel-heading {
      color: #fff;
      background-color: #337ab7;
      border-color: #337ab7
   }

   .panel-primary>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #337ab7
   }

   .panel-primary>.panel-heading .badge {
      color: #337ab7;
      background-color: #fff
   }

   .panel-primary>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #337ab7
   }

   .panel-success {
      border-color: #d6e9c6
   }

   .panel-success>.panel-heading {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #d6e9c6
   }

   .panel-success>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #d6e9c6
   }

   .panel-success>.panel-heading .badge {
      color: #dff0d8;
      background-color: #3c763d
   }

   .panel-success>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #d6e9c6
   }

   .panel-info {
      border-color: #bce8f1
   }

   .panel-info>.panel-heading {
      color: #31708f;
      background-color: #d9edf7;
      border-color: #bce8f1
   }

   .panel-info>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #bce8f1
   }

   .panel-info>.panel-heading .badge {
      color: #d9edf7;
      background-color: #31708f
   }

   .panel-info>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #bce8f1
   }

   .panel-warning {
      border-color: #faebcc
   }

   .panel-warning>.panel-heading {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #faebcc
   }

   .panel-warning>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #faebcc
   }

   .panel-warning>.panel-heading .badge {
      color: #fcf8e3;
      background-color: #8a6d3b
   }

   .panel-warning>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #faebcc
   }

   .panel-danger {
      border-color: #ebccd1
   }

   .panel-danger>.panel-heading {
      color: #a94442;
      background-color: #f2dede;
      border-color: #ebccd1
   }

   .panel-danger>.panel-heading+.panel-collapse>.panel-body {
      border-top-color: #ebccd1
   }

   .panel-danger>.panel-heading .badge {
      color: #f2dede;
      background-color: #a94442
   }

   .panel-danger>.panel-footer+.panel-collapse>.panel-body {
      border-bottom-color: #ebccd1
   }

   .embed-responsive {
      position: relative;
      display: block;
      height: 0;
      padding: 0;
      overflow: hidden
   }

   .embed-responsive .embed-responsive-item,
   .embed-responsive iframe,
   .embed-responsive embed,
   .embed-responsive object,
   .embed-responsive video {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      height: 100%;
      width: 100%;
      border: 0
   }

   .embed-responsive-16by9 {
      padding-bottom: 56.25%
   }

   .embed-responsive-4by3 {
      padding-bottom: 75%
   }

   .well {
      min-height: 20px;
      padding: 19px;
      margin-bottom: 20px;
      background-color: #f5f5f5;
      border: 1px solid #e3e3e3;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
   }

   .well blockquote {
      border-color: #ddd;
      border-color: rgba(0, 0, 0, .15)
   }

   .well-lg {
      padding: 24px;
      border-radius: 6px
   }

   .well-sm {
      padding: 9px;
      border-radius: 3px
   }

   .close {
      float: right;
      font-size: 21px;
      font-weight: bold;
      line-height: 1;
      color: #000;
      text-shadow: 0 1px 0 #fff;
      opacity: .2;
      filter: alpha(opacity=20)
   }

   .close:hover,
   .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
      opacity: .5;
      filter: alpha(opacity=50)
   }

   button.close {
      padding: 0;
      cursor: pointer;
      background: transparent;
      border: 0;
   }

   .modal-open {
      overflow: hidden
   }

   .modal {
      display: none;
      overflow: hidden;
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1050;
      -webkit-overflow-scrolling: touch;
      outline: 0
   }

   .modal.fade .modal-dialog {
      -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
      -o-transform: translate(0, -25%);
      transform: translate(0, -25%);
      -webkit-transition: -webkit-transform .3s ease-out;
      -o-transition: -o-transform .3s ease-out;
      transition: transform .3s ease-out
   }

   .modal.in .modal-dialog {
      -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      -o-transform: translate(0, 0);
      transform: translate(0, 0)
   }

   .modal-open .modal {
      overflow-x: hidden;
      overflow-y: auto
   }

   .modal-dialog {
      position: relative;
      width: auto;
      margin: 10px
   }

   .modal-content {
      position: relative;
      background-color: #fff;
      border: 1px solid #999;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 6px;
      -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
      box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      outline: 0
   }

   .modal-backdrop {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1040;
      background-color: #000
   }

   .modal-backdrop.fade {
      opacity: 0;
      filter: alpha(opacity=0)
   }

   .modal-backdrop.in {
      opacity: .5;
      filter: alpha(opacity=50)
   }

   .modal-header {
      padding: 15px;
      border-bottom: 1px solid #e5e5e5
   }

   .modal-header .close {
      margin-top: 0px
   }

   .modal-title {
      margin: 0;
      line-height: 1.42857143
   }

   .modal-body {
      position: relative;
      padding: 15px
   }

   .modal-footer {
      padding: 0px 15px 20px 15px;
      border-top: 0px solid #000;
      text-align: right;
   }

   .modal-footer .btn+.btn {
      margin-left: 5px;
      margin-bottom: 0
   }

   .modal-footer .btn-group .btn+.btn {
      margin-left: -1px
   }

   .modal-footer .btn-block+.btn-block {
      margin-left: 0
   }

   .modal-scrollbar-measure {
      position: absolute;
      top: -9999px;
      width: 50px;
      height: 50px;
      overflow: scroll
   }

   @media(min-width:768px) {
      .modal-dialog {
         width: 500px;
         margin: 30px auto
      }

      .modal-content {
         -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
         box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
      }

      .modal-sm {
         width: 300px
      }
   }

   @media(min-width:992px) {
      .modal-lg {
         width: 900px
      }
   }

   .tooltip {
      position: absolute;
      z-index: 1070;
      display: block;
      font-style: normal;
      font-weight: normal;
      letter-spacing: normal;
      line-break: auto;
      line-height: 1.42857143;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      white-space: normal;
      word-break: normal;
      word-spacing: normal;
      word-wrap: normal;
      font-size: 12px;
      opacity: 0;
      filter: alpha(opacity=0)
   }

   .tooltip.in {
      opacity: .9;
      filter: alpha(opacity=90)
   }

   .tooltip.top {
      margin-top: -3px;
      padding: 5px 0
   }

   .tooltip.right {
      margin-left: 3px;
      padding: 0 5px
   }

   .tooltip.bottom {
      margin-top: 3px;
      padding: 5px 0
   }

   .tooltip.left {
      margin-left: -3px;
      padding: 0 5px
   }

   .tooltip-inner {
      max-width: 200px;
      padding: 3px 8px;
      color: #fff;
      text-align: center;
      background-color: #000;
      border-radius: 4px
   }

   .tooltip-arrow {
      position: absolute;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid
   }

   .tooltip.top .tooltip-arrow {
      bottom: 0;
      left: 50%;
      margin-left: -5px;
      border-width: 5px 5px 0;
      border-top-color: #000
   }

   .tooltip.top-left .tooltip-arrow {
      bottom: 0;
      right: 5px;
      margin-bottom: -5px;
      border-width: 5px 5px 0;
      border-top-color: #000
   }

   .tooltip.top-right .tooltip-arrow {
      bottom: 0;
      left: 5px;
      margin-bottom: -5px;
      border-width: 5px 5px 0;
      border-top-color: #000
   }

   .tooltip.right .tooltip-arrow {
      top: 50%;
      left: 0;
      margin-top: -5px;
      border-width: 5px 5px 5px 0;
      border-right-color: #000
   }

   .tooltip.left .tooltip-arrow {
      top: 50%;
      right: 0;
      margin-top: -5px;
      border-width: 5px 0 5px 5px;
      border-left-color: #000
   }

   .tooltip.bottom .tooltip-arrow {
      top: 0;
      left: 50%;
      margin-left: -5px;
      border-width: 0 5px 5px;
      border-bottom-color: #000
   }

   .tooltip.bottom-left .tooltip-arrow {
      top: 0;
      right: 5px;
      margin-top: -5px;
      border-width: 0 5px 5px;
      border-bottom-color: #000
   }

   .tooltip.bottom-right .tooltip-arrow {
      top: 0;
      left: 5px;
      margin-top: -5px;
      border-width: 0 5px 5px;
      border-bottom-color: #000
   }

   .popover {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1060;
      display: none;
      max-width: 276px;
      padding: 1px;
      font-style: normal;
      font-weight: normal;
      letter-spacing: normal;
      line-break: auto;
      line-height: 1.42857143;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      white-space: normal;
      word-break: normal;
      word-spacing: normal;
      word-wrap: normal;
      font-size: 14px;
      background-color: #fff;
      -webkit-background-clip: padding-box;
      background-clip: padding-box;
      border: 1px solid #ccc;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 6px;
      -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
      box-shadow: 0 5px 10px rgba(0, 0, 0, .2)
   }

   .popover.top {
      margin-top: -10px
   }

   .popover.right {
      margin-left: 10px
   }

   .popover.bottom {
      margin-top: 10px
   }

   .popover.left {
      margin-left: -10px
   }

   .popover-title {
      margin: 0;
      padding: 8px 14px;
      font-size: 14px;
      background-color: #f7f7f7;
      border-bottom: 1px solid #ebebeb;
      border-radius: 5px 5px 0 0
   }

   .popover-content {
      padding: 9px 14px
   }

   .popover>.arrow,
   .popover>.arrow:after {
      position: absolute;
      display: block;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid
   }

   .popover>.arrow {
      border-width: 11px
   }

   .popover>.arrow:after {
      border-width: 10px;
      content: ""
   }

   .popover.top>.arrow {
      left: 50%;
      margin-left: -11px;
      border-bottom-width: 0;
      border-top-color: #999;
      border-top-color: rgba(0, 0, 0, .25);
      bottom: -11px
   }

   .popover.top>.arrow:after {
      content: " ";
      bottom: 1px;
      margin-left: -10px;
      border-bottom-width: 0;
      border-top-color: #fff
   }

   .popover.right>.arrow {
      top: 50%;
      left: -11px;
      margin-top: -11px;
      border-left-width: 0;
      border-right-color: #999;
      border-right-color: rgba(0, 0, 0, .25)
   }

   .popover.right>.arrow:after {
      content: " ";
      left: 1px;
      bottom: -10px;
      border-left-width: 0;
      border-right-color: #fff
   }

   .popover.bottom>.arrow {
      left: 50%;
      margin-left: -11px;
      border-top-width: 0;
      border-bottom-color: #999;
      border-bottom-color: rgba(0, 0, 0, .25);
      top: -11px
   }

   .popover.bottom>.arrow:after {
      content: " ";
      top: 1px;
      margin-left: -10px;
      border-top-width: 0;
      border-bottom-color: #fff
   }

   .popover.left>.arrow {
      top: 50%;
      right: -11px;
      margin-top: -11px;
      border-right-width: 0;
      border-left-color: #999;
      border-left-color: rgba(0, 0, 0, .25)
   }

   .popover.left>.arrow:after {
      content: " ";
      right: 1px;
      border-right-width: 0;
      border-left-color: #fff;
      bottom: -10px
   }

   .carousel {
      position: relative
   }

   .carousel-inner {
      position: relative;
      overflow: hidden;
      width: 100%
   }

   .carousel-inner>.item {
      display: none;
      position: relative;
      -webkit-transition: .6s ease-in-out left;
      -o-transition: .6s ease-in-out left;
      transition: .6s ease-in-out left
   }

   .carousel-inner>.item>img,
   .carousel-inner>.item>a>img {
      line-height: 1
   }

   @media all and (transform-3d),
   (-webkit-transform-3d) {
      .carousel-inner>.item {
         -webkit-transition: -webkit-transform .6s ease-in-out;
         -o-transition: -o-transform .6s ease-in-out;
         transition: transform .6s ease-in-out;
         -webkit-backface-visibility: hidden;
         backface-visibility: hidden;
         -webkit-perspective: 1000px;
         perspective: 1000px
      }

      .carousel-inner>.item.next,
      .carousel-inner>.item.active.right {
         -webkit-transform: translate3d(100%, 0, 0);
         transform: translate3d(100%, 0, 0);
         left: 0
      }

      .carousel-inner>.item.prev,
      .carousel-inner>.item.active.left {
         -webkit-transform: translate3d(-100%, 0, 0);
         transform: translate3d(-100%, 0, 0);
         left: 0
      }

      .carousel-inner>.item.next.left,
      .carousel-inner>.item.prev.right,
      .carousel-inner>.item.active {
         -webkit-transform: translate3d(0, 0, 0);
         transform: translate3d(0, 0, 0);
         left: 0
      }
   }

   .carousel-inner>.active,
   .carousel-inner>.next,
   .carousel-inner>.prev {
      display: block
   }

   .carousel-inner>.active {
      left: 0
   }

   .carousel-inner>.next,
   .carousel-inner>.prev {
      position: absolute;
      top: 0;
      width: 100%
   }

   .carousel-inner>.next {
      left: 100%
   }

   .carousel-inner>.prev {
      left: -100%
   }

   .carousel-inner>.next.left,
   .carousel-inner>.prev.right {
      left: 0
   }

   .carousel-inner>.active.left {
      left: -100%
   }

   .carousel-inner>.active.right {
      left: 100%
   }

   .carousel-control {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      width: 15%;
      opacity: .5;
      filter: alpha(opacity=50);
      font-size: 20px;
      color: #fff;
      text-align: center;
      text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
      background-color: rgba(0, 0, 0, 0)
   }

   .carousel-control.left {
      background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
      background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
      background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
      background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
      background-repeat: repeat-x;
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1)
   }

   .carousel-control.right {
      left: auto;
      right: 0;
      background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
      background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
      background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
      background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
      background-repeat: repeat-x;
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1)
   }

   .carousel-control:hover,
   .carousel-control:focus {
      outline: 0;
      color: #fff;
      text-decoration: none;
      opacity: .9;
      filter: alpha(opacity=90)
   }

   .carousel-control .icon-prev,
   .carousel-control .icon-next,
   .carousel-control .glyphicon-chevron-left,
   .carousel-control .glyphicon-chevron-right {
      position: absolute;
      top: 50%;
      margin-top: -10px;
      z-index: 5;
      display: inline-block
   }

   .carousel-control .icon-prev,
   .carousel-control .glyphicon-chevron-left {
      left: 50%;
      margin-left: -10px
   }

   .carousel-control .icon-next,
   .carousel-control .glyphicon-chevron-right {
      right: 50%;
      margin-right: -10px
   }

   .carousel-control .icon-prev,
   .carousel-control .icon-next {
      width: 20px;
      height: 20px;
      line-height: 1;
      font-family: serif
   }

   .carousel-control .icon-prev:before {
      content: '‹'
   }

   .carousel-control .icon-next:before {
      content: '›'
   }

   .carousel-indicators {
      position: absolute;
      bottom: 10px;
      left: 50%;
      z-index: 15;
      width: 60%;
      margin-left: -30%;
      padding-left: 0;
      list-style: none;
      text-align: center
   }

   .carousel-indicators li {
      display: inline-block;
      width: 10px;
      height: 10px;
      margin: 1px;
      text-indent: -999px;
      border: 1px solid #fff;
      border-radius: 10px;
      cursor: pointer;
      background-color: #000 \9;
      background-color: rgba(0, 0, 0, 0)
   }

   .carousel-indicators .active {
      margin: 0;
      width: 12px;
      height: 12px;
      background-color: #fff
   }

   .carousel-caption {
      position: absolute;
      left: 15%;
      right: 15%;
      bottom: 20px;
      z-index: 10;
      padding-top: 20px;
      padding-bottom: 20px;
      color: #fff;
      text-align: center;
      text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
   }

   .carousel-caption .btn {
      text-shadow: none
   }

   @media screen and (min-width:768px) {

      .carousel-control .glyphicon-chevron-left,
      .carousel-control .glyphicon-chevron-right,
      .carousel-control .icon-prev,
      .carousel-control .icon-next {
         width: 30px;
         height: 30px;
         margin-top: -10px;
         font-size: 30px
      }

      .carousel-control .glyphicon-chevron-left,
      .carousel-control .icon-prev {
         margin-left: -10px
      }

      .carousel-control .glyphicon-chevron-right,
      .carousel-control .icon-next {
         margin-right: -10px
      }

      .carousel-caption {
         left: 20%;
         right: 20%;
         padding-bottom: 30px
      }

      .carousel-indicators {
         bottom: 20px
      }
   }

   .clearfix:before,
   .clearfix:after,
   .dl-horizontal dd:before,
   .dl-horizontal dd:after,
   .container:before,
   .container:after,
   .container-fluid:before,
   .container-fluid:after,
   .row:before,
   .row:after,
   .form-horizontal .form-group:before,
   .form-horizontal .form-group:after,
   .btn-toolbar:before,
   .btn-toolbar:after,
   .btn-group-vertical>.btn-group:before,
   .btn-group-vertical>.btn-group:after,
   .nav:before,
   .nav:after,
   .navbar:before,
   .navbar:after,
   .navbar-header:before,
   .navbar-header:after,
   .navbar-collapse:before,
   .navbar-collapse:after,
   .pager:before,
   .pager:after,
   .panel-body:before,
   .panel-body:after,
   .modal-header:before,
   .modal-header:after,
   .modal-footer:before,
   .modal-footer:after {
      content: " ";
      display: table
   }

   .clearfix:after,
   .dl-horizontal dd:after,
   .container:after,
   .container-fluid:after,
   .row:after,
   .form-horizontal .form-group:after,
   .btn-toolbar:after,
   .btn-group-vertical>.btn-group:after,
   .nav:after,
   .navbar:after,
   .navbar-header:after,
   .navbar-collapse:after,
   .pager:after,
   .panel-body:after,
   .modal-header:after,
   .modal-footer:after {
      clear: both
   }

   .center-block {
      display: block;
      margin-left: auto;
      margin-right: auto
   }

   .pull-right {
      float: right !important
   }

   .pull-left {
      float: left !important
   }

   .hide {
      display: none !important
   }

   .show {
      display: block !important
   }

   .invisible {
      visibility: hidden
   }

   .text-hide {
      font: 0/0 a;
      color: transparent;
      text-shadow: none;
      background-color: transparent;
      border: 0
   }

   .hidden {
      display: none !important
   }

   .affix {
      position: fixed
   }

   @-ms-viewport {
      width: device-width;
   }

   .visible-xs,
   .visible-sm,
   .visible-md,
   .visible-lg {
      display: none !important
   }

   .visible-xs-block,
   .visible-xs-inline,
   .visible-xs-inline-block,
   .visible-sm-block,
   .visible-sm-inline,
   .visible-sm-inline-block,
   .visible-md-block,
   .visible-md-inline,
   .visible-md-inline-block,
   .visible-lg-block,
   .visible-lg-inline,
   .visible-lg-inline-block {
      display: none !important
   }

   @media(max-width:767px) {
      .visible-xs {
         display: block !important
      }

      table.visible-xs {
         display: table !important
      }

      tr.visible-xs {
         display: table-row !important
      }

      th.visible-xs,
      td.visible-xs {
         display: table-cell !important
      }
   }

   @media(max-width:767px) {
      .visible-xs-block {
         display: block !important
      }
   }

   @media(max-width:767px) {
      .visible-xs-inline {
         display: inline !important
      }
   }

   @media(max-width:767px) {
      .visible-xs-inline-block {
         display: inline-block !important
      }
   }

   @media(min-width:768px) and (max-width:991px) {
      .visible-sm {
         display: block !important
      }

      table.visible-sm {
         display: table !important
      }

      tr.visible-sm {
         display: table-row !important
      }

      th.visible-sm,
      td.visible-sm {
         display: table-cell !important
      }
   }

   @media(min-width:768px) and (max-width:991px) {
      .visible-sm-block {
         display: block !important
      }
   }

   @media(min-width:768px) and (max-width:991px) {
      .visible-sm-inline {
         display: inline !important
      }
   }

   @media(min-width:768px) and (max-width:991px) {
      .visible-sm-inline-block {
         display: inline-block !important
      }
   }

   @media(min-width:992px) and (max-width:1199px) {
      .visible-md {
         display: block !important
      }

      table.visible-md {
         display: table !important
      }

      tr.visible-md {
         display: table-row !important
      }

      th.visible-md,
      td.visible-md {
         display: table-cell !important
      }
   }

   @media(min-width:992px) and (max-width:1199px) {
      .visible-md-block {
         display: block !important
      }
   }

   @media(min-width:992px) and (max-width:1199px) {
      .visible-md-inline {
         display: inline !important
      }
   }

   @media(min-width:992px) and (max-width:1199px) {
      .visible-md-inline-block {
         display: inline-block !important
      }
   }

   @media(min-width:1200px) {
      .visible-lg {
         display: block !important
      }

      table.visible-lg {
         display: table !important
      }

      tr.visible-lg {
         display: table-row !important
      }

      th.visible-lg,
      td.visible-lg {
         display: table-cell !important
      }
   }

   @media(min-width:1200px) {
      .visible-lg-block {
         display: block !important
      }
   }

   @media(min-width:1200px) {
      .visible-lg-inline {
         display: inline !important
      }
   }

   @media(min-width:1200px) {
      .visible-lg-inline-block {
         display: inline-block !important
      }
   }

   @media(max-width:767px) {
      .hidden-xs {
         display: none !important
      }
   }

   @media(min-width:768px) and (max-width:991px) {
      .hidden-sm {
         display: none !important
      }
   }

   @media(min-width:992px) and (max-width:1199px) {
      .hidden-md {
         display: none !important
      }
   }

   @media(min-width:1200px) {
      .hidden-lg {
         display: none !important
      }
   }

   .visible-print {
      display: none !important
   }

   @media print {
      .visible-print {
         display: block !important
      }

      table.visible-print {
         display: table !important
      }

      tr.visible-print {
         display: table-row !important
      }

      th.visible-print,
      td.visible-print {
         display: table-cell !important
      }
   }

   .visible-print-block {
      display: none !important
   }

   @media print {
      .visible-print-block {
         display: block !important
      }
   }

   .visible-print-inline {
      display: none !important
   }

   @media print {
      .visible-print-inline {
         display: inline !important
      }
   }

   .visible-print-inline-block {
      display: none !important
   }

   @media print {
      .visible-print-inline-block {
         display: inline-block !important
      }
   }

   @media print {
      .hidden-print {
         display: none !important
      }
   }

   body {
      border-top: 3px solid #fc0
   }

   .error_none {
      display: none
   }

   .t2astrologer {
      display: none
   }

   .error_inline {
      display: inline
   }

   .inline_block_all {
      display: inline-block
   }

   .HideBoxPhone {
      display: -webkit-inline-box !important
   }

   .HideBoxDesktp {
      display: none
   }

   .HideTopDesktp {
      display: none
   }

   .HideTopPhone {
      display: block
   }

   .talkToAstrologer {
      display: none
   }

   .talkToAstrologerA {
      display: none
   }

   .P0 {
      padding: 0 !important
   }

   .M0 {
      margin: 0 !important
   }

   .PaddingTop {
      padding: 30px 0
   }

   .SearchIcon {
      margin-left: 15px;
      height: 34px;
      position: relative;
      top: -11px !important
   }

   .top27 {
      margin-bottom: 23px !important
   }

   .topbtm15 {
      margin-bottom: 15px !important
   }

   .margin0 {
      margin-bottom: 0 !important
   }

   .margin_Rgt10 {
      margin-right: 10px !important
   }

   .marginRgt15 {
      margin-right: 15px
   }

   .marginRgt3 {
      margin-right: 3px
   }

   .top0 {
      margin-top: 0 !important
   }

   .top5 {
      margin-top: 5px
   }

   .topBtm5 {
      margin-bottom: 5px
   }

   .top7 {
      margin-top: 7px
   }

   .top05 {
      margin-top: 5px
   }

   .top10 {
      margin-top: 10px
   }

   .top17 {
      margin-top: 17px
   }

   .top23 {
      margin-top: 23px
   }

   .top30 {
      margin-top: 30px
   }

   .top74 {
      margin-top: 74px
   }

   .whiteBG {
      background: #fff
   }

   .GrayBG {
      background: #fffdf6;
      border-top: 1px solid #e0dbc7
   }

   @media only screen and (max-width:500px) {
      .modal-dialog {
         width: 95% !important
      }

      .modal-dialog_middle {
         margin: 10px auto !important
      }

      .modal-dialog_middle h4 {
         font-size: 18px !important
      }

      .modal-dialog_middle .text {
         font-size: 15px !important;
         line-height: 16px
      }
   }

   @media only screen and (max-width:768px) {
      .loyalty_accountBG_Success {
         background-size: 120px 90px !important
      }

      .sticky_offer_Close_a {
         padding: 6px 9px 0 10px !important;
         border-radius: 0 0 100px 100px !important;
         height: 30px;
         text-decoration: none;
         width: 30px;
         color: #333;
         font-weight: bold;
         right: 15px;
         top: 0
      }

      .sticky_offer_Close {
         position: absolute;
         background: #fc0;
         padding: 6px 2px 0 0 !important;
         border-radius: 0 0 100px 100px !important;
         height: 30px;
         text-decoration: none;
         width: 30px;
         color: #333;
         font-weight: bold;
         right: 15px;
         top: 1px
      }

      .online_queue {
         background-size: 31% !important;
         background-position: right !important;
         width: 80px;
         margin-top: 0 !important;
         padding: 3px 22px 1px 2px !important;
         font-size: 12px !important;
         position: absolute;
         right: 5px;
         bottom: 10px;
         border-radius: 3px !important;
         line-height: 15px;
         font-weight: bold
      }

      .text_left_modal {
         text-align: center !important
      }

      .sticky_queue_btn {
         float: left !important
      }

      .sticky_queue {
         width: 100% !important;
         margin: 0 auto;
         position: fixed;
         left: 0;
         right: 0;
         bottom: 0 !important;
         background: #fc0;
         z-index: 9999;
         border-radius: 0 !important;
         border: 1px solid #cba200
      }

      .sticky_queue>div>span {
         font-size: 13px;
         display: block
      }

      .sticky_queue>div {
         text-align: left !important;
         line-height: 17px !important;
         font-size: 15px !important;
         color: #333;
         height: auto;
         padding-top: 10px;
         margin-bottom: 3px
      }

      .fontLoy24 {
         font-size: 18px !important
      }

      .potli_coin {
         width: 60px !important;
         height: 123px
      }

      .gift_close {
         position: relative !important;
         right: -40px !important;
         top: -30px !important;
         width: 65px !important
      }

      .gift_open {
         position: absolute;
         right: 45px !important;
         top: 156px !important;
         width: 143px !important
      }

      .loyalty_message_image {
         margin: 10px 0 10px 10px !important
      }

      .img_profile {
         width: 50px !important;
         height: 50px !important
      }

      .review_mobile {
         margin-bottom: 10px
      }

      .btn_notify {
         font-size: 16px !important;
         line-height: 38px !important;
         margin-top: 0 !important
      }

      .btn_offline {
         font-size: 16px !important;
         line-height: 38px !important;
         margin-top: 0 !important
      }

      .mobileMargin {
         margin: 0 !important;
         padding: 0 !important
      }

      .offer_tile {
         top: 0 !important
      }

      .img_profile {
         position: absolute;
         left: 12px;
         width: 82px;
         height: 82px;
         top: 15px
      }

      .as_profile_tile {
         background: #fff !important;
         padding: 10px 0 0 7px !important;
         position: static !important;
         height: auto !important
      }

      .astrologer_box {
         padding-left: 65px;
         border: 1px solid #dcdcdc !important;
         margin-bottom: 10px !important
      }

      .as_profile_font {
         margin-bottom: 5px !important;
         height: auto !important;
         font-weight: bold
      }

      .as_profile_text {
         padding: 0 !important
      }

      .as_profile_top5 {
         margin-top: 5px !important;
         margin-bottom: 5px;
         font-size: 17px !important
      }

      .offer_price {
         width: 72px !important;
         height: 72px !important;
         background: url('//images.onegodmed.com/onegodmed2017/common/offer_right.png') no-repeat !important;
         position: absolute;
         right: 0 !important;
         top: 0 !important
      }

      .offer_price span {
         color: #333;
         -webkit-transform: rotate(40deg);
         -moz-transform: rotate(40deg);
         -o-transform: rotate(40deg);
         writing-mode: lr-tb;
         position: absolute;
         top: 50%;
         left: 50%;
         margin: -26px -9px -29px -19px;
         line-height: 14px;
         font-weight: bold;
         text-align: center;
         font-size: 12px !important;
         width: 60px
      }

      .as_profile_text_ul li {
         border-bottom: none !important;
         font-size: 15px !important;
         margin-bottom: 0 !important;
         line-height: 25px !important
      }

      .online_Callme {
         background-image: none !important;
         margin-top: 0 !important;
         padding: 5px 0 2px 0 !important;
         border-radius: 100px;
         color: #139e5b !important;
         font-size: 15px !important;
         position: absolute;
         right: 5px;
         color: #139e5b !important;
         bottom: 10px;
         border-radius: 3px !important;
         width: 80px
      }

      .online_busy {
         width: 80px;
         margin-top: 0 !important;
         padding: 5px 0 2px 0 !important;
         border-radius: 100px;
         color: #139e5b !important;
         font-size: 15px !important;
         position: absolute;
         right: 5px;
         bottom: 10px;
         border-radius: 3px !important
      }

      .online_offline {
         width: 80px;
         margin-top: 0 !important;
         padding: 5px 0 2px 0 !important;
         border-radius: 100px;
         color: #139e5b !important;
         font-size: 14px !important;
         position: absolute;
         right: 5px;
         bottom: 10px;
         border-radius: 3px !important
      }

      .view_all {
         width: 100%
      }

      .loyalty_accountBG {
         margin-top: 15px !important
      }

      .loyalty_table {
         font-size: 18px !important
      }

      .loyalty_green {
         width: 80px !important;
         padding: 6px 0 5px 0 !important
      }

      .font_rtbs {
         font-size: 13px !important;
         line-height: 18px !important;
         margin-bottom: 5px
      }

      .input_bg {
         background: #fff !important;
         padding: 0 !important;
         border-radius: 0 40px 0 40px
      }

      .home_bg {
         height: auto !important;
         width: 100%;
         padding-bottom: 0 !important;
         background-image: url("//images.onegodmed.com/onegodmed2017/english/images/homepage/home_bg_mobile.jpg") !important
      }

      .home_bg h1 {
         color: #fff;
         font-size: 24px !important;
         margin: 10px 0 0 0 !important;
         line-height: 38px !important
      }

      .home_normal {
         font-size: 19px;
         color: #fff;
         line-height: 27px !important;
         font-weight: 300
      }

      .w55_margin0 {
         margin: 0 auto !important;
         height: 65px !important
      }

      .home_button {
         background: #fff;
         display: block !important;
         line-height: 19px !important;
         padding: 4px;
         height: 110px;
         border-radius: 5px !important;
         text-decoration: none;
         font-size: 14px !important;
         color: #555;
         font-weight: bold;
         text-align: center;
         margin-bottom: 20px
      }

      .owl-nav {
         display: none
      }

      .loyalty_gray {
         padding: 6px 0 5px 0 !important;
         width: 80px !important
      }

      .loyalty_pack_account a {
         width: 115px !important;
         margin-right: 10px !important;
         font-size: 28px !important;
         line-height: 26px !important
      }

      .loyalty_pack_account a span {
         font-size: 16px !important;
         display: block;
         font-weight: 400
      }

      .loyalty_accountBG {
         margin-bottom: 30px !important;
         padding: 10px 10px 20px 10px !important;
         font-size: 24px !important;
         line-height: 32px !important;
         background-size: 100px 80px !important
      }

      .loyalty_button {
         font-size: 20px !important
      }

      .font35 {
         font-size: 25px !important
      }

      .loyalty_pack a {
         width: 40% !important;
         font-size: 22px !important
      }

      .loyalty_message_image {
         width: 15%;
         float: left
      }

      .loyalty_offer {
         background: url(//images.onegodmed.com/onegodmed2017/english/images/loyalty/offer.jpg) center !important;
         background-size: 120% !important;
         font-size: 20px !important;
         height: auto !important;
         padding: 30px 0 10px 20px !important;
         line-height: 10px
      }

      .loyalty_message {
         width: 100% !important;
         margin-top: 15px !important
      }

      .loyalty_message:after {
         border-width: 15px !important;
         margin-left: -15px !important
      }

      .loyalty_message_text {
         background: #fc0 !important;
         border-radius: 0 !important;
         height: auto !important;
         padding: 0 !important;
         position: static !important;
         width: auto !important;
         margin-top: 15px;
         right: -20px !important;
         position: relative !important;
         top: 0 !important;
         font-size: 22px !important
      }

      .text_right_center {
         text-align: center !important;
         border-top: 1px solid #eee;
         padding-top: 15px
      }

      .mobilebreak {
         display: block;
         margin-top: 9px
      }

      .height30 {
         height: auto !important
      }

      .m_right30 {
         margin-right: 0 !important
      }

      .w330 {
         width: auto !important;
         float: none !important
      }

      .top30btm {
         margin: 15px 0 14px 0 !important
      }

      .phone14 {
         font-size: 14px !important
      }

      .box_height465 {
         height: auto !important
      }

      .numerologyNum {
         display: none !important
      }

      .dropdownIcon {
         margin-right: 3px !important
      }

      .dropbtn {
         padding: 0 0 !important
      }

      .paddingMobile0 {
         padding: 0 !important
      }

      .textleftmobile {
         text-align: left !important
      }

      .sign-modal-dialog {
         width: 90% !important;
         margin: 30px auto
      }

      .sign_up_close {
         top: -17px !important
      }

      .sign_up_form input {
         height: 45px !important
      }

      .sign_up_form::placeholder {
         color: #bbb
      }

      .sign_up_form:-ms-input-placeholder {
         color: #bbb
      }

      .sign_up_form::-ms-input-placeholder {
         color: #bbb
      }

      .padding_rgt_lft_20 {
         padding: 0 20px
      }

      .w-horo-daily-350 {
         width: auto !important
      }

      .side,
      .middle {
         width: 100%
      }

      .rating_number {
         width: auto !important;
         height: auto !important;
         background: none !important;
         padding-top: 0 !important;
         border-radius: 0 !important;
         float: right;
         margin-top: 0 !important;
         margin-bottom: 0 !important
      }

      .rating_number {
         float: none !important;
         margin-bottom: 20px
      }

      .textcenter {
         text-align: center !important;
         margin-top: 10px;
         font-size: 15px !important;
         padding: 0 10px
      }

      .language_box {
         font-size: 12px !important;
         height: 68px
      }

      .online_astrologer {
         width: 70% !important
      }

      .profile_top_h {
         margin-top: 40px !important;
         display: inline-block
      }

      .t2astrologer {
         display: block
      }

      .font_size_17 {
         font-size: 17px !important
      }

      .mobilefont18 {
         font-size: 15px !important;
         line-height: 34px !important
      }

      .talktostep {
         font-size: 18px !important;
         margin: 10px 0 10px 0 !important
      }

      .balance_responsive {
         font-size: 23px;
         margin-top: 5px !important
      }

      .balance_responsive_a {
         font-size: 22px;
         line-height: 25px;
         margin-top: 20px !important
      }

      .font12Mobile {
         font-size: 12px
      }

      .P0Mobile {
         padding: 0 !important
      }

      .table_payment td {
         padding: 5px 10px !important
      }

      .marginTop {
         margin-top: 5px !important
      }

      .astrowallet {
         padding: 10px 10px 10px 10px !important;
         line-height: 10px;
         font-size: 12px !important
      }

      .astrowallet h3 {
         padding: 10px 10px 10px 10px !important;
         line-height: 10px;
         font-size: 12px !important
      }

      .paddingmobile0 {
         padding: 0 !important;
         border-top: 0 !important
      }

      .packmobile {
         margin: 0 0 20px 0;
         padding: 0 0;
         text-align: center;
         display: block;
         border: 1px solid #dfdfdf
      }

      .packmobile a {
         text-decoration: none !important;
         background: #fff;
         display: block;
         padding: 15px 0 10px 0
      }

      .packmobile a:hover {
         background: #fc0;
         color: #333 !important
      }

      .packmobile_active {
         background: #fc0 !important
      }

      .packmobile h2 {
         margin: 0;
         padding: 0;
         text-transform: uppercase;
         font-size: 12px !important;
         color: #333
      }

      .packmobile span {
         display: block;
         font-size: 20px;
         margin-top: 4px;
         color: #333
      }

      .packborderleft {
         border-left: none
      }

      .paddingtb20 {
         padding: 5px 0 !important
      }

      .border_t2a {
         left: 50px
      }

      .HideBoxPhone {
         display: none !important
      }

      .HideBoxDesktp {
         display: -webkit-inline-box
      }

      .navbar-collapse.in {
         overflow-y: auto;
         height: 400px !important
      }

      .TopHeadingGrayH {
         font-size: 26px !important
      }

      .profileOnline {
         font-size: 14px !important
      }

      .text_left_responsive {
         text-align: left !important
      }

      .text_justify_responsive {
         text-align: justify !important
      }

      .download_app {
         width: auto !important;
         display: unset;
         margin-top: 10px !important;
         text-align: center;
         margin-bottom: 10px
      }

      .inline_block_mo {
         display: -webkit-inline-box
      }

      .top10Responsive {
         margin-top: 10px
      }

      .font30 {
         font-size: 30px !important
      }

      h1,
      h2,
      h3 {
         font-size: 25px !important
      }

      .height120 {
         height: auto !important
      }

      .box_height420 {
         height: auto !important
      }

      .height150 {
         height: auto !important
      }

      .TopHeadingGray h3 {
         font-size: 24px !important;
         margin: 0 0 15px 0 !important
      }

      .box_height380 {
         height: auto !important
      }

      .height200 {
         height: auto !important
      }

      .fontRes30 {
         font-size: 30px !important
      }

      .boxHeight300 {
         height: auto !important
      }

      .margin210 {
         margin-top: 30px !important
      }

      .bannerForm {
         position: relative !important;
         width: 80%;
         margin: 20px;
         top: 20px !important
      }

      .arrow_box {
         background: none !important;
         border-radius: 0;
         text-align: center;
         padding: 5px 0 0 0 !important;
         color: #a94442 !important;
         margin-top: 10px !important;
         font-size: 14px !important;
         position: static !important;
         bottom: -12px;
         right: 14px;
         border: 1px solid #fff !important;
         font-weight: normal
      }

      .SearchExpert_a {
         background: #fff !important;
         padding: 15px 0 0 0 !important;
         position: static !important;
         bottom: 0;
         border-radius: 0 !important;
         -webkit-transition: all .5s ease;
         transition: all .5s ease;
         -webkit-transform: translateY(-2px);
         transform: translateY(-2px);
         -webkit-box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
         box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08)
      }

      .SearchExpert_a span {
         color: #a94442 !important
      }

      .SearchExpert_a a {
         color: #333
      }

      .Search_heading {
         margin-top: 0 !important
      }

      .box_heading {
         text-align: center;
         padding: 10px 5px;
         margin-top: 0 !important
      }

      .wallet_text {
         display: block;
         margin-top: 10px
      }

      .astrologer_profile {
         text-align: left;
         padding: 10px !important
      }

      .mobile_star {
         margin: 0
      }

      .mobile_font_star {
         font-size: 17px !important;
         margin-top: 10px !important
      }

      .profile_text {
         font-size: 17px !important;
         margin: 10px 0 0 0 !important
      }

      .profile_img {
         width: 90px !important;
         height: 90px !important;
         border: 2px solid #fff !important;
         position: relative;
         top: 0 !important;
         margin: 5px 0 !important
      }

      .profile_tag li {
         padding: 10px 10px !important;
         font-size: 16px !important;
         line-height: 30px
      }

      .profile_tag li img {
         margin-right: 5px !important;
         width: 20px !important
      }

      .panel-heading {
         padding: 10px
      }

      .panel-heading.active span:before {
         -webkit-transform: rotate(180deg);
         -moz-transform: rotate(180deg);
         transform: rotate(180deg)
      }

      .affix {
         background: #fff !important
      }

      .RightMenu li a {
         font-size: 13px !important
      }

      .RightMenu select {
         border: 1px solid #999 !important;
         color: #999;
         border-radius: 50px;
         outline: none;
         position: relative;
         text-transform: uppercase;
         font-weight: bold;
         margin-top: 10px;
         padding: 5px 0 3px 6px;
         font-size: 13px
      }

      .RightMenu li {
         margin-bottom: 0 !important
      }

      .PaddingTop20desktop {
         padding: 0 0 !important
      }

      .text_center {
         text-align: left !important
      }

      .ReadingTile h3 {
         font-size: 35px !important
      }

      .pop_button {
         right: 0 !important;
         top: 0 !important;
         z-index: 99999999;
         opacity: 1 !important
      }

      .logoCenter {
         text-align: center;
         border-bottom: none !important;
         padding-bottom: 10px !important
      }

      .sunsign_menu {
         display: none
      }

      .sunsign_menu li {
         width: 33%
      }

      .sunsign_menu li a {
         height: auto !important
      }

      .SearchExpert select {
         padding: 3px 10px !important
      }

      .SearchExpert input {
         padding: 2px 10px !important;
         margin-bottom: 5px
      }

      .PaddingAuto {
         padding: 0
      }

      .SearchExpert span {
         font-size: 12px !important
      }

      .PaddingTop30 {
         padding: 10px 0 15px 0 !important
      }

      .logoCenter {
         text-align: center
      }

      .logoCenter img {
         width: 30%
      }

      .PartnersICON img {
         width: 90%
      }

      .SearchExpert {
         background: #333 !important;
         position: static !important;
         padding: 15px 0 25px 0;
         bottom: 20px;
         border-radius: 0 !important
      }

      .box_height {
         height: auto !important
      }

      .SearchExpert {
         padding-bottom: 50px !important
      }

      .sunsign_menu {
         height: auto !important
      }

      .HideTopPhone {
         display: none
      }

      .HideTopDesktp {
         display: block
      }

      .RightMenu li {
         float: left;
         list-style: none;
         background: none;
         padding-left: 17px;
         margin-left: 0;
         line-height: 18px !important
      }

      .top30_phone {
         margin-top: 30px !important
      }

      .top15_phone {
         margin-top: 15px
      }
   }

   @media only screen and (max-width:992px) {
      .hidetab {
         display: none
      }

      .talkToAstrologerA {
         padding: 0 0 0 17px;
         text-align: left;
         display: -webkit-inline-box;
         float: left;
         position: relative;
         top: -1px
      }

      .talkToAstrologer {
         padding: 12px 0 0 0;
         text-align: left;
         display: -webkit-inline-box
      }

      .sunsign_menu {
         height: auto !important
      }

      .box_height {
         height: auto !important
      }

      .sunsign_menu li {
         float: left;
         width: 25%
      }

      .sunsign_menu li a {
         border-bottom: none !important
      }

      .sunsign_menu {
         height: auto !important
      }

      .logoCenter {
         text-align: center;
         border-bottom: 1px solid #f3f0f0;
         padding-bottom: 30px
      }

      .SearchExpert {
         padding: 7px 0 20px 0 !important;
         position: static !important;
         margin-top: 10px;
         border-radius: 0 !important
      }

      .SearchExpert select {
         padding: 3px 10px !important
      }

      .SearchExpert input {
         padding: 2px 10px !important;
         margin-bottom: 5px
      }

      .PaddingAuto {
         padding: 0
      }

      .SearchExpert span {
         font-size: 12px !important
      }

      .PaddingTop30 {
         padding: 10px 0 15px 0 !important
      }

      .navbar-header {
         float: none
      }

      .navbar-left,
      .navbar-right {
         float: none !important
      }

      .navbar-toggle {
         display: block
      }

      .navbar-collapse {
         border-top: 1px solid transparent;
         box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1)
      }

      .navbar-fixed-top {
         top: 0;
         border-width: 0 0 1px
      }

      .navbar-collapse.collapse {
         display: none !important
      }

      .navbar-nav {
         float: none !important;
         margin-top: 7.5px
      }

      .navbar-nav>li {
         float: none
      }

      .navbar-nav>li>a {
         padding-top: 10px;
         padding-bottom: 10px
      }

      .collapse.in {
         display: block !important
      }
   }

   .box_height465 {
      height: 465px
   }

   .box_height265 {
      height: 265px
   }

   .box_height {
      height: 400px
   }

   .resize_none {
      resize: none
   }

   .img {
      width: 100%;
      height: 100% !important
   }

   .Height86 {
      height: 86px;
      margin-bottom: 15px
   }

   .whiteColor {
      color: #fff;
      line-height: 27px;
      font-size: 22px
   }

   p {
      line-height: 23px
   }

   .profileOrg {
      background: #999;
      padding: 5px;
      color: #fff
   }

   .profile {
      background: #fff;
      padding: 5px
   }

   .profile img {
      width: 70px;
      height: 70px !important
   }

   .profile h4 {
      height: 37px
   }

   .profile .star {
      color: #fc0
   }

   .social_icon {
      padding: 0;
      margin: 0
   }

   .social_icon a {
      list-style: none;
      display: inline-flex;
      margin-top: 3px
   }

   .social_icon img {
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 0 5px;
      margin: 5px 5px 0 0;
      width: 60px
   }

   .highlight {
      padding: 9px 14px;
      margin-bottom: 14px;
      background-color: #fffdf6;
      border: 1px solid #fc0;
      border-radius: 4px
   }

   .top75 {
      margin-top: 75px
   }

   .SearchExpert {
      padding: 15px 0 15px 0;
      padding: 7px 0 15px 0;
      background: #333;
      position: absolute;
      bottom: 10px;
      border-radius: 6px;
      border: 1px solid #eee
   }

   .SearchExpert span {
      font-size: 17px;
      display: -webkit-box;
      color: #fff !important;
      margin: 10px 0 10px 0;
      text-transform: uppercase
   }

   .SearchExpert select {
      width: 100%;
      background: 0 0;
      outline: none;
      border: 1px solid #ccc;
      padding: 10px;
      font-size: 17px;
      color: #333
   }

   .selectWebkit {
      border-radius: 0 !important
   }

   .SearchExpert select option {
      color: #333
   }

   .SearchExpert .input {
      width: 100%;
      background: none;
      outline: none;
      border: 1px solid #ccc;
      border-radius: 0;
      padding: 9px;
      font-size: 17px;
      color: #fff
   }

   .discussed_btn {
      background: #fc0;
      padding: 6.5px;
      color: #333;
      font-size: 22px;
      position: relative;
      top: 29px;
      width: 100%;
      outline: none;
      border: none;
      border-radius: 25px
   }

   .discussed_btn:hover {
      background: #fc0
   }

   .HoroscopeSign {
      font-size: 16px;
      text-align: center
   }

   .HoroscopeSign h6 small {
      font-size: 11px;
      color: #000
   }

   .ariesColor {
      color: #b31013
   }

   .taurusColor {
      color: #8a38a6
   }

   .geminiColor {
      color: #b5752e
   }

   .cancerColor {
      color: #4a3173
   }

   .leoColor {
      color: #b75322
   }

   .virgoColor {
      color: #88475d
   }

   .libraColor {
      color: #ac388d
   }

   .scorpioColor {
      color: #c29246
   }

   .sagittariusColor {
      color: #2f7a8d
   }

   .capricornColor {
      color: #4a6dad
   }

   .aquariusColor {
      color: #9b6f4c
   }

   .piscesColor {
      color: #465a7b
   }

   .BlackColor {
      color: #000
   }

   .WhiteColor {
      color: #fff !important
   }

   .WarningColor {
      color: #8a6d3b !important
   }

   .GrayColor {
      color: #333 !important
   }

   .GrayColor_light {
      color: #888 !important
   }

   .GrayColor_light_a {
      color: #737373
   }

   .LightGrayColor {
      color: #999
   }

   .DarkGrayBG {
      background: #efefef;
      border-top: 1px solid #dcdcdc;
      border-bottom: 1px solid #dcdcdc
   }

   .GreenColor {
      color: #47af5a
   }

   .YellowColor {
      color: #fc0
   }

   .RedColor {
      color: #e05d52
   }

   .TopHeading {
      border-bottom: 1px solid #f2f2f2;
      position: relative;
      margin-bottom: 50px;
      padding-bottom: 10px;
      text-align: center
   }

   .TopHeading img {
      position: absolute;
      bottom: -23px
   }

   .TopHeading p {
      font-family: 'Roboto', sans-serif;
      font-size: 25px;
      color: #757575;
      margin-bottom: 30px
   }

   .TopHeadingGray {
      border-bottom: 1px solid #dcdcdc;
      position: relative;
      margin-bottom: 40px;
      padding-bottom: 10px;
      text-align: center
   }

   .TopHeadingGray h2 {
      text-transform: uppercase;
      margin: 40px 0 20px;
      padding-bottom: 3px;
      font-size: 44px;
      color: #999
   }

   .TopHeadingGray h2 span {
      color: #fc0
   }

   .TopHeadingGray h3 {
      text-transform: uppercase;
      margin: 40px 0 20px;
      padding-bottom: 3px;
      font-size: 44px;
      color: #999
   }

   .TopHeadingGray h3 span {
      color: #fc0
   }

   .TopHeadingGray h1 {
      text-transform: uppercase;
      margin: 40px 0 20px;
      padding-bottom: 3px;
      font-size: 45px;
      color: #999
   }

   .TopHeadingGray h1 span {
      color: #f9cd00
   }

   .TopHeadingGrayH {
      text-transform: uppercase;
      margin: 40px 0 20px;
      padding-bottom: 3px;
      font-size: 45px;
      color: #999
   }

   .TopHeadingGrayH span {
      color: #f9cd00
   }

   .TopHeadingGray p {
      font-size: 25px;
      color: #757575
   }

   .TopHeadingGray p span {
      font-size: 15px;
      color: #565656
   }

   .RightMenu {
      font-size: 15px;
      color: #8c8c8c;
      position: relative;
      top: -5px;
      display: table-footer-group
   }

   .RightMenu ul {
      margin: 0 !important;
      padding: 0
   }

   .borderNone {
      border: none !important;
      background: none !important
   }

   .RightMenu li {
      float: left;
      list-style: none;
      margin-left: 0;
      padding-left: 7px;
      line-height: 47px
   }

   .RightMenu li select {
      border: none;
      padding: 5px;
      border-radius: 2px;
      color: #999;
      outline: none;
      position: relative;
      top: 1px;
      text-transform: uppercase;
      font-weight: bold;
      cursor: pointer;
      height: 30px
   }

   .RightMenu li a {
      color: #999;
      font-size: 15px;
      font-weight: bold;
      position: relative;
      top: 1px
   }

   .RightMenu li a:hover {
      color: #fc0;
      text-decoration: none
   }

   .linktile {
      margin: 0;
      padding: 0
   }

   .linktile ul {
      margin: 0;
      padding: 0
   }

   .linktile li {
      list-style: none;
      line-height: 19px;
      border-bottom: 1px solid #f3f3f3;
      padding: 6px 0
   }

   .linktile li a {
      list-style: none;
      color: #333
   }

   .linktile li a:hover {
      text-decoration: none;
      text-decoration: underline;
      color: #333
   }

   .linkactive {
      list-style: none;
      color: #8a6d3b !important;
      text-decoration: underline
   }

   .featured_asrtologer {
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      width: 100%;
      height: 100%;
      text-align: center;
      margin-top: 120px;
      background-attachment: fixed;
      position: relative
   }

   .featured_asrtologer img {
      position: relative;
      top: -73px
   }

   .featured_heading {
      font-size: 17px;
      top: 1px;
      display: inline-block;
      line-height: 56px;
      margin-bottom: 50px
   }

   .featured_heading h2 {
      margin: -40px 0 10px;
      padding-bottom: 3px;
      font-size: 45px;
      color: #fc0
   }

   .featured_heading h2 span {
      margin: -40px 0 10px;
      padding-bottom: 3px;
      font-size: 45px;
      color: #999
   }

   .featured_heading p {
      margin: 10px 0 15px;
      padding-bottom: 0;
      font-size: 28px;
      color: #999
   }

   .featured_tile {
      width: 95%;
      background: #f5f5f5;
      text-align: center;
      margin: 60px 0 30px 0;
      position: relative
   }

   .featured_tile h3 {
      color: #333;
      font-size: 18px;
      font-weight: 600
   }

   .featured_tile p {
      font-size: 16px;
      color: #616161
   }

   .featured_tile a {
      margin-bottom: 20px;
      display: -webkit-inline-box;
      border: 1px solid #333;
      padding: 5px 21%;
      border-radius: 20px;
      text-transform: uppercase;
      color: #333;
      font-size: 18px;
   }

   .featured_tile a:hover {
      background: #fc0;
      color: #333;
      text-decoration: none
   }

   .featured_tile img {
      position: relative;
      top: -59px;
      width: 110px;
      height: 110px;
      border-radius: 110px;
      border: 4px solid #b8b8b8
   }

   .featured_tile span {
      height: 10px
   }

   .height50 {
      height: 50px
   }

   .height60 {
      height: 60px
   }

   .affix {
      border-bottom: 2px solid #fc0;
      background: #fff url(https://images.onegodmed.com/onegodmed2017/cms/menu_logo.png) 10px 4px no-repeat
   }

   .PartnersBG {
      background: #fafafa
   }

   .PartnersICON {
      height: 56px;
      margin-bottom: 40px;
      line-height: 100px;
      display: list-item;
      list-style: none
   }

   .ReadingTile {
      width: 100%;
      height: 130px;
      background: #fffef6;
      position: relative
   }

   .ReadingTile img {
      position: absolute;
      top: 0
   }

   .ReadingTile h3 {
      font-size: 45px;
      text-transform: uppercase;
      ;
      position: absolute;
      color: #fc0;
      text-align: center;
      width: 100%;
      margin: 0;
      bottom: -2px
   }

   .carousel-indicators {
      display: none
   }

   .rightLeftIcon {
      float: right;
      position: relative;
      top: -50px;
      left: -20px
   }

   .sunsign_menu {
      margin: 0;
      padding: 0;
      height: 38px;
      border-bottom: 1px solid #e7e7e7
   }

   .sunsign_menu ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden
   }

   .sunsign_menu li {
      float: left
   }

   .sunsign_menu li a {
      display: block;
      border: 1px solid #e7e7e7;
      border-left: none;
      text-align: center;
      line-height: 5px;
      text-decoration: none;
      border-bottom: none
   }

   .border_last_none {
      border-right: none !important
   }

   .modal-dialog_middle {
      width: 400px;
      margin: 80px auto
   }

   .modal-dialog_middle h4 {
      font-size: 24px
   }

   .modal-dialog_middle label {
      font-weight: 400
   }

   .modal-dialog_middle .text {
      font-size: 17px
   }

   .modal-dialog_middle .sign {
      font-size: 15px
   }

   .size17 {
      font-size: 17px
   }

   .articleTile img {
      width: 100%;
      height: 130px
   }

   .height200 {
      height: 200px
   }

   .height180 {
      height: 180px
   }

   .height150 {
      height: 150px
   }

   .height120 {
      height: 120px
   }

   .height100 {
      height: 100px
   }

   .height90 {
      height: 90px
   }

   .height30 {
      height: 30px
   }

   .CarouselButton {
      font-size: 25px;
      color: #fff;
      position: relative;
      left: -20px;
      margin-left: 20px
   }

   .CarouselButton:hover {
      color: #fff !important;
      text-decoration: none
   }

   .TalkToAstrologer {
      color: #333 !important;
      font-weight: bold;
      border: 1px solid #fc0;
      border-radius: 25px;
      line-height: 18px !important
   }

   .dropbtn {
      background-color: #fff;
      color: #8c8c9a;
      padding: 0 5px;
      font-size: 15px;
      border: none;
      cursor: pointer
   }

   .dropdown_myaccount {
      position: relative;
      display: inline-block;
      border: 1px solid #e8e8e8;
      padding: 0 6px;
      border-radius: 3px;
      line-height: 37px
   }

   .dropdownIcon {
      margin-right: 10px
   }

   .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 170px;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, .2);
      z-index: 9999
   }

   .back-to-top {
      cursor: pointer;
      position: fixed;
      bottom: 0;
      right: 20px;
      display: none;
      border-radius: inherit;
      padding: 8px 13px 12px 13px
   }

   .dropdown-content a {
      color: #000;
      padding: 0 16px;
      text-decoration: none;
      display: block
   }

   .dropdown:hover .dropdown-content {
      display: block
   }

   .PaddingTop30 {
      padding: 30px 0
   }

   .PaddingTop20desktop {
      padding: 20px 0
   }

   .normal {
      font-weight: normal !important
   }

   .width50 {
      width: 50%
   }

   .center {
      text-align: center !important
   }

   .pop_button {
      background: #fc0 !important;
      padding: 10px !important;
      float: right !important;
      text-align: right;
      border-radius: 6px 0;
      position: absolute;
      right: -32px;
      top: 4px;
      opacity: 1;
      text-shadow: none
   }

   .position70 {
      top: 70px !important
   }

   .tab_bg {
      background: #fffef6;
      color: #333;
      border-bottom: 1px solid #ddd !important
   }

   .font11 {
      font-size: 11px
   }

   .font13 {
      font-size: 13px
   }

   .font18 {
      font-size: 18px
   }

   .font20 {
      font-size: 20px
   }

   .font24 {
      font-size: 24px
   }

   .font16 {
      font-size: 16px !important
   }

   .font17 {
      font-size: 17px
   }

   .font14 {
      font-size: 14px
   }

   .position_sta {
      position: static !important
   }

   .numerology_Num {
      font-size: 24px;
      color: #565656;
      margin-top: 20px
   }

   .numerology_Num span {
      color: #e47c22;
      font-weight: bold;
      font-size: 27px
   }

   .cursor-pointer {
      cursor: pointer !important
   }

   .cursor-pointer a {
      padding: 8px 7px !important
   }

   hr {
      border-top: 1px solid #f0f0f0 !important;
      margin-top: 13px
   }

   .nav {
      height: 43px
   }

   .nav-tabs>li.active>a,
   .nav-tabs>li.active>a:hover,
   .nav-tabs>li.active>a:focus {
      color: #333;
      background-color: #fffef6;
      border: 1px solid #f7cf00;
      border-bottom-color: transparent;
      cursor: default
   }

   .NumerologyText {
      font-weight: bold;
      color: #333;
      background: #fc0;
      padding: 9px 10px 5px 10px;
      display: -webkit-inline-box
   }

   .HoroZodic img {
      width: 68px;
      height: 68px
   }

   .tabHoroscope {
      height: auto
   }

   .tabHoroscope li {
      width: 50%;
      text-align: center;
      text-transform: uppercase;
      font-size: 18px
   }

   .WhiteIcon {
      position: absolute;
      bottom: -22px;
      left: 0;
      right: 0;
      margin: auto;
      background: #fff;
      padding: 0 15px
   }

   .GrayIcon {
      position: absolute;
      bottom: -22px;
      left: 0;
      right: 0;
      margin: auto;
      background: #f5f5f5;
      padding: 0 15px
   }

   .LightGrayIcon {
      position: absolute;
      bottom: -22px;
      left: 0;
      right: 0;
      margin: auto;
      background: #fafafa;
      padding: 0 15px
   }

   .LightYellowIcon {
      position: absolute;
      bottom: -22px;
      left: 0;
      right: 0;
      margin: auto;
      padding: 0 15px
   }

   .NumerologyImg {
      position: absolute;
      bottom: -25px;
      background: #fffdf7;
      margin-left: -30px
   }

   .imgHei {
      height: 50px
   }

   .new_gif {
      position: absolute;
      top: 0;
      left: 16px
   }

   .highlight2018 {
      background: #fc0;
      height: 36px;
      border-radius: 60px !important;
      border: 1px solid #d4ac01 !important
   }

   .highlight2018:hover {
      background: #fc0 !important
   }

   .line35 {
      line-height: 35px !important
   }

   .line27 {
      line-height: 27px !important
   }

   .line21 {
      line-height: 21px !important
   }

   .block {
      display: block
   }

   .height500 {
      height: 500px
   }

   .top90 {
      margin-top: 90px
   }

   .top0position {
      top: 0
   }

   .table_payment td {
      padding: 15px 10px !important;
      color: #999;
      border: 1px solid #e0dbc7 !important
   }

   .background_yellow {
      background: #fffdf6
   }

   .payment_search {
      width: 70%;
      padding: 13px 10px 10px 50px;
      border: 1px solid #e0dbc7;
      outline: none;
      font-size: 16px;
      border-radius: 25px 0 0 25px
   }

   .payment_search_btn_disabled {
      width: 30%;
      background: #999;
      font-size: 17px;
      text-align: center;
      text-transform: uppercase;
      padding: 14px 9px 9px 5px;
      border-radius: 0 25px 25px 0;
      text-decoration: none;
      border: none;
      color: #e6e6e6;
      cursor: default
   }

   .payment_search_btn_disabled:hover {
      color: #e6e6e6;
      text-decoration: none !important
   }

   .CloseIcon {
      position: absolute;
      top: 9px;
      left: 10px;
      background: #fc0;
      padding: 4px 7px 9px 10px;
      border-radius: 70px;
      color: #333;
      line-height: 25px;
      width: 30px;
      height: 30px;
      cursor: pointer
   }

   .CloseIcon:hover {
      background: #cea505
   }

   .payment_search_btn {
      width: 30%;
      background: #fc0;
      font-size: 17px;
      text-align: center;
      border: none;
      text-transform: uppercase;
      padding: 14px 9px 9px 5px;
      border-radius: 0 25px 25px 0;
      text-decoration: none
   }

   .payment_search_btn:hover {
      text-decoration: none
   }

   .fixedpaymet {
      position: fixed;
      bottom: 0;
      border-radius: 0 !important
   }

   .text_center {
      text-align: center
   }

   .consult_now {
      font-size: 19px !important;
      border: 1px solid #fc0;
      color: #737373 !important;
      text-transform: none !important;
      padding: 14px 20px 10px 20px;
      border-radius: 50px;
      text-decoration: none !important
   }

   .consult_now:hover {
      background: #ececec
   }

   .astrologer_panel a:before {
      content: "?";
      float: right;
      transition: all .5s;
      font-weight: normal;
      font-size: 12px;
      color: #cecece
   }

   .panel_heading {
      background: #fff;
      color: #999;
      border: 1px solid #f0f0f0;
      border-radius: 0 !important;
      margin: 0 !important;
      box-shadow: 0 0 0;
      border-bottom: none
   }

   .panel_heading:last-child {
      border-bottom: 1px solid #f0f0f0
   }

   .panel_heading .checkbox {
      margin-top: 0;
      margin-bottom: 0;
      padding: 1px;
      line-height: 25px
   }

   .panel_heading a {
      font-size: 17px;
      color: #999;
      line-height: 50px;
      font-weight: normal;
      text-decoration: none !important
   }

   .panel_heading a:hover {
      color: #999
   }

   .secureImg {
      text-align: left;
      float: left;
      margin-right: 10px
   }

   .Padding10 {
      padding: 0 10px
   }

   .PaddingFour15 {
      padding: 15px
   }

   .Search_input {
      height: 41px;
      border-radius: 30px 0 0 30px
   }

   .searchleft8 {
      margin-left: -8px;
      color: #999;
      border-radius: 0 30px 30px 0;
      font-size: 17px;
      height: 41px;
      padding-top: 10px
   }

   .rightSection {
      border-bottom: 1px solid #f0f0f0;
      padding: 10px 0;
      margin-bottom: 10px
   }

   .profile_icon {
      width: 20px !important;
      height: 20px !important;
      margin-right: 5px !important;
      margin-top: -5px
   }

   .call_action_icon {
      width: 29px !important;
      height: 29px !important;
      margin-bottom: 5px;
      margin-top: 10px
   }

   .astroBg {
      background: #fffefa
   }

   .call_action {
      border-top: 1px solid #f0f0f0;
      margin-top: 10px
   }

   .busyaction {
      color: #e05d52 !important;
      font-size: 12px;
      text-transform: uppercase;
      text-decoration: none !important;
      cursor: auto
   }

   .busyaction:hover {
      color: #e05d52 !important
   }

   .onlineaction {
      color: #17a05d !important;
      font-size: 12px;
      text-transform: uppercase;
      text-decoration: none !important
   }

   .onlineaction:hover {
      color: #17a05d !important
   }

   .offlineaction {
      color: #979797 !important;
      font-size: 12px;
      text-transform: uppercase;
      text-decoration: none !important;
      cursor: auto
   }

   .offlineaction:hover {
      color: #979797 !important
   }

   .floatNone {
      float: none
   }

   .Review {
      border: 1px solid #fc0
   }

   .view_all {
      border-radius: 48px;
      position: relative;
      top: -8px;
      padding: 7px 10px 3px 10px;
      text-transform: uppercase;
      font-size: 14px
   }

   .thumbnailNew {
      border-radius: 0 !important;
      border: 1px solid #dfdfdf !important
   }

   .profile_link {
      margin-bottom: 3px;
      display: -webkit-box;
      max-height: 35px;
      text-decoration: none !important
   }

   .filterPhone {
      background: #fff;
      display: block;
      line-height: 46px;
      text-align: center;
      font-size: 19px;
      border-right: 1px solid #f0f0f0;
      text-decoration: none !important;
      text-transform: uppercase;
      padding-top: 6px
   }

   .filterAd {
      border-radius: 48px;
      position: relative;
      top: -8px;
      padding: 7px 10px 3px 10px;
      text-transform: none;
      font-size: 14px;
      margin-top: 10px
   }

   .half {
      position: relative
   }

   .half:before {
      content: "?";
      width: 43%;
      display: block;
      position: absolute;
      overflow: hidden;
      color: #fc0
   }

   .half:after {
      content: "?"
   }

   .half-heart:before {
      content: "?";
      width: 43%;
      display: block;
      position: absolute;
      overflow: hidden;
      color: #999
   }

   .half-heart:after {
      content: "?"
   }

   textarea {
      resize: none
   }

   .commentBox {
      padding: 5px 0 !important
   }

   .commentMain_a {
      background: none
   }

   .commentMain {
      background: #efefef;
      padding: 10px 0;
      border-top: 1px solid #fc0
   }

   .comment_a {
      background: #ffeda3;
      position: relative;
      padding: 9px 10px 5px 10px;
      margin-top: 10px
   }

   .comment_a span {
      width: 0;
      height: 0;
      border-left: 8px solid transparent;
      border-right: 8px solid transparent;
      border-bottom: 12px solid #ffeda3;
      top: -12px;
      position: absolute
   }

   .comment {
      background: #f2f1f1;
      position: relative;
      padding: 9px 10px 5px 10px;
      margin-top: 10px
   }

   .comment span {
      width: 0;
      height: 0;
      border-left: 8px solid transparent;
      border-right: 8px solid transparent;
      border-bottom: 12px solid #f2f1f1;
      top: -12px;
      position: absolute
   }

   .padding_all_10 {
      padding: 10px
   }

   .commentBorder {
      border-top: 1px solid #f1f1f1 !important
   }

   .astrologer_profile {
      padding: 30px 40px;
      height: 288px;
      position: relative
   }

   .font_300 {
      font-weight: 300 !important
   }

   .font_400 {
      font-weight: 400 !important
   }

   .profile_img {
      width: 135px;
      height: 135px;
      border: 4px solid #fff;
      position: relative;
      top: 15px
   }

   .profile_tag {
      margin: 0 !important;
      padding: 0 !important;
      text-align: center;
      font-size: 20px;
      font-weight: 300
   }

   .profile_tag li {
      display: inline;
      display: inline-block;
      padding: 15px;
      border-right: 1px solid #e0e0e0
   }

   .profile_tag li:last-child {
      border-right: none
   }

   .profile_tag li img {
      position: relative;
      top: -5px;
      margin-right: 10px
   }

   .profileOnline {
      position: absolute !important;
      bottom: 20px;
      background: #fc0;
      font-size: 20px;
      color: #333;
      border-radius: 50px;
      padding: 13px 15px 10px 15px
   }

   .profileOnline_a {
      background: #009f63 url(https://images.onegodmed.com/images/online_phone.png) no-repeat 9px 6px;
      color: #fff;
      border-radius: 50px;
      padding: 12px 17px 9px 45px;
      text-decoration: none !important;
      position: relative;
      right: -9px
   }

   .profileOnline_a:hover {
      color: #fff;
      background: #027f50 url(https://images.onegodmed.com/images/online_phone.png) no-repeat 9px 6px
   }

   .profileBusy_a {
      background: #e45b53 url(https://images.onegodmed.com/images/offline_busy.png) no-repeat 9px 6px;
      color: #fff;
      border-radius: 50px;
      padding: 12px 17px 9px 45px;
      text-decoration: none !important;
      position: relative;
      right: -9px
   }

   .profileBusy_a:hover {
      color: #fff;
      background: #ca453d url(https://images.onegodmed.com/images/offline_busy.png) no-repeat 9px 6px
   }

   .profileOffline_a {
      background: #fff url(https://images.onegodmed.com/images/offline_phone.png) no-repeat 9px 6px;
      color: #979797 !important;
      border-radius: 50px;
      cursor: auto;
      padding: 12px 17px 9px 45px;
      text-decoration: none !important;
      position: relative;
      right: -9px
   }

   .profileOffline_a:hover {
      color: #979797 !important;
      background: #fff url(https://images.onegodmed.com/images/offline_phone.png) no-repeat 9px 6px
   }

   .thumbnailYellow:hover {
      border: 1px solid #fc0
   }

   .border_radius5 {
      border-radius: 5px
   }

   .btn_radius {
      border-radius: 50px;
      padding-right: 20px;
      padding-left: 20px
   }

   .wallet_text {
      border: 1px solid #fc0;
      padding: 11px 20px 6px 15px;
      border-radius: 50px;
      display: inline-block
   }

   .Time_Availability_p {
      margin: 0;
      padding: 0
   }

   .Time_Availability_p p {
      color: #999;
      text-align: justify;
      font-size: 17px;
      line-height: 29px
   }

   .checkBoxup {
      position: relative;
      top: -2px
   }

   .kundli_box {
      padding: 15px 0 15px 0;
      font-size: 23px;
      font-weight: 300;
      height: 105px
   }

   .kundli_box span {
      margin-bottom: 7px;
      display: block
   }

   .kundli_link {
      margin-bottom: 0;
      background-color: #fff;
      border: 1px solid #dfdfdf;
      padding: 15px 0
   }

   .kundli_link:hover {
      margin-bottom: 0;
      background-color: #fc0;
      border: 1px solid #dfdfdf;
      padding: 15px 0
   }

   .table-condensed {
      text-align: center;
      margin: 0 0 0 20px
   }

   .table-condensed td {
      text-align: center;
      font-weight: normal
   }

   .minute {
      color: #333;
      background: #efeeee;
      cursor: pointer;
      border: 1px solid #fff
   }

   .minute:hover {
      color: #333;
      background: #fc0
   }

   .hour {
      color: #333;
      background: #efeeee;
      cursor: pointer;
      border: 1px solid #fff
   }

   .hour:hover {
      color: #333;
      background: #fc0
   }

   .second {
      color: #333;
      background: #efeeee;
      cursor: pointer;
      border: 1px solid #fff
   }

   .second:hover {
      color: #333;
      background: #fc0
   }

   .article_tile {
      border: 1px solid #ddd;
      padding: 10px 10px 10px 10px;
      border-radius: 5px;
      margin-bottom: 20px
   }

   .article_tile:hover {
      cursor: pointer;
      border: 1px solid #fc0
   }

   .iching {
      background: url(https://images.onegodmed.com/onegodmed2017/english/images/iching-bg.png) center no-repeat
   }

   .iching_padding {
      padding: 10px 0
   }

   .iching_BG {
      background: #fffdf6 !important
   }

   .tarot_card {
      margin: 10px 0 0 0;
      padding: 0;
      height: 300px
   }

   .tarot_card li {
      float: left;
      position: relative;
      margin-left: -112px;
      list-style: none;
      background: url(https://images.onegodmed.com/onegodmed2017/english/images/cms/tarot/cards/sample/pick-tarot-show.jpg) no-repeat;
      width: 135px;
      height: 194px;
      cursor: pointer;
      right: -112px
   }

   .tarot_card li:hover {
      float: left;
      position: relative;
      margin-left: -112px;
      list-style: none;
      background: url(https://images.onegodmed.com/onegodmed2017/english/images/cms/tarot/cards/sample/pick-tarot-show.jpg) no-repeat;
      width: 135px;
      height: 194px;
      cursor: pointer;
      right: -112px;
      top: -10px
   }

   .transform_none {
      text-transform: none !important
   }

   .btn_radius {
      border-radius: 50px;
      padding-right: 20px;
      padding-left: 20px
   }

   .box_height420 {
      height: 420px
   }

   .scrollable_2::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
      border-radius: 10px;
      background-color: #f5f5f5;
      cursor: pointer
   }

   .scrollable_2::-webkit-scrollbar {
      width: 6px;
      cursor: pointer;
      background-color: #f5f5f5
   }

   .scrollable_2::-webkit-scrollbar-thumb {
      border-radius: 10px;
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
      background-color: #fc0;
      cursor: pointer
   }

   .kundli_box_a {
      padding: 15px 0 15px 0;
      font-size: 23px;
      font-weight: 300;
      height: 105px;
      color: #fc0 !important;
      font-weight: bold;
      background: #333 !important
   }

   .SearchExpert_a {
      background: #fff;
      padding: 0 0 0 0;
      position: relative;
      top: -60px;
      border-radius: 6px;
      -webkit-transition: all .5s ease;
      transition: all .5s ease;
      -webkit-transform: translateY(-2px);
      transform: translateY(-2px);
      -webkit-box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
      box-shadow: 0 10px 20px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
      z-index: 99
   }

   .discussed_btn_a {
      background: #fc0;
      padding: 6.5px;
      color: #333;
      font-size: 22px;
      position: relative;
      width: 100%;
      outline: none;
      border: none;
      border-radius: 25px
   }

   .Search_heading {
      margin: 80px 0 20px
   }

   .padding_left_0 {
      padding-left: 0
   }

   .homeSignUp {
      display: none;
      border-radius: 5px 0 0 5px;
      position: fixed;
      right: 0;
      z-index: 9999;
      top: 60px
   }

   .arrow_box_a {
      border-radius: 2px;
      text-align: center;
      color: #a94442 !important;
      font-size: 11px !important;
      position: absolute;
      bottom: -13px;
      right: 14px;
      font-weight: normal
   }

   .arrow_box {
      background: #f2dede;
      border-radius: 2px;
      text-align: center;
      padding: 1px 8px;
      color: #a94442 !important;
      font-size: 12px !important;
      position: absolute;
      bottom: -12px;
      right: 14px;
      border: 1px solid #ebccd1;
      font-weight: normal
   }

   .arrow_box:after,
   .arrow_box:before {
      bottom: 100%;
      left: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none
   }

   .arrow_box:after {
      border-color: rgba(255, 0, 0, 0);
      border-bottom-color: #f2dede;
      border-width: 5px;
      margin-left: -5px
   }

   .arrow_box:before {
      border-color: rgba(194, 225, 245, 0);
      border-bottom-color: #c2e1f5
   }

   .arrow_box_btn {
      bottom: 15px !important
   }

   .featured_asrtologer_a {
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      width: 100%;
      height: 100%;
      text-align: center;
      margin-top: 40px;
      background-attachment: fixed;
      position: relative
   }

   .bs-callout-warning {
      border-left-color: #fc0 !important;
      padding: 0 20px;
      margin: 10px 0;
      border: 1px solid #eee;
      border-left-width: 5px;
      border-radius: 3px
   }

   .lastfooter {
      background: #333;
      padding: 20px;
      color: #fff;
      text-align: center;
      font-size: 18px
   }

   .BannerMain {
      background-position: center center;
      background-repeat: no-repeat;
      background-size: 100%;
      width: 100%;
      height: 505px;
      position: relative;
      top: 0;
      text-align: center;
      color: #fff !important
   }

   .BannerMain h2 {
      display: -webkit-inline-box;
      font-size: 35px;
      line-height: 55px
   }

   .font40 {
      font-size: 40px
   }

   .boxHeight250 {
      height: 250px
   }

   .boxHeight300 {
      height: 300px
   }

   .boxHeight200 {
      height: 200px
   }

   .tablepadding_5>tbody>tr>td {
      padding: 8px 8px
   }

   .bannerForm {
      position: absolute;
      right: 20px;
      top: 100px;
      background: #fff;
      padding: 10px;
      border-radius: 15px;
      -webkit-box-shadow: 1px 4px 0 0 rgba(208, 208, 208);
      box-shadow: 1px 4px 0 0 rgba(208, 208, 208)
   }

   .margin210 {
      margin-top: 210px
   }

   .astrologer_tag {
      margin: 0
   }

   .astrologer_tag img {
      float: left;
      vertical-align: middle;
      margin: 5px 6px 0 0;
      text-align: left
   }

   .astrologer_tag span {
      float: left;
      font-size: 14px;
      text-align: left
   }

   .b-lazy {
      opacity: 0;
      transition: all 500ms
   }

   .b-loaded {
      opacity: 1
   }

   .box_height380 {
      height: 380px
   }

   .download_app {
      width: 115px;
      margin-top: 7px
   }

   .pagination>li>a {
      cursor: pointer
   }

   .pagination>.active>a,
   .pagination>.active>span,
   .pagination>.active>a:hover,
   .pagination>.active>span:hover,
   .pagination>.active>a:focus,
   .pagination>.active>span:focus {
      z-index: 3;
      color: #333;
      background-color: #fc0;
      border-color: #fc0;
      cursor: pointer
   }

   .dropdown-menu>.active>a,
   .dropdown-menu>.active>a:hover,
   .dropdown-menu>.active>a:focus {
      color: #333;
      text-decoration: none;
      outline: 0;
      background-color: #fc0
   }

   .table-condensed>thead>tr>th,
   .table-condensed>tbody>tr>th,
   .table-condensed>tfoot>tr>th,
   .table-condensed>thead>tr>td,
   .table-condensed>tbody>tr>td,
   .table-condensed>tfoot>tr>td {
      padding: 5px 12px
   }

   .starrr {
      font-size: 32px;
      cursor: pointer;
      float: left
   }

   .starrr span {
      margin: 1px;
      color: #fc0
   }

   .article_link a {
      text-decoration: underline;
      color: #c29246;
      font-weight: normal
   }

   .article_link a:hover {
      text-decoration: underline;
      color: #333;
      font-weight: normal
   }

   .blink_me {
      animation: blinker .7s linear infinite;
      color: #d29c0c
   }

   @keyframes blinker {
      50% {
         opacity: 5;
         color: #333
      }
   }

   .w68 {
      width: 68px;
      height: 68px
   }

   .sprite-aries {
      background-position: -10px -270px !important
   }

   .sprite-taurus {
      background-position: -362px -358px !important
   }

   .sprite-gemini {
      background-position: -274px -270px !important
   }

   .sprite-cancer {
      background-position: -98px -270px !important
   }

   .sprite-leo {
      background-position: -362px -270px !important
   }

   .sprite-virgo {
      background-position: -460px -10px !important
   }

   .sprite-libra {
      background-position: -10px -358px !important
   }

   .sprite-scorpio {
      background-position: -274px -358px !important
   }

   .sprite-sagittarius {
      background-position: -186px -358px !important
   }

   .sprite-capricorn {
      background-position: -186px -270px !important
   }

   .sprite-aquarius {
      background-position: -233px -109px !important
   }

   .sprite-pisces {
      background-position: -98px -358px !important
   }

   .sprite-love {
      background-position: -117px -10px !important;
      width: 96px;
      height: 84px
   }

   .sprite-tarot {
      background-position: -10px -10px !important;
      width: 87px;
      height: 96px
   }

   .sprite-numerology {
      background-position: -332px -85px !important;
      width: 68px;
      height: 84px
   }

   .sprite-panchang {
      background-position: -233px -10px !important;
      width: 79px;
      height: 79px
   }

   .sprite-festivals {
      background-position: -10px -126px !important;
      width: 63px;
      height: 124px
   }

   .sprite-spirituality {
      background-position: -93px -126px !important;
      width: 82px;
      height: 84px
   }

   .sprite-yahoo {
      width: 109px;
      height: 25px;
      background-position: -10px -495px !important
   }

   .sprite-msn {
      width: 89px;
      height: 38px;
      background-position: -332px -189px !important
   }

   .sprite-dailyhunt {
      width: 110px;
      height: 29px;
      background-position: -10px -446px !important
   }

   .sprite-ucnews {
      width: 128px;
      height: 55px;
      background-position: -277px -429px !important
   }

   .sprite-vodafone {
      width: 108px;
      height: 55px;
      background-position: -332px -10px !important
   }

   .sprite-reliance {
      width: 131px;
      height: 21px;
      background-position: -140px -446px !important
   }

   .sprite-footer-android {
      width: 68px;
      height: 25px;
      background-position: -460px -160px !important
   }

   .sprite-footer-ios {
      width: 68px;
      height: 25px;
      background-position: -460px -205px !important
   }

   .sprite-money-back {
      width: 38px;
      height: 41px;
      background-position: -460px -376px !important
   }

   .sprite-verified-expert {
      width: 38px;
      height: 40px;
      background-position: -460px -316px !important
   }

   .sprite-secure {
      width: 38px;
      height: 46px;
      background-position: -460px -250px !important
   }

   .sprite-footer-facebook {
      width: 29px;
      height: 29px;
      background-position: -513px -250px !important
   }

   .sprite-footer-facebook:hover {
      background-position: -513px -289px !important
   }

   .sprite-footer-twitter {
      width: 29px;
      height: 29px;
      background-position: -513px -338px !important
   }

   .sprite-footer-twitter:hover {
      background-position: -513px -377px !important
   }

   .sprite-footer-googleplus {
      width: 29px;
      height: 29px;
      background-position: -513px -426px !important
   }

   .sprite-footer-googleplus:hover {
      background-position: -513px -465px !important
   }

   .sprite-footer-youtube {
      width: 29px;
      height: 29px;
      background-position: -464px -434px !important
   }

   .sprite-footer-youtube:hover {
      background-position: -464px -475px !important
   }

   .sprite-footer-instagram {
      width: 29px;
      height: 29px;
      background-position: -551px -339px !important
   }

   .sprite-footer-instagram:hover {
      background-position: -551px -378px !important
   }

   .sprite-header-support {
      width: 20px;
      height: 20px;
      background-position: -548px -231px !important;
      margin-top: 12px
   }

   .sprite-header-login {
      width: 20px;
      height: 20px;
      background-position: -548px -191px !important;
      margin-top: 12px
   }

   .sprite-header-language {
      width: 25px;
      height: 20px;
      background-position: -548px -151px !important;
      margin-top: 12px
   }

   .sprite-heading-logo-icon {
      width: 64px;
      height: 42px;
      background-position: -460px -98px !important
   }

   .sprite-inner-support {
      width: 20px;
      height: 20px;
      background-position: -70px -136px !important;
      margin-top: 12px
   }

   .sprite-inner-login {
      width: 20px;
      height: 20px;
      background-position: -70px -107px !important;
      margin-top: 12px
   }

   .sprite-inner-language {
      width: 25px;
      height: 20px;
      background-position: -70px -76px !important;
      margin-top: 12px
   }

   .sprite-footer-guarantee {
      background-position: -0 -67px !important
   }

   .sprite-footer-igl {
      background-position: -0 -131px !important
   }

   .sprite-footer-security {
      background-position: -0 -181px !important
   }

   .sprite-footer-master {
      background-position: -0 -4px !important
   }

   .sprite-footer-visa {
      background-position: -0 -260px !important
   }

   .sprite-footer-secured {
      background-position: -0 -313px !important
   }

   .sprite-footer-inner-facebook {
      width: 29px;
      height: 29px;
      background-position: -111px -12px !important
   }

   .sprite-footer-inner-facebook:hover {
      background-position: -111px -51px !important
   }

   .sprite-footer-inner-twitter {
      width: 29px;
      height: 29px;
      background-position: -111px -100px !important
   }

   .sprite-footer-inner-twitter:hover {
      background-position: -111px -139px !important
   }

   .sprite-footer-inner-googleplus {
      width: 29px;
      height: 29px;
      background-position: -111px -188px !important
   }

   .sprite-footer-inner-googleplus:hover {
      background-position: -111px -227px !important
   }

   .sprite-footer-inner-youtube {
      width: 29px;
      height: 29px;
      background-position: -111px -268px !important
   }

   .sprite-footer-inner-youtube:hover {
      background-position: -111px -309px !important
   }

   .sprite-footer-inner-instagram {
      width: 29px;
      height: 29px;
      background-position: -71px -269px !important
   }

   .sprite-footer-inner-instagram:hover {
      background-position: -71px -308px !important
   }

   .sprite-horo-logo-icon {
      width: 64px;
      height: 42px;
      background-position: -16px -799px !important
   }

   .sprite-heading-main {
      width: 64px;
      height: 42px;
      background-position: -500px -23px !important
   }

   .sprite-heading-horoscope {
      width: 64px;
      height: 42px;
      background-position: -16px -799px !important
   }

   .sprite-horo-sign-aries {
      background-position: -490px -703px !important
   }

   .sprite-horo-sign-taurus {
      background-position: -569px -703px !important
   }

   .sprite-horo-sign-gemini {
      background-position: -651px -703px !important
   }

   .sprite-horo-sign-cancer {
      background-position: -730px -703px !important
   }

   .sprite-horo-sign-leo {
      background-position: -825px -703px !important
   }

   .sprite-horo-sign-virgo {
      background-position: -900px -703px !important
   }

   .sprite-horo-sign-libra {
      background-position: -492px -792px !important
   }

   .sprite-horo-sign-scorpio {
      background-position: -571px -792px !important
   }

   .sprite-horo-sign-sagittarius {
      background-position: -651px -792px !important
   }

   .sprite-horo-sign-capricorn {
      background-position: -732px -792px !important
   }

   .sprite-horo-sign-aquarius {
      background-position: -824px -792px !important
   }

   .sprite-horo-sign-pisces {
      background-position: -900px -792px !important
   }

   .w-footer-secure-48 {
      width: 48px;
      height: 34px;
      border: 1px solid #e5e5e5;
      border-radius: 3px;
      margin-right: 10px;
      padding: 19px 26px;
      text-align: center;
      display: initial
   }

   .w-horo-card-298 {
      width: 298px;
      height: 110px;
      display: -webkit-inline-box
   }

   .sprite-horo-planetary {
      width: 86px;
      height: 76px;
      background-position: -10px -708px !important
   }

   .sprite-horo-aries {
      background-position: -380px -164px !important
   }

   .sprite-horo-taurus {
      background-position: -10px -318px !important
   }

   .sprite-horo-gemini {
      background-position: -328px -318px !important
   }

   .sprite-horo-cancer {
      background-position: -10px -448px !important
   }

   .sprite-horo-leo {
      background-position: -328px -448px !important
   }

   .sprite-horo-virgo {
      background-position: -10px -578px !important
   }

   .sprite-horo-libra {
      background-position: -328px -578px !important
   }

   .sprite-horo-scorpio {
      background-position: -750px -10px !important
   }

   .sprite-horo-sagittarius {
      background-position: -750px -140px !important
   }

   .sprite-horo-capricorn {
      background-position: -750px -270px !important
   }

   .sprite-horo-aquarius {
      background-position: -750px -400px !important
   }

   .sprite-horo-pisces {
      background-position: -750px -530px !important
   }

   .w-horo-daily-350 {
      width: 350px;
      height: 134px
   }

   .sprite-horo-daily {
      background-position: -10px -10px !important
   }

   .sprite-horo-weekly {
      background-position: -380px -10px !important
   }

   .sprite-horo-monthly {
      background-position: -10px -164px !important
   }

   .sprite-horo-yearly {
      background-position: -117px -703px !important
   }

   .sprite-astrologer-tile-eng {
      height: 150px;
      width: 350px;
      background-position: -504px -709px !important
   }

   .sprite-dh-tile-eng {
      height: 150px;
      width: 350px;
      background-position: -506px -884px !important
   }

   .sprite-astrologer-tile-hin {
      height: 150px;
      width: 350px;
      background-position: -876px -709px !important
   }

   .sprite-dh-tile-hin {
      height: 150px;
      width: 350px;
      background-position: -876px -884px !important
   }

   .Captcha {
      border: 1px solid #ccc;
      margin-bottom: 10px
   }

   .sprite-sign-horo-aries {
      background-position: -6px -12px !important
   }

   .sprite-sign-horo-taurus {
      background-position: -86px -12px !important
   }

   .sprite-sign-horo-gemini {
      background-position: -167px -12px !important
   }

   .sprite-sign-horo-cancer {
      background-position: -248px -12px !important
   }

   .sprite-sign-horo-leo {
      background-position: -342px -12px !important
   }

   .sprite-sign-horo-virgo {
      background-position: -417px -12px !important
   }

   .sprite-sign-horo-libra {
      background-position: -9px -100px !important
   }

   .sprite-sign-horo-scorpio {
      background-position: -87px -100px !important
   }

   .sprite-sign-horo-sagittarius {
      background-position: -166px -100px !important
   }

   .sprite-sign-horo-capricorn {
      background-position: -248px -100px !important
   }

   .sprite-sign-horo-aquarius {
      background-position: -341px -100px !important
   }

   .sprite-sign-horo-pisces {
      background-position: -417px -100px !important
   }

   .sprite-sign-icon-career {
      background-position: -5px -174px !important
   }

   .sprite-sign-icon-daily {
      background-position: -85px -174px !important
   }

   .sprite-sign-icon-finance {
      background-position: -165px -174px !important
   }

   .sprite-sign-icon-family {
      background-position: -425px -174px !important
   }

   .sprite-sign-icon-health {
      background-position: -250px -174px !important
   }

   .sprite-sign-icon-love {
      background-position: -345px -174px !important
   }

   .sprite-icon-kundli {
      width: 152px;
      height: 162px;
      background-position: -0 -0 !important
   }

   .sprite-heading-kundli {
      width: 64px;
      height: 42px;
      background-position: -180px -62px !important
   }

   .number78 {
      width: 78px;
      height: 78px
   }

   .sprite-heading-numerology {
      width: 64px;
      height: 42px;
      background-position: -10px -286px !important
   }

   .sprite-num-one {
      background-position: -0 -0 !important
   }

   .sprite-num-two {
      background-position: -98px -0 !important
   }

   .sprite-num-three {
      background-position: -0 -98px !important
   }

   .sprite-num-four {
      background-position: -98px -98px !important
   }

   .sprite-num-five {
      background-position: -196px -0 !important
   }

   .sprite-num-six {
      background-position: -196px -98px !important
   }

   .sprite-num-seven {
      background-position: -0 -196px !important
   }

   .sprite-num-eight {
      background-position: -98px -196px !important
   }

   .sprite-num-nine {
      background-position: -196px -196px !important
   }

   .tarot52 {
      width: 52px;
      height: 75px
   }

   .sprite-tarot-aries {
      background-position: -0 -1px !important
   }

   .sprite-tarot-taurus {
      background-position: -144px -1px !important
   }

   .sprite-tarot-gemini {
      background-position: -293px -1px !important
   }

   .sprite-tarot-cancer {
      background-position: -71px -1px !important
   }

   .sprite-tarot-leo {
      background-position: -216px -1px !important
   }

   .sprite-tarot-virgo {
      background-position: -364px -1px !important
   }

   .sprite-tarot-libra {
      background-position: -0 -104px !important
   }

   .sprite-tarot-scorpio {
      background-position: -72px -105px !important
   }

   .sprite-tarot-sagittarius {
      background-position: -145px -105px !important
   }

   .sprite-tarot-capricorn {
      background-position: -216px -105px !important
   }

   .sprite-tarot-aquarius {
      background-position: -288px -105px !important
   }

   .sprite-tarot-pisces {
      background-position: -359px -105px !important
   }

   .sprite-icon-vedic-astrology {
      background-position: -0 -0 !important
   }

   .sprite_registration_icons_height {
      width: 56px;
      height: 56px
   }

   .sprite-heading-registration {
      width: 64px;
      height: 42px;
      background-position: -405px -19px !important
   }

   .sprite_registration-customers {
      background-position: -10px -10px !important
   }

   .sprite_registration-trusted {
      background-position: -91px -10px !important
   }

   .sprite_registration-languages {
      background-position: -172px -10px !important
   }

   .sprite_registration-countries {
      background-position: -246px -10px !important
   }

   .sprite_registration-experience {
      background-position: -327px -10px !important
   }

   .sprite_registration-facebook {
      background-position: -15px -95px !important;
      width: 151px;
      height: 28px
   }

   .sprite_registration-google {
      background-position: -196px -95px !important;
      width: 151px;
      height: 28px
   }

   .sprite_registration-or {
      background-position: -29px -146px !important;
      width: 337px;
      height: 38px
   }

   .sprite_talk_astrologer {
      display: block;
      display: -webkit-inline-box;
      background: url('https://images.onegodmed.com/english/images/sprites_talk_astrologer.png') no-repeat
   }

   .sprite_call_width {
      width: 29px;
      height: 29px;
      margin-top: 10px
   }

   .sprite_online {
      background-position: -10px -10px !important
   }

   .sprite_offline {
      background-position: -59px -10px !important
   }

   .sprite_busy {
      background-position: -10px -59px !important
   }

   .sprite_reviews {
      width: 18px;
      height: 15px;
      background-position: -75px -46px !important
   }

   .sprite_experience {
      width: 20px;
      height: 15px;
      background-position: -47px -48px !important
   }

   .sprite_rupee {
      width: 20px;
      height: 15px;
      background-position: -72px -72px !important
   }

   .sprite_dollar {
      width: 20px;
      height: 15px;
      background-position: -48px -70px !important
   }

   .minfree {
      background: #333;
      display: -webkit-inline-box;
      padding: 6px 25px 3px 25px;
      font-size: 30px;
      font-style: italic;
      -webkit-clip-path: polygon(0 0, 100% 0, 95% 47%, 100% 100%, 0 100%, 4% 52%);
      clip-path: polygon(0 0, 100% 0, 95% 47%, 100% 100%, 0 100%, 4% 52%);
      color: #fff
   }

   .minfree span {
      color: #fc0;
      font-weight: bold;
      animation: blink .5s steps(2, start) infinite
   }

   @keyframes blink {
      to {
         color: #fff
      }
   }

   .pack {
      margin: 0 0 50px 0;
      padding: 0;
      text-align: center;
      text-decoration: none !important;
      border: 1px solid #dfdfdf;
      display: block
   }

   .pack:hover {
      border: 1px solid #fc0
   }

   .pack h2 {
      font-size: 23px;
      margin: 0;
      padding: 15px 0 0 0;
      background: #f1f1f1;
      border-radius: 5px;
      text-decoration: none;
      color: #333
   }

   .pack h2:hover {
      background: #fc0
   }

   .pack h2 span {
      border-radius: 0 0 5px 5px;
      margin-top: 10px;
      display: block;
      border-top: 2px solid #fff;
      background: #fff;
      color: #333;
      font-size: 40px;
      padding: 30px 0 0 0;
      line-height: 10px
   }

   .pack h2 span button {
      position: relative;
      top: 17px;
      background: #fff;
      border: 1px solid #ccc;
      border-radius: 50px;
      font-size: 18px;
      text-transform: uppercase;
      padding: 13px 20px 8px 20px;
      margin-top: 7px
   }

   .pack_yellow {
      margin: 0 0 50px 0;
      padding: 0;
      text-align: center;
      text-decoration: none !important;
      border: 1px solid #fc0;
      display: block
   }

   .pack_yellow h2 {
      font-size: 23px;
      text-transform: uppercase;
      margin: 0;
      padding: 15px 0 0 0;
      background: #fc0;
      border-radius: 5px;
      text-decoration: none;
      color: #333;
      font-weight: bold
   }

   .pack_yellow h2 span {
      border-radius: 0 0 5px 5px;
      margin-top: 10px;
      display: block;
      border-top: 2px solid #fff;
      background: #fff;
      color: #333;
      font-size: 40px;
      font-weight: normal !important;
      padding: 30px 0 0 0;
      line-height: 10px
   }

   .pack_yellow h2 span button {
      position: relative;
      top: 17px;
      background: #fff;
      border: 1px solid #fc0;
      border-radius: 50px;
      font-size: 18px;
      text-transform: uppercase;
      padding: 13px 20px 8px 20px;
      margin-top: 7px
   }

   .paddingtb20 {
      padding: 15px 0
   }

   .border_t2a {
      border: 1px solid #c0c0c0;
      position: relative;
      top: 31px;
      left: -30px
   }

   .astrologer_love {
      right: 16px;
      position: absolute;
      top: 0
   }

   .Decoration_none {
      text-decoration: none !important
   }

   .astrowallet {
      padding: 15px !important
   }

   .marginTop {
      margin-top: 30px !important
   }

   .menu_drop {
      float: left;
      line-height: 53px;
      margin-left: 15px;
      text-decoration: none
   }

   .menu_drop a {
      text-decoration: none
   }

   .talktostep {
      margin: 0 0 15px 0;
      padding: 0;
      font-size: 24px
   }

   .text_yellow {
      color: #fc0
   }

   .nav_a>li>a {
      padding: 10px 8px !important
   }

   .btn_online {
      border-radius: 50px;
      outline: none;
      padding: 12px 5px 10px 15px;
      font-size: 21px;
      line-height: 50px;
      margin-top: 10px;
      color: #009e68;
      background: #fff;
      border: 2px solid #009e68
   }

   .btn_online img {
      position: relative;
      top: -3px;
      margin-left: 10px
   }

   .btn_online:hover {
      text-decoration: none;
      color: #009e68
   }

   .btn_busy {
      border-radius: 50px;
      outline: none;
      padding: 4px 5px 0 15px;
      font-size: 21px;
      line-height: 40px;
      color: #e05d52;
      cursor: auto;
      background: #fff;
      border: 2px solid #e05d52
   }

   .btn_busy img {
      position: relative;
      top: -3px;
      margin-left: 10px
   }

   .btn_offline {
      border-radius: 50px;
      outline: none;
      padding: 4px 5px 1px 15px;
      font-size: 18px;
      text-decoration: none;
      line-height: 40px;
      margin-top: 10px;
      cursor: auto;
      color: #999;
      background: #fff;
      border: 2px solid #e5e5e5
   }

   .btn_offline img {
      position: relative;
      top: -3px;
      margin-left: 10px
   }

   .btn_notify {
      border-radius: 50px;
      outline: none;
      padding: 4px 5px 1px 15px;
      font-size: 18px;
      line-height: 40px;
      margin-top: 10px;
      color: #333;
      background: #fff;
      border: 2px solid #fc0
   }

   .btn_notify img {
      position: relative;
      top: -3px;
      margin-left: 5px
   }

   .btn_notify_off {
      border-radius: 50px;
      outline: none;
      padding: 4px 5px 1px 15px;
      font-size: 21px;
      line-height: 40px;
      margin-top: 10px;
      color: #333;
      background: #fff;
      border: 2px solid #333
   }

   .btn_notify_off img {
      position: relative;
      top: -3px;
      margin-left: 5px
   }

   .profile_main {
      position: relative;
      top: 60px
   }

   .profile_image {
      width: 87%;
      position: absolute;
      top: -60px
   }

   .margin_top80 {
      margin-top: 80px !important
   }

   .table_right_border {
      border-right: 1px solid #d6d6d6
   }

   .online_astrologer {
      border-radius: 50px;
      outline: none;
      padding: 7px 5px 4px 15px;
      font-size: 21px;
      line-height: 36px;
      margin-top: 10px;
      width: 50%;
      color: #009e68;
      background: #fff;
      border: 2px solid #009e68
   }

   .online_astrologer img {
      float: right;
      position: relative;
      top: -2px;
      margin-left: 10px
   }

   .step_image {
      width: 50px;
      height: 50px
   }

   @keyframes shadow-pulse {
      0% {
         box-shadow: 0 0 0 0 rgba(255, 195, 0, .5)
      }

      100% {
         box-shadow: 0 0 0 30px rgba(0, 0, 0, 0)
      }
   }

   .glowing_icon {
      width: 62px;
      height: 62px;
      border-radius: 100px;
      margin: 0 auto;
      animation: shadow-pulse 2s infinite
   }

   .glowing_icon_mobile {
      width: 50px;
      height: 50px;
      border-radius: 100px;
      margin: 0 auto;
      animation: shadow-pulse 2s infinite
   }

   @keyframes shadow-pulse-call {
      0% {
         box-shadow: 0 0 0 0 rgba(0, 158, 104, .5)
      }

      100% {
         box-shadow: 0 0 0 21px rgba(0, 0, 0, 0)
      }
   }

   .glowing_call {
      width: 19px;
      height: 19px;
      border-radius: 21px;
      margin: 0 auto;
      position: relative;
      top: 4px;
      animation: shadow-pulse-call 2s infinite;
      display: -webkit-inline-box
   }

   .star_rating {
      background: #fff;
      padding: 4px 13px 4px 13px;
      border-radius: 50px;
      display: inline-block;
      margin: 0;
      font-size: 14px;
      font-weight: normal;
      border: 1px solid #b3afaf
   }

   .star_rating_a {
      background: #fff;
      border: 1px solid #b3afaf;
      color: #333;
      padding: 2px 8px 2px 8px;
      border-radius: 50px;
      display: inline-block;
      margin: 0;
      font-size: 12px !important;
      font-weight: normal
   }

   .glyphicon_gray_star {
      position: relative;
      top: 2px;
      margin-left: 1px;
      color: #e8bb06
   }

   .language_light {
      background: #f4f4f4;
      border: none
   }

   .language_bg {
      background: #333;
      border-radius: 6px 6px 0 0;
      height: 55px
   }

   .language_bg_btn {
      background: #fff;
      display: block;
      cursor: auto;
      color: #333 !important;
      padding: 10px 0;
      font-size: 19px;
      text-decoration: none !important;
      border: 3px solid #c7c7c7;
      margin-bottom: 10px
   }

   @keyframes shadow-pulse-btn {
      0% {
         box-shadow: 0 0 0 0 rgba(255, 204, 0, .5)
      }

      100% {
         box-shadow: 0 0 0 21px rgba(0, 0, 0, 0)
      }
   }

   .language_bg_btn_active {
      background: #fff;
      color: #333 !important;
      display: block;
      padding: 10px 0;
      font-size: 19px;
      text-decoration: none !important;
      border: 3px solid #ffe36e;
      margin-bottom: 10px;
      animation: shadow-pulse-btn 2s infinite
   }

   .language_bg_btn_yellow_active {
      background: #fff;
      color: #333 !important;
      display: block;
      padding: 10px 0;
      font-size: 19px;
      text-decoration: none !important;
      border: 3px solid #c7c7c7;
      margin-bottom: 10px
   }

   .language_box {
      background: #fff;
      background: #fff;
      padding: 15px 0;
      font-size: 16px;
      padding: 7px 0;
      border: 1px solid #e5e5e5;
      cursor: pointer;
      border-radius: 3px;
      margin-bottom: 15px
   }

   .language_box:hover {
      background: #fc0;
      border: none;
      font-weight: bold;
      -webkit-transition: all .5s ease;
      transition: all .5s ease;
      -webkit-transform: translateY(-2px);
      transform: translateY(-2px);
      -webkit-box-shadow: 0 10px 15px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
      box-shadow: 0 7px 10px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08)
   }

   .language_box_active {
      background: #fc0 !important;
      font-weight: bold;
      border: none;
      line-height: 20px;
      font-weight: bold;
      -webkit-transition: all .5s ease;
      transition: all .5s ease;
      -webkit-transform: translateY(-2px);
      transform: translateY(-2px);
      -webkit-box-shadow: 0 10px 15px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08);
      box-shadow: 0 7px 10px 0 rgba(0, 0, 0, .11), 0 5px 15px 0 rgba(0, 0, 0, .08)
   }

   .line47 {
      line-height: 29px !important
   }

   .language_box span {
      display: block;
      width: 30px;
      height: 30px;
      margin: 0 auto;
      color: #fff;
      border-radius: 50px;
      margin-bottom: 5px;
      line-height: 34px;
      font-weight: NORMAL;
      font-size: 14px
   }

   .english_lg {
      background: #4e79a4
   }

   .hindi_lg {
      background: #f18f3b
   }

   .urdu_lg {
      background: #e0585b
   }

   .gujarati_lg {
      background: #77b7b2
   }

   .kannada_lg {
      background: #5aa155
   }

   .malayalam_lg {
      background: #edc958
   }

   .odia_lg {
      background: #af7aa0
   }

   .assamese_lg {
      background: #fe9ea8
   }

   .nepali_lg {
      background: #9c7561
   }

   .punjabi_lg {
      background: #8e8a88
   }

   .sindhi_lg {
      background: #61afef
   }

   .bangla_lg {
      background: #658a97
   }

   .telugu_lg {
      background: #e06c60
   }

   .marathi_lg {
      background: #9da5b4
   }

   .tamil_lg {
      background: #d19a66
   }

   .rating_number {
      width: 130px;
      height: 130px;
      background: #ececec;
      padding-top: 32px;
      border-radius: 130px;
      float: right;
      margin-top: 10px
   }

   .checked {
      color: #ffa500
   }

   .side {
      float: left;
      width: 10%;
      margin-top: 10px
   }

   .middle {
      margin-top: 10px;
      float: left;
      width: 75%
   }

   .bar-container {
      width: 100%;
      background-color: #f1f1f1;
      text-align: center;
      color: #fff;
      border-radius: 50px
   }

   .bar-5 {
      width: 60%;
      height: 14px;
      background-color: #4caf50;
      border-radius: 50px
   }

   .bar-4 {
      width: 30%;
      height: 14px;
      background-color: #2196f3;
      border-radius: 50px
   }

   .bar-3 {
      width: 10%;
      height: 14px;
      background-color: #00bcd4;
      border-radius: 50px
   }

   .bar-2 {
      width: 4%;
      height: 14px;
      background-color: #ff9800;
      border-radius: 50px
   }

   .bar-1 {
      width: 15%;
      height: 14px;
      background-color: #f44336;
      border-radius: 50px
   }

   .sprite-consult {
      display: -webkit-inline-box;
      background: url(https://www.onegodmed.com/front-assets/images/header/chat-images.png) no-repeat
   }

   .sprite-consult_sign_white {
      width: 62px;
      height: 62px;
      background-position: -0 -0 !important
   }

   .sprite-consult_sign_yellow {
      width: 70px;
      height: 62px;
      background-position: -96px -0 !important
   }

   .sprite-consult_wallet_white {
      width: 62px;
      height: 62px;
      background-position: -0 -91px !important
   }

   .sprite-consult_wallet_yellow {
      width: 70px;
      height: 62px;
      background-position: -96px -90px !important
   }

   .sprite-consult_call_white {
      width: 62px;
      height: 62px;
      background-position: -0 -183px !important
   }

   .sprite-consult_call_yellow {
      width: 70px;
      height: 62px;
      background-position: -96px -183px !important
   }

   .sprite-consult_calling {
      width: 20px;
      height: 20px;
      background-position: -71px -155px !important;
      position: relative;
      top: 0;
      cursor: pointer
   }

   .w70 {
      width: 70px;
      height: 70px
   }

   .sprite-sign-chinese-dog {
      background-position: -8px -10px !important
   }

   .sprite-sign-chinese-dragon {
      background-position: -105px -10px !important
   }

   .sprite-sign-chinese-horse {
      background-position: -198px -10px !important
   }

   .sprite-sign-chinese-monkey {
      background-position: -285px -10px !important
   }

   .sprite-sign-chinese-ox {
      background-position: -378px -10px !important
   }

   .sprite-sign-chinese-pig {
      background-position: -471px -10px !important
   }

   .sprite-sign-chinese-rabbit {
      background-position: -8px -98px !important
   }

   .sprite-sign-chinese-rat {
      background-position: -105px -98px !important
   }

   .sprite-sign-chinese-rooster {
      background-position: -198px -98px !important
   }

   .sprite-sign-chinese-sheep {
      background-position: -285px -98px !important
   }

   .sprite-sign-chinese-snake {
      background-position: -378px -98px !important
   }

   .sprite-sign-chinese-tiger {
      background-position: -471px -98px !important
   }

   .sign_up_form_a {
      margin: 0 10px 0 0 !important;
      padding: 0;
      width: 20%;
      float: left
   }

   .sign_up_form_b {
      margin: 0;
      padding: 0;
      width: 74%;
      float: left
   }

   .sign_up_form::placeholder {
      color: #bbb
   }

   .sign_up_form:-ms-input-placeholder {
      color: #bbb
   }

   .sign_up_form::-ms-input-placeholder {
      color: #bbb
   }

   .sign_up_form select {
      margin: 0 0 24px 0;
      padding: 10px;
      height: 45px;
      width: 100%;
      outline: none;
      border: 1px solid #e7e7e7;
      font-size: 16px;
      border-radius: 3px
   }

   .sign_up_form input {
      margin: 0 0 7px 0;
      padding: 10px;
      height: 45px;
      width: 100%;
      outline: none;
      border: 1px solid #e7e7e7;
      font-size: 16px;
      border-radius: 3px
   }

   .sign_up_form input[type=name]:focus {
      border: 1px solid #fc0;
      color: #333
   }

   .sign_up_form input[type=mobile]:focus {
      border: 1px solid #fc0;
      color: #333
   }

   .sign_up_form input[type=password]:focus {
      border: 1px solid #fc0;
      color: #333
   }

   .sign_up_close {
      float: right;
      top: -18px;
      position: relative;
      background: none;
      outline: none;
      border: none;
      font-size: 31px;
      color: #333;
      cursor: pointer
   }

   .sign_up_close:hover {
      color: #999
   }

   .sign_up_default {
      background: #f0f0f0;
      border: 1px solid #dedede;
      font-size: 16px;
      display: block;
      width: 100%;
      line-height: 45px;
      border-radius: 100px;
      cursor: auto;
      outline: none;
      color: #b4b4b4
   }

   .sign_up_warning {
      background: #fc0;
      border: 1px solid #d2a700;
      font-size: 16px;
      display: block;
      width: 100%;
      line-height: 45px;
      border-radius: 100px;
      cursor: pointer;
      outline: none;
      color: #333;
      margin: 20px 0 8px 0
   }

   .sign_up_warning:hover {
      background: #d2a700
   }

   .Sign_up_otp input {
      margin: 10px 10px 15px 0;
      padding: 0;
      height: 45px;
      width: 10%;
      outline: none;
      border: 1px solid #d2d2d2;
      font-size: 16px;
      text-align: center;
      font-size: 20px;
      border-radius: 3px
   }

   .Sign_up_otp input[type=name]:focus {
      border: none;
      border: 1px solid #fc0;
      color: #333
   }

   .Sign_up_otp input[type=mobile]:focus {
      border: none;
      border: 1px solid #fc0;
      color: #333
   }

   .Sign_up_otp input[type=password]:focus {
      border: none;
      border: 1px solid #fc0;
      color: #333
   }

   .singupedit {
      font-weight: 200;
      font-size: 12px;
      position: relative;
      top: -1px;
      border: 1px solid #c29246;
      padding: 4px 5px;
      border-radius: 2px
   }

   .singupedit:hover {
      background: #fc0;
      color: #333
   }

   .sign-modal-dialog {
      width: 500px;
      margin: 30px auto
   }

   .signup-male-light {
      background: #fff url(//images.onegodmed.com/onegodmed2017/common/sing_up_male_female.png) no-repeat;
      background-position: 10px -79px;
      padding: 9px 17px 9px 45px;
      margin-right: 25px;
      border-radius: 3px;
      color: #999 !important;
      border: 1px solid #e7e7e7;
      font-size: 17px;
      text-decoration: none !important;
      display: inline-block
   }

   .signup-male-light:hover {
      background: #fc0 url(//images.onegodmed.com/onegodmed2017/common/sing_up_male_female.png) no-repeat;
      background-position: 10px -122px;
      padding: 9px 17px 9px 45px;
      margin-right: 25px;
      border-radius: 3px;
      color: #333 !important;
      border: 1px solid #d1a700;
      font-size: 17px;
      display: inline-block
   }

   .signup-male-light-active {
      background: #fc0 url(//images.onegodmed.com/onegodmed2017/common/sing_up_male_female.png) no-repeat;
      background-position: 10px -122px;
      padding: 9px 17px 9px 45px;
      margin-right: 25px;
      border-radius: 3px;
      color: #333 !important;
      border: 1px solid #d1a700;
      font-size: 17px;
      display: inline-block;
      text-decoration: none !important
   }

   .signup-female-light {
      background: #fff url(//images.onegodmed.com/onegodmed2017/common/sing_up_male_female.png) no-repeat;
      background-position: 10px -39px;
      padding: 9px 17px 9px 45px;
      margin-right: 25px;
      border-radius: 3px;
      color: #999 !important;
      border: 1px solid #e7e7e7;
      font-size: 17px;
      display: inline-block;
      text-decoration: none !important
   }

   .signup-female-light:hover {
      background: #fc0 url(//images.onegodmed.com/onegodmed2017/common/sing_up_male_female.png) no-repeat;
      background-position: 10px 4px;
      padding: 9px 17px 9px 45px;
      margin-right: 25px;
      border-radius: 3px;
      color: #333 !important;
      display: inline-block;
      border: 1px solid #d1a700;
      font-size: 17px
   }

   .signup-female-light-active {
      background: #fc0 url(//images.onegodmed.com/onegodmed2017/common/sing_up_male_female.png) no-repeat;
      background-position: 10px 4px;
      padding: 9px 17px 9px 45px;
      margin-right: 25px;
      border-radius: 3px;
      color: #333 !important;
      border: 1px solid #d1a700;
      display: inline-block;
      font-size: 17px
   }

   .signup-button {
      background: #fff;
      border: 1px solid #333;
      display: block;
      width: 100%;
      margin-top: 30px;
      padding: 13px 0;
      font-size: 17px;
      color: #333;
      border-radius: 100px;
      cursor: pointer;
      outline: none
   }

   .signup-button:hover {
      background: #f0f0f0
   }

   .w65_75 {
      width: 65px;
      height: 120px
   }

   .app_landing_padding {
      padding-left: 30px
   }

   .app_landing_trusted_icon {
      background-position: -21px 29px
   }

   .app_landing_experts_icon {
      background-position: -211px 29px
   }

   .app_landing_consultation_icon {
      background-position: -382px 29px
   }

   .app_landing_review_icon {
      background-position: -123px 29px
   }

   .app_landing_predictions_icon {
      background-position: -300px 29px
   }

   .app_landing_money_icon {
      background-position: -479px 30px
   }

   .app_landing_android_icon {
      width: 167px;
      height: 52px;
      background-position: -758px -16px;
      margin-top: 20px
   }

   .app_landing_ios_icon {
      width: 167px;
      height: 52px;
      background-position: -580px -16px !important
   }

   .app_bg_light_gray {
      background: #f1f1f1;
      padding: 40px 0 0 0
   }

   .header_top {
      padding: 10px 0;
      margin-bottom: 10px;
      border-bottom: 1px solid #d8d8d8
   }

   .appZodiac {
      float: left;
      border: 1px solid #eee;
      padding: 6px 20px;
      margin-right: 15px;
      margin-top: 10px
   }

   .numerologyNum {
      display: flex;
      justify-content: space-between;
      align-items: flex-start
   }

   .autocomplete-items {
      position: absolute;
      z-index: 99999;
      background: #fff;
      height: 170px;
      overflow-x: hidden;
      overflow-y: auto;
      -webkit-box-shadow: 0 -1px 5px 3px rgba(219, 219, 219, 1);
      -moz-box-shadow: 0 -1px 5px 3px rgba(219, 219, 219, 1);
      box-shadow: 0 -1px 5px 3px rgba(219, 219, 219, 1)
   }

   .autocomplete-items div {
      color: #999;
      border-bottom: 1px solid #eee;
      padding: 10px 10px;
      cursor: pointer
   }

   .autocomplete-items div:hover {
      color: #fc0
   }

   .input_bg {
      background: #f2f2f2;
      padding: 30px 20px;
      border-radius: 0 40px 0 40px
   }

   .top30btm {
      margin: 30px 0 26px 0
   }

   .input-arrow-none[type=number]::-webkit-inner-spin-button,
   .input-arrow-none[type=number]::-webkit-outer-spin-button {}

   .padding8 {
      padding: 8px !important
   }

   .w330 {
      width: 330px;
      float: left
   }

   .m_right30 {
      margin-right: 30px
   }

   @media only screen and (max-width:600px) {
      .shareleft {
         width: 100%;
         position: fixed;
         bottom: 0;
         text-align: center;
         justify-content: space-between;
         display: flex;
         height: 48px;
         z-index: 99999;
         cursor: pointer;
         top: auto !important
      }
   }

   body {
      margin: 0;
      padding: 0
   }

   .shareleft {
      position: fixed;
      justify-content: space-between;
      align-items: flex-start;
      top: 250px;
      left: 0;
      cursor: pointer
   }

   .share_link {
      margin: 0 auto;
      padding: 0;
      display: grid;
      width: 100%
   }

   .fb_share {
      background-color: #4267b2
   }

   .twitter_share {
      background-color: #55acee
   }

   .whatsapp_share {
      background-color: #25d366
   }

   .clear {
      clear: both
   }

   .positionIcon {
      position: absolute;
      top: 56px
   }

   .positionIcon95 {
      position: absolute;
      top: 95px
   }

   .positionIcon106 {
      position: absolute;
      top: 106px
   }

   .box_Height300 {
      min-height: 300px
   }

   .kndli_male {
      position: relative;
      top: -8px;
      margin-right: 10px
   }

   .aug_banner {
      margin-left: 30px;
      border-radius: 4px
   }

   .career_page {
      margin: 0;
      padding: 0
   }

   .career_page li {
      margin: 0;
      padding: 0;
      list-style: none;
      background: url("//images.onegodmed.com/onegodmed2017/common/career/check_icon.jpg") 0 no-repeat;
      padding-left: 20px;
      line-height: 35px
   }

   .slider_carousel img {
      width: 19.6%;
      border-radius: 5px
   }

   .career_sprite {
      background: url("//images.onegodmed.com/onegodmed2017/common/career/core_values.jpg") no-repeat
   }

   .career_customer {
      background-position: -3px -22px
   }

   .career_growth {
      background-position: -509px -22px
   }

   .career_excellence {
      background-position: -66px -22px
   }

   .career_integrity {
      background-position: -144px -22px
   }

   .career_quality {
      background-position: -213px -22px
   }

   .career_respect {
      background-position: -290px -22px
   }

   .career_positivity {
      background-position: -360px -22px
   }

   .career_commitment {
      background-position: -435px -22px
   }

   .w55 {
      width: 55px;
      height: 55px;
      display: block;
      margin: 10px auto
   }

   .left_border_green {
      border-left: 3px solid #4fb33e;
      background: #fffcef;
      padding: 15px 10px
   }

   .left_border_orange {
      border-left: 3px solid #f5601c;
      background: #fffcef;
      padding: 15px 10px
   }

   .left_border_blue {
      border-left: 3px solid #0072c5;
      background: #fffcef;
      padding: 15px 10px
   }

   .border_bottomNone {
      border-bottom: none !important
   }

   .border_topNone {
      border-top: none !important
   }

   .career_a {
      font-size: 18px;
      margin-right: 30px
   }

   .career_a:last-child {
      font-size: 18px;
      margin-right: 0
   }

   .career_text {
      margin: 10px 0;
      font-size: 25px
   }

   .career_text span {
      display: block;
      color: #999
   }

   .text_right_center {
      text-align: right
   }

   .talkBox_core {
      margin-bottom: 20px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #dfdfdf;
      height: 140px
   }

   .downarrow {
      background: url(//images.onegodmed.com/onegodmed2017/common/my_account_arrow.png) no-repeat;
      width: 12px;
      height: 6px;
      position: absolute;
      right: 40px;
      margin-top: 20px
   }

   .home_sprite {
      background: url("//images.onegodmed.com/onegodmed2017/english/images/homepage/sprite_home_onegodmed.jpg") no-repeat;
      border-radius: 70px
   }

   .w50 {
      width: 50px;
      height: 50px;
      display: block;
      margin: 10px auto
   }

   .countries {
      background-position: -21px -17px
   }

   .verified {
      background-position: -83px -17px
   }

   .availability {
      background-position: -152px -17px
   }

   .million {
      background-position: -220px -17px
   }

   .confidential {
      background-position: -286px -17px
   }

   .guarantee {
      background-position: -350px -17px
   }

   .Relationships {
      background-position: -16px -96px
   }

   .marriage {
      background-position: -90px -96px
   }

   .career {
      background-position: -165px -96px
   }

   .investment {
      background-position: -240px -96px
   }

   .business {
      background-position: -315px -96px
   }

   .everyday {
      background-position: -390px -96px
   }

   .health {
      background-position: -540px -96px
   }

   .personal {
      background-position: -465px -96px
   }

   .talkBox_dashed {
      margin-bottom: 20px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px dashed #dfdfdf
   }

   .talkBox_dashed_a {
      margin-bottom: 20px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px dashed #dfdfdf
   }

   .talkBox_dashed_a:hover {
      border: 1px dashed #fc0
   }

   .carousel-tab {
      margin: 0;
      padding: 0;
      list-style: none
   }

   .carousel-tab li {
      margin: 0;
      padding: 0
   }

   .carousel-tab li a {
      margin: 5px 20px 0 0;
      padding: 0;
      float: left;
      font-size: 17px;
      color: #999
   }

   .carousel-tab>li.active>a,
   .nav-tabs>li.active>a:hover,
   .nav-tabs>li.active>a:focus {
      float: left;
      font-weight: bold;
      color: #b79200;
      text-decoration: none;
      border-width: 0 0 1px;
      border-style: solid
   }

   .owl-carousel .owl-stage-outer {
      position: relative;
      overflow: hidden;
      -webkit-transform: translate3d(0, 0, 0)
   }

   .owl-carousel .owl-item,
   .owl-carousel .owl-wrapper {
      -webkit-backface-visibility: hidden;
      -moz-backface-visibility: hidden;
      -ms-backface-visibility: hidden;
      -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0)
   }

   .owl-carousel .owl-item {
      min-height: 1px;
      float: left;
      -webkit-backface-visibility: hidden;
      -webkit-touch-callout: none
   }

   .owl-carousel .owl-dots.disabled,
   .owl-carousel .owl-nav.disabled {
      display: none
   }

   .no-js .owl-carousel,
   .owl-carousel.owl-loaded {
      display: block
   }

   .owl-carousel .owl-dot,
   .owl-carousel .owl-nav .owl-next,
   .owl-carousel .owl-nav .owl-prev {
      cursor: pointer;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
   }

   .owl-dots {
      display: none
   }

   .owl-nav {
      margin-top: 20px;
      position: absolute;
      right: 0
   }

   .owl-prev {
      background: url('//images.onegodmed.com/onegodmed2017/english/images/homepage/gray_left.png') no-repeat;
      border: none;
      width: 50px;
      font-size: 0;
      height: 50px;
      cursor: pointer;
      outline: none
   }

   .owl-stage {
      padding: 0 !important
   }

   .owl-next {
      background: url('//images.onegodmed.com/onegodmed2017/english/images/homepage/yellow_right.png') no-repeat;
      border: none;
      width: 50px;
      height: 50px;
      font-size: 0;
      cursor: pointer;
      margin-left: 10px;
      outline: none
   }

   .owl-carousel.owl-loading {
      opacity: 0;
      display: block
   }

   .owl-carousel.owl-hidden {
      opacity: 0
   }

   .owl-carousel.owl-refresh .owl-item {
      visibility: hidden
   }

   .owl-carousel.owl-drag .owl-item {
      -ms-touch-action: pan-y;
      touch-action: pan-y;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
   }

   .owl-carousel.owl-grab {
      cursor: move;
      cursor: grab
   }

   .owl-carousel.owl-rtl {
      direction: rtl
   }

   .owl-carousel.owl-rtl .owl-item {
      float: right
   }

   .owl-carousel .animated {
      animation-duration: 1s;
      animation-fill-mode: both
   }

   .owl-carousel .owl-animated-in {
      z-index: 0
   }

   .owl-carousel .owl-animated-out {
      z-index: 1
   }

   .owl-carousel .fadeOut {
      animation-name: fadeOut
   }

   @keyframes fadeOut {
      0% {
         opacity: 1
      }

      100% {
         opacity: 0
      }
   }

   .owl-height {
      transition: height .5s ease-in-out
   }

   .owl-carousel .owl-item .owl-lazy {
      opacity: 0;
      transition: opacity .4s ease
   }

   .owl-carousel .owl-item .owl-lazy:not([src]),
   .owl-carousel .owl-item .owl-lazy[src^=""] {
      max-height: 0
   }

   .owl-carousel .owl-item img.owl-lazy {
      transform-style: preserve-3d
   }

   @media only screen {
      .demo-list [class*="column"]+[class*="column"]:last-child {
         float: left
      }
   }

   .slide_view {
      font-size: 18px;
      background: url('//images.onegodmed.com/onegodmed2017/english/images/homepage/slider_arrow.png') right no-repeat;
      border: 1px solid #999;
      display: block;
      padding: 9px;
      border-radius: 100px;
      text-decoration: none;
      margin-top: 30px;
      cursor: pointer
   }

   .slide_view:hover {
      background: #fc0 url('//images.onegodmed.com/onegodmed2017/english/images/homepage/slider_arrow.png') right no-repeat;
      border: 1px solid #e8ba00;
      text-decoration: none
   }

   .loyalty_pack a {
      font-size: 29px;
      border: 1px solid #dfdfdf;
      padding: 10px 0 7px 10px;
      display: inline-block;
      margin-bottom: 20px;
      width: 159px;
      cursor: pointer;
      margin-right: 20px;
      font-weight: 300;
      text-decoration: none !important;
      border-radius: 3px;
      text-align: left
   }

   .loyalty_pack a img {
      width: 15%
   }

   .loyalty_pack a:hover {
      background: #fc0;
      border: 1px solid #e9bd0d;
      color: #333 !important
   }

   .loyalty_pack_active {
      background: #fc0;
      border: 1px solid #e9bd0d !important
   }

   .home_bg {
      height: 380px;
      width: 100%;
      background-image: url("//images.onegodmed.com/onegodmed2017/english/images/homepage/home_bg.jpg");
      background-repeat: no-repeat;
      background-position: right top;
      padding-bottom: 30px
   }

   .home_normal {
      font-size: 21px;
      color: #fff;
      line-height: 33px;
      font-weight: 300
   }

   .home_button {
      background: #fff;
      display: flex;
      line-height: 53px;
      padding: 4px;
      margin-bottom: 30px;
      border-radius: 100px;
      text-decoration: none;
      font-size: 20px;
      color: #555
   }

   .home_button:hover {
      background: #fff3c3;
      color: #555;
      text-decoration: none
   }

   .w55_margin0 {
      width: 55px;
      height: 55px;
      display: block;
      margin-right: 15px
   }

   .font_rtbs {
      font-size: 19px;
      line-height: 27px;
      font-weight: 300;
      margin-bottom: 5px;
      color: #333
   }

   .loyalty_offer {
      background: url(//images.onegodmed.com/onegodmed2017/english/images/loyalty/offer.jpg);
      background-size: auto;
      height: 187px;
      padding: 40px;
      font-size: 36px;
      color: #333;
      border: 1px solid #f5e0a8;
      margin-top: 5px
   }

   .loyalty_offer span {
      color: #ff4440;
      font-weight: bold
   }

   .loyalty_message {
      color: #fff;
      line-height: 26px;
      font-size: 16px;
      border-radius: 7px;
      margin-top: 30px;
      width: 100%;
      position: relative;
      background: #fc0;
      padding: 1px;
      display: flex
   }

   .potli_coin {
      width: 90px;
      position: relative;
      left: 15px;
      float: left
   }

   .loyalty_message:after {
      bottom: 100%;
      left: 10%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
      border-bottom-color: #fc0;
      border-width: 20px;
      margin-left: -20px
   }

   .loyalty_message_text {
      color: #333;
      font-size: 28px;
      line-height: 42px;
      text-align: center;
      background: #fff;
      border-radius: 310px;
      height: 300px;
      width: 300px;
      top: -40px;
      padding-top: 84px;
      right: 70px;
      position: absolute
   }

   .loyalty_message_image {
      margin: 20px 20px 20px 50px
   }

   .loyalty_form {
      background: #f1f1f1;
      padding: 15px;
      margin-top: 30px;
      border-radius: 10px
   }

   .font35 {
      font-size: 35px
   }

   .loyalty_table {
      margin: 0;
      padding: 0;
      font-size: 25px;
      font-weight: 300
   }

   .loyalty_table tr td {
      padding: 12px 0
   }

   .loyalty_green {
      border: 1px solid #fc0;
      padding: 10px 20px 10px 20px;
      border-radius: 3px;
      width: 110px;
      display: block;
      color: #fc0;
      margin-left: 20px;
      font-weight: bold;
      text-align: center
   }

   .loyalty_gray {
      border: 1px solid #333;
      padding: 6px 20px 5px 20px;
      border-radius: 3px;
      width: auto;
      margin-left: 20px;
      display: block;
      color: #333;
      font-weight: bold;
      text-align: center
   }

   .loyalty_accountBG {
      background: #fbf8ef url("//images.onegodmed.com/onegodmed2017/common/loyalty_career.png") right bottom no-repeat;
      border: 1px solid #f3edda;
      background-size: 180px 150px;
      margin-top: 30px;
      padding: 20px;
      font-size: 26px;
      font-weight: 300;
      line-height: 41px
   }

   .loyalty_accountBG_Success {
      background: #fbf8ef url("//images.onegodmed.com/onegodmed2017/common/success_loyalty.jpg") right bottom no-repeat;
      border: 1px solid #f3edda;
      margin-top: 30px;
      padding: 20px;
      font-size: 30px;
      font-weight: 300;
      line-height: 48px;
      background-size: 200px 140px
   }

   .loyalty_accountBG span {
      font-weight: bold;
      color: #e45b53
   }

   .loyalty_accountBG_Success span {
      font-weight: bold;
      color: #009f63
   }

   .grayloyalty {
      font-weight: bold;
      color: #333 !important
   }

   .loyalty_pack_account a {
      font-size: 38px;
      border: 1px solid #dfdfdf;
      padding: 18px 0 8px 0;
      display: inline-block;
      margin-bottom: 20px;
      width: 159px;
      text-align: center;
      margin-right: 30px;
      font-weight: 300;
      text-decoration: none;
      border-radius: 3px;
      line-height: 33px;
      -webkit-box-shadow: -2px 0 21px -5px rgba(0, 0, 0, .23);
      -moz-box-shadow: -2px 0 21px -5px rgba(0, 0, 0, .23);
      box-shadow: -2px 0 21px -5px rgba(0, 0, 0, .23)
   }

   .loyalty_pack_account a:hover {
      background: #fbf6e7;
      text-decoration: none;
      -webkit-box-shadow: -2px 0 31px -2px rgba(0, 0, 0, .23);
      -moz-box-shadow: -2px 0 31px -2px rgba(0, 0, 0, .23);
      box-shadow: -2px 0 31px -2px rgba(0, 0, 0, .23)
   }

   .loyalty_pack_account a span {
      font-size: 20px;
      display: block;
      font-weight: 400
   }

   .red_loyalty {
      color: #009f63
   }

   .green_loyalty {
      color: #e45b53
   }

   .offer_img {
      border-radius: 5px
   }

   .astrologer_box {
      border: 1px solid #ececec;
      border-radius: 3px;
      margin-bottom: 20px;
      position: relative
   }

   .as_profile_tile {
      background: #f3f3f3;
      padding: 10px;
      position: relative;
      display: flow-root;
      height: 90px
   }

   .as_profile_text {
      padding: 10px
   }

   .as_profile_font {
      font-size: 15px;
      line-height: 20px;
      display: block;
      margin-bottom: 4px;
      height: auto !important;
      color: #5a5a5a
   }

   .as_profile_link {
      text-decoration: underline;
      font-size: 14px;
      color: #5d5d5d
   }

   .as_profile_font:hover {
      text-decoration: none
   }

   .as_profile_text_ul {
      margin: 0;
      padding: 0;
      list-style: none
   }

   .as_profile_text_ul li {
      list-style: none;
      margin: 0;
      padding: 0;
      border-bottom: 1px solid #eaeaea;
      padding-bottom: 0;
      margin-bottom: 3px;
      color: #999;
      font-size: 14px;
      line-height: 30px
   }

   .as_profile_text_ul li:last-child {
      border: none
   }

   .as_profile_img {
      position: relative;
      top: -2px;
      margin-right: 5px
   }

   .as_profile_top5 {
      margin-top: 10px
   }

   .line_through {
      text-decoration: line-through;
      margin-right: 4px;
      color: #717171
   }

   .discount_price {
      margin-right: 7px;
      color: #333
   }

   .offer_price {
      background: #fc0;
      border: 1px solid #f7eecc;
      font-style: italic;
      font-weight: bold;
      color: #333;
      padding: 11px 15px 11px 15px;
      clip-path: polygon(100% 0, 100% 50%, 100% 100%, 0 100%, 11% 50%, 0 0);
      position: absolute;
      top: 41px;
      right: 0
   }

   .star_rating_a {
      background: #fff;
      border: 1px solid #b3afaf;
      color: #333;
      padding: 2px 8px 2px 8px;
      border-radius: 50px;
      display: inline-block;
      margin: 0 !important;
      font-size: 12px;
      font-weight: normal
   }

   .new_green {
      background: #fc0;
      color: #333;
      padding: 5px 12px 2px 12px;
      border-radius: 50px;
      display: inline-block;
      margin: 0;
      font-size: 12px;
      font-weight: normal
   }

   .glyphicon_gray_star {
      position: relative;
      top: 2px;
      margin-left: 1px;
      color: #e8bb06
   }

   .online_Callme {
      background: #fff url(//images.onegodmed.com/onegodmed2017/english/images/tta/tta_image/right_green_arrow.png) right no-repeat;
      border: 1px solid #139e5b;
      display: block;
      margin-top: 0;
      text-align: center;
      padding: 6px 0 6px 0;
      border-radius: 100px;
      color: #139e5b !important;
      font-size: 18px;
      text-decoration: none !important;
      cursor: pointer
   }

   .online_Callme:hover {
      background: #139e5b url(//images.onegodmed.com/onegodmed2017/english/images/tta/tta_image/right_white_arrow.png) right no-repeat;
      text-decoration: none;
      color: #fff !important
   }

   .online_busy {
      background: #fff;
      border: 1px solid #e45b53;
      display: block;
      margin-top: 0;
      text-align: center;
      padding: 6px 0 6px 0;
      border-radius: 100px;
      color: #e45b53 !important;
      font-size: 18px;
      text-decoration: none !important;
      cursor: default
   }

   .online_busy:hover {
      background: #fff;
      text-decoration: none;
      color: #e45b53 !important
   }

   .online_offline {
      background: #fff;
      border: 1px solid #dadada;
      display: block;
      margin-top: 0;
      text-align: center;
      padding: 6px 0 6px 0;
      border-radius: 100px;
      color: #bbb !important;
      font-size: 18px;
      text-decoration: none !important;
      cursor: default
   }

   .online_offline:hover {
      background: #fff;
      text-decoration: none;
      color: #bbb !important
   }

   .chatBox {
      position: fixed;
      bottom: 0;
      left: 0;
      display: flow-root;
      background: #fc0;
      width: 75%;
      text-align: center;
      margin: 10px;
      padding: 7px;
      color: #333
   }

   .chatBox_a {
      display: flow-root;
      background: #333;
      padding: 8px;
      font-size: 20px;
      text-decoration: none !important;
      color: #333 !important;
      background: #fc0;
      border: 2px solid #333
   }

   .chatBox_icon {
      background: url('//images.onegodmed.com/onegodmed2017/common/chat_box.png') no-repeat;
      position: fixed;
      bottom: 0;
      right: 0;
      width: 63px;
      height: 88px;
      margin: 9px
   }

   .wrapText {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 200px
   }

   .offer_tile {
      position: absolute;
      font-size: 11px;
      bottom: 0;
      right: -7px
   }

   .offer_tile_a {
      position: absolute;
      font-size: 11px;
      top: 35px;
      right: -16px
   }

   .offer_tile_profile {
      position: absolute;
      font-size: 11px;
      bottom: 36px;
      right: -17px
   }

   .offer_price_yellow {
      background: #fc0;
      position: relative;
      padding: 2px 6px 2px 5px;
      color: #333;
      font-weight: bold;
      margin-right: 7px;
      font-size: 14px;
      border-radius: 0 1px 0 0
   }

   .offer_price_gray {
      color: #fff;
      font-weight: bold;
      padding: 2px 5px 2px 5px;
      background: #333;
      position: relative;
      font-size: 14px;
      margin-left: 9px
   }

   .offer_gray_arrow {
      width: 10px;
      height: 10px;
      background: #333;
      clip-path: polygon(100% 0, 100% 100%, 0 0);
      display: block;
      position: absolute;
      left: -9px;
      top: 0
   }

   .offer_yellow_arrow {
      width: 7px;
      height: 7px;
      background: #fc0;
      clip-path: polygon(100% 0, 0% 100%, 0 0);
      display: block;
      position: absolute;
      right: 0;
      bottom: -7px
   }

   .loyalty_button {
      font-size: 27px;
      font-weight: 300;
      margin-top: 50px;
      border-radius: 100px;
      background: #fff;
      border: 1px solid #fc0 !important;
      padding: 10px 50px;
      color: #333
   }

   .loyalty_button:hover {
      background: #fc0;
      color: #333;
      border: 1px solid #e9bd0d
   }

   .loyalty_sign_up {
      text-align: center;
      padding: 10px;
      background: #fff4d7;
      font-size: 19px
   }

   .recharge_box {
      background: #f1f1f1;
      padding: 20px 0
   }

   #ui-datepicker-div {
      z-index: 9999999999 !important
   }

   .marginTop100 {
      margin-top: 100px
   }

   .gift_close {
      position: absolute;
      right: 60px;
      top: 193px;
      width: 120px
   }

   .gift_open {
      position: absolute;
      right: 1px;
      top: 70px;
      width: 352px
   }

   .fontLoy24 {
      font-size: 24px
   }

   .unlockme {
      width: 13px;
      height: 18px;
      position: relative;
      top: -3px
   }

   .online_queue_astrologer {
      background: #fff url("https://images.onegodmed.com/onegodmed2017/common/queue_plus.jpg") no-repeat;
      background-position: right;
      border: 1px solid #ff8d25;
      display: block;
      margin-top: 0;
      text-align: center;
      padding: 6px 0 6px 0;
      border-radius: 100px;
      color: #ff8d25 !important;
      font-size: 18px;
      text-decoration: none !important;
      cursor: default
   }

   .online_queue {
      background: #fff url("https://images.onegodmed.com/onegodmed2017/common/queue_plus.jpg") no-repeat;
      background-position: right;
      border: 1px solid #ff8d25;
      display: block;
      margin-top: 0;
      text-align: center;
      padding: 6px 0 6px 0;
      border-radius: 100px;
      color: #ff8d25 !important;
      font-size: 18px;
      text-decoration: none !important;
      cursor: default
   }

   .offerBanner {
      margin-bottom: 10px;
      display: block
   }

   .yellowLightForm {
      background: #feefc4;
      border: 1px solid #c8c8c8
   }

   .yellowTextForm {
      text-align: center;
      margin-top: 15px;
      line-height: 27px;
      font-weight: bold;
      font-size: 16px
   }

   .yellowTextForm span {
      color: #a77b00;
      font-weight: bold;
      font-size: 18px
   }

   .sticky_queue {
      width: 90%;
      margin: 0 auto;
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;
      background: #fc0;
      z-index: 999999999;
      border-radius: 5px;
      border: 1px solid #cba200
   }

   .sticky_queue>div {
      text-align: center;
      line-height: 48px;
      font-size: 18px;
      color: #333
   }

   .text_left_modal {
      text-align: left
   }

   .sticky_offer {
      margin: 0 auto;
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 9999;
      text-align: center
   }

   .sticky_offer_Close {
      position: absolute;
      background: #fc0;
      padding: 6px 5px 0 0;
      border-radius: 0 100px 100px 0;
      height: 30px;
      text-decoration: none;
      width: 30px;
      color: #333;
      font-weight: bold
   }

   .sticky_offer_Close_a {
      position: absolute;
      background: #fc0;
      padding: 6px 5px 0 0;
      border-radius: 0 100px 100px 0;
      height: 30px;
      text-decoration: none;
      width: 30px;
      color: #333;
      font-weight: bold
   }

   .queue_close_modal {
      float: right;
      top: 0;
      position: relative;
      background: none;
      outline: none;
      border: none;
      font-size: 31px;
      color: #333;
      cursor: pointer
   }

   .sticky_offer_Close_a {
      position: absolute;
      background: #fc0;
      padding: 6px 5px 0 0;
      border-radius: 0 100px 100px 0;
      height: 30px;
      text-decoration: none;
      width: 30px;
      color: #333;
      font-weight: bold
   }

   @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 300;
      src: local('Josefin Sans Light'), local('JosefinSans-Light'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3FZQNVED7rKGKxtqIqX5Ecpl5te10h.woff2) format('woff2');
      unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
   }

   @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      font-weight: 100;
      src: local('Josefin Sans Thin'), local('JosefinSans-Thin'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3EZQNVED7rKGKxtqIqX5Ecbkx6XHg.woff2) format('woff2');
      unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
   }

   @font-face {
      font-family: 'Josefin Sans';
      font-style: normal;
      src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://fonts.gstatic.com/s/josefinsans/v12/Qw3aZQNVED7rKGKxtqIqX5EUDXx4.woff2) format('woff2');
      unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
   }

   .datepicker {
      padding: 4px;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      direction: ltr
   }

   .datepicker-inline {
      width: 220px
   }

   .datepicker.datepicker-rtl {
      direction: rtl
   }

   .datepicker.datepicker-rtl table tr td span {
      float: right
   }

   .datepicker-dropdown {
      top: 0;
      left: 0
   }

   .datepicker-dropdown:before {
      content: '';
      display: inline-block;
      border-left: 7px solid transparent;
      border-right: 7px solid transparent;
      border-bottom: 7px solid #999;
      border-top: 0;
      border-bottom-color: rgba(0, 0, 0, .2);
      position: absolute
   }

   .datepicker-dropdown:after {
      content: '';
      display: inline-block;
      border-left: 6px solid transparent;
      border-right: 6px solid transparent;
      border-bottom: 6px solid #fff;
      border-top: 0;
      position: absolute
   }

   .datepicker-dropdown.datepicker-orient-left:before {
      left: 6px
   }

   .datepicker-dropdown.datepicker-orient-left:after {
      left: 7px
   }

   .datepicker-dropdown.datepicker-orient-right:before {
      right: 6px
   }

   .datepicker-dropdown.datepicker-orient-right:after {
      right: 7px
   }

   .datepicker-dropdown.datepicker-orient-bottom:before {
      top: -7px
   }

   .datepicker-dropdown.datepicker-orient-bottom:after {
      top: -6px
   }

   .datepicker-dropdown.datepicker-orient-top:before {
      bottom: -7px;
      border-bottom: 0;
      border-top: 7px solid #999
   }

   .datepicker-dropdown.datepicker-orient-top:after {
      bottom: -6px;
      border-bottom: 0;
      border-top: 6px solid #fff
   }

   .datepicker table {
      margin: 0;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
   }

   .datepicker td,
   .datepicker th {
      text-align: center;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      border: none
   }

   .table-striped .datepicker table tr td,
   .table-striped .datepicker table tr th {
      background-color: transparent
   }

   .datepicker table tr td.day:hover,
   .datepicker table tr td.day.focused {
      background: #f9ce00;
      color: #fff;
      cursor: pointer
   }

   .datepicker table tr td.old,
   .datepicker table tr td.new {
      color: #999
   }

   .datepicker table tr td.disabled,
   .datepicker table tr td.disabled:hover {
      background: none;
      color: #d1cfcf;
      cursor: default
   }

   .datepicker table tr td.highlighted {
      background: #d9edf7;
      border-radius: 0
   }

   .datepicker table tr td.today:hover,
   .datepicker table tr td.today:hover:hover,
   .datepicker table tr td.today.disabled:hover,
   .datepicker table tr td.today.disabled:hover:hover,
   .datepicker table tr td.today:active,
   .datepicker table tr td.today:hover:active,
   .datepicker table tr td.today.disabled:active,
   .datepicker table tr td.today.disabled:hover:active,
   .datepicker table tr td.today.active,
   .datepicker table tr td.today:hover.active,
   .datepicker table tr td.today.disabled.active,
   .datepicker table tr td.today.disabled:hover.active,
   .datepicker table tr td.today.disabled,
   .datepicker table tr td.today:hover.disabled,
   .datepicker table tr td.today.disabled.disabled,
   .datepicker table tr td.today.disabled:hover.disabled,
   .datepicker table tr td.today[disabled],
   .datepicker table tr td.today:hover[disabled],
   .datepicker table tr td.today.disabled[disabled],
   .datepicker table tr td.today.disabled:hover[disabled] {
      background-color: #fdf59a
   }

   .datepicker table tr td.today:active,
   .datepicker table tr td.today:hover:active,
   .datepicker table tr td.today.disabled:active,
   .datepicker table tr td.today.disabled:hover:active,
   .datepicker table tr td.today.active,
   .datepicker table tr td.today:hover.active,
   .datepicker table tr td.today.disabled.active,
   .datepicker table tr td.today.disabled:hover.active {
      background-color: #fbf069
   }

   .datepicker table tr td.today:hover:hover {
      color: #000
   }

   .datepicker table tr td.today.active:hover {
      color: #fff
   }

   .datepicker table tr td.range,
   .datepicker table tr td.range:hover,
   .datepicker table tr td.range.disabled,
   .datepicker table tr td.range.disabled:hover {
      background: #eee;
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      border-radius: 0
   }

   .datepicker table tr td.range.today,
   .datepicker table tr td.range.today:hover,
   .datepicker table tr td.range.today.disabled,
   .datepicker table tr td.range.today.disabled:hover {
      background-color: #f3d17a;
      background-image: -moz-linear-gradient(to bottom, #f3c17a, #f3e97a);
      background-image: -ms-linear-gradient(to bottom, #f3c17a, #f3e97a);
      background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f3c17a), to(#f3e97a));
      background-image: -webkit-linear-gradient(to bottom, #f3c17a, #f3e97a);
      background-image: -o-linear-gradient(to bottom, #f3c17a, #f3e97a);
      background-image: linear-gradient(to bottom, #f3c17a, #f3e97a);
      background-repeat: repeat-x;
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f3c17a', endColorstr='#f3e97a', GradientType=0);
      border-color: #f3e97a #f3e97a #edde34;
      border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
      filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      border-radius: 0
   }

   .datepicker table tr td.range.today:hover,
   .datepicker table tr td.range.today:hover:hover,
   .datepicker table tr td.range.today.disabled:hover,
   .datepicker table tr td.range.today.disabled:hover:hover,
   .datepicker table tr td.range.today:active,
   .datepicker table tr td.range.today:hover:active,
   .datepicker table tr td.range.today.disabled:active,
   .datepicker table tr td.range.today.disabled:hover:active,
   .datepicker table tr td.range.today.active,
   .datepicker table tr td.range.today:hover.active,
   .datepicker table tr td.range.today.disabled.active,
   .datepicker table tr td.range.today.disabled:hover.active,
   .datepicker table tr td.range.today.disabled,
   .datepicker table tr td.range.today:hover.disabled,
   .datepicker table tr td.range.today.disabled.disabled,
   .datepicker table tr td.range.today.disabled:hover.disabled,
   .datepicker table tr td.range.today[disabled],
   .datepicker table tr td.range.today:hover[disabled],
   .datepicker table tr td.range.today.disabled[disabled],
   .datepicker table tr td.range.today.disabled:hover[disabled] {
      background-color: #f3e97a
   }

   .datepicker table tr td.range.today:active,
   .datepicker table tr td.range.today:hover:active,
   .datepicker table tr td.range.today.disabled:active,
   .datepicker table tr td.range.today.disabled:hover:active,
   .datepicker table tr td.range.today.active,
   .datepicker table tr td.range.today:hover.active,
   .datepicker table tr td.range.today.disabled.active,
   .datepicker table tr td.range.today.disabled:hover.active {
      background-color: #efe24b
   }

   .datepicker table tr td.selected,
   .datepicker table tr td.selected:hover,
   .datepicker table tr td.selected.disabled,
   .datepicker table tr td.selected.disabled:hover {
      background-color: #9e9e9e;
      background-image: -moz-linear-gradient(to bottom, #b3b3b3, #808080);
      background-image: -ms-linear-gradient(to bottom, #b3b3b3, #808080);
      background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#b3b3b3), to(#808080));
      background-image: -webkit-linear-gradient(to bottom, #b3b3b3, #808080);
      background-image: -o-linear-gradient(to bottom, #b3b3b3, #808080);
      background-image: linear-gradient(to bottom, #b3b3b3, #808080);
      background-repeat: repeat-x;
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#b3b3b3', endColorstr='#808080', GradientType=0);
      border-color: #808080 #808080 #595959;
      border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
      filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
      color: #fff;
      text-shadow: 0 -1px 0 rgba(0, 0, 0, .25)
   }

   .datepicker table tr td.selected:hover,
   .datepicker table tr td.selected:hover:hover,
   .datepicker table tr td.selected.disabled:hover,
   .datepicker table tr td.selected.disabled:hover:hover,
   .datepicker table tr td.selected:active,
   .datepicker table tr td.selected:hover:active,
   .datepicker table tr td.selected.disabled:active,
   .datepicker table tr td.selected.disabled:hover:active,
   .datepicker table tr td.selected.active,
   .datepicker table tr td.selected:hover.active,
   .datepicker table tr td.selected.disabled.active,
   .datepicker table tr td.selected.disabled:hover.active,
   .datepicker table tr td.selected.disabled,
   .datepicker table tr td.selected:hover.disabled,
   .datepicker table tr td.selected.disabled.disabled,
   .datepicker table tr td.selected.disabled:hover.disabled,
   .datepicker table tr td.selected[disabled],
   .datepicker table tr td.selected:hover[disabled],
   .datepicker table tr td.selected.disabled[disabled],
   .datepicker table tr td.selected.disabled:hover[disabled] {
      background-color: #808080
   }

   .datepicker table tr td.selected:active,
   .datepicker table tr td.selected:hover:active,
   .datepicker table tr td.selected.disabled:active,
   .datepicker table tr td.selected.disabled:hover:active,
   .datepicker table tr td.selected.active,
   .datepicker table tr td.selected:hover.active,
   .datepicker table tr td.selected.disabled.active,
   .datepicker table tr td.selected.disabled:hover.active {
      background-color: #666
   }

   .datepicker table tr td.active,
   .datepicker table tr td.active:hover,
   .datepicker table tr td.active.disabled,
   .datepicker table tr td.active.disabled:hover {
      color: #fff
   }

   .datepicker table tr td.active:hover,
   .datepicker table tr td.active:hover:hover,
   .datepicker table tr td.active.disabled:hover,
   .datepicker table tr td.active.disabled:hover:hover,
   .datepicker table tr td.active:active,
   .datepicker table tr td.active:hover:active,
   .datepicker table tr td.active.disabled:active,
   .datepicker table tr td.active.disabled:hover:active,
   .datepicker table tr td.active.active,
   .datepicker table tr td.active:hover.active,
   .datepicker table tr td.active.disabled.active,
   .datepicker table tr td.active.disabled:hover.active,
   .datepicker table tr td.active.disabled,
   .datepicker table tr td.active:hover.disabled,
   .datepicker table tr td.active.disabled.disabled,
   .datepicker table tr td.active.disabled:hover.disabled,
   .datepicker table tr td.active[disabled],
   .datepicker table tr td.active:hover[disabled],
   .datepicker table tr td.active.disabled[disabled],
   .datepicker table tr td.active.disabled:hover[disabled] {
      background-color: #e47c22
   }

   .datepicker table tr td.active:active,
   .datepicker table tr td.active:hover:active,
   .datepicker table tr td.active.disabled:active,
   .datepicker table tr td.active.disabled:hover:active,
   .datepicker table tr td.active.active,
   .datepicker table tr td.active:hover.active,
   .datepicker table tr td.active.disabled.active,
   .datepicker table tr td.active.disabled:hover.active {
      background-color: #fc0
   }

   .datepicker table tr td span {
      display: block;
      width: 23%;
      height: 54px;
      line-height: 54px;
      float: left;
      margin: 1%;
      cursor: pointer;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px
   }

   .datepicker table tr td span:hover,
   .datepicker table tr td span.focused {
      background: #f9ce00;
      color: #333;
      font-weight: bold
   }

   .datepicker table tr td span.disabled,
   .datepicker table tr td span.disabled:hover {
      background: none;
      color: #999;
      cursor: default
   }

   .datepicker table tr td span.active,
   .datepicker table tr td span.active:hover,
   .datepicker table tr td span.active.disabled,
   .datepicker table tr td span.active.disabled:hover {
      background-color: #006dcc;
      background-image: -moz-linear-gradient(to bottom, #fc0, #fc0);
      background-image: -ms-linear-gradient(to bottom, #ffab44, #ea9022);
      background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fc0), to(#fc0));
      background-image: -webkit-linear-gradient(to bottom, #fc0, #fc0);
      background-image: -o-linear-gradient(to bottom, #fc0, #fc0);
      background-image: linear-gradient(to bottom, #fc0, #fc0);
      background-repeat: repeat-x;
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffab44', endColorstr='#ea9022', GradientType=0);
      border-color: #04c #04c #002a80;
      border-color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);
      filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
      color: #ccc;
      text-shadow: 0 -1px 0 rgba(0, 0, 0, .25)
   }

   .datepicker table tr td span.active:hover,
   .datepicker table tr td span.active:hover:hover,
   .datepicker table tr td span.active.disabled:hover,
   .datepicker table tr td span.active.disabled:hover:hover,
   .datepicker table tr td span.active:active,
   .datepicker table tr td span.active:hover:active,
   .datepicker table tr td span.active.disabled:active,
   .datepicker table tr td span.active.disabled:hover:active,
   .datepicker table tr td span.active.active,
   .datepicker table tr td span.active:hover.active,
   .datepicker table tr td span.active.disabled.active,
   .datepicker table tr td span.active.disabled:hover.active,
   .datepicker table tr td span.active.disabled,
   .datepicker table tr td span.active:hover.disabled,
   .datepicker table tr td span.active.disabled.disabled,
   .datepicker table tr td span.active.disabled:hover.disabled,
   .datepicker table tr td span.active[disabled],
   .datepicker table tr td span.active:hover[disabled],
   .datepicker table tr td span.active.disabled[disabled],
   .datepicker table tr td span.active.disabled:hover[disabled] {
      background-color: #04c
   }

   .datepicker table tr td span.active:active,
   .datepicker table tr td span.active:hover:active,
   .datepicker table tr td span.active.disabled:active,
   .datepicker table tr td span.active.disabled:hover:active,
   .datepicker table tr td span.active.active,
   .datepicker table tr td span.active:hover.active,
   .datepicker table tr td span.active.disabled.active,
   .datepicker table tr td span.active.disabled:hover.active {
      background-color: #fc0
   }

   .datepicker table tr td span.old,
   .datepicker table tr td span.new {
      color: #999
   }

   .datepicker .datepicker-switch {
      width: 145px
   }

   .datepicker .datepicker-switch,
   .datepicker .prev,
   .datepicker .next,
   .datepicker tfoot tr th {
      cursor: pointer
   }

   .datepicker .datepicker-switch:hover,
   .datepicker .prev:hover,
   .datepicker .next:hover,
   .datepicker tfoot tr th:hover {
      background: #eee
   }

   .datepicker .cw {
      font-size: 10px;
      width: 12px;
      padding: 0 2px 0 5px;
      vertical-align: middle
   }

   .input-append.date .add-on,
   .input-prepend.date .add-on {
      cursor: pointer
   }

   .input-append.date .add-on i,
   .input-prepend.date .add-on i {
      margin-top: 3px
   }

   .input-daterange input {
      text-align: center
   }

   .input-daterange input:first-child {
      -webkit-border-radius: 3px 0 0 3px;
      -moz-border-radius: 3px 0 0 3px;
      border-radius: 3px 0 0 3px
   }

   .input-daterange input:last-child {
      -webkit-border-radius: 0 3px 3px 0;
      -moz-border-radius: 0 3px 3px 0;
      border-radius: 0 3px 3px 0
   }

   .input-daterange .add-on {
      display: inline-block;
      width: auto;
      min-width: 16px;
      height: 18px;
      padding: 4px 5px;
      line-height: 18px;
      text-align: center;
      text-shadow: 0 1px 0 #fff;
      vertical-align: middle;
      background-color: #eee;
      border: 1px solid #ccc;
      margin-left: -5px;
      margin-right: -5px
   }

   .talkBox_Secure .fa {
      color: #ff8820;
   }

   @media only screen and (max-width:768px) {
      .datepicker-dropdown {
         top: 0;
         left: 0 !important
      }

      .ast_heading {
         float: left;
         width: 100% !important;
         text-align: center;
         margin-bottom: 20px;
      }

      /* .call_btn1 {
   position: relative;
   bottom: 34px;
   left: 2px;
   font-size: 24px;
   color: #ff871f;
   top: -3px;
   } */
   }

   .ui-icon {
      display: block;
      text-indent: -99999px;
      overflow: hidden;
      background-repeat: no-repeat
   }

   .ui-datepicker {
      width: 17em;
      padding: .2em .2em 0;
      display: none
   }

   .ui-datepicker .ui-datepicker-header {
      position: relative;
      padding: .2em 0
   }

   .ui-datepicker .ui-datepicker-prev,
   .ui-datepicker .ui-datepicker-next {
      position: absolute;
      top: 2px;
      width: 1.8em;
      height: 1.8em
   }

   .ui-datepicker .ui-datepicker-prev-hover,
   .ui-datepicker .ui-datepicker-next-hover {
      top: 1px
   }

   .ui-datepicker .ui-datepicker-prev {
      left: 2px
   }

   .ui-datepicker .ui-datepicker-next {
      right: 2px
   }

   .ui-datepicker .ui-datepicker-prev-hover {
      left: 1px
   }

   .ui-datepicker .ui-datepicker-next-hover {
      right: 1px
   }

   .ui-datepicker .ui-datepicker-prev span,
   .ui-datepicker .ui-datepicker-next span {
      display: block;
      position: absolute;
      left: 50%;
      margin-left: -8px;
      top: 50%;
      margin-top: -8px
   }

   .ui-datepicker .ui-datepicker-title {
      margin: 0 2.3em;
      line-height: 1.8em;
      text-align: center
   }

   .ui-datepicker .ui-datepicker-title select {
      font-size: 14px;
      font-weight: normal;
      margin: 1px 4px;
      padding: 4px;
      border-radius: 3px;
      border: 1px solid #dfdfdf
   }

   .ui-datepicker select.ui-datepicker-month-year {
      width: 100%
   }

   .ui-datepicker select.ui-datepicker-month,
   .ui-datepicker select.ui-datepicker-year {
      width: 45%
   }

   .ui-datepicker table {
      width: 100%;
      font-size: .9em;
      border-collapse: collapse;
      margin: 0 0 .4em
   }

   .ui-datepicker th {
      padding: .7em .3em;
      text-align: center;
      font-weight: bold;
      border: 0
   }

   .ui-datepicker td {
      border: 0;
      padding: 1px
   }

   .ui-datepicker td span,
   .ui-datepicker td a {
      display: block;
      padding: .2em;
      text-align: right;
      text-decoration: none
   }

   .ui-widget {
      font-size: 15px
   }

   .ui-widget .ui-widget {
      font-size: 15px
   }

   .ui-widget input,
   .ui-widget select,
   .ui-widget textarea,
   .ui-widget button {
      font-size: 15px
   }

   .ui-widget-content {
      border: 1px solid #aaa;
      background: #fff;
      color: #222
   }

   .ui-state-default,
   .ui-widget-content .ui-state-default,
   .ui-widget-header .ui-state-default {
      border: 1px solid #dfdfdf;
      background: #fff;
      font-weight: normal;
      color: #555
   }

   .ui-state-hover,
   .ui-widget-content .ui-state-hover,
   .ui-widget-header .ui-state-hover,
   .ui-state-focus,
   .ui-widget-content .ui-state-focus,
   .ui-widget-header .ui-state-focus {
      border: 1px solid #fc0;
      background: #fc0;
      font-weight: normal;
      color: #333
   }

   .ui-state-highlight,
   .ui-widget-content .ui-state-highlight,
   .ui-widget-header .ui-state-highlight {
      border: 1px solid #fc0;
      background: #fc0;
      color: #333
   }

   .ui-icon {
      width: 16px;
      height: 16px;
      background-image: url(https://images.onegodmed.com/onegodmed2017/temp/arrow_calendar.png)
   }

   .ui-icon-circle-triangle-e {
      background-position: -0 3px
   }

   .ui-icon-circle-triangle-w {
      background-position: -30px 3px
   }

   .ui-corner-all,
   .ui-corner-top,
   .ui-corner-left,
   .ui-corner-tl {
      border-radius: 4px
   }

   button.consult_now {
      background-color: #437a67;
      color: #fff !important;
   }

   /* add css icon*/
   .astrologer_box:hover {
      border: 1px solid #ff8820;
      -webkit-box-shadow: -1px 2px 9px 0px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: -1px 2px 9px 0px rgba(0, 0, 0, 0.75);
      box-shadow: -1px 2px 9px 0px rgba(0, 0, 0, 0.75);
   }

   a.Decoration_none.pty img {
      position: relative;
      top: -13px;
   }

   .GrayColor_light_a {
      font-size: 18px;
      font-weight: 900;
      text-align: center;
   }

   .ast_heading {
      float: left;
      width: 100%;
      text-align: center;
      margin-bottom: 20px;
   }

   a.panel-title {
      color: #ff8820;
   }

   .checkbox label:hover {
      color: #ff8820;
   }

   .astro21 {
      font-size: 20px;
      padding-bottom: 10px;
      display: block;
      line-height: 24px;
   }

   .ast_team_wrapper.ast_toppadder70.ast_bottompadder50.home_exprt .ast_heading {
      width: 100%;
   }

   .ast_whywe_wrapper.ast_toppadder70.ast_bottompadder70.home_blog .ast_heading {
      width: 100%;
   }

   .ast_testimonial_wrapper.ast_toppadder70.ast_bottompadder70 .ast_heading {
      width: 100%;
   }

   .panel_heading .checkbox {
      margin-top: 0;
      margin-bottom: 0;
      padding: 1px;
      line-height: 25px;
      color: #949292;
      font-size: 15px;
   }

   .online_queue {
      color: #fff;
      background-position: right;
      border: 1px solid #66B21B !important;
      background: #66B21B !important;
   }

   .form-group {
      margin-bottom: 15px;
      width: 100%;
   }

   h1.top0.display-3.h2 {
      font-size: 21px;
      line-height: 30px;
      color: #ff8820;
   }

   .online_queue:hover {
      background-color: #ff8820 !important;
   }

   .talkBox_Secure {
      border-bottom: 1px solid #f0f0f0;
      padding: 15px 0;
      font-size: 15px !important;
      color: #949292 !important;
   }

   .panel_heading a {
      font-size: 17px;
      color: #999;
      line-height: 26px;
   }

   .panel_heading:last-child {
      border-top: 1px solid #f0f0f0 !important;
      border-right: 1px solid #f0f0f0 !important;
      border-left: 1px solid #f0f0f0 !important;
      border-bottom: 1px solid #f0f0f0 !important;
      margin-bottom: 14px !important;
   }

   .Padding10 {
      font-size: 15px !important;
   }

   .HideTopPhone_m {
      display: none !important;
   }

   .user_m {
      display: none !important;
   }

   @media only screen and (max-width: 768px) {
      .HideTopPhone_m {
         display: block !important;
         margin-top: -30px;
      }

      .online_queue {
         color: #fff;
         background-position: right;
         border: 1px solid #66B21B !important;
         background: #66B21B !important;
         padding: 6px !important;
         padding: 8px 0px 8px !important;
         position: relative;
         right: -128px;
         top: -150px;
         width: 42%;
      }

      .col-md-3.col-xs-8.desk_box {
         display: none;
      }

      .user_m {
         display: block !important;
      }

      .DarkGrayBG.paddingtb20.user_m {
         background-color: #fff;
         border: 0px solid;
      }

      .col-sm-8.col-md-offset-2.GrayColor_light_a.P0Mobile {
         margin: -50px 0px;
      }

      .col-sm-8.col-md-offset-2.GrayColor_light_a.P0Mobile .GrayColor_light_a {
         font-size: 12px;
         font-weight: 900;
         text-align: center;
         margin: -19px 0px 20px;
      }

      .sprite-consult {
         display: -webkit-inline-box;
         background: url(https://www.onegodmed.com/front-assets/images/header/sprite_consult_b_new.png) no-repeat;
      }

      .astro21 {
         font-size: 15px;
         padding-bottom: 10px;
         display: block;
         line-height: 24px;
      }

      .ast_heading {
         float: left;
         width: 100%;
         text-align: center;
         margin-bottom: -5px;
      }

      .as_profile_text_ul {
         padding: 0;
         list-style: none;
         position: relative;
         left: -46px;
         top: 18px;
      }

      .astrologer_box.main_box {
         height: auto;
         margin-top: -68px;
      }

      .as_profile_img {
         position: relative;
         top: -2px;
         margin-right: 28px;
      }

      .as_profile_text_ul li {
         border-bottom: none !important;
         font-size: 14px !important;
         margin-bottom: 0 !important;
         line-height: 25px !important;
      }

      .ast_contact_details ul {
         float: none;
         width: auto;
         display: inline-block;
         position: relative;
         top: 50px;
      }

      .ast_bottompadder70 {
         padding-bottom: 33px;
         margin-top: -18px;
      }

      .panel_heading {
         background: #fff;
         color: #999;
         border: 1px solid #f0f0f0;
         border-radius: 0 !important;
         margin: 0 !important;
         box-shadow: 0 0 0;
         border-bottom: none;
         width: 318px;
      }

      .ast_pagetitle {
         padding: 90px 0px 20px !important;
         background-size: cover !important;
      }

      .ast_contact_details ul {
         float: none;
         width: auto;
         display: inline-block;
         position: relative;
         top: 37px !important;
      }

      .hik {
         background-color: #f3f3f3;
         padding: 45px 0px;
         position: relative;
         top: 21px;
      }

      .as_profile_tile {
         background: #f3f3f3 !important;
         padding: 10px 0 0 7px !important;
         position: static !important;
         height: auto !important;
      }

      .as_profile_text_ul li {
         list-style: none;
         margin: 0;
         padding: 0;
         border-bottom: 1px solid #eaeaea;
         padding-bottom: 0;
         margin-bottom: 3px;
         color: #333;
      }

      span.ra {
         margin: -10px 0px 10px;
         display: block;
      }

      .sicn {
         position: relative;
         top: 0px;
         right: 0px;
         cursor: pointer;
         left: auto !important;
         color: #ffffff;
         background-color: #ff8820;
         padding: 15px;
         position: absolute;
         margin-right: 0px;
      }

      .right-topbar {
         display: none;
      }

      .discount_price {
         margin-right: 7px;
         margin-left: -5px;
      }

      .as_profile_img {
         position: relative;
         top: -2px;
         margin-right: 14px;
      }

      .box_line {
         display: none;
      }
   }

   span.ora {
      color: #ff8820;
   }

   .ast_team_wrapper {
      display: none;
   }
</style>
<script>
   $(document).ready(function() {
      $('#promo_dis').keypress(function(e) {
         if (e.which == 13)
            return false;
         //or...
         if (e.which == 13)
            e.preventDefault();
      });
      $("#promo_dis").click(function() {
         $("#balance").text('');
      });
      $('#show-hidden-menu').click(function() {
         $('.hidden-menu').slideToggle("slow");
         // Alternative animation for example
         // slideToggle("fast");
      });
      $(".common_selector").click(function() {
         var html = '';
         var appendHtml = true;
         //console.log($(this).parent().text().trim());
         //var newCheckVal =  $(this).val().replace(/\s/g, '');
         var searchName = $("#SearchAstrologer").val();
         var newCheckVal = $(this).val().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
         if ($(this).prop("checked") == true) {
            html += '<span id="' + newCheckVal + '" class="btn btn-default filterAd margin_Rgt10"><span>' + $(this).parent().text().trim() + ' </span><a class="font14" aria-hidden="true" onclick="CloseFilterSpan(\'' + $(this).parent().text().trim() + '\', \'' + newCheckVal + '\')">X</a></span>';
            //console.log("Checkbox is checked.");
         } else if ($(this).prop("checked") == false) {
            //console.log("Checkbox is unchecked.");
            appendHtml = false;
         }
         //console.log($(this).val());
         var astroLang = "";
         var astroexp = "";
         var astroRating = "";
         var astroprice = "";
         var astroExpertise = "";
         $('#astroVendorDetail').html('<div id="loading" style="" ></div>');
         $('.astrolanguage:checked').each(function() {
            if (astroLang == "")
               astroLang += $(this).val();
            else
               astroLang += "," + $(this).val();
         });
         $('.astroexpe:checked').each(function() {
            if (astroexp == "")
               astroexp += $(this).val();
            else
               astroexp += "," + $(this).val();
         });
         $('.astroexpertise:checked').each(function() {
            if (astroExpertise == "")
               astroExpertise += $(this).val();
            else
               astroExpertise += "," + $(this).val();
         });
         $('.astroPrice:checked').each(function() {
            if (astroprice == "")
               astroprice += $(this).val();
            else
               astroprice += "," + $(this).val();
         });
         $('.astrorating:checked').each(function() {
            if (astroRating == "")
               astroRating += $(this).val();
            else
               astroRating += "," + $(this).val();
         });
         $.ajax({
            url: "<?= base_url() ?>front/chatastroVendorFilter",
            method: "POST",
            data: {
               astroLang: astroLang,
               astroexp: astroexp,
               astroRating: astroRating,
               astroprice: astroprice,
               astroExpertise: astroExpertise,
               searchName: searchName
            },
            success: function(data) {
               if (data != '') {
                  $('#partial').html('');
                  $('#partial').html(data);
               } else {
                  var nodata = "No results found. Please choose another one!"
               }
               $('#astroVendorDetail').html(nodata);

               if (appendHtml) {
                  $('#FilterList').css("display", "block");
                  $("#filterlistInner").append(html);
               } else {
                  $("#" + newCheckVal).remove();
               }
               if ($("#filterlistInner").html() == "")
                  $('#FilterList').css("display", "none");

            }
         });
      });

      function get_filter(class_name) {
         var filter = [];
         $('.' + class_name + ':checked').each(function() {
            filter.push($(this).val());
         });
         return filter;
      }

      $('#SearchAstrologer').on('keyup paste', function() {
         var searchName = $("#SearchAstrologer").val();
         console.log(prevLength + ' : ' + searchName.length + ' : ' + sessionStatusRequest);
         if (searchName.length >= 0 && !ajaxRequestMade && searchName.length != prevLength) {
            var astroLang = "";
            var astroexp = "";
            var astroRating = "";
            var astroprice = "";
            var astroExpertise = "";
            $('#astroVendorDetail').html('<div id="loading" style="" ></div>');
            $('.astrolanguage:checked').each(function() {
               if (astroLang == "")
                  astroLang += $(this).val();
               else
                  astroLang += "," + $(this).val();
            });
            $('.astroexpe:checked').each(function() {
               if (astroexp == "")
                  astroexp += $(this).val();
               else
                  astroexp += "," + $(this).val();
            });
            $('.astroexpertise:checked').each(function() {
               if (astroExpertise == "")
                  astroExpertise += $(this).val();
               else
                  astroExpertise += "," + $(this).val();
            });
            $('.astroPrice:checked').each(function() {
               if (astroprice == "")
                  astroprice += $(this).val();
               else
                  astroprice += "," + $(this).val();
            });
            $('.astrorating:checked').each(function() {
               if (astroRating == "")
                  astroRating += $(this).val();
               else
                  astroRating += "," + $(this).val();
            });
            prevLength = searchName.length;
            ajaxRequestMade = true;
            sessionStatusRequest = $.ajax({
               url: '<?= base_url() ?>front/chatastroVendorFilter',
               type: 'POST',
               async: false,
               data: {
                  searchName: searchName,
                  astroLang: astroLang,
                  astroexp: astroexp,
                  astroRating: astroRating,
                  astroprice: astroprice,
                  astroExpertise: astroExpertise
               },
               beforeSend: function() {
                  console.log('bbb : ' + sessionStatusRequest);
                  if (sessionStatusRequest != null)
                     sessionStatusRequest.abort();
               },
               success: function(data) {
                  ajaxRequestMade = false;
                  if (data != '')
                     $('#partial').html('');
                  $('#partial').html(data);
               },
               error: function() {}
            });
         }
      });

   });

   function CloseFilterSpan(val, id) {
      $('.common_selector').each(function() {
         if (id != "all") {
            if ($(this).parent().text().trim() == val) {
               $(this).prop("checked", false);
               console.log($(this).parent().text().trim());
            }
         } else {
            $(this).prop("checked", false);
         }

      });
      var astroLang = "";
      var astroexp = "";
      var astroRating = "";
      var astroprice = "";
      var astroExpertise = "";
      $('#astroVendorDetail').html('<div id="loading" style="" ></div>');
      $('.astrolanguage:checked').each(function() {
         if (astroLang == "")
            astroLang += $(this).val();
         else
            astroLang += "," + $(this).val();
      });
      $('.astroexpe:checked').each(function() {
         if (astroexp == "")
            astroexp += $(this).val();
         else
            astroexp += "," + $(this).val();
      });
      $('.astroexpertise:checked').each(function() {
         if (astroExpertise == "")
            astroExpertise += $(this).val();
         else
            astroExpertise += "," + $(this).val();
      });
      $('.astroPrice:checked').each(function() {
         if (astroprice == "")
            astroprice += $(this).val();
         else
            astroprice += "," + $(this).val();
      });
      $('.astrorating:checked').each(function() {
         if (astroRating == "")
            astroRating += $(this).val();
         else
            astroRating += "," + $(this).val();
      });
      $.ajax({
         url: "<?= base_url() ?>front/chatastroVendorFilter",
         method: "POST",
         data: {
            astroLang: astroLang,
            astroexp: astroexp,
            astroRating: astroRating,
            astroprice: astroprice,
            astroExpertise: astroExpertise
         },
         success: function(data) {
            if (data != '') {
               $('#partial').html('');
               $('#partial').html(data);
            } else {
               var nodata = "No results found. Please choose another one!"
            }
            $('#astroVendorDetail').html(nodata);
            $("#" + id).remove();
            if (id == "all") {
               $("#filterlistInner").html("");
               $("#SearchAstrologer").val("");

            }
            if ($("#filterlistInner").html() == "")
               $('#FilterList').css("display", "none");

         }
      });

   }
   $("#chat_cust_name").keyup(function(e) {
      $('#errorbirth').css('display', 'none');
   });

   $("#chat_cust_dob").bind("keypress", function(e) {
      var keyCode = e.which ? e.which : e.keyCode

      if (!(keyCode >= 48 && keyCode <= 57)) {
         $(".error").css("display", "inline");
         return false;
      } else {
         $(".error").css("display", "none");
      }
   });
   $("#chat_cust_time").bind("keypress", function(e) {
      var keyCode = e.which ? e.which : e.keyCode

      if (!(keyCode >= 48 && keyCode <= 57)) {
         $(".error").css("display", "inline");
         return false;
      } else {
         $(".error").css("display", "none");
      }
   });
   $("#chat_cust_name").keydown(function(event) {
      var inputValue = event.which;
      // allow letters and whitespaces only.
      if (!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0) && (inputValue != 8) && (inputValue != 9)) {
         event.preventDefault();
      }
   });
   $("#chat_cust_place").keydown(function(event) {
      var inputValue = event.which;
      // allow letters and whitespaces only.
      if (!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0) && (inputValue != 8) && (inputValue != 9)) {
         event.preventDefault();
      }
   });
   $("#chat_cust_dob").keyup(function(e) {
      $('#errordob').css('display', 'none');
      if (e.keyCode != 8) {
         if ($(this).val().length == 2) {
            $(this).val($(this).val() + "/");
         } else if ($(this).val().length == 5) {
            $(this).val($(this).val() + "/");
         }
      } else {
         var temp = $(this).val();

         if ($(this).val().length == 5) {
            $(this).val(temp.substring(0, 4));
         } else if ($(this).val().length == 2) {
            $(this).val(temp.substring(0, 1));
         }
      }
   });
   $("#chat_cust_time").keyup(function(e) {
      $('#errortime').css('display', 'none');
      if (e.keyCode != 8) {
         if ($(this).val().length == 2) {
            $(this).val($(this).val() + ":");
         } else if ($(this).val().length == 5) {
            $(this).val($(this).val() + ":");
         }
      } else {
         var temp = $(this).val();

         if ($(this).val().length == 5) {
            $(this).val(temp.substring(0, 4));
         } else if ($(this).val().length == 2) {
            $(this).val(temp.substring(0, 1));
         }
      }
   });
   $("#chat_cust_place").on('keyup paste', function() {
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
         $.ajax({
            url: "<?= base_url() ?>front/citydata",
            data: {
               "cityname": citysearch
            },
            type: 'post',
            dataType: "html",
            success: function(result, textStatus, request) {
               //console.log(result);
               //console.log(textStatus);
               //console.log(request);
               var content = '';
               if (result.length >= 3) {
                  suggest_results2.empty();
                  result = JSON.parse(result);

                  $.each(result, function(i, row) {
                     content += "<li><a href=\"javascript:\" data-resource-id=\"" + row.id + "\" data-airport=\"" + row.name + "\">" + row.name + "</a></li>";
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

   $(document).on('click', 'ul.suggest-results2 a', function() {
      var $this = $(this);
      var form = $this.closest('form');
      console.log($(this).text())
      form.find('input.citysearchval2').val($(this).text());
      form.find('input.selectcount').val('1');
      form.find('.suggest2').hide();
   });
   <?php if (!$this->session->userdata('id') && $this->session->userdata('countryCode') == 'IN') { ?>
      $(document).ready(function() {
         var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
               sURLVariables = sPageURL.split('&'),
               sParameterName,
               i;

            for (i = 0; i < sURLVariables.length; i++) {
               sParameterName = sURLVariables[i].split('=');

               if (sParameterName[0] === sParam) {
                  return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
               }
            }
         };
         var promotional = getUrlParameter('signup');
         console.log(promotional);
         if (promotional == 'offer') {
            /* setTimeout(function(){ 
                     $.magnificPopup.open({
            items: {
              src: '#signup-dialog',
              type: 'inline'
            },
            midClick: true,
            closeOnBgClick: false,
            mainClass: 'mfp-fade',
            focus:'.logindsdssds'
            });
            var promoamt = <?php echo $promotion[0]->promo_amt; ?>;
            $('#promotext').css('display', 'block');
            $("#prm_amt").text(promoamt);
            $('#promodisc').val(promoamt);
            }, 3000); */
         } else if (promotional === undefined) {
            /* setTimeout(function(){ 
            $.magnificPopup.open({
   items: {
     src: '#signup-dialog',
     type: 'inline'
   },
   midClick: true,
   closeOnBgClick: false,
   mainClass: 'mfp-fade',
   focus:'.logindsdssds'
   });
   $('#promotext').css('display', 'none');
   $('#promodisc').val(0);
   }, 3000);    */
         }
         $('.Decoration_none').click(function() {
            $('#promotext').css('display', 'none');
            $('#promodisc').val(0);
         });
      });
   <?php } ?>
</script>
<style>
   span.input-group-append.input-group-addon {
      background: #ff8820;
      color: #fff;
   }

   input[type=number]::-webkit-outer-spin-button,
   input[type=number]::-webkit-inner-spin-button {
      -webkit-appearance: initial !important;
   }

   input[type=number]::-webkit-outer-spin-button,
   input[type=number]::-webkit-inner-spin-button {
      -webkit-appearance: inner-spin-button !important;
   }

   button.btn.btn-primary {
      background: #ff8820;
      border: #ff8820;
   }

   @media only screen and (max-width: 480px) {

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: initial !important;
      }

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: inner-spin-button !important;
      }

      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
         opacity: 1 !important;
      }

      input::-webkit-inner-spin-button {
         opacity: 1;
      }

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: inner-spin-button !important;
      }

      .datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-top {
         /* top: 0; */
         left: 27px !important;
      }

      .datepicker table tr td,
      .datepicker table tr th {
         border-radius: 0;
         padding: 7px 9px !important;
         font-size: 13px;
      }

      .datepicker-dropdown.datepicker-orient-top:before {
         display: none;
      }

      .datepicker-dropdown.datepicker-orient-top:after {
         display: none;
      }

      .online_queue {
         color: #fff;
         background-position: right;
         border: 1px solid #66B21B !important;
         background: #66B21B !important;
         padding: 6px !important;
         padding: 8px 0px 8px !important;
         position: relative;
         right: -106px;
         top: -150px;
         width: 32%;
      }
   }
</style>
<link rel="stylesheet" href="<?= base_url() ?>admin-assets/assets/css/datepicker.css">
<script src="<?= base_url() ?>admin-assets/assets/js/bootstrap-datepicker.js"></script>
<script>
   const
      range = document.getElementById('range'),
      rangeV = document.getElementById('rangeV'),
      setValue = () => {
         const
            newValue = Number((range.value - range.min) * 100 / (range.max - range.min)),
            newPosition = 10 - (newValue * 0.2);
         rangeV.innerHTML = `<span>${range.value}</span>`;
         rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
      };
   document.addEventListener("DOMContentLoaded", setValue);
   range.addEventListener('input', setValue);



   if (jQuery().datepicker) {
      $('.date-picker')
         .datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            startDate: '01/01/1900',
         });
   }
   $(document).ready(function() {
      $("#getNumero").click(function() {

         var name = $('.birthname').val();
         var dateofbirth = $('.dateofbirth').val();

         if (name == "") {
            $('#errnamemsg').css('display', 'block');
            $('#errnamemsg').text('Please enter your full name');
            return false;
         }
         if ((name.length <= 2) || (name.length >= 26)) {


            $('#errnamemsg').css('display', 'block');
            $('#errnamemsg').text('Please enter your valid name');
            return false;
         }


         if (dateofbirth == "") {
            $('#errdobmsg').css('display', 'block');
            $('#errdobmsg').text('Please enter your DOB');
            return false;
         }
         $('#errnamemsg').css('display', 'none');
         $('#errdobmsg').css('display', 'none');
         $.ajax({

            url: "<?= base_url('numerology/details') ?>",

            type: 'POST',

            dataType: "json",

            data: {
               'name': name,
               'dateofbirth': dateofbirth
            },

            success: function(response) {
               if (response.status == 'success') {
                  window.location.href = "<?= base_url(); ?>numerology/numerodetails";
               }

            }

         });
      });
      $(".birthname").click(function() {
         $('#errnamemsg').css('display', 'none');
      });
      $(".dateofbirth").click(function() {
         $('#errdobmsg').css('display', 'none');
      });
   });
</script>
<style>
   @media(max-width:600px) {

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: initial !important;
      }

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: inner-spin-button !important;
      }

      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
         opacity: 1 !important;
      }

      input::-webkit-inner-spin-button {
         opacity: 1 !important;
      }

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: inner-spin-button !important;
      }
   }

   @media(max-width:480px) {

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: initial !important;
      }

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: inner-spin-button !important;
      }

      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
         opacity: 1 !important;
      }

      input::-webkit-inner-spin-button {
         opacity: 1 !important;
      }

      input[type=number]::-webkit-outer-spin-button,
      input[type=number]::-webkit-inner-spin-button {
         -webkit-appearance: inner-spin-button !important;
      }
   }
</style>
<script>
   $(".filterMobileData").click(function() {
      var html = '';
      var appendHtml = true;
      //console.log($(this).parent().text().trim());
      //var newCheckVal =  $(this).val().replace(/\s/g, '');
      var searchName = $("#SearchAstrologer").val();
      var newCheckVal = $(this).val().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '');
      if ($(this).prop("checked") == true) {
         html += '<span id="' + newCheckVal + '" class="btn btn-default filterAd margin_Rgt10"><span>' + $(this).parent().text().trim() + ' </span><a class="font14" aria-hidden="true" onclick="CloseFilterSpan(\'' + $(this).parent().text().trim() + '\', \'' + newCheckVal + '\')">X</a></span>';
         //console.log("Checkbox is checked.");
      } else if ($(this).prop("checked") == false) {
         //console.log("Checkbox is unchecked.");
         appendHtml = false;
      }
      var astroLang = "";
      var astroexp = "";
      var astroRating = "";
      var astroprice = $('#range').val();
      var astroExpertise = "";
      $('#astroVendorDetail').html('<div id="loading" style="" ></div>');
      $('.language:checked').each(function() {
         if (astroLang == "")
            astroLang += $(this).val();
         else
            astroLang += "," + $(this).val();
      });
      console.log(astroLang)
      $('.exp:checked').each(function() {
         if (astroexp == "")
            astroexp += $(this).val();
         else
            astroexp += "," + $(this).val();
      });
      console.log(astroexp)

      $('.expertise:checked').each(function() {
         if (astroExpertise == "")
            astroExpertise += $(this).val();
         else
            astroExpertise += "," + $(this).val();
      });
      console.log(astroExpertise)

      $('.rating:checked').each(function() {
         if (astroRating == "")
            astroRating += $(this).val();
         else
            astroRating += "," + $(this).val();
      });
      console.log(astroRating)
      $.ajax({
         url: "<?= base_url() ?>front/astroVendorFilter",
         method: "POST",
         data: {
            astroLang: astroLang,
            astroexp: astroexp,
            astroRating: astroRating,
            astroprice: astroprice,
            astroExpertise: astroExpertise,
            searchName: searchName
         },
         success: function(data) {
            if (data != '') {
               $('#filter').modal('hide');
               $('#partial').html('');
               $('#partial').html(data);
            } else {

               $('#filter').modal('hide');
               var nodata = "No results found. Please choose another one!"
            }
            $('#astroVendorDetail').html(nodata);

            if (appendHtml) {
               $('#partial').css("display", "block");
               $("#partial").append(html);
            } else {
               $("#" + newCheckVal).remove();
            }
            if ($("#partial").html() == "")
               $('#partial').css("display", "none");

         }
      });
   });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>