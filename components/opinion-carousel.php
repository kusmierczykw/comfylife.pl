<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 06.02.19
 * Time: 20:49
 */
?>
<?php
$args = array(
    'post_type' => 'comfy-opinion',
    'posts_per_page' => 5,
);
$query = new WP_Query($args);
?>

<?php if ($query->have_posts()) : ?>
<div class="owl-carousel owl-theme opinion__carousel">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="opinion__item">
            <div class="opinion__description">
                <?php echo get_the_content(); ?>
            </div>

            <div class="opinion__user-name mt-3">
                <?php echo get_the_title(); ?>
            </div>
        </div>
    <?php endwhile; ?>
    <?php else: ?>
        <p>Brak postów do wyświetlenia. . .</p>
    <?php endif; ?>
</div>


<script>
    $('.opinion__carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        center: true,
    });
</script>
