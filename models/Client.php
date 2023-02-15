<?php namespace Depcore\Testimonials\Models;

use Model;

/**
 * Client Model
 */
class Client extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;


    public $rules = [
        'name' => 'required',
    ];

    public $customMessages = [
        'name.required' => 'depcore.testimonials::lang.client.name_required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'depcore_testimonials_clients';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $attachOne = [
        'logo' => '\System\Models\File',
    ];

    /**
     * testimonials reference
     *
     * @var array
     **/
    public $hasMany= [
        'testimonials' => ['Depcore\Testimonials\Models\Testimonial'],
    ];

    /**
     * Get only published elements from database
     *
     * @return Object
     * @author Adam
     **/
    public function scopeSorted($query)
    {
        return $query->orderBy( 'sort_order' );
    }

}
