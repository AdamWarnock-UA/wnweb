<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/g5_hydrogen/blueprints/styles/navigation.yaml',
    'modified' => 1693297349,
    'data' => [
        'name' => 'Navigation Colors',
        'description' => 'Navigation colors for the Hydrogen theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#439a86'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ],
                'overlay' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Overlay',
                    'description' => 'Set the color of the page overlay when the certain menu modes are active.',
                    'default' => 'rgba(0, 0, 0, 0.4)'
                ]
            ]
        ]
    ]
];
