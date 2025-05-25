<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Contact - Radheya Enterprise</title>
    <meta content="Contact Radheya Enterprise for polygranite sheet solutions" name="description">
    <meta content="contact, polygranite sheets, Radheya Enterprise" name="keywords">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Raleway:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        .contact iframe,
        .contact .info,
        .contact .info .address,
        .contact .info .email,
        .contact .info .phone,
        .contact .alert,
        .contact-form-group,
        .contact .contact,
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
                    <h2 class="animate__animated animate__fadeInDown">Contact</h2>
                    <ol data-aos="fade-in" data="100" data-aos-duration="800">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="contact" class="contact" data-aos="fade-up" data-aos-duration="800">
            <div class="container">
                <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="600">
                    <iframe style="border:0; width: 100%; height: 270px;" src="{{ $settings['contact_map_url'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.2531602385263!2d73.33695720674591!3d18.908970086141743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7fb98a76f34e9%3A0x804ed4319572877f!2sRadheya%20enterprises!5e0!3m2!1sen!2sin!4v1747997220044!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade' }}" frameborder="0" allowfullscreen></iframe>

                </div>
                <div class="row mt-5">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                        <div class="info">
                            <div class="address" data-aos="fade-up" data-aos-delay="100" data-aos-duration="600">
                                <i class="bi bi-geo-alt animate__animated animate__fadeInUp"></i>
                                <h4 class="animate__animated animate__fadeInUp">Location:</h4>
                                <p class="animate__animated animate__fadeInUp">{{ $settings['contact_address'] ?? 'Shop No 04 Midas villa Apt,Sanjay nagar, Dahiwali,Tal-Karjat,Dist-Raigad' }}</p>
                            </div>
                            <div class="email" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600">
                                <i class="bi bi-envelope animate__animated animate__fadeInUp"></i>
                                <h4 class="animate__animated animate__fadeInUp">Email:</h4>
                                <p class="animate__animated animate__fadeInUp">{{ $settings['contact_email'] ?? 'info@radheyaenterprise.com' }}</p>
                            </div>
                            <div class="phone" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                                <i class="bi bi-phone animate__animated animate__fadeInUp"></i>
                                <h4 class="animate__animated animate__fadeInUp">Call:</h4>
                                <p class="animate__animated animate__fadeInUp">{{ $settings['contact_phone'] ?? '+91 70665 54459' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">
                        @if (session('success'))
                            <div class="alert alert-success sent-message" data-aos="fade-up" data-aos-delay="350" data-aos-duration="600">
                                <div class="animate__animated animate__fadeIn">{{ session('success') }}</div>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger error-message" data-aos="fade-up" data-aos-delay="350" data-aos-duration="600">
                                <ul class="animate__animated animate__fadeIn">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                                    <input type="text" name="name" class="form-control animate__animated animate__fadeInUp" id="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0" data-aos="fade-up" data-aos-delay="450" data-aos-duration="600">
                                    <input type="email" class="form-control animate__animated animate__fadeInUp" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="form-group mt-3" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600">
                                <input type="text" class="form-control animate__animated animate__fadeInUp" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                            </div>
                            <div class="form-group mt-3" data-aos="fade-up" data-aos-delay="550" data-aos-duration="600">
                                <input type="text" class="form-control animate__animated animate__fadeInUp" name="phone" id="phone" placeholder="Phone" value="{{ old('phone') }}" required>
                            </div>
                            <div class="form-group mt-3" data-aos="fade-up" data-aos-delay="600" data-aos-duration="600">
                                <textarea class="form-control animate__animated animate__fadeInUp" name="message" rows="5" placeholder="Message" required>{{ old('message') }}</textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center" data-aos="fade-in" data-aos-delay="650" data-aos-duration="600">
                                <button type="submit" class="animate__animated animate__fadeIn">Send Message</button>
                            </div>
                        </form>
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-duration="600"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script> --}}
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