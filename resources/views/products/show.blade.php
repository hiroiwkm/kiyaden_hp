@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div class="col-md-12 ml-sm-auto col-lg-12 px-4 p-5"　style="margin-top:91px;">
            <div class="row">
               <div class="col-md-5">
                    <img class="img-fluid" src="{{ asset($item->img_url) }}" alt="{{ $item->name }}" />
                </div>
                <div class="col-md-7">
                    <h3>{{ $item->name }}</h3>
                    <div class="py-3">
                        <h5 class="py-3">{{ $item->detail }}</h5>
                        <h5 class="py-3">{{ $item->price }}円(税抜)</h5>
                        @if($item -> online_order_flg == 1)
                        <div class="bg-transparent">
                            <form action="/cart" method="post">
                            @csrf
                            <div class="d-flex flex-row">
                                <input type="hidden" name="quantity" value="{{ $item->detail }}">
                                <input type="hidden" name="quantity" value="{{ $item->name }}">

                                <input class="form-control form-control-lg text-center mr-4" style="width:70px;" type="number" value="1" name="quantity">
                                <input class="btn btn-outline-dark mt-auto"　type="submit" value="カートに追加">
                            </div>                       
                            </form>
                        @endif  
                        </div>                     
                    </div>
                </div>
                    

                    <h5>
                </div>
            </div>
        </div>    
@endsection