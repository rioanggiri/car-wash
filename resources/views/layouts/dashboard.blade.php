<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
    <title>Sevensya | Dashboard</title>

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.ico') }}" rel="icon">

    <link rel="stylesheet" href="{{ asset('dashboard/dist/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/modules/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/modules/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/skins/blue.css') }}">

    <!-- CSS Datatables -->
    <link rel="stylesheet" href="{{ asset('dashboard/dist/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            {{-- Navbar --}}
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a>
                        </li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                            <i class="ion ion-android-person d-lg-none"></i>
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth()->user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('dashboard.profile.edit') }}" class="dropdown-item has-icon">
                                <i class="ion ion-android-person"></i> Profile
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item has-icon"><i class="ion ion-log-out"></i> Logout</button>
                                {{-- <a href="{{ route('logout') }}" class="dropdown-item has-icon">
                                <i class="ion ion-log-out"></i> Logout
                                </a> --}}
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            {{-- End Navbar --}}

            {{-- Sidebar --}}
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('dashboard.index') }}">Sevensya CarWash</a>
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            @if (Auth::user()->avatar)
                            <img alt="image" src="{{ asset('storage/' . Auth::user()->avatar) }}" width="100px" height="50px" class="user-photo" alt="" style="border-radius: 50%">
                            @else
                            <img alt="image" src="https://ui-avatars.com/api/?name={{ Auth::user()->roles == "ADMIN" ? 'Admin' : 'User' }}" class="img-fluid" width="200">
                            @endif
                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name">{{ Auth()->user()->name }}</div>
                            <div class="user-role">
                                @if (Auth()->user()->roles == 'ADMIN')
                                Admin
                                @else
                                Member
                                @endif
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="@yield('dashboard')">
                            <a href="{{ route('dashboard.index') }}"><i class="ion ion-android-home"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-header">Data</li>
                        @if(Auth::user()->roles == 'ADMIN')
                        <li class="@yield('user')">
                            <a href="{{ route('dashboard.user.index') }}"><i class="ion ion-ios-people"></i><span>User</span></a>
                        </li>
                        <li class="@yield('coupon')">
                            <a href="{{ route('dashboard.coupon.index') }}"><i class="ion ion-star"></i><span>Coupons</span></a>
                        </li>
                        @endif
                        @if(Auth::user()->roles == 'USER')
                        <li class="@yield('my-coupon')">
                            <a href="{{ route('dashboard.my-coupon.index') }}"><i class="ion ion-card"></i><span>My Coupons</span></a>
                        </li>
                        @endif
                    </ul>
                </aside>
            </div>
            {{-- End Sidebar --}}

            {{-- Content --}}
            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>
            {{-- End Content --}}

            {{-- Footer --}}
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="#">Rio Anggiri</a>
                </div>
                <div class="footer-right"></div>
            </footer>
            {{-- End Footer --}}
        </div>
    </div>

    <script src="{{ asset('dashboard/dist/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/modules/popper.js') }}"></script>
    <script src="{{ asset('dashboard/dist/modules/tooltip.js') }}"></script>
    <script src="{{ asset('dashboard/dist/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/sa-functions.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/scripts.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/custom.js') }}"></script>

    <!-- JS Datatables -->
    <script src="{{ asset('dashboard/dist/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/page/modules-datatables.js') }}"></script>

    @yield('scripts')
</body>

</html>
