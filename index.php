<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helping Hand Hospital | Official Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
</head>
<body>

    <!-- This one line loads the Top bar, Desktop Header, AND the Mobile Bottom Nav -->
    <?php include 'navbar.php'; ?>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-text">
                    <h1>Your Health, <br><span class="highlight">Our Priority.</span></h1>
                    <p>Providing world-class healthcare with a personal touch. Our specialists are here for you 24/7.</p>
                    <div class="hero-btns">
                        <a href="general_form.php" class="btn-primary">Book Appointment</a>
                        <a href="information.php" class="btn-outline">Our Services</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-container">
            <div class="container">
                <div class="section-header">
                    <h2>Our Modern Facilities</h2>
                    <p>Experience healthcare in a comfortable, high-tech environment.</p>
                </div>
                
                <div class="image-gallery">
                    <div class="gallery-item large">
                        <img src="image/photo1.jpg" alt="Modern Ward">
                        <div class="gallery-overlay"><span>In-Patient Wards</span></div>
                    </div>
                    <div class="gallery-item">
                        <img src="image/photo2.jpg" alt="Surgery">
                        <div class="gallery-overlay"><span>Operation Theater</span></div>
                    </div>
                    <div class="gallery-item">
                        <img src="image/photo3.jpg" alt="Lab">
                        <div class="gallery-overlay"><span>Diagnostic Lab</span></div>
                    </div>
                    <div class="gallery-item wide">
                        <img src="image/photo4.jpg" alt="Clinic">
                        <div class="gallery-overlay"><span>Out-Patient Clinic</span></div>
                    </div>
                    <div class="gallery-item">
                        <img src="image/photo5.jpg" alt="Care">
                        <div class="gallery-overlay"><span>Emergency Unit</span></div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3>Helping Hand</h3>
                    <p>Leading the way in medical excellence and compassionate community care since 1990.</p>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="information.php">About Us</a></li>
                        <li><a href="general_form.php">Patient Registration</a></li>
                        <li><a href="disability_form.php">Specialized Care</a></li>
                        <li><a href="admin_panel.php">Staff Login (Admin)</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Helping Hand Hospital. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="home.js"></script>
</body>
</html>
