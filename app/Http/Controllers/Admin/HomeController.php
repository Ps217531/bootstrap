<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class HomeController extends BaseModuleController
{
    protected $moduleName = 'homes';
    protected $permalinkBase = 'home';

    protected $indexOptions = [
        // 'permalink' => false,
        'edit' => true,
    ];
}
