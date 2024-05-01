<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyShoes - {{ $titlePage }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('img/sneakers.png') }}" type="image/png">

    {{-- Style --}}
    <style>
      .scale-in{
        transform: rotate(20deg);
        transition: transform 0.5s ease;
      }
      .scale-in:hover{
        transform: rotate(20deg);
        transform: scale(1.2);
      }
    </style>
</head>
<body style="font-family: 'Poppins', sans-serif;">
  <a href="#" id="scrollToTopButton" class="position-fixed bottom-0 mb-2 btn btn-outline-dark" style="right: -50px; transform: rotate(90deg); transition: ease 0.5s"><i class="fa-solid fa-caret-up"></i></a>
  <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm position-absolute w-100 z-2">
      <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}"><img src="{{ asset('img/sneakers.png') }}" alt="" width="30px">MyShoes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('category/1') }}">Men</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('category/2') }}">Women</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('category/3') }}">Kids</a>
            </li>
          </ul>
          <div class="d-flex">
            @guest
              <a href="{{ route('login') }}" class="text-black"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>
            @else
              <a href="{{ route('order') }}" class="text-black me-2" title="order"><i class="fa-solid fa-box"></i></a>
              <a href="{{ route('cart') }}" class="text-black me-2" title="cart"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="{{ route('logout') }}" class="text-black" title="logout"><i class="fa-solid fa-arrow-right-from-bracket text-danger"></i></a>
            @endguest
          </div>
        </div>
      </div>
  </nav>

@yield('content')

{{-- Footer start --}}
<footer class="bg-black text-center">
  <svg class="p-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,288L48,266.7C96,245,192,203,288,192C384,181,480,203,576,224C672,245,768,267,864,277.3C960,288,1056,288,1152,261.3C1248,235,1344,181,1392,154.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  <a class="text-white me-2 fs-3" target="_blank" href="https://www.instagram.com/angga_saputra547"><i class="fa-brands fa-instagram"></i></a>
  <a class="text-white fs-3" target="_blank" href="https://github.com/anggasaputra25"><i class="fa-brands fa-github"></i></a>
  <p class="m-0 pb-3" style="color:#ffffff70;">© 2024 MyShoes</p>
</footer>
{{-- Footer end --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{ asset('js/buttonScroll.js') }}"></script>
</body>
</html>