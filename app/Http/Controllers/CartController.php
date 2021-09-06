<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::content();
        $total = 0;
        foreach ($cart as $c) {
            $total += $c->qty * $c->price;
        }
        return view('carts.index', compact('cart', 'total'));
        return view('carts.index', ['product_img' => $product_img]);
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
        Cart::add(
            [
            'id' => $request->_token, 
            'name' => $request->name, 
            'qty' => $request->qty,
            'price' => $request->price, 
            'weight' => $request->weight,
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
        return redirect()->route('carts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
