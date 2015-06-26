<?php
namespace Vender\Plugin;

/**
 * Fired when the plugin is uninstalled.
 *
 * @link        {{url}}
 * @since       {{version}}
 * @package     {{package}}
 */

// If uninstall not called from WordPress, then exit.
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

/**
 * Autoload
 */
require_once(__DIR__ . '/autoload.php');

/**
 * Uninstaller
 */
Core\Uninstaller::uninstall();
