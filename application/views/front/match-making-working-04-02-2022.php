
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
<!--BKnowcrumb start-->

<div class="ast_pagetitle">

<div class="ast_img_overlay"></div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="page_title">

					<h1>Kundali Match Making</h1>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">

				<ul class="breadcrumb">

					<li><a href="<?php echo base_url(); ?>">home</a></li>

					<li>//</li>

					<li><a href="#">Match Making</a></li>

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

				<div class="ast_heading">

					<h1><?php echo  $this->session->userdata('matname'); ?> with <?php echo$this->session->userdata('matgname');   ?></h1>
				<?php echo $matchBirthDetails['male_astro_details']['day']; ?>/<?php echo $matchBirthDetails['male_astro_details']['month']; ?>/<?php echo $matchBirthDetails['male_astro_details']['year']; ?> &nbsp; <?php echo $this->session->userdata('matbbirth');?>
				 
				<br>
				
<?php echo $matchBirthDetails['female_astro_details']['day']; ?>/<?php echo $matchBirthDetails['female_astro_details']['month']; ?>/<?php echo $matchBirthDetails['female_astro_details']['year']; ?> &nbsp; <?php echo $this->session->userdata('matgbirth');?>

				</div>

			</div>
			
			
			<div class="col-lg-12 col-md-12 col-sm-10 col-xs-12 col-lg-offset-0 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">

				<div class="ast_heading">
				   <!-- <p class="text-justify">As the name suggests, Today Panchang is a part of the Hindu Calender i.e, Panchang, which is used in order to find out about the auspicious timings for Muhurat in a day. The daily Panchang is utilized to know the right time for maximum outcome when starting a new or propitious task. <br> </p>-->
             </div>

				</div>
				
				

			</div>

	 <div class="default-padding">
    <div class="container">

  <div class="col-md-4">
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
<a href="#" class="tab-title text-block">
<span class="title">Basic Details</span>
</a>
 </li>
<li class="">
<a href="#" class="tab-title text-block">
<span class="title">Horoscope Chart</span>
</a>
</li>
<li>
<a href="#tag4">
<span class="title" style="display:block;">Ashtakoot</span>
</a>
</li>


</ul>
      </div>
    </div>
  </div>
  

</div>
</div>
  </div>
  <div class="col-md-8">
    
    <div class="col-xs-12">
<h2>Birth Details</h2>
<hr>
</div>
<div class="col-md-7">
<div class="table-scrollable table-scrollable-borderless table-bordered">
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
<div class="col-md-5"><div class="" style="box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.04);">
<div class="clearfix overflow-hidden panchang" style="display: block;clear:both;background: linear-gradient(to right, #fc8727, #dea16e);">
<div class="col-xs-12  imagebg">
<h4 class="type--uppercase unmarg" style="padding: 19px 0;COLOR:#fff">Match Summary </h4>
</div>
</div>
<div class="">
<div class="col-xs-12 ast-pan-data">
<span class="type--bold">Male Nakshatra</span>
<p class=" unmarg--bottom"><?php echo $matchHoroscope['astro_details']['male_profile']['naksahtra']; ?></p>
</div>
</div>
<hr class="unmarg" style="display:block;clear:both;margin: 7px 0;">
<div class="">
<div class="col-xs-12 ast-pan-data">
<span class="type--bold">Female Nakshatra</span>
<p class=" unmarg--bottom"><?php echo $matchHoroscope['astro_details']['female_profile']['naksahtra']; ?></p>
</div>
</div>
<hr class="unmarg" style="display:block;clear:both;margin: 7px 0;">
<div class="col-xs-12 ast-pan-data">
<span class="type--bold">Match Making Percentage</span>
<div class="progress-horizontal progress-horizontal--lg m-t-5 m-b-5">
<div class="progress">
	<div class="bar" style="width:<?php echo $getMatchMakingPercentage['match_percentage'];  ?>%">
		<p class="percent"><?php echo $getMatchMakingPercentage['match_percentage'];  ?>%</p>
	</div>
</div>
</div>
</div>
<hr class="unmarg" style="display:block;clear:both;margin: 7px 0;">
<div class="col-xs-12 ast-pan-data m-t-5 m-b-10">
<span class="type--bold">Matching Point</span>
<div class="matchigPointCircle">
<?php echo $received;  ?>/<?php echo $total;  ?> </div>
</div>
<a href="#tag4">
<input type="button" class="btnRegister" value="get data" style="width:100%">
</a>
</div></div>
   <div class="col-xs-12">
