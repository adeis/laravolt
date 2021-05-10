<?php

use Laravolt\Workflow\Http\Controllers\DefinitionController;
use Laravolt\Workflow\Http\Controllers\InstancesController;
use Laravolt\Workflow\Http\Controllers\TaskController;

Route::group(
    [
        'prefix'     => config('laravolt.workflow.routes.prefix'),
        'as'         => 'workflow::',
        'middleware' => config('laravolt.workflow.routes.middleware'),
    ],
    function () {
        Route::resource('definitions', DefinitionController::class);
        // Route::resource('definitions.instances', InstancesController::class)->shallow();
        Route::resource('module.instances', InstancesController::class);
        Route::resource('module.tasks', TaskController::class);
    }
);