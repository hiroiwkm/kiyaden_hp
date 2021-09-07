<header>
    <nav class="navbar navbar-expand-lg bg-primary fixed-top" id="mainNav">
          <div class="container-fluid">
              <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="..." /></a>
              <button class="navbar-toggler font-weight-bold text-white border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars fa-2x"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                      <li class="nav-item"><a class="nav-link text-white" href="#about">木屋傳について</a></li>
                      <li class="nav-item"><a class="nav-link text-white" href="#news">お知らせ</a></li>
                      <li class="nav-item"><a class="nav-link text-white" href="/products">商品一覧</a></li>
                      <li class="nav-item"><a class="nav-link text-white" href="#infomation">店舗情報</a></li>
                      <li class="nav-item"><a class="nav-link text-white" href="#contact">お問い合わせ</a></li>
                    </ul>
                        @if(Auth::check())
                        <span class="my-navbar-item text-white">ようこそ, {{ Auth::user()->name }}さん</span>
                        <a class="nav-link text-white" href="{{ route('mypage') }}">マイページ</a>
                        <a class="nav-link text-white" href="/cart"><i class="fa fa-cart-arrow-down fa-lg"></i></a>
                        <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                        ログアウト
                        </a>
                        <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;"></form>
                        @csrf
                        @else
                        <button type="button" class="btn btn-outline-light ml-5"><a class="text-white" href="/register"><i class="fa fa-user-plus fa-lg"></i>新規登録</a></button>
                        <button type="button" class="btn btn-outline-light ml-2"><a class="text-white" href="/login"><i class="fa fa-sign-in fa-lg"></i>ログイン</a></button>
                        <a class="nav-link text-white" href="#"><i class="fa fa-cart-arrow-down fa-lg"></i>カート</a>
                        @endif
              </div>
          </div>
      </nav>    
</header>