@extends('layouts.app')

@section('content')

      <!--メインビジュアル-->
        <div class="jumbotron-fluid pb-5" style="margin-top:91px;">
          <!--カルーセル-->
          <div id="carouselControls" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <!--インジケーター-->
            <ol class="carousel-indicators">
              <li data-target="#carouselControls" data-slide-to="0" active></li>
              <li data-target="#carouselControls" data-slide-to="1"></li>
              <li data-target="#carouselControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <!--First slide-->
              <div class="carousel-item active">
                <img class="d-block w-100" alt="First slide" src="img/headerimg_omaki.png">
              </div>
              <!--Second slide-->
              <div class="carousel-item">
                <img class="d-block w-100" alt="Second slide" src="img/headerimg_kuzu.png">
              </div>
              <!--Third slide-->
              <div class="carousel-item">
                <img class="d-block w-100" alt="Third slide" src="img/IMG_6831.jpg">
              </div>
            </div>
            <!--コントローラ-->
            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">前に戻る</span>
            </a>
            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">次に送る</span>
            </a>
          </div>
          <!--/カルーセル-->
        </div>
      <!--/メインビジュアル-->


      <!--Recomend section-->
      <section class="page-section recomend py-5" id="recomend">
            <!-- Recomend Section Heading-->
            <div class="text-center">
            <a href="/products?category=1"><img class="img-fluid" src="img\title_recomend.png" alt="..." /></a>
            </div>
            <div class="row justify-content-around pt-5 px-5"> 
              <!-- Recomend Item 1-->
              <div class="" style="max-width:25rem">
              <a href="/products?category=1"><img src="img\recomend1.png"  alt="..."></a>
                  <h4 class="card-title text-center">季節限定</h4>
              </div>
              <!-- Recomend Item 1-->
              <div class="" style="max-width:25rem">
                      <a href="/products?category=2"><img class="img-fluid" src="img\recomend2.png" alt="..." /></a>
                  <h4 class="card-title text-center">人気商品</h4>
              </div>
              <!-- Recomend Item 1-->
              <div class="" style="max-width:25rem">
              <a href="/products?category=3"><img class="img-fluid" src="img\recomend3.png" alt="..." /></a>
                  <h4 class="card-title text-center">ロールケーキ</h4>
              </div>
              <!-- Recomend Item 1-->
              <div class="" style="max-width:25rem">
              <a href="/products?category=4"><img class="img-fluid" src="img\recomend4.png" alt="..." /></a>
                  <h4 class="card-title text-center">焼き菓子</h4>
              </div>
              <!-- Recomend Item 1-->
              <div class="" style="max-width:25rem">
              <a href="/products?category=5"><img class="img-fluid" src="img\recomend5.png" alt="..." /></a>
                  <h4 class="card-title text-center">慶弔菓子</h4>
              </div>
        </div>

            <!-- Recomend Items-->
            <div class="row justify-content">
                <div class="col-12 text-center py-5"><a class="btn btn-custom shadow btn-lg bg-warning text-white" href="/products">すべての商品をみる→</a></div>
            </div>
    </section>


    <!-- News Section-->
    <section class="page-section bg-secondary py-5" id="news">
      <div class="text-center">
        <img class="page-section-heading py-5" src="img\title_news.png"> 
      </div>    
   <!-- ajax -->
    <!-- <div id="news2"> -->
      <!-- <news-component></news-component>  -->
    <!-- </div> -->
    <!-- -->
       
    <div class="container">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
            @foreach($news as $new)
            <!-- Divider-->
            <hr class="my-3" />
            <!-- Post preview-->
             <div class="post-preview">
              <a href="/news/{{ $new->id }}">
                <p class="lead post-title">{{ $new->title }}</p>
                <p class="post-subtitle">( {{ $new->updated_at }} )</p>
              </a>
             </div>
            @endforeach
              <!-- Divider-->
              <hr class="my-3" />

                <!-- Pager-->
                <div class="d-flex justify-content-center mb-4">
                  {{ $news->links() }}
                </div>
              </div>
        </div>
    </div>
    </section>
    
    <!-- About Section-->
    <section class="page-section text-dark py-5" id="about">
      <div class="container pb-5">
            <!-- About Section Heading-->
            <div class="text-center">
                <img class="page-section-heading py-5" src="img\title_about.png"> 
            </div>           
          
          <!-- About Section Content-->
          <div class="row justify-content-center">
            <img class="col-lg-5 img-fluid w-25" src="img\shop.jpg">
            <div class="col-lg-4 me-auto p-5">
              <p class="lead">テキストテキストテキストテキスト</p>
              <p class="">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>             
            </div>
          </div>
          <div class="row py-3 justify-content-center">
            <div class="col-lg-6 me-auto py-5 px-3">
              <p class="lead">テキストテキストテキストテキスト</p>
              <p class="">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>             
            </div>
              <img class="col-lg-3" src="img\chef.jpg">
          </div>
      </div>
    <!-- Infomation Section-->
    <section class="page-section bg-secondary text-dark py-5" id="infomation">
        <div class="container">
            <!-- Infomation Section Heading-->
            <div class="text-center">
                <img class="page-section-heading py-5" src="img\title_info.png"> 
            </div>           
            <div class="row justify-content-center">
            <!-- Google Map -->
            <div class="col-md-5">
              <section id="access">
                <div class="embed-responsive embed-responsive-4by3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248.331139532009!2d135.73907831542905!3d35.496089347710516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001d0656bc4aecf%3A0xe214cfd42821c973!2z6I-T5a2Q5Y-4IOacqOWxi-WCsw!5e0!3m2!1sja!2sus!4v1629345787905!5m2!1sja!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </section>
            </div>
            <!-- Infomation Tble-->
            <div class="col-md-5 pl-5">
              <section id="shop">
                <h4 class="mb-3">木屋傳(きやでん)</h4>
                <table class="table">
                  <tbody>
                  <tr class="text-dark">
                    <td>住所</td>
                    <td>福井県小浜市小浜白鬚42</td>
                  </tr>
                  <tr class="text-dark">
                   <td>営業時間</td>
                   <td>9:00～19:00</td>
                 </tr>
                 <tr class="text-dark">
                   <td>定休日</td>
                   <td>不定休</td>
                 </tr>
                 <tr class="text-dark">
                   <td>電話番号</td>
                   <td>0770-52-0565</td>
                 </tr>
                 <tr class="text-dark">
                   <td>駐車場</td>
                   <td>あり</td>
                 </tr>
                 </tbody>
                </table> 
              </section>
            </div>
          </div>
      </div>
    </section>
    <!-- Contact-->
    <section class="page-secondary py-5" id="contact">
      <div class="container px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
              <div class="col-lg-8 col-xl-6 text-center">
                <div class="text-center">
                    <img class="page-section-heading py-5" src="img\title_contact.png"> 
                </div>           
              </div>
          </div>
          <div class="row gx-4 gx-lg-5 justify-content-center">
              <div class="col-lg-6">
                  <form id="contactForm" action="{{ route('contact.confirm') }}" method="POST">
                    @csrf
                      <!-- Name input-->
                      <div class="form-floating mb-3">
                        <label for="name">お名前</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name..." data-sb-validations="required" />
                          <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                      </div>
                      <!-- Email address input-->
                      <div class="form-floating mb-3">
                        <label for="email">メール</label>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" data-sb-validations="required,email" value="{{ old('name') }}" />
                          <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                          <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                      </div>
                     <!-- Message input-->
                      <div class="form-floating mb-3">
                        <label for="message">お問い合わせ内容</label>
                        <textarea class="form-control" type="text" name="message" value="{{ old('message') }}" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                          <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                      </div>
                      <!-- Submit success message-->
                      <!---->
                      <!-- This is what your users will see when the form-->
                      <!-- has successfully submitted-->
                      <div class="d-none" id="submitSuccessMessage">
                          <div class="text-center mb-3">
                              <div class="fw-bolder">Form submission successful!</div>
                              To activate this form, sign up at
                              <br />
                              <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                          </div>
                      </div>
                      <!-- Submit error message-->
                      <!---->
                      <!-- This is what your users will see when there is-->
                      <!-- an error submitting the form-->
                      <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                      <!-- Submit Button-->
                      <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">確認画面へ</button></div>
                  </form>
              </div>
          </div>
      </div>
  </section>
                                
    <!--/メイン-->

@endsection

@section('news')
 