@extends('layouts.app')

@section('content')
<div class="container py-5" style="margin-top:91px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center">会員登録ありがとうございます！</h3>

            <p class="text-center">
                現在、仮会員の状態です。
            </p>

            <p class="text-center">
                ただいま、ご入力頂いたメールアドレス宛に、ご本人様確認用のメールをお送りしました。
            </p>

            <p class="text-center">
                メール本文内のURLをクリックすると本会員登録が完了となります。
            </p>
            <div class="text-center">
                <a href="/" class="btn w-50">トップページへ</a>
            </div>
            <div class="text-center py-4">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('ご入力頂いたメールアドレス宛に、ご本人様確認用のメールをお送りしました') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}<br>
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
        </div>
    </div>
</div>
@endsection
