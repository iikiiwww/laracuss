<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Masjid nurul iman</title>

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
      <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container flex justify-content-between">
          <a class="navbar-link" href=""{{ route('home')}}">
            <img class="h-20 px" src="{{ url('assets/images/masjid.png')}}" alt="mobile legends" width="80">
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
                <a class="nav-link" aria-current="page" href="#">DKM</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-nowrap" aria-current="page" href="#">TAKMIR</a>
                </li>
              </ul>
            <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="#" method="GET">
              <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><img src="{{ url('assets/images/logo.png')}}" alt="search"></span>
              <input class="form-control border-star-0 ps-20" type="search" placeholder="Search" aria-label="Search" name="" value="">
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
            <h1>MASJID <br/>NURUL IMAN</h1>
            <p class="mb-4">DUSUN CIKALING 2</p>
            <a href="#" class="btn btn-primary me-2 mb-2 mb-lg-0">sign up</a>
            <a href="#" class="btn btn-secondary mb-2 mb-lg-0">history</a>
          </div>
          <div class="col-12 col-6 h-315px order-first order-lg-last mb-3 mb-lg-0">
            <img class="hero-image float-lg-end" src="{{ url('assets/images/masjid1.png')}}" alt="" >
          </div>

        </div>
      </section>
      <section class="container min-h-372px">
        <div class="row">
          <div class="col-12 col-lg-4 text-center">
            <img class="promote-icon mb-2" src="{{ url('assets/images/hahay.png')}}" alt="komentar">
            <h2>komentar</h2>
            <p class="fs-3">23232</p>
          </div>
          <div class="col-12 col-lg-4 text-center">
            <img class="promote-icon mb-2" src="{{ url('assets/images/awok.png')}}" alt="user">
            <h2>user</h2>
            <p class="fs-3">34762</p>
          </div>
          <div class="col-12 col-lg-4 text-center">
            <img class="promote-icon mb-2" src="{{ url('assets/images/yaya.png')}}" alt="share">
            <h2>share</h2>
            <p class="fs-3">24382</p>
          </div>
        </div>

      </section>

      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </body>
</html>
