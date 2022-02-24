<script>
    var host = window.location.origin;
var pathArray = window.location.pathname.split('/');
var current_url = host + '/horoscopes/'  + pathArray[2] + '/weekly/' + pathArray[4] + '/';
var month_url = host + '/horoscopes/'  + pathArray[2] + '/monthly/' + pathArray[4] + '/';
var year_url = host + '/horoscopes/'  + pathArray[2] + '/yearly/' + pathArray[4] + '/';
$(document).ready(function(){
  $("#weeksegment").click(function(){
   window.location.href = current_url;
  });
  $("#monthlysegment").click(function(){
   window.location.href = month_url;
  });
    $("#yearlysegment").click(function(){
   window.location.href = year_url;
  });
   $("#nextyearlysegment").click(function(){
   window.location.href = year_url;
  });
});
</script>

<!--BKnowcrumb start-->

<div class="ast_pagetitle">

<div class="ast_img_overlay"></div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="page_title">

					<h2>Free Horoscope</h2>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">

				<ul class="breadcrumb">

					<li><a href="<?php echo base_url(); ?>">home</a></li>

					<li>//</li>

					<li><a href="#">Free Horoscope</a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

<!--BKnowcrumb end-->

<!--BKnowcrumb start-->
<div class="ast_whywe_wrapper ast_toppadder70 ">

	<div class="container">
		<div class="row">
		    	<div class="ast_heading">

					<h1><?php echo ucfirst(@$horodata['sun_sign']).' '.ucfirst($this->uri->segment(3)); ?> Horoscope <small> ( <?php echo date("D, M d, Y", strtotime(@$horodata['prediction_date'])); ?> )</small></h1>

					

				</div>
		    
		    <!--	<h2>ARIES DAILY HOROSCOPE <small style="font-size:14px;">( Sat, Dec 14, 2019 )</small></h2>-->

			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">

				

			</div>

			<div class="ast_whywe_info">
            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">

					<div class="tabbable-panel">
				<div class="tabbable-line">
				<!--	<ul class="nav nav-tabs horoscopcent">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							Sunsign </a>
						</li>
						<li style="display:none">
							<a href="#tab_default_2" data-toggle="tab">
							Moonsign </a>
						</li>
						
					</ul>-->
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
							
						<div class="row">
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/aries/"><img src="<?= base_url()?>front-assets/images/header/Aries.png" class="img-responsive"><span class="rajshree">ARIES</span><br />21/3 - 19/4</a></div>
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/taurus/"><img src="<?= base_url()?>front-assets/images/header/Taurus.png" class="img-responsive"><span class="rajshree">TAURUS</span><br />20/4 - 20/5</a></div>
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/gemini/"><img src="<?= base_url()?>front-assets/images/header/Gemini.png" class="img-responsive"><span class="rajshree">GEMINI</span><br />21/5 - 20/6</a></div>
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/cancer/"><img src="<?= base_url()?>front-assets/images/header/Cancer.png" class="img-responsive"><span class="rajshree">CANCER</span><br />21/6 - 22/7</a></div>
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/leo/"><img src="<?= base_url()?>front-assets/images/header/Leo.png" class="img-responsive"><span class="rajshree">LEO</span><br />23/7 - 22/8</a></div>
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/virgo/"><img src="<?= base_url()?>front-assets/images/header/Virgo.png" class="img-responsive"><span class="rajshree">VIRGO</span><br />23/8 - 22/9</a></div>
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/libra/"><img src="<?= base_url()?>front-assets/images/header/Libra.png" class="img-responsive"><span class="rajshree">LIBRA</span><br />23/9 - 22/10</a></div>
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/scorpio/"><img src="<?= base_url()?>front-assets/images/header/Scorpio.png" class="img-responsive"><span class="rajshree">SCORPIO</span><br />23/10 - 21/11</a></div>
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/sagittarius/"><img src="<?= base_url()?>front-assets/images/header/Sagittarius.png" class="img-responsive"><span class="rajshree">SAGITTARIUS</span><br />22/11 - 21/12</a></div>
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/capricorn/"><img src="<?= base_url()?>front-assets/images/header/Capricorn.png" class="img-responsive"><span class="rajshree">CAPRICORN</span><br />22/12 - 19/1</a></div>
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/aquarius/"><img src="<?= base_url()?>front-assets/images/header/Aquarius.png" class="img-responsive"><span class="rajshree">AQUARIUS</span><br />20/1 - 18/2</a></div>
  <div class="col-xs-4 col-md-1"><a href="<?= base_url()?>horoscopes/sunsign/daily/pisces/"><img src="<?= base_url()?>front-assets/images/header/Pisces.png" class="img-responsive"><span class="rajshree">PISCES</span><br />19/2 - 20/3</a></div>
