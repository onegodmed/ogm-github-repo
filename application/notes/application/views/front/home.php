

		<!-- Slider Area -->
		<section class="home-slider">
			<div class="slider-active">
				<!-- Single Slider -->
				<div class="single-slider overlay" style="background-image:url('images/slider-bg1.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-12">
								<div class="slider-text">
									<h1>Perfect Template for <span>Education</span> & Courses Website</h1>
									<p>Our mission is to empower clients, colleagues, and communities to achieve aspirations while building lasting, caring relationships.</p>
									<div class="button">
										<a href="courses.html" class="btn primary">Our Courses</a>
										<a href="about.html" class="btn">About Learnedu</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider overlay" style="background-image:url('images/slider-bg2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-12">
								<div class="slider-text text-center">
									<h1>Creative Template for <span>Education</span> & Courses Website</h1>
									<p>Our mission is to empower clients, colleagues, and communities to achieve aspirations while building lasting, caring relationships.</p>
									<div class="button">
										<a href="courses.html" class="btn primary">Our Courses</a>
										<a href="about.html" class="btn">About Learnedu</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider overlay" style="background-image:url('images/slider-bg3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-4 col-md-8 offset-md-4 col-12">
								<div class="slider-text text-right">
									<h1>Responsive Template for <span>Education</span> & Courses Website</h1>
									<p>Our mission is to empower clients, colleagues, and communities to achieve aspirations while building lasting, caring relationships.</p>
									<div class="button">
										<a href="courses.html" class="btn primary">Our Courses</a>
										<a href="about.html" class="btn">About Learnedu</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Features -->
		<section class="our-features section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>We Provide <span>Educational</span> Solutions</h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="feature-head">
								<img src="images/feature1.jpg" alt="#">
							</div>
							<h2>Online Courses Facilities</h2>
							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim</p>	
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="feature-head">
								<img src="images/feature2.jpg" alt="#">
							</div>
							<h2>Student Admin Panel</h2>
							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim</p>	
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="feature-head">
								<img src="images/feature3.jpg" alt="#">
							</div>
							<h2>Perfect Guidelines</h2>
							<p>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim</p>	
						</div>
						<!--/ End Single Feature -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Features -->
		<!-- Call To Action -->
		<section class="cta" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 offset-lg-6 col-12">
						<div class="cta-inner overlay">
							<div class="text-content">
								<h2>We Focus On Brands, Products & Campaigns</h2>
								<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore cum. Coluta nobis est eligendi optio cumque nihil impedit quo minusd quod maxime placeat facere possimus, omnis voluptas assumenda est. Our friendly support team is standing by to help you every step of the way.</p>
								<div class="button">
									<a class="btn primary" href="contact.html" >Register Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call To Action -->
		<!-- Courses -->
		<section class="courses section-bg section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Popular <span>Courses</span> We Offer</h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="course-slider">
							<!-- Single Course -->
							<?php foreach ($course as $row) {
								
					 ?>
							<div class="single-course">
								<div class="course-head overlay">
									<img src="images/course1.jpg" alt="#">
									<a href="<?php echo base_url('front/course/'.$row->id)?>" class="btn"><i class="fa fa-link"></i></a>
								</div>
								<div class="single-content">
									<h4><a href="<?php echo base_url('front/course/'.$row->id)?>"><?php echo $row->name ?></a></h4>
									<p><?php echo $row->description?> </p>
								</div>
								<div class="course-meta">
									<div class="meta-left">
										<span><i class="fa fa-users"></i>36 Seat</span>
										<span><i class="fa fa-clock-o"></i>2 Years</span>
									</div>
									<span class="price">$350</span>
								</div>
							</div>
						<?php }?>
							<!--/ End Single Course -->
							<!-- Single Course -->
							
							<!--/ End Single Course -->
							<!-- Single Course -->
							
							<!--/ End Single Course -->
							<!-- Single Course -->
							
							<!--/ End Single Course -->
							<!-- Single Course -->
							
							<!--/ End Single Course -->
							<!-- Single Course -->
							
							<!--/ End Single Course -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Courses -->	
		
		
		
		
		
		<!-- Testimonials -->
		<section class="testimonials overlay section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="testimonial-slider">
							<!-- Single Testimonial -->
							<div class="single-testimonial">
								<img src="images/testimonial1.jpg" alt="#">
								<div class="main-content">
									<h4 class="name">Sanavce Faglane</h4>
									<p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
								</div>
							</div>
							<!--/ End Single Testimonial -->
							<!-- Single Testimonial -->
							<div class="single-testimonial">
								<img src="images/testimonial2.jpg" alt="#">
								<div class="main-content">
									<h4 class="name">Jansan Kate</h4>
									<p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
								</div>
							</div>
							<!--/ End Single Testimonial -->
							<!-- Single Testimonial -->
							<div class="single-testimonial">
								<img src="images/testimonial3.jpg" alt="#">
								<div class="main-content">
									<h4 class="name">Sanavce Faglane</h4>
									<p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
								</div>
							</div>
							<!--/ End Single Testimonial -->
							<!-- Single Testimonial -->
							<div class="single-testimonial">
								<img src="images/testimonial4.jpg" alt="#">
								<div class="main-content">
									<h4 class="name">Jansan Kate</h4>
									<p>Nulla cursus a metus vel placerat. Fusce malesuada volutpat pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit libero, viverra quis euismod vel pellentesque at tortor. Donec</p>
								</div>
							</div>
							<!--/ End Single Testimonial -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonials -->
		
		
		
		<!-- Fun Facts -->
		<div class="fun-facts overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-6">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-institution"></i>
							<div class="number"><span class="counter">80</span>k+</div>
							<p>Active Cources</p>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-6 col-6">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-graduation-cap"></i>
							<div class="number"><span class="counter">33</span>k+</div>
							<p>Active Students</p>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-6 col-6">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-video-camera"></i>
							<div class="number"><span class="counter">278</span>+</div>
							<p>Video Cources</p>
						</div>
						<!--/ End Single Fact -->
					</div>
					<div class="col-lg-3 col-md-6 col-6">
						<!-- Single Fact -->
						<div class="single-fact">
							<i class="fa fa-trophy"></i>
							<div class="number"><span class="counter">308</span>+</div>
							<p>Awards Won</p>
						</div>
						<!--/ End Single Fact -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun Facts -->
		
		
		
		
			