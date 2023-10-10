<?php

/**
 * Plugin Name:  wp-mu-plugins-loader
 * Plugin URI:   https://github.com/andriilive/wp-mu-plugins-loader
 * Description:  Autoload mu-plugins from sub-folders. Place this file in mu-plugins folder. Loads /mu-plugins/{plugin-name}/{{plugin-name},index,plugin}.php
 * Version:      0.1.0
 * Author:       DigitalAndy
 * Author URI:   https://github.com/andriilive
 * License:      Apache License 2.0
 *
 * @package      Wp_Mu_Plugins_Loader
 */


// Autoload mu-plugins from subfolders
$MU_PLUGINS_PATHS = glob( __DIR__ . '/*', GLOB_ONLYDIR );

// Search and try to load plugin file
// 1. {plugin-name}/{plugin-name}.php
// 2. {plugin-name}/index.php
// 2. {plugin-name}/plugin.php
foreach ( $MU_PLUGINS_PATHS as $path ) {
    $name = basename( $path );

    $files[] = $path . '/' . $name . '.php';
    $files[] = $path . '/index.php';
    $files[] = $path . '/plugin.php';

    foreach ( $files as $file ) {
        if ( file_exists( $file ) ) {
            require_once $file;
            break;
        }
    }

}
