<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>CodeIgniter Pagination by CodexWorld</title>
	
    <!-- Stylesheet file -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
	
    <!-- jQuery library -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
</head>
<body>
<div class="container">
    <h1>Data List with Ajax Pagination</h1>
	
    <div class="row">
        <div class="post-list" id="dataList">
            <!-- Display posts list -->
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
		
        <!-- Loading Image -->
        <div class="loading" style="display: none;">
            <div class="content"><img src="<?php echo base_url('assets/images/loading.gif'); ?>"/></div>
        </div>
    </div>
</div>
</body>
</html>