@extends('layouts.app')

@section('content')
<main>
    <div id="wrapper">
        <div class="col-md-12 ml-sm-auto col-lg-12 px-4 p-5" style="margin-top:76.22px;">
            <div class="dflex justify-contnt-between flex-wrap flex-md-nowrap align-item-center pt-3 pb-2 mb-3 border-bottom">
                <h2>{{ $news->title }}</h2>
                <p>( {{ $news->date }} )</p>
            </div>
            <div class="dflex justify-contnt-between flex-wrap flex-md-nowrap align-item-center pt-3 pb-2 mb-3">
                <h5>{{ $news->content }}</h5>
            </div>
        </div>    
    </main>

@endsection