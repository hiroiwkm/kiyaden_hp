<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Product;


class CartController extends Controller
{
    // public function ses_get(Request $request){
    //     if ($request->hasCookie('cart_item'))
    //     {
    //         $quantity = $request->cookie('cart_item');
    //     }else{
    //         $quantity = 'カートは空です。';
    //     }

    //     return view('cart',['key'=>$quantity]);
    // }

    // public function ses_put(Request $request){
    //     $product_id = $request->id;
    //         $cart_product = Product::find($product_id);
    //     $quantity = $request->quantity;

    //     //cart.blade.php に値を渡す
    //     $response = response()->view('cart', ['cart_quantity'=> $quantity, 'cart_product'=> $cart_product]);

    //     //cookieに保存する
    //     $response->cookie('key', $product_id . ':' . $quantity, 1440);


    //     return $response;
    // }

    
}
