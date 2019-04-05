<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 05.04.19
 * Time: 20:54
 */
?>

<div class="search-bar close p-4" id="search-bar">
    <button class="btn search-bar__close-button" id="search-bar-button-close">
        <i class="fas fa-times"></i>
    </button>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 d-flex align-items-center flex-column justify-content-center pb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-inversed.png"
                     alt="Comfy Life Logo"
                     class="search-bar__logo mb-3"/>
                <h1 class="mb-0 search-bar__title">Comfy-Life</h1>
            </div>

            <div class="col-xl-5 col-lg-8 mx-auto">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control"
                               id="search"
                               placeholder="Szukaj">
                        <button type="submit" class="btn text-center search-bar__submit-button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/search-bar.js"></script>
