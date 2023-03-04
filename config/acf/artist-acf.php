<?php

declare(strict_types=1);

return [
    'key' => 'group-Artist',
    'title' => 'Artist',
    'fields' => [
        [
            'key' => 'field-Artist_SocialMedia',
            'label' => 'Social Media',
            'name' => 'social_media',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => ''
            ],
            'layout' => 'row',
            'sub_fields' => [
                [
                    'key' => 'field-Artist_SocialMedia_Instagram',
                    'label' => 'Instagram',
                    'name' => 'instagram',
                    'type' => 'url',
                    'instructions' => '',
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
                    'key' => 'field-Artist_SocialMedia_Facebook',
                    'label' => 'Facebook',
                    'name' => 'facebook',
                    'type' => 'url',
                    'instructions' => '',
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
                    'key' => 'field-Artist_SocialMedia_Twitter',
                    'label' => 'Twitter',
                    'name' => 'twitter',
                    'type' => 'url',
                    'instructions' => '',
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
                    'key' => 'field-Artist_SocialMedia_Deezer',
                    'label' => 'Deezer',
                    'name' => 'deezer',
                    'type' => 'url',
                    'instructions' => '',
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
                    'key' => 'field-Artist_SocialMedia_Spotify',
                    'label' => 'Spotify',
                    'name' => 'spotify',
                    'type' => 'url',
                    'instructions' => '',
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
                    'key' => 'field-Artist_SocialMedia_YouTube',
                    'label' => 'YouTube',
                    'name' => 'youtube',
                    'type' => 'url',
                    'instructions' => '',
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
                    'key' => 'field-Artist_SocialMedia_SoundCloud',
                    'label' => 'SoundCloud',
                    'name' => 'soundcloud',
                    'type' => 'url',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    ],
                    'default_value' => '',
                    'placeholder' => ''
                ]
            ]
        ]
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'artist'
            ]
        ]
    ],
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'left',
    'instruction_placement' => 'label',
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
