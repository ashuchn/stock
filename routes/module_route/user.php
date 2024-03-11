<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\VerificationController;

/**
 * Routes for User module
 */

Route::get('verification', [VerificationController::class, 'verificationPending'])->name('user.verificationPending')->middleware([
    'role:user'
]);

Route::group(['middleware' => ['auth', 'role:user', 'checkIfUserIsApproved'],
    'name' => 'user'
], function(){
    
    Route::get('index', function(){
        return "user index route";
    })->name('index');

});