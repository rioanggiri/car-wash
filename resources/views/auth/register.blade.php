<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Sevensya Auto Car Wash | Register</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('dashboard/dist/modules/bootstrap/css/bootstrap.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/skins/blue.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');

    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <a href="index.html"><img src="{{ asset('frontend/assets/img/logoku.png') }}" alt="logo" class="img-fluid" width="200px" height="100px"></a>
                        </div>
                        @if ($errors->any())
                        <div class="mb-5" role="alert">
                            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                There's something wrong!
                            </div>
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                <p>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </p>
                            </div>
                        </div>
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="new-email">
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required autocomplete="new-password">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password_confirmation" class="d-block">Password Confirmation</label>
                                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="float-left">
                                            <label class="control-label">
                                                <a href="{{ route('login') }}">
                                                    Sudah punya akun?
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            <div class="text-job text-muted">Register</div>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('dashboard/dist/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/modules/popper.js') }}"></script>
    <script src="{{ asset('dashboard/dist/modules/tooltip.js') }}"></script>
    <script src="{{ asset('dashboard/dist/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('dashboard/dist/js/scripts.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/custom.js') }}"></script>
</body>
</html>
