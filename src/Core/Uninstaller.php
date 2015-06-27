<?php
namespace Vender\Plugin\Core;

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * @since      {{version}}
 * @package    {{package}}
 * @subpackage Core
 * @author     {{author}} <{{author_url}}>
 */
class Uninstaller
{
    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    {{version}}
     */
    public static function uninstall()
    {
        // Code run when plugin gets uninstalled
        // e.g. reverting
    }
}