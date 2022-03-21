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
        $testimonials = get_field('testimonials')
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
                            <div class="client-bio mb-4">Short description of the client and project requirements. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</div>
                            <h4 class="subheading mb-3">Project Requirements</h4>
                            <ul class="mb-0">
                                <li class="mb-2">Requirement lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                <li class="mb-2">Requirement donec pede justo, fringilla vel, aliquet nec.</li>
                                <li class="mb-2">Requirement phasellus ullamcorper ipsum rutrum nunc. </li>
                            </ul>
                        </div>
                    </div>
                    <!--//media-body-->
                </div>
                <!--//project-meta-->
                <div class="project-sections py-5">
                    <div class="project-section mb-5">
                        <h3 class="project-section-title mb-3">Project Overview</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. </p>
                    </div>
                    <!--//project-section-->

                    <div class="project-section mb-5">
                        <h3 class="project-section-title">The Challenge</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. </p>

                    </div>
                    <!--//project-section-->

                    <div class="project-section mb-5">
                        <h3 class="project-section-title">The Approach &amp; Solution</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. </p>
                        <div class="row mt-5">
                            <div class="col-12 col-lg-6 mb-5">
                                <img class="img-fluid rounded" src="assets/images/project/project-figure-1.jpg" alt="image">
                            </div>
                            <div class="col-12 col-lg-6 mb-5">
                                <img class="img-fluid rounded" src="assets/images/project/project-figure-2.jpg" alt="image">
                            </div>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. </p>

                    </div>
                    <!--//project-section-->

                    <div class="project-section mb-5">
                        <h3 class="project-section-title mb-3">The Results</h3>

                        <div class="metrics mb-4">
                            <div class="row">
                                <div class="metric col-6 col-xl-3 mb-3">
                                    <div class="inner p-3 theme-bg-light">
                                        <div class="metric-name">Efficiency</div>
                                        <div class="metric-data mb-2">20% <span class="unit">up</span></div>
                                        <div class="metric-desc">Metric description lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>
                                <!--//metric-->
                                <div class="metric col-6 col-xl-3 mb-3">
                                    <div class="inner p-3 theme-bg-light">
                                        <div class="metric-name">Customer Satisfaction</div>
                                        <div class="metric-data mb-2">14% <span class="unit">up</span></div>
                                        <div class="metric-desc">Metric description lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>
                                <!--//metric-->
                                <div class="metric col-6 col-xl-3 mb-3">
                                    <div class="inner p-3 theme-bg-light">
                                        <div class="metric-name">Sales Generated</div>
                                        <div class="metric-data mb-2">$130K</div>
                                        <div class="metric-desc">Metric description lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>
                                <!--//metric-->
                                <div class="metric col-6 col-xl-3 mb-3">
                                    <div class="inner p-3 theme-bg-light">
                                        <div class="metric-name">Overall Cost</div>
                                        <div class="metric-data mb-2">20% <span class="unit">down</span></div>
                                        <div class="metric-desc">Metric description lorem ipsum dolor sit amet.</div>
                                    </div>
                                </div>
                                <!--//metric-->
                            </div>
                            <!--//row-->
                        </div>
                        <!--//metrics-->

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. </p>

                    </div>
                    <!--//project-section-->

                    <?php if ($testimonials) : ?>
                        <?php foreach ($testimonials as $testimonial) : ?>
                            
                            <?php $clientPhoto = get_field('client_photo',$testimonial->ID) ?>
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
                                            <img src="<?php echo $clientPhoto ?>" alt="client photo" style="border-radius: 50%;"/>
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


<?php endwhile;
else : endif; ?>