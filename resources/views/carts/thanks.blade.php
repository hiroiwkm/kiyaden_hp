@extends('layouts.app')

@section('content')
<div class="p-5" style="margin-top:91px;">
    <h4>注文が確定されました。</h4>
    <h4>ご購入ありがとうございました。</h4>
    @foreach($cart as $c)
    {{ $c->name }}
    @endforeach
</div>
@endsection