<?php
// the query
$query = new WP_Query(array(
    'post_type' => 'testimonials',
    'posts_per_page' => 6,
));
?>
<div class="testiomonial-carousel-container">
    <div class="testimonial-carousel  tiny-slider">
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                <?php
                $jobTitle = get_field('job_title');
                $clientPhoto = get_field('client_photo');
                $company = get_field('company');
                ?>
                <div class="item">
                    <div class="item-inner">
                        <div class="quote-holder">
                            <blockquote class="quote-content">
                                <?php the_content() ?>
                            </blockquote>
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <!--//quote-holder-->
                        <div class="source-holder">
                            <div class="source-profile">
                            <?php if ($clientPhoto) : ?>
                                <img src="<?php echo $clientPhoto ?>" alt="client photo" />
                            <?php endif;?>
                            </div>
                            <div class="meta">
                                <div class="name"><?php the_title() ?></div>
                                <div class="info"><?php echo $jobTitle ?><?php if ($company) : ?>, <?php echo $company ?> <?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <!--//item-inner-->
                </div>
                <!--//item-->


        <?php endwhile;
        else : endif; ?>
    </div>
</div>