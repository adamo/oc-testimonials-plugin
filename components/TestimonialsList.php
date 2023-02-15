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
            'show_as' => [
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
            'max_items' => [
                'title'             => 'depcore.testimonials::lang.components.testimonialslist.max_items.title',
                'description'       => 'depcore.testimonials::lang.components.testimonialslist.max_items.description',
                'default'           => 5,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'depcore.testimonials::lang.components.testimonialslist.max_items.validation_message',
                'placeholder' => 'depcore.testimonials::lang.components.testimonialslist.max_items.placeholder',
                'required' => 'true',
            ],
            'show_client_logo' => [
                'title'             => 'depcore.testimonials::lang.components.testimonialslist.show_client_logo.title',
                'description'       => 'depcore.testimonials::lang.components.testimonialslist.show_client_logo.description',
                'default'           => 1,
                'type'              => 'checkbox',
            ],
            'per_page' => [
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
            'include_css' => [
                'title'             => 'depcore.testimonials::lang.components.testimoniallist.include_css.title',
                'description'       => 'depcore.testimonials::lang.components.testimoniallist.include_css.description',
                'type'              => 'checkbox',
                'group' => 'depcore.testimonials::lang.components.testimoniallist.groups.slider_options',
            ],
            'include_js' => [
                'title'             => 'depcore.testimonials::lang.components.testimoniallist.include_js.title',
                'description'       => 'depcore.testimonials::lang.components.testimoniallist.include_js.description',
                'type'              => 'checkbox',
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
    public function onRun() {
        $this->initialize(  );
        $this->queryTestimonials(  );
    }

    protected function initialize(  ){

        if ( $this->property( 'show_as' ) == 'slider' ) {
            if($this->property( 'include_js' )){
                $this->addJs( '/plugins/depcore/testimonials/assets/js/tiny-slider.js' );
                $this->addJs( '/plugins/depcore/testimonials/assets/js/activate-tns.js' );
                $this->addJs( '/plugins/depcore/testimonials/assets/js/text-expander.js' );
            };
            $this->property( 'include_css' ) ? $this->addCss( '/plugins/depcore/testimonials/assets/css/tiny-slider.css' ) : null ;
        }
    }

    protected function queryTestimonials(  ){
        $page = $this->param( 'page' ) ? $this->param( 'page' ) : 0;

        (integer) $this->property( 'max_items' ) > 0 ?
            $this->testimonials = Testimonial::published( $this->property( 'max_items' ) )->get(  ) :
            $this->testimonials = Testimonial::published()->paginate( $this->property( 'per_page' ) ,$page ) ;
            
            // foreach($this->testimonials as $testimonial){
            //     $testimonial->content = '<p>test </p><details><sumary>wiecej</sumary><p>rozwiniete</p></details>';
            // }
    }
}