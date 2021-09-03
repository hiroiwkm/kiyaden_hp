@section('news')

<h1>news</h1>
@foreach($news as $new)
    <!-- Post preview-->
    <div class="post-preview">
        <a href="/news/{{ $new->id }}">
            <p class="lead post-title">{{ $new->title }}</p>
            <p class="post-subtitle">( {{ $new->date }} )</p>
        </a>
    </div>
 @endforeach

 @endsection
