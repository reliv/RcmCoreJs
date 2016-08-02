<?php
/**
 * ZF2 Module Config file for Rcm
 *
 * This file contains all the configuration for the Module as defined by ZF2.
 * See the docs for ZF2 for more information.
 */
return [
    /* asset_manager */
    'asset_manager' => [
        'resolver_configs' => [
            'aliases' => [
                // Legacy support because public files used to be in RCM "core/public"
                'modules/rcm/' => __DIR__ . '/../public/',
                'modules/rcm-core-js/' => __DIR__ . '/../public/',
            ],
            'collections' => [
                'modules/rcm/rcm.css' => [
                    // Placeholder
                    '/modules/rcm-core-js/core/rcm.css'
                ],
            ],
        ],
    ],
    /* Rcm Config */
    'Rcm' => [
        /**
         * Scripts to be required always
         */
        'HtmlIncludes' => [
            /**
             * Script files
             */
            'scripts' => [
                'libraries' => [
                    '/bower_components/es5-shim/es5-shim.min.js' => [
                        'type' => 'text/javascript',
                        'attrs' => [
                            'conditional' => 'lt IE 9'
                        ]
                    ],
                    '/bower_components/jquery/dist/jquery.min.js' => [],
                    '/bower_components/jquery-migrate/jquery-migrate.min.js' => [],
                    // @todo Move this config to the modules that use it
                    '/bower_components/jquery-ui/jquery-ui.min.js' => [],
                    '/bower_components/angular/angular.min.js' => [],
                    '/bower_components/angular-route/angular-route.min.js' => [],
                    '/bower_components/bootbox/bootbox.js' => [],
                    '/bower_components/bootstrap/dist/js/bootstrap.min.js' => [],
                    '/bower_components/tinymce/tinymce.min.js' => [],

                    '/bower_components/rcm-js-lib/dist/rcm-js-lib.min.js' => [],
                    '/bower_components/rcm-loading/dist/rcm-loading.min.js' => [],
                    '/bower_components/rcm-loading/dist/angular-rcm-loading.min.js' => [],
                    '/bower_components/rcm-loading/dist/jquery-loader.min.js' => [],
                    '/modules/rcm-core-js/core/rcm.js' => [],
                ],
                'pre-rcm' => [
                ],
                'rcm' => [
                    '/modules/rcm/rcm.js' => [],
                ],
                'post-rcm' => [
                    '/modules/rcm-core-js/core/rcm-api.js' => [],
                    '/modules/rcm-core-js/core/rcm-form-double-submit-protect.js' => [],
                    '/modules/rcm-core-js/core/rcm-bootstrap-alert-confirm.js' => [],
                    '/modules/rcm-core-js/core/rcm-popout-window.js' => [],
                    '/bower_components/angular-utils-pagination/dirPagination.js' => [],
                ],
                'pre-modules' => [
                    '/bower_components/rcm-dialog/dist/rcm-dialog.min.js' => [],
                    '/bower_components/rcm-html-editor/dist/adapter-tinymce/rcm-html-editor.min.js' => [],
                    '/bower_components/rcm-html-editor/dist/rcm-html-editor.min.js' => [],
                ],
                'modules' => [
                    '/modules/rcm/modules.js' => [],
                ],
                'post-modules' => [
                ],
            ],
            /**
             * Stylesheet files */
            'stylesheets' => [
                'libraries' => [
                    '/bower_components/bootstrap/dist/css/bootstrap.min.css' => [],
                ],
                'pre-rcm' => [
                    '/bower_components/jquery-bootstrap-theme/css/custom-theme/jquery-ui-1.10.3.custom.css' => [],
                ],
                'rcm' => [
                    //
                ],
                'post-rcm' => [
                    '/bower_components/rcm-html-editor/dist/adapter-tinymce/rcm-html-editor.min.css' => [],
                ],
                'pre-modules' => [
                ],
                'modules' => [
                    '/modules/rcm/modules.css' => [],
                ],
                'post-modules' => [

                ],
            ],
        ]
    ],
];
