<?php

return [

    'locales' => [
        'en',
        'nl',
    ],
    

    'block_editor' => [
        'crops' => [
            'variable_image' => [
                'default' => [
                    [
                        'name' => 'default',     
                        'ratio' => 16 / 9,
                    ],
                    [
                        'name' => 'square',
                        'ratio' => 1,
                    ],
                    [
                        'name' => 'portrait',
                        'ratio' => 9 / 16,
                    ],
                    [
                        'name' => 'landscape',
                        'ratio' => 16 / 9,
                    ],
                    [
                        'name' => 'all',
                        'ratio' => 0
                    ],
                ],
            ],

          

        ],
        'blocks' => [
            'paragraph' => [
                'title' => 'Paragraph',
                'icon' => 'text',
                'component' => 'a17-block-paragraph'
            ],
            'image' => [
                'title' => 'Image',
                'icon' => 'image',
                'component' => 'a17-block-image'
            ],
            'paragraph_image' => [
                'title' => 'Paragraph & Image',
                'icon' => 'image-text',
                'component' => 'a17-block-paragraph_image'
            ],
            'button' => [
                'title' => 'Button',
                'icon' => 'button',
                'component' => 'a17-block-button'
            ],
            'form' => [
                'title' => 'Form',
                'icon' => 'form',
                'component' => 'a17-block-form'
            ],
            // 'image_paragraph' => [
            //     'title' => 'Image & Paragraph',
            //     'icon' => 'text-image',
            //     'component' => 'a17-block-image_paragraph'
            // ],
            // 'image_gallery' => [
            //     'title' => 'Image Gallery',
            //     'icon' => 'image-gallery',
            //     'component' => 'a17-block-image_gallery'
            // ],
            // 'video' => [
            //     'title' => 'Video',
            //     'icon' => 'video',
            //     'component' => 'a17-block-video'
            // ],
            // 'video_gallery' => [
            //     'title' => 'Video Gallery',
            //     'icon' => 'video-gallery',
            //     'component' => 'a17-block-video_gallery'
            // ],
            // 'quote' => [
            //     'title' => 'Quote',
            //     'icon' => 'quote',
            //     'component' => 'a17-block-quote'
            // ],
          
            // 'button_group' => [
            //     'title' => 'Button Group',
            //     'icon' => 'button-group',
            //     'component' => 'a17-block-button_group'
            // ],
            // 'button_group_image' => [
            //     'title' => 'Button Group & Image',
            //     'icon' => 'button-group-image',
            //     'component' => 'a17-block-button_group_image'
            // ],
           
        ],
        'repeaters' => [
            'buttons' => [
                'title' => 'Buttons',
                'max' => 4,
                'component' => 'a17-repeater-buttons'
            ],
        ]

    ],


];
