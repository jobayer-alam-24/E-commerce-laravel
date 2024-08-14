<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('frontendviews.index');
    }
    public function details(){
        return view('frontendviews.details');
    }
    public function checkout(){
        return view('frontendviews.checkout');
    }
    public function category(){
        return view('frontendviews.categoryproduct');
    }
    public function policy(){
        return view('frontendviews.privacypolicy');
    }
    public function returnProcess(){
        return view('frontendviews.returnprocess');
    }
    public function shop(){
        return view('frontendviews.shop');
    }
    public function subcategory(){
        return view('frontendviews.categoryproduct');
    }
    public function thank(){
        return view('frontendviews.thank');
    }
    public function productType(){
        return view('frontendviews.producttype');
    }
    public function viewProducts(){
        return view('frontendviews.viewproducts');
    }
}
