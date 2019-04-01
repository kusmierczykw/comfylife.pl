<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 01.04.19
 * Time: 20:26
 */
?>
<div class="popular-posts">
    <h2 class="text-center">Popularne posty</h2>
    <?php $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'category__in' => array(
            get_category_by_slug('popular')->cat_ID
        )
    );
    $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()) : ?>
        <?php $counter = 0; ?>


        <ul class="popular-post__list">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php $counter++; ?>
                <li class="popular-post__item">
                    <span class="popular-post__order-number"><?php echo $counter; ?></span>
                    <a href="<?php echo get_permalink(); ?>" class="popular-post__link">
                        <?php echo get_the_title(); ?>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>Brak postów do wyświetlenia. . .</p>
    <?php endif; ?>
</div>
