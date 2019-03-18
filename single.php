<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 14.03.19
 * Time: 18:45
 */
?>
<?php get_template_part('layout/header'); ?>
<main class="single-post">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <section class="container-fluid page-title full">
            <img src="<?php echo get_the_post_thumbnail_url(null, 'large') ?>"
                 class="page-title__background"
                 alt="<?php echo get_the_title(); ?>">

            <div class="row align-items-center h-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 page-title__header">
                            <h1> <?php echo get_the_title(); ?> </h1>
                            <hr class="page-title__separator"/>
                            <p>
                                <?php echo get_the_date('d/m/Y'); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <!--                <div class="icon-scroll">-->
                <!--                    <span class="text">Scroll</span>-->
                <!--                </div>-->
            </div>
        </section>

        <section class="container">
            <div class="row py-6">
                <div class="col-lg-12">
                    <div class="post__content">
                        <?php echo get_the_content(); ?>
                    </div>
                </div>
            </div>

            <div class="row pt-6 pb-5">
                <div class="col-lg-6 text-center text-lg-right post__url left">
                    <?php previous_post_link('%link', '<i class="fas fa-angle-double-left"></i> Poprzedni post', TRUE); ?>
                </div>
                <div class="col-lg-6 text-center text-lg-left post__url right">
                    <?php next_post_link('%link', 'Następny post <i class="fas fa-angle-double-right"></i>', TRUE); ?>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-xl-12 pb-5">
                    <?php get_template_part('components/newsletter-bar'); ?>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if (comments_open()) : ?>
                        <div id="disqus_thread"></div>
                        <script>
                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                             */
                            /*
                            var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function () {  // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');

                                s.src = '//EXAMPLE.disqus.com/embed.js';

                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a></noscript>
                    <?php endif; // comments_open ?>
                </div>
            </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
</main>
<?php get_template_part('layout/footer'); ?>
