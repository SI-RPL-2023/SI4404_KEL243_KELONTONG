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
    @include('front.includes.navbar')

    <!-- Detail Kelontong -->

    <div class="container mt-4">
        <div class="heading">
            <p class="h1 fw-semibold text-start mt-5" style="font-size: 45px; font-weight: 700; line-height: 50px">
                Detail Warung
            </p>
        </div>
        <div class="content mt-5">
            <div class="row mb-5">
                <div class="col-5">
                    <div>
                        <img src="{{ asset($warung['foto']) }}" class="card-img mx-auto rounded" alt="BMW-840i" />
                    </div>
                </div>
                <!-- Form -->
                <div class="col-7 px-5">
                    <p style="font-size: 39px; font-weight: 600; line-height: 55px">
                        {{$warung['nama_wrg']}}
                    </p>
                    <p style="color: #CD8C3F">
                        {{$warung['pemilik']}}
                    </p>
                    <form action="#" method="POST" autocomplete='off' enctype="multipart/form-data">
                        <!-- ! Lokasi -->
                        <div class="mb-3">
                            <label for="lokasi" class="form-label"><b>Lokasi</b></label>
                            <div class="card" style="max-width: 600px;">
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$warung['alamat']}}
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
                                        {{$warung['nohp']}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Jam Buka -->
                        <div class="mb-3">
                            <label for="jamBuka" class="form-label"><b>Jam Buka - Jam Tutup</b></label>
                            <div class="card" style="max-width: 600px;">
                                <div class="card-body">
                                    <p class="card-text">
                                        {{$warung['jam_buka']}} - {{$warung['jam_tutup']}}
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
                                        {{$warung['detail']}}
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
        @foreach($komentars as $komentar)
        <div class="card mb-5">
            <div class="card-body mx-5">
            <div class="title d-flex flex-row mb-3">
                <img src="{{asset( $komentar->user->foto) }}" alt="Profile" class="rounded-circle" style="width: 40px;">
                <h5 class="card-title mt-2 mx-1">{{ $komentar->user->name }}</h5>
            </div>
            <div class="text">
                <p class="card-text">{{ $komentar->isi }}</p>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>