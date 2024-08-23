<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $user       = User::where('role_id', 2)->count();
        $product    = Product::count();
        return view('admin.index', ["users" => $user, "products" => $product]);
    }
}
