<?php
/**
 * Try to find and include an autload file.
 *
 * The script will look for a vendor/autoload.php in the following locations:
 * - current plugin directory
 * - WordPress plugin directory
 * - WordPress root directory
 *
 * Additionally, it will look for the autload.php must-use plugin
 * in the mu-plugins directory.
 *
 *
 * @link        {{url}}
 * @since       {{version}}
 * @package     {{package}}
 */

foreach(
    array(
        plugin_dir_path(__FILE__) . '/vendor/autoload.php',
        WP_PLUGIN_DIR . '/vendor/autoload.php',
        ABSPATH . '/vendor/autoload.php',
        WPMU_PLUGIN_DIR . '/autoload.php',
    ) as $file
) {
    if (file_exists($file)) {
        return require_once($file);
    }
}
