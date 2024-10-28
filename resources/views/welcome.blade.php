<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .slider {
            position: relative;
            height: 400px;
            overflow: hidden;
        }
        .slide {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
            color: white;
            padding: 20px;
            background-size: cover;
            background-position: center;
        }
        .slide.active {
            display: block;
        }
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: white;
            font-size: 2em;
            cursor: pointer;
        }
        .prev {
            left: 10px;
        }
        .next {
            right: 10px;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <h1>Inventory System</h1>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#contact">Contact</a></li>
                @if (Auth::check())
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            </ul>
        </div>
    </nav>

    <!-- Slider Section -->
    <header class="slider">
        <div class="slide active" style="background-image: url('https://via.placeholder.com/1200x400?text=Manage+Your+Inventory');">
            <h1>Manage Your Inventory Effectively</h1>
            <p>Keep track of your products with ease!</p>
        </div>
        <div class="slide" style="background-image: url('https://via.placeholder.com/1200x400?text=Real-Time+Tracking');">
            <h1>Real-Time Tracking</h1>
            <p>Get updates as they happen.</p>
        </div>
        <div class="slide" style="background-image: url('https://via.placeholder.com/1200x400?text=Boost+Your+Efficiency');">
            <h1>Boost Your Efficiency</h1>
            <p>Optimize your workflow today!</p>
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </header>

    <!-- About Section -->
    <section class="about" id="about">
        <h2>About Us</h2>
        <p>Our inventory management system is designed to simplify your inventory process and enhance your business operations.</p>
        <img src="https://via.placeholder.com/600x300?text=About+Our+System" alt="About Our System" />
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="pricing">
        <h2>Pricing Plans</h2>
        <div class="pricing-plan">
            <h3>Basic</h3>
            <p>$19/month</p>
            <p>Basic inventory management features.</p>
            <button>Choose Plan</button>
        </div>
        <div class="pricing-plan">
            <h3>Standard</h3>
            <p>$39/month</p>
            <p>Includes advanced features and support.</p>
            <button>Choose Plan</button>
        </div>
        <div class="pricing-plan">
            <h3>Premium</h3>
            <p>$59/month</p>
            <p>All features plus priority support.</p>
            <button>Choose Plan</button>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>What Our Users Say</h2>
        <blockquote>
            <p>"This system has transformed our inventory management!"</p>
            <footer>- Satisfied Customer</footer>
        </blockquote>
        <img src="https://via.placeholder.com/600x300?text=Testimonials" alt="Testimonials" />
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <form id="contactForm" action="#">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Inventory Management System. All rights reserved.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            const slides = document.querySelectorAll(".slide");
            slides.forEach((slide, index) => {
                slide.style.display = index === slideIndex ? "block" : "none";
            });
        }

        function changeSlide(n) {
            const slides = document.querySelectorAll(".slide");
            slideIndex = (slideIndex + n + slides.length) % slides.length;
            showSlides();
        }
    </script>
</body>
</html>
