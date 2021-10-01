<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSendmail;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Null_;

class ContactController extends Controller
{
    public function index(){
        return view('contacts.thanks');
    }
    
    public function confirm(Request $request){

        $inputs =[
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];
        
        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function send(Request $request){
        $action = $request->input('action');
        $inputs = [
            'name' => $request->name,
            'email' =>$request->email,
            'message' =>$request->message,
        ];

        if($action == 'submit'){
            //入力されたメールアドレスにメールを送信
             Mail::to($inputs['email'])->send(new ContactSendmail($inputs));
            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();
            //送信完了ページのviewを表示
            return view('contacts.thanks',['inputs' => $inputs]);
        }
    }
}