<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 09.02.19
 * Time: 16:29
 */
?>

<div class="owl-carousel owl-theme visualization-slider">
    <?php $count = 7; ?>

    <?php for($i = 1; $i <= $count; $i++): ?>
        <div class="visualization-slider__item">
            <img src="<?php echo get_template_directory_uri();?>/images/slider/<?php echo $i; ?>.jpg" />
        </div>
    <?php endfor; ?>
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
