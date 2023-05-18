<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Kelontong</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href={{ asset('frontend/admin/admin.css') }}">
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
                <img src="#" width="40px" height="40px" alt="">
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
                        <h1>54</h1>
                        <span>Users</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Seekers</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>List Kelontong</span>
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
                    <div class="card">
                        <div class="card-header">
                            <h3>Users</h3>

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
                                        <tr>
                                            <td>Dadang M</td>
                                            <td>User</td>
                                            <td>
                                                <button><b>-</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Asep Septiadi</td>
                                            <td>User/Seekers</td>
                                            <td>
                                                <button><b>-</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bambang M</td>
                                            <td>User/Seekers</td>
                                            <td>
                                                <button><b>-</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Abidzar Zulfa</td>
                                            <td>User</td>
                                            <td>
                                                <button><b>-</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kukang Karung</td>
                                            <td>User</td>
                                            <td>
                                                <button><b>-</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ushop Sholehah</td>
                                            <td>User/Seekers</td>
                                            <td>
                                                <button><b>-</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- List Kelontong -->
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>List Kelontong</h3>

                            <button>See all <span class="las la-arrow-right">

                            </span> </button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nama Kelontong</td>
                                            <td>Status</td>
                                            <td>Edit</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ayam Bakar DD</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sate Ayam Ude</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cilok Mang Dadi</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Susu Gate 1</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cilok Lada</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mie Ayam Sukabirus</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Seekers -->
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Seekers</h3>

                            <button>See all <span class="las la-arrow-right">

                            </span> </button>
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
                                        <tr>
                                            <td>Agus Sugus K</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Raisa Fathurahman</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dadi Septiadi</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Galih Pratama</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gagan Juragan B</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Farid Albaroq</td>
                                            <td>
                                                <span class="status orange"></span>
                                                pending
                                            </td>
                                            <td>
                                                <button><b>+</b> 
                                                    <span class="las"></span>
                                                </button>
                                            </td>
                                        </tr>
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