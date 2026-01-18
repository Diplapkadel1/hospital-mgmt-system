<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disability Services Form | Helping Hand Hospital</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css"> <!-- Shared professional header/footer -->
    <link rel="stylesheet" href="disability.css"> <!-- Specific form styles -->
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
                    <li><a href="information.php">Hospital Information</a></li>
                    <li><a href="general_form.php">General Form</a></li>
                    <li><a href="disability_form.php" class="active">Disability Form</a></li>
                    <li><a href="#" class="btn-emergency">Emergency</a></li>
                </ul>
            </nav>
            <button id="toggleNav" class="mobile-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <main class="form-page">
        <div class="container">
            <div class="form-card">
                <div class="form-header">
                    <div class="form-badge">Specialized Care</div>
                    <h2>Disability Support Registry</h2>
                    <p>Register for specialized assistance and medical support services.</p>
                </div>

                <form action="submit_disability.php" method="POST" id="disabilityForm" onsubmit="return validateDisabilityForm()">
                    
                    <div class="form-section-title">Personal Information</div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" id="age" name="age" placeholder="Ex: 30" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contact_number">Primary Contact Number</label>
                        <input type="text" id="contact_number" name="contact_number" placeholder="98XXXXXXXX" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Full Residential Address</label>
                        <textarea id="address" name="address" rows="2" placeholder="House No, Street, City..." required></textarea>
                    </div>

                    <div class="form-section-title">Disability Details</div>
                    <div class="form-group">
                        <label for="disability_details">Nature of Disability & Required Assistance</label>
                        <textarea id="disability_details" name="disability_details" rows="5" placeholder="Please describe the nature of your disability and any specific medical requirements or accessibility needs..." required></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-submit">Submit Registry</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; 2024 Helping Hand Hospital. All rights reserved.</p>
        </div>
    </footer>

    <!-- Integrated fixed JS -->
    <script src="home.js"></script>
    <script>
        function validateDisabilityForm() {
            const phone = document.getElementById('contact_number').value.trim();
            const age = parseInt(document.getElementById('age').value);
            
            const phoneRegex = /^(97|98)\d{8}$/;
            if (!phoneRegex.test(phone)) {
                alert("Please enter a valid phone number (starting 97/98).");
                return false;
            }

            if (isNaN(age) || age <= 0 || age > 120) {
                alert("Please enter a valid age.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>