<?php

declare(strict_types=1);

return [
    "key" => "group-ClubEvent",
    "title" => "Club Event Fields",
    "fields" => [
        [
            "key" => "field-ClubEvent_Date",
            "label" => "Date<br><code>date (string)</code><br><code>yyyy-mm-dd</code>",
            "name" => "date",
            "type" => "date_picker",
            "instructions" => "Date of event",
            "required" => 1,
            "conditional_logic" => 0,
            "wrapper" => [
                "width" => "",
                "class" => "",
                "id" => ""
            ],
            "display_format" => "d/m/Y",
            "return_format" => "Y-m-d",
            "first_day" => 1
        ],
        [
            "key" => "field-ClubEvent_Location",
            "label" => "Location<br><code>location (string)</code>",
            "name" => "location",
            "type" => "text",
            "instructions" => "Location of event. e.g. <em>Hilton Hotel</em>",
            "required" => 1,
            "conditional_logic" => 0,
            "wrapper" => [
                "width" => "",
                "class" => "",
                "id" => ""
            ],
            "default_value" => "",
            "placeholder" => "",
            "prepend" => "",
            "append" => "",
            "maxlength" => ""
        ],
        [
            "key" => "field-ClubEvent_GoogleMapsLink",
            "label" => "Google Maps Link<br><code>google_maps_link (string)</code>",
            "name" => "google_maps_link",
            "type" => "url",
            "instructions" => "Link to googlemaps location",
            "required" => 0,
            "conditional_logic" => 0,
            "wrapper" => [
                "width" => "",
                "class" => "",
                "id" => ""
            ],
            "default_value" => "",
            "placeholder" => ""
        ],
        // [
        //   "key" => "field-ClubEvent_Locale",
        //   "label" => "Locale<br><code>locale (string)</code><br><code>local | international</code>",
        //   "name" => "locale",
        //   "type" => "radio",
        //   "instructions" => "Whether this event is local or international",
        //   "required" => 1,
        //   "choices" => [
        //       "local" => "Local",
        //       "international" => "International"
        //   ],
        //   "allow_null" => 0,
        //   "other_choice" => 0,
        //   "default_value" => "local",
        //   "layout" => "horizontal",
        //   "return_format" => "value",
        //   "save_other_choice" => 0
        // ],
        [
            "key" => "field-ClubEvent_FeaturedArtists",
            "label" => "Featured Artists<br><code>featured_artists (arr&lt;object&gt;)</code>",
            "name" => "featured_artists",
            "type" => "post_object",
            "instructions" => "Artists featured at this event",
            "required" => 0,
            "conditional_logic" => 0,
            "wrapper" => [
                "width" => "",
                "class" => "",
                "id" => ""
            ],
            "post_type" => [
                "artist"
            ],
            "taxonomy" => "",
            "allow_null" => 0,
            "multiple" => 1,
            "return_format" => "object",
            "ui" => 1
        ],
        [
            "key" => "field-ClubEvent_MusicGroup",
            "label" => "Music Group<br><code>music_group (object)</code>",
            "name" => "music_group",
            "type" => "taxonomy",
            "instructions" => "List of Music Groups associated with this event",
            "required" => 0,
            "conditional_logic" => 0,
            "wrapper" => [
                "width" => "",
                "class" => "",
                "id" => ""
            ],
            "taxonomy" => "music_group",
            "field_type" => "select",
            "allow_null" => 1,
            "add_term" => 1,
            "save_terms" => 1,
            "load_terms" => 1,
            "return_format" => "object",
            "multiple" => 0
        ]
    ],
    "location" => [
        [
            [
                "param" => "post_type",
                "operator" => "==",
                "value" => "club_event"
            ]
        ]
    ],
    "menu_order" => 0,
    "position" => "acf_after_title",
    "style" => "seamless",
    "label_placement" => "left",
    "instruction_placement" => "field",
    "hide_on_screen" => [
        "excerpt",
        "discussion",
        "comments",
        "revisions",
        "slug",
        "author",
        "format",
        "page_attributes",
        "categories",
        "tags",
        "send-trackbacks"
    ],
    "active" => true,
    "description" => ""
];
