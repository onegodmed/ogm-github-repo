<style>
    .page_title h1 {
    float: left;
    width: 100%;
    color: #fff;
    margin: 0;
    font-size: 36px;
    text-transform: capitalize;
}
</style>
<div class="ast_pagetitle">
   <div class="ast_img_overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="page_title">
               <h1>Free Kundali</h1>
            </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="breadcrumb">
               <li><a href="<?php echo base_url(); ?>">home</a></li>
               <li>//</li>
               <li><a href="#">Free Kundali</a></li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!--BKnowcrumb end-->
<!--BKnowcrumb start-->
<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
            
         </div>
         <div class="col-lg-12 col-md-12 col-sm-10 col-xs-12 col-lg-offset-0 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
            <div class="ast_heading">
               <p class="text-justify"><?php echo $this->session->userdata('kunname'); ?><br> <?php echo $this->session->userdata('kundate'); ?>/<?php echo $this->session->userdata('kunmonth'); ?>/<?php echo $this->session->userdata('kunyear'); ?>  <?php echo $this->session->userdata('kunhr'); ?>:<?php echo $this->session->userdata('kunmm'); ?>:<?php echo $this->session->userdata('kunss'); ?>  <?php echo $this->session->userdata('kunbirthplace'); ?> </p>
            </div>
         </div>
      </div>
      <div class="row">
         <div>
            <div class="col-md-3">
               <div id="scroller-anchor"></div>
               <div id="sidebar">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                           <h4 class="panel-title">
                              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Horoscope
                              </a>
                           </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                           <div class="panel-body">
                              <ul>
                                 <li class="active">
                                    <a class="tab-title text-block"  href="#tab1" data-toggle="tab">
                                    <span class="title">Dashboard</span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a class="tab-title text-block"  href="#tab2" data-toggle="tab">
                                    <span class="title">Astro Profile</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab3" data-toggle="tab">
                                    <span class="title">Kundli Chart</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab4" data-toggle="tab">
                                    <span class="title">House Cusps</span>
                                    </a>
                                 </li>
                                 <li><a href="#tab5" data-toggle="tab">
                                    <span class="title">Planet Ashtak</span>
                                    </a>
                                 </li>
                                 <li><a href="#tab6" data-toggle="tab">
                                    <span class="title">Sarvashtak</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Daily Forecast
                              </a>
                           </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="panel-body">
                              <ul>
                                 <li class="">
                                    <a class="tab-title text-block"  href="#tab7" data-toggle="tab">
                                    <span class="title">Daily Prediction</span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a class="tab-title text-block"  href="#tab8" data-toggle="tab">
                                    <span class="title">Biorhythm</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Horoscope Dasha
                              </a>
                           </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                           <div class="panel-body">
                              <ul>
                                 <li class="">
                                    <a href="#tab9" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Vimshottari Dasha</span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="#tab10" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Yogini Dasha</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab11" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Char Dasha</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                             Horoscope Dosha
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                           <div class="panel-body">
                              <ul>
                                 <li class="">
                                    <a href="#tab12" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Kalsarpa Dosha</span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="#tab13" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Manglik Dosha</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#tab14" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Pitra Dosha</span>
                                    </a>
                                 </li>
                                  <li>
                                    <a href="#tab15" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Sadhesati Cycle</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                          <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                             Remedies
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                           <div class="panel-body">
                              <ul>
                                 <li class="">
                                    <a href="#tab16" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Gemstone Suggestion</span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="#tab17" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Rudraksha Suggestion</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                        <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSix">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Prediction Reports
                              </a>
                           </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                           <div class="panel-body">
                              <ul>
                                 <li class="">
                                    <a href="#tab18" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Ascendant Report</span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="#tab19" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Kundli Predictions</span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                       <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSeven">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                           Numerology
                              </a>
                           </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                           <div class="panel-body">
                              <ul>
                                 <li class="">
                                    <a href="#tab20" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Favorable Points</span>
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="#tab21" data-toggle="tab" class="tab-title text-block">
                                    <span class="title">Numerology Prediction </span>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab1">
               <div class="col-xs-12 green">
                  <h1>Namaste, <?php echo $this->session->userdata('kunname');?></h1>
                  <p>Your kundli is ready. You are born on <?php echo $this->session->userdata('kundate');?>/<?php echo $this->session->userdata('kunmonth');?>/<?php echo $this->session->userdata('kunyear');?> at <?php echo $this->session->userdata('kunhr');?>:<?php echo $this->session->userdata('kunmm');?> am. Your place of birth is <?php echo $this->session->userdata('kunbirthplace');?> If there is any mistake, please Click here to re-enter your birth details again or else go ahead and explore your Kundli.</p>
                  <h1>About You, <?php echo $this->session->userdata('kunname');?></h1>
                  <p>You are born with the Taurus rising. This means your ascendant is Taurus and Venus is your ascendant lord. Being ascendant lord, Venus is one of the most prominent and beneficial planet for you. You can see the detailed ascendant report from below. Your Moon sign is Taurus and Moon sign lord is Venus. Moon sign is also called your birth sign or Janma Rashi. Your birth Nakshatra is Rohini.</p>
               </div>
               <div class="col-xs-12">
                  <h2>Kundli based personalised predictions</h2>
                  <hr>
               </div>
               <div class="card-container">
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Your kundli based daily prediction</p>
                        </div>
                        <div class="card-content">
                           <h2>Your kundli based daily prediction</h2>
                           <a class="tab-title text-block"  href="#tab7" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Your Biorhythms for today</p>
                        </div>
                        <div class="card-content">
                           <h2>Your Biorhythms for today</h2>
                            <a class="tab-title text-block"  href="#tab8" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <h2>Kundli Predictions and Analysis</h2>
                     <hr>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Read your kundli predictions here</p>
                        </div>
                        <div class="card-content">
                           <h2>Read your kundli predictions here</h2>
                           <a class="tab-title text-block"  href="#tab19" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Get your ascendant report</p>
                        </div>
                        <div class="card-content">
                           <h2>Get your ascendant report</h2>
                           <a class="tab-title text-block"  href="#tab18" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Numerology analysis for you</p>
                        </div>
                        <div class="card-content">
                           <h2>Numerology analysis for you</h2>
                           <a class="tab-title text-block"  href="#tab20" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Numerology Favorable Points</p>
                        </div>
                        <div class="card-content">
                           <h2>Numerology Favorable Points</h2>
                           <a class="tab-title text-block"  href="#tab20" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <h2>Dosha Analysis for Your Kundali</h2>
                     <hr>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Get Kal Sarpa Dosha analysis</p>
                        </div>
                        <div class="card-content">
                           <h2>Get Kal Sarpa Dosha analysis</h2>
                           <a class="tab-title text-block"  href="#tab12" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Check Manglik Dosha analysis</p>
                        </div>
                        <div class="card-content">
                           <h2>Check Manglik Dosha analysis</h2>
                           <a class="tab-title text-block"  href="#tab13" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Your Pitra Dosha Analysis Report</p>
                        </div>
                        <div class="card-content">
                           <h2>Your Pitra Dosha Analysis Report</h2>
                           <a class="tab-title text-block"  href="#tab14" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Find Sadhesati Analysis</p>
                        </div>
                        <div class="card-content">
                           <h2>Find Sadhesati Analysis</h2>
                           <a class="tab-title text-block"  href="#tab15" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <h2>Kundli Remedial Measures</h2>
                     <hr>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Which gemstones you can wear?</p>
                        </div>
                        <div class="card-content">
                           <h2>Which gemstones you can wear?</h2>
                           <a class="tab-title text-block"  href="#tab16" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Rudraksha for your kundli</p>
                        </div>
                        <div class="card-content">
                           <h2>Rudraksha for your kundli</h2>
                           <a class="tab-title text-block"  href="#tab17" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <h2>Your Kundli Calculations</h2>
                     <hr>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Astrological Details for You</p>
                        </div>
                        <div class="card-content">
                           <h2>Astrological Details for You</h2>
                           <a class="tab-title text-block"  href="#tab2" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>See Your Kundli Charts</p>
                        </div>
                        <div class="card-content">
                           <h2>See Your Kundli Charts</h2>
                           <a class="tab-title text-block"  href="#tab3" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>View Your House Cusp Degrees</p>
                        </div>
                        <div class="card-content">
                           <h2>View Your House Cusp Degrees</h2>
                           <a class="tab-title text-block"  href="#tab4" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Vimshottari Dasha for you</p>
                        </div>
                        <div class="card-content">
                           <h2>Vimshottari Dasha for you</h2>
                           <a class="tab-title text-block"  href="#tab9" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Check Your Yogini Dasha</p>
                        </div>
                        <div class="card-content">
                           <h2>Check Your Yogini Dasha</h2>
                           <a class="tab-title text-block"  href="#tab10" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="custom-card">
                        <div class="card-img-box">
                           <img src="<?php echo base_url(); ?>front-assets/images/header/kundli-bg.jpg" />
                           <p>Check Your Char Dasha</p>
                        </div>
                        <div class="card-content">
                           <h2>Check Your Char Dasha</h2>
                           <a class="tab-title text-block"  href="#tab11" data-toggle="tab">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
               </div>
               <div class="tab-pane fade in" id="tab2">
                   <div class="col-xs-12">
                  <h2>Your Astro Details</h2>
                  <hr>
               </div>
               <div class="col-xs-12 col-md-12 m-b-25 ">
<div class="row">
<div class="col-xs-12 col-sm-4 m-t-25">
<h4 id="testdetails">Basic Details</h4>
<div class="table-scrollable text-left table-scrollable-borderless">
<table class="table table-hover dasha table-light blodTd">
<tbody>
<tr>
<td class="">Name</td>
<td class="text-capitalize"><?php echo $this->session->userdata('kunname');?></td>
</tr>
<tr>
<td class="">Date of Birth</td>
<td><?php echo $this->session->userdata('kundate');?>/<?php echo $this->session->userdata('kunmonth');?>/<?php echo $this->session->userdata('kunyear');?> </td>
</tr>
<tr>
<td class="">Time of Birth</td>
<td><?php echo $this->session->userdata('kunhr');?>:<?php echo $this->session->userdata('kunmm');?>:<?php echo $this->session->userdata('kunhr');?></td>
</tr>
<tr>
<td class="">Place</td>
<td><?php echo $this->session->userdata('kunbirthplace');?></td>
</tr>
<tr>
<td class="">Latitude</td>
<td>28.6139</td>
</tr>
<tr>
<td class="">Longitude</td>
<td>77.209</td>
</tr>
<tr>
<td class="">Timezone</td>
<td>5.5</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="col-xs-12 col-sm-4 m-t-25">
<h4> Panchang Details</h4>
<div class="table-scrollable text-left table-scrollable-borderless">
<table class="table table-hover dasha table-light blodTd">
<tbody>
    
<tr>
<td>Tithi</td>
<td><?php echo $getBasicPanchang['tithi'];  ?></td>
</tr>
<tr>
<td>Yog</td>
<td><?php echo $getBasicPanchang['yog'];  ?></td>
</tr>
<tr>
<td>Nakshatra</td>
<td><?php echo $getBasicPanchang['nakshatra'];  ?></td>
</tr>
<tr>
<td>Karan</td>
<td><?php echo $getBasicPanchang['karan'];  ?></td>
</tr>
<tr>
<td>Sunrise</td>
<td><?php echo $getBasicPanchang['sunrise'];  ?></td>
</tr>
<tr>
<td>Sunset</td>
<td><?php echo $getBasicPanchang['sunset'];  ?></td>
</tr>
<tr>
<td>Ritu</td>
<td>Sharad</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="col-xs-12 col-sm-4 m-t-25">
<h4> Astro Details</h4>
<div class="table-scrollable text-left table-scrollable-borderless">
<table class="table table-hover dasha table-light blodTd">
<tbody>
<tr>
<td>Ascendant</td>
<td><?php echo $getAstroDetails['ascendant'];  ?></td>
</tr>
 <tr>
<td>Varna</td>
<td><?php echo $getAstroDetails['Varna'];  ?></td>
</tr>
<tr>
<td>Vashya</td>
<td><?php echo $getAstroDetails['Vashya'];  ?></td>
</tr>
<tr>
<td>Yoni</td>
<td><?php echo $getAstroDetails['Yoni'];  ?></td>
</tr>
<tr>
<td>Gan</td>
<td><?php echo $getAstroDetails['Gan'];  ?></td>
</tr>

<tr>
<td>Paya</td>
<td><?php echo $getAstroDetails['paya'];  ?></td>
</tr>
<tr>
<td>Name Alphabet</td>
<td><?php echo $getAstroDetails['name_alphabet'];  ?></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<hr class="mt--2 mb--2">
<div class="row mt--1">
    <div class="chart-text">
<div class="col-md-6 col-xs-12">
<h3>Lagna or Birth Chart</h3>
<p>
The Vedic horoscope represents the birth chart also known as the natal chart which describes the position of the moon, the sun and the planet on basis of a person’s exact time of birth. One has to know his date of birth, time and place. A peek into this will guide you to the future and help you achieve better things in life. </p>
</div>
<div class="visible-xs">&nbsp;</div>
<div class="col-md-6 col-xs-12">
    
    <?php echo $getChartByBirth['svg']; ?>
    <body onload="draw();">
     <canvas id="canvas" width="300" height="300"></canvas>
     </body>
</div>
</div>
</div>
<hr class="mt--2 mb--1">

<div class="row mt--2 hidden-xs mb--1">
<div class="col-xs-12">
    
<h3>Current Vimshottari Dasha</h3>
</div>
<div class="col-xs-12 current-dasha p-t-10 p-b-10" style="background: #ffecdb">
<div class="width-18" style="display: inline-block">
<h4 class="unmarg text-center text-nowrap">Major Dasha</h4>
<p style="font-size: 1em" id="current_dasha_major" class="text-center"><?php echo $getCurrentVimDasha['major']['planet'];   ?><br>
<span class="text-nowrap"><?php echo $getCurrentVimDasha['major']['start'];   ?></span><br>
<span class="text-nowrap"><?php echo $getCurrentVimDasha['major']['end'];   ?></span>
</p>
</div>
<div class="width-5" style="display: inline-block"></div>
<div class="width-18" style="display: inline-block">
<h4 class="unmarg text-center text-nowrap">Minor Dasha</h4>
<p id="current_dasha_minor" class="text-center"><?php echo $getCurrentVimDasha['minor']['planet'];   ?><br>
<span class="text-nowrap"><?php echo $getCurrentVimDasha['minor']['start'];   ?></span><br>
<span class="text-nowrap"><?php echo $getCurrentVimDasha['minor']['end'];   ?></span>
</p>
</div>
<div class="width-5" style="display: inline-block"></div>
<div class="width-18" style="display: inline-block">
<h4 class="unmarg text-center text-nowrap">Sub minor Dasha</h4>
<p id="current_dasha_sub_minor" class="text-center"><?php echo $getCurrentVimDasha['sub_minor']['planet'];   ?><br>
<span class="text-nowrap"><?php echo $getCurrentVimDasha['sub_minor']['start'];   ?></span><br>
<span class="text-nowrap"><?php echo $getCurrentVimDasha['sub_minor']['end'];   ?></span>
</p>
</div>
<div class="width-5" style="display: inline-block"></div>
<div class="width-18" style="display: inline-block">
<h4 class="unmarg text-center text-nowrap">sub Dasha</h4>
 <p id="current_dasha_sub_sub_minor" class="text-center"><?php echo $getCurrentVimDasha['sub_sub_minor']['planet'];   ?><br>
