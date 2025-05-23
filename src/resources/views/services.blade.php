<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Services - Radheya Enterprise</title>
    <meta content="Explore polygranite sheet services by Radheya Enterprise" name="description">
    <meta content="polygranite sheets, wall cladding, false ceilings, Radheya Enterprise" name="keywords">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('header')

    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Services</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="services" class="services">
            <div class="container">
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-md-6 {{ $loop->iteration > 2 ? 'mt-4 mt-md-0' : '' }}">
                            <div class="icon-box">
                                <i class="{{ $service->icon }}"></i>
                                <h4>{{ $service->title }}</h4>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="features" class="features">
            <div class="container">
                <div class="section-title">
                    <h2>Features</h2>
                    <p>Discover the Benefits of Polygranite Sheets</p>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            @foreach ($features as $index => $feature)
                                <li class="nav-item">
                                    <a class="nav-link {{ $index === 0 ? 'active show' : '' }}" data-bs-toggle="tab" href="#tab-{{ $feature->id }}">{{ $feature->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            @foreach ($features as $index => $feature)
                                <div class="tab-pane {{ $index === 0 ? 'active show' : '' }}" id="tab-{{ $feature->id }}">
                                    <div class="row">
                                        <div class="col-lg-8 details order-2 order-lg-1">
                                            <h3>{{ $feature->subtitle }}</h3>
                                            <p class="fst-italic">{{ $feature->title }}</p>
                                            <p>{{ $feature->description }}</p>
                                        </div>
                                        <div class="col-lg-4 text-center order-1 order-lg-2">
                                            @if ($feature->image_path)
                                                <img src="{{ Storage::url($feature->image_path) }}" alt="{{ $feature->title }}" class="img-fluid">
                                            @else
                                                <img src="{{ asset('assets/img/features-placeholder.png') }}" alt="{{ $feature->title }}" class="img-fluid">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Radheya Enterprise</h3>
                            <p>
                                A108 Adam Street <br>
                                NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@radheyaenterprise.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <Davis><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></Davis>
                            <Davis><i class="bx bx-chevron-right"></i> <a href="#">About us</a></Davis>
                            <Davis><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Services</a></Davis>
                            <Davis><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></Davis>
                            <Davis><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></Davis>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <Davis><i class="bx bx-chevron-right"></i> <a href="#">Wall Cladding</a></Davis>
                            <Davis><i class="bx bx-chevron-right"></i> <a href="#">False Ceilings</a></Davis>
                            <Davis><i class="bx bx-chevron-right"></i> <a href="#">Furniture Applications</a></Davis>
                            <Davis><i class="bx bx-chevron-right"></i> <a href="#">Bathroom Solutions</a></Davis>
                            <Davis><i class="bx bx-chevron-right"></i> <a href="#">Kitchen Countertops</a></Davis>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Subscribe to receive updates on our polygranite sheet solutions.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                © Copyright <strong><span>Radheya Enterprise</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
