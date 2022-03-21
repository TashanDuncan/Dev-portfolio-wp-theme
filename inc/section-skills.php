<?php
// the query
$query = new WP_Query(array(
    'post_type' => 'skills',
    'posts_per_page' => 8,
));
?>
<div class="row">
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

            <?php $logo = get_field('skill_logo');

            switch ($logo) {
                case 'htmlandcss':
                    $faLogo = '<i class="fab fa-html5 mr-2"></i><i class="fab fa-css3-alt"></i>';
                    break;
                case 'javascript':
                    $faLogo = '<i class="fab fa-js-square"></i>';
                    break;
                case 'php':
                    $faLogo = '<i class="fab fa-php"></i>';
                    break;
                case 'laravel':
                    $faLogo = '<i class="fab fa-laravel"></i>';
                    break;
                case 'wordpress':
                    $faLogo = '<i class="fab fa-wordpress"></i>';
                    break;
                case 'sql':
                    $faLogo = '<i class="fa fa-database"></i>';
                    break;
                case 'linux':
                    $faLogo = '<i class="fab fa-linux"></i>';
                    break;
                case 'sass':
                    $faLogo = '<i class="fab fa-sass"></i>';
                    break;
                case 'react':
                    $faLogo = '<i class="fab fa-react"></i>';
                    break;
                default:
                    $faLogo = null;
            }

            ?>

            <div class="item col-6 col-lg-3">
                <div class="item-inner">
                    <div class="item-icon"><?php echo $faLogo ?></div>
                    <h3 class="item-title"><?php the_title(); ?></h3>
                    <div class="item-desc"><?php the_content() ?></div>
                </div>
                <!--//item-inner-->
            </div>
            <!--//item-->


    <?php endwhile;
    else : endif; ?>
</div>