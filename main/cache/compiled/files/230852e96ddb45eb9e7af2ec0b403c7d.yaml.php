<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/ganalytics/blueprints.yaml',
    'modified' => 1693576686,
    'size' => 6349,
    'data' => [
        'name' => 'Google Analytics',
        'type' => 'plugin',
        'slug' => 'ganalytics',
        'version' => '2.1.0',
        'description' => 'Easily integrate and configure Google Analytics without the need to touch any code within your Grav site.',
        'icon' => 'google',
        'author' => [
            'name' => 'John Linhart',
            'email' => 'admin@escope.cz',
            'url' => 'http://johnlinhart.com'
        ],
        'homepage' => 'https://github.com/escopecz/grav-ganalytics',
        'keywords' => 'google, plugin, tracking, analytics, grav',
        'bugs' => 'https://github.com/escopecz/grav-ganalytics/issues',
        'docs' => 'https://github.com/escopecz/grav-ganalytics/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'class' => 'subtle',
                    'fields' => [
                        'configuration' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_GANALYTICS.SECTION_CONFIGURATION',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_GANALYTICS.PLUGIN_STATUS',
                                    'hightlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_GANALYTICS.ENABLED',
                                        0 => 'PLUGIN_GANALYTICS.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'trackingId' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'PLUGIN_GANALYTICS.TRACKING_ID',
                                    'help' => 'PLUGIN_GANALYTICS.TRACKING_ID_HELP',
                                    'placeholder' => 'G-XXXXXXXXXX',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'advanced' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_GANALYTICS.SECTION_ADVANCED',
                                    'underline' => true,
                                    'fields' => [
                                        'position' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_GANALYTICS.POSITION',
                                            'help' => 'PLUGIN_GANALYTICS.POSITION_HELP',
                                            'hightlight' => 1,
                                            'default' => 'head',
                                            'options' => [
                                                'head' => 'PLUGIN_GANALYTICS.POSITION_HEAD',
                                                'body' => 'PLUGIN_GANALYTICS.POSITION_BODY'
                                            ],
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'objectName' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_GANALYTICS.OBJECT_NAME',
                                            'help' => 'PLUGIN_GANALYTICS.OBJECT_NAME_HELP',
                                            'size' => 'small',
                                            'default' => 'gtag'
                                        ],
                                        'dnt' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_GANALYTICS.DNT',
                                            'help' => 'PLUGIN_GANALYTICS.DNT_HELP',
                                            'hightlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_GANALYTICS.ENABLED',
                                                0 => 'PLUGIN_GANALYTICS.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'blockedIps' => [
                                            'type' => 'array',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_GANALYTICS.BLOCKED_IPS',
                                            'help' => 'PLUGIN_GANALYTICS.BLOCKED_IPS_HELP',
                                            'value_only' => true
                                        ],
                                        'blockedIpRanges' => [
                                            'type' => 'array',
                                            'size' => 'large',
                                            'label' => 'PLUGIN_GANALYTICS.BLOCKED_IP_RANGES',
                                            'help' => 'PLUGIN_GANALYTICS.BLOCKED_IP_RANGES_HELP',
                                            'placeholder_value' => 'PLUGIN_GANALYTICS.BLOCKED_IP_RANGES_VALUE',
                                            'value_only' => true
                                        ],
                                        'blockingCookie' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_GANALYTICS.BLOCKING_COOKIE',
                                            'help' => 'PLUGIN_GANALYTICS.BLOCKING_COOKIE_HELP',
                                            'size' => 'small',
                                            'default' => 'blockGA'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'cookie' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_GANALYTICS.SECTION_COOKIE',
                            'fields' => [
                                'cookieConfig' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_GANALYTICS.COOKIE_CONFIG',
                                    'help' => 'PLUGIN_GANALYTICS.COOKIE_CONFIG_HELP',
                                    'hightlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_GANALYTICS._YES',
                                        0 => 'PLUGIN_GANALYTICS._NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'cookiePrefix' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_GANALYTICS.COOKIE_PREFIX',
                                    'help' => 'PLUGIN_GANALYTICS.COOKIE_PREFIX_HELP',
                                    'size' => 'small',
                                    'default' => ''
                                ],
                                'cookieDomain' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_GANALYTICS.COOKIE_DOMAIN',
                                    'help' => 'PLUGIN_GANALYTICS.COOKIE_DOMAIN_HELP',
                                    'size' => 'medium'
                                ],
                                'cookieExpires' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_GANALYTICS.COOKIE_EXPIRES',
                                    'help' => 'PLUGIN_GANALYTICS.COOKIE_EXPIRES_HELP',
                                    'append' => 'PLUGIN_GANALYTICS.SECONDS',
                                    'default' => 63072000,
                                    'validate' => [
                                        'type' => 'number',
                                        'min' => 0
                                    ]
                                ]
                            ]
                        ],
                        'optout' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_GANALYTICS.SECTION_OPTOUT',
                            'fields' => [
                                'hint' => [
                                    'type' => 'spacer',
                                    'text' => 'PLUGIN_GANALYTICS.OPTOUT_HINT',
                                    'underline' => false
                                ],
                                'linkhint' => [
                                    'type' => 'display',
                                    'size' => 'large',
                                    'label' => 'PLUGIN_GANALYTICS.OPTOUT_LINK',
                                    'markdown' => true,
                                    'content' => '`<a href="javascript:gaOptout()">Disable Google Analytics ...</a>`'
                                ],
                                'optOutEnabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_GANALYTICS.OPTOUT_STATUS',
                                    'help' => 'PLUGIN_GANALYTICS.OPTOUT_STATUS_HELP',
                                    'hightlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_GANALYTICS.ENABLED',
                                        0 => 'PLUGIN_GANALYTICS.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'optOutMessage' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_GANALYTICS.OPTOUT_MESSAGE',
                                    'help' => 'PLUGIN_GANALYTICS.OPTOUT_MESSAGE_HELP',
                                    'size' => 'medium',
                                    'default' => 'Google tracking is now disabled.'
                                ]
                            ]
                        ],
                        'debug' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_GANALYTICS.SECTION_DEBUG',
                            'fields' => [
                                'debugMode' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_GANALYTICS.DEBUG_MODE',
                                    'help' => 'PLUGIN_GANALYTICS.DEBUG_MODE_HELP',
                                    'hightlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_GANALYTICS.ENABLED',
                                        0 => 'PLUGIN_GANALYTICS.DISABLED'
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
