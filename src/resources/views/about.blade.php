<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>About - Radheya Enterprise</title>
    <meta content="Learn about Radheya Enterprise and our Polygranite sheet solutions" name="description">
    <meta content="Radheya Enterprise, Polygranite sheets, interior design" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        /* Animation Fallback */
        .about .content,
        .about .content h2,
        .about .content h3,
        .about .portfolio-wrap,
        .about .content p,
        .about .content li,
        .footer-info,
        .footer-links li,
        .footer-newsletter,
        .copyright,
        .credits {
            opacity: 1 !important;
        }

        .team.section-bg {
            background: #f8f9fa;
            padding: 50px 0;
        }

        .team .section-title h2 {
            font-size: 2rem;
            color: #2c3e50;
            position: relative;
        }

        .team .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 2px;
            background: linear-gradient(45deg, #4e73df, #1cc88a);
        }

        .team .member {
            background: #fff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .team .member:hover {
            transform: translateY(-3px);
        }

        .team .pic {
            border-radius: 8px;
            overflow: hidden;
        }

        .team .pic img {
            transition: transform 0.3s ease;
        }

        .team .member:hover .pic img {
            transform: scale(1.05);
        }

        .team .member-info h4 {
            font-size: 1.3rem;
            color: #2c3e50;
        }

        .team .member-info span {
            font-size: 1rem;
            color: #1cc88a;
        }

        .team .social a {
            color: #34495e;
            font-size: 1.2rem;
            margin: 0 5px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .team .social a:hover {
            color: #1cc88a;
            transform: scale(1.2);
        }
    </style>
</head>

<body>

    @include('header')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-down" data-aos-duration="800">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="animate__animated animate__fadeInDown">About</h2>
                    <ol data-aos="fade-in" data-aos-delay="100" data-aos-duration="800">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
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


        <section id="team" class="team section-bg" data-aos="fade-up" data-aos-duration="800">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate__animated animate__fadeInDown">Team</h2>
                    <p class="animate__animated animate__fadeInDown" data-aos-delay="100">Our Hardworking Team</p>
                </div>
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid"
                                    alt="Walter White"></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""><i class="ri-linkedin-box-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="600">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/team/team-2.jpg') }}"
                                    class="img-fluid" alt="Sarah Jhonson"></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Aut maiores voluptates amet et quis</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""><i class="ri-linkedin-box-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/team/team-3.jpg') }}"
                                    class="img-fluid" alt="William Anderson"></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Quisquam facilis cum velit laborum corrupti</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""><i class="ri-linkedin-box-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/team/team-4.jpg') }}"
                                    class="img-fluid" alt="Amanda Jepson"></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Dolorum tempora officiis odit laborum officiis</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""><i class="ri-linkedin-box-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" data-aos="zoom-in"
        data-aos-duration="600"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
