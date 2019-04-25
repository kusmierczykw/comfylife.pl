<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 01.02.19
 * Time: 11:59
 */
?>
<?php get_template_part('layout/header'); ?>
<section class="container-fluid" id="strona-glowna">
    <div class="row">
        <div class="col-xl-12 p-0">
            <?php get_template_part('components/visualizations-slider') ?>
        </div>
    </div>
</section>

<section class="container" id="o-nas">
    <div class="row about-us pt-5">
        <div class="col-xl-12 pt-5">
            <!-- Skecja z krótkim opisem -->
            <div class="about-us__description">
                <p>
                    <?php
                    $value = get_field('about-us-section');
                    if ($value) {
                        echo $value;
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>

    <div class="row about-us pt-5 pb-5`">
        <div class="col-xl-12 pt-5 pb-4">
            <!-- Sekcja ze zdjęciami oraz podpisami -->
            <div class="row about-us__photos align-items-start">
                <div class="col-xl col-lg-3 col-sm-6 about-us__single-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_05.jpg"/>
                    <div class="about-us__signature">Zuzanna Kożuch</div>
                </div>

                <div class="col-xl-5 col-lg-6 about-us__single-photo d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_07.jpg"/>
                </div>

                <div class="col-xl col-lg-3 col-sm-6 about-us__single-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_09.jpg"/>
                    <div class="about-us__signature">Agata Jankowska</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row opinion pt-5 pb-5">
        <div class="col-md-12 pt-5 text-center">
            <h2> Zobacz co mówią o nas klienci:</h2>
        </div>

        <div class="col-xl-10 col-lg-12 offset-xl-1 pt-5 pb-4">
            <?php get_template_part('components/opinion-carousel'); ?>
        </div>
    </div>
</section>

<section class="container" id="oferta">
    <div class="row offer pt-5 pb-5">
        <div class="col-xl-12 pt-5 pb-5">
            <div class="offer__description">
                <p>
                    <?php
                    $value = get_field('offer-section');
                    if ($value) {
                        echo $value;
                    }
                    ?>
                </p>
            </div>
        </div>

        <div class="col-xl-12 pt-5">
            <?php get_template_part('components/offer-packages'); ?>
        </div>
    </div>
</section>

<section class="container" id="portfolio">
    <div class="row pt-5">
        <div class="col-xl-12 pt-5">
            <?php get_template_part('components/realizations'); ?>
        </div>

        <div class="col-xl-4 col-lg-6 ml-auto pt-2">
            <a href="<?php echo get_site_url(); ?>/portfolio" class="btn btn-primary py-3 text-uppercase w-100">
                Zobacz więcej realizacji
            </a>
        </div>
    </div>
</section>

<section class="container">
    <div class="row py-5">
        <div class="col-xl-12">
            <hr/>
        </div>
        <div class="col-xl-12">
            <?php get_template_part('components/newsletter-bar'); ?>
        </div>
    </div>
</section>

<section class="container-fluid contact-section" id="kontakt">
    <div class="container h-100 px-0">
        <div class="row align-items-center h-100 py-5 p-lg-5">
            <div class="col-lg-6 contact-form order-2 order-lg-0 py-5">
                <?php echo do_shortcode('[contact-form-7 id="58" title="Kontakt - zakładka" html_class="contact-form__container"]') ?>
            </div>

            <div class="col-lg-5 offset-lg-1 contact-info order-1 pt-5 py-lg-5">
                <address class="p-3">
                    <div class="contact-info__item">
                        <i class="fa fa-phone"></i>721-049-249 (Agata)
                    </div>

                    <div class="contact-info__item">
                        <i class="fa fa-phone"></i>512-574-089 (Zuzanna)
                    </div>

                    <div class="contact-info__item">
                        <i class="far fa-envelope-open"></i>
                        <a href="mailto:kontakt@comfy-life.pl"
                           target="_blank">kontakt@comfy-life.pl</a></div>

                    <div class="contact-info__item">
                        <i class="fab fa-facebook"></i>
                        <a href="https://www.facebook.com/comfylifedesign/"
                           target="_blank">comfylifedesign</a></div>

                    <div class="contact-info__item">
                        <i class="fab fa-instagram"></i>
                        <a href="https://www.instagram.com/comfylife_design/"
                           target="_blank">comfylife_design</a></div>
                </address>
            </div>
        </div>
    </div>
</section>

<!--<section class="container short-contact">-->
<!--    <div class="row">-->
<!--        <div class="col-xl-12">-->
<!--            <hr/>-->
<!--        </div>-->
<!--        <div class="col-xl-12">-->
<!--            --><?php //get_template_part('components/short-contact-info'); ?>
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!--<section class="container short-contact-form" id="kontakt">-->
<!--    <div class="row">-->
<!--        <div class="col-xl-12">-->
<!--            <hr/>-->
<!--        </div>-->
<!--        <div class="col-xl-12 pb-5">-->
<!--            --><?php //get_template_part('components/short-contact-form'); ?>
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<?php get_template_part('components/newsletter'); ?>
<?php get_template_part('layout/footer-contact'); ?>
