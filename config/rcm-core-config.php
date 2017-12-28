<?php
/**
 * rcm-core-config.php
 */
return [
    /**
     * Scripts to be required always
     */
    'HtmlIncludes' => [
        /**
         * Script files
         */
        'scripts' => [
            'libraries' => [
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
                '/modules/rcm-core-js/dist/rcm-core-js.js' => [],

            ],
            'pre-rcm' => [
            ],
            'rcm' => [
                '/modules/rcm/rcm.js' => [],
            ],
            'post-rcm' => [
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
                '/modules/rcm/rcm.css' => [],
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
];
