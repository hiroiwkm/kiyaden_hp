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
                                <div class="col-md-9 text-left mt-sm-2">
                                    <a href="products/{{ $product->options->product_id }}"><h4>{{ $product->name }}</h4>{{ $product->price }}円</a>
                                </div>
                            </div>
                        </td>
                        <td data-th="Quantity">
                            <form  method="PUT" action="{{ route('carts.update') }}">
                            @csrf
                                <input type="number" class="form-control form-control-lg text-center" value="{{ $product->qty }}">
                                <div class="text-left">
                                    <button type="submit" class="btn btn-white border-secondary bg-white btn-md mb-2">
                                        更新
                                    </button>
                                </div>
                            </form>
                            <form  method="PUT" action="{{ route('carts.update') }}">
                             @csrf
                                <button type="submit" value="delete" class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    削除
                                </button>
                            </form>
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
            <form method="POST" action="{{ route('carts.destroy') }}">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">購入画面へ</button>
            </form>
        </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="/products">←商品一覧へもどる</a>
        </div>
    </div>
</div>

@endsection