<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function confirm(Request $request){

        $inputs =[
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ] ;
        
        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function send(){

    }
}
