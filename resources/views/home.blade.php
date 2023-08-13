<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>rifkistore</title>

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
      <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container flex justify-content-between">
          <a class="navbar-link" href=""{{ route('home')}}>
            <img class="h-14px" src="{{ url('assets/images/logo1.png')}}" alt="mobile legends" width="80">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-0 mx-lg-3">
              <li class="nav-item d-block d-lg-none d-xl-block">
                <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
              </li>
                <li class="nav-item">
                <a class="nav-link text-nowrap" aria-current="page" href="#">JOKI ML</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-nowrap" aria-current="page" href="#">TOP UP</a>
                </li>
              </ul>
            <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="#" method="GET">
              <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><img src="{{ url('assets/images/logo.png')}}" alt="search"></span>
              <input class="form-control border-star-0 ps-1" type="search" placeholder="Search" aria-label="Search" name="" value="">
              </div>
            </form>
            <ul class="navbar-nav ms-auto my-2 my-lg-0" >
                <li class="nav-item my-auto">
                <a class="nav-link text-nowrap" href="#">log in</a>
              </li>
              <li class="nav-item ps-0 pe-0">
              <a class="btn btn-primary-white" href="#">sign up</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
      <section class="container hero">
        <div class="row align-item-center h-100">
          <div class="col-12 col-lg-6">
            <h1>MOBILE LEGENDS <br/>BANG BANG</h1>
            <p class="mb-4">TOP UP DAN JOKI</p>
          </div>
          <div class="col-4 col-4 h-315px order-first order-lg-last mb-3 mb-lg-0">
            <img class="hero-image float-lg-end" src="{{ url('assets/images/rank.png')}}" alt="mawi" >
          </div>

        </div>
      </section>
      <section class="container min-h-372px">
        <div class="row">
          <div class="col-10 col-lg-4 text-center">
            <img class="promote-icon mb-6" src="{{ url('assets/images/ling.png')}}" alt="ling" width="100%">
            <h2>ling</h2>
            <p class="fs-3">Assassin</p>
          </div>
          <div class="col-10 col-lg-4 text-center">
            <img class="promote-icon mb-6" src="{{ url('assets/images/martis.png')}}" alt="martis" width="129%" >
            <h2>Martis</h2>
            <p class="fs-3">Fighter</p>
          </div>
          <div class="col-10 col-lg-4 text-center">
            <img class="promote-icon mb-6" src="{{ url('assets/images/claude.png')}}" alt="claude" width="116%">
            <h2>claude</h2>
            <p class="fs-3">Marksman</p>
          </div>
        </div>
      </section>
      <section class="bg-gray">
        <div class="container py-80px" >
          <h2  class="text-center mb-5">ADMIN</h2>
                  <div class="row">
                    <div class="col-12 col-lg-4 mb3">
                      <div class="card">
                        <a href="https://www.instagram.com/_iikiiwww/?hl=en" target="_blank"> 
                          <img src="{{ url('assets/images/ig.png')}}" alt=""  width="100px" height="100px" >
                        </a>
                        <div>
                  <p class="mb-5">
                    klik saja logo instagram ini , untuk menghubungi admin lebih lanjut sekian terimakasih.
                  </p>
                  <div class="row">
                    <div class="col me-1 me-lg-2">
                      <a href="https://maps.app.goo.gl/P6mwxtvNgrbWG6PYA?g_st=ic" target="_blank"><span class="badge rounded-pill text-bg-light">
                        ALAMAT STORE
                      </span>
                      </a>
                    </div>
                    <div class="col-5 col-lg-7">
                      <div class="avatar-sm-wrapper d-inline-block">
                        <a href="#" class="me-1">
                          <img src="{{ url('assets/images/bulet.png')}}" class="avatar rounded-circle" alt="">
                        </a>
                      </div>
                      <span class="fs-12">
                        <a class="me-1 fw-bold">Rifki</a>
                        <span class="color-gray">1 hours ago</span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="container min-h-372px d-flex flex-column align-items-center justify-conten-center">
        <h2>Bagaimana dengan Pelayanan Kami?</h2>
        <p class="mb-4">silahkan pilih di bawah ini</p>
        <div class="text-center">
          <a href="#" class="btn btn-secondary mb-1 mb-lg-0" style="font-size: 50pt">🤩</a>
          <a href="#" class="btn btn-secondary mb-1 mb-lg-0" style="font-size: 50pt">😡</a>
        </div>
      </section>
      <footer class="py-80px">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6 mb-5 mb-lg-0">
              <img src="{{ url('assets/images/RifkiStore.png')}}" alt="rifkistore" class="h-32px mb-4">
              <p class="text-white">Senang melayani anda <br/>anda senang kami ikut senang</p>
            </div>
            <div class="col-12 col-lg-6 mb-5 me-auto">
              <div class="d-flex flex-column flex-lg-row justify-content-end">
                <div class="d-flex flex-column me-140px mb-3 mb-lg-0">
                <p class="fw-bold fs-5 text-white text-nowrap">
                  Email
                </p>
                <ul class="list-unstyled">
                  <li class="text-white">
                    <a href="mailto:kenthod74@gmail.com" target="_blank">kenthod74@gmail.com</a></li>
                </ul>                  
                </div>
                <div class="d-flex flex-column">
                  <p class="fw-bold fs-5 text-white">Links</p>
                  <ul class="list-unstyled">
                    <li class="text-white mb-2"><a href="#">Home</a></li>
                    <li class="text-white mb-2"><a href="#">Discusiion</a></li>
                    <li class="text-white mb-2"><a href="#">About us</a></li>
                  </ul>                  
                </div>

              </div>
            </div>

          </div>
        </div>
      </footer>
     
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </body>
</html>
