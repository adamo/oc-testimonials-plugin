<?php namespace Depcore\Testimonials\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Flash;
use Lang;
use Depcore\Testimonials\Models\Testimonial;

/**
 * Testimonials Back-end Controller
 */
class Testimonials extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController',
        'Backend.Behaviors.ReorderController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Depcore.Testimonials', 'testimonials', 'testimonials');
    }

    /**
     * Deleted checked testimonials.
     */
    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $testimonialId) {
                if (!$testimonial = Testimonial::find($testimonialId)) continue;
                $testimonial->delete();
            }

            Flash::success(Lang::get('depcore.testimonials::lang.testimonials.delete_selected_success'));
        }
        else {
            Flash::error(Lang::get('depcore.testimonials::lang.testimonials.delete_selected_empty'));
        }

        return $this->listRefresh();
    }
}
