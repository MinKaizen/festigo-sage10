<?php

declare(strict_types=1);

return [
    'key' => 'group-Festival',
    'title' => 'Festival Fields',
    'fields' => [
        [
            'key' => 'field-Festival_Date',
            'label' => 'Date<br><code>date (string)</code><br><code>(yyyy-mm-dd)</code>',
            'name' => 'date',
            'type' => 'date_picker',
            'instructions' => 'Date of the event. For multi-day events, enter the first date',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => ''
            ],
            'display_format' => 'd/m/Y',
            'return_format' => 'Y-m-d',
            'first_day' => 1
        ],
        [
            'key' => 'field-Festival_Location',
            'label' => 'Location<br><code>location (string)</code>',
            'name' => 'location',
            'type' => 'text',
            'instructions' => 'Short location name. e.g. <em>Regatta Center</em>',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => ''
            ],
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => ''
        ],
        [
            'key' => 'field-Festival_GoogleMapsLink',
            'label' => 'Google Maps Link<br><code>google_maps_link (string)</code>',
            'name' => 'google_maps_link',
            'type' => 'url',
            'instructions' => 'Link to Google Maps address',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => ''
            ],
            'default_value' => '',
            'placeholder' => ''
        ],
        [
            'key' => 'field-Festival_Locale',
            'label' => 'Locale<br><code>locale (string)</code><br><code>(local | international)</code>',
            'name' => 'locale',
            'type' => 'radio',
            'instructions' => 'Whether this event is local or international',
            'required' => 1,
            'choices' => [
                'local' => 'Local',
                'international' => 'International'
            ],
            'allow_null' => 0,
            'other_choice' => 0,
            'default_value' => 'local',
            'layout' => 'horizontal',
            'return_format' => 'value',
            'save_other_choice' => 0
        ],
        [
            'key' => 'field-Festival_TicketsReleased?',
            'label' => 'Tickets released?<br><code>tickets_released (bool)</code>',
            'name' => 'tickets_released',
            'type' => 'true_false',
            'instructions' => 'Whether or not tickets are released for this event',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => ''
            ],
            'message' => '',
            'default_value' => 1,
            'ui' => 1,
            'ui_on_text' => 'Released',
            'ui_off_text' => 'Not released'
        ],
        [
            'key' => 'field-Festival_Packages',
            'label' => 'Packages<br><code>packages (arr&lt;object&gt;)</code>',
            'name' => 'packages',
            'type' => 'post_object',
            'instructions' => 'Packages associated with this event',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => ''
            ],
            'post_type' => [
                'product'
            ],
            'taxonomy' => [
                'product_cat:package'
            ],
            'allow_null' => 0,
            'multiple' => 1,
            'return_format' => 'id',
            'ui' => 1
        ],
        [
            'key' => 'field-Festival_FeaturedArtists',
            'label' => 'Featured Artists<br><code>featured_artists (arr&lt;object&gt;)</code>',
            'name' => 'featured_artists',
            'type' => 'post_object',
            'instructions' => 'List of artists featured at this event',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => ''
            ],
            'post_type' => [
                'artist'
            ],
            'taxonomy' => '',
            'allow_null' => 0,
            'multiple' => 1,
            'return_format' => 'id',
            'ui' => 1
        ],
        [
            'key' => 'field-Festival_MusicGroup',
            'label' => 'Music Group<br><code>music_group (object)</code>',
            'name' => 'music_group',
            'type' => 'taxonomy',
            'instructions' => 'Music Group associated with this event',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => ''
            ],
            'taxonomy' => 'music_group',
            'field_type' => 'select',
            'allow_null' => 1,
            'add_term' => 1,
            'save_terms' => 1,
            'load_terms' => 1,
            'return_format' => 'object',
            'multiple' => 0
        ],
        [
            'key' => 'field-Festival_Featured?',
            'label' => 'Featured?<br><code>featured (bool)</code>',
            'name' => 'featured',
            'type' => 'true_false',
            'instructions' => 'Whether to show this festival in the home page \'Featured\' slider',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => ''
            ],
            'message' => 'Featured',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => 'Yes',
            'ui_off_text' => 'No'
        ],
        [
            'key' => 'field-Festival_ShowMetabox',
            'label' => 'Show Metabox?<br><code>featured (bool)</code>',
            'name' => 'show_metabox',
            'type' => 'true_false',
            'instructions' => 'Whether to show the metabox on the Festival page',
            'default_value' => 1,
            'ui' => 1,
            'ui_on_text' => 'Show',
            'ui_off_text' => 'Hide'
        ]
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'festival'
            ]
        ]
    ],
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'seamless',
    'label_placement' => 'left',
    'instruction_placement' => 'field',
    'hide_on_screen' => [
        'excerpt',
        'discussion',
        'comments',
        'revisions',
        'slug',
        'author',
        'format',
        'page_attributes',
        'categories',
        'tags',
        'send-trackbacks'
    ],
    'active' => true,
    'description' => ''
];
