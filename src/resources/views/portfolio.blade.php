<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Portfolio - Radheya Enterprise</title>
    <meta content="Explore our polygranite sheet portfolio at Radheya Enterprise" name="description">
    <meta content="polygranite sheets, portfolio, Radheya Enterprise" name="keywords">
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
        .portfolio-flters li,
        .portfolio-item,
        .footer-info,
        .footer-links li,
        .footer-newsletter,
        .copyright,
        .credits {
            opacity: 1 !important;
        }
    </style>
</head>
<body>
    @include('header')

    <main id="main">
        <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-down" data-aos-duration="800">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="animate__animated animate__fadeInDown">Portfolio</h2>
                    <ol data-aos="fade-in" data-aos-delay="100" data-aos-duration="800">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Portfolio</li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio" data-aos="fade-up" data-aos-duration="800">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active" data-aos="fade-down" data-aos-delay="100" data-aos-duration="600">
                                <span class="animate__animated animate__fadeInDown">All</span>
                            </li>
                            <li data-filter=".filter-app" data-aos="fade-down" data-aos-delay="150" data-aos-duration="600">
                                <span class="animate__animated animate__fadeInDown">App</span>
                            </li>
                            <li data-filter=".filter-card" data-aos="fade-down" data-aos-delay="200" data-aos-duration="600">
                                <span class="animate__animated animate__fadeInDown">Card</span>
                            </li>
                            <li data-filter=".filter-web" data-aos="fade-down" data-aos-delay="250" data-aos-duration="600">
                                <span class="animate__animated animate__fadeInDown">Web</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    @foreach ($portfolioItems as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item {{ $item->filter }}" data-aos="fade-up" data-aos-delay="{{ 100 * $loop->iteration }}" data-aos-duration="600">
                            <div class="portfolio-wrap animate__animated animate__fadeInUp">
                                <img src="{{ Storage::url($item->image_path) }}" class="img-fluid" alt="{{ $item->title }}">
                                <div class="portfolio-info">
                                    <h4>{{ $item->title }}</h4>
                                    <p>{{ str_replace('filter-', '', $item->filter) }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{ Storage::url($item->image_path) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $item->title }}"><i class="bx bx-plus"></i></a>
                                        <a href="{{ route('portfolio.details', $item->id) }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                                <a href="#" class="google"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                        <h4 class="animate__animated animate__fadeInUp">Useful Links</h4>
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="250" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i>
                                <a href="{{ route('home') }}" class="animate__animated animate__fadeInUp">Home</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#" class="animate__animated animate__fadeInUp">About us</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="350" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i>
                                <a href="{{ route('services') }}" class="animate__animated animate__fadeInUp">Services</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#" class="animate__animated animate__fadeInUp">Terms of service</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="450" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i>
                                <a href="#" class="animate__animated animate__fadeInUp">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
                        <h4 class="animate__animated animate__fadeInDown">Our Services</h4>
                        <ul>
                            @foreach ($services as $index => $service)
                                <li data-aos="fade-up" data-aos-delay="{{ 350 + ($index * 30) }}" data-aos-duration="600">
                                    <i class="bx bx-chevron-right"></i>
                                    <a href="#" class="animate__animated animate__fadeInUp">{{ $service->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                        <h4 class="animate__animated animate__fadeInUp">Our Newsletter</h4>
                        <p>Subscribe to receive updates on our services.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600">
                <p class="animate__animated animate__fadeInUp">©2023 <strong><span>Radheya Solutions</span></strong>. All Rights Reserved</p>
            </div>
            <div class="credits" data-aos="fade-up" data-aos-delay="550" data-aos-duration="600">
                <p class="animate__animated animate__fadeInUp">Designed by <a href="https://www.example.com">Radheya</a></p>
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