<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();
        return view('users.mypage', compact('user'));
    }

    public function edit(){
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function edit_address(Request $request){
        $user = Auth::user();
        $user->name = $request->input('name') ? $request->input('name') : $user->name;
        $user->email = $request->input('email') ? $request->input('email') : $user->email;
        $user->postal_code = $request->input('postal_code') ? $request->input('postal_code') : $user->postal_code;
        $user->address = $request->input('address') ? $request->input('address') : $user->address;
        $user->phone = $request->input('phone') ? $request->input('phone') : $user->phone;
        $user->update();

        return redirect()->route('mypage');

    }



    public function register_card(Request $request)
    {
        $user = Auth::user();

        $pay_jp_secret = env('PAYJP_SECRET_KEY');
        \Payjp\Payjp::setApiKey($pay_jp_secret);
        
        $card = [];
        $count = 0;

        if ($user->token != "") {
            $result = \Payjp\Customer::retrieve($user->token)->cards->all(array("limit"=>1))->data[0];
        }
    }

}