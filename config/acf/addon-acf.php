<?php

declare(strict_types=1);

return [
    "key" => "group-Addon",
    "title" => "Addon Fields",
    "fields" => [
        [
            "key" => "field-Addon_PriceTba",
            "label" => "Price TBA",
            "name" => "price_tba",
            "type" => "true_false",
            "instructions" =>
                "Whether this addon has a price or if the price is TBA",
            "required" => 0,
            "conditional_logic" => 0,
            "wrapper" => ["width" => "", "class" => "", "id" => ""],
            "message" => "",
            "default_value" => 0,
            "ui" => 1,
            "ui_on_text" => "Price TBA",
            "ui_off_text" => "Normal",
        ],
    ],
    "location" => [
        [
            ["param" => "post_type", "operator" => "==", "value" => "product"],
            [
                "param" => "product_cat_term",
                "operator" => "==",
                "value" => "23",
            ],
        ],
    ],
    "menu_order" => 0,
    "position" => "acf_after_title",
    "style" => "default",
    "label_placement" => "left",
    "instruction_placement" => "field",
    "hide_on_screen" => [
        "permalink",
        "the_content",
        "excerpt",
        "discussion",
        "comments",
        "revisions",
        "slug",
        "author",
        "format",
        "page_attributes",
        "featured_image",
        "categories",
        "tags",
        "send-trackbacks",
    ],
    "active" => true,
    "description" => "",
    "show_in_rest" => 0,
];
