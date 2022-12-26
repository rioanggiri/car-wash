<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sevensya Auto Car Wash</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            right: 10px;
            bottom: 60px;
            background-color: #25d366;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/img/logoku.png') }}" alt="" class="img-fluid"></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#pricing">Price List</a></li>

                    <li class="get-started"><a href="{{ route('login') }}">Sign In</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row d-flex align-items-center"">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
                <h1>Sevensya Auto Car Wash</h1>
                <h2>Dengan pelayanan berkualitas dan harga yang terjangkau membuat mobil anda kembali seperti baru</h2>
                <a href="{{ route('login') }}" class="btn-get-started scrollto">Sign In</a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                <img src="{{ asset('frontend/assets/img/31.jpeg') }}" class="img-fluid" alt="">
            </div>
        </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/client-1.png') }}" class="img-fluid" alt="" data-aos="flip-right">
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/client-2.png') }}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/client-3.png') }}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="200">
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/client-4.png') }}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="300">
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/client-5.png') }}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="400">
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="{{ asset('frontend/assets/img/clients/client-6.png') }}" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="500">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container">

                <div class="row">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                    <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-aos="fade-in" data-aos-delay="100">Cuci Dan Detailing Mobil</h3>
                            <p data-aos="fade-in">
                                Melakukan pembersihan dan perawatan ekstra secara mendetail, baik pembersihan pada interior, eksterior,
                                bahkan sampai bagian dalam mesin. Mobil pun akan benar-benar bersih dari segala kotoran seperti debu
                                jalanan, goresan kerikil, kerak dari kotoran, dan lainnya.
                            </p>
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-up">

                                    <li class="mt-2">Bersihkan jok dan bagasi</li>
                                    <li class="mt-2">Vacuum Cleaning</li>
                                    <li class="mt-2">Salon interior</li>
                                    <li class="mt-2">Window wiping</li>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing section-bg">
            <div class="container">

                <div class="section-title">
                    <h2 data-aos="fade-in">DAFTAR HARGA
                        Cuci Mobil Per 1 Oktober</h2>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-4 box" data-aos="zoom-in">
                        <h3>SMALL</h3>
                        <h4>Rp.45.000</h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Cuci Exterior (Body & Kolong Mobil)</li>
                            <li><i class="bx bx-check"></i> Vacuum Interior</li>
                            <li><i class="bx bx-check"></i> Cleaning Ban & Velg Mobil</li>
                            <li><i class="bx bx-check"></i> Ayla, Agya, Yaris, Jazz, dan sejenisnya.</li>
                        </ul>
                        <a href="{{ route('login') }}" class="get-started-btn">Sign In</a>
                    </div>

                    <div class="col-lg-4 box featured" data-aos="zoom-in">
                        <span class="featured-badge">Terlaris</span>
                        <h3>MEDIUM</h3>
                        <h4>Rp.50.000</h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Cuci Exterior(Body & Kolong Mobil)</li>
                            <li><i class="bx bx-check"></i> Vacuum Interior</li>
                            <li><i class="bx bx-check"></i> Cleaning Ban & Velg Mobil</li>
                            <li><i class="bx bx-check"></i> Avanza, Xenia, Cayla, Sigra, Mobilio, dan sejenisnya.</li>
                        </ul>
                        <a href="{{ route('login') }}" class="get-started-btn">Sign In</a>
                    </div>

                    <div class="col-lg-4 box" data-aos="zoom-in">
                        <h3>Large</h3>
                        <h4>Rp.55.000</h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Cuci Exterior (Body & Kolong Mobil)</li>
                            <li><i class="bx bx-check"></i> Vacuum Interior</li>
                            <li><i class="bx bx-check"></i> Cleaning Ban & Velg Mobil</li>
                            <li><i class="bx bx-check"></i> Fortuner, Pajero, MU-X, Triton, Hilux, dan sejenisnya.</li>
                        </ul>
                        <a href="{{ route('login') }}" class="get-started-btn">Sign In</a>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2 data-aos="fade-in">Contact</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box" data-aos="fade-up">
                                    <i class="bx bx-map"></i>
                                    <h3>Alamat</h3>
                                    <p>Jl. Jend. Ahmad Yani No.96, RT.002/RW.001, Pulau Karam, Kec. Sukajadi, Kota Pekanbaru, Riau 28127
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email</h3>
                                    <p>svensyaautocarwash@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Telepon</h3>
                                    <p>0813-6873-7171</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="#" method="post" role="form" class="php-email-form" data-aos="fade-up">
                            <div class="form-row">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6504005213246!2d101.43979851373956!3d0.5256704638178284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5adfec4a8c3dd%3A0xe39ed840a401bdd1!2sSevensya%20Auto%20Car%20Wash!5e0!3m2!1sen!2sid!4v1670292887817!5m2!1sen!2sid" width="490" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>2022</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">Rio Anggiri</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- Side Button-->
    <a href="https://api.whatsapp.com/send?phone=+6285282522105&amp;text=Hallo! Sevensya Auto Car Wash, Saya ingin bertanya sesuatu tentang produk anda." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- End Side Button-->

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
