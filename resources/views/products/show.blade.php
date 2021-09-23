@extends('layouts.app')

@section('content')
        <div class="col-md-12 ml-sm-auto col-lg-12 px-4" style="margin-top:66px;">
            <div class="row py-5">
                <div class="col-md-5">
                    <img class="img-fluid shadow" src="{{ asset($product->img_url) }}" alt="{{ $product->name }}" />
                </div>
                <div class="col-md-7 pt-4">
                    <h3>{{ $product->name }}</h3>
                    <div class="py-3">
                        <h5 class="py-3">{{ $product->detail }}</h5>
                        <h5 class="py-3">{{ $product->price }}円(税抜)</h5>
                        @if($product -> online_order_flg == 1)
                            @if(Auth::check())
                            <div class="bg-transparent">
                                <form method="POST" action="{{ route('carts.store') }}">
                                @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input type="hidden" name="weight" value="1">
                                    <input type="hidden" name="carriage" value=330>
                                    <input class="form-control form-control-lg text-center" style="width:70px;" type="number" id="quantity" name="qty" min="1" value="1">
                                    <input type="hidden" name="options" value="{{ $product->id }}">
                                    <input class="btn btn-outline-dark mt-3"　type="submit" value="カートに追加">
                                </form>   
                            </div> 
                            @else
                            <div class="bg-transparent">
                                <input class="form-control form-control-lg text-center" style="width:70px;" type="number" id="quantity" name="qty" min="1" value="1">
                                <a href="/login"><input class="btn btn-outline-dark mt-3"　type="submit" value="カートに追加"></a>                         
                             </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
@endsection