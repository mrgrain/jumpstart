<?php
namespace Vendor\Plugin;

use Jumpstart\Trampoline\Loader;
use Jumpstart\Trampoline\I18n;

/**
 * The core plugin class.
 *
 * This is used to define internationalization and load components.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      {{version}}
 * @package    {{package}}
 * @author     {{author}} <{{author_url}}>
 */
class Plugin
{
    /**
     * The unique identifier of this plugin.
     *
     * @since       {{version}}
     * @access      protected
     * @var         string $slug The string used to uniquely identify this plugin.
     */
    protected $slug;

    /**
     * The current version of the plugin.
     *
     * @since       {{version}}
     * @access      protected
     * @var         string $version The current version of the plugin.
     */
    protected $version;

    /**
     * The loader that's responsible for maintaining and registering all hooks that power
     * the plugin.
     *
     * @since       {{version}}
     * @access      protected
     * @var         Loader $loader Maintains and registers all hooks for the plugin.
     */
    protected $loader;

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

        $this->loader = new Loader($this->getSlug(), $this->getVersion());
        $this->setLocale();

        $this->jumpstart();
    }

    /**
     * Load components and register hooks with WordPress.
     *
     * @since       {{version}}
     * @access      protected
     */
    protected function jumpstart()
    {

        /**
         * Components
         */
        new Component($this->getLoader());

        /**
         * Actions & Filters
         * $tag, $function, $priority = 10, $accepted_args = 1
         */
        $this->loader->action('action_name', function() {}, 10, 1);
        $this->loader->filter('filter_name', function() {}, 10, 1);

        /**
         * Styles & Scripts
         * style: $src, $deps = array(), $type = both|wp|admin, $media = 'all'
         * style: $src, $deps = array(), $type = both|wp|admin, $in_footer = false
         */
        $this->loader->style('resource.css', array(), 'both', 'all');
        $this->loader->script('resource.js', array(), 'wp', false);
    }

    /**
     * Define the locale for this plugin for internationalization.
     *
     * Uses the I18n class in order to set the domain and to register the hook
     * with WordPress.
     *
     * @since    {{version}}
     * @access   protected
     */
    protected function setLocale()
    {
        $i18n = new I18n();
        $i18n->setDomain($this->getSlug());
        $this->loader->action('plugins_loaded', $i18n, 'loadTextdomain');
    }

    /**
     * Run the loader to execute all of the hooks with WordPress.
     *
     * @since   {{version}}
     */
    public function run()
    {
        $this->loader->run();
    }

    /**
     * The plugin slug used to uniquely identify it within the context of
     * WordPress and to define internationalization functionality.
     *
     * @since   {{version}}
     * @return  string      The plugin slug.
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Retrieve the version number of the plugin.
     *
     * @since   {{version}}
     * @return  string      The version number of the plugin.
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The reference to the class that orchestrates the hooks with the plugin.
     *
     * @since   {{version}}
     * @return  Loader      Orchestrates the hooks of the plugin.
     */
    public function getLoader()
    {
        return $this->loader;
    }
}
