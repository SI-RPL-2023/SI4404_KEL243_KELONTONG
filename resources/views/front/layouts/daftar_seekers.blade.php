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
    
    <style>
      .center-button {
        display: flex;
        justify-content: center;
        margin-top: 1rem;
      }

      .center-button button {
        width: 100px; /* Adjust the width as needed */
      }
    </style>

  </head>
  
  <body>
    <!-- Navbar -->
    @include('front.includes.navbar')

    <!-- Form Input -->
    <div class="container">
      <div class="content mt-5 mx-5">
        <h1><b>Daftar Seekers</b></h1>
        <p style="color: #757575">Masukkan data di bawah ini untuk menjadi seekers</p>
        <!-- ! Form -->
        <div class="col-15 mt-5">
          <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <!-- ! Nama Lengkap -->
            <div class="mb-3">
                <label for="nNamaLengkap" class="form-label"><b>Nama Lengkap</b></label>
                <input type="text" class="form-control" id="NamaLengkap" name="NamaLengkap" value="{{$user['name']}}" placeholder="Asep Nueta"/>
            </div>
            <!-- ! NIK -->
            <div class="mb-3">
                <label for="nik" class="form-label"><b>NIK</b></label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="1200032431"/>
            </div>                        
            <!-- ! Alamat Lengkap -->
            <div class="mb-3">
                <label for="alamat" class="form-label"><b>Alamat Lengkap</b></label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Jl. Suka Birus A, Blok C, Bandung, Jawa Barat."/>
            </div>
            <!-- ! Alasan -->
            <div class="mb-3">
                <label for="Alasan" class="form-label"><b>Alasan</b></label>
                <input type="text" style="height: 90px; text-align: justify; padding-bottom: 60px" class="form-control" id="Alasan" name="Alasan" placeholder="Alasan saya ingin menjadi seekers karena...."/>
            </div>
            <!-- ! Foto Wajah -->
            <div class="mb-3 ">
                <label for="Foto" class="form-label"><b>Foto Wajah</b></label>
                <input type="file" class="form-control" id="Foto" name="Foto"/>
            </div>
            
            <!-- ! Button -->
            <div class="center-button">
              <button type="submit" class="btn btn-dark mb-3" style="background-color: #CD8C3F;">Daftar</button>
            </div>
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