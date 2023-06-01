<nav class="navbar sticky-top navbar-expand-lg" style="background-color: #CD8C3F">
  <div class="container py-2 fw-semibold">

    <a class="navbar-brand" href="#">
        <img src="{{ asset('frontend/logo/kelontong.png') }}" 
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
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item ms-4">
          <a class="nav-link active" aria-current="page" href="#">About Us</a>
        </li>
        <li class="nav-item ms-4">
          <a class="nav-link active" aria-current="page" href="{{route('viewListWarung')}}">List Kelontong</a>
        </li>
        @if (Auth::user()->plan_status === 'free')
        <li class="nav-item ms-4">
          <a class="nav-link active" aria-current="page" href="">Langganan</a>
        </li>
        @endif
        @if (Auth::user()->user_status === 'user' && Auth::user()->seeker_request_status !== 'pending' )
        <li class="nav-item ms-4">
          <a class="nav-link active" aria-current="page" href="{{route('viewApplySeeker')}}">Update to Seekers</a>
        </li>
        @endif
        @if (Auth::user()->user_status === 'seeker')
        <li class="nav-item ms-4">
          <a class="nav-link active" aria-current="page" href="{{route('viewinputWarung')}}">Input Data Warung</a>
        </li>
        @endif
      </ul>
      <a href="{{route('frontProfile')}}"> <img src="{{ asset('frontend/profile/example.png') }}" alt="Profile" class="rounded-circle" style="width: 40px;"></a>
    </div>
  </div>
</nav>