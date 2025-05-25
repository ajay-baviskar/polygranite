<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto" data-aos="fade-down"><a href="{{ url('/') }}">Radheya Enterprise</a></h1>
        
        <nav id="navbar" class="navbar" data-aos="fade-down" data-aos-delay="100">
            <ul>
                <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ url('services') }}" class="{{ request()->is('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ url('portfolio') }}" class="{{ request()->is('portfolio') ? 'active' : '' }}">Polygranite Sheets</a></li>
                <li><a href="{{ url('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
                <li><a href="{{ url('index') }}" class="getstarted {{ request()->is('index') ? 'active' : '' }}">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->

<style>
    /* Header */
    #header {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: background 0.3s ease;
    }

    #header .logo a {
        color: #2c3e50;
        font-size: 1.8rem;
        font-weight: 700;
        transition: color 0.3s ease;
    }

    #header .logo a:hover {
        color: #1cc88a;
    }

    /* Navbar */
    .navbar ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .navbar li {
        margin-left: 20px;
    }

    .navbar a {
        color: #34495e;
        font-size: 1.1rem;
        font-weight: 500;
        padding: 10px 15px;
        transition: color 0.3s ease, transform 0.3s ease;
        position: relative;
    }

    .navbar a:hover {
        color: #1cc88a;
        transform: translateY(-2px);
    }

    .navbar a.active {
        color: #fff;
        background: linear-gradient(45deg, #4e73df, #1cc88a);
        border-radius: 20px;
        padding: 8px 15px;
    }

    .navbar a.active::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 2px;
        background: #1cc88a;
    }

    .navbar .getstarted {
        background: linear-gradient(45deg, #4e73df, #1cc88a);
        color: #fff;
        padding: 8px 20px;
        border-radius: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .navbar .getstarted:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .navbar .getstarted.active {
        background: #2c3e50;
        color: #fff;
    }

    .mobile-nav-toggle {
        color: #34495e;
        font-size: 1.5rem;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .mobile-nav-toggle:hover {
        color: #1cc88a;
    }

    /* Mobile Responsive */
    @media (max-width: 991px) {
        .navbar ul {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 60px;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        .navbar.mobile-active ul {
            display: flex;
        }

        .navbar li {
            margin: 10px 0;
        }

        .mobile-nav-toggle {
            display: block;
        }
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // GSAP Animation for Navbar Items
        gsap.from('#navbar li', {
            opacity: 0,
            y: -20,
            duration: 0.8,
            stagger: 0.1,
            delay: 0.5,
            ease: 'power2.out'
        });

        // Mobile Navigation Toggle
        const toggle = document.querySelector('.mobile-nav-toggle');
        const navbar = document.querySelector('#navbar');
        toggle.addEventListener('click', function () {
            navbar.classList.toggle('mobile-active');
            toggle.classList.toggle('bi-list');
            toggle.classList.toggle('bi-x');
        });
    });
</script>