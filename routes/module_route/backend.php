<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\StockController;

/**
 * Routes for backend panel
 */

Route::group(['middleware' => ['auth', 'role:admin'],
    'prefix' => 'backend',
], function(){
    Route::get('index', [DashboardController::class, 'dashboard'])->name('backend.dashboard');
    Route::resource('users', UserController::class);
    Route::post('users/updateApprovalStatus', [UserController::class, 'updateApprovalStatus'])->name('users.updateApprovalStatus');
    Route::resource('stock', StockController::class)->names([
        'index' => 'backend.stock.index',
        'create' => 'backend.stock.create',
        'store' => 'backend.stock.store',
        'show' => 'backend.stock.show',
        'edit' => 'backend.stock.edit',
        'update' => 'backend.stock.update',
        'destroy' => 'backend.stock.destroy',
    ]);
});