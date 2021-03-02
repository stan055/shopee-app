<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use Session;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $products = DB::table('products')->get();

        $cartQty = Session::has('cart') ? Session::get('cart')->totalQty : 0;

        return view('home.index', [
            'products' => $products,
            'cartQty' => $cartQty
        ]);
    }
}
