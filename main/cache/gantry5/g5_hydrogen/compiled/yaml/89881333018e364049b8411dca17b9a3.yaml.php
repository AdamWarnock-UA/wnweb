<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/gantry5/engines/nucleus/blueprints/pages/blog_item.yaml',
    'modified' => 1693297164,
    'data' => [
        'title' => 'Item',
        'extends@' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Blog Item',
                            'fields' => [
                                'header_image' => [
                                    'type' => 'section',
                                    'title' => 'Header Image',
                                    'underline' => true
                                ],
                                'header.image.summary.enabled' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Display Summary Image',
                                    'help' => 'Enabled displaying of a summary image',
                                    'highlight' => 1,
                                    'options' => [
                                        0 => 'PLUGIN_ADMIN.DISABLED',
                                        1 => 'PLUGIN_ADMIN.ENABLED'
                                    ]
                                ],
                                'header.image.summary.file' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Summary Image File',
                                    'help' => 'image filename that exists in the page folder. If not provided, will use the first image found.',
                                    'placeholder' => 'For example: myimage.jpg'
                                ],
                                'header.image.text.enabled' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Display Blog Image',
                                    'help' => 'Enabled displaying of a blog image',
                                    'highlight' => 1,
                                    'options' => [
                                        0 => 'PLUGIN_ADMIN.DISABLED',
                                        1 => 'PLUGIN_ADMIN.ENABLED'
                                    ]
                                ],
                                'header.image.text.file' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Blog Image File',
                                    'help' => 'image filename that exists in the page folder. If not provided, will use the first image found.',
                                    'placeholder' => 'For example: myimage.jpg'
                                ],
                                'header.image.width' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Image Width',
                                    'size' => 'small',
                                    'help' => 'Image width in px',
                                    'placeholder' => 'Default is 900',
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 5000
                                    ]
                                ],
                                'header.image.height' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Image Height',
                                    'size' => 'small',
                                    'help' => 'Image height in px',
                                    'placeholder' => 'Default is 300',
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 5000
                                    ]
                                ],
                                'summary' => [
                                    'type' => 'section',
                                    'title' => 'Summary',
                                    'underline' => true
                                ],
                                'header.summary.enabled' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Summary',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ]
                                ],
                                'header.summary.format' => [
                                    'type' => 'select',
                                    'toggleable' => true,
                                    'label' => 'Format',
                                    'classes' => 'fancy',
                                    'options' => [
                                        'short' => 'Use the first occurence of delimter or size',
                                        'long' => 'Summary delimiter will be ignored'
                                    ]
                                ],
                                'header.summary.size' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Size',
                                    'classes' => 'large',
                                    'placeholder' => 300,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 1
                                    ]
                                ],
                                'header.summary.delimiter' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'Summary delimiter',
                                    'classes' => 'large',
                                    'placeholder' => '==='
                                ],
                                'readmore' => [
                                    'type' => 'section',
                                    'title' => 'Read More',
                                    'underline' => true
                                ],
                                'header.continue_link' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'Read More',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
