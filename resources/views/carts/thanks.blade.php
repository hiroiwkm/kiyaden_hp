@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:91px; margin-bottom:91px;">
    <div class="py-2 col-10">
        <h4 classs="text-center">注文が確定されました。</h4>
        <h4 classs="text-center">ご購入ありがとうございました。</h4>
        <div class="pt-3 pb-1">
            <h5>■ご注文内容：</h5>
        </div>
        <div class="px-3 col-12">
            <ul style="list-style:none; padding:0">
            @foreach($cart as $c) 
                <li>{{ $c->name }}  {{ $c->price }}円(税抜)  ×{{ $c->qty }}個</li>
            @endforeach
                <li>送料：330円</li>
            </ul>
        </div>
        <div class="py-1">
            <h5>■合計金額：{{ $price_total }}円(税込)</h5>
        </div>
        <div class="py-1">
            <h5>■お支払方法：クレジットカード</h5>
        </div>
        <div class="py-1">
            <h5>■お届け先：{{ $user->name }}様　 {{ $user->address }}</h5>
        </div>
        <div class="py-1">
            <h5>■希望配送日：{{ $del_date }}　</h5>
        </div>
        <div class="py-1">
            <h5>■希望配送時間：{{ $del_time }}　</h5>
        </div>


    </div>
</div>
@endsection