

<!--Breadcrumb start-->

<div class="ast_pagetitle">

<div class="ast_img_overlay"></div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="page_title">

					<h2>Vedic OPD</h2>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">

				<ul class="breadcrumb">

					<li><a href="<?php echo base_url(); ?>">home</a></li>

					<li>//</li>

					<li><a href="#">Vedic OPD </a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

<!--Breadcrumb end-->

<div class="clearfix"></div>



<!--<div class="get_start">

    <a href="<?php echo base_url();?>front/specialist"> Click Here to Find your specialist </a>

</div>-->

<!--serveces-->

<!--About Us Start-->

<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">

	<div class="container">

		<div class="row">

			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-push-7 col-md-push-7 col-sm-push-7 col-xs-push-0">

				<div class="ast_about_info_img">

					 <iframe width="100%" height="260" src="https://www.youtube.com/embed/8KjWbjhb89o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay="true"></iframe>

				</div>

			</div>

			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-lg-pull-5 col-md-pull-5 col-sm-pull-5 col-xs-pull-0">

				<div class="ast_about_info">

					<h4>About Vedic Healing</h4>

					<p>What could be more elevating than feeling the state of entirety and thriving? Healing and clearing all fear, sickness, and hurt which imprisons, dishearten and paralyzes our energy portals. At the present time when we are evolving faster than ever, why not to focus on the adoption of a holistic method where we can attain TWO NEED WITH ONE DEED. While experiencing something which is life-changing and improves the overall well-being. VEDIC OR SPIRITUAL HEALING connects and cures all physical, mental and emotional hurdles. </p>

					<p>It targets the energy field and blocks around the body and unlimited supply and reception of spiritual energies which create a positive vibrational field in all conscious, subconscious and unconscious dimensions. Spiritual healing is holistic healing by instituting a connection that leads a peaceful soul to a powerful journey. It creates a unique connection with yourself and also for the world around you.</p>

				</div>

			</div>

		</div>

	</div>

</div>

<!--About Us End-->

<div class="ast_service_wrapper ast_toppadder70 ast_bottompadder50">

	<div class="container">

		<div class="row">

			<?php foreach ($super_categories as $row) {

				 ?>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

				<div class="ast_service_box">

					<img src="<?php echo base_url('assets/categories_image/'.$row->image);?>" alt="Service">

					<h4><?php echo $row->super_category;?></h4>

					<p><?php echo $row->short_description;?></p>

					<div class="clearfix"></div>

					<a href="<?php echo base_url('front/service/'.$row->super_category)?>" class="ast_btn">Know more</a>

				</div>

			</div>

			<?php }?>

		</div>

	</div>

</div>





