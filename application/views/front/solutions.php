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

					<h1>Vedic Astrology</h1>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">

				<ul class="breadcrumb">

					<li><a href="<?php echo base_url(); ?>">home</a></li>

					<li>//</li>

					<li><a href="#">Vedic Astrology</a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

<!--BKnowcrumb end-->

<!--About Us Start-->

<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">

	<div class="container">

		<div class="row">

			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-push-7 col-md-push-7 col-sm-push-7 col-xs-push-0">

				<div class="ast_about_info_img"><br><br><br>

				<!--	 <iframe width="100%" height="260" src="https://www.youtube.com/watch?v=lzQ-2vfBkss" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen autoplay="true"></iframe>-->
					 
					 <iframe width="100%" height="260" src="https://www.youtube.com/embed/CPeeZ-q0rdc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				</div>

			</div>

			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-lg-pull-5 col-md-pull-5 col-sm-pull-5 col-xs-pull-0">

				<div class="ast_about_info">

					<h4>About Vedic Astrology</h4>

					<p>“Does life have a meaning and purpose?” This is what we usually think when in despair; when things don’t go our way, thus making us feel miserable. That is when Vedic Astrology comes into the picture. It is the study of how planets and other heavenly bodies influence a person’s way of life; on a personal and professional level.</p>

					<p>The concept of Vedic Astrology originates from the Vedas, the ancient scriptures disclosed by the great sages during the 1500-2000 BCE. Those Vedas are considered as the eyes of the sages, which provide a connection with the Divine Spirit, and gives us the ability to see within ourselves with more clarity. The reincarnation of the Karma forms the core of the system, and the karma is nothing but the “past due” of our lives. In order to balance Karmic tendencies that arise as a result of the past, there are remedial measures suggested by the Vedic astrologers that help change the karma associated with the afflicted planet.  The Vedic astrologers, through their expertise in spiritual knowledge, prescribe remedial measures with near perfect accuracy. That is why Vedic astrology is also known as the “science of light”. We, at OneGodMed, provide solutions to your troubles, for you to attain self-realization and develop unity to spirit. </p>

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

					<p><?php echo substr($row->short_description,0,60);?></p>

					<div class="clearfix"></div>

					<a href="<?php echo base_url('vedic-astrology/'.$row->slug_super_category.'/')?>" class="ast_btn">Know more</a>

				</div>

			</div>

			<?php }?>

		</div>

	</div>

</div>





