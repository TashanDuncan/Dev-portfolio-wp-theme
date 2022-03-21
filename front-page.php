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
			
			<div class="text-center py-3"><a href="/projects" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>View Portfolio</a></div>

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
			<?php get_template_part('inc/section', 'blogposts'); ?>
			<div class="text-center py-3"><a href="/blog" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right mr-2"></i>View Blog</a></div>
		</div>
		<!--//container-->

	</section>
	<!--//latest-blog-section-->



<?php
get_footer()
?>