<?php

namespace GIOMAZ_THEME\Inc;

use GIOMAZ_THEME\Inc\Menus;
use GIOMAZ_THEME\Inc\Traits\Singleton;

//require_once GIOMAZ_DIR_PATH .'/inc/traits/trait-singleton.php';


class Giomaz_theme
{
    use Singleton;

    function __construct()
    {
        Assets::get_instance();
        Menus::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions
         */

        add_action('after_setup_theme', [$this, 'setup_theme'],);
    }

    public function setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => ['site-title', 'site-description'],
            'unlink-homepage-logo' => true,
        ]);

        add_theme_support('custom-background',[
            'default-color'=>'#fff',
            'default-image'=> '',
            'default-repeat'=> 'no-repeat' 
        ]);

    }
}
