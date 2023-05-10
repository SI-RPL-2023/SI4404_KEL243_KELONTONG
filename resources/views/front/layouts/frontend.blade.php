

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kelontong</title>

    <!-- Bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
          crossorigin="anonymous">

    <!-- Link to CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">

    <!-- Poppins Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet"> 

  </head>
  
  <body>
    <!-- Navbar -->
    @include('front.includes.navbar')

    <!-- Home -->
    <div class="home mb-5">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('frontend/home/home.png') }}" class="d-block w-100" alt="...">
            <form method="GET" action="{{route('register')}}">
            <div class="carousel-caption d-none d-md-block mb-5">
              <button class="btn btn-light fw-semibold" type="submit">Register</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  
    

    <!-- Carousel -->
    @include('front.includes.carousel')

    <!-- Content -->
    <div class="container">
      <!-- About Us & Card -->
      @yield('content')
    </div>

    <!-- Footer -->
    @include('front.includes.footer')

    <!-- Js $ Bootstrap -->
    @include('front.includes.js')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  
</html>