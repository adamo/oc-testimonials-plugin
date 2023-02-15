<?php namespace Depcore\Testimonials\Components;

use Cms\Classes\ComponentBase;
use Depcore\Testimonials\Models\Client;

class ClientsList extends ComponentBase
{
    public $clients;

    public function componentDetails()
    {
        return [
            'name'        => 'depcore.testimonials::lang.components.clientslist.name',
            'description' => 'depcore.testimonials::lang.components.clientslist.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'show_slider' => [
                'title'             => 'depcore.testimonials::lang.components.clientslist.show_slider.title',
                'description'       => 'depcore.testimonials::lang.components.clientslist.show_slider.description',
                'default'           => 0,
                'type'              => 'checkbox',
                'validationMessage' => 'depcore.testimonials::lang.components.clientslist.show_slider.validation_message',
                'placeholder' => 'depcore.testimonials::lang.components.clientslist.show_slider.placeholder',
            ],
            'slider_options' => [
                'title'             => 'depcore.testimonials::lang.components.clientslist.slider_options.title',
                'description'       => 'depcore.testimonials::lang.components.clientslist.slider_options.description',
                'type'              => 'dictionary',
                'required'          => 'false',
            ],
        ];
    }

    /**
     * undocumented function
     *
     * @return void
     * @author Adam
     **/
    public function onRun()
    {
        $this->clients = Client::sorted(  );

        if ($this->property( 'showSlider' )) {
            $this->addJs( '/plugins/depcore/testimonials/assets/js/tiny-slider.js' );
        }
    }
}