<h2>Birth & Divisional Charts</h2>
<hr>
</div>
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
    <div id="tag4">
     <div class="col-xs-12">
<h2>Ashtakoot Points</h2>
<hr>
</div>
<div class="table-scrollable table-scrollable-borderless">
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
</div>
 <div class="col-xs-12">
<h2>Matching Report</h2>
<hr>
</div>
<div class="matching">
<div class="col-md-12 col-xs-12 text-center m-b-25  m-t-15">
<div class="col-md-2 col-md-offset-1 col-xs-6">
<div class="match-circleshape m-b-10" style="background-color: #f77403">
<div class="match-circon1"><?php echo $getMatchMakingReport['ashtakoota']['received_points'];   ?>/<?php echo $total;  ?></div>
</div>
<h4>Ashtakoot</h4>
</div>
<div class="col-md-2 col-xs-6">
<div class="match-circleshape m-b-10" style="background-color: #f77403">
<div class="match-circon1"><?php echo $getMatchMakingReport['manglik']['male_percentage'];   ?>%</div>
</div>
<h4>Male&nbsp;Manglik</h4>
</div>
<div class="col-md-2 col-xs-6">
 <div class="match-circleshape m-b-10" style="background-color: #f77403">
<div class="match-circon1"><?php echo $getMatchMakingReport['manglik']['female_percentage'];   ?>%</div>
</div>
<h4>Female&nbsp;Manglik</h4>
</div>
<?php
if( $getMatchMakingReport['rajju_dosha']['status']==''){
?>
<div class="col-md-2 col-xs-6">
<div class="match-circleshape m-b-10" style="background-color: #f77403">
<div class="match-circon1"><?php echo "NO";   ?></div>
</div>
<h4>Raju&nbsp;Dosha</h4>
</div>
<?php } else {?>
<div class="col-md-2 col-xs-6">
<div class="match-circleshape m-b-10" style="background-color: #f77403">
<div class="match-circon1"><?php echo "YES";   ?></div>
</div>
<h4>Raju&nbsp;Dosha</h4>
</div>
<?php  } ?>
<?php
if( $getMatchMakingReport['vedha_dosha']['status']==''){
?>
<div class="col-md-2 col-xs-6">
<div class="match-circleshape m-b-10" style="background-color: #f77403">
<div class="match-circon1"><?php echo "NO";   ?></div>
</div>
<h4>Vedha&nbsp;Dosha</h4>
</div>
<?php } else {?>
<div class="col-md-2 col-xs-6">
<div class="match-circleshape m-b-10" style="background-color: #f77403">
<div class="match-circon1"><?php echo "YES";   ?></div>
</div>
<h4>Vedha&nbsp;Dosha</h4>
</div>
<?php }  ?>
</div>
</div>
<div class="boxed m-b-5">
<div class="col-xs-12">
<h2 class="m-b-10">Match Conclusion</h2>
<div class="content">
<p><?php echo $getMatchMakingReport['conclusion']['match_report']; ;   ?></p>
</div>
</div>
</div>
<!--<div class="boxed1 m-b-5" style="">
<div class="col-xs-12">
<h2 class="m-b-10 text-center" style="color: #F57C00;">Get 25 Pages Detailed Kundli Matching Report</h2>
<div class="content">
<p class="text-center">Kundli Horoscope Matching with ashtakoot or dashkoot milan. Detailed interpretation of each of the ashtakoot milan points. Manglik matching with Vedha and Rajju Dosha Analysis.
<a href="" target="_blank">See Sample PDF in English</a> &nbsp;&nbsp;
<a href="" target="_blank">सैंपल PDF हिंदी में देखे</a></p>
</div>
<div class="text-center">
<h4 style="font-size: 3em; margin-bottom: 15px;">Price :<span style="color: #f7a411 !important;"> ₹199</span>
<small><strike>₹ 499</strike></small>
</h4>
<h4 class="total-save">
You save ₹300 (60%)</h4>
<p class="m-b-10"><span style="vertical-align: middle;color: #f7a411;">14387</span>
People bought this report </p>
<a class="btn btn--lg type--uppercase btn-shadow btn--primary m-b-10 tn1"  href="">
Download Your Matching Report Now
</a>
<div class="adv-time"><b><span>Offer ends in:</span>
<span class="getting-started-countdown"><span>06</span> hr <span>43</span> min <span>01</span> sec</span></b>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-xs-12 mm-b-20">
<a style="cursor:pointer;" class="block hover-shadow border-none" target="_blank">
 <div class="boxed boxed--sm text-center  blue-gradiant bg-prank unmarg">
