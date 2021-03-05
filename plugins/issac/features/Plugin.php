<?php namespace Issac\Features;

use Backend;
use System\Classes\PluginBase;

/**
 * Features Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Features',
            'description' => 'No description provided yet...',
            'author'      => 'Issac',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Issac\Features\Components\Posts' => 'posts'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'issac.features.some_permission' => [
                'tab' => 'Features',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'features' => [
                'label'       => 'Features',
                'url'         => Backend::url('issac/features/index'),
                'icon'        => 'icon-leaf',
                'permissions' => ['issac.features.*'],
                'order'       => 500,
            ],
        ];
    }
}
