<?php
get_header();

$devName = get_field('your_name');
$devTitle = get_field('job_title');
$description = get_field('description');
$profilePicLarge = get_field('profile_photo');
?>

<div class="main-wrapper">

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
			<h2 class="section-title font-weight-bold mb-3">My Current Tech Stack</h2>
			<div class="section-intro mb-5">I have more than 10 years' experience building software for clients all over the world. Below is a quick overview of my main technical skill sets and technologies I use. Want to find out more about my experience? Check out my <a href="resume.html">online resume</a> and <a href="portfolio.html">project portfolio</a>.</div>

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

			<div class="testiomonial-carousel-container">
				<div class="testimonial-carousel  tiny-slider">
					<div class="item">
						<div class="item-inner">
							<div class="quote-holder">
								<blockquote class="quote-content">
									Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
								</blockquote>
								<i class="fas fa-quote-left"></i>
							</div>
							<!--//quote-holder-->
							<div class="source-holder">
								<div class="source-profile">
									<img src="assets/images/clients/profile-1.png" alt="image" />
								</div>
								<div class="meta">
									<div class="name">Brandon James</div>
									<div class="info">Project Manager, Google</div>
								</div>
							</div>
						</div>
						<!--//item-inner-->
					</div>
					<!--//item-->

					<div class="item">
						<div class="item-inner">
							<div class="quote-holder">
								<blockquote class="quote-content">
									Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
								</blockquote>
								<i class="fas fa-quote-left"></i>
							</div>
							<!--//quote-holder-->
							<div class="source-holder">
								<div class="source-profile">
									<img src="assets/images/clients/profile-2.png" alt="image" />
								</div>
								<div class="meta">
									<div class="name">Kate Sanders</div>
									<div class="info">Project Manager, Uber</div>
								</div>
							</div>
						</div>
						<!--//item-inner-->
					</div>
					<!--//item-->

					<div class="item">
						<div class="item-inner">
							<div class="quote-holder">
								<blockquote class="quote-content">
									Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
								</blockquote>
								<i class="fas fa-quote-left"></i>
							</div>
							<!--//quote-holder-->
							<div class="source-holder">
								<div class="source-profile">
									<img src="assets/images/clients/profile-3.png" alt="image" />
								</div>
								<div class="meta">
									<div class="name">James Lee</div>
									<div class="info">Product Manager, Amazon</div>
								</div>
							</div>
						</div>
						<!--//item-inner-->
					</div>
					<!--//item-->

					<div class="item">
						<div class="item-inner">
							<div class="quote-holder">
								<blockquote class="quote-content">
									Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
								</blockquote>
								<i class="fas fa-quote-left"></i>
							</div>
							<!--//quote-holder-->
							<div class="source-holder">
								<div class="source-profile">
									<img src="assets/images/clients/profile-4.png" alt="image" />
								</div>
								<div class="meta">
									<div class="name">James Lee</div>
									<div class="info">Product Manager, Amazon</div>
								</div>
							</div>
						</div>
						<!--//item-inner-->
					</div>
					<!--//item-->

					<div class="item">
						<div class="item-inner">
							<div class="quote-holder">
								<blockquote class="quote-content">
									Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
								</blockquote>
								<i class="fas fa-quote-left"></i>
							</div>
							<!--//quote-holder-->
							<div class="source-holder">
								<div class="source-profile">
									<img src="assets/images/clients/profile-5.png" alt="image" />
								</div>
								<div class="meta">
									<div class="name">Olivia White</div>
									<div class="info">Product Manager, Dropbox</div>
								</div>
							</div>
						</div>
						<!--//item-inner-->
					</div>
					<!--//item-->

					<div class="item">
						<div class="item-inner">
							<div class="quote-holder">
								<blockquote class="quote-content">
									Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
								</blockquote>
								<i class="fas fa-quote-left"></i>
							</div>
							<!--//quote-holder-->
							<div class="source-holder">
								<div class="source-profile">
									<img src="assets/images/clients/profile-6.png" alt="image" />
								</div>
								<div class="meta">
									<div class="name">Samuel Reyes</div>
									<div class="info">CTO, StartupHub</div>
								</div>
							</div>
						</div>
						<!--//item-inner-->
					</div>
					<!--//item-->
				</div>
				<!--//testimonial-carousel-->
			</div>
			<!--//testimonial-carousel-container-->
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
			<div class="row">
				<div class="col-md-6 mb-5">
					<div class="card project-card">
						<div class="row no-gutters">
							<div class="col-lg-4 card-img-holder">
								<img src="assets/images/project/project-1.jpg" class="card-img" alt="image">
							</div>
							<div class="col-lg-8">
								<div class="card-body">
									<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
									<p class="card-text">Project intro lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
									<p class="card-text"><small class="text-muted">Client: Google</small></p>
								</div>
							</div>
						</div>
						<div class="link-mask">
							<a class="link-mask-link" href="project.html"></a>
							<div class="link-mask-text">
								<a class="btn btn-secondary" href="project.html">
									<i class="fas fa-eye mr-2"></i>View Case Study
								</a>
							</div>
						</div>
						<!--//link-mask-->
					</div>
					<!--//card-->
				</div>
				<!--//col-->
				<div class="col-md-6 mb-5">
					<div class="card project-card">
						<div class="row no-gutters">
							<div class="col-lg-4 card-img-holder">
								<img src="assets/images/project/project-2.jpg" class="card-img" alt="image">
							</div>
							<div class="col-lg-8">
								<div class="card-body">
									<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
									<p class="card-text"><small class="text-muted">Client: Dropbox</small></p>
								</div>
							</div>
						</div>
						<div class="link-mask">
							<a class="link-mask-link" href="project.html"></a>
							<div class="link-mask-text">
								<a class="btn btn-secondary" href="project.html">
									<i class="fas fa-eye mr-2"></i>View Case Study
								</a>
							</div>
						</div>
						<!--//link-mask-->
					</div>
					<!--//card-->
				</div>
				<!--//col-->
				<div class="col-md-6 mb-5">
					<div class="card project-card">
						<div class="row no-gutters">
							<div class="col-lg-4 card-img-holder">
								<img src="assets/images/project/project-3.jpg" class="card-img" alt="image">
							</div>
							<div class="col-lg-8">
								<div class="card-body">
									<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
									<p class="card-text"><small class="text-muted">Client: Google</small></p>
								</div>
							</div>
						</div>
						<div class="link-mask">
							<a class="link-mask-link" href="project.html"></a>
							<div class="link-mask-text">
								<a class="btn btn-secondary" href="project.html">
									<i class="fas fa-eye mr-2"></i>View Case Study
								</a>
							</div>
						</div>
						<!--//link-mask-->
					</div>
					<!--//card-->
				</div>
				<!--//col-->
				<div class="col-md-6 mb-5">
					<div class="card project-card">
						<div class="row no-gutters">
							<div class="col-lg-4 card-img-holder">
								<img src="assets/images/project/project-4.jpg" class="card-img" alt="image">
							</div>
							<div class="col-lg-8">
								<div class="card-body">
									<h5 class="card-title"><a href="project.html" class="theme-link">Project Heading</a></h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
									<p class="card-text"><small class="text-muted">Client: Uber</small></p>
								</div>
							</div>
						</div>
						<div class="link-mask">
							<a class="link-mask-link" href="project.html"></a>
							<div class="link-mask-text">
								<a class="btn btn-secondary" href="project.html">
									<i class="fas fa-eye mr-2"></i>View Case Study
								</a>
							</div>
						</div>
						<!--//link-mask-->
					</div>
					<!--//card-->
				</div>
				<!--//col-->
			</div>
			<!--//row-->
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

</div>
<!--//main-wrapper-->
<?php
get_footer()
?>