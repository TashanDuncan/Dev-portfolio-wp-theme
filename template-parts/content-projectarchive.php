<section class="projects-list px-3 py-5 p-md-5">
    <div class="container">
        <div class="text-center">
            <ul id="filters" class="filters mb-5 mx-auto pl-0">
                <li class="type  active mb-3 mb-lg-0" data-filter=".featured">Featured<i class="fa fa-solid fa-star ml-1"></i></li>
                <li class="type  mb-3 mb-lg-0" data-filter="*">All</li>
                <li class="type  mb-3 mb-lg-0" data-filter=".fullstack">Fullstack</li>
                <li class="type  mb-3 mb-lg-0" data-filter=".frontend">Frontend</li>
                <li class="type  mb-3 mb-lg-0" data-filter=".backend">Backend</li>
            </ul>
            <!--//filters-->
        </div>
        <div class="project-cards row isotope">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php
                    $intro = get_field('project_intro');
                    $client = get_field('client_name');
                    $types = get_field('type');
                    $featured = get_field('featured');
                    ?>

                    <div class="isotope-item col-md-6 mb-5 
                    <?php if ($featured) : ?>
                        <?php echo 'featured' ?>
                    <?php endif; ?>
                    <?php foreach ($types as $type) : ?>
                        <?php echo $type . ' '; ?>
                        <?php endforeach; ?>
                    ">
                        <div class="card project-card">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-img-holder">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url() ?>" class="card-img" alt="image">
                                    <?php endif; ?>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="<?php the_permalink(); ?>" class="theme-link"><?php the_title(); ?></a></h5>
                                        <p class="card-text"><?php echo $intro; ?></p>
                                        <p class="card-text"><small class="text-muted">Client: <?php echo $client; ?></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="link-mask">
                                <a class="link-mask-link" href="project.html"></a>
                                <div class="link-mask-text">
                                    <a class="btn btn-secondary" href="<?php the_permalink(); ?>">
                                        <i class="fas fa-eye mr-2"></i>View Case Study
                                    </a>
                                </div>
                            </div>
                            <!--//link-mask-->
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->

            <?php endwhile;
            else : endif; ?>
        </div>