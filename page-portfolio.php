<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 25.03.19
 * Time: 20:30
 */
?>
<?php get_template_part('layout/header'); ?>
<section class="container-fluid page-title full">
    <img src="<?php echo get_template_directory_uri(); ?>/images/headers/blog.jpg" class="page-title__background"
         alt="">

    <div class="row align-items-center h-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 page-title__header">
                    <h1>Portfolio</h1>
                    <hr class="page-title__separator"/>
                    <p>
                        Zapoznaj się z naszymi realizacjami
                    </p>
                </div>
            </div>
        </div>

        <!--        <div class="icon-scroll">-->
        <!--            <span class="text">Scroll</span>-->
        <!--        </div>-->
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-xl-12 py-5">
            <?php get_template_part('loops/realization'); ?>

        </div>
    </div>
</section>

<?php get_template_part('layout/footer'); ?>
