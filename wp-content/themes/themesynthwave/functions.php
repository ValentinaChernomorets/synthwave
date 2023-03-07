<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function synthwave_script_enqueue() {
	global $toffi_version;
	//css
	wp_enqueue_style('mediastyle', get_template_directory_uri() . '/css/media.css', array(), $toffi_version);
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css', array(), $toffi_version);
	//js
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'synthwave_script_enqueue');
/*
	==========================================
	 Activate menus
	==========================================
*/
function synthwave_theme_setup() {
    //activated feature
    add_theme_support('menus');
    register_nav_menu('synthwave', 'Primary Header Navigation');
}
//after_setup_theme - после иницилизации тему подцеплять функцию
// init - просто инициализировать
add_action('init', 'synthwave_theme_setup');


/*
	==========================================
	 Theme support function
	==========================================
*/
// Add to menu:(theme support hooks) 
//-add background;
add_theme_support('custom-background');
//-add custom header;
add_theme_support('custom-header');
//-add custom header image and can change size;
add_theme_support('post-thumbnails');
// add_theme_support('html5', array('search-form'));

function add_post_formats() {
	add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'aside', 'image', 'link' ) );
}
add_action( 'after_setup_theme', 'add_post_formats', 20 );

/*
  ===============================
    Sidebar function
  ===============================
*/
function synthwave_widget_setup() {
    register_sidebar(
      array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'sidebar-custom',
        'description' => 'Standart Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
      )
    );
}
add_action('widgets_init','synthwave_widget_setup');
/*
  ===============================
    Include Walker file
  ===============================
*/
require get_template_directory() . '/inc/walker.php';

/*
  ===============================
    Create function for adding class menu
  ===============================
*/
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class( $atts, $item, $args ) {
	if (property_exists($args, 'link_class')) {
	  $atts['class'] = $args->link_class;
	}
	return $atts;
  }
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

/*
  ===============================
    Create function Custom post type (taxonomy)
  ===============================
*/
function synthwave_custom_post_type() {
	$labels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add Item',
		'all_items' => 'All Item',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parenet_item_colon' => 'Parent Item',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'menu_position' => 5,
		'exclude_form_search' => false,
	);
	register_post_type('portfolio', $args);
}
add_action('init', 'synthwave_custom_post_type');

function synthwave_custom_taxonomies() {
	//add new taxonomy heirarchical
	$labels = array(
		'name' => 'Fields',
		'singular_name' => 'Type',
		'search_items' => 'Search Fields',
		'all_items' => 'All Fields',
		'parent_item' => 'Parent Type',
		'parent_item_colon' => 'Parent Type:',
		'edit_item' => 'Edit Type',
		'update_item' => 'Update Type',
		'add_new_item' => 'Add New Type',
		'new_item_name' => 'New Type Name',
		'menu_name' => 'Fields',
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'field'), 
	);

	register_taxonomy('field', array('portfolio'), $args);
	//add new taxonomy NOT heirarchical
	register_taxonomy('software', 'portfolio', array(
		'label' => 'Software',
		'rewrite' => array('slug' => 'software'),
		'hierarchical' => false,
	) );
}
add_action('init', 'synthwave_custom_taxonomies');

// Funtion for burger menu
function synthwave_burger_menu_scripts() {
  wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/js/burger-menu.js', array( 'jquery' ) );
}
add_action('wp_enqueue_scripts', 'synthwave_burger_menu_scripts');
?>