<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Enums\Role;


class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard');
    }
}
