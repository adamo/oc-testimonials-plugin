<?php namespace Depcore\Testimonials\Models;

use Model;

/**
 * Testimonial Model
 */
class Testimonial extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\Sluggable;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'depcore_testimonials_testimonials';
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = [
        'content',
    ];

    protected $slugs = ['slug' => ['id','author']];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'author' => 'required',
        'content' => 'required',
    ];

    public $customMessages = [
        'author.required' => 'depcore.testimonials::lang.testimonial.author_required',
        'content.required' => 'depcore.testimonials::lang.testimonial.content_required',
    ];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public $attachOne = [
        'client_logo' => 'System\Models\File',
    ];
}
