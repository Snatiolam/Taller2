<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;

class AppController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $products  = Product::all();
            // The user is logged in...
            return view('shop', compact('products')); 
        }else{
            return redirect()->route('login');
        }
    }
}
