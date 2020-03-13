<?php namespace Depcore\Testimonials\Components;

use Cms\Classes\ComponentBase;
use Depcore\Testimonials\Models\Testimonial;

class TestimonialsList extends ComponentBase
{
    /**
     * undocumented class variable
     *
     * @var string
     **/
    public $testimonials;

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
            'showAs' => [
                'title'             => 'depcore.testimonials::lang.components.testimonialslist.show_as.title',
                'description'       => 'depcore.testimonials::lang.components.testimonialslist.show_as.description',
                'default'           => 'list',
                'type'              => 'dropdown',
                'validationMessage' => 'depcore.testimonials::lang.components.testimonialslist.show_as.validation_message',
                'placeholder' => 'depcore.testimonials::lang.components.testimonialslist.show_as.placeholder',
                'required' => 'true',
                'options' => [
                    'list'=>'depcore.testimonials::lang.components.testimonialslist.show_as.list',
                    'slider'=>'depcore.testimonials::lang.components.testimonialslist.show_as.slider'],
            ],
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
            'showClientLogo' => [
                'title'             => 'depcore.testimonials::lang.components.testimonialslist.show_client_logo.title',
                'description'       => 'depcore.testimonials::lang.components.testimonialslist.show_client_logo.description',
                'default'           => 1,
                'type'              => 'checkbox',
            ],
            'perPage' => [
                'title'             => 'depcore.testimonials::lang.components.testimonialslist.per_page.title',
                'description'       => 'depcore.testimonials::lang.components.testimonialslist.per_page.description',
                'default'           => 10,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'depcore.testimonials::lang.components.testimonialslist.per_page.validation_message',
                'placeholder' => 'depcore.testimonials::lang.components.testimonialslist.per_page.placeholder',
                'required' => 'false',
                'group' => 'depcore.testimonials::lang.components.testimonialslist.groups.list_options',
            ],
            'includeCss' => [
                'title'             => 'depcore.testimonials::lang.components.testimoniallist.include_css.title',
                'description'       => 'depcore.testimonials::lang.components.testimoniallist.include_css.description',
                'type'              => 'checkbox',
                'required' => 'true',
                'group' => 'depcore.testimonials::lang.components.testimoniallist.groups.slider_options',
            ],
        ];
    }


    /**
     * get testimonials
     *
     * @return void
     * @author Adam
     **/
    public function onRun()
    {
        $maxItems = $this->property( 'maxItems' );

        if ( $this->property( 'showAs' ) == 'slider' ) {
            $this->addJs( '/plugins/depcore/testimonials/assets/js/tiny-slider.js'  );
        }

        $this->testimonials = Testimonial::published()->get(  );

    }
}