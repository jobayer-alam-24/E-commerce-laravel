<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
 
    public function adminLogin()
    {
        return view('auth.login');
    }
}
