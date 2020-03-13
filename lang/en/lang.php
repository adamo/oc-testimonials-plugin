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
        'position' => 'depcore.testimonials::lang.testimonial.position',
        'issued_at' => 'depcore.testimonials::lang.testimonial.issued_at',
    ],
    'testimonials' => [
        'delete_selected_confirm' => 'Delete the selected Testimonials?',
        'menu_label' => 'Testimonials',
        'return_to_list' => 'Return to Testimonials',
        'delete_confirm' => 'Do you really want to delete this Testimonial?',
        'delete_selected_success' => 'Successfully deleted the selected Testimonials.',
        'delete_selected_empty' => 'There are no selected Testimonials to delete.',
        'label' => 'depcore.testimonials::lang.testimonials.label',
        'new' => 'depcore.testimonials::lang.testimonials.new',
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
                'title' => 'depcore.testimonials::lang.components.testimonialslist.show_as.title',
                'description' => 'depcore.testimonials::lang.components.testimonialslist.show_as.description',
                'validation_message' => 'depcore.testimonials::lang.components.testimonialslist.show_as.validation_message',
                'placeholder' => 'depcore.testimonials::lang.components.testimonialslist.show_as.placeholder',
                'list' => 'depcore.testimonials::lang.components.testimonialslist.show_as.list',
                'slider' => 'depcore.testimonials::lang.components.testimonialslist.show_as.slider',
            ],
            'show_client_logo' => [
                'title' => 'depcore.testimonials::lang.components.testimonialslist.show_client_logo.title',
                'description' => 'depcore.testimonials::lang.components.testimonialslist.show_client_logo.description',
            ],
            'per_page' => [
                'title' => 'depcore.testimonials::lang.components.testimonialslist.per_page.title',
                'description' => 'depcore.testimonials::lang.components.testimonialslist.per_page.description',
                'validation_message' => 'depcore.testimonials::lang.components.testimonialslist.per_page.validation_message',
                'placeholder' => 'depcore.testimonials::lang.components.testimonialslist.per_page.placeholder',
            ],
            'groups' => [
                'list_options' => 'depcore.testimonials::lang.components.testimonialslist.groups.list_options',
            ],
        ],
        'clientslist' => [
            'name' => 'ClientsList Component',
            'description' => 'No description provided yet...',
            'show_slider' => [
                'title' => 'depcore.testimonials::lang.components.clientslist.show_slider.title',
                'description' => 'depcore.testimonials::lang.components.clientslist.show_slider.description',
                'validation_message' => 'depcore.testimonials::lang.components.clientslist.show_slider.validation_message',
                'placeholder' => 'depcore.testimonials::lang.components.clientslist.show_slider.placeholder',
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
        'name' => 'depcore.testimonials::lang.client.name',
        'logo' => 'depcore.testimonials::lang.client.logo',
        'name_required' => 'depcore.testimonials::lang.client.name_required',
    ],
    'clients' => [
        'delete_selected_confirm' => 'Delete the selected Clients?',
        'menu_label' => 'Clients',
        'return_to_list' => 'Return to Clients',
        'delete_confirm' => 'Do you really want to delete this Client?',
        'delete_selected_success' => 'Successfully deleted the selected Clients.',
        'delete_selected_empty' => 'There are no selected Clients to delete.',
        'label' => 'depcore.testimonials::lang.clients.label',
        'new' => 'depcore.testimonials::lang.clients.new',
    ],
];