</div>			
						</div>
						<div class="tab-pane" id="tab_default_2">
							
						<div class="row">
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/01m.jpg" class="img-responsive"><span class="rajshree">Mesha</span></a></div>
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/02m.jpg" class="img-responsive"><span class="rajshree">Vrishabha</span></a></div>
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/03m.jpg" class="img-responsive"><span class="rajshree">Mithuna</span></a></div>
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/04m.jpg" class="img-responsive"><span class="rajshree">Karkata</span></a></div>
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/05m.jpg" class="img-responsive"><span class="rajshree">Simha</span></a></div>
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/06m.jpg" class="img-responsive"><span class="rajshree">Kanya</span></a></div>
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/07m.jpg" class="img-responsive"><span class="rajshree">Tula</span></a></div>
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/08m.jpg" class="img-responsive"><span class="rajshree">Vrischika</span></a></div>
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/09m.jpg" class="img-responsive"><span class="rajshree">Dhanu</span></a></div>
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/10m.jpg" class="img-responsive"><span class="rajshree">Makara</span></a></div>
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/11m.jpg" class="img-responsive"><span class="rajshree">Kumbha</span></a></div>
  <div class="col-xs-4 col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/12m.jpg" class="img-responsive"><span class="rajshree">Meena</span></a></div>
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


