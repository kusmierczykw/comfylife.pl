<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 04.02.19
 * Time: 21:16
 */
?>

<div class="newsletter" id="newsletter">
    <div class="newsletter__background">
        <div class="image-1 d-none d-xl-block"></div>
        <div class="image-2"></div>
    </div>

    <button class="btn btn-link newsletter--close">
        <i class="fas fa-times"></i>
    </button>

    <div class="row h-100">
        <div class="col-xl-3 col-lg-6 col-md-7 col-sm-8 col-xs-10 m-auto">
            <div class="newsletter__container">
                <div class="newsletter__content">
                    <div class="newsletter__label">
                        <h2>Zapisz się do newslettera</h2>
                        <p>Bądź na bieżąco z naszymi realizacjami</p>
                    </div>

                    <form class="newsletter__form mt-5">
                        <div class="form-group m-0">
                            <label for="newsletterEmail" class="form-control-label">Twój email</label>
                            <input type="email" id="newsletterEmail" class="form-control">
                        </div>

                        <div class="form-group m-0 mt-3">
                            <label for="newsletterName" class="form-control-label">Twoje imię</label>
                            <input type="text" id="newsletterName" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary form-control-lg ml-auto mt-4">Zapisz się</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/newsletter.js?v=<?php echo current_time('timestamp', 0); ?>"></script>
