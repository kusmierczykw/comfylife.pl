<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 01.02.19
 * Time: 11:59
 */
?>
<?php get_template_part('layout/header'); ?>
<section class="container-fluid">
    <div class="row">
        <div class="col-xl-12 p-0">
            <?php get_template_part('components/visualizations-slider') ?>
        </div>
    </div>
</section>

<section class="container">
    <div class="row about-us">
        <div class="col-xl-12 py-6">
            <!-- Skecja z krótkim opisem -->
            <div class="about-us__description">
                <p>
                    Jesteśmy absolwentkami Wydziału Architektury na Politechnice Lubelskiej i to właśnie tam rozpoczęła
                    się nasza przyjaźń.<br/>
                    To dzięki niej idealnie się uzupełniamy, a nasza wspólna pasja stała się sposobem na życie. Jesteśmy
                    zespołem, który skupia się na realizacji indywidualnych potrzeb, tworząć komfortowe i
                    niepowtarzalne wnętrza.
                </p>
            </div>
        </div>

        <div class="col-xl-12">
            <!-- Sekcja ze zdjęciami oraz podpisami -->
            <div class="row about-us__photos align-items-start">
                <div class="col-xl-3 col-lg-3 col-md-6 about-us__single-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_05.jpg"/>
                    <div class="about-us__signature">Zuzanna Kożuch</div>
                </div>

                <div class="col-xl-6 col-lg-6 about-us__single-photo d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_07.jpg"/>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 about-us__single-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_09.jpg"/>
                    <div class="about-us__signature">Agata Jankowska</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row opinion">
        <div class="col-xl-8 col-lg-12 offset-xl-2 py-5">
            <?php get_template_part('components/opinion-carousel'); ?>
        </div>
    </div>
</section>

<section class="container">
    <div class="row offer">
        <div class="col-xl-12">
            <div class="offer__description py-5">
                <p>
                    Aby sprostać oczekiwaniom naszych klientów, przygotowałyśmy 3 pakiety naszych usług, ale jeśli
                    oczekujesz czegoś innego, to nie ma problemu - przygotujemy dla Ciebie ofertę indywidualną.
                </p>
            </div>
        </div>

        <div class="col-xl-12 py-5">
            <?php get_template_part('components/offer-packages'); ?>
        </div>
    </div>
</section>

<section class="container">
    <div class="row realization">
        <div class="col-xl-12 py-5">
            <?php get_template_part('components/realizations'); ?>
        </div>
    </div>
</section>

<section class="container-fluid contact-section">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-lg-6 contact-form">
                <form class="contact-form__container">
                    <div class="form-group row align-items-center">
                        <div class="col-lg-12 px-0">
                            <label for="username" class="form-control-label">Imię i nazwisko</label>
                            <input class="form-control mb-3 py-3" type="text" id="username">
                        </div>

                        <div class="col-lg-12 px-0">
                            <label for="email" class="form-control-label">Adres e-mail</label>
                            <input class="form-control mb-3 py-3" type="text" id="email">
                        </div>

                        <div class="col-lg-12 px-0">
                            <label for="message" class="form-control-label">Treść wiadomości</label>
                            <textarea class="form-control mb-3 py-3" id="message" rows="3" type="text"></textarea>
                        </div>

                        <div class="col-lg-12 px-0 contact-form__privacy-policy">
                            <input type="checkbox" id="privacy-policy">
                            <label for="privacy-policy" class="privacy-policy-label">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida erat
                                condimentum ante aliquet efficitur. Nunc tincidunt nisi facilisis, congue tortor
                                commodo, pretium quam. Ut ut sem augue.
                            </label>

                        </div>

                        <div class="col-lg-12 px-0 text-right">
                            <button type="submit" class="btn btn-primary py-3 px-5 mt-3">Wyślij</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5 offset-lg-1 contact-info">
                <address class="p-3">
                    <div class="contact-info__item">
                        <i class="fa fa-phone"></i>721-049-249 (Agata)</div>

                    <div class="contact-info__item">
                        <i class="fa fa-phone"></i>512-574-089 (Zuzanna)</div>

                    <div class="contact-info__item">
                        <i class="fa fa-at"></i>
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

<?php get_template_part('components/newsletter'); ?>
<?php get_template_part('layout/footer'); ?>
