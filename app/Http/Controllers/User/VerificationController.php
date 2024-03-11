<?php

namespace App\Http\Controllers\User;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerificationController extends Controller
{
    public function verificationPending()
    {
        if(Auth::user()->approved) {
            return "approved";
        } else {
            return view('user.verificationPending');
        }
    }
}