<span class="text-nowrap"><?php echo $getCurrentVimDasha['sub_sub_minor']['start'];   ?></span><br>
<span class="text-nowrap"><?php echo $getCurrentVimDasha['sub_sub_minor']['end'];   ?></span>
</p>
</div>
<div class="width-5" style="display: inline-block"></div>
<div class="width-18" style="display: inline-block">
<h4 class="unmarg text-center text-nowrap">Pran Dasha</h4>
<p class="text-center"><?php echo $getCurrentVimDasha['sub_sub_sub_minor']['planet'];   ?><br>
<span class="text-nowrap"><?php echo $getCurrentVimDasha['sub_sub_sub_minor']['start'];   ?></span><br>
<span class="text-nowrap"><?php echo $getCurrentVimDasha['sub_sub_sub_minor']['end'];   ?></span>
</p>
</div>
</div>
</div>
<div class="row visible-xs mt--2 mb--2">
<div class="col-xs-12">
<h3>Current Vimshottari Dasha</h3>
<div class="dasha-head">
<p class="h4">Major Dasha</p>
<p id="current_dasha_major">Mars &nbsp;&nbsp; 2-1-2018 23:57 to 2-1-2025 17:57 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Antar Dasha</p>
<p id="current_dasha_minor">Jupiter &nbsp;&nbsp; 19-6-2019 15:42 to 25-5-2020 13:18 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Prtyantar Dasha</p>
<p id="current_dasha_sub_minor">Moon &nbsp;&nbsp; 16-2-2020 3:0 to 15-3-2020 12:48 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sookshm Dasha</p>
<p id="current_dasha_sub_sub_minor">Mercury &nbsp;&nbsp; 3-3-2020 16:43 to 7-3-2020 17:19 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Pran Dasha</p>
<p>Rahu &nbsp;&nbsp; 5-3-2020 22:39 to 6-3-2020 13:8 </p>
</div>
</div>
</div>
</div>
  </div>
                    <div class="tab-pane fade in" id="tab3">
                   <div class="col-xs-12">
                  <h2>Planetary Positions Details</h2>
                  <hr>
               </div>
               <div class="col-xs-12 col-md-12 m-b-25 ">
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>
<th>Planet</th>
<th>R</th>
<th>Sign</th>
<th>Sign Lord</th>
<th>Degree</th>
<th>Nakshatra</th>
<th>Nakshatra Lord</th>
<th>House</th>
</tr>
</thead>
<tbody>
    
    <?php foreach($getPlanetsDetails as $arrData) { ?>
<tr> 
<td><?php echo  $arrData['nakshatraLord'];  ?></td>
<td>-</td>
<td><?php echo  $arrData['sign'];  ?></td>
<td><?php echo  $arrData['signLord'];  ?></td>
<td><?php echo  ceil($arrData['fullDegree']);  ?>:<?php echo  ceil($arrData['normDegree']);  ?></td>

<td><?php echo  $arrData['nakshatra'];  ?></td>
<td><?php echo  $arrData['nakshatraLord'];  ?></td>
<td><?php echo  $arrData['house'];  ?></td>
</tr>
<?php }  ?>

</tbody>
</table>
</div>

<hr class="mt--2 mb--2">
<div class="row mt--1">
    <div class="chart-text">
<div class="col-md-6 col-xs-12">
<h3>Select Chart</h3>
<form action="" method="post">
<select class="bs-select form-control input-medium" name="horo_chart_type" id="myselection" onchange="Chart(this.value,'north',this.text)">
<option value="One">Birth Chart</option>
<option value="Two">Sun Chart</option>
<option value="Three">Moon Chart</option>
<option value="Four">Chalit Chart</option>
<option value="Five">Hora Chart</option>
<option value="Six">Dreshkan Chart</option>
<option value="Seven">Chathurthamasha Chart</option>
<option value="Eight">Panchmansha Chart</option>
<option value="Nine">Saptamansha Chart</option>
<option value="Ten">Ashtamansha Chart</option>
<option value="Eleven">Navamansha Chart</option>
<option value="Twelve">Dashamansha Chart</option>
<option value="Threeteen">Dwadashamsha chart</option>
<option value="Fourteen">Shodashamsha Chart</option>
<option value="Fifteen">Vishamansha Chart</option>
<option value="Sixteen">Chaturvimshamsha Chart</option>
<option value="Seventeen">Bhamsha Chart</option>
<option value="Eighteen">Trishamansha Chart</option>
<option value="Nineteen">Khavedamsha Chart</option>
<option value="Tweenty">Akshvedansha Chart</option>
<option value="Tweentyone">Shashtymsha Chart</option>
</select>
<div id="swap"><span id="swaps">Birth Chart</span> <?php echo $getChartByBirth['svg']; ?></div>
</form>
<p>
    
The Vedic horoscope represents the birth chart also known as the natal chart which describes the position of the moon, the sun and the planet on basis of a person’s exact time of birth. One has to know his date of birth, time and place. A peek into this will guide you to the future and help you achieve better things in life. </p>
</div>
<div class="visible-xs">&nbsp;</div>

<div class="col-md-6 col-xs-12">
   <div id="showOne"  class="myDiv">
      <span>Birth Chart</span> 
      <?php echo $getChartByBirth['svg']; ?>
        
   </div>
 
   <div id="showTwo" class="myDiv"><span>Sun Chart</span>  <?php echo $getChartBySun['svg']; ?></div>
   <div id="showThree" class="myDiv"><span>Moon Chart</span>  <?php echo $getChartByMoon['svg']; ?></div>
   <div id="showFour" class="myDiv"><span>Chalit Chart</span>  <?php echo $getChartByChalit; ?></div>
   <div id="showFive" class="myDiv"><span>Hora Chart</span>  <?php echo $getChartByHora['svg']; ?></div>
   <div id="showSix" class="myDiv"><span>Dreshkan Chart</span>  <?php echo $getChartByDreshkan['svg']; ?></div>
   <div id="showSeven" class="myDiv"><span>Chathurthamasha Chart</span>  <?php echo $getChartByChathurthamasha['svg']; ?></div>
   <div id="showEight" class="myDiv"><span>Panchmansha Chart</span>  <?php echo $getChartByPanchmansha['svg']; ?></div>
   <div id="showNine" class="myDiv"><span>Saptamansha Chart</span>  <?php echo $getChartBySaptamansha['svg']; ?></div>
   <div id="showTen" class="myDiv"><span>Ashtamansha Chart</span>  <?php echo $getChartByAshtamansha['svg']; ?></div>
   <div id="showEleven" class="myDiv"><span>Navamansha Chart</span>  <?php echo $getChartByNavamansha['svg']; ?></div>
   <div id="showTwelve" class="myDiv"><span>Dashamansha Chart</span>  <?php echo $getChartByDashamansha['svg']; ?></div>
   <div id="showThreeteen" class="myDiv"><span>Dwadashamsha chart</span>  <?php echo $getChartByDwadashamsha['svg']; ?></div>
    <div id="showFourteen" class="myDiv"><span>Shodashamsha Chart</span>  <?php echo $getChartByShodashamsha['svg']; ?></div>
     <div id="showFifteen" class="myDiv"><span>Vishamansha Chart</span>  <?php echo $getChartByVishamansha['svg']; ?></div>
      <div id="showSixteen" class="myDiv"><span>Chaturvimshamsha Chart</span>  <?php echo $getChartByChaturvimshamsha['svg']; ?></div>
       <div id="showSeventeen" class="myDiv"><span>Bhamsha Chart</span>  <?php echo $getChartByBhamsha['svg']; ?></div>
       <div id="showEighteen" class="myDiv"><span>Trishamansha Chart</span>  <?php echo $getChartByTrishamansha['svg']; ?></div>
       <div id="showNineteen" class="myDiv"><span>Khavedamsha Chart</span>  <?php echo $getChartByKhavedamsha['svg']; ?></div>
       <div id="showTweenty" class="myDiv"><span>Akshvedansha Chart</span>  <?php echo $getChartByAkshvedansha['svg']; ?></div>
       <div id="showTweentyone" class="myDiv"><span>Shashtymsha Chart</span>  <?php echo $getChartByShashtymsha['svg']; ?></div>
    <body onload="draw1();">
     <canvas id="canvas1" width="300" height="300"></canvas>
     </body>
</div>
</div>
</div>
<hr class="mt--2 mb--1">

<div class="row mt--2 hidden-xs mb--1">
<div class="col-xs-12">
<h3>Current Vimshottari Dasha</h3>
</div>
<div class="col-xs-12 current-dasha p-t-10 p-b-10" style="background: #ffecdb">
<div class="width-18" style="display: inline-block">
<h4 class="unmarg text-center text-nowrap">Major Dasha</h4>
<p style="font-size: 1em" id="current_dasha_major" class="text-center">Mars<br>
<span class="text-nowrap">2-1-2018 23:57</span><br>
<span class="text-nowrap">2-1-2025 17:57</span>
</p>
</div>
<div class="width-5" style="display: inline-block"></div>
<div class="width-18" style="display: inline-block">
<h4 class="unmarg text-center text-nowrap">Antar Dasha</h4>
<p id="current_dasha_minor" class="text-center">Jupiter<br>
<span class="text-nowrap">19-6-2019 15:42</span><br>
<span class="text-nowrap">25-5-2020 13:18</span>
</p>
</div>
<div class="width-5" style="display: inline-block"></div>
<div class="width-18" style="display: inline-block">
<h4 class="unmarg text-center text-nowrap">Prtyantar Dasha</h4>
<p id="current_dasha_sub_minor" class="text-center">Moon<br>
<span class="text-nowrap">16-2-2020 3:0</span><br>
<span class="text-nowrap">15-3-2020 12:48</span>
</p>
</div>
<div class="width-5" style="display: inline-block"></div>
<div class="width-18" style="display: inline-block">
<h4 class="unmarg text-center text-nowrap">Sookshm Dasha</h4>
 <p id="current_dasha_sub_sub_minor" class="text-center">Mercury<br>
<span class="text-nowrap">3-3-2020 16:43</span><br>
<span class="text-nowrap">7-3-2020 17:19</span>
</p>
</div>
<div class="width-5" style="display: inline-block"></div>
<div class="width-18" style="display: inline-block">
<h4 class="unmarg text-center text-nowrap">Pran Dasha</h4>
<p class="text-center">Rahu<br>
<span class="text-nowrap">5-3-2020 22:39</span><br>
<span class="text-nowrap">6-3-2020 13:8</span>
</p>
</div>
</div>
</div>
<div class="row visible-xs mt--2 mb--2">
<div class="col-xs-12">
<h3>Current Vimshottari Dasha</h3>
<div class="dasha-head">
<p class="h4">Major Dasha</p>
<p id="current_dasha_major">Mars &nbsp;&nbsp; 2-1-2018 23:57 to 2-1-2025 17:57 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Antar Dasha</p>
<p id="current_dasha_minor">Jupiter &nbsp;&nbsp; 19-6-2019 15:42 to 25-5-2020 13:18 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Prtyantar Dasha</p>
<p id="current_dasha_sub_minor">Moon &nbsp;&nbsp; 16-2-2020 3:0 to 15-3-2020 12:48 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sookshm Dasha</p>
<p id="current_dasha_sub_sub_minor">Mercury &nbsp;&nbsp; 3-3-2020 16:43 to 7-3-2020 17:19 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Pran Dasha</p>
<p>Rahu &nbsp;&nbsp; 5-3-2020 22:39 to 6-3-2020 13:8 </p>
</div>
</div>
</div>



</div>
                   </div>
                <div class="tab-pane fade in" id="tab4">
                   <div class="col-xs-12">
                  <h2>Planetary Positions Details</h2>
                  <hr>
                  
               </div>
               <div class="col-md-12 col-xs-12 green">
<h3 class="">House Cusps and Sandhi
</h3>
<p>
According to the astrology, the cusp of house or Sandhi is the meeting of the two houses. The signs and the houses appear in counter-clockwise in the horoscope chart. Basically, houses are numbered from 1-12. The midpoint on the left side of the chart is always the first house, just like how 9 appears on the face of the clock. Thus, the second house cusp would appear where there is 8 on the clock. The 3rd cusp at 7 while the 20th house cusp at the 10. The 4th is always at the bottom of the chart whereas the 10th is always at the highest point. For the first sign (Aries) cusp may begin at any point as the signs move in clockwise direction and houses are constant. The first and seventh house represents the horizon on earth of someone’s birth. The location of the planet in the first 6 houses of the birth chart would not be visible since they are below the horizon line. </p>
</div>
               <div class="col-xs-12 col-md-12 m-b-25 ">
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>
<th>House</th>
<th>Sign</th>
<th>Bhav Madhaya</th>
<th>Sign</th>
<th>Bhav Sandhi</th>
</tr>
</thead>
<tbody>
    
    <?php   foreach($getBhavMadhya['bhav_madhya'] as $arrData) { ?>
    
<tr>
    <td><?php echo 'House' .$arrData['house']; ?></td>
    <td><?php echo $arrData['sign']; ?></td>
    <td><?php echo ceil($arrData['degree']); ?>:<?php echo ceil($arrData['norm_degree']); ?></td>
    <td>yhgthy</td>
    <td>03:58:51</td>
    </tr>
    <?php } ?>
     </tbody>
</table>
</div>
<hr class="mt--2 mb--2">
<div class="row mt--1">
    <div class="chart-text">
<div class="col-md-6 col-xs-12">
<h3>Select Chart</h3>
<form action="" method="post">
<select class="bs-select form-control input-medium" name="horo_chart_type" id="select_box">
<option value="Birth Chart">Birth Chart</option>
<option value="Sun Chart">Sun Chart</option>
<option value="Moon Chart">Moon Chart</option>
<option value="Chalit Chart">Chalit Chart</option>
<option value="Hora Chart">Hora Chart</option>
<option value="Dreshkan Chart">Dreshkan Chart</option>
<option value="Chathurthamasha Chart">Chathurthamasha Chart</option>
<option value="Panchmansha Chart">Panchmansha Chart</option>
<option value="Saptamansha Chart">Saptamansha Chart</option>
<option value="Ashtamansha Chart">Ashtamansha Chart</option>
<option value="Navamansha Chart">Navamansha Chart</option>
<option value="Dashamansha Chart">Dashamansha Chart</option>
<option value="Dwadashamsha chart">Dwadashamsha chart</option>
<option value="Shodashamsha Chart">Shodashamsha Chart</option>
<option value="Vishamansha Chart">Vishamansha Chart</option>
<option value="Chaturvimshamsha Chart">Chaturvimshamsha Chart</option>
<option value="Bhamsha Chart">Bhamsha Chart</option>
<option value="Trishamansha Chart">Trishamansha Chart</option>
<option value="Khavedamsha Chart">Khavedamsha Chart</option>
<option value="Akshvedansha Chart">Akshvedansha Chart</option>
<option value="Shashtymsha Chart">Shashtymsha Chart</option>
</select>
<div id="shows_only">Birth Chart</div>
<input type="text" id="show_only" disabled="">
</form>
<p>
The Vedic horoscope represents the birth chart also known as the natal chart which describes the position of the moon, the sun and the planet on basis of a person’s exact time of birth. One has to know his date of birth, time and place. A peek into this will guide you to the future and help you achieve better things in life. </p>
</div>
<div class="visible-xs">&nbsp;</div>
<div class="col-md-6 col-xs-12">
    <?php echo $getChartByBirth['svg']; ?>
    <body onload="draw1();">
     <canvas id="canvas1" width="300" height="300"></canvas>
     </body>
