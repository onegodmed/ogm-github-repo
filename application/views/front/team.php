<?
$cat_name = str_replace('-', ' ', $this->uri->segment(3));
$where_cat = array('super_category' => $cat_name);
$cat = $this->admin->get_details('super_categories', $where_cat);

$id = $cat[0]->id;
?>
<style>
    .ast_team_box{
        margin-bottom: 80px;
    }
</style>

<div class="ast_pagetitle">

<div class="ast_img_overlay"></div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="page_title">

					<h2>our Specialist</h2>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">

				<ul class="breadcrumb">

					<li><a href="<?= base_url()?>">home</a></li>

					<li>//</li>

					<li><a href="#">our Specialist</a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

<div class="clearfix"></div>

<style>
/*    .location {
    padding: 50px 0;
    background-image: linear-gradient(#ff8820, #ff8820c7, #f79a0394);
    background-color: #fff;
}*/
.ast_team_box {
    float: left;
    width: 100%;
    background-color: #f4f4f4;
    border: 10px solid #f4f4f4;
    text-align: center;
    padding: 20px 8px;
    margin-bottom: 30px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    border-radius: 5px;
    /* margin-top: 60px; */
    height: 480px;
	margin-bottom: 100px;
}
select {
    padding: 12px;
    display: block;
    width: 100%;
    border: 0;
    box-shadow: 0 0 10px #fb8726;
    font-size: 18px;
    font-weight: 900;
    border-radius: 6px;
}
button.ast_btn.pull-right {
    margin: 29px 0px 0;
}
</style>

<div class="location">
    <div class="container">
         <?php if(isset($service[0]->menu_id) AND $service[0]->menu_id == 4) {?> 
	 <?php 
$country = $this->admin->get('countries');

?>
                                         <form action="<?php echo base_url('front/specialist/'.$id)?>" method="POST" class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

							<label>Country</label>
                             <input type="hidden" name="id" value="<?php echo $id?>">
							<select name="country" onchange="myfunction_member(this.value)">
                             <?php foreach ($country as $row) {
                              ?>
								<option value="<?php echo $row->id;?>"><?php echo $row->name?></option>
								<?php }?>
							</select>

						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

							<label>State</label>

							<select name="state" id="state1" onchange="myfunction2_member(this.value)">
				
							</select>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

							<label>City</label>

							<select name="city" id="city1" >
							
							</select>

						</div>
						
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						    <label></label>
                               <button class="ast_btn pull-right">Find Your Nearest specialist</button>
                               </div>
                                         </form>


<?php }?>
    </div>
</div>





