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


        <?php $args = array(
            'post_type' => 'comfy-offer',
            'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()):
            $postsTitle = array();
            $counter = 0;
            $isActive = false;

            while ($query->have_posts()): $query->the_post();
                $isActive = $counter === 0 ? true : false;
                $backgroundURL = get_the_post_thumbnail_url();

                if (!$backgroundURL) {
                    $backgroundURL = get_template_directory_uri() . '/images/offer/background.jpg';
                }

                ?>
                <div class="offer__package-item <?php echo ($isActive) ? 'active' : '' ?>"
                     data-background-url="<?php echo $backgroundURL; ?>"
                     data-link="#<?php echo link_from_title(get_the_title()) ?>">
                    <div class="offer__package-item-wrapper">
                        <h3 class="text-center text-uppercase font-weight-bold mb-5"><?php echo get_the_title(); ?></h3>
                        <div>
                            <?php echo get_the_content(); ?>
                        </div>
                    </div>
                </div>
                <?php

                array_push($postsTitle, get_the_title());
                $counter++;
            endwhile;
        endif;
        ?>
        <?php wp_reset_query(); ?>
    </div>

    <div class="offer__packages-switcher" id="offer-packages-switcher">
        <?php
        foreach ($postsTitle as $title): ?>
            <button type="button" class="switcher-item" dataUrl="#<?php echo link_from_title($title) ?>">
                <?php echo strtolower($title); ?>
            </button>
        <?php endforeach;
        ?>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/offer-packages.js?v=<?php echo current_time('timestamp', 0); ?>"></script>
