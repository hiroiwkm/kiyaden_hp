<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Product;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::instance(Auth::user()->id)->content();
        $total = 0;
        foreach ($cart as $c) {
            $total += $c->qty * $c->price;
        }
                
        return view('carts.index', compact('cart', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_img = Product::where('id', $request->id)->pluck('img_url');
        Cart::instance(Auth::user()->id)->add(
            [
            'id' => $request->_token, 
            'name' => $request->name, 
            'qty' => $request->qty,
            'price' => $request->price, 
            'weight' => $request->weight,
            'options'=> ['product_id'=> $request->id, 'img_url'=>$product_img]
            ] 
        );

        return redirect()->route('carts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if( $request->action = "update"){
            Cart::instance(Auth::user()->id)->update($request->id, $request->qty);
        } else {
            Cart::instance(Auth::user()->id)->remove($request->id);
        }
        
        return redirect()->route('carts.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //購入時にカート内商品を全て消去
        $user_shoppingcarts = DB::table('shoppingcart')->where('instance', Auth::user()->id)->get();
        $count = $user_shoppingcarts->count();
        $count += 1;
        Cart::instance(Auth::user()->id)->store;
        DB::table('shoppingcart')->where('instance', Auth::user()->id)->where('number', null)->update(['number' => $count, 'buy_flag' => true]);

        //購入時に決済できるように
        $pay_jp_secret = env('PAYJP_SECRET_KEY');
        \Payjp\Payjp::setApiKey($pay_jp_secret);
        \Payjp\Payjp::setApiKey("sk_test_459778734e47564a1215d334");

        $user = Auth::user();

        $cart = Cart::instance(Auth::user()->id)->content();
        $price_total = 0;
        foreach ($cart as $c) {
            $price_total += $c->qty * $c->price;
        }

        $res = \Payjp\Charge::create(
          [
               "customer" => $user->token,
               "amount" => $price_total,
               "currency" => 'jpy'
           ]
       );

       //カート内を空にする
        Cart::instance(Auth::user()->id)->destroy();
        return redirect()->route('carts.index');
        
    }
}
