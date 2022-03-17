<?php

function scripts()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-block-style');
	wp_enqueue_style('maincss', get_template_directory_uri() . '/dist/app.css', '1.3');
	wp_enqueue_script('jquery');
	wp_enqueue_script('vue', get_template_directory_uri() . '/dist/vue.js', null, null, true);
	wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery', 'vue'], '1.2', true);
	wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'scripts');

function google_fonts()
{
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;900&display=swap', false);
}
add_action('wp_enqueue_scripts', 'google_fonts');


add_theme_support('post-thumbnails');



// Register Custom Post Type show
function create_show_cpt()
{

	$labels = array(
		'name' => _x('shows', 'Post Type General Name', 'textdomain'),
		'singular_name' => _x('show', 'Post Type Singular Name', 'textdomain'),
		'menu_name' => _x('Shows', 'Admin Menu text', 'textdomain'),
		'name_admin_bar' => _x('show', 'Add New on Toolbar', 'textdomain'),
		'archives' => __('show Archives', 'textdomain'),
		'attributes' => __('show Attributes', 'textdomain'),
		'parent_item_colon' => __('Parent show:', 'textdomain'),
		'all_items' => __('All shows', 'textdomain'),
		'add_new_item' => __('Add New show', 'textdomain'),
		'add_new' => __('Add New', 'textdomain'),
		'new_item' => __('New show', 'textdomain'),
		'edit_item' => __('Edit show', 'textdomain'),
		'update_item' => __('Update show', 'textdomain'),
		'view_item' => __('View show', 'textdomain'),
		'view_items' => __('View shows', 'textdomain'),
		'search_items' => __('Search show', 'textdomain'),
		'not_found' => __('Not found', 'textdomain'),
		'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
		'featured_image' => __('Featured Image', 'textdomain'),
		'set_featured_image' => __('Set featured image', 'textdomain'),
		'remove_featured_image' => __('Remove featured image', 'textdomain'),
		'use_featured_image' => __('Use as featured image', 'textdomain'),
		'insert_into_item' => __('Insert into show', 'textdomain'),

		'uploaded_to_this_item' => __('Uploaded to this show', 'textdomain'),
		'items_list' => __('shows list', 'textdomain'),
		'items_list_navigation' => __('shows list navigation', 'textdomain'),
		'filter_items_list' => __('Filter shows list', 'textdomain'),
	);
	$args = array(
		'label' => __('show', 'textdomain'),
		'description' => __('', 'textdomain'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-tickets-alt',
		'supports' => array('title', 'thumbnail', 'revisions'),
		'taxonomies'  => array(''),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type('shows', $args);
}
add_action('init', 'create_show_cpt', 0);





// DISPLAY ARCHIVE TITLE

add_filter('get_the_archive_title', function ($title) {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_author()) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_tax()) { //for custom post types
		$title = sprintf(__('%1$s'), single_term_title('', false));
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	}
	return $title;
});



// FEATURED IMAGE IN REST 


add_action('rest_api_init', 'register_rest_images');
function register_rest_images()
{
	register_rest_field(
		array('post'),
		'fimg_url',
		array(
			'get_callback'    => 'get_rest_featured_image',
			'update_callback' => null,
			'schema'          => null,
		)
	);
}
function get_rest_featured_image($object, $field_name, $request)
{
	if ($object['featured_media']) {
		$img = wp_get_attachment_image_src($object['featured_media'], 'app-thumb');
		return $img[0];
	}
	return false;
}
