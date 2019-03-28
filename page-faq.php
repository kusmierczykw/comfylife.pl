<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 09.02.19
 * Time: 22:16
 */
?>
<?php get_template_part('layout/header'); ?>

<section class="container-fluid page-title">
    <img src="<?php echo get_template_directory_uri(); ?>/images/slider/slider_3.jpg" class="page-title__background"
         alt="">

    <div class="row align-items-center h-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 page-title__header">
                    <h1>FAQ</h1>
                    <hr class="page-title__separator"/>
                    <p>
                        Odpowiedzi na najczęściej zadawane pytania
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container faq">
    <div class="row">
        <div class="col-xl-12 py-6">
            <div class="accordion" id="accordionExample">
                <?php
                $args = array(
                    'post_type' => 'comfy-faq',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query($args);
                ?>

                <?php if ($query->have_posts()) : ?>
                    <?php $counter = 0; ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="card">
                            <div class="card-header"
                                 id="heading-<?php echo $counter; ?>"
                                 data-toggle="collapse"
                                 data-target="#collapse-<?php echo $counter; ?>"
                                 aria-expanded="true"
                                 aria-controls="collapseOne">
                                <div class="card-header__icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="card-header__question">
                                    <?php echo get_the_title(); ?>
                                </div>
                            </div>

                            <div id="collapse-<?php echo $counter; ?>"
                                 class="collapse"
                                 aria-labelledby="heading-<?php echo $counter; ?>"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo get_the_content(); ?>
                                </div>
                            </div>
                        </div>
                        <?php $counter++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/js/faq-accordions.js"></script>

<?php get_template_part('layout/footer'); ?>
