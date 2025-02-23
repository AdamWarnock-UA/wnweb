<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/gantry5/engines/nucleus/particles/logo.yaml',
    'modified' => 1693297164,
    'data' => [
        'name' => 'Logo / Image',
        'description' => 'Display a logo or an image.',
        'type' => 'particle',
        'icon' => 'far fa-file-image',
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
                    'description' => 'Globally enable logo particles.',
                    'default' => true
                ],
                'url' => [
                    'type' => 'input.text',
                    'label' => 'Url',
                    'description' => 'Url for the image. Leave empty to go to home page.'
                ],
                'target' => [
                    'type' => 'select.select',
                    'label' => 'Target',
                    'description' => 'Target browser window when logo is clicked.',
                    'placeholder' => 'Select...',
                    'default' => '_self',
                    'options' => [
                        '_self' => 'Same Frame (default)',
                        '_parent' => 'Parent Frame',
                        '_blank' => 'New Window or Tab'
                    ]
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select desired logo image.'
                ],
                'height' => [
                    'type' => 'input.text',
                    'label' => 'Maximum Height',
                    'description' => 'Set image max. height in rem, em, px, or percentage unit values. Leave empty to use the default height.',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link',
                    'description' => 'Renders Logo/Image with a link.',
                    'default' => true
                ],
                'svg' => [
                    'type' => 'textarea.textarea',
                    'label' => 'SVG Code',
                    'description' => 'Your SVG code that will be added inline to the site.',
                    'placeholder' => 'Place your <svg> code here.'
                ],
                'text' => [
                    'type' => 'input.text',
                    'label' => 'Text',
                    'description' => 'Input logo description text.'
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Set a specific CSS class for custom styling.'
                ]
            ]
        ]
    ]
];
