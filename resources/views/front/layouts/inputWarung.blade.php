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
        <h1><b>Data Kelontong</b></h1>
        <p style="color: #757575">Tambahkan Data Kelontong Yang <br/>Anda Inginkan</p>
        <!-- ! Form -->
        <div class="col-15 mt-5">
          <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- ! Nama Mobil -->
            <div class="mb-3">
                <label for="NamaKelontong" class="form-label"><b>Nama Kelontong</b></label>
                <input type="text" class="form-control" id="NamaKelontong" name="NamaKelontong" placeholder="JAPRA"/>
            </div>
            <!-- ! Nama Pemilik -->
            <div class="mb-3">
                <label for="Pemilik" class="form-label"><b>Nama Pemilik</b></label>
                <input type="text" class="form-control" id="Pemilik" name="Pemilik" placeholder="Bang Kamil"/>
            </div>
            <!-- ! No HP Pemilik -->
            <div class="mb-3">
              <label for="NoHp" class="form-label"><b>Nomor HP Pemilik</b></label>
              <input type="number" class="form-control" id="NoHp" name="NoHp" placeholder="081233283"/>
            </div>

            <div class="mb-3">
              <label for="KotaLokasi" class="form-label"><b>Kota Lokasi</b></label>
              <select id="KotaLokasi" name="KotaLokasi" class="form-select">
                <option value="Kota Bandung">Kota Bandung</option>
                <option value="Kota Cimahi">Kota Cimahi</option>
                <option value="Kabupaten Bandung">Kab. Bandung</option>
                <option value="Kabupaten Bandung Barat">Kab. Bandung Barat</option>
                <option value="Kabupaten Sumedang">Kab. Sumedang</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="Alamat" class="form-label"><b>Alamat Lengkap</b></label>
              <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Jl. Suka Birus A, Blok C, Bandung, Jawa Barat."/>
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
                <input type="text" style="height: 90px; text-align: justify; padding-bottom: 60px" class="form-control" id="Description" name="Description" placeholder="JAPRA adalah Kelontong yang menjualkan berbagai menu mie dan bakso..."/>
            </div>
            <!-- ! Foto -->
            <div class="mb-3">
                <label for="Foto" class="form-label"><b>Foto</b></label>
                <input type="file" class="form-control" id="Foto" name="Foto"/>
            </div>
            
            <!-- ! Button -->
            <div class="center-button">
              <button type="submit" class="btn btn-dark mb-3" style="background-color: #CD8C3F;">Input Data</button>
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