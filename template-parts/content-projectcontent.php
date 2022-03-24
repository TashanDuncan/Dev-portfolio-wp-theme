<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php

        $intro = get_field('project_intro');
        $industry = get_field('industry');
        $size = get_field('size');
        $website = get_field('website');
        $repo = get_field('repo');
        $short_desc = get_field('short_desc');
        $requirements = get_field('requirements');
        $overview = get_field('overview');
        $challenges = get_field('challenges');
        $approach = get_field('approach');
        $results = get_field('results');
        $img_1 = get_field('img_1');
        $img_2 = get_field('img_2');
        $testimonials = get_field('testimonials');
        $metrics = get_field('metrics');
        ?>

        <section class="cta-section theme-bg-light py-5">
            <div class="container single-col-max-width">
                <h2 class="heading text-center">Case Study: <?php the_title() ?></h2>
                <div class="project-intro text-center">
                    <p class="mb-0 lead">
                        <?php echo $intro ?>
                    </p>
                </div>

            </div>
            <!--//container-->
        </section>

        <section class="project px-3 py-5 p-md-5">
            <div class="container">
                <div class="project-meta media flex-column flex-md-row p-4 theme-bg-light">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php echo $website ?>" target="_blank"><img class="project-thumb mb-3 mb-md-0 mr-md-5 rounded d-none d-md-inline-block" src="<?php the_post_thumbnail_url() ?>" alt="Project"></a>
                    <?php endif; ?>

                    <div class="media-body">
                        <div class="client-info">
                            <h3 class="client-name font-weight-bold mb-4"><?php the_title() ?></h3>
                            <ul class="client-meta list-unstyled">
                                <?php if ($industry) : ?>
                                    <li class="mb-2"><i class="fas fa-industry fa-fw mr-2"></i><strong>Industry:</strong> <?php echo $industry ?></li>
                                <?php endif; ?>
                                <?php if ($size) : ?>
                                    <li class="mb-2"><i class="fas fa-users fa-fw mr-2"></i><strong>Size:</strong> <?php echo $size ?></li>
                                <?php endif; ?>
                                <?php if ($website) : ?>
                                    <li class="mb-2"><strong><i class="fas fa-link fa-fw mr-2"></i>Website:</strong> <a class="theme-link" href="<?php echo $website ?>" target="_blank"> <?php echo $website ?></a></li>
                                <?php endif; ?>
                                <?php if ($repo) : ?>
                                    <li class="mb-2"><strong><i class="fab fa-github fa-fw mr-2"></i>Repo:</strong> <a class="theme-link" href="<?php echo $repo ?>" target="_blank"> <?php echo $repo ?></a></li>
                                <?php endif; ?>

                            </ul>
                            <?php if ($short_desc) : ?>
                                <div class="client-bio mb-4"><?php echo $short_desc ?></div>
                            <?php endif; ?>
                            <?php if ($requirements) : ?>
                                <h4 class="subheading mb-3">Project Requirements</h4>
                                <?php ?>
                                <ul class="mb-0">
                                    <?php
                                    foreach ($requirements as $requirement) : ?>
                                        <li class="mb-2">
                                            <?php echo $requirement['req']; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--//media-body-->
                </div>
                <!--//project-meta-->
                <div class="project-sections py-5">
                    <div class="project-section mb-5">
                        <?php if ($overview) : ?>
                            <h3 class="project-section-title mb-3">Project Overview</h3>
                            <p><?php echo $overview ?> </p>
                    </div>
                    <!--//project-section-->
                <?php endif; ?>
                <?php if ($challenges) : ?>
                    <div class="project-section mb-5">
                        <h3 class="project-section-title">The Challenge</h3>
                        <p><?php echo $challenges ?> </p>

                    </div>
                    <!--//project-section-->
                <?php endif; ?>
                <div class="row mt-5">
                    <?php if ($img_1) : ?>
                        <div class="col-12 col-lg-6 mb-5">
                            <img class="img-fluid rounded" src="<?php echo $img_1 ?>" alt="image">
                        </div>
                    <?php endif; ?>
                    <?php if ($img_2) : ?>
                        <div class="col-12 col-lg-6 mb-5">
                            <img class="img-fluid rounded" src="<?php echo $img_2 ?>" alt="image">
                        </div>
                    <?php endif; ?>
                </div>
                <?php if ($approach) : ?>
                    <div class="project-section mb-5">
                        <h3 class="project-section-title">The Approach &amp; Solution</h3>
                        <p> <?php echo $approach ?></p>
                    </div>
                    <!--//project-section-->
                <?php endif; ?>
                <?php if ($results || $metrics) : ?>
                    <div class="project-section mb-5">
                        <h3 class="project-section-title mb-3">The Results</h3>

                        <div class="metrics mb-4">
                            <div class="row">
                                <?php foreach ($metrics as $metric) : ?>
                                    <div class="metric col-6 col-xl-3 mb-3">
                                        <div class="inner p-3 theme-bg-light">
                                            <div class="metric-name"><?php echo $metric['name'] ?></div>
                                            <div class="metric-data mb-2"><?php echo $metric['data'] ?>
                                                <?php if ($metric['unit']) : ?>
                                                    <span class="unit"><?php echo $metric['unit'] ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <?php if ($metric['description']) : ?>
                                                <div class="metric-desc"><?php echo $metric['description'] ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!--//metric-->
                                <?php endforeach; ?>
                                <div class="metric col-6 col-xl-3 mb-3">
                            </div>
                            <!--//row-->
                        </div>
                        <!--//metrics-->

                        <p><?php echo $results ?></p>

                    </div>
                    <!--//project-section-->
                <?php endif; ?>

                <?php if ($testimonials) : ?>
                    <?php foreach ($testimonials as $testimonial) : ?>

                        <?php $clientPhoto = get_field('client_photo', $testimonial->ID) ?>
                        <div class="project-section mb-5">
                            <h3 class="project-section-title mb-3">Client Testimonial</h3>
                        </div>
                        <!--//project-section-->
                        <div class="client-quote">
                            <div class="quote-holder">
                                <blockquote class="quote-content">

                                    <?php echo $testimonial->post_content ?>

                                </blockquote>
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <!--//quote-holder-->
                            <div class="source-holder">
                                <div class="source-profile">
                                    <?php if ($clientPhoto) : ?>
                                        <img src="<?php echo $clientPhoto ?>" alt="client photo" style="border-radius: 50%;" />
                                    <?php endif; ?>
                                </div>
                                <div class="meta">
                                    <div class="name"><?php echo $testimonial->post_title ?></div>
                                    <div class="info"><?php echo $testimonial->job_title ?><?php if ($testimonial->company) : ?>, <?php echo $testimonial->company ?> <?php endif; ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>
        </section>
        <section class=" theme-bg-light py-5 text-center">
		    <div class="container single-col-max-width">
			    <h2 class="title">Are you Currently looking for a Junior Developer?</h2>
			    <p>Click below to get in touch!</p>
                <div class="text-center"><a class="btn btn-primary" href="mailto:tay.duncan@hotmail.com" target="_blank" rel="noopener noreferrer"><i class="fas fa-paper-plane mr-2"></i>Contact Me</a></div>
		    </div><!--//container-->
	    </section><!--//promo-section-->


<?php endwhile;
else : endif; ?>