<div class="imagebg">
<h3 class="unmarg" style="color:#fff"> See rrrr's Detailed Kundli </h3>
</div>
</div>
</a>
</div>
<div class="col-md-6 col-xs-12 mm-b-20">
<a style="cursor:pointer;" class="block hover-shadow border-none" target="_blank">
<div class="boxed boxed--sm text-center  blue-gradiant bg-prank unmarg">
<div class="imagebg">
<h3 class="unmarg" style="color:#fff"> See trrdr's Detailed Kundli </h3>
</div>
</div>
</a>
</div>
  </div>-->
</div>
</div>


		
		
		
	
		




	
		

		</div>

	</div>

</div>
<!--BKnowcrumb end-->



 <style type="text/css">
 .imagebg h3{font-size:21px;}
 .adv-time span{color:#f9762a;}
 .total-save{font-size: 1.4em;margin-top: -15px;color: #f9762a;font-weight: bold;}
 .tn1{background: linear-gradient(to right, #f78d33, #fc4a1a);color:#fff}
 .boxed1 .content p{color: #37474F;font-weight: bold;line-height: 33px;}
 .boxed1{    padding: 1.85714286em;background-color: #FFF8E1;margin-top: 2em;    display: inline-block;
    width: 100%;}
 .boxed {
    border-left: 5px solid #f77403;
    position: relative;
    display: inline-block;
    width: 100%;
    background: #f5f5f5;
    color: #000;
    padding: 20px;
    margin-top: 20px;border-radius: 15px;
}
.boxed h2{color:#f77403;font-size: 25px;} 
.boxed .content p{line-height: 30px;}
 .matching h4{font-size:14px;}
 .match-circleshape {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    line-height: 2.8;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 18%;
}
.match-circon1 {
    font-size: 18px!important;
    padding-top: 37%;
    color: #fff;
    line-height: 1.4!important;
}
 .default-padding{padding: 40px}
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
  background-image: linear-gradient(to top, #FF9800 0%, #FF9800 100%);
    padding: 8px 3px;
    margin-bottom: 0px;
    color: #fff;
    font-size: 18px;
}
.custom-card:nth-child(2) .card-img-box p{linear-gradient(120deg, #f6d365 0%, #fda085 100%)}
.card-container .custom-card:hover .card-img-box p{display: none;}
.card-content a{
    color: #fff;
background-image: linear-gradient(to top, #FF9800 0%, #FF9800 100%);
    padding: 10px 16px;
}
.card-content a:hover {
    background-image: none;
    background-color: #fff;
    color: #000;
}
hr {
    margin-top: 20px;
    margin-bottom: 50px;
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
.table-scrollable.table-scrollable-borderless th {
    background: #fc8727;
    color: #fff;
    text-transform: uppercase;
    font-size: 15px;
}
.table-scrollable.table-scrollable-borderless td {
    font-size: 16px;
}
.type--bold {
    font-weight: 700;
}
.progress {
  margin:20px auto;
  padding:0;
  width:90%;
  height:30px;
  overflow:hidden;
  background:#e5e5e5;
  border-radius:6px;
}

.bar {
	position:relative;
  float:left;
  min-width:1%;
  height:100%;
  background:#f77403;
}

.percent {
	position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  margin:0;
  font-family:tahoma,arial,helvetica;
  font-size:12px;
  color:white;
}
.matchigPointCircle {
     width: 100px;
    height: 100px;
    border-radius: 18%;
    font-size: 24px;
    margin: 13px auto;
    color: #fff;
    line-height: 100px;
    text-align: center;
    background: #f77403;
}
.hidden-xs {
    font-size: 22px;
    font-weight: bold;
    padding-top: 10px;
    padding-bottom: 10px;
}
.blue-gradiant {
    background: linear-gradient(to top, #FF9800 0%, #FF9800 100%);
}
.blue-gradiant td{color:#fff;}
.well{display:inline-block;}
</style>

<script>
$(document).ready(function(){
$(window).scroll(function () {   
   
 if($(window).scrollTop() > 500) {
    $('#sidebar').css('position','fixed');
    $('#sidebar').css('top','150px'); 
      $('#sidebar').css('width','350px'); 
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
<script type="text/javascript">
    jQuery('.getting-started-countdown').countdown('2025/8/28').on('update.countdown', function(event) {
        var $this = $(this).html(event.strftime(''
            + '<span>%H</span> hr '
            + '<span>%M</span> min '
            + '<span>%S</span> sec'));
    });
</script>