<!--BKnowcrumb start-->
<div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70">

	<div class="container">

	<!-- start-->
	
	 <div class="row">
		<div class="col-md-12">
		

			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs on_win">
						<li >
							<a href="#tab_default_01" data-toggle="tab">
							Yesterday </a>
						</li>
						<li class="active">
							<a href="#tab_default_02" data-toggle="tab">
							Today </a>
						</li>
				    	<li>
							<a href="#tab_default_03" data-toggle="tab">
							Tomorrow </a>
						</li>
						<!--	<li>-->
						<!--	<a href="#tab_default_04" id="weeksegment" data-toggle="tab">-->
						<!--	This Week </a>-->
						<!--</li>-->
							<li>
							<a href="#tab_default_05" id="monthlysegment" data-toggle="tab">
							This Month </a>
						</li>
							<li>
							<a href="#tab_default_07" id="nextyearlysegment" data-toggle="tab">
							 <?php echo date("Y")?> </a>
						</li> 
						
					</ul>
					
					
						<ul class="nav nav-tabs on_mob">
						<li>
							<a href="#tab_default_01" data-toggle="tab">
							Yesterday </a>
						</li>
						<li class="active">
							<a href="#tab_default_02" data-toggle="tab">
							Today </a>
						</li>
				
							<li>
						 <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">More
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            
				    	<li>
							<a href="#tab_default_03" data-toggle="tab">
							Tomorrow </a>
						</li>
						<!--	<li>-->
						<!--	<a href="#tab_default_04" data-toggle="tab">-->
						<!--	This Week </a>-->
						<!--</li>-->
							<li>
							<a href="#tab_default_05" id="monthlysegment" data-toggle="tab">
							This Month </a>
						</li>
							<li>
							<a href="#tab_default_07" id="nextyearlysegment" data-toggle="tab">
							 2020 </a>
						</li> 
                            </ul>
                          </div>
						</li>
					</ul>
					
					<div class="tab-content">
						<div class="tab-pane " id="tab_default_01">
						<div class"row">
						    	<div class"col-md-4">
						   <div class="col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/<?php echo ucfirst(@$horodata['sun_sign']);?>.png" class="img-responsive"><span class="rajshree"><?php echo ucfirst(@$horodata['sun_sign']);?></span></a></div>
						</div>
							<div class"col-md-8 " style="text-align: justify; display: table; font-size:15px; line-height:1.8;">
						    <p class"sinl"><?php echo '<strong>Personal Life</strong>:  '. @$yesterdayhorodata['prediction']['personal_life'].'<br/><strong>Profession</strong>:  '. @$yesterdayhorodata['prediction']['profession'].'<br/><strong>Health</strong>:  '.@$yesterdayhorodata['prediction']['health'].'<br/><strong>Travel</strong>:  '.@$yesterdayhorodata['prediction']['travel'].'<br/><strong>Luck</strong>:  '.@$yesterdayhorodata['prediction']['luck'].'<br/><strong>Emotions</strong>:  '.@$yesterdayhorodata['prediction']['emotions'];?></p>
						    <a href="<?= base_url()?>talk-to-astrologers">Click here for a more personalised reading</a>
						    
						    
						</div>
						    
						</div>
						
						</div>
						<div class="tab-pane active" id="tab_default_02">
							<div class"row">
						    	<div class"col-md-4">
						   <div class="col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/<?php echo ucfirst(@$horodata['sun_sign']);?>.png" class="img-responsive"><span class="rajshree"><?php echo ucfirst(@$horodata['sun_sign']);?></span></a></div>
						</div>
							<div class"col-md-8 " style="text-align: justify; display: table; font-size:15px; line-height:1.8;">
						    <p class"sinl"><?php echo '<strong>Personal Life</strong>:  '. @$horodata['prediction']['personal_life'].'<br/><strong>Profession</strong>:  '. @$horodata['prediction']['profession'].'<br/><strong>Health</strong>:  '.@$horodata['prediction']['health'].'<br/><strong>Travel</strong>:  '.@$horodata['prediction']['travel'].'<br/><strong>Luck</strong>:  '.@$horodata['prediction']['luck'].'<br/><strong>Emotions</strong>:  '.@$horodata['prediction']['emotions'];?></p>
						    <a href="<?= base_url()?>talk-to-astrologers">Click here for a more personalised reading</a>
						    
						    
						</div>
						    
						</div>
						</div>
						<div class="tab-pane" id="tab_default_03">
							<div class"row">
						    	<div class"col-md-4">
						    <div class="col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/<?php echo ucfirst(@$horodata['sun_sign']);?>.png" class="img-responsive"><span class="rajshree"><?php echo ucfirst(@$horodata['sun_sign']);?></span></a></div>
						</div>
							<div class"col-md-8 " style="text-align: justify; display: table; font-size:15px; line-height:1.8;">
						    <p class"sinl"><?php echo '<strong>Personal Life</strong>:  '. @$tomorrowhorodata['prediction']['personal_life'].'<br/><strong>Profession</strong>:  '. @$tomorrowhorodata['prediction']['profession'].'<br/><strong>Health</strong>:  '.@$tomorrowhorodata['prediction']['health'].'<br/><strong>Travel</strong>:  '.@$tomorrowhorodata['prediction']['travel'].'<br/><strong>Luck</strong>:  '.@$tomorrowhorodata['prediction']['luck'].'<br/><strong>Emotions</strong>:  '.@$tomorrowhorodata['prediction']['emotions'];?></p>
						    <a href="<?= base_url()?>talk-to-astrologers">Click here for a more personalised reading</a>
						    
						    
						</div>
						    
						</div>
						</div>
							<div class="tab-pane" id="tab_default_04">
							<div class"row">
						    	<div class"col-md-4">
						    <div class="col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/<?php echo ucfirst(@$horodata['sun_sign']);?>.png" class="img-responsive"><span class="rajshree"><?php echo ucfirst(@$horodata['sun_sign']);?></span></a></div>
						</div>
							<div class"col-md-8 " style="text-align: justify; display: table; font-size:15px; line-height:1.8;">
						    <p class"sinl"></p>
						    
						    
						</div>
						    
						</div>
						</div>
							<div class="tab-pane" id="tab_default_05">
							<div class"row">
						    	<div class"col-md-4">
						   <div class="col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/<?php echo ucfirst(@$horodata['sun_sign']);?>.png" class="img-responsive"><span class="rajshree"><?php echo ucfirst(@$horodata['sun_sign']);?></span></a></div>
						</div>
							<div class"col-md-8 " style="text-align: justify; display: table; font-size:15px; line-height:1.8;">
						    <p class"sinl"></p>
						    
						    
						</div>
						    
						</div>
						</div>
						
							<div class="tab-pane" id="tab_default_07">
							<div class"row">
						    	<div class"col-md-4">
						   <div class="col-md-1"><a href="#"><img src="<?= base_url()?>front-assets/images/header/<?php echo ucfirst(@$horodata['sun_sign']);?>.png" class="img-responsive"><span class="rajshree"><?php echo ucfirst(@$horodata['sun_sign']);?></span></a></div>
						</div>
							<div class"col-md-8" style="text-align: justify; display: table; font-size:15px; line-height:1.8;">
						    <p class"sinl"></p>
						    
						    
						</div>
						    
						</div>
						</div>
					</div>
				</div>
			</div>

		
		</div>
	</div>
	
	<!--end-->

		</div>

	</div>
	
	
	
	<!--start--->
	