</div>
</div>
</div>


<div class="row visible-xs mt--2 mb--2">
<div class="col-xs-12">
<h3>Current Vimshottari Dasha</h3>
<div class="dasha-head">
<p class="h4">Major Dasha</p>
<p id="current_dasha_major">Mars &nbsp;&nbsp; 2-1-2018 23:57 to 2-1-2025 17:57 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Antar Dasha</p>
<p id="current_dasha_minor">Jupiter &nbsp;&nbsp; 19-6-2019 15:42 to 25-5-2020 13:18 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Prtyantar Dasha</p>
<p id="current_dasha_sub_minor">Moon &nbsp;&nbsp; 16-2-2020 3:0 to 15-3-2020 12:48 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sookshm Dasha</p>
<p id="current_dasha_sub_sub_minor">Mercury &nbsp;&nbsp; 3-3-2020 16:43 to 7-3-2020 17:19 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Pran Dasha</p>
<p>Rahu &nbsp;&nbsp; 5-3-2020 22:39 to 6-3-2020 13:8 </p>
</div>
</div>
</div>



</div>
                   </div>
                <div class="tab-pane fade in" id="tab5">
                   <div class="col-xs-12">
                  <h2>Planet Ashtak</h2>
                  <hr>
                  
               </div>
               <div class="col-md-12 col-xs-12 green">
<h3 class="">What is a Ashtakvarga (Bhinashtak Varga)</h3>
<p>
Bhinnashtak Varga indicates the utilities or worth of signs containing 0 to 8 bindus. It is also helpful in evaluating the potency of transits. Nil or zero bindu sign denotes a sign without any benefic place. Signs without a bindu has a special significance. For example, Bhinnashtak of mercury has 54 bindus, Jupiter has 56 while Venus has 52 bindus. A sign without bindu 0 is rare while one can find a sign of 5 bindus. On the contrary, sings in Bhinnashtakvargas of Saturn and Mars with 8 bindus is a rarity while the bindu sign with 0 is often found in them.

</p>
</div>
<hr class="mt--2 mb--2">
<div class="row mt--1">
    <div class="chart-text">
<div class="col-md-7 col-xs-12">
<form action="" method="post">
<h3 class="text-center">Select planet</h3>
<select  name="planet" id="myselections" style="height: 45px;font-size: 17px;color:#8896a0;width:100%">
<option value="First" selected="">Ashtak Varga For Sun </option>
<option value="Second">Ashtak Varga For Moon </option>
<option value="Third">Ashtak Varga For Mars </option>
<option value="Fourth" >Ashtak Varga For Mercury </option>
<option value="Fifth">Ashtak Varga For Jupiter </option>
<option value="Sixth">Ashtak Varga For Venus </option>
<option value="Seventh">Ashtak Varga For Saturn </option>
</select>
<div id="swapping">
<div>
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd" >
<thead>
<tr>

<th class="">Planet
Zodiac</th>
<th class="text-center">Sun</th>
<th class="text-center">Moon</th>
<th class="text-center">Mars</th>
<th class="text-center">Mercury</th>
<th class="text-center">Jupiter</th>
<th class="text-center">Venus</th>
<th class="text-center">Saturn</th>
<th class="text-center">Ascendant</th>
<th class="text-center">Total</th>
</tr>
</thead>
<tbody>
    
    
<tr>
   <td class=" text-capitalize">Aries</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Taurus</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Gemini</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Cancer</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Leo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Virgo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['total'];  ?></td>
</tr>
  <tr>
   <td class=" text-capitalize">Libra</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Scorpio</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Sagittarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Capricorn</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Aquarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Pisces</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['total'];  ?></td>
</tr>  
 </tbody>
</table>


</div>
</div>




 </div>
</form>
</div>
<div class="visible-xs">&nbsp;</div>
<div class="col-md-6 col-xs-12">
   
</div>
</div>
</div>

               <div class="col-xs-12 col-md-12 m-b-25 ">
                  <div id="showFirst"  class="myDivs first">
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>

<th class="">Planet
Zodiac</th>
<th class="text-center">Sun</th>
<th class="text-center">Moon</th>
<th class="text-center">Mars</th>
<th class="text-center">Mercury</th>
<th class="text-center">Jupiter</th>
<th class="text-center">Venus</th>
<th class="text-center">Saturn</th>
<th class="text-center">Ascendant</th>
<th class="text-center">Total</th>
</tr>
</thead>
<tbody>
    
    
<tr>
   <td class=" text-capitalize">Aries</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aries']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Taurus</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['taurus']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Gemini</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['gemini']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Cancer</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['cancer']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Leo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['leo']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Virgo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['virgo']['total'];  ?></td>
