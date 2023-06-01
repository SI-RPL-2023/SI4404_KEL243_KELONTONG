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
            <div class="card-body mx-5">
                <div class="title d-flex flex-row mb-3">
                    <img src="profile.png" alt="Profile" class="rounded-circle mt-3" style="width: 40px;">
                    <h5 class="card-title text-white mt-4 mx-1">
                        Bj. Achmad Dhika Al Faristy
                    </h5>
                </div>
                <div class="text">
                    <p class="card-text ms-5" style="color: #CD8C3F;">
                        Anda Belum Berlangganan
                        <br><br><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="title">
                <p class="fw-semibold mt-5 text-center" 
                   style="font-size: 30px; font-weight: 700; 
                   line-height: 40px">
                     Pembayaran Dapat Diproses Dengan
                </p>
            </div>
            <div class="payment d-inline-flex justify-content-center">
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img src="bca.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">No.Rek: 01231213121312</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img src="bni.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><br><br>No.Rek: 0123432123432</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img src="gopay.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><br><br>No.Rek: 0123432123432</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <img src="dana.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><br><br>No.Rek: 0123432123432</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ! Button -->
            <div class="center-button mt-5">
                <button type="submit" class="btn btn-dark mb-3" style="background-color: #CD8C3F;">Pilih Paket</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>