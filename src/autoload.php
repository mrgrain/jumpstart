<?php
/**
 * Try to find and include an autoload file.
 *
 * The script will look for a vendor/autoload.php in the following locations:
 * - current plugin directory
 * - WordPress plugin directory
 * - WordPress root directory
 *
 * Additionally, it will look for the autoload.php must-use plugin
 * in the mu-plugins directory.
 *
 *
 * @link        https://wordpress.jumpstart.rocks
 */
// Load
foreach (
    array(
        plugin_dir_path(dirname(__FILE__)) . '/vendor/autoload.php',
        WP_PLUGIN_DIR . '/vendor/autoload.php',
        ABSPATH . '/vendor/autoload.php',
        WPMU_PLUGIN_DIR . '/autoload.php',
    ) as $file
) {
    if (file_exists($file)) {
        return require_once($file);
    }
}
