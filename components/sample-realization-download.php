<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 02.04.19
 * Time: 21:07
 */
?>
<div class="sample-realization-download p-4">
    <div class="sample-realization-download__image">
        <img src="<?php echo get_template_directory_uri() ?>/images/contact.jpg"
             alt="Przykładowa realizacja">
    </div>

    <div class="sample-realization-download__content">
        <p class="py-3 sample-realization-download__label">Zapisz się do newslettera i pobierz przykładową <a href="<?php echo get_site_url(); ?>/portfolio" class="sample-realization-download__label-link">realizację.</a></p>
        <div class="text-left">
            <a href="<?php echo get_site_url(); ?>/portfolio" class="btn btn-secondary py-3 text-uppercase">
                Pobierz teraz
            </a>
        </div>
    </div>
</div>
