@extends('layouts.app')

@section('content')
<div class="container-fluid">
      <div class="row" style="margin-top:76.22px;">
        <!-- サイドメニュー -->
        <div class="container" style="">
        <div class="col-md-2 d-md-block bg-light border-right shadow p-0 fixed-top" style="top:66px;"> 
         <ul class="list-group  height:100vh-73px;">
              <button type="button" class="btn-block list-group-item list-group-item-action text-muted m-0 h5"><a href="{{ route('products.index', ['category' => null]) }}">すべての商品</a></button>
              @foreach($categories as $category)
              <button type="button" class="btn-block list-group-item list-group-item-action text-muted m-0 h5"><a href="{{ route('products.index', ['category' => $category->id]) }}">{{ $category->name }}</a></button>
              @endforeach
          </ul>
         </div>
        </div>
        <!-- 商品一覧 -->
        <div class="col-md-9 ml-sm-auto col-lg-10">
          <div class="dflex justify-contnt-between flex-wrap flex-md-nowrap align-item-center py-4 border-bottom">
            <h2>
            @if(isset($selected_category->name))
                  {{ $selected_category->name }}
                  @else
                  すべての商品
                  @endif
            </h2>
          </div>
          <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
              @foreach($products as $product)
              <div class="col mb-5">
              <div class="card h-100">
                <!-- Sale badge-->
                  @if($product -> online_order_flg == 1)
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                    お取り寄せ可
                  </div>
                  @endif
                  @if($product -> cold_delivery == 1)
                  <div class="badge badge-info text-white position-absolute" style="top: 2rem; right: 0.5rem">
                    クール便
                  </div>
                  @endif

                  <!-- Product image-->
                  <img class="card-img-top" src="{{ asset($product->img_url) }}" alt="..." />
                  <!-- Product details-->
                  <div class="card-body p-4">
                    <div class="text-center">
                      <!-- Product name-->
                      <a href="products/{{ $product->id }}"><h5 class="fw-bolder">{{ $product->name }}</h5></a>
                      <!-- Product price-->
                      {{ $product -> price }}円(税抜)
                    </div>
                  </div>
                  <!-- Product actions-->
                  @if($product -> online_order_flg == 1)
                  <div class="card-footer pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a class="btn btn-outline-dark" href="products/{{ $product->id }}">購入画面へ</a></div>
                  </div>
                  @endif
              </div>
            </div>
              
               @endforeach
            </div>
          </div>
        </div>    
      </div>
</div>
@endsection