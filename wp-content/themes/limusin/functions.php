<?php

function limusin_setup() {

    register_nav_menus( array(
        'menu' => 'Меню',
        'lang_menu' => 'Языки'
    ) );

    load_theme_textdomain('ru');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function limusin_scripts() {

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/vendors/jquery-2.2.1.min.js', false, null, true);
    wp_register_script('nicescroll', get_template_directory_uri() . '/js/vendors/jquery.nicescroll.min.js', false, null, true);
    wp_register_script('main', get_template_directory_uri() . '/js/index.min.js', false, null, true);
    wp_register_style('style', get_stylesheet_uri());


    wp_enqueue_script( 'test_js', get_template_directory_uri() . '/js/ajax-test.js',false, null, true );
    wp_localize_script( 'test_js', 'PJS', array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
        )
    );


    wp_enqueue_script('jquery');
    wp_enqueue_script('nicescroll');
    wp_enqueue_script('main');
    wp_enqueue_style('style');
}

function create_post_type() {

    register_post_type( 'bisnes_idea',
        array(
            'labels' => array(
                'name' => __( 'Bisnes ideas' ),
                'singular_name' => __( 'bisnes_idea' )
            ),
            'public' => true,
            'has_archive' => true,
            'capability_type'    => 'post',
            'supports' => array('title','editor','thumbnail','excerpt', 'page-attributes'),
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => true
        )
    );
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

}

add_action( 'init', 'create_post_type' );
add_action('after_setup_theme', 'limusin_setup');
add_action( 'wp_enqueue_scripts', 'limusin_scripts' );


function remove_menus(){
    global $menu;
    $restricted = array(
        __('Dashboard'),
        __('Posts'),
//        __('Media'),
        __('Links'),
//        __('Pages'),
//        __('Appearance'),
        __('Editor'),
        __('Tools'),
        __('Users'),
 //       __('Settings'),
        __('Comments'),
        //__('Plugins')
    );
    end ($menu);
    while (prev($menu)){
        $value = explode(' ', $menu[key($menu)][0]);
        if( in_array( ($value[0] != NULL ? $value[0] : "") , $restricted ) ){
            unset($menu[key($menu)]);
        }
    }
}
add_action('admin_menu', 'remove_menus');




add_action('wp_ajax_test', 'test_ajax');
add_action('wp_ajax_nopriv_test', 'test_ajax');
function test_ajax() {

  //$test = $_POST['test'];

	$args = array(
		'posts_per_page' => -1,
		'orderby'     => 'menu_order',
		'order'       => 'ASC',
		'post_type'   => 'bisnes_idea',
		'fields'      => 'ids'
	);

	$posts = get_posts( $args );



	foreach($posts as $post){ setup_postdata($post);
		$object['ID'] = $post;
		$object['thumbnail_url'] = get_the_post_thumbnail_url($post);
		$object['title'] = get_the_title($post);
		$object['excerpt'] = get_the_excerpt($post);
		$object['content'] = get_the_content($post);
		$object['permalink'] = get_permalink($post);
		$object['thumbnail_caption'] = get_the_post_thumbnail_caption($post);
		$object['size_acf'] = get_field('enter_size');
		$obj[] = $object;
	}

	//echo $test;
	echo json_encode($obj);
	exit;
}
