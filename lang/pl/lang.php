<?php

return [
    'plugin' => [
        'name' => 'Referencje',
        'description' => 'Wtyczka umożliwiająca dodawanie referencji od klientów',
    ],
    'permissions' => [
        'create_testimonials' => 'Tworzenie referencji',
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
        'position' => 'Stanowisko w firmie',
        'issued_at' => 'Otrzymana',
    ],
    'testimonials' => [
        'delete_selected_confirm' => 'Usunąć zaznaczoną referencję?',
        'menu_label' => 'Referencje',
        'return_to_list' => 'Powrót do listy referencji',
        'delete_confirm' => 'Na pewno usunąć zaznaczone referencje?',
        'delete_selected_success' => 'Pomyślnie usunięto zaznaczone referencji.',
        'delete_selected_empty' => 'Nie wybrano referencji do usunięcia.',
        'label' => 'Referencje',
        'new' => 'Dodaj referencje',
        'reorder' => 'depcore.testimonials::lang.testimonials.reorder',
    ],
    'components' => [
        'testimonialslist' => [
            'name' => 'Lista referencji',
            'description' => 'Pokazuje listę referencji z możliwością podziału na strony lub przewijaną karuzelę.',
            'max_items' => [
                'title' => 'Maksymalna ilość',
                'validation_message' => 'Proszę podać liczbę lub zostawić puste',
                'placeholder' => '0 lub liczba',
                'description' => 'Ilość wyświetlana',
            ],
            'show_as' => [
                'title' => 'Pokaż jako',
                'description' => 'Wybierz sposób wyświetlania referencji jako lista lub lista przewijana. W przypadku wyświetlania jako lista niezbędne jest dodanie parametru :page? do adresu strony',
                'placeholder' => 'Lista lub lista przewijana',
                'list' => 'Lista',
                'slider' => 'Lista przewijana',
                'validation_message' => 'depcore.testimonials::lang.components.testimonialslist.show_as.validation_message',
            ],
            'show_client_logo' => [
                'title' => 'Pokaż logo klienta',
                'description' => 'Czy wyświetlać logo klienta na liście z referencjami',
            ],
            'per_page' => [
                'title' => 'Ilość na stronie',
                'description' => 'W przypadku wyświetlania jako lista ile referencji na stronę ma się pojawiać',
                'validation_message' => 'Proszę podać poprawną liczbę',
                'placeholder' => '0',
            ],
            'groups' => [
                'list_options' => 'Opcje listy',
            ],
        ],
        'clientslist' => [
            'name' => 'Komponent lista klientów',
            'description' => 'Wyświetla loga klientów jako lista przewijana lub nie',
            'show_slider' => [
                'title' => 'Karuzela',
                'description' => 'Wyświetla listę jako przewijaną karuzelę',
                'validation_message' => 'depcore.testimonials::lang.components.clientslist.show_slider.validation_message',
                'placeholder' => 'depcore.testimonials::lang.components.clientslist.show_slider.placeholder',
            ],
        ],
        'testimoniallist' => [
            'include_css' => [
                'title' => 'Dołącz CSS',
                'description' => 'Dołącza podstawowy arkusz styli z wtyczki Tiny Slider',
            ],
            'groups' => [
                'slider_options' => 'Opcje karuzeli',
            ],
        ],
    ],
    'global' => [
        'no' => 'tak',
        'yes' => 'nie',
    ],
    'client' => [
        'new' => 'Nowy klient',
        'label' => 'klient',
        'create_title' => 'Utwórz klient',
        'update_title' => 'Edytuj klient',
        'preview_title' => 'Podgląd klienta',
        'list_title' => 'Zarządzaj klientami',
        'name' => 'Nazwa firmy',
        'logo' => 'Logo podstawowe',
        'name_required' => 'Imię jest wymagane',
    ],
    'clients' => [
        'delete_selected_confirm' => 'Usunąć zaznaczonych klientów?',
        'menu_label' => 'Klienci',
        'return_to_list' => 'Powrót do listy klientów',
        'delete_confirm' => 'Na pewno usunąć zaznaczone klient?',
        'delete_selected_success' => 'Pomyślnie usunięto zaznaczonych klientów.',
        'delete_selected_empty' => 'Nie wybrano klientów do usunięcia.',
        'label' => 'Klienci',
        'new' => 'Dodaj klienta',
        'reorder' => 'Zmień kolejność',
    ],
];