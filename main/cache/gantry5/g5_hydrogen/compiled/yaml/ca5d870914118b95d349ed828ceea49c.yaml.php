<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/gantry5/engines/nucleus/admin/blueprints/layout/block.yaml',
    'modified' => 1693297163,
    'data' => [
        'name' => 'Block',
        'description' => 'Layout block.',
        'type' => 'block',
        'form' => [
            'fields' => [
                'block_container' => [
                    'type' => 'container.set',
                    'id' => 'g-settings-block-attributes',
                    'fields' => [
                        'id' => [
                            'type' => 'input.text',
                            'label' => 'CSS ID',
                            'description' => 'Enter the ID for the block without the hash (#) (ie. <code>your-id</code>. You can then reference the element via CSS as <code>#your-id</code>',
                            'default' => NULL
                        ],
                        'class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Classes',
                            'description' => 'Enter CSS class names.',
                            'default' => NULL
                        ],
                        'variations' => [
                            'type' => 'input.block-variations',
                            'label' => 'Variations',
                            'description' => 'Enter Theme Variations.',
                            'default' => NULL
                        ],
                        'extra' => [
                            'type' => 'collection.keyvalue',
                            'label' => 'Tag Attributes',
                            'description' => 'Extra Tag attributes.',
                            'key_placeholder' => 'Key (data-*, style, ...)',
                            'value_placeholder' => 'Value',
                            'exclude' => [
                                0 => 'id',
                                1 => 'class'
                            ]
                        ],
                        '_inherit' => [
                            'type' => 'gantry.inherit'
                        ]
                    ]
                ],
                'size_container' => [
                    'type' => 'container.set',
                    'id' => 'g-settings-block-size',
                    'fields' => [
                        'fixed' => [
                            'type' => 'input.checkbox',
                            'label' => 'Fixed Size',
                            'description' => 'Make block size fixed. If set, this block will always take the same amount of space.'
                        ],
                        'size' => [
                            'type' => 'input.text',
                            'label' => 'Block Size',
                            'description' => 'Block size in percentages (5-100).',
                            'class' => 'custom-validation-field',
                            'formnovalidate' => true,
                            'pattern' => '^([5-9]|[1-9][0-9]|8.3|9.1|11.1|12.5|14.3|16.7|33.3|100)$',
                            'min' => 5,
                            'max' => 100,
                            'append' => [
                                'type' => 'text',
                                'text' => '%'
                            ]
                        ],
                        '_note' => [
                            'type' => 'separator.note',
                            'class' => 'alert alert-warning center blocksize-note',
                            'content' => 'The <em>Block Size</em> can only be set <span class="blocksize-range">between <strong>#min#</strong>% and <strong>#max#</strong>%</span><span class="blocksize-fixed">to <strong>#max#</strong>%</span>'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