<!--	<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">-->

<!--	<div class="container">-->

<!--		<div class="row">-->

<!--			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">-->

<!--				<div class="ast_heading">-->

<!--					<h1>Daily planetary movements</h1>-->

					

<!--				</div>-->

<!--			</div>-->
			
			
<!--			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">-->

<!--			<div class="list-group"> <a href="<?= base_url()?>horoscopes/<?php echo $this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/love/';?>" class="list-group-item "> -->
<!--			<h4 class="list-group-item-heading"><?php echo ucfirst(@$horodata['sun_sign']).' '.@$horodata[0]->horoscope_type;?> Love Horoscope</h4> -->
<!--			<p class="list-group-item-text"><?php echo substr(strip_tags(@$horodata[0]->love_horoscope),0,100);?></p> <button type="button" class="btn btn-link pndt">Learn more...</button> </a> -->
<!--			<a href="<?= base_url()?>horoscopes/<?php echo $this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/career/';?>" class="list-group-item"> -->
<!--			<h4 class="list-group-item-heading"><?php echo ucfirst(@$horodata['sun_sign']).' '.@$horodata[0]->horoscope_type;?> Career Horoscope</h4> -->
<!--			<p class="list-group-item-text"><?php echo substr(strip_tags(@$horodata[0]->career_horoscope),0,100);?></p> <button type="button" class="btn btn-link pndt">Learn more...</button> </a> -->
		
<!--			<a href="<?= base_url()?>horoscopes/<?php echo $this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/finance/';?>" class="list-group-item"> -->
<!--			<h4 class="list-group-item-heading"><?php echo ucfirst(@$horodata['sun_sign']).' '.@$horodata[0]->horoscope_type;?> Finance Horoscope</h4> -->
<!--			<p class="list-group-item-text"><?php echo substr(strip_tags(@$horodata[0]->finance_horoscope),0,100);?></p> <button type="button" class="btn btn-link pndt">Learn more...</button> </a> -->
			
<!--				<a href="<?= base_url()?>horoscopes/<?php echo $this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/health/';?>" class="list-group-item"> -->
<!--			<h4 class="list-group-item-heading"><?php echo ucfirst(@$horodata['sun_sign']).' '.@$horodata[0]->horoscope_type;?> Health Horoscope</h4> -->
<!--			<p class="list-group-item-text"><?php echo substr(strip_tags(@$horodata[0]->health_horoscope),0,100);?></p>  <button type="button" class="btn btn-link pndt">Learn more...</button>  </a> -->
			
<!--			</div>-->

<!--			</div>-->

<!--				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">-->

<!--			<div class="list-group"> <a href="<?= base_url()?>horoscopes/<?php echo $this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/personality/';?>" class="list-group-item "> -->
<!--			<h4 class="list-group-item-heading"><?php echo ucfirst(@$horodata['sun_sign']);?> Personality</h4> -->
<!--			<p class="list-group-item-text"><?php echo substr(strip_tags(@$horodata[0]->personality_desc),0,100);?></p> <button type="button" class="btn btn-link pndt">Learn more...</button> </a> -->
			
<!--			<a href="<?= base_url()?>horoscopes/<?php echo $this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/lover/';?>" class="list-group-item"> -->
<!--			<h4 class="list-group-item-heading"><?php echo ucfirst(@$horodata['sun_sign']);?> Lover</h4> -->
<!--			<p class="list-group-item-text"><?php echo substr(strip_tags(@$horodata[0]->lover_desc),0,100);?></p> <button type="button" class="btn btn-link pndt">Learn more...</button>  </a> -->
		
<!--			<a href="<?= base_url()?>horoscopes/<?php echo $this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/professional/';?>" class="list-group-item"> -->
<!--			<h4 class="list-group-item-heading"><?php echo ucfirst(@$horodata['sun_sign']);?> Professional</h4> -->
<!--			<p class="list-group-item-text"><?php echo substr(strip_tags(@$horodata[0]->professional_desc),0,100);?></p> <button type="button" class="btn btn-link pndt">Learn more...</button>  </a> -->
			
