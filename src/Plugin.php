<?php
namespace Vendor\Plugin;

use Jumpstart\Battery\Loader;
use Jumpstart\Battery\I18n;

/**
 * The core plugin class.
 *
 * This is used to define internationalization and load components.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      {{version}}
 * @package    {{namespace}}
 * @author     {{author}} ({{author_url}})
 */
class Plugin extends \Jumpstart\Battery\Plugin
{
    /**
     * Define the core functionality of the plugin.
     *
     * Set the plugin name and the plugin version that can be used throughout the plugin.
     * Define the locale and load the components.
     *
     * @since       {{version}}
     * @access      public
     */
    public function __construct()
    {
        $this->slug = '{{plugin_slug}}';
        $this->version = '{{version}}';
        $this->path = dirname(__FILE__);
        $this->loader = new Loader($this->getSlug(), $this->getVersion(), $this->getPath());

        // Run the plugin
        parent::__construct();
    }

    /**
     * Load components and register hooks with WordPress.
     *
     * @since       {{version}}
     * @access      protected
     */
    protected function run()
    {
        /**
         * Components:
         * - I18n for internationalization
         * - SampleComponent as an example, add your functionality there.
         */
        new I18n($this->getSlug(), $this->getPath(), $this->getLoader());
        new SampleComponent($this->getLoader());

        /**
         * For a small plugin, you might want to define your actions directly in here:
         */
        $this->loader->action('action_name', function() {}, 10, 1);
        $this->loader->style('resource.css', array(), 'both', 'all');
    }
}
