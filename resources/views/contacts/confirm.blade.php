@extends('layouts.app')

@section('content')
<div class="row gx-4 gx-lg-5 justify-content-center p-5" style="margin-top:91px;">
    <div class="col-lg-6">
    <form method="POST" action="/contacts/thanks">
        @csrf
        <!-- Name input-->
        <div class="form-floating mb-3">
        <label for="name">お名前</label>
        <input class="form-control" type="text" name="name" value="{{ $inputs['name'] }}" placeholder="Enter your name..." data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
        </div>
        <!-- Email address input-->
        <div class="form-floating mb-3">
        <label for="email">メール</label>
        <input class="form-control" type="email" name="email" value="{{ $inputs['email'] }}" placeholder="name@example.com" data-sb-validations="required,email" value="{{ old('name') }}" />
            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
        </div>
        <!-- Message input-->
        <div class="form-floating mb-3">
        <label for="message">お問い合わせ内容</label>
        <textarea class="form-control" type="text" name="message" value="{{ $inputs['message'] }}" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required">{{ $inputs['message'] }}</textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
        </div>
        <div class="py-2">
        <h5 class="float-left" style="line-height:37px;">上記の内容で送信しますか？</h5>
        <button class="btn btn-success btn-xl ml-4" id="submitButton" type="submit" name="action" value="submit">送信</button>
        </div>   
        <a href="/#contact">←戻る</a> 
    </form>
    </div>
</div>
    <!-- <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit" name="action" value="back">修正する</button> -->

 @endsection