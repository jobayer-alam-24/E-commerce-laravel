<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //To go to Directly dashboard the middleware will check the mail and password
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard ()
    {
        return view ('backendview.dashboard');
    }
}
