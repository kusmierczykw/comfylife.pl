<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 06.04.19
 * Time: 20:55
 */
?>
<div class="search-bar container-fluid" id="search-bar">
    <button class="btn search-bar__close-button" id="search-bar-button-close">
        <i class="fas fa-times"></i>
    </button>

    <div class="row py-5 px-4">
        <div class="col-xl-12 d-flex align-items-center flex-column justify-content-center pb-4 pt-5">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-inversed.png"
                 alt="Comfy Life Logo"
                 class="search-bar__logo mb-3"/>
            <h1 class="mb-0 search-bar__title">Comfy-Life</h1>
        </div>

        <div class="col-xl-5 col-lg-8 mx-auto">
            <?php get_template_part('components/search-form'); ?>
        </div>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/search-bar.js"></script>
