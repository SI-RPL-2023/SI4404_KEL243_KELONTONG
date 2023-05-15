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

    <!-- Form Input -->
    <div class="container">
      <div class="content mt-5 mx-5">
        <h1>Input Data Kelontong</h1>
        <p style="color: #757575">Tambahkan Data Kelontong Yang <br/>Anda Inginkan</p>
        <!-- ! Form -->
        <div class="col-15 mt-5">
          <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- ! Nama Mobil -->
            <div class="mb-3">
                <label for="NamaKelontong" class="form-label"><b>Nama Kelontong</b></label>
                <input type="text" class="form-control" id="NamaKelontong" name="NamaKelontong" placeholder=""/>
            </div>
            <!-- ! Nama Pemilik -->
            <div class="mb-3">
                <label for="Pemilik" class="form-label"><b>Nama Pemilik</b></label>
                <input type="text" class="form-control" id="Pemilik" name="Pemilik" placeholder=""/>
            </div>
            <!-- ! No HP Pemilik -->
            <div class="mb-3">
              <label for="NoHp" class="form-label"><b>Nomor HP Pemilik</b></label>
              <input type="number" class="form-control" id="NoHp" name="NoHp" placeholder=""/>
            </div>
            <!-- ! Jam Buka -->
            <div class="mb-3">
              <label for="jam_buka" class="form-label">Jam Buka</label>
              <input type="time" name="JamBuka" id="jam_buka" class="form-control">
            </div>
            <!-- ! Jam Tutup -->
            <div class="mb-3">
              <label for="jam_tutup" class="form-label">Jam Tutup</label>
              <input type="time" name="JamTutup" id="jam_tutup" class="form-control">
            </div>
            <!-- ! Kategori -->
            <div class="mb-3">
              <label for="Kategori" class="form-label"><b>Kategori</b></label>
              <select id="Kategori" name="Kategori" class="form-select">
                <option value="nasi">Nasi</option>
                <option value="sembako">Sembako</option>
                <option value="kopi">Kopi</option>
                <option value="jamu">Jamu</option>
                <option value="internet">Internet</option>
              </select>
            </div>
            <!-- ! Deskripsi -->
            <div class="mb-3">
                <label for="Description" class="form-label"><b>Deskripsi</b></label>
                <input type="text" style="height: 90px; text-align: justify; padding-bottom: 60px" class="form-control" id="Description" name="Description" placeholder=""/>
            </div>
            <!-- ! Foto -->
            <div class="mb-3">
                <label for="Foto" class="form-label"><b>Foto</b></label>
                <input type="file" class="form-control" id="Foto" name="Foto"/>
            </div>
            
            <!-- ! Button -->
            <button 
              type="submit" 
              class="btn btn-dark px-4 mt-2" 
              style="background-color: #CD8C3F;"
            >
              Input Data
            </button>
          </form>
        </div>
      </div>
    </div>
    

    <!-- Footer -->
    <!-- @include('front.includes.footer') -->

    <!-- Js $ Bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" 
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" 
            crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  
</html>