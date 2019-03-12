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

<section class="container">
    <div class="row">
        <div class="col-xl-12 pb-5">
            <?php get_template_part('layout/newsletter-section'); ?>
        </div>
    </div>
</section>

<?php get_template_part('components/newsletter'); ?>
<?php get_template_part('layout/footer'); ?>
