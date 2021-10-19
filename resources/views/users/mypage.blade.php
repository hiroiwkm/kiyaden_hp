@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-3">
    <div class="w-50 py-5" style="margin-top:91px;">
        <h1>マイページ</h1>

        <hr>

        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="row">
                    <div class="col-2 d-flex align-items-center">
                        <i class="fa fa-user fa-3x"></i>
                    </div>
                    <div class="col-9 d-flex align-items-center ml-2 mt-3">
                        <div class="d-flex flex-column">
                            <label for="user-name">会員情報の編集</label>
                            <p>アカウント情報の編集</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{route('mypage.edit')}}">
                        <i class="fa fa-chevron-right fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr>

       <div class="container">
           <div class="d-flex justify-content-between">
               <div class="row">
                   <div class="col-2 d-flex align-items-center">
                       <i class="fa fa-credit-card fa-3x"></i>
                   </div>
                  <div class="col-9 d-flex align-items-center ml-2 mt-3">
                       <div class="d-flex flex-column">
                           <label for="user-name">クレジットカードの登録</label>
                           <p>クレジットカードを登録・変更します</p>
                       </div>
                   </div>
               </div>
               <div class="d-flex align-items-center">
                   <a href="{{route('mypage.register_card')}}">
                       <i class="fa fa-chevron-right fa-2x"></i>
                   </a>
               </div>
           </div>
       </div>

       <hr>


        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="row">
                    <div class="col-2 d-flex align-items-center">
                        <i class="fa fa-archive fa-3x"></i>
                    </div>
                    <div class="col-9 d-flex align-items-center ml-2 mt-3">
                        <div class="d-flex flex-column">
                            <label for="user-name">注文履歴</label>
                            <p>注文履歴を確認できます</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{route('mypage')}}">
                        <i class="fa fa-chevron-right fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="row">
                    <div class="col-2 d-flex align-items-center">
                        <i class="fa fa-map fa-3x"></i>
                    </div>
                    <div class="col-9 d-flex align-items-center ml-3 mt-3">
                        <div class="d-flex flex-column">
                            <label for="user-name">お届け先</label>
                            <p>登録住所の変更をします</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{route('mypage.edit_address')}}">
                        <i class="fa fa-chevron-right fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="row">
                    <div class="col-2 d-flex align-items-center">
                        <i class="fa fa-sign-out fa-3x"></i>
                    </div>
                    <div class="col-9 d-flex align-items-center ml-2 mt-3">
                        <div class="d-flex flex-column">
                            <label for="user-name">ログアウト</label>
                            <p>ログアウトします</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-chevron-right fa-2x"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

        <hr>
    </div>
</div>
@endsection