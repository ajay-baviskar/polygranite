<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Radheya Enterprise - Polygranite Elegance</title>
    <meta content="Discover Polygranite sheets by Radheya Enterprise, blending innovation and elegance for your interiors." name="description">
    <meta content="Polygranite sheets, Radheya Enterprise, interior design, luxury walls, stone elegance" name="keywords">
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
    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        /* Preloader */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #fff;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #preloader .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #4e73df;
            border-top: 5px solid #1cc88a;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Hero Carousel */
        #hero .carousel-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3));
        }

        #hero .carousel-container {
            text-align: center;
            padding: 100px 0;
        }

        #hero h2 {
            font-size: 3rem;
            font-weight: 700;
            color: #fff;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        #hero p {
            font-size: 1.25rem;
            color: #f0f4f8;
        }

        .btn-get-started {
            background: linear-gradient(45deg, #4e73df, #1cc88a);
            color: #fff;
            padding: 12px 30px;
            border-radius: 50px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-get-started:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* About Section */
        .about .content h2 {
            font-weight: 700;
            color: #2c3e50;
        }

        .about .content h3 {
            font-weight: 600;
            color: #34495e;
        }

        .about .portfolio-wrap img {
            transition: transform 0.3s ease;
        }

        .about .portfolio-wrap img:hover {
            transform: scale(1.05);
        }

        /* Reviews Section */
        .review-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .review-card:hover {
            transform: translateY(-5px);
        }

        .review-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        .rating .bi-star-fill,
        .rating .bi-star {
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .rating .bi-star-fill:hover,
        .rating .bi-star:hover {
            transform: scale(1.2);
        }

        /* Submit Review */
        .submit-review .card {
            border: none;
            background: #f8f9fa;
        }

        .submit-review .btn-get-started {
            padding: 10px 40px;
        }

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
        }

                .services .icon-box i {
            font-size: 2.5rem;
            color: #4e73df;
            margin-bottom: 15px;
            display: block;
        }

        .icon-box {
            display: flex;
            align-items: center;
            background: #fff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .icon-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 5px;
            /* smaller custom gap */
        }

        /* Portfolio Section */
        .portfolio .portfolio-item .portfolio-wrap {
            overflow: hidden;
            border-radius: 10px;
        }

        .portfolio .portfolio-item img {
            transition: transform 0.5s ease;
        }

        .portfolio .portfolio-item:hover img {
            transform: scale(1.1);
        }

        .portfolio .portfolio-info {
            background: rgba(0, 0, 0, 0.7);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .portfolio .portfolio-item:hover .portfolio-info {
            opacity: 1;
        }

        .portfolio-flters li {
            background: #f8f9fa;
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 50px;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .portfolio-flters li:hover,
        .portfolio-flters li.filter-active {
            background: linear-gradient(45deg, #4e73df, #1cc88a);
            color: #fff;
        }

        /* Footer */
        .footer-top {
            background: #2c3e50;
            color: #f0f4f8;
        }

        .footer-info h3,
        .footer-links h4 {
            color: #fff;
        }

        .footer-links a {
            color: #f0f4f8;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #1cc88a;
        }

        .back-to-top {
            background: linear-gradient(45deg, #4e73df, #1cc88a);
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    @include('header')

    <section id="hero">
        <div id="heroCarousel" data-bs-interval="3000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url({{ asset('assets/img/slide/slide-1.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Radheya Enterprise</span></h2>
                            <p class="animate__animated animate__fadeInUp">"Transform your walls with elegance! Radheya Enterprise presents Polygranite sheets – the epitome of sophistication."</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-2.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Unveiling Polygranite Beauty</h2>
                            <p class="animate__animated animate__fadeInUp">"Unleash the beauty of stone on your walls! Radheya's Polygranite sheets redefine luxury."</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-3.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Polygranite Revolution</h2>
                            <p class="animate__animated animate__fadeInUp">"Polygranite sheets that speak volumes. Radheya Enterprise brings design and durability."</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>

    <main id="main">
        <section id="about" class="about" data-aos="fade-up">
            <div class="container">
                <div class="row content">
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <h2>Radheya Enterprise</h2>
                        <h3>"Embark on a journey where Polygranite sheets blend innovation and elegance."</h3>
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/radhey2.jpg') }}" class="img-fluid" alt="Polygranite Sheet">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <p>
                            Welcome to <b>Radheya Enterprise</b>, where innovation meets sophistication. Our Polygranite sheets are revolutionary, elevating your living spaces into canvases of elegance. Crafted with precision and designed for durability, they redefine luxury. Discover a diverse range of Polygranite sheets that transform your walls into timeless masterpieces, reflecting your style and personality.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Stone Elegance: Polygranite Sheets</li>
                            <li><i class="ri-check-double-line"></i> Artistry of Radheya's Masterpieces</li>
                            <li><i class="ri-check-double-line"></i> Luxury Redefined with Polygranite</li>
                            <li><i class="ri-check-double-line"></i> Polygranite Revolution by Radheya</li>
                            <li><i class="ri-check-double-line"></i> Elevate Interiors with Signature Sheets</li>
                            <li><i class="ri-check-double-line"></i> Innovative Walls, Lasting Impressions</li>
                            <li><i class="ri-check-double-line"></i> Radheya's Polygranite Extravaganza</li>
                        </ul>
                        <p class="fst-italic">
                            Transform your interiors with the enduring beauty of Polygranite.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="reviews" class="reviews section-bg" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2 data-aos="fade-in">Customer Reviews</h2>
                    <p data-aos="fade-in" data-aos-delay="100">Hear what our customers say about Radheya's Polygranite sheets.</p>
                </div>
                @if ($reviews->isEmpty())
                    <div class="text-center" data-aos="zoom-in">
                        <p>No reviews yet. Be the first to share your experience!</p>
                    </div>
                @else
                    <div class="swiper reviews-slider" data-aos="fade-up" data-aos-delay="200">
                        <div class="swiper-wrapper">
                            @foreach ($reviews as $review)
                                <div class="swiper-slide">
                                    <div class="review-card text-center">
                                        @if ($review->photo_path)
                                            <img src="{{ Storage::url($review->photo_path) }}" class="review-img rounded-circle mb-3" alt="{{ $review->name }}">
                                        @else
                                            <img src="{{ asset('assets/img/undraw_profile.svg') }}" class="review-img rounded-circle mb-3" alt="{{ $review->name }}">
                                        @endif
                                        <h4>{{ $review->name }}</h4>
                                        <div class="rating mb-3">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="bi {{ $i <= $review->rating ? 'bi-star-fill text-warning' : 'bi-star text-muted' }}"></i>
                                            @endfor
                                        </div>
                                        <p class="review-text">"{{ $review->comment }}"</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                @endif
            </div>
        </section>


           <section id="services" class="services" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2 data-aos="fade-in">Our Services</h2>
                    <p data-aos="fade-in" data-aos-delay="100">Explore the range of Polygranite solutions we offer.</p>
                </div>
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-md-6 {{ $loop->iteration > 2 ? 'mt-4 mt-md-0' : '' }}" data-aos="zoom-in"
                            data-aos-delay="{{ $loop->index * 100 }}">
                            {{-- <div class="icon-box">
                                <i class="{{ $service->icon }}"></i>
                                <h4>{{ $service->title }}</h4>
                                <p>{{ $service->description }}</p>
                            </div> --}}

                            <div class="icon-box d-flex align-items-center">
                                {{-- Service Image on Left --}}
                                <div class="me-0"> {{-- reduced gap from me-3 to me-2 --}}
                                    <img src="{{ asset('storage/' . $service->icon) }}" alt="Service Icon"
                                        class="service-icon">
                                </div>

                                {{-- Content on Right --}}
                                <div>
                                    <h4>{{ $service->title }}</h4>
                                    <p>{{ $service->description }}</p>
                                </div>
                            </div>



                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="portfolio" class="portfolio" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2 data-aos="fade-in">Portfolio</h2>
                    <p data-aos="fade-in" data-aos-delay="100">Showcasing our Polygranite masterpieces.</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    @foreach ($portfolioItems as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item {{ $item->filter }}" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="portfolio-wrap">
                                <img src="{{ Storage::url($item->image_path) }}" class="img-fluid" alt="{{ $item->title }}">
                                <div class="portfolio-info">
                                    <h4>{{ $item->title }}</h4>
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
                                {{ $settings['contact_address'] ?? 'Shop No 04 Midas villa Apt,Sanjay nagar, Dahiwali,Tal-Karjat,Dist-Raigad' }}<br><br>
                                <strong>Phone:</strong> {{ $settings['contact_phone'] ?? '+91 70665 54459' }}<br>
                                <strong>Email:</strong> {{ $settings['contact_email'] ?? 'info@radheyaenterprise.com' }}<br>
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
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInRight">Wall Cladding</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInRight">False Ceilings</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="450" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInRight">Furniture Applications</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="500" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInRight">Bathroom Solutions</a>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="550" data-aos-duration="600">
                                <i class="bx bx-chevron-right"></i> <a href="#" class="animate__animated animate__fadeInRight">Kitchen Countertops</a>
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


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Preloader
            window.addEventListener('load', function () {
                const preloader = document.getElementById('preloader');
                preloader.style.transition = 'opacity 0.5s ease';
                preloader.style.opacity = '0';
                setTimeout(() => preloader.remove(), 500);
            });

            // Initialize AOS
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });

            // Swiper for Reviews
            new Swiper('.reviews-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1200: {
                        slidesPerView: 3,
                    },
                },
            });
        });
    </script>
</body>

</html>
