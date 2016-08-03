<?php
/**
 * asset_manager.php
 */
$bowerComponentsDir = __DIR__ . '/../../../../public/bower_components/';
return [
    'resolver_configs' => [
        'aliases' => [
            // Legacy support because public files used to be in RCM "core/public"
            'modules/rcm/' => __DIR__ . '/../public/',
            'modules/rcm-core-js/' => __DIR__ . '/../public/',
        ],
        'collections' => [
            /**
             * Core JS and css
             * (core features)
             */
            'modules/rcm/rcm.js' => [],
            'modules/rcm/rcm.css' => [
                // Placeholder css
                '/modules/rcm-core-js/src/rcm.css'
            ],
            /**
             * Extended JS and css
             * (features for modules and lower level services)
             */
            'modules/rcm/modules.js' => [],
            'modules/rcm/modules.css' => [],
        ],
    ],
];
