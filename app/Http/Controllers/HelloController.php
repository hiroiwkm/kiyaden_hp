<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\News;

class HelloController extends Controller
{
    public function index(Request $request){

        $news = News::paginate(5);
        return view('welcome',['news' => $news]);
    }
}