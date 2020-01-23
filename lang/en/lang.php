<?php

return [
    'plugin' => [
        'name' => 'testimonials',
        'description' => 'No description provided yet...',
    ],
    'permissions' => [
        'some_permission' => 'Permission example',
        'create_testimonials' => 'depcore.testimonials::lang.permissions.create_testimonials',
    ],
    'testimonial' => [
        'new' => 'New Testimonial',
        'label' => 'Testimonial',
        'create_title' => 'Create Testimonial',
        'update_title' => 'Edit Testimonial',
        'preview_title' => 'Preview Testimonial',
        'list_title' => 'Manage Testimonials',
    ],
    'testimonials' => [
        'delete_selected_confirm' => 'Delete the selected Testimonials?',
        'menu_label' => 'Testimonials',
        'return_to_list' => 'Return to Testimonials',
        'delete_confirm' => 'Do you really want to delete this Testimonial?',
        'delete_selected_success' => 'Successfully deleted the selected Testimonials.',
        'delete_selected_empty' => 'There are no selected Testimonials to delete.',
    ],
    'components' => [
        'testimonialslist' => [
            'name' => 'TestimonialsList Component',
            'description' => 'No description provided yet...',
            'max_items' => [
                'title' => 'depcore.testimonials::lang.components.testimonialslist.max_items.title',
                'validation_message' => 'depcore.testimonials::lang.components.testimonialslist.max_items.validation_message',
                'placeholder' => 'depcore.testimonials::lang.components.testimonialslist.max_items.placeholder',
            ],
        ],
    ],
    'componentstestimonialslist' => [
        'max_items' => [
            'description' => 'depcore.testimonials::lang.componentstestimonialslist.max_items.description',
        ],
    ],
];