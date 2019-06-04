<div class="cookies">
    <div class="container">
        <div class="row align-items-center pt-2 pb-2">
            <div class="col-md-8 text-white d-flex align-items-center order-2 order-md-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cookies.png" class="img-fluid mr-3" alt="Cookies">
                <span>
                    Strona używa ciasteczek. Aby kontynuować przeglądanie strony wymagane jest zaakceptowanie polityki cookies.
                    <a href="http://wszystkoociasteczkach.pl/polityka-cookies/" target="_blank" class="text-white">Więcej na temat ciasteczek</a>.
                </span>
            </div>
            <div class="col-md-4 text-right order-1 order-md-2">
                <button class="cookie__close-button"><i class="fa fa-window-close"></i>Zamknij</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/cookies.js?v=<?php echo current_time('timestamp', 0); ?>"></script>
