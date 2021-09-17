@extends('layouts.app')

@section('content')
  <div class="container py-5" style="margin-top:91px;">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            
            <h3 class="display-5 mb-4 text-center">カートの中身</h3>
            <table id="shoppingCart" class="table table-condensed table-responsive" >
                <thead>
                    <tr>
                        <th style="width:60%;">商品</th>
                        <th style="width:10%;">数量</th>
                        <th style="width:5%;"></th>
                        <th style="width:12%;" class="text-center">金額</th>

                    </tr>
                </thead>
                <tbody>
                    @if($total == 0)
                    <tr><td class="text-center">カートは空です。</td></tr>
                    @else
                    @foreach ($cart as $product)
                    <tr>
                        <td data-th="Product">
                        <div class="row">
                            <div class="col-md-3 text-left">
                                <img src="{{ $product->options->img_url[0] }}" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                            </div>
                            <div class="col-md-9 text-left mt-sm-2">
                                <a href="products/{{ $product->options->product_id }}"><h4>{{ $product->name }}</h4>{{ $product->price }}円</a>
                            </div>
                        </div>
                        </td>
                        <!-- 数量の更新 -->
                        <td data-th="Update">
                            <form action="{{ route('carts.update') }}" method="POST">
                            @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="id" value="{{ $product->rowId }}">
                                <input type="number" class="form-control form-control-lg text-center" style="width:70px;" name="qty" value="{{ $product->qty }}">
                                <input type="submit" name="action" value="update" class="btn btn-white border-secondary bg-white btn-md mb-2">
                            <!-- <div class="text-left">
                                    <button type="submit" class="btn btn-white border-secondary bg-white btn-md mb-2">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                </div> -->
                            </form>
                        </td>
                        <!-- 商品の削除 -->
                        <td data-th="Delete">
                            <form  method="POST" action="{{ route('carts.update') }}">
                            @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="id" value="{{ $product->rowId }}">
                                <input type="submit" name="action" value="delete" class="btn btn-white border-secondary bg-white btn-md mb-2">
                                <i class="fa fa-trash"></i>
                                
                            </form>
                        </td>
                        <td data-th="Price"class="text-center">{{ $product->price*$product->qty }}円</td>                      
                    </tr>
                    @endforeach 
                    @endif
                </tbody>
            </table>
<hr>
            <div class="float-right text-right">
            @if(!isset($cart[0]))
            <h4>合計金額:</h4>
                <h2>{{$total}}円</h2>
            @else
              <p>( + 送料：330円 )</p>
                <h4>合計金額:</h4>
                <h2>{{$total + 330}}円</h2>
            @endif
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