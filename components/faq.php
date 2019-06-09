<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 09.02.19
 * Time: 14:36
 */
?>

<?php
$args = array(
    'post_type' => 'comfy-faq',
    'posts_per_page' => 6,
    'tax_query' => array(
        array(
            'taxonomy' => 'comfy-faq-category',
            'field' => 'slug',
            'terms' => 'front-page',
        ),
    ),
);
$query = new WP_Query($args);
?>
<div class="row faq">
    <div class="col-md-12">
        <h2>Najczęściej zadawane pytania</h2>
    </div>

    <?php if ($query->have_posts()) :
        $counter = 0;
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-xl-4 col-lg-3 col-md-6 mt-3 text-justify">
                <h6 class="text-uppercase font-weight-bolder">
                    <?php echo ++$counter . ') ' ?>
                    <?php echo get_the_title(); ?>
                </h6>
                <p><?php echo get_the_content(); ?></p>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Brak postów do wyświetlenia. . .</p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>
