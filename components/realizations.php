<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 09.02.19
 * Time: 14:36
 */
?>

<?php
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
$args = array(
    'post_type' => 'comfy-realization',
    'posts_per_page' => 6,
    'paged' => $paged,
    'tax_query' => array(
        array(
            'taxonomy' => 'comfy-realization-category',
            'field' => 'slug',
            'terms' => 'the-best',
        ),
    ),
);
$query = new WP_Query($args);
?>
<div class="row realizations" id="realizations">
    <?php if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $gallery = get_gallery();
            $photos = array();

            if ($gallery):
                foreach ($gallery as $attachment) :
                    array_push($photos, $attachment->url);
                endforeach;
            endif; ?>

            <div class="col-xl-4 col-lg-3 col-md-4 col-6 realization__item"
                 data-photos='<?php echo json_encode($photos); ?>'>
                <div class="img-crop">
                    <?php $thumbnail = get_the_post_thumbnail_url(null, 'large'); ?>
                    <?php if ($thumbnail): ?>
                        <img src="<?php echo $thumbnail; ?>" alt="<?php echo get_the_title(); ?>"/>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/samples/sample_image.jpg"
                             alt="<?php echo get_the_title(); ?>"/>
                    <?php endif; ?>
                    <div class="realization__item-wrapper d-none d-xl-flex">
                        <div class="realization__item-title text-center"><?php echo get_the_title(); ?></div>
                        <div class="realization__item-description text-center">
                            <?php if (count($photos) != 0): ?>
                                Kliknij, aby zobaczyć realizację
                            <?php else: ?>
                                Brak realizacji do wyświetlenia
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
    endif;
    ?>
</div>

<?php get_template_part('plugins/photoswipe') ?>
