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
