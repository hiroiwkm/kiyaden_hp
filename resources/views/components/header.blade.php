<header>
    <nav class="navbar navbar-expand-lg bg-primary fixed-top shadow px-0 py-2" id="mainNav" style="height:66px;">
             <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="#navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars fa-lg"></i>
              </button>
              <a class="navbar-brand col-7 col-lg-3 text-center p-0 m-0" href="/"><img class="img-fluid" src="{{ asset('img/footer_logo.png') }}" alt="..." /></a>
             <div class="collapse navbar-collapse navbar-expand-lg bg-primary" id="navbarResponsive">
                <ul class="navbar-nav">
                  <li class="nav-item px-2 h6"><a class="nav-link text-white" href="/#about">木屋傳について</a></li>
                  <li class="nav-item px-2 h6"><a class="nav-link text-white" href="/#news">お知らせ</a></li>
                  <li class="nav-item px-2 h6"><a class="nav-link text-white" href="/products">商品一覧</a></li>
                  <li class="nav-item px-2 h6"><a class="nav-link text-white" href="/#infomation">店舗情報</a></li>
                  <li class="nav-item px-2 h6"><a class="nav-link text-white" href="/#contact">お問い合わせ</a></li>
                </ul>
              </div>
                @if(Auth::check())
                <div class="col-3 col-lg-3 p-0">
                  <div class="row">
                    <a class="text-white  ml-2 d-none d-lg-block float-left mx-4 h6" href="{{ route('mypage') }}">
                      <i class="fa fa-user-circle-o fa-lg"></i>
                      ようこそ、{{ Auth::user()->name }}さん                      
                    </a>
                  </div>
                  <div class="row">
                    <a class="text-white mx-4 d-none d-lg-block" href="{{ route('carts.index') }}"><i class="fa fa-cart-arrow-down fa-lg"></i>カート</a>
                    <a class="text-white ml-2 d-none d-lg-block" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i>ログアウト</a>
                    <form class="form-inline" id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;"></form>
                  </div>
                  <!-- レスポンシブ -->
                  <div class="d-block d-lg-none d-flex justify-content-end">
                      <a class="text-white m-sm-2 m-1" href="{{ route('mypage') }}"><i class="fa fa-user-circle-o fa-lg"></i></a>
                      <a class="text-white m-sm-2 m-1" href="{{ route('carts.index') }}"><i class="fa fa-cart-arrow-down fa-lg"></i></a>
                      <a class="text-white m-sm-2 m-1" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></a>
                      <form class="form-inline" id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;"></form>
                  </div>
                  <!-- /レスポンシブ -->
                </div>
                @else
                <div class="col-3 col-lg-3 p-0">
                  <button type="button" class="btn btn-outline-light ml-2 d-none d-lg-block float-left mr-2"><a class="text-white text-nowrap h6" href="/register"><i class="fa fa-user-plus fa-lg"></i>新規登録</a></button>
                  <button type="button" class="btn btn-outline-light ml-2 pr-2 d-none d-lg-block"><a class="text-white text-nowrap h6" href="/login"><i class="fa fa-sign-in fa-lg"></i>ログイン</a></button>
                  <!-- レスポンシブ -->
                  <div class="d-block d-lg-none text-center">
                    <a class="text-white pr-2" href="/register"><i class="fa fa-user-plus fa-lg"></i></a>
                    <a class="text-white" href="/login"><i class="fa fa-sign-in fa-lg"></i></a>
                  </div>
                   <!-- /レスポンシブ -->
                </div>
                @endif

          </div>
      </nav>    
</header>