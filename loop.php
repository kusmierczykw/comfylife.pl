<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 05.03.19
 * Time: 21:45
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="card mb-6 post">
        <div class="row no-gutters">
            <div class="col-md-12">
                <img src="<?php echo get_the_post_thumbnail_url(null, 'large') ?>" class="card-img post__image"
                     alt="<?php echo get_the_title(); ?>">
            </div>

            <div class="col-md-12">
                <div class="card-body">
                    <h4 class="card-title">
                        <span class="post__title">
                            <?php echo get_the_title(); ?>
                        </span>
                    </h4>
                    <p class="card-text">
                        <small class="text-muted post__date">
                            <?php echo get_the_date('d/m/Y'); ?>
                        </small>
                    </p>
                    <p class="card-text">
                        <span class="post__excerpt">
                            <?php echo get_the_excerpt(); ?>
                        </span>
                    </p>
                </div>
                <div class="card-footer">
                    <a href="<?php echo get_permalink(); ?>" class="post__url">
                        Czytaj więcej <i class="fa fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
