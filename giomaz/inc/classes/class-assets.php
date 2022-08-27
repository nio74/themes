<?php 
/**
 * Enqueue theme assets
 * 
 * @package  Giomaz
 */
namespace GIOMAZ_THEME\Inc;

use GIOMAZ_THEME\Inc\Traits\Singleton;

class Assets{
    use Singleton;

    function __construct()
    {

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_sripts']);
    }



    function register_styles()
    {
        //Register Styles
        wp_register_style('style-css', get_stylesheet_uri(), [], fileatime( GIOMAZ_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', GIOMAZ_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        //Enqueue Stiles
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }
    function register_sripts()
    {

        //Register Scripts
        wp_register_script('main-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', ['jquery', 'slick-js'], fileatime(GIOMAZ_DIR_PATH . '/assets/main.js'), true);
        // wp_register_script('hide-navbar-js', get_template_directory_uri(). '/assets/hide-navbar.js', fileatime(get_template_directory().'/assets/hide-navbar.js'),true);
        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', ['jquery'], false, true);


        //Enqueue Scripts
        wp_enqueue_script('main-js');
        // wp_enqueue_script('hide-navbar-js');
        wp_enqueue_script('bootstrap-js');
    }
}

?>