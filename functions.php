<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 03.02.19
 * Time: 21:27
 */

// --------------------------------------------
// Theme supports
// --------------------------------------------
add_theme_support('post-thumbnails');

// --------------------------------------------
// Register actions
// --------------------------------------------
add_action('init', 'register_navbar_menu');
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('init', 'create_post_type');

// --------------------------------------------
// Plugins installation
// --------------------------------------------
require_once get_template_directory() . '/plugins/wp-bootstrap-navwalker.php';
if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
    return new WP_Error('/plugins/wp-bootstrap-navwalker.php', __('It appears the plugins/wp-bootstrap-navwalker.php file may be missing.'));
} else {
    require_once get_template_directory() . '/plugins/wp-bootstrap-navwalker.php';
}

// --------------------------------------------
// Custom posts
// --------------------------------------------
function create_post_type()
{
    $comfy_realization_supports = array(
        'title', 'editor', 'thumbnail',
    );

    $comfy_realization_category_labels = array(
        'name' => __('Kategorie realizacji'),
        'add_new_item' => __('Dodaj nową kategorię'),
        'not_found' => __('Brak wyników.'),
        'edit_item' => __('Edytuj kategorię'),
        'view_item' => __('Podgląd kategorię'),
    );

    $comfy_realization_post_type_labels = array(
        'name' => __('Realizacje'),
        'singular_name' => __('Realizacje'),
        'add_new' => __('Dodaj nową realizację'),
        'add_new_item' => __('Dodaj nową realizację'),
        'edit_item' => __('Edytuj realizację'),
        'new_item' => __('Nowa realizacja'),
        'all_items' => __('Wszystkie realizacje'),
        'view_item' => __('Przeglądaj realizacje'),
        'search_items' => __('Wyszukaj realizację'),
        'not_found' => __('Brak wyników...'),
        'not_found_in_trash' => __('Brak wyników.'),
        'parent_item_colon' => '',
        'menu_name' => __('Realizacje')
    );

    register_taxonomy(
        'comfy-realization-category',
        'comfy-realization',
        array(
            'labels' => $comfy_realization_category_labels,
            'rewrite' => array('slug' => 'comfy-realization-category'),
            'hierarchical' => true,
        )
    );
    register_taxonomy_for_object_type('comfy-realization-category', 'comfy-realization');
    register_post_type('comfy-realization',
        array(
            'labels' => $comfy_realization_post_type_labels,
            'public' => true,
            'has_archive' => true,
            'supports' => $comfy_realization_supports,
        )
    );
}

// --------------------------------------------
// Functions
// --------------------------------------------
function register_navbar_menu()
{
    register_nav_menu('header-menu', 'Menu górne');
}

function load_posts_by_ajax_callback()
{
    $loopFile = $_POST['loop_file'];
    $paged = $_POST['page_no'];
    $action = $_POST['what'];
    $value = $_POST['value'];

    if ($action == 'author_name') {
        $arg = array('author_name' => $value, 'paged' => $paged, 'post_status' => 'publish');
    } elseif ($action == 'category_name') {
        $arg = array('category_name' => $value, 'paged' => $paged, 'post_status' => 'publish');
    } elseif ($action == 'search') {
        $arg = array('s' => $value, 'paged' => $paged, 'post_status' => 'publish');
    } else {
        $arg = array('paged' => $paged, 'post_status' => 'publish');
    }

    # Load the posts
    query_posts($arg);
    get_template_part($loopFile);
    exit;
}

function pagination_links($query = null)
{
    global $wp_query;

    if ($query == null) $query = $wp_query;

    $big = 999999999;
    $paginate_links_args = array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $query->max_num_pages,
        'next_text' => __('Następne <i class="fas fa-angle-double-right"></i>'),
        'prev_text' => __('<i class="fas fa-angle-double-left"></i> Poprzednie'),
        'type' => 'array'
    );

    $pages = paginate_links($paginate_links_args);
    if (is_array($pages)) {
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ($pages as $page) {
            echo '<li class="page-item">' . str_replace('page-numbers', 'page-link', $page) . '</li>';
        }
        echo '</ul>';
    }
}
