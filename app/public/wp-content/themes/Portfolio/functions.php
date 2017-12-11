<?php

include 'includes/reg_taxonomy.php';
include 'includes/post_types.php';
include 'includes/theme_config.php';
include 'includes/media_size.php';
include 'includes/reg_menu.php';
include 'includes/reg_widgets.php';

add_theme_support('title-tag');


function post_remove () 
{ 
   remove_menu_page('edit.php');
} 

add_action('admin_menu', 'post_remove');

?>