<?php
namespace Vendor\Plugin;

/**
 * @link              {{url}}
 * @since             {{version}}
 * @package           {{namespace}}
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


/**
 * If this file is called directly, abort.
 */
if (!defined('WPINC')) {
    die;
}

/**
 * Jumpstart your plugin
 */
require_once(__DIR__ . 'src/autoload.php');
(new Plugin(__FILE__))->jumpstart();
