document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('toggleNav');
    const navMenu = document.getElementById('nav-menu');

    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            // Animate Hamburger to X
            toggleBtn.classList.toggle('open');
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!navMenu.contains(e.target) && !toggleBtn.contains(e.target)) {
            navMenu.classList.remove('active');
        }
    });

    // Intersection Observer for scroll animations (Optional but professional)
    const observerOptions = { threshold: 0.2 };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
            }
        });
    }, observerOptions);

    document.querySelectorAll('.gallery-item').forEach(item => {
        item.style.opacity = "0";
        item.style.transform = "translateY(30px)";
        item.style.transition = "all 0.6s ease-out";
        observer.observe(item);
    });
});