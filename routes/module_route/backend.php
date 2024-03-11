<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;

/**
 * Routes for backend panel
 */

Route::group(['middleware' => ['auth', 'role:admin'],
    'prefix' => 'backend',
], function(){
    Route::get('index', [DashboardController::class, 'dashboard'])->name('backend.dashboard');
    Route::resource('users', UserController::class);
    Route::post('users/updateApprovalStatus', [UserController::class, 'updateApprovalStatus'])->name('users.updateApprovalStatus');
    Route::get('stock', [DashboardController::class, 'dashboard'])->name('backend.stock.index');
});