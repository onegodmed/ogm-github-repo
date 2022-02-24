<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Our Course Pages</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="courses.html">Courses</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		
		<!-- Courses -->
		<section class="courses archives section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Popular <span>Courses</span> We Offer</h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p>
						</div>
					</div>
				</div>

					<ul class="nav nav-tabs">
					    <li class="active"><a data-toggle="tab" href="#home">Video</a></li>
					    <li><a data-toggle="tab" href="#menu1">Pdf</a></li>
					    <li><a data-toggle="tab" href="#menu2">MCQ</a></li>
					</ul>

					  <div class="tab-content">
					    <div id="home" class="tab-pane fade in active">
					     <!--  <h3>Course Content</h3> -->
					      <?php foreach ($course_content as $key => $value) {

					      if ($value->type=='Video') {
					       	 ?>

							<div class="col-lg-4 col-md-6 col-12">
								
								<!-- Single Course -->
								<div class="single-course">
									<video width="400" controls>
									  <source src="<?php echo $value->upload_url;?>" type="video/mp4">
									</video>
									<div class="single-content">
										<h4><?php echo $value->chapter_name?></h4>
										<p><?php echo $value->topic_name?></p>
									</div>
									<!-- <div class="course-meta">
										<div class="meta-left">
											<span><?php echo $value->topic_name?></span>
											<span><i class="fa fa-clock-o"></i>2 Years</span>
										</div>
										<span class="price">Rs.</span>
									</div> -->
								</div>
								<!--/ End Single Course -->
							</div>
					       <?php } } ?>

					    </div>
					    <div id="menu1" class="tab-pane fade in active">
					      <!-- <h3>Course Content</h3> -->
					      <table class="table">
							    <thead>
							      <tr>
							        <th>Class</th>
							        <th>Subject</th>
							        <th>Chapter</th>
							        <th>Topic</th>
							        <th>Download</th>
							      </tr>
							    </thead>
							    <tbody>
					      <?php foreach ($course_content as $key => $value) {
					      if ($value->type=='Pdf') {
					       	 ?>
					       	  
							      <tr>
							        <td><?php echo $value->class_name; ?></td>
							        <td><?php echo $value->subject_name; ?></td>
							        <td><?php echo $value->chapter_name; ?></td>
							        <td><?php echo $value->topic_name; ?></td>
							        <td><a href="<?php echo $value->upload_url; ?>" download >Download</a></td>
							      </tr>
							      <?php } } ?>
							    </tbody>
							  </table>

					    </div>
					    
			
			
			</div>
		</section>