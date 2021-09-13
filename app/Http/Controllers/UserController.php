<?php

namespace App\Http\Controllers;

use App\User;
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

    public function update(Request $request, User $user){
        $user = Auth::user();
        $user->name = $request->input('name') ? $request->input('name') : $user->name;
        $user->email = $request->input('email') ? $request->input('email') : $user->email;
        // $user->postal_code = $request->input('postal_code') ? $request->input('postal_code') : $user->postal_code;
        $user->address = $request->input('address') ? $request->input('address') : $user->address;
        $user->tel_number = $request->input('tel_number') ? $request->input('tel_number') : $user->tel_number;
        $user->update();

        return redirect()->route('mypage');

    }

    public function edit_address()
    {
        $user = Auth::user();

        return view('users.edit_address', compact('user'));

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
                $count = \Payjp\Customer::retrieve($user->token)->cards->all()->count;
                

                $card = [
                    'brand' => $result["brand"],
                    'exp_month' => $result["exp_month"],
                    'exp_year' => $result["exp_year"],
                    'last4' => $result["last4"] 
                ];
                }else{
                    $card = [
                        'brand' => NULL,
                        'exp_month' => NULL,
                        'exp_year' => NULL,
                        'last4' => NULL
                    ];
    
                }
    
           return view('users.register_card', compact('card', 'count'));
       }
    
       public function token(Request $request)
       {
           $pay_jp_secret = env('PAYJP_SECRET_KEY');
           \Payjp\Payjp::setApiKey($pay_jp_secret);
    
           $user = Auth::user();
           $customer = $user->token;
    
           if ($customer != "") {
               $cu = \Payjp\Customer::retrieve($customer);
               $delete_card = $cu->cards->retrieve($cu->cards->data[0]["id"]);
               $delete_card->delete();
               $cu->cards->create(array(
                  "card" => request('payjp-token')
               ));
               return redirect()->route('home');
           } else {
               $cu = \Payjp\Customer::create(array(
                   "card" => request('payjp-token')
               ));
               $user->token = $cu->id;
               $user->update();
               return redirect()->route('mypage');

           }
    
        //    return redirect()->route('mypage');
       }
    }

