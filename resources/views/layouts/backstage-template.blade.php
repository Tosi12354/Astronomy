<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Bootstrap Core CSS CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <!-- aos Core CSS CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- aos Core CSS CDN -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- 自己寫的CSS -->
  <link rel="stylesheet" href="{{asset('css/index-layout.css')}}">
  @yield('css')
</head>

<body>

  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark ">
        <div class="container">
          <a class="navbar-brand" href="/">
            <h3 class="logo"><img src="{{asset('img/logo.png')}}" alt="" width="50px"> <span>一起看星星</span></h3>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
              <li class="nav-item ">
                <a class="nav-link" href="/blog">最新消息</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">關於我們</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">觀星地點</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">天文情報</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">天文盤資訊</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">贊助我們<i class="far fa-star"></i></a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
  </header>

  <main>
    <!-- 最新消息 -->

    @yield('main')

  </main>
  <footer>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{asset('img/logo.png')}}" width="50px" height="50px" alt="">
        </a>
        <div class=" navbar-collapse ">
          <ul class="navbar-nav ml-auto my-2 navbar-nav-scroll">
            <li class="nav-item">
              <a class="nav-link" href="#">聯絡我們</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Donate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">地址</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="bg-secondary">
      <div class="container d-flex justify-content-between">
        <div class="copyright">
          © 2022 Tailblocks — @Hazelnut
        </div>
        <div class="community">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
    </div>
  </footer>

  <!-- jquery Core JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <!-- popper Core JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <!-- bootstrap Core JS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
    integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
    crossorigin="anonymous"></script>

  <!-- aos Core CSS CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <!-- aos Core JS CDN -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>


  <!-- 自己寫的JS -->
  <script src="app1.js"></script>
  @yield('js')

</body>

</html>
