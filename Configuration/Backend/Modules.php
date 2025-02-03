<?php

use LMS\Routes\Controller\ManagementController;

return [
    'web_lmsroutes' => [
        'parent' => 'site',
        'position' => ['bottom'],
        'access' => 'user',
        'workspaces' => 'live',
        'path' => '/module/web/routes',
        'iconIdentifier' => 'ext_icon',
        'labels' => [
            'title' => 'LLL:EXT:routes/Resources/Private/Language/locallang_mod.xlf:mlang_tabs_tab',
            'description' => 'LLL:EXT:routes/Resources/Private/Language/locallang_mod.xlf.xlf:mlang_labels_tabdescr',
            'shortDescription' => 'LLL:EXT:routes/Resources/Private/Language/locallang_mod.xlf.xlf:mlang_tabs_tab'
        ],
        'extensionName' => 'Routes',
        'controllerActions' => [
            ManagementController::class => [
                'index, show',
            ],
        ],
    ],
];
