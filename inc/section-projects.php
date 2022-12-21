<?php
// the query
$query = new WP_Query(array(
	'post_type' => 'projects',
	'posts_per_page' => 10,
));
?>

<div class="row">
	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

			<?php
			$featured = get_field('featured');
			?>
			<?php if ($featured) : ?>

				<?php
				$intro = get_field('project_intro');
				$client = get_field('client_name');
				?>
				<div class="col-md-6 mb-5">
					<div class="card project-card">
						<div class="row no-gutters">
							<div class="col-lg-4 card-img-holder">
								<img src="<?php the_post_thumbnail_url() ?>" class="card-img" alt="image">
							</div>
							<div class="col-lg-8">
								<div class="card-body">
									<h5 class="card-title"><a href="<?php the_permalink()?>" class="theme-link"><?php the_title(); ?></a></h5>
									<p class="card-text"><?php echo $intro; ?></p>
									<p class="card-text"><small class="text-muted">Client: <?php echo $client; ?></small></p>
								</div>
							</div>
						</div>
						<div class="link-mask">
							<a class="link-mask-link" href="<?php the_permalink()?>"></a>
							<div class="link-mask-text">
								<a class="btn btn-secondary" href="<?php the_permalink()?>">
									<i class="fas fa-eye mr-2"></i>View Case Study
								</a>
							</div>
						</div>
						<!--//link-mask-->
					</div>
					<!--//card-->
				</div>
			<?php endif; ?>
	<?php endwhile;
	else : endif; ?>
</div>