<!--				<a href="<?= base_url()?>horoscopes/<?php echo $this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/teen/';?>" class="list-group-item"> -->
<!--			<h4 class="list-group-item-heading"><?php echo ucfirst(@$horodata['sun_sign']);?> Teen</h4> -->
<!--			<p class="list-group-item-text"><?php echo substr(strip_tags(@$horodata[0]->teen_desc),0,100);?></p> <button type="button" class="btn btn-link pndt">Learn more...</button>  </a> -->
			
<!--			</div>-->

<!--			</div>-->

			

<!--		</div>-->

<!--	</div>-->

<!--</div>-->
<!--end-->
<!--start-->



<!--end-->
</div>
<!--BKnowcrumb end-->
<style>
/***
Bootstrap Line Tabs by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

/* Tabs panel */
.tabbable-panel {
  border:1px solid #eee;
  padding: 10px;
}

/* Default mode */
.tabbable-line > .nav-tabs {
  border: none;
  margin: 0px;
}
.tabbable-line > .nav-tabs > li {
  margin-right: 2px;
}
.tabbable-line > .nav-tabs > li > a {
  border: 0;
  margin-right: 0;
  color: #737373;
}
.tabbable-line > .nav-tabs > li > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
  border-bottom: 4px solid #fbcdcf;
}
.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
  border: 0;
  background: none !important;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
  margin-top: 0px;
}
.tabbable-line > .nav-tabs > li.active {
  border-bottom: 4px solid #f77403;
  position: relative;
}
.tabbable-line > .nav-tabs > li.active > a {
  border: 0;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.active > a > i {
  color: #404040;
}
.tabbable-line > .tab-content {
  margin-top: -3px;
  background-color: #fff;
  border: 0;
  border-top: 1px solid #eee;
  padding: 15px 15px;
  font-size: 10px;
  text-align: center;
}
.portlet .tabbable-line > .tab-content {
  padding-bottom: 0;
}

/* Below tabs mode */

.tabbable-line.tabs-below > .nav-tabs > li {
  border-top: 4px solid transparent;
}
.tabbable-line.tabs-below > .nav-tabs > li > a {
  margin-top: 0;
}
.tabbable-line.tabs-below > .nav-tabs > li:hover {
  border-bottom: 0;
  border-top: 4px solid #fbcdcf;
}
.tabbable-line.tabs-below > .nav-tabs > li.active {
  margin-bottom: -2px;
  border-bottom: 0;
  border-top: 4px solid #f77403;
}
.tabbable-line.tabs-below > .tab-content {
  margin-top: -10px;
  border-top: 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 15px;
}

.ast_whywe_info.raj_main {
    width: 93%;
}

.container.rash_width {
    width: 100%;
}

.ast_faq_section .panel-default>.panel-heading a[aria-expanded="true"], .panel-group .panel:first-child .panel-heading a {
    background-color: transparent;
    color: #000;
	
}

h3.ast_blog_info_heading.minheight {
    min-height: 50px !important;}
	
a.accordion-toggle {
    font-size: 12px;
}
.glyphicon {
 
    display: none;
}


.panel-default>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #ddd;
    font-size: 14px;
    text-align: justify;
}
.panel-heading{}

.tabbable-line > .nav-tabs {
    border: none;
    margin: 0px;
   
    font-size:20px;
}



.ast_faq_section .panel-default>.panel-heading a[aria-expanded="true"], .panel-group .panel:first-child .panel-heading a {
    background-color: transparent;
    color: #000;
    font-size: 16px;
}

a.accordion-toggle {
    font-size: 16px;
    color: #000;
}

.panel-default>.panel-heading {
    color: #333;
    background-color: #fee5cf;
    border-color: #ddd;
    
}
.on_mob{ display:none;}

.sinl { text-align: justify!important;
    font-size: 15px!important!important!important;
    line-height: 1.6!important!important;
    display: flex!important;
   
}


a.list-group-item:focus, a.list-group-item:hover, button.list-group-item:focus, button.list-group-item:hover {
   
    background-color: #fde7d3;
}
.horoscopcent{ position:relative;
  left: 430px!important;
}

.ast_pagetitle{background-repeat:repeat;}

.pndt{ padding-left:0px; color:#f58624;}

@media(max-width:600px){
   .on_win{ display:none;}
   .on_mob{ display:block;}
   .horoscopcent{ left: 0px!important;}
    
}



</style>