<article class="blog-post px-3 py-5 p-md-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="container single-col-max-width">
                <header class="blog-post-header">
                    <h2 class="title mb-2"><?php the_title(); ?></h2>
                    <div class="meta mb-3"><span class="date">Published <?php echo get_the_date(); ?></span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
                </header>
                <div class="blog-post-body">
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="img-fluid mb-4" src="<?php the_post_thumbnail_url("") ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </div>
                <?php the_content();?>
                <?php comments_template(); ?>
        <?php endwhile;
    else : endif; ?>

</article>