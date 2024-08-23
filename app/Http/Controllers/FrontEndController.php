<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontEndController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at', 'desc')->limit(3)->get();
        $categories = Category::all();
        return view('customer.index', ["products" => $products, "categories" => $categories]);
    }

    public function productList(){
        $products = Product::all();
        return view('customer.product', ["products" => $products]);
    }

    public function contactList(){
        return view('customer.contact');
    }

    public function about(){
        return view('customer.about');
    }
}
