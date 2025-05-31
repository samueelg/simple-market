<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
        public function index()
    {
        $id = session('user.id');
        $products = Product::all();

        return view('home', compact('products'));
    }

    public function register(){
        return view('auth.register');
    }
}
