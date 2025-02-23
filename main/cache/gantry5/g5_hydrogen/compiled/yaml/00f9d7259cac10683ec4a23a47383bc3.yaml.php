<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/gantry5/engines/nucleus/particles/menu.yaml',
    'modified' => 1693297164,
    'data' => [
        'name' => 'Menu',
        'description' => 'Gantry menu',
        'type' => 'particle',
        'icon' => 'fa-bars',
        'configuration' => [
            'caching' => [
                'type' => 'menu'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the menu particle.',
                    'default' => true
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'GANTRY5_PARTICLE_MENU_INFO'
                ],
                'menu' => [
                    'type' => 'menu.list',
                    'label' => 'Menu',
                    'description' => 'Select menu to be used with the particle.',
                    'default' => '',
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        '' => 'Use Default Menu',
                        '-active-' => 'Use Active Menu'
                    ]
                ],
                'base' => [
                    'type' => 'menu.item',
                    'label' => 'Base Item',
                    'description' => 'Select a menu item to always be used as the base for the menu display.',
                    'default' => '/',
                    'options' => [
                        '/' => 'Active'
                    ]
                ],
                'startLevel' => [
                    'type' => 'input.text',
                    'label' => 'Start Level',
                    'description' => 'Set the start level of the menu.',
                    'default' => 1
                ],
                'maxLevels' => [
                    'type' => 'input.text',
                    'label' => 'Max Levels',
                    'description' => 'Set the maximum number of menu levels to display.',
                    'default' => 0
                ],
                'renderTitles' => [
                    'type' => 'input.checkbox',
                    'label' => 'Render Titles',
                    'description' => 'Renders the titles/tooltips of the Menu Items for accessibility.',
                    'default' => 0
                ],
                'hoverExpand' => [
                    'type' => 'input.checkbox',
                    'label' => 'Expand on Hover',
                    'description' => 'Allows to enable / disable the ability to expand menu items by hover or click only',
                    'default' => 1
                ],
                'mobileTarget' => [
                    'type' => 'input.checkbox',
                    'label' => 'Mobile Target',
                    'description' => 'Check this field if you want this menu to become the target for Mobile Menu and to appear in Offcanvas',
                    'default' => 0
                ],
                'forceTarget' => [
                    'type' => 'input.checkbox',
                    'label' => 'Force Target Attribute',
                    'description' => 'Adds \'target=&quot;_self&quot;\' attribute to all menu links instead of omitting the default value. Fixes an issue with pinned tabs in Firefox where external links always open in a new tab.',
                    'default' => 0
                ]
            ]
        ]
    ]
];
