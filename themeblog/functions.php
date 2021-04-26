<?php
function themeblog(){
    $version =wp_get_theme()->get( 'version' );

    wp_enqueue_style('themeblog-Style', get_template_directory_uri() . "/style.css", array(), '1,0', 'all');
    wp_enqueue_style('themeblog-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css", array(), '1,0', 'all');
    
}

add_action( 'wp_enqueue_scripts', 'themeblog');

function blogger_theme_support(){
    //Adds dynamic title
    add_theme_support('title_tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    
    }
    
    add_action('after_setup_theme','blogger_theme_support');
    
    
    function blogger_menus(){
    
        $location = array(
            'primary' => "Desktop Primary"
        );
        register_nav_menus($location);
    }
    
    add_action('init','blogger_menus');
    
    
//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');

//Menus
register_nav_menus(
      array(
       'top-menu' => 'Top Menu Location',
       'mobile-menu' => 'Mobile Menu Location',
      )
);

?>