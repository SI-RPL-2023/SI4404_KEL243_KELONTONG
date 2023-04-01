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
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CD8C3F">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="frontend/logo/kelontong.png" 
                width="147" height="51" alt="" loading="lazy">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Kelontong <span class="sr-only">(current)</span></a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <button type="button" class="btn btn-light my-2 my-sm-0" type="submit">Register</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('frontend/carousel/carousel1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('frontend/carousel/carousel1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('frontend/carousel/carousel1.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- About Us -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1>About Us</h1>
        </div>
        <div class="subheading">
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit vel odio ligula dolor bibendum diam lacus morbi volutpat. Amet consequat tellus proin volutpat risus nulla. Nullam molestie eu sem fames lectus metus proin ultricies. Commodo diam pretium in sed neque, venenatis. Nunc nisl metus tincidunt adipiscing et quis. Mattis orci feugiat condimentum vel, at ullamcorper nibh placerat. Sed cursus urna facilisis varius tristique. Elit lobortis cursus faucibus suspendisse nulla aenean maecenas et. Consequat dui eros, eget eu odio euismod. Non id rhoncus tempor ut pharetra enim dictumst tristique. Bibendum suspendisse pulvinar lacus felis volutpat egestas commodo a quam. Malesuada tempus rhoncus amet fermentum nunc.</p>
        </div>
    </div>

    <!-- Card -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1>Kelontong</h1>
        </div>
        <div class="row">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img src="frontend/card/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <a href="#" class="btn btn-dark" style="background-color: #CD8C3F">Detail Toko</a>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img src="frontend/card/2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <a href="#" class="btn btn-dark" style="background-color: #CD8C3F">Detail Toko</a>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <img src="frontend/card/3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <a href="#" class="btn btn-dark" style="background-color: #CD8C3F">Detail Toko</a>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <img src="frontend/card/4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <a href="#" class="btn btn-dark" style="background-color: #CD8C3F">Detail Toko</a>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <img src="frontend/card/5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <a href="#" class="btn btn-dark" style="background-color: #CD8C3F">Detail Toko</a>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <img src="frontend/card/6.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <a href="#" class="btn btn-dark" style="background-color: #CD8C3F">Detail Toko</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer p-4 mt-5" style="background-color: #CD8C3F">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    Our Contact :
                </div>
                <div class="col-md-4">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae porro ratione magnam optio temporibus quaerat, culpa harum, earum minima, quo alias at.
                </div>
                <div class="col-md-4">
                    @ Copyright KELONTONG 2023
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>