<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 27.03.19
 * Time: 22:41
 */
?>
<div class="row">
    <div class="col-md-12">
        <h2>Skontaktuj się</h2>
    </div>
    <div class="col-lg-12 px-0">
        <form class="contact-form__container">
            <div class="form-group row align-items-start">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="username" class="form-control-label">Imię i nazwisko</label>
                            <input class="form-control mb-3 py-3" type="text" id="username">
                        </div>

                        <div class="col-lg-12">
                            <label for="email" class="form-control-label">Adres e-mail</label>
                            <input class="form-control mb-3 py-3" type="text" id="email">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="message" class="form-control-label">Treść wiadomości</label>
                            <textarea class="form-control mb-3 py-3" id="message" rows="3" type="text"></textarea>
                        </div>

                        <div class="col-lg-12 privacy-policy">
                            <input type="checkbox" id="privacy-policy">
                            <label for="privacy-policy" class="privacy-policy-label">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida erat
                                condimentum ante aliquet efficitur. Nunc tincidunt nisi facilisis, congue tortor
                                commodo, pretium quam. Ut ut sem augue.
                            </label>
                        </div>

                        <div class="col-lg-12 text-right">
                            <button type="submit" class="btn btn-primary py-3 px-5 mt-3 w-100">Wyślij</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
