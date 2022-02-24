

<!--Breadcrumb start-->

<div class="ast_pagetitle">

<div class="ast_img_overlay"></div>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="page_title">

					<h2>Our Package</h2>

				</div>

			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">

				<ul class="breadcrumb">

					<li><a href="#">home</a></li>

					<li>//</li>

					<li><a href="#">Our Package</a></li>

				</ul>

			</div>

		</div>

	</div>

</div>

<!--Breadcrumb end-->



<div class="ast_packages_wrapper ast_toppadder70 ast_bottompadder70" style="background: #ddd;">

	<div class="container">

		<div class="row">

			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">

				<div class="ast_heading ast_bottompadder20">

					<h1>price <span>packages</span></h1>

					<!--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected hummer.</p>-->

				</div>

			</div>

			<div class="ast_packages_mainbox">
				<?php foreach ($package as  $row) {
				
				 ?>
				 <form method="post" enctype="multipart/form-data" action="<?php echo base_url('pay/')?>">
                  <input type="hidden" placeholder="amount" name="payble_amount" id="amount" value="<?php echo $row->package_price?>">
							<!-- <input type="hidden" placeholder="amount" name="product_info" id="amount"> -->
							<input type="hidden" placeholder="amount" name="customer_email" id="amount" value="<?php echo $this->session->userdata('username')?>">
							<input type="hidden" placeholder="amount" name="customer_name" id="amount" value="<?php echo $this->session->userdata('name')?>">
							<input type="hidden" placeholder="amount" name="mobile_number" id="amount" value="<?php echo $this->session->userdata('mobile')?>">
							<input type="hidden" placeholder="amount" name="customer_id" id="amount" value="<?php echo $this->session->userdata('id')?>">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

					<div class="ast_packages_box">

						<h3><?php echo $row->package_name?></h3>

						<div class="ast_price">

							<h2><?php echo $row->package_price?></h2>

							<p></p>

						</div>

						<!-- <ul>

							<li><i class="fa fa-check" aria-hidden="true"></i>Lorem ipsum dolor sit amet</li>

							<li><i class="fa fa-times" aria-hidden="true"></i>Lorem ipsum dolor sit amet</li>

							<li><i class="fa fa-times" aria-hidden="true"></i>Lorem ipsum dolor sit amet</li>

							

						</ul> -->

						<div class="clearfix"></div>

						<button type="submit" class="ast_btn">Buy Now</button>

					</div>

				</div>
            </form>
	<?php }?>

				

				

			</div>

		</div>

	</div>

</div>