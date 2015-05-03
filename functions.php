 
<?php
//динамічний сайтбар
if ( function_exists('register_sidebar') )
    register_sidebar();

// меню сайта
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
?>


