<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/gantry5/engines/nucleus/particles/contentarray.yaml',
    'modified' => 1693297164,
    'data' => [
        'name' => 'Grav Content',
        'description' => 'Display Grav Content in given Category taxonomy.',
        'type' => 'particle',
        'icon' => 'fa-grav',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Grav Content particles.',
                    'default' => true
                ],
                '_tabs' => [
                    'type' => 'container.tabs',
                    'fields' => [
                        '_tab_articles' => [
                            'label' => 'Pages',
                            'overridable' => false,
                            'fields' => [
                                'article.filter.categories' => [
                                    'type' => 'input.selectize',
                                    'label' => 'Categories',
                                    'description' => 'Select the categories the content should be taken from.',
                                    'overridable' => false
                                ],
                                'article.limit.total' => [
                                    'type' => 'input.text',
                                    'label' => 'Number of Pages',
                                    'description' => 'Enter the maximum number of content to display.',
                                    'default' => 2,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'article.display.pagination_buttons' => [
                                    'type' => 'select.select',
                                    'label' => 'Pagination',
                                    'description' => 'Select if the pagination buttons should be shown to allow users to see more articles.',
                                    'default' => '',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ],
                                    'overridable' => false
                                ],
                                'article.limit.columns' => [
                                    'type' => 'select.select',
                                    'label' => 'Number of columns',
                                    'description' => 'Select the number of columns that you want content to appear in.',
                                    'default' => 2,
                                    'options' => [
                                        1 => 1,
                                        2 => 2,
                                        3 => 3,
                                        4 => 4,
                                        5 => 5,
                                        6 => 6
                                    ],
                                    'overridable' => false
                                ],
                                'article.limit.start' => [
                                    'type' => 'input.text',
                                    'label' => 'Start From',
                                    'description' => 'Enter offset specifying the first article to return. The default is \'0\' (the first content item).',
                                    'default' => 0,
                                    'pattern' => '\\d{1,2}',
                                    'overridable' => false
                                ],
                                'article.sort.orderby' => [
                                    'type' => 'select.select',
                                    'label' => 'Order By',
                                    'description' => 'Select how the content should be ordered by.',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default Ordering',
                                        'date' => 'Date',
                                        'publish_date' => 'Publish Date',
                                        'unpublish_date' => 'Unpublish Date',
                                        'modified' => 'Last Modified Date',
                                        'title' => 'Title',
                                        'slug' => 'Slug'
                                    ],
                                    'overridable' => false
                                ],
                                'article.sort.ordering' => [
                                    'type' => 'select.select',
                                    'label' => 'Ordering Direction',
                                    'description' => 'Select the direction the content should be ordered by.',
                                    'default' => 'asc',
                                    'options' => [
                                        'asc' => 'Ascending',
                                        'desc' => 'Descending'
                                    ],
                                    'overridable' => false
                                ]
                            ]
                        ],
                        '_tab_display' => [
                            'label' => 'Display',
                            'fields' => [
                                'article.display.image.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Image',
                                    'description' => 'Select what image should be shown (Pages -> Blog Item -> Header Image settings).',
                                    'default' => 'intro',
                                    'options' => [
                                        'intro' => 'Intro',
                                        'full' => 'Full',
                                        '' => 'None'
                                    ]
                                ],
                                'article.display.text.type' => [
                                    'type' => 'select.select',
                                    'label' => 'Article Text',
                                    'description' => 'Select if and how the content text should be shown.',
                                    'default' => 'intro',
                                    'options' => [
                                        'intro' => 'Introduction',
                                        'full' => 'Full Article',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.text.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Text Limit',
                                    'description' => 'Type in the number of characters the content text should be limited to.',
                                    'default' => '',
                                    'pattern' => '\\d+'
                                ],
                                'article.display.text.formatting' => [
                                    'type' => 'select.select',
                                    'label' => 'Text Formatting',
                                    'description' => 'Select the formatting you want to use to display the content text.',
                                    'default' => 'text',
                                    'options' => [
                                        'text' => 'Plain Text',
                                        'html' => 'HTML'
                                    ]
                                ],
                                'article.display.title.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Title',
                                    'description' => 'Select if the content title should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.title.limit' => [
                                    'type' => 'input.text',
                                    'label' => 'Title Limit',
                                    'description' => 'Enter the maximum number of characters the content title should be limited to.',
                                    'pattern' => '\\d+(\\.\\d+){0,1}'
                                ],
                                'article.display.date.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Date',
                                    'description' => 'Select if the content date should be shown.',
                                    'default' => 'published',
                                    'options' => [
                                        'created' => 'Show Created Date',
                                        'published' => 'Show Published Date',
                                        'modified' => 'Show Modified Date',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.date.format' => [
                                    'type' => 'select.date',
                                    'label' => 'Date Format',
                                    'description' => 'Select preferred date format. Leave empty not to display a date.',
                                    'default' => 'l, F d, Y',
                                    'selectize' => [
                                        'allowEmptyOption' => true
                                    ],
                                    'options' => [
                                        'l, F d, Y' => 'Date1',
                                        'l, d F' => 'Date2',
                                        'D, d F' => 'Date3',
                                        'F d' => 'Date4',
                                        'd F' => 'Date5',
                                        'd M' => 'Date6',
                                        'D, M d, Y' => 'Date7',
                                        'D, M d, y' => 'Date8',
                                        'l' => 'Date9',
                                        'l j F Y' => 'Date10',
                                        'j F Y' => 'Date11',
                                        'F d, Y' => 'Date12'
                                    ]
                                ]
                            ]
                        ],
                        '_tab_readmore' => [
                            'label' => 'Read More',
                            'fields' => [
                                'article.display.read_more.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Read More',
                                    'description' => 'Select if the content \'Read More\' button should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.read_more.label' => [
                                    'type' => 'input.text',
                                    'label' => 'Read More Label',
                                    'description' => 'Type in the label for the \'Read More\' button.',
                                    'placeholder' => 'Read More...'
                                ],
                                'article.display.read_more.css' => [
                                    'type' => 'input.selectize',
                                    'label' => 'Button CSS Classes',
                                    'description' => 'CSS class name for the \'Read More\' button.'
                                ]
                            ]
                        ],
                        '_tab_extras' => [
                            'label' => 'Extras',
                            'fields' => [
                                'article.display.author.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Author',
                                    'description' => 'Select if the content author should be shown.',
                                    'default' => 'show',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.category.enabled' => [
                                    'type' => 'select.select',
                                    'label' => 'Category',
                                    'description' => 'Select if and how the content category should be shown.',
                                    'default' => 'link',
                                    'options' => [
                                        'show' => 'Show',
                                        '' => 'Hide'
                                    ]
                                ],
                                'article.display.category.route' => [
                                    'type' => 'input.text',
                                    'label' => 'Category Route',
                                    'description' => 'Route to the category page'
                                ]
                            ]
                        ]
                    ]
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
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
                ]
            ]
        ]
    ]
];
