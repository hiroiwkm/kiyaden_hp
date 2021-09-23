<header>
    <nav class="navbar navbar-expand-lg bg-primary fixed-top shadow px-0 py-2" id="mainNav" style="height:66px;">
             <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="#navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars fa-lg"></i>
              </button>
              <a class="navbar-brand col-6 col-sm-3 text-center p-0 m-0" href="/"><img class="img-fluid" src="{{ asset('img/footer_logo.png') }}" alt="..." /></a>
              <div col- >
                <button class="navbar-toggler text-white p-1" type="button" data-bs-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation" href="/register"><i class="fa fa-user-plus fa-sm-lg"></i></button>
                <button class="navbar-toggler text-white p-1" type="button" data-bs-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation" href="/login"><i class="fa fa-sign-in fa-sm-lg"></i></button>
              </div>
                <!-- 折り畳み -->
             <div class="collapse navbar-collapse navbar-expand-lg bg-primary" id="navbarResponsive">
                <ul class="navbar-nav">
                  <li class="nav-item px-2 h6"><a class="nav-link text-white" href="/#about">木屋傳について</a></li>
                  <li class="nav-item px-2 h6"><a class="nav-link text-white" href="/#news">お知らせ</a></li>
                  <li class="nav-item px-2 h6"><a class="nav-link text-white" href="/products">商品一覧</a></li>
                  <li class="nav-item px-2 h6"><a class="nav-link text-white" href="/#infomation">店舗情報</a></li>
                  <li class="nav-item px-2 h6"><a class="nav-link text-white" href="/#contact">お問い合わせ</a></li>
                </ul>
              </div>

              <div class="collapse navbar-collapse col-sm-3">
                @if(Auth::check())
                <span class="my-navbar-item text-white">ようこそ, {{ Auth::user()->name }}さん</span>
                <a class="nav-link text-white" href="{{ route('mypage') }}">マイページ</a>
                <a class="nav-link text-white" href="{{ route('carts.index') }}"><i class="fa fa-cart-arrow-down fa-lg"></i></a>
                <a class="nav-link text-white" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>ログアウト</a>
                <form class="form-inline" id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;"></form>
                @else
                <button type="button" class="btn btn-outline-light ml-2"><a class="text-white text-nowrap h6" href="/register"><i class="fa fa-user-plus fa-lg"></i>新規登録</a></button>
                <button type="button" class="btn btn-outline-light ml-2 pr-2"><a class="text-white text-nowrap h6" href="/login"><i class="fa fa-sign-in fa-lg"></i>ログイン</a></button>
                @endif
              </div>

          </div>
      </nav>    
</header>