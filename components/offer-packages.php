<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 07.02.19
 * Time: 20:07
 */
?>
<div class="offer__packages" id="offer-packages">
    <div class="offer__packages-view">
        <div class="offer__package-item active"
             data-background-url="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_15.jpg"
             data-link="#pakiet-podstawowy">
            <div class="offer__package-item-wrapper">
                <h3 class="text-center text-uppercase font-weight-bold mb-5">Pakiet podstawowy</h3>
                <div>
                    <ul>
                        <li>wykonanie inwentaryzacji projektowej przestrzeni</li>
                        <li>wykonanie dwóch układów funkcjonalnych 2D</li>
                        <li>opracowanie wybranego układu funkcjonalnego</li>
                        <li>wykonanie wizualizacji 3D</li>
                        <li>stworzenie projektu wykonawczego</li>
                        <li>zestawienie wybranego wyposażenia</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="offer__package-item"
             data-background-url="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_15.jpg"
             data-link="#pakiet-kompleksowy">

            <div class="offer__package-item-wrapper">
                <h3 class="text-center text-uppercase font-weight-bold mb-5">Pakiet kompleksowy</h3>
                <div>
                    <ul>
                        <li>wykonanie inwentaryzacji projektowej przestrzeni</li>
                        <li>wykonanie dwóch układów funkcjonalnych 2D</li>
                        <li>opracowanie wybranego układu funkcjonalnego</li>
                        <li>wykonanie wizualizacji 3D</li>
                        <li>stworzenie projektu wykonawczego</li>
                        <li>zestawienie wybranego wyposażenia</li>
                        <li>opracowanie kosztorysu</li>
                        <li>doradztwo w zakupach branżowych</li>
                        <li>3 wizyty na budowie</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="offer__package-item"
             data-background-url="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_15.jpg"
             data-link="#pakiet-po-klucz">

            <div class="offer__package-item-wrapper">
                <h3 class="text-center text-uppercase font-weight-bold mb-5">Pakiet po klucz</h3>
                <div>
                    <ul>
                        <li>wykonanie inwentaryzacji projektowej przestrzeni</li>
                        <li>wykonanie dwóch układów funkcjonalnych 2D</li>
                        <li>opracowanie wybranego układu funkcjonalnego</li>
                        <li>wykonanie wizualizacji 3D</li>
                        <li>stworzenie projektu wykonawczego</li>
                        <li>zestawienie wybranego wyposażenia</li>
                        <li>opracowanie kosztorysu</li>
                        <li>wspólne zakupy w sklepach branżowych</li>
                        <li>nadzór nad wszystkimi zamówieniami</li>
                        <li>nadzór nad pracami wykończeniowymi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <ul class="offer__packages-switcher" id="offer-packages-switcher">
        <li class="switcher-item">
            <a class="switcher-item__label" href="#pakiet-podstawowy">
                pakiet podstawowy
            </a>
        </li>
        <li class="switcher-item">
            <a class="switcher-item__label" href="#pakiet-kompleksowy">
                pakiet kompleksowy
            </a>
        </li>
        <li class="switcher-item">
            <a class="switcher-item__label" href="#pakiet-po-klucz">
                pakiet po klucz
            </a>
        </li>
    </ul>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/offer-packages.js?v=<?php echo current_time('timestamp', 0); ?>"></script>
