<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function ses_get(Request $request){
        $sesdata = $request->session()->get('msg');
        return view('cart', ['session_data'=> $sesdata]);
    }

    public function ses_put(Request $request){
        $quantity = $request->quantity;
        $request->session()->put('quantity', $quantity);
        return redirect('cart');

    }
}
