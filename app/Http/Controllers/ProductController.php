<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
       return Product::all();

    }
    public function affichage(){
        $product = Product::all();
        return view("index", compact("product"));
    }
}
