<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 * @link https://craftcms.com/docs/5.x/reference/config/general.html
 */

use craft\config\GeneralConfig;
use craft\helpers\App;

return GeneralConfig::create()
    // Craft config settings from .env variables
    ->aliases([
        '@assetsUrl' => rtrim(App::env('ASSETS_URL'), '/'),
        '@web' => rtrim(App::env('PRIMARY_SITE_URL'), '/'),
        '@webroot' => dirname(__DIR__) . '/web',
    ])
    ->allowAdminChanges(App::env('CRAFT_ALLOW_ADMIN_CHANGES') ?? false)
    ->cpTrigger(App::env('CRAFT_CP_TRIGGER') ?: 'admin')
    ->devMode(App::env('CRAFT_DEV_MODE') ?? false)
    ->disallowRobots(App::env('CRAFT_DISALLOW_ROBOTS') ?? false)
    ->enableTemplateCaching(App::env('CRAFT_ENABLE_TEMPLATE_CACHING') ?? false)
    // Craft config settings from constants
    ->defaultWeekStartDay(1)
    ->maxInvalidLogins(3)
    ->omitScriptNameInUrls()
    ->preloadSingles()
    ->preventUserEnumeration()
    ->useEmailAsUsername(true)
;
