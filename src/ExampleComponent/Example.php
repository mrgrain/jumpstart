<?php
namespace Vendor\Plugin\ExampleComponent;

use Jumpstart\Battery\Component;
use Jumpstart\Battery\Loader;

/**
 * An example component class.
 *
 * Use this as a based to create your own components:
 * - Add your dependencies to the constructor
 * - Check conditions whether to run (or not) your Component
 * - Define the component's actions
 *
 * @since      {{version}}
 * @package    {{namespace}}
 * @author     {{author}} ({{author_url}})
 */
class Example extends Component
{
    /**
     * The loader that's responsible for maintaining and registering all hooks that power
     * the component.
     *
     * @since       1.0.0
     * @access      protected
     * @var         Loader $loader Maintains and registers all hooks for the plugin.
     */
    protected $loader;

    /**
     * Initialize the Component from the parent plugin.
     *
     * Add your dependencies (e.g. Loader, Path, Slug) to the constructor.
     *
     * @since   {{version}}
     * @param   Loader $loader
     */
    public function __construct(Loader $loader)
    {
        /**
         * Set your class dependencies here.
         */
        $this->loader = $loader;

        /**
         * Check and run your Component
         */
        parent::__construct();
    }

    /**
     * Checks whether the component should be used or not.
     *
     * @since   {{version}}
     * @access  protected
     * @return  boolean
     */
    protected function conditions()
    {
        /**
         * Extend this method with your own checks, e.g. if a specific option is set.
         */
        return true;
    }

    /**
     * Load components and register hooks with WordPress.
     *
     * @since   {{version}}
     * @access  protected
     * @return  void
     */
    protected function run()
    {
        /**
         * Add Actions & Filters:
         * $tag, $function, $priority = 10, $accepted_args = 1
         */
        $this->loader->action('action_name', function () {
        }, 10, 1);
        //$this->loader->filter('filter_name', function () {}, 10, 1);

        /**
         * Enqueue: Styles & Scripts
         * style: $src, $deps = array(), $type = both|wp|admin, $media = 'all'
         * style: $src, $deps = array(), $type = both|wp|admin, $in_footer = false
         */
        //$this->loader->style('resource.css', array(), 'both', 'all');
        //$this->loader->script('resource.js', array(), 'wp', false);
    }
}
