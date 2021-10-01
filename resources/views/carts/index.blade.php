@extends('layouts.app')

@section('content')
  <div class="py-4 px-1 px-sm-5 mx-sm-5" style="margin-top:90px;">
    <h3 class="col-12 mb-4 text-center">カートの中身</h3>
         <hr>
        @if($total == 0)
                    <h5 class="col-12 mb-4">カートは空です。</h5>
                    @else
                    @foreach ($cart as $product)
                    <div class="border-bottom d-flex justify-content-center py-4">
                        <div class="col-sm-2 d-none d-sm-inline-block">
                            <img src="{{ $product->options->img_url[0] }}" alt="" class="img-fluid rounded mb-2 shadow ">
                        </div>
                        <div class="col-6 col-sm-6">
                            <a href="products/{{ $product->options->product_id }}"><h4>{{ $product->name }}</h4></a>
                            <h6>{{ $product->price }}円</h6>
                        </div>
                        <!-- 数量の更新 -->
                        <div class="col-4 col-sm-2 px-0">
                            <form class="form-inline" action="{{ route('carts.update') }}" method="POST">
                            @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="id" value="{{ $product->rowId }}">
                                <input type="number" class="form-control form-control-lg text-center" style="width:60px;" name="qty" value="{{ $product->qty }}">
                                <button type="submit" name="action" value="update" class="btn btn-white border-seconday bg-white btn-md mx-1"><i class="fa fa-refresh"></i></button>
                            </form>
                        </div>
                        <!-- 商品の削除 -->
                        <div class="col-2 col-sm-2 px-0 pt-1">
                            <form  method="POST" action="{{ route('carts.update') }}">
                            @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="id" value="{{ $product->rowId }}">
                                <button type="submit" name="action" value="delete" class="btn btn-white border-secondary bg-white btn-md"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div>                   
                    @endforeach 
        @endif
 
    <!-- 合計金額 -->
    <div class="row">
        <div class="col-12 text-right p-4">
            @if($total == 0)
            <hr>
            <h5>合計金額:</h5>
                <h2>{{$total}}円</h2>
            @else
            <p>( + 送料：330円 )</p>
                <h5>合計金額:</h5>
                <h2>{{$total + 330}}円</h2>
            @endif
        </div>
    </div>
    <!-- 購入ボタン -->
    <div class="row d-flex align-items-center">
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="/products">←商品一覧へもどる</a>
        </div>
        <div class="col-sm-6 order-md-2 text-right">
            <form method="POST" action="{{ route('carts.destroy') }}">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">購入を確定する</button>
            </form>
        </div>
    </div>
</div>
@endsection