</tr>
  <tr>
   <td class=" text-capitalize">Libra</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['libra']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Scorpio</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Sagittarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['sagittarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Capricorn</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['capricorn']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Aquarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['aquarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Pisces</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['pisces']['total'];  ?></td>
</tr>  
 </tbody>
</table>


</div>
</div>
<div id="showSecond" class="myDivs">
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd">
   <thead>
<tr>

<th class="">Planet
Zodiac</th>
<th class="text-center">Sun</th>
<th class="text-center">Moon</th>
<th class="text-center">Mars</th>
<th class="text-center">Mercury</th>
<th class="text-center">Jupiter</th>
<th class="text-center">Venus</th>
<th class="text-center">Saturn</th>
<th class="text-center">Ascendant</th>
<th class="text-center">Total</th>
</tr>
</thead>
<tbody>

<tr>
   <td class=" text-capitalize">Aries</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aries']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aries']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aries']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aries']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aries']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aries']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aries']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aries']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aries']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Taurus</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['taurus']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['taurus']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['taurus']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['taurus']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['taurus']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['taurus']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['taurus']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['taurus']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['taurus']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Gemini</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['gemini']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['gemini']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['gemini']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['gemini']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['gemini']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['gemini']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['gemini']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['gemini']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['gemini']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Cancer</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['cancer']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['cancer']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['cancer']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['cancer']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['cancer']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['cancer']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['cancer']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['cancer']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['cancer']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Leo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['leo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['leo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['leo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['leo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['leo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['leo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['leo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['leo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['leo']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Virgo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['virgo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['virgo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['virgo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['virgo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['virgo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['virgo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['virgo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['virgo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['virgo']['total'];  ?></td>
</tr>
  <tr>
   <td class=" text-capitalize">Libra</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['libra']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['libra']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['libra']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['libra']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['libra']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['libra']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['libra']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['libra']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['libra']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Scorpio</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['scorpio']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['scorpio']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['scorpio']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['scorpio']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['scorpio']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['scorpio']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['scorpio']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['scorpio']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['scorpio']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Sagittarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['sagittarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['sagittarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['sagittarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['sagittarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['sagittarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['sagittarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['sagittarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['sagittarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['sagittarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Capricorn</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['capricorn']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['capricorn']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['capricorn']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['capricorn']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['capricorn']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['capricorn']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['capricorn']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['capricorn']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['capricorn']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Aquarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aquarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aquarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aquarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aquarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aquarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aquarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aquarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aquarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['aquarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Pisces</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['pisces']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['pisces']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['pisces']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['pisces']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['pisces']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['pisces']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['pisces']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['pisces']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamoonDetails['ashtak_points']['pisces']['total'];  ?></td>
</tr>  
 </tbody>
</table>
</div>
</div>
<div id="showThird" class="myDivs">
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>

<th class="">Sign</th>
<th class="text-center">Sun</th>
<th class="text-center">Moon</th>
<th class="text-center">Mars</th>
<th class="text-center">Mercury</th>
<th class="text-center">Jupiter</th>
<th class="text-center">Venus</th>
<th class="text-center">Saturn</th>
<th class="text-center">Ascendant</th>
<th class="text-center">Total</th>
</tr>
</thead>
<tbody>
    
    
<tr>
   <td class=" text-capitalize">Aries</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aries']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aries']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aries']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aries']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aries']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aries']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aries']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aries']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aries']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Taurus</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['taurus']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['taurus']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['taurus']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['taurus']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['taurus']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['taurus']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['taurus']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['taurus']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['taurus']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Gemini</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['gemini']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['gemini']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['gemini']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['gemini']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['gemini']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['gemini']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['gemini']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['gemini']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['gemini']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Cancer</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['cancer']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['cancer']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['cancer']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['cancer']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['cancer']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['cancer']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['cancer']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['cancer']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['cancer']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Leo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['leo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['leo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['leo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['leo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['leo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['leo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['leo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['leo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['leo']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Virgo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['virgo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['virgo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['virgo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['virgo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['virgo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['virgo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['virgo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['virgo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['virgo']['total'];  ?></td>
</tr>
  <tr>
   <td class=" text-capitalize">Libra</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['libra']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['libra']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['libra']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['libra']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['libra']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['libra']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['libra']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['libra']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['libra']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Scorpio</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['scorpio']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['scorpio']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['scorpio']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['scorpio']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['scorpio']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['scorpio']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['scorpio']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['scorpio']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['scorpio']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Sagittarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['sagittarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['sagittarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['sagittarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['sagittarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['sagittarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['sagittarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['sagittarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['sagittarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['sagittarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Capricorn</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['capricorn']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['capricorn']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['capricorn']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['capricorn']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['capricorn']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['capricorn']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['capricorn']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['capricorn']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['capricorn']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Aquarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aquarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aquarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aquarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aquarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aquarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aquarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aquarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aquarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['aquarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Pisces</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['pisces']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['pisces']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['pisces']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['pisces']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['pisces']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['pisces']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['pisces']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['pisces']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamarsDetails['ashtak_points']['pisces']['total'];  ?></td>
</tr>  
 </tbody>
</table>


</div>
</div>

<div id="showFourth" class="myDivs">
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>

<th class="">Sign</th>
<th class="text-center">Sun</th>
<th class="text-center">Moon</th>
<th class="text-center">Mars</th>
<th class="text-center">Mercury</th>
<th class="text-center">Jupiter</th>
<th class="text-center">Venus</th>
<th class="text-center">Saturn</th>
<th class="text-center">Ascendant</th>
<th class="text-center">Total</th>
</tr>
</thead>
<tbody>

<tr>
   <td class=" text-capitalize">Aries</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aries']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aries']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aries']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aries']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aries']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aries']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aries']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aries']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aries']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Taurus</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['taurus']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['taurus']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['taurus']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['taurus']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['taurus']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['taurus']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['taurus']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['taurus']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['taurus']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Gemini</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['gemini']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['gemini']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['gemini']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['gemini']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['gemini']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['gemini']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['gemini']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['gemini']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['gemini']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Cancer</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['cancer']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['cancer']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['cancer']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['cancer']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['cancer']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['cancer']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['cancer']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['cancer']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['cancer']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Leo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['leo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['leo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['leo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['leo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['leo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['leo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['leo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['leo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['leo']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Virgo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['virgo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['virgo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['virgo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['virgo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['virgo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['virgo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['virgo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['virgo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['virgo']['total'];  ?></td>
</tr>
  <tr>
   <td class=" text-capitalize">Libra</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['libra']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['libra']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['libra']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['libra']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['libra']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['libra']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['libra']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['libra']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['libra']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Scorpio</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['scorpio']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['scorpio']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['scorpio']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['scorpio']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['scorpio']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['scorpio']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['scorpio']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['scorpio']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['scorpio']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Sagittarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['sagittarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['sagittarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['sagittarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['sagittarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['sagittarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['sagittarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['sagittarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['sagittarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['sagittarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Capricorn</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['capricorn']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['capricorn']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['capricorn']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['capricorn']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['capricorn']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['capricorn']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['capricorn']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['capricorn']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['capricorn']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Aquarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aquarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aquarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aquarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aquarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aquarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aquarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aquarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aquarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['aquarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Pisces</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['pisces']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['pisces']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['pisces']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['pisces']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['pisces']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['pisces']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['pisces']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['pisces']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargamercuryDetails['ashtak_points']['pisces']['total'];  ?></td>
</tr>  
 </tbody>
</table>


</div>
</div>

<div id="showFifth" class="myDivs">
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>

<th class="">Sign</th>
<th class="text-center">Sun</th>
<th class="text-center">Moon</th>
<th class="text-center">Mars</th>
<th class="text-center">Mercury</th>
<th class="text-center">Jupiter</th>
<th class="text-center">Venus</th>
<th class="text-center">Saturn</th>
<th class="text-center">Ascendant</th>
<th class="text-center">Total</th>
</tr>
</thead>
<tbody>

<tr>
   <td class=" text-capitalize">Aries</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aries']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aries']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aries']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aries']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aries']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aries']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aries']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aries']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aries']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Taurus</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['taurus']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['taurus']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['taurus']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['taurus']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['taurus']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['taurus']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['taurus']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['taurus']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['taurus']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Gemini</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['gemini']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['gemini']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['gemini']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['gemini']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['gemini']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['gemini']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['gemini']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['gemini']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['gemini']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Cancer</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['cancer']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['cancer']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['cancer']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['cancer']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['cancer']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['cancer']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['cancer']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['cancer']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['cancer']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Leo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['leo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['leo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['leo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['leo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['leo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['leo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['leo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['leo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['leo']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Virgo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['virgo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['virgo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['virgo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['virgo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['virgo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['virgo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['virgo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['virgo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['virgo']['total'];  ?></td>
</tr>
  <tr>
   <td class=" text-capitalize">Libra</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['libra']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['libra']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['libra']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['libra']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['libra']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['libra']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['libra']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['libra']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['libra']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Scorpio</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['scorpio']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['scorpio']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['scorpio']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['scorpio']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['scorpio']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['scorpio']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['scorpio']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['scorpio']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['scorpio']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Sagittarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['sagittarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['sagittarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['sagittarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['sagittarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['sagittarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['sagittarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['sagittarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['sagittarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['sagittarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Capricorn</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['capricorn']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['capricorn']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['capricorn']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['capricorn']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['capricorn']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['capricorn']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['capricorn']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['capricorn']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['capricorn']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Aquarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aquarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aquarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aquarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aquarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aquarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aquarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aquarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aquarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['aquarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Pisces</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['pisces']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['pisces']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['pisces']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['pisces']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['pisces']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['pisces']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['pisces']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['pisces']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargajupiterDetails['ashtak_points']['pisces']['total'];  ?></td>
</tr>  
 </tbody>
</table>


</div>
</div>
<div id="showSixth" class="myDivs">
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>

<th class="">Sign</th>
<th class="text-center">Sun</th>
<th class="text-center">Moon</th>
<th class="text-center">Mars</th>
<th class="text-center">Mercury</th>
<th class="text-center">Jupiter</th>
<th class="text-center">Venus</th>
<th class="text-center">Saturn</th>
<th class="text-center">Ascendant</th>
<th class="text-center">Total</th>
</tr>
</thead>
<tbody>

<tr>
   <td class=" text-capitalize">Aries</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aries']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aries']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aries']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aries']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aries']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aries']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aries']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aries']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aries']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Taurus</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['taurus']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['taurus']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['taurus']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['taurus']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['taurus']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['taurus']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['taurus']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['taurus']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['taurus']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Gemini</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['gemini']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['gemini']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['gemini']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['gemini']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['gemini']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['gemini']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['gemini']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['gemini']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['gemini']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Cancer</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['cancer']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['cancer']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['cancer']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['cancer']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['cancer']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['cancer']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['cancer']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['cancer']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['cancer']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Leo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['leo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['leo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['leo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['leo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['leo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['leo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['leo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['leo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['leo']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Virgo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['virgo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['virgo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['virgo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['virgo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['virgo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['virgo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['virgo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['virgo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['virgo']['total'];  ?></td>
</tr>
  <tr>
   <td class=" text-capitalize">Libra</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['libra']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['libra']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['libra']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['libra']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['libra']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['libra']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['libra']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['libra']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['libra']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Scorpio</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['scorpio']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['scorpio']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['scorpio']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['scorpio']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['scorpio']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['scorpio']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['scorpio']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['scorpio']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['scorpio']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Sagittarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['sagittarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['sagittarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['sagittarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['sagittarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['sagittarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['sagittarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['sagittarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['sagittarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['sagittarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Capricorn</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['capricorn']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['capricorn']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['capricorn']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['capricorn']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['capricorn']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['capricorn']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['capricorn']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['capricorn']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['capricorn']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Aquarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aquarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aquarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aquarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aquarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aquarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aquarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aquarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aquarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['aquarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Pisces</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['pisces']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['pisces']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['pisces']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['pisces']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['pisces']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['pisces']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['pisces']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['pisces']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargavenusDetails['ashtak_points']['pisces']['total'];  ?></td>
</tr>  
 </tbody>
</table>


</div>
</div>

<div id="showSeventh" class="myDivs">
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>

<th class="">Sign</th>
<th class="text-center">Sun</th>
<th class="text-center">Moon</th>
<th class="text-center">Mars</th>
<th class="text-center">Mercury</th>
<th class="text-center">Jupiter</th>
<th class="text-center">Venus</th>
<th class="text-center">Saturn</th>
<th class="text-center">Ascendant</th>
<th class="text-center">Total</th>
</tr>
</thead>
<tbody>

<tr>
   <td class=" text-capitalize">Aries</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aries']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aries']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aries']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aries']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aries']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aries']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aries']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aries']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aries']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Taurus</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['taurus']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['taurus']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['taurus']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['taurus']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['taurus']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['taurus']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['taurus']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['taurus']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['taurus']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Gemini</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['gemini']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['gemini']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['gemini']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['gemini']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['gemini']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['gemini']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['gemini']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['gemini']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['gemini']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Cancer</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['cancer']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['cancer']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['cancer']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['cancer']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['cancer']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['cancer']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['cancer']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['cancer']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['cancer']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Leo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['leo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['leo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['leo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['leo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['leo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['leo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['leo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['leo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['leo']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Virgo</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['virgo']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['virgo']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['virgo']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['virgo']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['virgo']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['virgo']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['virgo']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['virgo']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['virgo']['total'];  ?></td>
</tr>
  <tr>
   <td class=" text-capitalize">Libra</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['libra']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['libra']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['libra']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['libra']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['libra']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['libra']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['libra']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['libra']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['libra']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Scorpio</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['scorpio']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['scorpio']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['scorpio']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['scorpio']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['scorpio']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['scorpio']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasunDetails['ashtak_points']['scorpio']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['scorpio']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['scorpio']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Sagittarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['sagittarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['sagittarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['sagittarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['sagittarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['sagittarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['sagittarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['sagittarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['sagittarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['sagittarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Capricorn</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['capricorn']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['capricorn']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['capricorn']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['capricorn']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['capricorn']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['capricorn']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['capricorn']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['capricorn']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['capricorn']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Aquarius</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aquarius']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aquarius']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aquarius']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aquarius']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aquarius']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aquarius']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aquarius']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aquarius']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['aquarius']['total'];  ?></td>
</tr>
<tr>
   <td class=" text-capitalize">Pisces</td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['pisces']['sun'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['pisces']['moon'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['pisces']['mars'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['pisces']['mercury'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['pisces']['jupiter'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['pisces']['venus'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['pisces']['saturn'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['pisces']['ascendant'];  ?></td>
    <td class=" text-capitalize"><?php echo $getAshtakvargasaturnDetails['ashtak_points']['pisces']['total'];  ?></td>
</tr>  
 </tbody>
</table>


</div>
</div>




<div class="row visible-xs mt--2 mb--2">
<div class="col-xs-12">
<h3>Current Vimshottari Dasha</h3>
<div class="dasha-head">
<p class="h4">Major Dasha</p>
<p id="current_dasha_major">Mars &nbsp;&nbsp; 2-1-2018 23:57 to 2-1-2025 17:57 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Antar Dasha</p>
<p id="current_dasha_minor">Jupiter &nbsp;&nbsp; 19-6-2019 15:42 to 25-5-2020 13:18 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Prtyantar Dasha</p>
<p id="current_dasha_sub_minor">Moon &nbsp;&nbsp; 16-2-2020 3:0 to 15-3-2020 12:48 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sookshm Dasha</p>
<p id="current_dasha_sub_sub_minor">Mercury &nbsp;&nbsp; 3-3-2020 16:43 to 7-3-2020 17:19 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Pran Dasha</p>
<p>Rahu &nbsp;&nbsp; 5-3-2020 22:39 to 6-3-2020 13:8 </p>
</div>
</div>
</div>



</div>
                   </div>
                <div class="tab-pane fade in" id="tab6">
                   <div class="col-xs-12">
                  <h2>Sarvashtak</h2>
                  <hr>
                  
               </div>
               <div class="col-md-12 col-xs-12 green">
<h3 class="">What is a Sarvashtak ?
</h3>
<p>
Sarvashtakvarga is the summary chart made up for the entire horoscope by adding up the score of Bhinnashtakvargha that includes each of the 8 planets. It identifies the strength of the house, how each house would be favourable or unfavourable and it's transiting, evaluation of Dasa bhukti, the timing of the events and longevity. The house denotes the certain portion of life. Transit of planet with higher points is said to be better. The point below 28 shows the bad aspect of life while the point above 30 shows the good areas of life. For example, if Pisces gets 4, 6, 7,5,5,4,5 bindus then Sarvashtakvarga for this zodiac would be 4+6+7+5+5+4+5 = 36.


</p>
</div>
               <div class="col-xs-12 col-md-12 m-b-25 ">
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>

<th class="">Sign</th>
<th class="text-center">Sun</th>
<th class="text-center">Moon</th>
<th class="text-center">Mars</th>
<th class="text-center">Mercury</th>
<th class="text-center">Jupiter</th>
<th class="text-center">Venus</th>
<th class="text-center">Saturn</th>
<th class="text-center">Ascendant</th>
<th class="text-center">Total</th>
</tr>
</thead>
<tbody>
    
    
<tr>
    <td class=" text-capitalize">Aries</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aries']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aries']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aries']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aries']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aries']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aries']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aries']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aries']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aries']['total'];   ?></td>
</tr>
    
    <tr>
    <td class=" text-capitalize">Taurus</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['taurus']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['taurus']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['taurus']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['taurus']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['taurus']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['taurus']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['taurus']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['taurus']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['taurus']['total'];   ?></td>
</tr>
<tr>
    <td class=" text-capitalize">Gemini</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['gemini']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['gemini']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['gemini']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['gemini']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['gemini']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['gemini']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['gemini']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['gemini']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['gemini']['total'];   ?></td>
</tr>
<tr>
    <td class=" text-capitalize">Cancer</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['cancer']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['cancer']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['cancer']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['cancer']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['cancer']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['cancer']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['cancer']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['cancer']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['cancer']['total'];   ?></td>
</tr>
<tr>
    <td class=" text-capitalize">Leo</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['leo']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['leo']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['leo']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['leo']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['leo']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['leo']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['leo']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['leo']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['leo']['total'];   ?></td>
</tr>
<tr>
    <td class=" text-capitalize">Virgo</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['virgo']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['virgo']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['virgo']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['virgo']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['virgo']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['virgo']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['virgo']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['virgo']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['virgo']['total'];   ?></td>
</tr>
<tr>
    <td class=" text-capitalize">Libra</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['libra']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['libra']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['libra']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['libra']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['libra']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['libra']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['libra']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['libra']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['libra']['total'];   ?></td>
</tr>
<tr>
    <td class=" text-capitalize">Scorpio</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['scorpio']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['scorpio']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['scorpio']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['scorpio']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['scorpio']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['scorpio']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['scorpio']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['scorpio']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['scorpio']['total'];   ?></td>
</tr>
<tr>
    <td class=" text-capitalize">Sagittarius</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['sagittarius']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['sagittarius']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['sagittarius']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['sagittarius']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['sagittarius']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['sagittarius']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['sagittarius']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['sagittarius']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['sagittarius']['total'];   ?></td>
</tr>
<tr>
    <td class=" text-capitalize">Capricorn</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['capricorn']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['capricorn']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['capricorn']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['capricorn']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['capricorn']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['capricorn']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['capricorn']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['capricorn']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['capricorn']['total'];   ?></td>
</tr>
<tr>
    <td class=" text-capitalize">Aquarius</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aquarius']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aquarius']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aquarius']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aquarius']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aquarius']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aquarius']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aquarius']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aquarius']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['aquarius']['total'];   ?></td>
</tr>
<tr>
    <td class=" text-capitalize">Pisces</td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['pisces']['sun'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['pisces']['moon'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['pisces']['mars'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['pisces']['mercury'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['pisces']['jupiter'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['pisces']['venus'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['pisces']['saturn'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['pisces']['ascendant'];   ?></td>
    <td class="text-center"><?php echo $getSarvashtakDetails['ashtak_points']['pisces']['total'];   ?></td>
</tr>
 </tbody>
</table>
</div>


<div class="row visible-xs mt--2 mb--2">
<div class="col-xs-12">
<h3>Current Vimshottari Dasha</h3>
<div class="dasha-head">
<p class="h4">Major Dasha</p>
<p id="current_dasha_major">Mars &nbsp;&nbsp; 2-1-2018 23:57 to 2-1-2025 17:57 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Antar Dasha</p>
<p id="current_dasha_minor">Jupiter &nbsp;&nbsp; 19-6-2019 15:42 to 25-5-2020 13:18 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Prtyantar Dasha</p>
<p id="current_dasha_sub_minor">Moon &nbsp;&nbsp; 16-2-2020 3:0 to 15-3-2020 12:48 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sookshm Dasha</p>
<p id="current_dasha_sub_sub_minor">Mercury &nbsp;&nbsp; 3-3-2020 16:43 to 7-3-2020 17:19 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Pran Dasha</p>
<p>Rahu &nbsp;&nbsp; 5-3-2020 22:39 to 6-3-2020 13:8 </p>
</div>
</div>
</div>



</div>
                   </div>
                  <div class="tab-pane fade in" id="tab7">
                   <div class="col-xs-12">
                  <h2>Sarvashtak</h2>
                  <hr>
                  
               </div>
               <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-warning" href="#tab111" data-toggle="tab"><span class="" aria-hidden="true"></span>
                <div class="hidden-xs1">Yesterday</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab112" data-toggle="tab"><span class="" aria-hidden="true"></span>
                <div class="hidden-xs1">Today</div>
            </button>
        </div>
         <div class="btn-group" role="group">
            <button type="button" id="Tomorrow" class="btn btn-default" href="#tab113" data-toggle="tab"><span class="" aria-hidden="true"></span>
                <div class="hidden-xs1">Tomorrow</div>
            </button>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tab111">
            <div class="col-xs-12">
                  <h2 class="text-center"><?php echo $getpreviousNakshatraPrediction['prediction_date'];  ?></h2>
                  <hr>
               </div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/health.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Health</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['health'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/emotions.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Emotions</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['emotions'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/personal_life.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Personal Life</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['personal_life'];  ?></p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/profession.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Profession</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['profession'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/travel.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Travel</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['travel'];  ?></p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/luck.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Luck</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['luck'];  ?> </p></div></div></div>
        </div>
             <div class="tab-pane fade in active" id="tab112">
            <div class="col-xs-12">
                  <h2 class="text-center"><?php echo $getDailyNakshatraPrediction['prediction_date'];  ?></h2>
                  <hr>
               </div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/health.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Health</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['health'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/emotions.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Emotions</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['emotions'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/personal_life.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Personal Life</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['personal_life'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/profession.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Profession</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['profession'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/travel.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Travel</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['travel'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/luck.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Luck</h4><p><?php echo $getDailyNakshatraPrediction['prediction']['luck'];  ?> </p></div></div></div>
        </div>
    
         <div class="tab-pane fade in active" id="tab113">
            <div class="col-xs-12">
                  <h2 class="text-center"><?php echo $getnextNakshatraPrediction['prediction_date'];  ?></h2>
                  <hr>
               </div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/health.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Health</h4><p><?php echo $getnextNakshatraPrediction['prediction']['health'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/emotions.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Emotions</h4><p><?php echo $getnextNakshatraPrediction['prediction']['emotions'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/personal_life.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Personal Life</h4><p><?php echo $getnextNakshatraPrediction['prediction']['personal_life'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/profession.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Profession</h4><p><?php echo $getnextNakshatraPrediction['prediction']['profession'];  ?> </p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/travel.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Travel</h4><p><?php echo $getnextNakshatraPrediction['prediction']['travel'];  ?></p></div></div></div>
               <div class="boxed boxed--border boxed--md for-mobile bg--site"><div class="row"><div class="col-md-3 text-center"><img src="<?php echo base_url();?>front-assets/images/luck.png" width="90" height="90" style="margin-top:20px;"></div><div class="col-md-9 text-left p-t-10 p-l-8"> <h4 class="type--uppercase">Luck</h4><p><?php echo $getnextNakshatraPrediction['prediction']['luck'];  ?> </p></div></div></div>
        </div>
    
    </div>
               <div class="col-md-12 col-xs-12 green">
<h3 class="">What is a Sarvashtak ?
</h3>
<p>
Sarvashtakvarga is the summary chart made up for the entire horoscope by adding up the score of Bhinnashtakvargha that includes each of the 8 planets. It identifies the strength of the house, how each house would be favourable or unfavourable and it's transiting, evaluation of Dasa bhukti, the timing of the events and longevity. The house denotes the certain portion of life. Transit of planet with higher points is said to be better. The point below 28 shows the bad aspect of life while the point above 30 shows the good areas of life. For example, if Pisces gets 4, 6, 7,5,5,4,5 bindus then Sarvashtakvarga for this zodiac would be 4+6+7+5+5+4+5 = 36.


</p>
</div>
               <div class="col-xs-12 col-md-12 m-b-25 ">
<div class="table-scrollable table-bordered mt--1">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>

<th class="">Sign</th>
<th class="text-center">Sun</th>
<th class="text-center">Moon</th>
<th class="text-center">Mars</th>
<th class="text-center">Mercury</th>
<th class="text-center">Jupiter</th>
<th class="text-center">Venus</th>
<th class="text-center">Saturn</th>
<th class="text-center">Ascendant</th>
<th class="text-center">Total</th>
</tr>
</thead>
<tbody>
   
<tr>
    <td class=" text-capitalize">ujhgj</td>
    <td class="text-center">3</td>
    <td class="text-center">3</td>
    <td class="text-center">3</td>
    <td class="text-center">3</td>
    <td class="text-center">2</td>
    <td class="text-center">7</td>
    <td class="text-center">2</td>
    <td class="text-center">0</td>
    <td class="text-center">23</td>
</tr>

 </tbody>
</table>
</div>


<div class="row visible-xs mt--2 mb--2">
<div class="col-xs-12">
<h3>Current Vimshottari Dasha</h3>
<div class="dasha-head">
<p class="h4">Major Dasha</p>
<p id="current_dasha_major">Mars &nbsp;&nbsp; 2-1-2018 23:57 to 2-1-2025 17:57 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Antar Dasha</p>
<p id="current_dasha_minor">Jupiter &nbsp;&nbsp; 19-6-2019 15:42 to 25-5-2020 13:18 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Prtyantar Dasha</p>
<p id="current_dasha_sub_minor">Moon &nbsp;&nbsp; 16-2-2020 3:0 to 15-3-2020 12:48 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sookshm Dasha</p>
<p id="current_dasha_sub_sub_minor">Mercury &nbsp;&nbsp; 3-3-2020 16:43 to 7-3-2020 17:19 </p>
</div>
<div class="arrow-down">
<i class="icon icon-Arrow-Down"></i>
</div>
<div class="dasha-head">
<p class="h4">Pran Dasha</p>
<p>Rahu &nbsp;&nbsp; 5-3-2020 22:39 to 6-3-2020 13:8 </p>
</div>
</div>
</div>



</div>
                   </div>
                <div class="tab-pane fade in" id="tab8">
                  <div class="col-xs-12">
                  <h2>Today's Biorhythm</h2>
                  <hr>
                  
               </div>
               <div class="col-md-12 col-xs-12 green">
<h3 class="">What is a Biorhythm ?</h3>
<p>
Biorhythms are the existential cycles that regulates your intellect, emotion and health. Each cycle has its own function as it oscillates through a sine wave between the value of positive and negative. The high points of the cycle indicate success while the low points may bring critical situation. These points predict the level of different aspects in your day to day life. The quality of your life can improve gradually by monitoring your action and Biorhythm accordingly.</p>
</div>
<div class="col-xs-12">
                  <h2>Physical Biorhythm</h2>
                  <hr>
               </div>
<div class="col-md-3 col-xs-12   float-right">
<div>
<h4 class="text-center color--white">Physical</h4>

<div class="col-xs-12  text-right type--bold color--red">
  <div class="box">
    <div class="chart" data-percent="<?php echo $getbiorhythmdetails['physical']['percent'];  ?>" data-scale-color="#ffb400"><?php echo $getbiorhythmdetails['physical']['percent'];  ?></div>
  </div>
</div>
</div>
</div>
<div class="col-md-9 col-xs-12 green">
<p>This cycle is associated with the physical aspects of your body. The cycle is of 23 days which influences your resistance, energy level and physical strength. High phase will make you feel physically fit, active and vigorous whereas low may drain your energy and you may feel less active or weak.</p>
</div>

<div class="col-xs-12">
                  <h2>Emotion Biorhythm</h2>
                  <hr>
               </div>
<div class="col-md-3 col-xs-12   float-right">
<div>
<h4 class="text-center color--white">Emotion</h4>

<div class="col-xs-12  text-right type--bold color--red">
  <div class="box">
    <div class="chart" data-percent="<?php echo $getbiorhythmdetails['emotional']['percent'];  ?>" data-scale-color="#ffb400"><?php echo $getbiorhythmdetails['emotional']['percent'];  ?></div>
  </div>
</div>
</div>
</div>
<div class="col-md-9 col-xs-12 green">
<p>This cycle is associated with nervous system also referred as sensitivity rhythm influences your emotional states. This is a whole of 28 days emotional cycle. High phase will make you feel warm, loved and creative whereas low phase can make you feel negative or unproductive in your everyday life.</p>
</div>
    
    <div class="col-xs-12">
                  <h2>Intellectual Biorhythm</h2>
                  <hr>
               </div>
<div class="col-md-3 col-xs-12   float-right">
<div>
<h4 class="text-center color--white">Intellectual</h4>

<div class="col-xs-12  text-right type--bold color--red">
  <div class="box">
    <div class="chart" data-percent="<?php echo $getbiorhythmdetails['intellectual']['percent'];  ?>" data-scale-color="#ffb400"><?php echo $getbiorhythmdetails['intellectual']['percent'];  ?></div>
  </div>
</div>
</div>
</div>
<div class="col-md-9 col-xs-12 green">
<p>This cycle influences your brain alertness, memory and learning speed. The intellectual cycle is of 33 days. The high phase will make you intellectually strong, creative and you will have the ability to generate ideas whereas you may find difficulty in grasping concepts and ideas at low phase.</p>
</div>
      <div class="col-md-12 col-xs-12">
 <div class="boxed">
<div class="col-md-4 col-sm-6 col-xs-10 col-xs-offset-1 col-md-offset-4 mb--1 mm-b-20">
    <h4 class="text-center color--white">Average</h4>
 <div class="box">
    <div class="chart1" data-percent="<?php echo $getbiorhythmdetails['average']['percent'];  ?>" data-scale-color="#ffb400"><?php echo $getbiorhythmdetails['average']['percent'];  ?></div>
  </div>
</div>

</div>
</div>        
               </div>
                <div class="tab-pane fade in" id="tab9">
                  <div class="col-xs-12">
                  <h2>Vimshottari Dasha</h2>
                  <hr>
                  
               </div>
               <div class="col-xs-12 col-md-6 m-t-25">
<div class="feature feature-1">
<img alt="Image" src="<?php echo base_url();?>front-assets/images/dasha.png">
<div class="feature__body boxed--sm ">
<h3 class="unmarg--bottom">Vimshottari Dasha</h3>
<p class="text-justify">
Vimshottari Dasha is the most logical and accurate dasha system to predict the event of the past, future, and present of a person’s life such as your marital, career and health predictions. It can predict any event in an astrology chart. Vimshottari holds a fixed cyclic order planet’s Mahadasha. This system works on the basis of Nakshatras. It starts from birth until the end of a native’s life. Mahadasha and Antardasha are the two main categories of Vimshottari where Antardasha gives the more exact time whereas the first Mahadasha is predicted by the Nakshatra of Moon’s transiting at the birth time. </p>

</div>
</div>
</div>
<div class="col-xs-12 col-md-6 m-t-25">
<h4 class="text-center unmarg--bottom">Current Vimshottari Dasha</h4>
<div class="boxed">
<div class="input-group input-append date date-picker">
<input type="text" class="form-control dateofbirth" name="date" placeholder="Select Date*"  tabindex="2">
<span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
</div>
</div>
<div id="dashadata">


<div class="" >
<div class="dasha-head">
<p class="h4">Major Dasha</p>
<p id="current_dasha_major"><?php echo $getCurrentVimDasha['major']['planet']; ?>  <?php echo $getCurrentVimDasha['major']['start']; ?> to <?php echo $getCurrentVimDasha['major']['end']; ?></p>
</div>
<div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Minor Dasha</p>
<p id="current_dasha_minor"><?php echo $getCurrentVimDasha['minor']['planet']; ?>  <?php echo $getCurrentVimDasha['minor']['start']; ?> to <?php echo $getCurrentVimDasha['minor']['end']; ?></p>
</div>
<div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sub Dasha</p>
<p id="current_dasha_sub_minor"><?php echo $getCurrentVimDasha['sub_minor']['planet']; ?>  <?php echo $getCurrentVimDasha['sub_minor']['start']; ?> to <?php echo $getCurrentVimDasha['sub_minor']['end']; ?></p>
</div>
<div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sub Sub Dasha</p>
<p id="current_dasha_sub_sub_minor"><?php echo $getCurrentVimDasha['sub_sub_minor']['planet']; ?>  <?php echo $getCurrentVimDasha['sub_sub_minor']['start']; ?> to <?php echo $getCurrentVimDasha['sub_sub_minor']['end']; ?> </p>
</div>
 <div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sub Sub Sub  Dasha</p>
<p id="current_dasha_sub_sub_sub_minor"><?php echo $getCurrentVimDasha['sub_sub_sub_minor']['planet']; ?>  <?php echo $getCurrentVimDasha['sub_sub_sub_minor']['start']; ?> to <?php echo $getCurrentVimDasha['sub_sub_sub_minor']['end']; ?></p>
</div>
</div>
</div>
</div>
         
<div class="col-xs-12">
                  <h2>Vimshottari Maha Dash</h2>
                  <hr>
               </div>
               <div class="table-scrollable table-bordered text-left">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>
<th> Dasha Planet</th>
<th> Start Date</th>
<th> End Date</th>
</tr>
</thead>
<tbody>
   <?php  foreach($getMajorVimDasha as $arrData)  { ?>
<tr>
   <td><?php echo $arrData['planet'];   ?></td>
   <td><?php echo $arrData['start'];   ?></td>
   <td><?php echo $arrData['end'];   ?></td>
</tr>
<?php  } ?>
</tbody>
</table>
</div>
 </div>
                   <div class="tab-pane fade in" id="tab10">
                  <div class="col-xs-12">
                  <h2>Yogini Dasha</h2>
                  <hr>
                  
               </div>
               <div class="col-xs-12 col-md-6 m-t-25">
<div class="feature feature-1">
<img alt="Image" src="<?php echo base_url();?>front-assets/images/dasha.png">
<div class="feature__body boxed--sm ">
<h3 class="unmarg--bottom">Yogini Dasha</h3>
<p class="text-justify">
Just like Vimshottari, Yogini Dasha is also an important dasha of Vedic astrology. In this also the Nakshatra dasha is based on the position of the moon. Each is assigned to the Yogini while each has corresponding node or planets. There are a total of 8 Yoginis while Ketu does not play a role here. 36 years is the total period of Yogini Dasha. To interpret Yogini dasha, the strength of the planets are very important.

 </p>

</div>
</div>
</div>
<div class="col-xs-12 col-md-6 m-t-25">
<h4 class="text-center unmarg--bottom">Yogini Maha Dasha</h4>
<div class="boxed">
<!--<div class="input-group input-append date date-picker">
<input type="text" class="form-control dateofbirth" name="date" placeholder="Select Date*"  tabindex="2">
<span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
</div>-->
</div>
<div>


<div class="">
<div class="dasha-head">
<p class="h4">Major Dashafggtgt</p>
<p id="current_dasha_major"><?php echo $getCurrentYoginiDasha['major_dasha']['dasha_name']; ?>  <?php echo $getCurrentYoginiDasha['major_dasha']['start_date']; ?> to <?php echo $getCurrentYoginiDasha['major_dasha']['end_date']; ?> </p>
</div>
<div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sub Dasha</p>
<p id="current_dasha_minor"><?php echo $getCurrentYoginiDasha['sub_dasha']['dasha_name']; ?>  <?php echo $getCurrentYoginiDasha['sub_dasha']['start_date']; ?> to <?php echo $getCurrentYoginiDasha['sub_dasha']['end_date']; ?></p>
</div>
<div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sub Sub Dashasdfgf</p>
<p id="current_dasha_sub_minor"> <?php echo $getCurrentYoginiDasha['sub_sub_dasha']['dasha_name']; ?>  <?php echo $getCurrentYoginiDasha['sub_sub_dasha']['start_date']; ?> to <?php echo $getCurrentYoginiDasha['sub_sub_dasha']['end_date']; ?></p>
</div>
<!--<div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sookshm Dasha</p>
<p id="current_dasha_sub_sub_minor"> &nbsp;&nbsp; to </p>
</div>
 <div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Pran Dasha</p>
<p id="current_dasha_sub_sub_sub_minor"> &nbsp;&nbsp; to </p>
</div>-->
</div>
</div>
</div>
         
<div class="col-xs-12">
                  <h2>Yogini Maha Dasha</h2>
                  <hr>
               </div>
               <div class="table-scrollable table-bordered text-left">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>
<th> Dasha Planet</th>
<th> Start Date</th>
<th> End Date</th>
</tr>
</thead>
<tbody>
 <?php  foreach($getMajorYoginiDasha as $arrData){ ?>   
<tr>
    <td><?php echo $arrData['dasha_name'];  ?></td>
    <td><?php echo $arrData['start_date'];  ?></td>
    <td><?php echo $arrData['end_date'];  ?></td>
</tr>
 <?php  }  ?>
</tbody>
</table>
</div>
 </div>
                 <div class="tab-pane fade in" id="tab11">
                  <div class="col-xs-12">
                  <h2>Char Dasha</h2>
                  <hr>
                  
               </div>
               <div class="col-xs-12 col-md-6 m-t-25">
<div class="feature feature-1">
<img alt="Image" src="<?php echo base_url();?>front-assets/images/dasha.png">
<div class="feature__body boxed--sm ">
<h3 class="unmarg--bottom">Char Dasha</h3>
<p class="text-justify">
According to Vedic astrology, Jamini Chara dashas are dashas based on signs than planets. They are sign based on time periods. It is also known as Rashi Dasha. Chara’s are used to predict the astrological purpose. The Chara dasha is predicted through the position of Karakas ( 7 Chara Karakas) that is Amatya, Bhratri, Matri, Putra, Gnati and Dara karaka.


 </p>

</div>
</div>
</div>
<div class="col-xs-12 col-md-6 m-t-25">
<h4 class="text-center unmarg--bottom">Current Char Dasha - <?php echo $getCurrentCharDasha['dasha_date']; ?>
</h4>
<div class="boxed">
<!--<div class="input-group input-append date date-picker">
<input type="text" class="form-control dateofbirth" name="date" placeholder="Select Date*"  tabindex="2">
<span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
</div>-->
</div>
<div>


<div class="">
<div class="dasha-head">
<p class="h4">Major Dasha</p>
<p id="current_dasha_major"><?php echo $getCurrentCharDasha['major_dasha']['sign_name']; ?>  <?php echo $getCurrentCharDasha['major_dasha']['start_date']; ?> to <?php echo $getCurrentCharDasha['major_dasha']['end_date']; ?></p>
</div>
<div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sub Dasha</p>
<p id="current_dasha_minor"> <?php echo $getCurrentCharDasha['sub_dasha']['sign_name']; ?>  <?php echo $getCurrentCharDasha['sub_dasha']['start_date']; ?> to <?php echo $getCurrentCharDasha['sub_dasha']['end_date']; ?></p>
</div>
<div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sub Sub Dasha</p>
<p id="current_dasha_sub_minor"> <?php echo $getCurrentCharDasha['sub_sub_dasha']['sign_name']; ?>  <?php echo $getCurrentCharDasha['sub_sub_dasha']['start_date']; ?> to <?php echo $getCurrentCharDasha['sub_sub_dasha']['end_date']; ?> </p>
</div>
<!--<div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Sookshm Dasha</p>
<p id="current_dasha_sub_sub_minor"> &nbsp;&nbsp; to </p>
</div>
 <div class="arrow-down">
<i class="fa fa-angle-down"></i>
</div>
<div class="dasha-head">
<p class="h4">Pran Dasha</p>
<p id="current_dasha_sub_sub_sub_minor"> &nbsp;&nbsp; to </p>
</div>-->
</div>
</div>
</div>
         
<div class="col-xs-12">
                  <h2>Char Maha Dasha</h2>
                  <hr>
               </div>
               <div class="table-scrollable table-bordered text-left">
<div class="table-scrollable table-bordered text-left">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>
<th> Dasha Planet</th>
<th> Start Date</th>
<th> End Date</th>
</tr>
</thead>
<tbody>
    <?php foreach($getMajorCharDasha as $arrData) { ?>
<tr>
    <td><?php echo $arrData['sign_name'];  ?></td>
    <td><?php echo $arrData['start_date'];  ?></td>
    <td><?php echo $arrData['end_date'];  ?></td>
</tr>
    <?php } ?>
</tbody>
</table>
</div>
</div>
 </div>
                  <div class="tab-pane fade in" id="tab12">
                  <div class="col-xs-12">
                  <h2>Kalasarpa Dosha</h2>
                  <hr>
                  
               </div>
               <div class="col-xs-12 col-md-12 m-t-25">
<div class="feature feature-1">
<div class="feature__body boxed--sm green">
<h3 class="unmarg--bottom">What is Kalasarpa Dosha ?</h3>
<p class="text-justify">
If all the 7 planets are situated between Rahu and Ketu then Kaal Sarp Yog is formed. According to the situation of Rahu in 12 houses of horoscope there are Kaal Sarp Yogas of 12 types.</p>
<p>These are : Anant, Kulik, Vasuki, Shankhpal, Padma, Mahapadma, Takshak, Karkotak, Shankhchud, Ghaatak, Vishdhar Sheshnag. The Kaal Sarp Yog is of two types- Ascending and Descending.</p>
<p>If all the 7 planets are eaten away by Rahu's mouth then it is Ascending Kaal Sarp Yog. If all planets are situated in back of Rahu then Descending Kaal Sarp Yog is formed.</p>
</div>
<div class=" col-xs-12 col-md-12">
<div class="boxed  boxed--sm" style=" background-color: #f8cecc;">
<div class="col-sm-3 ">
<div class="text-center ">
<i class="icon icon--lg icon-Snake" style="color:white"></i>
</div>
</div>
<div class="col-sm-9">
<p class="lead" style="color:#222"><?php echo $getKalsarpaDetails['one_line'];   ?></p>
</div>
</div>
</div>
<?php if($getKalsarpaDetails['present']=='1'){ ?>
<div class="green">
<h1>Your Kaalsarpa report in brief</h1>


<p><?php echo $getKalsarpaDetails['report']['report']; ?></li><hr class="m-t-5 m-b-5"> </p>

</div>
<?php } ?>
<!--<div class="col-md-12 green">
    <h1>Remedies for Kaalsarpa Dosha</h1>
    <ul>
    <li>Rudrabhisheka - a puja to Lord Shiva can be performed on a solar or lunar eclipse or on Mahashivratri at Mahakaleshwar temple, Ujjain Temple.</li>
<li>Install an energized Kaal Sarpa Yog yantra at the place of veneration or puja room at home and worship it daily.</li>
<li>Get a Kalsarpa dosha nivaran pooja performed on a Wednesday or Friday to negate the malefic effects of Rahu.</li>

<li>Get a Dashansh Homa or Yajna done on Nag Panchami day in the month of Shravan in a temple or near a holy river</li>

<li>Donate fresh reddish.</li>

<li>Wear a 14 faced rudraksha or a combination of 8+9 faced rudraksha.</li>
</ul>
</div>-->
</div>
</div>
     
</div>
                  <div class="tab-pane fade in" id="tab13">
                  <div class="col-xs-12">
                  <h2>Manglik Dosha Analysis</h2>
                  <hr>
                  
               </div>
               <div class="col-xs-12 col-md-12 m-t-25">
<div class="feature feature-1">
<div class="feature__body boxed--sm green">
<h3 class="unmarg--bottom">What is Manglik Dosha ?</h3>
<p class="text-justify">
The Manglik Dosha is known to be very inauspicious and the individual may remain unmarried throughout his life. People are generally fearful towards this negative result of the planet that could effect their life. Especially, marriage. The Vedic astrology considers ascendent and the placement of 4th, 2nd, 7th, 8th and 12th house as unfavourable. Mars is basically known as the killer of marriage in all these houses as it is a significator of an individual’s health, personality and physic. An individual of Mars has the lack of politeness as their trait..</p>
</div>

<div class="col-xs-12">
<div class="boxed" style="background-color:#f8cecc">
<div class="col-xs-12 col-md-12 ">
<h3 class=""> Manglik Alert !</h3>
<p style="font-size: 1.13em;"><?php  echo $getManglikDetails['manglik_report'];  ?></p>
</div>

</div>
</div>
<div class="col-xs-12 mm-b-20 mb--1">
<div class="boxed boxed--border">
<h3 class="text-center">Reason behind Manglik Dosha</h3>
<div class="col-xs-12 col-md-6 ">
<h4 class="m-b-5">Rules based on Houses</h4>
<?php  foreach($getManglikDetails['manglik_present_rule']['based_on_aspect'] as $arrData){ ?>
<ul class="bullets next-line-pad list" style="padding-left: 25px">
<li><?php echo $arrData; ?></li><hr class="m-t-5 m-b-5"> </ul>
<?php  } ?>
</div>
<div class="col-xs-12 col-md-6 ">
<h4 class="m-b-5">Rules based on Aspect</h4>
<?php  foreach($getManglikDetails['manglik_present_rule']['based_on_house'] as $arrData){ ?>
<ul class="bullets next-line-pad list" style="padding-left: 25px">
<li>Twelfth house of your birth chart is aspected by Ketu.</li><hr class="m-t-5 m-b-5"> </ul>
<?php  } ?>
</div>
</div>
</div>
<!--<div class="col-md-12 green">
    <h1>Your Manglik report in brief</h1>
    <p>In your horoscope the Mahapadma Kaal Sarp Yog is present.</p>
<p>Due to this reason the married life though normal could be painful and disturbed. The native remains unsuccessful in his love affairs or he may not be blessed with a desired spouse. The native may be ill from time to time. The worries and mental unrest do not leave the native due to one reason or other. His confidence may be lacking. The native travels a lot but success is not there.</p>
<p>The enemies of the native hatch conspiracies against him and try to cause harm.</p>

<p>The native does not take much interest in worship, recitations, alms or other religious activities. The character of the native remains dubious.</p>

<p>Due to Kaal Sarp Yog of this type the native should not work in army.</p>

<p>The native sees bad dreams from time to time such as snakes, fearful scenes, hanging etc.</p>
</div>
<!--<div class="col-md-12 green">
    <h1>Remedies for Manglik Dosha</h1>
    <ul>
    <li>Rudrabhisheka - a puja to Lord Shiva can be performed on a solar or lunar eclipse or on Mahashivratri at Mahakaleshwar temple, Ujjain Temple.</li>
<li>Install an energized Kaal Sarpa Yog yantra at the place of veneration or puja room at home and worship it daily.</li>
<li>Get a Kalsarpa dosha nivaran pooja performed on a Wednesday or Friday to negate the malefic effects of Rahu.</li>

<li>Get a Dashansh Homa or Yajna done on Nag Panchami day in the month of Shravan in a temple or near a holy river</li>

<li>Donate fresh reddish.</li>

<li>Wear a 14 faced rudraksha or a combination of 8+9 faced rudraksha.</li>
</ul>
</div>-->
</div>
</div>
     
</div>
                <div class="tab-pane fade in" id="tab14">
                  <div class="col-xs-12">
                  <h2>Pitra Dosha Analysis</h2>
                  <hr>
                  
               </div>
               <div class="col-xs-12 col-md-12 m-t-25">
<div class="feature feature-1">
<div class="feature__body boxed--sm green">
<h3 class="unmarg--bottom">What is Pitra Dosha ?</h3>
<p class="text-justify">
<?php echo $getPitriDoshaReport['what_is_pitri_dosha'];  ?>
</p>
</div>
<?php if($getPitriDoshaReport['is_pitri_dosha_present']==''){ ?>
<div class="boxed" style="border-color:#a6d8e1;background-color: #85c3b6">
<div class="col-xs-12 col-md-8 m-b-20">
<h4 class="m-b-5">STATUS</h4>
<p><?php echo $getPitriDoshaReport['conclusion'];  ?></p>
</div>
<div class="col-xs-12 col-md-4">
<h4 class="color--success m-t-30">NOT PRESENT</h4>
</div>
</div>
<?php } else{?>
<div class="boxed" style="border-color:#a6d8e1;background-color: #85c3b6">
<div class="col-xs-12 col-md-8 m-b-20">
<h4 class="m-b-5">STATUS</h4>
<p><?php echo $getPitriDoshaReport['conclusion'];  ?></p>
</div>
<div class="col-xs-12 col-md-4">
<h4 class="color--success m-t-30"> PRESENT</h4>
</div>


</div>
<div class="col-xs-12">
<h4 class="m-b-5">Rules matched</h4>
<p class="unmarg--bottom" style="font-size: 1.12em"><?php echo $getPitriDoshaReport['conclusion'];  ?></p><hr class="m-t-5 m-b-5" <="" div="">
</div>
<div class="col-md-12 green">
    <h1>Your  Pitra report in brief</h1>
    <?php  foreach($getPitriDoshaReport['effects'] as $arrData) { ?>
    <ul>
    <li><?php  echo $arrData;  ?></li>
</ul>
<?php  } ?>
</div>
<div class="col-md-12 green">
    <h1>Remedies for  Pitra Dosha</h1>
    <?php  foreach($getPitriDoshaReport['remedies'] as $arrData) { ?>
    <ul>
    <li><?php  echo $arrData;  ?></li>
</ul>
<?php  } ?>
</div>
<?php }  ?>


</div>
</div>
     
</div>
                 <div class="tab-pane fade in" id="tab15">
                  <div class="col-xs-12">
                  <h2>Sadhesati Cycle Analysis</h2>
                  <hr>
                  
               </div>
               <div class="col-xs-12 col-md-12 m-t-25">
<div class="feature feature-1">
<div class="feature__body boxed--sm green">
<h3 class="unmarg--bottom">What is Sadhesati Dosha ?</h3>
<p class="text-justify">
   <?php echo $getSadhesatiCurrentStatus['what_is_sadhesati'];  ?>


</p>
</div>
<?php  if($getSadhesatiCurrentStatus['sadhesati_status']==''){ ?>
<div class="col-xs-12 col-md-12 m-b-20">
<div class="boxed boxed--border bg-success">
<h3 class="m-b-10">Status</h3>
<p class="unmarg--bottom"><?php echo $getSadhesatiCurrentStatus['is_undergoing_sadhesati'];  ?></p>
<p class="unmarg"><b>Moon Sign :</b> &nbsp;<?php echo $getSadhesatiCurrentStatus['moon_sign'];  ?> </p><p><b>Saturn Sign :</b> &nbsp;<?php echo $getSadhesatiCurrentStatus['saturn_sign'];  ?></p>
 </div>
</div>
<?php } else{ ?>
<div class="col-xs-12 col-md-12 m-b-20">
<div class="boxed boxed--border bg-success">
<h3 class="m-b-10">Status</h3>
<p class="unmarg--bottom"><?php echo $getSadhesatiCurrentStatus['is_undergoing_sadhesati'];  ?></p>
<p class="unmarg"><b>Moon Sign :</b> &nbsp;<?php echo $getSadhesatiCurrentStatus['moon_sign'];  ?> </p><p><b>Saturn Sign :</b> &nbsp;<?php echo $getSadhesatiCurrentStatus['saturn_sign'];  ?></p>
<p><b>Start : </b><?php echo $getSadhesatiCurrentStatus['start_date'];  ?>&nbsp; <b>End : </b><?php echo $getSadhesatiCurrentStatus['end_date'];  ?></p> </div>
</div>
<?php } ?>
<div class="col-md-12 green">
    <h1>Sadhesati Life Details</h1>
    
</div>
<div class="col-md-12 green">
<div class="table-scrollable table-bordered mt--1">
<div class="table-responsive">
<table class="table table-responsive table-hover table-light blodTd">
<thead>
<tr>
<th class="text-center"><b>Date</b></th>
<th class="text-center"><b>Moon Sign</b></th>
<th class="text-center"><b>Saturn sign</b> </th>
<th class="text-center"><b>Retro</b></th>
<th class="text-center"><b>Type</b></th>

<th class="text-center"><b>Summary</b></th>
</tr>
</thead>
<tbody>
   <?php foreach($getSadhesatiLifeDetails as $arrData) { ?>
<tr>
<td class="text-center" style="white-space: nowrap;"><?php echo $arrData['date']  ?></td>
<td class="text-center"><?php echo $arrData['moon_sign']  ?></td>
<td class="text-center"><?php echo $arrData['saturn_sign']  ?></td>
<?php if($arrData['is_saturn_retrograde']==''){ ?>
<td class="text-center"><?php echo "No";  ?></td>
<?php } else{ ?>
   <td class="text-center"><?php echo "Yes";  ?></td>
<?php } ?>

<td class="text-center" style="white-space: nowrap;"><?php echo $arrData['type']  ?></td>

<td class=""><?php echo $arrData['summary']  ?></td>
</tr>
<?php  }  ?>










</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
     
</div>
                  <div class="tab-pane fade in" id="tab16">
                  <div class="col-xs-12">
                  <h2>Gemstone For You</h2>
                  <hr>
                  
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12 m-t-15 m-b-20">
<div class="text-center m-b-10">
<figure>
<h3 class="m-b-10">Your Life Stone</h3>

<img src="<?php echo base_url();?>front-assets/images/red_coral.jpg" height="150" width="150" alt="Gemstone Images" class="img-thumbnail img-responsive  mx-auto d-block">
<p><b><?php echo $getBasicGemSuggestion['LIFE']['name']; ?></b></p>
</figure>
</div>
<div class="lite-sep-line display-block"></div>
<div class="table-scrollable">
<table class="table table-responsive table-hover table-light blodTd tabl1">
<tbody>
<tr>
<th class="">Substitute</th>
<td class=""><?php echo $getBasicGemSuggestion['LIFE']['semi_gem']; ?></td>
</tr>
<tr>
<th class="">Finger</th>
<td class=""><?php echo $getBasicGemSuggestion['LIFE']['wear_finger']; ?></td>
</tr>
<tr>
<th class="">Weight</th>
<td class=""><?php echo $getBasicGemSuggestion['LIFE']['weight_caret']; ?></td>
</tr>
<tr>
<th class="">Day</th>
<td class=""><?php echo $getBasicGemSuggestion['LIFE']['wear_day']; ?></td>
</tr>
<tr>
<th class="">Deity</th>
<td class=""><?php echo $getBasicGemSuggestion['LIFE']['gem_deity']; ?></td>
</tr>
<tr>
<th class="">Metal</th>
<td class=""><?php echo $getBasicGemSuggestion['LIFE']['wear_metal']; ?></td>
</tr>
</tbody>
</table>
</div>
<div class="lite-sep-line display-block"></div>
</div>
    <div class="col-md-4 col-sm-12 col-xs-12 m-t-15 m-b-20">
<div class="text-center m-b-10">
<figure>
<h3 class="m-b-10">Your Benefic Stone</h3>

<img src="<?php echo base_url();?>front-assets/images/ruby.jpg" height="150" width="150" alt="Gemstone Images" class="img-thumbnail img-responsive  mx-auto d-block">
<p><b><?php echo $getBasicGemSuggestion['BENEFIC']['name']; ?></b></p>
</figure>
</div>
<div class="lite-sep-line display-block"></div>
<div class="table-scrollable">
<table class="table table-responsive table-hover table-light blodTd tabl1">
<tbody>
<tr>
<th class="">Substitute</th>
<td class=""><?php echo $getBasicGemSuggestion['BENEFIC']['semi_gem']; ?></td>
</tr>
<tr>
<th class="">Finger</th>
<td class=""><?php echo $getBasicGemSuggestion['BENEFIC']['wear_finger']; ?></td>
</tr>
<tr>
<th class="">Weight</th>
<td class=""><?php echo $getBasicGemSuggestion['BENEFIC']['weight_caret']; ?></td>
</tr>
<tr>
<th class="">Day</th>
<td class=""><?php echo $getBasicGemSuggestion['BENEFIC']['wear_day']; ?></td>
</tr>
<tr>
<th class="">Deity</th>
<td class=""><?php echo $getBasicGemSuggestion['BENEFIC']['gem_deity']; ?></td>
</tr>
<tr>
<th class="">Metal</th>
<td class=""><?php echo $getBasicGemSuggestion['BENEFIC']['wear_metal']; ?></td>
</tr>
</tbody>
</table>
</div>
<div class="lite-sep-line display-block"></div>
</div>
    <div class="col-md-4 col-sm-12 col-xs-12 m-t-15 m-b-20">
<div class="text-center m-b-10">
<figure>
<h3 class="m-b-10">Your Lucky Stone</h3>

<img src="<?php echo base_url();?>front-assets/images/yellow_sapphire.jpg" height="150" width="150" alt="Gemstone Images" class="img-thumbnail img-responsive  mx-auto d-block">
<p><b><?php echo $getBasicGemSuggestion['LUCKY']['name']; ?></b></p>
</figure>
</div>
<div class="lite-sep-line display-block"></div>
<div class="table-scrollable">
<table class="table table-responsive table-hover table-light blodTd tabl1">
<tbody>
<tr>
<th class="">Substitute</th>
<td class=""><?php echo $getBasicGemSuggestion['LUCKY']['semi_gem']; ?></td>
</tr>
<tr>
<th class="">Finger</th>
<td class=""><?php echo $getBasicGemSuggestion['LUCKY']['wear_finger']; ?></td>
</tr>
<tr>
<th class="">Weight</th>
<td class=""><?php echo $getBasicGemSuggestion['LUCKY']['weight_caret']; ?></td>
</tr>
<tr>
<th class="">Day</th>
<td class=""><?php echo $getBasicGemSuggestion['LUCKY']['wear_day']; ?></td>
</tr>
<tr>
<th class="">Deity</th>
<td class=""><?php echo $getBasicGemSuggestion['LUCKY']['gem_deity']; ?></td>
</tr>
<tr>
<th class="">Metal</th>
<td class=""><?php echo $getBasicGemSuggestion['LUCKY']['wear_metal']; ?></td>
</tr>
</tbody>
</table>
</div>
<div class="lite-sep-line display-block"></div>
</div>
      <div class="col-md-12 col-xs-12">
<div class="boxed boxed--border mt--2 green">
<div class="col-md-12 col-xs-12">
<div class="col-md-3 col-xs-12 text-center">
<img src="<?php echo base_url();?>front-assets/images/red_coral.jpg" height="150" width="150" alt="Gemstone Images" class="">
</div>
<h3>Red Coral</h3>
<p class="">Red Coral is the gemstone ruled by Mars. Wearing Red Coral makes one courageous and his enemies are vanquised. Red Coral protects from evil spirits, sercery, bad dreams.</p>
<div class="col-md-12 col-xs-12">
<h4 class="unmarg">Weight Metal</h4>
<p>Red Coral should weigh more than 6 carats. It should be set in gold ring mixed with copper. The ring should be made such that the stone touches skin.</p>
<h4 class="unmarg">Time</h4>
<p>Red Coral should be worn on a Tuesday morning one hour after Sunrise on the bright half of lunar month.</p>
<h4 class="unmarg">Rituals</h4>
<p>Before wearing the Red Coral it one should keep the ring immersed in unboiled milk or ganges water for sometime.</p>
<h4 class="unmarg">Mantra</h4>
<p>Once the energizing rituals are completed one must worship stone with flower and incense. For Red Coral following mantra to be recited 108 times.</p>
<pre class="text-center bold"><p>।। ॐ क्रां क्रीं क्रौं सः भौमाय नमः ।।</p></pre>
<h4 class="unmarg">Substitutes</h4>
<p>One can also use the substitutes for Red Coral like Sang Moongi, Carnelian and Red Jasper.</p>
<h4 class="unmarg">Caution</h4>
<p>One should take care that Red Coral should not be worn with Emerald, Diamond, Blue Sapphire, Gomedha and Cat's Eye and their substitutes.</p>
</div>
</div>
</div>
<div class="boxed boxed--border mt--2 green">
<div class="col-md-12 col-xs-12">
<div class="col-md-3 col-xs-12 text-center">
<img src="<?php echo base_url();?>front-assets/images/ruby.jpg" height="150" width="150" alt="Gemstone Images" class="">
</div>
<h3>Ruby</h3>
<p class="">Ruby is the gemstone ruled by Sun. Pure form of ruby is unblemished, smooth in touch,clean having good color with lustre , brillance and radiance.Wearing ruby helps brings good wealth and property, strengthens will power and spirit. He who wears ruby is fortunate and occupies high and respected position in society.</p>
<div class="col-md-12 col-xs-12">
<h4 class="unmarg">Weight Metal</h4>
<p>Flawless ruby should be worned with least 2-1/2 carats in weight. It should be set in the ring of gold mixed with copper. The ring should be made such that the stone touches skin.</p>
<h4 class="unmarg">Time</h4>
<p>Ruby should worn after Sunday sunrise of the bright half of the lunar month.</p>
<h4 class="unmarg">Rituals</h4>
<p>Before wearing the it one should keep the ring immersed in unboiled milk or ganges water for sometime.</p>
<h4 class="unmarg">Mantra</h4>
<p>Once the energizing rituals are completed one must worship stone with flower and incense. For Ruby following mantra to be recited 108 times.</p>
<pre class="text-center bold"><p>।। ॐ ह्रां ह्रीं ह्रौं सः सूर्याय नमः ।।</p></pre>
<h4 class="unmarg">Substitutes</h4>
<p>One can also use the substitutes for ruby like Red Spined, Star Ruby, Pyrope Garnet, Red Zircon or Red Tourmaline.</p>
<h4 class="unmarg">Caution</h4>
<p>One should take care that ruby should not be worn with Diamond, Blue Sapphire, Gomedha and Cat's Eye and their substitutes.</p>
</div>
</div>
</div>
<div class="boxed boxed--border mt--2 green">
<div class="col-md-12 col-xs-12">
<div class="col-md-3 col-xs-12 text-center">
<img src="<?php echo base_url();?>front-assets/images/yellow_sapphire.jpg" height="150" width="150" alt="Gemstone Images" class="">
</div>
<h3>Yellow Sapphire</h3>
<p class="">Yellow Sapphire is the gemstone ruled by Jupiter. Wearing Yellow Sapphire brings good health, wisdom, property,longevity,name, honours and fame. Yellow Sapphire protects from evil spirits.</p>
<div class="col-md-12 col-xs-12">
<h4 class="unmarg">Weight Metal</h4>
<p>Yellow Sapphire should weigh more than 3 carats and should not weigh 6, 11 or 15 carats. It should be set in gold ring. The ring should be made such that the stone touches skin.</p>
<h4 class="unmarg">Time</h4>
<p>Yellow Sapphire should be worn on a Thursday morning of the bright half of lunar month.</p>
<h4 class="unmarg">Rituals</h4>
<p>Before wearing the Yellow Sapphire it one should keep the ring immersed in unboiled milk or ganges water for sometime.</p>
<h4 class="unmarg">Mantra</h4>
<p>Once the energizing rituals are completed one must worship stone with flower and incense. For Yellow Sapphire following mantra to be recited 108 times.</p>
<pre class="text-center bold"><p>।। ॐ ग्रां ग्रीं ग्रौं सः गुरवे नमः  ।।</p></pre>
<h4 class="unmarg">Substitutes</h4>
<p>One can also use the substitutes for Yellow Sapphire like Yellow Perl, Yellow Zircon, Yellow Tourmaline, Topaz and Citrine (Quartz Topaz).</p>
<h4 class="unmarg">Caution</h4>
<p>One should take care that Yellow Sapphire should not be worn with Diamond, Blue Sapphire, Gomedha and Cat's Eye.</p>
</div>
</div>
</div>
</div>        
</div>
                <div class="tab-pane fade in" id="tab17">
                  <div class="col-xs-12">
                  <h2>Rudraksha For You</h2>
                  <hr>
                  
               </div>
               <div class="text-center">
<figure>
<img src="<?php echo base_url();?>front-assets/images/ten_faced.jpg" alt="Rudraksha Remedy" class="">
<p><strong><?php echo $getRudrakshaSuggestion['name'];  ?></strong>
</p>
</figure>
</div>
<div class="col-xs-12 col-md-12 m-t-25">
<div class="feature feature-1">
<div class="feature__body boxed--sm green">
<h3 class="unmarg--bottom"><?php echo $getRudrakshaSuggestion['name'];  ?></h3>
<p class="text-justify"><?php echo $getRudrakshaSuggestion['detail'];  ?></p></div>


</div>
</div>
             
</div>
               <div class="tab-pane fade in" id="tab18">
                  <div class="col-xs-12">
                  <h2>Ascendant Report</h2>
                  <hr>
                  
               </div>
               <div class="text-center">

</div>
<div class="col-xs-12 col-md-12 m-t-25">
<div class="feature feature-1">
<div class="feature__body boxed--sm green">
<h3 class="unmarg--bottom">What is Ascendant ?</h3>
<p class="text-justify">The first house is known as Ascendant (Lagna) represents the presence of a person in a physical form. It represents the early life, childhood, character, health, willpower, fame, nature and different aspect of life. This house provides a peek into the sense of knowing one’s weakness, strength, likes, dislikes and much more. It is helpful to a person’s personality. How they perceive manners, behaviours and attitude in one’s life.</p></div>


</div>
</div>
<div class="col-xs-12 text-center" style="">
<h2 class="unmarg p-t-10 p-b-10" style="color:white;background:#fa8819;
    line-height: 58px;
    font-size: 25px;">Your Ascendant is <?php echo $getAscendantReport['asc_report']['ascendant']; ?></h2>
</div>
      <div class="col-xs-12">
                  <h2>Your Ascendant Report</h2>
                  <hr>
                  
               </div>  
               <div class="col-md-5 col-xs-12 float-right mm-b-20">
<img class="img-responsive" src="<?=base_url();?>front-assets/images/aries-zodiac.png" alt="Aries Ascendant">
</div>
<div class="green">
<p class="text-justify">
   <?php echo $getAscendantReport['asc_report']['ascendant']; ?> 
<?php echo $getAscendantReport['asc_report']['report']; ?> </div>
</div>      
 <div class="tab-pane fade in" id="tab19">
                  <div class="col-xs-12">
                  <h2>Ascendant Report</h2>
                  <hr>
                  
               </div>
               <div class="col-xs-12">
                           <div class="btn-pref btn-group btn-group-justified btn-group-lg btn121" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn-default" href="#tab1111" data-toggle="tab"><span class="" aria-hidden="true"></span>
                <div class="hidden-xs1"><img src="<?=base_url();?>front-assets/images/sun.png"><p class="text-center text-white">Sun</p></div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn-default" href="#tab1112" data-toggle="tab"><span class="" aria-hidden="true"></span>
                <div class="hidden-xs1"><img src="<?=base_url();?>front-assets/images/moon.png"><p class="text-center text-white">Moon</p></div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn-default" href="#tab1113" data-toggle="tab"><span class="" aria-hidden="true"></span>
                <div class="hidden-xs1"><img src="<?=base_url();?>front-assets/images/mars.png"><p class="text-center text-white">Mars</p></div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn-default" href="#tab1114" data-toggle="tab"><span class="" aria-hidden="true"></span>
                <div class="hidden-xs1"><img src="<?=base_url();?>front-assets/images/mercury.png"><p class="text-center text-white">Mercury</p></div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn-default" href="#tab1115" data-toggle="tab"><span class="" aria-hidden="true"></span>
                <div class="hidden-xs1"><img src="<?=base_url();?>front-assets/images/jupiter.png"><p class="text-center text-white">Jupiter</p></div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn-default" href="#tab1116" data-toggle="tab"><span class="" aria-hidden="true"></span>
                <div class="hidden-xs1"><img src="<?=base_url();?>front-assets/images/venus.png"><p class="text-center text-white">Venus</p></div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn-default" href="#tab1117" data-toggle="tab"><span class="" aria-hidden="true"></span>
                <div class="hidden-xs1"><img src="<?=base_url();?>front-assets/images/saturn.png"><p class="text-center text-white">Saturn</p></div>
            </button>
        </div>
       
    </div>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1111">
            <div class="green">
                <p>
                 <?php  echo $getGeneralRashiReport['rashi_report']; ?> 
</p>
            </div>
           </div>
             <div class="tab-pane fade in active" id="tab1112">
            <div class="green">
                <p>
                  <?php  echo $getGeneralmoonRashiReport['rashi_report']; ?>
</p>
            </div>
           </div>
             <div class="tab-pane fade in active" id="tab1113">
            <div class="green">
                <p>
                   <?php  echo $getGeneralmarsRashiReport['rashi_report']; ?>
</p>
            </div>
           </div>
             <div class="tab-pane fade in active" id="tab1114">
            <div class="green">
                <p>
    <?php  echo $getGeneralmercuryRashiReport['rashi_report']; ?>              
</p>
            </div>
           </div>
             <div class="tab-pane fade in active" id="tab1115">
            <div class="green">
                <p><?php  echo $getGeneraljupiterRashiReport['rashi_report']; ?> 
</p>
            </div>
           </div>
             <div class="tab-pane fade in active" id="tab1116">
            <div class="green">
                <p><?php  echo $getGeneralvenusRashiReport['rashi_report']; ?> 
</p>
            </div>
           </div>
             <div class="tab-pane fade in active" id="tab1117">
            <div class="green">
                <p><?php  echo $getGeneralsaturnRashiReport['rashi_report']; ?> 
</p>
            </div>
           </div>
           </div>
               </div>



</div> 

   <div class="tab-pane fade in" id="tab20">
                  <div class="col-xs-12">
                  <h2>Numerology For You</h2>
                  <hr>
                  
               </div>
               <div class="col-xs-12 text-center m-b-25 m-t-15">
<div class="col-md-3 col-xs-6">
<div class="circleshape m-b-10" style="background-color: #F06292">
<div class="circon1"><?php echo $getNumeroTable['destiny_number'];  ?></div>
</div>
<h4>Destiny Number</h4>
</div>
<div class="col-md-3 col-xs-6">
<div class="circleshape m-b-10" style="background-color: #AB47BC">
<div class="circon1"><?php echo $getNumeroTable['radical_num'];  ?></div>
</div>
<h4>Redical Number</h4>
</div>
<div class="col-md-3 col-xs-6">
<div class="circleshape m-b-10" style="background-color: #3F51B5">
<div class="circon1"><?php echo $getNumeroTable['name_number'];  ?></div>
</div>
<h4>Name Number</h4>
</div>
<div class="col-md-3 col-xs-6">
<div class="circleshape m-b-10" style="background-color: #00796B">
<div class="circon1"><?php echo $getNumeroTable['evil_num'];  ?></div>
</div>
<h4>Evil Number</h4>
</div>
</div>
<div class="col-xs-12 col-sm-6 mb--1 mm-b-20">
    <div class="bgtbl bht1">
<table class="tg table-striped table-hover">
<tbody>
<tr>
<td>Your Name</td>
<td class="type--bold"><?php echo $getNumeroTable['name'];  ?></td>
</tr>
<tr>
<td>Today Date</td>
<td class="type--bold"><?php echo $getNumeroTable['date'];  ?></td>
</tr>
<tr>
<td>Radical Number</td>
<td class="type--bold"><?php echo $getNumeroTable['radical_number'];  ?></td>
</tr>
<tr>
<td>Name Number</td>
<td class="type--bold"><?php echo $getNumeroTable['name_number'];  ?></td>
</tr>
<tr>
<td>Destiny Number</td>
<td class="type--bold"><?php echo $getNumeroTable['destiny_number'];  ?></td>
</tr>
<tr>
<td>Radical Ruler</td>
<td class="type--bold"><?php echo $getNumeroTable['radical_ruler'];  ?></td>
</tr>
<tr>
<td>Friendly Numbers</td>
<td class="type--bold"><?php echo $getNumeroTable['friendly_num'];  ?></td>
</tr>
<tr>
<td>Evil Numbers</td>
<td class="type--bold"><?php echo $getNumeroTable['evil_num'];  ?></td>
</tr>
<tr>
<td>Neutral Number</td>
<td class="type--bold"><?php echo $getNumeroTable['neutral_num'];  ?></td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="col-xs-12 col-sm-6 mb--1 mm-b-20">
    <div class="bgtbl bht1">
<table class="tg table-striped table-hover">
<tbody>
<tr>
<td>Favourable Days</td>
<td class="type--bold"><?php echo $getNumeroTable['fav_day'];  ?></td>
</tr>
<tr>
<td>Favourable Stone</td>
<td class="type--bold"><?php echo $getNumeroTable['fav_stone'];  ?></td>
</tr>
<tr>
<td>Favourable Sub Stone</td>
<td class="type--bold"><?php echo $getNumeroTable['fav_substone'];  ?></td>
</tr>
<tr>
<td>Favourable God</td>
<td class="type--bold"><?php echo $getNumeroTable['fav_god'];  ?></td>
</tr>
<tr>
<td>Favourable Metal</td>
<td class="type--bold"><?php echo $getNumeroTable['fav_metal'];  ?></td>
</tr>
<tr>
<td>Favourable Color</td>
<td class="type--bold"><?php echo $getNumeroTable['fav_color'];  ?></td>
</tr>
<tr>
<td>Favourable Mantra</td>
<td class="type--bold"><?php echo $getNumeroTable['fav_color'];  ?></td>
</tr>

</tbody>
</table>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12  mb--2 mm-b-20">
    <div class="col-xs-12 col-sm-12 green">
<h3><?php echo $getNumeroReport['title'];  ?></h3>
<p class="text-justify">
<?php echo $getNumeroReport['description'];  ?></div>
</div>
</div>
         <div class="tab-pane fade in" id="tab21">
                  <div class="col-xs-12">
                  <h2>Your Favorable Points</h2>
                  <hr>
                  
               </div>
               <div class="col-xs-12 text-center m-b-25 m-t-15">
<div class="boxed boxed--border boxed--md for-mobile bg--site">
    <div class="row">
    
            <div class="col-md-8 text-left p-t-10 p-l-8 green"> 
            <h4 class="type--uppercase"><?php echo $getNumeroFastsReport['title'];  ?></h4>
            <p><?php echo $getNumeroFastsReport['description'];  ?> </p>
            </div>
                <div class="col-md-4 text-center">
            <img src="<?php echo base_url(); ?>front-assets/images/fast.png" width="100%"  style="margin-top:20px;background: #c5a8a8">
            </div>
            </div>
            </div>
            <div class="boxed boxed--border boxed--md for-mobile bg--site">
    <div class="row">
    
            <div class="col-md-8 text-left p-t-10 p-l-8 green"> 
            <h4 class="type--uppercase"><?php echo $getNumeroFavLord['title'];  ?></h4>
            <p><?php echo $getNumeroFavLord['description'];  ?> 
 </p>
            </div>
                <div class="col-md-4 text-center">
            <img src="<?php echo base_url(); ?>front-assets/images/ishta_devta.jpeg" width="100%"  style="margin-top:20px;background: #c5a8a8">
            </div>
            </div>
            </div>
                 <div class="boxed boxed--border boxed--md for-mobile bg--site">
    <div class="row">
    
            <div class="col-md-8 text-left p-t-10 p-l-8 green"> 
            <h4 class="type--uppercase"><?php echo $getNumeroFavTime['title'];  ?></h4>
            <p><?php echo $getNumeroFavTime['description'];  ?>
 </p>
            </div>
                <div class="col-md-4 text-center">
            <img src="<?php echo base_url(); ?>front-assets/images/gayatri.png" width="100%"  style="margin-top:20px;background: #c5a8a8">
            </div>
            </div>
            </div>
                 <div class="boxed boxed--border boxed--md for-mobile bg--site">
    <div class="row">
    
            <div class="col-md-8 text-left p-t-10 p-l-8 green"> 
            <h4 class="type--uppercase"><?php echo $getNumeroPlaceVastu['title'];  ?></h4>
            <p><?php echo $getNumeroPlaceVastu['description'];  ?>

 </p>
            </div>
                <div class="col-md-4 text-center">
            <img src="<?php echo base_url(); ?>front-assets/images/time.png" width="100%"  style="margin-top:20px;background: #c5a8a8">
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
</div>
</div>
<!--BKnowcrumb end-->
<style type="text/css">
.myDiv{
   display: none;
}
.myDivs{
   display: none;
}
.bht1 table tr td:nth-child(1) {
    background: #f9e2cf;
}
.bht1 table tr, .bht1 table td, .bht1 table th{
    padding: 11px!important;
    border: 3px solid #f5f5f561;
    text-align: center;
    background: #ffffff0a;
    color: #000;
    font-size: 16px;}
.tg {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
}
.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #fff8f2;
}
   .default-padding{padding: 0px}
   .panel-body ul{padding-left: 0px}
   .panel-body ul li{list-style-type: none}
   .panel-title a:before{content: "\f107";font-family:'FontAwesome';right: 0px;position: absolute;}
   .panel-title{position: relative;}
   .panel-body ul li{border-bottom: 1px dashed #ddd;padding: 12px 20px;color: #fff;
   border-left: 4px solid;}
   .panel-body ul li a{color: #000;font-size: 15px;}
   .panel-body{padding: 0px}
   .panel-body ul li.active{background: #00968814;
   color: #fa8819;
   border-left: 4px solid;}
   .panel-body ul li:hover{background: #00968814;
   color: #fa8819;
   border-left: 4px solid;cursor: pointer;}
   a:hover{text-decoration: none;}
   .card-container .custom-card {
   position:relative;
   background: #000;
   overflow: hidden;
   border-radius: 10px;
   transition: .5s;
   min-height:213px;
   margin-bottom: 40px;
   }
   .card-container .custom-card:hover {
   transform: translateY(-20px);
   box-shadow: 0 20px 20px rgba(0,0,0,0.2);
   }
   .card-container .custom-card .card-img-box {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   transition: 0.5s;
   }
   .card-container .custom-card:hover .card-img-box {
   opacity: 0.4;
   }
   .card-container .custom-card .card-img-box img {
   width:100%;
   height: 100%;
   }
   pre.text-center.bold p{margin-bottom:0px;}
   .green h4.unmarg{color:#ff8820;}
   .card-container .custom-card .card-content {
   position: absolute;
   width: 100%;
   height: 80%;
   bottom: -100%;
   padding: 20px;
   box-sizing: border-box;
   text-align: center;
   transition: 0.5s;
   padding-top: 30px;
   }
   .card-container .custom-card:hover .card-content {
   bottom:0
   }
   .card-container .custom-card:nth-child(1) {
   background: #da7105;
   opacity: 1;
   }
   .card-container .custom-card:nth-child(2) {
   background: linear-gradient(0deg, #8012a5, transparent)
   }
   .card-container .custom-card:nth-child(3) {
   background: linear-gradient(0deg, #3a414c, transparent)
   }
   .card-container .custom-card .card-content h2 {
   margin: 0 0 21px;
   padding:0;
   color: #fff;
   font-size: 20px;text-transform:capitalize;
   }
   .card-container .custom-card .card-content h2 span {        
   color: #ffeb3b;
   font-size: 16px;
   }
   .card-container .custom-card .card-content p {
   margin: 0;
   padding: 0;
   color: #fff;
   font-size: 16px;
   margin-bottom: 15px;
   }
   .card-container .custom-card .card-content ul {
   display: flex;
   margin: 10px 0 0;
   padding: 0;
   align-items: center;
   justify-content: center;
   }
   .card-container .custom-card .card-content ul  li {
   list-style: none;
   }
   .card-container .custom-card .card-content ul li a {
   color: #fff;
   padding: 0 10px;
   font-size: 18px;
   transition: 0.5s;
   }
   .card-img-box p{
   position: absolute;
   bottom: 0px;
   width: 100%;
   text-align: center;
   background-color: #fa8819;
   padding: 8px 3px;
   margin-bottom: 0px;
   color: #fff;
   font-size: 18px;
   }
   .custom-card:nth-child(2) .card-img-box p{linear-gradient(120deg, #f6d365 0%, #fda085 100%)}
   .card-container .custom-card:hover .card-img-box p{display: none;}
   .card-content a{
   color: #fff;
   background-color: #fa8819;
   padding: 10px 16px;
   }
   .card-content a:hover {
   background-image: none;
   background-color: #fff;
   color: #000;
   }
   hr {
   margin-top: 20px;
   margin-bottom: 30px;
   border: 0;
   border-top: 1px solid #fa8819;
   }
   .panel-title a{color: #fff}
   .panel-default>.panel-heading {
   color: #333;
   background-color: #fa8819;
   border-color: #ddd;
   }
   .panel-heading{padding: 15px 15px}
   .green h1{color: #fa8819;font-size: 32px;margin-top: 0px}
   .green p {
   line-height: 32px;
   font-size: 16px;
   }
   .stick {
   position: fixed;
   top: 0px;
   width: 370px;
   }
   .panel-title a{display:block;}
   .tabl1 th {
    vertical-align: middle;
    border-bottom: 2px solid #ddd;
    color: #fff;
    font-size: 14px!important;
    padding: 10px!important;
}
   .tabl1 td{
    padding: 13px!important;
    border: 3px solid #f5f5f561;
    text-align: center;
    background: #ffffff0a;
    color: #000;
    font-size: 14px!important;
    background: #fff;
   }
   .btn121 img{    width: 41%;
    height: 43px;}
   .btn121 .btn-default {
    color: #333;
    background-color: #fff;
    border-color: #f7f7f7;
    box-shadow: none;
    border: none;
    border: 1px solid #eee;
    width: 110px;
    height: 120px;
    margin: 0px;
}
</style>
<script>
   $(document).ready(function(){
   $(window).scroll(function () {   
      
    if($(window).scrollTop() > 500) {
       $('#sidebar').css('position','fixed');
       $('#sidebar').css('top','80px'); 
         $('#sidebar').css('width','265px'); 
    }
   
    else if ($(window).scrollTop() <= 500) {
       $('#sidebar').css('position','');
       $('#sidebar').css('top','');
    }  
       if ($('#sidebar').offset().top + $("#sidebar").height() > $(".ast_team_wrapper").offset().top) {
           $('#sidebar').css('top',-($("#sidebar").offset().top + $("#sidebar").height() - $(".ast_team_wrapper").offset().top));
       }
   });
   });
</script>
<script type="text/javascript">
  
  $(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-warning").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-warning");   
});
});
</script>
<script>
$(function() {
  $('.chart').easyPieChart({
    size: 210,
    barColor: "#fa8819",
    scaleLength: 0,
    lineWidth: 15,
    trackColor: "#373737",
    lineCap: "circle",
    animate: 2000,
  });
    $('.chart1').easyPieChart({
    size: 210,
    barColor: "#fa8819",
    scaleLength: 0,
    lineWidth: 15,
    trackColor: "#373737",
    lineCap: "circle",
    animate: 2000,
  });
});
</script>
<script>
$(document).ready(function(){
$('#myselections').on('change', function(){
var demovalue = $(this).val();
$("#swapping").hide(); 
$("div.myDivs").hide();
$("#show"+demovalue).show();
});
});
</script>
<script type="text/javascript">
$(document).ready(function () {   
    $('body').on('change','#select_box', function() {
      $("#shows_only").hide();
         $('#show_only').val(this.value);
    });
});
  </script>  
  <script>
$(document).ready(function(){
$('#myselection').on('change', function(){
var demovalue = $(this).val(); 
$("#swap").hide();
$("#swaps").hide();
$("div.myDiv").hide();
$("#show"+demovalue).show();
});
});
</script>

      <link rel="stylesheet" href="<?= base_url()?>admin-assets/assets/css/datepicker.css">
        <script src="<?= base_url()?>admin-assets/assets/js/bootstrap-datepicker.js"></script>
   <script>
      $(function(){
    $(".date-picker").datepicker({
       dateformat: "yy-mm-dd",
       onSelect: function(){
        var date=$(this).val();
         alert(date);


         $.ajax({

            url: "<?= base_url('kundali/calender')?>",

            type: 'POST',

              dataType: "json",

       data: {'date':date
               
            },

            success: function(response) {
               //alert(response);
                if(response.status == 'success'){
                   $('#dashadata').html(response);
                }
            
        }
        

});

       }
    });



});

</script>
