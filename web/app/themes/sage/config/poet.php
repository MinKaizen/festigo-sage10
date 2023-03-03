<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Post Types
    |--------------------------------------------------------------------------
    |
    | Here you may specify the post types to be registered by Poet using the
    | Extended CPTs library. <https://github.com/johnbillion/extended-cpts>
    |
    */

    'post' => [
        'article' => [
            'labels' => [
                'singular' => 'Article',
                'plural' => 'Articles',
            ],
            'public' => true,
            'has_archive' => 'articles',
            'menu_position' => 8,
            'rewrite' => ['slug' => 'article', 'with_front' => true],
            'menu_icon' => 'dashicons-format-aside',
            "supports" => ["title", "editor", "thumbnail", "excerpt", "custom-fields", "comments"],
        ],
        'artist' => [
            'labels' => [
                'singular' => 'Artist',
                'plural' => 'Artists',
            ],
            'public' => true,
            'has_archive' => 'artists',
            'menu_position' => 8,
            'rewrite' => ['slug' => 'artist', 'with_front' => true],
            'menu_icon' => 'dashicons-microphone',
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
            'taxonomies' => ['genre'],
        ],
        'club_event' => [
            'labels' => [
                'singular' => 'Club Event',
                'plural' => 'Club Events',
            ],
            'public' => true,
            'has_archive' => 'club-events',
            'menu_position' => 8,
            'rewrite' => ['slug' => 'club_event', 'with_front' => true],
            'menu_icon' => 'dashicons-tickets-alt',
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
            'taxonomies' => ['music_group', 'genre'],
        ],
        'festival' => [
            'labels' => [
                'singular' => 'Festival',
                'plural' => 'Festivals',
            ],
            'public' => true,
            'has_archive' => 'festivals',
            'menu_position' => 8,
            'rewrite' => ['slug' => 'festival', 'with_front' => true],
            'menu_icon' => 'dashicons-tickets-alt',
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
            'taxonomies' => ['music_group', 'genre'],
        ],
        'testimonial' => [
            'labels' => [
                'singular' => 'Tetimonial',
                'plural' => 'Tetimonials',
            ],
            'public' => true,
            'has_archive' => false,
            'menu_position' => 8,
            'rewrite' => ['slug' => 'testimonial', 'with_front' => true],
            'menu_icon' => 'dashicons-format-quote',
            'supports' => ['title', 'thumbnail', 'custom-fields'],
        ],
        'tour' => [
            'labels' => [
                'singular' => 'Tour',
                'plural' => 'Tours',
            ],
            'public' => true,
            'has_archive' => 'tours',
            'menu_position' => 8,
            'rewrite' => [ 'slug' => 'tour', 'with_front' => true ],
            'menu_icon' => 'dashicons-tickets-alt',
            'supports' => [ 'title', 'editor', 'thumbnail' ],
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Taxonomies
    |--------------------------------------------------------------------------
    |
    | Here you may specify the taxonomies to be registered by Poet using the
    | Extended CPTs library. <https://github.com/johnbillion/extended-cpts>
    |
    */

    'taxonomy' => [
        // 'genre' => [
        //     'links' => ['book'],
        //     'meta_box' => 'radio',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Blocks
    |--------------------------------------------------------------------------
    |
    | Here you may specify the block types to be registered by Poet and
    | rendered using Blade.
    |
    | Blocks are registered using the `namespace/label` defined when
    | registering the block with the editor. If no namespace is provided,
    | the current theme text domain will be used instead.
    |
    | Given the block `sage/accordion`, your block view would be located at:
    |   ↪ `views/blocks/accordion.blade.php`
    |
    | Block views have the following variables available:
    |   ↪ $data    – An object containing the block data.
    |   ↪ $content – A string containing the InnerBlocks content.
    |                Returns `null` when empty.
    |
    */

    'block' => [
        // 'sage/accordion',
    ],

    /*
    |--------------------------------------------------------------------------
    | Block Categories
    |--------------------------------------------------------------------------
    |
    | Here you may specify block categories to be registered by Poet for use
    | in the editor.
    |
    */

    'block_category' => [
        // 'cta' => [
        //     'title' => 'Call to Action',
        //     'icon' => 'star-filled',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Block Patterns
    |--------------------------------------------------------------------------
    |
    | Here you may specify block patterns to be registered by Poet for use
    | in the editor.
    |
    | Patterns are registered using the `namespace/label` defined when
    | registering the block with the editor. If no namespace is provided,
    | the current theme text domain will be used instead.
    |
    | Given the pattern `sage/hero`, your pattern content would be located at:
    |   ↪ `views/block-patterns/hero.blade.php`
    |
    | See: https://developer.wordpress.org/reference/functions/register_block_pattern/
    */

    'block_pattern' => [
        // 'sage/hero' => [
        //     'title' => 'Page Hero',
        //     'description' => 'Draw attention to the main focus of the page, and highlight key CTAs',
        //     'categories' => ['all'],
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Block Pattern Categories
    |--------------------------------------------------------------------------
    |
    | Here you may specify block pattern categories to be registered by Poet for
    | use in the editor.
    |
    */

    'block_pattern_category' => [
        'all' => [
            'label' => 'All Patterns',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Editor Palette
    |--------------------------------------------------------------------------
    |
    | Here you may specify the color palette registered in the Gutenberg
    | editor.
    |
    | A color palette can be passed as an array or by passing the filename of
    | a JSON file containing the palette.
    |
    | If a color is passed a value directly, the slug will automatically be
    | converted to Title Case and used as the color name.
    |
    | If the palette is explicitly set to `true` – Poet will attempt to
    | register the palette using the default `palette.json` filename generated
    | by <https://github.com/roots/palette-webpack-plugin>
    |
    */

    'palette' => [
        // 'red' => '#ff0000',
        // 'blue' => '#0000ff',
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Menu
    |--------------------------------------------------------------------------
    |
    | Here you may specify admin menu item page slugs you would like moved to
    | the Tools menu in an attempt to clean up unwanted core/plugin bloat.
    |
    | Alternatively, you may also explicitly pass `false` to any menu item to
    | remove it entirely.
    |
    */

    'admin_menu' => [
        'edit-comments.php',
        'themes.php',
        'edit.php',
    ],

];
