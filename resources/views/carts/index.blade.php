@extends('layouts.app')

@section('content')
  <div class="container py-5" style="margin-top:91px;">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-4 text-center">カートの中身</h3>
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="width:50%" class="text-center">商品</th>
                        <th style="width:8%" class="text-center">数量</th>
                        <th style="width:16%"></th>
                        <th style="width:12%">金額(税別)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $product)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control form-control-lg text-center" value="{{ $product->qty }}">
                        </td>
                        <td class="actions" data-th="">
                            <div class="text-left">
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    更新
                                </button>
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    削除
                                </button>
                            </div>
                        </td>
                        <td data-th="Price">{{ $product->price*$product->qty }}円</td>

                    </tr>
                    @endforeach 
                </tbody>
            </table>
            <div class="float-right text-right">
                <h4>合計金額</h4>
                <h2>{{ $total*1.08 }}円</h2>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-sm-6 order-md-2 text-right">
            <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">購入画面へ</a>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="/products">
                <i class="fa fa-arrow-left mr-2"></i>商品一覧へもどる</a>
        </div>
    </div>
</div>

@endsection