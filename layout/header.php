<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 01.02.19
 * Time: 11:58
 */
?>
<!Doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/libraries/bootstrap/dist/css/bootstrap.min.css"
          type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/libraries/owl.carousel/dist/assets/owl.carousel.min.css"
          type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/libraries/owl.carousel/dist/assets/owl.theme.green.min.css"
          type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/libraries/animate.css/animate.min.css"
          type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/libraries/photoswipe/dist/photoswipe.css"
          type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/libraries/photoswipe/dist/default-skin/default-skin.css"
          type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=<?php echo current_time('timestamp', 0); ?>"
          type="text/css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/media-queries.css?v=<?php echo current_time('timestamp', 0); ?>"
          type="text/css" rel="stylesheet"/>
    <?php wp_head(); ?>

    <title><?php echo wp_get_document_title(); ?></title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138059419-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-138059419-1');
    </script>
</head>

<body>
<?php get_template_part('components/social-media-bar'); ?>

<nav class="navbar navbar-expand-lg fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo.png" alt="Comfy Life Logo"
                 class="navbar-brand__logo-normal"/>
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-inversed.png" alt="Comfy Life Logo"
                 class="navbar-brand__logo-inversed"/>
        </a>

        <button class="navbar-toggler ml-auto p-2 px-3" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <?php
        $theme_location = is_front_page() ? 'header-menu' : 'header-blog-menu';
        ?>

        <?php
        wp_nav_menu(array(
            'theme_location' => $theme_location,
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'menu_class' => 'navbar-nav ml-auto',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
        ));
        ?>

        <div class="navbar-action-section d-none d-lg-block">
            <a href="https://www.facebook.com/comfylifedesign/" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>

            <a href="https://www.instagram.com/comfylife_design/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </div>

        <?php
        if (is_home()):
            ?>
            <div class="navbar-action-section d-none d-lg-block">
                <a href="#" id="search-button-toggler">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        <?php
        endif;

        ?>
    </div>
</nav>
<?php get_template_part('components/search-bar'); ?>
