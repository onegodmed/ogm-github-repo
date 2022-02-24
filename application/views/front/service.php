<!--Breadcrumb start-->

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
  <?php if($super_category[0]->banner_image){?>
<div class="ast_pagetitle" style="background: url(<?php echo base_url('assets/categories_image/'.$super_category[0]->banner_image);?>);">
<?php }else{?>
	<div class="ast_pagetitle" style="background: url(<?php echo base_url('front-assets/images/content/breadcrumb_bg.jpg');?>);">
	<?php  }?>



<div class="ast_img_overlay"></div>



	<div class="container">



		<div class="row">



			<div class="col-lg-12 col-md-12 col-sm-12">



				<div class="page_title">



					<h1><?php echo $super_category[0]->super_category?></h1>



				</div>



			</div>



			<div class="col-lg-12 col-md-12 col-sm-12">



				<ul class="breadcrumb">



					<li><a href="#">home</a></li>



					<li>//</li>



					<li><a href="#"><?php echo $super_category[0]->super_category?></a></li>



				</ul>



			</div>



		</div>



	</div>



</div>



<!--Breadcrumb end--> 







<!-- product Description section Start -->



<div class="ast_proSingle_wrapper ast_toppadder70 ast_bottompadder40">



	<div class="container">



		<div class="row">



			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



				<div class="product_detail_wrap">



					<!-- product details Start -->



					<div class="product_detail_cover">



						<div class="row">



							<div class="col-sm-4 col-xs-12">



								<div class="product_slider">



									<!-- slides -->



									<div class="pro_slides_carousel">



										<div class="slick_item">



											<img src="<?php echo base_url();?>assets/categories_image/<?php echo $super_category[0]->image?>" class="img-responsive" />



										</div>



										

									</div>



								</div>

								

								<div class="product_slider">



									<!-- slides -->



									<div class="pro_slides_carousel">



										<div class="slick_item">

										    

										   <br><br>

										    <div class="actualyoutube">
                                           <?php 
                                           if(isset($super_category) AND $super_category[0]->youtube_url){
                                              $url = $super_category[0]->youtube_url;
                                               preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
                                                if(isset($matches[1])){
                                                	   $match =  $matches[1];
                                                }else{
                                                	$match =  "";
                                                }
                                                            $id = "https://www.youtube.com/embed/".$match;
                                                    
                                          }else{
                                          	   $id = "https://www.youtube.com/embed/CPeeZ-q0rdc";
                                          }
                                                  
                                                     // exit();
                                           ?>

										   <iframe width="100%" height="260" src="<?php echo $id?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay="true"></iframe>

</div>

										   



										</div>



										

									</div>



								</div>





							</div>



							<div class="col-sm-8 col-xs-12">



								<div class="product_description">



									<h3><?php echo $super_category[0]->super_category?></h3>



									<!--<div class="product_rating">



										<span class="ref_number"><?php echo $super_category[0]->menu_id?></span>



										<span class="rating_star">



											<i class="fa fa-star" aria-hidden="true"></i>



											<i class="fa fa-star" aria-hidden="true"></i>



											<i class="fa fa-star" aria-hidden="true"></i>



											<i class="fa fa-star" aria-hidden="true"></i>



											<i class="fa fa-star-o" aria-hidden="true"></i>



										</span>



									</div>-->

									

								



									<p>



										<?php echo $super_category[0]->description; ?>



									</p>
									<div class="product_buy">

                       <!--                 <?php if($super_category[0]->menu_id == 4){ ?>
                                           <?php 
$country = $this->admin->get('countries');
?>
                                         <form action="<?php echo base_url('front/specialist/'.$this->uri->segment(3))?>" method="POST">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>Country</label>

							<select name="country" onchange="myfunction_member(this.value)" required="">
                             <?php foreach ($country as $row) {
                              ?>
								<option value="<?php echo $row->id;?>"><?php echo $row->name?></option>
								<?php }?>
							</select>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>State</label>

							<select name="state" id="state1" onchange="myfunction2_member(this.value)" required="">
				
							</select>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

							<label>City</label>

							<select name="city" id="city1" required="">
							
							</select>

						</div>
                               <button>Talk to our specialist</button>
                                         </form>


                                       <?php }else{?>
                                      <a href="<?php echo base_url('front/specialist/'.$this->uri->segment(3))?>" class="buy_btn ast_btn">Talk to our specialist</a>
                                  <?php }?> -->

 <a href="<?= base_url()?>talk-to-astrologers/" class="buy_btn ast_btn">Talk to our specialist</a>

								    </div>



								</div>



							</div>



						</div>



					</div>



					<!-- product details End -->



					<!-- product description tabs -->



					<!-- <div class="product_desc_tabs">



						<ul class="tabs">



							<li class="tab-link current" data-tab="tab-1">descriptions</li>



							<li class="tab-link" data-tab="tab-2">reviews</li>



						</ul>



						<div class="product_tab_content">



							<div id="tab-1" class="tab_content current">



								<h4>Discription</h4>



								<p>



								<?php //echo $super_category[0]->description; ?>



								</p>



								<h4>Features</h4>



								<p>



									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 



								</p>



							</div>



							<div id="tab-2" class="tab_content">



								<h4>review</h4>



								<p>there are no reviews yet</p>



								<h4>add a review</h4>



								<p>Your email address will not be published.</p>



								<form class="ast_review_form">



									<textarea placeholder="Your Review" rows="6"></textarea>



									<div class="row">



										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



											<input type="text" placeholder="Your Name">



										</div>	



										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">



											<input type="text" placeholder="Your Email">



										</div>



									</div>



									<a href="#" class="ast_btn">submit</a>									



								</form>



							</div>



						</div>



					</div> -->



					<!-- product description tabs -->



				</div>



			</div>


		</div>



	</div>



</div>

<script type="text/javascript">

	function login() {

		 $('#login-dialog').model({

		 	backdrop: 'static',

		 	keybord:false,

		 })

	}

	function getYoutubeEmbedUrl($url){

    $urlParts   = explode('/', $url);
    $vidid      = explode( '&', str_replace('watch?v=', '', end($urlParts) ) );

    return 'https://www.youtube.com/embed/' . $vidid[0] ;
}

</script>

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



<!-- product Description section End --> 











