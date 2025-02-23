<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/gantry5/admin/blueprints/menu/menuitem.yaml',
    'modified' => 1693297156,
    'data' => [
        'name' => 'Menu Item',
        'description' => 'Gantry menu item.',
        'form' => [
            'fields' => [
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Items',
                    'key' => 'path',
                    'value' => 'path',
                    'ajax' => true,
                    'skip' => true,
                    'fields' => [
                        '.path' => [
                            'type' => 'key.key',
                            'label' => 'Path',
                            'skip' => true
                        ],
                        '.enabled' => [
                            'type' => 'input.checkbox',
                            'label' => 'Enabled',
                            'description' => 'Enables the menu item.',
                            'default' => true
                        ],
                        '.id' => [
                            'type' => 'input.text',
                            'label' => 'Menu Item Id',
                            'disabled' => true
                        ],
                        '.type' => [
                            'type' => 'input.text',
                            'label' => 'Menu Item Type',
                            'default' => 'link',
                            'disabled' => true
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'disabled' => true
                        ],
                        '.rel' => [
                            'type' => 'input.text',
                            'label' => 'Link Rel Attribute',
                            'disabled' => true
                        ],
                        '.attributes' => [
                            'type' => 'collection.keyvalue',
                            'label' => 'List Tag Attributes',
                            'description' => 'Additional attributes for the menu item list tag.',
                            'key_placeholder' => 'Key (e.g. style, name, ...)',
                            'value_placeholder' => 'Value',
                            'exclude' => [
                                0 => 'class',
                                1 => 'style',
                                2 => 'title'
                            ]
                        ],
                        '.link_attributes' => [
                            'type' => 'collection.keyvalue',
                            'label' => 'Link Tag Attributes',
                            'description' => 'Additional attributes for the menu item link tag.',
                            'key_placeholder' => 'Key (e.g. style, name, ...)',
                            'value_placeholder' => 'Value',
                            'exclude' => [
                                0 => 'class',
                                1 => 'href',
                                2 => 'title',
                                3 => 'aria-label',
                                4 => 'target'
                            ]
                        ],
                        '.hash' => [
                            'type' => 'input.text',
                            'label' => 'Append Hash',
                            'description' => 'If you\'d like to append an hash to the end of the URL (ie, #to-bottom)'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Menu Title',
                            'required' => true
                        ],
                        '.target' => [
                            'type' => 'select.selectize',
                            'label' => 'Link Target',
                            'placeholder' => 'Select...',
                            'options' => [
                                '_self' => 'Current Window or Tab',
                                '_blank' => 'New Window or Tab'
                            ]
                        ],
                        '.dropdown' => [
                            'type' => 'select.selectize',
                            'label' => 'Dropdown Style',
                            'default' => '',
                            'selectize' => [
                                'allowEmptyOption' => true
                            ],
                            'options' => [
                                '' => '- Use Default -',
                                'standard' => 'Simple',
                                'fullwidth' => 'Extended'
                            ]
                        ],
                        '.dropdown_dir' => [
                            'type' => 'select.selectize',
                            'label' => 'Dropdown Direction',
                            'description' => 'Where the dropdown should open relative to the menu item',
                            'default' => 'right',
                            'options' => [
                                'left' => 'Expand Left',
                                'center' => 'Keep Centered',
                                'right' => 'Expand Right'
                            ]
                        ],
                        '.dropdown_hide' => [
                            'type' => 'input.checkbox',
                            'label' => 'Disable Dropdowns',
                            'description' => 'If checked and the item has dropdowns, they won\'t be rendered.',
                            'default' => ''
                        ],
                        '.width' => [
                            'type' => 'input.text',
                            'label' => 'Dropdown Width',
                            'description' => 'Set the width of this parent\'s dropdowns in rem, em, px units or auto.',
                            'default' => 'auto',
                            'pattern' => '((\\d+(\\.\\d+){0,1}(rem|em|px))|auto)'
                        ],
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Classes',
                            'description' => 'Enter CSS class names.'
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image'
                        ],
                        '.icon_only' => [
                            'type' => 'input.checkbox',
                            'label' => 'Icon Only',
                            'description' => 'Display only icon or image. Hides title and subtitle.'
                        ],
                        '.subtitle' => [
                            'type' => 'input.text',
                            'label' => 'Subtitle'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
