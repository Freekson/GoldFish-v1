<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('index', compact('products'));
    }
    public function cart(){
        return view('cart');
    }
    public function ordering(){
        return view('ordering');
    }
    public function personal_account(){
        return view('personal-account');
    }
    public function user_orders(){
        return view('user-orders');
    }
    public function user_settings(){
        return view('user-settings');
    }
    public function catalog(){
        $categories = Category::get();
        return view('catalog', compact('categories'));
    }
    public function all_products(){
        $products = Product::get();
        return view('all-products', compact('products'));
    }
    public function category($code){
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }
    public function product($category, $product=null){ 
        return view('product', ['product' => $product]);
    }
}
