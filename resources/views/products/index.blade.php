@extends('layouts.app')

@section('content')
    <div id="wrapper">
      <div class="d-flex align-items-center flex-column" style="margin-top:91px;">
        <img style="object-fit:cover; width:100%;" src="img/items_head.png">
      </div>
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar pl-4">
          <div class="sidebar-sticky">  
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <a class="d-flex align-items-center text-muted" href="{{ route('products.index', ['category' => null]) }}"><h5>すべての商品</h5></a>
              </h6>
              @foreach($categories as $category)
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <a class="d-flex align-items-center text-muted" href="{{ route('products.index', ['category' => $category->id]) }}">
                <h5>{{ $category->name }}</h5>
              </a>
              </h6>
              @endforeach
           </div>
        </nav>
        <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
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
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
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