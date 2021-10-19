<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- google gonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/samazon.css')}}" rel="stylesheet"> -->

    <style>
    body {
        font-family: 'Hina Mincho', serif;
    }
    </style>

    <script src="https://kit.fontawesome.com/3723f06c66.js" crossorigin="anonymous"></script>
</head>
<body>
    @component('components.header')
    @endcomponent
    <main class="py-5 mb-5" style="margin-top:91px;">

        <div class="d-flex justify-content-center">
            <div class="container">
                <h3>登録済みのクレジットカード</h3>
                <hr>
                @if ($card["brand"] == NULL)
                <h4 class="py-4">クレジットカードが登録されていません。</h4>
                @else
                <h5>カードブランド:{{ $card["brand"] }}</h6>
                <p class="h5">有効期限: {{ $card["exp_year"] }}/{{ $card["exp_month"] }}</p>
                <p class="h5">カード番号: ************{{ $card["last4"] }}</p>
                @endif

                <form class="py-2" action="/users/mypage/token" method="post">
                    @csrf
                    @if ($card["brand"] == NULL)
                    <script type="text/javascript" src="https://checkout.pay.jp/" class="payjp-button" data-key="pk_test_3e5014cb0e4f4594df1f362e" data-on-created="onCreated" data-text="カードを登録する" data-submit-text="カードを登録する"></script>
                    @else
                    <script type="text/javascript" src="https://checkout.pay.jp/" class="payjp-button" data-key="pk_test_3e5014cb0e4f4594df1f362e" data-on-created="onCreated" data-text="カードを変更する" data-submit-text="カードを変更する"></script>
                    @endif
              

            </div>
        </div>
    </main>

    @component('components.footer')
    @endcomponent
</body>
</html>