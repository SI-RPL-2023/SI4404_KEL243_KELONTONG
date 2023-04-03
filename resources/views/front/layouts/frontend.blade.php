<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Website Kelontong</title>
  </head>
  <body>
    <!-- Navbar -->
    @include('front.includes.navbar')

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
  </body>
</html>