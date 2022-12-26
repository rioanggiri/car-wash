<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Sevensya Auto Car Wash | Login</title>

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
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <a href="index.html"><img src="{{ asset('frontend/assets/img/logoku.png') }}" alt="logo" class="img-fluid" width="200px" height="100px"></a>
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autocomplete="new-email">
                                        @error('email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <label class="control-label">
                                                    <a href="{{ route('password.request') }}">
                                                        Forgot Password?
                                                    </a>
                                                </label>
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required autocomplete="new-password">
                                        @error('password')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember_me" class="custom-control-input" tabindex="3" id="remember_me">
                                            <label class="custom-control-label" for="remember_me">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            <div class="text-job text-muted">Login</div>
                                        </button>
                                    </div>
                                </form>
                                <div class="text-muted text-center">
                                    Belum punya akun? <a href="{{ route('register') }}">Klik disini</a>
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
