<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 12.03.19
 * Time: 21:29
 */
?>
<?php get_template_part('layout/header'); ?>
<?php if (have_posts()):
    while (have_posts()): the_post();
        ?>
        <section class="container-fluid page-title">
            <?php $thumbnail = get_the_post_thumbnail_url(null, 'large'); ?>
            <?php if ($thumbnail): ?>
                <img src="<?php echo $thumbnail; ?>"
                     alt="<?php echo get_the_title(); ?>"
                     class="page-title__background"/>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer/background.jpg"
                     class="page-title__background"
                     alt="">
            <?php endif; ?>

            <div class="row align-items-center h-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 page-title__header">
                            <h1> <?php echo get_the_title(); ?> </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container h-100 px-0">
            <div class="row align-items-center h-100 px-5">
                <div class="col-lg-12 offset-lg-1 contact-info order-1 pt-5 text-justify">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile;
endif;
?>
<?php get_template_part('layout/footer-contact'); ?>
