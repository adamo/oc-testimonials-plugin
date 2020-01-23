<?php namespace Depcore\Testimonials\Components;

use Cms\Classes\ComponentBase;

class TestimonialsList extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'depcore.testimonials::lang.components.testimonialslist.name',
            'description' => 'depcore.testimonials::lang.components.testimonialslist.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'maxItems' => [
                'title'             => 'depcore.testimonials::lang.components.testimonialslist.max_items.title',
                'description'       => 'depcore.testimonials::lang.components.testimonialslist.max_items.description',
                'default'           => 5,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'depcore.testimonials::lang.components.testimonialslist.max_items.validation_message',
                'placeholder' => 'depcore.testimonials::lang.components.testimonialslist.max_items.placeholder',
                'required' => 'true',
            ],
        ];
    }

}