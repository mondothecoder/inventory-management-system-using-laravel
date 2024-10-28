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

// Form submission handling (for demonstration, replace with actual handling)
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Message sent!');
});