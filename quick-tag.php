<?php 

/* 
Plugin Name: Qicktag
Version: 1.0
Author: devtawhid
Description: This is the first plugin made by devtawhid
Author URI: https://devtawhid.com
Plugin URI: https://devtawhid.com
Text Domain: qicktag
License: GPLv2 or later
Domain Path: /languages/
*/


function qtd_assets($screen){
    if('post.php' ==  $screen){
        wp_enqueue_script( 'qt-main-js', plugin_dir_url(__FILE__)."/assets/js/qt.js" , array('quicktags','thickbox'));
        wp_localize_script( 'qt-main-js', 'data', array('preview' => plugin_dir_url(__FILE__)."/fap.php"));
    }
}

add_action( 'admin_enqueue_scripts', 'qtd_assets');

