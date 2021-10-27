<?php

/**
 *  functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package restoration-performance
 */

require 'plugin-update-checker/plugin-update-checker.php';

$myChildUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/timloden/restoration-performance/',
    __FILE__,
    'restoration-performance'
);

$myChildUpdateChecker->getVcsApi()->enableReleaseAssets();

//Optional: If you're using a private repository, specify the access token like this:
//$myUpdateChecker->setAuthentication('your-token-here');

//Optional: Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

/* enqueue script for parent theme stylesheeet */        
function childtheme_parent_styles() {
 
    // enqueue style
    wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );                       
   }
   add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');

/**
 * Load includes
 */

function child_includes_autoload()
{
    $function_path = pathinfo(__FILE__);

    foreach (glob($function_path['dirname'] . '/inc/*.php') as $file) {
        include_once $file;
    }
}

add_action('after_setup_theme', 'child_includes_autoload');

add_filter('acf/settings/load_json', function($paths) {
    $paths = array();
  
    if(is_child_theme()) {
      $paths[] = get_stylesheet_directory() . '/acf-json';
    }
    
    $paths[] = get_template_directory() . '/acf-json';
  
    return $paths;
  });