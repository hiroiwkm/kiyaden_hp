<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
        Cart::instance(Auth::user()->id)->add(
            [
            'id' => $request->_token, 
            'name' => $request->name, 
            'qty' => $request->qty,
            'price' => $request->price, 
            'weight' => $request->weight,
            'options'=> ['product_id'=> $request->id]
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
        if( $request->input('delete')){
            Cart::instance(Auth::user()->id)->remove($request->input('id'));
        } else {
            Cart::instance(Auth::user()->id)->update($request->input('id'), $request->input('qty'));
        }

        
        // return redirect()->route('carts.index');
        $test = $request->input('id');
        return view('carts.index', compact('test'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user_shoppingcarts = DB::table('shoppingcart')->where('instance', Auth::user()->id)->get();
        $count = $user_shoppingcarts->count();
        $count += 1;
        Cart::instance(Auth::user()->id)->store;
        DB::table('shoppingcart')->where('instance', Auth::user()->id)->where('number', null)->update(['number' => $count, 'buy_flag' => true]);
        Cart::instance(Auth::user()->id)->destroy();
        return redirect()->route('carts.index');
        
    }
}
