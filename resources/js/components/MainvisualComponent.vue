<template>
  <!--メインビジュアル-->
      <div class="p-0">
        <div class="jumbotron-fluid">
          <!--カルーセル-->
          <div id="carouselControls" class="carousel slide" data-ride="carousel">
            <!--インジケーター-->
            <ol class="carousel-indicators">
              <li data-target="#carouselControls" data-slide-to="0" active></li>
              <li data-target="#carouselControls" data-slide-to="1"></li>
              <li data-target="#carouselControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <!--First slide-->
              <div class="carousel-item active">
                <img class="d-block w-100" alt="First slide" src="\image\IMG_6818.jpg">
              </div>
              <!--Second slide-->
              <div class="carousel-item">
                <img class="d-block w-100" alt="Second slide" src="\image\IMG_6823.jpg">
              </div>
              <!--Third slide-->
              <div class="carousel-item">
                <img class="d-block w-100" alt="Third slide" src="\image\IMG_6831.jpg">
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
      </div>
      <!--/メインビジュアル-->

    </template>
