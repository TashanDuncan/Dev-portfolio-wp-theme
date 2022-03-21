<?php
// the query
$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
));
?>

<div class="row">
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-md-4 mb-5">
                <div class="card blog-post-card">
                <?php if(has_post_thumbnail()):?>
                    <a href="<?php the_permalink()?>"><img class="card-img-top" src="<?php the_post_thumbnail_url("")?>" alt="<?php the_title()?>"></a>
                    <?php endif;?>    
                    <div class="card-body">
                        <h5 class="card-title"><a class="theme-link" href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                        <p class="card-text"><?php the_excerpt()?></p>
                        <p class="mb-0"><a class="more-link" href="<?php the_permalink();?>">Read more &rarr;</a></p>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Published <?php echo get_the_date();?></small>
                    </div>
                </div>
                <!--//card-->
            </div>

    <?php endwhile;
    else : endif; ?>
</div>