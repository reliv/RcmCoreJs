<?php

namespace RcmCoreJs;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ModuleConfig
{
    /**
     * __invoke
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            /* asset_manager */
            'asset_manager' => require __DIR__ . '/../config/asset_manager.php',

            /* Rcm Config */
            'Rcm' => require __DIR__ . '/../config/rcm-core-config.php',
        ];
    }
}
