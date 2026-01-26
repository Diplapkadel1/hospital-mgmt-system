document.addEventListener('DOMContentLoaded', () => {
    
    // 1. ACTIVE PAGE DETECTION (For Desktop and Mobile)
    const currentPath = window.location.pathname.split("/").pop() || "index.php";
    
    // Desktop Active State
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        if(link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });

    // Mobile Active State (The jumping icon logic)
    const tabItems = document.querySelectorAll('.tab-item');
    tabItems.forEach(item => {
        if(item.getAttribute('data-path') === currentPath) {
            item.classList.add('active');
        }
    });

    // 2. SCROLL REVEAL ANIMATION FOR GALLERY
    const observerOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
                observer.unobserve(entry.target); // Only animate once
            }
        });
    }, observerOptions);

    const galleryItems = document.querySelectorAll('.gallery-item');
    galleryItems.forEach((item, index) => {
        item.style.opacity = "0";
        item.style.transform = "translateY(50px)";
        item.style.transition = `all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1) ${index * 0.1}s`;
        observer.observe(item);
    });

    // 3. LOGO CLICK ANIMATION
    const logo = document.querySelector('.logo');
    logo.addEventListener('mouseenter', () => {
        logo.style.transition = "0.3s";
        logo.style.transform = "scale(1.05)";
    });
    logo.addEventListener('mouseleave', () => {
        logo.style.transform = "scale(1)";
    });
});
