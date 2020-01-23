<?php namespace Depcore\Testimonials;

use Backend;
use System\Classes\PluginBase;

/**
 * testimonials Plugin Information File
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
            'name'        => 'depcore.testimonials::lang.plugin.name',
            'description' => 'depcore.testimonials::lang.plugin.description',
            'author'      => 'depcore',
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
            'Depcore\Testimonials\Components\TestimonialsList' => 'testimonialsList',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'depcore.testimonials.create_testimonials' => [
                'tab' => 'depcore.testimonials::lang.plugin.name',
                'label' => 'depcore.testimonials::lang.permissions.create_testimonials'
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
            'testimonials' => [
                'label'       => 'depcore.testimonials::lang.plugin.name',
                'url'         => Backend::url('depcore/testimonials/testimonials'),
                'icon'        => 'icon-commenting-o',
                'iconSvg'     => 'plugins/depcore/testimonials/assets/images/icon.svg',
                'permissions' => ['depcore.testimonials.*'],
                'order'       => 500,
            ],
        ];
    }

}
