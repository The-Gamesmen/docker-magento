<?php
return [
    'backend' => [
        'frontName' => '{MAGENTO_ADMIN_FRONTNAME}'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'amqp' => [
            'host' => '{AMPQ_HOST}',
            'port' => '{AMPQ_PORT}',
            'user' => '{AMQP_USER}',
            'password' => '{AMQP_PASSWORD}',
            'virtualhost' => '{AMQP_VHOST}'
        ],
        'consumers_wait_for_messages' => 1
    ],
    'db' => [
        'connection' => [
            'indexer' => [
                'host' => '{MYSQL_HOST}',
                'dbname' => '{MYSQL_DATABASE}',
                'username' => '{MYSQL_USER}',
                'password' => '{MYSQL_PASSWORD}',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'persistent' => null
            ],
            'default' => [
                'host' => '{MYSQL_HOST}',
                'dbname' => '{MYSQL_DATABASE}',
                'username' => '{MYSQL_USER}',
                'password' => '{MYSQL_PASSWORD}',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ],
        'table_prefix' => ''
    ],
    'crypt' => [
        'key' => '{ENCRYPTION_KEY}'
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => '{MAGENTO_DEPLOY_MODE}',
    'session' => [
        'save' => '{SESSION_CACHE}',
        'redis' => [
            'host' => '{SESSION_CACHE_SERVER}',
            'port' => '{SESSION_CACHE_PORT}',
            'password' => '{SESSION_CACHE_PASSWORD}',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '{SESSION_CACHE_DB}',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '4',
            'max_concurrency' => '8',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '1',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000',
            'sentinel_master' => '',
            'sentinel_servers' => '',
            'sentinel_connect_retries' => '5',
            'sentinel_verify_master' => '0'
        ]
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_',
                'backend' => '\\Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => '{CACHE_SERVER}',
                    'database' => '{CACHE_DB}',
                    'port' => '{CACHE_PORT}',
                    'password' => '{CACHE_PASSWORD}',
                    'compress_data' => '1',
                    'compression_lib' => ''
                ],
                'frontend_options' => [
                    'write_control' => false,
                ],
            ],
            'page_cache' => [
                'id_prefix' => '69d_',
                'backend' => '\\Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => '{PAGE_CACHE_SERVER}',
                    'database' => '{PAGE_CACHE_DB}',
                    'port' => '{PAGE_CACHE_PORT}',
                    'password' => '{PAGE_CACHE_PASSWORD}',
                    'compress_data' => '1',
                    'compression_lib' => ''
                ],
                'frontend_options' => [
                    'write_control' => false,
                ],
            ],
            'stale_cache' => [
                'id_prefix' => '69d_',
                'backend' => '\\Magento\\Framework\\Cache\\Backend\\RemoteSynchronizedCache',
                'backend_options' => [
                    'remote_backend' => '\\Magento\\Framework\\Cache\\Backend\\Redis',
                    'remote_backend_options' => [
                        'server' => '{PAGE_CACHE_SERVER}',
                        'database' => '{PAGE_CACHE_DB}',
                        'port' => '{PAGE_CACHE_PORT}',
                        'password' => '{PAGE_CACHE_PASSWORD}',
                        'compress_data' => '0',
                        'compression_lib' => '',
                        'preload_keys' => [
                            '69d_EAV_ENTITY_TYPES:hash',
                            '69d_GLOBAL_PLUGIN_LIST:hash',
                            '69d_DB_IS_UP_TO_DATE:hash',
                            '69d_SYSTEM_DEFAULT:hash',
                            '69d_SYSTEM_SCOPES:hash',
                            '69d_SYSTEM_WEBSITES_0:hash',
                            '69d_SYSTEM_WEBSITES_1:hash',
                            '69d_SYSTEM_STORES_0:hash',
                            '69d_SYSTEM_STORES_1:hash',
                        ],
                    ],
                    'local_backend' => 'Cm_Cache_Backend_File',
                    'local_backend_options' => [
                        'cache_dir' => '/dev/shm/'
                    ],
                ],
                'use_stale_cache' => true,
                'frontend_options' => [
                    'write_control' => false,
                ],
            ],
        ],
        'type' => [
            'default' => ['frontend' => 'default'],
            'layout' => ['frontend' => 'page_cache'], /*stale_cache*/
            'block_html' => ['frontend' => 'page_cache'], /*stale_cache*/
            'reflection' => ['frontend' => 'default'], /*stale_cache*/
            'db_ddl' => ['frontend' => 'default'],
            'compiled_config' => ['frontend' => 'default'],
            'eav' => ['frontend' => 'default'],
            'customer_notification' => ['frontend' => 'default'],
            'config_integration' => ['frontend' => 'default'], /*stale_cache*/
            'config_integration_api' => ['frontend' => 'default'], /*stale_cache*/
            'full_page' => ['frontend' => 'page_cache'], /*stale_cache*/
            'target_rule' => ['frontend' => 'default'], /*stale_cache*/
            'config_webservice' => ['frontend' => 'default'],
            'translate' => ['frontend' => 'page_cache'], /*stale_cache*/
            'adyen' => ['frontend' => 'default'],
            'cache_import_product' => ['frontend' => 'default'],
        ],
        'allow_parallel_generation' => true
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'target_rule' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'cache_import_product' => 1,
        'vertex' => 1,
        'adyen' => 1,
        'ec_cache' => 1
    ],
    'downloadable_domains' => [
        '{FRONTEND_URL}'
    ],
    'install' => [
        'date' => 'Wed, 26 May 2021 05:36:45 +0000'
    ],
    'system' => [
        'default' => [
            'web' => [
                'secure' => [
                    'base_url' => 'https://{ADMIN_URL}/',
                    'base_static_url' => 'https://{STATIC_URL}/static/',
                    'base_media_url' => 'https://{STATIC_URL}/media/'
                ],
                'unsecure' => [
                    'base_url' => 'https://{ADMIN_URL}/',
                    'base_static_url' => 'https://{STATIC_URL}/static/',
                    'base_media_url' => 'https://{STATIC_URL}/media/'
                ]
            ],
            'catalog' => [
                'search' => [
                    'engine' => '{SEARCH_ENGINE}',
                    'opensearch_server_hostname' => '{SEARCH_ENGINE_HOST}',
                    'opensearch_server_port' => '{SEARCH_ENGINE_PORT}'
                ]
            ],
            'cookie' => [
                'cookie_path' => null,
                'cookie_domain' => '{COOKIE_URL}'
            ],
            'system' => [
                'security' => [
                    'max_session_size_admin' => '512000',
                    'max_session_size_storefront' => '512000'
                ]
            ]
        ],
        'stores' => [
            'admin' => [
                'web' => [
                    'unsecure' => [
                        'base_url' => 'https://{ADMIN_URL}/',
                        'base_link_url' => 'https://{ADMIN_URL}/',
                        'base_static_url' => 'https://{ADMIN_URL}/static/',
                        'base_media_url' => 'https://{ADMIN_URL}/media/'
                    ],
                    'secure' => [
                        'base_url' => 'https://{ADMIN_URL}/',
                        'base_link_url' => 'https://{ADMIN_URL}/',
                        'base_static_url' => 'https://{ADMIN_URL}/static/',
                        'base_media_url' => 'https://{ADMIN_URL}/media/'
                    ]
                ]
            ],
            'default' => [
                'web' => [
                    'unsecure' => [
                        'base_url' => 'https://{FRONTEND_URL}/',
                        'base_link_url' => 'https://{FRONTEND_URL}/',
                        'base_static_url' => 'https://{STATIC_URL}/static/',
                        'base_media_url' => 'https://{STATIC_URL}/media/'
                    ],
                    'secure' => [
                        'base_url' => 'https://{FRONTEND_URL}/',
                        'base_link_url' => 'https://{FRONTEND_URL}/',
                        'base_static_url' => 'https://{STATIC_URL}/static/',
                        'base_media_url' => 'https://{STATIC_URL}/media/'
                    ]
                ]
            ]
        ],
    ],
    'MAGE_INDEXER_THREADS_COUNT' => 1, // (int)`nproc`, // Disabled due to issue with indexer failing on product price and fulltext search when enabled
];
