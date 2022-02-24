<style>
/*    .ast_blog_box b {*/
/*    font-weight: 300 !important;*/
/*}*/
.ast_blog_box strong {
    font-weight: 300 !important;
}
.big_img img{
    height:auto !important;
}
</style>
<script src='https://platform-api.sharethis.com/js/sharethis.js#property=5d7ccf3dab6f1000123c8c98&product=inline-share-buttons' async='async'></script>
<!--Breadcrumb start-->
<div class="ast_pagetitle">
<div class="ast_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2><?php echo $blog[0]->heading?></h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="breadcrumb">
					<li><a href="#">home</a></li>
					<li>//</li>
					<li><a href="#">blog</a></li>
					<li>//</li>
					<li><a href="#"><?php echo $blog[0]->heading?></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<!--Blog section start-->
<div class="ast_blog_wrapper ast_toppadder80 ast_bottompadder80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ast_blog_box">
					<div class="ast_blog_img big_img">
						<!--<span class="ast_date_tag">28 august, 2018</span>-->
						<img src="<?php echo base_url('admin-assets/assets/blog-images/'.$blog[0]->blog_image);?>" alt="Blog" title="Blog">
					</div>
					
					<div class="ast_blog_info">
						<ul class="ast_blog_info_text">
							<!--<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28 comments</a></li>-->
							<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> OneGodMed</a></li>
						</ul>
						<div class="sharethis-inline-share-buttons" style="margin-bottom: 20px;"></div>
						<h3 class="ast_blog_info_heading"><?php echo $blog[0]->heading?></h3>
						
						<p class="ast_blog_info_details">
				</p>
	<?php echo $blog[0]->discription?>

					</div>
				</div>
				
				
			</div>
		</div>
	</div>
</div>
<!--Blog section end-->
