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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        /* Animation Fallback */
        .services .icon-box,
        .features .section-title,
        .features .nav-item,
        .features .tab-pane,
        .footer-info,
        .footer-links li,
        .footer-newsletter,
        .copyright,
        .credits {
            opacity: 1 !important;
        },
          /* Services Section */
        .services .icon-box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .services .icon-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .services .icon-box i {
            font-size: 2.5rem;
            color: #4e73df;
        },
    </style>
</head>
<body>
    @include('header')

    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-down" data-aos-duration="800">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="animate__animated animate__fadeInDown">Services</h2>
                    <ol data-aos="fade-in" data-aos-delay="100" data-aos-duration="800">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>
            </div>
        </section>

        {{-- <section id="services" class="services" data-aos="fade-up" data-aos-duration="800">
            <div class="container">
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-md-6 {{ $loop->iteration > 2 ? 'mt-4 mt-md-0' : '' }}" data-aos="fade-up" data-aos-delay="{{ 100 * $loop->iteration }}" data-aos-duration="600">
                            <div class="icon-box animate__animated animate__fadeInUp">
                                <i class="{{ $service->icon ?? 'ri-star-line' }}"></i>
                                <h4>{{ $service->title ?? 'Service Title' }}</h4>
                                <p>{{ $service->description ?? 'No description available.' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> --}}
        <section id="services" class="services" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2 data-aos="fade-in">Our Services</h2>
                    <p data-aos="fade-in" data-aos-delay="100">Explore the range of Polygranite solutions we offer.</p>
                </div>
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-md-6 {{ $loop->iteration > 2 ? 'mt-4 mt-md-0' : '' }}" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
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

        <section id="features" class="features" data-aos="fade-up" data-aos-duration="800">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="600">
                    <h2 class="animate__animated animate__fadeInUp">Features</h2>
                    <p class="animate__animated animate__fadeInUp">Discover the Benefits of Polygranite Sheets</p>
                </div>
                <div class="row">
                    <div class="col-lg-3" data-aos="fade-right" data-aos-delay="200" data-aos-duration="600">
                        <ul class="nav nav-tabs flex-column">
                            @foreach ($features as $index => $feature)
                                <li class="nav-item" data-aos="fade-right" data-aos-delay="{{ 250 + ($index * 50) }}" data-aos-duration="600">
                                    <a class="nav-link {{ $index === 0 ? 'active show' : '' }} animate__animated animate__fadeInRight" data-bs-toggle="tab" href="#tab-{{ $feature->id }}">{{ $feature->title ?? 'Feature Title' }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300" data-aos-duration="600">
                        <div class="tab-content">
                            @foreach ($features as $index => $feature)
                                <div class="tab-pane {{ $index === 0 ? 'active show' : '' }}" id="tab-{{ $feature->id }}">
                                    <div class="row">
                                        <div class="col-lg-8 details order-2 order-lg-1" data-aos="fade-left" data-aos-delay="350" data-aos-duration="600">
                                            <h3 class="animate__animated animate__fadeInLeft">{{ $feature->subtitle ?? 'Feature Subtitle' }}</h3>
                                            <p class="fst-italic animate__animated animate__fadeInLeft">{{ $feature->title ?? 'Feature Title' }}</p>
                                            <p class="animate__animated animate__fadeInLeft">{{ $feature->description ?? 'No description available.' }}</p>
                                        </div>
                                        <div class="col-lg-4 text-center order-1 order-lg-2" data-aos="fade-right" data-aos-delay="400" data-aos-duration="600">
                                            @if ($feature->image_path)
                                                <img src="{{ Storage::url($feature->image_path) }}" alt="{{ $feature->title ?? 'Feature Image' }}" class="img-fluid animate__animated animate__fadeInRight">
                                            @else
                                                <img src="{{ asset('assets/img/features-placeholder.png') }}" alt="{{ $feature->title ?? 'Feature Image' }}" class="img-fluid animate__animated animate__fadeInRight">
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

    <footer id="footer" data-aos="fade-up" data-aos-duration="800">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="600">
                        <div class="footer-info">
                            <h3 class="animate__animated animate__fadeInUp">Radheya Enterprise</h3>
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
                    <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                        <h4 class="animate__animated animate__fadeInUp">Useful Links</h4>
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="250" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}" class="animate__animated animate__fadeInUp">Home</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInUp">About us</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="350" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}" class="animate__animated animate__fadeInUp">Services</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInUp">Terms of service</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="450" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInUp">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
                        <h4 class="animate__animated animate__fadeInUp">Our Services</h4>
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="350" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInUp">Wall Cladding</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInUp">False Ceilings</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="450" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInUp">Furniture Applications</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="500" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInUp">Bathroom Solutions</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="550" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInUp">Kitchen Countertops</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                        <h4 class="animate__animated animate__fadeInUp">Our Newsletter</h4>
                        <p>Subscribe to receive updates on our polygranite sheet solutions.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600">
                © Copyright <strong><span>Radheya Enterprise</span></strong>. All Rights Reserved
            </div>
            <div class="credits" data-aos="fade-up" data-aos-delay="550" data-aos-duration="600">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-duration="600"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            try {
                if (typeof AOS !== 'undefined') {
                    AOS.init({
                        duration: 800,
                        easing: 'ease-in-out',
                        once: true,
                        mirror: false
                    });
                } else {
                    console.warn('AOS library not loaded.');
                }
            } catch (error) {
                console.error('Error during AOS initialization:', error);
            }
        });
    </script>
</body>
</html>
