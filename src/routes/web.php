<?php

use Illuminate\Support\Facades\Route;
use Luminous\Installer\Http\Controllers\InstallController;

Route::group(['prefix' => 'install', 'as' => 'Luminous::', 'middleware' => ['web']], function () {
    Route::get('/', [InstallController::class, 'preInstall'])->name('pre.install');
    Route::post('/validation/configuration', [InstallController::class, 'serverValidation'])->name('server.validation');
    Route::get('/configuration', [InstallController::class, 'configuration'])->name('config');
    Route::get('/database', [InstallController::class, 'database'])->name('database');
    Route::post('/final', [InstallController::class, 'final'])->name('final');
});

