<?php
// Enqueue CSS
function enqueue_css() {
    wp_register_style('bs', get_template_directory_uri().'/css/bootstrap.min.css', [], null, 'all');
    wp_enqueue_style('bs');

    wp_register_style('fonts', get_template_directory_uri().'/css/fonts.css', [], null, 'all');
    wp_enqueue_style('fonts');

    wp_register_style('style', get_template_directory_uri().'/css/style.css', [], null, 'all');
    wp_enqueue_style('style');

	wp_register_style('header', get_template_directory_uri().'/css/header.css', [], null, 'all');
    wp_enqueue_style('header');

    wp_register_style('footer', get_template_directory_uri().'/css/footer.css', [], null, 'all');
    wp_enqueue_style('footer');
}
add_action('wp_enqueue_scripts', 'enqueue_css');
// Emqueue JavaScript
function enqueue_js() {
    wp_enqueue_script('jquery');

    wp_register_script('menu', get_template_directory_uri().'/js/menu.js', [], null, true);
    wp_enqueue_script('menu');

    wp_register_script('team', get_template_directory_uri().'/js/team.js', [], null, true);
    if (is_archive('team')) {
        wp_enqueue_script('team');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_js');
// Theme Supports
add_theme_support('menus');
add_theme_support('custom-logo', ['height'=>92, 'width'=>214]);
add_theme_support('post-thumbnails');
// Image Sizes
add_image_size('home-blog', 750, 1000, true);
add_image_size('team', 255, 306, true);
// Register nav menus
register_nav_menus(['primary'=>'Primary Menu', 'secondary'=>'Secondary Menu', '']);
// Registering Custom Post Types
// Miscellanious
function cpt_miscellanious() {
    $args = [
        'labels'=>['name'=>__('Miscellanious Contents'), 'singular_name'=>__('Miscellanious Content')],
        'public'=>true,
		'has_archive'=>false,
        'show_in_rest'=>true,
        'hierarchical'=>false,
        'publicly_queryable'=>false,
        'exclude_from_search'=>true,
        'supports'=>['title', 'editor', 'thumbnail', 'custom-fields'],
        'rewrite'=>['slug'=>'misc'],
	];
    register_post_type('misc', $args);
}
add_action('init', 'cpt_miscellanious');
// Our Work
function cpt_our_work() {
	$args = [
		'labels'=>['name'=>__('Our Works'), 'singular_name'=>__('Our Work')],
        'public'=>true,
        'has_archive'=>true,
        'show_in_rest'=>true,
		'hierarchical'=>false,
        'show_in_nav_menus'=>true,
        'supports'=>['title', 'thumbnail', 'editor', 'excerpt', 'custom-fields'],
        'rewrite'=>['slug'=>'our-work'],
	];
	register_post_type('our-work', $args);
}
add_action('init', 'cpt_our_work');
// Team
function cpt_team() {
    $args = [
        'labels'=>['name'=>__('Teams'), 'singular_name'=>__('Team')],
        'public'=>true,
        'has_archive'=>true,
        'show_in_rest'=>true,
        'heirarchical'=>false,
        'show_in_nav_menus'=>true,
        'supports'=>['title', 'thumbnail', 'editor', 'custom-fields'],
        'rewrite'=>['slug'=>'team'],
    ];
    register_post_type('team', $args);
}
add_action('init', 'cpt_team');
// Board
function cpt_board() {
    $args = [
        'labels'=>['name'=>__('Board of Advicors'), 'singlar_name'=>__('Advicory Board')],
        'public'=>true,
        'has_archive'=>true,
        'show_in_rest'=>true,
        'heirarchical'=>false,
        'show_in_nav_menus'=>true,
        'supports'=>['title', 'thumbnail', 'editor', 'custom-fields'],
        'rewrite'=>['slug'=>'board'],
    ];
    register_post_type('board', $args);
}
add_action('init', 'cpt_board');
// Registering Taxonomies
// Miscellanious Taxonomy
function tax_miscellanious() {
	$args = [
		'labels'=>['name'=>__('Miscellanious Tags'), 'singular_name'=>__('Miscellanious Tag')],
        'public'=>true,
        'show_in_menu'=>true,
        'show_in_rest'=>true,
		'hierarchical'=>false,
        'show_admin_column'=>true,
        'show_in_nav_menus'=>false,
        'publicly_queryable'=>true,
        'show_in_quick_edit'=>true,
        'rewrite'=>['slug'=>'misc_tag'],
	];
	register_taxonomy('misc_tag', 'misc', $args);
}
add_action('init', 'tax_miscellanious');
// Email Forwarding Mail Function
add_action('wp_ajax_connect', 'connect_form');
add_action('wp_ajax_nopriv_connect', 'connect_form');
function connect_form() {
    $formdata = [];
    wp_parse_str($_POST['connect'], $formdata);

    $admin_email = get_option('admin_email');

    $headers[] = 'Content-Type:text/html; charset=UTF-8';
    $headers[] = 'From: '.$admin_email;

    $send_to = $admin_email;

    $subject = 'News Letter Subscriber';

    $message = '<strong><h1>News letter subscriber</h1></strong><br>'.$formdata['lname'].' '.$formdata['fname'].'<br><a href="mailto:'.$formdata['email'].'">'.$formdata['email'].'</a>';

    try {
        if (wp_mail($send_to, $subject, $message, $headers)) {
            wp_send_json_success("Thank you ".$formdata['lname'].' '.$formdata['fname']);
        } else {
            wp_send_json_error("Email error occured");
        }
    } catch (Exception $e) {
        wp_send_json_error($e->getMessage());
    }
}