@extends('layouts.app')

@section('content')
<div class="container-fluid" style="padding-top:66px;">
        <!-- 商品一覧 -->
          <div class="container px-lg-5 mt-5">
            <div class="row border-bottom">
              <h2>商品一覧</h2>
            </div>
             <div class="row py-4 gx-4 gx-lg-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
              @foreach($products as $product)
              <div class="col mb-5">
              <div class="card h-100">
                  <!-- Product image-->
                  <img class="card-img-top" src="{{ asset($product->img_url) }}" alt="..." />
                  <!-- Product details-->
                  <div class="card-body p-4">
                    <div class="text-center">
                      <!-- Product name-->
                      <a href="{{route('products.show', $product)}}"><h5 class="fw-bolder">{{ $product->name }}</h5></a>
                      <!-- Product price-->
                      {{ $product -> price }}円(税抜)
                    </div>
                  </div>
              </div>
            </div>
               @endforeach
            </div>
          </div>
</div>
@endsection

