<section class="blog-list px-3 py-5 p-md-5">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-md-4 mb-3">
                        <div class="card blog-post-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink() ?>"><img class="card-img-top" src="<?php the_post_thumbnail_url("") ?>" alt="<?php the_title(); ?>"></a>
                            <?php endif; ?>

                            <div class="card-body">
                                <h5 class="card-title"><a class="theme-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <?php echo '<p class="card-text">' . get_the_excerpt() . '</p>'; ?>
                                <p class="mb-0"><a href="<?php the_permalink() ?>" class="more-link">Read More &rarr;</a></p>
                            </div>
                            <div class="card-footer">
								<small class="text-muted">Published <?php echo get_the_date();?></small>
							</div>
                        </div>
                        <!--//card-->
                    </div>
                    <!--//col-->
            <?php endwhile;
            else : endif; ?>
        </div>
        <!--//row-->

        <nav class="blog-nav nav nav-justified my-5">
        <?php
            the_posts_pagination()
        ?>
        </nav>

    </div>
</section>