<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

use Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::has('cart') ? Session::get('cart') : 0;

        return view('cart.index', [
            'cartQty' => $cart->totalQty,
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice,
            'totalQty' => $cart->totalQty
        ]);
    }

    public function deleteFromId(Request $request, $id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $oldCart->totalQty -= $oldCart->items[$id]['qty'] ;
        $oldCart->totalPrice -= $oldCart->items[$id]['price'] * $oldCart->items[$id]['qty'] ;
        unset($oldCart->items[$id]);

        $cart = new Cart($oldCart);
        
        $request->session()->put('cart', $cart);

        return redirect()->back();
    }
}
