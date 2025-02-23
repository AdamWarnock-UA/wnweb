<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/gantry5/engines/nucleus/blueprints/pages/blog_list.yaml',
    'modified' => 1693297164,
    'data' => [
        'title' => 'Blog',
        'extends@' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'child_type' => 'item',
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.child_type' => [
                                            'default' => 'blog_item'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Blog List',
                            'fields' => [
                                'header.content.items' => [
                                    'type' => 'textarea',
                                    'yaml' => true,
                                    'label' => 'Items',
                                    'default' => '@self.children'
                                ],
                                'header.content.leading' => [
                                    'type' => 'text',
                                    'label' => 'Leading Articles',
                                    'default' => 0,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0
                                    ]
                                ],
                                'header.content.columns' => [
                                    'type' => 'text',
                                    'label' => 'Columns',
                                    'default' => 2,
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0
                                    ]
                                ],
                                'header.content.limit' => [
                                    'type' => 'text',
                                    'label' => 'Max Item Count',
                                    'default' => 5,
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'int',
                                        'min' => 1
                                    ]
                                ],
                                'header.content.order.by' => [
                                    'type' => 'select',
                                    'label' => 'Order By',
                                    'default' => 'date',
                                    'options' => [
                                        'folder' => 'Folder',
                                        'title' => 'Title',
                                        'date' => 'Date',
                                        'default' => 'Default'
                                    ]
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'select',
                                    'label' => 'Order',
                                    'default' => 'desc',
                                    'options' => [
                                        'asc' => 'Ascending',
                                        'desc' => 'Descending'
                                    ]
                                ],
                                'header.content.show_date' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Date',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.content.pagination' => [
                                    'type' => 'toggle',
                                    'label' => 'Pagination',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.content.url_taxonomy_filters' => [
                                    'type' => 'toggle',
                                    'label' => 'URL Taxonomy Filters',
                                    'highlight' => 1,
                                    'default' => 1,
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
