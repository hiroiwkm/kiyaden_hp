@extends('layouts.app')

@section('content')
<div class="container-fluid" style="padding-top:66px;">
    <div class="container px-lg-5 mt-5">
        <div class="row border-bottom">
            <h2>お買い物ガイド</h2>
        </div>
        <div class="row py-4">
        <div class="card">
            <h5 class="card-header">はじめての方へ</h5>
            <div class="card-body">
                <p class="card-text">本オンラインショップでは、お買い物が便利でお得になる会員システムをご用意しています。 会員登録をすると、会員専用の便利な機能やお得なポイント割引を利用できるようになります。
会員登録は無料です。年会費もかかりません。
            </div>
            </div>
        </div>

        <div class="row py-4">
        <div class="card">
            <h5 class="card-header">お支払いについて</h5>
            <div class="card-body">
                <p class="card-text">「クレジットカード決済」 「代金引換」 「店頭払（店頭受取商品）」 がご利用いただけます。
                    VISA / マスターカード / JCB / アメリカン・エキスプレス / ダイナースのご利用が可能です。<br>
                    ※すべて一括払いのみのお取り扱いです。分割・リボ払いはご利用頂けません。<br>
                    ※クレジットカード決済システムへ暗号化されたカード情報が登録され、次回のお買物時に「前回ご利用のクレジットカード」としてご利用出来ます。</p>
            </div>
            </div>
        </div>

        <div class="row py-4">
            <div class="card">
                <h5 class="card-header">送料について</h5>
                <div class="card-body">
                    <p class="card-text">ご注文いただいた商品はヤマト運輸にてお届けいたします。
                        送料はお客様のご負担とさせていただきます。お荷物受け取り時に配送会社へお支払いください。
                        送料・所要日数については<a href="#" class="">地域別配送料金表</a>をご覧ください。

                        ・商品の到着日、ご希望の到着時間帯については、ご注文日から4日後以降の指定が可能です。一部、ご希望に添えない地域がございます。その場合は、メールでご連絡させていただきます。
                        何卒ご了承くださいませ。
                        ・商品によって、賞味期限の都合上、一部配送できない地域がございます。
                        ・お急ぎの場合、お電話にて直接ご連絡ください。
                        お届けできますように最大限の努力をいたしますが、時期や在庫、配送地域によってはご希望の日時に添えない場合がございます。</p>                
                </div>
            </div>
        </div>

        <div class="row py-4">
        <div class="card">
            <h5 class="card-header">商品の選択について</h5>
            <div class="card-body">
                <p class="card-text">「冷凍便」での発送となる商品は、「普通便」や「冷蔵便」の商品とは一緒に送れません。</p>
            </div>
            </div>
        </div>

        <div class="row py-4">
            <div class="card">
                <h5 class="card-header">その他</h5>
                <div class="card-body">
                    <a href="/tokusyouhou" class="pl-3">特定商取引法に基づく表記</a>
                    <a href="/kojinjouhou" class="pl-3">個人情報の取り扱いについて</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

