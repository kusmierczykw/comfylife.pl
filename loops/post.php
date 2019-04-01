<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 05.03.19
 * Time: 21:45
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="card mb-5 post">
        <div class="row no-gutters">
            <div class="col-md-12">
                <?php if (!!get_the_post_thumbnail_url(null, 'large')): ?>
                    <img src="<?php echo get_the_post_thumbnail_url(null, 'large') ?>" class="card-img post__image"
                         alt="<?php echo get_the_title(); ?>">
                <?php endif; ?>
            </div>

            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title">
                        <div class="post__title">
                            <?php echo get_the_title(); ?>
                        </div>
                    </h5>
                    <p class="card-text">
                        <small class="text-muted post__date">
                            <?php echo get_the_date('d/m/Y'); ?>
                        </small>
                    </p>
                    <p class="card-text">
                    <div class="post__excerpt">
                        <?php echo get_the_excerpt(); ?>
                    </div>
                    </p>
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
<?php endwhile; ?>
<?php else: ?>
    <p>Brak postów do wyświetlenia. . .</p>
<?php endif; ?>
