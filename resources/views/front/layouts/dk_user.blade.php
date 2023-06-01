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

    <!-- Detail Kelontong -->

    <div class="container mt-4">
        <div class="heading">
            <p class="h1 fw-semibold text-start mt-5" style="font-size: 45px; font-weight: 700; line-height: 50px">
                Detail Kelontong
            </p>
        </div>
        <div class="content mt-5">
            <div class="row mb-5">
                <div class="col-5">
                    <div>
                        <img src="detail.png" class="card-img mx-auto rounded" alt="BMW-840i" />
                    </div>
                </div>
                <!-- Form -->
                <div class="col-7 px-5">
                    <p style="font-size: 39px; font-weight: 600; line-height: 55px">
                        Warkop Pandhita
                    </p>
                    <p style="color: #CD8C3F">
                        Ibu Yanti
                    </p>
                    <form action="#" method="POST" autocomplete='off' enctype="multipart/form-data">
                        <!-- ! Lokasi -->
                        <div class="mb-3">
                            <label for="lokasi" class="form-label"><b>Lokasi</b></label>
                            <div class="card" style="max-width: 600px;">
                                <div class="card-body">
                                    <p class="card-text">
                                        Jl. Sukabirus No.C46, Citeureup, Kec. Dayeuhkolot,
                                        Kabupaten Bandung, Jawa Barat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- No HP -->
                        <div class="mb-3">
                            <label for="noHp" class="form-label"><b>No.Hp</b></label>
                            <div class="card" style="max-width: 600px;">
                                <div class="card-body">
                                    <p class="card-text">
                                        +62 81234567890
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Jam Buka -->
                        <div class="mb-3">
                            <label for="jamBuka" class="form-label"><b>Jam Buka</b></label>
                            <div class="card" style="max-width: 600px;">
                                <div class="card-body">
                                    <p class="card-text">
                                        8.00 - 00.00 WIB
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Detail -->
                        <div class="mb-4">
                            <label for="detail" class="form-label"><b>Detail</b></label>
                            <div class="card" style="max-width: 600px;">
                                <div class="card-body">
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Velit vel odio ligula dolor bibendum diam lacus
                                        morbi volutpat. Amet consequat tellus proin volutpat
                                        risus nulla. Nullam molestie eu sem fames lectus metus
                                        proin ultricies. Commodo diam pretium in sed neque,
                                        venenatis. Nunc nisl metus tincidunt adipiscing et quis.
                                        Mattis orci feugiat condimentum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="heading-2">
            <p class="h1 fw-semibold text-center mt-5" style="font-size: 30px; font-weight: 700; line-height: 50px">
                Komentar
            </p>
        </div>
        <div class="card mb-5">
            <div class="card-body mx-5">
                <div class="title d-flex flex-row mb-3">
                    <img src="profile.png" alt="Profile" class="rounded-circle" style="width: 40px;">
                    <h5 class="card-title mt-2 mx-1">
                        Bj. Achmad Dhika Al Faristy
                    </h5>
                </div>
                <div class="text">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet,consectetur
                        adipiscing elit. Velit vel odio ligula
                        dolor bibendum diam lacus morbi volutpat.
                        Amet consequat tellus proin volutpat risus
                        nulla. Nullam molestie eu sem fames lectus
                        metus proin ultricies. Commodo diam pretium
                        in sed neque, venenatis. Nunc nisl metus
                        tincidunt adipiscing et quis. Mattis orci
                        feugiat condimentum.</p>
                </div>
            </div>
        </div>
        <div class="card mb-5">
            <div class="card-body mx-5">
                <div class="title d-flex flex-row mb-3">
                    <img src="profile.png" alt="Profile" class="rounded-circle" style="width: 40px;">
                    <h5 class="card-title mt-2 mx-1">
                        Bj. Achmad Dhika Al Faristy
                    </h5>
                </div>
                <div class="text">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet,consectetur
                        adipiscing elit. Velit vel odio ligula
                        dolor bibendum diam lacus morbi volutpat.
                        Amet consequat tellus proin volutpat risus
                        nulla. Nullam molestie eu sem fames lectus
                        metus proin ultricies. Commodo diam pretium
                        in sed neque, venenatis. Nunc nisl metus
                        tincidunt adipiscing et quis. Mattis orci
                        feugiat condimentum.</p>
                </div>
            </div>
        </div>
        <div class="card mb-5">
            <div class="card-body mx-5">
                <div class="title d-flex flex-row mb-3">
                    <img src="profile.png" alt="Profile" class="rounded-circle" style="width: 40px;">
                    <h5 class="card-title mt-2 mx-1">
                        Bj. Achmad Dhika Al Faristy
                    </h5>
                </div>
                <div class="text">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet,consectetur
                        adipiscing elit. Velit vel odio ligula
                        dolor bibendum diam lacus morbi volutpat.
                        Amet consequat tellus proin volutpat risus
                        nulla. Nullam molestie eu sem fames lectus
                        metus proin ultricies. Commodo diam pretium
                        in sed neque, venenatis. Nunc nisl metus
                        tincidunt adipiscing et quis. Mattis orci
                        feugiat condimentum.</p>
                </div>
            </div>
        </div>
        <div class="card mb-5">
            <div class="card-body mx-5">
                <div class="title d-flex flex-row mb-3">
                    <img src="profile.png" alt="Profile" class="rounded-circle" style="width: 40px;">
                    <h5 class="card-title mt-2 mx-1">
                        Bj. Achmad Dhika Al Faristy
                    </h5>
                </div>
                <div class="text">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet,consectetur
                        adipiscing elit. Velit vel odio ligula
                        dolor bibendum diam lacus morbi volutpat.
                        Amet consequat tellus proin volutpat risus
                        nulla. Nullam molestie eu sem fames lectus
                        metus proin ultricies. Commodo diam pretium
                        in sed neque, venenatis. Nunc nisl metus
                        tincidunt adipiscing et quis. Mattis orci
                        feugiat condimentum.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>