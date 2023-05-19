<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Kelontong</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/admin/admin.css')}}">
</head>
<body>
    
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>Kelontong</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active">
                        <span class="las la-igloo"></span><span>Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{route('logout')}}" class="active">
                        <span class="las la-igloo"></span><span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dasboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" name="" id="" placeholder="Search here"/>
            </div>

            <div class="user-wrapper">
                <img src="images/avatar.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Abidzar</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>

        <main>
            <!-- Widget -->
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>{{$UserCount}}</h1>
                        <span>Users</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>{{$SeekerCount}}</h1>
                        <span>Seekers</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>{{$verifiedWarungCount}}</h1>
                        <span>List Kelontong Terdaftar</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>
                <!-- <div class="card-single">
                    <div>
                        <h1>$6k</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div> -->
            </div>
            
            <div class="recent-grid">
                <!-- Users -->
                <div class="projects">
                    {{-- <div class="card">
                        <div class="card-header">
                            <h3>List All Users</h3>

                            <button>See all 
                                <span class="las la-arrow-right"></span>
                            </button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nama Pengguna</td>
                                            <td>Status</td>
                                            <td>Edit</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($AllUser as $user)
                                        <tr>
                                            <td>{{$user['name']}}</td>
                                            <td>{{$user['user_status']}}</td>
                                            <td>
                                                <button><b>-</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- List Kelontong -->
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>List Warung</h3>

                            <button>See all <span class="las la-arrow-right">

                            </span> </button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nama Warung</td>
                                            <td>Status</td>
                                            <td>Edit</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($warungs as $warung)
                                        <tr>
                                            <td>{{$warung['nama_wrg']}}</td>
                                            @if ($warung['verif_status'] == 'pending')
                                            <td>
                                                <span class="status orange"></span>
                                                {{$warung['verif_status']}}
                                            </td>
                                            <td>
                                                <form action="{{ route('updateWarung', ['id' => $warung['id']]) }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="warung_id" value={{$warung['id']}}>
                                                <button class="accept-btn"><b>Accept</b> 
                                                    <span class="las"></span>
                                                </button> 
                                                </form>
                                            </td>
                                            
                                            @endif
                                            @if ($warung['verif_status'] == 'verified')
                                            <td>
                                                <span class="status green"></span>
                                                {{$warung['verif_status']}}                                              
                                            </td>
                                            <td>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Users -->
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>List Users</h3>

                            <button>See all <span class="las la-arrow-right">

                            </span> </button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nama Pengguna</td>
                                            <td>Status Seeker</td>
                                            <td>Edit</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user['name']}}</td>
                                            @if ($user['seeker_request_status'] == 'pending')
                                            <td>
                                                <span class="status orange"></span>
                                                {{$user['seeker_request_status']}}
                                            </td>
                                            <td>
                                                <form action="{{ route('updateUser', ['id' => $user['id']]) }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="user_id" value={{$user['id']}}>
                                                <button class="accept-btn"><b>Accept</b> 
                                                    <span class="las"></span>
                                                </button> 
                                                </form>
                                            </td>
                                            @endif
                                            @if ($user['seeker_request_status'] == 'approved')
                                            <td>
                                                <span class="status green"></span>
                                                {{$user['seeker_request_status']}}                                              
                                            </td>
                                            <td>
                                            </td>
                                            @endif
                                            @if ($user['seeker_request_status'] == 'not requested')
                                            <td>
                                                <span class="status purple"></span>
                                                {{$user['seeker_request_status']}}                                              
                                            </td>
                                            <td>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>
</html>