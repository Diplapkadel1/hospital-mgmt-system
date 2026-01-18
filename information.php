<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Information | Helping Hand Hospital</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css"> <!-- Shared Header/Footer Styles -->
    <link rel="stylesheet" href="information.css"> <!-- Specific Content Styles -->
</head>
<body>
    <!-- Top Contact Bar -->
    <div class="top-bar">
        <div class="container">
            <span>📍 123 Healthcare Way, Medical District</span>
            <span>📞 Emergency: (555) 012-3456</span>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <div class="container header-flex">
            <div class="logo">
                <span class="icon">🏥</span> Helping Hand <span class="bold">Hospital</span>
            </div>
            <nav id="nav-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="information.php" class="active">Hospital Information</a></li>
                    <li><a href="general_form.php">General Form</a></li>
                    <li><a href="disability_form.php">Disability Form</a></li>
                    <li><a href="#" class="btn-emergency">Emergency</a></li>
                </ul>
            </nav>
            <button id="toggleNav" class="mobile-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <main>
        <!-- About Section -->
        <section class="info-hero">
            <div class="container">
                <h1>Hospital Information</h1>
                <p class="lead">Helping Hand Hospital is a state-of-the-art healthcare facility offering a wide range of medical services. Our team of experienced doctors, nurses, and support staff are dedicated to providing the highest quality of care.</p>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-title">
                    <h2>Our Specialized Services</h2>
                    <div class="underline"></div>
                </div>
                
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">🚑</div>
                        <h3>Emergency Care</h3>
                        <p>24/7 rapid response for critical health situations with expert trauma teams.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">✂️</div>
                        <h3>Surgery</h3>
                        <p>Modern operating theaters equipped for minimally invasive and complex surgeries.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">👶</div>
                        <h3>Maternity Care</h3>
                        <p>Comprehensive prenatal, delivery, and postnatal care for mother and baby.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">🧸</div>
                        <h3>Pediatrics</h3>
                        <p>Specialized healthcare dedicated to the physical and emotional well-being of children.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">❤️</div>
                        <h3>Cardiology</h3>
                        <p>Advanced heart health diagnostics, treatment, and rehabilitation programs.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">🧠</div>
                        <h3>Neurology</h3>
                        <p>Expert diagnosis and treatment for disorders of the nervous system.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-box">
                    <div class="contact-info">
                        <h2>Contact Us</h2>
                        <p><strong>📍 Address:</strong> 123 Health St, Wellness City, Medical District</p>
                        <p><strong>📞 Phone:</strong> (123) 456-7890</p>
                        <p><strong>✉️ Email:</strong> info@helpinghandhospital.com</p>
                        <p><strong>⏰ Hours:</strong> Open 24 Hours / 7 Days a week</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; 2024 Helping Hand Hospital. All rights reserved.</p>
        </div>
    </footer>

    <script src="home.js"></script>
</body>
</html>