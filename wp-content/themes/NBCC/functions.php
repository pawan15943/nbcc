<?php
// Navbar For Website :
require get_theme_file_path('/inc/bootstrap_5_wp_nav_menu_walker.php');
require get_theme_file_path('/inc/custom_post_course.php');

// Register Website Menu in Wordpress
register_nav_menu('main-menu', 'Main menu');



function child_enqueue_styles()
{

    // dequeue the Twenty Twenty-One parent style
    wp_dequeue_style('twenty-twenty-one-style');

    // Theme stylesheet
    wp_enqueue_style('child-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 11);


// Carbon Field Setting

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

function crb_attach_theme_options()
{
    require get_theme_file_path('/inc/theme_options/homepage.php');
    require get_theme_file_path('/inc/theme_options/coursepage.php');
    require get_theme_file_path('/inc/theme_options/theme_options.php');
    require get_theme_file_path('/inc/theme_options/services.php');
    require get_theme_file_path('/inc/theme_options/about_us.php');
    require get_theme_file_path('/inc/theme_options/portfolio.php');

    Container::make('post_meta', __('Add SEO Details', 'crb'))
        ->where('post_type', '=', 'page')
        ->add_fields(array(
            Field::make('text', 'page_title', 'Title'),
            Field::make('textarea', 'seo_content', 'Enter All SEO Content'),
        ));
}

function gt_get_post_view()
{
    $count = get_post_meta(get_the_ID(), 'post_views_count', true);
    return $count != "" ? $count : 0;
}

function gt_set_post_view()
{
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta($post_id, $key, true);
    $count++;
    update_post_meta($post_id, $key, $count);
}


// Adding a custom color to the links
function add_catgory_in_page()
{
    // register_taxonomy_for_object_type('post_tag', 'page');
    register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'add_catgory_in_page');

// Secure Wordpress Theme
function wpbeginner_remove_version()
{
    return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');


function get_courses_for_dropdown()
{
    $args = array(
        'post_type' => 'courses',
        'posts_per_page' => -1,
    );

    $courses = get_posts($args);
    $options = array();

    foreach ($courses as $course) {
        $options[$course->ID] = $course->post_title;
    }

    return $options;
}


// Hide Plugin Name
// function hide_plugin_trickspanda()
// {
//     global $wp_list_table;
//     $hidearr = array(
//         'carbon-fields/carbon-fields-plugin.php',
//         'classic-widgets/classic-widgets.php',
//         'classic-editor/classic-editor.php',
//         'show-current-template/show-current-template.php',
//         'wps-hide-login/wps-hide-login.php',
//         'duplicate-page/duplicatepage.php'
//     );
//     $myplugins = $wp_list_table->items;
//     foreach ($myplugins as $key => $val) {
//         if (in_array($key, $hidearr)) {
//             unset($wp_list_table->items[$key]);
//         }
//     }
// }
// add_action('pre_current_active_plugins', 'hide_plugin_trickspanda');
