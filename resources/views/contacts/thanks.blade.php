@extends('layouts.app')

@section('content')
<div class="p-5" style="margin-top:91px;">
    <h5 class="pb-3" >以下の内容で送信されました。お問い合わせありがとうございました。</h5>

    <h5>■お名前：{{ $inputs['name']}} 様</h5>
    <h5>■メールアドレス：{{ $inputs['email']}}</h5>
    <h5>■お問い合わせ内容：{{ $inputs['message']}}</p>

</div>
@endsection