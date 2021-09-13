@extends('layouts.app')

@section('content')
<div class="p-5" style="margin-top:91px;">
    <h4>お名前：{{ $inputs['name'] }} </h4>
    <h4>メールアドレス：{{ $inputs['email'] }} </h4>
    <h4>お問い合わせ内容：{{ $inputs['message'] }} </h4>
</div>
<div class="py-2 px-5">
    <h5>上記の内容で送信しますか？</h5>
    <a href="/#contact">←戻る</a>
    <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">送信</button>
</div>

 @endsection