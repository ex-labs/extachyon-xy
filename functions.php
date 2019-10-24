<?php


// Add Page Template Specific JS file
function theme_scripts() {
    //wp_enqueue_script(
        //'slick',
        //Dep and swap for Owl Carousel
        //get_stylesheet_directory_uri() . '/js/slick.min.js',
        //array( 'jquery' )
    //);  
      wp_enqueue_script(
        'aos',
        get_stylesheet_directory_uri(). '/js/aos.js',
        array('jquery')
      );
      wp_enqueue_script(
        'theme',
        get_stylesheet_directory_uri() . '/js/theme.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );


//Disable 2017 SVG Icons
function remove_parent_svg_icons()
    {
        remove_action('wp_footer', 'twentyseventeen_include_svg_icons', 9999);
    }
add_action('after_setup_theme', 'remove_parent_svg_icons');

//Custom Login
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/login.css" />';
}

add_action('login_head', 'my_custom_login');


//Navigation Attributes
add_filter( 'nav_menu_link_attributes', function ( $atts, $item, $args ) {
    if ( 'comingsoon' === $item->classes[0] ) {
        $atts['data-toggle'] = 'modal';
    }

    return $atts;
}, 10, 3 );


//Update Notices
add_action('after_setup_theme','remove_core_updates');
function remove_core_updates()
{
 if(! current_user_can('update_core')){return;}
 add_action('init', create_function('$a',"remove_action( 'init', 'wp_version_check' );"),2);
 add_filter('pre_option_update_core','__return_null');
 add_filter('pre_site_transient_update_core','__return_null');
}


// Services CPT

// Our custom post type function for Services
function create_services_posttype() {
 
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'servicelist'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_services_posttype' );

// Our custom post type function for Programs
function create_programs_posttype() {
 
    register_post_type( 'programs',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Programs' ),
                'singular_name' => __( 'Program' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'programs'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_programs_posttype' );

// The Board CPT

// Our custom post type function for Board
function create_board_posttype() {
 
    register_post_type( 'board',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Board' ),
                'singular_name' => __( 'Member' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'board'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_board_posttype' );


// Benefits CPT

// Our custom post type function for Board
function create_benefits_posttype() {
 
    register_post_type( 'benefits',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Benefits' ),
                'singular_name' => __( 'Benefit' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'vcto-benefit'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_benefits_posttype' );

//$board = new Custom_Post_Type()

