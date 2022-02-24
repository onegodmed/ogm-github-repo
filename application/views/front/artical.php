<style>
   .pagination  {
    width: 100%;
    float: right;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
.loading img {
    width: 50px;
    height: 50px;
}
 .showtot{
    display: inline-block;
    font-size: 20px;
    margin-right: 40px;
}
.pagination b{    background: #f77403;
    color: #fff;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;margin-left:15px;}
.pagination a{    background: #ccc;
    color: #000;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;margin-left:15px;}
    .pagination a:hover{    background: #f77403;
    color: #fff;
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;}
    @media (max-width:600px){
        .showtot {
    display: block;
    font-size: 20px;
    margin-right: 0px;
    width: 100%;
    padding: 9px;
}
.pagination {
    width: 100%;
    float: right;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex-wrap: wrap;
    padding: 10px;
}
    }
</style>
<!--Breadcrumb start-->
<div class="ast_pagetitle">
<div class="ast_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>Reading Articles</h2>



				</div>



			</div>



			<div class="col-lg-12 col-md-12 col-sm-12">



				<ul class="breadcrumb">



					<li><a href="<?php echo base_url(); ?>">home</a></li>



					<li>//</li>



					<li><a href="#">Reading Articles</a></li>



				</ul>



			</div>



		</div>



	</div>



</div>



<!--Breadcrumb end-->



<!--Blog section start-->



<div class="ast_blog_wrapper ast_toppadder70 ast_bottompadder70 artical">



	<div class="container">



		<div class="row">



			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">



				<div class="row">
				    <div class="post-list" id="dataList blog">
                    <?php if(!empty($posts)){ foreach($posts as $row){
                    	
                  ?>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



						<div class="ast_blog_box">



							<div class="ast_blog_img">



								<!-- <span class="ast_date_tag">1 May, 2019</span> -->



								<a href="<?php echo base_url('blog/'.$row['slug_url']);?>"><img src="<?php echo base_url('admin-assets/assets/blog-images/'.$row['blog_image']);?>" alt="Blog" title="Blog"></a>



							</div>



							<div class="ast_blog_info">



								<ul class="ast_blog_info_text">



									<!-- <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28 comments</a></li> -->



									<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> ONEGODMED</a></li>



								</ul>



								<h3 class="ast_blog_info_heading"><a href="<?php echo base_url('blog/'.$row['slug_url']);?>"><?php echo $row['heading']?></a></h3>



								<p class="ast_blog_info_details"><?php echo substr($row['short_discription'], 0, 80);?>...</p>



								<a class="ast_btn" href="<?php echo base_url('blog/'.$row['slug_url']);?>">read more</a>



							</div>



						</div>



					</div>

				<?php } }else{ ?>
                <p>Post(s) not found...</p>
            <?php } ?>
			
            <!-- Render pagination links -->
            <?php echo $this->ajax_pagination->create_links(); ?>

</div>
					<div class="loading" style="display: none;">
            <div class="content"><img src="<?php echo base_url('assets/images/loading.gif'); ?>"/></div>
        </div>



				</div>


			</div>



			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 w-100">



				<div class="sidebar_wrapper">



					<aside class="widget widget_search">



						<input type="text" placeholder="Search...">



						<button type="button"><i class="fa fa-search"></i></button>



					</aside>



					


					<div class="widgetWrap">
						<aside class="widget widget_categories">



						<h4 class="widget-title">Categories</h4>



						<ul>



							<li><a href="<?php echo base_url();?>vedic-astrology/">Vedic Astrology</a></li>



							<li><a href="<?php echo base_url();?>vedic-astrology/numerology/">Numerology</a></li>



							<li><a href="<?php echo base_url();?>vedic-astrology/tarot-cards/">Tarot Cards</a></li>



							<li><a href="<?php echo base_url();?>vedic-astrology/vastu-shastra/">Vastu Shastra</a></li>



							<li><a href="<?php echo base_url();?>horoscope-report/">Premium Reports</a></li>



						</ul>



						</aside>
						<aside class="widget widget_recent_entries">



						<h4 class="widget-title">Recent Posts</h4>



						<ul>


							<?php foreach ($posts as $row) {
						?>
							<li><a href="<?php echo base_url('blog/'.$row['slug_url']);?>"><?php echo $row['heading']?></a></li>
						<?php }?>

							



						</ul>



						</aside>
					</div>
					



				</div>



			</div>



		</div>



	</div>



</div>



<!--Blog section end-->



