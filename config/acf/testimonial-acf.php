<?php

declare(strict_types=1);

return [
    "key" => "group-Testimonial",
    "title" => "Testimonial Fields",
    "fields" => [
        [
            "key" => "field-Testimonial_Name",
            "label" => "Name",
            "name" => "name",
            "type" => "text",
            "instructions" => "",
            "required" => 1,
            "conditional_logic" => 0,
            "wrapper" => [
                "width" => "",
                "class" => "",
                "id" => ""
            ],
            "default_value" => "",
            "placeholder" => "John Smith",
            "prepend" => "",
            "append" => "",
            "maxlength" => ""
        ],
        [
            "key" => "field-Testimonial_Testimonial",
            "label" => "Testimonial",
            "name" => "testimonial",
            "type" => "text",
            "instructions" => "",
            "required" => 1,
            "conditional_logic" => 0,
            "wrapper" => [
                "width" => "",
                "class" => "",
                "id" => ""
            ],
            "default_value" => "",
            "placeholder" => "The best thing 5eva!",
            "prepend" => "",
            "append" => "",
            "maxlength" => ""
        ]
    ],
    "location" => [
        [
            [
                "param" => "post_type",
                "operator" => "==",
                "value" => "testimonial"
            ]
        ]
    ],
    "menu_order" => 0,
    "position" => "normal",
    "style" => "default",
    "label_placement" => "left",
    "instruction_placement" => "label",
    "hide_on_screen" => "",
    "active" => true,
    "description" => ""
];
