<!-- ==========Match making detail page ========= -->
<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70 match-result">
   <div class="container">
      <div class="row width-custmize">
         <div class="col-md-3 col-sm-3 col-xs-4 kundali-img">
            <img src="<?php echo base_url(); ?>front-assets/images/match-making-detail.png" alt="" />
         </div>
         <div class="col-md-9 col-sm-9 col-xs-8">
            <div class="inner-detail">
               <h3>Result</h3>
               <div class="match-resltname">
                     <div class="name-wrp">					
                     <h1><?php echo  $this->session->userdata('matname'); ?></h1>
                     <div><?php echo $matchBirthDetails['male_astro_details']['day']; ?>/<?php echo $matchBirthDetails['male_astro_details']['month']; ?>/<?php echo $matchBirthDetails['male_astro_details']['year']; ?> <br>
                     <?php echo $this->session->userdata('matbbirth');?></div>
                  
                     </div>

                     <div class="name-wrp">					
                     <h1><?php echo$this->session->userdata('matgname');   ?></h1>
                     <div><?php echo $matchBirthDetails['female_astro_details']['day']; ?>/<?php echo $matchBirthDetails['female_astro_details']['month']; ?>/<?php echo $matchBirthDetails['female_astro_details']['year']; ?> <br>
                     <?php echo $this->session->userdata('matgbirth');?></div>
                  
                     </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ******************Match summary*************** -->
<?php
    $varna=$matchAshtakootPoints['varna']['total_points'];
    $vashya=$matchAshtakootPoints['vashya']['total_points'];
    $tara=$matchAshtakootPoints['tara']['total_points'];
    $yoni=$matchAshtakootPoints['yoni']['total_points'];
    $maitri=$matchAshtakootPoints['maitri']['total_points'];
    $gan=$matchAshtakootPoints['gan']['total_points'];
    $bhakut=$matchAshtakootPoints['bhakut']['total_points'];
    $nadi=$matchAshtakootPoints['nadi']['total_points'];
    
    $total=$varna+$vashya+$tara+$yoni+$maitri+$gan+$bhakut+$nadi;
    
    
    
    ?>
    
    <?php
    $varna=$matchAshtakootPoints['varna']['received_points'];
    $vashya=$matchAshtakootPoints['vashya']['received_points'];
    $tara=$matchAshtakootPoints['tara']['received_points'];
    $yoni=$matchAshtakootPoints['yoni']['received_points'];
    $maitri=$matchAshtakootPoints['maitri']['received_points'];
    $gan=$matchAshtakootPoints['gan']['received_points'];
    $bhakut=$matchAshtakootPoints['bhakut']['received_points'];
    $nadi=$matchAshtakootPoints['nadi']['received_points'];
    
    $received=$varna+$vashya+$tara+$yoni+$maitri+$gan+$bhakut+$nadi;
    
    
    
    ?>
    <?php 
    $percentage=$received/$total*100;
    
    ?>
<section class="data-wrp">
   <div class="container">
      <div class="row m-zero">
         <div class="col-md-12 text-center text-deco">
            <h3 class="title-bg">Match Summary</h3>
         </div>
         <div class="mtch-wrp">
            <div class="sticker">
               <img  class="boy" src="<?php echo base_url(); ?>front-assets/images/inner-page-boy.png">
               <img  class="girl" src="<?php echo base_url(); ?>front-assets/images/inner-page-girl.png">
            </div>
            <div class="col-md-12 nk-mf">
               <div>Male Nakshatra :<span><?php echo $matchHoroscope['astro_details']['male_profile']['naksahtra']; ?></span></div>
               <div>Female Nakshatra :<span><?php echo $matchHoroscope['astro_details']['female_profile']['naksahtra']; ?></span></div>
            </div>
            <div class="col-md-12">
               <ul>
               <li>
                  <p class="bg-circle"><?php echo $getMatchMakingPercentage['match_percentage'];  ?>%</p>
                  <p>% Match</p>
               </li>
               <li>
                  <p class="bg-circle"><?php echo $received;  ?>/<?php echo $total;  ?></p>
                  <p>Match Point</p>
               </li>
               <li>
                  <p class="bg-circle"><?php echo $getMatchMakingReport['ashtakoota']['received_points'];   ?>/<?php echo $total;  ?></p>
                  <p>Ashtakoot</p>
               </li>
               <li>
                  <p class="bg-circle"><?php echo $getMatchMakingReport['manglik']['male_percentage'];   ?>%</p>
                  <p>Male Mangalik</p>
               </li>
               <li>
                  <p class="bg-circle"><?php echo $getMatchMakingReport['manglik']['female_percentage'];   ?>%</p>
                  <p>Female Mangalik</p>
               </li>
               
               <?php
                    if( $getMatchMakingReport['rajju_dosha']['status']==''){
               ?>
                  <li>
                    <p class="bg-circle">No</p>
                    <p>Raju Dosha</p></li>
               <?php } else {?><li>
                    <p class="bg-circle">Yes</p>
                    <p>Raju Dosha</p></li>
               <?php  } ?>

               <?php
                    if( $getMatchMakingReport['vedha_dosha']['status']==''){
               ?>
                  <li>
                    <p class="bg-circle">No</p>
                    <p>Vedha Dosha</p></li>
               <?php } else {?><li>
                    <p class="bg-circle">Yes</p>
                    <p>Vedha Dosha</p></li>
               <?php  } ?>





               <ul>
            </div>
         </div>
         <div class="conclusion flexprop">
            <button class="btn btn-default btn-rounded btn-shadowed">Match Conclusion</button>
            <!-- <p>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
               Voluptatibus tempora, vero doloribus ratione vel minima? Veritatis 
               dignissimos eligendi autem molestias! Nesciunt sequi laborum in ea, 
               distinctio repudiandae maiores ipsam vero!
            </p> -->
            <div class="content">
            <p><?php echo $getMatchMakingReport['conclusion']['match_report']; ;   ?></p>
            </div>

         </div>
      </div>
   </div>
