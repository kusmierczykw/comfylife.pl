<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 27.02.19
 * Time: 20:13
 */
?>

<?php global $wp_query; ?>

<?php get_template_part('layout/header'); ?>
<section class="container-fluid page-title full">
    <img src="<?php echo get_template_directory_uri(); ?>/images/headers/blog.jpg" class="page-title__background"
         alt="">

    <div class="row align-items-center h-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 page-title__header">
                    <h1>Blog</h1>
                    <hr class="page-title__separator"/>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>
                </div>
            </div>
        </div>

        <!--        <div class="icon-scroll">-->
        <!--            <span class="text">Scroll</span>-->
        <!--        </div>-->
    </div>
</section>

<section class="container-fluid">
    <div class="row py-6">
        <div class="col-lg-auto offset-xl-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 offset-lg-3 mx-auto">
                        <div class=" posts">
                            <?php get_template_part('loop'); ?>
                        </div>
                        <div id="inifiniteLoader" class="text-center mt-5 mb-5" style="display: none;">
                            <i class="fas fa-2x fa-spinner fa-spin"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg pr-0">
            <div class="position-sticky" style="top: 65px;">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/strona_gotowa_07.jpg"
                         class="img-fluid"/>
                </div>

                <div class="text-center mt-3">
                    <h2>Popularne posty</h2>
                    <p>Trwają pracę nad tą sekcją...</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    var windowCached = $(window),
        documentCached = $(document);

    documentCached.ready(function ($) {
        let count = 2;
        var total = <?php echo $wp_query->max_num_pages; ?>;

        windowCached.scroll(() => {
            if (windowCached.scrollTop() === documentCached.height() - windowCached.height()) {
                if (count > total) {
                    return false;
                } else {
                    loadArticle(count);
                }
                count++;
            }
        });

        function loadArticle(pageNumber) {
            $('#inifiniteLoader').fadeIn('fast');
            $.ajax({
                url: "<?php echo admin_url(); ?>admin-ajax.php",
                type: 'POST',
                data: "action=load_posts_by_ajax&page_no=" + pageNumber + '&loop_file=loop&what=posts',
                success: function (html) {
                    $('#inifiniteLoader').fadeOut('fast');
                    $('.posts').append(html);
                }
            });
            return false;
        }
    });
</script>
<?php get_template_part('layout/footer'); ?>
