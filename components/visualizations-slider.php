<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 09.02.19
 * Time: 16:29
 */
?>

<div class="owl-carousel owl-theme visualization-slider">
    <?php $args = array(
        'post_type' => 'comfy-visualization',
        'posts_per_page' => -1,
    );
    $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="visualization-slider__item">
                <?php $thumbnail = get_the_post_thumbnail_url(); ?>
                <?php if ($thumbnail): ?>
                    <img src="<?php echo $thumbnail; ?>" alt="<?php echo get_the_title(); ?>"/>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/samples/sample_image.jpg"
                         alt="<?php echo get_the_title(); ?>"/>
                <?php endif; ?>
            </div>
        <?php
        endwhile;
    endif;
    ?>
    <?php wp_reset_query(); ?>
</div>

<script>
    $('.visualization-slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
        center: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
    });
</script>
