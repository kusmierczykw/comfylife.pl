<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 06.04.19
 * Time: 20:35
 */
?>
<?php get_template_part('layout/header'); ?>

<section class="container-fluid search-section">
    <div class="row h-100 align-items-center py-5 px-4">
        <div class="col-xl-12 d-flex align-items-center flex-column justify-content-center pb-4 pt-5">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-inversed.png"
                 alt="Comfy Life Logo"
                 class="search-bar__logo mb-3"/>
            <h1 class="mb-0 search-bar__title">Comfy-Life</h1>
        </div>

        <div class="col-xl-5 col-lg-8 mx-auto">
            <?php get_template_part('components/search-form'); ?>
        </div
    </div>
</section>

<section class="container-fluid">
    <div class="row py-5">
        <div class="col-xl-8 offset-xl-1">
            <div class="row">
                <div class="col-xl-8 col-md-12 mx-auto">
                    <div class=" posts">
                        <?php get_template_part('loops/post'); ?>
                    </div>
                    <div id="inifiniteLoader" class="text-center mt-5 mb-5" style="display: none;">
                        <i class="fas fa-2x fa-spinner fa-spin"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl px-0 d-none d-xl-block">
            <?php get_template_part('components/short-about-us'); ?>

            <div class="position-sticky" id="flow-sidebar">
                <div>
                    <?php get_template_part('components/sample-realization-download'); ?>
                </div>
                <div class="pt-5">
                    <?php get_template_part('components/popular-posts'); ?>
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
                data: "action=load_posts_by_ajax&page_no=" + pageNumber + '&loop_file=loops/post&what=search&value=<?php echo get_search_query(); ?>',
                success: function (response) {
                    $('#inifiniteLoader').fadeOut('fast');
                    $('.posts').append(response.data);

                    const totalPage = response.totalPage;
                    if(!!totalPage && total !== response.totalPage){
                        total = totalPage;
                    }
                }
            });
            return false;
        }
    });
</script>
<?php get_template_part('layout/footer'); ?>
