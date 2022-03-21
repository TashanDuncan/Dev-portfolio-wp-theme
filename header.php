<?php
$headerName = get_field('your_name', 7);
$headerTitle = get_field('job_title', 7);
?>

<!DOCTYPE html>
<html lang="en">

<head>


	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="DevCard Bootstrap 4 Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<?php
	wp_head()
	?>

</head>

<body>

	<header class="header text-center">
		<div class="force-overflow">
			<h1 class="blog-name pt-lg-4 mb-0"><a href="/"><?php echo $headerName?></a></h1>

			<nav class="navbar navbar-expand-lg navbar-dark">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navigation" class="collapse navbar-collapse flex-column">
					<div class="profile-section pt-3 pt-lg-0">
						<?php
						if(function_exists('the_custom_logo')){
							
							$custom_logo_id = get_theme_mod('custom_logo');
							$logo = wp_get_attachment_image_src($custom_logo_id);
						}
						?>
						<img class="profile-image mb-3 rounded-circle mx-auto" src="<?php echo $logo[0] ?>" alt="image">

						<div class="bio mb-3">Hi, my name is <?php echo $headerName?> and I'm a <?php echo $headerTitle?>. Welcome to my personal website!</div>
						<!--//bio-->
						<ul class="social-list list-inline py-2 mx-auto">
							<li class="list-inline-item"><a href="https://twitter.com/codingmugen" target="_blank" rel="noopener"><i class="fab fa-twitter fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://www.linkedin.com/in/tashanduncan/" target="_blank" rel="noopener"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://github.com/TashanDuncan" target="_blank" rel="noopener"><i class="fab fa-github-alt fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://stackoverflow.com/users/14390598/tay-duncan" target="_blank" rel="noopener"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
							<li class="list-inline-item"><a href="https://www.instagram.com/codingmugen/" target="_blank" rel="noopener"><i class="fab fa-instagram fa-fw"></i></a></li>
						</ul>
						<!--//social-list-->
						<hr>
					</div>
					<!--//profile-section-->

					<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="" class="navbar-nav flex-column text-left">%3$s</ul>'
						)
					)

					?>

					<div class="my-2">
						<a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane mr-2"></i>Contact Me</a>
					</div>


					<div class="dark-mode-toggle text-center w-100">
						<hr class="mb-4">
						<h4 class="toggle-name mb-3 "><i class="fas fa-adjust mr-1"></i>Dark Mode</h4>

						<input class="toggle" id="darkmode" type="checkbox">
						<label class="toggle-btn mx-auto mb-0" for="darkmode"></label>

					</div>
					<!--//dark-mode-toggle-->

				</div>
			</nav>
		</div>
		<!--//force-overflow-->
	</header>

	<div class="main-wrapper">