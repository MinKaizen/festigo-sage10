<?php

declare(strict_types=1);

return [
    'key' => 'group-Package',
    'title' => 'Packaged Products',
    'fields' => [
        [
            "key" => "field-Package_Ticket",
            "label" => "Ticket",
            "name" => "ticket",
            "type" => "group",
            "instructions" => "",
            "required" => 0,
            "conditional_logic" => 0,
            "wrapper" => ["width" => "", "class" => "", "id" => ""],
            "layout" => "row",
            "sub_fields" => [
                [
                    "key" => "field-Package_Ticket_Id",
                    "label" => "ID",
                    "name" => "id",
                    "type" => "post_object",
                    "instructions" =>
                        "Click to select the a ticket to include in this package",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "post_type" => ["product"],
                    "taxonomy" => ["product_cat:tickets"],
                    "allow_null" => 1,
                    "multiple" => 0,
                    "return_format" => "id",
                    "ui" => 1,
                ],
                [
                    "key" => "field-Package_Ticket_Label",
                    "label" => "Label",
                    "name" => "label",
                    "type" => "text",
                    "instructions" =>
                        "Ticket type or short name to use instead of full Ticket name. E.g.`Standard Ticket` or `Premium Pass`",
                    "required" => 1,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field-Package_Ticket_Id",
                                "operator" => "!=empty",
                            ],
                        ],
                    ],
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "default_value" => "",
                    "placeholder" => "e.g. Standard Ticket",
                    "prepend" => "",
                    "append" => "",
                    "maxlength" => "",
                ],
                [
                    "key" => "field-Package_Ticket_Price",
                    "label" => "Price",
                    "name" => "price",
                    "type" => "number",
                    "instructions" => "Price per ticket",
                    "required" => 1,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field-Package_Ticket_Id",
                                "operator" => "!=empty",
                            ],
                        ],
                    ],
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "default_value" => "",
                    "placeholder" => "",
                    "prepend" => "",
                    "append" => "",
                    "min" => 0,
                    "max" => "",
                    "step" => "",
                ],
                [
                    "key" => "field-Package_Ticket_MinQuantity",
                    "label" => "Min Quantity",
                    "name" => "min_quantity",
                    "type" => "number",
                    "instructions" => "",
                    "required" => 1,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field-Package_Ticket_Id",
                                "operator" => "!=empty",
                            ],
                        ],
                    ],
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "default_value" => "",
                    "placeholder" => "",
                    "prepend" => "",
                    "append" => "",
                    "min" => 1,
                    "max" => "",
                    "step" => 1,
                ],
                [
                    "key" => "field-Package_Ticket_MaxQuantity",
                    "label" => "Max Quantity",
                    "name" => "max_quantity",
                    "type" => "number",
                    "instructions" => "",
                    "required" => 1,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field-Package_Ticket_Id",
                                "operator" => "!=empty",
                            ],
                        ],
                    ],
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "default_value" => "",
                    "placeholder" => "",
                    "prepend" => "",
                    "append" => "",
                    "min" => "",
                    "max" => "",
                    "step" => 1,
                ],
            ],
        ],
        [
            "key" => "field-Package_Accom",
            "label" => "Accom",
            "name" => "accom",
            "type" => "group",
            "instructions" => "",
            "required" => 0,
            "conditional_logic" => 0,
            "wrapper" => ["width" => "", "class" => "", "id" => ""],
            "layout" => "row",
            "sub_fields" => [
                [
                    "key" => "field-Package_Accom_Id",
                    "label" => "ID",
                    "name" => "id",
                    "type" => "post_object",
                    "instructions" =>
                        "Click to select the accom to include in this package",
                    "required" => 0,
                    "conditional_logic" => 0,
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "post_type" => ["product"],
                    "taxonomy" => ["product_cat:accommodation"],
                    "allow_null" => 1,
                    "multiple" => 0,
                    "return_format" => "id",
                    "ui" => 1,
                ],
                [
                    "key" => "field-Package_Accom_Name",
                    "label" => "Name",
                    "name" => "name",
                    "type" => "text",
                    "instructions" => "",
                    "required" => 1,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field-Package_Accom_Id",
                                "operator" => "!=empty",
                            ],
                        ],
                    ],
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "default_value" => "",
                    "placeholder" => "e.g. Milton Hotel",
                    "prepend" => "",
                    "append" => "",
                    "maxlength" => "",
                ],
                [
                    "key" => "field-Package_Accom_Address",
                    "label" => "Address",
                    "name" => "address",
                    "type" => "text",
                    "instructions" => "",
                    "required" => 1,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field-Package_Accom_Id",
                                "operator" => "!=empty",
                            ],
                        ],
                    ],
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "default_value" => "",
                    "placeholder" => "e.g. 123 Main Street, Cabramatta",
                    "prepend" => "",
                    "append" => "",
                    "maxlength" => "",
                ],
                [
                    "key" => "field-Package_Accom_GoogleMapsLink",
                    "label" => "Google Maps Link",
                    "name" => "google_maps_link",
                    "type" => "url",
                    "instructions" => "",
                    "required" => 1,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field-Package_Accom_Id",
                                "operator" => "!=empty",
                            ],
                        ],
                    ],
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "default_value" => "",
                    "placeholder" => "https://...",
                ],
                [
                    "key" => "field-Package_Accom_Date",
                    "label" => "Date",
                    "name" => "date",
                    "type" => "date_picker",
                    "instructions" => "Start date of accommodation",
                    "required" => 1,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field-Package_Accom_Id",
                                "operator" => "!=empty",
                            ],
                        ],
                    ],
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "display_format" => "F j, Y",
                    "return_format" => "Y-m-d",
                    "first_day" => 1,
                ],
                [
                    "key" => "field-Package_Accom_MinPeople",
                    "label" => "Min People",
                    "name" => "min_people",
                    "type" => "number",
                    "instructions" => "",
                    "required" => 1,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field-Package_Accom_Id",
                                "operator" => "!=empty",
                            ],
                        ],
                    ],
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "default_value" => "",
                    "placeholder" => "",
                    "prepend" => "",
                    "append" => "",
                    "min" => 1,
                    "max" => "",
                    "step" => 1,
                ],
                [
                    "key" => "field-Package_Accom_MaxPeople",
                    "label" => "Max People",
                    "name" => "max_people",
                    "type" => "number",
                    "instructions" => "",
                    "required" => 1,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field-Package_Accom_Id",
                                "operator" => "!=empty",
                            ],
                        ],
                    ],
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "default_value" => "",
                    "placeholder" => "",
                    "prepend" => "",
                    "append" => "",
                    "min" => "",
                    "max" => "",
                    "step" => 1,
                ],
                [
                    "key" => "field-Package_Accom_Options",
                    "label" => "Options",
                    "name" => "options",
                    "type" => "repeater",
                    "instructions" => "",
                    "required" => 1,
                    "conditional_logic" => [
                        [
                            [
                                "field" => "field-Package_Accom_Id",
                                "operator" => "!=empty",
                            ],
                        ],
                    ],
                    "wrapper" => ["width" => "", "class" => "", "id" => ""],
                    "collapsed" => "field-Package_Accom_Options_Nights",
                    "min" => 1,
                    "max" => 0,
                    "layout" => "row",
                    "button_label" => "Add Accom Option",
                    "sub_fields" => [
                        [
                            "key" => "field-Package_Accom_Options_Id",
                            "label" => "ID",
                            "name" => "id",
                            "type" => "post_object",
                            "instructions" =>
                                "Select which Accommodation Option to include",
                            "required" => 1,
                            "conditional_logic" => 0,
                            "wrapper" => ["width" => "", "class" => "", "id" => ""],
                            "post_type" => ["product_variation"],
                            "taxonomy" => "",
                            "allow_null" => 0,
                            "multiple" => 0,
                            "return_format" => "id",
                            "ui" => 1,
                        ],
                        [
                            "key" => "field-Package_Accom_Options_Nights",
                            "label" => "Nights",
                            "name" => "nights",
                            "type" => "number",
                            "instructions" => "",
                            "required" => 1,
                            "conditional_logic" => 0,
                            "wrapper" => ["width" => "", "class" => "", "id" => ""],
                            "default_value" => "",
                            "placeholder" => "",
                            "prepend" => "",
                            "append" => "",
                            "min" => 1,
                            "max" => "",
                            "step" => 1,
                        ],
                        [
                            "key" => "field-Package_Accom_Options_Price",
                            "label" => "Price",
                            "name" => "price",
                            "type" => "number",
                            "instructions" => "",
                            "required" => 1,
                            "conditional_logic" => 0,
                            "wrapper" => ["width" => "", "class" => "", "id" => ""],
                            "default_value" => "",
                            "placeholder" => "",
                            "prepend" => "",
                            "append" => "",
                            "min" => 0,
                            "max" => "",
                            "step" => "",
                        ],
                    ],
                ],
            ],
        ],
        [
            'key' => 'field-Package_Addons',
            'label' => 'Addons',
            'name' => 'addons',
            'type' => 'post_object',
            'instructions' => '',
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
                'product_cat:addon'
            ],
            'allow_null' => 0,
            'multiple' => 1,
            'return_format' => 'id',
            'ui' => 1
        ]
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'product'
            ],
            [
                'param' => 'product_cat_term',
                'operator' => '==',
                'value' => '18'
            ]
        ]
    ],
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'field',
    'hide_on_screen' => '',
    'active' => true,
    'description' => ''
];
