<?php
/**
 * ZF2 Module Config file for Rcm
 *
 * This file contains all the configuration for the Module as defined by ZF2.
 * See the docs for ZF2 for more information.
 */
return [
    /* asset_manager */
    'asset_manager' => require __DIR__ . '/asset_manager.php',

    /* Rcm Config */
    'Rcm' => require __DIR__ . '/rcm-core-config.php',
];
