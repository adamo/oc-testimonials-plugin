<?php

return [
    'plugin' => [
        'name' => 'testimonials',
        'description' => 'Simple testimonials plugin',
    ],
    'permissions' => [
        'some_permission' => 'Permission example',
        'create_testimonials' => 'Create testimonials',
    ],
    'testimonial' => [
        'new' => 'New Testimonial',
        'label' => 'Testimonial',
        'create_title' => 'Create Testimonial',
        'update_title' => 'Edit Testimonial',
        'preview_title' => 'Preview Testimonial',
        'list_title' => 'Manage Testimonials',
        'author' => 'Author',
        'author_required' => 'The author field is required',
        'content_required' => 'The content field is required',
        'is_published' => 'Publish this testimonial',
        'company_name' => 'Company name',
        'content' => 'Content',
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
            'description' => 'List of testimonials',
            'max_items' => [
                'title' => 'Max items',
                'validation_message' => 'Please provide a valid number',
                'placeholder' => '0 or null equals all testimonials',
                'description' => 'Provide a number of testimonials you wish to show',
            ],
        ],
    ],
    'global' => [
        'no' => 'no',
        'yes' => 'yes',
    ],
];