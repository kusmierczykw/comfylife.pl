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
                        <p>Zobacz jak wygląda przykładowa dokumentacja projektowa</p>
                    </div>


                    <form action="https://comfy-life.us20.list-manage.com/subscribe/post?u=cc97d06eeed9ba40763978ddd&amp;id=16b65637e8"
                          method="post"
                          id="mc-embedded-subscribe-form"
                          name="mc-embedded-subscribe-form"
                          class="validate newsletter__form mt-5"
                          target="_blank"
                          novalidate>
                        <div id="mc_embed_signup_scroll">
                            <div class="form-group m-0">
                                <label for="mce-LNAME" class="form-control-label">Twój email</label>
                                <input type="text"
                                       value=""
                                       placeholder="Imię i nazwisko"
                                       name="LNAME" class="form-control required" id="mce-LNAME"/>
                            </div>

                            <div class="form-group m-0 mt-3">
                                <label for="mce-EMAIL" class="form-control-label">Twoje imię</label>
                                <input type="email" value=""
                                       placeholder="Adres e-mail"
                                       name="EMAIL" class="form-control mt-3 mt-lg-0 required email" id="mce-EMAIL"/>
                            </div>

                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text"
                                       name="b_cc97d06eeed9ba40763978ddd_16b65637e8"
                                       tabindex="-1" value=""/>
                            </div>

                            <input type="submit"
                                   id="mc-embedded-subscribe"
                                   value="Zapisz się"
                                   name="subscribe"
                                   class="button btn btn-primary form-control-lg ml-auto mt-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/newsletter.js?v=<?php echo current_time('timestamp', 0); ?>"></script>
