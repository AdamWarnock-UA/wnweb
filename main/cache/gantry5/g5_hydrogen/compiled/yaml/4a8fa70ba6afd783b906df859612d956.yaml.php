<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/g5_hydrogen/particles/sample.yaml',
    'modified' => 1693297350,
    'data' => [
        'name' => 'Sample Content',
        'description' => 'Displays Sample Content',
        'type' => 'particle',
        'icon' => 'far fa-edit',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select the main image.',
                    'overridable' => false
                ],
                'headline' => [
                    'type' => 'input.text',
                    'label' => 'Headline',
                    'description' => 'Customize the headline text.',
                    'placeholder' => 'Enter headline',
                    'overridable' => false
                ],
                'description' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description',
                    'overridable' => false
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Link',
                    'description' => 'Specify the link address.',
                    'overridable' => false
                ],
                'linktext' => [
                    'type' => 'input.text',
                    'label' => 'Link Text',
                    'description' => 'Customize the link text.',
                    'overridable' => false
                ],
                'samples' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Sample Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'overridable' => false,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.subtitle' => [
                            'type' => 'input.text',
                            'label' => 'Sub Title'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description'
                        ],
                        '.id' => [
                            'type' => 'input.text',
                            'label' => 'CSS ID',
                            'description' => 'Enter the ID for the block without the hash (#) (ie. <code>your-id</code>. You can then reference the element via CSS as <code>#your-id</code>',
                            'default' => NULL
                        ],
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Classes',
                            'description' => 'Enter CSS class names.',
                            'default' => NULL
                        ],
                        '.variations' => [
                            'type' => 'input.block-variations',
                            'label' => 'Variations'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
