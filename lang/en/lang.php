<?php

return [
    'plugin' => [
        'name' => 'Testimonials',
        'description' => 'Simple testimonials plugin',
    ],
    'permissions' => [
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
        'position' => 'Position (in company)',
        'issued_at' => 'Issued at',
    ],
    'testimonials' => [
        'delete_selected_confirm' => 'Delete the selected Testimonials?',
        'menu_label' => 'Testimonials',
        'return_to_list' => 'Return to Testimonials',
        'delete_confirm' => 'Do you really want to delete this Testimonial?',
        'delete_selected_success' => 'Successfully deleted the selected Testimonials.',
        'delete_selected_empty' => 'There are no selected Testimonials to delete.',
        'label' => 'Testimonials',
        'new' => 'New testimonial',
        'reorder' => 'Reorder testimonials',
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
            'show_as' => [
                'title' => 'Show as',
                'description' => 'A list or carousel',
                'validation_message' => 'depcore.testimonials::lang.components.testimonialslist.show_as.validation_message',
                'placeholder' => 'depcore.testimonials::lang.components.testimonialslist.show_as.placeholder',
                'list' => 'List',
                'slider' => 'Carousel slider',
            ],
            'show_client_logo' => [
                'title' => 'Show logo',
                'description' => 'Includes the clients company logo',
            ],
            'per_page' => [
                'title' => 'Per page',
                'description' => 'If choosen to display as list, show testimonials on page (required to configure url options - see documentation)',
                'validation_message' => '',
                'placeholder' => '0-xxx',
            ],
            'groups' => [
                'list_options' => 'List options',
            ],
        ],
        'clientslist' => [
            'name' => 'Clients list',
            'description' => 'Show clients logos in a list or as carousel slider',
            'show_slider' => [
                'title' => 'Show as carousel',
                'description' => '',
            ],
        ],
        'testimoniallist' => [
            'include_css' => [
                'title' => 'Include CSS',
                'description' => 'Include the default Tiny Slider stylesheet',
            ],
            'include_js' => [
                'title' => 'Include JS',
                'description' => 'Include the default Tiny Slider scripts',
            ],
            'groups' => [
                'slider_options' => 'Carousel options',
            ],
        ],
    ],
    'global' => [
        'no' => 'no',
        'yes' => 'yes',
    ],
    'client' => [
        'new' => 'New Client',
        'label' => 'Client',
        'create_title' => 'Create Client',
        'update_title' => 'Edit Client',
        'preview_title' => 'Preview Client',
        'list_title' => 'Manage Clients',
        'name' => 'Name',
        'logo' => 'Logo',
        'name_required' => 'The client name is required',
    ],
    'clients' => [
        'delete_selected_confirm' => 'Delete the selected Clients?',
        'menu_label' => 'Clients',
        'return_to_list' => 'Return to Clients',
        'delete_confirm' => 'Do you really want to delete this Client?',
        'delete_selected_success' => 'Successfully deleted the selected Clients.',
        'delete_selected_empty' => 'There are no selected Clients to delete.',
        'label' => 'Clients',
        'new' => 'New client',
        'reorder' => 'Reorder clients',
    ],
];