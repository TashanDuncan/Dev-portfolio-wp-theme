<?php
get_header();

$devName = get_field('your_name');
$devTitle = get_field('job_title');
$description = get_field('description');
$profilePicLarge = get_field('profile_photo');
?>



	<section class="about-me-section p-3 p-lg-5 theme-bg-light">
		<div class="container">
			<div class="profile-teaser media flex-column flex-lg-row">

				<div class="media-body">
					<h2 class="name font-weight-bold mb-1"><?php echo $devName ?></h2>
					<?php if ($devTitle) : ?>
						<div class="tagline mb-3"><?php echo $devTitle ?></div>
					<?php endif; ?>

					<?php if ($description) : ?>
						<div class="bio mb-4"> <?php echo $description ?>
						</div>
					<?php endif; ?>

					<!--//bio-->
					<div class="mb-4">
						<a class="btn btn-primary mr-2 mb-3" href="portfolio.html"><i class="fas fa-arrow-alt-circle-right mr-2"></i><span class="d-none d-md-inline">View</span> Portfolio</a>
						<a class="btn btn-secondary mb-3" href="resume.html"><i class="fas fa-file-alt mr-2"></i><span class="d-none d-md-inline">View</span> CV</a>
					</div>
				</div>
				<!--//media-body-->
				<?php if ($profilePicLarge) : ?>
					<img class="profile-image mb-3 mb-lg-0 ml-lg-5 mr-md-0" src="<?php echo $profilePicLarge ?>" alt="profile picture">
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!--//about-me-section-->

	<section class="overview-section p-3 p-lg-5">
		<div class="container">
			<h2 class="section-title font-weight-bold mb-5">My Current Tech Stack</h2>

			<?php get_template_part('inc/section', 'skills'); ?>

		</div>
		<!--//container-->
	</section>

	<div class="container">
		<hr>
	</div>

	<section class="testimonials-section p-3 p-lg-5">
		<div class="container">
			<h2 class="section-title font-weight-bold mb-5">Testimonials</h2>
			<?php get_template_part('inc/section', 'testimonials'); ?>
		</div>
		<!--//container-->
	</section>
	<!--//testimonials-section-->

	<div class="container">
		<hr>
	</div>


	<section class="featured-section p-3 p-lg-5">
		<div class="container">
			<h2 class="section-title font-weight-bold mb-5">Featured Projects</h2>
			<?php get_template_part('inc/section', 'projects'); ?>
			
			<div class="text-center py-3"><a href="portfolio.html" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>View Portfolio</a></div>

		</div>
		<!--//container-->
	</section>
	<!--//featured-section-->

	<div class="container">
		<hr>
	</div>

	<section class="latest-blog-section p-3 p-lg-5">
		<div class="container">
			<h2 class="section-title font-weight-bold mb-5">Latest Blog Posts</h2>
			<div class="row">
				<div class="col-md-4 mb-5">
					<div class="card blog-post-card">
						<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-1.jpg" alt="image">
						<div class="card-body">
							<h5 class="card-title"><a class="theme-link" href="blog-post.html">Top 3 JavaScript Frameworks</a></h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
							<p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>

						</div>
						<div class="card-footer">
							<small class="text-muted">Published 2 days ago</small>
						</div>
					</div>
					<!--//card-->
				</div>
				<!--//col-->
				<div class="col-md-4 mb-5">
					<div class="card blog-post-card">
						<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-2.jpg" alt="image">
						<div class="card-body">
							<h5 class="card-title"><a class="theme-link" href="blog-post.html">About Remote Working</a></h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
							<p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>
						</div>
						<div class="card-footer">
							<small class="text-muted">Published a week ago</small>

						</div>
					</div>
					<!--//card-->
				</div>
				<!--//col-->
				<div class="col-md-4 mb-5">
					<div class="card blog-post-card">
						<img class="card-img-top" src="assets/images/blog/blog-post-thumb-card-3.jpg" alt="image">
						<div class="card-body">
							<h5 class="card-title"><a class="theme-link" href="blog-post.html">A Guide to Becoming a Full-Stack Developer</a></h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient...</p>
							<p class="mb-0"><a class="more-link" href="blog-post.html">Read more &rarr;</a></p>
						</div>
						<div class="card-footer">
							<small class="text-muted">Published 3 weeks ago</small>
						</div>
					</div>
					<!--//card-->
				</div>
				<!--//col-->
			</div>
			<!--//row-->
			<div class="text-center py-3"><a href="blog-home.html" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>View Blog</a></div>
		</div>
		<!--//container-->

	</section>
	<!--//latest-blog-section-->

	<footer class="footer text-center py-4">
		<small class="copyright">Template Copyright &copy; <a href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>
	</footer>


<?php
get_footer()
?>