</section>
<!--******************** form section ***********-->
<section class="kundali-form mb-20 tab-view" id="milan-form">
   <div class="container">
      <div class="row">
         <h3 class="title-bg container text-center">
            <p>Match Detail</p>
         </h3>
      </div>
      <div class="detail-tab">
         <div class="panel panel-default">
            <div class="panel-body">
               <div class="tab-content">
                  <div class="panel-heading panel-heading-nav">
                     <ul class="nav nav-tabs">
                        <li role="presentation" class="active">
                           <a href="#one" aria-controls="one" role="tab" data-toggle="tab">Birth Detail</a>
                        </li>
                        <li role="presentation">
                           <a href="#two" aria-controls="two" role="tab" data-toggle="tab">Birth & Divisional Chart</a>
                        </li>
                        <li role="presentation">
                           <a href="#three" aria-controls="three" role="tab" data-toggle="tab">Asthakoot Point</a>
                        </li>
                     </ul>
                  </div>
                  <div role="tabpanel" class="tab-pane fade in active" id="one">
                     <div class="content-wrp">
                        <div class="col-md-9">
                           <div class="width-custmize dt-table tble-custmize">
                              <table class="table table-hover  table-light">
                                    <thead>
                                    <tr>
                                    <th>Male</th>
                                    <th>Birth Details</th>
                                    <th>Female</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td><?php echo $matchBirthDetails['male_astro_details']['day']; ?>/<?php echo $matchBirthDetails['male_astro_details']['month']; ?>/<?php echo $matchBirthDetails['male_astro_details']['year']; ?></td>
                                    <td>Date of Birth</td>
                                    <td><?php echo $matchBirthDetails['female_astro_details']['day']; ?>/<?php echo $matchBirthDetails['female_astro_details']['month']; ?>/<?php echo $matchBirthDetails['female_astro_details']['year']; ?></td>
                                    </tr>
                                    <tr>
                                    <td><?php echo $matchBirthDetails['male_astro_details']['hour']; ?>:<?php echo $matchBirthDetails['male_astro_details']['minute']; ?></td>
                                    <td>Birth Time</td>
                                    <td><?php echo $matchBirthDetails['female_astro_details']['hour']; ?>:<?php echo $matchBirthDetails['male_astro_details']['minute']; ?></td>
                                    </tr>
                                    <tr>
                                    <td><?php echo $matchBirthDetails['male_astro_details']['latitude']; ?></td>
                                    <td>Latitude</td>
                                    <td><?php echo $matchBirthDetails['female_astro_details']['latitude']; ?></td>
                                    </tr>
                                    <tr>
                                    <td><?php echo $matchBirthDetails['male_astro_details']['longitude']; ?></td>
                                    <td>Longitude</td>
                                    <td><?php echo $matchBirthDetails['female_astro_details']['longitude']; ?></td>
                                    </tr>
                                    <tr>
                                    <td><?php echo $matchBirthDetails['male_astro_details']['timezone']; ?></td>
                                    <td>Time Zone</td>
                                    <td><?php echo $matchBirthDetails['female_astro_details']['timezone']; ?></td>
                                    </tr>
                                    <tr>
                                    <td><?php echo $matchBirthDetails['male_astro_details']['sunrise']; ?></td>
                                    <td>Sunrise</td>
                                    <td><?php echo $matchBirthDetails['female_astro_details']['sunrise']; ?></td>
                                    </tr>
                                    <tr>
                                    <td><?php echo $matchBirthDetails['male_astro_details']['sunset']; ?></td>
                                    <td>Sunset</td>
                                    <td><?php echo $matchBirthDetails['female_astro_details']['sunset']; ?></td>
                                    </tr>
                                    <tr>
                                    <td><?php echo round($matchBirthDetails['male_astro_details']['ayanamsha'],4); ?></td>
                                    <td>Ayanamsha</td>
                                    <td><?php echo round($matchBirthDetails['female_astro_details']['ayanamsha'],4); ?></td>
                                    </tr>
                                    <tr>
                                    <td><?php echo $matchHoroscope['astro_details']['male_profile']['varna']; ?></td>
                                    <td>Varna</td>
                                    <td><?php echo $matchHoroscope['astro_details']['female_profile']['varna']; ?></td>
                                    </tr>
                                    <tr>
                                    <td><?php echo $matchHoroscope['astro_details']['male_profile']['vashya']; ?></td>
                                    <td>Vashya</td>
                                    <td><?php echo $matchHoroscope['astro_details']['male_profile']['vashya']; ?></td>
                                    </tr>
                                    <tr>
                                    <td><?php echo $matchHoroscope['astro_details']['male_profile']['yoni']; ?></td>
                                    <td>Yoni</td>
                                    <td><?php echo $matchHoroscope['astro_details']['male_profile']['yoni']; ?></td>
                                    </tr>
                                    <tr>
                                    <td><?php echo $matchHoroscope['astro_details']['male_profile']['gan']; ?></td>
                                    <td>Gan</td>
                                    <td ><?php echo $matchHoroscope['astro_details']['male_profile']['gan']; ?></td>
                                    </tr>
                                    </tbody>
                              </table>
                           </div>
                           <div class="share">
                              <button class="btn btn-default btn-rounded btn-shadowed">Print</button>
                              <button class="btn btn-default btn-rounded btn-shadowed">Share</button>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <img src="<?php echo base_url(); ?>front-assets/images/numerology-inner.png">
                           <a href="" class="btn btn-default btn-rounded btn-shadowed call-now num-inner">Call Now</a>
                        </div>
                     </div>
                  </div>
                  <?php
                        $varna=$matchAshtakootPoints['varna']['total_points'];
                        $vashya=$matchAshtakootPoints['vashya']['total_points'];
                        $tara=$matchAshtakootPoints['tara']['total_points'];
                        $yoni=$matchAshtakootPoints['yoni']['total_points'];
                        $maitri=$matchAshtakootPoints['maitri']['total_points'];
                        $gan=$matchAshtakootPoints['gan']['total_points'];
                        $bhakut=$matchAshtakootPoints['bhakut']['total_points'];
                        $nadi=$matchAshtakootPoints['nadi']['total_points'];
                        
                        $total=$varna+$vashya+$tara+$yoni+$maitri+$gan+$bhakut+$nadi;
                        
                        
                        
                        ?>
                        
                        <?php
                        $varna=$matchAshtakootPoints['varna']['received_points'];
                        $vashya=$matchAshtakootPoints['vashya']['received_points'];
                        $tara=$matchAshtakootPoints['tara']['received_points'];
                        $yoni=$matchAshtakootPoints['yoni']['received_points'];
                        $maitri=$matchAshtakootPoints['maitri']['received_points'];
                        $gan=$matchAshtakootPoints['gan']['received_points'];
                        $bhakut=$matchAshtakootPoints['bhakut']['received_points'];
                        $nadi=$matchAshtakootPoints['nadi']['received_points'];
                        
                        $received=$varna+$vashya+$tara+$yoni+$maitri+$gan+$bhakut+$nadi;
                        
                        
                        
                        ?>
                        <?php 
                        $percentage=$received/$total*100;
                        
                        ?>
                  <div role="tabpanel" class="tab-pane fade" id="two">
                  <div class="content-wrp">
                        <div class="col-md-9">
                            

                           <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                            <div class="btn-group" role="group">
                                <button type="button" id="stars" class="btn btn-warning" href="#tab1" data-toggle="tab"><span class="" aria-hidden="true"></span>
                                    <div class="hidden-xs">Birth(Lagna) Chart</div>
                                </button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="" aria-hidden="true"></span>
                                    <div class="hidden-xs">Moon Chart</div>
                                </button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" id="favorites1" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="" aria-hidden="true"></span>
                                    <div class="hidden-xs">Navmansha Chart</div>
                                </button>
                            </div>
                        
                        </div>
                        
                        <div class="well">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1">
                            
                        <div class="col-md-6">
                            <p class="text-center"><?php echo  $this->session->userdata('matname'); ?></p>
                            <?php echo $boybirthchat['svg']; ?>
                        </div>
                            <div class="col-md-6">
                            <p class="text-center"><?php echo$this->session->userdata('matgname');  ?></p>
                            <?php echo $girlbirthchat['svg']; ?>
                        </div>
                            </div>
                            <div class="tab-pane fade in" id="tab2">
                            
                            <div class="col-md-6">
                            
                            <p class="text-center"><?php echo  $this->session->userdata('matname'); ?></p>
                            <?php echo $boymoonchat['svg']; ?>
                        </div>
                            <div class="col-md-6">
                            
                            <p class="text-center"><?php echo$this->session->userdata('matgname');  ?></p>
                            <?php echo $girlmoonchat['svg']; ?>
                        </div>
                            </div>
                    <div class="tab-pane fade in" id="tab3">
                            
                            <div class="col-md-6">
                            
                            <p class="text-center"><?php echo  $this->session->userdata('matname'); ?></p>
                            <?php echo $boynamvchat['svg']; ?>
                        </div>
                            <div class="col-md-6">
                            
                            <p class="text-center"><?php echo$this->session->userdata('matgname');  ?></p>
                            <?php echo $girlnamvchat['svg']; ?>
                        </div>
                            </div>
                        </div>
                        </div>


                           <div class="share">
                              <button class="btn btn-default btn-rounded btn-shadowed">Print</button>
                              <button class="btn btn-default btn-rounded btn-shadowed">Share</button>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <img src="<?php echo base_url(); ?>front-assets/images/numerology-inner.png">
                           <a href="" class="btn btn-default btn-rounded btn-shadowed call-now num-inner">Call Now</a>
                        </div>
                     </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="three">
                  <div class="content-wrp">
                        <div class="col-md-9">
                           <div class="width-custmize dt-table tble-custmize">



                           


                            
                                    <table class="table table-hover table-light">
                                    <thead>
                                    <tr>
                                    <th>Attribute</th>
                                    <th>Description</th>
                                    <th>Male</th>
                                    <th>Female</th>
                                    <th>Outof</th>
                                    <th>Received</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       $varna=$matchAshtakootPoints['varna']['total_points'];
                                       $vashya=$matchAshtakootPoints['vashya']['total_points'];
                                       $tara=$matchAshtakootPoints['tara']['total_points'];
                                       $yoni=$matchAshtakootPoints['yoni']['total_points'];
                                       $maitri=$matchAshtakootPoints['maitri']['total_points'];
                                       $gan=$matchAshtakootPoints['gan']['total_points'];
                                       $bhakut=$matchAshtakootPoints['bhakut']['total_points'];
                                       $nadi=$matchAshtakootPoints['nadi']['total_points'];
                                       
                                       $total=$varna+$vashya+$tara+$yoni+$maitri+$gan+$bhakut+$nadi;
                                       
                                       
                                       
                                       ?>
                                       
                                       <?php
                                       $varna=$matchAshtakootPoints['varna']['received_points'];
                                       $vashya=$matchAshtakootPoints['vashya']['received_points'];
                                       $tara=$matchAshtakootPoints['tara']['received_points'];
                                       $yoni=$matchAshtakootPoints['yoni']['received_points'];
                                       $maitri=$matchAshtakootPoints['maitri']['received_points'];
                                       $gan=$matchAshtakootPoints['gan']['received_points'];
                                       $bhakut=$matchAshtakootPoints['bhakut']['received_points'];
                                       $nadi=$matchAshtakootPoints['nadi']['received_points'];
                                       
                                       $received=$varna+$vashya+$tara+$yoni+$maitri+$gan+$bhakut+$nadi;
                                       
                                       
                                       
                                       ?>
                                       
                                    <tr>
                                    <td>Varna</td>
                                    <td><?php echo $matchAshtakootPoints['varna']['description']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['varna']['male_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['varna']['female_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['varna']['total_points']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['varna']['received_points']; ?></td>
                                    </tr>
                                    <tr>
                                    <td>Vashya</td>
                                    <td><?php echo $matchAshtakootPoints['vashya']['description']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['vashya']['male_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['vashya']['female_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['vashya']['total_points']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['vashya']['received_points']; ?></td>
                                    </tr>
                                    <tr>
                                    <td>Tara</td>
                                    <td><?php echo $matchAshtakootPoints['tara']['description']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['tara']['male_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['tara']['female_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['tara']['total_points']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['tara']['received_points']; ?></td>
                                    </tr>
                                    <tr>
                                    <td>Yoni</td>
                                    <td><?php echo $matchAshtakootPoints['yoni']['description']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['yoni']['male_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['yoni']['female_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['yoni']['total_points']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['yoni']['received_points']; ?></td>
                                    </tr>
                                    <tr>
                                    <td>Maitri</td>
                                    <td><?php echo $matchAshtakootPoints['maitri']['description']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['maitri']['male_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['maitri']['female_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['maitri']['total_points']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['maitri']['received_points']; ?></td>
                                    </tr>
                                    <tr>
                                    <td>Gan</td>
                                    <td><?php echo $matchAshtakootPoints['gan']['description']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['gan']['male_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['gan']['female_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['gan']['total_points']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['gan']['received_points']; ?></td>
                                    </tr>
                                    <tr>
                                    <td>Bhakut</td>
                                    <td><?php echo $matchAshtakootPoints['bhakut']['description']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['bhakut']['male_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['bhakut']['female_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['bhakut']['total_points']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['bhakut']['received_points']; ?></td>
                                    </tr>
                                    <tr>
                                    <td>Nadi</td>
                                    <td><?php echo $matchAshtakootPoints['nadi']['description']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['nadi']['male_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['nadi']['female_koot_attribute']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['nadi']['total_points']; ?></td>
                                    <td><?php echo $matchAshtakootPoints['nadi']['received_points']; ?></td>
                                    </tr>
                                    <tr class="blue-gradiant">
                                    <td class="text-bold-600">Total</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><?php  echo $total; ?></td>
                                    <td><?php  echo $received; ?></td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <table class="table table-hover table-light visible-xs">
                                    <thead>
                                    <tr>
                                    <th>Attribute</th>
                                    <th>Male</th>
                                    <th>Female</th>
                                    <th>Outof</th>
                                    <th>Received</th>
                                    <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                    <td>Varna</td>
                                    <td>Vipra</td>
                                    <td>Shoodra</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Natural Refinement / Work</td>
                                    </tr>
                                    <tr>
                                    <td>Vashya</td>
                                    <td>Jalchar</td>
                                    <td>Maanav</td>
                                    <td>2</td>
                                    <td>0.5</td>
                                    <td>Innate Giving / Attraction towards each other</td>
                                    </tr>
                                    <tr>
                                    <td>Tara</td>
                                    <td>Uttra Bhadrapad</td>
                                    <td>Ardra</td>
                                    <td>3</td>
                                    <td>1.5</td>
                                    <td>Comfort - Prosperity - Health</td>
                                    </tr>
                                    <tr>
                                    <td>Yoni</td>
                                    <td>Gau</td>
                                    <td>Swaan</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>Intimate Physical</td>
                                    </tr>
                                    <tr>
                                    <td>Maitri</td>
                                    <td>Jupiter</td>
                                    <td>Mercury</td>
                                    <td>5</td>
                                    <td>0.5</td>
                                    <td>Friendship</td>
                                    </tr>
                                    <tr>
                                    <td>Gan</td>
                                    <td>Manushya</td>
                                    <td>Manushya</td>
                                    <td>6</td>
                                    <td>6</td>
                                    <td>Temperament</td>
                                    </tr>
                                    <tr>
                                    <td>Bhakut</td>
                                    <td>Pisces</td>
                                    <td>Gemini</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>Constructive Ability / Constructivism / Society and Couple</td>
                                    </tr>
                                    <tr>
                                    <td>Nadi</td>
                                    <td>Madhya</td>
                                    <td>Adi</td>
                                    <td>8</td>
                                    <td>8</td>
                                    <td>Progeny / Excess</td>
                                    </tr>
                                    <tr class="blue-gradiant">
                                    <td class="text-bold-600">Total</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>36</td>
                                    <td>26.5</td>
                                    <td>-</td>
                                    </tr>
                                    </tbody>
                                    </table>
                            </div>
                            
                           <div class="share">
                              <button class="btn btn-default btn-rounded btn-shadowed">Print</button>
                              <button class="btn btn-default btn-rounded btn-shadowed">Share</button>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <img src="<?php echo base_url(); ?>front-assets/images/numerology-inner.png">
                           <a href="" class="btn btn-default btn-rounded btn-shadowed call-now num-inner">Call Now</a>
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
</section>
<!-- form section end=======-->