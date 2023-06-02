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
            <a class="nav-link active" aria-current="page" href="{{route('onboarding')}}">Home</a>
          </li>
          @if (request()->fullUrl() == route('home'))
        <li class="nav-item ms-4">
          <a class="nav-link active" aria-current="page" href="#about">About Us</a>
        </li>
        @else 
          <li class="nav-item ms-4">
            <a class="nav-link active" aria-current="page" href="{{route('aboutUsOnboarding')}}">About Us</a>
          </li>
        @endif
        </ul>
        <form action={{route('login')}} method="GET" class="d-flex">
        @csrf
        <button href="{{route('login')}}" class="btn btn-light fw-semibold" type="submit">Login</button>
        </form>
      </div>
    </div>
  </nav>
