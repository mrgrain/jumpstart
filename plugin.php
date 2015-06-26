<?php
namespace Vender\Plugin;

/**
 * @link              {{url}}
 * @since             {{version}}
 * @package           {{package}}
 *
 * @wordpress-plugin
 * Plugin Name:       {{plugin_name}}
 * Plugin URI:        {{url}}
 * Description:       {{description}}
 * Version:           {{version}}
 * Author:            {{author}}
 * Author URI:        {{author_url}}
 * License:           {{license}}
 * Text Domain:       {{plugin_slug}}
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Autoload
 */
require_once(__DIR__ . '/autoload.php');

/**
 * Activator and Deactivator
 */
register_activation_hook(__FILE__, 'Core\Activator::activate');
register_deactivation_hook(__FILE__, 'Core\Deactivator::deactivate');

/**
 * Jumpstart your plugin
 */
(new Plugin())->run();
