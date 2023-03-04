<?php

declare(strict_types=1);

return [
    'key' => 'group-FestigoSettings',
    'title' => 'Options',
    'fields' => [
        [
            'key' => 'field-FestigoSettings_Email',
            'label' => 'Email<br><code>email (string)</code>',
            'name' => 'email',
            'type' => 'email',
            'instructions' => 'Public email for general inquiries',
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
            'append' => ''
        ],
        [
            'key' => 'field-FestigoSettings_BusinessAddress',
            'label' => 'Business Address<br><code>address (string)</code>',
            'name' => 'address',
            'type' => 'text',
            'instructions' => 'Official business address according to your ABN',
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
            'key' => 'field-FestigoSettings_PhoneNumber',
            'label' => 'Phone Number<br><code>phone_number (string)</code>',
            'name' => 'phone_number',
            'type' => 'text',
            'instructions' => 'Business phone number',
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
            'key' => 'field-FestigoSettings_Facebook',
            'label' => 'Facebook<br><code>facebook (string)</code>',
            'name' => 'facebook',
            'type' => 'url',
            'instructions' => 'Facebook URL',
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
            'key' => 'field-FestigoSettings_Twitter',
            'label' => 'Twitter<br><code>twitter (string)</code>',
            'name' => 'twitter',
            'type' => 'url',
            'instructions' => 'Twitter URL',
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
            'key' => 'field-FestigoSettings_Instagram',
            'label' => 'Instagram<br><code>instagram (string)</code>',
            'name' => 'instagram',
            'type' => 'url',
            'instructions' => 'Instagram URL',
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
            'key' => 'field-FestigoSettings_LinkedIn',
            'label' => 'LinkedIn<br><code>linkedin (string)</code>',
            'name' => 'linkedin',
            'type' => 'url',
            'instructions' => 'LinkedIn URL',
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
            'key' => 'field-FestigoSettings_HomePage',
            'label' => 'Home Page<br><code>home_page (array)</code>',
            'name' => 'home_page',
            'type' => 'group',
            'required' => 0,
            'sub_fields' => [
                [
                    'key' => 'field-FestigoSettings_HomePage_HeroTitle',
                    'label' => 'Hero Title<br><code>hero_title (string)</code>',
                    'name' => 'hero_title',
                    'type' => 'text',
                    'instructions' => 'This is the main heading in the hero section',
                    'default_value' => 'Discover The Best Music Events in Australia and the World!',
                    'placeholder' => 'Discover The Best Music Events in Australia and the World!',
                    'required' => 1,
                ],
                [
                    'key' => 'field-FestigoSettings_HomePage_HeroSubtitle',
                    'label' => 'Hero Subtitle<br><code>hero_subtitle (string)</code>',
                    'name' => 'hero_subtitle',
                    'type' => 'text',
                    'instructions' => 'This is the sub heading in the hero section',
                    'default_value' => 'We\'re adding more and more events all the time. Search our current listing now!',
                    'placeholder' => 'We\'re adding more and more events all the time. Search our current listing now!',
                    'required' => 1,
                ],
            ],
        ],
        [
            'key' => 'field-FestigoSettings_Footer',
            'label' => 'Footer<br><code>footer (array)</code>',
            'name' => 'footer',
            'type' => 'group',
            'required' => 0,
            'sub_fields' => [
                [
                    'key' => 'field-FestigoSettings_HomePage_Copyright',
                    'label' => 'Copyright<br><code>copyright (string)</code>',
                    'name' => 'copyright',
                    'type' => 'text',
                    'instructions' => 'The copyright text at the very bottom of every page',
                    'default_value' => '© Festigo Travel ' . date('Y'),
                    'placeholder' => '© Festigo Travel ' . date('Y'),
                    'required' => 1,
                ],
            ],
        ],
    ],
    'location' => [
        [
            [
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'festigo-settings'
            ]
        ]
    ],
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'seamless',
    'label_placement' => 'left',
    'instruction_placement' => 'field',
    'hide_on_screen' => '',
    'active' => true,
    'description' => 'Dev note: Use <code>get_field($field_name, \'option\')</code> to access option values.'
];
