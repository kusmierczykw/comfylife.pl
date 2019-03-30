<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 12.03.19
 * Time: 21:29
 */
?>
<?php get_template_part('layout/header'); ?>
<section class="container-fluid contact-section">
    <div class="container h-100 p-0">
        <div class="row align-items-center h-100">
            <div class="col-lg-6 contact-form">
                <?php echo do_shortcode('[contact-form-7 id="98" title="Kontakt - zakładka" html_class="contact-form__container"]') ?>
            </div>

            <div class="col-lg-5 offset-lg-1 contact-info">
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
<?php get_template_part('layout/footer-contact'); ?>
