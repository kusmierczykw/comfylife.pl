<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 05.03.19
 * Time: 21:45
 */
?>

<?php if (have_posts()) : while (have_posts()) :
    the_post(); ?>
    <div class="card post">
        <div class="row align-items-center no-gutters">
            <div class="col-lg-12 col-xl-5">
                <?php if (!!get_the_post_thumbnail_url(null, 'large')): ?>
                    <a href="<?php echo get_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(null, 'large') ?>" class="card-img post__image"
                             alt="<?php echo get_the_title(); ?>">
                    </a>
                <?php endif; ?>
            </div>

            <div class="col-lg-12 col-xl-7">
                <div class="card-body">
                    <h5 class="card-title">
                        <span class="post__title">
                            <a href="<?php echo get_permalink(); ?>">
                                <?php echo get_the_title(); ?>
                            </a>
                        </span>
                    </h5>
                    <p class="card-text">
                        <small class="text-muted post__date">
                            <?php echo get_the_date('d/m/Y'); ?>
                        </small>
                    </p>
                    <div class="card-text">
                        <div class="post__excerpt">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="card-footer">
                    <span class="post__url right">
                        <a href="<?php echo get_permalink(); ?>">
                            Czytaj więcej <i class="fa fas fa-chevron-right"></i>
                        </a>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5"/>
<?php endwhile; ?>
<?php else: ?>
    <p>Brak postów do wyświetlenia. . .</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
