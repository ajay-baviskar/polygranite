<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gaurav</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  @include('header')
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Radheya Enterprise</span></h2>
              <p class="animate__animated animate__fadeInUp">"Transform your walls with elegance! Radheya Enterprise presents Polygranite sheets – the epitome of sophistication in every detail."</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Unveiling the Beauty of Polygranite Sheets</h2>
              <p class="animate__animated animate__fadeInUp">"Unleash the beauty of stone on your walls! Radheya's Polygranite sheets redefine luxury, turning your space into a masterpiece."</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Redefine Your Space: The Polygranite Revolution by Radheya Enterprise</h2>
              <p class="animate__animated animate__fadeInUp">"Polygranite sheets that speak volumes. Radheya Enterprise brings you the perfect harmony of design and durability for your walls."</p>
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
    <section id="about" class="about">
      <div class="container">
        <div class="row content">
          <div class="col-lg-6">
            <h2>Radheya Enterprise</h2>
            <h3>"Embark on a journey with Radheya Enterprise, where Polygranite sheets seamlessly blend innovation and elegance to redefine your living spaces."</h3>
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/radhey2.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Welcome to <b>Radheya Enterprise</b>, where innovation meets sophistication in the realm of interior design. We take pride in introducing our exceptional Polygranite sheets, a revolutionary solution to elevate your living spaces. Our Polygranite sheets are not just walls; they are canvases waiting to be adorned with elegance. Crafted with precision and designed for durability, these sheets redefine the concept of luxury within your home or business. Discover the perfect blend of aesthetic appeal and functionality as Radheya brings you a diverse range of Polygranite sheets that transform your walls into timeless masterpieces. Join us in creating a space that reflects your style, personality, and the essence of enduring beauty.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> "Stone Elegance: Unveiling the Beauty of Polygranite Sheets"</li>
              <li><i class="ri-check-double-line"></i> "Beyond Walls: The Artistry of Radheya's Polygranite Masterpieces"</li>
              <li><i class="ri-check-double-line"></i>"Luxury Redefined: Explore the World of Polygranite Elegance"</li>
              <li><i class="ri-check-double-line"></i>"Redefine Your Space: The Polygranite Revolution by Radheya Enterprise"</li>
              <li><i class="ri-check-double-line"></i> "Polygranite Panache: Elevate Your Interiors with Radheya's Signature Sheets"</li>
              <li><i class="ri-check-double-line"></i> "Innovative Walls, Lasting Impressions: Radheya's Polygranite Sheets"</li>
              <li><i class="ri-check-double-line"></i> "Luxury Unveiled: Radheya Enterprise's Polygranite Extravaganza"</li>
            </ul>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="reviews" class="reviews section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Customer Reviews</h2>
          <p>Hear what our customers say about Radheya Enterprise's Polygranite sheets.</p>
        </div>
        @if ($reviews->isEmpty())
          <div class="text-center">
            <p>No reviews yet. Be the first to share your experience!</p>
          </div>
        @else
          <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
              @foreach ($reviews as $review)
                <div class="swiper-slide">
                  <div class="review-card text-center">
                    @if ($review->photo_path)
                      <img src="{{ Storage::url(path: $review->photo_path) }}" class="review-img rounded-circle mb-3" alt="{{ $review->name }}">
                    @else
                      <img src="assets/img/undraw_profile.svg" class="review-img rounded-circle mb-3" alt="{{ $review->name }}">
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

    <section id="submit-review" class="submit-review section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Share Your Experience</h2>
          <p>Tell us about your experience with Radheya Enterprise's Polygranite sheets.</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card shadow animate__animated animate__fadeInUp">
              <div class="card-body p-4">
                @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="photo" class="form-label">Photo (optional)</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/jpeg,image/png,image/jpg">
                    @error('photo')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="rating" class="form-label">Rating <span class="text-danger">*</span></label>
                    <select class="form-select @error('rating') is-invalid @enderror" id="rating" name="rating" required>
                      <option value="" disabled {{ old('rating') ? '' : 'selected' }}>Select a rating</option>
                      <option value="1" {{ old('rating') == '1' ? 'selected' : '' }}>1 Star</option>
                      <option value="2" {{ old('rating') == '2' ? 'selected' : '' }}>2 Stars</option>
                      <option value="3" {{ old('rating') == '3' ? 'selected' : '' }}>3 Stars</option>
                      <option value="4" {{ old('rating') == '4' ? 'selected' : '' }}>4 Stars</option>
                      <option value="5" {{ old('rating') == '5' ? 'selected' : '' }}>5 Stars</option>
                    </select>
                    @error('rating')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="comment" class="form-label">Review <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('comment') is-invalid @enderror" id="comment" name="comment" rows="5" required>{{ old('comment') }}</textarea>
                    @error('comment')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-get-started">Submit Review</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
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

    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
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
            <div class="col-lg-4 col-md-6 portfolio-item {{ $item->filter }}">
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
                <strong>Email:</strong> info@example.com<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
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

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      new Swiper('.reviews-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        autoplay: {
          delay: 5000,
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