<div class="ast_team_wrapper ast_toppadder70 ast_bottompadder50">
                 
	<div class="container">

		<div class="row">

			<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">

			    <div class="row">

			    	<?php foreach ($mamber as $row) {

			    		if($row->status != 'Inactive'){ 

				 ?>

			        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

				<div class="ast_team_box">	

					<div class="row teat_info">

						<div class="col-md-12">

							<img src="<?php echo base_url('admin-assets/assets/images/users/'.$row->image)?>" alt="team">

						</div>

						<div class="col-md-12">

							<h4><?php echo $row->name;?></h4>

							<p><?php echo $row->expertise;?></p>

							<div class="row">

    <div class="">

      <div class="star-rating">

       <?php
     $rating1 = $this->db->query("SELECT AVG(rating) as rating FROM rating WHERE `user_id` ='".$row->id."'")->result();
     $rating = (int)$rating1[0]->rating;
    
      for ($i=0; $i < 5; $i++) { 
         if($i < $rating){
          $tmp_class = 'fa fa-star';
         }else{
          $tmp_class = 'fa fa-star-o';
         }
  
   ?>
        <span class="<?php echo $tmp_class?>" data-rating="1"></span>

        <?php }?>
        <input type="hidden" name="whatever1" class="rating-value" value="2.56">

      </div>

    </div>

  </div>

						</div>



					</div>

  

   <?php if($row->status == "Online"){?>

  <a class="a available" href="#">Available</a>

  <?php }else{?>

   <a class="a unavailable" href="#"><?php echo $row->status; ?></a>

   <?php }?>

  <a class="a" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Experience : <strong><?php echo $row->experience?></strong> </a>

  <!-- <a class="a" href="#"><i class="fa fa-inr" aria-hidden="true"></i> Charges : <strong><?php echo $row->price?>/Min</strong> </a> -->

  <div class="calling_btn">
             <?php if( isset($service) AND $service[0]->menu_id != 2 AND $service[0]->menu_id != 1 AND $service[0]->menu_id != 4){?>

  		<a href="#" class="call video"><i class="fa fa-desktop" aria-hidden="true"></i>&nbsp; Video Call <span>|</span> <i class="fa fa-inr" aria-hidden="true"></i><?php echo $row->price*2?>/Min</a>

  		<a href="#" class="call audio"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; Audio Call <span>|</span> <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $row->price?>/Min</a>
  	<?php }else{?>
  		<a href="#" class="call video"><i class="fa fa-desktop" aria-hidden="true"></i>&nbsp; Service Price <span>|</span> <i class="fa fa-inr" aria-hidden="true"></i><?php echo $row->price."/".$row->price_unit?></a>
  	<?php }?>	

  </div>

  <br>

  <a class="buy_btn ast_btn" href="<?php echo base_url('front/astrologer/'.$row->id."/".$id)?>">View</a>

  



  <!-- <a class="a" href="#"><strong><i class="fa fa-home" aria-hidden="true"></i></strong> <?php echo $row->city;?></a> -->

				</div>

			</div>

			<?php }}?>

			    </div>

			</div>

			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

				<div class="sidebar_wrapper">

					<aside class="widget widget_search">

						<input type="text" placeholder="Search...">

						<button type="button"><i class="fa fa-search"></i></button>

					</aside>

					

					<aside class="widget widget_categories">

						<h4 class="widget-title">Onegodmed Services</h4>

						<ul>

							<li><a href="<?php echo base_url();?>front/solutions">Vedic Astrology</a></li>

							<!--<li><a href="<?php echo base_url();?>front/life_issues">Vedic OPD</a></li>-->

							<!--<li><a href="<?php echo base_url();?>front/courses">Vedic Sutra Courses</a></li>-->

							<!--<li><a href="<?php echo base_url();?>front/pooja">Live Predictions</a></li>-->

							<li><a href="<?php echo base_url();?>front/kundali">Personalized Horoscope</a></li>
							
							<li><a href="<?php echo base_url();?>front/articles">Vedic Library</a></li>

						</ul>

					</aside>	

					

					<aside class="widget widget_recent_entries">

						<h4 class="widget-title">Reading Articles</h4>

						<ul>

							<li><a href="https://onegodmed.com/update/front/blog1/7">What is the relevance of wheel of karma in human life</a></li>

							<li><a href="https://onegodmed.com/update/front/blog1/8">How does astrology help in shaping human life in a meaningful way</a></li>

							<li><a href="https://onegodmed.com/update/front/blog1/9">Vedas : Your Spiritual Guide</a></li>

						</ul>

					</aside>

				</div>

			</div>

		</div>

	</div>

</div>

<script type="text/javascript">
    function myfunction_member(country_id){
         $.ajax({
            url: "<?php echo base_url('front/ajax_get_state')?>",
            type: 'POST',
              dataType: "json",
            data: {'country_id':country_id},
            success: function(response) {
              if(response.status == 1){
                var i =0;
                $("#state1").empty();
                    $("#state1").append("<option value=''>Select</option>");
                 $.each(response.state, function(key, value) {
                $("#state1").append("<option value='"+response.state[i].id+"'>"+response.state[i].name+"</option>")
             i++;
      })
              }else{
                     $("#state1").empty();
              }
            }            
        });
   }

   function myfunction2_member(state_id){
         $.ajax({
            url: "<?php echo base_url('front/ajax_get_city')?>",
            type: 'POST',
              dataType: "json",
            data: {'state_id':state_id},
            success: function(response) {
              if(response.status == 1){
                var i =0;
                $("#city1").empty();
                    $("#city1").append("<option value=''>Select</option>");
                 $.each(response.city, function(key, value) {
                $("#city1").append("<option value='"+response.city[i].id+"'>"+response.city[i].name+"</option>")
             i++;
      })
              }else{
                     $("#state1").empty();
              }
            }            
        });
   }
</script>


