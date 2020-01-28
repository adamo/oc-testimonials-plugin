<?php

return [
    'plugin' => [
        'name' => 'Referencje',
        'description' => 'Wtyczka umożliwiająca dodawanie referencji od klientów',
    ],
    'permissions' => [
        'some_permission' => 'Przykład prawa dostępu',
        'create_testimonials' => 'depcore.testimonials::lang.permissions.create_testimonials',
    ],
    'testimonial' => [
        'new' => 'Nowa referencja',
        'label' => 'Referencje',
        'create_title' => 'Utwórz referencję',
        'update_title' => 'Edytuj referencję',
        'preview_title' => 'Podgląd referencji',
        'list_title' => 'Zarządzaj referencją',
        'author' => 'Autor',
        'author_required' => 'Wymagane jest podanie autora',
        'content_required' => 'Treść jest wymagana',
        'is_published' => 'Opublikować?',
        'company_name' => 'Nazwa firmy',
        'content' => 'Treść',
    ],
    'testimonials' => [
        'delete_selected_confirm' => 'Usunąć zaznaczoną referencję?',
        'menu_label' => 'Testimonials',
        'return_to_list' => 'Powrót do listy referencji',
        'delete_confirm' => 'Na pewno usunąć zaznaczone reference?',
        'delete_selected_success' => 'Pomyślnie usunięto zaznaczone referencji.',
        'delete_selected_empty' => 'Nie wybrano referencji do usunięcia.',
    ],
    'components' => [
        'testimonialslist' => [
            'name' => 'Lista referencji',
            'description' => 'Nie dodano opisu',
            'max_items' => [
                'title' => 'Maksymalna ilość',
                'validation_message' => 'Proszę podać liczbę lub zostawić puste',
                'placeholder' => '0 lub liczba',
                'description' => 'depcore.testimonials::lang.componentstestimonialslist.max_items.description',
            ],
        ],
    ],
    'global' => [
        'no' => 'tak',
        'yes' => 'nie',
    ],
];