@extends('layouts.app')

@section('content')
<div class="p-5" style="margin-top:91px;">
    <h4>送信されました。</h4>
    <h4>お問い合わせありがとうございました。</h4>
    <?php var_dump($inputs) ?>
</div>
@endsection