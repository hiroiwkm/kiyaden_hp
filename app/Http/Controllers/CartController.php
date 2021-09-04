<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Product;


class CartController extends Controller
{
    public function ses_get(Request $request){
        // $sesdata = $request->session()->get('msg');
        $cookie = Cookie::get('product_id');
        $product = explode(':',$cookie);
        $products = Product::find($product[0]);

        return view('cart', ['products'=> $products, 'quantity'=>$product[1]]);
    }

    public function ses_put(Request $request){

        $cookie = Cookie::get('product_id');
        
        Cookie::queue('product_id', $request->id.':'.$request->quantity, 1440);
        
        // $request->session()->put('quantity', $quantity);
        return redirect('cart');

    }
}
