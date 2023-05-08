<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Bootstrap 5.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Link to CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">

  <!-- Poppins Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Icon -->
  <script src="https://kit.fontawesome.com/85206701c2.js" crossorigin="anonymous"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">
  <style>
    .container-custom {
      height: 800px;
      background-color: #CD8C3F;
    }

    .profile-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    form {
      margin-top: 20px;
      text-align: left;
    }

    button {
      margin-top: 20px;
    }

    .submit-button {
      background-color: #442100;
      color: #FFFFFF;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container-fluid container-custom">
    <div class="profile-container">
      <h2>Profile</h2>
      <img src="images/avatar.png" alt="img" class="rounded-circle mt-3" style="width: 170px; height: 170px;">
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="name" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="phone" class="form-control" id="phone" phone="phone" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" password="password" required>
        </div>
      </form>
      <button type="submit" class="btn btn-primary submit-button">Submit</button>
      <button type="button" class="btn btn-secondary mt-3">Logout</button>
    </div>
    <i class="fa-solid fa-arrow-left fa-lg mt-5 mx-4"></i>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>


<!-- <!doctype html>
<html lang="en"> -->

<!-- <head> -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kelontong</title> -->

    <!-- Bootstrap 5.2 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->

    <!-- Link to CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/style.css') }}"> -->

    <!-- Poppins Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet"> -->

<!-- </head> -->

<!-- <body> -->
    <!-- Login Page -->
    <!-- <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 min-vh-100 banner">
                <img src="{{('frontend/logres/logres.png')}}" alt="login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
            <div class="col-md-6">
                <div class="m-auto" style="width: 90%">
                    <h2 class="fw-bold mb-4">Login</h2> -->
                    <!-- Form -->
                    <!-- <form action="{{ route('login')}}" method="post"> -->
                        <!-- @csrf -->
                        <!-- Email -->
                        <!-- <div class="mb-3 position-relative">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div> -->
                        <!-- Password -->
                        <!-- <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div> -->
                        <!-- Remember me -->
                        <!-- <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div> -->
                        <!-- Login Button -->
                        <!-- <button type="submit" class="btn btn-dark px-4 mt-2" style="background-color: #CD8C3F;">Login</button>

                    </form> -->
                    <!-- Link ke register page -->
                    <!-- <p class="mt-3">Anda belum memiliki akun? <a href="/register">Register</a></p>
                </div>
            </div>
        </div> -->
    <!-- </div> -->

    <!-- Bootstrap Script -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
<!-- </body> -->

<!-- </html> -->