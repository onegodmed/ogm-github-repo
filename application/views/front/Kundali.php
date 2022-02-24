<!--Breadcrumb start-->

<div class="ast_pagetitle">

    <div class="ast_img_overlay"></div>

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="page_title">

                    <h2>Premium Horoscope Reports</h2>

                </div>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">

                <ul class="breadcrumb">

                    <li><a href="<?php echo base_url(); ?>">home</a></li>

                    <li>//</li>

                    <li><a href="#">Premium Horoscope Reports</a></li>

                </ul>

            </div>

        </div>

    </div>

</div>

<!--Breadcrumb end-->

<!--<div class="ast_wedo_wrapper ast_toppadder70 ast_bottompadder50">

<div class="container">

<div class="row">

<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">

<div class="ast_heading">

	<h1>About <span>Kundali/Horoscope</span></h1>

	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected hummer.</p>

</div>

</div>

<?php foreach ($super_categories as$kundali) {



		 ?>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



		<div class="ast_vedic_astrology">

			<h4><?php echo $kundali->super_category?></h4>

			<ul>

				<?php foreach ($categories as $kundali_cat) {

			        if($kundali_cat->super_cat_id == $kundali->id){

				?>

				<li>

					<a href="<?php echo base_url('front/get_kundali/'.$kundali_cat->id)?>">

						<img src="<?php echo base_url('assets/categories_image/'.$kundali->image);?>" alt="Sign">

						<div class="ast_vedic_astro_info">

							<h5><?php echo $kundali_cat->category ?></h5>

							<p><?php echo substr($kundali_cat->description,0,60) ?></p>

						</div>

					</a>

				</li>



			   <?php }}?>

			</ul>

		</div>

	</div>

</div>

</div>



<?php }?>

<div class="clearfix"></div>

</div>

</div>

</div>-->

<div class="clearfix"></div>



<div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder30 main_servece">



    <div class="container">



        <div class="row">

            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-push-7 col-md-push-7 col-sm-push-7 col-xs-push-0 ast_toppadder30">

				<div class="ast_about_info_img"><br><br><br>
                <iframe width="100%" height="260" src="https://www.youtube.com/embed/CPeeZ-q0rdc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


				</div>

			</div>

			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-lg-pull-5 col-md-pull-5 col-sm-pull-5 col-xs-pull-0">

				<div class="ast_about_info">

					<h4>About Horoscope</h4>

					<p>“Does life have a meaning and purpose?” This is what we usually think when in despair; when things don’t go our way, thus making us feel miserable. That is when Vedic Astrology comes into the picture. It is the study of how planets and other heavenly bodies influence a person’s way of life; on a personal and professional level.</p>

					<p>The concept of Vedic Astrology originates from the Vedas, the ancient scriptures disclosed by the great sages during the 1500-2000 BCE. Those Vedas are considered as the eyes of the sages, which provide a connection with the Divine Spirit, and gives us the ability to see within ourselves with more clarity. The reincarnation of the Karma forms the core of the system, and the karma is nothing but the “past due” of our lives. In order to balance Karmic tendencies that arise as a result of the past, there are remedial measures suggested by the Vedic astrologers that help change the karma associated with the afflicted planet.  The Vedic astrologers, through their expertise in spiritual knowledge, prescribe remedial measures with near perfect accuracy. That is why Vedic astrology is also known as the “science of light”. We, at OneGodMed, provide solutions to your troubles, for you to attain self-realization and develop unity to spirit. </p>

				</div>

			</div>



            <!--<ul class="nav nav-tabs nav-justified col-lg-12">

                <li class="active"><a data-toggle="tab" href="#kundali">Kundali</a></li>

                <li><a data-toggle="tab" href="#horoscope">Horoscope</a></li>

            </ul>-->



            <div class="tab-content col-lg-12">

                <div id="kundali" class="tab-pane fade in active">

                    <div class="row ast_toppadder30 ast_bottompadder40 courses">

                        <?php foreach ($categories as $row) {
                            if($row->super_cat_id == 83){

                 ?>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                <div class="ast_service_box">

                                    <img src="<?php echo base_url('assets/categories_image/'.$row->image);?>" alt="Service">

                                    <h4><?php echo $row->category;?></h4>

                                    <!--<p>

                                        <?php echo substr($row->description,0,100);?>

                                    </p>-->

                                    <div class="clearfix"></div>

                                    <a href="<?php echo base_url('horoscope-report/'.$row->slug_category.'/')?>" class="ast_btn">Know more</a>

                                </div>

                            </div>

                            <?php }}?>

                    </div>

                </div>

                <div id="horoscope" class="tab-pane fade">



                    <div class="row ast_toppadder30 ast_bottompadder40 courses">

                        <?php foreach ($categories as $row) {
                            if($row->super_cat_id == 83){

				 ?>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                <div class="ast_service_box">

                                    <img src="<?php echo base_url('assets/categories_image/'.$row->image);?>" alt="Service">

                                    <h4><?php echo $row->ategory;?></h4>

                                    <!--<p>

                                        <?php echo substr($row->description,0,100);?>

                                    </p>-->

                                    <div class="clearfix"></div>

                                    <a href="<?php echo base_url('front/service/'.$row->id)?>" class="ast_btn">Know more</a>

                                </div>

                            </div>

                            <?php }}?>

                    </div>

                </div>

            </div>

        </div>



    </div>



</div>