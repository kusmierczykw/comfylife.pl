<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 06.02.19
 * Time: 20:49
 */
?>

<div class="owl-carousel owl-theme opinion__carousel">
    <div class="opinion__item">
        <div class="opinion__description">
            Lekko, świeżo i bardzo na czasie! Comfy Life upiękni każde wnętrze! :)
        </div>

        <div class="opinion__user-name">
            Ewa Piperzny
        </div>
    </div>

    <div class="opinion__item">
        <div class="opinion__description">
            Lekko, świeżo i bardzo na czasie! Comfy Life upiękni każde wnętrze! :)
        </div>

        <div class="opinion__user-name"></div>
    </div>

    <div class="opinion__item">
        <div class="opinion__description">
            Lekko, świeżo i bardzo na czasie! Comfy Life upiękni każde wnętrze! :)
        </div>

        <div class="opinion__user-name"></div>
    </div>
</div>

<script>
    $('.opinion__carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        center: true,
    });
</script>
