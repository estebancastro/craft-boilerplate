<?php

use craft\helpers\App;

return [
    'useDevServer' => App::env('USE_VITE_DEV_SERVER'),
    'manifestPath' => '@webroot/dist/.vite/manifest.json',
    'devServerPublic' => rtrim(App::env('PRIMARY_SITE_URL'), '/') . ':3000',
    'serverPublic' => rtrim(App::env('PRIMARY_SITE_URL'), '/') . '/dist/',
    'errorEntry' => 'src/js/app.js',
    'cacheKeySuffix' => '',
    'devServerInternal' => '',
    'checkDevServer' => false,
    'includeReactRefreshShim' => false,
    'includeModulePreloadShim' => true,
    'criticalPath' => '@webroot/dist/criticalcss',
    'criticalSuffix' =>'_critical.min.css',
];
