@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:91px; margin-bottom:91px;">
    <div class="py-4 col-10">
        <h4 classs="text-center">注文が確定されました。</h4>
        <h4 classs="text-center">ご購入ありがとうございました。</h4>
    </div>
    <div class="row d-flex justify-content-center py-4">
        <h5>ご注文内容</h5>
    </div>
    <div class="col-10" style="margin:0 auto;">
        <div class="row font-weight-bold border-bottom d-flex justify-content-center">
            <p class="col-6">商品</p>
            <p class="col-3">単価</p>
            <p class="col-3">個数</p>
        </div>
        @foreach($cart as $c)
        <div class="row border-bottom d-flex justify-content-center">
            <p class="col-6">{{ $c->name }}</p>
            <p class="col-3">{{ $c->price }}円</p>
            <p class="col-3"> {{ $c->qty }}個</p>
        </div>
        @endforeach
        <div class="text-right py-1">
            <h6>(＋送料　330円)</h6>
            <h6>合計金額:</h6>
            <h5>{{ $price_total + 330 }}円</h5>
        </div>
        <div class="row">
            <h5>お支払方法：クレジットカード</h5>
        </div>
        <div class="row d-block">
            <h5>お届け先：{{ $user->name }}様　 {{ $user->address }}</h5>
        </div>
    </div>
</div>
@endsection