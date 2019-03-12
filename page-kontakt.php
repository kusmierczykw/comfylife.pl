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

                        <div class="col-lg-12 px-0 privacy-policy">
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
                        <i class="fa fa-phone"></i>721-049-249 (Agata)
                    </div>

                    <div class="contact-info__item">
                        <i class="fa fa-phone"></i>512-574-089 (Zuzanna)
                    </div>

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
<?php get_template_part('layout/footer'); ?>
