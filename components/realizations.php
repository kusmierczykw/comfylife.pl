<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 09.02.19
 * Time: 14:36
 */
?>

<div class="row realizations" id="realizations">
    <div class="col-xl-4 col-lg-3 col-md-4 col-6 realization__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_19.jpg"/>
        <div class="realization__item-wrapper d-none d-xl-flex">
            <div class="realization__item-title text-center">Przykład 1</div>
            <div class="realization__item-description text-center">Kliknij, aby zobaczyć realizacje
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-3 col-md-4 col-6 realization__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_21.jpg"/>
        <div class="realization__item-wrapper d-none d-xl-flex">
            <div class="realization__item-title text-center">Przykład 2</div>
            <div class="realization__item-description text-center">Kliknij, aby zobaczyć realizacje
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-3 col-md-4 col-6 realization__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_24.jpg"/>
        <div class="realization__item-wrapper d-none d-xl-flex">
            <div class="realization__item-title text-center">Przykład 3</div>
            <div class="realization__item-description text-center">Kliknij, aby zobaczyć realizacje
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-3 col-md-4 col-6 realization__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_24.jpg"/>
        <div class="realization__item-wrapper d-none d-xl-flex">
            <div class="realization__item-title text-center">Przykład 4</div>
            <div class="realization__item-description text-center">Kliknij, aby zobaczyć realizacje
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-3 col-md-4 col-6 realization__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_24.jpg"/>
        <div class="realization__item-wrapper d-none d-xl-flex">
            <div class="realization__item-title text-center">Przykład 5</div>
            <div class="realization__item-description text-center">Kliknij, aby zobaczyć realizacje
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-3 col-md-4 col-6 realization__item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_24.jpg"/>
        <div class="realization__item-wrapper d-none d-xl-flex">
            <div class="realization__item-title text-center">Przykład 6</div>
            <div class="realization__item-description text-center">Kliknij, aby zobaczyć realizacje
            </div>
        </div>
    </div>
</div>

<?php get_template_part('plugins/photoswipe') ?>
<script>
    const REALIZATIONS_ID = 'realizations';
    const SINGLE_REALIZATION_SELECTOR = '.realization__item';
    const realizationHandler = document.getElementById(REALIZATIONS_ID);
    const items = realizationHandler.querySelectorAll(SINGLE_REALIZATION_SELECTOR);

    items.forEach((element) => {
        element.addEventListener('click', () => {
            var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, photos, options);
            gallery.init();
        });
    });

    var pswpElement = document.querySelectorAll('.pswp')[0];
    var photos = [
        {
            src: 'https://placekitten.com/600/400',
            w: 600,
            h: 400
        },
        {
            src: 'https://placekitten.com/1200/900',
            w: 1200,
            h: 900
        }
    ];

    var options = {
        index: 0,
        closeOnScroll: false,
    };


</script>
