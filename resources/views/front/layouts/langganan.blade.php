<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kelontong</title>

    <!-- Bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Link to CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/style.css') }}"> -->
    <link rel="stylesheet" href="style.css">

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
            width: 400px;
            height: 60px;
            /* Adjust the width as needed */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg" style="background-color: #CD8C3F">
        <div class="container py-2 fw-semibold">

            <a class="navbar-brand" href="#">
                <img src="frontend/logo/kelontong.png" width="147" height="51" alt="" loading="lazy">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

    <!-- Langganan -->
    <div class="header" style="background-color: #442100;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col">
                    <h1 class="heading text-white my-5 text-center" 
                        style="font-size: 45px; 
                        font-weight: 600; 
                        line-height: 50px">
                        <br>
                        Yuk Berlangganan !!
                        <br><br>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-ce">
            <div class="title">
                <p class="fw-semibold mt-5" 
                   style="font-size: 30px; font-weight: 700; 
                   line-height: 40px">
                     Keuntungan Sebagai User Berlangganan
                </p>
            </div>
            <div class="list">
                <ol class="keuntungan">
                    <li class="1 mt-4">Dapat Menginputkan Data Kelontong Dengan Kondisi Tidak Ada Batas Inputan.</li>
                    <li class="2 mt-3">Dapat Menghasilkan Uang Dari Menginputkan Data Kelontong</li>
                    <li class="3 mt-3">Dapat Melihat Data Kelontong Yang Telah Disediakan Tanpa Ada Batasan Untuk Melihat Data Yang Lain.</li>
                    <li class="4 mt-3 mb-5">Dapat Melakukan Komen Pada Detail Kelontong.</li>
                </ol>
            </div>
            <!-- ! Button -->
            <div class="center-button">
                <button type="submit" class="btn btn-dark mb-3" style="background-color: #CD8C3F;">Pilih Paket</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>