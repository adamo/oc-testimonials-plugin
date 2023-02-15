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

    public function registerPageSnippets(){
        return $this->registerComponents(  );
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
            'Depcore\Testimonials\Components\ClientsList' => 'clientsList',
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
                'permissions' => ['depcore.testimonials.create_testimonials'],
                'order'       => 500,
                'sideMenu'    => [
                    'testimonials' => [
                        'label' => 'depcore.testimonials::lang.testimonials.label',
                        'url'   => Backend::url('depcore/testimonials/testimonials'),
                        'icon'        => 'icon-commenting-o',
                        'permissions' => ['depcore.testimonials.create_testimonials'],
                    ],
                    'newtestimonial' => [
                        'label' => 'depcore.testimonials::lang.testimonials.new',
                        'url'   => Backend::url('depcore/testimonials/testimonials/create'),
                        'icon'        => 'icon-plus',
                        'permissions' => ['depcore.testimonials.create_testimonials'],
                    ],
                    'clients' => [
                        'label' => 'depcore.testimonials::lang.clients.label',
                        'url'   => Backend::url('depcore/testimonials/clients'),
                        'icon'        => 'icon-user',
                        'permissions' => ['depcore.testimonials.create_testimonials'],
                    ],
                    'newclient' => [
                        'label' => 'depcore.testimonials::lang.clients.new',
                        'url'   => Backend::url('depcore/testimonials/clients/create'),
                        'icon'        => 'icon-plus',
                        'permissions' => ['depcore.testimonials.create_testimonials'],
                    ],
                ],
            ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'makeExpandable' => function ($content, $words){
                    $array = explode(' ', $content);
                    $arrayShortened = array_splice($array, 0, $words);
                    $arrayContent = array_splice($array, 0, count($array));
                    
                    $continuation = implode(' ', $arrayContent);
                    $shortenedString = implode(' ', $arrayShortened);
                    return '<p>' .$shortenedString . '</p><details><summary>&hellip;</summary><p>' . $continuation . '</p></details>';
                }
            ]
        ];
    }   

}
