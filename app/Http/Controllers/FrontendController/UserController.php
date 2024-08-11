<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('frontendviews.index');
    }
    public function contact(){
        return view('frontendviews.contactme');
    }
    public function about(){
        return view('frontendviews.aboutme');
    }
    public function courses(){
        return view('frontendviews.courses');
    }
    public function skills(){
        return view("frontendviews.skill");
    }
}
