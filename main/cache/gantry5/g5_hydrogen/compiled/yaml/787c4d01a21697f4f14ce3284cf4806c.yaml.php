<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/gantry5/engines/nucleus/admin/blueprints/layout/inheritance/section.yaml',
    'modified' => 1693297163,
    'data' => [
        'name' => 'Inheritance',
        'description' => 'Section inheritance tab',
        'type' => 'section.inheritance',
        'form' => [
            'fields' => [
                'mode' => [
                    'type' => 'input.radios',
                    'label' => 'Mode',
                    'description' => 'Whether to clone or inherit the section properties. <code>inherit</code> makes the Section identical to that of the inherited outline.',
                    'default' => 'inherit',
                    'options' => [
                        'clone' => 'Clone',
                        'inherit' => 'Inherit'
                    ]
                ],
                'outline' => [
                    'type' => 'gantry.outlines',
                    'label' => 'Outline',
                    'description' => 'Outline to inherit from.',
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        '' => 'No Inheritance'
                    ]
                ],
                'include' => [
                    'type' => 'input.multicheckbox',
                    'label' => 'Replace',
                    'description' => 'Which parts of the Section to inherit?',
                    'options' => [
                        'attributes' => 'Section Attributes',
                        'block' => 'Block Attributes',
                        'children' => 'Particles within Section'
                    ]
                ]
            ]
        ]
    ]
];
