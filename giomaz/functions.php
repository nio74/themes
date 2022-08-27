<?php

/**
*Theme Functions
*
*@package giomaz
*/



if(!defined('GIOMAZ_DIR_PATH')){
    define('GIOMAZ_DIR_PATH', untrailingslashit(get_template_directory()));
}

if(!defined('GIOMAZ_DIR_URI')){
    define('GIOMAZ_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once GIOMAZ_DIR_PATH . '/inc/helpers/autoloader.php';
//require_once GIOMAZ_DIR_PATH . '/inc/classes/class-giomaz-theme.php';



 function giomaz_get_theme_instance(){
    \GIOMAZ_THEME\Inc\Giomaz_theme::get_instance();
   
} 

giomaz_get_theme_instance();

/* require_once GIOMAZ_DIR_PATH . '/inc/classes/class-test.php';

function istanziate_test_php(){
    $t = new TEST_PHP\Test_php();
    $t->prova_test();
    
} */

//istanziate_test_php();
 
function giomaz_enqueue_script(){

   

    

}

