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
    <!-- <link rel="stylesheet" href="{{ asset('frontend/style.css') }}"> -->
    <link rel="stylesheet" href="style.css">

    <!-- Poppins Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet"> 

  </head>
  
  <body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg" style="background-color: #CD8C3F">
      <div class="container py-2 fw-semibold">
        
        <a class="navbar-brand" href="#">
            <img src="frontend/logo/kelontong.png" 
                width="147" height="51" alt="" loading="lazy"
            >
        </a>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-1">
            <li class="nav-item ms-4">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item ms-4">
              <a class="nav-link active" aria-current="page" href="#">About Us</a>
            </li>
            <li class="nav-item ms-4">
              <a class="nav-link active" aria-current="page" href="#">List Kelontong</a>
            </li>
            <li class="nav-item ms-4">
              <a class="nav-link active" aria-current="page" href="#">Update to Seekers</a>
            </li>
            <li class="nav-item ms-4">
              <a class="nav-link active" aria-current="page" href="#">Langganan</a>
            </li>
          </ul>
          <form action={{route('login')}} method="GET" class="d-flex">
          @csrf
          <!-- <button class="btn btn-light fw-semibold" type="submit">Login</button> -->
          <img src="frontend/profile/example.png" alt="Profile" class="rounded-circle" style="width: 40px;">
          </form>
        </div>
      </div>
    </nav>

    <!-- Filter -->
    <p class="h1 fw-semibold text-center mt-5">List Kelontong</p>
    <div class="container mt-4">
      <!-- Example split danger button -->
      <!-- Example single danger button -->
      <nav class="navbar navbar-expand-lg" style="background-color: #F9E4CC">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <select id="select1" class="form-select">
                  <option value="disabled">Kategori Kelontong</option>
                  <option value="">Sembako</option>
                  <option value="">Grosir</option>
                </select>
              </li>
              <li class="nav-item">
                <select id="select1" class="form-select mx-2">
                  <option value="disabled">Jam Buka</option>
                  <option value="">Sembako</option>
                  <option value="">Grosir</option>
                </select>
              </li>
              <li class="nav-item">
                <select id="select1" class="form-select mx-3">
                    <option value="disabled">Pilih Lokasi</option>
                    <option value="">Sembako</option>
                    <option value="">Grosir</option>
                </select>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-dark" type="submit">Filter</button>
              <!-- <button type="submit" class="btn btn-dark px-4 mt-2" style="background-color: #CD8C3F;">Login</button> -->
            </form>
          </div>
        </div>
      </nav>

      <!-- Card -->
      <div class="row">
          @foreach ($warungs as $warung)
          <div class="col-md-4 mt-5 mb-5">
              <div class="card">
                  <img src="{{$warung['foto']}}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">{{$warung['nama_wrg']}}</h5>
                      <p class="card-text">{{$warung['pemilik']}}</p>
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
                      <button class="btn btn-dark">Detail Toko</button>
                  </div>
              </form>
              </div>
          </div>
          @endforeach
      </div>
    

    <!-- Footer -->
    @include('frontHome.includes.footer')

    <!-- Js $ Bootstrap -->

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
      crossorigin="anonymous">
    </script>

  </body>
  
</html>