<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 09.02.19
 * Time: 16:29
 */
?>

<div class="owl-carousel owl-theme visualization-slider">
    <div class="visualization-slider__item">
        <img src="<?php echo get_template_directory_uri();?>/images/slider/slider_3.jpg" />
    </div>

    <div class="visualization-slider__item">
        <img src="<?php echo get_template_directory_uri();?>/images/slider/slider_2.jpg" />
    </div>

    <div class="visualization-slider__item">
        <img src="<?php echo get_template_directory_uri();?>/images/slider/slider_4.jpg" />
    </div>

    <div class="visualization-slider__item">
        <img src="<?php echo get_template_directory_uri();?>/images/slider/slider_5.jpg" />
    </div>

    <div class="visualization-slider__item">
        <img src="<?php echo get_template_directory_uri();?>/images/slider/slider_1.jpg" />
    </div>
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
